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
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <link rel="shortcut icon" type="image" href="logo.png">
    <title>Head Office</title>
  </head>

  <body id="body">
    <div class="container">
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
  </body>

  <body>
    <div class="table-wrapper2">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2><b>Covid-19</b> Vaccination</h2></div>
                
            </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>User Name&nbsp;</th>
                    <th>Password&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Head</td>
                    <td>1234</a></td>
                    
                </tr>
                <tr>
                  <td>C1</td>
                  <td>1234</a></td>
                  
                </tr>
                <tr>
                  <td>C2</td>
                  <td>1234</a></td>
                  
                </tr>
            </tbody>
        </table>
    </div> 
<script src="table.js"></script>    
</body>
</html>

<script type="text/javascript" language="javascript" >

function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });