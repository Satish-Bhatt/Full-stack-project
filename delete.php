<?php 
   include ('connect.php'); 
    if(isset($_GET['deleteid'])){
        $sid=$_GET['deleteid'];

        $sql="delete from `sdetail` where sid=$sid";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted Successfull";
            header("location:display.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<button class="button cancel" onclick="locate()">Cancel</button>
</body>
</html>