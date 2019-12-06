<?php
class ProductClientLicensesController extends AppController { //for our 'Task' model, the corresponding controller is Tasks Controller.
var $name='ProductClientLicenses';
var $uses = array('ProductClientLicense','Product','Client');
var $helpers = array('Paginator', 'Html', 'Form','Js' => array('Prototype'), 'Ajax'); 
var $components = array('RequestHandler', 'Session');
//For Pagination
var $paginate = array('limit' =>10, 'page' => 1,'order' => array('ProductClientLicense.client_id' => 'asc'));

//start page
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
		$this->set('releases', $this->ProductClientLicense->find('all'));
			if($this->RequestHandler->isAjax())
			{
				$this->render('/elements/product_client_licenses/index_pagging');
			}
			else
			{
				$this->set('statuses',$this->getStatus());
				$this->set('model_name',$this->modelClass);
				$this->set('products_list',$this->Product->getProductList());
				$this->set('clients_list',$this->Client->getClientList());
			}
	}
////start page

function add_license($product_id=Null)
	{
	if($this->RequestHandler->isPost())
	{
		 if(!empty($this->data))
		  {
		 // pr($this->data); exit;

			if (isset($this->data['ProductClientLicense']['product_key_file_url'])) 
				{
				/* File Uploading for Product Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['product_key_file_url']); 
 					if(array_key_exists('urls', $fileOK)) 
					{  
						$product_client_license['ProductClientLicense']['product_key_file_url'] 	= $fileOK['urls'][0];  
					}  
				}
				if (isset($this->data['ProductClientLicense']['license_key_file_url'])) 
				{
				/* File Uploading for License Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['license_key_file_url']); 
 					if(array_key_exists('urls', $fileOK)) 
					{
						$product_client_license['ProductClientLicense']['license_key_file_url'] 	= $fileOK['urls'][0];  
					}
				}
			  $product_client_license['ProductClientLicense']['license_key']		=	$this->data['ProductClientLicense']['license_key'];
			  $product_client_license['ProductClientLicense']['product_id']			=	trim($this->data['ProductClientLicense']['product_id']);
			  $product_client_license['ProductClientLicense']['client_id']			=	trim($this->data['ProductClientLicense']['client_id']);
			  $product_client_license['ProductClientLicense']['license_type']		=	'create';
			  $product_client_license['ProductClientLicense']['expire_date']		=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['expire_date']));
			  $product_client_license['ProductClientLicense']['product_ids']		=	trim($this->data['ProductClientLicense']['product_ids']);
			  $product_client_license['ProductClientLicense']['product_key']		=	trim($this->data['ProductClientLicense']['product_key']);
			  $product_client_license['ProductClientLicense']['status'] 	 		=	1;
			  $product_client_license['ProductClientLicense']['is_deleted']  		=	0;
			  $product_client_license['ProductClientLicense']['created_date']		=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['created_date']));
			  $product_client_license['ProductClientLicense']['license_status']		=	'a';
			  $product_client_license['ProductClientLicense']['is_deletable']		=	'1';
				  $this->ProductClientLicense->create();
				  if(!!$this->ProductClientLicense->save($product_client_license))
				   {
					//$this->set('success_message','Data Has Saved');
					$this->Session->write('success_message','Data Has Saved');
					$this->data=array();
					$this->redirect('index');
					//$this->render('/elements/message');  
				  }
				  else
				  {
					$this->set('error_message','Data not Saved');
					$this->data['ProductClientLicense']['client_id']='';
					$this->data['ProductClientLicense']['license_type']='';
				  }
			  }

			else
			  {
				$this->set('error_message','Data Not Saved. Please Fill Marked(*) Details.');
			  }
		
	  }
	  //$this->set('license_id', $this->ProductClientLicense->find('list', array('fields' => array('id'))));
	  //$this->data['ProductClientLicense']['id']=$id;
	  $this->data[$this->modelClass]['created_date'] = date('Y-m-d');
	  $this->data[$this->modelClass]['expire_date'] = date('Y-m-d');
	  $this->data[$this->modelClass]['next_renewal_date'] = date('Y-m-d');
	  $this->set('products_list',$this->Product->getProductList());
	  $this->set('clients_list',$this->Client->getClientList());
	  //$this->set('license_type', $this->ProductClientLicense->find('list', array('fields' => array('license_type'))));
}

function license_renewal($product_id=Null)
	{
	if($this->RequestHandler->isPost())
	{
		 if(!empty($this->data))
		  {
		  	if (isset($this->data['ProductClientLicense']['product_key_file_url'])) 
				{
				/* File Uploading for Product Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['product_key_file_url']); 
 					if(array_key_exists('urls', $fileOK)) 
					{  
						$product_client_license1['ProductClientLicense']['product_key_file_url'] 	= $fileOK['urls'][0];  
					}  
				}
				if (isset($this->data['ProductClientLicense']['license_key_file_url'])) 
				{
				/* File Uploading for License Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['license_key_file_url']); 
 					if(array_key_exists('urls', $fileOK)) 
					{  
						$product_client_license1['ProductClientLicense']['license_key_file_url'] 	= $fileOK['urls'][0];  
					}  
				}
			   $query = $this->ProductClientLicense->query("update product_client_licenses set is_deletable = 0 where client_id = '".$this->data['ProductClientLicense']['client_id']."' and product_id = '".$this->data['ProductClientLicense']['product_id']."' and license_type = 'renewal'");
				
			  $product_client_license1['ProductClientLicense']['license_key']		=	trim($this->data['ProductClientLicense']['license_key']);
			  $product_client_license1['ProductClientLicense']['product_id']		=	trim($this->data['ProductClientLicense']['product_id']);
			  $product_client_license1['ProductClientLicense']['client_id']			=	trim($this->data['ProductClientLicense']['client_id']);
			  $product_client_license1['ProductClientLicense']['expire_date']		=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['expire_date']));
			  $product_client_license1['ProductClientLicense']['created_date']		=	$this->CreatedDate();
			  //$product_client_license['ProductClientLicense']['product_ids']		=	trim($this->data['ProductClientLicense']['product_ids']);
			  //$product_client_license['ProductClientLicense']['product_key']		=	trim($this->data['ProductClientLicense']['product_key']);
			  
			  $select_id_client_product=$this->ProductClientLicense->find('list',array('fields' => array('id','expire_date'),'order'=>array('id'=>'desc'),'conditions'=>array('client_id'=>$product_client_license1['ProductClientLicense']['client_id'],'product_id'=>$product_client_license1['ProductClientLicense']['product_id'],'status'=>'1','is_deleted'=>'0'),'limit'=>1));
			  if(!empty($select_id_client_product))
			  {
			 foreach( $select_id_client_product as $id=>$expire_date) 
			 {
			  $product_client_license1['ProductClientLicense']['license_type']		=	'renewal';
			  //$product_client_license1['ProductClientLicense']['last_expiry_date']	=	date('Y-m-d',strtotime($expire_date));
			  $product_client_license1['ProductClientLicense']['next_renewal_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['next_renewal_date']));
			  $product_client_license1['ProductClientLicense']['license_status']	=	'r';
			  $product_client_license1['ProductClientLicense']['is_deletable']		=	 1;
			  
				  $this->ProductClientLicense->create();
				  if(!!$this->ProductClientLicense->save($product_client_license1))
				  {
					//$this->set('success_message','Licenses Renewal Has Updated');
					$this->Session->write('success_message','Data Has Saved');
					$this->data=array();
					$this->redirect('index');
					//$this->render('/elements/message');   
				  }
				  else
				  {
					$this->set('error_message','Data Not Saved');
					$this->data['ProductClientLicense']['client_id']='';
					$this->data['ProductClientLicense']['license_type']='';
				  }
				 }
				}
				else 
				{
					$this->set('error_message','License is not Created');
					$this->data['ProductClientLicense']['client_id']='';
					$this->data['ProductClientLicense']['license_type']='';
				}
		  }
		
	  }
	  //$this->set('license_id', $this->ProductClientLicense->find('list', array('fields' => array('id'))));
	  //$this->data['ProductClientLicense']['id']=$id;
	  $this->data[$this->modelClass]['created_date'] = date('Y-m-d');
	  $this->data[$this->modelClass]['expire_date'] = date('Y-m-d');
	  $this->data[$this->modelClass]['next_renewal_date'] = date('Y-m-d');
	  $this->set('products_list',$this->Product->getProductList());
	  $this->set('clients_list',$this->Client->getClientList());
	  //$this->set('license_type', $this->ProductClientLicense->find('list', array('fields' => array('license_type'))));
}

function search()
	 {
	 //pr($this->data); exit;
	  if($this->Session->check($this->modelClass))
		 {
		 	  $client_name	=	$this->Session->read($this->modelClass.'.client_name');
			  $product_name	=	$this->Session->read($this->modelClass.'.product_name');
			  $license_type	=	$this->Session->read($this->modelClass.'.license_type');
			  $license_key	=	$this->Session->read($this->modelClass.'.license_key');
			  $status		=	$this->Session->read($this->modelClass.'.status');
			  $condition = $this->modelClass.".is_deleted = 0";
			  if($client_name!='')
			  $condition.=" AND "."Client.id = '".low($client_name)."'";
			  if($product_name!='')
			  $condition.=" AND "."Product.id = '".low($product_name)."'";
			  if($license_type!='')
			  $condition.=" AND ".$this->modelClass.".license_type = '".$license_type."'";
			  if(!empty($license_key))
			  $condition.=" AND ".$this->modelClass.".license_key like '".low($license_key)."%'";
			  if($status!='')
			  $condition.=" AND ".$this->modelClass.".status=".$status;			
			  return  $this->paginate(array($condition));
		 }
		 else
		 {
			  $condition = $this->modelClass.".is_deleted=0";
			  return $this->paginate(array($condition));
		 }
		 $this->helpers['Paginator'] = array('ajax' => 'Ajax');
	 }
function view($id=null)
	{
		if(!empty($id))
	 		 {
		    $this->data= $this->ProductClientLicense->find(array('ProductClientLicense.id'=>$id));
		  }
	}
function edit_license($id=null)
	{
	  if(!empty($id))
	  {
		  if(!empty($this->data))
		  {
		  		if (isset($this->data['ProductClientLicense']['product_key_file_url'])) 
				{
				/* File Uploading for Product Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['product_key_file_url']);
 					if(array_key_exists('urls', $fileOK)) 
					{  
						$product_client_license['ProductClientLicense']['product_key_file_url'] 	= $fileOK['urls'][0];
					}  
				}
				if (isset($this->data['ProductClientLicense']['license_key_file_url'])) 
				{
				/* File Uploading for License Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['license_key_file_url']); 
 					if(array_key_exists('urls', $fileOK)) 
					{
						$product_client_license['ProductClientLicense']['license_key_file_url'] 	= $fileOK['urls'][0];  
					}
				}
				/* license type check */
				/*
				if ($this->data['ProductClientLicense']['license_type']=='create')
				{
						$product_client_license['ProductClientLicense']['license_status'] 	= 'a';
				}
				if ($this->data['ProductClientLicense']['license_type']=='renewal')
				{
						$product_client_license['ProductClientLicense']['license_status'] 	= 'r';
				}
				*/
			  $product_client_license['ProductClientLicense']['product_id']		=	trim($this->data['ProductClientLicense']['product_id']);
			  $product_client_license['ProductClientLicense']['client_id']		=	trim($this->data['ProductClientLicense']['client_id']);
			  $product_client_license['ProductClientLicense']['license_type']	=	'create';
			  $product_client_license['ProductClientLicense']['license_status'] 	= 'a';
			  
			  if(!empty($this->data['ProductClientLicense']['created_date'])) {
			  		$product_client_license['ProductClientLicense']['created_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['created_date']));
			  }
			  
			  $product_client_license['ProductClientLicense']['expire_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['expire_date']));
			  $product_client_license['ProductClientLicense']['product_ids']	=	trim($this->data['ProductClientLicense']['product_ids']);
			  $product_client_license['ProductClientLicense']['product_key']	=	trim($this->data['ProductClientLicense']['product_key']);
			  $product_client_license['ProductClientLicense']['license_key']	=	trim($this->data['ProductClientLicense']['license_key']);
			  $product_client_license['ProductClientLicense']['status'] 	  	=	$this->data['ProductClientLicense']['status'];
			  $product_client_license['ProductClientLicense']['is_deleted']  	=	0;
			  //$product_client_license['ProductClientLicense']['last_expiry_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['last_expiry_date']));
			  //$product_client_license['ProductClientLicense']['next_renewal_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['next_renewal_date']));
			  //$product_client_license['ProductClientLicense']['created_by']  	=	trim($this->data['ProductClientLicense']['created_by']);
			  $product_client_license['ProductClientLicense']['modified_date']	= 	$this->CreatedDate(); 
			  $product_client_license['ProductClientLicense']['modified_by']  	=	$this->CreatedBy();
			  //pr($product_client_release); exit;
			  $this->ProductClientLicense->id=$id;
			  if(!!$this->ProductClientLicense->save($product_client_license))
			  {
				$this->Session->write('success_message','Data Has Updated');
				$this->data=array();
				$this->redirect('index');
			  }
			  else
			  {
				$this->set('error_message','Data Not Updated');
			  }
		  }
		  else
		  {
		  	$data =  $this->ProductClientLicense->find(array('ProductClientLicense.id'=>$id));			
		    $this->data= $data;
			if(!empty($data['ProductClientLicense']['created_date']))
				$this->data['ProductClientLicense']['created_date']= date('Y-m-d',strtotime($data['ProductClientLicense']['created_date']));
			if(!empty($data['ProductClientLicense']['expire_date']))
				$this->data['ProductClientLicense']['expire_date']= date('Y-m-d',strtotime($data['ProductClientLicense']['expire_date']));
		  }
		 }
		 $this->data['ProductClientLicense']['id']=$id;
		 $this->data[$this->modelClass]['next_renewal_date'] = date('Y-m-d');
		 $this->set('products_list',$this->Product->getProductList());
		 $this->set('clients_list',$this->Client->getClientList());
		 //$this->set('license_type', $this->ProductClientLicense->find('list', array('fields' => array('license_type'))));
	}
	function edit_license_renewal($id=null)
	{
	  if(!empty($id))
	  {
		  if(!empty($this->data))
		  {
		  		if (isset($this->data['ProductClientLicense']['product_key_file_url'])) 
				{
				/* File Uploading for Product Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['product_key_file_url']);
 					if(array_key_exists('urls', $fileOK)) 
					{  
						$product_client_license['ProductClientLicense']['product_key_file_url'] 	= $fileOK['urls'][0];
					}  
				}
				if (isset($this->data['ProductClientLicense']['license_key_file_url'])) 
				{
				/* File Uploading for License Key File*/
					$fileOK = $this->uploadFiles('Product_License', $this->data['ProductClientLicense']['license_key_file_url']); 
 					if(array_key_exists('urls', $fileOK)) 
					{
						$product_client_license['ProductClientLicense']['license_key_file_url'] 	= $fileOK['urls'][0];  
					}
				}
				/* license type check */
				/*
				if ($this->data['ProductClientLicense']['license_type']=='create')
				{
						$product_client_license['ProductClientLicense']['license_status'] 	= 'a';
				}
				if ($this->data['ProductClientLicense']['license_type']=='renewal')
				{
						$product_client_license['ProductClientLicense']['license_status'] 	= 'r';
				}
				*/
			  $product_client_license['ProductClientLicense']['product_id']		=	trim($this->data['ProductClientLicense']['product_id']);
			  $product_client_license['ProductClientLicense']['client_id']		=	trim($this->data['ProductClientLicense']['client_id']);
			  $product_client_license['ProductClientLicense']['license_type']	=	'renewal';
			  $product_client_license['ProductClientLicense']['license_status'] = 'r';
			  
			  if(!empty($this->data['ProductClientLicense']['created_date'])) {
			  		$product_client_license['ProductClientLicense']['created_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['created_date']));
			  }
			  $product_client_license['ProductClientLicense']['expire_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['expire_date']));
			  $product_client_license['ProductClientLicense']['license_key']	=	trim($this->data['ProductClientLicense']['license_key']);
			  $product_client_license['ProductClientLicense']['status'] 	  	=	$this->data['ProductClientLicense']['status'];
			  $product_client_license['ProductClientLicense']['is_deleted']  	=	0;
			  //$product_client_license['ProductClientLicense']['product_key_file_url']	=	trim($this->data['ProductClientLicense']['product_key_file_url']);
			  //$product_client_license['ProductClientLicense']['last_expiry_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['last_expiry_date']));
			  $product_client_license['ProductClientLicense']['next_renewal_date']	=	date('Y-m-d',strtotime($this->data['ProductClientLicense']['next_renewal_date']));
			  //$product_client_license['ProductClientLicense']['created_by']  	=	trim($this->data['ProductClientLicense']['created_by']);
			  $product_client_license['ProductClientLicense']['modified_date']	= 	$this->CreatedDate(); 
			  $product_client_license['ProductClientLicense']['modified_by']  	=	$this->CreatedBy();
			  $this->ProductClientLicense->id=$id;
			  if(!!$this->ProductClientLicense->save($product_client_license))
			  {
			  	$this->Session->write('success_message','Data Has Updated');
				$this->data=array();
				$this->redirect('index');  
			  }
			  else
			  {
				$this->set('error_message','Data Not Updated');
			  }
		  }
		  else
		  {
		  	$data =  $this->ProductClientLicense->find(array('ProductClientLicense.id'=>$id));			
		    $this->data= $data;
			//$this->set('product_key_file', $this->data['ProductClientLicense']['product_key_file_url']);
			if(!empty($data['ProductClientLicense']['created_date']))
				$this->data['ProductClientLicense']['created_date']= date('Y-m-d',strtotime($data['ProductClientLicense']['created_date']));
			if(!empty($data['ProductClientLicense']['expire_date']))
				$this->data['ProductClientLicense']['expire_date']= date('Y-m-d',strtotime($data['ProductClientLicense']['expire_date']));
		  }
		 }
		 $this->data['ProductClientLicense']['id']=$id;
		 //$this->data[$this->modelClass]['next_renewal_date'] = date('Y-m-d');
		 $this->set('products_list',$this->Product->getProductList());
		 $this->set('clients_list',$this->Client->getClientList());
		 //$this->set('license_type', $this->ProductClientLicense->find('list', array('fields' => array('license_type'))));
	}

	function delete($id=null){
		if(!empty($id)) {
				$query = $this->ProductClientLicense->query("select client_id, product_id, license_type, is_deletable from product_client_licenses where id=$id and license_type = 'renewal' and status=1 and is_deleted=0");
				if(!empty($query)) {
					$client_id = $query[0][0]['client_id'];
					$product_id = $query[0][0]['product_id'];

					//$query2 = $this->ProductClientLicense->query(" update product_client_licenses set is_deletable = 0 where id!=$max_id ");
					$query2 = $this->ProductClientLicense->query(" update product_client_licenses set is_deletable = 0 where client_id = $client_id and product_id = $product_id and license_type = 'renewal' and is_deleted=0");
				}

			$product_client_license['ProductClientLicense']['is_deleted']		=	1;
			$product_client_license['ProductClientLicense']['license_status']	=	'c';
			$this->ProductClientLicense->id = $id;
			$check=$this->ProductClientLicense->checkUsability($id);
			if ($check){
				if(!!$this->ProductClientLicense->save($product_client_license,false)){
						if(isset($client_id) && isset($product_id)) {
						$query1 = $this->ProductClientLicense->query("select id from product_client_licenses where id IN(select max(id) as id from product_client_licenses where client_id = $client_id AND product_id =$product_id AND license_type = 'renewal' and is_deleted=0)");
						if($query1) {
							$max_id = $query1[0][0]['id'];
							$query3 = $this->ProductClientLicense->query(" UPDATE product_client_licenses SET is_deletable = 1 WHERE id = $max_id AND license_type = 'renewal'");
							}
						}
					$this->set('success_message','Data Has Deleted');
					$this->data=array();
					$this->render('/elements/message');
				}
				else{
					$this->set('error_message','Data Not Deleted');
				}
			}
			else {
				$this->set('error_message','License Record Has Used In Another Transaction');
				$this->render('/elements/message');   
			}
		}
	}
function product_key_file_download($id=null)
	{
		if(!empty($id))
	 		 {
			$this->data= $this->ProductClientLicense->find(array('ProductClientLicense.id'=>$id));
			$file=$this->data['ProductClientLicense']['product_key_file_url'];
			$this->fileDownload($file);
		  }
	}
function license_key_file_download($id=null)
	{
		if(!empty($id))
	 		 {
			$this->data= $this->ProductClientLicense->find(array('ProductClientLicense.id'=>$id));
			$file=$this->data['ProductClientLicense']['license_key_file_url'];
			$this->fileDownload($file);
		  }
	}
function client_product_based_expire_date()
	{
	$this->layout='ajax';
		  if(!empty($this->params['form']['client_id']) && !empty($this->params['form']['product_id']))
			{
				$client_id = $this->params['form']['client_id'];
				$product_id = $this->params['form']['product_id'];
				
				$this->set('client_product_expire',$this->ProductClientLicense->get_ExpireDate_list($client_id, $product_id));
				
			}
		else {
				$this->set('client_product_expire',array());
			}
			
	}
function client_product_based_renewal_date()
	{
	$this->layout='ajax';
		  if(!empty($this->params['form']['client_id']) && !empty($this->params['form']['product_id']))
			{
				$client_id = $this->params['form']['client_id'];
				$product_id = $this->params['form']['product_id'];
				$this->set('client_product_renewal',$this->ProductClientLicense->get_ExpireDate_list($client_id, $product_id));				
			}
		else {
				$this->set('client_product_renewal',array());
			}
			
	}
function client_product_based_product_key()
	{
	$this->layout='ajax';
		  if(!empty($this->params['form']['client_id']) && !empty($this->params['form']['product_id']))
			{
				$client_id = $this->params['form']['client_id'];
				$product_id = $this->params['form']['product_id'];
				$this->set('client_product_product_key',$this->ProductClientLicense->get_Product_key_file_list($client_id, $product_id));
				
			}
		else {
				$this->set('client_product_product_key',array());
			}
			
	}
}
?>