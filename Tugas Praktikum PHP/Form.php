<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Simple Form</h2>
    <form method="post" action="Process.php">
        Name : <input type="text" name="name">
        <br><br>
        E-mail : <input type="text" name="email">
        <br><br>
        Website : <input type="text" name="website">
        <br><br>
        Comments : <textarea name="comment" rows="5" cols="40" ></textarea>
        <br><br>
        Gender : 
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    
</body>
</html>