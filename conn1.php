<?php 
if (isset($_POST['sub'])) {
	$email=$_POST['email'];
	$g=0;
	include("connect.php");
	$sql="select* from account where Username=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
  $select=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['Username']==$email)
    {
    $g=$g+1;
    $tokenemail=$row['Username'];
}
  }
}
  if($g>=1){
	$sel=bin2hex(random_bytes(8));
	$jump=random_bytes(32);
	$url="http://localhost/aimee/respass.php?sel=$sel";

	
     $sql="delete from rec where email=?";
     $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
}
$x="insert into rec(email,token) values(?,?)";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$x)) {
 echo "statement failed";
}
else{
	
  mysqli_stmt_bind_param($st,"ss",$email,$sel);
  mysqli_stmt_execute($st);
}

$from = 'aimeempora@gmail.com';
$to = $email;
$subject = 'Reset password';
$message = 'Click on this link to reset password';
$message .= '<a href="'.$url.'';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
echo"Email sent! check your inbox";}
else{
	echo"Email not found";
}
}
?>