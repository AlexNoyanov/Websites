<head>
  

<meta charset=utf-8 />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/pageStyle.css">

</head>

<body>


<style>

  

table, th, td {
  border: 1px solid black;
  /*border-bottom: 1px solid grey;*/

  border-collapse: collapse;
  background-color: white; 

    padding: 10px;  
}

table.center {
  margin-top:10px;
  width:60%;
  margin-left: auto; 
  margin-right: 10%;
}


table.statistics {
  margin-top:10px;
  width:60%;
  margin-left: auto; 
  margin-right: 10%;
}

tr:nth-child(even) {background-color: #f2f2f2;}

</style>

<?php

                  // File for printing table on the page 
                  // By Alexander Noyanov 
                  // Tuesday, June 2 2020


              include "./index.php";            // Index to check if user authorised
              include "./alex_noyanov.php";     // File with name of the user should be included  
              
              // Array with statisitcs for user:
              include "./alex_noyanov_stat.php";

              // echo "<table>";
              // echo "<tr><td>";

               //Print first table with statistics:
               echo "<table class='statistics'>";
               echo "<th> Maximum </th> <th> Minimum </th> <th> Delta </th>";

              foreach ( $alex_noyanov_stat as $var ) {
                  echo "<tr> <td>";
                  echo  $var['Maximum']; 
                  echo "</td> <td> ";
                  echo  $var['Minimum']; 
                  echo "</td> <td> ";
                  echo  $var['Delta']; 
                  echo "</td> </tr>";
              }
              echo "</table>";

              //echo "</td> <td>";

               // Printing multidemensional array into the table:
               echo "<table class='center'>";
               echo "<th> Subscribers </th> <th> Date </th>";
              foreach ( $alex_noyanov as $var ) {
                  echo "<tr> <td>";
                  echo  $var['Subscribers']; 
                  echo "</td> <td> ";
                  echo  $var['Date']; 
                  echo "</td> </tr>";
              }

              echo "</table>";

              // echo "</td></tr></table>";





            ?>


</body>



