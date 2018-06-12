<?php

require_once "includes/conn.php";



function list_recipe($conn, $name){
    $sql ='SELECT Recipes.Name as Recipe_title, Ingredients.Name as ingredient, amount FROM RecipesIngredients INNER JOIN Recipes ON RecipesIngredients.R_id = Recipes.id INNER JOIN Ingredients on RecipesIngredients.G_id = Ingredients.id WHERE Recipes.name = "'.$name.'"';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo '<div id="'.$name.'" class="box" draggable="true" ondragstart="drag(event)">';
        echo "<h3>".$name."</h3>";
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>".$row["amount"]." ".$row["ingredient"]."</li>";
        }
        echo "</ul>";
        echo "</div>";
    } else {
        echo "0 results";
    }
}