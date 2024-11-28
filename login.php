<?php

include('config.php');

session_start();

$femail = $_POST['femail'];
$fpassword = $_POST['fpassword'];

  
$sql = "SELECT * FROM user3 WHERE femail='$femail' AND fpassword='$fpassword'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
if ($count > 0) {
    $_SESSION['femail'] = $femail;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

?>