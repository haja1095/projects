<?php
class ProductClientLicense extends AppModel { // this class inherits another class named AppModel.. all the basic functions to add, modify, delete, and access data from the databases
var $name='ProductClientLicense'; //then defined a variable named $name in the Task'model, and assigned the name of the model to it.

var $belongsTo = array(
        'Client' => array(
            'className' => 'Client',
            'foreignKey' => 'client_id',
        ),
		'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
        ),
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
		 /*
		'license_key' => array(
					'unique'=>array(
								'rule' => 'product_client_creation_check',								 
								'allowEmpty' => true,
								//'on' => 'create',							 		 					 
								'message' => '*License Key Already Taken'
						 ),
		
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',					 					 
								'message' => '*License Key Should Not be Empty'
						 ),
						 
						  
						 'unique1'=>array(
								'rule' => 'product_client_creation_check',								 
								'allowEmpty' => true,
								//'on' => 'create',
								'message' => '*License is not Created for the Client!.'
						)
						 
						 
					),
			
		'license_type' => array(
						 'notempty'=>array(
								'rule' => array('notempty'),
								'required' => true,
								'allowEmpty' => false,
								//'on' => 'create',	 					 
								'message' => '*License Type Should Not be Empty'
						 ), 
						 'unique'=>array(
								'rule' => 'product_client_selected_license_type',								 
								'allowEmpty' => true,
								'on' => 'create',
								'message' => '*License already Created for the Client!.'
						)
						
					),
					*/
	);
	
	/**
	 * Check Unique record on add and edit process
	 */
	function checkUnique($data, $fieldName) 
	{
		  $product_client_license=$this->find(array("lower(ProductClientLicense.".$fieldName.")='".low($data['license_key'])."' and ProductClientLicense.is_deleted=0"));
		  if(!empty($product_client_license))
		  { 
		   if($product_client_license['ProductClientLicense']['id']!=$this->id)
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
//check license_key, product and client already exists
function product_client_selected_license($data) {
		$product_id=$this->data['ProductClientLicense']['product_id'];
		$client_id=$this->data['ProductClientLicense']['client_id'];
		$license_key=$this->data['ProductClientLicense']['license_key'];
		//pr($product_id."-".$client_id); exit;
		 $existing_key=$this->query("select pcl.license_key from product_client_licenses pcl where pcl.product_id=$product_id and pcl.client_id=$client_id AND pcl.license_key=$license_key AND pcl.is_deleted=0");
	  //pr($selectedmode); exit;
	  	  if(!empty($existing_key) && isset($existing_key))
		  { 
		   //if($selectedmode['ProductClientRelease']['id']!=$this->id)
			return false;
			//else
			//return true;	  
		  }
		  else
		  return true;
	}
//Check license Type already created for the client and product
function product_client_selected_license_type($data) {
		$product_id=$this->data['ProductClientLicense']['product_id'];
		$client_id=$this->data['ProductClientLicense']['client_id'];
		$license_type=$this->data['ProductClientLicense']['license_type'];
		if(!empty($product_id) && !empty($client_id) && !empty($license_type)) 
		{
		if($license_type=='create')
		{
		//pr($product_id."-".$client_id); exit;
		 $existing_type=$this->query("select pcl.license_type from product_client_licenses pcl where pcl.product_id=$product_id and pcl.client_id=$client_id AND pcl.license_type='create' AND pcl.license_status='a' AND pcl.status=1 AND pcl.is_deleted=0 group by pcl.license_type");
			  if(!empty($existing_type) && isset($existing_type))
			  { 
				return false;
			  }
			  else
			  return true;
			  }
		  else	
		  return true;
		 if($license_type=='renewal')
		{
		 //$existing_type=$this->ProductClientLicense->find('list',array('fields' => array('id','expire_date'),'conditions'=>array('client_id'=>$client_id,'product_id'=>$product_id,'license_type'=>'create','license_status'=>'a','status'=>'1','is_deleted'=>'0')));
		 $existing_type=$this->query("select pcl.license_type from product_client_licenses as pcl where pcl.client_id=$client_id and pcl.product_id=$product_id and pcl.license_type='create' and pcl.license_status='a' and pcl.status=1 and pcl.is_deleted=0");
		  if(!empty($existing_type) && isset($existing_type))
		  {
			return false;
		  }
		  else
		  return true;
		 }
		 else 
		 return true; 
		 
	  }
	  else
	  return false;
	}
/*
//Check license is created or not before renewal for the client and product
function product_client_creation_check($data) {
		$product_id=$this->data['ProductClientLicense']['product_id'];
		$client_id=$this->data['ProductClientLicense']['client_id'];
		$license_type=$this->data['ProductClientLicense']['license_type'];
		if($license_type=='renewal')
		{
		 //$existing_type=$this->ProductClientLicense->find('list',array('fields' => array('id','expire_date'),'conditions'=>array('client_id'=>$client_id,'product_id'=>$product_id,'license_type'=>'create','license_status'=>'a','status'=>'1','is_deleted'=>'0')));
		 $existing_type=$this->query("select pcl.license_type from product_client_licenses as pcl where pcl.client_id=$client_id and pcl.product_id=$product_id and pcl.license_type='create' and pcl.license_status='a' and pcl.status=1 and pcl.is_deleted=0");
	  	  if(!empty($existing_type) && isset($existing_type))
		  {
			return false;
		  }
		  else
		  return true;
		 }
		 else 
		 return true;
	}
*/
function get_ExpireDate_list($client_id=0, $product_id=0)
	{
		return $this->find('list',array('fields' => array('ProductClientLicense.id','ProductClientLicense.expire_date'),'order'=>array('ProductClientLicense.id'=>'desc'),'conditions'=>array('ProductClientLicense.client_id'=>$client_id,'ProductClientLicense.product_id'=>$product_id,'ProductClientLicense.status'=>1,'ProductClientLicense.is_deleted'=>0),'limit'=>1, 'recursive'=>1));   
	}
function get_Product_key_file_list($client_id=0, $product_id=0)
	{
		return $this->find('list',array('fields' => array('ProductClientLicense.id','ProductClientLicense.product_key_file_url'),'order'=>array('ProductClientLicense.id'=>'desc'),'conditions'=>array('ProductClientLicense.client_id'=>$client_id,'ProductClientLicense.product_id'=>$product_id,'ProductClientLicense.license_type'=>'create','ProductClientLicense.license_status'=>'a','ProductClientLicense.status'=>1,'ProductClientLicense.is_deleted'=>0),'recursive'=>1));   
	}
}
?>