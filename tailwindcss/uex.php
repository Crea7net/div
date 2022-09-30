<!DOCTYPE html>
<html lang="en">

<head>
  <!-- https://daily-dev-tips.com/posts/making-a-fullscreen-vertical-slider-with-tailwind-and-eleventy/ -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    //<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>".replace(
      "HOST", location.hostname));
    //]]>
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          backgroundImage: {
            'avatar': "url('avatar.jpg')"
          }
        }
      }
    };
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .snap {
        scroll-snap-type: var(--scroll-snap-direction) var(--scroll-snap-constraint);
        /* scroll-snap-type: y mandatory; */
      }
      .snap-y {
        --scroll-snap-direction: y;
      }
      .snap-mandatory {
        --scroll-snap-constraint: mandatory;
      }
      .snap-start {
        scroll-snap-align: start;
      }
    }
  </style>
  <link rel="stylesheet" href="uex.css">
</head>

<body>
  
  <div class="card">
    <div class="card_part card_part-one"></div>
    <div class="card_part card_part-two"></div>
    <div class="card_part card_part-three"></div>
    <div class="card_part card_part-four"></div>
    <div class="card_part card_part-four"></div>
  </div>

</body>

</html>
