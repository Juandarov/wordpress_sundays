<?php get_header() ?>
<main>
    <h3>spring summer 2017</h3>
            <section>
                <?php

                $posts = get_posts($args);

                foreach ($posts as $post) {
                
                    setup_postdata($post);
                    get_template_part('content', 'page');
                }

                ?>

                <article class="clickProduct">
                    <img src="http://lorempixel.com/150/200/fashion" alt="img" class="img-responsive">
                    <h4>buy</h4>
                    <p>product</p>
                    <h5>$200.00</h5>
                </article>

            </section>
</main>
<?php get_footer() ?>
