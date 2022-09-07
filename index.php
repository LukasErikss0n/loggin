<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <div class="wrapper">
            <form action="loggin.php" method="POST" enctype="multipart/form-data">
                <label for="text">användarnamn</label>
                <input type="text" name="user_name">
                <label for="password">Lösenord</label>
                <input type="password" name="password">
                <button type="submit" name="submit">Loggin</button>
            </form>

        </div>
    </div>
</body>

</html>