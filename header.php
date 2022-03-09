<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ;

wp_nav_menu( array(
    'theme_location' => 'topmenu'
) );

?>
