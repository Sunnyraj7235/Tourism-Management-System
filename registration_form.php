<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
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
error_reporting(0);
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobile'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret="SELECT * from `tblusers` where EmailId=:email";
    $queryt= $dbh -> prepare($ret);
    $queryt-> bindParam(':email', $email, PDO::PARAM_STR);
    $queryt-> execute();
    $results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
$sql="INSERT INTO `tblusers`(FullName,MobileNumber,EmailId,Password)VALUES(:fname,:mobno,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo $msg="<script>alert('You have signup  Scuccessfully');</script>";
echo "<script type='text/javascript'> document.location = 'login_form.php'; </script>";
}
else
{

echo $error="<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo $error="<script>alert('Email-id already exist. Please try again');</script>";
}
}
?>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.rpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.rpassword.focus();
return false;
}
return true;
} 

</script>
<center>
  <div class="container">
     <h3>Create Account</h3>
     <h6 style="color:gray">Get started with Social Media account</h6>
     <div><a class="btn btn-primary" href="#"><i class="fa fa-facebook"></i> Sign up with Facebook </a></div>
     <div><button class="btn btn-danger"><i class="fa fa-google-plus"></i> Sign up with Google+</button></div>
   <p class="divider-text">
      <span class="bg-light" style="color:gray">OR</span>
   </p>
     <form id="signup" name="signup" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return checkpass();">
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field form-control" type="text" placeholder="Full Name" name="name" required>
      </div>
    
      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field form-control" type="text" placeholder="Email Address" name="email" required>
      </div>
      <div class="input-container">
        <i class="fa fa-phone icon"></i>
        <input class="input-field form-control" type="text" placeholder="mobile Number" name="mobile" required>
      </div>
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field form-control" type="password" placeholder=" Create Password" name="password" required>
      </div>
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field form-control" type="password" placeholder=" Repeat Password" name="rpassword" required>
      </div>
      <button type="submit" class="btn btn-success" name="submit">Create Account</button>
     </form>
  </div>
</center>
</body>
</html>
