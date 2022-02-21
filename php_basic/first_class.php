
<?php
    // echo "Hello World!"; echo '<br>';
    // echo "Hello World! hajsasjdsjd";

    // $message = "Hello World!";
    // echo '<br>';
    // echo $message;

    // $asib_age = 30;
    // $asib_name = "Asib";
    // $asib_height = 1.75;
    // $asib_weight = 60;
    // $sakib_age = 30;

    // if($asib_age > $sakib_age){
    //     echo "Asib is older than Sakib";
    // }
    // else if($asib_age < $sakib_age){
    //     echo "Asib is younger than Sakib";
    // }
    // else{
    //     echo "same age";
    // }
// $a = 50;
// $b = 20;
// $c = 30;


// if($firstNumber > $secondNumber){
//     echo "First number is greater than second number";
// }
// else if($firstNumber < $secondNumber){
//     echo "First number is less than second number";
// }
// else{
//     echo "First number is equal to second number";
// }

// if($a > $b && $a > $c){
//     echo "First number is greater than second number";
// }
// if($a < $b && $a < $c){
//     echo "First number is less than second number";
// }

// $marks = 32;

// if($marks >= 80 && $marks <= 100){
//     echo "You got A+";
// }
// else if($marks >= 70 && $marks <= 79){
//     echo "You got A";
// }
// else if($marks >= 60 && $marks <= 69){
//     echo "You got A-";
// }
// else if($marks >= 50 && $marks <= 59){
//     echo "You got B";
// }
// else if($marks >= 40 && $marks <= 49){
//     echo "You got C";
// }
// else if($marks >= 33 && $marks <= 39){
//     echo "You got D";
// }
// else if($marks >= 0 && $marks <= 32){
//     echo "You got F";
// }
// else{
//     echo "Invalid";
// }


// switch($marks){
//     case $marks >= 80 && $marks <= 100:
//         echo "You got A+";
//         break;
//     case $marks >= 70 && $marks <= 79:
//         echo "You got A";
//         break;
//     case $marks >= 60 && $marks <= 69:
//         echo "You got A-";
//         break;
//     case $marks >= 50 && $marks <= 59:
//         echo "You got B";
//         break;
//     case $marks >= 40 && $marks <= 49:
//         echo "You got C";
//         break;
//     case $marks >= 33 && $marks <= 39:
//         echo "You got D";
//         break;
//     case $marks >= 0 && $marks <= 32:
//         echo "You got F";
//         break;
//     default:
//         echo "Invalid";
//         break;
// }


//1-100
// for($i = 0; $i <= 100; $i++){
//     echo $i. "<br>";
    
// }

//odd numbers 1-100
//  for($i = 1; $i <= 100; $i+=2){
//     if($i % 2 != 0){
//         echo $i. "<br>";
//     }
//  }   
//odd numbers 1-100
//  for($i = 1; $i <= 100; $i++){
//     if($i % 2 != 0){
//         echo $i. "<br>";
//     }
//  }

// $city = array("Dhaka", "Chittagong", "Khulna", "Sylhet", "Rajshahi", "Barisal", "Rangpur");
// print_r($city);

// $run = array('shakib' => '30', 'asib' => '50', 'sakib' => '80');
// echo $run['asib'];


$city = ["Dhaka", "Chittagong", "Khulna", "Sylhet", "Rajshahi", "Barisal", "Rangpur"];
foreach($city as $key => $value){
    echo $key. " = ". $value. "<br>";
}
























?>