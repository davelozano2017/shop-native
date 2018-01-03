<?php include '../class/config.php';?>
<?php
if(isset($_SESSION['id'])) {
    redirect('pages','my-account');
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
	<title>Login / Register | Webkixshop</title>

</head>

<body ng-app="app" ng-controller="mainController" class="stretched">

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
                                <a href="<?= base_url('pages','shop')?>" class="standard-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png"></a>
                                <a href="<?= base_url('pages','shop')?>" class="retina-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png"></a>
                            </div><!-- #logo end -->
        
                            <!-- Primary Navigation
                            ============================================= -->
                            <nav id="primary-menu">
        
                                <ul>
                                    <li><a href="<?= base_url('pages','shop')?>"><div>Shop</div></a></li>
                                    <li><a href="<?= base_url('pages','login')?>"><div>Login</div></a></li>
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
                    <h1>Login / Register</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url('pages','shop')?>">Shop</a></li>
                        <li class="active">Login / Register</li>
                    </ol>
                </div>

            </section><!-- #page-title end -->
        
                <!-- Content
                ============================================= -->
                <section id="content">
        
                    <div class="content-wrap">

                        <div class="container clearfix">

                            <div class="col_one_third nobottommargin">

                                <div class="well well-lg nobottommargin">
                                    <form id="loginForm" name="loginForm" novalidate class="nobottommargin" method="post">
                                        <h3>Login to your Account</h3>

                                        <div class="col_full">
                                            <label for="login-form-username">Username:</label>
                                            <input type="text" id="username" ng-model="username" name="username" class="form-control" required/>
                                            <span ng-messages="loginForm.username.$error" ng-if="loginForm.username.$dirty">
                                                <strong ng-message="required" class="text-danger">This field is required.</strong>
                                            </span>
                                        </div>

                                        <div class="col_full">
                                            <label for="login-form-password">Password:</label>
                                            <input type="password" id="password" name="password" ng-model="password" class="form-control" required/>
                                            <span ng-messages="loginForm.password.$error" ng-if="loginForm.password.$dirty">
                                                <strong ng-message="required" class="text-danger">This field is required.</strong>
                                            </span>
                                        </div>

                                        <div class="col_full nobottommargin">
                                            <button ng-disabled="loginForm.$invalid" class="button button-blue ">Login</button>
                                            <a href="#" class="fright">Forgot Password?</a>
                                        </div>

                                    </form>
                                </div>

                            </div>

                            <div class="col_two_third col_last nobottommargin">

                                <h3>Don't have an Account? Register Now.</h3>

                                <form id="registerForm" name="registerForm" class="nobottommargin" action="#" method="post">

                                    <div class="col_half">
                                        <label for="register-form-name">Name:</label>
                                        <input type="text" id="name" name="name" ng-model="name" class="form-control" required/>
                                        <span ng-messages="registerForm.name.$error" ng-if="registerForm.name.$dirty">
                                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                                        </span>
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="register-form-email">Email Address:</label>
                                        <input type="email" class="form-control" ng-model="email" ng-model="email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" name="email" id="email" placeholder="Email Address" required>
                                        <span ng-messages="registerForm.email.$error" ng-if="registerForm.email.$dirty">
                                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                                            <strong ng-message="pattern" class="text-danger">Please enter a valid email address.</strong>
                                        </span>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_half">
                                        <label for="register-form-username">Username:</label>
                                        <input type="text" id="r_username" name="r_username" ng-model="r_username" class="form-control" required/>
                                        <span ng-messages="registerForm.r_username.$error" ng-if="registerForm.r_username.$dirty">
                                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                                        </span>
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="register-form-phone">Contact:</label>
                                        <input type="text" id="contact" name="contact" ng-model="contact" class="form-control" ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/" required/>
                                        <span ng-messages="registerForm.contact.$error" ng-if="registerForm.contact.$dirty">
                                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                                            <strong ng-message="pattern" class="text-danger">Must be a valid 10 digit phone number.</strong>
                                        </span>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_half">
                                        <label for="register-form-password">Password:</label>
                                        <input type="password" class="form-control" id="r_password" ng-minlength=6 ng-model="r_password" name="r_password" required password-verify="{{confirm_password}}">
                                        <span ng-messages="registerForm.r_password.$error" ng-if="registerForm.r_password.$dirty">
                                            <strong ng-message="required" class="text-danger">This field is required.</strong>
                                            <strong ng-message="minlength" class="text-danger">Password is too short.</strong>
                                        </span>
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="register-form-repassword">Re-enter Password:</label>
                                        <input type="password" class="form-control" ng-model="confirm_password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required password-verify="{{r_password}}">
                                        <span ng-messages="registerForm.confirm_password.$error" ng-if="registerForm.confirm_password.$dirty">
                                            <strong ng-message="required" class="text-danger" style="display:block">This field is required.</strong>
                                            <strong ng-show="confirm_password != password" class="text-danger">Password not matched.</strong>
                                        </span>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-blue nomargin" id="register" ng-disabled="registerForm.$invalid">Register Now</button>
                                    </div>

                                </form>

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
    <!-- form validation using angularjs -->
    <script src="../assets/angular/1.4.8.angular.min.js"></script>
    <script src="../assets/angular/1.4.2.angular.min.js"></script>
    <script src="../assets/angular/passwordmatch.js"></script>
    <script type="text/javascript">
    // add quantity in quick view and product per page 
    add_quantity_in_product_per_page_quick_view();
    // show cart counts when ajax triggered 
    show_cart_counts()
    // show cart contents when ajax triggered
    show_cart_contents()
    var app = angular.module('app', ['ngMessages']);
    app.controller('mainController',function($scope){});
    </script>
</body>
</html>