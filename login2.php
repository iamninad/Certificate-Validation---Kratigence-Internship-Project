<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cert Login</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>
<div class="py-5">
    <div class="container">
    <form class="form" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type ="text" class="form-control w-50" name="username" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control w-50" name="password" id="password" placeholder="Enter password">
        </div>
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    <?php 
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost","root","","login");
        if(!$conn)
            die(mysqli_error($conn));
        else{
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $result = mysqli_query($conn,"SELECT * FROM `users` WHERE username='$username' and password='$password'");
            if(mysqli_num_rows($result) == 0){
                echo '<script>alert("Enter valid details")</script>';
            }
        else{
            header("location:dashboard2.php");
        }
    }
    }
    ?>
</body>
</html>