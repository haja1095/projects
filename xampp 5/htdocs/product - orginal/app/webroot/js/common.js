// JavaScript Document
	
 window.onkeypress=function (evt){
  
 		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode ==34) {		 
			return false
		}		 
		return true
		
 }
 
/* 
* To remove child node from parent element 
* param  'ctrl' object of parent node
*/
	function removeChildNodes(ctrl)
	{
	if(ctrl!=null)
	{
	  while (ctrl.childNodes[0])
	  {
		ctrl.removeChild(ctrl.childNodes[0]);
	  }
	}
	}
	/* 
	* To Show and hide a div part 
	* param  'divid' id of div element 
	*/
	function ShowHide(divid)
	{
		if(document.getElementById(divid))
		{
			if(document.getElementById(divid).style.display =='none'){
				document.getElementById(divid).style.display ='block';
			}
			else
			{
				document.getElementById(divid).style.display ='none';
			}
		}
	}
	
	/* 
	* To Form reset a div part 
	* param  'divid' id of div element 
	* param  'formid' id of form element 
	*/
	function FormReset(divid,formid)
	{
		if(document.getElementById(divid))
		{
			if(document.getElementById(divid).style.display !='none')
			{
				document.getElementById(formid).reset();
			}
		}
	}
	
	/**
	* to clear message block text
	*/
	function clear_message(block_id)
	{
		 if(block_id)
		{
		 	removeChildNodes(document.getElementById(block_id));
		}
		else		
		 removeChildNodes(document.getElementById('message_block'));
	}  
	
	/**
	* to hide entry form in grid 
	*/
	function hide_entry_form()
	{
	  var div_obj=document.getElementById('div_entry_form');
		 removeChildNodes(div_obj );		  
	}
	
	/**
	* to hide entry form in grid 
	*/
	function hide_div_by_id(id)
	{
	  var div_obj=document.getElementById(id);
		 removeChildNodes(div_obj );		  
	} 
	
	/**
	* loding indicator 
	*/
	/*Script starts for loading  */
	function onloading_indicator(flag) {
		 if(flag==true)
			 {
				document.getElementById('busy_indicator').style.display='block';
			 }
		 else
			 {
				document.getElementById('busy_indicator').style.display='none';
			 }
	}
	/* Script ends for loading  */
	function onloading_indicator1(flag,indicator_id)
	{
		
		if(indicator_id)
		{  
			if(flag==true)
		   {
			   //showLightbox();
				document.getElementById(indicator_id).style.display='block';
			// document.getElementById('fade').style.display='block';
		   }
		   else
		   { // hideLightbox();
				document.getElementById(indicator_id).style.display='none';
			 	//document.getElementById('fade').style.display='none';
		   }
		
		}
		else
		{
			   
		   if(flag==true)
		   {
			   
			    showLightbox();
			  // document.getElementById('light').style.display='block';
				//document.getElementById('busy-indicator').style.display='block';
				
				/*
				if (parseInt(navigator.appVersion)>3) {
					 if (navigator.appName=="Netscape") {
					  winW = window.innerWidth;
					  winH = window.innerHeight;
					 }
					 if (navigator.appName.indexOf("Microsoft")!=-1) {
					  winW = document.body.offsetWidth;
					  winH = document.body.offsetHeight;
					 }
					 document.getElementById('fade').style.width=winW;
					 document.getElementById('fade').style.height=winH;
					 document.getElementById('fade').style.display='block';
					  
				} */



		   }
		   else
		   {
			     hideLightbox();
			  /// document.getElementById('light').style.display='none';
				//document.getElementById('busy-indicator').style.display='none';
				//document.getElementById('fade').style.display='none';
		   }
		}
	}
  
  
   /*
   To check all checkbox within a div element
 	*/

	 function checkUncheckAllByDivItems(theElement,myDiv) {
	var z = 0;	 
	var divElement= $(myDiv).getElementsByTagName('*');	  
	 for(z=0; z<divElement.length;z++){
		 
		if(divElement[z].type == 'checkbox' && divElement[z].name != theElement.name){			 
			divElement[z].checked = theElement.checked;
		}
	} 
}

/*
 * Export field move up and down process 
*/
	function load_documet(){
			if($('target_table'))
			{
			 
			  $('target_table').observe('click', function(event){
			 
				var selected_row = Event.findElement(event, ' tr');
				 
				$$('#target_table tr').each (function (row){
				  if (row != selected_row)
					row.removeClassName('selected');
				});
	
				selected_row.toggleClassName('selected');
			  });
	
		   //add observer to move up/down counter
			$('move_up').observe('click', function(){
			 var selected_row = get_selected_row();
			 if (selected_row == null)
				 alert('click on a row first')
			 else
				 move_row(selected_row, 'up', 1);
			});
	
			$('move_down').observe('click', function(){
			 var selected_row = get_selected_row();
			 if (selected_row == null)
				 alert('click on a row first')
			 else
				var pos_pair = move_row(selected_row, 'down', 1);
			 /*
			  *use the following to update database
			 if (pos_pair.size() > 0)
				update_counter_position(pos_pair);
				*/
			});
		  }
		}
	
	//move a row up and down a table
	//available dir option: 'up', 'down'
	//row_num_column is the column of the row number, starts with 1
	function move_row(selected_row, dir, row_num_column) {
		var siblings;
		var pos_pair = [];
	
		if (dir == 'up')
			siblings = selected_row.previousSiblings();
		else if (dir == 'down')
			siblings = selected_row.nextSiblings();
	
		if (siblings.size() > 0) {
			var sibling = siblings.first();
	
			//swop row number
			row_num_column -= 1;
			var selected_pos = selected_row.childElements()[row_num_column].innerHTML;
			var target_pos = sibling.childElements()[row_num_column].innerHTML;
			pos_pair = [selected_pos, target_pos]
	
			sibling.childElements()[row_num_column].innerHTML = selected_pos;
			selected_row.childElements()[row_num_column].innerHTML = target_pos;
	
			
			if (dir == 'up')
				sibling.insert({'before': selected_row});
			else
				sibling.insert({'after': selected_row});
			
		}
	
		return pos_pair
	}
	
	function get_selected_row () {
		var selected_row = null;
		$$('#target_table tr').each (function (row){
		   if (row.hasClassName('selected')) {
			   selected_row = row;
			   throw $break;
		   }
		});
		return selected_row;
	}
	
		
	// accepts numbers and dot
	function ValidateNumber(evt) {
		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		
		if (charCode == 46 || charCode == 37)
		return true
		if (charCode > 31 && (charCode < 48 || charCode > 57) ) {
			status = "This field accepts numbers only."
			return false
		}
		status = ""
		return true
	}	
	
	// accepts only numbers and comma
	function ValidateNumber_comma(evt) {
		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		
		if (charCode == 44)
		return true
		if (charCode > 31 && (charCode < 48 || charCode > 57) ) {
			status = "This field accepts numbers only."
			return false
		}
		status = ""
		return true
	}	
	
   // accepts UpperCase Alphabets And numbers only 
	function ValidateAlphabets_Number(evt) {
		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57) && (charCode < 65 || charCode > 90) ) {
			status = "This field accepts UpperCase Alphabets And numbers only."
			return false
		}
		status = ""
		return true
	}	
	
	// accepts numbers only
	function ValidateNumberOnly(evt) {
		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57) || charCode == 46 ) {
			status = "This field accepts numbers only."
			return false
		}
		status = ""
		return true
	}	
	
	// accepts numbers only
	
	function Numbersonly(e, decimal) {
		var key;
		var keychar;
		
		var key = window.event ? e.keyCode : e.which;
		keychar = String.fromCharCode(key);
		
		if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
		   return true;
		}
		else if ((("0123456789").indexOf(keychar) > -1)) {
		   return true;
		}
		else if (decimal && (keychar == ".")) { 
		  return true;
		}
		else
		   return false;
}

	// accepts Character with space
	function ValidateChar(evt)
	{
		var key = window.event ? evt.keyCode : evt.which;
		var keychar = String.fromCharCode(key);
		reg = /[^0-9']$/;
//		reg = /\s/;
		
		return reg.test(keychar);
	}
	
	// accepts Character with space
	function ValidateAlphaNumberic(evt)
	{
		var key = window.event ? evt.keyCode : evt.which;
		var keychar = String.fromCharCode(key);
		reg = /[^']$/;
//		reg = /\s/;
		
		return reg.test(keychar);
	}
	
	// accepts Decimal Value only
	function ValidateDecimal(evt,value) {
		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		var arr_obj = new Array();
		if(value.length==0 && charCode == 46)
		return false;
		else if ( charCode ==39 ) {		 
				return false
			}		
		for (var i = 1; i <= value.length; i++)
		{	  
		 arr_obj[i]=(value.substring((i - 1), i)).charCodeAt(0);
		}
		 var arr2str = arr_obj.toString();
		 
		 if (charCode >= 8 && charCode <= 40 )
		 {
				return true
		   }		 
			
		if(charCode != 46)
		{
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				status = "This field accepts numbers only."
			    return false
		       }
		   		status = ""
		  return true
		}
		else if(arr2str.search('46')>0)
		{
			 return false;
		}
		else
		{
				status = ""
				return true
		}
	}
	
	/*
	 * To Replace a text in a element
	*/
	 function setTextContent(element, text) { 
		while (element.firstChild!==null)
			element.removeChild(element.firstChild); // remove all existing content
		element.appendChild(document.createTextNode(text));
		} 
	/**
	 * Function that could be used to round a number to a given decimal points. Returns the answer
	 * Arguments :  number - The number that must be rounded
	 *				decimal_points - The number of decimal points that should appear in the result
	 */
	function roundNumber(number,decimal_points) {
		if(!decimal_points) return Math.round(number);
		if(number == 0) {
			var decimals = "";
			for(var i=0;i<decimal_points;i++) decimals += "0";
			return "0."+decimals;
		}
	
		var exponent = Math.pow(10,decimal_points);
		var num = Math.round((number * exponent)).toString();
		return num.slice(0,-1*decimal_points) + "." + num.slice(-1*decimal_points)
	}
	
	/**
	 * Function that could be used to get the days of week by passing date. Returns the answer
	 */	
	
	function getTheDay(aText)
	{
		myDays=["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
		var tmp=aText.split('-');
		var aText=tmp[1]+'/'+tmp[0]+'/'+tmp[2];
		myDate=new Date(eval('"'+aText+'"'));
		return myDays[myDate.getDay()];
	}
	/**
*
*  Javascript trim, ltrim, rtrim
*  http://www.webtoolkit.info/
*
**/
 
function trim(str, chars) {
	return ltrim(rtrim(str, chars), chars);
}
 
function ltrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}
 
function rtrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}
/*
 function for show only a div item
*/

function Showonly(divid)
{
	document.getElementById(divid).style.display ='block';
} 

/* functin for changing subject value subject creating process */
 function change_subject_value(id)
 {      
   var select_box=document.getElementById(id);
	select_box.selectedIndex=0;
   ShowHide('subject_list');
 }
 
/* functin for changing subject value subject creating process */
 function change_location_value(id)
 { 
   var select_box=document.getElementById(id);
	select_box.selectedIndex=0;
   ShowHide('location_list');
 }
 
 /* function for set selected index option a select box */
   function selectOptionByValue(selObj, val){	 
        var A= selObj.options, L= A.length;
        while(L){
            if(A[--L].value== val){
               selObj.selectedIndex= L;
               L= 0;
            }
        }
  	 }

	 /*
 function for show only a div item
*/

function ShowAndHideBothDiv(divid1,divid2)
{
		 
			if(document.getElementById(divid1).style.display =='none')
			{
				document.getElementById(divid2).style.display ='none';
				document.getElementById(divid1).style.display ='block';
				document.getElementById(divid1).focus();
				
			}
			else
			{
				document.getElementById(divid1).style.display ='none';
				document.getElementById(divid2).style.display ='block';
				document.getElementById(divid2).focus();
				 
			}
			 
} 
function disable_button(btnobj)
{
	  btnobj.disabled=true;
}

//  list box item moving across two listbox
function moveOptions(theSelFrom, theSelTo)
{
  
  var selLength = theSelFrom.length;
  var selectedText = new Array();
  var selectedValues = new Array();
  var selectedCount = 0;
  
  var i;
  
  // Find the selected Options in reverse order
  // and delete them from the 'from' Select.
  for(i=selLength-1; i>=0; i--)
  {
    if(theSelFrom.options[i].selected)
    {
      selectedText[selectedCount] = theSelFrom.options[i].text;
      selectedValues[selectedCount] = theSelFrom.options[i].value;
      deleteOption(theSelFrom, i);
      selectedCount++;
    }
  }
  
  // Add the selected text/values in reverse order.
  // This will add the Options to the 'to' Select
  // in the same order as they were in the 'from' Select.
  for(i=selectedCount-1; i>=0; i--)
  {
    addOption(theSelTo, selectedText[i], selectedValues[i]);
  }
  
  if(NS4) history.go(0);
}

//-->

function listbox_moveacross(sourceID, destID) {
//alert(sourceID);
	var src = document.getElementById(sourceID);
	var dest = document.getElementById(destID);
    var srcval = src.value;
	for(var count=0; count < src.options.length; count++) {

		if(src.options[count].selected == true && srcval!='') {
				var option = src.options[count];
				var newOption = document.createElement("option");
				newOption.value = option.value;
				newOption.text = option.text;
				newOption.selected = true;				
				try {
						 dest.add(newOption, null); //Standard
						 src.remove(count, null);
				 }catch(error) {
						 dest.add(newOption); // IE only
						 src.remove(count);
				 }
				count--;
		}
	}
}

function listbox_selectall(listID, isSelect) {
		var listbox = document.getElementById(listID);
		for(var count=0; count < listbox.options.length; count++) {
			listbox.options[count].selected = isSelect;
	}
}
// Remove All elements in select box
function listbox_removeall(listID1,listID2) 
{
	var listbox1 = document.getElementById(listID1);
	var listbox2 = document.getElementById(listID2);
		listbox1.options.length = 0;
		listbox2.options.length = 0;
}

 /* function for unset selected index option a select box(city) */
 	function reset_city(model_name)
	{
		temp = model_name+'MstCityId';
		var select_box=document.getElementById(temp);
		selectOptionReset(select_box);
	}
	
	/* function for unset selected index option a select box(employee) */
	function reset_ccity(model_name)
	{
		temp = model_name+'EmpCcityId';
		var select_box=document.getElementById(temp);
		selectOptionReset(select_box);
	}
	/* function for unset selected index option a select box(permanent employee) */
	function reset_pcity(model_name)
	{
		temp = model_name+'EmpPcityId';
		var select_box=document.getElementById(temp);
		selectOptionReset(select_box);
	}
 /* function for unset selected index option a select box(location) */
	function reset_location(model_name)
	{
		temp = model_name+'MstLocationId';
		var select_box=document.getElementById(temp);
		selectOptionReset(select_box);
	}

 /* function for remove items from select box */
	function selectOptionReset(selObj){	 
		for(i=selObj.options.length-1;i>0;i--)
		{
			selObj.remove(i);
		}
	}
/* function for validate Special Characters and Numbers*/
	function ValidateSpecialCharacter(evt,value) 
	{
 		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		var arr_obj = new Array();
		for (var i = 1; i <= value.length; i++)
		{	  
		 arr_obj[i]=(value.substring((i - 1), i)).charCodeAt(0);
		}
		 var arr2str = arr_obj.toString();
		 
 			if (charCode > 32 && charCode < 46 ) {
				status = "This field accepts numbers only."
			    return false
		       }
			else if(charCode > 46 && charCode < 65){
			status = "This field accepts numbers only."
			    return false
			}
			else if(charCode > 90 && charCode < 97){
				status = "This field accepts numbers only."
			    return false
			}
			else if(charCode > 122 && charCode < 127){
				status = "This field accepts numbers only."
			    return false
			}else
 		   		status = ""
 	}

	function ValidateDecimalWithPlaces(obj,decimalPlaces)
	{
		var temp = obj.value;
		
		var reg3 = /\./g;
		var reg3Array = reg3.exec(temp);
		if (reg3Array != null) {
			// keep only first occurrence of .
			//  and the number of places specified by decimalPlaces or the entire string if decimalPlaces < 0
			var reg3Right = temp.substring(reg3Array.index + reg3Array[0].length);
			reg3Right = reg3Right.replace(reg3, '');
			reg3Right = decimalPlaces > 0 ? reg3Right.substring(0, decimalPlaces) : reg3Right;
			temp = temp.substring(0,reg3Array.index) + '.' + reg3Right;
		}
		obj.value = temp;
	}
	
	/* ----------------Reseting Filter --------------------------*/
function ResetFilter(form_obj)
 {	 
 
 		 for(z=1; z<form_obj.length;z++){
		 
			  if( form_obj[z].type!='button' && form_obj[z].type!='submit')
			  	{
 					 form_obj[z].value='';
				}
				  			 
			}
			// form_obj[1].value='10';	
  	 
}

 /* ----------------End Reseting Filter --------------------------*/
/* function for validate Special Characters Only*/
	function ValidateSpecialCharacterOnly(evt,value) 
	{
 		evt = (evt) ? evt : window.event
		var charCode = (evt.which) ? evt.which : evt.keyCode
		var arr_obj = new Array();
		for (var i = 1; i <= value.length; i++)
		{	  
		 arr_obj[i]=(value.substring((i - 1), i)).charCodeAt(0);
		}
		 var arr2str = arr_obj.toString();
		 
 			if (charCode > 32 && charCode < 36 ) {
 			    return false
		       }
 			else if (charCode > 37 && charCode < 39 ) {
 			    return false
		       }
 			else if (charCode > 39 && charCode < 46 ) {
 			    return false
		       }
			else if(charCode == 47 ){
 			    return false
			}
			else if(charCode > 57 && charCode < 65){
 			    return false
			}
			else if(charCode > 90 && charCode < 97){
 			    return false
			}
			else if(charCode > 122 && charCode < 127){
 			    return false
			}
 
 	}
 
/*---------- Display text in water mark for textbox-------------*/
 function setWaterMarkTxt(oBox1,default_text){
	oBox = $(oBox1);
	if(oBox.value.length==0){
		oBox.value =default_text
		oBox.style.color = "#808080";
 		oBox.style.fontStyle="italic";		
	}
}

/*---------- Clear text in water mark for textbox-------------*/

function clearWaterMarkTxt(oBox,default_text){
    if(oBox.value==default_text)
	oBox.value='';
	oBox.style.color = "#000";
	oBox.style.fontStyle="normal";	
}

/* function for unset selected index option a select box(room) */
 	function reset_room(model_name)
	{
		temp = model_name+'MstRoomId';
		var select_box=document.getElementById(temp);
		selectOptionReset(select_box);
	}
	
/* Function to set Limit text for text area  */
 function limitTextForTextarea(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
 }
/* Function for Email Validation */
	function emailValidate(form_id,field_id,message_string) {
 //message_string = Official or Personal Email
 	   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	   var address = document.forms[form_id].elements[field_id].value;
	   if(address !=''){
		  if(reg.test(address) == false) {
		 
			  alert('Invalid '+message_string+' Email Address');
			  return false;
		   }
		   else{
				return true;
		   }
	   }
	   else{
		  alert(message_string+' Email Address Should Not Empty');
		  return false;
	   }
	   
 
 }
 
 var roman = new Array();
roman = ["M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I"];
var decimal = new Array();
decimal = [1000,900,500,400,100,90,50,40,10,9,5,4,1];
function decimalToRomanSimple(value) {
alert(value);
return value;
  if (value <= 0 || value >= 4000) return value;
    var romanNumeral = "";
    for (var i=0; i<roman.length; i++) {
      while (value >= decimal[i]) { 
        value -= decimal[i];
        romanNumeral += roman[i];
      }
    }
    return romanNumeral;
} 
/*
*	To Restrict Single Quotes and Double Quotes, written by Parathasarathi, 50422, 02nd Jan 2012
*/
	function validateSingleQuote(evt){
 			evt = (evt) ? evt : window.event
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ( charCode ==39 ) {		 
				return false
			}		 
			return true
			
 
	 
	 }
	 /*
	 * Hide Div by Div id
	 */
	 
	function DivHide(divid)
	{
		if(document.getElementById(divid))
		{
			document.getElementById(divid).style.display ='none';
		}
	}
	
	function ClearDiv(divid)
	{
		document.getElementById(divid).innerHTML = '';
	}
	/* Allow Integers Only */
	function NumbersOnly(e)
	{
		var decimal = false;
		var key;
		var keychar;		
		if (window.event)
		{
			key = window.event.keyCode;
		}
		else if (e)
		{
			key = e.which;
		}
		else
		{
			return true;
		}
		keychar = String.fromCharCode(key);		
		if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) )
		{
		   return true;
		}
		else if ((("0123456789").indexOf(keychar) > -1))
		{
			return true;
		}
		else if (decimal && (keychar == "."))
		{
		  return true;
		}
		else
		{
			return false;
		}
	}
	/* 
	* To Field reset  
 	* param  'formid' id of form element 
	*/
	function FormFieldReset(formid)
	{
 		if(document.getElementById(formid))
		{
 			document.getElementById(formid).reset();
 		}
	}
	/* Email Validation */
	function email_check(str)
	{
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   return false
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   return false
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
			return false
		}
		if (str.indexOf(at,(lat+1))!=-1){
			return false
		}
		if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
			return false
		}
		if (str.indexOf(dot,(lat+2))==-1){
			return false
		}	
		if (str.indexOf(" ")!=-1){
			return false
		}
		return true
	}
	/* Accept Character and Number */
	function ValidateCharAndNumber(textBoxObj)
	{
		textBoxObj.value = filterNum(textBoxObj.value)
		function filterNum(str)
		{
			re = /\s|\~|\`|\@|-|_|\$|\!|\#|%|\^|\&|\*|\(|\)|\+|\=|\{|\}|\[|\]|\'|\"|\;|\:|\,|\.|\\|\||\?|\/|\>|\<|\./g;
			return str.replace(re, "");
		}
	}
	/* Accept Character and Space Only */
	function ValidateCharAndSpace(textBoxObj)
	{
		textBoxObj.value = filterNum(textBoxObj.value)
		function filterNum(str)
		{
			re = /\~|\`|[0-9]|\@|-|_|\$|\!|\#|%|\^|\&|\*|\(|\)|\+|\=|\{|\}|\[|\]|\'|\"|\;|\:|\,|\\|\||\?|\/|\>|\</g;
			return str.replace(re, "");
		}
	}
	/* Accept Email Characters Only */
	function ValidateEmailChar(textBoxObj)
	{
		textBoxObj.value = filterNum(textBoxObj.value)
		function filterNum(str)
		{
			re = /\s|\~|\`|\$|\!|\#|%|\^|\&|\*|\(|\)|\+|\=|\{|\}|\[|\]|\'|\"|\;|\:|\,|\\|\||\?|\/|\>|\</g;
			return str.replace(re, "");
		}
	}
/*
*	Common Reset City, written by Parthasarathi, 50422, 11th May 2012
*/
 	function commonResetSelectBox(field_name)
	{
 		var select_box=document.getElementById(field_name);
 		select_box.options.length = 1; // Reset the Listbox Options
 	}
/*
*	To foocus on specified Element 24th July 2012
*/
	 function focusto(id)
	{
   document.getElementById(id).focus();
	}





 //DETECT BROWSER - FIREFOX IS NOT SUPPORTED
    /*var BROWSER_AGENT = navigator.userAgent.toLowerCase();
    if (BROWSER_AGENT.indexOf("msie") != -1) {
        // *** BROWSER IS SUPPORTED: DO WORK HERE ***
    } else {
        browserNotSupported();
    }*/
    function browserNotSupported() {
        var err = "";
        err+= "<tr>";
        err+= "<td class='ms-informationbar' style='padding: 2px;' valign='middle'>";
        err+= "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
        err+= "    <tr>";
        err+= "        <td class='ms-descriptiontext' style='padding: 2px; width: 18px; vertical-align: top;'>";
     //   err+= "            <img alt="Javascript" src='/_layouts/images/ewr238m.GIF' />";
        err+= "        </td>";
        err+= "        <td class='ms-descriptiontext' style='padding: 2px; vertical-align: top;'>";
							
        err+= " <font color='red'> Warning: </font> You are viewing this page with an unsupported Web browser. This Web site works best with Mozilla Firefox 3.5 or later version." ;
		  				
        err+= "        </td>";
        err+= "    </tr>";
        err+= "</table>";
        err+= "</td>";
        err+= "</tr>";
        document.write(err);
    }
    //END BROWSER CHECK
function checkedCheckBox(class_name,falg)
{
		jQuery(function($){
		$(document).ready(function () {					 
					  	 $('input:checkbox.'+class_name).each(function () {
								$(this).attr('checked',falg); 
								
						  });
				});
			});
	 
}
function disableCheckBox(class_name,falg)
{
		jQuery(function($){
		$(document).ready(function () {												 
					 
					  	 $('input:checkbox.'+class_name).each(function () {
								$(this).attr('disabled',falg); 	
						  });
				});	
			});	    
	
}
	function getRadioValue(name) {
    var group = document.getElementsByName(name);

    for (var i=0;i<group.length;i++) {
        if (group[i].checked) {
            return group[i].value;
        }
   	 }

    return '';
	  }

 jQuery(function($){		
			$(document).ready(function() { 
			 if ( $.browser.msie )
			 {
				  browserNotSupported();			 
			}
			else
			{
				 
				$("input[type='password']").attr("autocomplete","off");
			}
	 } );			
	});

 /* URL Encryption */
function base64_encode(data) {
  // From: http://phpjs.org/functions
  // +   original by: Tyler Akins (http://rumkin.com)
  // +   improved by: Bayron Guevara
  // +   improved by: Thunder.m
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   bugfixed by: Pellentesque Malesuada
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: Rafal Kukawski (http://kukawski.pl)
  // *     example 1: base64_encode('Kevin van Zonneveld');
  // *     returns 1: 'S2V2aW4gdmFuIFpvbm5ldmVsZA=='
  // mozilla has this native
  // - but breaks in 2.0.0.12!
  //if (typeof this.window['btoa'] === 'function') {
  //    return btoa(data);
  //}
  var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
  var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
      ac = 0,
      enc = '',
      tmp_arr = [];

  if (!data) {
    return data;
  }

  do { // pack three octets into four hexets
    o1 = data.charCodeAt(i++);
    o2 = data.charCodeAt(i++);
    o3 = data.charCodeAt(i++);

    bits = o1 << 16 | o2 << 8 | o3;

    h1 = bits >> 18 & 0x3f;
    h2 = bits >> 12 & 0x3f;
    h3 = bits >> 6 & 0x3f;
    h4 = bits & 0x3f;

    // use hexets to index into b64, and append result to encoded string
    tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
  } while (i < data.length);

  enc = tmp_arr.join('');

  var r = data.length % 3;

  return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);

}