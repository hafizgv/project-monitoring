<?php
include('connect.php');
 
$id = $_GET['id'];
 
$query = mysqli_query($conn, "DELETE FROM project_manage WHERE id='$id'");
 
if($query){
    header ("location:dashboard.php");
}else{
    echo 'Data gagal diinput. Klik <a href="index.php">di sini</a> untuk ke Dashboard.';
}
 
?>