<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["menu"]) && isset($_POST["name"])) {
        $menu = $_POST["menu"];
        $name = $_POST["name"];
        $price = 0;

        switch ($menu) {
            case "nasi":
                $price = 2000;
                break;
            case "ikan_bakar":
                $price = 3000;
                break;
            case "ayam_bakar":
                $price = 4000;
                break;
            case "sayur_lodeh":
                $price = 2000;
                break;
            case "tumis_kangkung":
                $price = 2000;
                break;
            default:
                echo "Invalid menu selection!";
                exit;
        }

        $total_price = $price;
        $bonus = "";
        $free_drinks = "";

        if ($total_price >= 7000 && $total_price < 13000) {
            $total_price -= 500;
            $bonus = "Hi, $name! Bonus: Cold drink.";
            $free_drinks = "Free drinks: Cold drinks.";
        } elseif ($total_price == 13000) {
            $total_price *= 0.9;
            $bonus = "Hi, $name! Bonus: Orange juice. Discount: 10%.";
            $free_drinks = "Free drinks: Juice.";
        } else {
            $bonus = "Hi, $name! Happy eating at Kantin Mamah Dedeh.";
        }

        $formatted_price = number_format($total_price, 0, ',', '.');

        echo "<p>Total price: Rp. $formatted_price</p>";
        echo "<p>Congratulations, $name! Enjoy your meal by Mamah Dedeh.</p>";
        echo "<p>$bonus</p>";
        echo "<p>$free_drinks</p>";
    } else {
        echo "Missing required input!";
    }
}
?>
