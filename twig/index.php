<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

// On charge l'autoload qui contient les packages de composer
require_once './vendor/autoload.php';

// $loader = new \Twig\Loader\ArrayLoader([
// 	'index' => "Hello, {{ name }}<br><br>
//   {{ ['Rémi', 'Pierre', 'Paul', 'Jacques'] | join(', ',' & ') }} !",
// ]);
// $twig = new \Twig\Environment($loader);
// echo $twig->render('index', ['name' => 'Lionel']);

// On charge le loader Twig et on lui indique où se trouvent les templates HTML
$loader = new \Twig\Loader\FilesystemLoader('./views');
// On desactive le cache
$twig = new \Twig\Environment($loader, [
	'cache' => false,
]);

// On charge la vue Twig
$template = $twig->load('pages/page.htm');

include_once './parts/items.php';
$title = 'Ma page Twig';

// On rend notre vue en lui passant des variables si besoin
echo $template->render(
	[
		'firstname' => 'Lionel',
		'arr'       => $items,
		'titre'     => $title,
	]
);