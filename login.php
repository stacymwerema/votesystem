<?php
session_start();
include('connect.php');

$idno=$_POST['idno'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql="Select * from 'register' where idno='$idno' and password='$password' and standard='$std'";
$resultcandidate=mysqli_query($con, $sql);

if(mysqli_num_rows($resultcandidate)>0){
    $sql="Selest idno,votes,id from 'register' where standard = 'candidates'"
    $candidates=mysqli_fetch_all($resultcandidate,MYSQLI_ASSOC);
    $_SESSION['candidates']=$candidates;
}
$data=mysqli_fetch_array($result);
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION['id']=$data['id'];

echo '<script>
alert("Invalid credentials");
window.location= "../dashboard.php";
</script>'

else{
echo '<script>
alert("Invalid credentials");
window.location= "../";
</script>'
}
?>