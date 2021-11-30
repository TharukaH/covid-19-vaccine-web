
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <?php
$vaccine="";
$total=0;
if(isset($_SESSION['user_name']))
{
  
  $d=$_SESSION['user_name'];
  $query="SELECT * FROM center WHERE id=:d";
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':d',$d);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  $vaccine="";
  $total=0;
  if(!empty($record))
  {
    $vaccine=$record["0"]['vaccine'];
    $total=$record["0"]['total'];
    
  }
}
  ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="center_style.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image" href="logo.png">
    <title>Vaccine Center</title>
  </head>

  <!--calander start-->
  <!--<body>
    <input type="date">
  </body>-->
  <!--calander end-->


    <body id="body">
        <div class="container">
          <main>
            <div class="main__container">
    
              <!-- CHARTS STARTS HERE -->
              <div class="charts">
                <div class="charts__right">
                  <div class="charts__right__title">
                    <div>
                      <h1>Vaccination</h1>
                      
                    </div>
                    <i class="fa fa-medkit" aria-hidden="true"></i>
                  </div>
    
                  <div class="charts__right__cards">
                    <div class="card1">
                      <h1>Vaccine Type</h1>
                      <p><h4><?php echo $vaccine ?></h4></p>
                    </div>
    
                    <div class="card2">
                      <h1>Total Vaccine</h1>
                      <p><?php echo $total ?></p>
                    </div>
    
                    <!--<div class="card3">
                      <h1>Today Prgress</h1>
                      <p> 56 234</p>
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- CHARTS ENDS HERE -->  
            </div>
          </main>  
          <div class="sidebar">
            <div class="logo-details">
              <div class="logo">
                <div class="logo_name">CITY SMART
                  <h5>with Covid-19 vaccine</h5>
                </div>
                  
              </div>
              <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">   
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
    </body>

    <body>
      <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-6"><h2><b>Covid-19</b> Vaccination</h2></div>
                  
              </div>
          </div>
  
         
          <?php

$username=$_SESSION['user_name'];
$query="SELECT * FROM appoinment WHERE center=:username";

$dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sth=$dbh->prepare($query);
$sth->bindParam(':username',$username);
$sth->execute();



if(true)
{
 
  $table='<table class="table table-striped">';
  $table.='<thead class="thead-light">';
  $table.='<tr><th scope="col">Name</th><th scope="col">NIC</th><th scope="col">Dose</th>
  <th scope="col">Telephone</th><th scope="col">Date</th><th scope="col">Appoinment_no</th>
  <th scope="col">Action</th>
  </tr>';
  while($record=$sth->fetch(PDO::FETCH_ASSOC))
  { 
    $table.='<tr scope="row">';
    $table.='<td>'.$record['name'].'</td>';
     $table.='<td>'.$record['id'].'</td>';
      $table.='<td>'.$record['dose'].'</td>';
       $table.='<td>'.$record['telephone'].'</td>';
        $table.='<td>'.$record['datee'].'</td>';
         $table.='<td>'.$record['app_no'].'</td>';
         $table.='<td>'.'<a href="center_1.php?edit='.$record['id'].'" type="button" style="text-align:center;background-color:yellow;padding:7px 15px;text-decoration:none;display:inline-block" >Confirm</a>'.'</td>';
           $table.='</tr>';
  }
           echo $table;

}

                  ?>
      </div> 
  <script src="table.js"></script>    
  </body>

</html>
<?php 
}else{
     header("Location: center.php");
     exit();
}
 ?>