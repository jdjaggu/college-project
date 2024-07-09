<?php
session_start();
include "connection.php";
$error = array();
$reset_error = array();

// if (isset($_POST['newcustomer'])) {
//     header("location: ./customer-reg.php");
// }

if (isset($_POST['newtrader'])) {
    header("location: ./trader-reg.php");
}

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    //validation start
    //username
    if (empty($username)) {
        $error['userErr'] = "Username is blank";
    }

    //password
    if (empty($password)) {
        $error['passErr'] = "Password is blank";
    }

    //role
    if ($role == "select") {
        $error['roleErr'] = "Select your role";
    }

    if (count($error) == 0) {
        $enc_pass = md5($_POST['password']);
        //SQL part
        $username_query = oci_parse($connection, "SELECT * FROM USER_DETAIL WHERE USER_USERNAME = '$username' AND USER_ROLE = '$role'");
        oci_execute($username_query);
        
        if(($row = oci_fetch_array($username_query, OCI_BOTH)) != false) {
            if ($row['USER_STATUS'] == 1) {                
                if($role != 'admin') {
                    $query = oci_parse($connection, "SELECT * FROM USER_DETAIL WHERE USER_USERNAME = '$username' AND USER_PASSWORD = '$enc_pass' AND USER_ROLE = '$role'");
                    oci_execute($query);

                    if (($row = oci_fetch_array($query, OCI_BOTH)) != false) { 
                        if ($row['USER_STATUS'] == 1) {
                            $_SESSION['current_user_id'] = $row['USER_ID'];
                            $_SESSION['fname'] = $row['USER_FIRST_NAME'];
                            $_SESSION['lname'] = $row['USER_LAST_NAME'];
                            $_SESSION['address'] = $row['USER_ADDRESS'];
                            $_SESSION['email'] = $row['USER_EMAIL'];
                            $_SESSION['phone'] = $row['USER_PHONE_NUMBER'];
                            $_SESSION['uname'] = $row['USER_USERNAME'];
                            $_SESSION['age'] = $row['USER_DOB'];
                            $_SESSION['gender'] = $row['USER_GENDER'];

                            header("location: ../".$role."_homepage.php");
                        }                     
                        else {
                            $error['signinErr'] = "username not verified";
                        }
                    } 
                    else {
                        $error['signinErr'] = "Invalid password for $username";
                    }  
                }
                else {
                    $query = oci_parse($connection, "SELECT * FROM USER_DETAIL WHERE USER_USERNAME = '$username' AND USER_PASSWORD = '$password' AND USER_ROLE = '$role'");
                    oci_execute($query);

                    if (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
                        if ($row['USER_STATUS'] == 1) {
                            header("location: ../". $role. "_homepage.php");
                        } 
                        else {
                            $error['signinErr'] = "username not verified";
                        }
                    } 
                    else {
                        $error['signinErr'] = "Invalid password for $username";
                    }  
                }
            } 
            else {
                $error['signinErr'] = "username not verified";
            }
        } 
        else {
            $error['signinErr'] = "Invalid username for $role";
        }
    } 
}

//forget password
if (isset($_POST['reset-pass-submit'])) {
    $email = trim($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    if (!empty($email)) {

        $forget_pass_query = oci_parse($connection, "SELECT * FROM USER_DETAIL WHERE USER_EMAIL = '$email'");
        oci_execute($forget_pass_query);

        if (($row = oci_fetch_array($forget_pass_query, OCI_BOTH)) != false) {
            if ($row['USER_STATUS'] == 1) { 
                $token = $row['USER_TOKEN'];
                include "_reset_password_email.php";
                $_SESSION['message'] = "Reset Email Sent!";
                header("location: signin.php"); 
            }
            else {
                $_SESSION['reset-msg'] = "Email is not verified";
            }
        }
        else {
            $_SESSION['reset-msg'] = "Email is not regestered";
        }
    } 
    else {
        $_SESSION['reset-msg'] = "Please enter the email field";
    }
}
?>