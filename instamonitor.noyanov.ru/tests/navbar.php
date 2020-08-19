<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>

 <meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="pageStyle.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="navbar">
  <a href="home.php">Home</a>
  <a href="graph.php">Graph</a>
  <a href="protocol.php">Table</a>
  <div class="dropdown">
<!--     <button class="dropbtn">Photos
      <i class="fa fa-caret-down"></i>
    </button> -->
   <!--  <div class="dropdown-content">
      <a href="https://code.tutsplus.com/ru/tutorials/basics-of-object-oriented-programming-in-php--cms-31910">/a>
      <a href="https://developer.mozilla.org/ru/docs/Web/HTTP/Overview">Mavic Pro in the country</a>
     
    </div>

-->

  </div>  
<a href="logout.php" class = 'logout' style="float: right;">Log out <?php echo $userdata['user_login'] ?></a>
</div>

<!-- <div class = 'bodyStyle'>

</div> -->

</body>
</html>