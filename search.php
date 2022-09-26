<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>a1083322-Gallary-search</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1><a href="index.php" style="color:white;">Handsomehd   Gallary</a></h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/index.jpg" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
      </div>
      <!-- Main content --> 
      
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="artist.php" >Artist</a></li>
                <li><a href="artwork.php">Arwork</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="" class="active">Search</a></li>
              </ul>  
            </nav> 
          </div>
        </div>

      <div class="templatemo-content-widget templatemo-login-widget white-bg">
        <header class="text-center">
          <div class="square"></div>
          <h1>Search</h1>
          <center>You can only enter one of the options</center>
        </header>

        <form method="POST" action="trans.php" class="templatemo-login-form">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">Artist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <?php
              $link = mysqli_connect('140.127.220.233', 'a1083322', 'a1083322Checkpoint7', 'a1083322');
              $SQL = "SELECT name FROM Artist";
              $result = mysqli_query($link, $SQL);
              echo "<select  name='artist' style=' height: 30px; width: 260px; border-color: #ccc;' >";
              echo "<option>"."</option>";
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option>".$row['name']."</option>";
              } 
              echo "</select>";   
              ?>                       
            </div>  
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>              
              <?php
              $link = mysqli_connect('140.127.220.233', 'a1083322', 'a1083322Checkpoint7', 'a1083322');
              $SQL = "SELECT distinct Group_name FROM Group_Classify";
              $result = mysqli_query($link, $SQL);
              echo "<select name='group' style=' height: 30px; width: 260px; border-color: #ccc;' >";
              echo "<option>"."</option>";
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option>".$row['Group_name']."</option>";
              } 
              echo "</select>";   
              ?>           
            </div>  
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">Customer</div>              
              <?php
              $link = mysqli_connect('140.127.220.233', 'a1083322', 'a1083322Checkpoint7', 'a1083322');
              $SQL = "SELECT name FROM Customer";
              $result = mysqli_query($link, $SQL);
              echo "<select name='customer' style=' height: 30px; width: 260px; border-color: #ccc;' >";
              echo "<option>"."</option>";
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option>".$row['name']."</option>";
              } 
              echo "</select>";   
              ?>           
            </div>  
          </div>

          <button type="submit" class="templatemo-blue-button width-100">Submit</button>

        </form>
      </div>
      <?php
      if ($_GET['id'] == "error"){
        echo "<center>!!!You can only fill in one option!!!</br>Please try again:D</br></center>";
      }
      if ($_GET['id'] == "non"){
        echo "<center>!!!You must fill in!!!</br>Please try again:D</br></center>";
      }
      ?>
      </div>

    </div> 
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>