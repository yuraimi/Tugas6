<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

echo "Selamat datang, " . $_SESSION['username'] . "!";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web autentikasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Home Page</h2>
<a href="logout.php" class="logout">Logout</a>

</body>
</html>
