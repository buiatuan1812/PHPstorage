<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các hàm xử lý chuỗi trong php</h1>
    <pre>
        - strlen() đếm số kí tự trong 1 chuỗi
        - str_word_count() đếm số từ trong 1 chuỗi
        - strpos() tìm kiếm sự có mặt của 1 chuỗi con trong 1 chuỗi mẹ sẽ trả về false
        nếu không tìm đc
        trả về vị trí bắt đầu của chuỗi con trong chuỗi mẹ
        - str_replace() thay thế chuỗi 1 bằng chuỗi 2 trong 1 chuỗi mẹ
    </pre>

    <?php
        $str = "chao ha noi";
        echo "<br> strlen(): " . strlen($str);
        echo "<br> str_word_count(): " . str_word_count($str);
    ?>



</body>
</html>