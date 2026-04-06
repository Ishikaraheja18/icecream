<?php
// cart.php
include 'header.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = [
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];
    $_SESSION['cart'][] = $item;
}
?>
<div class="container">
    <h2>Your Cart</h2>
    <?php
    $total = 0;
    foreach($_SESSION['cart'] as $item) {
        echo "<p>".$item['name']." - ₹".$item['price']."</p>";
        $total += $item['price'];
    }
    echo "<h3>Total: ₹$total</h3>";
    ?>
</div>
<?php include 'footer.php'; ?>
