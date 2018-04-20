<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 4/19/18
 * Time: 4:20 PM
 */

namespace Wallet\DataFixtures;


class ItemFixtures
{
    public function getType(){
        return 'item';
    }

    public function getFixtures(){
        return array(
            array(
              'title'      => 'MadeIn',
              'author'     => 'Medine',
              'editor'     => 'DinRecord',
              'releasedAt' => '2012',
              'gender'     => 'Rap',
              'support'    => 'CD'
            )
        );
    }
}