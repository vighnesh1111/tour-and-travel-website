<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visite | Travel Packages</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .glass-nav {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(10px);
        }

        .hero-img {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/img1.png");
            background-size: cover;
            background-position: center;
        }

        .mySlides {
            display: none;
        }

        /* Smooth scale for cards */
        .dest-card img {
            transition: transform 0.5s ease;
        }

        .dest-card:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="glass-nav fixed w-full z-50 text-white px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-8">
            <a href="#" class="text-2xl font-bold text-blue-400 uppercase tracking-tighter">Visite</a>
            <div class="hidden md:flex gap-6 text-xs font-semibold uppercase tracking-widest">
                <a href="#" class="hover:text-blue-400 transition">Home</a>
                <a href="about.php" class="hover:text-blue-400 transition">About us</a>
                <a href="contact.php" class="hover:text-blue-400 transition">Contact us</a>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div id="content1" onclick="check1()"
                class="cursor-pointer hover:text-blue-400 transition flex items-center gap-2">
                <i class="fa-regular fa-user-circle text-xl"></i>
                <span class="text-sm font-medium">Profile</span>
            </div>
            <button id="content" onclick="check()"
                class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-full text-sm font-bold transition">
                Log in
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-img h-[70vh] flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-5xl md:text-7xl font-bold mb-4">Welcome !!!</h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mb-10">This website will guide you by providing details
            about packages of various tourist places.</p>

        <!-- Search Bar -->
        <div class="relative w-full max-w-xl group">
            <input type="text" id="myInput" onkeyup="filterFunction()"
                class="w-full py-4 px-8 rounded-full text-gray-900 shadow-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/50"
                placeholder="Search for your next destination...">
            <button onclick="search()"
                class="absolute right-2 top-2 bottom-2 bg-blue-600 px-6 rounded-full hover:bg-blue-700 transition">
                <i class="fa fa-search"></i>
            </button>

            <!-- Search Results Dropdown -->
            <div id="myDropdown"
                class="hidden absolute w-full bg-white mt-2 rounded-2xl shadow-2xl overflow-hidden z-40 text-left border border-gray-100 text-gray-800">
                <a href="#" onclick="verify(6)" class="block px-6 py-3 hover:bg-gray-100 border-b">Europe</a>
                <a href="#" onclick="verify(3)" class="block px-6 py-3 hover:bg-gray-100 border-b">Dubai</a>
                <a href="#" onclick="verify(4)" class="block px-6 py-3 hover:bg-gray-100 border-b">France</a>
                <a href="#" onclick="verify(1)" class="block px-6 py-3 hover:bg-gray-100 border-b">Goa</a>
                <a href="#" onclick="verify(9)" class="block px-6 py-3 hover:bg-gray-100 border-b">Gujarat</a>
                <a href="#" onclick="verify(8)" class="block px-6 py-3 hover:bg-gray-100 border-b">Leh Ladakh</a>
                <a href="#" onclick="verify(7)" class="block px-6 py-3 hover:bg-gray-100 border-b">Shimla</a>
                <a href="#" onclick="verify(2)" class="block px-6 py-3 hover:bg-gray-100 border-b">Singapore</a>
                <a href="#" onclick="verify(5)" class="block px-6 py-3 hover:bg-gray-100">Spain</a>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT SECTION -->
    <div class="max-w-7xl mx-auto px-6 py-16">

        <!-- 1. EXCLUSIVE PACKAGES -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Exclusive Packages</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-12"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Goa -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(1)">
                    <img src="img/goa.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Goa Packages</h3>
                        <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300">Click
                            for details</p>
                    </div>
                </div>
                <!-- Singapore -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(2)">
                    <img src="img/singapore.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Singapore Packages</h3>
                        <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300">Click
                            for details</p>
                    </div>
                </div>
                <!-- Dubai -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(3)">
                    <img src="img/dubai.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Dubai Packages</h3>
                        <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300">Click
                            for details</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SLIDESHOW BANNER -->
        <section class="relative rounded-[40px] overflow-hidden shadow-2xl mb-20 h-[400px]">
            <div class="mySlides h-full relative fade">
                <img src="img/sample.jpg" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 flex items-center px-12 text-white">
                    <h2 class="text-4xl font-bold max-w-lg">Travel planning done efficiently by us.</h2>
                </div>
            </div>
            <div class="mySlides h-full relative fade">
                <img src="img/sample2.jpg" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 flex items-center px-12 text-white">
                    <h2 class="text-4xl font-bold max-w-lg">Exciting and beautiful places included in packages.</h2>
                </div>
            </div>
            <div class="mySlides h-full relative fade">
                <img src="img/sample3.jpg" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 flex items-center px-12 text-white">
                    <h2 class="text-4xl font-bold max-w-lg">Details about a variety of global packages.</h2>
                </div>
            </div>
            <!-- Slide Controls -->
            <button onclick="plusSlides(-1)"
                class="absolute left-6 top-1/2 bg-white/20 hover:bg-white/40 p-4 rounded-full text-white transition"><i
                    class="fa fa-chevron-left"></i></button>
            <button onclick="plusSlides(1)"
                class="absolute right-6 top-1/2 bg-white/20 hover:bg-white/40 p-4 rounded-full text-white transition"><i
                    class="fa fa-chevron-right"></i></button>
        </section>

        <!-- 2. MOST VISITED -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Most Visited</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-12"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- France -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(4)">
                    <img src="img/france.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">France Packages</h3>
                    </div>
                </div>
                <!-- Spain -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(5)">
                    <img src="img/spain.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Spain Packages</h3>
                    </div>
                </div>
                <!-- Europe -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(6)">
                    <img src="img/europe.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Europe Packages</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. DISCOVER INDIA -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Discover India</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-12"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Shimla -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(7)">
                    <img src="img/shimla.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Shimla Packages</h3>
                    </div>
                </div>
                <!-- Leh -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(8)">
                    <img src="img/leh.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Leh Ladakh Packages</h3>
                    </div>
                </div>
                <!-- Gujarat -->
                <div class="dest-card relative overflow-hidden rounded-3xl shadow-xl cursor-pointer h-80 group"
                    onclick="verify(9)">
                    <img src="img/gujarat.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                        <h3 class="text-2xl font-bold">Gujarat Packages</h3>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-10 px-6 text-center">
        <div class="flex justify-center gap-6 mb-4 text-xl">
            <i class="fa-brands fa-facebook hover:text-blue-400 cursor-pointer"></i>
            <i class="fa-brands fa-instagram hover:text-blue-400 cursor-pointer"></i>
            <i class="fa-brands fa-twitter hover:text-blue-400 cursor-pointer"></i>
        </div>
        <p class="text-sm text-gray-500">© 2023 Visite. All rights reserved.</p>
    </footer>

    <script>
        // Profile & Login Status Logic
        document.addEventListener('DOMContentLoaded', function () {
            const loginBtn = document.getElementById('content');
            const profileBtn = document.getElementById('content1');
            const status = sessionStorage.getItem('data5');
            const user = sessionStorage.getItem('data');

            if (status === "Sign out") {
                loginBtn.innerHTML = "Sign out";
                profileBtn.innerHTML = `<i class="fa-regular fa-user-circle text-xl"></i> ${user}`;
            }
        });

        function check() {
            const btn = document.getElementById("content");
            if (btn.innerHTML === 'Log in') {
                window.location.href = "login.php";
            } else {
                sessionStorage.clear();   // Clear browser session storage
                window.location.href = "logout.php";
            }
        }

        function check1() {
            if (sessionStorage.getItem('data5') === "Sign out") {
                window.location.href = "logged.php";
            } else {
                window.location.href = "login.php";
            }
        }

        function verify(val) {
            sessionStorage.setItem('data1', val);
            if (sessionStorage.getItem('data5') !== "Sign out") {
                alert("Please log in first to view package details");
                window.location.href = "login.php";
            } else {
                // PASS THE ID IN THE URL
                window.location.href = "dest.php?id=" + val;
            }
        }

        // Search Dropdown Filter
        function filterFunction() {
            const input = document.getElementById("myInput").value.toUpperCase();
            const dropdown = document.getElementById("myDropdown");
            const links = dropdown.getElementsByTagName("a");

            if (input.length > 0) dropdown.classList.remove('hidden');
            else dropdown.classList.add('hidden');

            for (let i = 0; i < links.length; i++) {
                let txtValue = links[i].textContent || links[i].innerText;
                links[i].style.display = txtValue.toUpperCase().indexOf(input) > -1 ? "" : "none";
            }
        }

        // Manual Search Function
        function search() {
            const filter = document.getElementById("myInput").value.toLowerCase();
            const map = {
                "goa": 1, "singapore": 2, "dubai": 3, "france": 4,
                "spain": 5, "europe": 6, "shimla": 7, "ladakh": 8, "leh": 8, "gujarat": 9
            };
            if (map[filter]) verify(map[filter]);
        }

        // Slideshow JS
        let slideIndex = 1;
        showSlides(slideIndex);
        setInterval(() => plusSlides(1), 4000); // Auto-slide

        function plusSlides(n) { showSlides(slideIndex += n); }
        function showSlides(n) {
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) slideIndex = 1;
            if (n < 1) slideIndex = slides.length;
            for (let i = 0; i < slides.length; i++) slides[i].style.display = "none";
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>