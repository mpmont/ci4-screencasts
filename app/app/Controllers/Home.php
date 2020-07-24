<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['content'] = 'FROM index Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam provident ullam suscipit cum, cupiditate assumenda optio blanditiis asperiores, molestias reiciendis qui cumque, alias nesciunt eveniet quae impedit harum earum. Assumenda!';
        return view('yield', $data);
    }

}
