
<?php
if(isset($_POST['submit']))
{
  $center=$_POST['center'];
 

$query='SELECT id AS c FROM center WHERE name=:center';
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':center',$center);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  $tc="";
  if(!empty($record))
  {
    $tc=$record["0"]['c'];
  }
$name=$_POST['name'];
$id=$_POST['id'];
$telephone=$_POST['telephone'];
$dose=(int)$_POST['dose'];
$day=date("Y-m-d",strtotime('tomorrow'));
$query='SELECT COUNT(id) AS c FROM appoinment WHERE datee=:day';
  $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sth=$dbh->prepare($query);
  $sth->bindParam(':day',$day);
  $sth->execute();
  $record=$sth->fetchAll();
  $dbh=null;
  $tf=0;
  if(!empty($record))
  {
    $tf=$record["0"]['c'];
  }
  if($tf<500)
  {
    $tf=$tf+1;
    $connection=mysqli_connect('localhost','root','','citysmart');
    $query="INSERT INTO appoinment (name,id,dose,telephone,datee,app_no,center) VALUES
    ('{$name}','{$id}','{$dose}','{$telephone}','{$day}','{$tf}','{$tc}')";
    $result=mysqli_query($connection,$query);
  }
  else
  {
    $day=date("Y-m-d",strtotime('+2 day'));
    $query='SELECT COUNT(id) AS c FROM appoinment WHERE datee=:day';
      $dbh=new PDO('mysql:host=localhost;dbname=citysmart','root','');
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $sth=$dbh->prepare($query);
      $sth->bindParam(':day',$day);
      $sth->execute();
      $record=$sth->fetchAll();
      $dbh=null;
      $tf=0;
    if(!empty($record))
    {
        $tf=$record["0"]['c'];
    }
    if($tf<500)
    {
        $tf=$tf+1;
        $connection=mysqli_connect('localhost','root','','citysmart');
        $query="INSERT INTO appoinment (name,id,dose,telephone,datee,app_no,center) VALUES
        ('{$name}','{$id}','{$dose}','{$telephone}','{$day}','{$tf}','{$tc}')";
        $result=mysqli_query($connection,$query);
    }

  }
  $range="";
  if($tf>0 && $tf<=100)
  {
      $range="8-10 AM";
  }
  if($tf>100 && $tf<=200)
  {
      $range="10-12 PM";
  }
  if($tf>200 && $tf<=300)
  {
      $range="12-2 PM";
  }
  if($tf>300 && $tf<=400)
  {
      $range="2-4 PM";
  }
  if($tf>400 && $tf<=500)
  {
      $range="4-6 AM";
  }
 



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<center><body>
<div class="jumbotron">
  <h1 class="display-4">Appoinment Details</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p>NIC NO:<?php echo $id ?> </p>
  <p>Name:<?php echo $name ?> </p>
  <p>Appoinment Date: <?php echo $day ?> </p>
  <p>Appoinment No: <?php echo $tf ?> </p>
  <p>Appoinment Time Range: <?php echo $range ?> </p>
  <p>Place: <?php echo $center ?> </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="index.php" role="button">Go Home</a>
  </p>
</div>
    
</body></center>
</html>