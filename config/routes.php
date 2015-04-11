<?php
use Cake\Routing\Router;

Router::plugin('Rita/LinkManager', function ($routes) {
    $routes->fallbacks();
});
