<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

$letter = 'g';

if (!function_exists('aff')) {
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
}

/** Répète n fois le '-'.
 *
 * @param mixed $n
 */
function srn($n)
{
	return str_repeat(' - ', $n);
}

function diamond(string $letter): string
{
	echo '<h1 class="center">' . ($letter = strtoupper($letter)) . '</h1><hr>';

	$alpha = range('A', 'Z');
	if (in_array($letter, $alpha)) {
		$k = array_search($letter, $alpha);

		// $alpha = array_slice($alpha, 0, $k + 1);

		$n = ($k * 2 - 1); // Nbre de points
		$i = 0;
		while ($k--) {
			$arrL[] = srn($i) . $alpha[$k + 1] . srn($n - $i * 2) . $alpha[$k + 1] . srn($i) . '<br>';
			++$i;
		}
		$arrL[] = srn($i) . 'A' . srn($i) . '<br>';

		$arrH = $arrL;
		array_shift($arrH);
		$arrH = array_reverse($arrH);

		return join('<br>', array_merge($arrH, $arrL));
	}

	return '<p class="err">Seule une lettre doit-être donnée...</p>';
}

echo '';
echo diamond($letter);