<?php
/*
File Name: index.php
Project Name: Rank popular words in string
Author: Muhammed Mafawalla
Version: 1.1.5
Author URL: https://mmafawalla.com/
Author Github URL: https://github.com/mmafawalla
Summary: Splits str to array, iterates while comparing against
a second array, finally sorts according to value descending
License: GNU General Public License v3.0

*/

//Initialisation

$str = "Apple stock traded lower by more than 1 percent Friday morning, but Bank of
America analyst Wamsi Mohan says investors shouldn't jump to conclusions based on the report.
Mohan said initial media reports in 2017 suggested iPhone orders of well over 100 million units.
Those estimates were then revised to about 100 million before the launch and then revised again
between 60 million and 80 million after the iPhone X launch was delayed.";
$arr = array();
$temporary_arr = array();



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
