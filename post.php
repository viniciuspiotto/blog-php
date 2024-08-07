<?php
    include_once("templates/header.php");

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if ($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, officiis sit, nostrum omnis ducimus fuga odio recusandae aspernatur corporis eos optio excepturi voluptatem! Nobis dolores labore doloribus fuga sequi esse.
            Aliquam dignissimos aut facilis ratione voluptatem accusamus? Quia labore minus animi fugit, hic ut necessitatibus, asperiores accusantium nisi perferendis ratione rerum? Dolor minima perspiciatis quia animi aliquid impedit, nihil qui!
            Aut eligendi, vero laboriosam facilis asperiores quod saepe consectetur amet autem, pariatur quis dolor fugiat ipsum quo itaque sint explicabo iste, beatae nesciunt vel porro sequi nemo? Ad, ab quisquam.
            Doloremque voluptatum inventore nostrum excepturi quia, eaque, dicta reprehenderit ipsam at ea neque odit voluptate, aut fugit corporis asperiores! Perferendis ipsa odit tempora nobis quod distinctio quis quibusdam exercitationem iusto?
            Eligendi enim nam placeat laborum delectus perspiciatis temporibus consectetur. Alias aliquam a suscipit, voluptate aspernatur tempore, tenetur ab explicabo voluptas asperiores pariatur qui consequuntur? Deleniti odit eum possimus id asperiores?
        </p>
    </div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach ($post['tags'] as $tag): ?>
            <li><a href="#">#<?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#">#<?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>

<?php
    include_once("templates/footer.php");
?>