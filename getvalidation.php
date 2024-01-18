<?php
// $say = "HELLO " . htmlspecialchars($_GET['name']);
if(isset($_GET['name']) || $_GET['name'] == ""){
    http_response_code(400);
    echo "Name Is Required";
    exit();
}

$say = "Hello" . htmlspecialchars($_GET['name']);
?>
<html>
<body>
    <h1><?= $say;  ?></h1>
</body>
</html>
