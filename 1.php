<?php

$a=1;
$b=100;

do {
    if(($a%5==0)and($a%3==0)){
        echo "FizzBuzz<br>";
    } else if($a%3==0){
        echo "Fizz<br>";
    } else  if($a%5==0){
        echo "Buzz<br>";
    } else {
        echo $a."<br>";
    }


} while($a++ < $b)

?>