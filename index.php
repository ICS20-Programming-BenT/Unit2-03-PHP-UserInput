<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="User Input with PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Web page title -->
    <title>User Input with PHP</title>
  </head>
  </head>
  <body>
    <?php echo "<h1>User Input in PHP!</h1>" ?>
    <form action="./welcome.php" method="post" target="result">
      <label for="street-number">Street Number:</label>
      <input type="text" id="street-number" placeholder="Your Street Number" name="street-number"><br><br>
      <label for="street-name">Street Name</label>
      <input type="text" id="street-name" placeholder="Your Street Name" name="street-name"><br><br>
      <input type="submit" value="Enter">
			<br><br>	
    </form>
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
				Your street number is <?php echo $_POST["street-number"]; ?> and your street name is <?php echo $_POST["street-name"]; ?>.
      </iframe>
    </center>
  </body>
</html>