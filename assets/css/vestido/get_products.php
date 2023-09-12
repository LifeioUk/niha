<?php
include 'config.php';
$admin = new Admin();

// Assuming you have a database connection
$response = array();

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];

    if ($category_id == 'allCollection') {
        $stmt = $admin->ret("SELECT * FROM `product` WHERE product.p_status = 'Active' ORDER BY `p_id` DESC LIMIT 8");
    } else {
        $stmt = $admin->ret("SELECT * FROM `product` WHERE `c_id` = $category_id  and  product.p_status = 'Active'  ORDER BY `p_id` DESC LIMIT 8");
    }

    if ($stmt) {
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $response['success'] = true;
        $response['products'] = $products;
    } else {
        $response['success'] = false;
        $response['message'] = "Error fetching products.";
    }
} else {
    $response['success'] = false;
    $response['message'] = "Category ID not provided.";
}

header('Content-Type: application/json');
echo json_encode($response);
?>
