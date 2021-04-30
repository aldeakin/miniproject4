<?php
session_start();
if($POST['clicked']=="true"){
    $_SESSION['buttonload'] = true;
    $prior_page = $_POST;
    header("Location:$prior_page");
}else{
    $prior_page = $current_page;
    header("Location: currentpage.php");
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
    <form>
    <button>Back</button>
    </form>
</body>

</html>
