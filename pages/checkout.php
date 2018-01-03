<?php include '../class/config.php'; if(empty($_SESSION['item_cart'])) {header('location:index.php');}?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../assets/style.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/magnific-popup.css" type="text/css" />
	<!-- amaran notification  -->
	<link rel="stylesheet" href="../assets/css/amaran.min.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/animate.min.css" type="text/css" />

	<link rel="stylesheet" href="../assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>#scroller {max-height: 280px; overflow: auto;background: ivory;}</style>

	<!-- Document Title
	============================================= -->
	<title>Checkout | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png" ></a>
						<a href="index.php" class="retina-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png" ></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

                        <ul>
                            <li class="current"><a href="index.php"><div>Shop</div></a></li>
                        </ul>

                        <!-- Top Cart
                            ============================================= -->
                        <div id="top-cart">
                        <a href="#" id="top-cart-trigger">
                            <i class="icon-shopping-cart"></i>
                            <span id="show_cart_counts"></span>
                        </a>
                            <div id="show_cart_contents"></div>
                        </div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Checkout</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_half">
						<div class="panel panel-default">
							<div class="panel-body">
								Returning customer? <a href="<?=base_url('pages','login')?>" >Click here to login</a>
							</div>
						</div>
					</div>
						<div class="col-md-6">
							<div class="table-responsive clearfix">
								<h4>Your Orders</h4>

                            <table class="table cart">
                                <thead>
                                    <tr>
                                        <th class="cart-product-thumbnail">&nbsp;</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-price">Unit Price</th>
                                        <th class="cart-product-quantity">Quantity</th>
                                        <th class="cart-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="show_cart_content_in_checkout_page"></tbody>
                            </table>

							</div>
						</div>
						<div class="col-md-6">
							<div class="table-responsive">
								<h4>Cart Totals</h4>

								<table class="table cart">
                                    <tbody class="lead"></tbody>        
                                </table>

							</div>
							<div class="accordion clearfix">
								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Direct Bank Transfer</div>
								<div class="acc_content clearfix">Will integrate this feature soon ;)</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Cheque Payment</div>
								<div class="acc_content clearfix">Will integrate this feature soon ;)</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Paypal</div>
								<div class="acc_content clearfix">Will integrate this feature soon ;)</div>
							</div>
							<?php 
							if(!isset($_SESSION['id'])){?>
								<a href="<?=base_url('pages','login')?>" class="button fright">Please login first</a>
							<?php } else {?>
								<button class="button fright" id="place_order">Place Order</button>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../assets/js/ajax_functions.js"></script>
	<script type="text/javascript" src="../assets/js/customize.js"></script>
	<script type="text/javascript" src="../assets/js/functions.js"></script>
	<!-- amaran notification  -->
	<script type="text/javascript" src="../assets/js/jquery.amaran.min.js"></script>
    <script type="text/javascript">
    // show cart counts when ajax triggered 
    show_cart_counts()
    // show cart contents when ajax triggered
    show_cart_contents()
    // show cart contents in cart page
    show_cart_content_in_checkout_page();
    // show cart total
	show_cart_total();
	// save all products in database 
	place_order();
   </script>

</body>
</html>