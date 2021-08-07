<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "rbeitest_db");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Courses</title>
    <style>
        body {
            background: linear-gradient(120deg, #2980b9, #8e44ad);
            background-attachment: fixed;
        }

        a {
            color: black;
        }

        span {
            color: #ff8080;
        }
    </style>
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container-fluid">
            <h3>RBE <span>INSTITUTE</span></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex" action="dashboard.php">
                    <button class="btn btn-transparent" type="submit">Home</button>
                </form>
                <form action="login.php">
                    <button class="btn btn-transparent" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar ends -->
    <div class="container my-4">
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="ddbtn" data-bs-toggle="dropdown" aria-expanded="false">Subject</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="">Action</a></li>
            </ul>
        </div>
    </div>
    <?php
    $course_class = $_SESSION['class'];
    $course_class = $course_class . '%';
    $sub_query = "SELECT * FROM `rb_subject_tb` WHERE class LIKE '$course_class'";
    $sub_result = mysqli_query($conn, $sub_query) or die(mysqli_error($conn));
    $sub_count = mysqli_num_rows($sub_result);

    if ($sub_count == 0) {
        echo "No Match Found!";
    } else {
        while ($sub_row = mysqli_fetch_array($sub_result)) {
            
        }
    }
    ?>
</body>

</html>