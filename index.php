<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
require_once "includes/header.php";
require_once "includes/loginRequired.php";
echo "<div>";
echo "Hello, ".$name.' <a href="logout.php">Logout</a>';
echo "</div>";

echo '<div class="container">';

list_recipe($conn, "tacos");
list_recipe($conn, "spaghetti");

$conn->close();
?> 
</div>
</body>
</html>
