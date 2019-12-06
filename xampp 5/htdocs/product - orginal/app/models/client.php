<?php
class Client extends AppModel { // this class inherits another class named AppModel.. all the basic functions to add, modify, delete, and access data from the databases
var $name='Client'; //then defined a variable named $name in the Task'model, and assigned the name of the model to it.

/**
	 * Model validation 
	*/
	var $validate = array(	 
		 
		'client_name' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Client Name Should Not be Empty'
						 ),
						  'unique'=>array(
								'rule' => array('checkUnique', 'client_name'),
								//'on' => 'create',								 		 					 
								'message' => '*Client Name Already Exist'
						 )
					),
		'client_mobile' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Client Mobile Should Not be Empty'
						 ),
					) 
	);
	
	/**
	 * Check Unique record on add and edit process
	 */
	function checkUnique($data, $fieldName) 
	{
		  $Client=$this->find(array("lower(Client.".$fieldName.")='".low($data['client_name'])."' and Client.is_deleted=0"));
		  if(!empty($Client))
		  { 
		   if($Client['Client']['id']!=$this->id)
			return false;
			else
			return true;	  
		  }
		  else
		  return true;   
	}
function checkUsability($id){
		if (!empty($this->hasMany)) {
			foreach ($this->hasMany as $key=>$details) {
				$val = $this->$key->find(array($key.'.'.$details['foreignKey']=>$id,$key.'.is_deleted'=>0));
				if (!empty($val)) {
					return false;
				} 
			}
			return true;
		}
		else {
			return true;
		}
	}
function getClientList()
	{
		return $this->find('list',array('fields' => array('Client.client_name'),'order'=>array('Client.client_name'),'conditions'=>array('Client.is_deleted'=>0)));
	}
}
?>