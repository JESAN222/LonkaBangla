<?php





session_start();
include('connection.php');

$sql = "SELECT * FROM `bo_account`";
//$result = mysqli_query($conn, $sql);
$city = "";
// while ($row = mysqli_fetch_assoc($result)) {
//     $city = $row['boCity'];
// }

//count male
$cnts = "SELECT * FROM `bo_account` where `boGender` = 'Male';";
$ans = mysqli_query($conn, $cnts);
$male = 0;
 while ($row = mysqli_fetch_assoc($ans)) {
     $male++;
     
 }


//count Female
$cntss = "SELECT * FROM `bo_account` where `boGender` = 'Female';";
$anss = mysqli_query($conn, $cntss);
$Female = 0;
 while ($row = mysqli_fetch_assoc($anss)) {
     $Female++;
     
 }


?>
<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div>
        <?php
        include('adminNavbar.php');
        ?>
    </div>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Male',     <?php echo $male; ?>],
          ['Female',   <?php echo $Female; ?>],

        ]);

        var options = {
          title: 'Male & Female BO A/C holders in a Branch'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

