<?php
$title = "Postkni ko'rish";
require './includes/header.php';
require './database.php';
$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM posts WHERE id=?");
$statement->execute([$id]);
$post = $statement->fetch();
var_dump($post);
echo 'salom'
?>

<div class="container mt-5">
    <h2>Id: <?= $post['id'] ?></h2>
    <h1>Sarlavha: <?= $post['sarlavhaa'] ?></h1>
    <p> Matin: <?= $post['matinn'] ?></p>
    <p> Yarailgan vaqti: <?= $post['create_at'] ?></p>
</div>

<?php require './includes/footer.php' ?>