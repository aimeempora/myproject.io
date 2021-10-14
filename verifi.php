<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
    $email=$_SESSION['email'];
    $code=$_POST['code'];

   $que = "SELECT * FROM account WHERE code=?";
    $stt = $conn->prepare($que);
    $stt->bind_param('i',$code);
    if($stt->execute()){
    $result = $stt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
      $que = "UPDATE account SET status='verified' WHERE Username=? ";
  $stmti = $conn->prepare($que);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
header('location:log.php?upd=turu');

    }
  else{
    echo"Invalid activation code";
  }

  }
?>