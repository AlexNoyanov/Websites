
<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>
  
<meta charset=utf-8 />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/pageStyle.css">

</head>
<body>

  <?php include "./index.php" ?>


<div class = 'bodyStyleFull' >
  
  <?php $userName = $userdata['user_login'];

    $userName = "alex_noyanov";

  ?>



<h2>Subscribers Graph for <?php echo $userName ?> </h2>


  <?php include "./graph3.php" ?>

  <?
    //     $article = 'oop';                       // Имя статьи в базе

    //     $link->set_charset("utf8");             // Установка русификации 

    //     $query = mysqli_query($link, "SELECT `article` FROM `data` WHERE `theme` = '".$article."'");
    //     $data = mysqli_fetch_assoc($query);

    //         // Printing Array with foreach:
    // foreach($data as $result) {
    //     echo $result, '<br>';
    //   } 
        
?>
  </div>
</div>  

</body>
</html>