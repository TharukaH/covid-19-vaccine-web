<html>
    <head>
        <meta charset="utf-8">
        <title>Patient</title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="shortcut icon" type="image" href="logo.png">
        <link rel="stylesheet" href="style.css">
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
                        <li><a href="patient.php">Patient</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Language</a>
                    <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">Sinhala</a></li>
                        <li><a href="#">Tamil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!--navigation bar end-->
    </body>

    <body>
        <img class="wave" src="img/wave.png">
        <div class="container">
            <div class="img">
                <img src="img/pat.jpg">
            </div>
            <div class="login-content">
                <form action="index.php">
                    <img src="img/avatar.svg">
                    <h2 class="title">Welcome</h2>
                    
                    <div class="container2">    
                        <div class="select-box">
                            <div class="options-container">
                                <div class="option">
                                    <input type="radio" class="radio" id="General Hospital divulapitiya" name="category"/>
                                    <label for="General Hospital divulapitiya">General Hospital divulapitiya</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="KDU hospital" name="category" />
                                    <label for="KDU hospital">KDU hospital</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="Ratnapura Hospital" name="category" />
                                    <label for="Ratnapura Hospital">Ratnapura Hospital</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="Colombo Hospital" name="category" />
                                    <label for="Colombo Hospital">Colombo Hospital</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="Anuradhapura Hospital" name="category" />
                                    <label for="Anuradhapura Hospital">Anuradhapura Hospital</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="Peradeniya Hospital" name="category" />
                                    <label for="Peradeniya Hospital">Peradeniya Hospital</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="Jaffana Hospital" name="category" />
                                    <label for="Jaffana Hospital">Jaffana Hospital</label>
                                </div>

                                <div class="option">
                                    <input type="radio" class="radio" id="General Hospital Kandy" name="category" />
                                    <label for="General Hospital Kandy">General Hospital Kandy</label>
                                </div>

                            </div>

                            <div class="selected">
                                Select Vaccine Center
                            </div>

                            <div class="search-box">
                                <input type="text" placeholder="Start Typing..." />
                            </div>
                        </div>
                    </div>

                    <script src="scroll.js"></script>
                    <input type="submit" class="btn" value="Search">
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>