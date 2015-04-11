<?php
use Cake\Event\Event;
use Cake\Event\EventManager;

EventManager::instance()->attach(function (Event $event) {
    $event->result['addons'][] = 'Rita/LinkManager.Navigator/menu';
}, 'rita.admin.menu');
