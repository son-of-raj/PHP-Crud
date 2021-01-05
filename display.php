
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<div class="col-lg-12">
<center><h1>Display user details</h1></center>

<table class="table table-striped table-hover table-bordered">
    <tr class="bg-dark text-white text-center">
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Details</th>
        <th>Photo</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
        <?php
        include 'connection.php';
        $q = "select * from users";
        $query = mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query)){
            // $s=$res['photo'];
            // $image = $res['photo'];
        ?>

    <tr class="text-center">
        <td> </td>
        <td><?php echo $res['username']; ?></td>
        <td><?php echo $res['password']; ?></td>
        <td><?php echo $res['details']; ?></td>
        <td><img height="60" width="80"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($res['photo']);?>" ></td>
        <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>        
        <td> <button class="btn-success btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a>  </button> </td>        
    </tr>
    <?php
        }
        ?>
</table>
<a class="btn" href="http://localhost:3000/index.php">Insert New</a>
 </div>
 </div>
 <script>
     var addSerialNumber = function () {
    $('table tr').each(function(index) {
        $(this).find('td:nth-child(1)').html(index+1);
    });
};

addSerialNumber()
 </script>
</body>
</html>