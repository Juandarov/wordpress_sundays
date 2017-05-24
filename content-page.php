<?php /* Default template for displaying page content */ ?>
    <?php
    $tags = get_the_tags();
    $tag = [0]; ?>

    <article class="clickProduct <?php $tag ?> " id="page-<?php the_ID(); ?>">

        <?php echo get_the_post_thumbnail( $post->ID) ?>

        <?php the_content(); ?>

        <?php the_meta();

        get_post_meta('price', $single = true )

        ?>

        <a href="<?php echo get_permalink($post->ID) ?>">See details</a>


    </article>
