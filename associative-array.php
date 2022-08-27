<?php
    //CREATING AN ASSOCIATIVE ARRAY
    //METHOD 1
    $person = ["name"=>"Nikko", "age"=>25, "address"=>"Tagum City"];

    //METHOD 2
    $person = array("name"=>"Nikko", "age"=>25, "address"=>"Tagum City");

    //Assigning values
    $fruits = [];
    // array_name[key] = value;
    $fruit["name"] ="apple";
    $fruit["color"] = "red";
    $fruit["price"] = 10.00;

    //DIsplaying indivual values
    //array_name[key]
    echo $fruit["name"];
    echo $fruit["color"];
    echo $fruit["price"];

    //USING foreach() loop
    foreach( $fruit as $key => $value)
    {
        echo "<p>$key is $value</p>";
    }

?>  