<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $no_tlp=$_POST['no_tlp'];
    $jabatan=$_POST['jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];

    if(empty($nama)){
        echo "<script>alert('nama pegawai tidak boleh kosong');
        location.href='register.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');
        location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');
        location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pegawai (nama,alamat,
        gender,no_tlp,jabatan,username,password,id_jabatan)
        value
        ('".$nama."','".$alamat."','".$gender."','".$no_tlp."',
        '".$jabatan."','".$username."','".md5($password)."','".$id_jabatan."')") or die (mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='register.php';</script>";
        }
    }
}
?>