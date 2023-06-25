<?php
error_reporting(0);
session_start();
 include 'header.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Woodhack</title>    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact us</h2>
            <p>Email us or call with any questions or inquiries about woodhack. we would be happy to answer your questions.woodhack can help to set your furniture and look your house more beautiful.</p>  
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                     <div class="text">
                        <h3>Address</h3>
                        <p> B-201 Rajul Society Lilamani </p>
                     </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                     <div class="text">
                        <h3>Phone</h3>
                        <p>9426416142</p>
                     </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                     <div class="text">
                        <h3>Email</h3>
                        <p><a href="#">woodhack@gmail.com</a></p>
                     </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="">
                    <h2>Send Message</h2><br>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Type your Message..</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="Send"> 
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>