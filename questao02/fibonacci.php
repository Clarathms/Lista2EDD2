<?php
// PHP Program to find n'th
// fibonacci Number

function fib($n)
{
	$phi = (1 + sqrt(5)) / 2;
	return round(pow($phi, $n) / sqrt(5));
}

// Driver Code
$n = 9;
echo fib($n) ;

// This code is contributed by Ryuga
?>
