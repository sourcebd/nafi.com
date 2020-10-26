<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<style>
div#LoginBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto;}
body{background-image: url('G.jpg'); background-repeat:no-repeat; background-size:cover}
</style>
<body>

<div id="LoginBlock">

<div style="background-image: url('F2.jpg');color:black; padding:20px;">

<div style="background-color: #0A0F48;color:#00E9FF; padding:0px;">

<?php
$fname = $lname = $password = "";
$fnameError = "";
$lnameError = "";
$passwordError = "";
$printfname = "";
$printlname = "";
$printpassword = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $password = test_input($_POST["password"]);
  if (empty($fname) || (!preg_match("/^[a-zA-Z-' ]*$/",$fname)))
  {
    $fnameError = "<p style ='color:red'>Please enter your First Name!</p>";
  }
  else
  {
    $printfname = $fname;
  }

  if (empty($lname)||(!preg_match("/^[a-zA-Z-' ]*$/",$lname)))
  {
    $lnameError = "<p style ='color:red'>Please enter your Last Name!</p>";
  }
  else
  {
   $printlname = $lname;
  }

  if (empty($password))
  {
    $passwordError = "<p style ='color:red'>Please make your Password!</p>";
  }
  else
  {
   $printpassword = $password;
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</div>

<div style="background-color:#0A0F48;color:#00E9FF;padding:0px;font-family:calibri">
<h1>Login Form</h1>
</div>
<b>
<div style="background-image: url('F1.jpg');color:#B6FF00;padding:1px;">
<h2><marquee direction=left>Get Access to your Account now!</marquee></h2>
</div>
<div style="background-image: url('F1.jpg');color:#00FFA8;padding:20px;font-size:18px">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
  <Label>First Name:</label><br> <?php echo $fnameError;?>
  <input type="text" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php echo $lnameError;?>
  <input type="text" name="lname" ><br><br>
  <Label>Password:</Label><br> <?php echo $passwordError;?>
  <input type="password" name="password" ><br><br>
  <input type="submit" value="Submit">

  <style>
h4{color:red}
h5{color:#00E9FF}
</style>
  <?php
  if (!(empty($fname)||(!preg_match("/^[a-zA-Z-' ]*$/",$fname))))
  {
    echo "<h4 style='color:orange'>Your Input:</h4>";
    echo "<h4>First Name:</h4>";
    echo  "<h5>$printfname</h5>";
  }

  if (!(empty($lname)||(!preg_match("/^[a-zA-Z-' ]*$/",$lname))))
  {
    echo "<h4>Last Name:</h4>";
    echo  "<h5>$printlname</h5>";
  }

  if (!(empty($password)))
  {
    echo "<h4>Password:</h4>";
    echo  "<h5>$printpassword</h5>";
  }
?>

</form>
<br>
<a href="http://nafi.epizy.com/Registration.php" style= "color:#00E9FF; font-family:calibri">Registration Form</a>
</div>
</b>

</div>
</body>
</html>