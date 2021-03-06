<?php 

// Getting PHP Array from MySQL Dump:
include "./alex_noyanov.php" ;

//create array variable
$values = [];

//pushing some variables to the array so we can output something in this example.
//array_push($values, array("year" => "2013", "newbalance" => "50"));
// array_push($values, array("year" => "2014", "newbalance" => "90"));
// array_push($values, array("year" => "2015", "newbalance" => "120"));

$vlaues = $alex_noyanov; 


// Filling all users data to the array for graph
              foreach ( $alex_noyanov as $var ) {
                array_push($values, array("year" => $var['Date'], "newbalance" => $var['Subscribers']));
              }

//counting the length of the array
$countArrayLength = count($values);

$userName = $userdata['user_login']; // Getting User name 

// For testing:
$userName = "alex_noyanov";

?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Instagram Subscribers');

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