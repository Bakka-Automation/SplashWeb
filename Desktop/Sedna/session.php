<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SplashWeb </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="82.png" alt="Sedna logo"></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="#features">Features</a></li>
                                <li><a href="#assets">Assets</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="Packs'.php">Packs</a></li>
                            </ul>
                            <ul class="member-actions">
                             
                                <li><a href="#Home"target="_blank"class="btn-white btn-small">Welcom      ,<?php echo $_SESSION['name']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>work, collaborate, win!</h1>
                        <p class="intro">Powerful Invoicing Platform. </p>
                        <a href="Packs'.php" class="btn btn-fill btn-large btn-margin-right">Our Packs</a> <a href="#" class="btn btn-accent btn-large">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>
    <section class="intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe033;" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Create Recurring Invoicing & Auto-Bill Clients</h5>
                        <p>Save time by automatically billing long-term clients with recurring invoices. </p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe030;" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Proposals Creation Tool</h5>
                        <p>Easily create and send beautiful proposals to your customers.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe046;" class="icon"></span>
                    </div>
                    <div class="intro-content last">
                        <h5>Invoice Payment Auto-Reminder Emails</h5>
                        <p>Use a pre-written auto-reminder email sequence to remind clients your invoice needs to be paid.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>A Powerful Suite of Online Tools</h3>
                        <p>Invoice Clients, Create Proposals, Import Expenses, Time Work Tasks, and Get Paid!</p>
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03e;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Your finances in one place</h5>
                                    <p>Stay on track with your finances with dynamically generated reports, monthly and yearly statements, income and expenditure summaries and accounts receivable and payable.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe040;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Manage Multiple Businesses</h5>
                                    <p>Do you have multiple businesses with individual team members and clients? You're in the right place ??? setting up multiple businesses has never been this simple.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03c;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Effortless Invoicing</h5>
                                    <p>Create professional and elegant looking estimates and invoices in any language or currency in a matter of seconds, and easily deliver them to your clients.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
                <div class="iphone-wrap wp2"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h3>Designed with Sketch!</h3>
                        <p>Easily change/switch/swap every placeholder inside every image on Sedna with the included Sketch files. You???ll have this template customised to suit your business in no time! </p>
                        <p>Nam vehicula malesuada lectus, interdum fringilla nibh. Duis aliquam vitae metus a pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum augue quis augue ornare, eget faucibus felis pharetra. Proin condimentum et leo quis fringilla.
                        </p>
                        <a href="#" class="btn btn-ghost btn-accent btn-small">What's Sketch?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="img/macbook-pro.png" alt="responsive devices"></div>
    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>
                Customise Sedna with the included <span class="sketch">Sketch <i class="version">3</i></span> file
                </h2>
                <p>Change/swap/edit every aspect of Sedna before you hit development with the included Sketch file.</p>
                <a href="#" class="btn btn-ghost btn-accent btn-large">Download now!</a>
                <div class="logo-placeholder floating-logo"><img src="img/sketch-logo.png" alt="Sketch Logo"></div>
            </div>
        </div>
    </section>
    <section class="blog-intro section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Showcase your smashing product with Sedna</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <h5>EXCLUSIVE TO CODROPS</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <h5>SPREADING PIXELS AROUND THE WORLD</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-01.jpg" alt="Sedna blog image"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2>
                            <p><a href="#" class="blog-post-title">Getting started with Sedna <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-02.jpg" alt="Sedna blog image"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Technology</a></h2>
                            <p><a href="#" class="blog-post-title">Why IE8 support is deminishing <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-03.jpg" class="single_image" alt="Sedna blog image"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2>
                            <p><a href="#" class="blog-post-title">Sedna tutorial: How to begin your <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <a href="#" class="btn btn-ghost btn-accent btn-small">More news</a>
            </div>
        </div>
    </section>
    <section class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="avatar"><img src="img/avatar.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Lorem ipsum dolor sit amet, nullam lucia nisi."</h2>
                                <p class="author">Peter Finlan, Product Designer.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/mani.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Nunc vel maximus purus. Nullam ac urna ornare."</h2>
                                <p class="author">Manoela Ilic, Founder @ Codrops.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/130.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Nullam ac urna ornare, ultrices nisl ut, lacinia nisi."</h2>
                                <p class="author">Blaz Robar, Pixel Guru</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Get started with Sedna, absolutely free</h3>
                    <p>Grab your copy today, exclusively from Codrops</p>
                    <form class="signup-form" action="#" method="POST" role="form">
                        <div class="form-input-group">
                            <i class="fa fa-envelope"></i><input type="text" class="" placeholder="Enter your email" required>
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="text" class="" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn-fill sign-up-btn">Sign up for free</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="to-top">
        <div class="container">
            <div class="row">
                <div class="to-top-wrap">
                    <a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="http://tympanus.net/codrops/licensing/">Licence</a></li>
                            <li><a href="http://tympanus.net/codrops/">Codrops</a></li>
                            <li><a href="http://www.peterfinlan.com/">Peter Finlan</a></li>
                        </ul>
                        <p>Copyright ?? 2015 <a href="#">Sedna</a><br>
                        <a href="http://tympanus.net/codrops/licensing/">Licence</a> | Crafted with <span class="fa fa-heart pulse2"></span> by <a href="http://www.peterfinlan.com/">Peter Finlan</a>.</p>
                    </div>
                </div>
                <div class="social-share">
                    <p>Share Sedna with your friends</p>
                    <a href="https://twitter.com/peterfinlan" class="twitter-share"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="bower_components/retina.js/dist/retina.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="bower_components/classie/classie.js"></script>
    <script src="bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>     
<?php 
}else{
     header("Location: sign.php");
     exit();
}
 ?>