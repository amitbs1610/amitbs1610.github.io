<?php 

$patient = mysqli_connect('localhost','root');

if($patient)
{
    echo "sucessful";
}else{
    echo "failed";
}

mysqli_select_db($patient,'covid');
$name = $_POST['name'];
$contactno=$_POST['contactno'];
$address= $_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];

echo"$name";
echo"$contactno";
echo"$address";
echo"$username";
echo"$password";






$query1 = "INSERT INTO `hospital`(`name`, `contactno`, `address`) 
            VALUES ('$name','$contactno','$address')"; 
mysqli_query($patient,$query1);

$query2 = "INSERT INTO `user`(`username`, `password`) 
           VALUES ('$username','$password')";    
header('location:bed1.php');
mysqli_query($patient,$query2);





?>



