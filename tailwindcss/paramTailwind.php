<?php
echo 'Ready.';


$imgs=['avatar', 'canada', 'card', 'lake', 'nyc', 'trip'];

foreach ($imgs as $imgName) {
  echo '<img src="'.$imgName.'.jpg">';
}
