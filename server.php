<html>

<h1>$_SERVER</h1>
<table border="1">
    <?php foreach ($_SERVER as $item=>$value) { ?>
        <tr>
            <td><?= $item ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php    } ?>

</table>

</html>

<?php
?>

