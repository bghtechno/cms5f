```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <header>
 <?php if ( has_custom_logo() ) : ?>
 <div class="site-logo"><?php the_custom_logo(); ?></div>
 <?php endif; ?>
 <nav>
 <?php wp_nav_menu( array(
 'theme_location' => 'primary',
 'menu_class' => 'primary-menu',
 )); ?>
 </nav>
4
 </header>
```