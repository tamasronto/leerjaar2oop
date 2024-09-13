<?php
// Maak de tweedimensionale array met producten
$products = [
    ["Laptop", 999.99, 30],
    ["Smartphone", 699.99, 50],
    ["Monitor", 199.99, 75],
    ["Toetsenbord", 49.99, 100]
];

// Print de naam en de prijs van het tweede product
echo $products[1][0] . " kost " . $products[1][1] . " euro\n";

// Verander de hoeveelheid van het vierde product naar 120
$products[3][2] = 120;

// Voeg een vijfde product toe
$products[] = ["Tablet", 299.99, 50];

// Print de volledige array
echo "Array\n(\n";
foreach ($products as $product) {
    echo "    Array ( [0] => " . $product[0] . " [1] => " . number_format($product[1], 2) . " [2] => " . $product[2] . " )\n";
}
echo ")";
?>
