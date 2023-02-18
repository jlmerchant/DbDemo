<!DOCTYPE html>
<html>
  <head>
    <title>Self-Processing PHP Form</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
      $name = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

    <h2>Self-Processing PHP Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="name">
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
      if ($name != "") {
        echo "<h3>Welcome, " . $name . "!</h3>";
      }
    ?>
  </body>
</html>
