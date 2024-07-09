<?php
session_start();

include "connection.php";
$error = array();
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = trim($_POST['message']);

    if (empty($name)) {
        $error['name'] = "Please enter your full name";
    }

    if (empty($email)) {
        $error['email'] = "Please enter your email";
    }
    else if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $error['email'] = "Please enter the valid email";
    }

    if (empty($message)) {
        $error['message'] = "Please enter the message";
    }

    if (count($error) == 0) {
        $query = oci_parse($connection, "INSERT INTO CONTACT_US VALUES(seq_contactus_id.NEXTVAL, :name_bv, :email, :message_bv)");
        
        oci_bind_by_name($query, ':name_bv', $name);
        oci_bind_by_name($query, ':email', $email);
        oci_bind_by_name($query, ':message_bv', $message);

        if (oci_execute($query)) {
            $_SESSION['message'] = "Message sent!";
        }
    }
}
?>