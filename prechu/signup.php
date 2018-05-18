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
                            <li><a href="#">Sign up</a></li>
                            <li><a href="signin.php">Log in</a></li>
                            <li><a href="#">Contacts</a></li>
                        </div>                      
                    </nav>
                </div>
            </div>
    </header>

    <div id="goods">
        <div class="wrap main_flex__nowrap flex__jcontent_center  flex__align-content_center flex__align-items_center">
            <div id="login_form">
                <form action="logic/reg.php" method="post" id="login_form">
                    <input type="text" name="login" placeholder="LOGIN">
                    <input type="password" name="password" placeholder="PASSWORD">
                    <input type="text" name="email" placeholder="EMAIL">
                    <button type="submit" class="anime">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>