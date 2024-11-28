<?php
include 'config.php'; 

if (isset($_POST['delete'])) {
    $id = $_POST['delete']; 
   
    $query1 = "DELETE FROM users WHERE id = '$id'";

    
    $query2 = "DELETE FROM user2 WHERE user_id = '$id'";

    
    if (mysqli_query($conn, $query1) && mysqli_query($conn, $query2)) {
        echo json_encode(['success' => true, 'message' => 'Record deleted successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete record.']);
    }
}
?>
