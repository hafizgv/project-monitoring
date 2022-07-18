<?php
include 'connect.php';
include 'header.php';

$id = (isset($_GET['id']))?$_GET['id']:'';
 
$query = mysqli_query($conn, "select * from project_manage where id='$id'");
$data = mysqli_fetch_array($query);
 
$id = $data['id'];
$project = $data['project_name'];
$client = $data['client'];
$foto = $data['foto'];
$email = $data['email'];
$nama = $data['name'];
$mulai = $data['start_at'];
$akhir = $data['finish_at'];
 
?>
<head>
    <title>Edit Project</title>
</head>
<body class="bg-info" style="height: 47vw;">
    <div class="container body-utama" style="height: 47vw;">
        <form action="simpanUpdate.php" method="post">
        <h4 class="text-center pb-2" style="font-weight:bold; font-family:'Open Sans';">Edit Project</h1>
            <table class="table table-borderless bg-light w-75 mx-auto" style="border-radius: 20px; padding: 2rem;">
                <tbody>
                    <tr>
                        <td>Project Name</td>
                        <td style="width: 1%;">:</td>
                        <td colspan="2"><input type="text" name="project" value="<?php echo $project?>" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td >Client</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="client" value="<?php echo $client?>" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td >Image</td>
                        <td>:</td>
                        <td colspan="2"><input type="file" name="foto" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit"></td>
                    </tr>
                    <tr>
                        <td >Email</td>
                        <td>:</td>
                        <td colspan="2"><input type="email" name="email" value="<?php echo $email?>" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td >Nama</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="nama" value="<?php echo $nama?>" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td>Start Date</td>
                        <td>:</td>
                        <td colspan="2"><input type="date" name="tgl_mulai" value="<?php echo $mulai?>"></td>
                    </tr>
                    <tr>
                        <td>End Date</td>
                        <td>:</td>
                        <td colspan="2"><input type="date" name="tgl_akhir" value="<?php echo $akhir?>"></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="id" value="<?php echo $id ?>"><td class="text-center" colspan="3"><input style="margin-top: 1.2rem;" type="submit" name="submit" value="Simpan"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
