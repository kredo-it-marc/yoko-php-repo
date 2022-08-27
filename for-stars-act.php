<?php
    for($i=1; $i<=7; $i++)//displays break line element (br)
    {
       for($j=1; $j<=$i; $j++ ) //displays the stars
       {
            echo "*";
       }

       echo "<br>";
    }

    // number triangle Activity (Activity 12)
    for($i=1; $i<=5; $i++)//displays break line element (br)
    {
       for($j=1; $j<=$i; $j++ ) //displays the numbers
       {
            echo $j;
       }

       echo "<br>";
    }
?>