<?php 

    $q = "SELECT 
            posts .* , 
            users.first_name, 
            users.last_name
        FROM posts
        INNER JOIN users 
            ON posts.user_id = users.user_id
        WHERE posts.user_id = '".$this->user->user_id."'";


    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);



foreach($posts as $post): ?>

<article>

    <?php echo "something here?"; ?>
    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>