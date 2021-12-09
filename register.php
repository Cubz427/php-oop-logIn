<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/register-style.css">
</head>
<body class="body">
    <div class="signUpWrapper">
        <div class="headerWrapper">
            <h4>Sign Up Here!</h4>
        </div>
        <div class="mainWrapper">   
        <form action="./includes/signup.inc.php" method = "post">
            <input type="text" name="uid" placeholder="Username">

            <input type="password" name="pwd" placeholder="Password">

            <input type="password" name="pwdRepeat" placeholder="Repeat Password">

            <input type="text" name="email" placeholder="E-mail">

                <button type="submit" name="signUpSubmit">LOGIN</button>
            
        </form>
        <p class="bottomText"> Already have an account yet? Log In <a href="./index.php">HERE</a></p>
        </div>
    </div>
</body>
</html>