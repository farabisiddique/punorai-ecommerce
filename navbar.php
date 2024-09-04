<?php
    try {
        $query = "SELECT * FROM category ORDER BY category_show_home DESC";
        $stmt = $conn->prepare($query);

        $stmt->execute();

        $categories = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row;
        }

        // Now $categories array is filled with all rows from the category table
        // You can use var_dump($categories) to see its structure and data

    } catch (PDOException $e) {
        die("Error executing query: " . $e->getMessage());
    }

    if($userId>0){
      $cartSql = "SELECT * FROM cart WHERE cart_user_id = :userId";
      $cartStmt = $conn->prepare($cartSql);

      // Bind the user ID parameter
      $cartStmt->bindParam(':userId', $userId, PDO::PARAM_INT);

      // Execute the query
      $cartStmt->execute();

      // Fetch all results into an associative array
      $cartEntries = $cartStmt->fetchAll(PDO::FETCH_ASSOC);

      // Count the number of entries
      $cartEntryNum = count($cartEntries);
      

    }


?>
<div class="row sticky-top twoStickyNavs">
  <nav class="navbar navbar-expand-lg navbar-light upperNav">
    <div class="container">
      <a class="navbar-brand text-dark" href="./index.php">
        <img src="./img/all/logo.png" class="mainLogo" alt="PUNORAI">
      </a>
      <div class="d-flex ms-auto">
        <button class="btn text-dark upperNavMenu">
          <i class="bi bi-search"></i>
        </button>
        <div class="position-relative d-inline-block">
          <a class="btn text-dark upperNavMenu" href="./cart.php">
            <i class="bi bi-cart-plus"></i>
          </a>
          <?php if($userId>0){ ?>
            <span class="position-absolute cartBadge translate-middle badge rounded-pill bg-danger">
              <?php echo $cartEntryNum;  ?>
            </span>
          <?php } ?>
        </div>

        <?php 
          if($userId==0){
        ?>
          <button class="btn text-dark upperNavMenu loginSignup"  data-bs-toggle="modal" data-bs-target="#loginSignupModal" >
            <i class="bi bi-person"></i>
          </button>
        <?php 
          }
          else{
        ?>
          <div class="nav-item dropdown">
              <a class="btn text-dark upperNavMenu loginSignup" href="#" id="userDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="userDropdownMenuLink">
                  <a class="dropdown-item" href="./profile.php">Profile</a>
                  <a class="dropdown-item" href="./logout.php">Logout</a>
              </div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
  </nav>
  
  <div class="bg-dark secondNav">
      <div class="container">
          <nav class="nav" id="dynamicNav">
            <?php 
              foreach ($categories as $category) {
            ?>
              <a class="nav-link text-light lowerNavMenu" href="./showCatProduct.php?catid=<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></a>
            <?php
              }
            ?>
              <!-- More categories -->
              <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                  </a>
                  <ul class="dropdown-menu"></ul>
              </div>
          </nav>
      </div>
  </div>


</div>

<div class="modal" id="loginSignupModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark">
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 1rem; top: 1rem;"></button>
      <div class="modal-body p4">
        <div class="container-fluid">
          <div id="loginForm">
            <h4>Login</h4>
            <div class="row">
              <div class="col-md-6">
                <form id="loginFormMain">
                  <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter Your Email" required>
                    <div id="loginEmailHelpBlock" class="form-text text-white">

                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter Your Password" required>
                    <div id="loginPasswordHelpBlock" class="form-text text-white">

                    </div>
                  </div>
                  <div class="m-0 p-0 mb-3">
                    <button type="button" class="btn btn-link text-light">Forgot Password?</button>
                  </div>

                  <button type="submit" class="btn btn-primary mb-3" id="loginSubmit" name="loginSubmit">Login</button>
                </form>
              </div>
              <!-- Right side: Social Logins -->
              <div class="col-md-6 d-flex flex-column justify-content-center gap-3">
                <button class="btn btn-danger mb-2" id="googleLogin" style="background-color: #dc4e41;">
                  <i class="bi bi-google"></i>&nbsp; Login with Google
                </button>
                <button class="btn btn-primary" id="facebookLogin" style="background-color: #3b5998;">
                  <i class="bi bi-facebook"></i>&nbsp; Login with Facebook
                </button>
              </div>
            </div>

            <!-- Login form inputs -->
            <button type="button" class="btn btn-link text-light" id="flipToSignup">Don't have an account?&nbsp;Signup</button>
          </div>
          <div id="signupForm" style="display:none;">
            <h4>Signup</h4>
            <div class="row">
              <div class="col-md-6">
                <form id="signupFormMain">
                  <div class="mb-3">
                    <label for="signupEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="Enter Your Email" required>
                    <div id="emailHelpBlock" class="form-text text-white">

                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="signupPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Create a Password" required>
                    <div id="passwordHelpBlock" class="form-text text-white">
                      
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Your Password" required>
                    <div id="confirmPasswordHelpBlock" class="form-text text-white">
                      
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mb-3" id="signupSubmit" name="signupSubmit">Signup</button>
                </form>
              </div>
              <!-- Optionally, you can add additional elements or information on the right side -->
              <div class="col-md-6 d-flex flex-column justify-content-center gap-3">
                <button class="btn btn-danger mb-2" id="googleLogin" style="background-color: #dc4e41;">
                  <i class="bi bi-google"></i>&nbsp; Signup with Google
                </button>
                <button class="btn btn-primary" id="facebookLogin" style="background-color: #3b5998;">
                  <i class="bi bi-facebook"></i>&nbsp; Signup with Facebook
                </button>
              </div>
            </div>
            <button type="button" class="btn btn-link text-light" id="flipToLogin">Have an account? Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Signup Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h5 class="modal-title text-dark" id="successModalLabel"><i class="bi bi-check-circle-fill text-success"></i> Signup Successful! You can login now.</h5>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


