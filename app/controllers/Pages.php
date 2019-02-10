<?php
/**
 * Created by PhpStorm.
 * User: lostre
 * Date: 2/2/2019
 * Time: 12:21 μμ
 */

class Pages
{
    public function __construct()
    {

        echo 'Pages Loaded';

    }

    public function index(){

    }

    public function about($id){
        echo 'This is about '.$id;
    }

}