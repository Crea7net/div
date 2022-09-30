<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Router</title>
  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>
  	<link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

  <?php include_once 'nav.php'; ?>

  <main>
    <h1>Router</h1>
    <p>Page Accueil</p>
    <?php include_once 'uri.php'; ?>
  </main>

</body>

</html>