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

    <h1 style="text-align: center; padding-top: 150px; ">Thank you !!!</h1>
    <h3 style="text-align: center; margin: 100px"> We will contact you soon.</h3>
    <div class="but" style="text-align: center; margin: auto;  margin-bottom: 150px;">
        <button class="btn btn-primary" type="button" style="text-align: center; margin: auto;"
            onclick="window.location.href='https://localhost/Mini Project sem-4/index.php';">Back to home</button>
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
    function check(){
 sessionStorage.setItem('data','&nbsp;'+ "Profile");
        sessionStorage.setItem('data5', "Log in");
        window.location.href='https://localhost/Mini Project sem-4/index.php';
    }
</script>

</html>