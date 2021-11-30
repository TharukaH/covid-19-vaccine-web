<?php
$connection=mysqli_connect('localhost','root','','citysmart');
$d="";
  ?>
<?php


$query="SELECT COUNT(id) AS c FROM person WHERE dose1 IS NOT NULL AND dose2 IS NOT NULL";

$result_set=mysqli_query($connection,$query);
$tf=0;
$th=0;
while($record=mysqli_fetch_assoc($result_set)){
  $tf=$record['c'];
}
$query="SELECT COUNT(id) AS c FROM person WHERE dose1 IS NOT NULL AND dose2 IS NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $th=$record['c'];
}
$age1tf=0;
$age1th=0;
$age2tf=0;
$age2th=0;
$age3tf=0;
$age3th=0;
$query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 18 AND 29 AND dose1 IS NOT NULL AND dose2 IS NOT NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $age1tf=$record['c'];
}
$query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 18 AND 29 AND dose1 IS NOT NULL AND dose2 IS NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $age1th=$record['c'];
}
$query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 30 AND 60 AND dose1 IS NOT NULL AND dose2 IS NOT NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $age2tf=$record['c'];
}
$query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 30 AND 60 AND dose1 IS NOT NULL AND dose2 IS NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $age2th=$record['c'];
}
$query="SELECT COUNT(id) AS c FROM person WHERE age>60 AND dose1 IS NOT NULL AND dose2 IS NOT NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $age3tf=$record['c'];
}
$query="SELECT COUNT(id) AS c FROM person WHERE age>60 AND dose1 IS NOT NULL AND dose2 IS NULL";

$result_set=mysqli_query($connection,$query);

while($record=mysqli_fetch_assoc($result_set)){
  $age3th=$record['c'];
}


            
?>
<?php
if(isset($_POST['sdate']))
{
  
  $day=date("Y-m-d",strtotime($_POST['dateform']));
  $d=$day;
  $query="SELECT COUNT(id) AS c FROM person WHERE  dose1 IS NOT NULL AND dose2 IS NOT NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $tf=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE  dose1 IS NOT NULL AND dose2 IS NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $th=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 18 AND 29 AND dose1 IS NOT NULL AND dose2 IS NOT NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $age1tf=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 18 AND 29 AND dose1 IS NOT NULL AND dose2 IS NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $age1th=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 30 AND 60 AND dose1 IS NOT NULL AND dose2 IS NOT NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $age2tf=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE age BETWEEN 30 AND 60 AND dose1 IS NOT NULL AND dose2 IS NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $age2th=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE age>60 AND dose1 IS NOT NULL AND dose2 IS NOT NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $age3tf=$record["0"]['c'];
  }
  $query="SELECT COUNT(id) AS c FROM person WHERE age>60 AND dose1 IS NOT NULL AND dose2 IS NULL AND dose2=:day";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  if(!empty($record))
  {
    $age3th=$record["0"]['c'];
  }
  

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="dashboard.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image" href="logo.png">
    <title>Head Office</title>
  </head>

  <!--calander start-->
  <body id="body">
    <br><br>
    <form action="progress.php" method="POST">
    
    <input type="date" name="dateform">
    <center><input type="submit" style="height:40px;width:120px" name="sdate" value="Search"></center>

  
    </form>
    
  
  <!--calander end-->

  
    <div class="container">
      <main>
        <div class="main__container">

          <!-- CHARTS STARTS HERE -->
          <div class="charts">
            <div class="charts__right">
              <div class="charts__right__title">
                <div>
                  <h1>All Island Vaccination Progress <?php echo $d ?></h1>
                </div>
                <i class="fa fa-medkit" aria-hidden="true"></i>
              </div>

              <div class="charts__right__cards">
                <div class="card1">
                  <h1>Half Vaccinated</h1>
                  <p><?php echo $th ?></p>
                </div>

                <div class="card2">
                  <h1>Fully Vaccinated</h1>
                  <p><?php echo $tf ?></p>
                </div>

                <br><br>
                <div class="card3">
                  <h1>Age:18-29</h1>
                  <p>Half : <?php echo $age1th ?></p>
                  <p>Fully :<?php echo $age1tf ?></p>
                </div>
                <div class="card4">
                  <h1>Age:30-60</h1>
                  <p>Half : <?php echo $age2th ?></p>
                  <p>Fully : <?php echo $age2tf ?></p>
                </div>
                <div class="card5">
                  <h1>Age:60+</h1>
                  <p>Half : <?php echo $age3th ?></p>
                  <p>Fully :<?php echo $age3tf ?></p>
                </div>
              </div>
            </div>
          </div>
          <!-- CHARTS ENDS HERE -->        
        </div>
      </main>

      <div class="sidebar">
        <div class="logo-details">
          <div class="logo">
            <div class="logo_name">CITY SMART</div>
          </div>
          <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">   
          <li>
            <a href=dashboard.php>
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
         <li>
           <a href=progress.php>
             <i class='bx bx-bar-chart-alt-2' ></i>
             <span class="links_name">Vaccination Progress</span>
           </a>
           <span class="tooltip">Vaccination Progress</span>
         </li>
         <li>
           <a href="password.php">
             <i class='bx bx-user' ></i>         
             <span class="links_name">Password Manager</span>
           </a>
           <span class="tooltip">Password Manager</span>
         </li>
         <li class="profile">
          <a href="index.php">
             <i class='bx bx-log-out' ></i>
             <span class="links_name">Log Out</span>
          </a>
             <span class="tooltip">Log Out</span>
         </li>
        </ul>
      </div>
      <script src="dashboard.js"></script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  

  <br><br><br><br><br>

  <div class="container2">   
    <form action="">
    <div class="select-box">
        <div class="options-container">
            <div class="option">
                <input type="radio" class="radio" id="divulapitiya" name="category"/>
                <label for="divulapitiya">Divulapitiya</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="marandagahamula" name="category" />
                <label for="marandagahamula">Marandagahamula</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="dunagaha" name="category" />
                <label for="dunagaha">Dunagaha</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="minuwangoda" name="category" />
                <label for="minuwangoda">Minuwangoda</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="gampaha" name="category" />
                <label for="gampaha">Gampaha</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="palmadulla" name="category" />
                <label for="palmadulla">Palmadulla</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="ratmalana" name="category" />
                <label for="ratmalana">Ratmalana</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="mount lavinia" name="category" />
                <label for="mount lavinia">Mount lavinia</label>
            </div>

            <div class="option">
                <input type="radio" class="radio" id="moratuwa" name="category" />
                <label for="moratuwa">Moratuwa</label>
            </div>
        </div>

        <div class="selected">
            Select By District
        </div>

        <div class="search-box">
            <input type="text" placeholder="Start Typing..." />
        </div>
    </div>
  </div>
  <input type="submit" class="btn" value="Search">
  </form> 
  <script src="scroll.js"></script>
  

    <div class="container">
      <main>
        <div class="main__container">

          <!-- CHARTS STARTS HERE -->
          <div class="charts">
            <div class="charts__right2">
              <div class="charts__right__title">
                <div>
                  <h1>Districts Vaccination Progress</h1>
                  <p></p>
                </div>
                <i class="fa fa-medkit" aria-hidden="true"></i>
              </div>

              <div class="charts__right__cards">
                <div class="card6">
                  <h1>Half Vaccinated</h1>
                  <p>2 546 799</p>
                </div>

                <div class="card7">
                  <h1>Fully Vaccinated</h1>
                  <p>1 424 200</p>
                </div>

                <br><br>
                <div class="card8">
                  <h1>Age:18-29</h1>
                  <p>Half : 432 390</p>
                  <p>Fully : 392 200</p>
                </div>
                <div class="card9">
                  <h1>Age:30-60</h1>
                  <p>Half : 432 390</p>
                  <p>Fully : 392 200</p>
                </div>
                <div class="card10">
                  <h1>Age:60+</h1>
                  <p>Half : 432 390</p>
                  <p>Fully : 392 200</p>
                </div>
              </div>
            </div>
          </div>
          <!-- CHARTS ENDS HERE -->        
        </div>
      </main>
    </div>
  </body>

</html>