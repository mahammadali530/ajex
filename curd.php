<?php
include 'config.php';


session_start(); 

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_destroy(); 
    header('Location: curd.php'); 
    exit;
}


// if (isset($_POST['submit'])) {
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $number = $_POST['number'];
//   $password = $_POST['password'];


//   $sql = "INSERT INTO users (name, email, number, password) VALUES ('$name', '$email', '$number', '$password')";

//   if (mysqli_query($conn, $sql)) {
//       echo "data insert";
//   } else {
//       echo "faild";
//   }
// }



// if (isset($_POST['update'])) {
//   $user_id = $_POST['cid'];
//   $upname = $_POST['uname'];
//   $upemail = $_POST['uemail'];
//   $upnumber = $_POST['unumber'];
//   $uppassword = $_POST['upassword'];
//   $update_query = mysqli_query($conn, "
//         UPDATE `users` 
//         SET `name`='$upname', `email`='$upemail', `number`='$upnumber', `password`='$uppassword'  WHERE `id`='$user_id'
//         ");

// ");
//   if ($update_query) {
//     // echo "<script>alert('Updated successfully'); window.location.href='curd.php';</script>";
//   } else {
//     echo "error";
//   }
// }


// Delete code start 
// if (isset($_GET['delete'])) {
//   $id = $_GET['delete'];
//   $sql = "DELETE FROM users WHERE id='$id'";
//   mysqli_query($conn, $sql);
// }

// include 'config.php';
//  if(isset($_POST['submit'])){
//   $femail = $_POST['femail'];
//   $fpassword = $_POST['fpassword'];

//   // $sql="select * from users where username ='$name' and password ='$password'";   
//   $sql="SELECT * FROM user3 WHERE femail='$femail' AND fpassword='$fpassword'";

//   $result= mysqli_query($conn, $sql);
//   // $row = mysqli_fetch_assoc($result);

//   $count = mysqli_num_rows($result);
//   if($count > 0){
//     $_SESSION['femail']=$femail;
//     $_SESSION['fpassword']=$fpassword;
//       header("location:.php");
//   }else{
//       ?>

<script>
  //           alert('username and password are incorrect');
  //       </script>

<?php
//   }
//  }



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <script type="text/javascript" src="jquery-3.3.1.js"></script> -->



</head>
</body>
<!-- 
register start modal -->




<div class="modal fade" id="exampleModalle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="messge"></h2>
        <form method="POST" enctype="multipart/form-data" id="registermenu">

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="Enter Your Name" id="fname" name="fname">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" placeholder="Enter Your Email" id="femail" name="femail">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input class="form-control" type="text" id="fnumber" placeholder="Enter Your Number" name="fnumber">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="text" id="fpass" placeholder="Enter Your Password" name="fpassword">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="insertbtn" id="insertbtn" value="ADD DATA">add data</button>

      </div>
      </form>
    </div>
  </div>
</div>

<!-- register end mpdal -->

<!-- logi modal  -->


<?php


if(isset($_SESSION['femail'])){ ?>

<a href="curd.php?logout=true">
        <button style="margin-top:50px;margin-left:300px; margin-bottom:40px; background:#283593; font-family: bold" type="button" class="btn btn-primary">
            Log out
        </button>
    </a>
<?php }else { ?>
  <button style="margin-top:50px;  margin-bottom:40px; font-family: bold" type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalle">
    Register
  </button>
  
  <button style="margin-top:50px;  margin-bottom:40px; background:#6a1b9a ;font-family: bold" type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModallee">
    Login
  </button>

<?php }
?>


<div class="modal fade" id="exampleModallee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="messge"></h2>
        <form method="POST" enctype="multipart/form-data" id="loginmenu">


          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" placeholder="Enter Your Email" id="email" name="femail">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="text" id="pass" placeholder="Enter Your Password" name="fpassword">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" id="">add data</button>

      </div>
      </form>
    </div>
  </div>
</div>

<!-- login modal end -->






<!-- insert data from --><?php
if(isset($_SESSION['femail'])){ ?>
<button style=" margin-top:50px; margin-bottom:40px; font-family: bold" type="button" class="btn btn-primary" data-bs-toggle="modal"
  data-bs-target="#exampleModall">
  Add data
</button>

<?php } ?>


<div class="modal fade" id="exampleModall" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="messge"></h2>
        <form method="POST" enctype="multipart/form-data" id="addMenuForm">

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="Enter Your Name" id="name" name="name">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" placeholder="Enter Your Email" id="email" name="email">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input class="form-control" type="text" id="number" placeholder="Enter Your Number" name="number">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="text" id="pass" placeholder="Enter Your Password" name="password">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">L NAME</label>
            <input class="form-control" type="text" id="lname" placeholder="Enter Your lname" name="lname">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">CITY</label>
            <input class="form-control" type="text" id="city" placeholder="Enter Your city" name="city">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">PRICE</label>
            <input class="form-control" type="text" id="price" placeholder="Enter Your price" name="price">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="insertbtn" id="insertbtn" value="ADD DATA">add data</button>

      </div>
      </form>
    </div>
  </div>
</div>







<!-- update forom start -->

<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" id="updateMenuForm">

          <div class="mb-3">
            <input type="hidden" name="cid" id="cid">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="namee" name="uname">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" id="emaill" name="uemail">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input class="form-control" type="number" id="numberr" name="unumber">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" id="passw" name="upassword">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">L NAME</label>
            <input class="form-control" type="text" id="lnamee" placeholder="Enter Your lname" name="ulname">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">CITY</label>
            <input class="form-control" type="text" id="cityy" placeholder="Enter Your city" name="ucity">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">PRICE</label>
            <input class="form-control" type="text" id="pricee" placeholder="Enter Your price" name="uprice">
            <div class="error-message" style="color:red; display:none;"></div>
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_SESSION['femail'])){ ?>
<table id="dataTable" class="table table-bordered" cellspacing="10px" cellpadding="0">
  <thead class="table-dark">
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>Number</th>
    <th>Password</th>


    <th>uid</th>
    <th>name</th>
    <th>city</th>
    <th>price</th>

    <th>ur_id</th>
    <th>name</th>
    <th>email</th>
    <th>number</th>
    <th>password</th>
    <th>Action</th>
  </thead>
  <tbody class="table table-success table-striped">
    <tr>
      <td colspan="2">Loading...</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</body>

</html>
<script>
  fetchData();
  $('#updateMenuForm').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      url: 'update.php',
      method: 'POST',
      data: $(this).serialize(),
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          // alert(response.message); 
          $('#exampleModal').modal('hide');
          fetchData();
        } else {
          // alert(response.message); 
        }
      },
      error: function () {
        // alert('An error occurred while updating data');
      }
    });
  });

  function openModel(id, name = '', email = '', number = '', password = '', u_id, lname = '', city = '', price = '') {

    $('#cid').val(id);

    $('#namee').val(name);
    $('#emaill').val(email);
    $('#numberr').val(number);
    $('#passw').val(password);
    // $('#cid').val(u_id);
    $('#lnamee').val(lname);
    $('#cityy').val(city);
    $('#pricee').val(price);

    $('#exampleModal').modal('show');

  }

  function fetchData() {
    $.ajax({
      method: "GET", // HTTP method to fetch data
      url: "getdata.php", // Backend script to fetch data
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.success) {
          let tableRows = '';
          response.data.forEach(function (row) {
            tableRows += `
                                <tr>
                                <td>${row.id}</td>
                                <td>${row.name}</td>
                                <td>${row.email}</td>
                                <td>${row.number}</td>
                                <td>${row.password}</td>
                               <td> ${row.u_id}</td>
                                <td>${row.lname}</td>
                                <td>${row.city}</td>
                                <td>${row.price}</td> 
                                <td> ${row.ur_id}</td>
                                <td>${row.fname}</td>
                                <td>${row.femail}</td>
                                <td>${row.fnumber}</td> 
                                 <td>${row.fpassword}</td> 

                                
                                <td>   
                           <button  style="background:#0066FF; font-family: bold"type="button" class="btn btn-primary" 
                           onclick="openModel(${row.id} ,'${row.name}',
                          '${row.email}','${row.number}','${row.password}' ,'${row.u_id}','${row.name}','${row.city}','${row.price}','${row.ur_id}','${row.fname}','${row.femail}','${row.fnumber}','${row.fpassword}');">
                           Update</button> 
                           <button style="background:red;font-family: bold"
                                  type="button" 
                                  class="btn btn-danger" 
                                  onclick="deleteUser(${row.id})">
                                  Delete
                          </button>  
                                </td>   
                           
                                </tr>
                            `;
          });
          $('#dataTable tbody').html(tableRows);
        } else {
          $('#dataTable tbody').html('<tr><td colspan="2">No data available</td></tr>');
        }
      },
      error: function (xhr, status, error) {
        console.error("Error: " + error);
        $('#dataTable tbody').html('<tr><td colspan="2">Failed to fetch data</td></tr>');
      }
    })
  }
  $('#addMenuForm').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      url: "insertdata.php",
      method: "POST",
      data: $(this).serialize(),
      dataType: "json",
      success: function (response) {
        if (response.success) {
          $('#name').val('');
          $('#email').val('');
          $('#number').val('');
          $('#pass').val('');
          $('#lname').val('');
          $('#city').val('');
          $('#price').val('');
          $('#exampleModall').modal('hide');
          fetchData();
        } else {
          alert(response.message);
        }
      }
    })
  });

  function deleteUser(id) {
    if (confirm('Are you sure you want to delete this user?')) {
      $.ajax({
        url: 'delete.php',
        method: 'POST',
        data: { delete: id },
        dataType: 'json',
        success: function (response) {
          if (response.success) {
            fetchData();
          } else {
            alert(response.message || 'Failed to delete the record.');
          }
        },
        error: function () {
          alert('An error occurred while trying to delete the record.');
        }
      });
    }
  }



  // register ajex

  $(document).ready(function () {
    $('#registermenu').on('submit', function (e) {
      e.preventDefault();

      $.ajax({
        url: "registerinsert.php",
        method: "POST",
        data: $(this).serialize(),
        success: function (response) {

          $('#exampleModalle').modal('hide');
          $('#exampleModallee').modal('show');
        },
        error: function () {
          alert("An error occurred during registration.");
        }
      });
    });
  });


  // logiin ajex


  $(document).ready(function () {
    $('#loginmenu').on('submit', function (e) {
      e.preventDefault();

      $.ajax({
        url: "login.php",
        method: "POST",
        data: $(this).serialize(),
        dataType: "json", 
        success: function (response) {
          console.log(response);
          if (response.success) {
            // Show success modal or redirect
            $('#exampleModallee').modal('hide');
            alert("Login successfully.");
            window.location.href = 'curd.php';
            

          } else {
            // Handle login failure
            alert("Invalid email or password. Please try again.");
          }
        },
        error: function ( arguments, status, error) {
          console.log(error);
          alert("An error occurred during login.");
        }
      });
    });
  });


</script>