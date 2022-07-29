<?php
define('__THEME_DIR__', __DIR__ );
define('__MVC_DIR__', __THEME_DIR__.'/mvc' );
define('__MODELES_DIR__', __MVC_DIR__.'/modeles' );
define('__VUES_DIR__', __MVC_DIR__.'/vues' );
define('__CONTROLEURS_DIR__', __MVC_DIR__.'/controleurs' );

require_once __MODELES_DIR__.'/functions-init.php';
require_once __MODELES_DIR__.'/functions-supports.php';
require_once __MODELES_DIR__.'/apparence.php';
require_once __MODELES_DIR__.'/functions-acf.php';
require_once __MODELES_DIR__.'/functions-css-js.php';
