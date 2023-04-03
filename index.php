<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a sphere in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-amber.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Volume of a Sphere in PHP</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
    
  		<!-- Web page heading and body text -->
      <?php 
  			echo "<h1>Calculating the Volume of a Sphere with User Input</h1>";
  			echo "<p>Hello! This web page will allow you to inupt the radius of your choice to calculate the volume of a sphere. See the image below for the dimensions that need to be entered and the formula that will be used.</p>";
  		?>
  
      <!-- Image -->
      <img src="./images/volume_sphere.png" alt="Volume of a sphere">
      <br>
      <br>
  
  		<!-- User input form -->
      <form action="./calculations.php" method="post" target="result">
        <label for="radius">Value of the sphere's radius (r) in cm:</label>
        <input type="number" step="0.01" min="0" id="radius" placeholder="Radius of sphere..." name="radius"><br><br>
        <!-- Accent-colored raised button with ripple -->
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
          Calculate Volume
        </button>
      </form>
      <br>
  
  		<!-- iframe for the results to show on the web page. -->
  		<iframe id="result" name="result">			
  	  </iframe>
      <br>
      <br>
    </main>
  </body>
</html>