<?php
  session_start();
  $userId = isset($_SESSION['user_id'])? $_SESSION['user_id'] : 0;
  include './db.php'; 
  $database = new Database();
  $conn = $database->connect();

  
  // function getProductsToShowOnHome($conn) {
  //   $query = "SELECT * FROM product 
  //             JOIN subcategory ON product_subcat_id=subcat_id 
  //             JOIN category ON subcat_category_id=category_id
  //             JOIN product_image ON product_main_img_id=pimg_id 
  //             WHERE category_show_home = 1 AND
  //             product_hidden=1
  //             ORDER BY category_id ASC";
  //   $stmt = $conn->prepare($query);
  //   $stmt->execute();

  //   $productsByCategory = array();
  //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //       $categoryName = $row['category_name'];
  //       if (!array_key_exists($categoryName, $productsByCategory)) {
  //           $productsByCategory[$categoryName] = array();
  //       }
  //       array_push($productsByCategory[$categoryName], $row);
  //   }

  //   return $productsByCategory;
  // }

  function getProductsToShowOnHome($conn) {
    $query = "SELECT * FROM product 
              JOIN subcategory ON product_subcat_id=subcat_id 
              JOIN category ON subcat_category_id=category_id
              JOIN product_image ON product_main_img_id=pimg_id 
              WHERE category_show_home = 1 AND
              product_hidden = 1
              ORDER BY category_id ASC, product_id ASC"; // Ensure a consistent ordering
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $productsByCategory = array();
    $categoryCounts = array(); // Keep track of the number of products added per category

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $categoryName = $row['category_name'];
        
        if (!isset($categoryCounts[$categoryName])) {
            $categoryCounts[$categoryName] = 0;
        }

        // Only add the product if this category has less than 8 products
        if ($categoryCounts[$categoryName] < 8) {
            if (!array_key_exists($categoryName, $productsByCategory)) {
                $productsByCategory[$categoryName] = array();
            }
            array_push($productsByCategory[$categoryName], $row);
            $categoryCounts[$categoryName]++; // Increment the count for this category
        }
    }

    return $productsByCategory;
  }


  $productsByCategory = getProductsToShowOnHome($conn);
  
 
  
  
  
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
  <link href="./css/home.css" rel="stylesheet">
  <link href="./css/product.css" rel="stylesheet">
  
</head>

<body>
  <div class="row">
    <div class="col-md-10 mx-auto">
      
      <?php include './infobar.php'; ?>
      <?php include './navbar.php'; ?>

      <div id="homePageCarousel" class="carousel slide mainSlider" data-bs-ride="carousel"
        style="max-height: 600px; overflow: hidden;">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/sliders/s1.jpg" class="d-block w-100 sliderImg" alt="..."
              style="max-height: 600px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="./img/sliders/s2.jpg" class="d-block w-100 sliderImg" alt="..."
              style="max-height: 600px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="./img/sliders/s3.jpg" class="d-block w-100 sliderImg" alt="..."
              style="max-height: 600px; object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#homePageCarousel"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon sliderCtrlBtn" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#homePageCarousel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon sliderCtrlBtn" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <?php


          foreach ($productsByCategory as $categoryName => $products) {
            echo '<div class="container-fluid my-5 categoryProducts">';
            echo '<div class="row">';
            echo '<div class="col-12 text-left">';
            echo '<h2 class="category-title">' . htmlspecialchars($categoryName) . '</h2>';
            echo '<hr class="category-underline" />';
            echo '</div>';
            echo '</div>';

            // Start of carousel for this category
            echo '<div id="' . htmlspecialchars(strtolower(str_replace(' ', '', $categoryName))) . 'Carousel" class="carousel slide">';
            echo '<div class="carousel-inner">';

            // Group products for carousel items
            $groupedProducts = array_chunk($products, 4); // Group by 4 for each slide
            $isActive = true;
            foreach ($groupedProducts as $group) {
                $activeClass = $isActive ? ' active' : '';
                echo '<div class="carousel-item' . $activeClass . '">';
                echo '<div class="container-fluid"><div class="row">';
                
                foreach ($group as $product) {
                    // Dynamically generate product details
                    $pid = htmlspecialchars($product['product_id']);
                    $productName = htmlspecialchars($product['product_name']); // Example column name
                    $productPrice = htmlspecialchars($product['product_selling_price']); // Example column name
                    $productImage = htmlspecialchars($product['pimg_src']); // Example column name
                    echo '<div class="col-6 col-md-4 col-lg-3">
                        <div class="card product-card mb-3 w-100 position-relative">
                          <img src="./img/products/' . $productImage . '" class="card-img-top" alt="' . $productName . '">
                          <div class="product-info position-absolute bottom-0 start-50 translate-middle-x w-100 text-center product-info-plate p-2 pt-0">
                            <h5 class="card-title">
                              <a href="./product.php?pid='.$pid.'" class="text-decoration-none text-light productName">' . $productName . '</a>
                            </h5>
                            <p class="mb-2" style="font-size: 0.9rem;">&#2547;
                              <span class="product-price">' . $productPrice . '</span>
                            </p>
                            <button class="btn btn-primary addToCartBtn">
                              <i class="bi bi-cart-plus"></i>&nbsp;Add to Cart
                            </button>
                          </div>
                        </div>
                      </div>';
                }

                echo '</div></div>'; // Close row and container-fluid
                echo '</div>'; // Close carousel-item
                $isActive = false; // Only the first group is active
            }

            // Close carousel-inner
            echo '</div>';

            // Carousel controls, ensure to modify data-bs-target to match the carousel ID
            echo '<button class="carousel-control-prev" type="button" data-bs-target="#' . htmlspecialchars(strtolower(str_replace(' ', '', $categoryName))) . 'Carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>';
            echo '<button class="carousel-control-next" type="button" data-bs-target="#' . htmlspecialchars(strtolower(str_replace(' ', '', $categoryName))) . 'Carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>';

            echo '</div>'; // Close carousel
            // "View More Products" button
            echo '<div class="text-center mt-4">';
            echo '<a href="#" class="btn btn-primary">View More Products</a>';
            echo '</div>';
            echo '</div>'; // Close categoryProducts container
          }



      ?>
      
      
      <div class="container my-5 sellerEngagement">
        <div class="row align-items-center">
          <!-- Image on the left side -->
          <div class="col-md-6 mb-3">
            <img src="./img/home/seller.jpg" class="img-fluid" alt="Sell Your Fashion">
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