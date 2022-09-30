<?php

declare(strict_types=1);

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

echo '<h2>Hamming</h2>';

$a = 'GAGCCTACTAACGGGAT';
$b = 'CATCGTAATGACGGCCT';
//    ^ ^ ^  ^ ^    ^^ → 7 diff
// $b = $a;

function distance(string $a, string $b): int
{
	$nb = strlen($a);
	if ($nb !== strlen($b)) {
		throw new \BadFunctionCallException('DNA strands must be of equal length.');
	}

	// 1st soluce
	// $diff = 0;
	// for ($i = 0; $i < $nb; ++$i) {
	// 	$diff += ($a[$i] !== $b[$i]);
	// }

	// return $diff;

	return count(array_diff_assoc(str_split($a), str_split($b)));
}

echo distance($a, $b);