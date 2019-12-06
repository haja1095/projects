<?php
class ProductClientRelease extends AppModel { // this class inherits another class named AppModel.. all the basic functions to add, modify, delete, and access data from the databases
var $name='ProductClientRelease'; //then defined a variable named $name in the Task'model, and assigned the name of the model to it.

var $belongsTo = array(
        'Client' => array(
            'className' => 'Client',
            'foreignKey' => 'client_id',
        ),
		'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
        ),
		'ReleaseMode' => array(
            'className' => 'ReleaseMode',
            'foreignKey' => 'release_location',
        )
    );

/*
	var $belongsTo = array(		 
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => array('product_name'),
			'order' => ''
		) 
	);
*/	
	/**
	 * Model validation 
	*/
	var $validate = array(	 
		 'client_id' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Client Name Should Not be Empty'
						 )
					),
		'product_id' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Product Name Should Not be Empty'
						 )
					),
		'release_location' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Release Mode Should Not be Empty'
						 ),
						 /*
						'unique'=>array(
								'rule' => 'product_client_selected_modes',								 
								'allowEmpty' => true,
								'on' => 'create',
								'message' => '*Release Mode already taken for the Client.'
						)
						*/
					),
					/*
		'release_no' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Release No Should Not be Empty'
						 )
						 
						  'unique'=>array(
								'rule' => array('checkUnique', 'release_no'),
								//'on' => 'create',								 		 					 
								'message' => '*Release No Already Exist'
						 )
						 
					),
					*/
		'release_version' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Release Version Should Not be Empty'
						 )
					),
		/*
		'approved_by' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*Approval Name Should Not be Empty'
						 )
					),
		*/
	);
	
	/**
	 * Check Unique record on add and edit process
	 */
	function checkUnique($data, $fieldName) 
	{
		  $product_client_release=$this->find(array("lower(ProductClientRelease.".$fieldName.")='".low($data['release_no'])."' and ProductClientRelease.is_deleted=0"));
		  if(!empty($product_client_release))
		  { 
		   if($product_client_release['ProductClientRelease']['id']!=$this->id)
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
function product_client_selected_modes($data) {
		$product_id=$this->data['ProductClientRelease']['product_id'];
		$client_id=$this->data['ProductClientRelease']['client_id'];
		$release_mode=$this->data['ProductClientRelease']['release_location'];
		//pr($product_id."-".$client_id); exit;\
		if(!empty($product_id) && !empty($client_id) && !empty($release_mode)) 
		{
		 $selectedmode=$this->query("select release_name from release_modes rl left join product_client_releases pcr on pcr.release_location=rl.id where pcr.product_id=$product_id and pcr.client_id=$client_id AND pcr.release_location=$release_mode AND pcr.status=1 AND pcr.is_deleted=0 group by release_name");
	  //pr($selectedmode); exit;
	  	  if(!empty($selectedmode) && isset($selectedmode))
		  { 
		   //if($selectedmode['ProductClientRelease']['id']!=$this->id)
			return false;
			//else
			//return true;	  
		  }
		  else
		  return true;
		 }
		 else
		 return false;
	}
}
?>