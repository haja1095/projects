<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UploadsController extends AppController{
    var $name = 'Uploads';
public $components = array('Session');
    
    
        public function index() 
        {
            $uploads = $this->Upload->find('all');
            $this->set('uploads', $uploads);
         }

 public function add() {
  if (!empty($this->data)) {
   $this->Upload->create();
//            if ($this->upload() && $this->Upload->save($this->data))  {
                $this->Session->setFlash(__('The upload has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
            }
        }
    }
    
    function download($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for upload', true));
            $this->redirect(array('action' => 'index'));
        }
        $uploads = $this->Upload->find('first', array(
            'conditions' => array(
                'Upload.id' => $id,
            )
                ));
        if (!$uploads) {
            $this->Session->setFlash(__('Invalid id for upload', true));
            $this->redirect(array('action' => 'index'));
        }
//          function view($id = null) {
//               if (!$id) {
//                     $this->Session->setFlash('Invalid upload');
//            $this->redirect(array('action' => 'index'));
//        }
//        $this->set('uploads', $this->Upload->findById($id));
//    }
            
        $this->view = 'media';
        $filename = $uploads['Upload']['filename'];
        $this->set(array(
            'id' => $uploads['Upload']['id'],
            'name' => substr($filename, 0, strrpos($filename, '.')),
            'extension' => substr(strrchr($filename, '.'), 1),
            'path' => APP . 'webroot/uploads' . DS,
            'download' => true,
            
        ));
         
////        function view($id = null) {
////        if (!$id) {
////            $this->Session->setFlash('Invalid upload');
////            $this->redirect(array('action' => 'index'));
////        }
////        $this->set('uploads', $this->Upload->findById($id));
//  }

       }

?>
    