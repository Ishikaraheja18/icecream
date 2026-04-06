<?php
// header.php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Parlour</title>
    <style>
        body { font-family: Arial; margin: 0; }
        header { background: #ff6f61; color: white; padding: 15px; text-align: center; }
        nav { background: #ff8a75; padding: 10px; text-align: center; }
        nav a { color: white; margin: 10px; text-decoration: none; }
        .container { padding: 20px; }
        .card { border: 1px solid #ccc; padding: 10px; margin: 10px; display: inline-block; width: 200px; }
        img { width: 100%; height: 150px; object-fit: cover; }
        button { background: #ff6f61; color: white; border: none; padding: 5px 10px; cursor: pointer; }
        footer { background: #ff6f61; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
    </head>
<body>
<header>
    <h1>Sweet Scoops Ice Cream</h1>
</header>
<nav>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="cart.php">Cart</a>
</nav>
