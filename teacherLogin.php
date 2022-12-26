<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Teacher Login</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700|Ranga:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="two.css">
</head>

<body>

  <div id="app">

    <div class="headline">
        Teacher Login
    </div>
    <form action="logint.php" method="post">
        <div class="holderId">
          <input type="text" id="id" placeholder=" Enter Email here" name="email">
        </div>

        <div class="holderPassword">
          <input type="password" id="password" placeholder=" Enter Password here" name="pass" >
        </div>
        
        <div class="button">
          <button id="login" type="submit" name="login"> Login </button>
        </div>
    </form>
  </div>
  <script src="app.js" type="text/javascript"></script>
</body>

</html>