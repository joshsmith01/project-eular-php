<h1>Question 003</h1>
<?php
//
//
// The prime factors of 13195 are 5, 7, 13 and 29

// What is the largest prime factor of the number 600851475143 ?


// This function will determine if the number is evenly divisible. If it is it will echo out the number.
//

function isPrime($n) {
	for($i=3; $i <= ceil($n/2); $i++) {
		if( $n%$i == 0 ) {
			return false;
		}
	}
	return true;
}


$a = 13195;
for($i=3; $i <= floor($a/2); $i = $i + 2) {
	if($a % $i == 0 ) {
		$y = $a / $i;
		if(isPrime($y)) {
			echo $y.PHP_EOL;
			break;
		}
	}
}