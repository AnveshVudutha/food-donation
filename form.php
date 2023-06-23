<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOOD DONATION</title>

    
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