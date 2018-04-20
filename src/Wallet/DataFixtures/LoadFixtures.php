<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 4/19/18
 * Time: 4:31 PM
 */

    require_once __DIR__ . '/../../../core/bootstrap.php';
    //require_once __DIR__ . '/../../../core/config.inc.php';

    use RedBeanPHP\R as R;

    $itemFixtures = new \Wallet\DataFixtures\ItemFixtures();

    $type     = $itemFixtures->getType();
    $fixtures = $itemFixtures->getFixtures();

    foreach ($fixtures as $fixture){
        $item = R::dispense('type');

        foreach ($fixture as $property => $value){
            $item->$property = $value;
        }

        R::store($item);
    }