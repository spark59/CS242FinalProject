<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index_style.css">  
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" id="email"class="input-block-level" placeholder="Email address">
        <input type="password" id="pass" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" id = "signin" type="submit">Sign in</button>
        <button class="btn btn-large btn-primary" href = "#" type="submit">Register</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- 
          jQuery click event submit 
          AJAX loginRequest.php
          on success : start.html
          on fail : alert()  
    -->
    <script type="text/javascript">
    $(function() {
        $("#signin").click(function() {
            var email = $("#email").val();
            var password = $("#pass").val();
            var dataString = 'email='+ email + '&password=' + password;
            if (email == '' || password == '') {
                alert('Please enter your email and password.');
                return false;
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "verifyLogin.php",
                    data: dataString,
                    cache: false,
                    success: function(data){
                        if (data == "1") {
                            window.location="start.php";
                        }
                        else {
                            alert('Invalid email or password.');
                        }
                    }
                 });
            }
        return false;
        });
    });
    </script>
    
    
    
  </body>
</html>
