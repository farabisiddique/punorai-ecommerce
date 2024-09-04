<?php
// Include the database connection file
include '../db.php'; // Adjusted to correctly include the db.php file from the root directory

// Get the data from the AJAX request
$uid = isset($_POST['uid']) ? intval($_POST['uid']) : 0;
$pid = isset($_POST['pid']) ? intval($_POST['pid']) : 0;



// Check if the required data is present
if ($uid > 0 && $pid > 0) {
    try {
        // Prepare the SQL statement
        $sql = "INSERT INTO cart (cart_product_id, cart_user_id, cart_added_at) VALUES (:pid, :uid, NOW())";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':pid', $pid);
        $stmt->bindParam(':uid', $uid);
        
        // Execute the statement
        if ($stmt->execute()) {
            
            $response = 1;
        } else {
            $response = 0;
        }
    } catch (PDOException $e) {
        $response = 0;
    }
} else {
    $response = 0;
}

// Return the response as JSON
echo json_encode($response);

?>
