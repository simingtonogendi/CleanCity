<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Clean City</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script src="assets/js/custom.js"></script>

</head>

<body>

<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav background-header">

                    <a href="home.php" class="logo">Clean<em> City</em></a>

                    <ul class="nav">
                        <li class="scroll-to-section"><a href="home.php" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="intro.php">Intro</a></li>
                        <li class="scroll-to-section"><a href="about.php">About</a></li>
                        <li class="scroll-to-section"><a href="services.php">Services</a></li>
                        <li class="scroll-to-section"><a href="schedules.php">Schedules</a></li>
                        <li class="scroll-to-section"><a href="careers.php">Careers</a></li>
                        <li class="scroll-to-section"><a href="contact.php">Contact</a></li>
                        <li class="main-button"><a href="sign_up.php">Sign Up</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</header>
<section class="section" id="contact-us">
    <div id="contact " >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 class="text-danger"><strong>CONTACT US </strong></h2>
                    <p class="sub-head">Chat with a member of our in-house team. Start Chat. Due to COVID-19, we have a reduced number of support staff. For support, please write your message below; we'll respond as soon as possible. </p>

                    <p class="sub-head"><strong>ADDRESS :</strong> 2234/908, Clean City , KE - 002309</p>
                </div>
            </div>
            <div class="row  text-center wow rotateIn animated">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <a href="#">   <img src="assets/images/img/Social/facebook.png" alt="" /></a>
                    <a href="#">   <img src="assets/images/img/Social/google-plus.png" alt="" /></a>
                    <a href="#">   <img src="assets/images/img/Social/twitter.png" alt="" /></a>
                </div>
            </div>
            <div class="row pad-top-botm">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action="contact_handler.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" required="required" placeholder="Estalishment name/Your name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="establishment" class="form-control" required="required" placeholder="Estalishment name/Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Applicable Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message"  required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button name="btn-submit" type="submit" class="btn btn-success btn-block btn-lg">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 2022 clean city

                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">Simington</a></p>


            </div>
        </div>
    </div>
</footer>

</body>
</html>


