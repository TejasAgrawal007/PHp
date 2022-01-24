<?php



/*
syntex - 
if(condition){
    //code...
}

if(condition){
    //code...
}else{
    //logic...
}
*/


// $x = 12;
// if($x<100){
//     echo "$x is less Than 100";
// }



// $x = 122;
// if($x<100){
//     echo "$x is less Than 100";
// }else{
//     echo "$x is Not Less Than 100";
// }



// $num = 12;
// if($num%2 == 0){
//     echo "$num is Even Number";
// }
// else{
//     echo "$num is an Odd Number";
// }



// *** Switch Case Statement ***


// $car = "Cretta";


// switch($car){
//     case 'Audi':
//         echo "Audi is The Best", "<br>";
//         break;

//     case 'BMW':
//         echo "BMW is The Amazing", "<br>";
//         break;

//     case 'Lambo':
//         echo "Lambo is The Stunning!", "<br>";
//         break;

//     default:
//         echo "Your Case is Invalid for The Abhove Cases!";
//         break;

// }


/*
Write a php program to find the Grade of The Student.
-
    90-100 --> Exellent!
    70-90 --> Good
    60-70 --> Avarage
    50-60 --> Try You Best 
    0 - 50 --> Better Luck Try Again || You are Failed
*/


$grade = 'A';

switch ($grade) {
    case 'A':
        echo "Your are Excellent";
        break;
    case 'B':
        echo "Your are Good";
        break;
    case 'C':
        echo "Your are Avarage";
        break;
    case 'D':
        echo "Try You Best";
        break;
    case 'F':
        echo "Better Luck Try Again || You are Failed";
        break;
    
    default:
        echo "Invalid Grade!";
        break;
}



?>