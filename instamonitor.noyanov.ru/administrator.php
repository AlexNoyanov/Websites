<?php 

    include "./database.php" ;

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT * FROM users WHERE ID = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['ID'] !== $_COOKIE['id']))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); 
        print "Ошибка входа! Хеш сесси не верный. При переходе в любой раздел Вас попросят войти снова!";
    }
    else
    {
        //print "<div style = 'background-color: lightgreen'>Привет, ".$userdata['user_login'].". Все работает! </div>";
    }
}
else
{
    //print "<div class = 'containerWarning' >Включите куки </div> <p> </p>";
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset=utf-8 />
  <style type="text/css">

  .containerWarning {
    padding: 10px;
    background-color: orange;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pageStyle.css">
</head>

<body class = 'adminBody'>
 <?php include "./adminNavbar.php" ?>
<div class = 'adminBody'>
  <div id = '#Registration'>
     <div class="container">  

  <form method = 'POST'>
  <h2> Удаление пользователей: </h2>
  Логин удаляемого пользователя:<input type="text" name="deleteId">
  <td align="center"><button name="delete" class = 'deletebtn'>Удалить</button>
  </td>
  </form>

  <?php include "userRegistration.php" ?>
 
                
    <?
      //Удаление
if (isset($_POST["delete"])) {
    //$link = mysqli_connect("localhost:3306", "root", "admin");
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
    if ($link == false){
        echo "ОШИБКА! Не удалось подключитсья к базе! <br>" . mysqli_connect_error();
    }
    else {
    }

    if ($_POST['loginId'] == "") {
        echo "Вы не ввели Логин для пользователя";
    }else{
        $query = "update users set user_password = '". $_POST['newPasswordId'] ."' where user_login = '".$_POST['loginId']."';";    
        if($link->query($query) == TRUE){
            echo "<b>Пароль для пользователя </b><b style='color:red'>". $_POST['loginId'] . "</b> <b> изменен на <b style='color:blue'>". $_POST['newPasswordId']  . "</b></b>";
        }else{
            echo "MySQL: <h4 color = 'green'>";
            echo $query;

            echo "</h4><br>";
            echo "ОШИБКА!Такого логина не существует.";
        }
    }
    
    $link->close();
}

echo "<hr>";
    ?>

  <h2> Данные зарегестрированных пользователей: </h2>
  
<?
    //Вывод всех записей
    if ($link == false){
        echo "Ошибка: Невозможно подключиться к MySQL <br>" . mysqli_connect_error();
    }
    else {
        // Успешно
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
        echo "<td>"."Пароль пользователя";
        echo "</td>";
        echo "<td>"."Хеш текущей сессии";
        echo "</td>";
        echo "</tr>";

    $query = "Select *from users WHERE user_login != 'admin';";
    $result = $link->query($query);

    if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>".$row["ID"];
            echo "</td>";
            echo "<td>".$row["user_login"];
            echo "</td>";
            echo "<td>".$row["user_password"];
            echo "</td>";
            echo "<td>".$row["user_hash"];
            echo "</td>";
            echo "</tr>";           
        }       
    }else{
        echo "Записей НЕТ";
    }
        echo "</table>";
    $link->close();
?>

    </div>
  </div>
</div>

 </body>
</html>