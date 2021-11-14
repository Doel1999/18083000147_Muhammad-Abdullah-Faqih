<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
    echo "<script>alert('Username Belum Diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.html'>";
}
else if (empty($password)){
    echo "<script>alert('Password Belum Diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.html'>";
}
else{
    session_start();
    include "koneksi.php";
    $login = mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE (username = '$_POST[username]') AND (password = '$_POST[password]')");
    //$login = mysql_query ("SELECT * from tbl_login where (username ='$_POST[username]') and (password='$_POST[password]')");
    $rowcount=mysqli_num_rows($login);
    if($rowcount==1)
    {
        $_SESSION['username'] = $_POST['username'];
        header("location:dashboard.php");
    }else{
    echo "<script>alert('Username atau Password Salah !!!')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.html'>";
}
}


/*include 'koneksi.php';
//include 'randbg.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
   header("Location: berhasillogin.php");
}

if (isset($_POST['submit'])) {
   $email = $_POST['username'];
   $password = md5($_POST['password']);

   $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
   $result = mysqli_query($conn, $sql);

   if ($result->num_rows > 0) {
       
       $row = mysqli_fetch_assoc($result);
       $_SESSION['username'] = $row['username'];
       $_SESSION['id'] = $row['id'];
       $_SESSION['status'] = $row['status'];
       if ($row['status']=='user'){
           header("Location: formuser.php");
       } else if ($row['status']=='admin'){
           header("Location: dashboard.php");
       } else {
           echo "<script>alert('Status Anda tidak di ketahui !. Silahkan hubungi admin !')</script>";
       }
       
   } else {
       echo "<script>alert('Pass atau password Anda salah. Silahkan coba lagi!')</script>";
   }
}
*/
?>

