<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5 ($_POST['password']);

$query = "select * from user where username='$username' and password='$password'";
$result = mysqli_query($connect,$query);
$rowcount = mysqli_num_rows($result);

if($rowcount>0){
    session_start();
    $fechResult = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
}
if ($fechResult['role'] =='admin') {
    echo "Anda berhasil login ";
    echo "<a href='adminSessionDashboard.php'>Admin</a>";
}elseif ($fechResult['role'] =='user') {
    echo "Anda berhasil login ";
    echo "<a href='userSessionDashboard.php'>User Dashboard</a>";
}else{
    echo "Anda gagal login ";
    echo "<a href='sessionLoginForm.html'>Login</a>";
}
mysqli_close($connect);
?>