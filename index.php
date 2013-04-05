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
    <link href="css/cupertino/jquery-ui-1.10.2.custom.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
      
      .form-signin {
        max-width: 600px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      
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
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->



  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Welcome to Single Friends Recipes!</h2>
        <input type="text" id="email"class="input-block-level" placeholder="Email address">
        <input type="password" id="pass" class="input-block-level" type="password" placeholder="Password">
        <!-- checkbox rememebers user email. (not implemented yet)
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button class="btn btn-large btn-primary" id = "signin" type="submit">Sign in</button>
        <button class="btn btn-large btn-primary" id = "register" href = "#" type="submit">Register</button>
      </form>

    </div> <!-- /container -->
    
    <!-- ui-dialog -->
    <div id="dialog" title="Register">
        <p>Enter your personal information: </p>
        <textarea id="regemail" cols = '20' rows = '1' placeholder = 'Email Address ...'></textarea><br>
        <input id="regpass" cols = '20' rows = '1' type="password" placeholder = 'Enter Password ...'></input><br>
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.10.2.custom.js"></script>
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
        
        // UI Dialog configuration
        $( "#dialog" ).dialog({
        autoOpen: false,
        width: 400,
        buttons: [
            { //repText
                text: "Submit",
                click: function(event) {
                    var regEmail = $("#regemail").val();
                    var regPass = $("#regpass").val();
                    var dataString = 'regEmail='+ regEmail + '&regPass=' + regPass;
                    // Ensure Correct Data is there.
                    if(regEmail == '' || regPass == '') {
                        alert('Please enter both fields');
                    }
                    // Check for valid email address
                    else if (!(validateEmail(regEmail))){
                        alert('Please enter a valid email address!');
                    }
                    else {
                        $.ajax({
                            type: "POST",
                            url: "registerUser.php",
                            data: dataString,
                            cache: false,
                            success: function(data){
                                // Set entries to empty strings
                                document.getElementById('regemail').value='';
                                document.getElementById('regpass').value='';
                                $("#dialog").dialog('close');                            
                                
                                if (data == "success") {
                                    alert('You have successfully registered!');
                                }
                                else {
                                    alert('Registration failed. Please use another email address!');
                                }
                                return;
                          }
                        });
                    } //end else
                    return false;
                }
           },
           {
                text: "Cancel",
                click: function() {
                    document.getElementById('regemail').value='';
                    document.getElementById('regpass').value='';
                    $(this).dialog('close');
                    event.preventDefault();
                }    
           }
       ]
    });

        
        
        
		// Link to open the dialog
		$( "#register" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
        /**
        * e-mail validation function
        * http://stackoverflow.com/questions/46155/validate-email-address-in-javascript/46181
        * Does not block all invalid emails, but blocks out many of them. The only way to ensure
        * an email address is valid is to send a verification email.
        **/
        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/; // Regular Expression (String + @ + String + . + String)
            return re.test(email);
        }

        
        
    });
    </script>
    
    
    
  </body>
</html>
