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
        setcookie("id", "", time() - 3600*24*30*12, "/posts/");
        setcookie("hash", "", time() - 3600*24*30*12, "/posts/", null, null, true);
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



 <meta charset="utf-8">
        <title>Редактирование статей</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>

</head>
<body>

<div class="navbar">

<a href="indexAdmin.php">Данные пользователей</a>
<a href="dataAdmin.php">Статьи</a>

<a href="logout.php">Выйти из аккаунта администратора</a>

</div>

<div class = 'mainBody'>
 
  <h2> Редактировать данные из статей на сайте:</h2>

  <form method = "POST">
  <div class="container">
    <hr>
        Имя статьи из базы<input name="articleID" type="text" required><br>

    <input name="submit" type="submit" class="registerbtn" value="Загрузить статью для редактирования">


            <label name = "articleIDLabel"> <? echo $_POST['articleID'];  ?> </label>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                <? 


              //$themeName = 'protocol';
              if(isset($_POST['submit'])  )
{

                  // Сохранить изменения статей в базу
                if(isset($_GET['action']) && $_GET['action'] == 'saveData'){
                  print_r ("<h2>Протокол НTTP</h2>");
                  //call function here
                  //$themeName = 'protocol';
                 //print $data
                          $query = mysqli_query($link, "UPDATE `http-protocol` SET 'article' = ".$_GET['editor1'] ." WHERE `theme` = '".$_GET['articleIDLabel']."';");
                        // $data = mysqli_fetch_assoc($query);
                }

              $themeName = $_POST['articleID'] ; //$_['postid']; 
              //.echo $themeName;

        $link->set_charset("utf8");
        //echo $themeName;

        $query = mysqli_query($link, "SELECT `article` FROM `http-protocol` WHERE `theme` = '".$themeName."'");
        $data = mysqli_fetch_assoc($query);

            // Printing Array with foreach:
        if($data != NULL){
    foreach($data as $result) {
        echo $result, '<br>';
      } 

    }else{
      echo "Статья не выбрана!";
    }
      
}



                ?>
            </textarea>
            <?      echo $_POST['editor1'];?>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>


          <a href="dataAdmin.php?action=saveData">Сохранить изменения в базу</a>

          </div>
</form>


 <?php include "./database.php" ?>


  <h2> Все статьи на сайте:</h2>


<?
    //Вывод всех записей
    // $link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");
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
        echo "<td>"."Тема статьи";
        echo "</td>";
        echo "<td>"."Статья";
        
    echo "</tr>";

    $link->set_charset("utf8");
    $query2 = " SELECT * FROM `http-protocol` ";
    $result = $link->query($query2);

    if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            //echo "<meta charset=utf-8>";
                echo "<td>".$row["id"];
                echo "</td>";
                echo "<td>".$row["theme"];

                echo "</td>";

              //$data = mysqli_fetch_array($query); 

                echo "<td>".$row["article"];
                 //$data = $row["article"];
                // Printing Array with foreach:
                 // foreach($data as $result) {
                 //  echo $result, '<br>';
                 //   }
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

 </body>
</html>
