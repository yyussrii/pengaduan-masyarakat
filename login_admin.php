<?php

$user=$_POST['username'];
$pass=$_POST['password'];

include 'conn.php';
$sql= "SELECT * FROM petugas WHERE username='$user' AND password='$pass'";
$query = mysqli_query($conn, $sql);


if (mysqli_num_rows($query)>0){
        session_start();
        $data=mysqli_fetch_array($query);
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['user']=$data['user'];
        $_SESSION['nama_petugas']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];
        if($data['level']=="admin"){
        header('location:admin/admin.php');
        }else if ($data["level"]=="petugas"){
        header('location:employee/employee.php');     
    }
}   else {
    ?>
<script type="text/javascript">
alert('Username Atau Password Salah!');
window.location = "admin_index.php";
</script>
<?php
}
?>