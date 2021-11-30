<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php
$connection=mysqli_connect('localhost','root','','citysmart');


  ?>
  <?php
if(isset($_GET['edit']))
{
  $id=$_GET['edit'];
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $q="UPDATE center SET total=total+5000 WHERE id=?";
$sth=$dbh->prepare($q);

$sth->execute([$id]);

}
?>
<?php
$query="SELECT vaccine,total FROM center";
$result_set=mysqli_query($connection,$query);
$sy=0;
$ph=0;
$mod=0;

while($record=mysqli_fetch_assoc($result_set)){
  if($record['vaccine']=="Synopharm")
  {
    $sy=$record['total'] - $sy;
    
  }
  if($record['vaccine']=="Phizer")
  {
    $ph=$record['total'] - $ph;
    
  }
  if($record['vaccine']=="Modarna")
  {
    $mod=$record['total'] - $mod;
    
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="dashboard.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image" href="logo.png">
    <title>Head Office</title>
  </head>

  <body id="body">
    <div class="container">
      <main>
        <div class="main__container">

          <!-- CHARTS STARTS HERE -->
          <div class="charts">
            <div class="charts__rightD">
              <div class="charts__right__title">
                <div>
                  <h1>Vaccine Stock</h1>
                  <p>Modarna, Phizer, Sinopharm</p>
                </div>
                <i class="fa fa-medkit" aria-hidden="true"></i>
              </div>

              <div class="charts__right__cards">
                <div class="cardM">
                  <h1>Modarna</h1>
                  <p><?php echo $mod?></p>
                </div>

                <div class="cardP">
                  <h1>Phizer</h1>
                  <p><?php echo $ph?></p>
                </div>

                <div class="cardS">
                  <h1>Synopharm</h1>
                  <p><?php echo $sy?></p>
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
         <!--<li>
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
         </li>-->
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
  
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2><b>Covid-19</b> Vaccination</h2></div>
                <div class="col-sm-6">
                    <div class="btn-group" data-goggle="buttons">
                        <label>
                            <input id="all" type="radio" name="status" value="all" checked="checked"> All
                        </label>
                        <label>
                            <input id="normal" type="radio" name="status" value="normal"> Normal
                        </label>
                        <label>
                            <input id="low" type="radio" name="status" value="low"> Low
                        </label>     
                    </div>
                </div>
            </div>
        </div>
        <div>
        <?php

                        $query="SELECT id,name,vaccine,total FROM center";
                        $result_set=mysqli_query($connection,$query);
                        if($result_set)
                        {
                          $table='<table class="table table-striped table-hover">';
                          $table.='<thead>';
                          $table.='<tr><th>Center Id</th><th>Center Name</th><th>Vaccine type</th>
                          <th>Total</th><th>Status</th><th>Action</th></tr>';
                          while($record=mysqli_fetch_assoc($result_set))
                          {
                            $table.='<tr data-status="normal">';
                            $table.='<td>'.$record['id'].'</td>';
                             $table.='<td>'.$record['name'].'</td>';
                              $table.='<td>'.$record['vaccine'].'</td>';
                               $table.='<td>'.$record['total'].'</td>';
                               if($record['total']>10000)
                               {
                               $table.='<td>'.'<span class="label label-success">Normal</span>'.'</td>';
                               }
                               else
                               {
                                $table.='<td>'.'<span class="label label-danger">Low</span>'.'</td>';
                               }
                               $table.='<td>'.'<a href="dashboard.php?edit='.$record['id'].'" type="button" style="text-align:center;background-color:yellow;padding:7px 15px;text-decoration:none;display:inline-block" >Add</a>'.'</td>';
                                   $table.='</tr>';

                          }
                          echo $table;
                        }

                  ?>

</div>
    </div> 
    </div>
<script src="table.js"></script>  
<script>
  $(document).ready(function(){
    $("#all").click(function(){

    });
  });
</script>  
</body>

</html>

<?php 
}else{
     header("Location: headoffice.php");
     exit();
}
 ?>