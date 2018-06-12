<?php
/*
File Name: index.php
Project Name: Rank popular words in string
Author: Muhammed Mafawalla
Version: 1.1
Author URL: https://mmafawalla.com/
Description: Business WordPress Theme
License: GNU General Public License

*/

//Initialisation

$str = "";
$arr = array();
$temporary_arr = array();

$str = "Lorem ipsum dolor dolor amet, suscipit dolor elit. suscipit eu scelerisque,
orci. Vivamus suscipit nisi suscipit";

//create an array from str separated by space
$str = explode(" ", $str);

echo "\n \n";

//iterate through str array
for ($i = 0; $i < count($str) ; $i++) {
  //Check if current word is in second array
  if(array_key_exists($str[$i], $arr)){
    //increment its value
    $arr[$str[$i]] += 1;
  }else{
    //add to second array
    $arr += [$str[$i] => 1];
  }

}

//sort second array according to value
arsort($arr);

echo "\n \n";
//dump ranked, sorted array
print_r($arr);
echo "\n \n";






?>
