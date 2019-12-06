
<script type="text/javascript">
var checked = '<?php echo $checked; ?>';
var url='?checked='+checked;

function auto_update_table(){
 		new Ajax.Updater('grid',root_base+'/product_client_views/product_client_report', {asynchronous:true, evalScripts:true,onLoading:function(request, json) {javascript:onloading_indicator(true);}, onComplete:function(r){onloading_indicator(false);},parameters:url, requestHeaders:['X-Update', 'grid']});
    setTimeout(auto_update_table, 180000);
}
auto_update_table();

</script>
<style type="text/css">
.table_list {
    background: #ffffff none repeat scroll 0 0;
    border-color: #eaebec;
    border-style: solid;
    border-width: 1px;
    color: #000000;
    font-family: Verdana;
    font-size: 11px;
    margin-bottom: 1em;
    margin-top: 0;
}
.row_head {
    background: #ffb366 none repeat scroll 0 0;
    border-color: #888888;
    border-style: solid;
    border-width: 0;
    color: #3f4952;
    font-weight: bolder;
    padding: 5px;
}
.row_head .sno_field {
    text-align: center;
	font-size:14px;
}
.row_head .text_field {
    text-align: center;
	font-size:14px;
}
.table_list .row0, .table_list .row1 {
	line-height:45px;
}
.row_head td {
    /* background: #d2dce5 none repeat scroll 0 0; */
    border-color: #888888;
    border-style: solid;
    border-width: 0;
    color: #3f4952;
    font-weight: bolder;
    padding: 30px;
	border: 1px solid #000;
}
.row1 td {
    background: #eef2f5 none repeat scroll 0 0;
    border-color: #888888;
    border-style: solid;
    border-width: 0;
    color: #3f4952;
    padding: 5px 10px;
	font-size:14px;
	border: 1px solid #000;
}
.row0 td {
    background: #ffffff none repeat scroll 0 0;
    border-color: #888888;
    border-style: solid;
    border-width: 0;
    color: #3f4952;
    padding: 5px 10px;
	font-size:14px;
	border: 1px solid #000;
}
</style>
		<div id='message_block'> 
		<?php echo $this->element('message'); ?>
		</div>
		<body>
			   <div id="grid">
				  
				</div> 
		</body>