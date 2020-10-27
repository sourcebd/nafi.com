<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<style>
div#RegistrationBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto;}
body{background-image: url('G.jpg'); background-repeat:no-repeat; background-size:cover}
</style>
<body>

<div id="RegistrationBlock">

<div style="background-image: url('F2.jpg');color:black; padding:20px;">

<div style="background-color: #0A0F48;color:#00E9FF; padding:0px;">

<?php
$fname = $lname = $password = $gender = $profession = $date = "";
$fnameError = "";
$lnameError = "";
$passwordError = "";
$genderError = "";
$professionError = "";
$dateError = "";
$printfname = "";
$printlname = "";
$printpassword = "";
$printgender= "";
$printprofession = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $password = test_input($_POST["password"]);
  $gender = test_input($_POST["gender"]);
  $profession = test_input($_POST["profession"]);
  $date = test_input($_POST["date"]);
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

  if (empty($gender))
  {
    $genderError = "<p style ='color:red'>Please select your Gender!</p>";
  }
  else
  {
   $printgender = $gender;
  }

  if (empty($profession))
  {
    $professionError = "<p style ='color:red'>Please select your Profession!</p>";
  }
  else
  {
   $printprofession = $profession;
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
<h1>Registration Form</h1>
</div>
<b>
<div style="background-image: url('F1.jpg');color:#B6FF00;padding:1px;">
<h2><marquee direction=left>No Account? Create your Account now!</marquee></h2>
</div>
<div style="background-image: url('F1.jpg');color:#00FFA8;padding:20px;font-size:18px">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
  <Label>First Name:</label><br> <?php echo $fnameError;?>
  <input type="text" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php echo $lnameError;?>
  <input type="text" name="lname" ><br><br>
  <Label>Password:</Label><br> <?php echo $passwordError;?>
  <input type="password" name="password" ><br><br>
  <Label>Choose your Gender:</Label><br> <?php echo $genderError;?>
  <span style="color:#FF9800">
  <input type="radio" name="gender" value="Male" checked> Male
  <input type="radio" name="gender" value="Female"> Female</span><br><br>
  <Label>What's your Profession?</Label><br> <?php echo $professionError;?>
  <span style="color:#FF9800">
  <input type="checkbox" name="profession" value="Doctor"> Doctor<br>
  <input type="checkbox" name="profession" value="Engineer" checked> Engineer
  </span><br><br>
  <label for="birthday">Birthday:</label>
  <input type="date" id="fname" name="date" >
  <br><br>
  <input type="submit" value="Submit">

  <style>
h4{color:red}
h5{color:#00E9FF}
h6{color:white}
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
    echo "<h4>Gender:</h4>";
    echo  "<h5>$printgender</h5>";
    echo "<h4>Profession:</h4>";
    echo  "<h5>$printprofession</h5>";
  }
?>

</form> 
<br>
<a href="http://nafi.epizy.com/Login.php" style= "color:#00E9FF; font-family:calibri">Login Form</a>
</div>
</b>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include 'Footer/footer.php';?></h6>

</div>
</body>
</html>