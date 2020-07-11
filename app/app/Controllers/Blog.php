<?php namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        echo $this->owner;
        echo '<hr>';
        echo 'Display all my articles!';
    }

    public function detail($articleSlug)
    {
        echo 'This is my article called ' . $articleSlug;
    }

    public function sum($value = 0, $plusValue = 0, $wtv = null)
    {
        echo $value + $plusValue;
        echo '<hr>';
        echo $wtv;
    }

}
