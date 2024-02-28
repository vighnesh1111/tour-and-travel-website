<?php
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);

    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from `tws`.`tws` where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        header("location:https://localhost/Mini Project sem-4/index.php");
    } else {
        echo '<script> alert( "check username and password")</script>';
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
    <title>log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .main {
            width: 500px;
            margin: auto;
            backdrop-filter: blur(10px);
        }
        .main1{
            background-image: url("login.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            /* backdrop-filter: blur(10px); */
            /* width: 400px; */
            margin: auto;
            padding-top: 200px;
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
        <h1 style="color: white;">log in</h1><br>
        <form action="login.php" method="post">
            <input type="text" placeholder="Enter your username" class="username" name="username" required style="text-align: center;"><br><br>
            <input type="password" placeholder="Enter your password" class="password" name="password" required style="text-align: center;"><br><br>
            <br>
            <div class="rem">Don't have account? <a href="https://localhost/Mini Project sem-4/signup.php">click
                    here</a></div><br>
            <button type="submit" onclick="change()" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
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
    function change(){
        sessionStorage.setItem('data','&nbsp;'+ document.querySelector('.username').value);
        sessionStorage.setItem('data5', "Sign out");
    sessionStorage.setItem('username',''+ document.querySelector('.username').value);
    }

</script>
</html>