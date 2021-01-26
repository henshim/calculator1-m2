<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid black;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>english dictionary</h2>
<form action="" method="post">
    <input type="text" name="search" placeholder="enter word">
    <input type="submit" id="submit" value="Search">
</form>
<?php
$dictionary = array("hello" => "xin chào", "how" => "thế nào", "book" => "quyển vở", "computer" => "máy tính");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchword = $_POST['search'];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo 'tu: ' . $word . '. <br>nghia cua tu: ' . $description;
            echo '<br>';
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo 'not found';
    }
}
?>
</body>
</html>
