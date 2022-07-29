<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
    <header class="header">
        <nav class="nav-header">

            <?php wp_nav_menu([
                    'theme_location'=> 'header-menu-desk',
                    'container'=> false,
                    'menu_class'=> 'navlinks-desk test'
            ])?>
     
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

        </nav>

    </header>
  
