<?php
 require_once("../config.php");
 
 if(isset($_POST['removep']))
 {
    $nameee=$_POST['remove'];
    $connection = new PDO( $dsn,$dbuser,$dbuserpassword );
$sql="DELETE FROM `proudects` WHERE name='$nameee' ";
$statement=$connection->prepare($sql);
$statement->execute(); 
header("location:../remove.php");
 }