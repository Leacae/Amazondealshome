<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Html Page Specific -->
    <meta charset="utf-8">
    <title>Pointer - Startup Landing Page</title>
    <meta name="description" content="Startup landing page">
    <meta name="author" content="Multifour | multifour.com">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="scripts/html5shiv.js"></script>
    <![endif]-->

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/soc-icons.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Favicons -->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

<!-- PRELOADER -->
<div id="preloader">
    <div class="clock">
        <div class="arrow_sec"></div>
        <div class="arrow_min"></div>
    </div>
</div>

<div id="wrap">

    <!-- HEADER BEGIN -->
    <!--<header id="header">
        <div class="container">
            <a href="#" class="logo"> <img src="./images/logo.png" alt="Best start for your business" height="40" width="45" /> </a>
            <a class="login_btn" href="#">Login</a>
            <ul class="soc_nav">
                <li>
                    <a href="#" class="icon-soc-googleplus"></a>
                </li>
                <li>
                    <a href="#" class="icon-soc-facebook"></a>
                </li>
                <li>
                    <a href="#" class="icon-soc-twitter"></a>
                </li>
            </ul>
        </div>
    </header>-->
    <!-- HEADER END -->

    <!-- INTRO BEGIN -->
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-6">
                    <div class="slogan">
                        <h2 class="wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="0.5s">Best start</h2>
                        <h3 class="wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="0.5s">for your business</h3>
                        <p class="wow fadeInRight" data-wow-delay="1.2s">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-md-5 col-sm-6">
                    <form role="form" id="register_form">
                        <div class="title wow flipInX" data-wow-duration="0.6s"> Register now </div>
                        <div class="form-group">
                            <input type="text" class="form-control wow flipInX" data-wow-delay="0.8s" data-wow-duration="0.2s" id="name" placeholder="Full name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control wow flipInX" data-wow-delay="1s" data-wow-duration="0.2s" id="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wow flipInX" data-wow-delay="1.2s" data-wow-duration="0.2s" id="username" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control wow flipInX" data-wow-delay="1.4s" data-wow-duration="0.2s" id="password" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn_start wow flipInX" data-wow-delay="1.6s" data-wow-duration="0.2s">Start</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="slides" data-stellar-ratio="0.4">
            <div class="slides-container"><img src="img/1.jpg" alt=""><img src="img/1.jpg" alt=""><img src="img/1.jpg" alt=""></div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Contact us</h4>
                    <ul class="contact_data_list">
                        <li><i class="icon-call-in"></i> (234) 789-4356, (234) 789-4357</li>
                        <li><i class="icon-pointer"></i> Address, Postal code, City, Country</li>
                        <li><i class="icon-envelope"></i> your@email.com</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <h4>Subscribe</h4>
                    <form action="scripts/subscribe.php" method="post" id="subscribe_form" novalidate="novalidate">
                        <div class="input-group">
                            <input class="form-control" type="email" name="email" id="subscribe_email" placeholder="Enter your email here">
                            <div class="input-group-btn">
                                <button class="btn" type="submit" id="subscribe_submit"><i class="icon-envelope"></i></button>
                            </div>
                        </div>
                    </form>
                    <p>Subscribe to our newsletter, actions and updates</p>
                </div>
                <div class="col-md-3">
                    <h4>Follow us</h4>
                    <ul class="soc_nav">
                        <li>
                            <a href="#" class="icon-soc-googleplus"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-soc-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-soc-twitter"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT END-->

    <!-- FOOTER BEGIN -->
    <footer id="footer">
        <div class="container">
            <!--<a href="#" class="logo"> <img src="./images/logo_dark.png" alt="Best start for your business" height="40" width="45" /> </a>-->
            <p>&copy; 2014 POINTER <br> Designed by Multifour.com</p>
        </div>
    </footer>
    <!-- FOOTER END -->

</div>

<!-- MODALS BEGIN-->

<!-- subscribe modal-->
<div class="modal fade" id="modalSubscribe" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title"></h3>
        </div>
    </div>
</div>
<!-- MODALS END-->

<!-- JavaScript -->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script src="js/placeholders.jquery.min.js"></script>
<script src="js/custom.js"></script>

<!--[if lte IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
</body>

</html>