<?php
class ProductClientReleasesController extends AppController { //for our 'Task' model, the corresponding controller is Tasks Controller.
var $name='ProductClientReleases';
var $uses = array('ProductClientRelease','Product','Client','ProductClient','ReleaseMode');
var $helpers = array('Paginator', 'Html', 'Form','Js' => array('Prototype'), 'Ajax'); 
var $components = array('RequestHandler', 'Session');
//For Pagination
var $paginate = array('limit' =>10, 'page' => 1,'order' => array('ProductClientRelease.id' => 'asc'));

function index() { 
	if(!empty($this->data))
	{
	  $this->Session->write($this->modelClass,$this->data[$this->modelClass]);			
	}
	else
	{
		if(!$this->RequestHandler->isAjax())
		{
				if($this->Session->check($this->modelClass))
				{
					$this->data[$this->modelClass]=$this->Session->read($this->modelClass);
					if($this->Session->Check($this->modelClass.'Pagination'))
					{ 
						$this->params['named']=$this->Session->read($this->modelClass.'Pagination');
						$this->Session->delete($this->modelClass);
					}
				}
				else
				{
					$record_per_page=10;
					$this->data[$this->modelClass]['limit']=$record_per_page;
					$this->Session->write($this->modelClass.'.limit',$record_per_page);
				}
		}
		else
			{
				if($this->Session->check($this->modelClass))
				{
					$this->data[$this->modelClass]=$this->Session->read($this->modelClass);
					if($this->Session->Check($this->modelClass.'Pagination'))
					{
						$this->params['named']=$this->Session->read($this->modelClass.'Pagination');
					}
				}
				if(isset($this->params['named']) && !empty($this->params['named']))
				{
					$this->Session->write($this->modelClass.'Pagination',$this->params['named']);
				}
			}
	}
		$this->viewVars[$this->name]= $this->search();
		$this->helpers['Paginator'] = array('ajax' => 'Ajax');
		$this->set('releases', $this->ProductClientRelease->find('all'));
			if($this->RequestHandler->isAjax())
			{
				$Search_condition = $this->Session->read('Search_condition');
				$this->set('releases', $this->ProductClientRelease->find($Search_condition));
				$this->render('/elements/product_client_releases/index_pagging');
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

function add_release()
	{
	if($this->RequestHandler->isAjax()) {
		 if(!empty($this->data))
		  {
			//pr($this->data); exit;
			  $product_client_release['ProductClientRelease']['release_no']			=	trim($this->data['ProductClientRelease']['release_no']);
			  $product_client_release['ProductClientRelease']['release_date']		=	date('Y-m-d',strtotime($this->data['ProductClientRelease']['release_date']));
			  $product_client_release['ProductClientRelease']['release_location']	=	trim($this->data['ProductClientRelease']['release_location']);
			  $product_client_release['ProductClientRelease']['product_id']			=	trim($this->data['ProductClientRelease']['product_id']);
			  $product_client_release['ProductClientRelease']['client_id']			=	trim($this->data['ProductClientRelease']['client_id']);
			  $product_client_release['ProductClientRelease']['release_version']	=	trim($this->data['ProductClientRelease']['release_version']);
			  $product_client_release['ProductClientRelease']['approved_date']		=	date('Y-m-d',strtotime($this->data['ProductClientRelease']['approved_date']));
			  $product_client_release['ProductClientRelease']['approved_by']		=	trim($this->data['ProductClientRelease']['approved_by']);
			  $product_client_release['ProductClientRelease']['status'] 	  		=	1;
			  $product_client_release['ProductClientRelease']['is_deleted']  		=	0;
			  $product_client_release['ProductClientRelease']['created_date']		= 	$this->CreatedDate(); 
			  $product_client_release['ProductClientRelease']['created_by']  		= 	$this->CreatedBy();
			  $this->ProductClientRelease->create();
			  if(!!$this->ProductClientRelease->save($product_client_release))
			  {
				$this->set('success_message','Releases Details Has Saved');
				$this->data=array();
				$this->render('/elements/message');
			  }
			  else
			  {
				$this->set('error_message','Releases Details Not Saved');
				$this->data['ProductClientRelease']['client_id']='';
				$this->data['ProductClientRelease']['release_location']='';
			  }
		  }
	  }
	  $this->data[$this->modelClass]['release_date'] = date('Y-m-d');
	  $this->data[$this->modelClass]['release_end_date'] = date('Y-m-d');
	  $this->data[$this->modelClass]['approved_date'] = date('Y-m-d');
	  $this->set('products_list',$this->Product->getProductList());
	  $this->set('clients_list',$this->Client->getClientList());
	  $this->set('model_name',$this->modelClass);
	  $this->set('client_product',$this->ProductClient->get_Products_list());
	  $this->set('releases_list',$this->ReleaseMode->getReleaseList());
}
	
function search()
	 {
	  if($this->Session->check($this->modelClass))
		 {
			  $client_name		=	$this->Session->read($this->modelClass.'.client_name');
			  $product_name		=	$this->Session->read($this->modelClass.'.product_name');
			  $release_no		=	$this->Session->read($this->modelClass.'.release_no');
			  $release_version	=	$this->Session->read($this->modelClass.'.release_version');
			  $status			=	$this->Session->read($this->modelClass.'.status');
			  if(isset($this->data['ProductClientRelease']['last_releases']))
				{
					$last_releases	=	$this->data['ProductClientRelease']['last_releases'];
				}
			  if(!empty($this->data['ProductClientRelease']['release_date'])) {
			  		$release_date	=	date('Y-m-d',strtotime($this->data['ProductClientRelease']['release_date']));
			  }
			  if(!empty($this->data['ProductClientRelease']['release_end_date'])) {
			  		$release_end_date	=	date('Y-m-d',strtotime($this->data['ProductClientRelease']['release_end_date']));
			  }
			  $current_date 	= 	$this->CreatedDate();
			  $conditions = $this->modelClass.".is_deleted = 0 ";
 			  if($client_name!='')
			  $conditions.=" AND "."Client.id = '".low($client_name)."'";
			  if($product_name!='')
			  $conditions.=" AND "."Product.id = '".low($product_name)."'";
			  if(!empty($release_no))
			  $conditions.=" AND ".$this->modelClass.".release_no like '".$release_no."%'";
			  if(!empty($release_version))
			  $conditions.=" AND lower(".$this->modelClass.".release_version) like '".low($release_version)."%'";
			  if(isset($last_releases))
			  {
				  if($last_releases!='') {
					  if($last_releases=='last_release') {
						 $conditions .=" AND ".$this->modelClass.".id IN (select id from product_client_releases where is_deleted=0 order by id desc limit 1) ";
						}
					  if($last_releases=='last_month_releases') {
						  $first_day_of_month = date("Y-m-01", strtotime("previous month"));
						  $last_day_of_month = date("Y-m-t", strtotime("previous month"));
						  $conditions .=" AND ".$this->modelClass.".release_date >='".$first_day_of_month."' AND ".$this->modelClass.".release_date <='".$last_day_of_month."'";
						}
					  if($last_releases=='last_ten_releases') {
						  $conditions .=" AND ".$this->modelClass.".id IN (select id from product_client_releases where is_deleted=0 order by id desc limit 10) ";
						}
					  if($last_releases=='last_six_month_releases') {
						  $first_day_of_six_month = date("Y-m-01", strtotime("-6 month"));
						  $last_day_of_six_month = date("Y-m-t", strtotime("-1 month"));
						  $conditions .=" AND ".$this->modelClass.".release_date >='".$first_day_of_six_month."' AND ".$this->modelClass.".release_date <='".$last_day_of_six_month."'";
						}
				 }
				 if($last_releases=='custom') {
					if(!empty($release_date) && !empty($release_end_date)) {
						$release_date = date("Y-m-d", strtotime($release_date));
						$release_end_date = date("Y-m-d", strtotime($release_end_date));
						$conditions .=" AND ".$this->modelClass.".release_date >='".$release_date."' AND ".$this->modelClass.".release_date <='".$release_end_date."'";
					}
				 }
			  }
			  if($status!='')
			  $conditions .=" AND ".$this->modelClass.".status=".$status;
			  $this->Session->write('Search_condition', $conditions);			
			  return $this->paginate(array($conditions));
		 }
		 else
		 {
			  $condition = $this->modelClass.".is_deleted=0";
			  return $this->paginate(array($condition));
			  $this->data[$this->modelClass]['release_end_date'] = date('Y-m-d');
			  $this->data[$this->modelClass]['release_date'] = date('Y-m-d');
			  $this->set('products_list',$this->Product->getProductList());
	  		  $this->set('clients_list',$this->Client->getClientList());
		 }
	 }
function view($id=null)
	{
		if(!empty($id))
	 		 {
		    $this->data= $this->ProductClientRelease->find(array('ProductClientRelease.id'=>$id));			
		  }
	} 
function edit($id=null)
	{
	  if(!empty($id))
	  {
		  if(!empty($this->data))
		  {
			  $product_client_release['ProductClientRelease']['release_no']			=	trim($this->data['ProductClientRelease']['release_no']);
			  $product_client_release['ProductClientRelease']['release_date']		=	date('Y-m-d',strtotime($this->data['ProductClientRelease']['release_date']));
			  $product_client_release['ProductClientRelease']['release_location']	=	$this->data['ProductClientRelease']['release_location'];
			  $product_client_release['ProductClientRelease']['release_version']	=	trim($this->data['ProductClientRelease']['release_version']);
			  $product_client_release['ProductClientRelease']['product_id']			=	$this->data['ProductClientRelease']['product_id'];
			  $product_client_release['ProductClientRelease']['client_id']			=	$this->data['ProductClientRelease']['client_id'];
			  $product_client_release['ProductClientRelease']['status'] 			=	$this->data['ProductClientRelease']['status'];  
			  $product_client_release['ProductClientRelease']['is_deleted']  		=	0;
			  $product_client_release['ProductClientRelease']['approved_date']		=	date('Y-m-d',strtotime($this->data['ProductClientRelease']['approved_date']));
			  $product_client_release['ProductClientRelease']['approved_by']=trim($this->data['ProductClientRelease']['approved_by']);
			  $product_client_release['ProductClientRelease']['modified_date']		= 	$this->CreatedDate(); 
			  $product_client_release['ProductClientRelease']['modified_by']  		= 	$this->CreatedBy();
			  //pr($product_client_release); exit;
			  $this->ProductClientRelease->id=$id;
			  if(!!$this->ProductClientRelease->save($product_client_release))
			  {
				$this->set('success_message','Release Details Has Updated');
				$this->data=array();
				 $this->render('/elements/message');
			  }
			  else
			  {
				$this->set('error_message','Release Details Not Updated');
			  }
		  }
		  else
		  {
		    $this->data= $this->ProductClientRelease->find(array('ProductClientRelease.id'=>$id));			
		  }
		 }
		 $this->data['ProductClientRelease']['id']=$id;
		 $this->set('products_list',$this->Product->getProductList());
		 $this->set('clients_list',$this->Client->getClientList());
		 $this->set('releases_list',$this->ReleaseMode->getReleaseList());
	}
	function delete($id=null){
		if(!empty($id)){ 		 
			$product_client_release['ProductClientRelease']['is_deleted']  =1;
			
			$this->ProductClientRelease->id=$id;
			$check=$this->ProductClientRelease->checkUsability($id);
			if ($check){
				if(!!$this->ProductClientRelease->save($product_client_release,false)){ 
					$this->set('success_message','Data Has Deleted');
					$this->data=array();
					$this->render('/elements/message');
				}
				else{
					$this->set('error_message','Data Not Deleted');
				}
			}
			else {
				$this->set('error_message','Release Record Has Used In Another Transaction');
				$this->render('/elements/message');   
			}
		}
	}

}
?>