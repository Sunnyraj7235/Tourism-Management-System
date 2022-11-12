<?php
session_start();
include'config.php';
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'Admin/dashboard.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Wayward | Admin Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box ;
            font-family: poppins;
            text-decoration: none;
        }
        body{
            margin: 8%;
            background-color: #f2f4f6;

        }
        div.login-form{
            width: 450px;
            background-color: white;
            box-shadow: 0px 5px 10px black;
        }
        div.login-form h2{
            text-align: center;
            background-color: #204969;
            padding: 5px 0px;
            color: white;
            font-family:Helvetica;
        }
        div.login-form form{
            padding: 30px 80px;
        }
        div.login-form form div.input-field{
            display: flex;
            flex-direction: row;
            margin: 10px 0px;
        }
        div.login-form form div.input-field i{
            color: darkslategray;
            padding: 10px 14px;
            background-color: #f2f4f6;  
            margin-right: 4px;        
        }
        div.login-form form div.input-field input{
             background-color: #f2f4f6;
             padding: 10px;
             border: none;
             width: 100%;
             padding-left: 15px;
        }
        div.login-form form .login{
            width: 100%;
            background-color: #5bd1d7;
            padding: 8px;
            border: none;
            font-size: 16px;
            font-weight: 500;
            color: white;
            margin: 15px 0;
            transition: background-color 0.4s;
        }
        div.login-form form .login:hover{
            background-color: #41b6e6;
        }
        div.login-form form div.extra{
            font-size: 14px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 45px;
    text-align: center;
  }
    </style>
</head> 
<body>
       <center>
	  <div class="login-form">
        <h2>Admin signin</h2>
        <form method="post">
            <div class="class input-field">
                <i class="fa fa-user icon"></i>
                <input type="text" name="username" class="name" placeholder="Username" required=""><div class="clearfix"></div>
            </div>
            <div class="class input-field">
                <i class="fa fa-key icon"></i>
                <input type="password" name="password" class="password" placeholder="password" required=""><div class="clearfix"></div>
            </div>
            <input type="submit" class="login" name="login" value="Sign In">
            <div class="extra">
                <a href="frontend.php">Visit Website</a>
            </div>
        </form>
    </div>
     </center>
</body>
</html>
