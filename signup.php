<?php
include 'conn.php';

if (isset($_POST["login"])) {
    $check=mysqli_query($link,"select * from user where email='$_POST[email]' and password='$_POST[password]'");
    $count = mysqli_num_rows($check);
          if($count!=0){
              ?>
                  <script>
                      alert('User already exist click ok to login');
                      window.location="login.php";
                  </script>
              <?php
          } else {
      mysqli_query($link, "insert into user(name,email,password) values('$_POST[name]','$_POST[email]','$_POST[password]')");
              ?>
            <script type="text/javascript">
            alert('Registration successfully, Click ok to continue');    
       
        
        //   alert('registration successful');
            window.location="services.html";
        </script>
    <?php
    }
  
  
  }
  ?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign.css">
    <title>Food Waste Management</title>
</head>
<body>
    <div class="nav">
        <!-- <a href="#">home</a> -->
        <!-- <div class="active"> <a href="#">log in</a></div> -->
        <!-- <a href="#">our clients</a> -->
        <!-- <span style="float: right;"> <a href="#">about us</a></span> -->
    </div>
    <form method="post" class="box">
        <h2>SIGN UP</h2>
    <input type="text" name="name" placeholder="User name"><br>

    <input type="text" name="email" placeholder="EMAIL"><br>
    <input type="password" name="password" placeholder="PASSWORD"><br>
    <input type="checkbox" name="box"> BY CLICKING THIS YOU HAVE AGREED TO OUR TERM'S AND POLICY <br>
    <input type="submit" value="SIGN UP" name="login"></a>
    <p>---------SIGNUP WITH---------</p>
    
   <a href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"><img src="https://img.icons8.com/color/48/000000/google-logo.png"/></a> 


   <a href="https://www.facebook.com/login.php"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/></a> 
   <!-- <div class="social text-gray">
    <a href="https://en-gb.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a> -->
    <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
</div>
</form>
</body>
    
</html>