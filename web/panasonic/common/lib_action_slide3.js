//
// Copyright (C) 2011 Panasonic Corporation. All Rights Reserved.
//
//////////////////////////////////////////////////////////////////////////////////
// Set up sliding spline 3
//////////////////////////////////////////////////////////////////////////////////
var Setup_Spline3 = function(o,i)
{
  function MyLog(m){
    //    console.log(m);
  }
  o.target.old_translate = new Array(3);  
  o.effect[i].t = 0;
  o.effect[i].index = 0;

  var spline3 = function(t,x0, x1, x2, x3)
  {
    v0 = 1/2*(x2 - x0);
    v1 = 1/2*(x3 - x1);
    return (2*x1 - 2*x2 + v0 + v1)*Math.pow(t,3) +
      (-3*x1 + 3*x2 - 2*v0 - v1)*Math.pow(t,2)+ v0*t + x1;
  };
  // Set next translation for the spline
  var DoAnimation = function(o,i){
    
    var p = o.effect[i].points;
    var v = o.effect[i].velocity;
    var t = o.effect[i].t;
    var target_tran = o.target.translate;
    var target_old_tran = o.target.old_translate;    
    var index = o.effect[i].index;
    
    if(o.effect[i].index == 0){
      if(t < 1){
	MyLog("1:"+o.effect[i].index   +"t:"+t+"----->"+"x:"+target_tran[0]);
	target_old_tran[0]=target_tran[0];
	target_old_tran[1]=target_tran[1];
	target_old_tran[2]=target_tran[2];            	
	target_tran[0] = p[index][0]*(1-t) + t*p[index+1][0];
	target_tran[1] = p[index][1]*(1-t) + t*p[index+1][1];
	target_tran[2] = p[index][2]*(1-t) + t*p[index+1][2];
	o.effect[i].t += v;
	try{
	  o.effect[i].onMove(o,i);
	}catch(e){
	  console.log("no onMove");
	}	
      }else{
	MyLog("2:"+o.effect[i].index   +"t:"+t+"----->"+"x:"+target_tran[0]);
	o.effect[i].index++;
	o.effect[i].t=0;
	return DoAnimation(o,i);
      }
    }else if(o.effect[i].index == p.length - 2){
      if(t < 1){
	MyLog("3:"+o.effect[i].index   +"t:"+t+"----->"+"x:"+target_tran[0]);
	target_old_tran[0]=target_tran[0];
	target_old_tran[1]=target_tran[1];
	target_old_tran[2]=target_tran[2];            	
	target_tran[0] = p[index][0]*(1-t) + t*p[index+1][0];
	target_tran[1] = p[index][1]*(1-t) + t*p[index+1][1];
	target_tran[2] = p[index][2]*(1-t) + t*p[index+1][2];
	o.effect[i].t += v;
	try{
	  o.effect[i].onMove(o,i);
	}catch(e){
	  console.log("no onMove");
	}	
      }else{
	MyLog("4:"+o.effect[i].index   +"t:"+t+"----->"+"x:"+target_tran[0]);
	return false;
      }
    }else{
      
      if(t < 1){
	MyLog("5:"+o.effect[i].index   +"t:"+t+"----->"+"x:"+target_tran[0]);
	target_old_tran[0]=target_tran[0];
	target_old_tran[1]=target_tran[1];
	target_old_tran[2]=target_tran[2];            	
	target_tran[0] = spline3(t,
				 p[index-1][0],p[index][0],p[index+1][0],p[index+2][0]);
	target_tran[1] = spline3(t,
				 p[index-1][1],p[index][1],p[index+1][1],p[index+2][1]);
	target_tran[2] = spline3(t,
				 p[index-1][2],p[index][2],p[index+1][2],p[index+2][2]);
	o.effect[i].t += v;   
	try{
	  o.effect[i].onMove(o,i);
	}catch(e){
	  console.log("no onMove");
	}	
      }else{
	MyLog("6:"+o.effect[i].index   +"t:"+t+"----->"+"x:"+target_tran[0]);
	o.effect[i].t = 0;
	o.effect[i].index++;
	return DoAnimation(o,i);	
      }
    }
    return true;
  };
  return DoAnimation;
};
//////////////////////////////////////////////////////////////////////////////////
// Debug Tools (Console logging)
//////////////////////////////////////////////////////////////////////////////////
var MyLog=function(m){
  //  console.log(m);
};
var MyFLog = function(f){
  f();
};

provide ("lib_action_slide3");
