<?php

    // => PHP looping

    // for
    // foreach
    // while
    // do..while

    $colorsones = ["red","green","blue","white","black","gray","pink"];
    echo count($colorsones);
    var_dump($colorsones);

    $coloroneskey = array_keys($colorsones);
    // echo $coloroneskey;  //error
    var_dump($coloroneskey);


    for($i=0; $i < count($colorsones); $i++){
        // echo $i;    //0 to 6

        // echo "This is indexed array or manual array by forloop = index key is ". $i . " and value is = ". $colorsones[$i] . "<br/>";

        echo "This is indexed array or manual array by forloop = index key is ". $coloroneskey[$i] . " and value is = ". $colorsones[$i] . "<br/>";
    }

    foreach($colorsones as $colorsone){
        echo "This is indexed array or manual array by foreach = ". $colorsone;
    }

    foreach($colorsones as $key=>$colorsone){
        // echo $key;
        echo "This is indexed array or manual array by foreach = ".$key . " and value is ". $colorsone;
    }

    $x = 0;
    while($x < count($colorsones)){
        // echo $coloones[$x];
        // $x++;


        // echo "This is indexed array or manual array by while = index key is ".$x . "and value is ".$colorsones[$x];

        echo "This is indexed array or manual array by while = index key is ".$coloroneskey[$x] . " and value is ". $colorones[$x];
        $x++;
    }

    $y = 0;

    do{
        // echo "This is indexed array or manual array by while = index key is ".$y . "and value is ".$colorsones[$y];

        echo "This is indexed array or manual array by while = index key is ".$coloroneskey[$y] . " and value is ". $colorones[$y];
        $y++;
    }while($y < count($colorsones));





?>