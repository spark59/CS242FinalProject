<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<body>
<?php
    /**
    * This script displays information on the ingredient 
    *
    */

    $unique_key = $_POST['input'];
    $userQuery = $connectCpanel->prepare("SELECT * FROM ingredients WHERE i_id=?");
    $userQuery->bind_param('i', $unique_key);
    if ($userQuery->execute()){
        $userQuery->store_result();
        $userQuery->bind_result($column1, $column2, $column3, $column4, $column5, $column6);
        $userQuery->fetch();
    
        echo "<h2>$column3</h2>";
        echo "<img border='2' src='$column2' width='300' height='200'>";
        echo "<h2>Description</h2>";
        echo $column4;
        echo "<h2>Nutritient Information</h2>";
        echo $column5;
        echo "<br><br>";
        echo "Uploaded: ";
        echo $column6;
    }
    else {
        echo "failed database access";
    }
?>
</body>
</html>











