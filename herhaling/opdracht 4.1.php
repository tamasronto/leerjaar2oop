<?php
$products = array(
    array("Laptop", 999.99, 30),
    array("Smartphone", 699.99, 50),
    array("Monitor", 199.99, 75),
    array("Toetsenbord", 49.99, 120),
    array("Tablet", 299.99, 50)
);

foreach ($products as $product) {
    echo "Product: " . $product[0] . "<br>";
    echo "Prijs: €" . number_format($product[1], 2) . "<br>";
    echo "Voorraad: " . $product[2] . "<br><br>";
}
?>
