
<?php
session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    $Full_name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
 

 if(!empty($username)  && !empty($password)  && !is_numeric($username))
 {
    $query = "insert into table1 (name,username,password) values('$Full_name','$username','$password')";

    mysqli_query($con, $query);
 
     echo"<script type='text/javascript'> alert('Successfully Register')</script>";
 }
 
else
{
    echo"<script type='text/javascript'> alert('please enter some valid information')</script>";
}

 }
?>


<html>
    <head>
        <title>sign up</title>
        <link rel="stylesheet" href="namu.css">
    </head>
    <body>
        
            <div class="singup">
                <h1>sign up</h1>
                <form method="POST">
                    <label>full Name :</label>
                    <input type="text" name="name" required>
                    <label>username</label>
                    <input type="text" name="username" required>
                    <label>password</label>
                    <input type="password" name="password" required>
                    <input type="submit" name="" value="submit">
                </form>
                <p>you have already account?<a href="login.php">Login Here</a></p>
            </div>
        </from>
    </body>
</html>