<?php
    session_start();

    if(isset($_SESSION["email"])) { 
        $email = $_SESSION['email'];
    require_once('config.php');
    $sql3 = "SELECT * FROM user WHERE email = '$email' And userType='client'";

    $result = $con->query($sql3);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            $userID = $row['userID'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $userType = $row['userType'];


        } 
        }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/asserts/css/BookHubstylesheet.css">
    <title>
            <?php echo $title; 
            ?> | BookHub</title>
    <script src="src/asserts/js/javascript.js"></script>
    <script src="https://kit.fontawesome.com/2fd38a9fa7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="title_bar">
        <!-- This is the main division we allocated to show as the wire frame -->


        <div class="title_grp" style="justify-content: left;"><!-- this is the telephone number  and emailar -->
            
                 <img src="src\asserts\images\title bar\icons8-phone-30.png" alt="TP" width="20px" height="20px" >
                +94764936441
                <img src="src\asserts\images\title bar\icons8-email-30.png" alt="Email" width="25px" height="25px" style="margin-left: 20px; margin-right: 5px;">
                 bookhub2024@gmail.com
        </div> 


        
        <div class="title_grp" style="justify-content: center;"> <!-- this is the BookHub name -->
            BookHub
        </div>


        <div class="title_grp" style="justify-content: right;"><!-- this is the BookHub name -->

            
            <img src="src\asserts\images\title bar\icons8-account-30.png" alt="login" width="25px" height="25px">
            <?php
            if(isset($_SESSION["email"])) { 
                echo "Hi..!".$firstName."<a href='ordereditem.php'><button type='hidden' class='loginbtn' name='profile' id='submit'>ORDERED</button></a><a href='profile.php'><button type='hidden' class='loginbtn' name='profile' id='submit'>PROFILE</button></a><h4></h4>";
            }
            ?>
            
            <?php
            if(isset($_SESSION["email"])) { ?>
                <form action="logout.php" method="POST">
                <button type="hidden" name="logoff" id="submit" class="loginbtn">LOG OUT </button>
            </form><?php
            }

            else{
            echo "<a href='login.php'><button type='hidden' class='loginbtn' name='logoff' id='submit'>LOG IN</button></a>";
            }
            ?>


        </div>



    </div>

    
    
    
    
    <div class ="menu_bar">
        <!-- This is the division which include search bar and menu, cart.............. -->
        
        <div class="logo_menubar">
            <a href="index.php"><img src="src\asserts\images\bookhublogotransparent.png" alt="LOGO" width="200px" height="200px" margin-bottom="0px" ></a>

        </div>

        <div class="searchandmenu">
                    <form action="searchresult.php" method="GET" onsubmit="return validatesearch()">
                     <div class="search-container">
                        <input type="text" class="search-box" placeholder="Search in BookHub" name="searchname" id="searchname" value="<?php if (isset($_GET['searchname'])){echo $_GET['searchname'];}?>" >
                        <input type="submit" class="search-button" name="submit" value="Search" >  
                     </div></form>



                 <div class="menu">
                    <ul>
                    <a href="index.php"><li class="menu-item">Home</li></a>
                    <a href="#"><li class="menu-item">Categories</li></a>
                    <a href="#"><li class="menu-item"> About Us</li></a>
                    <a href="#"><li class="menu-item">Contact Us</li></a>
                    <a href="#"><li class="menu-item">Return Policy</li></a>
                    </ul>
                </div>
         </div>

         <div class="logo_menubar1">
                <a href="cart.php">
                 <img src="src\asserts\images\menu bar\cart.png" alt="LOGO" width="100px" height="100px" margin-bottom="0px" >
                    <h3>My Cart</h3></a>
         </div>
            
        </div>


    </div>

</body>
</html>