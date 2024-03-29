<?php
  session_start();

  $userId = isset($_SESSION['user_id'])? $_SESSION['user_id'] : 0;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNORAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  
    <link href="./css/all.css" rel="stylesheet">
    <link href="./css/product.css" rel="stylesheet">
</head>
<body>

  <div class="row">
    <div class="col-md-10 mx-auto">

      <?php include './infobar.php'; ?>
      <?php include './navbar.php'; ?>

      <div class="container py-4">
          <div class="row">
              <div class="col-lg-6">
                  <!-- Product Gallery -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8 mb-2">
                            <img id="productShowCaseMainImg" src="./img/products/p1.jpg" class="img-fluid" alt="Main Product Image">
                        </div>
                        <div class="container text-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn btn-secondary me-2" id="slideLeft"><i class="bi bi-chevron-left"></i></div>
                                <div class="overflow-hidden d-flex" id="thumbnailSlider" style="max-width: 90%;">
                                    <!-- Thumbnail images -->
                                    <img class="thumbnail" src="./img/products/p1.jpg" alt="Thumbnail 1" style="width: 75px; height: 75px; object-fit: cover;">
                                    <img class="thumbnail" src="https://static-01.daraz.com.bd/p/7449207719fb4f2b1a7366c8760634c3.jpg_750x750.jpg_.webp" alt="Thumbnail 2" style="width: 75px; height: 75px; object-fit: cover;">
                                    <img class="thumbnail" src="./img/products/p1.jpg" alt="Thumbnail 1" style="width: 75px; height: 75px; object-fit: cover;">
                                    <img class="thumbnail" src="https://static-01.daraz.com.bd/p/7449207719fb4f2b1a7366c8760634c3.jpg_750x750.jpg_.webp" alt="Thumbnail 2" style="width: 75px; height: 75px; object-fit: cover;">                
                                    <img class="thumbnail" src="./img/products/p1.jpg" alt="Thumbnail 1" style="width: 75px; height: 75px; object-fit: cover;">
                                    <img class="thumbnail" src="https://static-01.daraz.com.bd/p/7449207719fb4f2b1a7366c8760634c3.jpg_750x750.jpg_.webp" alt="Thumbnail 2" style="width: 75px; height: 75px; object-fit: cover;">
                                    <img class="thumbnail" src="https://static-01.daraz.com.bd/p/7449207719fb4f2b1a7366c8760634c3.jpg_750x750.jpg_.webp" alt="Thumbnail 2" style="width: 75px; height: 75px; object-fit: cover;">
                                    <!-- Add more thumbnails as needed -->
                                </div>
                                <div class="btn btn-secondary ms-2" id="slideRight"><i class="bi bi-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6">
                  <!-- Product Details -->
                  <h2 class="mb-4 text-dark product-name">Lorem Ipsum dolores</h2>
                  <h3 class="text-danger mb-3">৳ <span class="productPrice">268</span> </h3>
                  <p><a href="#" class="vendorName">MyStore</a></p>
                  <p class="product-description text-dark"> Comfortable and Suitable for All Seasons and Occasions.</p>
                  
                  <!-- Size and Color Options -->
                  <div class="row">
                      <div class="col-6">
                          <label for="sizeSelect" class="form-label text-dark">Size</label>
                          <select id="sizeSelect" class="form-select">
                              <option selected>M</option>
                              <option>L</option>
                              <option>XL</option>
                          </select>
                      </div>
                      <div class="col-6">
                          <label for="colorSelect" class="form-label text-dark">Color</label>
                          <select id="colorSelect" class="form-select">
                              <option selected>Emerald Green</option>
                              <option>Classic Blue</option>
                              <option>Jet Black</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary quantity-minus me-2" type="button">-</button>
                        </div>
                        <input type="text" class="form-control quantity-input text-center" value="1" min="1" style="max-width: 60px; ">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary quantity-plus ms-2" type="button">+</button>
                        </div>
                      </div>

                  </div>
                  <!-- Action Buttons -->
                  <div class="d-grid gap-2 d-md-block my-4">
                      <button class="btn btn-warning text-dark">
                        Buy Now
                      </button>
                      <button class="btn btn-primary addToCartBtn">
                        <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                      </button>
                  </div>
              </div>
          </div>
      </div>

      <div class="container-fluid  categoryProducts">
        <div class="row">
          <div class="col-12 text-left">
            <h2 class="category-title text-dark">More Products from <a href="#">MyStore</a> </h2>
            <hr class="category-underline" />
          </div>
        </div>

        <div id="category1Carousel" class="carousel slide">
          <!-- Carousel inner container -->
          <div class="carousel-inner">
            <!-- First carousel item -->
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- Second carousel item (repeat structure for additional items) -->
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/products/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light productName">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary addToCartBtn">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- More carousel items as needed -->
          </div>
          <!-- Carousel controls -->
          <button class="carousel-control-prev justify-content-start prodCarouselControl" type="button"
            data-bs-target="#category1Carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next justify-content-end prodCarouselControl" type="button"
            data-bs-target="#category1Carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- View More Products button -->
        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary">View More Products</a>
        </div>
      </div>
     

      <?php include './footer.php'; ?>

    </div>
  </div>

  <?php include './gototop.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/all.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
        $('.thumbnail').click(function() {
            var imgSrc = $(this).attr('src');
            $('#productShowCaseMainImg').attr('src', imgSrc);
        });



        $('#slideRight').click(function() {
            $('#thumbnailSlider').animate({
                scrollLeft: '+=150'
            }, 'slow');
        });

        $('#slideLeft').click(function() {
            $('#thumbnailSlider').animate({
                scrollLeft: '-=150'
            }, 'slow');
        });


        // Product Quantity Plus Minus

        $('.quantity-plus').click(function(e) {
          e.preventDefault();
          var quantityInput = $(this).parents('.input-group').find('.quantity-input');
          var currentValue = parseInt(quantityInput.val());
          if (!isNaN(currentValue)) {
            quantityInput.val(currentValue + 1);
          } else {
            quantityInput.val(1);
          }
        });

        $('.quantity-minus').click(function(e) {
          e.preventDefault();
          var quantityInput = $(this).parents('.input-group').find('.quantity-input');
          var currentValue = parseInt(quantityInput.val());
          if (!isNaN(currentValue) && currentValue > 1) {
            quantityInput.val(currentValue - 1);
          } else {
            quantityInput.val(1);
          }
        });
        

       
    });


  </script>
</body>
</html>
