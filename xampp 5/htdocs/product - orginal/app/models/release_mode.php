<?php
class ReleaseMode extends AppModel { // this class inherits another class named AppModel.. all the basic functions to add, modify, delete, and access data from the databases
var $name='ReleaseMode'; //then defined a variable named $name in the Task'model, and assigned the name of the model to it.

/**
	 * Model validation 
	*/
	var $validate = array(	 
		 
		'release_name' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Release Name Should Not be Empty'
						 ),
						  'unique'=>array(
								'rule' => array('checkUnique', 'release_name'),
								//'on' => 'create',								 		 					 
								'message' => '*Release Name Already Exist'
						 )
					)
	);
	
	/**
	 * Check Unique record on add and edit process
	 */
	function checkUnique($data, $fieldName) 
	{
		  $ReleaseMode=$this->find(array("lower(ReleaseMode.".$fieldName.")='".low($data['release_name'])."' and ReleaseMode.is_deleted=0"));
		  if(!empty($ReleaseMode))
		  { 
		   if($ReleaseMode['ReleaseMode']['id']!=$this->id)
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
function getReleaseList()
	{
		return $this->find('list',array('fields' => array('ReleaseMode.id','ReleaseMode.release_name'),'order'=>array('ReleaseMode.id'),'conditions'=>array('ReleaseMode.is_deleted'=>0)));
	}
}
?>