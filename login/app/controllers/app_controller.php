<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AppController extends Controller {
var $components = array("Session",
        "Auth"=>array(
        'authorize'=>"Controller",
        'loginRedirect'=>array("controller"=>"users","action"=>"login"),
        'logoutRedirect'=>array("controller"=>"users","action"=>"login")
      )
);

public function beforeFilter(){
     $this->Auth->allow("index","add","login");
     ////////// We are restricting default edit and delete scaffolding action for non logged in users.///
}

public function isAuthorized($user = null){
    ////////////////Check if the action is allowed or not
    return true;
}
}