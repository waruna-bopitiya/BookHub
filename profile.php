<?php $title="Profile"; 
    require_once('bookhubheader.php');

    if(isset($_SESSION["email"])) { 

        $email = $_SESSION['email'];
        require_once('config.php');
            $sql3 = "SELECT * FROM user WHERE email = '$email' And userType='client'";

        $result3 = $con->query($sql3);

        if ($result3->num_rows > 0) {

            $row = $result3->fetch_assoc();

            $userID = $row['userID'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $email = $row['email'];
            $phoneNumber = $row['phoneNumber'];
            $pswd = $row['pswd'];
            $homenumber = $row['homenumber'];
            $city = $row['city'];
            $street = $row['street'];
            $postalcode = $row['postalcode'];
            $province = $row['province'];
           

        } }
        
?>

    <link rel="stylesheet" href="src/asserts/css/profile.css">

    <div class="content">
            <div class="form">
                <h2 style="text-align:center;">Account Info</h2></header><br>
                <form id="profileForm" action="saveDetails.php" method="POST" onsubmit= "return validateNumber()">


                    <input type="hidden" id="userID" name="userID" value="<?=$userID ?>" required/>
                    
                    <div class="field input">

                        <input type="text" id="fname" name="firstName" placeholder="First Name" value="<?=$firstName?>" required/>
                        <br><br>
                    </div>
                    
                    <div class="field input">
                        <input type="text" id="lname" name="lastName" placeholder="Last Name" value="<?=$lastName?>"  required/>
                        <br><br>
                    </div>

                    <div class="field input">
                        <input type="email" id="email" name="email" placeholder="E-mail" value="<?=$email?>" required/>
                        <br><br>
                    </div>

                    <div class="field input">
                        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" value="<?=$phoneNumber?>" required/>
                        <br><br>
                    </div>
                    <LEGEnd>Address
                    <div class="field input">
                        <input type="text" id="homenumber" name="homenumber" placeholder="Home Number" value="<?=$homenumber?>">
                        <br><br>
                    </div>

                    <div class="field input">
                        <input type="text" id="street" name="street" placeholder="Street" value="<?=$street?>">
                        <br><br>
                    </div>

                    <div class="field input">
                        <input type="text" id="city" name="city" placeholder="City" value="<?=$city?>">
                        <br><br>
                    </div>
                    

                    <div class="field input">
                        <input type="text" id="province" name="province" placeholder="Province" value="<?=$province?>">
                        <br><br>
                    </div>

                    <div class="field input">
                        <input type="text" id="postalcode" name="postalcode" placeholder="Postalcode" value="<?=$postalcode?>">
                        <br><br>
                    </div>
                    </LEGEnd>
            
                    <div class="field input">
                        <input type="password" id="pwd" name="pswd" placeholder="Password" value="<?=$pswd?>">
                        <br><br>
                    </div>

                    
                    <div class="field input">
                        <input type="password" id="rpwd" name="rpwd" placeholder="Re-Enter Password" value="<?=$pswd?>" required>
                        <br><br>
                    </div>
            
                    <br>

                    <div class="field">
                            <button name="submit" class="btn" type="submit">Save Details</button>
                        
                    </div></form>
            
                    <div class="field">
                        <form action="profileDelete.php" method="POST">
                        <input type="hidden" id="userID" name="userID" value="<?=$userID ?>">
                            <button name="submit" class="btn" id="dltbtn" type="submit">Delete Account</button>
                        </form>
                    </div>
                
    </div>
    </div>
    <script>
        function validateNumber() {
            const inputField = document.getElementById('phoneNumber');
            const value = inputField.value;
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('pwd').value;
            const repeatPassword = document.getElementById('rpwd').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const homenumber = document.getElementById('homenumber').value;
            const street = document.getElementById('street').value;
            const city = document.getElementById('city').value;
            const province = document.getElementById('province').value;
            const postalcode = document.getElementById('postalcode').value;
            
            if (fname=="" || lname=="" || email=="" || password=="" || repeatPassword=="" || phoneNumber=="" || homenumber=="" || street=="" || city=="" || province=="" || postalcode=="") {
                alert('Please fill out all fields.');
                return false;
                
            }
            else if (password !== repeatPassword) {
                alert('Passwords do not match.');
                return false;
            }
            else if (value.length !== 11) {
                alert('Please enter a valid phone number.');
                inputField.value = '94'; 
                return false;
            }
            return true;
        };
    </script>
    
</body>
</html>


<footer><?php
include_once('bookhubfooter.php')
?></footer>