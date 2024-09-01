<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include '_dbconnect.php';
    $name=$_POST['username'];
    $email=$_POST['signupEmail']; 
    $password=$_POST['signupPassword'];
    $confirm_password=$_POST['signupcPassword'];
//check whether this email exists
    $existSql = "select * from `users` where email='$email'";
    $result=mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0)
    {
        $showError="Email already in use";
    }
    else{
        if($password==$confirm_password)
        {
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `users` ( `name`, `email`, `password`, `confirm_password`, `timestamp`) VALUES ('$name', '$email', '$hash', '$hash', current_timestamp())";
                $result=mysqli_query($conn,$sql);
                if($result)
                {
                    $showAlert=true;
                    // session_start();
                    // $_SESSION['name']=$name;
                    header("Location: /index.php?signupsuccess=true");
                    exit();
                }
        }
        else{
            $showError="Passwords do not match";
            
        }
    }
    header("Location: /index.php?signupsuccess=false&error=$showError");

}

?>