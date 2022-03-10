<?php
  $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
  $splitText = explode(".", $text);
?>
<!DOCTYPE html>
  <html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
  </head>
  <body>
    <h3>Testo intero:</h3>
    <p><?php echo $text ?></p>
    <hr>
    <h3>Testo diviso</h3>
    <?php 
      for($i= 0; $i < (count($splitText)); $i++) {
        echo "<p>$i $splitText[$i] </p>";
      }
    ?>
  </body>
</html>