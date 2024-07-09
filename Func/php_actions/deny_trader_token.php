<?php
session_start();
include('connection.php');
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM USER_DETAIL WHERE USER_TOKEN = '$token'";
    $query = oci_parse($conn, $sql);
    oci_execute($query, OCI_NO_AUTO_COMMIT);
    while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
        $email = $row['USER_EMAIL'];
        $username = $row['USER_USERNAME'];
        if ($row['USER_STATUS'] == 0 && $row['USER_TOKEN'] == $token) {
            $clicked_token = $row['USER_TOKEN'];
            $update_query = oci_parse($conn, "UPDATE USER_DETAIL SET USER_STATUS=0 WHERE USER_TOKEN = :token_bv");
            //binding token_bn variable 
            oci_bind_by_name($update_query, ':token_bv', $clicked_token);

            //executing the query
            if (oci_execute($update_query)) {
                echo "Trader denied";
                include "_trader_deny_email.php";
                exit(0);
            } else {
                echo 'Trader approved!';
                exit(0);
            }
        } else {
            echo 'Email Already Verified.';
            exit(0);
        }
    }
}