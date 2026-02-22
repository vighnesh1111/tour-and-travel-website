<?php
session_start();
$server1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "tourandtravel";

$con = mysqli_connect($server1, $username1, $password1, $dbname);
if (!$con) { die("Connection failed: " . mysqli_connect_error()); }

$error = "";

if (isset($_POST['username'])) {
    // Trim username and password to remove accidental spaces
    $username = trim($_POST['username']); 
    $password = trim($_POST['password']);
    
    // Capitalize names
    $fname = ucwords(strtolower(trim($_POST['fname'])));
    $lname = ucwords(strtolower(trim($_POST['lname'])));

    // Check if username exists
    $stmt = $con->prepare("SELECT username FROM `tws` WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Username already exists!";
    } else {
        $insert_stmt = $con->prepare("INSERT INTO `tws` (`username`, `password`, `fname`, `lname`) VALUES (?, ?, ?, ?)");
        $insert_stmt->bind_param("ssss", $username, $password, $fname, $lname);

        if ($insert_stmt->execute()) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error = "Registration failed. check if your table columns are long enough!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Tour & Travel</title>
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
<body class="bg-gray-900">

    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center px-4" 
         style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/signin.jpg');">
        
        <div class="glass w-full max-w-lg p-8 rounded-3xl shadow-2xl">
            
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-white mb-2">Create Account</h1>
                <p class="text-gray-300">Join us for your next adventure</p>
            </div>

            <!-- Error Messages -->
            <?php if($error != ""): ?>
                <div class="bg-red-500/20 border border-red-500/50 text-red-200 px-4 py-3 rounded-xl mb-6 text-center text-sm">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form action="signup.php" method="POST" id="signupForm" class="space-y-4" autocomplete="off">
                
                <!-- Name Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="fname" required placeholder="First Name"
                        autocomplete="off" spellcheck="false"
                        class="w-full px-5 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                    
                    <input type="text" name="lname" required placeholder="Last Name"
                        autocomplete="off" spellcheck="false"
                        class="w-full px-5 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                </div>

                <!-- Username -->
                <input type="text" name="username" required placeholder="Username"
                    autocomplete="off" spellcheck="false" autocorrect="off" autocapitalize="off"
                    class="w-full px-5 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">

                <!-- Password -->
                <input type="password" name="password" required placeholder="Password (Min. 6 chars)" minlength="6"
                    autocomplete="off"
                    class="w-full px-5 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 rounded-xl shadow-lg transform transition hover:-translate-y-1 active:scale-95 mt-4">
                    Register Now
                </button>
            </form>

            <p class="text-center text-gray-300 mt-8 text-sm">
                Already have an account? 
                <a href="login.php" class="text-blue-400 font-semibold hover:text-blue-300 transition-colors">Log In</a>
            </p>
        </div>
    </div>

    <script>
        document.getElementById('signupForm').onsubmit = function() {
            // Validation check
            const pass = document.querySelector('input[name="password"]').value;
            if(pass.length < 6) {
                alert("Password must be at least 6 characters");
                return false;
            }

            // Store data in sessionStorage as requested
            sessionStorage.setItem('data', '&nbsp;' + document.querySelector('input[name="username"]').value);
            sessionStorage.setItem('username', document.querySelector('input[name="username"]').value);
            sessionStorage.setItem('username1', document.querySelector('input[name="fname"]').value);
            sessionStorage.setItem('lname', document.querySelector('input[name="lname"]').value);
            sessionStorage.setItem('data5', "Sign out");
        };
    </script>

</body>
</html>