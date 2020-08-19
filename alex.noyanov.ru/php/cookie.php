
<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>
  
 <meta charset=utf-8 />


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<style type="text/css">
  
  .sidenav {
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 110px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {

  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.main {
  margin-left: 250px; /* Same width as the sidebar + left position in px */
  font-size: 28px;    /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.bodyStyle{
  background-color: white;
}

</style>

  <?php include "./index.php" ?>
  <?php include "./database.php" ?>


<div class = 'bodyStyle'>
  <div class="main">
<h2>Файлы Cookie</h2>

  <?
        $themeName = 'cookie';
       // $link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");
         // include "./database.php" 

        $link->set_charset("utf8");

       //mysql_set_charset('utf8',$link);
        //mysql_set_charset("utf8", $link);
        $query = mysqli_query($link, "SELECT `article` FROM `http-protocol` WHERE `theme` = '".$themeName."'");
        $data = mysqli_fetch_assoc($query);

        // CONVERT(`article`USING utf8)
      // echo htmlentities($data, ENT_COMPAT, 'UTF-8');
      // echo $data;

        //print_r($data);
            // Printing Array with foreach:
    foreach($data as $result) {
        echo $result, '<br>';
      } 
        

?>
  </div>
</div>  

</body>
</html>