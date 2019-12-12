<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function uploadFile() {
  $file = $this->data['Upload']['file'];
  if ($file['error'] === UPLOAD_ERR_OK) {
    $id = String::uuid();
    if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id)) {
      $this->data['Upload']['id'] = $id;
      $this->data['Upload']['filename'] = $file['name'];
      $this->data['Upload']['filesize'] = $file['size'];
      $this->data['Upload']['filemime'] = $file['type'];
      return true;
    }
  }
  return false;
}