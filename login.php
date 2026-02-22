<?php
session_start();
$server1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "tourandtravel";

$con = mysqli_connect($server1, $username1, $password1, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = "";

if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Fetch the user data
    $stmt = $con->prepare("SELECT * FROM `tws` WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if ($password === $row['password']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Username not found!";
    }
    $stmt->close();
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tour & Travel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="bg-gray-900">

    <!-- Background Image Container -->
    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/login.jpg');">

        <!-- Login Card -->
        <div class="glass w-full max-w-md p-8 rounded-3xl shadow-2xl mx-4 transform transition-all">

            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-white mb-2">Welcome Back</h1>
                <p class="text-gray-300">Please enter your details to login</p>
            </div>

            <!-- Error Message Display -->
            <?php if ($error != ""): ?>
                <div
                    class="bg-red-500/20 border border-red-500/50 text-red-200 px-4 py-3 rounded-xl mb-6 text-center text-sm">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <!-- 1. Add autocomplete="off" to the form tag -->
            <form action="login.php" method="POST" id="loginForm" class="space-y-6" autocomplete="off">

                <!-- 2. Update the Username Input -->
                <div>
                    <input type="text" name="username" required autocomplete="off" spellcheck="false" autocorrect="off"
                        autocapitalize="off"
                        class="w-full px-6 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white/20 transition-all"
                        placeholder="Username">
                </div>

                <!-- 3. Update the Password Input -->
                <div>
                    <!-- For passwords, using autocomplete="new-password" or "off" 
             helps prevent the browser from showing saved passwords -->
                    <input type="password" name="password" required autocomplete="off" spellcheck="false"
                        autocorrect="off"
                        class="w-full px-6 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white/20 transition-all"
                        placeholder="Password">
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 rounded-2xl shadow-lg transform transition hover:-translate-y-1 active:scale-95">
                    Sign In
                </button>
            </form>

            <!-- Signup Link -->
            <p class="text-center text-gray-300 mt-8 text-sm">
                Don't have an account?
                <a href="signup.php" class="text-blue-400 font-semibold hover:text-blue-300 transition-colors">Create
                    one</a>
            </p>
        </div>
    </div>

    <script>
        // Store data for UI persistence in index.php
        document.getElementById('loginForm').onsubmit = function () {
            const user = document.querySelector('input[name="username"]').value;
            sessionStorage.setItem('data', '&nbsp;' + user);
            sessionStorage.setItem('data5', "Sign out");
            sessionStorage.setItem('username', user);
        };
    </script>

</body>

</html>