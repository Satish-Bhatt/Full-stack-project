<?php
    include("connect.php");
    if(isset($_POST['submit'])){
       $sid=$_POST['sid'];
       $name=$_POST['name'];
       $phone=$_POST['phone'];
       $email=$_POST['email'];
       $course=$_POST['course']; 
    
    
        $sql="insert into `sdetail` (sid, name, phone, email, course) values('$sid', '$name', '$phone', '$email', '$course')";
        $result=mysqli_query($conn, $sql);
        if($result){
            // echo "Data inserted Succesfully";
            header("location: display.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?> 
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title></title>
  </head>
  <body>
  <div class="container my-5">
      <form method="post">
        <div class="form-group">
          <label>Student ID</label>
          <input type="text" class="form-control"  placeholder="Student ID" name="sid"  autocomplete="off" >
        </div>

        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control"  placeholder="Your Name" name="name"  autocomplete="off" >
        </div>
          
        <div class="form-group">
          <label>Phone Numebr</label>
          <input type="text" class="form-control"  placeholder="Your Phone Number" name="phone" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control"  placeholder="email@gmail.com" name="email" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Course</label>
          <input type="text" class="form-control"  placeholder="Course" name="course" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>