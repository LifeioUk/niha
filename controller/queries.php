<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['queries'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $stmt = $admin->cud("INSERT INTO `queries`( `name`, `email`, `subject`, `message`, `status`, `a_date`) VALUES ('$name','$email','$subject','$message','NEW',NOW())", "successful");
    if ($stmt){
     echo "<script> alert('Query Sent Successfully');window.location.href='../index.php'; </script>";
    }else{
        echo "<script> alert('Something Went Wrong');window.location.href='../index.php'; </script>";
    }
}
?>
