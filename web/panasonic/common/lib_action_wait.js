//
// Copyright (C) 2011 Panasonic Corporation. All Rights Reserved.
//
///////////////////////////////////////////////////////////////
// Set up wait
///////////////////////////////////////////////////////////////
var Setup_Wait = function(o,i){
  var DoAnimation = function(o,i){
    return (o._time > o.effect[i].wait) ? false: true;
  };
  return DoAnimation;
};

provide ("lib_action_wait");