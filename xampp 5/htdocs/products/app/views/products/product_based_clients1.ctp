<?php echo $form->create('ProductClientLicense');?>
<div id="load_products">
<?php echo $form->select('product_id',$client_product,null,array('id'=>'product_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--', 'onChange'=>'return getLicenseType(this.value);'));?>
</div>
<?php echo $form->end();?>