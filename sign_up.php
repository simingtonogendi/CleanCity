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
<section class="section text-center" id="our-classes" content="">
    <div class="container">
        <div class="sign_up">
        <div class="row">

            <div class="right">
                    <h1 class="text-primary">Register Here</h1>
                    <h3 class="text-danger">Fill in the correct details of your establishment</h3>
                    <hr class="mb-lg-4">
                    <form class="frm" action="reg_handler.php" method="POST">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="hidden" name="id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Establishment name</label>
                            <input type="text" name="establishment_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Location/Street</label>
                            <input type="location" name="location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="tel" name="contact" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <hr class="mb-lg-4">
                        <button type="submit" name="btn_register" class="btn btn-primary">Register</button>
                    </form> <br><br>
                    <h4>Already have an account?<a href="login.php">Login</a></h4>
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


