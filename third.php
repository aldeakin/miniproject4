<?php
    session_start();

    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "nav.php";
        include_once "Back.php";
    ?>
    <h1>third page</h1>
    <p>Kangaroos live in Australia.</p>
</body>
</html>