<?php echo $form->create('ProductClientRelease');?>
<div id="load_products">
<?php echo $form->select('product_id',$client_product,null,array('id'=>'product_id','class'=>'text_select_100','div'=>false,'error'=>false, 'label' => false,'empty'=>'--Select--'));?>
</div>
<?php echo $form->end();?>
