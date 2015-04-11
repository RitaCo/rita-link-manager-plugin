<?php
use Cake\Event\Event;
use Cake\Event\EventManager;

EventManager::instance()->attach(function (Event $event) {
    $event->result['addon'][] = 'Rita/Links.Navigator/menu';
}, 'rita.admin.menu');
