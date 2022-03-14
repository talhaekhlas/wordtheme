<body <?php body_class() ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <h3 class="tagline">
                    <?php bloginfo( 'description' ); ?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading">
                
                <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php 
                    if(is_search()){?>
                        <h3>You are searching for: <?php the_search_query()?> </h3>;
                    <?php }
                   
                ?>
                <?php
                 echo get_search_form();
                 if(is_search() && !have_posts()){
                    echo "<h6>No Result Found: </h6>";  
                }
                  ?>
            </div>
        </div>
    </div>
</div>