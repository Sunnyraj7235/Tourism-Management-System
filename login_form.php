<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  
  .input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 30%;
    margin-bottom: 15px;
    margin-left: 54px;
  }
  
  .icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 45px;
    text-align: center;
  }
  
  .input-field {
    width: 69%;
    padding: 10px;
    outline: none;
  }
  
  .input-field:focus {
    border: 2px solid dodgerblue;
  }
  
  /* Set a style for the submit button */
  .btn {
    margin-bottom: 15px;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 25%;
    opacity: 0.9;
  }
  
  .btn:hover {
    opacity: 1;
  }
  </style>
</head>
<body style="background:#e8e6e9"> 

<?php

include'config.php';
if(isset($_POST['submit']))
{
  session_start();
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";

$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{

echo "<script>alert('Loging Successful');</script>";
echo "<script type='text/javascript'> document.location = 'user/package-list.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

  }
}
$dbh1=mysqli_connect('localhost', 'root', '', 'tms');
$sql1 ="SELECT FullName,EmailId,Password FROM tblusers WHERE EmailId='$email'";
$result= mysqli_query($dbh1,$sql1);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['username'] = $row['FullName'];
    $_SESSION['email'] = $row['EmailId'];
  }
}  
?>
<center>
  <div class="container">
     <h3 style="font-family:serif;">User Login</h3>
     <h6 style="color:gray">Get started with Social Media account</h6>
     <div><a class="btn btn-primary" href="#"><i class="fa fa-facebook"></i> Login with Facebook </a></div>
     <div><button class="btn btn-danger"><i class="fa fa-google-plus"></i> Login with Google+</button></div>
   <p class="divider-text">
      <span class="bg-light" style="color:gray">OR</span>
   </p>
     <form id="signup" name="signup" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return checkpass();">
     
    
      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field form-control" type="text" placeholder="Email Address" name="email" required>
      </div>
      
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field form-control" type="password" placeholder=" Create Password" name="password" required>
      </div>
      
        <a  href="/web/user/forgot-password.php"><h6 style="color:gray">Forgot Password?</h6></a>
      <button type="submit" class="btn btn-success" name="submit">Login Here</button>
      <h6 style="color:gray">Don't Have an account?<a  href="registration_form.php">Sign Up Here</a></h6>
     </form>
  </div>
</center>
</body>
</html>
