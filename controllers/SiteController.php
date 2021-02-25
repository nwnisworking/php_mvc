<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;

class SiteController extends Controller
{
    public function home(){
        $params = [
            'name'=>'nwnisworking'
        ];

        return $this->render('home', $params);
    }

    public function contact(){
        return $this->render('contact');

    }

    public function handleContact(Request $request){
        $body = $request->getBody();
        var_dump($body);
        return 'Handling submitted data';
    }

}