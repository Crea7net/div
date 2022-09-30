<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL</title>
  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <?php
	include_once 'nav.php';
  require_once 'db.php';

  $queries = [
  	// 'CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY (id))',
  	// 'INSERT INTO users (name) VALUES ("jcharcosset")',
  	// your own sql request,
  	'SELECT * from users',
  ];

  foreach ($queries as $query) {
  	try {
  		$statement = $connection->prepare($query);
  		$statement->execute();
  	} catch (Exception $e) {
  		echo 'Erreur : ' . $e->getMessage() . '<br/>';
  	}
  }
  // aff($statement->fetchAll(PDO::FETCH_ASSOC));
  ?>

  <main>
    <h1>MySQL</h1>
  </main>

</body>

</html>