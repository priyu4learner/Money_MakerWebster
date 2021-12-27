<?php
  session_start();
  require_once 'connect.php';
  $error=$uname=$amount=$source="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname=$_SESSION["uname"];//user name of the account holder
    $amount=trim($_POST['amt']);
    $a_source=trim($_POST['a_src']);
    $expense=trim($_POST['expense']);
    $e_source=trim($_POST['e_src']);
    //used to insert income and expense 
    $sql="INSERT INTO $uname (income,i_source,expense,e_source) VALUES ('$amount','$a_source','$expense','$e_source')";
    $result=mysqli_query($conn,$sql);
    if($result){
      $error="Your expense book is updated";
    }else{
      $error="Some problem occurred.";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="mode.css">
</head>
<body>
  <img src="money7.webp" style="width:100%;">
  <div id="mode_changer">
    <!------------Navigation bar-------------------->
    <nav class="nav nav-tabs">
      <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="add_income.php"
        style="font-size: 1.5rem;">Add
        Income</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="view_income.php" style="font-size: 1.5rem;">View Income</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="view_expense.php" style="font-size: 1.5rem;">View Expense</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="view_bal.php" style="font-size: 1.5rem;">View Balance</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="logout.php" style="font-size: 1.5rem;">Log Out</a>
    </nav>
    <!-------------------button for dark mode--------------------->
      <div id="dark_mode" style="float:right;">
        <button class="btn btn-warning" type="button" id="button"><svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12.29 7c-.74 0-1.45.17-2.08.46 1.72.79 2.92 2.53 2.92 4.54s-1.2 3.75-2.92 4.54c.63.29 1.34.46 2.08.46 2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg></button>
      </div>
    <div id="intro">
      <div class="card mt-5 container p-1" style="font-size:2rem;border-radius:1rem;background:rgb(253, 253, 132);">
        <div style="margin:auto;font-weight:bold;">
          <?php echo "Welcome ".$_SESSION["uname"]."!!";?><!-----used to get user name------->
        </div>
      </div>
      <div style="background:yellow;margin-top:1rem;">
        <?php echo $error?>
      </div>
    </div>
    <div style="text-align: center;font-size: 2.5rem;margin: 10px;padding: 20px;"><u>ADD INCOME</u></div>
    <hr>
    <!-------------------form to get income and expense from user------------->
    <form action="" method="post">
      <div style="text-align: center;margin: 20px;font-size: 1.5rem;font-weight: bold;">Income</div>
      <div><input type="text" name="amt" style="display: block;margin: auto;" required></div>
      <div style="text-align: center;margin: 20px;font-size: 1.5rem;font-weight: bold;">Income Source</div>
      <div><input type="text" name="a_src" style="display: block;margin: auto;" required></div>
      <div style="text-align: center;margin: 20px;font-size: 1.5rem;font-weight: bold;">Expense</div>
      <div><input type="text" name="expense" style="display: block;margin: auto;" required></div>
      <div style="text-align: center;margin: 20px;font-size: 1.5rem;font-weight: bold;">Expense Source</div>
      <div><input type="text" name="e_src" style="display: block;margin: auto;" required></div>
      <hr>
      <div> <button type="submit" name="submit" class="btn btn-danger" value="submit"
          style="display: block;margin:auto;">
          Submit</button></div>
    </form>
    <hr>
    
    <hr>
  </div>
  <script src="mode1.js">
</script>

</body>

</html>