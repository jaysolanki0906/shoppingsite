<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_site";

include 'header.php';
echo "<br><br>"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<html>
  <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible"
		content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
h1
{
	font-family: Brush Script MT, Brush Script Std, cursive;
	font-style: oblique;
	height: 80%
}
body
{
	background-color:#B6B6B4;
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
           ['Product', 'Rs.'],
          <?php
            $sql = "SELECT category.catname,SUM(cart.total_price) AS price from cart,category,product WHERE category.catid=product.catid AND product.PID=cart.PID GROUP BY cart.product_name";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
              $om=$row['catname'];
              $p=$row['price'];
          ?>
          ['<?php echo $om;?>',<?php echo $p;?>],
          <?php }
          ?>
        ]);

        var options = {
          title: '',
          width: 1400,
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'bottom', label: 'product'} // Top x-axis.
            }
          },
          bar: { groupWidth: "100%" }
        };

        var chart = new google.charts.Bar(document.getElementById('bottom_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body><center>
    <div id="bottom_x_div" style="width: 1500px; height: 700px;"></div>
</center>
  </body>
</html>