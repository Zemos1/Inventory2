<?php
session_start();
require 'dbconyuji-bundle.php';

if(isset($_POST['save_info']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']); 
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $cod = mysqli_real_escape_string($con, $_POST['cod']);

    $query = "INSERT INTO `yuji-bundle` (name, address, phone, email, cod) VALUES 
        ('$name','$address','$phone','$email','$cod')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message']= "Payment Successful";
        header("Location: yuji-bundle-checkout.php");
        exit(0);
    } else
    {
        $_SESSION['message']= "Payment Unsuccessful";
        header("Location: yuji-bundle-checkout.php");
        exit(0);
    }
}

?>