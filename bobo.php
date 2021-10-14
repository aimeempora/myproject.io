<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Verification</title>

<style>
  body {
  font-family: Arial, Helvetica, sans-serif; 
  background-image: url('images/2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
* {
  box-sizing: border-box;
    border-radius: 30px;
    
}
.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid darkblue;
}
</style>
</head>

    <body>
    <center>
    <section class="co"id="2">
                      <div class="contact-a">
                       <div class="container">
                        
                        <form action="verifi.php" method="POST">
 
                            <div><label align="center"><h3>Enter Verification code</h3></label></div>
    <div><input type="text"name="code" type="text" placeholder="Code "required>
  </div>
        <div><input type="submit" name="submit"value="code"></div></div></form></div></div></section>
</body>
</html>

