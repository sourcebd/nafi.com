<!DOCTYPE html>
<html>
<head>
<title>My Home Page</title>
</head>
<style>
div#block{width:270px;border:5px solid #ddd;padding:10px;margin:auto;}
body{background-image: url('G.gif'); background-repeat:no-repeat; background-size:cover}
</style>
<body>

<div id="block">
<div style="background-image: url('F2.jpg');color:black; padding:20px;">

<div style="background-color: #0A0F48;color:#00E9FF; padding:0px;font-family:algerian">
<h1>Registration Form</h1>
</div>
<b>
<div style="background-image: url('F1.jpg');color:#B6FF00;padding:1px;">
<h2><marquee direction=left>No Account? Create your Account now!</marquee></h2>
</div>
<div style="background-image: url('F1.jpg');color:#00FFA8;padding:20px;font-size:18px">
<form action="RegistrationResult.php" method='post'>
  <Label>First Name:</label><br>
  <input type="text" id="fname" value=""><br>
  <Label>Last Name:</Label><br>
  <input type="text" id="lname" value=""><br>
  <Label>Password:</Label><br>
  <input type="password"><br><br>
  <Label>Choose your Gender:</Label><br>
  <span style="color:#FF9800">
  <input type="radio" name="gender"> Male
  <input type="radio" name="gender"> Female</span><br><br>
  <Label>What's your Profession?</Label><br>
  <span style="color:#FF9800">
  <input type="checkbox"> Doctor<br>
  <input type="checkbox"> Engineer
  </span><br><br>
  <input type="submit" value="Submit">
</form> 
</div>
</b>

<div style="background-color:#0A0F48;color:#00E9FF;padding:0px;font-family:algerian">
<h1>Login Form</h1>
</div>
<b>
<div style="background-image: url('F1.jpg');color:#B6FF00;padding:1px;">
<h2><b><marquee direction=left>Get Access to your Account now!</marquee></b></h2>
</div>
<div style="background-image: url('F1.jpg');color:#00FFA8;padding:20px;font-size:18px">
<form action="loginResult.php" method='post'>
  <Label>First Name:</label><br>
  <input type="text" id="fname" value=""><br>
  <Label>Last Name:</Label><br>
  <input type="text" id="lname" value=""><br>
  <Label>Password:</Label><br>
  <input type="password"><br><br>
  <input type="submit" value="Submit">
</form>
</div>
</b>

</div>
</body>
</html>