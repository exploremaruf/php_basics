<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
<?php

// a simple code 
$food = "Burger";
$Food = "Pizza";

echo "I love to eat " . $food . "<br>";

echo "I love to eat " . $Food. "<br>";


// php basic practices




$a=10;
$b=20;
$c=$a+$b;
echo "c=$c  <br>";



/*Circle Calculations*/

$r =5;
$area= pi() * $r;   
echo "$area <br>";



/*Triangle Calculations*/

$height=7;
$width =9;
$area = 0.5*$height*$width;
echo "$area <br>";



/*rectangle calculation*/

$length= 6;
$width=8;
$area= $length*$width;
echo "area is = $area <br>";


/*centigrade to farenheit*/
$celsius=40;
$farenheit= ($celsius*1.8)+32;
echo "Tempreture is $farenheit digree Farenheit <br>";


/*farenheit to celsius*/

$farenheit= 104;
$celsius= ($farenheit-32)/1.8;
echo "Tempreture is $celsius digree celsius <br>";

/*
Positive negative diagnosis*/

$num=2;
if ($num >0){
    echo "Number $num is Positive Number <br>";
}
elseif ( $num==0){
    echo "Number is zero <br>";
}
else {
    echo "Number $num is Negative <br>";
}


/* odd even diagnosis*/
$num=10;
if ($num%2){
    echo "Number $num is Odd Number <br>";
}
else{
    echo "Number $num is even Number <br>";
}

/* grade point diagnosis*/

$mark=75;

if ($mark>=80){
    echo "Grade is A+ And Pont 4.00 <br>";
}
elseif ($mark>=75){
    echo "Grade is A and point 3.75 <br>";
}
elseif ($mark>=70){
    echo "Grade is A- And Point 3.5 <br>";
}
elseif ($mark>=65){
    echo "Grade is B+ And Point 3.25 <br> ";
}
elseif ($mark>=60){
    echo "Grade is B and Point 3 <br>";
}
elseif ($mark>=55){
    echo "Grade is B- And Point is 2.75";
}
elseif ($mark>=50){
    echo "Grade is C+ And Point is 2.5 <br>";
}
elseif ($mark>=45){
    echo "Grade is C And Point is 2.25 <br>";
}
elseif ($mark>=40){
    echo "Grade is C And Point is 2 <br>";
}
elseif($mark>=35){
    echo "Grade is D  <br>";
}
else{
    echo "Fail";
}

//  if else nested
$a= 4;
if ($a>0){
    echo "a is positive <br>";
}
else{
    if( $a<0){
        echo "a is negetive <br>";
    }
    else{
        echo "$a is zero <br>";
    }
}


$age = 60;
switch ($age) {
    case 12:
        echo "you are 12 years old <br>";
        break;
    case 45:
        echo "Your are 45 years Old  <br>";
        break;
    case 56:
        echo "Your are 56 years old <br>";
        break;

    default:
        "Your age is Weird <br>";
        break;


}


echo(pi()). "<br>";

echo(min(0, 150, 30, 20, -8, -200))."<br>";

echo(max(0, 150, 30, 20, -8, -200)) . "<br>";

echo(abs(-6.7))."<br>";

echo(sqrt(64))."<br>";

echo(rand(1, 100))."<br>";

echo(round(0.60));


$x = 1.9e411;
var_dump($x);

$x = 5985;
var_dump(is_numeric($x)) . "<br>";


// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;


for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }


for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
  }

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
  }

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

  foreach ($members as $x => $y) {
    echo "$x : $y <br>";
  }

$colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
  }

$colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) {
    if ($x == "blue") continue;
    echo "$x <br>";
  }


  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
 

?>

</body>
</html>
