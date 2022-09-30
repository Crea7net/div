<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwindcss</title>
  <script>
    //<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>".replace(
      "HOST", location.hostname));
      //]]>
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
  <?php $n='nyc'; ?>
  <script>
    let n = 'nyc';
    // for (let i=0; i<10; i++){
      // ch1 = '"0%": { backgroundImage: "url(\'canada.jpg\')" },';
      // ch2 = '"20%": { backgroundImage: "url(\'avatar.jpg\')" },';
      // ch3 = '"40%": { backgroundImage: "url(\'nyc.jpg\')" },';
      // ch4 = '"60%": { backgroundImage: "url(\'trip.jpg\')" },';
      // ch5 = '"80%": { backgroundImage: "url(\'lake.jpg\')" },';
    // }
    tailwind.config = {
      theme: {
        extend: {

          animation: {
            mat: "mat 10s ease-in-out infinite",
          },
          
          keyframes: {
            
            // mat: {
            //    '0%': { backgroundImage: "url('canada.jpg')" },
            //   '20%': { backgroundImage: "url('avatar.jpg')" },
            //   '40%': { backgroundImage: "url('"+n+".jpg')" },
            //   '60%': { backgroundImage: "url('trip.jpg')" },
            //   '80%': { backgroundImage: "url('lake.jpg')" },
            // },
          },
        }
      }
    }
    let kkk = '0';
    tailwind.config.theme.extend.keyframes.mat = { '0%' :{ backgroundImage: "url(\'canada.jpg\')"}};
    console.log(tailwind.config.theme.extend.keyframes.mat);
  </script>
  </script>
</head>

<body>
  <div id="slider" class="relative w-[400px] h-[200px] bg-[url('nyc.jpg')] bg-no-repeat bg-contain bg-center truncate top-20 mx-auto rounded-lg shadow-[-7px_6px_12px_rgba(0,0,0,0.5)] animate-mat"></div>
  
  <!-- <div class="w-full bg-[#dbdbdb] text-center">
    <div class="text-center w-64 mx-auto"> -->
      <?php
      // for ($i = -90; $i < 91; ++$i) {
      //   echo '<img class="' . ($i < 0 ? '-' : '') . 'skew-y-[' . abs($i) . 'deg]" src="avatar.jpg" alt="photo">' . "\n" . str_repeat('<br>', 5);
      // }
      ?>
    <!-- </div>
  </div> -->
</body>

</html>
