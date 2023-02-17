<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme</title>
    <?Php
    // includes the custom.css
    wp_head();
    ?>
</head>
<!-- autocheck page -->
<?php
if(is_home()){
    $custom_classes = array('custom-class', 'main-class', 'my-class');
}else{
    $custom_classes = array('not-custom-class');
}
?>
<!-- ensures the body class is unique for each page -->
<body <?php body_class($custom_classes);?> >
<!-- appending the header/main menu -->
<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
        ) );
        ?>
    </div>
</nav>
<img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width ?>">