<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Wordpress Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>




<header>

  <div class="site-branding">
    <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
        } else {
        ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        <?php
        }
      ?>
    </div>
      
    <div class="menu-toggle slideInAnim">
            <span class="line_menu"></span>
            <span class="line_menu"></span>
            <span class="line_menu"></span>
        </div>
 
    <nav class="nav_menu">
      <?php
          wp_nav_menu(array(
              'theme_location' => 'primary-menu',
              'container' => false,
              'menu_class' => 'primary-menu',
              'fallback_cb' => '__return_false'
          ));
      ?>


     </nav>


  </header>


