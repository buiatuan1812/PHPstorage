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


    <?php
        //tạo ra session trong php
        $_SESSION["user_name"] = "admin";
        $_SESSION["user_email"] = "admin@gmail.com";

        $location = "Hà nội";

        $_SESSION["user_location"] = $location;

        // xem tất cả các session
        echo '<pre>';
        print_r($_SESSION);
        echo '<pre>';


        //in ra từng session

        echo "in ra tên người dùng: ". $_SESSION['user_name']."<br>";
        echo "in ra địa chỉ email người dung: ". $_SESSION['user_email']."<br>";
        echo "in ra vị trí người dùng: ". $_SESSION['user_location']."<br>";


        $_SESSION['user_location'] = "Hồ Chí Minh";
        // xem tất cả các session
        echo '<pre>';
        print_r($_SESSION);
        echo '<pre><br>';

    echo "in ra vị trí người dùng: ". $_SESSION['user_location']."<br>";

    unset($_SESSION['user_location']);

    // xem tất cả các session
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre><br>';

?>
    <h1>Hủy toàn bộ session trong php</h1>
<?php
    //remove
    session_unset();

    //destroy
    session_destroy();


// xem tất cả các session
echo '<pre>';
print_r($_SESSION);
echo '<pre><br>';

    ?>

</body>
</html>