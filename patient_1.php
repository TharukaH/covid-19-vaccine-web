
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="shortcut icon" type="image" href="logo.png">
        <link rel="stylesheet" href="pat_style.css">
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
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
   
    

    <body onload="initClock()">

        <!--digital clock start-->
        <div class="datetime">
          <div class="date">
            <span id="dayname">Day</span>,
            <span id="month">Month</span>
            <span id="daynum">00</span>,
            <span id="year">Year</span>
          </div>
        </div>
        <!--digital clock end-->
    
        <script type="text/javascript">
        function updateClock(){
          var now = new Date();
          var dname = now.getDay(),
              mo = now.getMonth(),
              dnum = now.getDate(),
              yr = now.getFullYear(),
              hou = now.getHours(),
              min = now.getMinutes(),
              sec = now.getSeconds(),
              pe = "AM";
              
              if(hou >= 12){
                pe = "PM";
              }
              if(hou == 0){
                hou = 12;
              }
              if(hou > 12){
                hou = hou - 12;
              }
    
              Number.prototype.pad = function(digits){
                for(var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
              }
    
              var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
              var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
              var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
              var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
              for(var i = 0; i < ids.length; i++)
              document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }
    
        function initClock(){
          updateClock();
          window.setInterval("updateClock()", 1);
        }
        </script>
    
      </body>


    <body>
        <img class="wave" src="img/wave.png">
        <div class="container">
        
            <div class="img">
                <img src="img/pat.jpg">
            </div>
            <div class="login-content">
                <form action="n.php" method="POST">
                   
                       <div class="input-div one">
                          <div class="i">
                                <i class="fas fa-user"></i>
                          </div>
                          <div class="div">
                                  <h5>Name</h5>
                                  <input type="text" class="input" name="name">
                          </div>
                       </div>
                       <div class="input-div two">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>ID Number</h5>
                                <input type="text" class="input" name="id">
                            </div>
                        </div>
                        <div class="input-div three">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>Telphone Number</h5>
                                <input type="text" class="input" name="telephone">
                            </div>
                        </div>
                        
                        

                        <div>
                                
                            <select name="center" class="input form-select div input-div three" id="validationCustom04" required>
                            <option class="input div input-div three" selected disabled value="">Select Vaccine Center</option>
                            <option class="input div input-div three">KDU hospital</option>
                            <option class="input div input-div three">General hospital Divulapitiya</option>
                            <option class="input div input-div three">Ratnapura Hospital</option>
                            <option class="input div input-div three">Colombo Hospital</option>
                            <option class="input div input-div three">Anuradhapura Hospital</option>
                            
                            </select>
                        </div>

                        <div class="radio-container">
                            <input type="radio" id="firstdose" name="dose" value="1"
                             />
                            <label for="firstdose">First Dose</label>
                      
                            <input type="radio" id="seconddose" name="dose" value="2" />
                            <label for="seconddose">Second Dose</label>
                        </div>

                    <br><br><br><br>
                    <input type="submit" class="btn" name="submit">
                </form>
           
            </div>
        </div>
       
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>