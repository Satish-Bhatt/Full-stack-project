<!-- search.php -->
<?php
include("connect.php");

if (isset($_POST['search'])) {
    $searchId = $_POST['searchId'];

    // Check if the student ID exists in the database
    $sql = "SELECT * FROM sdetail WHERE sid = '$searchId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Student ID found, redirect to update.php
        header("Location: update.php?updateid=$searchId");
        exit();
    } else {
        // Student ID not found, display an error message
        $error = "No record found with the provided Student ID.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2>Search Student</h2>
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="searchId">Search Student ID:</label>
                <input type="text" class="form-control" id="searchId" name="searchId" placeholder="Enter Student ID" required>
            </div>
            <button type="submit" class="btn btn-primary" name="search">Search</button>
        </form>
    </div>
</body>
</html>