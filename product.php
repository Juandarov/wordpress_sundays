<?php /* Template name: sundays_product */
        /*Template Post Type: post, page*/
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/product.css">
<?php get_header() ?>

        <main>
            <h2>Product Review</h2>

            <section>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <section id="imagesProduct">
                            <?php echo get_the_post_thumbnail($post->ID) ?>
                            <div class="allpictures">
                                <img src="http://lorempixel.com/75/100/fashion" alt="imagesProduct" class="img-responsive">
                                <img src="http://lorempixel.com/75/100/technics" alt="imagesProduct" class="img-responsive">
                                <img src="http://lorempixel.com/75/100/sports" alt="imagesProduct" class="img-responsive">
                                <img src="http://lorempixel.com/75/100/people" alt="imagesProduct" class="img-responsive">

                            </div>
                        </section>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <section id="description">
                            <h3>product name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <h4>$150.00</h4>
                            <div class="buy">
                                <input type="number" name="" value="">
                                <button id="cart" type="button" name="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            </div>

                            <div class="row">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Color
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Blue marine</a></li>
                                        <li><a href="#">Pink soft</a></li>
                                        <li><a href="#">Dark military</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Default Color</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Size
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Default</a></li>
                                    </ul>
                                </div>
                            </div>

                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </section>

                    </div>
                </div>
            </section>
        </main>

<?php get_footer() ?>
