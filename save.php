<?php

    include 'include/conn.php';

    $name = $_POST['name'];
    $number = $_POST['number'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $email = $_POST['email'];
   

    $sql  ="INSERT INTO reservation(name,number,time,date,email) values ('$name' , '$number','$time','$date','$email');";

    mysqli_query($conn, $sql);


    header ('location:schedule.php');    


?>
