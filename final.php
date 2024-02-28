<?php
if (isset($_POST['name'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);

    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $visiterno = $_POST['visiterno'];
    $visitdate = $_POST['visitdate'];
    $num = $_COOKIE["selected_item"];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $phone = mysql_real_escape_string( $_POST['mob']);
    $address = $_POST['address'];

    $sql = "INSERT INTO `book`.`book` (`tourname1`,`name`,`email`, `phone`, `address`, `visiterno`, `visitdate`) VALUES ('$num', '$name', '$email', '$phone', '$address', '$visiterno', '$visitdate');";

    if ($con->query($sql) == true) {
        // echo 'alert("Successfully booked")';
    } else {
        echo "error: $sql <br> $con->error";
        'console.log("nope")';
    }

    $con->close();
    header("location:https://localhost/Mini Project sem-4/booked.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data1');
        document.cookie = "selected_item=" + data;
        if (data) {
            console.log(data)
            // document.cookie = "selected_item="+data;
        }
    });
    window.onload = function () {
        if (!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>

<style>
    .main {
        background-image: url("img/book.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        /* backdrop-filter: blur(10px); */
        /* width: 400px; */
        margin: auto;
        padding-top: 50px;
        display: block;
        overflow: auto;
        height: 100%;
        padding-bottom: 10px;
        height: 100vh;
        /* filter: blur(5px); */
    }
    .main1{
 width: 500px;
 margin: auto;
  backdrop-filter: blur(10px);
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
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
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/index.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/contact.php">Contact us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/book.php">Previous</a>

                </li>
            </ul>
        </div>
    </nav>
    <div class="main">
        <div class="main1">
        <h1 style="padding-bottom: 40px">
            <?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";
            $con = mysqli_connect($server1, $username1, $password1);
            $num = 0;
            $num = $_COOKIE["selected_item"];
            // $num = 1;
            $query = "select tourname from `dest`.`dest` where sr=$num";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["tourname"];
                }
            }
            $con->close();
            ?>
        </h1>
        <form action="final.php" name="verify" method="post">
            <!-- Username: <br> -->
            <input type="text" placeholder="Username" class="name" name="name" required id="kk" value="username"
                style=" pointer-events: none; text-align: center;"><br><br>

                
            <input type="email" placeholder="Enter e-mail" class="email" name="email" required id="s"
                style="text-align: center;"> <br><br>


            <input type="number" placeholder="Enter phone number" class="phone" name="phone" required id="ss"
                style="text-align: center;"><br><br>


            <!-- <input type="text" placeholder="Enter address" class="address" name="address" required id="sss" 
                style="text-align: center; " textarea rows="5" ><br><br> -->
            <textarea rows="3" cols="30" name="address" class="address" required id="sss"
                placeholder="Enter your address" style="text-align: center"></textarea><br><br>
            <!-- Enter number of visiter: <br> -->
            <input type="number" placeholder="Enter number of visiter" class="visiterno" name="visiterno" required
                id="kkk" style="text-align: center; width: 200px" min="1" max="5"><br><br>
            Date of travel:<br>
            <input type="date" placeholder="Select tour date" class="visitdate" name="visitdate" required id="kkkk"
                style="margin-bottom: 40px; text-align: center;"> <br><br>
            <button type="submit" onclick="last()" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright: Visite
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script>
    function last() {

    }

    document.addEventListener('DOMContentLoaded', function () {
        const imp = sessionStorage.getItem('username');
        document.getElementById('kk').value = imp;
    });
</script>

</html>