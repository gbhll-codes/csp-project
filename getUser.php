<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css" >
    table{
    border-collapse : collapse;
    width : 50%;
    color  : blue;
    font-family:monospace;
    font-size: 15px;
    text-align:left;

}
</style>
<body>
 <table>
    <tr>
        <th>Name</th>
        <th>Number</th>s
        <th>Email</th>
        <th>Date</th>
    </tr>
    <?php
        include 'include/conn.php';

        $query = "SELECT *FROM reservation";
        $result = mysqli_query($conn,$query);
        $resultView = mysqli_num_rows($result);

        if ($resultView > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$row['name'] ."</td><td>".$row['number']."</td><td>".$row['email']."</td><td>".$row['date']."</td></tr>"; 
            }
        }

    ?>
 </table>

    
</body>
</html>


