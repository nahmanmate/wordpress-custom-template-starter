<h1>Hello World!</h1>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h2><a href="<?php the_permalink() ?>"> <?php the_title ?></a> </h2>
        </div>
        <?php }
?>

<p>Footer</p>