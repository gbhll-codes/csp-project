<?php

session_start();
if($_SESSION["name"]) 

?>
<html>
<head>
<title>User Login</title>
</head>



<body>


Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.


 
<?php

include 'getUser.php';
?>
    


</body>
</html>