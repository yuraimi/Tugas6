<?php
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = 'light';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + (86400 * 30), "/"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web dengan Cookie Tema</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style.css?theme=<?php echo $theme; ?>">
</head>
<body class="<?php echo $theme; ?>">
    <div class="container">
        <h1>Selamat Datang!!!</h1>
        <p>Pilih tema yang kamu sukai:</p>

        <form method="POST" action="">
            <label>
                <input type="radio" name="theme" value="light" <?php if($theme == 'light') echo 'checked'; ?>>
                Light Mode
            </label>
            <label>
                <input type="radio" name="theme" value="dark" <?php if($theme == 'dark') echo 'checked'; ?>>
                Dark Mode
            </label>
            <br><br>
            <button type="submit">Simpan pilihan</button>
        </form>
    </div>
</body>
</html>
