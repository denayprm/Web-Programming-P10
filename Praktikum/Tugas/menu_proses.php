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
                case "nasi":
                    $total_price += 2000;
                    break;
                case "ikan_bakar":
                    $total_price += 3000;
                    break;
                case "ayam_bakar":
                    $total_price += 4000;
                    break;
                case "sayur_lodeh":
                    $total_price += 2000;
                    break;
                case "tumis_kangkung":
                    $total_price += 2000;
                    break;
                default:
                    echo "Invalid menu selection!";
                    exit;
            }
        }


        $bonus = "";
        $free_drinks = "";

        if ($total_price >= 7000 && $total_price < 13000) {
            $total_price -= 500;
            $bonus = "Hi, $nama! Bonus: Cold drink.";
            $free_drinks = "Free drinks: Cold drinks.";
        } elseif ($total_price == 13000) {
            $total_price *= 0.9;
            $bonus = "Hi, $nama! Bonus: Orange juice. Discount: 10%.";
            $free_drinks = "Free drinks: Juice.";
        } else {
            $bonus = "Hi, $nama! Happy eating at Kantin Mamah Dedeh.";
        }

        $formatted_price = number_format($total_price, 0, ',', '.');

        echo "<p>Total price: Rp. $formatted_price</p>";
        echo "<p>Congratulations, $nama! Enjoy your meal by Mamah Dedeh.</p>";
        echo "<p>$bonus</p>";
        echo "<p>$free_drinks</p>";
    } else {
        echo "Anda belum memilih menu!";
    }
}
?>
