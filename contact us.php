<?php 

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "tms";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if(empty($name) || empty($email) || empty($message)) {
    $status = "All fields are compulsory.";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
      $status = "Please enter a valid name";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Please enter a valid email";
    } else {

      $sql = "INSERT INTO contact_us (UserName,Email, Message) VALUES (:name, :email, :message)";

      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

      $status = "Your message was sent";
      $name = "";
      $email = "";
      $message = "";
    }
  }

}

?>
<!DOCTYPE html>
<html>
<head>
<style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

.contact {
position: realtive;
min-height: 100vh;
padding: 50px 100px;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
background-size: cover;
}
.contact .content {
max-width: 800px;
text-align: center;
}

.contact .content h2{
font-size: 36px;
font-weight: 500;
color: #fff;
}
.contact .content p{
font-weight: 300;
color: #fff;
}

.container .ContactInfo{
width: 50%;
padding:40px;
flex-direction: column;
}
.container .ContactInfo .box{
position:relative;
padding: 20px 0;
display: flex;
}
.container .ContactInfo .box .icon{
min-width: 60px;
height: 60px;
background: #fff;
display: flex;
justify-content: center;
align-items: center;
border-radius: 50%;
font-size: 22px;
}

.container .ContactInfo .box .text{
display: flex;
margin-left: 20px;
font-size: 16px;
color: orange ;
flex-direction: column;
font-weight: 300;
}

.container .ContactInfo .box .text h3{
font-weight: 500;
color:white ;
}

.ContactForm{
margin-top:58px;
width: 35%;
height:35%;
padding: 40px;
background: #fff;
}

.ContactForm h2{
font-size: 40px;
color: #333;
font-weight: 500;
}

.ContactForm .inputBox{
position: relative;
width:100%;
margin-top: 10px;
}

.ContactForm .inputBox input,
.ContactForm .inputBox textarea
{
width: 100%;
padding: 5px 0;
font-size: 16px;
margin: 10px 0;
border: none;
border-bottom: 2px solid #333;
outline:none;
resize: none;
}

.ContactForm .inputBox input[type="submit"]
{
width:100%;
background: #00bcd4;
color: #fff;
border: none;
border-radius: 50px;
cursor: pointer;
padding: 10px;
font-size: 18px;
}

@media (max-width: 991px)
{
.contact
{
padding: 50px;
}
.container
{
flex-direction:column;
}
.container .ContactInfo
{
margin-bottom: 40px;
}
.container .ContactInfo,
.ContactForm{
width: 100%;
}
}



.form-status {
  padding:8px;
  text-align: center;
  color:black;
  margin-top:8px;
  margin-bottom:-24px;
}
.logo {
    margin-top: 10px;
    height: 100px;
    width: auto;
    float: left;
    margin-left:150px;
}

.main-nav{
    float:right;
    list-style: none;
    margin-top: 55px;
    margin-left:300px;
}

.main-nav li{
 display: inline-block;
margin-left: 40px;
    
}

.main-nav li a:link,
.main-nav li a:visited{
padding:8px 0;
color:#fff; 
text-decoration: none;
text-transform: uppercase;
font-size: 120%;
border-bottom: 2px solid transparent; 
-webkit-transition: border-bottom 0.2s; 
transition: border-bottom 0.2s;
}

.main-nav li a:hover,
.main-nav li a:active{
    border-bottom: 2px solid #e67e22;   
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Wayward | Contact US Page</title>

</head>
<body style="background-image: url(contact.jpg);">
<nav>
<div class="row">
<img src="logo2.png" alt="logo" class="logo">

<ul class="main-nav">
 <li style="margin-left:150px"><i class="fa fa-home" style="width:20px;"></i><a href="frontend.php">Home</a></li>   
 <li><a href="contact us.php">contact us</a></li>   
 <li><a href="About Us.php">About Us</a></li>  
 <li><a href="registration_form.php">Sign up</a></li>  
 <li><a href="login_form.php">Sign in</a></li>
 
    </ul>
    </div>
    </nav>   
<br><br>
<div class="container">
<div class="ContactInfo" style="float:left;">
<div class="box">
<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
</div>
<div class="text">
<h3>Address</h3>
<p>India,Bihar,<br>Motihari,East Champaran,<br>845401</p>
</div>
</div>
<div class="box">
<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="text">
<h3>Phone</h3>
<p>7631704870 <br>7979853162 </p>
</div>
</div>
<div class="box">
<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="text">
<h3>Email</h3>
<p>sunnyraj7235@gmail.com <br>btech15169.19@bitmesra.ac.in </p>
</div>
</div>
</div>
<div class="ContactForm" style="float:right;">
    <form action="" method="POST" class="main-form">
<h2 style="text-allign:center;">Contact Us Here</h2>
   <div class="inputBox">   
     <div class="form-group">
        <input type="text" name="name" id="name" class="gt-input" placeholder="Enter Your Name"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
      </div>
    </div>
   <div class="inputBox">
      <div class="form-group">
        <input type="text" name="email" id="email" class="gt-input" placeholder="Enter Your Email"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
      </div>
   </div>
   <div class="inputBox">
      <div class="form-group">
        <textarea name="message" id="message" cols="" rows="" placeholder="Enter Your Message"
          class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
      </div>
   </div>
   <div class="inputBox">
      <input type="submit" class="gt-button" value="Submit">
   </div>
      <div class="form-status">
        <?php echo $status ?>
      </div>
    </form>
</div>

</div>

</body>

</html>
