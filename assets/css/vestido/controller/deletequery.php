<?php
include '../config.php';
$admin = new Admin();

if(isset($_GET['qid'])) {
    $qid = $_GET['qid']; // Assuming you have a hidden input in your form with the category ID

    // Delete the category from the database
    $stmt = $admin->cud("DELETE FROM `queries` WHERE `queries_id` = '$qid'", "successful");

    if ($stmt) {
       
        echo "<script>alert('Query deleted successfully');window.location.href='../admin/query-list.php';</script>";
    } else {
        echo "<script>alert('Failed to delete category');window.location.href='../admin/query-list.php';</script>";
    }
}
?>
