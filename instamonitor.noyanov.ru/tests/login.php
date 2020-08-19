<?php 
include "./database.php" ;


// CREATE TABLE user(user_id UNSIGNED INT(11) AUTO_INCREMENT PRIMARY KEY, user_login VARCHAR(30), user_password VARCHAR(32), user_hash VARCHAR(32), user_ip UNSIGNED INT(10) )

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

if(isset($_POST['submit'])  )
{
    
    $query = mysqli_query($link,"SELECT ID, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    
        // To check if this is admin password:
       $adminquery = mysqli_query($link,"SELECT ID, user_password FROM users WHERE user_login='admin' LIMIT 1");       // Проверяем, а не админ ли заходит
       $admindata = mysqli_fetch_assoc($adminquery);
        // Check user input with admin password here:

        if($admindata['user_password'] === ($_POST['password']) ){     // Проверяем соответсвие введенного пользователем пароля с базой
             $hash = md5(generateCode(10));                            // Генерируем хеш сессии и шифруем его с помощью MD5

            mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE ID = '".$data['ID']."'");    // Добавляем хеш текущей сессии в базу
        
            setcookie("id", $data['ID'], time()+60*60*24*30, "/");                                                       
            setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true);                                      // Записываем хеш сесси в Куки для админа
        
            header("Location: administrator.php"); exit();                                                            // Переходим к администратору                
        }else{
           // Неправильный пароль от администратора 
        }


    if($data['user_password'] === $_POST['password'] )
    { 
        $hash = md5(generateCode(10));

        mysqli_query($link, "UPDATE users SET user_hash='".$hash."'  WHERE ID = '".$data['ID']."'");
        setcookie("id", $data['ID'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); 
        
        header("Location: index.php"); exit();
    }
    else
    {
        print "<div class='contWrongLogin'>Вы ввели неверный логин/пароль!</div> <p></p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset=utf-8 />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="LoginStyle.css">

</head>
<body>

<form method = "POST">
  <div class="container">
    <div class = "fields">
    <h1>Авторизация</h1>
    <p></p>
    
        Логин <input name="login" type="text" required><br>
        Пароль <input name="password" type="password" required><br>
        <hr>
        <input name="submit" type="submit" class="loginButton" value="Войти на сайт">
    </div>
  </div>
</form>

</body>
</html>

