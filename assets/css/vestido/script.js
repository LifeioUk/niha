document.addEventListener("DOMContentLoaded", function() {
    const categorySelect = document.getElementById("categorySelect");
    const productContainer = document.getElementById("productContainer");

    $(categorySelect).niceSelect();

    // Function to fetch and display products
    function fetchProducts(category) {
        productContainer.innerHTML = "Loading...";

        $.ajax({
            url: `product_loader.php?category=${category}`,
            method: "GET",
            dataType: "json", // Expect JSON response
            success: function(data) {
                // Generate HTML for product listing
                let productHTML = "";
                data.forEach(product => {
                    productHTML += `
                                  
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-product-item-2 mb-40">
                        <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                            <a href="productpage.php">
                                <img src="controller/${product.p_image1}" alt="">
                            </a>
                            <!-- product action -->
                            <div class="tp-product-action-2 tp-product-action-blackStyle">
                                <div class="tp-product-action-item-2 d-flex flex-column">
                                    <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn">
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
                                    <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal${product.p_id}">
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
                                <a href="#">Whitetails Store</a>
                            </div>
                            <h3 class="tp-product-title-2">
                                <a href="productpage.php">Whitetails Women's Open Sky</a>
                            </h3>

                        </div>
                    </div>
                </div>
                
                
                
                <div class="modal fade tp-product-modal" id="producQuickViewModal${product.p_id}" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="tp-product-modal-content d-lg-flex align-items-start">
                            <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                            <div class="tp-product-details-thumb-wrapper tp-tab " style="display:flex;flex-direction:column-reverse; gap:5px;">
                                <nav>
                                    <div class="nav nav-tabs flex-sm-row " id="productDetailsNavThumb" role="tablist" style="display:flex;gap:5px;flex-wrap: nowrap">
                                        <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                            <img src="controller/${product.p_image1}" alt="">
                                        </button>
                                        <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                            <img src="controller/${product.p_image2}" alt="">
                                        </button>
                                        <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                            <img src="controller/${product.p_image3}" alt="">
                                        </button>
                                        <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                            <img src="controller/${product.p_image4}" alt="">
                                        </button>
                                        <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                            <img src="controller/${product.p_image5}" alt="">
                                        </button>
                                        
                                    </div>
                                </nav>
                                <div class="tab-content m-img" id="productDetailsNavContent">
                                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="controller/${product.p_image1}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="controller/${product.p_image2}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="controller/${product.p_image3}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="controller/${product.p_image4}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="controller/${product.p_image5}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-product-details-wrapper">
                                <div class="tp-product-details-category">
                                    <span>Computers & Tablets</span>
                                </div>
                                <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>
    
                                <!-- inventory details -->
                                <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                    <div class="tp-product-details-stock mb-10">
                                        <span>In Stock</span>
                                    </div>
    
                                </div>
                                <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends tablet A8... <span>See more</span></p>
    
                                <!-- price -->
    
                                <!-- variations -->
                                <div class="tp-product-details-variation">
                                    <!-- single item -->
                                    <div class="tp-product-details-variation-item">
                                        <h4 class="tp-product-details-variation-title">Color :</h4>
                                        <div class="tp-product-details-variation-list">
                                            <button type="button" class="color tp-color-variation-btn">
                                                <span data-bg-color="#F8B655"></span>
                                                <span class="tp-color-variation-tootltip">Yellow</span>
                                            </button>
                                            <button type="button" class="color tp-color-variation-btn active">
                                                <span data-bg-color="#CBCBCB"></span>
                                                <span class="tp-color-variation-tootltip">Gray</span>
                                            </button>
                                            <button type="button" class="color tp-color-variation-btn">
                                                <span data-bg-color="#494E52"></span>
                                                <span class="tp-color-variation-tootltip">Black</span>
                                            </button>
                                            <button type="button" class="color tp-color-variation-btn">
                                                <span data-bg-color="#B4505A"></span>
                                                <span class="tp-color-variation-tootltip">Brown</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
    
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
                                                <input class="tp-cart-input" type="text" value="1">
                                                <span class="tp-cart-plus">
                                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
    
                                    </div>
                                    <button style="background-color: #25D366;" class="tp-product-details-buy-now-btn w-100"> <svg width="30px" height="30px" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.000000 275.000000" preserveAspectRatio="xMidYMid meet">
    
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
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
                });

                productContainer.innerHTML = productHTML;
            },
            error: function(error) {
                console.error("Error fetching products:", error);
                productContainer.innerHTML = "Error loading products.";
            }
        });
    }

    // Get the category parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const selectedCategory = urlParams.get('category');

    if (selectedCategory) {
        // Fetch and display products based on the selected category from header
        fetchProducts(selectedCategory);
    }

    // On change event for category select
    $(categorySelect).on("change", function() {
        const selectedCategory = $(this).val();

        productContainer.innerHTML = "Loading...";

        if (selectedCategory !== "Categories") {
            // Fetch and display products based on the selected category
            fetchProducts(selectedCategory);
        }
    });
});
