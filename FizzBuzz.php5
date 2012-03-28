<?php


function FizzBuzz($n) {
	$f = "Fizz";
	$b = "Buzz";
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 15 == 0) {
			print $f . $b . "\n";
		} else if ($i % 5 == 0) {
			print $b . "\n";
		} else if ($i % 3 == 0) {
			print $f . "\n";
		} else {
			print $i . "\n";
		}
	}
}

FizzBuzz(100);

