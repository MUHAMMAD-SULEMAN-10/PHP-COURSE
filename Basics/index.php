<?php


// Variable Scope in PHP:

// Variable scope in PHP defines where a variable 
// can be accessed in a script. There are four types 
// of variable scopes in PHP:

// Local Scope (Inside a function)
// Global Scope (Outside a function)
// Static Scope (Retains value between function calls)
// Super Global Variables (Accessible anywhere)


// 1. Local Scope:

// A variable declared inside a function is local
//  and cannot be accessed outside the function.

// Example:
// function myFunction() {
//     $x = 10; // Local variable
//     echo "Inside function: " . $x . "<br>";
// }

// myFunction();
// Trying to access $x outside the function
// echo "Outside function: " . $x; //  Error: Undefined variable



// 2. Global Scope:

// A variable declared outside a function has global 
// scope and cannot be accessed directly inside a function.

// Example2:
// $x = 20; // Global variable
// function myFunction() {
//     echo "Inside function: " . $x; //  Error: Undefined variable
// }
// myFunction();
// echo "Outside function: " . $x; //  Works

// Rule: A global variable cannot be accessed inside 
// a function unless 
// you use the global keyword or $GLOBALS array.




// 3. Static Scope

// A variable declared as static inside a function
//  retains its value between function calls.

// Example3:
// function counter() {
//     static $count = 0; // Static variable
//     $count++;
//     echo "Count: " . $count . "<br>";
// }

// counter();
// counter();
// counter();

// Output:
// Count: 1
// Count: 2
// Count: 3
// Rule: A static variable maintains its value between function calls instead of being reinitialized every time.


// 4.Super Global Variables:
// Superglobals are built-in PHP variables 
// that are always accessible, regardless of scope.



// Key Takeaways:

// ✔ Local variables exist only inside functions.
// ✔ Global variables exist outside but require global or $GLOBALS inside functions.
// ✔ Static variables retain their values across function calls.
// ✔ Super global variables are accessible everywhere.


// echo 'Hello World';


// $var = 100;


//Php coomments:


// $var = 120;
// $var = $var+20;
#$var2 = 10;
// echo $var+$var2;

//Multilines comments:

/*$var = 120;
 $var = $var+20;
$var2 = 10;
echo $var+$var2;
*/


//VARIABLES:
//A variable in PHP is the name of the memory location that holds data.
//In PHP, a variable is declared using the $ sign followed by the variable name. 

$name = 'M Suleman';//var intilization 
$age = 24;//number type
$amount = 344.55;//float type variable
$boolean = true;//boolean type variable 
$array = ['Muhammad', 'Suleman', 'Afzal',"Khawaja"];//Array type variable you can contain more than variables best for multitype variables 

// $food =  new Food(); this object type variable

//KNOW THE TYPE OF VARIABLE:
echo gettype($array);
echo '<br>';
echo gettype($name);


//NUMERICAL ARRAY:
//aarry are particular useful for managing colleaction of related data

//types:

#index array:
#associative array 
#multidimensional array

//Index Array:
echo '<br>';
//              0         1         2       3
$arr = array('Apple' , 'Banana', 'Cherry', 34);
var_dump($arr[0]);//array has two parts one is the [index part and one is the valie part]

echo '<br>';

//Using New array syntax:
$arr =  ['Apple' , 'Banana', 'Cherry', 34];
var_dump($arr[2]);

//ASSOCIATIV ARRAY/NAMED ARRAY:
//An array where each key has its own specific value.

//use this array when we have json data:
//in this we have property and key value data in pairs
//Associative arrays are used to store key value pairs. For example, 
//to store the marks of different subject of a student in an array, 
//a numerically indexed array would not be the best choice.

echo '<br>';
$arr = [ 'name'=> 'Muhammad', 'age'=> 24, 'Adress'=> 'Block 22'];
var_dump($arr['age']);


//MULTIDIMENSSIONAL ARRAY:

//use for JSON data 
//A multidimensional array in PHP is a data structure that allows 
//you to store multiple values in a single variable //integer or string 

$students = [
    'student1'=> [
        'name'=> 'Muhammad ',
        'age'=> 24, 
        'phone'=> '000000',

        'address'=> [
            'country'=>'Pak',
            'province'=> 'Punjab',
            'state'=> 'first'
        ]
    ],

    'student2'=>[
        'name'=> 'Ali', 
        'age' => 23,
        'phone'=> '1111111'
        ]

    ];

   //first method to access values 
   // var_dump($students['student1']);//whole array will print

   // But We want to just access the student1 phone 
   var_dump($students['student1']['phone']);//access just phone number

    echo '<br>';
    $student1_phone = $students['student1']['phone'];
    echo "First student's phone number is: " . $student1_phone;


    //Acessing nested array address data form multidimensional array
    echo '<br>';
    var_dump($students['student1']['address']['country']);//accessing the country from nested  array adress
    
   

    //OPERATORS:

  
    #ARTHEMATIC OPERATORS:
    // ! = + - * % / : & |

    echo '<br>';
    var_dump(3+5);
    var_dump(3-5);
    var_dump(3*5);
    var_dump(20/5);
    var_dump(20%5);

    #Comparison Operators:
    // == != < >

    //==	Compares values only (loose comparison)

    echo '<br>';
    var_dump(1 == 1 );
    var_dump(1 != 2 );//working apposite to == operator ! change the result false to true and vise versa.
    var_dump(1 < 2 );
    var_dump(1 > 2 );
    var_dump(1 >= 2 );
    var_dump(1 <= 2 );

    //IDENTITY OPERATOR
    //  ===

    //Compares values and data types (strict comparison)
    
    $a = 10;//int
    $b = '10';//string
    echo '<br>';
    var_dump($a == $b); //==	Compares values only (loose comparison)
    var_dump($a === $b);//using === answer will be false because it will check data type and values

   //Logical Operators:
   // && || !

   echo '<br>';
   var_dump( 1==1 && 2==2);//both condtions are true result will be true or vise cersa
   var_dump( 1==1 || 2==3);//one condition is true then answer will be true or vice versa

   // ! operator 
   var_dump( 1 != 2);//yes one is not equal to 2 answer is true

   //ASSIGNMENT OPERATOR:
   // =, +=, *=, %=, /=, **=

    echo '<br>';
    $a = 10;
    // $a +=4;  //a = a+4;
    // $a /=4;
    // $a %=4;
    $a **=4; // 10*10*10*10 
    var_dump($a);


    //UNIERY OPERATORS: //important 
    // -, +, --, ++
    echo '<br>';

    $b = -5; //-5
    $c= +5;

    $b++; //ans = -4 // becoz -5+1 = -4 
    var_dump($b);
    var_dump($c);


    //Logical part using ++ and --

    echo '<br>';
    $d = 5;
    $e = $d++;
    var_dump($e);// output will be 5 becoz $d has first assign value 5 to $e and after increment in his own value

    echo '<br>';
    $d = 5;
    $e = ++$d;
    var_dump($e); // ans is 6 becoz it has first increment in his value then assign 

    
    
    //CONTROL STRUCTURE IN PHP:

    //A control structure in PHP is a mechanism that controls
    // the flow of execution in a script. It includes conditional
    // statements (if, else, switch) and 
    // loops (for, while, foreach, do-while). 


    //IF ELSE CONDITION:
    //if-else → Use when checking one or two conditions.

    echo '<br>';
    $value = false;
     
    if ($value){ //if the condition is false then complier not execute the statement inside the block
        var_dump('the condition is true');
    
    }else{//compiler will execute this statement if condition is false
        var_dump('The condition is flase');
    }

   //IF ELSE IF Condition:
   //if-elseif-else → Use when checking multiple conditions.

   echo '<br>';

   if( 1 == 3){
    var_dump('The first condition is true!');

   }elseif(1 == 4){
    var_dump('the 2nd condition is true!');
   }
   elseif(3 == 3){
    var_dump('the 3rd condition is true!');
   }
   else{
    var_dump('All conditions are false!');
   }

   echo '<br>';

   $day = 'Friday';

   if($day == 'Monday'){
    var_dump('Align on goals');
   }elseif($day == 'Tuesday'){
    var_dump('Make the plan');
   }
   elseif($day == 'Wednesday'){
    var_dump('team the plan');
   }
   elseif($day == 'Thursday'){
    var_dump('Practice the plan');
   }
   elseif($day == 'Friday'){
    var_dump('  Innovation day');
   }
   elseif($day == 'Saturday'){
    var_dump(' Skill deliver plan');
   }
   else{
    var_dump('Strategic reflection');
   }


   //SWITCH STATEMENT: 
   //switch is a method
   //if we do not want to use if elese else multiple times then we use switch
   //switch → Use when checking multiple fixed values (like menu options).
   echo '<br>';

   $day = 'Friday';

   switch($day){
    case 'Monday'://case is a condition will compare the values 
    var_dump('The day is Monday');
    break;
    case 'Tuesday':
    var_dump('The day is Tuesday ');
    break;
    case 'Wednesday':
    var_dump('The day is Wednesday');
    break;
    case 'Thursday':
    var_dump('The day is Thursday');
    break;
    case 'Friday':
    var_dump('The day is Friday');
    break;
    case 'Saturday':
    var_dump('The day is Saturday');
    break;
default:
    var_dump('All days are wrong ');
    break;
}

?>

<!-- <h1>This is valus is: <?= $var ?></h1> -->
<!-- <h1>This is valus is: <?php echo $var ?></h1> -->

<h1>Name is : <?= $name ?></h1>
<h1>Name is : <?= $age ?></h1>
<h1>Name is : <?= $amount ?></h1>
<h1>Name is : <?= $boolean ?></h1>



