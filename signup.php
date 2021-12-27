<?php
  require_once 'connect.php';
  $uname=$email=$password=$cpassword=$error="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = trim($_POST["uname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["pswd"]);
    $cpassword = trim($_POST["cpswd"]);
    $myquery="SELECT * FROM user_detail where uname=$uname";
    $mquery=mysqli_query($conn,$myquery);
    if($mquery){
      $error="User name exists.";
    }
    else{
      if($password==$cpassword){
        $sql = "INSERT INTO user_detail (uname, email, pswd) VALUES ('$uname','$email','$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
          $sql1="CREATE TABLE $uname ( id INT(255) NOT NULL AUTO_INCREMENT , income FLOAT , i_source VARCHAR(30) , expense FLOAT ,e_source VARCHAR(30) , dates DATE NOT NULL DEFAULT CURRENT_TIMESTAMP  , PRIMARY KEY (id))";
          $result1=mysqli_query($conn,$sql1);
          if($result1){
            $error="You have successfully registered";
            header("Location: login.php"); 
          }
        } 
        else
        {
          $error="Sorry some problem occur.";
        }
      }else{
      $error="Password did not match.";
      }
    }
  }  
  $conn->close();
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
    <div style="background-color: antiquewhite;font-size: 1.5rem;text-align: center;margin-top: 10px;" id="welcome">
      WElCOME TO EXPENSE TRACKER ....Enter your details to register.</div>
    <div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
      <?php echo $error; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="card mt-5 container p-4" id="intu">
      <form action="" method="post" class="form-control p-6" id="intu2">
        <div style="font-weight: bold;font-size: 2.5rem;text-align: center;">REGISTER</div>
        <hr>
        <div class="form-group">
          <div style="font-weight: 700;font-size: 1.5rem;margin-top: 20px;">User name :
            <input type="text" name="uname" required>
          </div>
        </div>
        <div class="form-group">
          <div style="font-weight: 700;font-size: 1.5rem;margin-top: 20px;margin-right: 20px;">Email :
            <input type="email" name="email" required>
          </div>
        </div>
        <div class="form-group">
          <div style="font-weight: 700;font-size: 1.5rem;margin-top: 20px;margin-right: 20px;">Password:
            <input type="password" name="pswd" required><br>
          </div>
        </div>
        <div class="form-group">
          <div style="font-weight: 700;font-size: 1.5rem;margin-top: 20px;margin-right: 20px;">Confirm Password:
            <input type="password" name="cpswd" required><br>
          </div>
        </div>
        <hr>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-danger" value="submit"
            style="margin: auto;display: block;">Sign Up</button>
        </div>
        <div>If you have already an account ,then login here <a href="login.php">Log In</a></div>
        <hr>
      </form>
      <div>
      </div>
    </div>
    <script src="mode2.js"></script>
</body>

</html>