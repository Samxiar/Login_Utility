<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    body {
    width: 100%;
    min-height: 100vh;
    background-image:url(bg3.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
        </style>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>