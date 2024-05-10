<?php




$servername="localhost";
$username="root";
$password="";
$dbname="userinfo";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:". $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    @$sql ="select * from studentinfo where username='@$username'AND password='@$password'";
   @$result=mysqli_query($conn,$sql);
   // $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    @$count=mysqli_num_rows($result);

    if( @$result==1){
       
        header("Location:postlogin.html");
     } 
    
    else{
      
        echo"<script type='text/javascript'> alert('incorrect username and password')</script>";
     
    } 
    
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right bottom, #4b6cb7, #182848);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .centre {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .txt_field {
            position: relative;
            margin-bottom: 30px;
        }

        .txt_field input {
            width: 100%;
            padding: 10px;
            background: none;
            border: none;
            outline: none;
            color: #333;
            font-size: 18px;
            border-bottom: 2px solid #ccc;
            transition: border-color 0.3s;
        }

        .txt_field input:focus {
            border-color: #4b6cb7;
        }

        .txt_field label {
            position: absolute;
            top: 50%;
            left: 0;
            color: #666;
            transform: translateY(-50%);
            transition: 0.3s;
        }

        .txt_field input:valid ~ label {
            top: -20px;
            font-size: 14px;
            color: #4b6cb7;
        }

        .btn-field {
            margin-top: 20px;
        }

        #loginBtn {
            cursor: pointer;
            font-size: 18px;
            border-radius: 25px;
            width: 100%;
            padding: 12px 0;
            background: linear-gradient(to right, #4b6cb7, #182848);
            color: #fff;
            border: none;
            transition: background 0.3s;
        }

        #loginBtn:hover {
            background: linear-gradient(to right, #182848, #4b6cb7);
        }

        .signup_link {
            margin-top: 20px;
            color: #666;
        }

        .signup_link a {
            color: #4b6cb7;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .signup_link a:hover {
            color: #182848;
        }

        .pass {
            margin-top: 10px;
            color: #999;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s;
        }

        .pass:hover {
            color: #4b6cb7;
        }
    </style>
</head>
<body>
<div class="centre">
    <h1>Login</h1>
    <form action="" method="post">
        <div class="txt_field">
            <input type="text" name="username" required>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <label>Password</label>
        </div>
        <div class="btn-field">
            <input type="submit" id="loginBtn" value="Login">
        </div>
        <div class="pass">Forgot Password?</div>
        <div class="signup_link">
            Don't have an account? <a href="newaccount.html">Sign up</a>
        </div>
    </form>
</div>
</body>
</html>
