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
</div>