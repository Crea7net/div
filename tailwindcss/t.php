<!DOCTYPE html>
<html lang="en">

<head>
  <!-- https://daily-dev-tips.com/posts/making-a-fullscreen-vertical-slider-with-tailwind-and-eleventy/ -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider</title>
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

          animation: {
            mat: "mat 10s ease-in-out infinite",
            wiggle: 'wiggle 7s ease-in-out infinite',
          },
          
          keyframes: {
            
            wiggle: {
            },
            
            mat: {
              '0%, 100%': { transform: 'scale(.9)' },
              '50%': { transform: 'scale(1.1)' },
              
               '0%': { backgroundImage: "url('canada.jpg')" },
              '20%': { backgroundImage: "url('avatar.jpg')" },
              '40%': { backgroundImage: "url('nyc.jpg')" },
              '60%': { backgroundImage: "url('trip.jpg')" },
              '80%': { backgroundImage: "url('lake.jpg')" },
            },
          },
        }
      }
    }
  </script>
  
</head>

<body>
  <div id="slider" class="relative w-[400px] h-[200px] bg-[url('nyc.jpg')] bg-no-repeat bg-contain bg-center truncate top-20 mx-auto rounded-lg shadow-[-7px_6px_12px_rgba(0,0,0,0.5)] animate-mat"></div>
</body>

</html>
