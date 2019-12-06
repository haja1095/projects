<?php
class Product extends AppModel { // this class inherits another class named AppModel.. all the basic functions to add, modify, delete, and access data from the databases
var $name='Product'; //then defined a variable named $name in the Task'model, and assigned the name of the model to it.

/**
	 * Model validation 
	*/
	var $validate = array(	 
		 
		'product_name' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Product Name Should Not be Empty'
						 ),
						  'unique'=>array(
								'rule' => array('checkUnique', 'product_name'),
								//'on' => 'create',								 		 					 
								'message' => '*Product Name Already Exist'
						 )
					),
		'product_version' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Product Version Should Not be Empty'
						 ),
					) 
	);
	
	/**
	 * Check Unique record on add and edit process
	 */
	function checkUnique($data, $fieldName) 
	{
		  $Product=$this->find(array("lower(Product.".$fieldName.")='".low($data['product_name'])."' and Product.is_deleted=0"));
		  if(!empty($Product))
		  { 
		   if($Product['Product']['id']!=$this->id)
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
function getProductList()
	{
		return $this->find('list',array('fields' => array('Product.id','Product.product_name'),'order'=>array('Product.product_name'),'conditions'=>array('Product.is_deleted'=>0)));
	}

}
?>