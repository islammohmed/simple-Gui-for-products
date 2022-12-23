
<?php
 require_once("config.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Search for Product </title>
<style>
body {
background: white;
font-family: fantasy;
}
h1 {
color: black;
text-align: center;
}
.main {
border: solid 2px brown;
font-size: 28px;
color: maroon;
width: 600px;
margin: 150px;
}
.searchTop {
width: 100%;
display: flex;
position: relative;
}
.searchBar {
width: 100%;
border: 3px solid navy;
height: 20px;
border-radius: 5px 0 0 5px;
border-right: none;
padding: 5px;
outline: none;
color: green;
}
.searchBar:focus {
color: purple;
}
.searchButton {
width: 40px;
height: 36px;
font-size: 20px;
text-align: center;
color: white;
border: 1px solid gray;
border-radius: 0 5px 5px 0;
cursor: pointer;
background: gray;
border-radius: 0 5px 5px 0;
cursor: pointer;
}
.topDiv {
width: 30%;
top: 15%;
left: 50%;
transform: translate(-50%, -50%);
position: absolute;
left: 50%;
transform: translate(-50%, -50%);
}
</style>
</head>
<body>
<h1>Search for Product</h1>
<form action="handlers/searchhand.php" method="POST">
<div class="topDiv">
<div class="searchTop">
<input type="text" class="searchBar" name="namep"
placeholder="Enter product for search ">
<button type="submit" name ="submit" class="searchButton">
</button>
 

</div>
</div>
</table>
</form>
</body>
</html>