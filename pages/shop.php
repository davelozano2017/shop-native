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
                                <a href="<?= base_url('pages','shop')?>" class="standard-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png"></a>
                                <a href="<?= base_url('pages','shop')?>" class="retina-logo" data-dark-logo="../assets/images/logo.png"><img src="../assets/images/logo.png"></a>
                            </div><!-- #logo end -->
        
                            <!-- Primary Navigation
                            ============================================= -->
                            <nav id="primary-menu">
        
                                <ul>
                                    <li class="current"><a href="<?= base_url('pages','shop')?>"><div>Shop</div></a></li>
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
			
				<h1>Shop </h1>
				<span>Start Buying Your Smart Phone </span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shop</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<!-- Shop ============================================= -->
					<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">

                        <?php 
                        foreach($data->get_products() as $row_products):?>
						<?php $price_with_discount = $row_products['product_price'] - ($row_products['product_price'] * ($row_products['product_discount'] / 100)); ?>
						<div class="product clearfix">
							<div class="product-image">
							
								<?php foreach($data->get_image_by_id($row_products['product_id']) as $row_image):?>
								<a href="<?=base_url('pages','products?id='.$row_products['product_id'])?>"><img style="width:280px;height:250px" src="../assets/uploads/<?=$row_products['product_brand']?>/<?=$row_image['product_images']?>" alt="<?=$row_products['product_name']?>"></a>
								<?php endforeach;?>
								<?= $row_products['product_discount'] == 0 ? '' : '<div class="sale-flash">'.$row_products['product_discount'].'% Off*</div>';?>
								<div class="product-overlay">
									<input type="hidden" id="quantity<?=$row_products['product_id']?>" value=1 >
									<?php 
									if($row_products['product_stocks'] == 0){?>
										<a style="cursor:pointer" class="add-to-cart"><span> Not Available </span></a>
									<?php } else { ?>
										<a style="cursor:pointer" id="add_to_cart<?=$row_products['product_id']?>" onclick="add_to_cart('<?=$row_products['product_id']?>','Add',1)" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart </span></a>
									<?php } ?>
									<a href="../class/includes/quick-view.php?product_id=<?=$row_products['product_id']?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
								</div>
							</div>
							<div class="product-desc">
								<div class="product-title"><h3><a href="<?=base_url('pages','products?id='.$row_products['product_id'])?>"><?= $row_products['product_name']?></a></h3></div>
								<div class="product-price"><?= $row_products['product_discount'] == 0 ? '<ins>&#8369;'.number_format($row_products['product_price'],2).'</ins>' : '<del>&#8369;'.number_format($row_products['product_price'],2).'</del> <ins>&#8369;'.number_format(sprintf("%1.2f",round($price_with_discount)),2).'</ins>';?></div>
								<div class="product-rating">
									<span>Brand:</span> <?=$row_products['product_brand']?>
								</div>
								
							</div>
						</div>
						<?php endforeach;?>

					</div><!-- #shop end -->

					

				</div>

            </div>
            
            

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	
	<script type="text/javascript" src="<?= base_url('assets/js/','jquery.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/','plugins.js')?>"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?= base_url('assets/js/','ajax_functions.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/','customize.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/','functions.js')?>"></script>
	<!-- amaran notification  -->
	<script type="text/javascript" src="<?= base_url('assets/js/','jquery.amaran.min.js')?>"></script>
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