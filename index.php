<?php
// include 'connection.php';
//     if(isset($_POST['done'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $details = $_POST['details'];
//     $photo = $_POST['photo'];
//     $q = " INSERT INTO `users`(`username`, `password`,`details`,`photo`) VALUES ( '$username', '$password','$details', '$photo' )";
//     $query = mysqli_query($con,$q);
//     header('location:display.php');
//     }
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
 <script src="jquery-3.5.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form action="upload.php" method="post" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Details </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>
 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>
 <label> Details </label>
 <input type="text" name="details" class="form-control"> <br>
 <label> Photo </label>
 <input type="file" name="photo" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done" onclick="myFunction()"> Submit </button><br>
 <a class="btn" href="http://localhost:3000/display.php">View Users</a>
 </div>
 </form>
 </div>
</body>

</html>