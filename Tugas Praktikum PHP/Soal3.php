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
  $str = 'My Password';
  $user = 'username';
  echo sprintf("The md5 hashed password of %s is: %s\n", $str, md5($str.$user));
  echo '<br>';
  echo sprintf("The sha1 hashed password of %s is: %s\n",$str, sha1($str.$user));
  echo '<br>';
  echo sprintf("The gost hashed password of %s is: %s\n",$str, hash('gost',
  $str.$user));
  echo '<br>';
  ?>

    
</body>
</html>