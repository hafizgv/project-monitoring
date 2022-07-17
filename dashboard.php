<?php 

include_once("connect.php"); 
include 'header.php';

?>
<head>
    <title>Dashboard</title>
</head>
<body>
    <div class="bg-info" style="height: 700px;">
        <div class="container body-utama" style= "height:700px;">
            <h4 class="text-center pb-2" style="font-weight:bold; font-family:'Open Sans';">Project Monitoring</h1>
            <table class="table table-borderless table-light">
                <thead>
                    <tr class="table-secondary text-uppercase text-center table-header">
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col" colspan="2">Project Leader</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM project_manage";
                    $query = mysqli_query($conn, $sql);

                    while($project = mysqli_fetch_array($query)){
                        $img = $project['foto'];
                        $d_start = date('d F Y',strtotime($project['start_at']));
                        $d_end = date('d F Y',strtotime($project['finish_at']));
                        echo '<tr>';
                        echo '<td class="text-center">'.$project['project_name'].'</td>';
                        echo '<td class="text-center">'.$project['client'].'</td>';
                        echo '<td class="text-center">';
                            echo '<img src="data:image/jpeg;base64,'.base64_encode( $img ).'" class="rounded-circle" width=35 height=35>
                        </td>';
                        echo '<td>
                            <p class="">'.$project['name'].'</p>
                        </td>';
                        echo '<td class="text-center">';echo $d_start;echo '</td>';
                        echo '<td class="text-center">';echo $d_end;echo '</td>';
                        echo '<td class="align-middle">
                            <div class="w3-light-blue w3-round-small">
                                <div class="w3-container w3-blue w3-padding-small w3-round-small" style="width:25%"></div>
                            </div><span class="small-text">25%</span>
                        </td>';
                        echo '<td class="text-center">
                            <a onclick="return confirm("Hapus project ini?";)" href="remove.php?id='.$project["id"].'" class="link-danger fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                            </a>
                            <a href="edit.php?id='.$project["id"].'" class="link-success fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </a>
                        </td>
                    </tr>';
                    }
                    ?>
                    <tr>
                        <td class="text-center">Live 24 Jam</td>
                        <td class="text-center">TikTok</td>
                        <td class="text-center">
                            <img src="assets/orangkeren.jpeg" class="rounded-circle" width="35">
                        </td>
                        <td>
                            <p class="">Bang Mullet</p>
                        </td>
                        <td class="text-center">20 Mei 2015</td>
                        <td class="text-center">21 Januari 2060</td>
                        <td>
                            <div class="w3-light-blue w3-round-small">
                                <div class="w3-container w3-green w3-padding-small w3-round-small" style="width:100%"></div>
                            </div><span class="small-text">100%</span>
                        </td>
                        <td class="text-center">
                            <a class="link-danger fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                            </a>
                            <a class="link-success fa-stack fa-lg">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>