<?php namespace App\Controllers;

class Session extends BaseController
{
    public function index()
    {
        $this->session->set([
            'username' => 'marco as a codeigniter session array',
            'anotherItem' => 'This is me'
        ]);
    }

    public function setusername($username){
        $_SESSION['username'] = $username;
    }

    public function removeusername(){
        $this->session->remove('username');
    }


    public function flashdata(){
        $this->session->setFlashdata('message', 'This is my flashdata');
    }


    public function temp() {
        // Both 'item' and 'item2' will expire after 300 seconds
        $this->session->markAsTempdata(['item', 'item2'], 300);

        // 'item' will be erased after 300 seconds, while 'item2'
        // will do so after only 240 seconds
        $this->session->markAsTempdata([
                'item'  => 300,
                'item2' => 240
        ]);
    }

}
