<?php 
$secret="usjfshfhsjffsjdffufnwefhuddh";
if($_GET['secret']  != $secret){
    echo "error";
    return;
}
$to="ntoh.zidane@yahoo.com";
$subject="payment recieved";
$body="another transaction done";

$headers="From: sale on bitmomo";
$mail=mail($to,$subject,$body,$headers);
if($mail){
    echo "*ok*";
}
?>