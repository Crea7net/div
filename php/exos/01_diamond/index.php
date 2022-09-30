<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diamond</title>

  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>

  <?php
  $ROOT = (('localhost' == $_SERVER['HTTP_HOST']) ? ('/' . explode('/', $_SERVER['REQUEST_URI'])[1]) : '');
  echo '<link rel="stylesheet" href="' . $ROOT . '/assets/css/style.css">';
  ?>

  <link rel="icon" href="/favicon.ico" type="image/icon">
  <link rel="shortcut icon" href="/animated_favicon.gif" type="image/x-icon">
</head>

<body>
  <h1><a href="https://exercism.org/tracks/php/exercises/diamond" target="_blank">Énoncé du problème</a></h1>
  <main class="diamond center">
    <?php
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
	include_once 'diamond.php'; ?>
  </main>

</body>

</html>