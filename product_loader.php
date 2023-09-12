<?php include 'config.php';
$admin = new Admin();

// Assuming you have a database connection
if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    
    // Replace with your database query logic
    if ($category_id == 'All') {
        $stmt = $admin->ret("SELECT * FROM `product`");
    } else {
        $stmt = $admin->ret("SELECT * FROM `product` WHERE `c_id` = $category_id", ['c_id' => $category_id]);
    }
    
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($products);
}
?>