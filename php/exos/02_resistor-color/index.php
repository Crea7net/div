<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resistors</title>
  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>
  <?php
  $ROOT = ( ($_SERVER['HTTP_HOST']=='localhost') ? ('/'.explode('/',$_SERVER['REQUEST_URI'])[1]):'');
  echo '<link rel="stylesheet" href="'.$ROOT.'/assets/css/style.css">';
  ?>

  <link rel="icon" href="/favicon.ico" type="image/icon">
  <link rel="shortcut icon" href="/animated_favicon.gif" type="image/x-icon">
</head>

<body>

  <main class="resistors">
    <?php
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
	include_once 'resistors.php'; ?>
  </main>

</body>

</html>