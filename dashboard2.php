<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates Panel</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#">Add Information</a>
            </li>
        </ul>
    </nav>
        <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left" src></i>
                </button>
            </div>
        </nav>
        <div class="text-center">
            <h2 class="mb-5">Add Certificate Information</h2>
            <form class="form" method="POST">
                <div class="form-group ml-5 mr-5">
                    <label for="name">Full Name</label>
                    <input type ="text" class="form-control" name="name" id="name" placeholder="Enter Full Name">
                </div>
                <div class="form-group ml-5 mr-5">
                    <label for="event">Event Name</label>
                    <input type="text" class="form-control" name="event" id="event" placeholder="Enter Event Name">
                </div>
                <div class="form-group ml-5 mr-5">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="form-group ml-5 mr-5">
                    <label for="duration">Duration</label>
                    <select class="form-control" name="duration" id="duration">
                        <option>1 Month</option>
                        <option>2 Months</option>
                        <option>3 Months</option>
                    </select>
                </div>
                <div class="form-group ml-5 mr-5">
                    <label for="cert_id">Certificate ID</label>
                    <input type="text" class="form-control" name="cert_id" id="cert_id" placeholder="Enter Certificate ID">
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
            <?php 
            if(isset($_POST['submit'])){
                $conn = mysqli_connect("localhost","root","","certificates");
                if(!$conn)
                    die($mysqli_error($conn));
                else{
                    $name = $_REQUEST['name'];
                    $event = $_REQUEST['event'];
                    $date = $_REQUEST['date'];
                    $duration = $_REQUEST['duration'];
                    $cert_id = $_REQUEST['cert_id'];
                    
                    if($name== "" || $event == "" || $date== "" || $duration == "" || $cert_id == "")
                        echo '<script>alert("Please enter all details");</script>';
                    else{
                        $result = mysqli_query($conn,"INSERT INTO certs(name, event, date, duration, cert_id) VALUES ('$name','$event','$date','$duration','$cert_id')");
                        if($result){
                            ?>
                            <div class="alert alert-success mt-2" role="alert">
                            Record added successfully!
                          </div>
                       <?php }
                    }
                }
            }
            ?>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>
</html>