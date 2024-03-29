<?php
  session_start();
  include './db.php';

  $userId = isset($_SESSION['user_id'])? $_SESSION['user_id'] : 0;
  if($userId==0){
    header("Location: index.php");
  }
  else{
      // Prepare the SQL statement
      $stmt = $conn->prepare("SELECT * FROM users WHERE id = :userId");

      // Bind the $userId parameter to the prepared statement
      $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);

      // Execute the prepared statement
      $stmt->execute();

      // Fetch the result
      $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

      // var_dump($userRow);
      // die();
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
  

</head>

<body>
  <div class="row">
    <div class="col-md-10 mx-auto">

      <?php include './infobar.php'; ?>
      <?php include './navbar.php'; ?>

      <div class="container mt-4">
          <div class="row">
              <div class="col-md-4">
                  <div class="bg-dark border rounded-3 p-3">
                      <div class="mb-4">
                          <p>Hello, <span id="lzd_current_logon_user_name"><?php echo $userRow['user_full_name']? $userRow['user_full_name']: 'User'; ?></span></p>
                      </div>
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a href="./profile.php" class="text-light nav-link">My Profile</a>
                              <a href="#" class="text-light nav-link">Address Book</a>
                              <a href="#" class="text-light nav-link">My Payment Options</a>
                          </li>
                          <li class="nav-item"><a href="#" class="text-light nav-link">My Orders</a></li>
                          <li class="nav-item"><a href="#" class="text-light nav-link">My Reviews</a></li>
                          <li class="nav-item"><a href="#" class="text-light nav-link">Be a Seller</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-8">
                  <div class="bg-dark border rounded-3 p-3">
                      <div class="mb-4">
                          <h2>My Profile</h2>
                          <a href="./editProfile.php" class="btn btn-outline-light btn-sm me-3">Edit</a>
                          <a href="#" class="btn btn-outline-light btn-sm">Change Password</a>
                      </div>
                      <p>Hello, <?php echo $userRow['user_full_name']? $userRow['user_full_name']: 'User'; ?></p>
                      <p>Email: <span><?php echo $userRow['email']; ?></span></p>
                      

                      <!-- Additional sections like address book and orders can be added here -->
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


</body>

</html>
<?php
  }
?>