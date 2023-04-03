<?php
  //Get the user input
  $radius = floatval($_POST["radius"]);

  //Calculate the area
  $volumeOfSphere = 4.0 / 3.0 * pi() * ($radius ** 3);
  $volumeRounded = round($volumeOfSphere, 2);
?>

<h3>Results:</h3>
The volume of the sphere is <?php echo "$volumeRounded" ?> cm<sup>3</sup>.<br>