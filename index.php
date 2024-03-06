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

  <link href="./style.css" rel="stylesheet">
</head>

<body>
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="row bg-primary">
        <p class="text-center mb-0 text-light">
          For support, email us at
          <span class="text-light">
            <a href="mailto:support@punorai.com" class="text-light" target="_blank">support@punorai.com</a>
          </span>
        </p>
      </div>

      <div class="row sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light upperNav">
          <div class="container">
            <a class="navbar-brand text-dark" href="./index.html">
              <img src="./img/logo.png" class="mainLogo" alt="PUNORAI">
            </a>
            <div class="d-flex ms-auto">
              <button class="btn text-dark upperNavMenu">
                <i class="bi bi-search"></i>
              </button>
              <div class="position-relative d-inline-block">
                <button class="btn text-dark upperNavMenu">
                  <i class="bi bi-cart-plus"></i>
                </button>
                <!-- <span class="position-absolute cartBadge translate-middle badge rounded-pill bg-danger">
                  53
                </span> -->
              </div>

              <button class="btn text-dark upperNavMenu">
                <i class="bi bi-person"></i>
              </button>
            </div>
          </div>
        </nav>

        <div class="bg-dark ">
          <div class="container">
            <nav class="nav">
              <a class="nav-link text-light lowerNavMenu" href="#">Category 1</a>
              <a class="nav-link text-light lowerNavMenu" href="#">Category 2</a>
              <a class="nav-link text-light lowerNavMenu" href="#">Category 3</a>
              <!-- Add more categories as needed -->
            </nav>
          </div>
        </div>
      </div>

      <div id="carouselExample" class="carousel slide mainSlider" data-bs-ride="carousel"
        style="max-height: 600px; overflow: hidden;">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/s1.jpg" class="d-block w-100 sliderImg" alt="..."
              style="max-height: 600px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="./img/s2.jpg" class="d-block w-100 sliderImg" alt="..."
              style="max-height: 600px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="./img/s3.jpg" class="d-block w-100 sliderImg" alt="..."
              style="max-height: 600px; object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#carouselExample"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon sliderCtrlBtn" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carouselExample"
          data-bs-slide="next">
          <span class="carousel-control-next-icon sliderCtrlBtn" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container-fluid my-5 categoryProducts">
        <div class="row">
          <div class="col-12 text-left">
            <h2 class="category-title">Category 1</h2>
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
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
      <div class="container-fluid my-5 categoryProducts">
        <div class="row">
          <div class="col-12 text-left">
            <h2 class="category-title">Category 2</h2>
            <hr class="category-underline" />
          </div>
        </div>

        <div id="category2Carousel" class="carousel slide">
          <!-- Carousel inner container -->
          <div class="carousel-inner">
            <!-- First carousel item -->
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
            data-bs-target="#category2Carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next justify-content-end prodCarouselControl" type="button"
            data-bs-target="#category2Carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- View More Products button -->
        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary">View More Products</a>
        </div>


      </div>
      <div class="container-fluid my-5 categoryProducts">
        <div class="row">
          <div class="col-12 text-left">
            <h2 class="category-title">Category 3</h2>
            <hr class="category-underline" />
          </div>
        </div>

        <div id="category3Carousel" class="carousel slide">
          <!-- Carousel inner container -->
          <div class="carousel-inner">
            <!-- First carousel item -->
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
            data-bs-target="#category3Carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next justify-content-end prodCarouselControl" type="button"
            data-bs-target="#category3Carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- View More Products button -->
        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary">View More Products</a>
        </div>


      </div>
      <div class="container-fluid my-5 categoryProducts">
        <div class="row">
          <div class="col-12 text-left">
            <h2 class="category-title">Category 4</h2>
            <hr class="category-underline" />
          </div>
        </div>

        <div id="category4Carousel" class="carousel slide">
          <!-- Carousel inner container -->
          <div class="carousel-inner">
            <!-- First carousel item -->
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>

                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
                          <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                      </div>

                    </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card mb-3 w-100 position-relative">
                      <img src="./img/p1.jpg" class="card-img-top" alt="Product 1">
                      <div
                        class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none text-light">Product Name</a>
                        </h5>
                        <!-- Pricing Information -->
                        <p class="mb-2" style="font-size: 1.25rem;">&#2547;
                          <span class='product-price'>1900</span>
                        </p>
                        <button class="btn btn-primary">
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
            data-bs-target="#category4Carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next justify-content-end prodCarouselControl" type="button"
            data-bs-target="#category4Carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon sliderCtrlBtn" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- View More Products button -->
        <div class="text-center mt-4">
          <a href="#" class="btn btn-primary">View More Products</a>
        </div>


      </div>

      <div class="container my-5">
        <div class="row align-items-center">
          <!-- Image on the left side -->
          <div class="col-md-6">
            <img src="./img/seller.jpg" class="img-fluid" alt="Sell Your Fashion">
          </div>

          <!-- Engaging text and button on the right side -->
          <div class="col-md-6">
            <h2 class="text-dark">Become a Seller</h2>
            <p class="text-dark">Turn your passion for fashion into profit. Sell your gently used clothing and
              accessories on
              our platform and reach thousands of buyers.</p>
            <a href="#" class="btn btn-primary">Start Selling</a>
          </div>
        </div>
      </div>



      <footer class="bg-dark text-light p-4 mt-4">
        <div class="container">
          <p>Footer content here. Links, social media, etc.</p>
        </div>
      </footer>

    </div>
  </div>

  <!-- Go To Top Button -->
  <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./script.js"></script>


</body>

</html>