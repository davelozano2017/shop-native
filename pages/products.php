<?php include '../class/config.php';?>
<!DOCTYPE html>
<?php 
$product_id = $data->get('id');
if(!$product_id) { header('location:index.php'); }
$query = $data->get_product_per_page_using_id($product_id);
$query->num_rows > 0 ? null : redirect('pages','shop');
$row = $query->fetch_object();
$price_with_discount = $row->product_price - ($row->product_price * ($row->product_discount / 100));
$query = $data->get_related_product_by_brand($row->product_brand,$row->product_id);
?>
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
	<title><?=$row->product_name?> | Webkixshop</title>

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
                                    <li><a href="<?= base_url('pages','shop')?>"><div>Shop</div></a></li>
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
                    <h1><?=$row->product_name?></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Shop</a></li>
                        <li class="active"><?=$row->product_brand?></li>
                    </ol>
                </div>

            </section><!-- #page-title end -->
        
                <!-- Content
                ============================================= -->
                <section id="content">
        
                    <div class="content-wrap">
        
                        <div class="container clearfix">
        
                            <div class="single-product">
        
                                <div class="product">
        
                                    <div class="col_two_fifth">
        
                                        <!-- Product Single - Gallery
                                        ============================================= -->
                                        <div class="product-image">
                                            <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                                <div class="flexslider">
                                                    <div class="slider-wrap" data-lightbox="gallery">
                                                        <?php foreach($data->get_product_for_slides($product_id) as $row_slides):?>
                                                            <div class="slide" data-thumb="../assets/uploads/<?=$row->product_brand?>/<?=$row_slides['product_images']?>"><img src="../assets/uploads/<?=$row->product_brand?>/<?=$row_slides['product_images']?>" alt="Pink Printed Dress"></div>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?= $row->product_discount == 0 ? '' : '<div class="sale-flash">'.$row->product_discount.'% Off*</div>';?>
                                        </div><!-- Product Single - Gallery End -->
        
                                    </div>
        
                                    <div class="col_two_fifth product-desc">
        
                                        <!-- Product Single - Price
                                        ============================================= -->
                                        <div class="product-price"><?= $row->product_discount == 0 ? '<ins>&#8369;'.number_format($row->product_price,2).'</ins>' : '<del>&#8369;'.number_format($row->product_price,2).'</del> <ins>&#8369;'.number_format(sprintf("%1.2f",round($price_with_discount)),2).'</ins>';?></div>
        
                                        <!-- Product Single - Rating
                                        ============================================= -->
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                        </div><!-- Product Single - Rating End -->
        
                                        <div class="clear"></div>
                                        <div class="line"></div>
        
                                        <!-- Product Single - Quantity & Cart Button
                                        ============================================= -->
                                        <div class="quantity clearfix">
                                            <input type="hidden" id="product_id" value="<?=$row->product_id?>">
                                            <input type="button" value="-" id="minus" class="minus">
                                            <input type="text" value=1 name="quantity" title="Qty" id="quantity<?=$row->product_id?>" class="qty"/>
                                            <input type="button" value="+" id="plus" class="plus">
                                        </div>
                                        <button id="add_to_cart<?=$row->product_id?>" onclick="add_to_cart('<?=$row->product_id?>','Add')" class="add-to-cart button nomargin add_to_cart_in_quick_view">Add to cart</button>
        
                                        <div class="clear"></div>
                                        <div class="line"></div>
        
                                        <!-- Product Single - Short Description
                                        ============================================= -->
                                        <?=$row->product_description?>
        
                                        <!-- Product Single - Meta
                                        ============================================= -->
                                        <div class="panel panel-default product-meta">
                                            <div class="panel-body">
                                                <span class="posted_in">Stocks: <a><?=$row->product_stocks?></a></span>
                                                <span class="posted_in">Brand: <a><?=$row->product_brand?></a></span>
                                                <span class="posted_in">Category: <a><?=$row->product_category?></a></span></div>
                                            </div>
                                        </div><!-- Product Single - Meta End -->
        
        
                                    </div>
        
                                    <div class="col_one_fifth col_last">
        
                                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                                            <div class="fbox-icon">
                                                <i class="icon-thumbs-up2"></i>
                                            </div>
                                            <h3>100% Original</h3>
                                            <p class="notopmargin">We guarantee you the sale of Original Brands.</p>
                                        </div>
        
                                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                                            <div class="fbox-icon">
                                                <i class="icon-credit-cards"></i>
                                            </div>
                                            <h3>Payment Options</h3>
                                            <p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
                                        </div>
        
                                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                                            <div class="fbox-icon">
                                                <i class="icon-truck2"></i>
                                            </div>
                                            <h3>Free Shipping</h3>
                                            <p class="notopmargin">Free Delivery to 100+ Locations on orders above $40.</p>
                                        </div>
        
                                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                                            <div class="fbox-icon">
                                                <i class="icon-undo"></i>
                                            </div>
                                            <h3>30-Days Returns</h3>
                                            <p class="notopmargin">Return or exchange items purchased within 30 days.</p>
                                        </div>
        
                                    </div>
        
                                    <div class="col_full nobottommargin">
        
                                        <div class="tabs clearfix nobottommargin" id="tab-1">
        
                                            <ul class="tab-nav clearfix">
                                                <li><a href="#review-tab"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
                                            </ul>
        
                                            <div class="tab-container">
                                                <div class="tab-content clearfix" id="review-tab">
                                                    <div id="reviews" class="clearfix">
                                                        <ol class="commentlist clearfix">
                                                            <li class="comment even thread-even depth-1" id="li-comment-1">
                                                                <div id="comment-1" class="comment-wrap clearfix">
        
                                                                    <div class="comment-meta">
                                                                        <div class="comment-author vcard">
                                                                            <span class="comment-avatar clearfix">
                                                                            <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="comment-content clearfix">
                                                                        <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment"><?=date('F d, Y h:i:s A')?></a></span></div>
                                                                        <p>Will integrate this feature soon ;) </p>
                                                                        <div class="review-comment-ratings">
                                                                            <i class="icon-star3"></i>
                                                                            <i class="icon-star3"></i>
                                                                            <i class="icon-star3"></i>
                                                                            <i class="icon-star3"></i>
                                                                            <i class="icon-star3"></i>
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="clear"></div>
        
                                                                </div>
                                                            </li>
        
        
                                                        </ol>
        
                                                        
                                                        <!-- Modal Reviews End -->
        
                                                    </div>
        
                                                </div>
        
                                            </div>
        
                                        </div>
        
                                    </div>
        
                                </div>
        
                            <div class="clear"></div><div class="line"></div>
        
                            <div class="col_full nobottommargin">
        
                                <h4>Related Products</h4>
        
                                <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
        
                                <!-- product slider here  -->
                                <?php if($query->num_rows > 0) {?>
                                    <?php 
                                    foreach($query as $row_product_catousel):?>
                                        <div class="oc-item">
                                            <div class="product iproduct clearfix">
                                                <div class="product-image">
                                                <?php foreach($data->get_image_by_id($row_product_catousel['product_id']) as $row_image):?>
                                                <a href="products?id=<?=$row_product_catousel['product_id']?>"><img style="width:280px;height:250px" src="../assets/uploads/<?=$row_product_catousel['product_brand']?>/<?=$row_image['product_images']?>" alt="<?=$row_product_catousel['product_name']?>"></a>
                                                <?php endforeach;?>
                                                <?= $row_product_catousel['product_discount'] == 0 ? '' : '<div class="sale-flash">'.$row_product_catousel['product_discount'].'% Off*</div>';?>
                                                    <div class="product-overlay">
                                                    <input type="hidden" id="quantity<?=$row_product_catousel['product_id']?>" value=1 >
                                                    <a style="cursor:pointer" id="add_to_cart<?=$row_product_catousel['product_id']?>" onclick="add_to_cart('<?=$row_product_catousel['product_id']?>','Add',1)" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart </span></a>
                                                    <a href="../class/includes/quick-view.php?product_id=<?=$row_product_catousel['product_id']?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc center">
                                                    <div class="product-title"><h3><a href="products.php?id=<?=$row_product_catousel['product_id']?>"><?= $row_product_catousel['product_name']?></a></h3></div>
                                                    <div class="product-price"><?= $row_product_catousel['product_discount'] == 0 ? '<ins>&#8369;'.number_format($row_product_catousel['product_price'],2).'</ins>' : '<del>&#8369;'.number_format($row_product_catousel['product_price'],2).'</del> <ins>&#8369;'.number_format(sprintf("%1.2f",round($price_with_discount)),2).'</ins>';?></div>
                                                    <div class="product-rating">
                                                        <span>Brand:</span> <?=$row_product_catousel['product_brand']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php } else {?>
                                    <div class="alert alert-info ">No related products found.</div>
                                <?php } ?>
                                <!-- end product slider -->
                                    
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
    // add quantity in quick view and product per page 
    add_quantity_in_product_per_page_quick_view();
    // show cart counts when ajax triggered 
    show_cart_counts()
    // show cart contents when ajax triggered
    show_cart_contents()
 
    </script>
</body>
</html>