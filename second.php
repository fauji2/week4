<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

</body>
</html>


setcookie("user", "Ahmed", time( ) + (86400 * 30), "/");
#setcookie("user", "Ahmed", time() - 3600);
if(!isset($_COOKIE["user"])) {
    echo "Cookie user is not set!";
    } else {
    echo "Cookie user is set!<br>";
    echo "Value is: " . $_COOKIE["user"];

    
    }
?>
