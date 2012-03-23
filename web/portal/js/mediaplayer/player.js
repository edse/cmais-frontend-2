var	players = new Object;
var atual = 1;
var total = 0;
var item = null;
var player1 =  null;
listagem = new Array();
playerARR = new Array();
var pos = null;
var AntPos = null;


function listaMusicas(param){
	indice = listagem.length;
	valor = {'id':param['id'], 'musica':param['musica'],'url':param['url']};	
	listagem[indice] = valor;	
	total = indice;
}

function loadMedia(obj){
	thePlayer = document.getElementById('archivePlayer');
	players[thePlayer.id] = document.getElementById(thePlayer['id']);
	var player = players[thePlayer.id]; // shortcut	
	player.id = thePlayer.id;
	player.element = '#'+player.id+'Controls';
	player.diff = null;
	player.perc = null;
	player.position = null;
	player.positionPerc = null;
	player.newstate = null;
	player.oldstate = null;
	player.mute = null;
	player.duration = player.getConfig().duration;
	player.currentVolume = player.getConfig().volume;
	
	player.sendEvent('STOP'); 
	player.sendEvent('LOAD', obj.url);
	player.sendEvent('PLAY');	
	
	
	pos = obj.musica;
	
	atual++;
	
	if(atual > total+1){
		atual = 1;		
	}
	if(AntPos){
		$('.musicas #'+AntPos +"  span").removeClass().addClass('cinza');
		$('#'+AntPos+' a').removeClass();
	}		
		
	
	
	$('.musicas #'+pos +"  span").removeClass().addClass('vermelho');
	$('#'+pos+' a').removeClass().addClass('selected');
	
	 obj = listagem[atual-1];
	
	 
	 
	 AntPos  =  pos;
	
	
	atual++;
	
	if(atual > total+1){
		atual = 1;		
	}
	

	
	 obj = listagem[atual-1];
	
	

	
}

function carregaProx(){
	
	thePlayer = document.getElementById('archivePlayer');
	players[thePlayer.id] = document.getElementById(thePlayer['id']);
	var player = players[thePlayer.id]; // shortcut	
	player.id = thePlayer.id;
	player.element = '#'+player.id+'Controls';
	player.diff = null;
	player.perc = null;
	player.position = null;
	player.positionPerc = null;
	player.newstate = null;
	player.oldstate = null;
	player.mute = null;
	player.duration = player.getConfig().duration;
	player.currentVolume = player.getConfig().volume;
	
	atual++;
	
	if(atual > total+1){
		atual = 1;		
	}
	
	
	
	 obj = listagem[atual-1];	
	
	
	player.sendEvent('STOP'); 
	player.sendEvent('LOAD', obj.url);
	player.sendEvent('PLAY');
	
	pos = obj.musica;
	
	if(AntPos){
		$('.musicas #'+AntPos +"  span").removeClass().addClass('cinza');
		$('#'+AntPos+' a').removeClass();
	}		
		
	
	
	$('.musicas #'+pos +"  span").removeClass().addClass('vermelho');
	$('#'+pos+' a').removeClass().addClass('selected');
	
	AntPos  =  pos;
	
}



function playerReady(thePlayer) {		

	// set players
	players[thePlayer.id] = document.getElementById(thePlayer['id']);
	playerARR[thePlayer.id] = players[thePlayer.id]; // shortcut
	
	//alert(thePlayer.id);
	
	playerARR[thePlayer.id].id = thePlayer.id;
	playerARR[thePlayer.id].element = '#'+thePlayer.id+'Controls';
	playerARR[thePlayer.id].diff = null;
	playerARR[thePlayer.id].perc = null;
	playerARR[thePlayer.id].position = null;
	playerARR[thePlayer.id].positionPerc = null;
	playerARR[thePlayer.id].newstate = null;
	playerARR[thePlayer.id].oldstate = null;
	playerARR[thePlayer.id].mute = null;
	playerARR[thePlayer.id].duration = playerARR[thePlayer.id].getConfig().duration;
	playerARR[thePlayer.id].currentVolume = playerARR[thePlayer.id].getConfig().volume;
	
	// set Listeners
	playerARR[thePlayer.id].addControllerListener('VOLUME', 'volumeListener');
	playerARR[thePlayer.id].addModelListener('TIME', 'timeListener');
	playerARR[thePlayer.id].addModelListener('STATE', 'stateListener');

	// set volume by cookie
	playerARR[thePlayer.id].sendEvent('VOLUME', playerARR[thePlayer.id].getConfig().volume);

	// reset time
	$('#time #elapsed', playerARR[thePlayer.id].element).html(formatTime(0));
	$('#time #total', playerARR[thePlayer.id].element).html(formatTime(playerARR[thePlayer.id].duration));

	// set variables
	playerARR[thePlayer.id].positionPerc = playerARR[thePlayer.id].duration / 100;
	playerARR[thePlayer.id].newstate = playerARR[thePlayer.id].getConfig().state;
	
	$('#'+thePlayer.id+'Controls #play').click(function(){			
		//alert(thePlayer.id);		
		obj = listagem[0];	
		if(thePlayer.id == 'archivePlayer'){			
			players[thePlayer.id].sendEvent('LOAD', obj.url);
			players[thePlayer.id].sendEvent('PLAY');
			}else{
				playerARR[thePlayer.id].sendEvent('PLAY');				
			}
	});
		
	$('#mute', playerARR[thePlayer.id].element).click(function(){
		if (playerARR[thePlayer.id].mute) {
			playerARR[thePlayer.id].sendEvent('VOLUME', playerARR[thePlayer.id].currentVolume);
			$('#volume', playerARR[thePlayer.id].element).slider('option', 'value', playerARR[thePlayer.id].currentVolume);
			$(this).removeClass().addClass('on');
			playerARR[thePlayer.id].mute = false;
		} else {
			playerARR[thePlayer.id].sendEvent('VOLUME', 0);
			$('#volume', playerARR[thePlayer.id].element).slider('option', 'value', 0);
			$(this).removeClass().addClass('off');
			playerARR[thePlayer.id].mute = true;
		}
	});
	
	$('#volume', playerARR[thePlayer.id].element).slider({
		value: playerARR[thePlayer.id].currentVolume,
		range: "min",
		min: 1,
		animate: true,
		slide: function (event, ui) {
			playerARR[thePlayer.id].sendEvent('VOLUME', ui.value);
			if (playerARR[thePlayer.id].mute) {
				$('#mute', playerARR[thePlayer.id].element).removeClass().addClass('on');
				playerARR[thePlayer.id].mute = false;
			}
		}
	});
	
};
	
function volumeListener(obj) {
	players[obj.id].currentVolume = obj.percentage;
	$('#volume', players[obj.id].element).slider('option', 'value', players[obj.id].currentVolume);
}; 

function timeListener(obj) {
	players[obj.id].position = obj.position;
	$('#time #elapsed', players[obj.id].element).html(formatTime(Math.floor(obj.position)));
	$('#time #total', players[obj.id].element).html(formatTime(Math.floor(obj.duration)));
};

function stateListener(obj) {
	players[obj.id].newstate = obj.newstate;
	players[obj.id].oldstate = obj.oldstate;	
	if (players[obj.id].newstate == 'PLAYING'){
		$('#play', players[obj.id].element).removeClass().addClass('pause');
	}		
	else{
		$('#play', players[obj.id].element).removeClass().addClass('play');		
	}
		
	if (players[obj.id].newstate == 'COMPLETED') {		
		if(document.getElementById('checkPlayAll').checked == true){
			carregaProx();
		}
		//alert(obj.id+' terminou de tocar');
	}
};

function formatTime(time){
	var	hour = Math.floor(time/3660),
		minute = (Math.floor((time/60)%60) < 10 && hour > 0) ? "0"+Math.floor((time/60)%60):Math.floor((time/60)%60),
		second = (Math.floor(time%60) < 10) ? "0"+Math.floor(time%60):Math.floor(time%60);
	return ((hour > 0) ? hour+':':'')+minute+':'+second;
}
