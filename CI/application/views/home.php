<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <body>

        <?php 
        echo "<h3>" . $nb_rows . ' pokemon' . "</h3>";
        
        //print_r($pokemons);

        echo "<h3>Liste des pokemon disponibles</h3>";

        echo "<p>identifier de id=10 est : ". $v = $identifier->identifier . "</p>";

        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>" . "pokemon_id" . "</th>";
                    echo "<th>" . "identifier" . "</th>";
                    echo "<th>" . "height" . "</th>";
                    echo "<th>" . "weight" . "</th>";
                    echo "<th>" . "base_experience" . "</th>";
                    echo "<th style='width:125px;'>Action</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                foreach ($pokemons as $pokemon){
                    echo "<tr>";
                        echo "<td>" . $pokemon->pokemon_id . "</td>";
                        echo "<td>" . $pokemon->identifier . "</td>";
                        echo "<td>" . $pokemon->height . "</td>";
                        echo "<td>" . $pokemon->weight . "</td>";
                        echo "<td>" . $pokemon->base_experience . "</td>";
                    echo "</tr>";
                }
            echo "</tbody>";
            echo "<tfoot>";
                echo "<th>" . "pokemon_id" . "</th>";
                echo "<th>" . "identifier" . "</th>";
                echo "<th>" . "height" . "</th>";
                echo "<th>" . "weight" . "</th>";
                echo "<th>" . "base_experience" . "</th>";
                echo "<th style='width:125px;'>Action</th>";
            echo "</toot>";
        echo "</table>";
        ?>        
    </body>
</html>