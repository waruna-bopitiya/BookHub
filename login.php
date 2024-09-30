<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/asserts/css/login.css">
    <script>
        function validateForm(event) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('pwd').value;

            if (!email || !password) {
                alert('Please fill out all fields.');
                event.preventDefault(); 
            }
        }
    </script>
</head>
<body style="background-image: url('./src/assets/images/loginbg.png');">
<div class="content">
    <div class="form">
        <div class="form-box">
        <h3 class="title">Sign in</h3><br><br><br>
        <form action="logininread.php" method="post" onsubmit="validateForm(event)">
            <label for="email">Username</label>
            <input type="text" id="email" name="email" placeholder="E-mail" required/>
     
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd" placeholder="Password">
     
            <button name="submit" id="signinBtn" type="submit" >Login</button>
        </form>
        <p>Not a member yet? <a href="signup.php">SIGNUP</a></p>
     </div>
    </div>
   </div>
   </div>
</body>
</html>