<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersController extends Controller{
    
    var $name = "Users";
var $scaffold;
public function beforeFilter(){
    parent::beforeFilter();
}

public function isAuthorized($user){
   return true;
}

public function login(){
   if(!empty($this->data)){
//      if($this->Auth->login()){
          $this->Session->setFlash("LoggedIn successfully.");
          $this->redirect(array("controller"=>"users","action"=>"index"));
      }
      else{
          $this->Session->setFlash("Invalid User.");
      }
  }
}
