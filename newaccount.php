

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in and Sign up</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            background: linear-gradient(to right bottom, #4b6cb7, #182848);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
      
        .form-box{
            margin-top: 100px;
            margin-bottom:100px;
            width: 90%;
            max-width: 500px;
            height: 600px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #fff;
            padding: 50px 60px 70px;
            text-align: center;
            border-radius: 10px;
            
        }
        .form-box h1{
            font-size: 30px;
            margin-bottom: 60px;
           
            color: #333;
            font-weight: bold;
            letter-spacing: 2px;
            position: relative;
        }
        .form-box h1::after{
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: rgb(21, 33, 204);
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }
        .input-field{
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;
        }
        input{
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
        }
        .input-field i{
            margin-left: 15px;
            color: #999;
        }
        form p{
            text-align: left;
            font-size: 13px;
        }
        form p a{
            text-decoration: none;
            color: rgb(21, 33, 204);
        }
        .btn-field{
            margin-top: 10px;
            width: 80%;
            display: flex;
            justify-content: space-between;
            box-shadow: #555;
        }
        .btn-field button{
            flex-basis: 50%;
            background: rgb(21, 33, 204);
            color: #fff;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            margin-top: 40px;
            width: 100px;
            align-items: center;
        }
        .input-group{
            height: 280px;
        }
        .btn-field button.disable{
            background: #eaeaea;
            color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form action="" method="POST" name="form">
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" placeholder="Name" >
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email"  placeholder="Email" >
                </div>
                <div class ="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="tel" name ="phonenumber" placeholder="Contact address" pattern="[0-9]{10}">
                </div>
                <div class="input-field">
                    <Label>Gender</Label>
                    <input type="radio" name="gender" value="male" > Male
                    <input type="radio" name="gender" value="female" > Female
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Set a Username" >
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password"  placeholder=" set a Password" >
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-calendar-days"></i>
                    <input type="date" name="dateofbirth" placeholder="Date of birth" >
                </div>
            </div>
            <div class="btn-field">
                <input type="submit" id="signupBtn" value="Register" style="margin-left: 80px; margin-top: 150px; font-size: xx-large; color: rgb(127, 33, 44);">
            </div>
            <label>click here </label>
            <a href="loginonly1.php" style ="color: #666;  color: #4b6cb7;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;">login</a>
        </form>
    </div>
</div>
</body>
</html>


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="userinfo";

$conn=new mysqli($servername,$username,$password,$dbname);

@$name=$_POST['name'];
@$email=$_POST['email'];
@$phone_number=$_POST['phonenumber'];
@$gender=$_POST['gender'];
@$username=$_POST['username'];
@$password=$_POST['password'];
@$dateofbirth=$_POST['dateofbirth'];
@$dateofbirth_result=explode('-',$dateofbirth);
@$date=$dateofbirth_result[2];
@$month=$dateofbirth_result[1];
@$year=$dateofbirth_result[0];
@$date_new=$date.''.$month.''.$year;

if(!empty($name)&& !empty($email)&& !empty($phone_number)&& !empty($gender)&& !empty($username)&& !empty($password)&& !empty($dateofbirth)){
   

$sql="INSERT INTO `studentinfo` (`name`, `email`, `phone number`, `gender`, `username`, `password`, `dateofbirth`) VALUES ('$name', '$email', '$phone_number', '$gender', '$username', '$password', '$date_new')";
if($conn->query($sql)==True){

echo"<script type='text/javascript'> alert('Successfully submitted')</script>";


}}
else
{
    echo"<script type='text/javascript'> alert('Filled all details mention in sign up page')</script>";
  
}


    $conn->close();
    ?>
