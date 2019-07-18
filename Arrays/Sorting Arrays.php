<?php
//Php sorting arrays
//The element in an array can be sorted in alphabetical or numerical order, descending and ascending .

$cars =array('Benz','vw','Toyota','Audi','Ford');
$num = array(12,424,53,2,52,522,6634,423,23);
//sort(): sorts arrays in ascending order array
/*for($x = 0; $x <count($cars); $x++){
    echo $x.$cars[$x]."<br>";
}*/

sort($cars);#soring the array in ascending order
for($x=0; $x <count($cars); $x++){
    echo $x.$cars[$x]."<br>";
}
echo "<br>";

rsort($cars);
for($x=0; $x <count($cars); $x++){
    echo $x.$cars[$x]."<br>";
}
echo "<br>";

sort($num);
for($a = 0; $a < count($num); $a++){
    echo $a.$num[$a]."<br>";
}
echo "<br>";


rsort($num);
for($a = 0; $a < count($num); $a++){
    echo $a.$num[$a]."<br>";
}
echo "<br>";
//asort():sorts associative arrays in ascending order, sorts according to value
$music = array("Martin Garrix"=>"Hold on and believe","Kygo"=>"Not ok","Brooks"=>"Lynx","Sunset Sons"=>"Somewhere Maybe");
asort($music);
foreach($music as $Artist => $song){
    echo "$Artist : $song <br>";
}
echo "<br>";

//ksort()sorts associative arrays in ascending order, sorts according to the key
ksort($music);
foreach($music as $Artist => $song){
    echo "$Artist : $song <br>";
}
echo "<br>";
?>