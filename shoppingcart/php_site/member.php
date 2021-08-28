<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM members WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the member from the database and return the result as an Array
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the member exists (array is not empty)
    if (!$member) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Member not found!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Member not found!');
}
?>

<?=template_header('Members')?>

<div class="member content-wrapper">
    <img src="imgs/<?=$member['img']?>" alt="<?=$member['name']?>" id="image">
    <div>
        <h1 class="name"><?=$member['name']?></h1>
        <span class="caption">
            <?=$member['caption']?>
        </span>
        <form action="index.php?page=na" method="post">
            <input type="hidden" name="member_id" value="<?=$member['id']?>">
            <input type="submit" value="Contact Me">
        </form>
        <div class="description">
            <?=$member['profile']?>
        </div>
    </div>
</div>

<?=template_footer()?>