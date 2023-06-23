
<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOOD DONATION </title>

    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    
    <link rel="stylesheet" href="f.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    
                      <img class="booking-img1" src="assets/ii3.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" method="post">
                        <h2>FOOD DONATION</h2>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required/>
                            <label for="name" class="form-label">Your name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="address" id="name" value="" required/>
                            <label for="name" class="form-label">Address</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="FoodDetails" id="name" value="" required />
                            <label for="name" class="form-label">Food details</label>
                            
<p>Click on the "Choose File" button to upload image:</p>
                   <form action="/action_page.php">
                <input type="file" id="myFile" name="filename">
                        </div>
                        <div class="form-submit">
                           <input type="submit" value="Donate Now" class="submit" id="submit" name="submit" />
                            <button><a href="https://forms.gle/WWaUmtHv69LjwXqP7" >Help Farmers?</a></div></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php
        if(isset($_POST['submit'])){
            mysqli_query($link,"insert into donate(name,phone,address,fooddetails,file) values('$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[FoodDetails]','$_POST[filename]')");
        }
    ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Food</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets1/css/style.css" rel="stylesheet">

</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <h1 class="logo"><a href="index.html">ZERO HUNGER</a></h1>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
             
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
      </header>
     
      <section id="hero">
        <div class="hero-container">
            
               
      
            <div class="carousel-inner" role="listbox">
        
             
             
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-5.jpg);">
                    <div class="carousel-container">
                      <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown">Who thinks about animals?</h2>
                        <p class="animate__animated animate__fadeInUp">Food is a important resource so use it efficiently!!!Join with us to donate the food required to feed animals 
                        or grab the required food for the prepartion of animal feed which your animal likes the most</p>
                        <div>

                          <a href="form.html" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color:yellow;color:black">Donate</a>
                          <a href="retrieveanimal.html" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color:yellow;color:black">Retrieve</a>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </section>
    
                  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets1/vendor/purecounter/purecounter.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>


  <script src="assets1/js/main.js"></script> -->
