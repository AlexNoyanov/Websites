<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>

 <meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="pageStyle.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: silver;
   color: white;
   text-align: center;
}
</style>


<div class="navbar">

  <img src="images/logo.png" style = "height: auto; width: 120px;">

  <a href="home.php">Home</a>
  <a href="graph.php">Graph</a>
  <a href="table.php">Table</a>
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

<div class="footer">

<!--   Footer code here: -->
<!-- <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>. -->


<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>  This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.


</div>

</body>
</html>