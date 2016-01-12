<?php
// Print 5 asterisks
//for( $i = 0; $i < 5; $i++) {
//	echo '*' . '<br>';
//}


//for($row = 0; $row < 5; $row++) {
//
//	for($col = 0; $col < 5; $col++) {
//		echo '*';
//	}
//	echo '<br>';
//}

//$star = '*';
//for($row = 1; $row <= 5; $row++) {
//	for($col = 1; $col <= $row; $col++) {
//		echo $star;
//	}
//	echo '<br>';
//}

//$star = '*';
//
//for($row = 1; $row <= 5; $row++) {
//	for($col = 5; $col >= $row; $col--) {
//		echo $star;
//	}
//	echo '<br>';
//}


$star = '*';

for($row = 1; $row <= 5; $row++) {
	for($col = 1; $col <= ( $row > 3 ? 6 - $row : $row ); $col++) {
		echo $star;


	}
	echo '<br>';
}