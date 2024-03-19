<?php

function redirect($link){
    echo "<script>window.location.href = '$link'</script>";
}

session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
 

 if(!empty($username)  && !empty($password)  && !is_numeric($username))
 {
    $query="select * from table1 where username ='$username' limit 1";
    $result=mysqli_query($con,$query);

    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data=mysqli_fetch_assoc($result);

            if($user_data['password'] == $password)
            {

                   //redirect("namu.php");
                   echo "<script>window.location.href = 'namu.php'</script>";
            }
        }
    }
    echo"<script type='text/javascript'> alert('wrong username or password')</script>";
}
else
{
    echo"<script type='text/javascript'> alert('wrong username or password')</script>";
}
 
 }
 ?>







<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="namu.css">
    </head>
    <body>
        <div class="login">
            <h1>Login</h1>
            <form method="POST">
                <label>username</label>
                <input type="text" name="username" required>
                <label>password</label>
                <input type="password" name="password" required>
                <input type="submit"  name="" value="submit">

            </form>
            <p>you don't have account? <a href="sing_up.php">singup</a></p>

        </div>
    </body>
</html>