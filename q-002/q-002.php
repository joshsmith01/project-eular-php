<h1>Question 002</h1>
<?php
//
//Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
//
//1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
//
//By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.

$a = 1;
$b = 2;
$c = 0;
$total = 2;

while ( ($a + $b) < 4000000 ) {
	for ( $i = 0; $i < 10; $i++) {

		$c = $a + $b ;
		$a = $b;
		$b = $c;

//		echo 'C variable' . $c . '<br>';
		if ( (!($c % 2 ))) {
			$total += $c;
		}

	}

}
echo 'Total variable ' . $total . '<br>';