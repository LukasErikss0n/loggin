<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">gå tillbacka</a>
    <?php

    $name = "Lukas";
    $Password = "123";

    $user_name = $_POST['user_name'];
    $User_password = $_POST['password'];


    if ($user_name == $name && $User_password == $Password) {
        echo "Välkomen in" . $name;
    } else {
        echo "fel användarnamn eller lösenord, försök igen";
    }
    ?>
</body>

</html>