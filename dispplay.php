<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        form {
          max-width: 500px;
          margin: 0 auto;
          padding: 20px;
          background-color: #f8f9fa;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
          margin-bottom: 20px;
        }

        label {
          font-weight: bold;
        }

        input[type="text"] {
          padding: 10px;
          border: 1px solid #ced4da;
          border-radius: 4px;
          width: 100%;
          font-size: 16px;
        }

        input[type="text"]:focus {
          outline: none;
          border-color: #80bdff;
          box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
          background-color: #007bff;
          border-color: #007bff;
          color: #fff;
          padding: 10px 20px;
          border-radius: 4px;
          font-size: 16px;
          cursor: pointer;
          transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
          background-color: #0069d9;
          border-color: #0062cc;
        }
        
        *{
            margin:0;
            font-family: Arial;
            box-sizing: border-box;
        }
        body{
            background-color: gray;
        }
        .box{
            text-decoration:none;
            color:white;
        }
        #nav{ 
            height:60px;
            background-color:#0F1111;
            color:white;
            display:flex;
            align-items:center;
            justify-content: space-evenly;
        }
        table {
            font-size:20px;
            border:1px solid black;
            border-collapse:collapse;
            width:90%;
            margin:20px auto;
            text-align: center;
        }
        th{
            height:50px;
            border:3px solid black;
            text-decoration: underline;
            background-color: #80ced6;
        }
        td{
            height:50px;
            border:2px solid black;
            background-color: #d5f4e6;
        }
        .button{
            height:30px;
            margin-right:20px;
            font-weight: bold;
            border-radius: 10px;
            border:1px solid black;
        }
        .submit{
            background-color:green;
            color:white;
            width:60px;
        }
        .cancel{
            background-color: red;
            color:white;
            width:80px;
        }
        .del{
            background-color: blue;
            color:white;
            width:80px;
        }
        .button:hover{
            cursor: pointer;
            font-size:13px;
        }
        .operation-buttons a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .update-btn {
            background-color: #28a745;
            margin-right: 5px;
        }
        .delete-btn {
            background-color: #dc3545;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
      <div id="nav">
        <a href="#" class="box">STUDENT RECORD</a>
      </div>

      <div class="nav-buttons text-center my-3">
        <a href="index.php" class="btn btn-primary">Add User</a>
        <a href="search.php" class="btn btn-primary">Edit</a>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `sdetail`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sid = htmlspecialchars($row["sid"]);
                            $name = htmlspecialchars($row["name"]);
                            $phone = htmlspecialchars($row["phone"]);
                            $email = htmlspecialchars($row["email"]);
                            $course = htmlspecialchars($row["course"]);
                            echo '<tr>
                                    <th scope="row">'.$sid.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$course.'</td>
                                    <td class="operation-buttons">
                                        <a href="update.php?updateid='.$sid.'" class="btn btn-success update-btn">Update</a>
                                        <a href="delete.php?deleteid='.$sid.'" class="btn btn-danger delete-btn">Delete</a>
                                    </td>
                                  </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
