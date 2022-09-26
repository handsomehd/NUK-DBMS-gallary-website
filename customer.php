<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>a1083322-Gallary-customer</title>
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
                <li><a href="" class="active">Customer</a></li>
                <li><a href="search.php">Search</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class='table table-striped table-bordered templatemo-user-table'>
                <thead>
                  <tr>
                    <td><a class='white-text templatemo-sort-by'> Customer <span class='caret'></span></a></td>
                    <td><a class='white-text templatemo-sort-by'> Address <span class='caret'></span></a></td>
                    <td><a class='white-text templatemo-sort-by'> Amount_of_dollars <span class='caret'></span></a></td>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $link = mysqli_connect('140.127.220.233', 'a1083322', 'a1083322Checkpoint7', 'a1083322');
                    $SQL = "SELECT * FROM Customer";
                    $result = mysqli_query($link, $SQL);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                        $name = $row["name"];
                        echo "<td>"."<a href='customer_his.php?id=$name'>".$name."</a>"."</td>";
                        echo "<td>".$row["address"]."</td>";
                        echo "<td>".$row["amount_of_dollars"]."</td>";
                      echo "</tr>";
                    }
                    ?>                   
                </tbody>
              </table>
            </div>                          
          </div>         
        </div>
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