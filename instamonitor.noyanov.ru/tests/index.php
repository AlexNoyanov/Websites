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
        print "Ошибка входа! Хеш сесси не верный. При переходе в любой раздел Вас попросят войти!";
    }
    else
    {

    }
}
else
{
    header("Location: login.php"); 
    exit();
}

include "./navbar.php";
?>
