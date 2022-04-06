<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <?php wp_head() ?>
</head>
<body>
    
    <h1><?php bloginfo("name") ?></h1>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <img src="<?php the_field("image_1") ?>">
            <p><?php the_field("description_1") ?></p>

            <img src="<?php the_field("image_2") ?>">
            <p><?php the_field("description_2") ?></p>

            <img src="<?php the_field("image_3") ?>">
            <p><?php the_field("description_3") ?></p>

        <?php endwhile ?>
    <?php else: ?>
        Sorry we couldn't find anything
    <?php endif; ?>

    <?php wp_footer() ?>
</body>
</html>