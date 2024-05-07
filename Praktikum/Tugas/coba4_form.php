<!DOCTYPE html>
<html>
    <body>
        <h2>Kantin Mamah Dedeh</h2>
        <form action="coba4_proses.php" method="post">
            <label for="menu">Select Menu:</label><br>
            <input type="checkbox" id="nasi" name="menu[]" value="nasi">
            <label for="nasi">Nasi - Rp. 2000</label><br>
            <input type="checkbox" id="ikan_bakar" name="menu[]" value="ikan_bakar">
            <label for="ikan_bakar">Ikan Bakar - Rp. 3000</label><br>
            <input type="checkbox" id="ayam_bakar" name="menu[]" value="ayam_bakar">
            <label for="ayam_bakar">Ayam Bakar - Rp. 4000</label><br>
            <input type="checkbox" id="sayur_lodeh" name="menu[]" value="sayur_lodeh">
            <label for="sayur_lodeh">Sayur Lodeh - Rp. 2000</label><br>
            <input type="checkbox" id="tumis_kangkung" name="menu[]" value="tumis_kangkung">
            <label for="tumis_kangkung">Tumis Kangkung - Rp. 2000</label><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <input type="submit" value="Pay Now">
        </form>
    </body>
</html>
