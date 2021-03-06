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
    <link href="css/cupertino/jquery-ui-1.10.2.custom.css" rel="stylesheet">
    
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    
    /* Styling for Dialog UI
    -------------------------------------------------- */
    .demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
    
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

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
            <a class="brand" href="#">Single Friends Recipes</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingredient/Recipes <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" id = "listing" >List Ingredients</a></li>
                    <li><a href="#" id = "listrec" >List Recipes</a></li>
                    <li><a href="#" id = "posting" >Post Ingredient</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Not used yet</a></li>
                    <li><a href="#">Not used yet</a></li>
                  </ul>
                </li>
                <?php
                    echo "<li><a >Welcome, $_SESSION[username]!</a></li>";
                ?>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <?php

      include 'connect.php';

      //1. Get the most current articles from database
      $result = mysqli_query($connectCpanel, 
        "SELECT image, title, description, url FROM articles ORDER BY timer DESC LIMIT 3");

      $html_str = ' <div id="myCarousel" class="carousel slide"><ol class="carousel-indicators">';
      $html_str .= '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
      $html_str .= '<li data-target="#myCarousel" data-slide-to="1"></li><li data-target="#myCarousel"'; 
      $html_str .= 'data-slide-to="2"></li></ol><div class="carousel-inner">';

      //2. Load them onto the page
      if($result)
      {
        $first = 0;
        $item = "item";

        while($rew = mysqli_fetch_array($result))
        {

          if(! $first) 
            $html_str .= "<div class='item active'><img src=\"img/". $rew['image'] ."\" id= 'slimg'>";
          else 
            $html_str .= "<div class='item'><img src=\"img/". $rew['image'] ."\"  id='slimg'>";
          
          $html_str .= "<div class='container'><div class='carousel-caption'><h1>" .$rew['title']. "</h1>";
          $html_str .= "<p class='lead'>".substr($rew['description'], 0, 200)." ...</p><a href='".$rew['url']."' role='button' class='btn' data-toggle='modal'>Details</a></div></div></div>";
          
          $first = 1;
        }
      
        $html_str .= '</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
        $html_str .= '<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a></div>';

        echo $html_str;
      }
     
      
      
    ?>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
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

        <!-- Dialogues -->
        <!-- ui-dialog -->
        <!-- This dialog contains an ajax form!-->
        <div id="postIngredientDialog" title="Register">
            <p>Enter ingredient information: </p>
            <form id="imageform" method="post" enctype="multipart/form-data" action='uploadImg.php'>
                <textarea name = 'name' id = 'name' cols ='20' rows= '1' placeholder='Ingredient Name'></textarea><br>
                <textarea name = 'descr' id = 'descr' cols ='40' rows= '4' placeholder='Description'></textarea><br>
                <textarea name = 'nutInfo' id = 'nutInfo' cols ='40' rows= '4' placeholder='Description'></textarea><br><br>
                Upload image: <input type="file" name="photoimg" id="photoimg" /><br><br>
                <input type="submit" value="Submit Ingredient" /> 
            </form>
            
        </div>
        
        <!--Data Containers For Dialogues-->
        
        
        <div id="register">BLAM</div>
        <div><font size="2">Not registered? <a href="#" id="reg_link">Sign-Up!</a></div>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



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
    <script src="js/jquery-ui-1.10.2.custom.js"></script>
    <script src="js/jquery.form.js"></script>

    <script>
      !function ($) {
        $(function(){
          // carousel demo
            $('#myCarousel').carousel()
          
            // UI Dialog configuration
            $( "#postIngredientDialog" ).dialog({
            autoOpen: false,
            width: 500,
            buttons: [
               {
                    text: "Cancel",
                    click: function() {
                        $(this).dialog('close');
                        event.preventDefault();
                    }    
               }
           ]
        });  
          
          
        // Link to open the dialog
		$( "#posting" ).click(function( event ) {
			$( "#postIngredientDialog" ).dialog( "open" );
			event.preventDefault();
		});  
        
            
        // the php dialog
        var dlg=$('#register').dialog({
            title: 'Ingredient Information',
            resizable: true,
            autoOpen:false,
            modal: true,
            hide: 'fade',
            width:800,
            height:600
        });


         $('#reg_link').click(function(e) {
             e.preventDefault();
             dlg.load('showIngredient.php', { input: 5 }, function(){
                 dlg.dialog('open');
             });
          });           
          
         //stuff... 
        
        $("#imageform").ajaxForm(function() { 
            alert("Image upload complete.");
            // Erase previously inserted values
            document.getElementById('name').value='';
            document.getElementById('descr').value='';
            document.getElementById('nutInfo').value='';
            document.getElementById('photoimg').value='';
            $( "#postIngredientDialog" ).dialog( "close" );
        }); 

              
        })
      }(window.jQuery)
    </script>
    <script src="js/holder.js"></script>
  </body>
</html>
