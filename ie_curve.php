
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Money Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="mode.css">

  <style type="text/css">
    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>

</head>

<body>
  <img src="money7.webp" style="width:100%;">
  <div id="mode_changer">
  <nav class="nav nav-tabs">
    <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="add_income.php" style="font-size: 1.5rem;">Add
      Income</a>
    
    <a class="flex-sm-fill text-sm-center nav-link" href="view_income.php" style="font-size: 1.5rem;">View Income</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="view_expense.php" style="font-size: 1.5rem;">View Expense</a>
    <a class="flex-sm-fill text-sm-center nav-link active" href="ie_curve.php" style="font-size: 1.5rem;">Income Expense Curve</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="view_bal.php" style="font-size: 1.5rem;">View Balance</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="logout.php" style="font-size: 1.5rem;">Log Out</a>
  </nav>
  <div id="image_container">
      <div class="d-grid gap-2 m-2" id="dark_mode">
        <button class="btn btn-primary" type="button" id="button">Dark mode</button>
      </div>
    </div>
  <div style="text-align: center;font-size: 2.5rem;margin: 10px;padding: 20px;"><u>VIEW INCOME EXPENSE CURVE</u></div>
  <hr>
<!--<form action="data.php" method="post">
  <div style="text-align: center;margin: 20px;font-size: 1.5rem;font-weight: bold;">Search By</div>
  <div><input type="date" name="ie" style="display: block;margin: auto;" required></div>
  <hr>
  <div> <button type="submit" name="submit" class="btn btn-danger" value="submit" style="display: block;margin:auto;">
    Search</button></div>
    
</form>-->
<div id="container"></div>
  <script>
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("data.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data);
        chart.container("container");
        chart.draw();
      });
    });
  </script>
<hr>
  </div>
<script src="mode.js"></script>
</body>

</html>