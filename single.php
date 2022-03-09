
<?php get_header(); ?>
<?php get_template_part('hero') ?>
<div class="posts">
    <?php while(have_posts()) {

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
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <div class="tags">
                        <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>") ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php

                        if(has_post_thumbnail()){
                            the_post_thumbnail('large', ["class"=>"image_fluid"]);
                        }
                        
                        ?>
                    </p>

                    <p>
                        <?php
                         the_content()
                        ?>
                    </p>
                    
                </div>
            </div>

        </div>
    </div>
    <?php } ?>
    <div class="container">


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
            <?php 
            if ( is_active_sidebar( 'single-post-left-widget' ) ) 
            { ?>
                <?php dynamic_sidebar( 'single-post-left-widget' ); ?>
            </div>
            <?php } ?>
        </div>

    
       

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php the_posts_pagination(array('screen_reader_text'=>' ','mid_size'=>1)); ?>
               
            </div>
        </div>

        

        <?php if(comments_open()){?>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php
                 comments_template();
                ?>
               
            </div>
        </div>

       

        <?php } ?>

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