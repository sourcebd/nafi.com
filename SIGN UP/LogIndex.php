<?php
session_start(); 
if(empty($_SESSION["fname"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
</head>
<style>
div#PageoneBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto; text-align:center}
body{background-image: url('G.jpg'); background-repeat:no-repeat; background-size:cover; color:orange;}
</style>

<body>

<h6 style="font-size:10px; font-family: verdana; color: white"><?php include 'Header/header.php';?></h6>

<div id="PageoneBlock">
<h1 style="color: #00E9FF; font-family: calibri">Home</h1>
<style>
h3{color:lightgreen}
h5{color:#00E9FF}
h6{color:white}
</style>

<h2 style="color:white">Welcome </h2> <h2 style="color:red"><?php echo  $_SESSION["fname"] . " " . $_SESSION["lname"]; ?><br></h2>
<?php
  echo "<h3>Password:</h3>";
  echo $_SESSION["password"];
?><br>

<h2 style="color: #B6FF00"><marquee direction=left>Do you want to</marquee> <a href="logout.php" style= "color:#00E9FF; font-family:calibri">Log Out</a></h2>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include 'Footer/footer.php';?></h6>

</div>
</body>
</html>


