<?php include '../config.php';
$admin = new Admin();

if (isset($_GET['deleteproduct'])) {
  $productID = $_GET['deleteproduct']; 

  $stmt = $admin->cud("DELETE FROM `product` WHERE `p_id` = '$productID'", "successful");

  if ($stmt) {

    $imagesToDelete = [
      $_GET['image1'],
      $_GET['image2'],
      $_GET['image3'],
      $_GET['image4'],
      $_GET['image5']
    ];

    foreach ($imagesToDelete as $imagePath) {
      if (!empty($imagePath)) {
        $imageFullPath = "" . $imagePath; 
        if (file_exists($imageFullPath)) {
          unlink($imageFullPath);
        }
      }
    }

    echo "<script>alert('Product deleted successfully');window.location.href='../admin/product-list.php';</script>";
  } else {
    echo "<script>alert('Failed to delete product');window.location.href='../admin/product-list.php';</script>";
  }
}
