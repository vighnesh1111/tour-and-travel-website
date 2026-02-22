<?php
session_start();

// 1. Redirect to login if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// 2. Database Connection
$server = "localhost";
$db_user = "root";
$db_pass = "";
$dbname = "tourandtravel"; // Ensure all tables are in one DB or specify DB names in query

$con = mysqli_connect($server, $db_user, $db_pass, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// 3. Fetch all user and booking info in ONE query
$username = $_SESSION['username'];
$booking_data = null;

// Adjust the table names (e.g. `book`.`book`) if they are in different databases
$query = "SELECT b.*, d.destination 
          FROM `book` b 
          LEFT JOIN `dest` d ON b.tourname1 = d.sr 
          WHERE b.name = ? 
          LIMIT 1";

$stmt = $con->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $booking_data = $result->fetch_assoc();
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Visite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navigation -->
    <nav class="bg-slate-900 text-white px-6 py-4 flex justify-between items-center shadow-lg">
        <a href="index.php" class="text-2xl font-bold text-blue-400 uppercase tracking-tighter italic">Visite</a>
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-blue-400 transition">Home</a>
            <a href="about.php" class="hover:text-blue-400 transition">About</a>
            <a href="contact.php" class="hover:text-blue-400 transition">Contact</a>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">

            <!-- Profile Header -->
            <div
                class="bg-white rounded-t-3xl p-8 border-b border-gray-100 flex flex-col md:flex-row items-center gap-6 shadow-sm">
                <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-4xl">
                    <i class="fa fa-user"></i>
                </div>
                <div class="text-center md:text-left">
                    <h1 class="text-3xl font-bold text-gray-800">
                        <span id="display-name">Loading...</span>
                    </h1>
                    <p class="text-gray-500">Member since 2024</p>
                </div>
                <div class="md:ml-auto flex flex-col gap-2">
                    <button onclick="handleSignOut()"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-2 rounded-xl font-semibold transition">
                        <i class="fa fa-sign-out-alt mr-2"></i>Sign Out
                    </button>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">

                <!-- Contact Information -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-50">
                    <h2 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <i class="fa fa-id-card text-blue-500"></i> Contact Info
                    </h2>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-bold tracking-widest">Email Address</p>
                            <p class="text-gray-700 font-medium"><?php echo $booking_data['email'] ?? 'Not provided'; ?>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-bold tracking-widest">Phone Number</p>
                            <p class="text-gray-700 font-medium"><?php echo $booking_data['phone'] ?? 'Not provided'; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Booking Details -->
                <div class="md:col-span-2 bg-white p-8 rounded-3xl shadow-sm border border-gray-50">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold flex items-center gap-2">
                            <i class="fa fa-plane-departure text-blue-500"></i> Current Booking
                        </h2>
                        <?php if ($booking_data): ?>
                            <span
                                class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-bold uppercase">Confirmed</span>
                        <?php endif; ?>
                    </div>

                    <?php if ($booking_data): ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="p-4 bg-gray-50 rounded-2xl">
                                <p class="text-xs text-gray-400 uppercase font-bold mb-1">Destination</p>
                                <p class="text-xl font-bold text-blue-600"><?php echo $booking_data['destination']; ?></p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl">
                                <p class="text-xs text-gray-400 uppercase font-bold mb-1">Travel Date</p>
                                <p class="text-gray-700 font-bold">
                                    <?php echo date("F j, Y", strtotime($booking_data['visitdate'])); ?></p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-2xl">
                                <p class="text-xs text-gray-400 uppercase font-bold mb-1">Total Visitors</p>
                                <p class="text-gray-700 font-bold"><?php echo $booking_data['visiterno']; ?> Persons</p>
                            </div>
                            <div class="flex items-end">
                                <button onclick="location.href='cancel.php'"
                                    class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-bold py-3 rounded-2xl transition">
                                    Cancel This Tour
                                </button>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-12">
                            <i class="fa fa-calendar-xmark text-gray-200 text-5xl mb-4"></i>
                            <p class="text-gray-400 font-medium">No active bookings found.</p>
                            <a href="index.php" class="text-blue-500 font-bold hover:underline mt-2 inline-block">Book a
                                trip now</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-gray-400 py-8 text-center text-sm">
        <p>© 2024 Visite Agency. All Rights Reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get user info from sessionStorage as set during login/signup
            const fname = sessionStorage.getItem('username1') || "";
            const lname = sessionStorage.getItem('lname') || "";

            if (fname) {
                document.getElementById('display-name').innerHTML = fname + " " + lname;
            } else {
                // Fallback to username if names aren't in session
                document.getElementById('display-name').innerHTML = "<?php echo $_SESSION['username']; ?>";
            }
        });

        function handleSignOut() {
            sessionStorage.clear();
            // Create a small logout script or simply redirect
            window.location.href = "index.php";
        }
    </script>
</body>

</html>