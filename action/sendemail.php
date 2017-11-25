<?php
require_once("../wp-load.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$name = $_POST['name'];
$sub='Order query';
//echo "ddsdsds";
//exit;
if(wp_mail('taniapaul158@gmail.com',$sub , $message)){
    return 1;
}else{
    return 0;
}
