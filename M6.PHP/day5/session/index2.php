<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Cách tọa ra 1 session trong PHP</h1>


    <?php
        //tạo ra session trong php
        $_SESSION["user_name"] = "admin";
        $_SESSION["user_email"] = "admin@gmail.com";
        $_SESSION["user_location"] = "Hà Nội";

        // xem tất cả các session
        echo '<pre>';
        print_r($_SESSION);
        echo '<pre>';


    ?>

</body>
</html>