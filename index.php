<?php
require_once __DIR__ . '/database.php';
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
    <ul>
        <?php foreach ($database as $info) { ?>
            <?php foreach ($info as $data) { ?>
                <li><?php echo $data ?></li>
            <?php } ?>
            <hr>
        <?php } ?>
    </ul>
</body>
</html>