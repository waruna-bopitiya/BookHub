<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/asserts/css/login.css">
</head>
<body style="background-image: url('src/asserts/images/loginbg.jpg');">
    <div class="image">
        <img src="src/asserts/images/loginbg.jpg" alt="Background Image">
    </div>
    <div class="content">
        <h3 class="title">Sign in</h3>
        <form action="logininsert.php" method="post">
            <label for="email">Username</label>
            <br>
            <input type="text" id="email" name="email" placeholder="E-mail" required/>
            <br><br>
            <label for="pwd">Password</label>
            <br>
            <input type="password" id="pwd" name="pwd" placeholder="Password">
            <br><br>
            <button name="submit" type="submit">Login</button>
        </form>
        <p>Not a member yet? <a href="signup.php">SIGNUP</a></p>
    </div>
</body>
</html>