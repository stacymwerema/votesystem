<?php
include("connect.php");

$idno=$_POST['idno'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$std=$_POST['std'];


if($password != $cpassword){
    echo '<script>
    alert("passwords do not match");
    window.location="registration.php";
    </script>';
}else{
    $sql="insert into 'register'(username, password,standard,status,votes) 
    values('$idno', '$password', '$std', 0,0)"
}

    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
    alert("Registration successful");
    window.location="../";
    </script>';
    }



?>