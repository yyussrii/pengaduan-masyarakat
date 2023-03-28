<?php

require 'conn.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql= mysqli_query($conn, "select * from masyarakat where username='$user' and password='$pass' ");
$check= mysqli_num_rows($sql);

if ($check > 0){
    $data=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['nama']=$user;
    $_SESSION['nik']=$data['nik'];
    header('location:users.php');
}
else
{
    ?>
<script type="text/javascript">
alert('Username Atau Password Salah!');
window.location = "index.php";
</script>
<?php
}

?>