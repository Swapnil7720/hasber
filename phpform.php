<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HASBER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row fixed-top mx-auto w-100" id="nav">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg bg-white border">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="images/Logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="About.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Hasber.html">HASBER c-30</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="News.html">HASBER in News</a>
                            </li>
                        </ul>
                        <a href="Contact.html" class="btn button rounded-0 border-0 px-4 py-2">CONTACT</a>
                    </div>
                </div>
            </nav>
        </div>
    </div><!--end of nav-->

    <div class="row bg-white" id="hero-contact" style="min-height: 70vh;">
    </div><!--end of hero contact-->

    <div class="row bg-orange justify-content-center align-items-center" id="hero-bottom" style="min-height: 50vh;">
        <div class="col-10 bg-white shadow-lg home-form">
            <div class="row justify-content-center">
                <div class="col-7 py-5">
                    <h2 class="font-gems color-blue">Looking for a solid connection?</h2>
                    <p class="font-mont text-blue py-3">Reach out to HASBER, where patented concrete mixing meets exceptional service. Let's lay the groundwork for success. Contact us today!</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input type="text" name="name" placeholder="Your Name" id="name">
                        <input type="email" name="email" placeholder="Email" id="email">
                        <input type="text" name="Subject" placeholder="Subject" id="Subject">
                        <input type="text" name="Message" class="py-5" placeholder="Message" id="message">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="https://hasber.in/">
                        <button type="submit" name="submit" class="submit btn font-gems bg-orange text-white" value="Submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-10 bg-white" style="transform: translateY(-30%);">
            <div class="row justify-content-center align-item s-center" style="height: 389px;">
                <div class="col-12 col-md-5 align-se lf-center pe-5">
                    <h2 class="font-gems color-blue pt-lg-5 py-3">Contact</h2>
                    <ul class="list-unstyled font-mont map-list">
                        <li>
                            <p><a href="https://goo.gl/maps/cDXe4jfCLCGxuKcu6" class="text-decoration-none " target="_blank">
                                    <img src="images/location-blue.png" alt="img">
                                    HASBER Machine Pvt. Ltd., Blue Ventures, Office no. 203, Opposite Vaishali Restaurant, F.C. Road, Pune, Maharashtra - INDIA - 411004. </a>
                            </p>
                        </li>
                        <li>
                            <p><a href="mailto:info@hasber.in" class="text-decoration-none "><img src="images/mail-blue.png" alt="img"> info@hasber.in </a></p>
                        </li>
                        <li>
                            <p> <img src="images/clock-blue.png" alt="img"> Mon - Sat : 10:00 - 18:00</p>
                        </li>
                        <li>
                            <p><a href="tel:+918669690303" class="text-decoration-none "><img src="images/phone-blue.png" alt="img"> +91 8669690303 </a></p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1357.2882665378713!2d73.83932948882514!3d18.519482743340493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf879e637713%3A0xb51bae18aff2c15f!2s203%2C%20Plot%2C%20917%2F23%20A%2C%20Ganeshwadi%2C%20Deccan%20Gymkhana%2C%20Pune%2C%20Maharashtra%20411004!5e0!3m2!1sen!2sin!4v1692425859437!5m2!1sen!2sin" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-blue text-white py-5 gy-3 justify-content-center align-items-center" id="footer">
        <div class="col-10 col-md-10 col-lg-11 col-xl-10">
            <div class="row gy-3">
                <div class=" col-12 col-lg-4 ">
                    <a href="index.html"><img src="images/Hasber-Logo1-1 2.png" class="img-fluid" alt="img"></a>
                    <p class="font-mont py-3">India’s first Patented Mobile Concrete <br> Batching Plant. Proudly Associated with IME</p>
                    <div class=" d-flex align-items-center">
                        <a href="https://www.linkedin.com/company/hasber-concretemachine/" target="_blank"> <img src="images/image 4.png" class="ms-2" alt="img"> </a>
                        <a href="https://www.youtube.com/channel/UCEgJH9VInY3sL8jRCkYADzQ" target="_blank"> <img src="images/image 5.png" class="ms-2" alt="img"></a>
                        <a href="https://www.instagram.com/hasber_concretemachine/"> <img src="images/image 6.png" class="ms-2" alt="img"> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 text-white">
                    <h3 class="font-mont  color-orange">USEFUL LINKS</h3>
                    <ul class="list-unstyled font-mont lh-lg footer-list-nav " style="font-size: 14px;">
                        <li> <a href="index.html" class="text-decoration-none "> Home </a></li>
                        <li> <a href="About.html" class="text-decoration-none "> About</a> </li>
                        <li> <a href="Hasber.html" class="text-decoration-none "> HASBER C-30 </a> </li>
                        <li> <a href="News.html" class="text-decoration-none "> HASBER In NEWS </a> </li>
                        <li>FAQs</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12">
                    <h3 class="font-mont color-orange">CONTACT </h3>
                    <ul class="list-unstyled font-mont ">
                        <li class="d-flex">
                            <p class="d-flex"> <a href="https://goo.gl/maps/khFoCEpHeUHqK1c47" class="text-decoration-none border-warning text-white d-flex justify-content-center" target="_blank">
                                    <div>
                                        <img src="images/Group 88.png" alt="img">
                                    </div>
                                    <div class=" border-danger px-2">
                                        HASBER Machine Pvt. Ltd., Blue Ventures, Office no. 203, Opposite Vaishali Restaurant, F.C. Road, Pune, Maharashtra - INDIA - 411004.
                                    </div>
                                </a>
                            </p>
                        </li>
                        <li>
                            <p> <a href="mailto:info@hasber.in" class="text-decoration-none text-white"> <img src="images/Group 87.png" alt="img"> info@hasber.in </a></p>
                        </li>
                        <li>
                            <p> <img src="images/Group 89.png" alt="img"> Mon - Sat : 10:00 - 18:00</p>
                        </li>
                        <li>
                            <p> <a href="tel:+918669690303" class="text-decoration-none text-white"> <img src="images/Vector (Stroke).png" alt="img"> 8669690303 </a> </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 pt-5 py-3 text-center">
                    <p class="font-mont">Copyright 2023 HASBER | Designed by Far & Wide</p>
                </div>
            </div>
        </div>
    </div><!--end of footer row-->
</div><!--end of container-->

<!-- PHP Mailer Script -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $senderEmail = $_POST['swapnil.farandwide@gmail.com'];
    $senderName = $_POST['name'];
    $receiverEmail = "swapnil.farandwide@gmail.com"; // Change this to your email

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Change this to your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'swapnil.farandwide@gmail.com'; // Change this to your SMTP username
    $mail->Password = 'SwapnilxF&W'; // Change this to your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($senderEmail, $senderName);
    $mail->addAddress($receiverEmail);

    $mail->isHTML(true);
    $mail->Subject = $_POST['Subject'];
    $mail->Body = $_POST['Message'];

    if ($mail->send()) {
        echo '<script>alert("Message has been sent successfully!");</script>';
    } else {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}
?>
<!-- End of PHP Mailer Script -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
