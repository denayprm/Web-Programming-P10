<!DOCTYPE html>
<html>
    <head>
        <title>Menu Kantin</title>
    </head>
    <body>
        <h2>Daftar Menu di Kantin Mamah Dedeh</h2>
        <form action="menu_proses.php" method="post">
            <input type="checkbox" id="nasi" name="menu[]" value="nasi">
            <label for="nasi">Nasi ---> Rp. 2.000</label><br>
            <input type="checkbox" id="ikan_bakar" name="menu[]" value="ikan_bakar">
            <label for="ikan_bakar">Ikan Bakar ---> Rp. 3.000</label><br>
            <input type="checkbox" id="ayam_bakar" name="menu[]" value="ayam_bakar">
            <label for="ayam_bakar">Ayam Bakar ---> Rp. 4.000</label><br>
            <input type="checkbox" id="sayur_lodeh" name="menu[]" value="sayur_lodeh">
            <label for="sayur_lodeh">Sayur Lodeh ---> Rp. 2.000</label><br>
            <input type="checkbox" id="tumis_kangkung" name="menu[]" value="tumis_kangkung">
            <label for="tumis_kangkung">Tumis Kangkung ---> Rp. 2.000</label><br>
            <p>
                <br><label for="nama">Nama:</label>
                <input type="etext" id="nama" name="nama">
                <p>
                    <input type="submit" value="Bayar Sekarang">
                </p>
            </p>
        </form>
    </body>
</html>
