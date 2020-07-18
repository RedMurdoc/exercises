<?php
/**
 * FizzBuzz script
 * @Date 18/07/2020
 * @Author Lorenzo Benedetto
 */

for ($number = 1; $number <= 20; $number++) {

    // Checking if is FizzBuzz
    if ($number % 15 === 0) {
        echo "FizzBuzz\n";
        continue;
    }

    // Checking if is Fizz
    if ($number % 3 === 0) {
        echo "Fizz\n";
        continue;
    }

    // Checking if is Buzz
    if ($number % 5 === 0) {
        echo "Buzz\n";
        continue;
    }

    echo $number."\n";
}