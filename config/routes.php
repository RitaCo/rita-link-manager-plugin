<?php
use Cake\Routing\Router;

Router::prefix('admin',  function ($routes) {
    $routes->plugin('Rita/Links',['path' => '/link-manager'], function ($routes) {
        $routes->fallbacks();
    });
});
