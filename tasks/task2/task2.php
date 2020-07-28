<?php
//----------------------------------P.1----------------------------------
$firstName = "Hossam";
$secondName = "Magdy";
echo "Hallo $firstName $secondName";

echo "<br>***********<br>";
//----------------------------------P.2----------------------------------
$x = "Maria" ;
if ($x == "Alice" || $x == "BOB"){
    echo"Hallo $x";
}
else if ($x != "Alice" || $x != "BOB"){
    echo "i sorry but don't greets strangers";
}

echo "<br>***********<br>";
//----------------------------------P.3----------------------------------
$firstString = "congratulations";
$secondString= "Hello";

if (strlen($firstString) > strlen($secondString)){
    echo "$firstString is longest";
}
else if (strlen($firstString) < strlen($secondString)){
    echo "$secondString is longest";
}
else{
    "Both have same lenght";
}

echo "<br>***********<br>";
//----------------------------------P.4----------------------------------
$ID= 6914;
$salaryPerHours = 200; //Dollars
$workedHoursPermonth = 160;
$monthSalary = $salaryPerHours * $workedHoursPermonth;
echo "Employee with id number $ID worked for $workedHoursPermonth and the salary his salary this month is $monthSalary";


echo "<br>***********<br>";
//----------------------------------P.5----------------------------------
$catA= 5;
$catB=5;
$mouse=4;
$catADistanceToMouse= abs($catA - $mouse);
$catBDistanceToMouse= abs($catB - $mouse);
if ($catADistanceToMouse>$catBDistanceToMouse){
    echo"Cat B reaches the mouse first";
}
else if ($catBDistanceToMouse>$catADistanceToMouse){
    echo"Cat A reaches the mouse first";
}
else {
    echo"the mouse moves and both cats cannot reach it";
}
echo "<br>***********<br>";
//----------------------------------P.6----------------------------------
$monciasBudget= 120;
$firstPackageName = "Microsoft's Package";
$firstPackagePrice = 120;
$secondPackageNAme = "Dell's Package";
$secondPackagePrice = 60;

if ($monciasBudget >= $firstPackagePrice && $monciasBudget >= $secondPackagePrice){
    echo "you can buy the two collections but we recommended this package (Microsoft's package)";
}
else if ($monciasBudget < $firstPackagePrice && $monciasBudget < $secondPackagePrice){

 echo "sorry, your budget is not enough";   
}
else if ($monciasBudget >= $secondPackagePrice){


    echo "the suitable collection for your budget is Dell's package which will coast 60$";
}

