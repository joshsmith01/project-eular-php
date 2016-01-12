<?php
/**
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 *
 * a2 + b2 = c2
 * For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
 *
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
 * http://kahthong.com/2011/12/project-euler-problem-9
 * Here is some more great practice:
 * http://www.primitivetype.com/articles/php_nested_for_loops.php
 */






$product = 0;
for ( $i = 2; ; $i ++ ) { // PHP, like C, considers the second expression true, implicitly. Thus it could potentially run indefinitely.
	for ( $j = 1; $j < $i; $j ++ ) {
		$a = ( $i * $i ) - ( $j * $j ); // $a starts as 3. This $i has to be less than $b or $c so it must start at 2 it also cannot be zero.
		$b = 2 * $i * $j;               // $b starts as 4. Therefore this is the lowest number, that is greater than 3.
		$c = ( $i * $i ) + ( $j * $j ); // $c starts as 5. Ditto for 4.
		if ( $a + $b + $c == 1000 ) {
			$product = $a * $b * $c;
			break 2;
		}
	}
}
echo $product;