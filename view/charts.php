<?php
    include ("C:/wamp64/www/web/config.php");
    $sql="SELECT * from client";
    $db = config::getConnexion();
	 $liste=$db->query($sql );
  echo $sql;
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        ['Year', 'Sales', 'Expenses'],
        var data = google.visualization.arrayToDataTable([
          <?php
              foreach($liste as $row){
          
         
              echo $row['code_client']; echo $row['nom']; echo $row['prenom'];
              }
              ?>

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
   <h1>jjjjjj</h1>

    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>