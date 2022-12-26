<?php
session_start();
$con = mysqli_connect("localhost","root","","website");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if(isset($_POST["save"]))
{
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $sub_id=$_POST["sub_id"];
  $pass=$_POST["pass"];
  $query="insert into students values('$fname','$lname','$email','$phone',$sub_id,'$pass');";
  mysqli_query($con,$query);
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Student Login</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700|Ranga:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="two.css">
</head>

<body>
  <div id="app">

    <div class="headline">
        Student Sign up
    </div>
    <form method="post" action="studentSignup.php">
    <div class="holderId">
      <label>First Name:</label>
      <input type="text" placeholder=" Enter your first name here" name="fname" required>
    </div>

    <div class="holderId">
      <label>Last Name</label>
      <input type="text" placeholder=" Enter your last name here" name="lname">
    </div>

    <div class="holderId">
      <label>E-Mail</label>
      <input type="text" placeholder=" Enter your email here" name="email">
    </div>

    <div class="holderId">
      <label>Password</label>
      <input type="password" placeholder=" Enter your  Password here" name="pass">
    </div>

    <div class="holderId">
      <label>Phone Number</label>
      <input type="text" placeholder=" Enter your phone number here" name="phone">
    </div>

    <div class="holderPassword">
      <label>Subject</label>
      <select name="sub_id">
        <option value="1" >FrontEnd</option>
        <option value="2" >BackEnd</option>
    </select>
    </div>
    
    <div class="button">
      <button id="login" type="submit" name="save"> Submit </button>
    </div>

  </div>
</form>
  <script src="app.js" type="text/javascript"></script>
</body>

</html>