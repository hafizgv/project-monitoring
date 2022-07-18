<?php
include('connect.php');

if(isset($_POST['submit'])){
    $project = $_POST['project'];
    $client = $_POST['client'];
    $foto = $_POST['foto'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $mulai = $_POST['tgl_mulai'];
    $akhir = $_POST['tgl_akhir'];
    
    $query = mysqli_query($conn, "INSERT INTO project_manage(project_name, client, foto, email, name, start_at, finish_at) VALUES('$project', '$client', '$foto', '$email', '$nama', '$mulai', '$akhir')");
    
    if($query){
        header ("location:dashboard.php");
    }else{
    echo 'Data gagal diinput. Silakan coba lagi input <a href="input.php">di sini</a>';
    }
}
?>
