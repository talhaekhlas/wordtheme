<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline">
                    <?php bloginfo( 'description' ); ?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading">
                <?php bloginfo( 'name' ); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="posts">
    <?php while(have_posts()) {

        the_post();
        
        ?>
    <div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    </h2>
                </div>
            
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
                <?php the_posts_pagination(array('screen_reader_text'=>' ','mid_size'=>1)); ?>
                
                <!-- why not working -->
            </div>
        </div>

        <?php if(comments_open()){?>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php
                 comments_template();
                ?>
                
                <!-- why not working -->
            </div>
        </div>

        <?php } ?>
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
<?php wp_footer(); ?>
</body>
</html>