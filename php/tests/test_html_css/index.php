<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="map">
    <section class="camion">
      <div class="caisse">
        <div class="vitre">
          <div class="chauffeur"></div>
        </div>
        <div class="roues">
          <div class="roue"></div>
          <div class="roue"></div>
        </div>
      </div>
      <div class="moteur"></div>
    </section>
  </div>

</body>

</html>