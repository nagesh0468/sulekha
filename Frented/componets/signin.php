<?php   
session_start();
isset($_SESSION['name']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sulekha signin</title>
    <link rel="stylesheet" href="/Frented/styles/style.css" />
  </head>
  <body>
  <?php   
           require "../../Backend/connect.php";

            if(isset($_POST['signIn'])){
              global $con;
             $email = $_POST['email'];
             $password = $_POST['password'];
             $sql = "SELECT * FROM `sign` where `email` = '$email' and `password` = '$password'";
             $result = mysqli_query($con, $sql);

             if($result){
              $row = mysqli_num_rows($result);
              if($row > 0){
                $arr = mysqli_fetch_array($result);
                $_SESSION['name'] = $arr['name'];
                echo " <script>
                 alert('hi.. ". $_SESSION['name'] ."  ');
                 window.location.href = './index.php';  
                      </script> ";

              }else{
              echo " <script> alert(' please check email and password ')  </script> ";
             }
            }

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
       
        <div class="top box">
          <div>
            <h4>Sign in using</h4>
          </div>
          <div>
            <a href="/Frented/componets/signup.php">Sign up</a>
          </div>
        </div>
        <form action="./signin.php" method="post" onsubmit="return formValidation()" id="form">
        <div class="input">
          <p>Email ID</p>
          <div>
            <input type="text" id="email" name="email"/>
          </div>
        </div>
        <div class="input">
          <p>Password</p>
          <div>
            <input type="password" id="password" name="password" />
          </div>
        </div>
        <div class="checkbox box">
          <input type="checkbox" id="checkbox" name="checkbox" />
          <span>Keep me signed in</span>
        </div>
        <div class="sign_botton box">
          <button type="submit" name="signIn">SIGN IN</button>
          <a href="">Forgot Password?</a>
        </div>
        
    </form>
           
    
      </div>
      
    </section>

    <script src="/Frented/js/validation.js"></script>
    
  </body>
</html>
