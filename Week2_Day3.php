<?php
	function print_table($number){
	  $i = 1;
    while ($i <= 10) {
      echo "{$number} x $i = " . $i*$number . "\n";
	    $i++;
    }
	}
	print_table(9)
?>
