<?php
class ProductClient extends AppModel {
    var $name = 'ProductClient';
    var $belongsTo = array(
        'Client' => array(
            'className' => 'Client',
            'foreignKey' => 'client_id',
        ),
		'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
        )
    );

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
function get_Products_list($client_id=0)
	{
		return $this->find('list',array('fields' => array('Product.id','Product.product_name'),'order'=>array('Product.id'),'conditions'=>array('ProductClient.client_id'=>$client_id,'ProductClient.status'=>1,'ProductClient.is_deleted'=>0,'Product.is_deleted'=>0),'recursive'=>1));   
	}
function getSelectedProductList($client_id=0)
	{
		return $this->find('list',array('fields' => array('Product.id','Product.product_name'),'order'=>array('Product.product_name'),'conditions'=>array('ProductClient.client_id'=>$client_id,'ProductClient.status'=>1,'ProductClient.is_deleted'=>0),'recursive'=>1));
	}
function getProductClientView($key=0)
	{
		if(isset($key) && !empty($key))
		{
				$query = "Select 
					Product.product_name, 
					Client.id,
					Client.client_name,
					productRelease.release_date,
					productRelease.release_version 
				from product_clients as ProductClient
			join clients as Client on (ProductClient.client_id=Client.id)
			join products as Product on (Product.id=ProductClient.product_id)
			left outer join  
			(
				select ProductClientRelease.product_id,ProductClientRelease.client_id,ProductClientRelease.release_date,ProductClientRelease.release_version from
				(select product_id,client_id,max(release_date) as release_date from  product_client_releases where status=1 and is_deleted=0 and product_id in ($key) group by product_id,client_id) LatestReleaseDate
				join product_client_releases as ProductClientRelease on (ProductClientRelease.product_id=LatestReleaseDate.product_id and ProductClientRelease.client_id=LatestReleaseDate.client_id and ProductClientRelease.release_date=LatestReleaseDate.release_date)
				where ProductClientRelease.status=1 and ProductClientRelease.is_deleted=0
			) as productRelease on (ProductClient.product_id=productRelease.product_id and ProductClient.client_id=productRelease.client_id)
			where ProductClient.product_id in ($key) 
			order by Client.client_name,Product.product_name";
			$result = $this->query($query);
			return $result;
		}
		else
		{
			return NULL;
		}
	}
}
?>