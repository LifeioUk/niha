<?php
include '../config.php';
$admin = new Admin();

if(isset($_POST['updateCategory'])){
    $categoryId = $_POST['category_id'];
    $category = $_POST['name'];
    $desc = $_POST['description'];
    $image = $_FILES['image']['name'];
    $imagePath = "uploads/" . $image;

    // Check if a new image has been uploaded
    if (!empty($image)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }

    $updateQuery = "UPDATE `category` SET `c_name`='$category', `c_desc`='$desc'";
    
    if (!empty($image)) {
        $updateQuery .= ", `c_image`='$imagePath'";
    }
    
    $updateQuery .= " WHERE `c_id`='$categoryId'";

    $stmt = $admin->cud($updateQuery, "successful");

    echo "<script> alert('Category Updated successfully');window.location.href='../admin/category.php'; </script>";
}
?>
