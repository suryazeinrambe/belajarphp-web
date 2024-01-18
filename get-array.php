<?php
$numbers = $_GET['number'];
$total = 0;

foreach ($numbers as $number){
    $total += $number;
}
?>
<html>
<body>
    <h1> Total = <?= $total ?></h1>
</body>
</html>
