<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello friend</title>
  <?php 

    $name = $_GET['name'];
    $surname = $_GET['surname'];

  ?>
</head>
<body>
  
  <h1>
    <?php 
      echo "Hello" . " " . $name . " " . $surname;
    ?>
  </h1>


</body>
</html>