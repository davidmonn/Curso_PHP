<?php
    include_once("templetes/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p class="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/imagens/<?= $post['img'] ?>" alt="<?= $post['description'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aperiam quas a blanditiis quia quidem, ad eius est velit maiores veritatis eveniet quibusdam corrupti quaerat expedita nesciunt consequatur explicabo eum.
            Molestiae, obcaecati dignissimos. Porro eum nemo, a nobis possimus dignissimos debitis sint dolore quae delectus maiores vel optio ipsam autem itaque doloremque consectetur tempora sed? Velit deserunt praesentium distinctio assumenda!
            Dolores assumenda magni modi. Nesciunt, exercitationem adipisci! Reprehenderit cumque rerum tempora omnis earum dicta similique consequuntur dolores, delectus, eum totam quo! Fugiat, aperiam? Culpa, amet veniam at laborum esse velit.
            Neque id odit perferendis illum itaque deserunt voluptatum eum ducimus, recusandae eos excepturi repellat tenetur fugiat ea maiores similique harum exercitationem omnis placeat ratione, rerum expedita provident. Necessitatibus, delectus non.
            Quae sed fuga a cum, et cupiditate blanditiis illo totam! Reprehenderit pariatur nesciunt perspiciatis totam eveniet quo similique fuga deserunt, molestiae veritatis quis unde qui commodi iste ullam quibusdam? Soluta!</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aperiam quas a blanditiis quia quidem, ad eius est velit maiores veritatis eveniet quibusdam corrupti quaerat expedita nesciunt consequatur explicabo eum.
            Molestiae, obcaecati dignissimos. Porro eum nemo, a nobis possimus dignissimos debitis sint dolore quae delectus maiores vel optio ipsam autem itaque doloremque consectetur tempora sed? Velit deserunt praesentium distinctio assumenda!
            Dolores assumenda magni modi. Nesciunt, exercitationem adipisci! Reprehenderit cumque rerum tempora omnis earum dicta similique consequuntur dolores, delectus, eum totam quo! Fugiat, aperiam? Culpa, amet veniam at laborum esse velit.
            Neque id odit perferendis illum itaque deserunt voluptatum eum ducimus, recusandae eos excepturi repellat tenetur fugiat ea maiores similique harum exercitationem omnis placeat ratione, rerum expedita provident. Necessitatibus, delectus non.
            Quae sed fuga a cum, et cupiditate blanditiis illo totam! Reprehenderit pariatur nesciunt perspiciatis totam eveniet quo similique fuga deserunt, molestiae veritatis quis unde qui commodi iste ullam quibusdam? Soluta!</p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <? endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <? endforeach; ?>
        </ul>
    </aside>

<?php
    include_once("templetes/footer.php");
?>