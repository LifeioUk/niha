<?php include '../config.php';
$admin = new Admin();


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

	<title>Vestido - Admin Productadd.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="assets/js/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

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
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">

										<div class="col-lg-8">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3" action="../controller/addproduct.php" method="POST" enctype="multipart/form-data"  onsubmit="return validateForm();">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product name</label>
														<input type="text" name="productname" required class="form-control slug-title" id="inputEmail4">
													</div>
													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select name="category" required>
															<option>Select Categories</option>
															<?php
															$i = 1;
															$stmt = $admin->ret("SELECT * FROM `category` ");
															while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
															?>
																<option value="<?= $row['c_id']; ?>"><?= $row['c_name']; ?></option>
															<?php } ?>
														</select>

													</div>
													<div class="col-md-6 mb-25">
														<label class="form-label">Gender</label>
														<div class="form-checkbox-box">
															<div class="form-check form-check-inline">
																<input type="radio" name="gender" required value="Male">
																<label>Male</label>
															</div>

															<div class="form-check form-check-inline">
																<input type="radio" name="gender" required value="Female">
																<label>Female</label>
															</div>

														</div>
													</div>


													<style>
														.color-entry {
															display: inline-block;
															margin: 5px;
															position: relative;
														}

														.color-circle {
															display: inline-block;
															width: 30px;
															height: 30px;
															border-radius: 50%;
															margin-right: 5px;
															cursor: pointer;
														}

														.color-circle .color-delete {
															position: absolute;
															top: -5px;
															right: -5px;
															background-color: #fff;
															border-radius: 50%;
															cursor: pointer;
															padding: 2px;
														}
													</style>

													<div id="color-picker" class="col-md-6 mb-25">
														<label class="form-label">Colors</label>
														<input type="color" class="form-control form-control-color" id="color-input">
														<button type="button" id="add-color-button">Add Color</button>
														<div id="color-entries"></div>
														<input type="hidden" required class="form-control" name="p_color" id="selected-colors" readonly>
													</div>

													<script>
														const colorInput = document.getElementById('color-input');
														const addColorButton = document.getElementById('add-color-button');
														const colorEntriesContainer = document.getElementById('color-entries');
														const selectedColorsField = document.getElementById('selected-colors');
														let selectedColors = [];

														addColorButton.addEventListener('click', () => {
															const colorCode = colorInput.value;
															addColorEntry(colorCode);
															colorInput.value = '#000000'; // Reset color input
														});

														function addColorEntry(colorCode) {
															selectedColors.push(colorCode);
															updateSelectedColorsField();
															updateColorEntries();
														}

														function updateSelectedColorsField() {
															selectedColorsField.value = selectedColors.join(',');
														}

														function updateColorEntries() {
															colorEntriesContainer.innerHTML = '';

															selectedColors.forEach((colorCode) => {
																const colorEntry = document.createElement('div');
																colorEntry.classList.add('color-entry');

																const colorCircle = document.createElement('div');
																colorCircle.classList.add('color-circle');
																colorCircle.style.backgroundColor = colorCode;

																const deleteButton = document.createElement('span');
																deleteButton.classList.add('color-delete');
																deleteButton.innerHTML = 'x';
																deleteButton.addEventListener('click', () => {
																	removeColor(colorCode);
																});

																colorCircle.appendChild(deleteButton);
																colorEntry.appendChild(colorCircle);
																colorEntriesContainer.appendChild(colorEntry);
															});
														}

														function removeColor(colorCode) {
															const colorIndex = selectedColors.indexOf(colorCode);
															if (colorIndex !== -1) {
																selectedColors.splice(colorIndex, 1);
																updateSelectedColorsField();
																updateColorEntries();
															}
														}
													</script>

													<div class="col-md-12">
														<label class="form-label">Description</label>
														<textarea class="form-control" name="description" rows="4"></textarea>
													</div>



											</div>
										</div>
										<div class="col-lg-4">
											<div class="ec-vendor-img-upload">
												<div class="ec-vendor-main-img">
													<div class="avatar-upload">
														<div class="avatar-edit">
															<input type='file' id="imageUpload" class="ec-image-upload" required name="image1" accept=".png, .jpg, .jpeg" />
															<label for="imageUpload"><img  style="object-fit: cover;overflow:hidden" src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="avatar-preview ec-preview">
															<div class="imagePreview ec-div-preview">
																<img class="ec-image-preview" style="object-fit: cover;overflow:hidden" src="assets/img/products/vender-upload-preview.jpg" alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload-set colo-md-12">
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload01" name="image2"   class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img  style="object-fit: cover;overflow:hidden"src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" style="object-fit: cover;overflow:hidden" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload02" name="image3"  class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" style="object-fit: cover;overflow:hidden" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload03" name="image4"   class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" style="object-fit: cover;overflow:hidden"  src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload04" name="image5"  class="ec-image-upload" accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"  style="object-fit: cover;overflow:hidden" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
																</div>
															</div>
														</div>
													
													</div>
												</div>

											</div>

										</div>
										<div class="col-md-12">
											<input type="submit" value="Submit" name="addproduct" class="btn btn-primary" />
										</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->
			<!-- Footer -->

			<?php include 'footer.php' ?>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->
	<script>
    // Function to display a validation message under a specific input field
    function displayValidationMessage(inputElement, message) {
        const messageElement = document.createElement('div');
        messageElement.className = 'validation-message';
        messageElement.textContent = message;

        const parentDiv = inputElement.closest('.col-md-2');
        parentDiv.appendChild(messageElement);
    }

    // Function to validate the form before submission
    function validateForm() {
        // Remove any existing validation messages
        const validationMessages = document.querySelectorAll('.validation-message');
        validationMessages.forEach(messageElement => messageElement.remove());

        const productName = document.getElementById('inputEmail4').value;
        const category = document.getElementsByName('category')[0].value;
        const gender = document.querySelector('input[name="gender"]:checked');
        const selectedColors = document.getElementById('selected-colors').value;

        if (productName.trim() === '') {
            displayValidationMessage(document.getElementById('inputEmail4'), 'Please enter a product name.');
            return false;
        }

        if (category === 'Select Categories') {
            displayValidationMessage(document.getElementsByName('category')[0], 'Please select a category.');
            return false;
        }

        if (!gender) {
            displayValidationMessage(document.querySelector('input[name="gender"]'), 'Please select a gender.');
            return false;
        }

        if (selectedColors === '') {
            displayValidationMessage(document.getElementById('selected-colors'), 'Please add at least one color.');
            return false;
        }

        return true; // If all validations pass, allow form submission
    }
</script>


	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>