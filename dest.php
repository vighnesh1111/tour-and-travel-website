<?php
session_start();

// 1. Get Destination ID from URL (e.g., dest.php?id=1)
// If no ID is provided, it defaults to ID 1
$dest_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// 2. Database Connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "tourandtravel";

$con = mysqli_connect($server, $user, $pass, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// 3. Single Prepared Statement to fetch all data
$stmt = $con->prepare("SELECT * FROM `dest` WHERE sr = ?");
$stmt->bind_param("i", $dest_id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Destination not found.");
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['destination']; ?> | Visite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-white text-slate-900">

    <!-- Navigation -->
    <nav class="bg-slate-900 text-white px-6 py-4 flex justify-between items-center sticky top-0 z-50">
        <a href="index.php" class="text-2xl font-bold text-blue-400 italic">VISITE</a>
        <div class="hidden md:flex gap-8 text-sm font-semibold uppercase tracking-widest">
            <a href="index.php" class="hover:text-blue-400 transition">Home</a>
            <a href="about.php" class="hover:text-blue-400 transition">About</a>
            <a href="contact.php" class="hover:text-blue-400 transition">Contact</a>
        </div>
        <button onclick="location.href='logged.php'" class="bg-blue-600 px-5 py-2 rounded-full text-xs font-bold uppercase">Profile</button>
    </nav>

    <!-- Main Content Section -->
    <section class="flex flex-col md:flex-row min-h-[90vh]">
        
        <!-- Left Side: Dynamic Image -->
        <div class="w-full md:w-1/2 h-96 md:h-auto relative overflow-hidden">
            <img src="img/<?php echo $data['img']; ?>" 
                 class="w-full h-full object-cover" 
                 alt="<?php echo $data['destination']; ?>">
            <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent md:hidden"></div>
        </div>

        <!-- Right Side: Destination Details -->
        <div class="w-full md:w-1/2 p-8 md:p-16 flex flex-col justify-center bg-slate-50">
            <nav class="text-sm text-slate-400 mb-4">
                <a href="index.php">Destinations</a> / <span class="text-blue-500"><?php echo $data['destination']; ?></span>
            </nav>

            <h1 class="text-5xl font-bold mb-6 text-slate-900"><?php echo $data['destination']; ?></h1>
            
            <p class="text-lg text-slate-600 leading-relaxed mb-10">
                <?php echo $data['details']; ?>
            </p>

            <!-- Pricing & Rating Card -->
            <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-800"><?php echo $data['tourname']; ?></h2>
                        <div class="flex text-yellow-400 mt-1">
                            <!-- Show stars based on database value -->
                            <?php 
                            $stars = (int)$data['star'];
                            for($i=1; $i<=5; $i++) {
                                echo $i <= $stars ? '<i class="fa fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-3xl font-bold text-blue-600"><?php echo $data['day']; ?></p>
                        <p class="text-sm text-slate-400 font-medium">All-inclusive package</p>
                    </div>
                </div>

                <div class="mt-8 border-t border-slate-100 pt-6">
                    <button onclick="bookNow()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-lg transition-transform active:scale-95">
                        Book Your Trip Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="bg-white py-20 px-8">
        <div class="max-w-4xl mx-auto text-center">
            <i class="fa fa-quote-left text-blue-100 text-6xl mb-6"></i>
            <p class="text-xl italic text-slate-500 leading-relaxed">
                Traveling has become much more than just visiting a new destination. That is why each of our vacation packages offers you the respite that you anticipate from a holiday. As a well-informed traveller, it is only right to expect more from your travel company in India - we strive to ensure the same for our customers.
            </p>
            <div class="w-20 h-1 bg-blue-600 mx-auto mt-8"></div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-10 px-6 text-center text-sm opacity-90">
        <p>© 2024 Visite Agency. All Rights Reserved.</p>
    </footer>

   <script>
    function bookNow() {
        // This passes the current destination ID to book.php
        window.location.href = "book.php?id=<?php echo $dest_id; ?>";
    }
</script>
</body>
</html>