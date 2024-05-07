<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["nama"])) {
        $nama = $_POST["nama"];
    } else {
        echo "Nama tidak dimasukkan!";
        exit;
    }

    if(isset($_POST["menu"])) {
        $total_price = 0;

        foreach($_POST["menu"] as $menu) {
            switch ($menu) {
                case "nasi":$total_price += 2000;break;
                case "ikan_bakar":$total_price += 3000;break;
                case "ayam_bakar":$total_price += 4000;break;
                case "sayur_lodeh":$total_price += 2000;break;
                case "tumis_kangkung":$total_price += 2000;break;
                default:
                echo "Invalid menu selection!";exit;
            }
        }

        $bonus = "";
        $free_drinks = "";

        if ($total_price >= 7000 && $total_price < 13000) {
            $total_price -= 500;
            $bonus = "<h2>Hi, $nama</h2>";
            $free_drinks = "<h1>Bonus :</h1>
                            <ul>
                            <li>Minuman Gratis : Teh Manis Dingin</li>
                            </ul>";
        } elseif ($total_price == 13000) {
            $total_price *= 0.9;
            $bonus = "<h2>Hi, $nama</h2>";
            $free_drinks = "<h1>Bonus :</h1>
                            <ul>
                            <li>Minuman Gratis : Jus Alpukat</li>
                            <li>Diskon : 1.300</li>
                            <li>Harga Sekarang : 11.700</li>
                            </ul>";
        } else {
            $bonus = "<h2>Selamat Makan $nama, by Mamah Dedeh.</h2>";
        }
        $formatted_price = number_format($total_price, 0, ',', '.');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pembayaran Anda</title>
    </head>
    <body>
        <h1>Total Harga : <?php echo $formatted_price; ?></h1>
        <p><?php echo $bonus; ?></p>
        <p><?php echo $free_drinks; ?></p>
    </body>
</html>

<?php
    } else {
        echo "Anda belum memilih menu!";
    }
}
?>
