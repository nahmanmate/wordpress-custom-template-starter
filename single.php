<h1>Hello World!</h1>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div>
            <?php the_content() ?>
        <?php }
?>

<p>Footer</p>