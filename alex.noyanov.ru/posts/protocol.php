
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

</style>

  <?php include "./index.php" ?>
<!--  <?php include "./sidenav.php" ?> -->
<div class = 'bodyStyle'>
<div class="sidenav">
  <a href="protocol.php?action=protocol">Протокол HTTP</a>
  <a href="protocol.php?action=format">Формат сообщения</a>
  <a href="protocol.php?action=code">Коды состояния</a>
  <a href="protocol.php?action=ssl">HTTP over SSL(TLS)</a>
  <a href="protocol.php?action=uri">URI, URL</a>
  <a href="protocol.php?action=spdy">SPDY</a>
  <a href="protocol.php?action=http2">HTTP/2</a>
  <a href="protocol.php?action=quic">QUIC</a>
  <a href="protocol.php?action=http3">HTTP/3</a>
</div>

<div class="main">

<?

$themeName = 'protocol';
  if(isset($_GET['action']) && $_GET['action'] == 'protocol'){
    print_r ("<h2>Протокол НTTP</h2>");
    //call function here
    $themeName = 'protocol';
   //print $data
}

  if(isset($_GET['action']) && $_GET['action'] == 'format'){
    print_r ("<h2>Форматы сообщений</h2>");
    $themeName = 'format';
    //call function here
}
  if(isset($_GET['action']) && $_GET['action'] == 'code'){
    print_r ("<h2>Коды состояния</h2>");
    $themeName = 'code';
}

  if(isset($_GET['action']) && $_GET['action'] == 'ssl'){
    print_r ("<h2> HTTP over SSL(TLS)</h2>");
    $themeName = 'ssl';
}

  if(isset($_GET['action']) && $_GET['action'] == 'uri'){
    print_r ("<h2>URI, URL</h2>");
    $themeName = 'uri';
}

  if(isset($_GET['action']) && $_GET['action'] == 'spdy'){
    print_r ("<h2>SPDY</h2>");
    $themeName = 'spdy';
}

  if(isset($_GET['action']) && $_GET['action'] == 'http2'){
    print_r ("<h2>HTTP/2</h2>");
    $themeName = 'http2';
}

  if(isset($_GET['action']) && $_GET['action'] == 'quic'){
    print_r ("<h2>QUIC</h2>");
    $themeName = 'quic';
}

  if(isset($_GET['action']) && $_GET['action'] == 'http3'){
    print_r ("<h2>HTTP/3</h2>");
    $themeName = 'http3';
}

        //$link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");

        $link->set_charset("utf8");

        $query = mysqli_query($link, "SELECT `article` FROM `http-protocol` WHERE `theme` = '".$themeName."'");
        $data = mysqli_fetch_array($query);

        //echo '<pre>';

    // Printing Array with foreach:
    foreach($data as $result) {
        echo $result, '<br>';
      } 


        print_r($data);

        //echo '</pre>';
  
?>

</body>
</html>