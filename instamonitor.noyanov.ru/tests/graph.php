
<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>
  
<meta charset=utf-8 />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pageStyle.css">

</head>
<body>

  <?php include "./index.php" ?>
  <?php include "./database.php" ?>


<div class = 'bodyStyleFull' >
<h2>Subscribers Graph for <?php echo $userdata['user_login'] ?> </h2>

  <?
        $article = 'oop';                       // Имя статьи в базе

        $link->set_charset("utf8");             // Установка русификации 

        $query = mysqli_query($link, "SELECT `article` FROM `data` WHERE `theme` = '".$article."'");
        $data = mysqli_fetch_assoc($query);

            // Printing Array with foreach:
    foreach($data as $result) {
        echo $result, '<br>';
      } 
        
?>
  </div>
</div>  

</body>
</html>