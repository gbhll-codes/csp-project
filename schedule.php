
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Ariwariwap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/schedule.css"> 
   
</head>
<body>
<form action="save.php" method="POST">
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

    <div class="schedule">
       <h1>Schedule Appointment</h1>
    </div>

    
    <div class="reservation">   
    <div class="col-lg-4">
   
    <div class="position">
    <div class="col">
      <input type="text" class="form-control" name="name" placeholder="Name">
      <br>
    </div>

    <div class="col">
      <input type="text" class="form-control" name="email" placeholder="Email">
      <br>
    </div>

    <div class="col">
      <input type="text" class="form-control" name="number" placeholder="Mobile Number">
      <br>
    </div>

    </div>

    <div class="row">

    <div class="col-9">
        <input class="form-control" type="date" name="date"value="2020-02-00" id="example-date-input">
      <br>
    </div>
   
    <div class="control col-9">
      <select name="time"class="custom-select " class="custom" >
          
          <option value="10 AM">10 AM</option>
          <option value="11 AM">11 AM</option>
          <option value="1 PM">1 PM</option>
          <option value="2 PM">2 PM</option>
          <option value="3 PM">3 PM</option>
          <option value="4 PM">4 PM</option>
      </select> 
    </div>
    
    </div>
    
    </div>
  
    <br>

    <div class="submit">
      <button type="submit" class="btn btn-primary" name="submit">Reserve</button>  
    </div>

    </form>

   
   
    

    
</body>
</html>