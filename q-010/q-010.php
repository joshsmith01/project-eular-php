<?php
/**
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 *
 * Find the sum of all the primes below two million.
 *
 * Working with big numbers requires that I eliminate as many numbers as possible. Thus, I must eliminate all positive numbers above 2.
 */

function isPrime( $n ) {
	// Iterate to half of the supplied number, rounded up if necessary. I can't use the square root like I had originally planned.
	for ( $i = 3; $i <= ceil( $n / 2 ); $i ++ ) {
		if ( $n % $i == 0 ) {
			return false;
		}
	}

	return true;
}

$sum = 2;
for($i = 3; $i < 10; $i = $i + 2 ) {
	if( $i % 2 != 1) {
		continue;
	}
	if(isPrime($i)) {
		$sum += $i;
	}
}
echo $sum;


