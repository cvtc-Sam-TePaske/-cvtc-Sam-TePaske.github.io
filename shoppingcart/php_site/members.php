<?php
// Get the 4 most recently added members
$stmt = $pdo->prepare('SELECT * FROM members ORDER BY date_added ');
$stmt->execute();
$recently_added_members = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<div class="featured">
    <h2>Members</h2>
    <p>Who we are</p>
    <style>
    main .featured {
        background-image: url(imgs/featured-image_3.jpg);
    }
    </style>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Our Valued Partners</h2>
    <div class="members">
        <?php foreach ($recently_added_members as $member): ?>
        <a href="index.php?page=member&id=<?=$member['id']?>" class="member">
            <img src="imgs/<?=$member['img']?>" width="200" height="200" alt="<?=$member['name']?>">
            <span class="name"><?=$member['name']?></span>
            <span class="caption">
                <?=$member['caption']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>