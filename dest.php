<!DOCTYPE html>
<html lang="en">
<!-- <meta http-equiv="refresh" content="1"> -->

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

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .main {
            height: 500px;
            /* margin-left: 5%; */
            margin-right: 5%;
        }

        .submain {
            background-image: url("img/<?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);
            $num = 0;
            $num = $_COOKIE["selected_item"];
            // $num =1;
            $query = "select img from `dest`.`dest` where sr=$num";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["img"];
                }
            }
            $con->close();
            ?>");

                background-repeat: no-repeat;
                background-size: cover;
                width: 50%;
                height: 600px;
                float: left;
            }

            .submain2 {
                width: 50%;
                float: right;
                height: 600px;
            }
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
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
    <div class="main">
        <div class="submain">

        </div>
        <div class="submain2" style="padding-left:20px; padding-right: 20px;">
            <h1 style="text-align: center; padding-top: 20px;">
                <?php
                $server1 = "localhost";
                $username1 = "root";
                $password1 = "";
                $con = mysqli_connect($server1, $username1, $password1);
                $num = 0;
                $num = $_COOKIE["selected_item"];
                // $num = 1;
                $query = "select destination from `dest`.`dest` where sr=$num";
                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row["destination"];
                    }
                }
                $con->close();
                ?>
            </h1>
            <h4 style="text-align: center; margin-top: 60px">
                <?php
                $server1 = "localhost";
                $username1 = "root";
                $password1 = "";
                $con = mysqli_connect($server1, $username1, $password1);
                $num = 0;
                $num = $_COOKIE["selected_item"];
                // $num = 1;
                $query = "select details from `dest`.`dest` where sr=$num";
                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row["details"];
                    }
                }
                $con->close();
                ?>
            </h4>

            <div class="op1" style="width: 90%;
    /* background-color:black; */
    border-top: 2px solid black;
    border-bottom: 2px solid black;
     height: 150px; margin:auto; margin-top: 100px">
                <br>
                <div class="aa" style="text-align: left; float:left">
                    <h3 style="text-align: left; float:left">
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
                    </h3><br> <br>
                    <h6 style="text-align: left; float:left">
                        <!-- Rating:  &#9733; &#9733; &#9733; &#9733; &#9733; -->
                        <?php
                        $server1 = "localhost";
                        $username1 = "root";
                        $password1 = "";

                        $con = mysqli_connect($server1, $username1, $password1);
                        $num = 0;
                        $num = $_COOKIE["selected_item"];
                        // $num =1;
                        $query = "select star from `dest`.`dest` where sr=$num";
                        $result = mysqli_query($con, $query);
                        $count = mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["star"];
                            }
                        }
                        $con->close();
                        ?>

                    </h6>
                    <!-- &#9734; -->
                </div>
                <h4 style="margin-left: 50px; text-align:right;">
                    <!-- 2 days 3 nights <br> @50000/person -->
                    <?php
                    $server1 = "localhost";
                    $username1 = "root";
                    $password1 = "";

                    $con = mysqli_connect($server1, $username1, $password1);
                    $num = 0;
                    $num = $_COOKIE["selected_item"];
                    // $num =1;
                    $query = "select day from `dest`.`dest` where sr=$num";
                    $result = mysqli_query($con, $query);
                    $count = mysqli_num_rows($result);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row["day"];
                        }
                    }
                    $con->close();
                    ?>
                </h4>
                <div class="books" style="margin-right: 20px; text-align:right;">
                    <button class="btn btn-primary" onclick="book()">View details</button>
                </div>
            </div>


        </div>
    </div>






    <div class="last" style="text-align: center; font-size: 20px; margin-left: 100px; margin-right: 100px; margin-top: 200px; margin-bottom: 100px; background-color: azure; padding: 50px">
        Booking a travel package when it comes to travelling to new parts of the country or the world is a practice that
        has slowly gained a lot of popularity. Today, whenever it is about planning a holiday trip, many people have a
        preferred travel portal in India that is best for their specific needs. Owing to the faith bestowed in our
        travel services by our patrons, visite has established its niche and is counted among the travel
        agencies in Mumbai.

 Travelling has become much more than just visiting a new
        destination. That is why each of our vacation packages offers you the respite that you anticipate from a
        holiday. As a well-informed traveller, it is only right to expect more from your travel company in India - we
        strive to ensure the same for our customers. It is no longer about only conveyance and accommodation. For those
        who enjoy travelling, the best travel packages are those which can offer them holistic holiday experiences. That
        is exactly what you get when you opt for the best travel company in Mumbai.

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
    function book() {
        const data = sessionStorage.getItem('data1');
        // alert(data)
        if (data == 1) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 2) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 3) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 4) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 5) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 6) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 7) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 8) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else if (data == 9) {
            window.location.href = "https://localhost/Mini Project sem-4/book.php";
        } else { }
    }
</script>

</html>