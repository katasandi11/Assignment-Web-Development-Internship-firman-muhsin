<?php

include '../../function.php';

if (isset($_GET["approve"])) {

    $value = $_GET["approve"];
   
    mysqli_query($conn, "UPDATE data1 SET sampah = 2 WHERE `id` =  '$value'");
  
    echo "<script>alert('Reporting telah diapprove');location.href='../../index.php'</script>";
}
?>