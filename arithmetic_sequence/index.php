<?php
/*
File Name: index.php
Project Name: Arithemtic sequence
Author: Muhammed Mafawalla
Version: 1.0
Author URL: https://mmafawalla.com/
Author Github URL: https://github.com/mmafawalla
Summary: Reads first values of an arithmetic sequence,
creates formula, lists first 100 values
License: GNU General Public License v3.0
*/

//Initialisation
$num_1 = 0;
$num_2 = 0;
$num_3 = 0;

$max_position =0;

$common_difference = 0;
$equation_secondHalf = 0;
$current_value = 0;

//Read first 3 numbers
fwrite(STDOUT, "First number of sequence: ");
$num_1 = (int)fgets(STDIN);

fwrite(STDOUT, "Second number of sequence: ");
$num_2 = (int)fgets(STDIN);

fwrite(STDOUT, "Third number of sequence: ");
$num_3 = (int)fgets(STDIN);

//Read the max position of sequence to generate
fwrite(STDOUT, "Generate list to what position: ");
$max_position = (int)fgets(STDIN);

//Check if max_position is not greater than 100
if($max_position > 100){
  echo "Error: Please enter a max position less than 100";
}else{
  /*
  Calculate common difference(d) through formula:
  an = a + (n-1)d HENCE:
  d = $num_2 - $num_1
  */
  $common_difference = $num_2 - $num_1;

  /*
  List values of sequence upto max position
  */
  for ($i= 1; $i<=$max_position; $i++) {
    $equation_secondHalf = ($i - 1) * $common_difference;
    $current_value= $num_1 + $equation_secondHalf;

    //Check if end of sequence to line break
    echo ($i == $max_position ? $current_value. "\n" : $current_value. ", ");
  }
}
