
<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>
                 <meta charset=utf-8 />
                 <link rel="stylesheet" type="text/css" href="menuStyle.css">
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php include "./index.php" ?>
<!--  <?php include "./sidenav.php" ?> -->
<div class = 'bodyStyle'>

<div class="sidenav">   <b>
                        <a href="protocol.php?action=Протокол HTTP">Протокол HTTP</a>
                        <a href="protocol.php?action=Формат сообщения">Формат сообщения</a>
                        <a href="protocol.php?action=Коды состояния">Коды состояния</a>
                        <a href="protocol.php?action=HTTP через SSL(TLS)">HTTP через SSL(TLS)</a>
                        <a href="protocol.php?action=HTTP/2">HTTP/2</a>
                        <a href="protocol.php?action=HTTP/3">HTTP/3</a>
                        </b>
                        
</div>
<?
if($_GET['action'] !== 'top'){
    print_r ("<h2>".$_GET['action']. "</h2>");
    //Пердаем параметры функции через ссылку:

    $article = $_GET['action'] ;

      if($article == ''){
        $article = 'Протокол HTTP' ;
        echo "<h2> Протокол HTTP </h2>";
      }

        $link->set_charset("utf8");
        $mySQLquery = mysqli_query($link, "SELECT `article` FROM `data` WHERE `theme` = '".$article."'");
        $data = mysqli_fetch_array($mySQLquery);

    // Выводим статью на страницу foreach:
    foreach($data as $result) 
    {
        echo $result, '<br>';
    } 
  }
?>
</div>

</body>
</html>