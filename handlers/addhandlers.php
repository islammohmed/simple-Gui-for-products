
 
<?php
 
 require_once("../config.php");
 require_once("../add.php");
 require_once("../function.php");
 require_once("../validation.php");
 $errors=[];
 
 
    $name=saitizeinput($_POST["addn"]) ; 
 
 
    $quantity=saitizeinput($_POST["addq"]);
 
 
    $price =saitizeinput($_POST["addp"]);


    if(!requiredvalue($name))
{
    $errors[]='Plese Enter Name of Proudect';
}
if(!requiredvalue( $quantity))
{
    $errors[]='Plese Enter quantity';
}
if(!requiredvalue($price))
{
    $errors[]='Plese Enter price';
}
  
 if(empty($errors))
 {
$connection = new PDO( $dsn,$dbuser,$dbuserpassword );
$sql="INSERT INTO `proudects`(`name`, `Quantity`, `price`) VALUES ('$name','$quantity','$price')";
$statement=$connection->prepare($sql);
$statement->execute(); 
  header("location:../main.php"); 
 }
 else
 {
    $_SESSION['errors']=$errors;
    header("location:../add.php");
    die;

 }
 ?>

