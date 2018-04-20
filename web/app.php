<?php
    require_once __DIR__ . '/../core/bootstrap.php';

    use RedBeanPHP\R;

    /*
     * @var $item \Wallet\Model\Item
     */
    $item = R::dispense('item');

    $item->title = 'Mon super titre';
    $item->author = "gomab";
    R::store($item);

