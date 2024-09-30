<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sulekha signup</title>
    <link rel="stylesheet" href="/Frented/styles/style.css" />
  </head>
  <body>
  <?php
    include "../../Backend/signup.php";
    
    if(isset($_POST['signup'])){
      
      $arr = ['name', 'email', 'password', 'checkbox'];
      
      inserData($arr, 'sign');
    }
    ?>
    <header id="h-container">
      <div class="h-container box">
        <div class="logo box">
          <div class="logo_img"></div>
        </div>
      </div>
    </header>
    <section class="sign box">
      <div class="signContainer">
        <form action="./signup.php" method="post" onsubmit="return formValidation()">
          <div class="top box">
            <div>
              <h4>Sign up</h4>
            </div>
            <div>
              <a href="/Frented/componets/signin.php">Sign in</a>
            </div>
          </div>
          <div class="input">
            <p>Name</p>
            <div>
              <input type="text" id="name" name="name"/>
            </div>
          </div>
          <div class="input">
            <p>Email ID</p>
            <div>
              <input type="text" id="email" name="email" />
            </div>
          </div>

          <div class="input">
            <p>Password</p>
            <div>
              <input type="password" id="password" name="password"/>
            </div>
          </div>
          <div class="checkbox box">
            <input type="checkbox" id="checkbox" name="checkbox"/>
            <span
              >I Agree to Sulekha.com Terms and Conditions and Privacy
              Policy</span
            >
          </div>
          <div class="sign_botton box">
            <button type="submit" name="signup">SIGN UP</button>
          </div>
        </form>
      </div>
    </section>

  <script src="/Frented/js/validation.js"></script>
    
  </body>
</html>
