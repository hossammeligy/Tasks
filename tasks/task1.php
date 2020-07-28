<?php

echo "Hallo PHP world";
echo"<br>********************<br>";

//PHP Arithmetic Operators
$x = 5;
$y = 1;

echo"$x +$y";
echo"$x -$y";
echo"$x *$y";
echo"$x /$y";
echo"$x %$y";

echo"<br>********************<br>";

//PHP Comparison Operators

$num1= 5;
$num2= 5;

if ($num1===$num2){
    echo"identical";
}
else if ($num1 == $num2){
    echo"equal";
}
else if ($num1 != $num2){
    echo"not equal";
// also there is "<>" means not equal too and has the same function of !==
}
echo"<br>********************<br>";


//PHP Logical Operators
$no1 = 2;
$no2 = 3;
if ($no1%2 == 0 && $no2%2 == 0){
    echo"both numbers are even";
}
else if ($no1%2 ==0 || $no2%2 ==0){
    echo"one of the those numbers is even";
}
echo"<br>********************<br>";

//PHP String Operators

$fName = "Hossam";
$lName = "Magdy";

echo"$fName.$lName";


