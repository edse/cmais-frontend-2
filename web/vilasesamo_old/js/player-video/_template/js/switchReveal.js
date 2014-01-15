function initSwitch(id){
	var ul = document.getElementById(id);
	if(!ul) return;
	for(var i=0;i<ul.childNodes.length;i++){
		var node = ul.childNodes[i];
		if(node.nodeName.toLowerCase()=="li"){
			var a = node.getElementsByTagName('a')[0];
			a.onclick = function(){toggleListItem(this)}
		}
	}
}

function toggleListItem(node){
	var newclass = node.parentNode.className=="selected" ? "" : "selected";
	node.parentNode.className=newclass;
}