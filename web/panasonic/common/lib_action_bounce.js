//
// Copyright (C) 2011 Panasonic Corporation. All Rights Reserved.
//
///////////////////////////////////////////////////////////////
// Animation Effect (freefall and bounce along with y axis) 
///////////////////////////////////////////////////////////////
var Setup_FreeFall_and_Bounce = function(o){
  var Throw2Sky = new Object();
  var Dive2Earth = new Object();
  var GRAVITY = 9.8;
  var MEW = 0.5;
  
  // Bounce
  Throw2Sky.f = function(V0,t)
  {
    return V0 * t - 1/2 * GRAVITY * t*t;
  };

  Throw2Sky.getDuration = function(V0)
  {
    return 2*V0 / GRAVITY;
  };

  Throw2Sky.getPeak = function(V0)
  {
    return [ V0/GRAVITY, Math.pow(V0,2)/(2*GRAVITY)];
  };

  // Freefall
  Dive2Earth.f = function(H0,t)
  {
    return H0 - 1/2 * GRAVITY * t*t;
  };

  Dive2Earth.getVelocity = function(H0)
  {
    return Math.sqrt(2 * GRAVITY * H0);
  };

  Dive2Earth.getDuration = function(H0)
  {
    return Math.sqrt(2 * H0 / GRAVITY);
  }; 
  
  // setup internal variable
  o._time = 0;
  o._C=true;
  var H0 = o.starting_point[1] - o.end_point[1];
  var V0 = Dive2Earth.getVelocity(H0);
  o._H0 = H0;
  o._V0 = V0;
  o._D = [
    Dive2Earth.getDuration(H0),
    Dive2Earth.getDuration(H0) + Throw2Sky.getDuration(MEW*V0),
    Dive2Earth.getDuration(H0) + Throw2Sky.getDuration(MEW*V0) 
      + Throw2Sky.getDuration(MEW*MEW*V0),
    Dive2Earth.getDuration(H0) + Throw2Sky.getDuration(MEW*V0) 
      + Throw2Sky.getDuration(MEW*MEW*V0) + Throw2Sky.getDuration(MEW*MEW*MEW*V0)];

	// Check animation to decide falling or bouncing or stop
  var DoAnimation = function(o){
    if(o._D[0] > o._time){
      o.target.translate[1] = Dive2Earth.f(o._H0,o._time)+o.end_point[1];
    }else if(o._D[1] > o._time){
      o.target.translate[1] = Throw2Sky.f(MEW*o._V0,o._time - o._D[0])+ o.end_point[1];	
    }else if(o._D[2] > o._time){
      o.target.translate[1] = Throw2Sky.f(MEW*MEW*o._V0,o._time - o._D[1])+ o.end_point[1];	
    }else if(o._D[3]>o._time){
      o.target.translate[1] = Throw2Sky.f(MEW*MEW*MEW*o._V0,o._time - o._D[2])+ o.end_point[1];	
    }else{
      o.target.translate[1] = o.end_point[1];
      o._C = false;
    }
    return o._C;
  };
  return DoAnimation;
};

provide ("lib_action_bounce");
