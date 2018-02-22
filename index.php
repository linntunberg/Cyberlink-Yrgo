<?php declare(strict_types=1); ?>
<?php require __DIR__.'/views/header.php'; ?>

<article>
    <h1>Welcome to Cyberlink!</h1>

<?php
    $statement = $pdo->prepare('SELECT * FROM posts WHERE userID = :id');
    $statement->bindParam(':id', $_SESSION['user']); //user id is same as id, connects them.
    $statement->execute();
    $posts = $statement->fetch(PDO::FETCH_ASSOC);

foreach($posts as $post) {

    ?><ul>
        <li>Title: <?php echo $posts['title']?></li>
        <li>Link: <?php echo $posts['link']?></li>
        <li>Description: <?php echo $posts['description']?></li>
    </ul>
<?php
}
?>
