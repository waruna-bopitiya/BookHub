<?php
    session_start();

    if(isset($_SESSION["email"])) { 
        $email = $_SESSION['email'];
    require_once('config.php');
    $sql3 = "SELECT * FROM user WHERE email = '$email' And userType='admin'";

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
    <link rel="stylesheet" href="src/asserts/css/adminheader.css">
    <title>Publisher | Boookhub</title>
    <script src="src/asserts/js/javascript.js"></script>
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


        
            <div class="title_grp" style="justify-content: right;"><!-- this is the BookHub name -->

            
            <img src="src\asserts\images\title bar\icons8-account-30.png" alt="login" width="25px" height="25px">
            <?php
            if(isset($_SESSION["email"])) { 
                echo "<h4>Hi..! ".$firstName."</h4>";
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


    <div class="menubar">
             <div class="menuimage">
                     <img src="src\asserts\images\bookhublogotransparent.png" alt="logo" width="200px" height="200px">
             </div>
            
           <div class="menu">
                    <div class="badmin">
                     <h1>Bookhub Admin</h1>
                    </div>
                    <div class="naveul"><ul>
                        <li class="menu-item"><a href="pub_added.php">Books</a></li>
                        <li class="menu-item"><a href="orderviewadmin.php">Orders</a></li>
                        <li class="menu-item"> <a href="#">About Us</a></li>
                        <li class="menu-item"><a href="#">Contact Us</a></li>
                        <li class="menu-item"><a href="#">Return Policy</a></li>
                    </ul></div>
            </div> 

    </div>


    </body>
    </html>
