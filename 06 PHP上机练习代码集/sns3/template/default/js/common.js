/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: script_common.js 7381 2008-05-16 05:41:58Z lifangming $
*/

var userAgent = navigator.userAgent.toLowerCase();
var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);

function $(id) {
	return document.getElementById(id);
}

//导航二级菜单
function openSub(obj,target) {
	closeSub();
	var tMenu = obj.previousSibling;
	var tLeft = tMenu.offsetLeft;
	var tTop = tMenu.offsetTop + 20;
	while(tMenu=tMenu.offsetParent) {
		tLeft+=tMenu.offsetLeft;
		tTop+=tMenu.offsetTop;
	}
	var tSub = $('sub' + target);
	tSub.style.left = tLeft + 'px';
	tSub.style.top = tTop + 'px';
	tSub.style.display = 'block';
	obj.blur();
	
	var clickId = 0;
	document.body.onclick = function() {
		clickId = clickId + 1;
		if( clickId > 1 ) {
			closeSub();
		}
	}
}

function closeSub() {
	var subMenu = $('submenu').getElementsByTagName('div');
	for (i=0;i<subMenu.length;i++) {
		subMenu[i].style.display = 'none';
	}
}