<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5 ($_POST['password']);

$query = "select * from user where username='$username' and password='$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);

if ($fechResult['role'] =='admin') {
    echo "Anda berhasil login ";
    echo "<a href='adminDashboard.html'>Admin</a>";
}elseif ($fechResult['role'] =='user') {
    echo "Anda berhasil login ";
    echo "<a href='userDashboard.html'>User Dashboard</a>";
}else{
    echo "Anda gagal login ";
    echo "<a href='loginForm.html'>Login</a>";
}
mysqli_close($connect);
?>