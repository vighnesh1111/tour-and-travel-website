<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .main {
            text-align: center;
            padding-top: 50px;
            font-size: 30px;
        }

        .signout {
            padding-top: 50px;
            text-align: center;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const data = sessionStorage.getItem('username');
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
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/Mini Project sem-4/contact.php">Contact us
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main" id="content1"></div>
    <br>

    <div class="main1" style="text-align: center; padding-top: 100px; font-size: 25px;">
        <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";
        $con = mysqli_connect($server1, $username1, $password1);
        $name = $_COOKIE["selected_item"];

        $query = "SELECT * FROM `dest`.`dest` d,`tws`.`tws` t, `book`.`book` b WHERE b.name = '$name'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "E-mail: ", $row["email"];
                break;
            }
        }
        $con->close();
        ?>
        <br>
        <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";
        $con = mysqli_connect($server1, $username1, $password1);
        $name = $_COOKIE["selected_item"];
        $query = "SELECT b.phone FROM `dest`.`dest` d,`tws`.`tws` t, `book`.`book` b WHERE b.name = '$name'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Phone number: ", $row["phone"];
                break;
            }
        }
        $con->close();
        ?>
        <br> <br><br><br>
        Applied for booking: <br>
       
            <?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";
            $con = mysqli_connect($server1, $username1, $password1);
            $name = $_COOKIE["selected_item"];
            $query = "SELECT d.destination FROM `dest`.`dest` d,`tws`.`tws` t, `book`.`book` b WHERE d.sr = b.tourname1 AND b.name = '$name'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Destination: ", $row["destination"];
                    break;
                }
            } else {
                echo "<div class='iff'>No booking done</div>";
            }
            $con->close();
            ?>
  <br>

        <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";
        $con = mysqli_connect($server1, $username1, $password1);
        $name = $_COOKIE["selected_item"];
        $query = "SELECT b.visiterno FROM `dest`.`dest` d,`tws`.`tws` t, `book`.`book` b WHERE d.sr = b.tourname1 AND b.name = '$name'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Number of visiter: ", $row["visiterno"];
                break;
            }
        }
        $con->close();
        ?>
        <br>
        <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";
        $con = mysqli_connect($server1, $username1, $password1);
        $name = $_COOKIE["selected_item"];
        $query = "SELECT b.visitdate FROM `dest`.`dest` d,`tws`.`tws` t, `book`.`book` b WHERE d.sr = b.tourname1 AND b.name = '$name'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Date for visit: ", $row["visitdate"];
                break;
            }
        }
        $con->close();
        ?>
    </div>

    <div class="signout">
        <!-- <button>Sign out</button> -->
        <button type="button" onclick="check()" class="btn btn-primary">Sign out</button><br><br><br>
        <button type="button" onclick="wait()" class="btn btn-primary">Cancel Tour</button>
        <br><br><br><br><br><br><br><br>
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
    function check() {
        sessionStorage.setItem('data', '&nbsp; Profile');
        sessionStorage.setItem('data5', 'Log in')
        window.location.href = "https://localhost/Mini Project sem-4/index.php";
        // sessionStorage.setItem('data3', 'Username')
    }

    document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('content1');
        const data1 = sessionStorage.getItem('username1');
        const lname = sessionStorage.getItem('lname');
        if (data1) {
            contentDiv.innerHTML = "Name: " + data1 + "&nbsp;" + lname;
        }
    });

    // function cancl(){
    //     alert("

    //     $server1 = "localhost";
    //     $username1 = "root";
    //     $password1 = "";
    //     $con = mysqli_connect($server1, $username1, $password1);
    //     $name = $_COOKIE["selected_item"];
    //     $query = "SELECT FROM `dest`.`dest` d,`tws`.`tws` t, `book`.`book` b WHERE d.sr = b.tourname1 AND b.name = '$name'";
    //     $result = mysqli_query($con, $query);
    //     if($result == true){
    //         // echo '<script>alert("wtf");</s';
    //     }
    //     $con->close();
    //     ");
    // }

    function wait() {
        alert(document.querySelector('.iff').innerHTML)
        if (document.querySelector('.iff').innerHTML == "No booking record") {
            alert("No booking record")
        } else {
            window.location.href = 'https://localhost/Mini Project sem-4/cancel.php'
        }
    }
</script>

</html>