<?php



$name=$_POST['name'];
$email=$_POST['email'];
$ph1=$_POST['ph1'];
$ph2=$_POST['ph2'];
$pass=$_POST['pass'];
$conpass=$_POST['conpass'];
$con=mysqli_connect("localhost", "root", "", "anonymous");

if($pass==$conpass)
{
    

    $select="SELECT * FROM customer WHERE email='$email' OR mobile='$ph1'";
    $result=($con->query($select));
    $row=mysqli_num_rows($result);
    if($row>0)
    {
        echo "User already exists<br>";
        echo "Go to <a href='log_in.html'>Log-In</a> page";
    }
    else
    {
        $sql="INSERT INTO customer SET name = '$name', email='$email', ph1='$ph1', ph2 = '$ph2', password='$pass'";
        $con->query($sql);
        header("location: log_in.html");
    }


    
}
else
{
    echo "Password not matched<br>";
    // header("Location: index.html"); 
    echo "Try again <a href='index.php'>Sign-up</a> page";
}


?>