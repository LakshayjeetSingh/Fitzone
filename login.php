<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'loginfo';
$conn=@mysqli_connect($host,$user,$pass,$db) or die("Could not connect.");
if(isset($_POST['login']))
{   
    $email=$_POST['email'];
    $pass=$_POST['password'];
    if(!empty($email) && !empty($pass))
    {
         $query= "select * from users where email='".$email."' and password='".$pass."' limit 1";
         $run=mysqli_query($conn,$query);
         $row=mysqli_num_rows($run);
        if($row==1){
                        header('location:home.html');
                }
        else {
            echo "<script type='text/javascript'>location.replace(\"login.html\");alert('Invalid credentials.\\nPress ok to try again\\nOr Register first.');</script>";
         }
    }
    else{
        echo "all fields are required";
    }
}
?>

