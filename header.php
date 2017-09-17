<!DOCTYPE html>

<html lang="<?php bloginfo ('language'); ?>">
    
    
    
<head>
    
    <meta charset="<?php bloginfo ('charset'); ?>">
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title><?php the_title (); ?></title>
    
    
    <link rel="shortcut icon" href="<?php echo ASSETS_URL . '/assets/pictures/favicon.ico'; ?>">
    
    <?php echo wp_head(); ?>
    
    
</head>
        
<body>
    
<?php get_template_part('elements/site-header');?>