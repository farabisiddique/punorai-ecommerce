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


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/css/datepicker.min.css">

  

  <link href="./css/all.css" rel="stylesheet">
  <link href="./css/form.css" rel="stylesheet">
  

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
                      <h2>Edit Profile</h2>                  
                      <form>
                                  <div class="mb-3">
                                      <label for="fullName" class="form-label">Full Name</label>
                                      <input 
                                          type="text" 
                                          class="form-control" 
                                          id="fullName" 
                                          placeholder="Enter your full name" 
                                          value="<?php echo $userRow['user_full_name'];?>">
                                  </div>
                                  <div class="mb-3 mt-3">
                                      <label for="emailAddress" class="form-label">Email Address</label>
                                      <input 
                                          type="email" 
                                          class="form-control" 
                                          id="emailAddress" 
                                          placeholder="Enter your email" 
                                          value="<?php echo $userRow['email'];?>" disabled>
                                     
                                  </div>
                                  <div class="mb-3">
                                      <label for="mobile" class="form-label">Mobile</label>
                                      <input 
                                          type="tel" 
                                          class="form-control" 
                                          id="mobile" 
                                          placeholder="Please enter your mobile"
                                          value="<?php echo $userRow['user_mobile']==0?"":$userRow['user_mobile'];?>">
                                      
                                  </div>

                                  <div class="form-group mb-3">
                                      <label for="birthdayPicker">Birthday</label>
                                      <input type="text" class="form-control" id="birthdayPicker" value="<?php echo $userRow['user_dob']; ?>">
                                  </div>


                                  <div class="mb-3">
                                      <label>Gender</label>
                                      <select class="form-select" aria-label="Gender">
                                          <option value="0" <?php echo ($userRow['user_gender'] == '0') ? 'selected' : ''; ?>>Male</option>
                                          <option value="1" <?php echo ($userRow['user_gender'] == '1') ? 'selected' : ''; ?>>Female</option>
                                          <option value="2" <?php echo ($userRow['user_gender'] == '2') ? 'selected' : ''; ?>>Other</option>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <button type="button" class="btn btn-primary">Save Changes</button>
                                  </div>
                              </form>
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
  <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/js/datepicker-full.min.js"></script> 
  <script>
      const elem = document.getElementById('birthdayPicker');
      const datepicker = new Datepicker(elem, {
        // Datepicker options
        format: 'yyyy/mm/dd',
      });
  </script>




</body>

</html>
<?php
  }
?>