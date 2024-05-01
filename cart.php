<?php
  session_start();
  $userId = isset($_SESSION['user_id'])? $_SESSION['user_id'] : 0;
  include './db.php';


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


      <div class="container my-4">
          <div class="row d-flex justify-content-center align-items-center">
              <div class="col-lg-8">
                  <h4 class="mb-4 text-dark">YOUR SHOPPING CART</h4>
                  <div class="card mb-3">
                      <div class="card-body">
                          <div class="row align-items-center">
                              <div class="col-md-2">
                                  <img src="https://img.perniaspopupshop.com/catalog/product/s/a/SAMM122358_1.jpg" class="img-fluid" alt="Product">
                              </div>
                              <div class="col-md-4">
                                  <h5 class="card-title">Product Name</h5>
                                  <p class="card-text"><small class="text-muted">Product Description</small></p>
                              </div>
                              <div class="col-md-2 text-md-end">
                                  <p class="card-text"><strong>$436.94</strong></p>
                              </div>
                              <div class="col-md-2">
                                  <div class="input-group mb-3">
                                      <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-dash"></i></button>
                                      <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="1">
                                      <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-plus"></i></button>
                                  </div>
                              </div>
                              <div class="col-md-2 text-md-end">
                                  <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Remove</button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Repeat for other items -->
              </div>
              <div class="col-lg-4">
                  <div class="border border-dark p-3 mb-3">
                      <h4 class="text-dark">CART SUMMARY</h4>
                      <hr>
                      <div class="mb-2 d-flex justify-content-between">
                          <span class="text-dark">Cart Total</span>
                          <strong class="text-dark">$722</strong>
                      </div>
                      <div class="mb-2 d-flex justify-content-between">
                          <span class="text-dark">Total Discount</span>
                          <strong class="text-dark">-$71</strong>
                      </div>
                      <div class="mb-4 d-flex justify-content-between">
                          <span class="text-dark">Shipping</span>
                          <strong class="text-dark">$0</strong>
                      </div>
                      <div class="mb-2 d-flex justify-content-between">
                          <span class="fs-5 text-dark">TOTAL PAYABLE</span>
                          <span class="fs-5 text-dark">$651</span>
                      </div>
                      <button class="btn btn-primary w-100 mb-2">PROCEED TO CHECKOUT</button>
                      <button class="btn btn-outline-dark w-100">CONTINUE SHOPPING</button>
                  </div>
              </div>
          </div>
      </div>


      <div class="container-fluid  categoryProducts">
        <div class="row">
          <div class="col-12 text-left">
            <h2 class="category-title text-dark">More Products You Can Add To Your Cart </h2>
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
</body>
</html>
