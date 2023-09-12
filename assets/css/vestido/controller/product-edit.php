<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['editproduct'])) {
    $product_id = $_POST['product_id']; // Assuming you have a form field for product_id

    $name = $_POST['productname'];
    $desc = $_POST['description'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $colors = $_POST['p_color'];

    // Check if new images are uploaded and process them
    $image1 = '';
    if ($_FILES['image1']['size'] > 0) {
        $image1 = "uploads/products/" . basename($_FILES['image1']['name']);
        move_uploaded_file($_FILES['image1']['tmp_name'], $image1);
    }

    $image2 = '';
    if ($_FILES['image2']['size'] > 0) {
        $image2 = "uploads/products/" . basename($_FILES['image2']['name']);
        move_uploaded_file($_FILES['image2']['tmp_name'], $image2);
    }

    $image3 = '';
    if ($_FILES['image3']['size'] > 0) {
        $image3 = "uploads/products/" . basename($_FILES['image3']['name']);
        move_uploaded_file($_FILES['image3']['tmp_name'], $image3);
    }

    $image4 = '';
    if ($_FILES['image4']['size'] > 0) {
        $image4 = "uploads/products/" . basename($_FILES['image4']['name']);
        move_uploaded_file($_FILES['image4']['tmp_name'], $image4);
    }

    $image5 = '';
    if ($_FILES['image5']['size'] > 0) {
        $image5 = "uploads/products/" . basename($_FILES['image5']['name']);
        move_uploaded_file($_FILES['image5']['tmp_name'], $image5);
    }

    // Build the update query
    $updateQuery = "UPDATE `product` SET 
                    `c_id`='$category', 
                    `p_name`='$name', 
                    `p_desc`='$desc', 
                    `p_gender`='$gender', 
                    `p_color`='$colors', 
                    `p_status`='Active'";

    // Append image fields to the query if new images were uploaded
    if (!empty($image1)) {
        $updateQuery .= ", `p_image1`='$image1'";
    }
    if (!empty($image2)) {
        $updateQuery .= ", `p_image2`='$image2'";
    }
    if (!empty($image3)) {
        $updateQuery .= ", `p_image3`='$image3'";
    }
    if (!empty($image4)) {
        $updateQuery .= ", `p_image4`='$image4'";
    }
    if (!empty($image5)) {
        $updateQuery .= ", `p_image5`='$image5'";
    }

    $updateQuery .= " WHERE `p_id`='$product_id'";

    $stmt = $admin->cud($updateQuery, "successful");

    // Perform the update operation
    if ($stmt) {
      echo "<script> alert('Product Updated  successfully');window.location.href='../admin/product-detail.php?product=$product_id'; </script>";
    } else {
        // Handle failure
        echo "<script> alert('Something Went Wrong');window.location.href='../admin/product-edit.php?productedit=$product_id'; </script>";
    }
}
?>
