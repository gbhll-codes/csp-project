<?php

    include 'include/conn.php';

    if (isset($_POST['delete']))
    {
        $id = $_POST['id'];
        $query = "SELECT * from reservation where number = '$id'";


    
        $query_run = mysqli_query($conn,$query);

    }

    
    

?>  