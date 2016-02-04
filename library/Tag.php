<?php

use Phalcon\DI;

class Tag extends \TienRocker\Auth\Tag
{
    /**
     * Sample tag
     * @param $id
     * @return mixed
     */
    public static function test($id)
    {
        return DI::getDefault()->get('url')->get(sprintf('movie/%s', $id));
    }
}