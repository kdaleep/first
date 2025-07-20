<!DOCTYPE html>
<html>
<body>

<?php
// $x = "Mr John";
// echo strlen($x);
// echo str_word_count($x);
// echo strpos($x, "o");

// echo strtoupper($x);
// echo strtolower($x);
// echo str_replace("Mr", "Miss", $x);
// echo strrev($x);
// echo trim($x);

// $text = "Hello world i am good";
// $newstr = explode(" ", $text);
// print_r($newstr);

// echo substr($text, 3,10);

// $x = "Hello World!";
// echo substr($x, -5, 3);

// echo(pi());
// echo(min(0, 150, 30, 20, -8, -200));
// echo(max(0, 150, 30, 20, -8, -200));
// echo(abs(-6.7));
// echo(sqrt(64));
// echo(round(0.60));
// echo(round(0.49));
// echo(rand(1,6));
// const x=123; 
// function display(){
//     // define("x", 123);

//     echo x;
// }

// display();

// $x = rand(1,7);
// switch($x)
// {
//     case 1: echo "Chest Day"; break;
//     case 2: echo "Back day"; break;
//     case 3: echo "Sholder Day"; break;
//     case 4: echo "Biceps Day"; break;
//     case 5: echo "Triceps Day"; break;
//     case 6: echo "Leg Day"; break;
//     deFault: echo "Rest Day"; break;

// }

// $num = array(1,2,3,4,5,6);
// foreach($num as $x)
// echo "$x <br>";



// $mem = array("PK"=>20, "Goku"=>40, "Ravan"=>1000);
// foreach($mem as $x=>$y)
// echo "$x : $y <br>";


// function display($name = "Daleep")
// {
//     return "Good Morning $name<br>";
// }

// echo display();



// function sum(...$x)
// {
//     $sum = 0;
//     $len = count($x);
//     for($i=0;$i<$len;$i++)
//     $sum += $x[$i];

//     return $sum;
// }


// echo sum(1,2,3);


// function myFamily($lastname, ...$firstname) {
//   $txt = "";
//   $len = count($firstname);
//   for($i = 0; $i < $len; $i++) {
//     $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
//   }
//   return $txt;
// }

// $a = myFamily("Doe", "Jane", "John", "Joey");
// echo $a;

// $arr = [1,"daleep",1.2,true,null];

// foreach($arr as $x)
// echo $x;



// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
// $x = "Ford";
// }
// unset($x);
// var_dump($cars);



// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
//   $x = "Ford";
// }

// $x = "ice cream";

// var_dump($cars);

// $fruits = array("Apple", "Banana", "Cherry");
// array_push($fruits, "Kela", "seb", "lichi", "amrood");
// $fruits[] = "Orange";
// array_pop($fruits);

// array_splice($fruits, 1,1);

// foreach($fruits as $f)
// echo "$f <br>";



$fruits = array("Apple", "Banana", "Cherry", "kela", "amrood", "lichi");
// array_splice($fruits, 4,2);

// unset($fruits[1]);
foreach($fruits as $f)
echo "$f <br>";


?>


</body>
</html>