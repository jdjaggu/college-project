<?php
session_start();
include ('connection.php');
$error = array();

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = trim($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $dob_persistence = $_POST['dob'];
    $dob = date('d-m-Y', strtotime($_POST['dob']));
    $role = "customer";
    $token = md5(rand());
    $status = 0;
    $passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$/';
    
    if (isset($_POST['gender'])) {
        $gender = trim($_POST['gender']);
    }

    if (isset($_POST['terms'])) {
        $terms = trim($_POST['terms']);
    }

    //validation start
    //username
    if (empty($username)) {
        $error['userErr'] = "Username can not be empty";
    }  
    else if (strlen($username) < 6) {
        $error['userErr'] = "Length must be greater than 6";
    }
    
    else if (strlen($username) >= 6) {
        $username_query = oci_parse($connection, "SELECT * FROM USER_DETAIL WHERE USER_USERNAME = '$username'");
        oci_execute($username_query);
        if(($row = oci_fetch_array($username_query, OCI_BOTH)) != false) {
            $error['userErr'] = "Username already exist";
        }
    }

    //password
    if (empty($password)) {
        $error['passErr'] = "Password can not be empty";
    }
    else if (!preg_match($passwordPattern, $password)) {
        $error['passErr'] = "Invalid Password (atleast one A-Z, a-z, 0-9, >6)";
    } 

    //confirm password
    if(!empty($password)) {
        if (empty($confirmPassword)) {
            $error['cpassErr'] = "Please re-type your password";
        }
    }
    else {
        if (empty($confirmPassword)) {
            $error['cpassErr'] = "This field can not be empty";
        }
        else if ($password != $confirmPassword) {
            $error['cpassErr'] = "Password does not match";
        }
    }

    //email
    if (empty($email)) {
        $error['emailErr'] = "email can not be empty";
    } 
    else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_query = oci_parse($connection, "SELECT User_Email FROM USER_DETAIL WHERE User_Email = '$email'");
        oci_execute($email_query);
        if (($row = oci_fetch_array($email_query, OCI_BOTH)) != false) {
            $error['emailErr'] = "This email already exists";
        }
    }  

    //fname
    if (empty($fname)) {
        $error['fnameErr'] = "First name can not be empty";
    }

    //lname
    if (empty($lname)) {
        $error['lnameErr'] = "Last name can not be empty";
    }

    //date of birth
    if (empty($dob_persistence)) {
        $error['dobErr'] = "Please select your date of birth";
    } 
    else if ($dob <= date('d-m-Y')) {
        $error['dobErr'] = "Your date of birth can not equal or exceed today's date";
    }

    //gender
    if (empty($gender)) {
        $error['genderErr'] = "Please select your gender";
    }

    //terms
    if (empty($terms)) {
        $error['termsErr'] = "You must agree to terms and condition";
    }

    if (count($error) == 0) {
        $password = md5($password);                       
        $query = oci_parse($connection, "INSERT INTO USER_DETAIL(User_ID, User_username, User_Password, User_Email, User_First_Name, User_Last_Name, User_DOB, User_Gender, User_Role, User_Status, User_Token) VALUES(seq_user_id.NEXTVAL, :username, :pass, :email, :fname, :lname, to_date(:dob, 'dd-mm-yy'), :gender, :rol, :status_bv, :token)");

        oci_bind_by_name($query, ':username', $username);
        oci_bind_by_name($query, ':pass', $password);
        oci_bind_by_name($query, ':email', $email);
        oci_bind_by_name($query, ':fname', $fname);
        oci_bind_by_name($query, ':lname', $lname);
        oci_bind_by_name($query, ':dob', $dob);
        oci_bind_by_name($query, ':gender', $gender);
        oci_bind_by_name($query, ':rol', $role);
        oci_bind_by_name($query, ':status_bv', $status);
        oci_bind_by_name($query, ':token', $token);

        if(oci_execute($query)){
            include "_verify_customer_email.php";
            $_SESSION['message'] = "Customer registered Successfully! Please check your email for verification";
            header("location: signin.php");
        }
        
        oci_commit($connection);
        oci_free_statement($query);
        oci_close($connection);
    }
}
?>