<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('About')?>

<div class="featured">
<style>
    main .featured {
        background-image: url(imgs/featured-image_2.jpg);
    }
    </style>
    <h2>About Us</h2>
    <p>Our Mission</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Bringing Aesthetics to you</h2>
    <div class="products">
     <p id="text">Greetings. our mission is to provide you with access to many historic pieces.</p>
    </div>
</div>

<?=template_footer()?>