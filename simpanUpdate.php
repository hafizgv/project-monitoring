<?php
include('connect.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $project = $_POST['project'];
    $client = $_POST['client'];
    $foto = $_POST['foto'];
    $nama = $_POST['nama'];
    $mulai = $_POST['tgl_mulai'];
    $akhir = $_POST['tgl_akhir'];
    
    $query = mysqli_query($conn, "UPDATE project_manage SET project_name='$project', client='$client', foto='$foto', name='$nama', start_at='$mulai', finish_at='$akhir' WHERE id='$id'");
    
    if($query){
        header ("location:dashboard.php");
    }else{
        echo 'Data gagal diupdate. Silakan coba lagi input <a href="edit.php">di sini</a>';
    }
}   
?>