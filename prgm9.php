<?php

function isPrime($number) {

if ($number <= 1) {

  return false;

}

if ($number <= 3) {

  return true;

}

if ($number % 2 == 0 || $number % 3==0) {

  return false;

}

for ($i = 5;$i*$i<= $number; $i+=6) {
   if ($number%$i == 0 || $number % ($i + 2) == 0 ) { 
      return false;
   }
}
   return true;

}

echo "Prime Numbers: ";

for ( $i = 2 ; $i<= 50 ; $i++) {
  if (isPrime($i)) {
    echo $i."";

}

}
 
echo "\nFibonacci Series: ".

$n = 10; // Number of Fibonacci numbers to generate

$a = 0;

$b=1;

for ($i=0; $i<$n; $i++) {

   echo $a."";

   $c=$a+$b;

   $a = $b;

   $b=$c;

 }
 ?>