<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Validation</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>
    <div class="container text-center mt-5">
        <h3 class="font-weight-light mb-4">Enter a Certificate ID</h3>
        <form method="POST" action="">
        <input type="text" name="cert_id" id="cert_id" class="form-control">
        <button class="btn btn-success mt-3" value="submit" name="submit">Submit</button>
        </form>
    </div>
    <div class="container">
        <?php 
            if(isset($_POST['submit'])){
                $conn = mysqli_connect("localhost","root","","certificates");
                if(!$conn)
                    die(mysqli_error($conn));
                $cert_id = $_REQUEST['cert_id'];
                $show = mysqli_query($conn,"SELECT * FROM `certs` WHERE cert_id = '$cert_id'");
                if(mysqli_num_rows($show)==0){
                    ?>
                    <div class="alert alert-danger mt-2" role="alert">No record found!</div>
                <?php
                }
                else{
                while($row1 = mysqli_fetch_array($show)){
                    $id = $row1['id'];
                    $name = $row1['name'];
                    $event = $row1['event'];
                    $date = $row1['date'];
                    $duration = $row1['duration'];
                    $cert_id = $row1['cert_id'];
                    ?>
                    <table class="table mt-5">
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Event</td>
                            <td>Date</td>
                            <td>Duration</td>
                            <td>Certificate</td>
                        </tr>
                        <tr>
                        <td><?php echo $row1['id'];?></td>
                        <td><?php echo $row1['name'];?></td>
                        <td><?php echo $row1['event'];?></td>
                        <td><?php echo $row1['date'];?></td>
                        <td><?php echo $row1['duration'];?></td>
                        <td><?php echo $row1['cert_id'];?></td>
                        </tr>
                    </table>
                    <?php
                }
            }
        }
        ?>
    </div>
</body>
</html>