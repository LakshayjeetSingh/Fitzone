<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'loginfo';
$conn=@mysqli_connect($host,$user,$pass,$db) or die("Could not connect.");
if(isset($_POST['signup']))
{   
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    if(!empty($email) && !empty($pass) && !empty($uname))
    {
         $query= "insert into users (uname,email,password) values('$uname', '$email','$pass')" ;
         $run=mysqli_query($conn,$query);
        if($run){
                        header('location:login.html');
                }
        else {
            echo "<script type='text/javascript'>location.replace(\"registration.html\");alert('User or Email already exists.\\nPress ok to try again.');</script>";
             }
    }
    else{
        echo "all fields are required";
    }
}
?>

