<?php
// include 'config.php'; 


// $name = $_POST['name'];
// $email = $_POST['email'];
// $number = $_POST['number'];
// $password = $_POST['password'];
// $lname = $_POST['lname'];
// $city = $_POST['city'];
// $price = $_POST['price'];


// $query1 = "INSERT INTO users (name, email, number, password) VALUES ('$name', '$email', '$number', '$password')";
// if (mysqli_query($conn, $query1)) {
    
//     $user_id = mysqli_insert_id($conn);

    
//     $query2 = "INSERT INTO user2 (user_id, lname, city, price) VALUES ('$user_id', '$lname', '$city', '$price')";
//     if (mysqli_query($conn, $query2)) {
        
//         echo json_encode(['success' => true]);
//     } else {
        
//         echo json_encode(['success' => false, 'error' => 'Failed to insert into user2: ' . mysqli_error($conn)]);
//     }
// } else {
    
//     echo json_encode(['success' => false, 'error' => 'Failed to insert into users: ' . mysqli_error($conn)]);
// }

include('config.php');

 
  $fname=$_POST['fname'];
  $femail=$_POST['femail'];
  $fnumber=$_POST['fnumber'];
  $fpassword=$_POST['fpassword'];



  

   $sql="INSERT INTO `user3` ( `fname`, `femail`, `fnumber`, `fpassword`) VALUES ( '$fname', '$femail', '$fnumber', '$fpassword')";
   $result = mysqli_query($conn, $sql);
    if($result){
      //header("location:login.php");
//echo "data insert";
    }else{
     //   echo "operation failed";
    }

?>
