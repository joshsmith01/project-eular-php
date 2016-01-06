<h1>Question 003</h1>
<?php
//
//
// The prime factors of 13195 are 5, 7, 13 and 29

// What is the largest prime factor of the number 600851475143 ?


// This function will determine if the number is evenly divisible. If it is it will echo out the number.
function isPrime( $n ) {
	for( $i = 3; $i <= sqrt($n); $i++) {
		if ( $n%$i == 0 ) {

			echo $i . '<br>';
		}
	}
	echo 'hi';
}

$a = 13195;
isPrime( $a );

//foreach ( range(1, $a)  as $num) {
//	echo gmp_strval(gmp_nextprime( $num ) ) . '<br>';
//}
?>