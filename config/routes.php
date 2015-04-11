<?php
use Cake\Routing\Router;

Router::prefix('admin',  function ($routes) {
    $routes->plugin('Rita/LinkManager',['path' => '/links-manager'], function ($routes) {
        $routes->fallbacks();
    });
});
