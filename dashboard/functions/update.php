<?php
include '../../function.php';

if (isset($_POST["update"])) {
    $id = $_POST['id'];   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];
    $updated_at = $_POST['updated_at'];
   

$sql = mysqli_query($conn, "UPDATE data1 SET 
  name = '$name',
  email = '$email',
  phone = '$phone',
  alamat = '$alamat',
  updated_at = '$updated_at'
     WHERE id = $id");

    echo "<script>alert('successfully update');
        location.href='../../index.php'</script>";
}
?>
