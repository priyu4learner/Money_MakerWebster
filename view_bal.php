<?php
  session_start();
  require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Money Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="mode.css">
</head>
<style>
  table {
    width: 100%;
  }

  td {
    border: 2px solid black;
    font-size: 1.2rem;
  }
</style>

<body>
  <img src="money7.webp" style="width:100%;">
  <div id="mode_changer">
  <div id="dark_mode" style="float:right;">
      <button class="btn btn-warning" type="button" id="button"><svg xmlns="http://www.w3.org/2000/svg" height="36px"
          viewBox="0 0 24 24" width="36px" fill="#000000">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path
            d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12.29 7c-.74 0-1.45.17-2.08.46 1.72.79 2.92 2.53 2.92 4.54s-1.2 3.75-2.92 4.54c.63.29 1.34.46 2.08.46 2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
        </svg></button>
    </div>
  <nav class="nav nav-tabs">
    <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="add_income.php" style="font-size: 1.5rem;">Add
      Income</a>
    
    <a class="flex-sm-fill text-sm-center nav-link" href="view_income.php" style="font-size: 1.5rem;">View Income</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="view_expense.php" style="font-size: 1.5rem;">View Expense</a>
    <a class="flex-sm-fill text-sm-center nav-link active" href="view_bal.php" style="font-size: 1.5rem;">View Balance</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="logout.php" style="font-size: 1.5rem;">Log Out</a>
  </nav>
  <div style="text-align: center;font-size: 2.5rem;margin: 10px;padding: 20px;"><u>VIEW BALANCE</u></div>
  <hr>
  <form action="" method="post">
      <div class="row container m-1" style="display:justify;margin:auto;">
        <div class="col" style="font-size:1.5rem;font-weight: bold;">Search By Date</div>
        <div class="col"><input type="date" name="dat" style="font-size:1.3rem;"> </div>
        <div class="col"> <button type="submit" name="submit1" class="btn btn-danger" value="submit">
            Search</button></div>
      </div>
      <div class="row container m-1" style="display:justify;margin:auto;">
        <div class="col" style="font-size:1.5rem;font-weight: bold;">Search By Month</div>
        <div class="col"><input type="month" name="mon" style="font-size:1.3rem;"></div>
        <div class="col"> <button type="submit" name="submit2" class="btn btn-danger" value="submit">
            Search</button></div>
      </div>
      <div class="row container m-1" style="display:justify;margin:auto;">
        <div class="col" style="font-size:1.5rem;font-weight: bold;">Search By Year</div>
        <div class="col"><input type="year" name="yr" style="font-size:1.3rem;"></div>
        <div class="col"> <button type="submit" name="submit3" class="btn btn-danger" value="submit">
            Search</button></div>
      </div>
    </form>
<hr>
<div style="margin:3rem">
      <?php
  $error=$month=$dat=$yr="";
  $uname=$_SESSION["uname"];
  if(isset($_POST["submit1"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $dat=trim($_POST['dat']);
      $sql="SELECT * FROM $uname where dates='$dat'";
      $result=mysqli_query($conn,$sql);
     
      if(mysqli_num_rows($result)>0){
        echo "Following transactions are found in your database :<br>"."<hr>";
        echo "<table>";
        $balance=0;
        while ($row = mysqli_fetch_assoc($result)) {
          $balance=$balance+($row["income"]-$row["expense"]);
          echo "<tr><td>Balance : ".$balance."</td>";
          echo "<td>Date : ".$row["dates"]."  "."</td></tr>";
        }
        echo "</table>";
      }else{
        echo "NO Transaction Found";
      }
    }
  }
if(isset($_POST["submit2"])){
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month=trim($_POST['mon']);
    $sql="SELECT * FROM $uname where DATE_FORMAT(dates,'%Y-%m')='$month'";
    $result=mysqli_query($conn,$sql);
   
    if(mysqli_num_rows($result)>0){
      echo "Following transactions are found in your expense book :<br>"."<hr>";
      echo "<table>";
      $balance=0;
        while ($row = mysqli_fetch_assoc($result)) {
          $balance=$balance+($row["income"]-$row["expense"]);
          echo "<tr><td>Balance : ".$balance."</td>";
          echo "<td>Date : ".$row["dates"]."  "."</td></tr>";
        }
      echo "</table>";
    }else{
      echo "NO Transaction Found";
    }
  }
}
if(isset($_POST["submit3"])){
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yr=trim($_POST['yr']);
    $sql="SELECT * FROM $uname where YEAR(dates)='$yr'";
    
    $result=mysqli_query($conn,$sql);
   
    if(mysqli_num_rows($result)>0){
      echo "Following transactions are found in your expense book :<br>"."<hr>";
      echo "<table>";
      $balance=0;
        while ($row = mysqli_fetch_assoc($result)) {
          $balance=$balance+($row["income"]-$row["expense"]);
          echo "<tr><td>Balance : ".$balance."</td>";
          echo "<td>Date : ".$row["dates"]."  "."</td></tr>";
        }
      echo "</table>";
    }else{
      echo "NO Transaction Found";
    }
  }
}
  ?>
    </div>
  </div>
  <div id="intro"></div>
  <script src="mode1.js"></script>
</body>

</html>

     