<!DOCTYPE html>
<html>
<head>
  <title>send Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devive-width,initial-scale=1.0">
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
  width: 80%;
  margin-bottom: 15px;
    border-radius: 30px;
}
.input-field {
  width: 70%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid skyblue;
}
  </style>
</head>
<body >
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100" >
      <div class="user_card">
        <div class="d-flex justify-content-center form_container">
            
            
          <form method="post" action="conn1.php" style="margin-left: 10cm;"><br><br><br><br>
          
         <h1 style="margin-left:5cm;">Enter Email </h1>
            <section></section>
           <div class="input-group mb-3">
            <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter your email address here" name="email" required="" value="">
  </div>
              <div class="d-flex justify-content-center mt-3 login_container" style="margin-top">
                  <c> <a href="respass.php"><input type="submit" name="sub" value="check" class="btn" style="background-color: skyblue;height: 1cm;width: 4cm;" ><br><br></a>
          I already has Account <a href="log.php">Login</a></c> 
               </div></div>
          </form>
        </div>
    <br>
      </div>
    </div>
  </div>
</body>
</html>

