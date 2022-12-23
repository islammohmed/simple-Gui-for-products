
<?php require_once("config.php");?>
<!doctype html>
<html lang="en">
<div class="container">
<div class="row">
<div class="col-8 mx-auto my-5">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GUI PROJECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <form action="add.php" method="POST" class="border p-3"> 
  <div class="form-group p2 my-1" href="add.php">
    <label for="add" >ADD YOUR PRODUCT</label>
    <input type="submit" name="ADD" value ="ADD"class="form-control" id="add" >
    </div>
</form>
<form action="remove.php" method="POST" class="border p-3"> 
    <div class="form-group p2 my-1" href="remove.php">
    <label for="remove" >REMOVE PRODUCT</label>
    <input type="submit" name="ADD" value ="REMOVE" class="form-control" id="add" >
    </div>
</form>
<form action="search.php" method="POST" class="border p-3"> 
    <div class="form-group p2 my-1" href="search.php">
    <label for="search" >SEARCH FOR PRODUCT</label>
    <input type="submit" name="search" value ="SEARCH"class="form-control" id="add" >
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>