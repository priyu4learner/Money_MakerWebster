<?php
require_once 'connect.php';
$uname=$password=$error='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$uname=trim($_POST['uname']);
$password=trim($_POST['pswd']); 
$sql="SELECT * FROM user_detail where uname='$uname' and pswd='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
 if($count==1){  
   session_start();
      $_SESSION["id"] = $id;
      $_SESSION["uname"] = $uname; 
    header("Location: add_income.php"); 
        }  
  else{  
      $error="you haven,t logged in. Check your email/password.";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="mode.css">
</head>
<style>
  #intu {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    ;
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
    <div style="background-color: antiquewhite;font-size: 1.5rem;text-align: center;margin-top: 10px;" id="welcome">WElCOME TO
      EXPENSE TRACKER ....Enter your email and password.</div>
    <div class="card mt-5 container p-4" id="intu">
      <form action="" method="post"id="intu2">
        <div style="font-weight: bold;font-size: 2.5rem;text-align: center;">Log In</div>
        <hr>
        <div class="form-group" style="text-align: center;">
          <div style="font-weight: 700;font-size: 1.5rem;margin: 20px;">User name:</div>
          <input type="text" name="uname" required>
        </div>
        <div class="form-group" style="text-align: center;">
          <div style="font-weight: 700;font-size: 1.5rem;margin: 20px;">Password:</div>
          <input type="password" name="pswd" required><br>
        </div>
        <hr>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-danger" value="submit"
            style="margin: auto;display: block;">log
            in</button>
        </div>
        <div>If you don`t have an account ,then register here <a href="signup.php">Register</a></div>
        <hr>
      </form>
      <div>
        <?php echo $error; ?>
      </div>
    </div>
    <hr>
  </div>
  <script src="mode2.js"></script>
</body>

</html>