<?php

    include 'include/conn.php';
   
   
        $id = $_POST['id'];
        $query = "DELETE FROM `reservation` WHERE id = '$id'";


    
        $query_run = mysqli_query($conn,$query);

      header ('location:dashboard.php');
    

?>  