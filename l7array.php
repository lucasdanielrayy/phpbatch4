<?php

// =>Arrays
    // (i)Indexed Array  (Manual Array)
    // (ii) Associaive Array 
    // (iii) Multidimensional Array 


// (i) Indexed Array (Manual Array) 

$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
// echo $names;     //error
// print $names;    //error

echo count($names);     //5
var_dump($names);
print_r($names,false);


$color = ["red","green","blue","black","white"];
// echo $color;

echo count($color);     //5
print_r($color,false);
echo "<pre>".print_r($color,false)."</pre>";






















$maincolors = [
    ["red","green","blue"],
    ["pen","pencil","ruler"],
    ["paper","plastic"]
];

echo count($maincolors);
var_dump($maincolors);

echo $maincolors[0][0];     //red
echo $maincolors[1][2];     //red
echo $maincolors[2][1];     //red


$persons = array(
    array("name"=>"aung aung","age"=>20),
    array("name"=>"su su","age=>18")
);

$vippersons = [
    ["name"=>"aung aung","age"=>20],
    ["name"=>"su su","age"=>18],
    ["name"=>"nu nu","age"=>23]
];

echo count($vippersons);
var_dump($vippersons);

echo $vippersons[0]["name"];    //aung aung
echo $vippersons[0]["age"];     //20

echo $vippersons[2]["name"];   //su su
echo $vippersons[1]["age"];     //18
    
?>