<?php include '../config.php';
$admin = new Admin();

$pid =  $_GET['product'];

$stmt = $admin->ret("SELECT * FROM `product` inner join `category` on category.c_id = product.c_id  where product.p_id=$pid  ");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$colorsArray = explode(',', $row['p_color']);
// if(!isset($_SESSION['S_id'])){

// 	header('Location:login.php');
//  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Vestido - Admin">

	<title>Vestido - Admin</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="assets/js/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
	<link href='assets/plugins/slick/slick.min.css' rel='stylesheet'>
	<link href='assets/plugins/swiper/swiper-bundle.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- LEFT MAIN SIDEBAR -->


		<?php include 'sidebar.php'; ?>

		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->

			<?php include 'header.php'; ?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product Detail</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-edit.php?productedit=<?= $pid ?>" class="btn btn-primary"> Edit
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Product Detail</h2>
								</div>

								<div class="card-body product-detail">
									<div class="row">
										<div class="col-xl-4 col-lg-6">
											<div class="row">
												<div class="single-pro-img">
													<div class="single-product-scroll">
														<div class="single-product-cover">
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive" src="../controller/<?= $row['p_image1'] ?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive" src="../controller/<?= $row['p_image2'] ?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive" src="../controller/<?= $row['p_image3'] ?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive" src="../controller/<?= $row['p_image4'] ?>" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive" src="../controller/<?= $row['p_image5'] ?>" alt="">
															</div>
														</div>
														<div class="single-nav-thumb">
															<div class="single-slide">
																<img class="img-responsive" src="../controller/<?= $row['p_image1'] ?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive" src="../controller/<?= $row['p_image2'] ?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive" src="../controller/<?= $row['p_image3'] ?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive" src="../controller/<?= $row['p_image4'] ?>" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive" src="../controller/<?= $row['p_image5'] ?>" alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-5 col-lg-6">
											<div class="row product-overview">
												<div class="col-12">
													<h5 class="product-title"><?= $row['p_name'] ?></h5>

													<p class="product-desc"><?= $row['p_desc'] ?></p>


													<ul class="product-color">
														<?php foreach ($colorsArray as $color) { ?>
															<li class="color"><span style="background-color: <?= $color ?>;"></span></li>
														<?php } ?>

													</ul>

													<!-- <div class="product-stock">
														<div class="stock">
															<p class="title">Available</p>
															<p class="text">180</p>
														</div>
														<div class="stock">
															<p class="title">Pending</p>
															<p class="text">50</p>
														</div>
														<div class="stock">
															<p class="title">InOrder</p>
															<p class="text">20</p>
														</div>
													</div> -->
												</div>
											</div>
										</div>

									</div>

									<!-- <div class="row review-rating mt-4">
										<div class="col-12">
											<ul class="nav nav-tabs" id="myRatingTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="product-detail-tab" data-bs-toggle="tab" data-bs-target="#productdetail" href="#productdetail" role="tab" aria-selected="true">
														<i class="mdi mdi-library-books mr-1"></i> Detail</a>
												</li>

												<li class="nav-item">
													<a class="nav-link" id="product-information-tab" data-bs-toggle="tab" data-bs-target="#productinformation" href="#productinformation" role="tab" aria-selected="false">
														<i class="mdi mdi-information mr-1"></i>Info</a>
												</li>

												<li class="nav-item">
													<a class="nav-link" id="product-reviews-tab" data-bs-toggle="tab" data-bs-target="#productreviews" href="#productreviews" role="tab" aria-selected="false">
														<i class="mdi mdi-star-half mr-1"></i> Reviews</a>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent2">
												<div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry.
														Lorem Ipsum has been the industry's standard dummy text ever
														since the
														1500s, when an unknown printer took a galley of type and
														scrambled it to
														make a type specimen book. It has survived not only five
														centuries, but also
														the leap into electronic typesetting, remaining essentially
														unchanged.
													</p>
													<ul class="features">
														<li>Any Product types that You want - Simple, Configurable</li>
														<li>Downloadable/Digital Products, Virtual Products</li>
														<li>Inventory Management with Backordered items</li>
														<li>Flatlock seams throughout.</li>
													</ul>
												</div>

												<div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
													<ul>
														<li><span>Weight</span> 1000 g</li>
														<li><span>Dimensions</span> 35 × 30 × 7 cm</li>
														<li><span>Color</span> Black, Pink, Red, White</li>
													</ul>
												</div>

												<div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
													<div class="ec-t-review-wrapper">
														<div class="ec-t-review-item">
															<div class="ec-t-review-avtar">
																<img src="assets/img/review-image/1.jpg" alt="">
															</div>
															<div class="ec-t-review-content">
																<div class="ec-t-review-top">
																	<p class="ec-t-review-name">Jeny Doe</p>
																	<div class="ec-t-rate">
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star"></i>
																	</div>
																</div>
																<div class="ec-t-review-bottom">
																	<p>Lorem Ipsum is simply dummy text of the printing
																		and
																		typesetting industry.
																	</p>
																</div>
															</div>
														</div>
														<div class="ec-t-review-item">
															<div class="ec-t-review-avtar">
																<img src="assets/img/review-image/2.jpg" alt="">
															</div>
															<div class="ec-t-review-content">
																<div class="ec-t-review-top">
																	<p class="ec-t-review-name">Linda Morgus</p>
																	<div class="ec-t-rate">
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star"></i>
																	</div>
																</div>
																<div class="ec-t-review-bottom">
																	<p>Lorem Ipsum is simply dummy text of the printing
																		and
																		typesetting industry.
																	</p>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div>
			 <!-- End Content Wrapper -->

			<!-- Footer -->

			<?php include 'footer.php'; ?>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
	<script src="assets/plugins/swiper/swiper-bundle.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>