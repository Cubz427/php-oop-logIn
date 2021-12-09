<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index-style.css">
</head>
<body class="body">
    <div class="header">
    <h2>Welcome to my todo app!</h2>
    </div>
    <div class="loginWrapper">
        <div class="headerWrapper">
            <h4>Log In Here!</h4>
        </div>
        <div class="mainWrapper">   
        <form action="./includes/login.inc.php" method = "post">
            <input type="text" name="uid" placeholder="Username or Email">

            <input type="password" name="pwd" placeholder="Password">

                <button type="submit" name="loginSubmit">LOGIN</button>
        </form>
        <p class="bottomText"> Don't have an account yet? Sign up <a href="./register.php">HERE</a></p>
        </div>
    </div>
</body>
</html>