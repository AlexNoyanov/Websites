<?php 

// Getting PHP Array from MySQL Dump:
//include "./dataArray.php" ;


    $servername = "localhost";
    $username = "alexn_reader";
    $password = "8K1g6G6f";
    $dbname = "alexn_sensors";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id,temperature,date FROM room_temp_sensor";
    $result = $conn->query($sql);

    
    // Printing values for testing:
//    if ($result->num_rows > 0) {
//      // output data of each row
//      while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Temp: " . $row["temperature"]. " - Date: " . $row["date"]. "<br>";
//      }
//    } else {
//      echo "0 results";
//    }
    $conn->close();

    
    
    
//create array variable
$values = [];

//pushing some variables to the array so we can output something in this example.
//array_push($values, array("year" => "2013", "newbalance" => "50"));
// array_push($values, array("year" => "2014", "newbalance" => "90"));
// array_push($values, array("year" => "2015", "newbalance" => "120"));

    $dataArray = $result;
    
$vlaues = $dataArray;


// Filling all users data to the array for graph
              foreach ( $dataArray as $var ) {
                array_push($values, array("year" => $var['date'], "newbalance" => $var['temperature']));
              }

//counting the length of the array
$countArrayLength = count($values);

//$userName = $userdata['user_login']; // Getting User name 

// For testing:
$userName = "Temp, Celsius";
?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Room Temperature');

    data.addRows([

    <?php
    for($i=0;$i<$countArrayLength;$i++){
        echo "['" . $values[$i]['year'] . "'," . $values[$i]['newbalance'] . "],";
    } 
    ?>
    ]);

    var options = {
        title: "<?php echo $userName ;?>",
        curveType: 'function',
        legend: { position: 'bottom' } 
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(data, options);
}
</script>

<div class="grid-container"> 
<div class="grid-100 grid-parent">
    <div id="curve_chart" style="width: 100%; height: 500px"></div>
</div>   

</div>
