<h1>Question 004</h1>

<!--  A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.-->
<!---->
<!--Find the largest palindrome made from the product of two 3-digit numbers.-->

<?php
$a = 999;
$b = 999;
$row = new SplFixedArray($a);
$col = new SplFixedArray($b);
$product = $row * $col;
$result = array();


for ($row = 1; $row < $a; $row++) {
	for ($col = 1; $col < $b; $col++) {
		$product = $row * $col;
		if( $product == strrev($product) ) {
			array_push($result, $product);
		}
	}
}
rsort($result);

echo $result[0];