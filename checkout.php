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
              <div class="container mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <h2>Billing Details</h2>
                    <form>
                      <!-- Example input fields -->
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                      </div>
                      <!-- Add additional fields as needed -->

                      <h2>Order Summary</h2>
                      <p>Product 1: $20.00</p>
                      <p>Product 2: $15.00</p>
                      <p>Shipping: $5.00</p>
                      <h4>Total: $40.00</h4>
                      <!-- Dynamically generate order summary -->
                    </form>
                  </div>

                  <div class="col-md-4">
                    <h2>Payment</h2>
                    <form>
                      <div class="mb-3">
                        <label for="cardName" class="form-label">Name on Card</label>
                        <input type="text" class="form-control" id="cardName">
                      </div>
                      <div class="mb-3">
                        <label for="cardNumber" class="form-label">Credit Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                      </div>
                      <div class="mb-3">
                        <label for="cardExpiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cardExpiration">
                      </div>
                      <div class="mb-3">
                        <label for="cardCVV" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cardCVV">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                  </div>
                </div>
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
