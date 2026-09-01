<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log in</title>
  <link rel="stylesheet" href="Style.css">
  <script src="JS script.js"></script>
</head>
<body>
  <header>
    <div class="avatar">
      <img src="avatar 1.jpg" alt="">
    </div>
    <nav>
      <li><a href="Index.html">Home</a></li>
      <li><a href="games info.html">Information</a></li>
      <li><a href="Log in.php">Log in</a></li>
      <li><a href="Sign up.php">Sign up</a></li>
    </nav>
  </header>
  <div class="sign_in" style="margin: 100px auto 0 auto;">
    <form action="Sign up.php" method="Post">
      <fieldset>
        <legend>Sign In</legend>
        <label for="user_name"> User Name : <br>
          <input 
          type="text" 
          name="user_name"
          maxlength="15" 
          minlength="8"
          id="user_name"
          required >
        </label> <br> <br>
        <label for="password"> Password : <br>
          <input 
          type="password" 
          name="password" 
          maxlength="15" 
          minlength="8" 
          id="password"
          required>
          </label> <br><br>
          <a href="">Do not have an account ?</a> <br><br>
          <a href="">Forgot your password ? </a> <br><br>
          <a href="Accessories/confirmation.html">
            <input type="button" value="Send">
          </a>
          
      </fieldset>
    </form>
  </div>
</body>
</html>