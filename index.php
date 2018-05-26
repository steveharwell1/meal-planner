<!DOCTYPE html>
<html>
<body>

<?php
include "includes/conn.php";

$name = "spaghetti";
$sql ='SELECT Recipes.Name as Recipe_title, Ingredients.Name as ingredient, amount FROM RecipesIngredients INNER JOIN Recipes ON RecipesIngredients.R_id = Recipes.id INNER JOIN Ingredients on RecipesIngredients.G_id = Ingredients.id WHERE Recipes.name = "'.$name.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    echo "<h3>".$name."</h3>";
    while($row = $result->fetch_assoc()) {
        echo $row["ingredient"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

</body>
</html>
