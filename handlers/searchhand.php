
<?php
 require_once("../config.php");
 
?>  <?php 
if(isset($_POST['submit'])) :
$namee=$_POST['namep'];

  $connection = new PDO( $dsn,$dbuser,$dbuserpassword );
  $sql="SELECT  `name`, `Quantity`, `price` FROM `proudects` WHERE name='$namee' ";
  $statement=$connection->prepare($sql);
  $statement->execute();
  $result = $statement->fetchALL();  
  endif ;
 
  foreach($result as $row):
  ?> 
  <style>
  .tb { border-collapse: collapse; }
  .tb th, .tb td { padding: 5px; border: solid 1px #777; }
  .tb th { background-color: lightblue; }
  .tb th .tb td {text-align: center;}
  
</style>
 <table class="tb" style="width:300px;">
<tr>
<th> NAME </th>
<th> QUNTITY</th>
<th> PRICE </th>
</tr>
<tr>
<td> <?php echo $row['name'] ;?></td>
<td><?php echo $row['Quantity'] ;?> </td>
<td> <?php echo $row['price'];?></td>
</tr>

<?php endforeach ?>
</table>

