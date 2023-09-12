<?php include '../config.php';
$admin = new Admin();

if(isset($_POST['addproduct'])){



    $name=$_POST['productname'];
    $desc = $_POST['description'];
    $category=$_POST['category'];
    $gender=$_POST['gender'];
    $colors=$_POST['p_color'];


    $image1 = "uploads/products/".basename($_FILES['image1']['name']);
    move_uploaded_file($_FILES['image1']['tmp_name'],$image1);

    $image2 = "uploads/products/".basename($_FILES['image2']['name']);
    move_uploaded_file($_FILES['image2']['tmp_name'],$image2);

    $image3 = "uploads/products/".basename($_FILES['image3']['name']);
    move_uploaded_file($_FILES['image3']['tmp_name'],$image3);

    $image4 = "uploads/products/".basename($_FILES['image4']['name']);
    move_uploaded_file($_FILES['image4']['tmp_name'],$image4);

    $image5 = "uploads/products/".basename($_FILES['image5']['name']);
    move_uploaded_file($_FILES['image5']['tmp_name'],$image5);



  $stmt = $admin->cud("INSERT INTO `product`( `c_id`, `p_name`, `p_desc`, `p_image1`, `p_image2`, `p_image3`, `p_image4`, `p_image5`,`p_color`,`p_gender`,`p_adate`,`p_status`) VALUES ('$category', '$name','$desc','$image1','$image2','$image3','$image4','$image5','$colors','$gender',NOW(),'Active')","successfull");


 echo "<script> alert('Product inserted  successfully');window.location.href='../admin/product-add.php'; </script>";

}
