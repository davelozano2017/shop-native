<?php include '../../class/config.php';?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/style.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/responsive.css" type="text/css" />
	<!-- amaran notification  -->
	<link rel="stylesheet" href="../../assets/css/amaran.min.css" type="text/css" />
	<link rel="stylesheet" href="../../assets/css/animate.min.css" type="text/css" />
	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="../../assets/css/components/bs-filestyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Admin | Webkixshop</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
        
        <!-- Top Bar
            ============================================= -->
            <div id="top-bar">

                <div class="container clearfix">

                    <div class="col_half nobottommargin">

                        <!-- Top Links
                        ============================================= -->
                        <div class="top-links">
                            <ul>
                                <li><a href="index.php">Products</a></li>
                            </ul>
						</div>
						<!-- .top-links end -->

                    </div>

                    <div class="col_half fright col_last nobottommargin">

                        <!-- Top Social
                        ============================================= -->
                        <div id="top-social">
                            <ul>
                                <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-off"></i></span><span class="ts-text">Logout</span></a></li>
                            </ul>
                        </div><!-- #top-social end -->

                    </div>

                </div>

            </div><!-- #top-bar end -->
            
		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">
        
                    <div class="container clearfix">
        
                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="index.php" class="standard-logo" data-dark-logo="../../assets/images/logo.png"><img src="../../assets/images/logo.png"></a>
                            <a href="index.php" class="retina-logo" data-dark-logo="../../assets/images/logo.png"><img src="../../assets/images/logo.png"></a>
                        </div><!-- #logo end -->
        
                    </div>
        
                    <div id="header-wrap">
        
                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="style-2">
        
                            <div class="container clearfix">
        
                                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        
                                <ul>
                                    <li class="current"><a href="index.php"><div>Products</div></a></li>
                                </ul>
        
        
                            </div>
        
                        </nav><!-- #primary-menu end -->
        
                    </div>
        
                </header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>products</h1>
				<span>Start adding your products now!</span>
				<ol class="breadcrumb">
					<li><a href="#">home</a></li>
					<li class="active">products</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container  clearfix">
			
				<!-- Button trigger modal -->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-primary" onclick="modal_add_product()"><i class="icon-plus"></i> </button>
							</div>
						</div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-body">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">ADD PRODUCTS</h4>
									</div>
									<div class="modal-body">
											<form name="FormAddProducts" id="FormAddProducts" class="nobottommargin" method="post">
												<div class="col_one_third">
													<label for="">Name <small>*</small></label>
													<input type="hidden" id="product_id" name="product_id" class="sm-form-control required" />
													<input type="text" id="product_name" name="product_name" class="sm-form-control required" />
												</div>

												<div class="col_one_third">
													<label for="">Brand <small>*</small></label>
													<select id="product_brand" name="product_brand" class="sm-form-control" required>
														<?php foreach ($data->get_product_brand() as $row_brand):?>
															<option value="<?=$row_brand['product_brand']?>"><?=$row_brand['product_brand']?></option>
														<?php endforeach;?>
													</select>
												</div>

												<div class="col_one_third col_last">
													<label for="template-contactform-phone">Category <small>*</small></label>
													<select id="product_category" name="product_category" class="sm-form-control" required>
														<?php foreach ($data->get_product_category() as $row_category):?>
															<option value="<?=$row_category['product_category']?>"><?=$row_category['product_category']?></option>
														<?php endforeach;?>
													</select>
												</div>

												<div class="clear"></div>

												<div class="col_one_third">
													<label for="">Price <small>*</small></label>
													<input type="number" min=0 id="product_price" name="product_price" class="required sm-form-control" required/>
												</div>

												<div class="col_one_third">
													<label for="">Discount <small>*</small></label>
													<select id="product_discount" name="product_discount" class="sm-form-control" required>
														<?php for ($i=0; $i <= 100 ; $i++) { ?>
															<option value="<?=$i?>"><?=$i?>%</option>
														<?php }?>
													</select>
												</div>

												<div class="col_one_third col_last">
													<label for="">Stocks <small>*</small></label>
													<input type="number" min=0 id="product_stocks" name="product_stocks" class="required sm-form-control" required/>
												</div>

												<div class="clear"></div>

												<div class="col_full">
													<label for="">Description <small>*</small></label>
													<textarea class="required sm-form-control" id="prod_desc" name="prod_desc" rows="6" cols="30" required></textarea>
													<textarea hidden id="product_description" name="product_description" rows="6" cols="30"></textarea>
												</div>

										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" id="btn_products" class="btn btn-primary">Add Product</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- end modal  -->

					<!-- modal upload pictures  -->
					<div class="modal fade" id="modal_upload_pictures" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-body">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">UPLOAD IMAGES</h4>
									</div>
									<div class="modal-body">
										<form name="FormImageProducts" id="FormImageProducts" class="nobottommargin" method="post" enctype="multipart/form-data">
										<div class="col_full">
											<label for="">IMAGE <small>*</small></label>
											<input type="hidden" id="image_id">
											<input type="hidden" id="image_brand">
											<input id="image-multiple" name="files[]" type="file" class="file upload_image_products" multiple data-show-upload="false" data-show-caption="true" data-show-preview="true">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" id="btn_images" class="btn btn-primary">Add Image</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- end modal upload pictures  -->

					
					<div class="table-responsive">
					<table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Brand</th>
									<th>Category</th>
									<th>Price</th>
									<th>Discount</th>
									<th>Stocks</th>
									<th>Status</th>
									<th colspan=3></th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Brand</th>
									<th>Category</th>
									<th>Price</th>
									<th>Discount</th>
									<th>Stocks</th>
									<th>Status</th>
									<th colspan=3></th>
								</tr>
							</tfoot>
							<tbody id="show_table"></tbody>
						</table>
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
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	<!-- ajax functions  -->
	<script type="text/javascript" src="../../assets/js/ajax_functions.js"></script>
	<script type="text/javascript" src="../../assets/js/plugins.js"></script>
    <!-- Bootstrap File Upload Plugin
    <script type="text/javascript" src="../../assets/js/components/bs-filestyle.js"></script> -->
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../../assets/js/functions.js"></script>	
	
	<!-- customized scripts  -->
	<script type="text/javascript" src="../../assets/js/customize.js"></script>
	<!-- amaran notification  -->
	<script type="text/javascript" src="../../assets/js/jquery.amaran.min.js"></script>
	<!-- Bootstrap File Upload Plugin -->
	<script type="text/javascript" src="../../assets/js/components/bs-filestyle.js"></script>
	<!-- CK Editor -->
	<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
	<!-- Bootstrap Data Table Plugin -->
	<script type="text/javascript"> 
		$(document).ready(function(){
			show_products();
			// execute add products
			add_products();
			// implement ckeditor
			implement_ckeditor();
			// implement multi image
			implement_multi_image();	
			// execute upload product images
			upload_product_images();
		})
	</script>
</body>
</html>