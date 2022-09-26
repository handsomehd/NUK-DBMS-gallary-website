<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>a1083322-Gallary-artist-artwork</title>
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
                <li><a href="artist.php">Artist</a></li>
                <li><a href="artwork.php">Arwork</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="search.php">Search</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <?php
          $id = $_GET['id'];
          echo "<div class='templatemo-content-widget white-bg'>";
            echo "<h2 class='margin-bottom-10'>"."<font color='#7f7f7f'>"."The Artist : ".$id."</font>"."</h2>";
          echo "</div>";
          $link = mysqli_connect('140.127.220.233', 'a1083322', 'a1083322Checkpoint7', 'a1083322');
          $SQL = "SELECT * FROM Artwork";
          $result = mysqli_query($link, $SQL);
          echo "<div class='templatemo-flex-row flex-content-row'>";
          $count = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row["artist_name"] == $id) {
              $pic = $row["title"].".jpg";
              echo "<div class='col-1'> ";
              echo "<div class='panel panel-default margin-10'>";
                echo "<div class='panel-heading'>";
                  echo "<h2>".$row["title"]."</h2>";
                echo "</div>";
                echo "<div class='panel-body'>";
                  echo "<center>"."<img height='300' src='art_image/$pic' class='img-responsive'>"."</center>";
                echo "</div>";
                echo "<div style='padding:15px 15px;'>";
                    echo "<font size='3' color='#95CACA' face='monospace'>"."⊚ Year:  "."<b>".$row["year"]."</b></br></font><br></br>";
                    echo "<font size='3' color='#95CACA' face='monospace'>"."⊚ Type:  "."<b>".$row["type_of_art"]."</b></br></font><br></br>";
                    echo "<font size='3' color='#95CACA' face='monospace'>"."⊚ Price: "."<b>"."$".$row["price"]." Dollars"."</b></br></font><br></br>";
                    echo "<font size='3' color='#95CACA' face='monospace'>"."⊚ Group:  "."<b>".$row["group_name"]."</b></br></font><br></br>"; 
                echo "</div>";            
              echo "</div>";
            echo "</div>";
            $count = $count+1;
            }
          }
          if($count == 0){
            echo "Sorry! The artist's artworks have been sold out.";
          }
          echo "</div>";
          ?>
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script type="text/javascript">
      
      $(document).ready(function() {

        if($.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          $(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          $(window).resize(function(){
            drawMaps();
          });  
        }
        
        drawMaps();

      });
    </script>
  </body>
</html>