<?php

//FUNCTIONS:
//A function in PHP is a reusable block of code that performs a specific task. 
//It helps to keep code organized and avoid repetition.


function sum (){
     echo 'Hello';
}
sum();


//Parameters in Function:

echo '<br>';
function Add ($a, $b){//parameterers
//     $value =  3 + 4;
//     echo 'The sum value is:'.$value; 

echo 'A value  ' .$a .'<br>';
echo 'B value  ' .$b .'<br>';
echo $a+$b .'<br>';

}
echo '<br>';
add(5, 6);//arguments values
echo '<br>';
add(55, 6);


//Intro function 
echo '<br>';
function intro($name){
   echo 'My name is '. $name .'<br>';
}
intro('Muhammad Suleman');
intro('Muhammad Suleman khawaja');



//Return in Function:
//A function can return a value using the return statement.

echo '<br>';
function sup($d, $e){
     return $d**$e;
}
$value = sup(3,5);

echo $value +14;

?>
