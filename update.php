<?php
include 'connection.php';

if(isset($_POST['done'])){

$id= $_GET['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $details = $_POST['details'];
 $q = " UPDATE users set id =$id, username='$username', password='$password',details='$details' where id=$id";

 $query = mysqli_query($con,$q);
 header('location:display.php');
}


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
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Update Details</h1>
 </div><br>
 <?php
       $id1 = $_GET['id'];
        $q = "select username,password,details from users where id =$id1";
        $query = mysqli_query($con,$q);
        $res = mysqli_fetch_array($query);
        ?>
 <label> Username: </label>
 <input type="text" name="username" class="form-control" value= "<?php echo $res['username']; ?>"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control" value= "<?php echo $res['password']; ?>"> <br>
 <label> Details </label>
 <input type="text" name="details" class="form-control" value= "<?php echo $res['details']; ?>"> <br>


 <button class="btn btn-success" type="submit" name="done" onclick="myFunction()"> Submit </button><br>
 <a class="btn" href="http://localhost:3000/display.php">Display</a>
 </div>
 </form>
 </div>

</body>

</html>