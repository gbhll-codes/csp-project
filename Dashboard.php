<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariwariwap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<h2>Welcome <?php echo $_SESSION["name"]; ?></h2>



</div>
<div class="position"><a href="logout.php">Logout</a></div>
<?php
if($_SESSION["name"]) 
?>

    
<div class="container">
    <div class="jumbotron">
        <div class="card">
        <div class="welcome">
        


        <form action="" method="POST">
        
        <div class="textbox">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <input type="text" name="id" placeholder="Search Number">
            <div class="button">
                <button type="submit" name="search"> Search</button>
            </div>
            <button type="submit" name="view"> View List</button>
        </div>

    </form>

        <div class="card-body">
        <h5 class="card-title">Appointment Reservation</h5>
        <table class="table table-dark">
  <thead>
    <tr>     
            <th scope="col-5">Name</th>
            <th scope="col">Number</th>
            <th scope="col">Email</th>
            <th scope="col">Time</th>
            <th scope="col">Date</th>
            <th  class="text-right">Action</th>
    </tr>
  </thead>
  
    
    <?php
       
        include 'search.php';
        
        
    ?>


</table>
     </div>
        </div>
         </div>
     </div>
</div>

    
</body>
</html>