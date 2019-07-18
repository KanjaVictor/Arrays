<?php

//Php Arrays
#Defining an array you have to use the function array() :it makes the program know that you want to list items

# Indexed Array(use of an index)
//$variableName = array('Benz','toyota')

$cars = array('Benz','Toyota','Audi','Ford');

//$cars[0] =='benz'
//$cars[1] =='toyota'
echo $cars[0];
echo"<br>";
echo $cars[2];
echo"<br>";
echo "I like ".$cars[0].", ".$cars[1].", ".$cars[2]." and ".$cars[3].".";
echo"<br>";
//method 1

count($cars);
$num_cars =count($cars);
//echo $num_cars;

//method 2

echo count($cars);
echo"<br>";
//for(init count; test count; increment count;){}
for($x = 0; $x < $num_cars; $x++){
    echo $x.".".$cars[$x]."<br>";
}

#Associative Array(use of a key)
//Associative arrays are arrays that use named keys that you assign to them.

//The country  is the key and the food is the value for each key.
$food = array("Uganda"=>"Matoke", "Kenya"=>"Sembe","Tanzania"=>"Wali");
echo $food["Uganda"];
//echo out i love matoke , sembe and wali.
echo"<br>";
echo "I Love ".$food["Uganda"].", ".$food["Kenya"]." and ".$food["Tanzania"].".";

echo"<br><br>";
foreach($food as $country =>$dish){
    echo $country. " : " .$dish."<br>";
}

echo"<br>";
$electronics = array();#empty array

$electronics['Phone']='Huawei';
$electronics{'Laptop'}='Lenovo';
$electronics['TV']='Samsung';

foreach($electronics as $device => $brand){
    echo  $device." : ".$brand."<br>";
}
//assignment : Create two functions ; one that takes an indexed array
// and the second one that takes in an associative array argument and echos out each item.

#1)Indexed array
$shoes = array('Converse','Nike','Adidas','Vans',);
count($shoes);
$num_shoes = count($shoes);
for($a = 0; $a < $num_shoes; $a++){
    echo $a.$shoes[$a]."<br>";
}

echo "<br>";
#2)Associative arrays
$car= array("Germanys"=>"Mercedes", "USA"=>"Ford", "Japans"=>"Subaru", "Japan"=>"Toyota", "Germany"=>"BMW");

foreach($car as $nation => $Brand){
    echo $nation. " : " .$Brand."<br>";
}
