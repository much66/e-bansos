<?php session_start();

if(!isset($_SESSION["login"])){
    header("Location: ../login.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hai saya admin kecamatan</h1>
    <a href="../logout.php">keluar</a>
</body>
</html>