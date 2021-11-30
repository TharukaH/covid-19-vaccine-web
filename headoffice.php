<html>
    <head>
        <meta charset="utf-8">
        <title>Head Office</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image" href="logo.png">
        <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    </head>
    <body>
        <!--navigation bar start-->
        <nav>
            <div class="logo">CITY SMART</div>
            <ul>

                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Login As</a>
                    <ul>
                        <li><a href="headoffice.php">Head Office</a></li>
                        <li><a href="center.php">Vaccine Center</a></li>
                        <li><a href="patient_1.php">Patient</a></li>
                    </ul>
                </li>
                <!--<li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Language</a>
                    <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">Sinhala</a></li>
                        <li><a href="#">Tamil</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
        <!--navigation bar end-->
    </body>

    <body>
        <img class="wave" src="img/wave.png">
        <div class="container">
            <div class="img">
                <img src="img/bg.svg">
            </div>
            <div class="login-content">
                <form action="login.php" method="post">
                    <img src="img/avatar.svg">
                    <h2 class="title">Welcome</h2>
                    <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>
                       <div class="input-div one">
                          <div class="i">
                                  <i class="fas fa-user"></i>
                          </div>
                          <div class="div">
                                  <h5>Username</h5>
                                  <input type="text" name="uname" class="input">
                          </div>
                       </div>
                       <div class="input-div pass">
                          <div class="i"> 
                               <i class="fas fa-lock"></i>
                          </div>
                          <div class="div">
                               <h5>Password</h5>
                               <input type="password" name="password" class="input">
                       </div>
                    </div>
                    <br><br><br><br><br><br>
                    <input type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>