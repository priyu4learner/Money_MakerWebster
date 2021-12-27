<?php
  session_start();
  require_once 'connect.php';
  $uname=$_SESSION["uname"];
  //if(isset($_POST['submit']))
  //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$date=trim($_POST['ie']);
    $myquery = "SELECT income  FROM $uname";
    $query = mysqli_query($conn,$myquery);
 
    if ( ! $query ) {
      echo mysqli_error();
      die;
    }
    $data = array();
    for ($x = 0; $x < mysqli_num_rows($query); $x++) {
      $data[] = mysqli_fetch_assoc($query);
    }
  // encode data to json format
    echo $data;
    echo json_encode($data);  
  //}
?>