<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "D3 Rekayasa Perangkat Lunak Aplikasi";

    echo $string."<br>";
    
    echo "<br>".substr($string, 3);
    echo "<br>".substr($string, -8);
    echo "<br>".substr($string, 3,24);
    
    ?>   
</body>
</html>