
<?php
    include 'login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariwariwap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css"> 
    <script src="login.js"></script>
</head>

<body>

    <div class="reserve">
        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
        <a href="schedule.php" style="text-decoration: none;">Schedule Appointment </a>
    </div>

    <div class="box">
        <i class="fa fa-laptop" aria-hidden="true"></i>
        <h1>BoXBuild Tech</h1>
    </div>

    <div class="login1">
        <i class="fa fa-user" aria-hidden="true"></i>
       <a href="index.php" style="text-decoration: none;">Admin</a>
       
    </div>

    <form action="" method="POST" id="form">
        <div class="login" >
            <h1>Admin</h1>
            <div class="textbox">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" id="user" name="username" placeholder="Username" require>
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" id="pas" name="password" placeholder="Password" require> 
            </div>

            <input type="submit"  class="btn" value="Sign in">
        </div>
    </form>
</body>
</html>
