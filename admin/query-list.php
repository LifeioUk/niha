<?php include '../config.php';
$admin = new Admin();

if (!isset($_SESSION['S_id'])) {

	header('Location:login.php');
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Vestido - Admin">

    <title>Vestido - Admin</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- No Extra plugin used -->

    <link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>
    <link href="assets/js/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->

        <?php include 'sidebar.php'; ?>

        <!-- PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->

            <?php include 'header.php'; ?>


            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>Queries</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Queries
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="responsive-data-table" class="table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                $i = 1;

                                                $stmt = $admin->ret("SELECT * FROM `queries`");
                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <tr>

                                                        <td><?= $i; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><?= $row['email']; ?></td>
                                                        <td><?= $row['subject']; ?></td>
                                                        <td><?= $row['message']; ?></td>

                                                        <td><?= $row['a_date']; ?></td>
                                                        <td>
                                                            <div class="btn-group mb-1">
                                                                <a href="../controller/deletequery.php?qid=<?= $row['queries_id'];  ?>"><i style="color:red" class="mdi mdi-trash-can"></i></a>


                                                            </div>
                                                        </td>

                                                    </tr>
                                                <?php $i++;
                                                } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->


            <!-- Footer -->

            <?php include 'footer.php'; ?>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Datatables -->
    <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
    <script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
    <script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>

</html>