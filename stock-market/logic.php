<?php

$names = array(

    array(
        "title1"=>"Mankani",
        "title2"=>"Manisha",
        "title3"=>"Mankani",
    ),
    array(
        "title1"=>"Ajay",
        "title2"=>"Mankani",
        "title3"=>"Ajay",
    ),
  array(
        "title1"=>"Mankani",
        "title2"=>"Swastik",
        "title3"=>"Mankani",
    ),

);


   $x = 0;

    foreach($names as $name)
    {
        $x++;
    $y= $x % 2;



    if ($y == 0){
     echo $name['title1'];
     echo " ";
    };
    


echo $name['title2'];



if ($y != 0){
    echo " ";
    echo $name['title3'];
   };



echo "<br/>";





}
?>