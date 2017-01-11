<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 9:26 PM
 */
interface DAO
{
    public static function find($id);
    public static function all();
    public function create();
    public function update();
    public function delete();
}