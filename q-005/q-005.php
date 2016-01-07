<h1>Question 005</h1>
<!--2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.-->
<!--What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?-->

<?php
$a = 2520;




//echo $i;


function isDivisible($a) {
	foreach ( range( 11, 20 ) as $number ) {
		if (($a % $number == 0)) {
			continue;
		} else {
			return false;
		}
	}

	return true;
}

while ( isDivisible($a) == false ) {
	$a += 2520;

}
echo $a . '<br>';