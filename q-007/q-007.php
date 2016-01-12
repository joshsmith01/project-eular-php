<?php
/**
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 *
 * What is the 10001st prime number?
 * http://kahthong.com/2011/12/project-euler-problem-7
 */



/**
 * Iterate over and find every prime factor
 * Count every prime factor
 * Increment the count by the number of prime factors discovered
 *
 */

$last = 0;
$count = 0;
$max = 10001;


for ($i = 3; $count < $max - 1; $i++) {
	// Find the even numbers
	if ( $i % 2 == 0 ) {
		continue;
	}
	$d = 3;
	$x = sqrt($i);
	while ( ($i % $d != 0) && $d < $x ) {
		$d += 2;
	}
	if (   (($i % $d == 0 && $i != $d)  * 1 ) == 0 ) {
		$last = $i;
		$count++;
	}
}
echo $last;


//for($i = 3; $i < 10; $i++) {
//	if ($i % 2 != 1) {
//		echo $i  . '<br>';
//	}
//}