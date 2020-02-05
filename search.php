 <?php
            include 'include/conn.php';
           

            if (isset($_POST['search']))
            {
                $id = $_POST['id'];
                $query = "SELECT * from reservation where number = '$id'";

            
                $query_run = mysqli_query($conn,$query);

                    
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                        <tbody>
                            <tr>
                            
                                <td><?php echo $row['name']; ?></td> 
                                <td><?php echo $row['number']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['time']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td class="text-right"><button 
                                 type="submit" class="btn btn-danger badge-pill " <?php echo $row['id']; ?>>Delete</button></td> 
                                
                                
                            </tr>
                        </tbody>
                        
                    <?php     
            }
        }

        if (isset($_POST['view']))
        {
            $id = $_POST['id'];
            $query = "SELECT * from reservation ";

        
            $query_run = mysqli_query($conn,$query);

                
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                    <tbody>
                        <tr>
                        
                            <td><?php echo $row['name']; ?></td> 
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td class="text-right">
                                <button  type="submit" class="btn btn-danger badge-pill " <?php echo $row['id'] ?> >Delete</button>
                            </td> 
                            
                            
                        </tr>
                    </tbody>    
                    
                <?php     
        }
    }

    
        
        
        ?>