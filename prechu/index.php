<?php require_once 'logic/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="top">
            <div class="wrap main_flex__nowrap flex__jcontent_between flex__align-items_center">
                    <div id="logo" class="main_flex__nowrap flex__jcontent_between flex__align-items_center">
                        <img src="img/logo.png" alt="">
                        <div>Prechu</div>
                    </div>
                    
                    <nav>
                        <div id="main_nav">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="signup.php">Sign up</a></li>
                            <li><a href="signin.php">Log in</a></li>
                            <li><a href="#">Contacts</a></li>
                        </div>                      
                    </nav>
                </div>
            </div>
    </header>

    <div id="goods">
        <div class="wrap main_flex__nowrap flex__jcontent_center flex__align-items_center">
            <?php
                if( isset($_SESSION['user_login']) )
                {
                    echo "<div id='user_in'";
                    echo '<p>Hello, ' . $_SESSION['user_login'] .  ', You are on main page</p>' . '<br>';
                    echo "<a href='logic/logout.php'>Logout</a>";
                    echo "</div>";
                } else {
                    die("No data");
                }
            ?>
        </div>
    </div>
</body>
</html>