<?php
// date_default_timezone_set("America/New_York");
//  echo date ("h:i:sa", time());
date_default_timezone_set("America/New_York");
$date=date_create("");
echo date_format($date,"Y/m/d H:i:s");

// date_default_timezone_set("America/New_York");
// $waktu = date ("h:i:sa", time());
// $time = "h:i:s";
// if ($waktu < $time) {
//  echo "PAGI";
// } else {
//     echo "SIANG";
// }
// function salam($waktu, $nama = "admin") {
//     return "selamat $waktu, $nama";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <!-- <h1><?php echo salam($waktu , "azriel"); ?></h1> -->
    
</body>
</html>