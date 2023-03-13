<?php
    include_once("templates/header.php");

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
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description">><?=$currentPost['description']?></p>
            <div id="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta architecto ea sint excepturi neque mollitia quae minima, asperiores vitae reprehenderit id saepe? A ipsam itaque, molestiae eveniet asperiores eius animi?
            Distinctio officiis voluptatibus perspiciatis deserunt. Obcaecati inventore debitis totam eos ipsum officiis sed ipsam ex fuga quidem molestias aliquid, exercitationem reprehenderit atque, magnam temporibus blanditiis quaerat. Debitis soluta cupiditate itaque!
            Facilis sint enim nihil a sed delectus consectetur ab ex! Autem dolore, distinctio fuga, accusantium recusandae hic possimus iste optio delectus, qui quidem. Voluptatum soluta quo voluptatibus, sint alias odio?
            Similique, illum beatae ut odit quas dolorem dolorum, non ea, quaerat voluptate animi? Laudantium beatae assumenda atque sit odit dolorum? Quisquam beatae est similique illum perferendis sunt iusto laborum dicta?
            Minima dolores soluta quod voluptatem nulla fugit perspiciatis quidem commodi eaque explicabo magni tempora, praesentium nostrum consequatur. Enim, nisi. Enim, repellendus maiores! Et, suscipit in dignissimos placeat reprehenderit numquam natus.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost ['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>

    </anside>
    </main>
    

<?php
    include_once("templates/footer.php");
?>