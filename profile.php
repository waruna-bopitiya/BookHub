<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/asserts/css/profile.css">
</head>
<body>
    <div class="content">
        <div class="form">
            <h2>Account Info</h2></header><br>
            <form id="profileForm" action="profileupdate.php" method="post">
            <div class="field input">
            <input type="text" id="fname" name="fname" placeholder="First Name" value="waruna" required/>
            <br><br>
            <div class="field input">
            <input type="text" id="lname" name="lname" placeholder="Last Name" required/>
            <br><br>
            </div>
            <div class="field input">
            <input type="text" id="add" name="add" placeholder="Address" required/>
            <br><br>
            </div>
            <div class="field input">
            <input type="text" id="email" name="email" placeholder="E-mail" required/>
            <br><br>
            </div>
            <div class="field input">
            <input type="password" id="pwd" name="pwd" placeholder="Password">
            <br><br>
            </div>
            <div class="field input">
            <input type="password" id="rpwd" name="rpwd" placeholder="Re-Enter Password">
            <br><br>
            </div>
            <br>
            <div class="field">
            <button name="submit" class="btn" type="submit">Edit profile</button>
            </div>
            <div class="field">
            <button name="submit" class="btn" type="submit">Delete</button>
            </div>
    </form>
    </div>
    </div>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('pwd').value;
            const repeatPassword = document.getElementById('rpwd').value;

            // Check if all fields are filled
            if (!fname || !lname || !email || !password || !repeatPassword) {
                alert('Please fill out all fields.');
                e.preventDefault(); // Prevent form submission
                return;
            }

            // Check if passwords match
            if (password !== repeatPassword) {
                alert('Passwords do not match.');
                e.preventDefault(); // Prevent form submission
            }
        });
    </script>
</body>
</html>