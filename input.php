<?php
include 'header.php';
?>

<head>
    <title>Input Project</title>
</head>
<body class="bg-info">
    <div class="container body-utama" style="height: 700px;">
        <form action="simpanInput.php" method="post">
        <h4 class="text-center pb-2" style="font-weight:bold; font-family:'Open Sans';">Input Project</h1>
            <table class="table table-borderless bg-light w-75 mx-auto" style="border-radius: 20px; padding: 2rem;">
                <tbody>
                    <tr>
                        <td>Project Name</td>
                        <td style="width: 1%;">:</td>
                        <td colspan="2"><input type="text" name="project" placeholder="Nama Project" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td >Client</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="client" placeholder="Nama Client" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td >Image</td>
                        <td>:</td>
                        <td colspan="2"><input type="file" name="foto" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit"></td>
                    </tr>
                    <tr>
                        <td >Nama</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="nama" placeholder="Nama Ketua" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td>Start Date</td>
                        <td>:</td>
                        <td colspan="2"><input type="date" name="tgl_mulai"></td>
                    </tr>
                    <tr>
                        <td>End Date</td>
                        <td>:</td>
                        <td colspan="2"><input type="date" name="tgl_akhir"></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="3"><input style="margin-top: 1.2rem;" type="submit" name="submit" value="Simpan"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>