<!DOCTYPE html>
<html lang=ru-ru dir=ltr>
<head>
 <meta charset=utf-8 />
 <?php include "./database.php" ?>
<?

   //$link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])
 or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); 
        print "Хм, что-то не получилось. Попробуйте убрать привязку пароля к IP при входе";
    }
    else
    {
        print "<div style = 'background-color: lightgreen'>Привет, ".$userdata['user_login'].". Все работает! </div>";
    }
}
else
{
  
    print "<div class = 'containerWarning' >Включите куки </div> <p> </p>";
    header("Location: login.php"); exit();
}

?>

<style type="text/css">
  .containerWarning {
    padding: 10px;
    background-color: #fcc00f;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

body {
  background-image: url("images/pattern.jpg");
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.bodyStyle{
  background-color: white;
}


.greenContainer{

}

</style>
</head>
<body>

<div class="navbar">
  <a href="home.php">Домашняя</a>
  <a href="protocol.php">Протокол HTTP</a>
  <a href="cookie.php">Файлы Cookie</a>
  <div class="dropdown">
    <button class="dropbtn">Дополнительно 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies">Ссылка на источник Cookie</a>
      <a href="https://developer.mozilla.org/ru/docs/Web/HTTP/Overview">Ссылка на источник протокола HTTP</a>
      <a href="https://habr.com/ru/post/438810/">Ссылка на источник HTTP/3</a>
    </div>
  </div> 
<a href="logout.php">Выйти из аккаунта</a>
</div>

<!-- <div class = 'bodyStyle'>

</div> -->

</body>
</html>
