<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
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
    .imglast {
        background-image: url("img/<?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";

        $con = mysqli_connect($server1, $username1, $password1);
        $num = 0;
        $num = $_COOKIE["selected_item"];
        // $num =1;
        $query = "select last from `dest`.`dest` where sr=$num";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["last"];
            }
        }
        $con->close();
        ?>");
 background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
            width: 100%;
            height: 400px;
        }

        #one {
            font-size: 20px;
        }
</style>

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
            </ul>
        </div>
    </nav>

    <div class="imglast"></div>

    <div class="first" style="padding-top: 20px">
        <h1 style="text-align: center">
            <?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);
            $num = 0;
            $num = $_COOKIE["selected_item"];
            // $num =1;
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
    </div>
    <div class="jjj" style="display:block;

overflow:auto;

height: 100%; ">
        <div class="fas" style="float: left; padding-top: 40px; padding-left: 100px;">
            <h3>Tour includes: <br> <br>&nbsp; &nbsp;
                <i style='font-size:24px' class='fas'>&#xf594; <br>
                    <h6> Hotel</h6>
                </i> &nbsp; &nbsp;
                <i style='font-size:24px' class='fas'>&#xf805; <br>
                    <h6>Meals</h6>
                </i> &nbsp; &nbsp;
                <i style="font-size:24px" class="fa">&#xf207;<br>
                    <h6>Transport</h6>
                </i> &nbsp; &nbsp;
                <i style="font-size:24px" class="fa">&#xf072; <br>
                    <h6>Flight</h6>
                </i> &nbsp; &nbsp;
                <i style='font-size:24px' class='fas'>&#xf59f; <br>
                    <h6>Sightseeing</h6>
                </i>
            </h3> <br>
            <br> <br><br>
            <h3> Why travel with Visite:</h3> <br>
            <h4>
                Expert tour manager all throughout the tour. <br>
                Yummy meals, all included in the tour price. <br>
                Music, fun and games everyday. </h4>
            <div class="final" style="margin: auto; text-align: center; padding-top: 50px">
                <button class="btn btn-primary"
                    onclick="location.href='https://localhost/Mini Project sem-4/final.php'">Book now</button>
            </div>
        </div>

        <div class="sec" style="float: right; background-color: white; height: auto; width:50%; padding-top: 40px;">

            <?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);
            $num = 0;
            $num = $_COOKIE["selected_item"];
            // $num =1;
            $query = "select book from `dest`.`dest` where sr=$num";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["book"];
                }
            }
            $con->close();
            ?>
        </div>
    </div>





    <div class="final" style="margin: 100px; margin-top: 200px">
        <h4>Need to know</h4>
        <h5>Transport</h5>
        <div id="one">Coach Tavel <br>
            A/C Vehicle Type - depends upon group size</div>
        <h5>Documents Required for Travel</h5>
        <div id="one">ADULT: Voters ID / Passport / Aadhar Card / Driving Licence. <br>
            ID card, ID card type and ID card number is mandatory at time of booking, kindly carry the same ID card on
            tour.<br>
            For NRI and Foreign National Guests alongwith Passport, Valid Indian Visa/ OCI Card/ PIO Card is
            mandatory.<br>
            Carry one passport size photo.</div>
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