<?php
session_start();

// 1. Get Destination ID from URL (consistent with the updated dest.php)
$dest_id = isset($_GET['id']) ? (int)$_GET['id'] : (isset($_SESSION['data1']) ? $_SESSION['data1'] : 1);

// 2. Database Connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "tourandtravel";

$con = mysqli_connect($server, $user, $pass, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// 3. Single Prepared Statement to fetch everything
$stmt = $con->prepare("SELECT * FROM `dest` WHERE sr = ?");
$stmt->bind_param("i", $dest_id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Tour details not found.");
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - <?php echo $data['tourname']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-banner {
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6)), url("img/<?php echo $data['last']; ?>");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 text-slate-800">

    <!-- Navigation -->
    <nav class="bg-slate-900 text-white px-6 py-4 flex justify-between items-center sticky top-0 z-50 shadow-lg">
        <a href="index.php" class="text-2xl font-bold text-blue-400 italic">VISITE</a>
        <div class="hidden md:flex gap-8 text-xs font-bold uppercase tracking-widest">
            <a href="index.php" class="hover:text-blue-400 transition">Home</a>
            <a href="about.php" class="hover:text-blue-400 transition">About</a>
            <a href="contact.php" class="hover:text-blue-400 transition">Contact</a>
        </div>
        <button onclick="location.href='logged.php'" class="bg-blue-600 px-5 py-2 rounded-full text-xs font-bold uppercase transition hover:bg-blue-700">Profile</button>
    </nav>

    <!-- Hero Banner -->
    <div class="hero-banner h-[400px] flex items-end p-8 md:p-16">
        <h1 class="text-4xl md:text-6xl font-bold text-white drop-shadow-lg"><?php echo $data['tourname']; ?></h1>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Left Column: Includes & Why Us -->
            <div>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold mb-8 border-l-4 border-blue-600 pl-4">Tour Includes</h2>
                    <div class="flex flex-wrap gap-8">
                        <div class="text-center group">
                            <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-2 transition-transform group-hover:-translate-y-2">
                                <i class="fa fa-hotel"></i>
                            </div>
                            <p class="text-xs font-bold uppercase text-slate-500">Hotel</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-2 transition-transform group-hover:-translate-y-2">
                                <i class="fa fa-utensils"></i>
                            </div>
                            <p class="text-xs font-bold uppercase text-slate-500">Meals</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-2 transition-transform group-hover:-translate-y-2">
                                <i class="fa fa-bus"></i>
                            </div>
                            <p class="text-xs font-bold uppercase text-slate-500">Transport</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-2 transition-transform group-hover:-translate-y-2">
                                <i class="fa fa-plane"></i>
                            </div>
                            <p class="text-xs font-bold uppercase text-slate-500">Flight</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-2 transition-transform group-hover:-translate-y-2">
                                <i class="fa fa-camera-retro"></i>
                            </div>
                            <p class="text-xs font-bold uppercase text-slate-500">Sightseeing</p>
                        </div>
                    </div>
                </section>

                <section class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                    <h2 class="text-2xl font-bold mb-4">Why travel with Visite?</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fa fa-check-circle text-green-500 mt-1"></i>
                            <p class="text-slate-600 font-medium">Expert tour manager all throughout the tour.</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa fa-check-circle text-green-500 mt-1"></i>
                            <p class="text-slate-600 font-medium">Yummy meals, all included in the tour price.</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa fa-check-circle text-green-500 mt-1"></i>
                            <p class="text-slate-600 font-medium">Music, fun and games everyday.</p>
                        </li>
                    </ul>
                    <button onclick="location.href='final.php?id=<?php echo $dest_id; ?>'" class="w-full mt-8 bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-lg transition transform active:scale-95">
                        Confirm Booking
                    </button>
                </section>
            </div>

            <!-- Right Column: Itinerary / Details -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 prose prose-slate max-w-none">
                <h2 class="text-2xl font-bold mb-6 text-slate-900">Tour Plan / Information</h2>
                <div class="text-slate-600 leading-relaxed italic">
                    <?php echo $data['book']; ?>
                </div>
            </div>
        </div>

        <!-- Policy Section -->
        <section class="mt-20 border-t border-gray-200 pt-16">
            <h2 class="text-3xl font-bold mb-10 text-center uppercase tracking-widest">Need to Know</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-slate-100 p-8 rounded-3xl">
                    <h3 class="text-xl font-bold mb-4 text-blue-600"><i class="fa fa-bus mr-2"></i> Transport</h3>
                    <p class="text-slate-600">Coach Travel. A/C Vehicle Type depends upon group size to ensure maximum comfort during the journey.</p>
                </div>
                <div class="bg-slate-100 p-8 rounded-3xl">
                    <h3 class="text-xl font-bold mb-4 text-blue-600"><i class="fa fa-file-invoice mr-2"></i> Documents Required</h3>
                    <ul class="list-disc list-inside text-slate-600 space-y-2">
                        <li>ADULT: Voter ID / Passport / Aadhar Card / Driving License.</li>
                        <li>Original ID card is mandatory at time of travel.</li>
                        <li>For NRI: Passport and Valid Indian Visa/OCI Card is mandatory.</li>
                        <li>Carry two recent passport size photos.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-12 px-6 text-center">
        <p class="text-gray-500 mb-4 tracking-widest text-sm">EXPERIENCE THE WORLD WITH US</p>
        <p class="opacity-70">© 2024 Visite Agency. All Rights Reserved.</p>
    </footer>

</body>
</html>