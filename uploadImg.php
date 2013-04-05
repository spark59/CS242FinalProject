<?php
    /**
    * Source code from: http://www.9lessons.info/2011/08/ajax-image-upload-without-refreshing.html
    *
    */
    session_start();
    include("connect.php");
    $path = "uploads/";
	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST)) {
        $name = $_FILES['photoimg']['name'];
        $size = $_FILES['photoimg']['size']; 
        if(strlen($name))
        {
            list($txt, $ext) = explode(".", $name);
            if(in_array($ext,$valid_formats))
            {
                if($size<(1024 * 1024)) // Max image file size is 1 MB
                {
                        $actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
                        $tmp = $_FILES['photoimg']['tmp_name'];
                        if(move_uploaded_file($tmp, $path.$actual_image_name))
                        {
                            //SQL QUERY INSERTS A INGREDIENT TUPLE
                            // image is stored as a file in server, not in database
                            // image name is stored in database
                            
                            $f_image = $path.$actual_image_name; 
                            $f_name = strip_tags($_POST['name']);
                            $f_description = strip_tags($_POST['descr']);
                            $f_nutrients = strip_tags($_POST['nutInfo']);
                            
                            $preparedStatement = $connectCpanel->prepare("INSERT INTO ingredients (image, name, description, nutrients) VALUES(?, ?, ?, ?)");
                            $preparedStatement->bind_param('ssss', $image, $name, $description, $nutrients);
                            $image = $f_image;
                            $name = $f_name;
                            $description = $f_description;
                            $nutrients = $f_nutrients;
                            $preparedStatement->execute();
                            $preparedStatement->store_result();
                              
                            echo "<img src='uploads/".$actual_image_name."'  class='preview'>";
                        }
                        else
                            echo "failed";
                }
            else
                echo "Image file size max 1 MB";					
            }
            else
                echo "Invalid file format..";	
        } 
        else
            echo "Please select image..!";
            
        exit;
    }
    
?>