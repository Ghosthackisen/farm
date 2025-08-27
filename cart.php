<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'] ?? 'Unknown';
    $_SESSION['cart'][] = $product;
    echo "Product '$product' added to cart.";
} else {
    echo "No product received.";
}
?>
