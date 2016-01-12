<h1>Question 003</h1>
<?php
//
//
// The prime factors of 13195 are 5, 7, 13 and 29.

// What is the largest prime factor of the number 600851475143 ?


// This function will determine if the number is evenly divisible. The function only returns true or false depending on whether or not the number supplied is a prime number or not.

$rustart = getrusage();




function isPrime($n) {
	// Iterate to half of the supplied number, rounded up if necessary. I can't use the square root like I had originally planned.
	for($i=3; $i <= ceil($n/2); $i++) {
		if( $n%$i == 0 ) {
			return false;
		}
	}
	return true;
}


$a = 600851475143;
//$a = 13195;
for($i=3; $i <= floor($a/2); $i = $i + 2) {
	if($a % $i == 0 ) {
		$y = $a / $i;
		if(isPrime($y)) {
			echo $y . '<br>';
			break;
		}
	}
}





// Script end
function rutime( $ru, $rus, $index ) {
	return ( $ru["ru_$index.tv_sec"] * 1000 + intval( $ru["ru_$index.tv_usec"] / 1000 ) )
	       - ( $rus["ru_$index.tv_sec"] * 1000 + intval( $rus["ru_$index.tv_usec"] / 1000 ) );
}

$ru = getrusage();
echo "This process used " . rutime( $ru, $rustart, "utime" ) .
     " ms for its computations\n";
echo "It spent " . rutime( $ru, $rustart, "stime" ) .
     " ms in system calls\n";