/*
	Lightbox JS: Fullsize Image Overlays 
	by Lokesh Dhakar - http://www.huddletogether.com

	For more information on this script, visit:
	http://huddletogether.com/projects/lightbox/

	Licensed under the Creative Commons Attribution 2.5 License - http://creativecommons.org/licenses/by/2.5/
	(basically, do anything you want, just leave my name and link)
	
	Table of Contents
	-----------------
	Configuration
	
	Functions
	- mine_getPageScroll()
	- mine_getPageSize()
	- mine_pause()
	- mine_getKey()
	- mine_listenKey()
	- mine_showLightbox()
	- mine_hideLightbox()
	- mine_initLightbox()
	- mine_addLoadEvent()
	
	Function Calls
	- mine_addLoadEvent(mine_initLightbox)

*/



//
// Configuration
//

// If you would like to use a custom loading image or close button reference them in the next two lines.
var loadingImage2 = '../lightbox/loading_32.gif';	 	
var closeButton2 = '../lightbox/close.gif';	 	





//
// mine_getPageScroll()
// Returns array with x,y page scroll values.
// Core code from - quirksmode.org
//
function mine_getPageScroll(){

	var yScroll;

	if (self.pageYOffset) {
		yScroll = self.pageYOffset;
	} else if (document.documentElement && document.documentElement.scrollTop){	 // Explorer 6 Strict
		yScroll = document.documentElement.scrollTop;
	} else if (document.body) {// all other Explorers
		yScroll = document.body.scrollTop;
	}

	arrayPageScroll = new Array('',yScroll) 
	return arrayPageScroll;
}



//
// mine_getPageSize()
// Returns array with page width, height and window width, height
// Core code from - quirksmode.org
// Edit for Firefox by pHaez
//
function mine_getPageSize(){
	
	var xScroll, yScroll;
	
	if (window.innerHeight && window.scrollMaxY) {	
		xScroll = document.body.scrollWidth;
		yScroll = window.innerHeight + window.scrollMaxY;
	} else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
		xScroll = document.body.scrollWidth;
		yScroll = document.body.scrollHeight;
	} else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
		xScroll = document.body.offsetWidth;
		yScroll = document.body.offsetHeight;
	}
	
	var windowWidth, windowHeight;
	if (self.innerHeight) {	// all except Explorer
		windowWidth = self.innerWidth;
		windowHeight = self.innerHeight;
	} else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
		windowWidth = document.documentElement.clientWidth;
		windowHeight = document.documentElement.clientHeight;
	} else if (document.body) { // other Explorers
		windowWidth = document.body.clientWidth;
		windowHeight = document.body.clientHeight;
	}	
	
	// for small pages with total height less then height of the viewport
	if(yScroll < windowHeight){
		pageHeight = windowHeight;
	} else { 
		pageHeight = yScroll;
	}

	// for small pages with total width less then width of the viewport
	if(xScroll < windowWidth){	
		pageWidth = windowWidth;
	} else {
		pageWidth = xScroll;
	}


	arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight) 
	return arrayPageSize;
}


//
// mine_pause(numberMillis)
// Pauses code execution for specified time. Uses busy code, not good.
// Code from http://www.faqts.com/knowledge_base/view.phtml/aid/1602
//
function mine_pause(numberMillis) {
	var now = new Date();
	var exitTime = now.getTime() + numberMillis;
	while (true) {
		now = new Date();
		if (now.getTime() > exitTime)
			return;
	}
}

//
// mine_getKey(key)
// Gets keycode. If 'x' is pressed then it hides the lightbox.
//

function mine_getKey(e){
	if (e == null) { // ie
		keycode = event.keyCode;
	} else { // mozilla
		keycode = e.which;
	}
	key = String.fromCharCode(keycode).toLowerCase();
	
	if(key == 'x'){ mine_hideLightbox(); }
}


//
// mine_listenKey()
//
function mine_listenKey () {	document.onkeypress = mine_getKey; }
	

//
// mine_showLightbox()
// Preloads images. Pleaces new image in lightbox then centers and displays.
//
function mine_showLightbox(objLink)
{
	// prep objects
	var objOverlay = document.getElementById('mine_overlay');
	var objLightbox = document.getElementById('lightbox');
	var objCaption = document.getElementById('lightboxCaption');
	var objImage = document.getElementById('lightboxImage');
	var objLoadingImage = document.getElementById('loadingImage2');
	var objLightboxDetails = document.getElementById('lightboxDetails');

	 
	var arrayPageSize = mine_getPageSize();
	var arrayPageScroll = mine_getPageScroll();

	// center loadingImage2 if it exists
	if (objLoadingImage) {
		objLoadingImage.style.top = (arrayPageScroll[1] + ((arrayPageSize[3] - 35 - objLoadingImage.height) / 2) + 'px');
		objLoadingImage.style.left = (((arrayPageSize[0] - 20 - objLoadingImage.width) / 2) + 'px');
		objLoadingImage.style.display = 'block';
	}

	// set height of Overlay to take up whole page and show
	objOverlay.style.height = (arrayPageSize[1] + 'px');
	objOverlay.style.display = 'block';
    div_height=50;
	div_width=100
 	var lightboxTop = arrayPageScroll[1] + ((arrayPageSize[3] - 35 - div_height) / 2);
		var lightboxLeft = ((arrayPageSize[0] - 20 - div_width) / 2);
		
		objLightbox.style.top = (lightboxTop < 0) ? "0px" : lightboxTop + "px";
		objLightbox.style.left = (lightboxLeft < 0) ? "0px" : lightboxLeft + "px";


		objLightboxDetails.style.width = div_width + 'px';		
		 
			objCaption.style.display = 'block';
			//objCaption.style.width = imgPreload.width + 'px';
			objCaption.innerHTML = 'fasdfasdfasdfhasdfasdsdfasdfasdfsafasdfdasfasdfasd sdafsdafasdfsd\fsdfasdfsdafasdf sdfasdf';
		 
		
		// A small mine_pause between the image loading and displaying is required with IE,
		// this prevents the previous image displaying for a short burst causing flicker.
		if (navigator.appVersion.indexOf("MSIE")!=-1){
			mine_pause(250);
		} 

		if (objLoadingImage) {	objLoadingImage.style.display = 'none'; }

		// Hide select boxes as they will 'peek' through the image in IE
		selects = document.getElementsByTagName("select");
		 
        for (i = 0; i != selects.length; i++) {
                selects[i].style.visibility = "hidden";
        }
		 
	
		objLightbox.style.display = 'block';

		// After image is loaded, update the mine_overlay height as the new image might have
		// increased the overall page height.
		arrayPageSize = mine_getPageSize();
		objOverlay.style.height = (arrayPageSize[1] + 'px');
		
		// Check for 'x' keypress
		mine_listenKey();


	// preload image
	imgPreload = new Image();

	imgPreload.onload=function(){
		
		objImage.src = objLink.href;

		// center lightbox and make sure that the top and left values are not negative
		// and the image placed outside the viewport
		var lightboxTop = arrayPageScroll[1] + ((arrayPageSize[3] - 35 - imgPreload.height) / 2);
		var lightboxLeft = ((arrayPageSize[0] - 20 - imgPreload.width) / 2);
		
		objLightbox.style.top = (lightboxTop < 0) ? "0px" : lightboxTop + "px";
		objLightbox.style.left = (lightboxLeft < 0) ? "0px" : lightboxLeft + "px";


		objLightboxDetails.style.width = imgPreload.width + 'px';
		
		if(objLink.getAttribute('title')){
			objCaption.style.display = 'block';
			//objCaption.style.width = imgPreload.width + 'px';
			objCaption.innerHTML = objLink.getAttribute('title');
		} else {
			objCaption.style.display = 'none';
		}
		
		// A small mine_pause between the image loading and displaying is required with IE,
		// this prevents the previous image displaying for a short burst causing flicker.
		if (navigator.appVersion.indexOf("MSIE")!=-1){
			mine_pause(250);
		} 

		if (objLoadingImage) {	objLoadingImage.style.display = 'none'; }

		// Hide select boxes as they will 'peek' through the image in IE
		selects = document.getElementsByTagName("select");
        for (i = 0; i != selects.length; i++) {
                selects[i].style.visibility = "hidden";
        }

	
		objLightbox.style.display = 'block';

		// After image is loaded, update the mine_overlay height as the new image might have
		// increased the overall page height.
		arrayPageSize = mine_getPageSize();
		objOverlay.style.height = (arrayPageSize[1] + 'px');
		
		// Check for 'x' keypress
		mine_listenKey();

		return false;
	}
	 
	//imgPreload.src = objLink.href;
	
}


//
// mine_showLightbox()
// Preloads images. Pleaces new image in lightbox then centers and displays.
//
function mine2_showLightbox(condent_div)
{
	// prep objects
	var objOverlay = document.getElementById('mine_overlay');
	var objLightbox = document.getElementById('lightbox');
	var objCaption = document.getElementById('lightboxCaption');
	var objImage = document.getElementById('lightboxImage');
	var objLoadingImage = document.getElementById('loadingImage2');
	var objLightboxDetails = document.getElementById('lightboxDetails');
  	
	var objLink=document.getElementById('close_link'); 
	var objCondent=document.getElementById(condent_div);
	
	var arrayPageSize = mine_getPageSize();
	var arrayPageScroll = mine_getPageScroll();
 
	// center loadingImage2 if it exists
	if (objLoadingImage) {
		objLoadingImage.style.top = (arrayPageScroll[1] + ((arrayPageSize[3] - 35 - objLoadingImage.height) / 2) + 'px');
		objLoadingImage.style.left = (((arrayPageSize[0] - 20 - objLoadingImage.width) / 2) + 'px');
		objLoadingImage.style.display = 'block';
	}

	// set height of Overlay to take up whole page and show
	objOverlay.style.height = (arrayPageSize[1] + 'px');	 
		if(objOverlay.style.display=='none')
	objOverlay.style.display = 'block';
	
    div_height=objCondent.style.height;
	div_width=objCondent.style.width;
	div_height=div_height.substring(0,div_height.length-2);
	div_width=div_width.substring(0,div_width.length-2);
 
	
 	var lightboxTop = arrayPageScroll[1] + ((arrayPageSize[3] - 35 - div_height) / 2);
		var lightboxLeft = ((arrayPageSize[0] - 20 - div_width) / 2);
		
		objLightbox.style.top = (lightboxTop < 0) ? "0px" : lightboxTop + "px";
		objLightbox.style.left = (lightboxLeft < 0) ? "0px" : lightboxLeft + "px";
 
		objLightboxDetails.style.width = div_width + 'px';		
		objLightboxDetails.innerHTML =objCondent.innerHTML;
			objCaption.style.display = 'block';
			objCaption.style.width = (div_width-10) + 'px';
			//objCaption.innerHTML = "Test";
			 
		 
		
		// A small mine_pause between the image loading and displaying is required with IE,
		// this prevents the previous image displaying for a short burst causing flicker.
		if (navigator.appVersion.indexOf("MSIE")!=-1){
			mine_pause(250);
		} 

		if (objLoadingImage) {	
		 
		objLoadingImage.style.display = 'none'; }

		// Hide select boxes as they will 'peek' through the image in IE
		selects = document.getElementsByTagName("select");
        for (i = 0; i != selects.length; i++) {
                selects[i].style.visibility = "hidden";
        }
		objLightbox_Select=objLightbox.getElementsByTagName("select");
       
		for (i = 0; i != objLightbox_Select.length; i++) {
                objLightbox_Select[i].style.visibility = "visible";
        }
	
	
		objLightbox.style.display = 'block';

		// After image is loaded, update the mine_overlay height as the new image might have
		// increased the overall page height.
		 
		 
		
		// Check for 'x' keypress
		mine_listenKey();
 
	
}



//
// mine_hideLightbox()
//
function mine_hideLightbox()
{
	// get objects
	objOverlay = document.getElementById('mine_overlay');
	objLightbox = document.getElementById('lightbox');

	// hide lightbox and mine_overlay
	objOverlay.style.display = 'none';
	objLightbox.style.display = 'none';

	// make select boxes visible
	selects = document.getElementsByTagName("select");
    for (i = 0; i != selects.length; i++) {
		selects[i].style.visibility = "visible";
	}

	// disable keypress listener
	document.onkeypress = '';
}




//
// mine_initLightbox()
// Function runs on window load, going through link tags looking for rel="lightbox".
// These links receive onclick events that enable the lightbox display for their targets.
// The function also inserts html markup at the top of the page which will be used as a
// container for the mine_overlay pattern and the inline image.
//
function mine_initLightbox()
{
	
	if (!document.getElementsByTagName){ return; }
	var anchors = document.getElementsByTagName("a");

	// loop through all anchor tags
	for (var i=0; i<anchors.length; i++){
		var anchor = anchors[i];

		if (anchor.getAttribute("href") && (anchor.getAttribute("rel") == "lightbox")){
			anchor.onclick = function () {mine_showLightbox(this); return false;}
		}
	}

	// the rest of this code inserts html at the top of the page that looks like this:
	//
	// <div id="mine_overlay">
	//		<a href="#" onclick="mine_hideLightbox(); return false;"><img id="loadingImage2" /></a>
	//	</div>
	// <div id="lightbox">
	//		<a href="#" onclick="mine_hideLightbox(); return false;" title="Click anywhere to close image">
	//			<img id="closeButton2" />		
	//			<img id="lightboxImage" />
	//		</a>
	//		<div id="lightboxDetails">
	//			<div id="lightboxCaption"></div>
	//			<div id="keyboardMsg"></div>
	//		</div>
	// </div>
	
	var objBody = document.getElementsByTagName("body").item(0);
	
	// create mine_overlay div and hardcode some functional styles (aesthetic styles are in CSS file)
	var objOverlay = document.createElement("div");
	objOverlay.setAttribute('id','mine_overlay');
	//objOverlay.onclick = function () {mine_hideLightbox(); return false;}
	objOverlay.style.display = 'none';
	objOverlay.style.position = 'absolute';
	objOverlay.style.top = '0';
	objOverlay.style.left = '0';
	objOverlay.style.zIndex = '90';
 	objOverlay.style.width = '100%';
	objBody.insertBefore(objOverlay, objBody.firstChild);
	
	var arrayPageSize = mine_getPageSize();
	var arrayPageScroll = mine_getPageScroll();

	// preload and create loader image
	var imgPreloader = new Image();
	
	// if loader image found, create link to hide lightbox and create loadingimage
	imgPreloader.onload=function(){
		 
		var objLoadingImageLink = document.createElement("a");
		objLoadingImageLink.setAttribute('href','#');
		objLoadingImageLink.onclick = function () {mine_hideLightbox(); return false;}
		objOverlay.appendChild(objLoadingImageLink);
		
		var objLoadingImage = document.createElement("img");
		objLoadingImage.src = loadingImage2;
		objLoadingImage.setAttribute('id','loadingImage2');
		objLoadingImage.style.position = 'absolute';
		objLoadingImage.style.zIndex = '150';
		objLoadingImageLink.appendChild(objLoadingImage);

		imgPreloader.onload=function(){};	//	clear onLoad, as IE will flip out w/animated gifs

		return false;
	}
	
	imgPreloader.src = loadingImage2;

	// create lightbox div, same note about styles as above
	var objLightbox = document.createElement("div");
	objLightbox.setAttribute('id','lightbox');
	objLightbox.style.display = 'none';
	objLightbox.style.position = 'absolute';
	objLightbox.style.zIndex = '100';	
	objBody.insertBefore(objLightbox, objOverlay.nextSibling);
 
	// create link
	var objLink = document.createElement("a");
	objLink.setAttribute('id','close_link');
	objLink.setAttribute('href','#');
	objLink.setAttribute('title','Click to close');
	objLink.onclick = function () {mine_hideLightbox(); return false;}
	//objLightbox.appendChild(objLink);

	// preload and create close button image
	var imgPreloadCloseButton = new Image();

	// if close button image found, 
	imgPreloadCloseButton.onload=function(){

		var objCloseButton = document.createElement("img");
		objCloseButton.src = closeButton2;
		objCloseButton.setAttribute('id','closeButton2');
		objCloseButton.style.position = 'absolute';		 
		objCloseButton.style.zIndex = '200';
		objCloseButton.setAttribute('title','Click to close');
		objCloseButton.onclick = function () {mine_hideLightbox(); return false;}
		objLightbox.appendChild(objCloseButton);

		return false;
	}

	imgPreloadCloseButton.src = closeButton2;

	// create image
	var objImage = document.createElement("img");
	objImage.setAttribute('id','lightboxImage');
	objLink.appendChild(objImage);
	

       
	// create caption
	var objCaption = document.createElement("div");
	objCaption.setAttribute('id','lightboxCaption');
	objCaption.style.display = 'none';
	objCaption.className='lightboxCaption';
	objLightbox.appendChild(objCaption);
	
	// create details div, a container for the caption and keyboard message
	var objLightboxDetails = document.createElement("div");
	objLightboxDetails.setAttribute('id','lightboxDetails');
	objLightboxDetails.className='lightboxDetails';
	objLightbox.appendChild(objLightboxDetails);
	
	// create keyboard message
	var objKeyboardMsg = document.createElement("div");
	objKeyboardMsg.setAttribute('id','keyboardMsg');
	objKeyboardMsg.innerHTML = 'press <a href="#" onclick="mine_hideLightbox(); return false;"><kbd>x</kbd></a> to close';
	objLightboxDetails.appendChild(objKeyboardMsg);


}
 
//
// mine_addLoadEvent()
// Adds event to window.onload without overwriting currently assigned onload functions.
// Function found at Simon Willison's weblog - http://simon.incutio.com/
//
function mine_addLoadEvent(func)
{	
	var oldonload = window.onload;
	if (typeof window.onload != 'function'){
    	window.onload = func;
	} else {
		window.onload = function(){
		oldonload();
		func();
		}
	}

}

 
mine_addLoadEvent(mine_initLightbox);	// run mine_initLightbox onLoad