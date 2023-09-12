<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['category'])) {
    $category = $_POST['name'];
    $desc = $_POST['description'];

    // Get the original image file name
    $originalImageName = basename($_FILES['image']['name']);

    // Sanitize the image file name to remove unsafe characters
    $sanitizedImageName = preg_replace("/[^A-Za-z0-9_.-]/", '', $originalImageName);

    // Construct the new image file name using category and sanitized name
    $image = "uploads/" . $category . "_" . $sanitizedImageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

    $stmt = $admin->cud("INSERT INTO `category`(`c_name`, `c_desc`, `c_image`, `c_status`) VALUES ('$category','$desc','$image','Active')", "successful");

    // Redirect after adding category
     echo "<script> alert('Category Added  successfully');window.location.href='../admin/category.php'; </script>";

}
?>
