//
// Copyright (C) 2010 Panasonic Corporation. All Rights Reserved.
//

var MyHostName;
var ureg;
var COLOR_KEY;

// @-PATH
MyHostName = "http://localserver.vieraconnect.tv/";
path = MyHostName + "data/";

// @-ureg
//     registerApp(), read(AppName) , write(AppName,strData)
var ajaxce_ureg_init = function(){
  const MAXLEN = 1024;
  var isString = function(obj){
    if(obj == null)
      return false;
    return (typeof(obj)=="string" || obj instanceof String);
  }

  var ureg = new Object();
  ureg.root = new Object();

  ureg.RegisterApp = function(AppName){
    ureg.root[AppName] = new String("nodata");
  }
  ureg.read = function(AppName){
    try {
      return ureg.root[AppName];
    }catch(e){
      return false;
    }
  }
  ureg.copy = function(AppName){
    try {
      var ret =new String(ureg.root[AppName]);
      return ret;
    }catch(e){
      return false;
    }
  }
  ureg.write = function(AppName,string){
    if(isString(string)==false){
      return false;
    }
    if(string.length > MAXLEN)
      return false;
    for(var p in ureg.root){
      if(p == AppName){
        return ureg.root[AppName] = new String(string);
      }
    }
    return false;
  }
  return ureg;
}
ureg = ajaxce_ureg_init();


// Load language and market from system.
/**** Language ***/
var loadSystemLanguage = function(){
  ureg.RegisterApp("language");
  if( !system.locale ){   /* PZ850U ? */
    ureg.write( "language", system.language.substr(0,5) );
  }else{                  /* '09 model (US or EU) */
    if( system.locale.language == null ||
        system.locale.language == "" ){
      ureg.write( "language", "en-US" ); /* error : default */
    }else if( system.locale.language == "en-AU" ){
      ureg.write( "language", "en-IE" );
    }else{
      ureg.write( "language", system.locale.language.substr(0,5) );
    }
  }
  return ureg.read("language");
}();

/**** Country ***/
var loadSystemMarket = function(){
  ureg.RegisterApp("market");
  if( !system.locale ){                               /* PZ850U ? */
    ureg.write( "market", "US" );
  }else if(system.locale.country.indexOf("US") == 0 ||
           system.locale.country.indexOf("CA") == 0 ||
           system.locale.country.indexOf("MX") == 0){ /* US, Canada, Mexico model */
    ureg.write( "market", "US" );
  }else if(system.locale.country == null ||
           system.locale.country == ""){              /* EU model ? (E_EU) */
    ureg.write( "market", "EU" );
  }else{                                              /* EU model */
    ureg.write( "market", "EU" );
  }
  return ureg.read("market");
}();


//// @COLOR_KEY
COLOR_KEY = null;
var map_color_key = function() {
  const RED    = [192,   0,   0, 255]; // RED
  const GREEN  = [  0, 128,  32, 255]; // GREEN
  const BLUE   = [  0,   0, 192, 255]; // BLUE
  const YELLOW = [192, 192,   0, 255]; // YELLOW

  var COLOR_KEY_TYPE = {
    "US_TYPE" : [
      { "COLOR": RED,    "KEY_CODE": TXK_RED,    },
      { "COLOR": GREEN,  "KEY_CODE": TXK_GREEN,  },
      { "COLOR": BLUE,   "KEY_CODE": TXK_BLUE,   },
      { "COLOR": YELLOW, "KEY_CODE": TXK_YELLOW, },
    ],
    "PAL_TYPE" : [
      { "COLOR": RED,    "KEY_CODE": TXK_RED,    },
      { "COLOR": GREEN,  "KEY_CODE": TXK_GREEN,  },
      { "COLOR": YELLOW, "KEY_CODE": TXK_YELLOW, },
      { "COLOR": BLUE,   "KEY_CODE": TXK_BLUE,   },
    ],
    "JP_TYPE" : [ // dummy
      { "COLOR": BLUE,   "KEY_CODE": TXK_BLUE,   },
      { "COLOR": RED,    "KEY_CODE": TXK_RED,    },
      { "COLOR": GREEN,  "KEY_CODE": TXK_GREEN,  },
      { "COLOR": YELLOW, "KEY_CODE": TXK_YELLOW, },
    ],
  };

  switch(ureg.read("market").toString()) {
   case "US":
    COLOR_KEY = COLOR_KEY_TYPE[ "US_TYPE" ];
    break;
   case "EU":
    COLOR_KEY = COLOR_KEY_TYPE[ "PAL_TYPE" ];
    break;
  default:
    COLOR_KEY = COLOR_KEY_TYPE[ "JP_TYPE" ];
    break;
  }
}();


var get_my_host_name = function() {
  return MyHostName;
};

var get_path = function() {
  return path;
};

var get_color_key = function() {
  return COLOR_KEY;
};

var get_lang = function() {
  return ureg.read("language");
};

provide("common_env");