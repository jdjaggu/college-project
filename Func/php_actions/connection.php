<?php
$connection = oci_connect('Aprameya','HelloWorld69','//localhost/XE');
if (!$connection) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
} 
?>