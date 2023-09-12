<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = md5($_POST['password']);

    $stmp = $admin->ret("SELECT * FROM `admin` WHERE (`a_name`='$name' OR `a_email`='$name') AND `a_password`='$password'");
    $row = $stmp->fetch(PDO::FETCH_ASSOC);

    $num = $stmp->rowCount();
    
    if ($num > 0) {
        $id = $row['a_id'];
        $_SESSION['S_id'] = $id;
        echo "<script> alert('Successful');window.location.href='../admin/index.php'</script>";
    } else {
        echo "<script> alert('Unsuccessful');window.location.href='../admin/login.php'</script>";
    }
}
?>
