<?php include '../config.php';
$admin = new Admin();


if (!isset($_SESSION['S_id'])) {

	header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Vestido - Admin">

	<title>Vestido - Admin category.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="assets/js/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Data Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">



		<?php include 'sidebar.php'; ?>











		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">


			<?php include 'header.php'; ?>


			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
						<h1> Category</h1>
						<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span> Category
						</p>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Add New Category</h4>

										<form action="../controller/addcategory.php" method="POST" enctype="multipart/form-data">

											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Name</label>
												<div class="col-12">
													<input id="text" name="name" class="form-control here slug-title" type="text" required>
												</div>
											</div>



											<div class="form-group row">
												<label class="col-12 col-form-label"> Description</label>
												<div class="col-12">
													<textarea id="sortdescription" name="description" cols="40" rows="2" class="form-control" ></textarea>
												</div>
											</div>


											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Image</label>
												<div class="col-12">
													<input id="text" name="image" class="form-control here slug-title" type="file" required>
												</div>
											</div></br>





											<div class="row">
												<div class="col-12">
													<button name="category" type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Thumb</th>
													<th>Name</th>
													<th>Description</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>

												<?php
												$i = 1;

												$stmt = $admin->ret("SELECT * FROM `category` ");
												while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
												?>

													<tr>
														<td><img class="cat-thumb" style="overflow: hidden;object-fit:cover" src="../controller/<?php echo $row['c_image'];  ?>" alt="Product Image" /></td>
														<td><?php echo $row['c_name']; ?></td>
														<td><?php echo $row['c_desc']; ?></td>
														<td><?php echo $row['c_status']; ?> 
													</td>
														<td>
															
															<div class="">
															<button type="button" class="btn btn-outline-success" onclick="window.location.href = 'editcategory.php?category=<?php echo $row['c_id']; ?>'; "><i class="mdi mdi-pencil"></i></button>
															<!-- <button type="button" class="btn btn-outline-danger" onclick="window.location.href = '../controller/deletecategory.php?category=<?php echo $row['c_id']; ?>&c_image=<?php echo $row['c_image']; ?>';"> <i class="mdi mdi-trash-can"></i></button> -->

																
																

																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												<?php } ?>
												<!-- <tr>
													<td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
													<td>Footwear</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">Sports</span>
															<span class="ec-sub-cat-tag">Casual</span>
															<span class="ec-sub-cat-tag">safety shoes </span>
															<span class="ec-sub-cat-tag">Sandal</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
													<td>Jewelry</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">necklace</span>
															<span class="ec-sub-cat-tag">chain</span>
															<span class="ec-sub-cat-tag">rings</span>
															<span class="ec-sub-cat-tag">earings</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
													<td>Perfume</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">Clothes perfume</span>
															<span class="ec-sub-cat-tag">deodorant </span>
															<span class="ec-sub-cat-tag">Flower fragrance </span>
															<span class="ec-sub-cat-tag">Air Freshener</span>
														</span>
													</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/cosmetics.png" alt="Product Image" /></td>
													<td>Cosmetics</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">10</span>
															<span class="ec-sub-cat-tag">Makeup kit</span>
															<span class="ec-sub-cat-tag">Hair gel</span>
															<span class="ec-sub-cat-tag">sunscreen</span>
															<span class="ec-sub-cat-tag">facewash</span>
															<span class="ec-sub-cat-tag">Body shop</span>
															<span class="ec-sub-cat-tag">Lipstick</span>
															<span class="ec-sub-cat-tag">eye liner</span>
															<span class="ec-sub-cat-tag">Hair Shampoo</span>
															<span class="ec-sub-cat-tag">Beauty Cream</span>
															<span class="ec-sub-cat-tag">Skin Serum</span>
														</span>
													</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-danger">Low</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/glasses.png" alt="Product Image" /></td>
													<td>Glasses</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">2</span>
															<span class="ec-sub-cat-tag">Sunglasses </span>
															<span class="ec-sub-cat-tag">Lenses </span>
														</span>
													</td>
													<td>82</td>
													<td>10061</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/bag.png" alt="Product Image" /></td>
													<td>Bags</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">shopping bag</span>
															<span class="ec-sub-cat-tag">Gym backpack</span>
															<span class="ec-sub-cat-tag">purse </span>
															<span class="ec-sub-cat-tag">wallet </span>
														</span>
													</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
													<td>Footwear</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">Sports</span>
															<span class="ec-sub-cat-tag">Casual</span>
															<span class="ec-sub-cat-tag">safety shoes </span>
															<span class="ec-sub-cat-tag">Sandal</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
													<td>Jewelry</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">necklace</span>
															<span class="ec-sub-cat-tag">chain</span>
															<span class="ec-sub-cat-tag">rings</span>
															<span class="ec-sub-cat-tag">earings</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
													<td>Perfume</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
															<span class="ec-sub-cat-tag">Clothes perfume</span>
															<span class="ec-sub-cat-tag">deodorant </span>
															<span class="ec-sub-cat-tag">Flower fragrance </span>
															<span class="ec-sub-cat-tag">Air Freshener</span>
														</span>
													</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr> -->

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<?php include 'footer.php'; ?>

		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>