<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

function aff($var, $txt = null)
{
	echo '<pre>' . (($txt) ? $txt . ' : ' : '');
	var_dump($var);
	echo '</pre>';
}

$pages = ['Pier', 'Pol', 'Jack'];
echo '<nav><a href="/">Accueil</a>';
foreach ($pages as $page) {
	echo ' <a href="../' . $page . '">' . $page . '</a>';
}
echo ' <a href="/user/1">User 1</a>';
echo ' <a href="/user/2">User 2</a>';

echo '</nav>';