<?php
include_once "utils/connection.php";
session_start();
error_reporting(0);

$error = null;
$success = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["username"]) || !isset($_POST["password"])) {
        $error = "Username and password are required.";
    }
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users_c0nGr4t5_y0u_Und3rSt4nd_sQl1 WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $success = true;
        $_SESSION["user"] = $row;
    } else {
        $error = "Username or password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>POROS Organization of Open Source (POROS) Universitas Brawijaya</title>
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@100..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Anek Devanagri', sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-hidden">
    <main class="h-screen w-screen grid place-items-center">
        <div class="bg-gradient-to-tr from-[#ff6464cc] to-[#ffd633cc] w-[80vw] aspect-square -z-10 absolute rounded-full shadow-lg"></div>
        <section class="flex flex-col items-center gap-3">
            <div class="rounded-xl overflow-hidden w-[44rem] h-[32rem] flex shadow-lg">
                <div class="bg-[#001b2d] h-full w-2/5 flex items-center">
                    <img src="assets/kraken.webp" alt="Kraken">
                </div>
                <div class="px-14 py-20 grow bg-white text-[#001b2d]">
                    <h1 class="text-xl font-semibold mb-8">Sign In to Your Account</h1>
                    <form method="POST" class="w-full mb-4">
                        <div class="mb-4">
                            <label for="username" class="block text-gray-600 mb-2">Username:</label>
                            <input name="username" required placeholder="Enter your username" type="text" id="username" class="bg-gray-100 px-3 py-2 outline-none border border-gray-300 w-full focus:bg-white rounded">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-gray-600 mb-2">Password:</label>
                            <input name="password" placeholder="Enter your password" type="password" id="password" class="bg-gray-100 px-3 py-2 outline-none border border-gray-300 w-full focus:bg-white rounded">
                        </div>
                        <button type="submit" class="bg-[#001b2d] text-gray-200 w-full py-2 rounded">Sign In</button>
                    </form>
                    <?php
                    if (!is_null($error)) {
                        echo "<div class=\"border border-dashed border-[#ff6464] text-[#ff6464] bg-[#ff646444] text-center w-full py-2 rounded\">" . $error . "</div>";
                    }
                    if ($success) {
                        echo "<div class=\"border border-dashed border-[#29ac4a] text-[#29ac4a] bg-[#29ac4a44] text-center w-full py-2 rounded\">Login success! Redirecting...</div>";
                    }
                    ?>
                </div>
            </div>
            <p class="text-gray-700 text-xs">Copyright ©<?= date("Y") ?> <a href="https://github.com/noverdy" class="font-semibold underline">Yesver</a>. All Rights Reserved.</p>
        </section>
    </main>
    <?php
    if ($success) {
    ?>
        <script>
            setTimeout(() => {
                window.location.href = "https://porosfilkom.ub.ac.id/";
            }, 2000);
        </script>
    <?php
    }
    ?>
</body>

</html>