<?php
$server1 = "localhost";
$username1 = "root";
$password1 = "";

$con = mysqli_connect($server1, $username1, $password1);

if (!$con) {
    die ("connection failed" . mysqli_connect_error());
}

session_start();
// $i1 = isset($_SESSION['i1']) ? $_SESSION['i1'] : "Default Value";
$i2 = isset ($_SESSION['i2']) ? $_SESSION['i2'] : "Default Value";
$i3 = isset ($_SESSION['i3']) ? $_SESSION['i3'] : "Default Value";
$i4 = isset ($_SESSION['i4']) ? $_SESSION['i4'] : "Default Value";
$i5 = isset ($_SESSION['i5']) ? $_SESSION['i5'] : "Default Value";
$i6 = isset ($_SESSION['i6']) ? $_SESSION['i6'] : "Default Value";
$i7 = isset ($_SESSION['i7']) ? $_SESSION['i7'] : "Default Value";

$num = $_COOKIE["selected_item"];
$query1 = "select tourname from `dest`.`dest` where sr=$num";
$result1 = mysqli_query($con, $query1);
$count = mysqli_num_rows($result1);
if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        $i1 = $row["tourname"];
    }
}

$sql = "INSERT INTO `book`.`book` (`tourname1`,`name`,`email`, `phone`, `address`, `visiterno`, `visitdate`) VALUES ('$i1', '$i2', '$i3', '$i4', '$i5', '$i6', '$i7');";

if ($con->query($sql) == true) {
    echo '
    <script>
    alert("Successfully booked")
    </script>';
} else {
    echo "error: $sql <br> $con->error";
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Thank you</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> Visite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Tourandtravel/index.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Tourandtravel/about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Tourandtravel/contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <h1 style="text-align: center; padding-top: 150px; ">Thank you !!!</h1>
    <h3 style="text-align: center; margin: 100px"> We will contact you soon.</h3>
    <div class="but" style="text-align: center; margin: auto;  margin-bottom: 150px;">
        <button class="btn btn-primary" type="button" style="text-align: center; margin: auto;"
            onclick="window.location.href='https://localhost/Tourandtravel/index.php';">Back to home</button>
        <button class="btn btn-primary" type="button" style="text-align: center; margin: auto;"
            onclick="check()">Sign-out</button>
    </div>
    <footer class="bg-dark text-center text-white">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright: Visite
        </div>
    </footer>
</body>
<script>
    function check() {
        sessionStorage.setItem('data', '&nbsp;' + "Profile");
        sessionStorage.setItem('data5', "Log in");
        window.location.href = 'https://localhost/Tourandtravel/index.php';
    }
</script>

</html>