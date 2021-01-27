<?php 

namespace App\Controller;

class HelloController extends AppController {
    
    public $name = 'Hello';
    public $autoRender = false;
    public function index(){
        $this->name = 'Hello';
        $this->autoRender = false;
        echo 'hello world';
    }

    public function other(){
        echo 'これはindex以外の表示';
    }
}



