<!-- <?php
session_start();
$i1 = isset($_SESSION['i6']) ? $_SESSION['i6'] : "Default Value";
echo $i1;
?> -->

<!-- <?php
$server1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "tourandtravel";
$con = mysqli_connect($server1, $username1, $password1, $dbname);

$num = $_COOKIE["selected_item"];
$query = "select cost from `dest` where sr=$num";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["cost"] * $i1;
    }
}
$con->close();
?> -->


<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            cursor: pointer;
            background-color: #DDD0C8;
        }

        .main {
            text-align: center;
            padding-top: 20vh;
            height: 45vh;
        }

        button {
            border: none;
            width: 350px;
            height: 55px;
            font-size: large;
            background-color: greenyellow;
            /* margin: auto; */
        }

        #rzp-button1 {
            background-color: black;
            color: white;
        }

        #rzp-button1:hover {
            color: #DDD0C8;
        }
    </style>
</head>

<body>
    <div class="main">
        <form method="POST">
            <button id="rzp-button1" type="submit">Pay with Razorpay</button>
        </form>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_j9iL5GwNBjPFdD",
            "amount": <?php
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";
            $dbname = "tourandtravel";
            $con = mysqli_connect($server1, $username1, $password1, $dbname);

            $num = $_COOKIE["selected_item"];
            $query = "select cost from `dest` where sr=$num";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["cost"] * $i1 * 100;
                }
            }
            $con->close();
            ?>,
            "currency": "INR",
            "name": "Visite",
            "description": "Test Transaction",
            "handler": function (response) {

                window.location.href = "booked.php"
            },
            "prefill": {
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response) {
        });
        document.getElementById('rzp-button1').onclick = function (e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>

</html>