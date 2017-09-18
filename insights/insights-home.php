<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../php-Parts/head.php'; ?>

</head>

<body>
  <div class="container ">
    <div class="row ">
      <div id="piechart ">
      </div>
    </div>
  </div>

  <?php include '../php-Parts/footer.php'; ?>
</body>

<script type="text/javascript">
// Load the Visualization API and the piechart package.
google.charts.load('current', {
  'packages': ['corechart']
});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var jsonData = $.ajax({
    url: "fetchdatajsontest.php ",
    dataType: "json ",
    async: false
  }).responseText;

  // Create our data table out of JSON data loaded from server.
  var data = new google.visualization.DataTable(jsonData);

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
  chart.draw(data, {
    width: 100 % ,
    height: 400 px
  });
}

</script>

</html>
