<?php

// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";



// $cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);

// 1. PHP Indexed Arrays

// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// // Using Loop
// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);

// for($x = 0; $x < $arrlength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

//2. PHP Associative Arrays

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";


// Using LOop
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }

// 3. PHP - Multidimensional Arrays
// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }

?>