<?php
class ProductsController extends AppController { //for our 'Task' model, the corresponding controller is Tasks Controller.
var $name='Products';
var $uses = array('Product','ProductClient');
var $helpers = array('Paginator', 'Html', 'Form','Js' => array('Prototype'), 'Ajax'); 
var $components = array('RequestHandler', 'Session');
//For Pagination
var $paginate = array('limit' =>10, 'page' => 1,'order' => array('Product.product_name' => 'asc'));

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
	$this->set('products', $this->Product->find('all'));
	if($this->RequestHandler->isAjax())
	{
		$this->render('/elements/products/index_pagging');
	}
	else
	{
		$this->set('statuses',$this->getStatus());
		$this->set('model_name',$this->modelClass);
		$this->Session->delete($this->modelClass);
		$this->set('products_list',$this->Product->getProductList());
	}	
}
////start page

function add_product()
	{
	if($this->RequestHandler->isAjax()) {
	 if(!empty($this->data))
	  {
	  	//pr($this->data); exit;
	      $product['Product']['product_name']		=	trim($this->data['Product']['product_name']);
		  $product['Product']['product_desc']		=	trim($this->data['Product']['product_desc']);
		  $product['Product']['product_version']	=	trim($this->data['Product']['product_version']);
		  $product['Product']['status'] 	  		=	1;
		  $product['Product']['is_deleted']  		=	0;
		  $product['Product']['created_date']		= 	$this->CreatedDate(); 
		  $product['Product']['created_by']  		=  	$this->CreatedBy();
		  $this->Product->create();
		  if(!!$this->Product->save($product))
		  {
		    $this->set('success_message','Product Has Saved');
			$this->data=array();
			$this->render('/elements/message');   
		  }
		  else
		  {
		    $this->set('error_message','Product Not Saved');
		  }
	  }
	  }
	}
	
function search()
	 {
	  if($this->Session->check($this->modelClass))
		 {			     
			  $product_name=$this->Session->read('Product'.'.product_name');
			  $status=$this->Session->read('Product'.'.status');
			  $condition='Product'.".is_deleted=0";
			  if(!empty($product_name))
			  $condition.=" AND "."Product.id = '".low($product_name)."'";
			  if($status!='')
			  $condition.=" AND ".$this->modelClass.".status=".$status;
			 
			  return  $this->paginate(array($condition));
		 }
		 else
		 {
			  $condition='Product'.".is_deleted=0";
			  return $this->paginate(array($condition));
		 }
	 }
function view($id=null)
	{
		if(!empty($id))
	 		 {
		    $this->data= $this->Product->find(array('Product.id'=>$id));			
		  }
	} 
function edit($id=null)
	{
	  if(!empty($id))
	  {
		  if(!empty($this->data))
		  {
			  $Product['Product']['product_name']	=	trim($this->data['Product']['product_name']);
			  $Product['Product']['product_desc']	=	trim($this->data['Product']['product_desc']);
			  $Product['Product']['product_version']=	trim($this->data['Product']['product_version']);
			  $Product['Product']['status'] 		=	$this->data['Product']['status'];
			  $Product['Product']['is_deleted']  	=	0;  
			  $Product['Product']['modified_date']	=	$this->CreatedDate();									    	 
			  $Product['Product']['modified_by']  	=  	$this->CreatedBy();
			  $this->Product->id=$id;
			  if(!!$this->Product->save($Product))
			  {
				$this->set('success_message','Product Has Updated');
				$this->data=array();
				 $this->render('/elements/message');   
			  }
			  else
			  {
				$this->set('error_message','Product Not Update');
			  }		 
		  }
		  else
		  {
		    $this->data= $this->Product->find(array('Product.id'=>$id));			
		  }
		 }
		 $this->data['Product']['id']=$id;
	}
	function delete($id=null){
		if(!empty($id)){ 		 
			$Product['Product']['is_deleted']  	=	1;  
			$Product['Product']['created_date']	= 	$this->CreatedDate();									    	 
			$Product['Product']['created_by'] 	=  	$this->CreatedBy();
			
			$this->Product->id=$id;
			$check=$this->Product->checkUsability($id);
			if ($check){
				if(!!$this->Product->save($Product,false)){ 
					$this->set('success_message','Product Has Been Deleted');
					$this->data=array();
					$this->render('/elements/message');
				}
				else{
					$this->set('error_message','Product Not Deleted');
				}
			}
			else {
				$this->set('error_message','Product Has Used In Another Transaction');
				$this->render('/elements/message');   
			}
		}
	}
function product_based_clients()
	{
	$this->layout='ajax';
		//pr($this->params['form']['client_id']);
		  if(!empty($this->params['form']['client_id']))
			{
				$client_id = $this->params['form']['client_id'];
				//pr($this->ProductClient->get_Products_list($client_id)); exit;
				$this->set('client_product',$this->ProductClient->get_Products_list($client_id));
				//pr($this->ProductClient->get_Products_list($client_id)); exit;
			}
		else {
				$this->set('client_product',array());
			}
	}
function product_based_clients1()
	{
	$this->layout='ajax';
		//pr($this->params['form']['client_id']);
		  if(!empty($this->params['form']['client_id']))
			{
				$client_id = $this->params['form']['client_id'];
				//pr($this->ProductClient->get_Products_list($client_id)); exit;
				$this->set('client_product',$this->ProductClient->get_Products_list($client_id));
				//pr($this->ProductClient->get_Products_list($client_id)); exit;
			}
		else {
				$this->set('client_product',array());
			}
			
	}
function List_Selected_Products()
	{
	$this->layout='ajax';
		//pr($this->params['form']['client_id']);
		  if(!empty($this->params['form']['client_id']))
			{
				$client_id = $this->params['form']['client_id'];
				//pr($this->ProductClient->get_Products_list($client_id)); exit;
				$this->set('client_product',$this->ProductClient->get_Products_list($client_id));
				//pr($this->ProductClient->get_Products_list($client_id)); exit;
			}
		else {
				$this->set('client_product',array());
			}
			
	}

}
?>
