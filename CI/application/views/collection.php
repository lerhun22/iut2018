<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <body>

        <?php 
        echo "<h3>Collection de " ."</h3>";

        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>" . "collector_login" . "</th>";
                    echo "<th>" . "base_experience" . "</th>";
                    echo "<th>" . "identifier" . "</th>";
                    echo "<th style='width:125px;'>Action</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                foreach ($collection as $pokemon){
                    echo "<tr>";
                        echo "<td>" . $pokemon->collector_login . "</td>";
                        echo "<td>" . $pokemon->base_experience . "</td>";
                        echo "<td>" . $pokemon->identifier . "</td>";
                    echo "</tr>";
                }
            echo "</tbody>";
            echo "<tfoot>";
            echo "<th>" . "collector_login" . "</th>";
            echo "<th>" . "base_experience" . "</th>";            
            echo "<th>" . "identifier" . "</th>";
            echo "<th style='width:125px;'>Action</th>";
            echo "</toot>";
        echo "</table>";
        ?>        
    </body>
</html>