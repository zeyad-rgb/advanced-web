<?php
   
    $x = 10;
    $y = 7;

    echo "$x + $y = "  .($x + $y). "<br>";
    echo "$x - $y = "  .($x - $y) . "<br>";
    echo "$x * $y = "  .($x * $y) . "<br>";
    echo "$x / $y = "  .($x / $y)  ."<br>";
    echo "$x % $y = "  .($x % $y)  ."<br>";
    $month = date('F', time());

    if ($month == "August") {
    echo "It's August, so it's really hot.";
    } else {
    echo "Not August, so at least not in the peak of the heat.";
    }

    for ($i = 1; $i <= 12; $i++) {
        echo "$i * $i = " . ($i * $i) . "<br>";
    }

    for ($i=1; $i<=7;$i++){
        
        
        echo "<br>";

        for ($j=1; $j<=7;$j++){
            echo "\t|".($i*$j)."|\t";
        }
    }

?>