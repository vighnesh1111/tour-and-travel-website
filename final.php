<?php
session_start();

// 1. Database Connection
$server1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "tourandtravel";
$con = mysqli_connect($server1, $username1, $password1, $dbname);

if (!$con) { die("Connection failed: " . mysqli_connect_error()); }

// 2. Get the Destination ID from the URL (Passed from book.php?id=X)
$dest_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// 3. Fetch the Tour Name for the header
$stmt = $con->prepare("SELECT tourname FROM `dest` WHERE sr = ?");
$stmt->bind_param("i", $dest_id);
$stmt->execute();
$res = $stmt->get_result();
$tour = $res->fetch_assoc();
$tourname = $tour ? $tour['tourname'] : "Select Tour";

// 4. Handle Form Submission
if (isset($_POST['name'])) {
    // Store all data in session for the payment page
    $_SESSION['i1'] = $dest_id;
    $_SESSION['i2'] = $_POST['name'];
    $_SESSION['i3'] = $_POST['email'];
    $_SESSION['i4'] = $_POST['phone'];
    $_SESSION['i5'] = $_POST['address'];
    $_SESSION['i6'] = $_POST['visiterno'];
    $_SESSION['i7'] = $_POST['visitdate'];

    header("Location: payment.php");
    exit();
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Booking | Visite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-slate-900 text-white min-h-screen">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md px-6 py-4 flex justify-between items-center border-b border-white/10">
        <a href="index.php" class="text-2xl font-bold text-blue-400 italic">VISITE</a>
        <div class="flex gap-6 text-xs font-bold uppercase tracking-widest">
            <a href="index.php" class="hover:text-blue-400 transition">Home</a>
            <a href="book.php?id=<?php echo $dest_id; ?>" class="hover:text-blue-400 transition">Previous</a>
        </div>
    </nav>

    <!-- Main Wrapper -->
    <div class="relative min-h-screen flex items-center justify-center pt-20 pb-10 bg-cover bg-center" 
         style="background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('img/book.jpg');">
        
        <div class="glass w-full max-w-2xl rounded-[2rem] p-8 md:p-12 shadow-2xl mx-4">
            
            <div class="text-center mb-10">
                <span class="text-blue-400 text-xs font-bold uppercase tracking-[0.3em]">Final Step</span>
                <h1 class="text-3xl md:text-4xl font-bold mt-2"><?php echo $tourname; ?></h1>
                <p class="text-gray-400 mt-2">Enter your traveler details below</p>
            </div>

            <form action="final.php?id=<?php echo $dest_id; ?>" method="POST" class="space-y-5">
                
                <!-- Username (Read-Only) -->
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase ml-4 mb-2 block">Username</label>
                    <input type="text" name="name" id="username_field" readonly
                        class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-3 text-gray-400 focus:outline-none" 
                        value="Loading...">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Email -->
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase ml-4 mb-2 block">Email Address</label>
                        <input type="email" name="email" required placeholder="example@mail.com"
                            class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
                    </div>
                    <!-- Phone -->
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase ml-4 mb-2 block">Phone Number</label>
                        <input type="number" name="phone" required placeholder="00000 00000"
                            class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
                    </div>
                </div>

                <!-- Address -->
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase ml-4 mb-2 block">Full Address</label>
                    <textarea name="address" rows="2" required placeholder="Street, City, State..."
                        class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Visitors -->
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase ml-4 mb-2 block">Number of Visitors</label>
                        <input type="number" name="visiterno" required min="1" max="10" placeholder="1-10"
                            class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
                    </div>
                    <!-- Date -->
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase ml-4 mb-2 block">Travel Date</label>
                        <input type="date" id="travel_date" name="visitdate" required
                            class="w-full bg-white/10 border border-white/20 rounded-2xl px-6 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50">
                    </div>
                </div>

                <!-- Action Button -->
                <div class="pt-6">
                    <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-xl transition transform active:scale-95 flex items-center justify-center gap-3">
                        Proceed to Payment <i class="fa fa-arrow-right text-sm"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-950 text-gray-600 py-6 text-center text-sm border-t border-white/5">
        © 2024 Visite. All rights reserved.
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Fill username from session storage
            const savedUser = sessionStorage.getItem('username');
            if(savedUser) {
                document.getElementById('username_field').value = savedUser;
            }

            // Set minimum date to today (prevents booking in the past)
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('travel_date').setAttribute('min', today);
        });
    </script>
</body>
</html>