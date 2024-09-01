<?php
// $showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include '_dbconnect.php';
    $email=$_POST['loginEmail'];
    $pass=$_POST['loginPass'];

    $sql="select * from `users` where email='$email'";
    // $name="select name fron `users` where email='$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==1)
    {
        $row = mysqli_fetch_assoc($result);
        
            if(password_verify( $pass , $row['Password']))
            {
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['email']=$email;
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['username']=$row['name'];

                // echo "logged in".$name;
                
                // exit();
            }
            header("Location: index.php");
            // else{
            //     echo "unable to login";
            // }

        
    }
    header("Location: /index.php");
}
?>