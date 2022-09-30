<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

define('ROOT', $_SERVER['HTTP_HOST'] . '/');

$uri = $uri_ori = strtolower($_SERVER['REQUEST_URI'] ?? '/');

$arr = explode('/', $uri);
array_shift($arr);

// aff($arr, 'Arr');

if ('/' !== $uri) {
	if (!(count($arr) - 1)) {
		$uri = substr($uri, 1);
		$uri = implode('', $arr) ?? 'index';
		$inc = $uri . '.php';
	} else {
		$inc = './user/user' . $arr[1] . '.php';
	}
}

$affUri = '<p class="ar">URI : ' . $uri_ori . '</p>';