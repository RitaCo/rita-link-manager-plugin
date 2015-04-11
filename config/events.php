<?php
use Cake\Event\Event;
use Cake\Event\EventManager;

EventManager::instance()->attach(function (Event $event) {
    $event->result['addons'][] = 'Rita/LinkManger.Navigator/menu';
}, 'rita.admin.menu');
