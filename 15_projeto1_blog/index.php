<?php
    include_once("templetes/header.php");
?>

    <main>
        <div id="title-container">
            <h1>Blog Codar</h1>
            <p>O seu blog de programação</p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/imagens/<?= $post['img']?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title">
                        <!-- Em nosso a href=" $BASE_URL, estamos criando uma url para o post individual" -->
                        <a href="<?= $BASE_URL?>post.php?id=<?= $post['id']?>"><?= $post['title']?></a>
                    </h2>
                    <p class="post-descripition"><?= $post['description']?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $tag): ?> <!-- Com isso temos acesso a todas as tags -->
                            <a href="#"> <?= $tag?> </a>
                        <? endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php
    include_once("templetes/footer.php");
?>