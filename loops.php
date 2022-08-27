<?php
// do-while loop
$num = 1; //initialize counter

do{
    //loop body or do-block
    echo "$num: is less than 5 <br>";
    $num++; //post-increment, update the counter
}while( $num < 5); //evaluate the condition

// for-loop
echo "<h1>For Loop</h1>";
for($num=1; $num<5; $num++)
{
    echo "$num: is less than 5 <br>";
}


echo "Git Test";
?>