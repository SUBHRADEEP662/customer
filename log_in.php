<?php

session_start();

$id=$_POST['id'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost", "root", "", "anonymous");
$sql="SELECT * FROM customer WHERE email='$id' AND password='$pass'";
$result=$con->query($sql);
$row=mysqli_num_rows($result);
if($row==1)
{
    while($r = $result->fetch_assoc()){
        $_SESSION['name'] = $r['name'];
        $_SESSION['password'] = $r['password'];
        header("location: home.php");
    } 
     
}
else
{
    echo "User not found<br>Back to <a href='log_in.html'> Log-In </a>page"; 
}

?>