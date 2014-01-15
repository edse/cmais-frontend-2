var navButtons = ["games","videos","playlists","muppets","mystreet"];

function getNavButton(str){
	var btn;
	btn = document.getElementById("nav-"+str);		
	return btn;	
}

function navHighlight(str){		
	var btn = getNavButton(str);
	try{
		if(str!="muppets"){
			btn.id=btn.id+"-highlight";	
			//alert(btn.id);
		}else{
			btn.className="highlight-"+selectedMuppet;
		}
	}catch(e){
		// button didn't exist	
		//alert(e);
	}
}

function navReset(){
	var str;
	var btn;
	for(var i=0;i<navButtons.length;i++){
		try{
			str = navButtons[i];
			btn = getNavButton(str+"-highlight");
			if(!btn){
				btn = getNavButton(str);
			}
			
			// remove ID alteration
			btn.id=btn.id.split("-highlight").join("");	
			
			if(str!="muppets"){
				// do nothing
			}else{			
				btn.className=selectedMuppet;
			}
		}catch(e){
			// couldn't find the button	
			//alert(e);
		}
	}
}