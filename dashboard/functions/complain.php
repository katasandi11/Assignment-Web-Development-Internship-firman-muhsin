<?php
include '../../function.php';



if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone= mysqli_real_escape_string($conn, $_POST['phone']);
    $alamat =mysqli_real_escape_string($conn, $_POST['alamat']);
    $created_at = mysqli_real_escape_string($conn, $_POST['created_at']);
    $updated_at=mysqli_real_escape_string($conn, $_POST['updated_at']);
    $deleted_at =mysqli_real_escape_string($conn, $_POST['deleted_at']);
    $sampah =mysqli_real_escape_string($conn, $_POST['sampah']);
   

    $simpan=mysqli_query($conn, "INSERT INTO data1 VALUES('$id','$name','$email','$phone','$alamat','$created_at','$updated_at','$deleted_at','$sampah')");





    if ($simpan) {
        echo "<script>window.alert('Data Berhasil Disimpan')
        window.location='../../index.php'</script>";
    }else{
        echo "<script>window.alert('Data Gagal Disimpan')
        window.location='../../input.php'</script>";
       
    }
}
?>