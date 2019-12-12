<?php
class UsersController extends AppController {
    public $components = array('Session');
    
    
        public function index() 
        {
            $users = $this->User->find('all');
            $this->set('users', $users);
         }
    
            public function add()
             {
                
                    if (!empty($this->data)) {
                    $this->User->create($this->data);
//                     if ($this->request->is('post')){
                    if ($this->User->save()) {
                    $this->Session->setFlash('The user has been saved');
                    $this->redirect(array('action' => 'add'));
                    } else {
                    $this->Session->setFlash
                    ('The user could not be saved. Please, try again.');
                    }
            }
             }   
            
            public function delete($id = null)
             {
                if (!$id) {
                $this->Session->setFlash('Invalid id for user');
                $this->redirect(array('action' => 'index'));
                }
                if ($this->User->delete($id)) {
                $this->Session->setFlash('User deleted');
                } else {
                $this->Session->setFlash(__('User was not deleted',
                true));
                }
                $this->redirect(array('action' => 'index'));
             }



            function edit($id = null) {
                    if (!$id && empty($this->data)) {
                        $this->Session->setFlash('Invalid user');
                        $this->redirect(array('action' => 'index'));
                    }
                    if (!empty($this->data)) {
                        if ($this->User->save($this->data)) {
                            $this->Session->setFlash('The user has been saved');
                            $this->redirect(array('action' => 'index'));
                        } else {
                            $this->Session->setFlash('The user could not be saved. Please, try again.');
                        }
                    }
                    if (empty($this->data)) {
                        $this->data = $this->User->read(null, $id);
                    }
                }
                
    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid user');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->findById($id));
    }
    
    public function beforeFilter(){
    parent::beforeFilter();
}

public function isAuthorized($users){
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
   public function logout()
    {
        $session = $this->request->session();
        $session->destroy();
        return $this->redirect($this->data->logout());
    } 
    
}

?>

