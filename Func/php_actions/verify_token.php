<?php
session_start();
include('connection.php');
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM USER_DETAIL WHERE USER_TOKEN = '$token'";
    $query = oci_parse($connection, $sql);
    oci_execute($query, OCI_NO_AUTO_COMMIT);
    while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {

        if ($row['USER_STATUS'] == 0 && $row['USER_TOKEN'] == $token) {
            $userid = intval($row['USER_ID']);
            $clicked_token = $row['USER_TOKEN'];
            $update_query = oci_parse($connection, "UPDATE USER_DETAIL SET USER_STATUS=1 WHERE USER_TOKEN = :token_bv");
            //binding token_bn variable 
            oci_bind_by_name($update_query, ':token_bv', $clicked_token);

            //executing the query
            if (oci_execute($update_query)) {                
                date_default_timezone_set('Asia/Kathmandu');
                $date = date("d-m-Y");

                $insert_customer_query = oci_parse($connection, "INSERT INTO CUSTOMER VALUES(:userid, to_date(:date_bv, 'dd-mm-yy'))");
                oci_bind_by_name($insert_customer_query, ':userid', $userid);
                oci_bind_by_name($insert_customer_query, ':date_bv', $date);
                if (oci_execute($insert_customer_query)) {

                    $insert_cart_query = oci_parse($connection, "INSERT INTO CART(CART_ID, FK1_USER_ID) VALUES($userid, $userid)");
                    if(oci_execute($insert_cart_query)){

                        $_SESSION['message'] = 'Your account has been Verified Successfully!';
                        header("Location: ../signin.php");
                        exit(0);
                    }
                }
            } else {
                $_SESSION['message'] = 'Verification failed';
                header("Location: ../signin.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = 'Email Already Verified. Please Login';
            header("Location: ../signin.php");
            exit(0);
        }
    }
}