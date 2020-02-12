<?php

$time = date("G")+1;
$status = "";

if ($time >= 0 && $time < 6) {
    $status = "nacht";
} elseif ($time >= 6 && $time < 12) {
    $status = "morgen";
} elseif ($time >= 12 && $time < 18) {
    $status = "middag";
} elseif ($time >= 18 && $time < 24) {
    $status = "avond";
}

$groet = "Goede $status!" . "<br>";
$tijd = "De tijd is " . date($time.":i");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Goede <?=$status?></title>
</head>

<body id="<?=$status;?>">

<?= $groet,
    $tijd; ?>
    
</body>

</html>