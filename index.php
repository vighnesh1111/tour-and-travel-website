<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Welcome to Visite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .main {
            text-align: center;
            margin: auto;
            padding-top: 40px;
            padding-bottom: 60px;
        }

        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-align: center;
            width: 350px;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #3e8e41;
        }

        .q {
            max-height: 300px;
            overflow-y: auto;
        }

        #myInput {
            box-sizing: border-box;
            /* background-image: url('searchicon.png'); */
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
            width: 450px;
            /* max-height: 300px;
            overflow-y: auto; */
        }

        #myInput:focus {
            outline: 3px solid #ddd;
        }

        .dropdown {
            position: relative;
            display: inline-block;

        }

        .dropdown-content {
            display: none;
            background-color: #f6f6f6;
            min-width: 230px;
            border: 1px solid #ddd;
            z-index: 1;
            margin: auto;
            text-align: center;
            /* max-height: 300px;
        overflow-y: auto; */
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .show {
            display: block;
        }

        .img {
            background-image: url("img1.png");
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 650px;
            background-position: center;
        }

        .sample {
            width: 100%;
            height: 600px;
            background-position: bottom;
        }

        .first {
            float: left;
            margin-left: 10%;
            height: 470px;
            width: 25%;
        }

        .first1 {
            background-image: url("goa.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            filter: drop-shadow(8px 8px 10px black);
            width: 100%;
            height: 320px;
            color: white;
        }

        .first2 {
            background: rgba(0, 0, 0, 0);
            color: white;
        }

        .second {
            float: left;
            margin-left: 2.5%;
            height: 470px;
            width: 25%;
        }

        .second1 {
            background-image: url("singapore.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 320px;
            filter: drop-shadow(8px 8px 10px black);
        }

        .second2 {
            background: rgba(0, 0, 0, 0);
            color: white;
        }

        .third {
            float: right;
            margin-right: 10%;
            height: 470px;
            width: 25%;
        }

        .third1 {
            background-image: url("dubai.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 320px;
            filter: drop-shadow(8px 8px 10px black);
        }

        .third2 {
            background: rgba(0, 0, 0, 0);
            color: white;
        }

        .ex {
            padding-top: 20px;
        }

        .Excl {
            background-color: azure;
        }

        * {
            box-sizing: border-box
        }

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        .c {
            text-align: center;
            width: 50%;
            display: none;
            height: 50px;
            margin: auto;
            margin-top: 150px;
            border-radius: 10px;
        }

        .first:hover .c {
            background: rgba(0, 0, 0, .1);
            display: block;

        }

        .second:hover .c {
            background: rgba(0, 0, 0, .1);
            display: block;
        }

        .third:hover .c {
            background: rgba(0, 0, 0, .1);
            display: block;
        }

        .Excl1 {
            background-color: azure;
        }

        .fourth {
            float: left;
            margin-left: 10%;
            height: 470px;
            width: 25%;
        }

        .fourth1 {
            background-image: url("france.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            filter: drop-shadow(8px 8px 10px black);
            width: 100%;
            height: 320px;
            color: white;
        }

        .fourth2 {
            background: rgba(0, 0, 0, 0);
            color: white;
        }

        .five {
            float: left;
            margin-left: 2.5%;
            height: 470px;
            width: 25%;
        }

        .five2 {
            background: rgba(0, 0, 0, .1);
            color: white;
        }

        .five1 {
            background-image: url("spain.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            filter: drop-shadow(8px 8px 10px black);
            width: 100%;
            height: 320px;
            color: white;
        }

        .six {
            float: right;
            margin-right: 10%;
            height: 470px;
            width: 25%;
        }

        .six1 {
            background-image: url("europe.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 320px;
            filter: drop-shadow(8px 8px 10px black);
        }

        .six2 {
            background: rgba(0, 0, 0, .1);
            color: white;
        }

        .sample1 {
            width: 100%;
            height: 600px;
            background-position: bottom;
        }

        .ex1 {
            padding-top: 20px;
        }

        .fourth:hover .c {
            background: rgba(0, 0, 0, .1);
            display: block;
        }

        .five:hover .c {
            display: block;
            background: rgba(0, 0, 0, .1);
        }

        .six:hover .c {
            background: rgba(0, 0, 0, .1);
            display: block;
        }

        .Excl2 {
            background-color: azure;
        }

        .sample2 {
            width: 100%;
            height: 600px;
            background-position: bottom;
        }

        .ex2 {
            padding-top: 20px;
        }

        .seven {
            float: left;
            margin-left: 10%;
            height: 470px;
            width: 25%;
        }

        .seven1 {
            background-image: url("shimla.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            filter: drop-shadow(8px 8px 10px black);
            width: 100%;
            height: 320px;
            color: white;
        }

        .seven2 {
            background: rgba(0, 0, 0, .1);
            color: white;
        }

        .eight {
            float: left;
            margin-left: 2.5%;
            height: 470px;
            width: 25%;
        }

        .eight1 {
            background-image: url("leh.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 320px;
            filter: drop-shadow(8px 8px 10px black);
        }

        .eight2 {
            background: rgba(0, 0, 0, .1);
            color: white;
        }

        .nine {
            float: right;
            margin-right: 10%;
            height: 470px;
            width: 25%;
        }

        .nine1 {
            background-image: url("gujarat.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 320px;
            filter: drop-shadow(8px 8px 10px black);
        }

        .nine2 {
            background: rgba(0, 0, 0, 0);
            color: white;
        }

        .seven:hover .c {
            display: block;
            background: rgba(0, 0, 0, .1);
        }

        .eight:hover .c {
            display: block;
            background: rgba(0, 0, 0, .1);
        }

        .nine:hover .c {
            display: block;
            background: rgba(0, 0, 0, .1);
        }

        #dest:hover {}
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
                <li class="nav-item active">
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

        <i class="fa fa-user-circle-o" style="font-size:20px; color: white; margin-right: 100px" id="content1"
            onclick="check1()"> &nbsp; Profile</i>
        <button type="button" id="content" onclick='check()' class="btn btn-primary">Log in</button>
    </nav>

    <div class="img" class="img-fluid">
        <h1 style="text-align: center; color: white; padding-top: 250px;"><b> Welcome !!!</b> <br>
            <h4 style="text-align: center; color: white; ">
                <br> This website will guide you by <br> providing details about packages <br> of various tourist
                places.
            </h4>
        </h1>
    </div>

    <div class="main">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Search package</button>
            <div id="myDropdown" class="dropdown-content">
                <div class="serach" style="float: right; width: 60px;
            height: 50px; background-image: url(searchicon.png); background-repeat: no-repeat; background-size: cover;"
                    onclick="search()"></div>
                <input type="text" placeholder="Search" id="myInput" style="text-align: center;"
                    onkeyup="filterFunction()">
                <div class="q">
                    <a href="#" onclick="verify(6)">Europe</a>
                    <a href="#" onclick="verify(3)">Dubai</a>
                    <a href="#" onclick="verify(4)">France</a>
                    <a href="#" onclick="verify(1)">Goa</a>
                    <a href="#" onclick="verify(9)">Gujarat</a>
                    <a href="#" onclick="verify(8)">Leh Ladak</a>
                    <a href="#" onclick="verify(7)">Shimla</a>
                    <a href="#" onclick="verify(2)">Singapore</a>
                    <a href="#" onclick="verify(5)">Spain</a>
                </div>
            </div>
        </div>
    </div>

    <div class="Excl">
        <div class="sample">
            <h1 style="padding-top: 70px; text-align: center; ">Exclusive packages</h1>
            <div class="ex">
                <div class="first" onclick="verify(1)">
                    <div class="first1">
                        <div class="first2">
                            <h2>Goa <br> Packages</h2>
                        </div>
                        <div class="c">
                            Click for details
                        </div>
                    </div>
                </div>
                <div class="second" onclick="verify(2)">
                    <div class="second1">
                        <div class="second2">
                            <h2>Singapore <br> packages</h2>
                        </div>
                        <div class="c" style="color: white;">
                            Click for details
                        </div>
                    </div>
                </div>
                <div class="third" onclick="verify(3)">
                    <div class="third1">
                        <div class="third2">
                            <h2>Dubai <br> Packages</h2>
                        </div>
                        <div class="c" style="color: white;">
                            Click for details
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slideshow-container">
        <div class="mySlides">
            <div class="numbertext"> <br>
                <h1 style="margin-left: 100px; margin-top: 50px;">&nbsp; &nbsp; &nbsp; Travelling planning <br>&nbsp;
                    &nbsp; &nbsp; done by
                    us in efficient manner</h1>
            </div>
            <img src="sample.jpg" style="width:100%; height: 400px;">
            <div class="text"></div>
        </div>
        <div class="mySlides">
            <div class="numbertext"><br>
                <h1 style="margin-left: 100px; margin-top: 50px;">&nbsp; &nbsp; &nbsp; Exciting and <br>&nbsp; &nbsp;
                    &nbsp; beautiful places included in packages
                </h1>
            </div>
            <img src="sample2.jpg" style="width:100%;  height: 400px;">
            <div class="text"></div>
        </div>
        <div class="mySlides">
            <div class="numbertext"> <br>
                <h1 style="margin-left: 100px; margin-top: 50px;">&nbsp; &nbsp; &nbsp; Details <br>&nbsp; &nbsp; &nbsp;
                    about variety of packages</h1>
            </div>
            <img src="sample3.jpg" style="width:100%; height: 400px;">
            <div class="text"></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="Excl1">
        <div class="sample1">
            <h1 style="padding-top: 70px; text-align: center; ">Most visited</h1>
            <div class="ex1">
                <div class="fourth" onclick="verify(4)">
                    <div class="fourth1">
                        <div class="fourth2">
                            <h2>France <br> Packages</h2>
                        </div>
                        <div class="c">
                            Click for details
                        </div>
                    </div>
                </div>
                <div class="five" onclick="verify(5)">
                    <div class="five1">
                        <div class="five2">
                            <h2>Spain <br> packages</h2>
                        </div>
                        <div class="c" style="color: white;">
                            Click for details
                        </div>
                    </div>
                </div>
                <div class="six" onclick="verify(6)">
                    <div class="six1">
                        <div class="six2">
                            <h2>Europe <br> Packages</h2>
                        </div>
                        <div class="c" style="color: white;">
                            Click for details
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Excl2">
        <div class="sample2">
            <h1 style="padding-top: 70px; text-align: center; ">Discover India</h1>
            <div class="ex2">
                <div class="seven" onclick="verify(7)">
                    <div class="seven1">
                        <div class="seven2">
                            <h2>shimla <br> Packages</h2>
                        </div>
                        <div class="c">
                            Click for details
                        </div>
                    </div>
                </div>
                <div class="eight" onclick="verify(8)">
                    <div class="eight1">
                        <div class="eight2">
                            <h2>Leh ladakh <br> packages</h2>
                        </div>
                        <div class="c" style="color: white;">
                            Click for details
                        </div>
                    </div>
                </div>
                <div class="nine" onclick="verify(9)">
                    <div class="nine1">
                        <div class="nine2">
                            <h2>Gujarat<br> Packages</h2>
                        </div>
                        <div class="c" style="color: white;">
                            Click for details
                        </div>
                    </div>
                </div>
            </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('content');
        console.log(contentDiv);
        const data = sessionStorage.getItem('data5');
        console.log(data)
        if (data) {
            contentDiv.innerHTML = data;
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const contentDiv = document.getElementById('content1');
        const data = sessionStorage.getItem('data');
        if (data) {
            contentDiv.innerHTML = data;
        }
    });
    function check() {
        const t = document.getElementById("content");
        if (t.innerHTML == 'Log in') {
            window.location.href = "https://localhost/Mini Project sem-4/login.php";
        } else if (t.innerHTML == 'Sign out') {

            const contentDiv = document.getElementById('content');
            contentDiv.innerHTML = 'Log in';
            const contentDiv1 = document.getElementById('content1');
            contentDiv1.innerHTML = '&nbsp; Profile';
        } else {
            window.location.href = "https://localhost/Mini Project sem-4/logged.php";
        }
    }
    function check1() {
        const t = document.getElementById("content1");
        if (t.innerHTML == '&nbsp; Profile') {
            window.location.href = "https://localhost/Mini Project sem-4/login.php";
        } else {
            window.location.href = "https://localhost/Mini Project sem-4/logged.php";
        }
    }
    function verify(val) {
        sessionStorage.setItem('data1', val);
        const t = document.getElementById("content");
        console.log(t.innerHTML)
        if (t.innerHTML == 'Log in') {
            alert("Please log in first to continue");
            window.location.href = "https://localhost/Mini Project sem-4/login.php";
        } else {
            if (val == 1) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 2) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 3) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 4) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 5) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 6) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 7) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 8) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else if (val == 9) {
                window.location.href = "https://localhost/Mini Project sem-4/dest.php";
            } else { }
        }
    }

    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }

    function search() {
        var input, filter;
        input = document.getElementById("myInput");
        filter = input.value.toLowerCase();
        console.log(filter)
        if (filter == "europe") {
            // window.location.href = "https://localhost/Mini Project sem-4/china.php";
            verify(6)
        } else if (filter == "gujarat") {
            // window.location.href = "https://localhost/Mini Project sem-4/gujarat.php";
            verify(9)
        } else if (filter == "spain") {
            // window.location.href = "https://localhost/Mini Project sem-4/spain.php";
            verify(5)
        } else if (filter == "france") {
            // window.location.href = "https://localhost/Mini Project sem-4/france.php";
            verify(4)
        } else if (filter == "goa") {
            // window.location.href = "https://localhost/Mini Project sem-4/goa.php";
            verify(1)
        } else if (filter == "dubai") {
            // window.location.href = "https://localhost/Mini Project sem-4/dubai.php";
            verify(3)
        } else if (filter == "singapore") {
            // window.location.href = "https://localhost/Mini Project sem-4/singapore.php";
            verify(2)
        } else if (filter == "shimla") {
            // window.location.href = "https://localhost/Mini Project sem-4/shimla.php";
            verify(7)
        } else if (filter == "ladakh") {
            // window.location.href = "https://localhost/Mini Project sem-4/leh.php";
            verify(8)
        } else if (filter == "leh ladakh") {
            // window.location.href = "https://localhost/Mini Project sem-4/leh.php";
            verify(8)
        } else if (filter == "leh") {
            // window.location.href = "https://localhost/Mini Project sem-4/leh.php";
            verify(8)
        } else { }

    } 
</script>

</html>