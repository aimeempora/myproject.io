<?php
session_start();
$name=$_POST['username'];
$pwd=$_POST['password'];
$str='aimee_aha'.$pwd;

 $pass = hash('sha1',$str);

$x=0;
$y=0;
include("connect.php");
$select=mysqli_query($conn,"select* from account");
while($user=mysqli_fetch_array($select))
{
if(($name==$user['Email'])&&($pass==$user['Password']) || ($name==$user['Username'])&&($pass==$user['Password']))
{
 $fst=$user['Username'];
  $eml=$user['Email'];
  $x=1;
  $_SESSION['name']=$name;
  $_SESSION['Password']=$pwd;
    
}
}
if($x==1)
{

  $query = "SELECT * FROM account WHERE Email='$name' AND status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
}
if($num_rows > 0){
  if (!empty($_POST['remember'])) {
$check=$_POST['remember'];
   setcookie("name",$name,time()+3600*24*7);
   setcookie("password",$pwd,time()+3600*24*7);
   setcookie("check",$check,time()+3600*24*7);
  }
  else{
$check=0;
     setcookie("name",$name,7);
       setcookie("password",$pwd,7);
         setcookie("check",$check,7);
  }
header("location:welcome.php");
}
else{
   //echo"account not verified"; 
    header("location:log.php?ver=not");
  //header("location:");
}
}

else{
  echo "incorect username or password".$pass;
}
?>
