<?php
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);
    $conn = mysqli_connect($server1, $username1, $password1);
    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    $duplicate = mysqli_query($con, "select * from `tws`.`tws` where username='$username'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo '<script> alert("Username exists"); </script>';
        // header("Location:https://localhost/Mini Project sem-4/signup.php");
    } else
        if ($conn->query("INSERT INTO `tws`.`tws` (`username`, `password`, `fname`, `lname`, `age`) VALUES ('$username', '$password', '$fname', '$lname', '$age');") == true) {
            header("location:https://localhost/Mini Project sem-4/index.php");
        } else {
            // echo "error: $sql <br> $con->error";
            'console.log("nope")';
        }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .main {
            width: 500px;
            margin: auto;
            backdrop-filter: blur(10px);
        }

        .main1 {
            background-image: url("signin.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            /* backdrop-filter: blur(10px); */
            /* width: 400px; */
            margin: auto;
            padding-top: 150px;
            display: block;
            overflow: auto;
            height: 100%;
            padding-bottom: 100px;
            height: 100vh;
            /* filter: blur(5px); */
        }
    </style>
</head>

<body>
    <div class="main1">
        <div class="main">
            <br>
            <h1>sign up</h1><br>
            <form action="signup.php" name="verify" method="post">
                <input type="text" placeholder="Enter first name" class="fname" name="fname" required id="k"
                    style="text-align: center;"> &nbsp;
                <input type="text" placeholder="Enter last name" class="lname" name="lname" required id="kkkk"
                    style="text-align: center;"><br><br>
                <input type="text" placeholder="Enter username" class="username" name="username" required id="kk"
                    style="text-align: center;"><br><br>
                <input type="number" placeholder="Enter your age" class="age" name="age" required id="kkkkk" min="18"
                    max="60" style="text-align: center;
            width: 180px"><br><br>
                <input type="password" placeholder="Enter password" class="password" minlength="6" name="password"
                    required id="kkk" style="text-align: center;"><br><br>
                <button type="submit" onclick="fun()" class="btn btn-primary">Sign-up</button>
            </form>
        </div>
    </div>
</body>
<script>
    function fun() {
        var username = document.forms["verify"]["username"].value
        var password = document.forms["verify"]["password"].value
        var len = password.length
        console.log(password)
        console.log(len)

        if (username == "" && password == "") {
            alert("Enter username and password")
        } else if (len < 6) {
            alert("password length must be atleast 6")
        } else {
        }

        sessionStorage.setItem('data', '&nbsp;' + document.querySelector('.username').value);
        sessionStorage.setItem('data1', "Sign out");
        sessionStorage.setItem('username', '' + document.querySelector('.username').value);
        sessionStorage.setItem('data5', "Sign out");
        sessionStorage.setItem('username1', '' + document.querySelector('.fname').value)
        sessionStorage.setItem('lname', '' + document.querySelector('.lname').value);
        // alert(document.querySelector('.lname').value)
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>