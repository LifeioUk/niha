<?php
include 'config.php';
$admin = new Admin();

if (isset($_GET['category'])) {
    $categoryid = $_GET['category'];
} else {
    echo "Category is not specified.";
}
$stmt = $admin->ret("SELECT * FROM `category` WHERE `c_id` = '$categoryid'");
$categ = $stmt->fetch(PDO::FETCH_ASSOC);



?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vestido</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/flaticon_shofy.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
    .tp-product-title-2 a {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 350px;
        /* Adjust this value to control the width */
    }
</style>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->





    <!-- header area start -->

    <?php include 'header.php'; ?>

    <!-- header area end -->

    <!-- filter offcanvas area start -->
    <div class="tp-filter-offcanvas-area">
        <div class="tp-filter-offcanvas-wrapper">
            <div class="tp-filter-offcanvas-close">
                <button type="button" class="tp-filter-offcanvas-close-btn filter-close-btn">
                    <i class="fa-solid fa-xmark"></i>
                    Close
                </button>
            </div>
            <div class="tp-shop-sidebar">
                <!-- filter -->
                <div class="tp-shop-widget mb-35">
                    <h3 class="tp-shop-widget-title no-border">Price Filter</h3>

                    <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-filter">
                            <div id="slider-range-offcanvas" class="mb-10"></div>
                            <div class="tp-shop-widget-filter-info d-flex align-items-center justify-content-between">
                                <span class="input-range">
                                    <input type="text" id="amount-offcanvas" readonly>
                                </span>
                                <button class="tp-shop-widget-filter-btn" type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- status -->
                <div class="tp-shop-widget mb-50">
                    <h3 class="tp-shop-widget-title">Product Status</h3>

                    <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-checkbox">
                            <ul class="filter-items filter-checkbox">
                                <li class="filter-item checkbox">
                                    <input id="on_sale2" type="checkbox">
                                    <label for="on_sale2">On sale</label>
                                </li>
                                <li class="filter-item checkbox">
                                    <input id="in_stock2" type="checkbox">
                                    <label for="in_stock2">In Stock</label>
                                </li>
                            </ul><!-- .filter-items -->
                        </div>
                    </div>
                </div>
                <!-- categories -->
                <div class="tp-shop-widget mb-50">
                    <h3 class="tp-shop-widget-title">Categories</h3>

                    <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-categories">
                            <ul>
                                <li><a href="#">Leather <span>10</span></a></li>
                                <li><a href="#">Classic Watch <span>18</span></a></li>
                                <li><a href="#">Leather Man Wacth <span>22</span></a></li>
                                <li><a href="#">Trending Watch <span>17</span></a></li>
                                <li><a href="#">Google <span>22</span></a></li>
                                <li><a href="#">Woman Wacth <span>14</span></a></li>
                                <li><a href="#">Tables <span>19</span></a></li>
                                <li><a href="#">Electronics <span>29</span></a></li>
                                <li><a href="#">Phones <span>05</span></a></li>
                                <li><a href="#">Grocery <span>14</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- color -->
                <div class="tp-shop-widget mb-50">
                    <h3 class="tp-shop-widget-title">Filter by Color</h3>

                    <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-checkbox-circle-list">
                            <ul>
                                <li>
                                    <div class="tp-shop-widget-checkbox-circle">
                                        <input type="checkbox" id="red2">
                                        <label for="red2">Red</label>
                                        <span data-bg-color="#FF401F" class="tp-shop-widget-checkbox-circle-self"></span>
                                    </div>
                                    <span class="tp-shop-widget-checkbox-circle-number">8</span>
                                </li>
                                <li>
                                    <div class="tp-shop-widget-checkbox-circle">
                                        <input type="checkbox" id="dark_blue2">
                                        <label for="dark_blue2">Dark Blue</label>
                                        <span data-bg-color="#4666FF" class="tp-shop-widget-checkbox-circle-self"></span>
                                    </div>
                                    <span class="tp-shop-widget-checkbox-circle-number">14</span>
                                </li>
                                <li>
                                    <div class="tp-shop-widget-checkbox-circle">
                                        <input type="checkbox" id="oragnge2">
                                        <label for="oragnge2">Orange</label>
                                        <span data-bg-color="#FF9E2C" class="tp-shop-widget-checkbox-circle-self"></span>
                                    </div>
                                    <span class="tp-shop-widget-checkbox-circle-number">18</span>
                                </li>
                                <li>
                                    <div class="tp-shop-widget-checkbox-circle">
                                        <input type="checkbox" id="purple2">
                                        <label for="purple2">Purple</label>
                                        <span data-bg-color="#B615FD" class="tp-shop-widget-checkbox-circle-self"></span>
                                    </div>
                                    <span class="tp-shop-widget-checkbox-circle-number">23</span>
                                </li>
                                <li>
                                    <div class="tp-shop-widget-checkbox-circle">
                                        <input type="checkbox" id="yellow2">
                                        <label for="yellow2">Yellow</label>
                                        <span data-bg-color="#FFD747" class="tp-shop-widget-checkbox-circle-self"></span>
                                    </div>
                                    <span class="tp-shop-widget-checkbox-circle-number">17</span>
                                </li>
                                <li>
                                    <div class="tp-shop-widget-checkbox-circle">
                                        <input type="checkbox" id="green2">
                                        <label for="green2">Green</label>
                                        <span data-bg-color="#41CF0F" class="tp-shop-widget-checkbox-circle-self"></span>
                                    </div>
                                    <span class="tp-shop-widget-checkbox-circle-number">15</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- product rating -->
                <div class="tp-shop-widget mb-50">
                    <h3 class="tp-shop-widget-title">Top Rated Products</h3>

                    <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-product">
                            <div class="tp-shop-widget-product-item d-flex align-items-center">
                                <div class="tp-shop-widget-product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/shop/sm/shop-sm-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tp-shop-widget-product-content">
                                    <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                        <div class="tp-shop-widget-product-rating">
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="tp-shop-widget-product-rating-number">
                                            <span>(4.2)</span>
                                        </div>
                                    </div>
                                    <h4 class="tp-shop-widget-product-title">
                                        <a href="product-details.html">Smart watches wood...</a>
                                    </h4>
                                    <div class="tp-shop-widget-product-price-wrapper">
                                        <span class="tp-shop-widget-product-price">$150.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-shop-widget-product-item d-flex align-items-center">
                                <div class="tp-shop-widget-product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/shop/sm/shop-sm-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tp-shop-widget-product-content">
                                    <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                        <div class="tp-shop-widget-product-rating">
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="tp-shop-widget-product-rating-number">
                                            <span>(4.5)</span>
                                        </div>
                                    </div>
                                    <h4 class="tp-shop-widget-product-title">
                                        <a href="product-details.html">Decoration for panda.</a>
                                    </h4>
                                    <div class="tp-shop-widget-product-price-wrapper">
                                        <span class="tp-shop-widget-product-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-shop-widget-product-item d-flex align-items-center">
                                <div class="tp-shop-widget-product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/shop/sm/shop-sm-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tp-shop-widget-product-content">
                                    <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                        <div class="tp-shop-widget-product-rating">
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="tp-shop-widget-product-rating-number">
                                            <span>(3.5)</span>
                                        </div>
                                    </div>
                                    <h4 class="tp-shop-widget-product-title">
                                        <a href="product-details.html">Trending Watch for Man</a>
                                    </h4>
                                    <div class="tp-shop-widget-product-price-wrapper">
                                        <span class="tp-shop-widget-product-price">$99.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-shop-widget-product-item d-flex align-items-center">
                                <div class="tp-shop-widget-product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/shop/sm/shop-sm-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tp-shop-widget-product-content">
                                    <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                        <div class="tp-shop-widget-product-rating">
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="tp-shop-widget-product-rating-number">
                                            <span>(4.8)</span>
                                        </div>
                                    </div>
                                    <h4 class="tp-shop-widget-product-title">
                                        <a href="product-details.html">Minimal Backpack.</a>
                                    </h4>
                                    <div class="tp-shop-widget-product-price-wrapper">
                                        <span class="tp-shop-widget-product-price">$165.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brand -->
                <div class="tp-shop-widget mb-50">
                    <h3 class="tp-shop-widget-title">Popular Brands</h3>

                    <div class="tp-shop-widget-content ">
                        <div class="tp-shop-widget-brand-list d-flex align-items-center justify-content-between flex-wrap">
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_01.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_02.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_03.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_04.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_05.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_06.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_07.png" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-brand-item">
                                <a href="#">
                                    <img src="assets/img/product/shop/brand/logo_08.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- filter offcanvas area end -->

    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title"><?= ($categoryid == 'All') ? 'All' : $categ['c_name'] ?></h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.php">Home</a></span>
                                <span><?= ($categoryid == 'All') ? 'All' : $categ['c_name'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <section class="tp-shop-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-shop-main-wrapper">
                            <div class="tp-shop-top mb-45">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="tp-shop-top-left d-flex align-items-center ">
                                            <div class="tp-shop-top-tab tp-tab">
                                                <ul class="nav nav-tabs" id="productTab" role="tablist">
                                                    <!-- <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid-tab-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="true">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M16.3327 6.01341V2.98675C16.3327 2.04675 15.906 1.66675 14.846 1.66675H12.1527C11.0927 1.66675 10.666 2.04675 10.666 2.98675V6.00675C10.666 6.95341 11.0927 7.32675 12.1527 7.32675H14.846C15.906 7.33341 16.3327 6.95341 16.3327 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M16.3327 15.18V12.4867C16.3327 11.4267 15.906 11 14.846 11H12.1527C11.0927 11 10.666 11.4267 10.666 12.4867V15.18C10.666 16.24 11.0927 16.6667 12.1527 16.6667H14.846C15.906 16.6667 16.3327 16.24 16.3327 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M7.33268 6.01341V2.98675C7.33268 2.04675 6.90602 1.66675 5.84602 1.66675H3.15268C2.09268 1.66675 1.66602 2.04675 1.66602 2.98675V6.00675C1.66602 6.95341 2.09268 7.32675 3.15268 7.32675H5.84602C6.90602 7.33341 7.33268 6.95341 7.33268 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M7.33268 15.18V12.4867C7.33268 11.4267 6.90602 11 5.84602 11H3.15268C2.09268 11 1.66602 11.4267 1.66602 12.4867V15.18C1.66602 16.24 2.09268 16.6667 3.15268 16.6667H5.84602C6.90602 16.6667 7.33268 16.24 7.33268 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </li> -->
                                                    <!-- <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false">
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15 7.11108H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <!-- <div class="tp-shop-top-result">
                                                <p>Showing 1–14 of 26 results</p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="tp-shop-top-right tp-shop-top-right-2 d-sm-flex align-items-center justify-content-xl-end">
                                            <div class="tp-shop-top-select">
                                                <select>

                                                    <option>All</option>
                                                    <?php
                                                    $i = 1;
                                                    $stmt = $admin->ret("SELECT * FROM `category` ");
                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <option><?= $row['c_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="tp-shop-items-wrapper tp-shop-item-primary">
                                <div class="tab-content" id="productTabContent">
                                    <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="grid-tab" tabindex="0">
                                        <div class="row">
                                            <?php
                                            if ($categoryid == 'All') {
                                                $stmt = $admin->ret("SELECT * FROM `product` inner join `category` on product.c_id=category.c_id where  product.p_status = 'Active'");
                                                while ($products = $stmt->fetch(PDO::FETCH_ASSOC))
                                                 { ?>
                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                        <div class="tp-product-item-2 mb-40">
                                                            <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                                                <a href="productpage.php?product=<?= $products['p_id'] ?>">
                                                                    <img src="controller/<?= $products['p_image1'] ?>" alt="">
                                                                </a>
                                                                <!-- product action -->
                                                                <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                                    <div class="tp-product-action-item-2 d-flex flex-column">
                                                                        <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn" onclick="redirectToWhatsApp('<?= $products['p_id'] ?>','<?= $products['p_name'] ?>')">
                                                                            <svg width="30px" height="30px" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.000000 275.000000" preserveAspectRatio="xMidYMid meet">

                                                                                <g transform="translate(0.000000,275.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                                                    <path d="M1866 2648 c-17 -41 -476 -1178 -484 -1197 -3 -7 -27 42 -54 110 -27
68 -90 224 -140 347 l-90 222 -139 0 c-77 0 -139 -4 -139 -9 0 -12 429 -1065
438 -1073 4 -3 148 343 321 770 173 427 321 791 328 809 12 29 11 33 -7 43
-18 10 -22 7 -34 -22z " fill="currentColor" />
                                                                                    <path d="M1800 2106 c-5 -13 -187 -464 -406 -1002 -218 -539 -399 -988 -401
-1000 -6 -27 23 -40 36 -16 5 9 75 181 156 382 81 201 148 366 149 368 2 1 27
-54 56 -123 29 -69 56 -128 59 -129 5 -3 604 1413 647 1527 6 16 -5 17 -140
17 -145 0 -147 0 -156 -24z" fill="currentColor" />
                                                                                </g>
                                                                            </svg>
                                                                            <span class="tp-product-tooltip tp-product-tooltip-right">Whatsapp Now</span>
                                                                        </button>


                                                                        <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal<?= $products['p_id'] ?>">
                                                                            <svg width="25" height="22" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                                                                            </svg>
                                                                            <span class="tp-product-tooltip tp-product-tooltip-right">Quick View</span>
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-content-2 pt-15">
                                                                <div class="tp-product-tag-2">
                                                                    <a href="products.php?category=<?= $products['c_id']; ?>" style="text-decoration: none;"><?= $products['c_name']; ?></a>
                                                                </div>
                                                                <h3 class="tp-product-title-2">
                                                                    <a href="productpage.php?product=<?= $products['p_id'] ?>">
                                                                        <?= $products['p_name'] ?>
                                                                    </a>
                                                                </h3>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade tp-product-modal" id="producQuickViewModal<?= $products['p_id'] ?>" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="tp-product-modal-content d-lg-flex align-items-start">
                                                                    <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal<?= $products['p_id'] ?> "><i class="fa-regular fa-xmark"></i></button>
                                                                    <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex" style="display:flex;flex-direction:column-reverse; gap:5px;">
                                                                        <nav>
                                                                            <div class="nav nav-tabs flex-sm-row " id="productDetailsNavThumb" role="tablist" style="display:flex;gap:5px;flex-wrap: nowrap">
                                                                                <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                                                                    <img src="controller/<?= $products['p_image1'] ?>" alt="">
                                                                                </button>
                                                                                <?php if ($products['p_image2'] !== 'uploads/products/') : ?>
                                                                                    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                                                                        <img src="controller/<?= $products['p_image2'] ?>" alt="">
                                                                                    </button>
                                                                                <?php endif; ?>

                                                                                <?php if ($products['p_image3'] !== 'uploads/products/') : ?>
                                                                                    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                                                                        <img src="controller/<?= $products['p_image3'] ?>" alt="">
                                                                                    </button>
                                                                                <?php endif; ?>

                                                                                <?php if ($products['p_image4'] !== 'uploads/products/') : ?>
                                                                                    <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                                                                        <img src="controller/<?= $products['p_image4'] ?>" alt="">
                                                                                    </button>
                                                                                <?php endif; ?>

                                                                                <?php if ($products['p_image5'] !== 'uploads/products/') : ?>
                                                                                    <button class="nav-link" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                                                                                        <img src="controller/<?= $products['p_image5'] ?>" alt="">
                                                                                    </button>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </nav>
                                                                        <div class="tab-content m-img" id="productDetailsNavContent">
                                                                            <div class="tab-pane fade show active" id="nav-1<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                                                                <div class="tp-product-details-nav-main-thumb">
                                                                                    <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image1'] ?>" alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="tab-pane fade" id="nav-2<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                                                                <div class="tp-product-details-nav-main-thumb">
                                                                                    <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image2'] ?>" alt="">
                                                                                </div>
                                                                            </div>


                                                                            <div class="tab-pane fade" id="nav-3<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                                                                <div class="tp-product-details-nav-main-thumb">
                                                                                    <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image3'] ?>" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="nav-4<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                                                                <div class="tp-product-details-nav-main-thumb">
                                                                                    <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image4'] ?>" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="nav-5<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-5-tab" tabindex="0">
                                                                                <div class="tp-product-details-nav-main-thumb">
                                                                                    <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image5'] ?>" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <form action="https://wa.me/?text=I'm%20inquiring%20about%20the%20apartment%20listing" target="_blank" method="GET">
                                                                        <div class="tp-product-details-wrapper">
                                                                            <div class="tp-product-details-category">
                                                                                <span><?= $products['c_name'] ?></span>
                                                                            </div>
                                                                            <h3 class="tp-product-details-title"><?= $products['p_name'] ?></h3>

                                                                            <!-- inventory details -->
                                                                            <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                                                                <div class="tp-product-details-stock mb-10">
                                                                                    <span>In Stock</span>
                                                                                </div>

                                                                            </div>
                                                                            <p><?= $products['p_desc'] ?></p>
                                                                            <p></p>

                                                                            <!-- price -->

                                                                            <!-- variations -->
                                                                            <?php
                                                                            $colorCodes = explode(',', $products['p_color']);

                                                                            if (!empty($colorCodes) && $colorCodes[0] !== '') {
                                                                                $uniqueId = 'selected_color_' . $products['p_id'];
                                                                            ?>
                                                                                <div class="tp-product-details-variation">
                                                                                    <!-- single item -->
                                                                                    <div class="tp-product-details-variation-item">
                                                                                        <h4 class="tp-product-details-variation-title">Color :</h4>
                                                                                        <div class="tp-product-details-variation-list">
                                                                                            <input type="hidden" name="<?php echo $uniqueId; ?>" id="<?php echo $uniqueId; ?>" value="">
                                                                                            <?php
                                                                                            foreach ($colorCodes as $colorCode) {
                                                                                                if ($colorCode !== '') {
                                                                                                    // Generate a unique ID
                                                                                            ?>

                                                                                                    <button type="button" class="color tp-color-variation-btn" data-color="<?php echo $colorCode; ?>" onclick="selectColor(this, '<?php echo $uniqueId; ?>')">
                                                                                                        <span data-bg-color="<?php echo $colorCode; ?>"></span>
                                                                                                    </button>
                                                                                            <?php
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                            <?php
                                                                            }
                                                                            ?>
                                                                            <!-- actions -->
                                                                            <div class="tp-product-details-action-wrapper">
                                                                                <h3 class="tp-product-details-action-title">Quantity</h3>
                                                                                <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                                                                    <div class="tp-product-details-quantity">
                                                                                        <div class="tp-product-quantity mb-15 mr-15">
                                                                                            <span class="tp-cart-minus">
                                                                                                <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                                </svg>
                                                                                            </span>
                                                                                            <input class="tp-cart-input" type="text" value="1" name="qty_<?= $products['p_id'] ?>">
                                                                                            <span class="tp-cart-plus">
                                                                                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                                    <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                                </svg>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <a style="background-color: #000000; text-align: center; cursor: pointer;" class="tp-product-details-buy-now-btn w-100" onclick="orderNow('<?= $products['p_id'] ?>', '<?= $products['p_name'] ?>', 
    document.getElementById('<?= $uniqueId ?>').value)"> <svg width="30px" height="30px" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.000000 275.000000" preserveAspectRatio="xMidYMid meet">

                                                                                        <g transform="translate(0.000000,275.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                                                            <path d="M1866 2648 c-17 -41 -476 -1178 -484 -1197 -3 -7 -27 42 -54 110 -27
68 -90 224 -140 347 l-90 222 -139 0 c-77 0 -139 -4 -139 -9 0 -12 429 -1065
438 -1073 4 -3 148 343 321 770 173 427 321 791 328 809 12 29 11 33 -7 43
-18 10 -22 7 -34 -22z " fill="currentColor" />
                                                                                            <path d="M1800 2106 c-5 -13 -187 -464 -406 -1002 -218 -539 -399 -988 -401
-1000 -6 -27 23 -40 36 -16 5 9 75 181 156 382 81 201 148 366 149 368 2 1 27
-54 56 -123 29 -69 56 -128 59 -129 5 -3 604 1413 647 1527 6 16 -5 17 -140
17 -145 0 -147 0 -156 -24z" fill="currentColor" />
                                                                                        </g>
                                                                                    </svg> Order Now</a>
                                                                            </div>
                                                                    </form>


                                                                    <!-- Add this script at the bottom of your HTML, just before the closing </body> tag -->
                                                                    <script>
                                                                        async function getColorName(hexColorCode) {
                                                                            const apiUrl = `https://www.thecolorapi.com/id?hex=${encodeURIComponent(hexColorCode)}`;

                                                                            try {
                                                                                const response = await fetch(apiUrl);
                                                                                const data = await response.json();
                                                                                return data.name.value || 'Unknown Color';
                                                                            } catch (error) {
                                                                                console.error('Error fetching color name:', error);
                                                                                return 'Unknown Color';
                                                                            }
                                                                        }

                                                                        async function orderNow(productId, productName, selectedColor) {
                                                                            const quantityInput = await document.querySelector(`input[name="qty_${productId}"]`);
                                                                            const quantityValue = await quantityInput.value;
                                                                            const link = await `http://www.vestidofze.com/productpage.php?product=${productId}`;

                                                                            let colorName = '';

                                                                            while (!colorName) {
                                                                                colorName = await getColorName(selectedColor);
                                                                                await new Promise(resolve => setTimeout(resolve, 100)); // Introduce a short delay
                                                                            }

                                                                            const whatsappText = `I'm interested in ordering:\nProduct: ${productName}\nColor: ${colorName}\nQuantity: ${quantityValue}\Link: ${link}`;
                                                                            console.log(whatsappText)
                                                                            const encodedWhatsAppText = encodeURIComponent(whatsappText);
                                                                            const yourPhoneNumber = '+971563153483'; // Replace this with your actual phone number
                                                                            // const whatsappUrl = `https://wa.me/${yourPhoneNumber}?text=${encodedWhatsAppText}`;
                                                                            const whatsappUrl = `https://wa.me/${yourPhoneNumber}?text=${encodedWhatsAppText}`;

                                                                            // https://wa.me/+917899118122?text=Hello!%20i%20am%20Looking%20for%20Umrah%20Visa%20Service

                                                                            window.open(whatsappUrl, '_blank');

                                                                        }
                                                                    </script>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                    <?php }
                                            } else {
                                                $stmt = $admin->ret("SELECT * FROM `product` inner join `category` on product.c_id=category.c_id where category.c_id= $categoryid and product.p_status = 'Active'");
                                                while ($products = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="tp-product-item-2 mb-40">
                                                <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                                    <a href="productpage.php?product=<?= $products['p_id'] ?>">
                                                        <img src="controller/<?= $products['p_image1'] ?>" alt="">
                                                    </a>
                                                    <!-- product action -->
                                                    <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                        <div class="tp-product-action-item-2 d-flex flex-column">
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn" onclick="redirectToWhatsApp('<?= $products['p_id'] ?>','<?= $products['p_name'] ?>')">
                                                                <svg width="30px" height="30px" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.000000 275.000000" preserveAspectRatio="xMidYMid meet">

                                                                    <g transform="translate(0.000000,275.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                                        <path d="M1866 2648 c-17 -41 -476 -1178 -484 -1197 -3 -7 -27 42 -54 110 -27
68 -90 224 -140 347 l-90 222 -139 0 c-77 0 -139 -4 -139 -9 0 -12 429 -1065
438 -1073 4 -3 148 343 321 770 173 427 321 791 328 809 12 29 11 33 -7 43
-18 10 -22 7 -34 -22z " fill="currentColor" />
                                                                        <path d="M1800 2106 c-5 -13 -187 -464 -406 -1002 -218 -539 -399 -988 -401
-1000 -6 -27 23 -40 36 -16 5 9 75 181 156 382 81 201 148 366 149 368 2 1 27
-54 56 -123 29 -69 56 -128 59 -129 5 -3 604 1413 647 1527 6 16 -5 17 -140
17 -145 0 -147 0 -156 -24z" fill="currentColor" />
                                                                    </g>
                                                                </svg>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Whatsapp Now</span>
                                                            </button>


                                                            <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal<?= $products['p_id'] ?>">
                                                                <svg width="25" height="22" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                                                                </svg>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Quick View</span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-product-content-2 pt-15">
                                                    <div class="tp-product-tag-2">
                                                        <a style="text-decoration: none;"><?= $products['c_name'] ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title-2">
                                                        <a href="productpage.php?product=<?= $products['p_id'] ?>">
                                                            <?= $products['p_name'] ?>
                                                        </a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade tp-product-modal" id="producQuickViewModal<?= $products['p_id'] ?>" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="tp-product-modal-content d-lg-flex align-items-start">
                                                        <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal<?= $products['p_id'] ?> "><i class="fa-regular fa-xmark"></i></button>
                                                        <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex" style="display:flex;flex-direction:column-reverse; gap:5px;">
                                                            <nav>
                                                                <div class="nav nav-tabs flex-sm-row " id="productDetailsNavThumb" role="tablist" style="display:flex;gap:5px;flex-wrap: nowrap">
                                                                    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                                                        <img src="controller/<?= $products['p_image1'] ?>" alt="">
                                                                    </button>
                                                                    <?php if ($products['p_image2'] !== 'uploads/products/') : ?>
                                                                        <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                                                            <img src="controller/<?= $products['p_image2'] ?>" alt="">
                                                                        </button>
                                                                    <?php endif; ?>

                                                                    <?php if ($products['p_image3'] !== 'uploads/products/') : ?>
                                                                        <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                                                            <img src="controller/<?= $products['p_image3'] ?>" alt="">
                                                                        </button>
                                                                    <?php endif; ?>

                                                                    <?php if ($products['p_image4'] !== 'uploads/products/') : ?>
                                                                        <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                                                            <img src="controller/<?= $products['p_image4'] ?>" alt="">
                                                                        </button>
                                                                    <?php endif; ?>

                                                                    <?php if ($products['p_image5'] !== 'uploads/products/') : ?>
                                                                        <button class="nav-link" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5<?= $products['p_id'] ?>" type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                                                                            <img src="controller/<?= $products['p_image5'] ?>" alt="">
                                                                        </button>
                                                                    <?php endif; ?>

                                                                </div>
                                                            </nav>
                                                            <div class="tab-content m-img" id="productDetailsNavContent">
                                                                <div class="tab-pane fade show active" id="nav-1<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                                                    <div class="tp-product-details-nav-main-thumb">
                                                                        <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image1'] ?>" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-2<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                                                    <div class="tp-product-details-nav-main-thumb">
                                                                        <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image2'] ?>" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-3<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                                                    <div class="tp-product-details-nav-main-thumb">
                                                                        <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image3'] ?>" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-4<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                                                    <div class="tp-product-details-nav-main-thumb">
                                                                        <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image4'] ?>" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-5<?= $products['p_id'] ?>" role="tabpanel" aria-labelledby="nav-5-tab" tabindex="0">
                                                                    <div class="tp-product-details-nav-main-thumb">
                                                                        <img style="width: 450px;max-height:650px;overflow:hidden;object-fit:cover" src="controller/<?= $products['p_image5'] ?>" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <form action="https://wa.me/?text=I'm%20inquiring%20about%20the%20apartment%20listing" target="_blank" method="GET">
                                                            <div class="tp-product-details-wrapper">
                                                                <div class="tp-product-details-category">
                                                                    <span><?= $products['c_name'] ?></span>
                                                                </div>
                                                                <h3 class="tp-product-details-title"><?= $products['p_name'] ?></h3>

                                                                <!-- inventory details -->
                                                                <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                                                    <div class="tp-product-details-stock mb-10">
                                                                        <span>In Stock</span>
                                                                    </div>

                                                                </div>
                                                                <p><?= $products['p_desc'] ?></p>
                                                                <p></p>

                                                                <!-- price -->

                                                                <!-- variations -->
                                                                <?php
                                                                $colorCodes = explode(',', $products['p_color']);
                                                                $uniqueId =  'selected_color_' . $products['p_id'];
                                                                if (!empty($colorCodes) && $colorCodes[0] !== '') {
                                                                    $uniqueId = 'selected_color_' . $products['p_id'];
                                                                ?>
                                                                    <div class="tp-product-details-variation">
                                                                        <!-- single item -->
                                                                        <div class="tp-product-details-variation-item">
                                                                            <h4 class="tp-product-details-variation-title">Color :</h4>
                                                                            <div class="tp-product-details-variation-list">
                                                                                <input type="hidden" name="<?php echo $uniqueId; ?>" id="<?php echo $uniqueId; ?>" value="">
                                                                                <?php
                                                                                foreach ($colorCodes as $colorCode) {
                                                                                    if ($colorCode !== '') {
                                                                                        // Generate a unique ID
                                                                                ?>

                                                                                        <button type="button" class="color tp-color-variation-btn" data-color="<?php echo $colorCode; ?>" onclick="selectColor(this, '<?php echo $uniqueId; ?>')">
                                                                                            <span data-bg-color="<?php echo $colorCode; ?>"></span>
                                                                                        </button>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                <?php
                                                                }
                                                                ?>
                                                                <!-- actions -->
                                                                <div class="tp-product-details-action-wrapper">
                                                                    <h3 class="tp-product-details-action-title">Quantity</h3>
                                                                    <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                                                        <div class="tp-product-details-quantity">
                                                                            <div class="tp-product-quantity mb-15 mr-15">
                                                                                <span class="tp-cart-minus">
                                                                                    <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                    </svg>
                                                                                </span>
                                                                                <input class="tp-cart-input" type="text" value="1" name="qty_<?= $products['p_id'] ?>">
                                                                                <span class="tp-cart-plus">
                                                                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <button style="background-color: #000000; text-align: center;cursor: pointer;" class="tp-product-details-buy-now-btn w-100" onclick="orderNow('<?= $products['p_id'] ?>', '<?= $products['p_name'] ?>', 
    (document.getElementById('<?= $uniqueId ?>') ? document.getElementById('<?= $uniqueId ?>').value : ''))"
> <svg width="30px" height="30px" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.000000 275.000000" preserveAspectRatio="xMidYMid meet">

                                                                            <g transform="translate(0.000000,275.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                                                <path d="M1866 2648 c-17 -41 -476 -1178 -484 -1197 -3 -7 -27 42 -54 110 -27
68 -90 224 -140 347 l-90 222 -139 0 c-77 0 -139 -4 -139 -9 0 -12 429 -1065
438 -1073 4 -3 148 343 321 770 173 427 321 791 328 809 12 29 11 33 -7 43
-18 10 -22 7 -34 -22z " fill="currentColor" />
                                                                                <path d="M1800 2106 c-5 -13 -187 -464 -406 -1002 -218 -539 -399 -988 -401
-1000 -6 -27 23 -40 36 -16 5 9 75 181 156 382 81 201 148 366 149 368 2 1 27
-54 56 -123 29 -69 56 -128 59 -129 5 -3 604 1413 647 1527 6 16 -5 17 -140
17 -145 0 -147 0 -156 -24z" fill="currentColor" />
                                                                            </g>
                                                                        </svg> Order Now</button>
                                                                </div>
                                                        </form>


                                                        <!-- Add this script at the bottom of your HTML, just before the closing </body> tag -->
                                                        <script>
                                                            async function getColorName(hexColorCode) {
                                                                const apiUrl = `https://www.thecolorapi.com/id?hex=${encodeURIComponent(hexColorCode)}`;

                                                                try {
                                                                    const response = await fetch(apiUrl);
                                                                    const data = await response.json();
                                                                    return data.name.value || 'Unknown Color';
                                                                } catch (error) {
                                                                    console.error('Error fetching color name:', error);
                                                                    return 'Unknown Color';
                                                                }
                                                            }

                                                            async function orderNow(productId, productName, selectedColor) {
                                                                const quantityInput = await document.querySelector(`input[name="qty_${productId}"]`);
                                                                const quantityValue = await quantityInput.value;
                                                                const link = await `http://www.vestidofze.com/productpage.php?product=${productId}`;

                                                                let colorName = '';

                                                                while (!colorName) {
                                                                    colorName = await getColorName(selectedColor);
                                                                    await new Promise(resolve => setTimeout(resolve, 100)); // Introduce a short delay
                                                                }

                                                                const whatsappText = `I'm interested in ordering:\nProduct: ${productName}\nColor: ${colorName}\nQuantity: ${quantityValue}\Link: ${link}`;
                                                                console.log(whatsappText)
                                                                const encodedWhatsAppText = encodeURIComponent(whatsappText);
                                                                const yourPhoneNumber = '+971563153483'; // Replace this with your actual phone number
                                                                // const whatsappUrl = `https://wa.me/${yourPhoneNumber}?text=${encodedWhatsAppText}`;
                                                                const whatsappUrl = `https://wa.me/${yourPhoneNumber}?text=${encodedWhatsAppText}`;

                                                                // https://wa.me/+917899118122?text=Hello!%20i%20am%20Looking%20for%20Umrah%20Visa%20Service

                                                                window.open(whatsappUrl, '_blank');

                                                            }
                                                        </script>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php           }
                                            }  ?>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
                                <div class="tp-shop-list-wrapper tp-shop-item-primary mb-70">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            <div class="tp-product-list-item d-md-flex">
                                                <div class="tp-product-list-thumb p-relative fix">
                                                    <a href="#">
                                                        <img src="assets/img/product/list/product-list-2.jpg" alt="">
                                                    </a>

                                                    <!-- product action -->
                                                    <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                        <div class="tp-product-action-item-2 d-flex flex-column">
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="whatsapp">
                                                                    <path d="M16.6 14c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.2-.5-.5-1-1.1-1.4-1.7-.1-.2 0-.4.1-.5.1-.1.2-.3.4-.4.1-.1.2-.3.2-.4.1-.1.1-.3 0-.4-.1-.1-.6-1.3-.8-1.8-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3-.6.6-.9 1.3-.9 2.1.1.9.4 1.8 1 2.6 1.1 1.6 2.5 2.9 4.2 3.7.5.2.9.4 1.4.5.5.2 1 .2 1.6.1.7-.1 1.3-.6 1.7-1.2.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2 5.5 0 9.9-4.4 9.9-9.9.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3-1.5 0-2.9-.4-4.2-1.1l-.3-.2-3.1.8.8-3-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" fill="currentColor"></path>
                                                                </svg>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Whatsapp Now</span>
                                                            </button>
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                                <svg width="25" height="22" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                                                                </svg>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Quick View</span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-product-list-content">
                                                    <div class="tp-product-content-2 pt-15">
                                                        <div class="tp-product-tag-2">
                                                            <a href="#">Shoe, </a>
                                                            <a href="#">Men's</a>
                                                        </div>
                                                        <h3 class="tp-product-title-2">
                                                            <a href="product-details.html">Women's Essentials Convertible</a>
                                                        </h3>


                                                        <p>Auctor urna nunc id cursus. Scelerisque purus semper eget duis at pharetra vel turpis nunc eget.</p>
                                                        <div class="tp-product-list-add-to-cart">
                                                            <button class="tp-product-list-add-to-cart-btn">Whatsapp Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-product-list-item d-md-flex">
                                                <div class="tp-product-list-thumb p-relative fix">
                                                    <a href="#">
                                                        <img src="assets/img/product/list/product-list-3.jpg" alt="">
                                                    </a>

                                                    <!-- product action -->
                                                    <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                        <div class="tp-product-action-item-2 d-flex flex-column">
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="whatsapp">
                                                                    <path d="M16.6 14c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.2-.5-.5-1-1.1-1.4-1.7-.1-.2 0-.4.1-.5.1-.1.2-.3.4-.4.1-.1.2-.3.2-.4.1-.1.1-.3 0-.4-.1-.1-.6-1.3-.8-1.8-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3-.6.6-.9 1.3-.9 2.1.1.9.4 1.8 1 2.6 1.1 1.6 2.5 2.9 4.2 3.7.5.2.9.4 1.4.5.5.2 1 .2 1.6.1.7-.1 1.3-.6 1.7-1.2.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2 5.5 0 9.9-4.4 9.9-9.9.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3-1.5 0-2.9-.4-4.2-1.1l-.3-.2-3.1.8.8-3-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" fill="currentColor"></path>
                                                                </svg>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Whatsapp Now</span>
                                                            </button>
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                                <svg width="25" height="22" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                                                                </svg>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Quick View</span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-product-list-content">
                                                    <div class="tp-product-content-2 pt-15">
                                                        <div class="tp-product-tag-2">
                                                            <a href="#">Bag, </a>
                                                            <a href="#">Wonder</a>
                                                        </div>
                                                        <h3 class="tp-product-title-2">
                                                            <a href="product-details.html">Black Leather Bag</a>
                                                        </h3>

                                                        <p>Auctor urna nunc id cursus. Scelerisque purus semper eget duis at pharetra vel turpis nunc eget.</p>
                                                        <div class="tp-product-list-add-to-cart">
                                                            <button class="tp-product-list-add-to-cart-btn">Whatsapp Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="tp-shop-pagination mt-20">
                                <div class="tp-pagination">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="shop.html" class="tp-pagination-prev prev page-numbers">
                                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop.html">1</a>
                                            </li>
                                            <li>
                                                <span class="current">2</span>
                                            </li>
                                            <li>
                                                <a href="shop.html">3</a>
                                            </li>
                                            <li>
                                                <a href="shop.html" class="next page-numbers">
                                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                </div>
            </div>
            </div>
            </div>
        </section>
        <!-- shop area end -->




    </main>


    <!-- footer area start -->

    <?php include 'footer.php'; ?>

    <!-- footer area end -->
    <script>
        function selectColor(button, uniqueId) {
            var selectedColor = button.getAttribute('data-color');
            document.getElementById(uniqueId).value = selectedColor;
        }
    </script>
    <script>
        function redirectToWhatsApp(productName, productID) {
            // Format the message with product name and ID
            const link = `http://www.vestidofze.com/productpage.php?product=${productName}`;
            const message = `I'm interested in the product: ${productID} (ID: ${productName})\Link: ${link}`;
            const phoneNumber = '+971563153483';

            // Encode the message for a URL
            const encodedMessage = encodeURIComponent(message);

            // Construct the WhatsApp URL with the encoded message
            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`

            // Open the WhatsApp URL in a new tab or window
            window.open(whatsappURL, '_blank');
        }
    </script>
    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/range-slider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>