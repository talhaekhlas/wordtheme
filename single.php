<?php get_header(); ?>
<?php get_template_part('hero') ?>
<div class="posts">
    <?php while (have_posts()) {

        the_post();

    ?>
        <div class="post" <?php post_class(); ?>>
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <h2 class="post-title">
                            <?php the_title() ?>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="slider">
                            <?php

                            $attachments = new Attachments('slider');

                            if($attachments->exist()){
                                while($attachment = $attachments->get()){ ?>
                                <div>
                                <?php echo $attachments->image('large'); ?>
                                </div>
                                

                                <?php }
                            }
                            
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author(); ?></strong><br />
                            <?php echo get_the_date(); ?>
                        </p>
                        <div class="tags">
                            <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>") ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <?php

                            if (has_post_thumbnail()) {
                                $thumbnail_url = get_the_post_thumbnail_url(null, 'large');
                                echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                the_post_thumbnail('large', ["class" => "image_fluid"]);
                                echo '</a>';
                            }

                            ?>
                        </p>

                        <p>
                            <?php
                            the_content();
                            wp_link_pages();
                            ?>
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    <?php
                        if (is_active_sidebar('single-post-left-widget')) { 
                            dynamic_sidebar('single-post-left-widget');
                         }
                            ?>

                    
                    
                    </div>
                    <div class="col-md-8">
                    <?php if (comments_open()) {
                        comments_template();
                    }
                        ?>
                    </div>
                        
                </div>

            </div>
        </div>
    <?php } ?>
    <div class="container">



        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php the_posts_pagination(array('screen_reader_text' => ' ', 'mid_size' => 1)); ?>

            </div>
        </div>



       

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <?php
        previous_post_link();
        next_post_link();
        ?>

    </div>
</div>
</div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; LWHH - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>