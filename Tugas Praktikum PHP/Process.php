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
    //echo "Thanks, <b>".$_POST["name"]."</b><br>";
    //echo "Your email is: ".$_POST["email"]."<br>";
    //echo "Your website is ".$_POST["website"]."<br>";
    //echo "Your comment is ".$_POST["comment"]."<br>";
    //echo "You are ".$_POST["gender"];
    
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
        //$gender = $_POST["gender"];
    }else{
        die("Sorry you cannot access this page!");
    }

    if (!empty($name)) {
        if(!preg_match("/^[a-zA-Z \-\.\']*$/", $name)) {
            echo "Your input name is incorrect!
            only letters white space. dot (.), and dash(-) are allowed <br>";
        }else{
            $name = test_input($name);
            echo "Thanks, <b>". $name."</b><br>";
        }
    }else{
      echo ("Name is required <br>");
    }

    if (!empty($email)) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format! <br>";
        }else{
            $name = test_input($email);
            "Your email is: ".$email."<br>";
        }
    }else{
        echo ("Email is required <br>");
        }
    
    if (!empty($website)) {
        if (preg_match("/\b(?:https?|ftp):\/\/|www\.) [-a-z0-9+&@#\/%?=~_|!:,.;]
        *[-a-z0-9+&@#\/%?=~_|] /i", $website)){
        }else{
            $name = test_input($website);
            "Your website is ".$website."<br>";
        }
    }else{
        echo "Website is required <br>";
    }

    if (!empty($comment)) {
        $comment = test_input($comment);
        echo "Your comment is ".$comment."<br>";
    }else{
        echo ("Comment is required <br>");
    }

    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
    }
    
    if (!empty($gender)) {
        echo "You are ".$gender."<br>";
    }else{
        echo ("Gender is required <br>");
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    
    
    ?>
    
</body>
</html>