<?php
class ClientsController extends AppController { //for our 'Task' model, the corresponding controller is Tasks Controller.
var $name='Clients';
var $uses = array('Client','Product','ProductClient');
var $helpers = array('Paginator', 'Html', 'Form','Js' => array('Prototype'), 'Ajax'); 
var $components = array('RequestHandler', 'Session');
//For Pagination
var $paginate = array('limit' =>10, 'page' => 1,'order' => array('Client.client_name' => 'asc'));

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
		$this->set('clients', $this->Client->find('all'));
			if($this->RequestHandler->isAjax())
			{       
				$this->render('/elements/clients/index_pagging');
			}
			else
			{
				$this->set('statuses',$this->getStatus());
				$this->set('model_name',$this->modelClass);
				$this->set('products_list',$this->Product->getProductList());
				$this->Session->delete($this->modelClass);
				$this->set('clients_list',$this->Client->getClientList());
			}
	}
////start page

function add_client()
	{
	if($this->RequestHandler->isAjax()) 
	{
	 if(!empty($this->data))
	  {
	  	//pr($this->data); exit;
		// For Client table entry
		  $client['Client']['client_name']		=	trim($this->data['Client']['client_name']);
		  $client['Client']['client_address']	=	trim($this->data['Client']['client_address']);
		  $client['Client']['client_mobile']	=	trim($this->data['Client']['client_mobile']);
		  $client['Client']['status'] 	  		=	1;
		  $client['Client']['is_deleted']  		=	0;
		  $client['Client']['created_date']		= 	$this->CreatedDate(); 
		  $client['Client']['created_by']  		=  	$this->CreatedBy();
		  $this->Client->create();
		  if($this->Client->save($client))
		  {
		// For Client table entry
		
		  $last_inserted_id=$this->Client->getLastInsertID();
		// For Product_Client table entry
			if(!empty($this->data['product_list'])) 
			{
				foreach($this->data['product_list'] as $key=>$value) 
				{
					$pclient = array();
					if($value==1)
					{
						  $pclient['ProductClient']['product_id']=$key;
						  $pclient['ProductClient']['client_id']=$last_inserted_id;
						  $pclient['ProductClient']['created_date']= $this->CreatedDate(); 
						  $pclient['ProductClient']['created_by']  =  $this->CreatedBy();
						  //pr($client); exit;
						  $this->ProductClient->create();
						  //pr($this->Product_Client->save($client)); exit;
						  $product_client_det=$this->ProductClient->save($pclient);
						  
					}

				}
							
			}
			$this->set('success_message','Data Has Saved');
			$this->render('/elements/message');
		// For Product_Client table entry
		}
			else 
			{
				$this->set('error_message','Data Not Saved!');
			}
	   	}
	  }
	  $product_list = $this->Product->find('all');
	  $this->set('product_list', $product_list);
	  //$this->set('products_list',$this->Product->find('all'));
	  //$this->set('product_list',$this->Product->getProductList());
	}
	
function search()
	 {
	  if($this->Session->check($this->modelClass))
		 {
		 //pr($this->data); exit;
			  $client_name	=	$this->Session->read($this->modelClass.'.client_name');
			  $client_mobile	=	$this->Session->read($this->modelClass.'.client_mobile');
			  $status		=	$this->Session->read($this->modelClass.'.status');
			  $condition	= 	$this->modelClass.".is_deleted=0";
			  if(!empty($client_name))
			  //$condition.=" AND lower(".$this->modelClass.".client_name) like '".low($client_name)."%'";
			  $condition.=" AND "."Client.id = '".low($client_name)."'";
			  if(!empty($client_mobile))
			  $condition.=" AND lower(".$this->modelClass.".client_mobile) like '".low($client_mobile)."%'";
			  if($status!='')
			  $condition.=" AND ".$this->modelClass.".status=".$status;
			 
			  return  $this->paginate(array($condition));
		 }
		 else
		 {
			  $condition=$this->modelClass.".is_deleted=0";
			  return $this->paginate(array($condition));		
		 }
	 }
function view($id=null)
	{
		if(!empty($id))
	 		 {
		    $this->data= $this->Client->find(array('Client.id'=>$id));
			$this->set('selected_products', $this->ProductClient->getSelectedProductList($id));
		  }
	}
function edit($id=null)
	{
	  if(!empty($id))
	   {
		  if(!empty($this->data))
		  {
			  $Client['Client']['client_name']		=	trim($this->data['Client']['client_name']);
			  $Client['Client']['client_address']	=	trim($this->data['Client']['client_address']);
			  $Client['Client']['client_mobile']	=	trim($this->data['Client']['client_mobile']);
			  $Client['Client']['status'] 			=	$this->data['Client']['status'];  
			  $Client['Client']['is_deleted']  		=	0;  
			  $Client['Client']['modified_date']	=	$this->CreatedDate();									    	 
			  $Client['Client']['modified_by']  	=	$this->CreatedBy();
			  $this->Client->id=$id;
			  $this->Client->save($Client);
			  
			// For Product_Client table updation
				if(!empty($this->data['product_list'])) 
				{
					foreach($this->data['product_list'] as $key=>$value) 
					{
						$pclient = array();
						/*
						if($value==1)
						{
							  $pclient['ProductClient']['product_id']=$key;
							  $pclient['ProductClient']['client_id']=$id;
							  $pclient['ProductClient']['created_date']= $this->CreatedDate(); 
							  $pclient['ProductClient']['created_by']  =  $this->CreatedBy();
							  //pr($client); exit;
							  $this->ProductClient->create();
							  //pr($this->Product_Client->save($client)); exit;
							  $this->ProductClient->save($pclient);
							  
						}
						*/
						if($value==0)
						{
							  $pclient['ProductClient']['is_deleted']  	=	1;  
							  $pclient['ProductClient']['product_id']	=	$key;
							  $pclient['ProductClient']['client_id']	=	$id;
							  $pclient['ProductClient']['created_date']	= 	$this->CreatedDate(); 
							  $pclient['ProductClient']['created_by']  	=  	$this->CreatedBy();
							  //pr($client); exit;
							  $this->ProductClient->client_id=$id;
							  $check=$this->ProductClient->checkUsability($id);
								  if ($check)
									{
									  //$this->ProductClient->save($pclient,false);
									  $this->ProductClient->query("update product_clients set is_deleted=1 where product_id='".$key."' and client_id='".$id."'");
									}
						}
					}
								
				}
			// For Product_Client table updation 
			$this->set('success_message','Data Has Saved');
			$this->render('/elements/message');
		  }
		  else
		  {
		    $this->data= $this->Client->find(array('Client.id'=>$id));
		  }
		 }
		 $this->data['Client']['id']=$id;
		//$product_list = $this->Product->find('all');
	 	//$this->set('product_list', $product_list);
		$this->set('product_list',$this->Product->find('all'));
		$this->set('selected_products', $this->ProductClient->getSelectedProductList($id));
	}
function delete($id=null){
		if(!empty($id)){
			$Client['Client']['is_deleted']  	=	1;
			//$pclient['ProductClient']['is_deleted']  =1;  
			$Client['Client']['created_date']	= 	$this->CreatedDate();					    	 
			$Client['Client']['created_by'] 	=  	$this->CreatedBy();
			$this->Client->id=$id;
			$check=$this->Client->checkUsability($id);
			
			$this->ProductClient->client_id=$id;
			$checklist=$this->ProductClient->checkUsability($id);
			if ($check && $checklist){
				$this->Client->save($Client,false);
				$this->ProductClient->query("update product_clients set is_deleted=1 where client_id='".$id."'");
				}
					$this->set('success_message','Client Record Has Been Deleted');
					$this->data=array();
					$this->render('/elements/message');
				}			
			else {
				$this->set('error_message','Client Has Used In Another Transaction');
				$this->render('/elements/message');   
			}
		}

}
?>