<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "phpmailer/vendor/autoload.php";

if (isset($_POST['cont-submit'])) {
    
    $inquiry = $_POST['inquiry'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Inquiry Mail - " . $inquiry;


    $html = '
    <html> 
    <head> 
        <title>Inquiry Mail</title> 
    </head> 
        <body> 
            <div>
                <b>Inquiry Type: </b> '. $inquiry .'<br><br>
                <b>Name: </b>' . $name . '<br><br>
                <b>Email Address: </b>' .  $email . '<br><br><br><br>'
                 .  $message . '<br><br><br><br>
                 From <br><b>'.$name.'</b>
            </div>
        </body> 
    </html> 
';



    $mail = new PHPMailer(true);
    $mail->From = "info@tridentbm.com";
    $mail->FromName = 'Trident Building Maintenance';
    $mail->addAddress("info@tridentbm.com", "Trident Building Maintenance");
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;
    $show = true;
    try{
        if($mail->send()){
            $success = true;
        } else {
            $success = false;
        }
    } 
    catch (Exception $e) {
        $success = false;
    }


}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Txley</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- google font montserrat -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">


    <!-- owl carousel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>

<body>


    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="logo-nav">
                <div class="logo">
                    <a href="index.html"><img src="assets/logo.png" alt=""></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li><a href="career.html">Careers</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>



    <!-- hero section -->
    <section class="hero-about">
        <div class="container">
            <h1>Have a question for us? Just ask!</h1>
            <p>We want to hear from you. No job is too big, no problem is too small, and no client is taken for granted.
                Our goal is to provide an environment that is clean, safe, and an enhancement to the work day.
            </p>
        </div>
    </section>




    <!-- contact form -->
    <section class="contact-form sec-pad">
        <div class="container">
            <h2>How can we help you?</h2>
            <p>[For job postings, job inquiries and to apply, please go here.]</p>
            <span>* required form fields</span>



            <div class="row">
                <div class="col-md-6">
                    <form action="" class="mt-3" method="post">
                        <div class="mb-3">
                            <label for="enquiry" class="form-label">Area of inquiry</label>
                            <select class="form-select" id="inquiry" name="inquiry">
                                <option selected>Area of inquiry</option>
                                <option value="Facility Management">Facility Management</option>
                                <option value="Restoration">Restoration</option>
                                <option value="Architectural">Architectural</option>
                                <option value="Supplies">Supplies</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                        </div>


                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                        </div>


                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                            <label for="message">Message*</label>
                        </div>

                        <button class="prm-btn mt-3" type="submit" name="cont-submit">Submit</button>

                    </form>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="cont-det">
                        <span class="mb-3 d-block">
                            <b>Phone Number:</b><br>
                            <a href="tel:360-545-4433">360-545-4433</a>
                        </span>
                        <span class="mb-3 d-block">
                            <b>Email</b><br>
                            <a href="mailto:info@txley.com">info@txley.com</a>
                        </span>
                        <span class="mb-3 d-block">
                            <b>Address</b><br>
                            <a href="https://goo.gl/maps/eGLsJnSTAG1mDCdt8">139 E. Fairhaven Avenue <br>Burlington, WA 98233</a>
                        </span>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html"><img src="assets/white-logo.png" alt=""></a>
                    </div>
                </div>
                <!-- <div class="col-md-3 mt-4">
                    <ul>
                        <li>About</li>
                        <li>Media</li>
                        <li>Careers</li>
                        <li>Contact</li>
                    </ul>
                </div> -->
                <div class="col-md-3 mt-4">
                    <ul>
                        <li><a href="services.html">Facility Management </a></li>
                        <li><a href="services.html">Restoration </a></li>
                        <li><a href="services.html">Architectural </a></li>
                        <li><a href="services.html">Supplies</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mt-4">
                    <h4>Address</h4>
                    <p>139 E. Fairhaven Avenue Burlington, WA 98233<br>360-545-4433</p>
                </div>
            </div>
            <div class="mail-social">
                <div class="mail-link">
                    <a href="mailto:info@txley.com">info@txley.com</a>
                </div>
                <div class="social-icons">
                    <i class="fa-brands fa-linkedin-in me-2"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
            <div class="rights-link">
                <div class="imp-links">
                    <ul>
                        <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="rght-res">
                    <span>© 2022 TXBMS. ALL RIGHTS RESERVED</span>
                </div>
            </div>
        </div>
    </footer>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- custom js -->
    <script src="script.js"></script>

</body>

</html>