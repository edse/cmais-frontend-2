//
// Copyright (C) 2011 Panasonic Corporation. All Rights Reserved.
//
/////////////////////////////////////////////////////////////////
//	Create Flying Cube
/////////////////////////////////////////////////////////////////
var Cube =function(init){

  // Create the Cube face 
  var Stamp = function(init){
    var rot = init.rotation;
    var trans =  init.translate;
    var width = init.width;
    var height = init.height;
    var color = init.color;
    var c = new container({ "rotation": rot, "translate": trans});

    if(typeof init.src != "undefined")
      c.components.push( new gimage ({"src": init.src,
				      "width": width,
				      "height": height,
				      "draw_type": CIRCUMSCRIBED}));
    c.components.push(new gbox({
				 "width":width,
				 "height":height,
				 "color": color}));
    return c;
  };
  
  var z_depth = init.z_width_height[0];
  var width = init.z_width_height[1];
  var height = init.z_width_height[2];
  var isrc = init.src;
  var fc = init.face_color;
  
  // Translation data of the six faces
  var tr = [
    [0,0,z_depth/2],
    [0,0,-z_depth/2],
    [width/2,0,0],
    [-width/2,0,0],
    [0,height/2,0],
    [0,-height/2,0]];
	
  // Rotation data of the six faces)
  var rot = [
    [0,0,0,0],
    [-180,0,1,0],
    [90,0,1,0],
    [-90,0,1,0],
    [-90,1,0,0],
    [90,1,0,0]];
	
  // Width & height data of the six faces
  var wh = [
    [width,height],
    [width,height],
    [z_depth,height],
    [z_depth,height],
    [width,z_depth],
    [width,z_depth]];

  // Data of the Cube faces are stored in an array
  var b = new Array();
  for(var i=0; i<6; i++){
    b.push(
      new Stamp({
		  "src": isrc[i],"rotation": rot[i],"translate": tr[i],
		  "width":wh[i][0],"height":wh[i][1],"color": fc[i]})); 
  }

  var xz,y_xz,ret;
  
  // Container that shows the Cube
  ret = new container({ "visible_p":init.visible_p, 
			"translate": init.translate, 
			"rotation":init.rotation,
			"components":[
			  xz = new container({"components":[ 
						y_xz = new container({"components":b})]})]});

  // Rotate along y-axis by d
  ret.SetRotation_XZ = function(d){
    xz.rotation[0]=d;
    xz.rotation[1]=0;
    xz.rotation[2]=1;
    xz.rotation[3]=0;
    return xz.rotation;
  };
  // Rotate along z-axis by d
  ret.SetRotation_Y_XZ = function(d){
    y_xz.rotation[0]=d;
    y_xz.rotation[1]=0;
    y_xz.rotation[2]=0;
    y_xz.rotation[3]=1;
    return y_xz.rotation;      
  };
  // Calculate the trace points
  ret.DoTracePoints = function(){
    var p = GetNextDegreeAndR(ret.translate, ret.old_translate);
    ret.SetRotation_Y_XZ(p.fai);
    ret.SetRotation_XZ(p.theata);	    
  };
  return ret;
};

var Cube2 = Cube;

// Transform coordinate system to Polar Form
var Transform2PolerForm = function(tran,ret)
{
  var MyAtan = function(x, y){
    return Math.ceil(Math.atan2(y,x)*180/Math.PI);
  };

  var MyAcos = function(a){
    return Math.acos(a)*180/Math.PI;
  };

  var MySqrt = function(a){
    return Math.sqrt(a);
  };

  var MyCos = function(a){
    return Math.cos(a/180*Math.PI);
  };

  var MySin = function(a){
    return Math.sin(a/180*Math.PI);
  };

  var innv = function(a,b){
    return a[0]*b[0]+  a[1]*b[1]+  a[2]*b[2];
  };
  
  var x = tran[0];
  var y = tran[1];
  var z = tran[2];

  var fai = 0;
  var tha = 0;

  tha = MyAtan(x,-z);
  fai = MyAcos((x*MyCos(tha) - z*MySin(tha))
	       /MySqrt(x*x + y*y + z*z));
  if(y<0)
    fai *= -1;
	
  // ret has two properties (fai, theata)
  ret.theata=tha;
  ret.fai=fai;
  ret.R=MySqrt(innv(tran,tran));
  return ret;
};

var Delta = function(a, b, o){
  o[0]=a[0]-b[0];
  o[1]=a[1]-b[1];
  o[2]=a[2]-b[2];
};		  

var mybuf = [3];
var myret = {"fai":0, "theata":0,"R":0};

// Get next degree and R
var GetNextDegreeAndR = function(tran,otran,ret){
  Delta(tran,otran,mybuf);
  Transform2PolerForm(mybuf,myret);
  return myret;
};

provide("lib_item_cube");
