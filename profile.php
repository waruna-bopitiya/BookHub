<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/profile.css"> 
    </head>
    <body>
    <?php include 'config.php' ?>  
        <?php 
            $id =$_SESSION['$email'];
            $sql = "SELECT * FROM user WHERE email='$email'";
            $result = $conn->query($sql);
        ?>
    <?php
        if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="profile-card">
    <div class="topCard-section">
        <img src="src/asserts/images/upimages/ppumangi.png"<?php echo $row['propic']; ?>" id="pre-img" class="profile-card-img"/>
    </div>
    <div class="bottomcard-section">
    <div class="name-container">
    <form action="profileupdate.php" method="post">
    <input type="file" class="custom-file-input" value="../uploads/users/<?php echo $row['propic']; ?>" required  name="image" id="image"/>
    <input type="hidden" value="<?php echo $_SESSION['email']; ?>"  name="email" id="email">
    </div>
    <div class="details-container">
    <div class="left-profile-section">
    <div class="form-heading">
    User details
    </div>
    <div class="data-profile-container">
    <div class="input-wrap">
    <label for="name">Full name</label>
    <input class="input" value="<?php echo $row['fullName']; ?>" type="text" placeholder="Full name" name="name" id="name" required/>
    <span class="error-txt" id="error-name"></span>
    </div> 
    <div class="input-wrap">
    <label for="password">Password</label>
    <div class="pass-wrap">
    <input class="input " value="<?php echo $row['password']; ?>" type="password" placeholder="Enter password ..." name="password" id="password" required/>
    <i id="showHidePassBtn" class="show-hide-password-btn fa fa-eye"></i>
    </div>
    <span class="error-txt" id="error-name"></span>
    </div> 
    <div class="btn-row">
    <button type="submit" class="btn btn-buy">Save</button>
    <button type="reset" class="btn btn-see">Cancel</button>
    </div>
    </form>
    </div> 
    </div>
    <div class="right-profile-section">
    <div class="form-heading">Contact details</div>
    <div class="data-profile-container">
    <form action="update-contact.php" method="post">
    <div class="input-wrap">
    <label for="mail">E-mail</label>
    <input class="input" value="<?php echo $row['email']; ?>" type="email" placeholder="E-mail" name="mail" id="mail" required/>
    <span class="error-txt" id="error-mail"></span>
    </div> 
    <div class="input-wrap">
    <label for="tel">Contact number</label>
    <input class="input" value="<?php echo $row['tel']; ?>" type="tel" placeholder="Contact number" name="tel" id="tel" pattern="[0-9]{10}" required/>
    <span class="error-txt" id="error-name"></span>
    </div> 
    <div class="input-wrap">
    <label for="tel">Address</label>
    <textarea class="input" type="text" placeholder="Address" name="address" id="address" required><?php echo $row['address']; ?></textarea>
    <span class="error-txt" id="error-name"></span>
    </div> 
    <div class="btn-row">
    <button type="submit" class="btn btn-buy">Save</button>
    <button type="reset" class="btn btn-see">Cancel</button>
    </div>
    </form>
    </div> 
    </div>
    </div>
    </div>
    <div class="option-heading">Options </div>
    <div class="options-row">
    <button type="submit" class="btn btn-buy option"><i class="fa fa-trash"></i> &nbsp; Delete my Account</button>
    <a href="logout.php"  class="btn btn-see option" style="text-decoration:none;text-align:center;">Log out</a>
    </div>
    <?php
    }  
    } else {
        echo "0 results";
    }
        $conn->close();
    ?>
    </div>
        <script>
             const togglePassword = document.querySelector('#showHidePassBtn');
                    const password = document.querySelector('#password');
                    
                    togglePassword.addEventListener('click', function (e) {
                        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                        password.setAttribute('type', type);
                        this.classList.toggle('fa-eye-slash');
                    });
        </script>
        <script>
        document.getElementById('image').onchange = function (evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
 
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function () {
                    document.getElementById("pre-img").src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }

             
            else {
                document.getElementById("error-img").innerHTML = "Can not preview the image";
            }
        }
        </script>
        <script> 
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        if (document.body.scrollTop >= 80 || document.documentElement.scrollTop < 80) {
                document.getElementById("nav").style.height = "500px"; 
                document.getElementById("profile-name").style.color = "black "; 
                document.getElementById("profile-btn").style.color = "brown"; 
                document.getElementById("top-nav").style.backgroundColor = "rgba(54, 54, 54, 0.6)";   
        } else {
                document.getElementById("nav").style.height = "150px "; 
                document.getElementById("profile-name").style.color = "white "; 
                document.getElementById("profile-btn").style.color = "rgb(255, 133, 133)"; 
                document.getElementById("top-nav").style.backgroundColor = "rgba(54, 54, 54, 1)"; 
            }
        }
        </script>
        <script src="../assert/OwlCarousel/dist/owl.carousel.js"></script>
        <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
        <script src="../js/carousal.js"></script>
  
    </body>
</html>