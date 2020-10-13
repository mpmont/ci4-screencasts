<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo $this->session->getFlashdata('message');
        $data['content'] = 'Hello There ' . $this->session->get('username');
        return view('yield', $data);
    }

}
