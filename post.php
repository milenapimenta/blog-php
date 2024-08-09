<?php
    include_once('templates/header.php');
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
            <h1 id="main-title">
                <?php echo $currentPost['title'] ?>
            </h1>
            <p id="post-description">
                <?php echo $currentPost['description'] ?>
            </p>
            <div class="img-container">
                <img src="<?php echo $BASE_URL; ?>/img/<?php echo $currentPost['img'] ?>" alt="<?php echo $currentPost['img'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, soluta. Ipsa nihil rerum sunt? Explicabo blanditiis eum nihil itaque, odio, facilis deleniti id quia consectetur, error eligendi? Repudiandae, id quidem.
                Explicabo, blanditiis? Quam officiis sed, animi voluptas assumenda ipsam, laudantium consectetur sint, hic nulla dignissimos autem! Autem nobis obcaecati optio nostrum eius ex ad fugit tempora totam? Qui, veritatis iste!
                Beatae quam repellat sed soluta rerum voluptates voluptatibus autem magnam! Facilis delectus cumque quas officiis omnis dolorum, aut adipisci perspiciatis iste deleniti? Nesciunt, ipsum eius nihil in pariatur voluptatibus molestias!
                Natus aperiam omnis amet hic facilis cumque numquam quaerat accusamus quod voluptates similique libero non sunt, eum itaque aliquid nostrum eius. At, aliquid cum minus vitae aliquam adipisci velit. Saepe!
                Ut alias odit reprehenderit quasi iure eos voluptatem explicabo corrupti quas, beatae exercitationem id aspernatur voluptatibus harum vel porro, enim voluptates? Amet temporibus ipsa eligendi eos, nostrum ad sunt magni!
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, soluta. Ipsa nihil rerum sunt? Explicabo blanditiis eum nihil itaque, odio, facilis deleniti id quia consectetur, error eligendi? Repudiandae, id quidem.
                Explicabo, blanditiis? Quam officiis sed, animi voluptas assumenda ipsam, laudantium consectetur sint, hic nulla dignissimos autem! Autem nobis obcaecati optio nostrum eius ex ad fugit tempora totam? Qui, veritatis iste!
                Beatae quam repellat sed soluta rerum voluptates voluptatibus autem magnam! Facilis delectus cumque quas officiis omnis dolorum, aut adipisci perspiciatis iste deleniti? Nesciunt, ipsum eius nihil in pariatur voluptatibus molestias!
                Natus aperiam omnis amet hic facilis cumque numquam quaerat accusamus quod voluptates similique libero non sunt, eum itaque aliquid nostrum eius. At, aliquid cum minus vitae aliquam adipisci velit. Saepe!
                Ut alias odit reprehenderit quasi iure eos voluptatem explicabo corrupti quas, beatae exercitationem id aspernatur voluptatibus harum vel porro, enim voluptates? Amet temporibus ipsa eligendi eos, nostrum ad sunt magni!
            </p>
        </div>
        <aside class="nav-container">
            <h3 id="tags-title">
                Tags
            </h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li>
                        <a href="#">
                            <?php echo $tag ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">
                Categorias
            </h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li>
                        <a href="#">
                            <?php echo $category ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
  

<?php
    include_once('templates/footer.php');
?>