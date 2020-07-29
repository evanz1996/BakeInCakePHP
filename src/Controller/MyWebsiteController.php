<?php
namespace App\Controller;

use App\Controller\AppController;

class MyWebsiteController extends AppController
{
    

    public function home(){

        // $this->viewBuilder()->setLayout('my_website_layout');
       
    }
    public function contact(){
        // $this->viewBuilder()->setLayout('my_website_layout');
        // $this->set('contact', 'this is for contact');
        // echo 'contact';
    }

    public function about(){
        // echo 'about ';
    }
}

?>