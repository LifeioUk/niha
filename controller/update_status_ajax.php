<?php
include '../config.php';
$admin= new Admin();
if (isset($_POST['productId']) && isset($_POST['status'])) {
  echo  $productId = $_POST['productId'];
  echo  $newStatus = $_POST['status'];

    // Perform database update or any other action here
    // Example:
    $sql = $admin->cud("UPDATE product SET `p_status` = '$newStatus' WHERE `p_id` = $productId","asa");
    // $result = mysqli_query($connection, $sql);

    // Return a response to the AJAX request
    if ($sql) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status.";
    }
}
?>
