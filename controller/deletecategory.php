<?php
include '../config.php';
$admin = new Admin();

if(isset($_GET['category'])) {
    $categoryID = $_GET['category']; // Assuming you have a hidden input in your form with the category ID

    // Delete the category from the database
    $stmt = $admin->cud("DELETE FROM `category` WHERE `c_id` = '$categoryID'", "successful");

    if ($stmt) {
        // Delete the associated category image from the server
        $imageToDelete = $_GET['c_image'];
        if (!empty($imageToDelete)) {
            $imageFullPath = "" . $imageToDelete; // Adjust the path based on your project structure
            if (file_exists($imageFullPath)) {
                unlink($imageFullPath);
            }
        }

        echo "<script>alert('Category deleted successfully');window.location.href='../admin/category.php';</script>";
    } else {
        echo "<script>alert('Failed to delete category');window.location.href='../admin/category.php';</script>";
    }
}
?>
