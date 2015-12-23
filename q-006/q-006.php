<?php
/*
The sum of the squares of the first ten natural numbers is,

12 + 22 + ... + 102 = 385
The square of the sum of the first ten natural numbers is,

( 1 + 2 + ... + 10)2 = 552 = 3025
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum .
*/

$a = 1;
$b = 100;


function sumOfSquares ( $num1, $num2 ) {
	foreach (range( $num1, $num2 ) as $number ) {
		$squaredNumber = pow($number, 2);

		$total += $squaredNumber;

	}
	echo "The total of sumOfSquares is $total" . '<br>';
	return $total;
}


function squareOfSum( $num1, $num2 ) {
	foreach ( range( $num1, $num2 ) as $number ) {
		$total += $number;

	}
	$grandTotal = pow($total, 2);
	echo "The total of square of sums is $grandTotal" . '<br>';
	return $grandTotal;
}

function diffInSums( $grandTotal, $total) {
	$superGrand = $total - $grandTotal;
	echo "The super grand total is $superGrand" . '<br>';
}


//sumOfSquares(1, 10);
//squareOfSum(1, 10);
diffInSums(sumOfSquares( $a, $b ), squareOfSum( $a, $b ));