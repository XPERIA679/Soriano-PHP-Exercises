<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>String Practice</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="string">

  <h1>String Operations</h1>
  <ul>
    <li>Full Message: <?php echo $this->data["fullMessage"]; ?></li><br>
    <li>Substring (first 7 characters): <?php echo $this->data["subMessage"]; ?></li><br>
    <li>Replaced Message (World -> Everyone): <?php echo $this->data["replacedMessage"]; ?></li><br>
  </ul>
</div>
</body>
</html>
