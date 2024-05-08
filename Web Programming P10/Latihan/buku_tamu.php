<html>
    <head>
        <title>Buku Tamu</title>
    </head>

    <body>
        <h3>ISI BUKU TAMU</h3>
        <form action="proses_buku.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br/>
                        <input type="radio" name="jk" value="Perempuan"> Perempuan <br/>
                    </td>
                </tr>
                <tr>
                    <td>Program studi</td>
                    <td>:</td>
                    <td>
                        <select name="prodi">
                            <option value="Informatika">Informatika</option>
                            <option value="S1">Sistem Informasi</option>
                            <option value="D3">D3 Sistem Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi[]" value="ngoding">Ngoding<br/>
                        <input type="checkbox" name="hobi[]" value="medsos">Medsos<br/>
                        <input type="checkbox" name="hobi[]" value="tidur">Tidur<br/>
                    </td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td>:</td>
                    <td>
                        <textarea name="pesan" row=5 cols=30></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input type="submit" value="kirim">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>