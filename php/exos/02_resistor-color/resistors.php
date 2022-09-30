<h1>Resistors</h1><?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

if (!function_exists('aff')) {
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
}


const COLORS = [
	'black',
	'brown',
	'red',
	'orange',
	'yellow',
	'green',
	'blue',
	'violet',
	'grey',
	'white',
];

function colorCode(string $color): int
{
	// echo '<table>';
	// foreach (COLORS as $k => $v) {
	// 	echo '<tr><td>' . $v . '</td><td>' . $k . '</td></tr>';
	// }
	// echo '</table>';

	return array_keys(COLORS, $color)[0];
}

echo '<hr>' . colorCode('violet');