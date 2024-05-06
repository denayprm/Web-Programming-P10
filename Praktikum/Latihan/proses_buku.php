<?php
    $nama - $_POST["nama"];
    $jk = $_POST["jk"];
    $prodi = $_POST["prodi"];
    $hobi = $_POST["hobi"];
    $pesan = $_POST["pesan"];

?>
<html>
    <head>
        <title>TAMPILAN BUKU TAMU</title>
    </head>
    <body>
        <h3>ISI BUKU TAMU</h3>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo  $jk; ?></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><?php echo $prodi; ?></td>
            </tr>
            <tr>
                <td valign="top">Hobi</td>
                <td valign="top">:</td>
                <td>
                    <?php
                        if(!empty($hobi)){
                            echo "<ul>";

                            foreach($hobi as $value){
                                echo "<li>$value</li>";
                            }
                            echo "</ul>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td><?php echo $pesan; ?></td>
            </tr>
        </table>
    </body>
</html>