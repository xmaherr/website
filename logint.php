<?php
session_start();
$con = mysqli_connect("localhost","root","","website");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if(isset($_POST["login"]))
{
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $fname="";
  $lname="";
  $phone="";
  $sub_id=0;
  $subject="Back End";
  $Data="select * from teachers;";
  $result=mysqli_query($con,$Data);
  $flag=0;
  while($row=mysqli_fetch_array($result))
  {
    if($row['email']==$email)
    {
      $flag=1;
      if($row['password']==$pass)
      {
        $fname=$row['f_name'];
        $lname=$row['l_name'];
        $phone=$row['phone'];
        $sub_id=$row['subject_id'];
        if($sub_id==1)
          $subject="Front End";
        break;
      }

      else
        header("Location:loginfailed.php");
    }
  }
  if($flag==0)
    header("Location:loginfailed.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Teacher-Info</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700|Ranga:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="two.css">
</head>

<body>
  <div id="app">

    <div class="headline">
        Login Successful
    </div>
    <div class="holderId">
      <label>First Name</label>
      <?php echo $fname; ?>
    </div>

    <div class="holderId">
      <label>Last Name</label>
      <?php echo $lname; ?>
    </div>

    <div class="holderId">
      <label>E-Mail</label>
      <?php echo $email; ?>
    </div>

    <div class="holderId">
      <label>Password</label>
      <?php echo $pass; ?>
    </div>

    <div class="holderId">
      <label>Phone Number</label>
      <?php echo $phone; ?>
    </div>

    <div class="holderPassword">
      <label>Subject</label>
      <?php echo $subject; ?>
    </div>
    
    <div class="button">
      <button id="login" ><a href="teacherLogin.php">Log Out </button>
    </div>

  </div>
  <script src="app.js" type="text/javascript"></script>
</body>

</html>