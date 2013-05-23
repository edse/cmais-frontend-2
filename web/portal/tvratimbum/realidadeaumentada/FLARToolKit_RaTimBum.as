/**
 * FLARToolKit example launcher
 * --------------------------------------------------------------------------------
 * Copyright (C)2010 saqoosha
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * For further information please contact.
 *	http://www.libspark.org/wiki/saqoosha/FLARToolKit
 *	<saq(at)saqoosha.net>
 * 
 * Contributors
 *  saqoosha
 *  rokubou
 */
 package examples {

	import flash.events.Event;
	import org.papervision3d.objects.parsers.DAE;
			import flash.display.BitmapData;
		import flash.display.Sprite;
		import flash.events.Event;
		import flash.net.FileReference;
		import flash.utils.ByteArray;
		import com.adobe.images.PNGEncoder

	
		import flash.display.MovieClip;
		import flash.display.Bitmap;	
		import flash.events.MouseEvent;
		import flash.events.Event;
		import flash.events.KeyboardEvent;
		import flash.media.Sound;
		import org.papervision3d.view.BasicView;
		import org.papervision3d.render.QuadrantRenderEngine;		
		
		import org.papervision3d.objects.DisplayObject3D;	
		import org.papervision3d.objects.parsers.DAE;
		
		import org.papervision3d.events.FileLoadEvent;
		import org.papervision3d.core.animation.clip.AnimationClip3D;		
	
		import org.papervision3d.objects.primitives.Cube;
		import org.papervision3d.materials.utils.MaterialsList;
		import org.papervision3d.materials.ColorMaterial;

		import flash.media.SoundMixer; 

	[SWF(width=640, height=480, backgroundColor=0x808080, frameRate=30)]
	
	public class FLARToolKit_RaTimBum extends PV3DARApp {
		
				private var _modeloPersonagens:DisplayObject3D;
				private var _modeloBolhas:DisplayObject3D;

				private var _modeloTracio:DisplayObject3D;
				private var _modeloJean:DisplayObject3D;
				private var _modeloRaiox:DisplayObject3D;
				private var _modeloZezinho:DisplayObject3D;
				private var _modeloMaquina:DisplayObject3D;
				private var _modeloSimao:DisplayObject3D;
				private var _modeloSidney:DisplayObject3D;
				private var _modeloJuca:DisplayObject3D;
				private var _modeloDj:DisplayObject3D;
				private var _modeloGeninho:DisplayObject3D;
				private var _modeloTila:DisplayObject3D;
				private var _modeloNilo:DisplayObject3D;

				private var cuboParent:Cube;
				private var cuboParentX:Cube;
				private var animacaoIdle:AnimationClip3D = new AnimationClip3D("IDLE",0,3.3);
				private var animacaoIdleBolhas:AnimationClip3D = new AnimationClip3D("IDLEBOLHAS",0,3.3);

				private var _giramodelo:Boolean = false;

				private var playerChoice:String = "TRACIO";
				
				private var SOMBOLHA:somBolha = new somBolha();
				
				private var SOMJEAN1:somJean1 = new somJean1();
				private var SOMJEAN2:somJean2 = new somJean2();
				
				private var SOMJUCA:somJuca = new somJuca();
				
				private var SOMMAQUINA:somMaquina = new somMaquina();
				private var SOMNILO1:somNilo1 = new somNilo1();
				private var SOMNILO2:somNilo2 = new somNilo2();
				private var SOMSIDNEY1:somSidney1 = new somSidney1();
				private var SOMSIDNEY2:somSidney2 = new somSidney2();
				private var SOMSIMAO:somSimao = new somSimao();
				private var SOMTILA1:somTila1 = new somTila1();
				private var SOMTILA2:somTila2 = new somTila2();
				private var SOMTRACIO1:somTracio1 = new somTracio1();
				private var SOMTRACIO2:somTracio2 = new somTracio2();
				private var SOMZEZINHO1:somZezinho1 = new somZezinho1();
				private var SOMZEZINHO2:somZezinho2 = new somZezinho2();
				private var SOMZEZINHO3:somZezinho3 = new somZezinho3();
				private var SOMDJ1:somDj1 = new somDj1();
				private var SOMDJ2:somDj2 = new somDj2();
				private var SOMRAIOX1:somRaiox1 = new somRaiox1();
				private var SOMRAIOX2:somRaiox2 = new somRaiox2();
				private var SOMRAIOX3:somRaiox3 = new somRaiox3();
				private var SOMGENINHO1:somGeninho1 = new somGeninho1();
				private var SOMGENINHO2:somGeninho2 = new somGeninho2();
				private var SOMGENINHO3:somGeninho3 = new somGeninho3();
				
				private var UP:botaoUp = new botaoUp();
				private var DOWN:botaoDown = new botaoDown();
				private var LEFT:botaoLeft = new botaoLeft();
				private var RIGHT:botaoRight = new botaoRight();
				private var RESET:botaoReset = new botaoReset();
				
				private var MAIS:botaoMais = new botaoMais();
				private var MENOS:botaoMenos = new botaoMenos();
				private var GIRO:botaoGiro = new botaoGiro();
				
				private var SIMAO:botaoSimao = new botaoSimao();
				private var SIDNEY:botaoSidney = new botaoSidney();
				private var RAIOX:botaoRaiox = new botaoRaiox();
				private var ZEZINHO:botaoZezinho = new botaoZezinho();
				private var MAQUINA:botaoMaquina = new botaoMaquina();
				private var JUCA:botaoJuca = new botaoJuca();
				private var TILA:botaoTila = new botaoTila();
				private var NILO:botaoNilo = new botaoNilo();
				private var TRACIO:botaoTracio = new botaoTracio();
				private var JEAN:botaoJean = new botaoJean();
				private var DJ:botaoDj = new botaoDj();
				private var GENINHO:botaoGeninho = new botaoGeninho();
				
				private var TWITTER:botaoTwitter = new botaoTwitter();
				private var FACE:botaoFace = new botaoFace();
				private var SAVE:botaoSave = new botaoSave();
				
				private var LOGO:botaoLogo = new botaoLogo();
				private var SOUND:botaoSound = new botaoSound();
				 
				 
				private var contaSomTracio:Number=0;
				private var contaSomNilo:Number=0;
				private var contaSomSimao:Number=0;
				private var contaSomDj:Number=0;
				private var contaSomSidney:Number=0;
				private var contaSomRaiox:Number=0;
				private var contaSomJean:Number=0;
				private var contaSomZezinho:Number=0;
				private var contaSomJuca:Number=0;
				private var contaSomTila:Number=0;
				private var contaSomMaquina:Number=0;
				private var contaSomGeninho:Number=0;

				private var _fileRef:FileReference;
				private var _bitmapData:BitmapData;
				private var _byteArray:ByteArray;
				
		
		public function FLARToolKit_RaTimBum(){
			addEventListener(Event.INIT, _onInit);
			init('camera_para.dat', 'ratimbum.pat');
		}
		
		private function _onInit(e:Event):void {
									if (stage) initSaveImg();
			else addEventListener(Event.ADDED_TO_STAGE, initSaveImg);

							stage.frameRate = 40;

							//renderer = new QuadrantRenderEngine(QuadrantRenderEngine.ALL_FILTERS);
							//startRendering();
							
							_modeloPersonagens = new DAE();
							_modeloBolhas = new DAE();

 							DAE(_modeloPersonagens).load("3D/Personagens.DAE");
 							DAE(_modeloBolhas).load("3D/Bolhas.DAE");

							_modeloPersonagens.addEventListener(FileLoadEvent.LOAD_COMPLETE, modeloCarregado);
 							
							stage.addChild(UP);
							stage.addChild(DOWN);
							stage.addChild(LEFT);
							stage.addChild(RIGHT);
							stage.addChild(RESET);
							
							stage.addChild(MAIS);
							stage.addChild(MENOS);
							stage.addChild(GIRO);
							
							stage.addChild(SIMAO);
							stage.addChild(SIDNEY);
							stage.addChild(RAIOX);
							stage.addChild(ZEZINHO);
							stage.addChild(MAQUINA);
							stage.addChild(JUCA);
							stage.addChild(TILA);
							stage.addChild(NILO);
							stage.addChild(TRACIO);
							stage.addChild(JEAN);
							stage.addChild(DJ);
							stage.addChild(GENINHO);
							
							//stage.addChild(TWITTER);
							//stage.addChild(FACE);
							stage.addChild(SAVE);
							
							stage.addChild(SOUND);
							stage.addChild(LOGO);
							
							UP.buttonMode=true;
							DOWN.buttonMode=true;
							LEFT.buttonMode=true;
							RIGHT.buttonMode=true;
							RESET.buttonMode=true;
							
							MAIS.buttonMode=true;
							MENOS.buttonMode=true;
							GIRO.buttonMode=true;
							
							SIMAO.buttonMode=true;
							SIDNEY.buttonMode=true;
							RAIOX.buttonMode=true;
							ZEZINHO.buttonMode=true;
							MAQUINA.buttonMode=true;
							JUCA.buttonMode=true;
							TILA.buttonMode=true;
							NILO.buttonMode=true;
							TRACIO.buttonMode=true;
							JEAN.buttonMode=true;
							DJ.buttonMode=true;
							GENINHO.buttonMode=true;
							
							TWITTER.buttonMode=true;
							FACE.buttonMode=true;
							SAVE.buttonMode=true;
							SOUND.buttonMode=true;
							
							UP.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							DOWN.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							LEFT.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							RIGHT.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							RESET.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							MAIS.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							MENOS.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							GIRO.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							
							SOUND.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoSound);
							
							TWITTER.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							FACE.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotao);
							SAVE.addEventListener(MouseEvent.MOUSE_DOWN, clickSaveImg);
							
							TRACIO.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							GENINHO.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							MAQUINA.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							TILA.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							JUCA.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							ZEZINHO.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							JEAN.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							RAIOX.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							SIDNEY.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							NILO.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							DJ.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							SIMAO.addEventListener(MouseEvent.MOUSE_DOWN, clicaBotaoPlayer);
							
							SIMAO.x=108
							SIMAO.y=363
							JUCA.x=399
							JUCA.y=363
							ZEZINHO.x=364
							ZEZINHO.y=409
							JEAN.x=312
							JEAN.y=363
							RAIOX.x=262
							RAIOX.y=409
							SIDNEY.x=211
							SIDNEY.y=363
							DJ.x=161
							DJ.y=409
							NILO.x=58
							NILO.y=409
							TRACIO.x=6
							TRACIO.y=363
							UP.x=45
							UP.y=9
							DOWN.x=45
							DOWN.y=82
							LEFT.x=9
							LEFT.y=45
							RIGHT.x=82
							RIGHT.y=45
							RESET.x=41
							RESET.y=40
							MAIS.x=12
							MAIS.y=160
							MENOS.x=12
							MENOS.y=267
							GIRO.x=12
							GIRO.y=205
							LOGO.x=486
							LOGO.y=11
							SOUND.x=567
							SOUND.y=160
							TWITTER.x=595
							TWITTER.y=256
							FACE.x=581
							FACE.y=294
							SAVE.x=595
							SAVE.y=232
							GENINHO.x=567
							GENINHO.y=409
							MAQUINA.x=515
							MAQUINA.y=363
							TILA.x=465
							TILA.y=409
							
							TRACIO.name = "TRACIO";
							JEAN.name = "JEAN";
							NILO.name = "NILO";
							TILA.name = "TILA";
							SIDNEY.name = "SIDNEY";
							JUCA.name = "JUCA";
							MAQUINA.name = "MAQUINA";
							ZEZINHO.name = "ZEZINHO";
							RAIOX.name = "RAIOX";
							SIMAO.name = "SIMAO";
							GENINHO.name = "GENINHO";
							DJ.name = "DJ";
							
							UP.name = "UP";
							DOWN.name = "DOWN";
							LEFT.name = "LEFT";
							RIGHT.name = "RIGHT";
							RESET.name = "RESET";
							MAIS.name = "MAIS";
							MENOS.name = "MENOS";
							GIRO.name = "GIRO";
		}
		
 		private function initSaveImg(e:Event = null):void{
			removeEventListener(Event.ADDED_TO_STAGE, initSaveImg);
			
			_bitmapData = new BitmapData(stage.stageWidth, stage.stageHeight, false); // MC WIDTH AND HEIGHT
			_byteArray = new ByteArray();
			
			_fileRef = new FileReference();
			_fileRef.addEventListener(Event.CANCEL, onCancel);
			_fileRef.addEventListener(Event.COMPLETE, onComplete);
			//stage.addEventListener(MouseEvent.CLICK, clickSaveImg);
		}
		
		private function clickSaveImg(e:MouseEvent):void {
			SAVE.removeEventListener(MouseEvent.CLICK, clickSaveImg);
			
			_bitmapData.draw(stage); // MC
			_byteArray = PNGEncoder.encode(_bitmapData);
			
			_fileRef.save(_byteArray, String("RaTimBum" + new Date().getTime() + ".jpg"));
		}
		
		private function onComplete(e:Event):void {
			SAVE.addEventListener(MouseEvent.CLICK, clickSaveImg);
		}
		
		private function onCancel(e:Event):void {
			SAVE.addEventListener(MouseEvent.CLICK, clickSaveImg);
		}

				private function modeloCarregado(e:FileLoadEvent):void
					{
							DAE(_modeloPersonagens).animation.addClip(animacaoIdle);
							DAE(_modeloBolhas).animation.addClip(animacaoIdleBolhas);
							DAE(_modeloPersonagens).play("IDLE");				
							DAE(_modeloBolhas).play("IDLEBOLHAS", false);				

							_modeloTracio  = _modeloPersonagens.getChildByName( "MESH_TRACIO", true );
							_modeloJean  = _modeloPersonagens.getChildByName( "MESH_JEAN", true );
							_modeloRaiox  = _modeloPersonagens.getChildByName( "MESH_RAIOX", true );
							_modeloZezinho  = _modeloPersonagens.getChildByName( "MESH_ZEZINHO", true );
							_modeloMaquina  = _modeloPersonagens.getChildByName( "MESH_MAQUINA", true );
							_modeloSimao  = _modeloPersonagens.getChildByName( "MESH_SIMAO", true );
							_modeloSidney  = _modeloPersonagens.getChildByName( "MESH_SIDNEY", true );
							_modeloJuca  = _modeloPersonagens.getChildByName( "MESH_JUCA", true );
							_modeloDj  = _modeloPersonagens.getChildByName( "MESH_DJ", true );
							_modeloGeninho  = _modeloPersonagens.getChildByName( "MESH_GENINHO", true );
							_modeloTila  = _modeloPersonagens.getChildByName( "MESH_TILA", true );
							_modeloNilo  = _modeloPersonagens.getChildByName( "MESH_NILO", true );

							escondeModelosPersonagens(_modeloTracio);

							var materials :MaterialsList = new MaterialsList( { all : new ColorMaterial(0xD7261C) } );
							cuboParent = new Cube( materials ,0.001,0.001,0.001,1,1,1);
							cuboParentX = new Cube( materials ,0.001,0.001,0.001,1,1,1);
							_markerNode.addChild( cuboParent );
							cuboParent.addChild( cuboParentX );
							cuboParent.scale=3.5; 
							cuboParent.rotationX=180; 
							cuboParent.rotationZ=90; 
							//_modeloPersonagens.moveBackward(-13)
							//_modeloBolhas.moveBackward(-13)
							_modeloPersonagens.moveDown(22)
							_modeloBolhas.moveDown(17)
							cuboParentX.addChild(_modeloPersonagens);
							cuboParent.addChild(_modeloBolhas);
					}					
			
			private function escondeModelosPersonagens(apareceObjeto:DisplayObject3D)
				{
							_modeloTracio.visible=false;
							_modeloJean.visible=false;
							_modeloRaiox.visible=false;
							_modeloZezinho.visible=false;
							_modeloMaquina.visible=false;
							_modeloSimao.visible=false;
							_modeloSidney.visible=false;
							_modeloJuca.visible=false;
							_modeloDj.visible=false;
							_modeloGeninho.visible=false;
							_modeloTila.visible=false;
							_modeloNilo.visible=false;
							apareceObjeto.visible=true;
					}
			
			
function clicaBotao(evento:MouseEvent)
{ 
		switch(evento.currentTarget.name)
		{
				case "UP": cuboParent.moveUp(17); break;
				case "DOWN": cuboParent.moveDown(17);  break;
				case "LEFT": cuboParent.moveLeft(17);  break;
				case "RIGHT": cuboParent.moveRight(17);  break;
				case "RESET": 
				cuboParent.x=0; 
				cuboParent.y=0; 
				cuboParent.z=0; 
				
							cuboParent.scale=3.5; 
							cuboParent.rotationX=180; 
							cuboParent.rotationZ=90; 
				//cuboParent.moveBackward(-13)
				//cuboParent.moveBackward(-13)
				//cuboParent.moveDown(22)
				//cuboParent.moveDown(17)

				
				break;
				case "MAIS": if(cuboParent.scale<50){cuboParent.scale+=0.9;}  break;
				case "MENOS": if(cuboParent.scale>2){cuboParent.scale-=0.9;} break;
				case "GIRO": 
						addEventListener(Event.ENTER_FRAME, _update); 
						cuboParentX.rotationY=0;
						_giramodelo = !_giramodelo;
				break;

			}
 	}
	
function clicaBotaoSound(evento:MouseEvent)
{ 
	switch(playerChoice)
		{
				case "TRACIO": 
					contaSomTracio++;
					switch(contaSomTracio)
						{
							case 1: SoundMixer.stopAll(); SOMTRACIO1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMTRACIO2.play(); contaSomTracio=0; break; 
						}
				break;
				
				case "NILO": 
					contaSomNilo++;
					switch(contaSomNilo)
						{
							case 1: SoundMixer.stopAll(); SOMNILO1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMNILO2.play(); contaSomNilo=0; break; 
						}
						
				break;
				
				case "JEAN": 
					contaSomJean++;
					switch(contaSomJean)
						{
							case 1: SoundMixer.stopAll(); SOMJEAN1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMJEAN2.play(); contaSomJean=0; break; 
						}
				break;
				
				case "JUCA": 
					 SoundMixer.stopAll(); SOMJUCA.play();  
				break;
				
				case "MAQUINA": 
					 SoundMixer.stopAll(); SOMMAQUINA.play();  
				break;
				
				case "NILO":
					contaSomNilo++; 
					switch(contaSomNilo)
						{
							case 1: SoundMixer.stopAll(); SOMNILO1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMNILO2.play(); contaSomNilo=0; break; 
						}
				break;
				
				case "SIDNEY": 
					contaSomSidney++;
					switch(contaSomSidney)
						{
							case 1: SoundMixer.stopAll(); SOMSIDNEY1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMSIDNEY2.play(); contaSomSidney=0; break; 
						}
				break;
				
				case "SIMAO": 
					 SoundMixer.stopAll(); SOMSIMAO.play();  
				break;
				
				case "TILA": 
					contaSomTila++;
					switch(contaSomTila)
						{
							case 1: SoundMixer.stopAll(); SOMTILA1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMTILA2.play(); contaSomTila=0; break; 
						}
				break;
				
				case "ZEZINHO": 
					contaSomZezinho++;
					switch(contaSomZezinho)
						{
							case 1: SoundMixer.stopAll(); SOMZEZINHO1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMZEZINHO2.play(); break; 
							case 3: SoundMixer.stopAll(); SOMZEZINHO3.play(); contaSomZezinho=0; break; 
						}
				break;
				
				case "DJ": 
					contaSomDj++;
					switch(contaSomDj)
						{
							case 1: SoundMixer.stopAll(); SOMDJ1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMDJ2.play(); contaSomDj=0; break; 
						}
				break;
				
				case "RAIOX": 
					contaSomRaiox++;
					switch(contaSomRaiox)
						{
							case 1: SoundMixer.stopAll(); SOMRAIOX1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMRAIOX2.play(); break; 
							case 3: SoundMixer.stopAll(); SOMRAIOX3.play(); contaSomRaiox=0; break; 
						}
				break;
				
				case "GENINHO": 
					contaSomGeninho++;
					switch(contaSomGeninho)
						{
							case 1: SoundMixer.stopAll(); SOMGENINHO1.play(); break; 
							case 2: SoundMixer.stopAll(); SOMGENINHO2.play(); break; 
							case 3: SoundMixer.stopAll(); SOMGENINHO3.play(); contaSomGeninho=0; break; 
						}
				break;
				
				
			}		
 	}
	
function clicaBotaoPlayer(evento:MouseEvent)
{ 
	DAE(_modeloBolhas).play("IDLEBOLHAS", false);
	SoundMixer.stopAll();
	SOMBOLHA.play();
	playerChoice = String(evento.currentTarget.name);
	switch(playerChoice)
	{
		case "TRACIO": escondeModelosPersonagens(_modeloTracio); break;
		case "JEAN": escondeModelosPersonagens(_modeloJean); break;
		case "NILO": escondeModelosPersonagens(_modeloNilo); break;
		case "TILA": escondeModelosPersonagens(_modeloTila); break;
		case "SIMAO": escondeModelosPersonagens(_modeloSimao); break;
		case "JUCA": escondeModelosPersonagens(_modeloJuca); break;
		case "SIDNEY": escondeModelosPersonagens(_modeloSidney); break;
		case "RAIOX": escondeModelosPersonagens(_modeloRaiox); break;
		case "ZEZINHO": escondeModelosPersonagens(_modeloZezinho); break;
		case "MAQUINA": escondeModelosPersonagens(_modeloMaquina); break;
		case "GENINHO": escondeModelosPersonagens(_modeloGeninho); break;
		case "DJ": escondeModelosPersonagens(_modeloDj); break;
		}
	//trace(playerChoice);
	}




		private function _update(e:Event):void 
			{
				if(_giramodelo){ cuboParentX.rotationY -= 2.3;}
			}




		}
}
