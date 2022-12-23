<?php 
 
require_once('config.php');?>
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
    
  <div class="container">
<div class="row">
<div class="col-8 mx-auto my-5">
<h2 class="border p-2 my-2 text-center">Add product</h2>
 <?php 
 if(isset($_SESSION['errors'])):
 foreach($_SESSION['errors'] as $error): ?>
        <div class="alert alert-danger text-Center">
      <?php echo $error;?>
        </div>
 <?php endforeach;
  endif;
  unset($_SESSION['errors']) 
  ?>
  <form action='handlers/addhandlers.php' method="POST" class="border p-3"> 
  <div class="form-group p2 my-1">
    <label for="add" >Add Name of Product</label>
    <input type="text" name="addn" value =" "class="form-control" id="add" >
    </div>
    <div class="form-group p2 my-1">
    <label for=" Add " > Add The Quantity</label>
    <input type="text" name="addq" value =" " class="form-control" id="quantity" >
    </div>
    <div class="form-group p2 my-1">
    <label for="price" >Add Price</label>
    <input type="text" name="addp" value =" "class="form-control" id="price" >
    </div>
    <div class="form-group p2 my-1"  >
    <input type="submit" name="insert" value ="Insert"class="form-control" id="insert" > </div>
 
</form>
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>