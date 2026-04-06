
<?php
// menu.php
include 'header.php';

$items = [
    ["name" => "Vanilla Delight", "price" => 50],
    ["name" => "Chocolate Heaven", "price" => 60],
    ["name" => "Strawberry Love", "price" => 55],
    ["name" => "Mango Magic", "price" => 54],
    ["name" => "Butterscotch Bliss", "price" => 70]
];
?>
<div class="container">
    <h2>Menu</h2>
    <?php foreach($items as $i => $item) { ?>
        <div class="card">
    
            <h3><?php echo $item['name']; ?></h3>
            <p>₹<?php echo $item['price']; ?></p>
            <form method="POST" action="cart.php">
                <input type="hidden" name="name" value="<?php echo $item['name']; ?>">
                <input type="hidden" name="price" value="<?php echo $item['price']; ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    <?php } ?>
</div>
<?php include 'footer.php'; ?>