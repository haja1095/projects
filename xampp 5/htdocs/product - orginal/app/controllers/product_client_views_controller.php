<?php
class ProductClientViewsController extends AppController { //for our 'Task' model, the corresponding controller is Tasks Controller.
var $name='ProductClientViews';
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
function product_client_report()
	{
	$this->layout= 'popup';
	$checked_keys = array();
	//pr($this->data['product_list']); exit;
			if($this->RequestHandler->isPost())
			{
				if(!empty($this->data['product_list'])) 
				{
						foreach($this->data['product_list'] as $key=>$value)
						{
							if($value==1)
							{
								$checked_keys[]= $key;
							}
						}
					$checked = implode(',', array_values($checked_keys));
					$result = $this->ProductClient->getProductClientView($checked);
					$this->set('checked',$checked);
					$this->set('result',$result);
				}
			}
			if($this->RequestHandler->isAjax())
			{
					$checked = $this->params['form']['checked'];
					$result = $this->ProductClient->getProductClientView($checked);
					$this->set('checked',$checked);
					$this->set('result',$result);
					$this->layout= 'ajax';
					$this->render('/elements/product_client_views/grid_pagging');
			}
				//pr($result); exit;
	}

}
?>
