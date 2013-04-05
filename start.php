<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">    
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <?php
                    echo "<li><a href='#'>Welcome, '$_SESSION[username]'!</a></li>";
                ?>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

    



    <!-- Carousel dialog
    ================================================== -->

    <!-- Carousel PHP -->

    <?php

      include 'connect.php';

      //1. Get the most current articles from database
      $result = mysqli_query($connectCpanel, 
        "SELECT image, title, description, url FROM articles ORDER BY time DESC LIMIT 3");

      $html_str = ' <div id="myCarousel" class="carousel slide"><ol class="carousel-indicators">';
      $html_str .= '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
      $html_str .= '<li data-target="#myCarousel" data-slide-to="1"></li><li data-target="#myCarousel"'; 
      $html_str .= 'data-slide-to="2"></li></ol><div class="carousel-inner">';

      //2. Load them onto the page
      if($result)
      {
        $first = 0;
        $item = "item";

        while($row = mysqli_fetch_array($result))
        {

          if(! $first) 
            $html_str .= "<div class='item active'><img src=\"img/". $row['image'] ."\"> onload='loadImage()'>";
          else 
            $html_str .= "<div class='item'><img src=\"img/". $row['image'] ."\"> onload='loadImage()'>";
          
          $html_str .= "<div class='container'><div class='carousel-caption'><h1>" .$row['title']. "</h1>";
          $html_str .= "<p class='lead'>".substr($row['description'], 0, 50)."</p></div></div></div>";
          
          $first = 1;
        }
      
        $html_str .= '</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
        $html_str .= '<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a></div>';

        echo $html_str;
      }
     
      
      
    ?>

    <!-- 3. OnClick the image, popup the dialog -->
    <div id="dialog" title="Basic dialog" style="display: none;">  
      <p></p>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      <!-- search Ingredients table -->


      <?php

        //1. select id, image, name, desc from table if table exists

        $result = mysqli_query($connectCpanel, 
                "SELECT i_id, image, name, description FROM ingredients ORDER BY time DESC LIMIT 3");
        
        //display every row

        $html_str = "";

        if($result)
        {
          while($row = mysqli_fetch_array($result))
          {
            $html_str .= "<div class='span4'> <img class='img-circle' data-src=\"img/". $row['image']. "\"><h2>". $row['name'];
            $html_str .= "</h2><p>". substr($row['description'], 0, 50)."...</p>";
            $html_str .= "<p><a class='btn' href='product.php'>View Details &raquo;</a></p></div>";
          }
          echo $html_str;
        }
      ?>

       </div><!-- /.row -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>



    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="js/holder.js"></script>
    <script>
      function loadImage()
      {
        $('#slimg').height($('.container').height());
        $('#slimg').width($('.container').width());
      }
    </script>
  </body>
</html>
