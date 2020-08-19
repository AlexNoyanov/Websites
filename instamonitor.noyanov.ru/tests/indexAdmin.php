<!DOCTYPE html>
<html lang="en">

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
        print "Хм, что-то не получилось. Попробуйте убрать привязку пароля к IP";
    }
    else
    {
        // print "Привет, ".$userdata['user_login'].". Всё работает!";
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
  background-image: url("images/adminpattern.jpg");
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

.mainBody{
  background-color: white;
}

/* Set a style for the submit button */
.deletebtn {
  background-color: #e66ea2;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.changebtn {
  background-color: #1da2f5;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

</style>
</head>
<body>

<div class="navbar">
<a href="indexAdmin.php">Данные пользователей</a>
<a href="dataAdmin.php">Статьи</a>
<a href="logout.php">Выйти из аккаунта администратора</a>


</div>

<div class = 'mainBody'>
  <div id = '#Registration'>
     <div class="container">  
  <?php include "./register.php" ?>
 
  <form method = 'POST'>
  <h2> Удалить пользователя: </h2>
  Логин удаляемого пользователя:<input type="text" name="deleteId">
  <td align="center"><button name="delete" class = 'deletebtn'>Удалить</button>
  </td>
  </form>
                
    <?
      //Удаление
if (isset($_POST["delete"])) {
    //$link = mysqli_connect("localhost:3306", "root", "admin");
  $link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");
    if ($link == false){
        echo "Ошибка: Невозможно подключиться к MySQL <br>" . mysqli_connect_error();
    }
    else {
        echo "Соединение установлено успешно<br>";
    }

    if ($_POST['deleteId'] == "") {
        echo "Вы не ввели Логин для удаления";
    }else{
        $query = "delete  from users where user_login = '".$_POST['deleteId']."';";
        if($link->query($query) == TRUE){
            echo "<b>Запись </b><b style='color:red'>". $_POST['deleteId'] . "</b> <b> удалена.</b>";
        }else{
            echo "MySQL запрос: <h4 color = 'green'>";
            echo $query;
            echo "</h4><br>";
            echo "Не удалось удалить запись. Такого Логина не существует.";
        }
    }
  
    $link->close();
}



echo "<hr>";
    ?>

  <form method = 'POST'>
  <h2> Изменить пароль пользователя: </h2>
  Логин пользователя:<input type="text" name="loginId">
  Новый пароль пользователя:<input type="text" name="newPasswordId">
  <td align="center"><button name="changePassBtnId" class = 'changebtn' >Изменить пароль</button>
                    
  </td>
  </form>

     <?
      // Изменение логина пользователелей:
if (isset($_POST["changePassBtnId"])) {
    //$link = mysqli_connect("localhost:3306", "root", "admin");
  $link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");
    if ($link == false){
        echo "Ошибка: Невозможно подключиться к MySQL <br>" . mysqli_connect_error();
    }
    else {
        echo "Соединение установлено успешно<br>";
    }

    if ($_POST['loginId'] == "") {
        echo "Вы не ввели Логин для пользователя";
    }else{
        $query = "update users set user_password = '". md5(md5($_POST['newPasswordId'])) ."' where user_login = '".$_POST['loginId']."';";    // Двойное хеширование пароля
        if($link->query($query) == TRUE){
            echo "<b>Пароль для пользователя </b><b style='color:red'>". $_POST['loginId'] . "</b> <b> изменен на <b style='color:blue'>". $_POST['newPasswordId']  . "</b></b>";
        }else{
            echo "MySQL запрос: <h4 color = 'green'>";
            echo $query;
            echo "</h4><br>";
            echo "Не удалось обработать запись. Такого Логина не существует.";
        }
    }
    
    $link->close();
}

echo "<hr>";
    ?>

  <h2> Данные зарегестрированных пользователей: </h2>
  
<?
    //Вывод всех записей
     $link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");
    if ($link == false){
        echo "Ошибка: Невозможно подключиться к MySQL <br>" . mysqli_connect_error();
    }
    else {
        echo "(Соединение с базой установлено успешно)<br>";
    }

    echo "<meta charset=utf-8>";
    echo "<table border=1 bgcolor=#FFFFFF
    bordercolor=#000000 cellspacing=0
    >";
    echo "<tr>";
        echo "<td>"." # ";
        echo "</td>";
        echo "<td>"."Логин";
        echo "</td>";
        echo "<td>"."Пароль зашифрованный md5";
        echo "</td>";
        echo "<td>"."Hash";
        echo "</td>";
        echo "<td>"."IP";
        echo "</td>";
    echo "</tr>";

    $query = "Select *from users WHERE user_login != 'admin';";
    $result = $link->query($query);

    if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>".$row["user_id"];
                echo "</td>";
                echo "<td>".$row["user_login"];
                echo "</td>";
                echo "<td>".$row["user_password"];
                echo "</td>";
                echo "<td>".$row["user_hash"];
                echo "</td>";
                echo "<td>".$row["user_ip"];
                echo "</td>";
            echo "</tr>";           
        }       
    }else{
        echo "Записей нет";
    }
        echo "</table>";
    $link->close();

?>

    </div>
  </div>
</div>

 </body>
</html>