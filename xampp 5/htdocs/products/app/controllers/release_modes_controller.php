<?php
class ReleaseModesController extends AppController { //for our 'Task' model, the corresponding controller is Tasks Controller.
var $name='ReleaseModes';
var $uses = array('ReleaseMode');
var $helpers = array('Paginator', 'Html', 'Form','Js' => array('Prototype'), 'Ajax'); 
var $components = array('RequestHandler', 'Session');
//For Pagination
var $paginate = array('limit' =>10, 'page' => 1,'order' => array('ReleaseMode.release_name' => 'asc'));

function index() { //When a request is made to the index action, the following line is executed: $this->set('tasks', $this->Task->find('all'));. This line calls the function find() of the Task model that returns all the tasks stored in the tasks table.
	if(!empty($this->data))	
	{
	  $this->Session->write($this->modelClass,$this->data[$this->modelClass]);			
	}
	else
	{
		if(!$this->RequestHandler->isAjax())
		{       
			$this->Session->delete($this->modelClass);
		}
	}
    $this->viewVars[$this->name]= $this->search();
	$this->helpers['Paginator'] = array('ajax' => 'Ajax');
	$this->set('release_modes', $this->ReleaseMode->find('all'));
	if($this->RequestHandler->isAjax())
	{       
		$this->render('/elements/release_modes/index_pagging');
	}
	else
	{
		$this->set('statuses',$this->getStatus());
		$this->set('model_name',$this->modelClass);
		$this->Session->delete($this->modelClass);
	}	
}
////start page

function add_release()
	{
	if($this->RequestHandler->isAjax()) {
	 if(!empty($this->data))
	  {
	  	//pr($this->data); exit;
	      $ReleaseMode['ReleaseMode']['release_name']=trim($this->data['ReleaseMode']['release_name']);
		  $ReleaseMode['ReleaseMode']['status'] 	  =1;
		  $ReleaseMode['ReleaseMode']['is_deleted']  =0;
		  $ReleaseMode['ReleaseMode']['created_date']= $this->CreatedDate(); 
		  $ReleaseMode['ReleaseMode']['created_by']  =  $this->CreatedBy();
		  $this->ReleaseMode->create();
		  if(!!$this->ReleaseMode->save($ReleaseMode))
		  {
		    $this->set('success_message','Data Has Saved');
			$this->data=array();
			$this->render('/elements/message');   
		  }
		  else
		  {
		    $this->set('error_message','Data Not Saved');
		  }
	  }
	  }
	}
	
function search()
	 {
	  if($this->Session->check($this->modelClass))
		 {			     
			  $release_name=$this->Session->read('ReleaseMode'.'.release_name');
			  $status=$this->Session->read('ReleaseMode'.'.status');
			  $condition='ReleaseMode'.".is_deleted=0";
			  if(!empty($release_name))
			  $condition.=" AND lower(".$this->modelClass.".release_name) like '".low($release_name)."%'";
			  if($status!='')
			  $condition.=" AND ".$this->modelClass.".status=".$status;
			 
			  return  $this->paginate(array($condition));
		 }
		 else
		 {
			  $condition='ReleaseMode'.".is_deleted=0";
			  return $this->paginate(array($condition));
		 }
	 }
function view($id=null)
	{
		if(!empty($id))
	 		 {
		    $this->data= $this->ReleaseMode->find(array('ReleaseMode.id'=>$id));			
		  }
	} 
function edit($id=null)
	{
	  if(!empty($id))
	  {
		  if(!empty($this->data))
		  {
			  $ReleaseMode['ReleaseMode']['release_name']	=trim($this->data['ReleaseMode']['release_name']);
			  $ReleaseMode['ReleaseMode']['status'] 		=$this->data['ReleaseMode']['status'];  
			  $ReleaseMode['ReleaseMode']['is_deleted']  	=0;  
			  $ReleaseMode['ReleaseMode']['modified_date']	= $this->CreatedDate();									    	 
			  $ReleaseMode['ReleaseMode']['modified_by']  	=  $this->CreatedBy();
			  $this->ReleaseMode->id=$id;
			  if(!!$this->ReleaseMode->save($ReleaseMode))
			  {
				$this->set('success_message','Data Has Updated');
				$this->data=array();
				 $this->render('/elements/message');   
			  }
			  else
			  {
				$this->set('error_message','Data Not Update');
			  }		 
		  }
		  else
		  {
		    $this->data= $this->ReleaseMode->find(array('ReleaseMode.id'=>$id));			
		  }
		 }
		 $this->data['ReleaseMode']['id']=$id;
	}
	function delete($id=null){
		if(!empty($id)){ 		 
			$ReleaseMode['ReleaseMode']['is_deleted']  =1;  
			$ReleaseMode['ReleaseMode']['created_date']= $this->CreatedDate();									    	 
			$ReleaseMode['ReleaseMode']['created_by'] 	=  $this->CreatedBy();
			
			$this->ReleaseMode->id=$id;
			$check=$this->ReleaseMode->checkUsability($id);
			if ($check){
				if(!!$this->ReleaseMode->save($ReleaseMode,false)){ 
					$this->set('success_message','Data Has Been Deleted');
					$this->data=array();
					$this->render('/elements/message');
				}
				else{
					$this->set('error_message','Data Not Deleted');
				}
			}
			else {
				$this->set('error_message','Data Has Used In Another Transaction');
				$this->render('/elements/message');   
			}
		}
	}
}
?>
