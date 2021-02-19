<?php


    for ($x=1; $x<=rand(200, 300); $x++) {              //this loop runs for a number (between 200 to 300) times
        echo "Card ". $x .":       ".  rand(1000000000000, 2000000000000);
        echo "<br/>";                                   //creates  a new line
    }

?>
