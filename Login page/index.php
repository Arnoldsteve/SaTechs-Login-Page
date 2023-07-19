v<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SaTechs Login & Registration</title>
     <!-- <link
       rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"  
    /> -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>

  <?php 
  include ('registration.php'); 
  include ('login.php'); 
  // include ('home.php'); 


   ?>

    <header>
      <h2 class="logo">Logo</h2>
      <nav class="navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <button class="btnLogin-popup">Login</button>
      </nav>
    </header>

    <div class="wrapper">
      <span class="icon-close">
        <ion-icon name="close"></ion-icon>
      </span>

      <div class="form-box login" action="login.php" method="post">
        <h2>Login</h2>
        <form action="#">
          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" class="form=control" required />
            <label for="">Email</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock"></ion-icon>
            </span>
            <input type="password" name="password"  class="form=control" required />
            <label for="">Password</label>
          </div>
          <div class="remember-forget">
            <label> <input type="checkbox" /> Remember me </label>
            <a href="#">Forgot password?</a>
          </div>
          <button type="submit" class="btn" name="login">Login</button>
          <div class="login-register">
            <p>
              Don't have an acount?
              <a href="#" class="register-link"> Register</a>
            </p>
          </div>
        </form>
      </div>

      <div class="form-box register">
        <h2>Registeration</h2>
        <form  action="registration.php" method="post">
          <div class="input-box">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" name="Username" class="form-control" required />
            <label for="">Username</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" class="form-control" required />
            <label for="">Email</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock"></ion-icon>
            </span>
            <input
              type="password"
              name="password"
              class="form-control"
              required
            />
            <label for="">Password</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock"></ion-icon>
            </span>
            <input
              type="password"
              name="confirm-password"
              class="form-control"
              required
            />
            <label for="">Confirm Password</label>
          </div>
          <div class="remember-forget">
            <label>
              <input type="checkbox" /> I agree to the terms & conditions
            </label>
          </div>
          <button
            type="submit"
            class="btn"
            name="submit"
            class="btn btn-primary"
          >
            Register
          </button>
          <div class="login-register">
            <p>
              Already have an acount? <a href="#" class="login-link"> Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
