<?php
    include_once("templates/header.php");
?>
    <main>
        <div id="hero-content">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="piotto dev">
            <p>Blog pessoal de um estudante de computação. O intuito principal é de destacar alguns conceitos importantes que eu vou adquirindo ao longo de minha jornada como desenvolvedor e cientista da computação.</p>
        </div>
        <div id="posts-container">
            <?php foreach ($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>
                    <p class="post_description"><?= $post['description'] ?></p>
                    <div class="tags-container">
                        <?php foreach ($post['tags'] as $tag): ?>
                            <a href="#">#<?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("templates/footer.php");
?>