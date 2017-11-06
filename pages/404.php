<?php include '../class/config.php';?>

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
	<title>Shop | Webkixshop</title>

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
                                <a href="index.php" class="standard-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png"></a>
                                <a href="index.php" class="retina-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png"></a>
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
						<h1>Page Not Found</h1>
						<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li class="active">404</li>
						</ol>
					</div>
		
				</section><!-- #page-title end -->
		
				<!-- Content
				============================================= -->
				<section id="content">
		
					<div class="content-wrap">
		
						<div class="container clearfix">
		
							<div class="col_half nobottommargin">
								<div class="error404 center">404</div>
							</div>
		
							<div class="col_half nobottommargin col_last">
		
								<div class="heading-block nobottomborder">
									<h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
									<span>Try searching for the best match or browse the links below:</span>
								</div>
		
								<form action="#" method="get" role="form" class="nobottommargin">
									<div class="input-group input-group-lg">
										<input type="text" class="form-control" placeholder="Search for Pages...">
										<span class="input-group-btn">
											<button class="btn btn-danger" type="button">Search</button>
										</span>
									</div>
								</form>
		
								<div class="col_one_third widget_links topmargin nobottommargin">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">FAQs</a></li>
									</ul>
								</div>
		
								<div class="col_one_third widget_links topmargin nobottommargin">
									<ul>
										<li><a href="#">Shop</a></li>
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Blog</a></li>
									</ul>
								</div>
		
								<div class="col_one_third widget_links topmargin nobottommargin col_last">
									<ul>
										<li><a href="#">Support</a></li>
										<li><a href="#">Forums</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
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
	</script>
<?php 
if(isset($_SESSION['message'])) { ?>
<script type="text/javascript">
	$.amaran({
        'theme'     : 'colorful', 'content'   : { bgcolor: '#336699',color: '#fff',message: '<?=$_SESSION['message']?>' },
        'position'  : 'top left', 'outEffect' : 'slideBottom'
	});
</script>
<?php unset($_SESSION['message']); } ?>
</body>
</html>