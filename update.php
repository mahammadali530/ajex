<?php
include 'config.php'; 

// Retrieve the data from the form
$user_id = $_POST['cid'];
$upname = $_POST['uname'];
$upemail = $_POST['uemail'];
$upnumber = $_POST['unumber'];
$uppassword = $_POST['upassword'];
$uplname = $_POST['ulname'];
$upcity = $_POST['ucity'];
$upprice = $_POST['uprice'];


$update_user_query = "UPDATE `users` 
                      SET `name` = '$upname', `email` = '$upemail', `number` = '$upnumber', `password` = '$uppassword' 
                      WHERE `id` = '$user_id'";


if (mysqli_query($conn, $update_user_query)) {
    
    $update_details_query = "UPDATE `user2` 
                             SET `lname` = '$uplname', `city` = '$upcity', `price` = '$upprice' 
                             WHERE `user_id` = '$user_id'";  

    
    if (mysqli_query($conn, $update_details_query)) {
        echo json_encode(['success' => true, 'message' => 'Data updated successfully in both tables']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update user details']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update user data']);
}

?>
