<?php





session_start();
include('connection.php');

$sql = "SELECT * FROM `bo_account`";
$result = mysqli_query($conn, $sql);
$city = "";





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
    <div class="boChart">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Division', 'City' , ' account'],
          <?php 
           while ($row = mysqli_fetch_array($result)) {
                 $city = $row['boCity'];
                 $accounts = $row['boAccountNo'];
            ?>

            [' <?php echo $city?>' , ' <?php echo $accounts?>', ' <?php echo $accounts?>'],
            <?php
             }
          ?>
   
        ]);

        var options = {
          chart: {
            title: 'BO Account Chart',
            subtitle: 'Number of BO A/C holders per division',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    </div>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>
