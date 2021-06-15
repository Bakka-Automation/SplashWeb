<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Packs </title>
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
    <link href="sub_style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AVLM05ytyC3v0Jg-TlAjJUQDrwAmqYQHmcyXEvjBXkQIufeecSaJctPlX3uSfJ1BbyO9icw5mcmopzNb&currency=USD" data-sdk-integration-source="button-factory"></script>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <div class="logo"><a href="#"><img src="80.png"></a></div>
                                <li><a>         </a></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#assets">Assets</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#packs">Packs</a></li>
                            </ul>
                            <ul class="member-actions">
                             
                                <li><a href="sign.php"target="_blank"class="btn-white btn-small">Sign in</a></li>
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
                        <p class="intro">WELCOM TO SPLASH WEB PACKS </p>
                     </div>
                </div>
            </div>
             
		
		<!--header start here-->
		<div class="priceing-table w3l">
			<div class="wrap">
			</br>
						<div class="price-grid">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr1">
									<h4>Basic</h4>
									<h3>$5</h3>
									<h5>per month</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Full access</li>
											<li>Customers Support</li>
                      						<li>User Manual</li>

										</ul>
									</div>
								</div>
								<div id="paypal-button-container-P-89K58960WT101463BMA2QTGQ"></div>
								<script>
    paypal.Buttons({
    	style: {
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":5}}]
          });
        },

      onApprove: function(data, actions) {
        alert('You have successfully created subscription ' + data.subscriptionID); // Optional message given to subscriber
      }
    }).render('#paypal-button-container-P-89K58960WT101463BMA2QTGQ'); // Renders the PayPal button. Replace with your plan ID

    </script>
							</div>
						</div>
						<div class="price-grid">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr2">
									<h4>Standard</h4>
									<h3>$10</h3>
									<h5>per month</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Full access</li>
											<li>Customers Support</li>
											<li>Free Updates</li>
                      		                <li>User Manual</li>
										</ul>
									</div>
								</div>
								<div id="paypal-button-container-P-8D325842DA922762MMA2QT6Q"></div> <!-- Replace with your plan ID -->
    <script>
    paypal.Buttons({
    	style: {
          color: 'silver',
          layout: 'vertical',
          label: 'paypal',
        },

      createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":10}}]
          });
        },
    	
      onApprove: function(data, actions) {
        alert('You have successfully created subscription ' + data.subscriptionID); // Optional message given to subscriber
      }
    }).render('#paypal-button-container-P-8D325842DA922762MMA2QT6Q'); // Replace with your plan ID

  </script>
							</div>
						</div>
						<div class="price-grid wthree">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr3">
									<h4>Premium</h4>
									<h3>$20</h3>
									<h5>per month</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Full access</li>
											<li>User Manual</li>
											<li>Free Updates</li>
											<li>Daily Backup</li>
                      				        <li>Manage your business</li>
										</ul>
									</div>
								</div>
								<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script>
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":20}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
  </script>
							</div>
						</div>
						<div class="clear"> </div>
						<?php
					
					?>
				</div>
			</div>
		</div>

		<!--pop-up-grid-->
    <div class="copy-rights">
	<p>Have an Account please <a href="sign.php" hover="red" target="_top">Login </a>  </p>
    <p>To start your free Trial  please click   <a href="#" target="_parent">here </a>  </p>
    </div>
		<div class="copy-rights">
			<!--p>Design by  <a href="#" target="_blank">W3layouts</a> </p-->
		</div>
    </div>
                </div>
            </div>
        </div>
	</body>
</html>

