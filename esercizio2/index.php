<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mail valida</title>

  <?php 

    $mail = $_GET['mail'];

    $result;

    if (strpos($mail, '@') && strpos($mail, '.')) {

      $result = 'Ok, mail confermata';

    } else {

     $result = 'Ko, mail non corretta';
     
    }
    
    $resultHtml = '<div class="result">' . $result . '</div>';

  ?>  

</head>
<body>

    <h3>
      <?php 

         echo "Mail dell'utente: " . $mail;

      ?>
    </h3>

    <?php 
     
      echo $resultHtml;

    ?>
  
</body>
</html>