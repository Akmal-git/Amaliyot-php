<?php
$title = "Album";
require './includes/header.php';
require './database.php';

$statements = $pdo->prepare('SELECT * FROM posts');
$statements->execute();
$posts = $statements->fetchAll();
?>

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="./post_create.php" class="btn btn-primary my-2">Post yaratish</a>
                    <a href="./index.php" class="btn btn-secondary my-2">Bosh saxifa 🐘 </a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <?php if (isset($_SESSION['post-yaratildi'])): ?>
                <div class="alert alert-info" role="alert">
                    <?= $_SESSION['post-yaratildi']; ?>
                    <?php unset($_SESSION['post-yaratildi']); ?>
                </div>
            <?php endif ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($posts as $post): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="40%" y="50%" fill="#eceeef">PHP 🐘 Laravel</text>
                            </svg>
                            <div class="card-body">
                                <a href="post.php?id=<?= $post['id'] ?>"><?= $post['sarlavhaa'] ?></a>
                                <p class="card-text"><?= $post['matinn'] ?></p>
                                <p class="card-text"><?= $post['create_at'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    </div>

</main>




<?php require './includes/footer.php' ?>