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

	<title>Vestido - Admin</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- No Extra plugin used -->

	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>
	<link href="assets/js/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
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
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-add.php" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>Product</th>
													<th>Name</th>
													<th>Category</th>
													<th>Description</th>
													<th>Gender</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>

												<?php
												$i = 1;

												$stmt = $admin->ret("SELECT * FROM `product` inner join `category` on category.c_id = product.c_id ");
												while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
												?>
													<tr>
														<td><img class="tbl-thumb" style="overflow:hidden;object-fit:cover" src="../controller/<?= $row['p_image1']; ?>" alt="Product Image" /></td>
														<td><?= $row['p_name']; ?></td>
														<td><?= $row['c_name']; ?></td>
														<td><?= $row['p_desc']; ?></td>
														<td><?= $row['p_gender']; ?></td>
														<td>
															<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" data-product-id="<?php echo $row['p_id']; ?>" <?php echo $row['p_status'] === 'Active' ? 'checked' : ''; ?> data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row['p_status'] === 'Active' ? 'Active Product' : 'Inactive Product'; ?>">
</div>

														</td>

														<td><?= $row['p_adate']; ?></td>
														<td>
															<div class="btn-group mb-1">
																<button type="button" class="btn btn-outline-success"><a style=" color:#00cc44" href="product-detail.php?product=<?= $row['p_id']; ?>">Info</a></button>
																<button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
																	<span class="sr-only"><a class="dropdown-item" href="product-detail.php?product=<?= $row['p_id']; ?>">Info </a></span>
																</button>

																<div class="dropdown-menu">
																	<a class="dropdown-item" href="product-edit.php?productedit=<?= $row['p_id']; ?>">Edit</a>
																	<!-- <a class="dropdown-item" href="../controller/deleteproduct.php?deleteproduct=<?= $row['p_id']; ?>&image1=<?= $row['p_image1']; ?>&image2=<?= $row['p_image2']; ?>&image3=<?= $row['p_image3']; ?>&image4=<?= $row['p_image4']; ?>&image5=<?= $row['p_image5']; ?>">Delete</a> -->

																</div>
															</div>
														</td>
													</tr>
												<?php  } ?>

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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".form-check-input").change(function() {
				var checkbox = $(this);
				var productId = checkbox.data("product-id");
				var newStatus = checkbox.prop("checked") ? "Active" : "Inactive";

				$.ajax({
					url: "../controller/update_status_ajax.php",
					method: "POST",
					data: {
						productId: productId,
						status: newStatus
					},
					success: function(response) {
						console.log("Status updated successfully!");
					},
					error: function() {
						console.log("Error updating status.");
					}
				});
			});
		});
	</script>


	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Datatables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>