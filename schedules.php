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
<section class="section" id="schedule">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Service <em>Schedule</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p> View your Solid Waste Management service schedule, sign up for reminders and find information about our service updates.</p>
                </div>
            </div>
        </div>

            <form action="schedule_handler.php" class="fm" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">SERVICE</label>
                            <select class="form-control" name="service" id="service">
                                <option value="service">Waste collection</option>
                                <option value="service">Repair and maintenance</option>
                                <option value="service">Consultancy</option>
                                <option value="service">Training</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">PERIOD</label>
                            <select class="form-control" name="period" id="period">
                                <option value="period">Short term contract</option>
                                <option value="period">Long term contract</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">DAY</label>
                            <select class="form-control" name="day" id="day">
                                <option value="day">Monday</option>
                                <option value="day">Tuesday</option>
                                <option value="day">Wednesday</option>
                                <option value="day">Thursday</option>
                                <option value="day">Friday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">TIME</label>
                            <select class="form-control" name="time" id="time">
                                <option value="time">0600HRS</option>
                                <option value="time">2200HRS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">ESTABLISHMENT NAME</label>
                            <input type="text" name="establishment_name" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">PHONE NUMBER</label>
                            <input type="tel" name="contact">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for="">LOCATION/ STREET</label>
                            <input type="text" name="location" placeholder="Location/street">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-danger" for=""></label>
                            <input type="hidden" name="id">
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="form-group">
                        <textarea name="message"  required="required" class="form-control" style="min-height: 150px;" placeholder="Short description of the service you are requesting"></textarea>
                    </div>
                </div>

                <input type="submit" name="submit" class="btn btn-outline-primary btn-block" value="Set Schedule">
            </form>
        </div>
    </div>
</section>
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Our Team  <em>Of Experts</em></h2>
                    <img src="" alt="">
                    <p>Waste management is a complicated and important task that incorporates administration of all procedures and resources for appropriate treatment of waste materials, from upkeep of dumping facilities and waste transport trucks to consistence with environmental controls and health codes. This kind of responsibility should only be trusted with an expert.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="assets/images/passport%203.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Environmental Expert</span>
                        <h4>Stacy Wanyoike</h4>
                        <p>Environmental specialists use their knowledge of natural sciences to protect the environment and human health. They may clean up polluted areas, advise policymakers, or work with specific industries to reduce waste and pollution.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="assets/images/passport%202.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Health Expert</span>
                        <h4>Naftali Omondi</h4>
                        <p>He is responsible for overseeing and coordinating waste disposal, refuse collection and recycling activities in an efficient and environmentally-friendly manner.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="assets/images/passport%201.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Legal Advisor</span>
                        <h4>Samir Sham</h4>
                        <p>He provides overall legal expertise and support on legal issues relating to the functions, structures and activities of the organization and support management on issues pertaining to legal and regulatory framework and monitor compliance with legal and regulatory corporate governance requirements.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
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

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>

</body>
</html>


