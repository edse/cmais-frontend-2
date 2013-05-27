//
// Copyright (C) 2008-2009 Panasonic Corporation. All Rights Reserved.
//


function log (text) {
//  console.log(text);
}

function USB_Keyboard (stage, keyboard_obj) {
  if (stage) {
    stage._dead_key = TXKB_VoidSymbol;
    stage._keyboard_obj = [];
    stage._key_input_objs = [];

    this.add_keyboard_obj (stage, keyboard_obj);
  }

  this._dead_key = TXKB_VoidSymbol;
}

USB_Keyboard.prototype.add_keyboard_obj = function (stage, keyboard_obj) {
  if (typeof keyboard_obj != "undefined") {
    if (keyboard_obj instanceof Array) {
      stage._keyboard_obj = stage._keyboard_obj.concat(keyboard_obj);
    } else {
      stage._keyboard_obj.push(keyboard_obj);
    }
    _store_InputObj(stage);
  }
};

USB_Keyboard.prototype.remove_keyboard_obj = function (stage, keyboard_obj) {
  var tmp = null;
  var ret = _search_InputObject (tmp, "__INPUT_OBJECT__");
  
  var len = stage._key_input_objs.length;
  for (var i = 0; i < len; i++ ) {
    tmp = stage._key_input_objs.shift();
    if (tmp != ret) {
      stage._key_input_objs.push(tmp);
    }
  }
};

USB_Keyboard.prototype.clear_keyboard_obj = function (stage) {
  stage._keyboard_obj = [];
  stage._key_input_objs = [];
};

USB_Keyboard.prototype.hook = function (stage, device, event) {
  var up_down = 0;
  var txk_up_down = 0;
  var keysym = 0;
  var modifier = 0;
  var txk_keysym = null;
  var key_obj = {};
  var input_char = "";
  key_obj.CHAR = 0;
  key_obj.CONT = 1;

  switch (event) {
  case ebus.kbd.KEYSYM_EV:
    up_down      = arguments[3];
    keysym       = arguments[4];
    modifier     = arguments[5];
    scancode     = arguments[6];
    break;
  case ebus.kbd.STRING_EV:
    input_char = arguments[3];
    break;
  default:
    log(">> default");
    break;
  }    

  if (stage._keyboard_obj.length > 0) {
    _store_InputObj(stage);
  }

  if (event == ebus.kbd.STRING_EV) {
    key_obj.type = key_obj.CHAR;
    key_obj.code = input_char;
    txk_up_down = KEY_PRESS;
    if (input_char != "")
      call_key_hook (stage, txk_up_down, key_obj);
    return true;

  } else {
    var ret = ebus.kbd.keysym_to_string(stage._dead_key, keysym);
    txk_up_down = _convert_up_down_TXKB_to_TXK (up_down);

    switch (ret) {
    case KBD_CONTROLKEY:
      if (keysym == TXKB_BackSpace) {
	stage._dead_key = TXKB_VoidSymbol;
      }
      txk_keysym = _convert_TXKB_to_TXK (stage, keysym);
      if (txk_keysym) {
	if (_is_TXK(txk_keysym)) {
	  call_key_hook (stage, txk_up_down, txk_keysym);
	} else if (_is_TXKB_KP(txk_keysym)) {
	  key_obj.type = key_obj.CHAR;
	  key_obj.code = _convert_TXKB_to_CHAR (txk_keysym);
	  key_obj.scancode = scancode;
	  call_key_hook (stage, txk_up_down, key_obj);
	} else {
	  key_obj.type = key_obj.CONT;
	  key_obj.code = txk_keysym;
	  key_obj.scancode = scancode;
	  call_key_hook (stage, txk_up_down, key_obj);
	}
      }
      break;

    case KBD_DEADKEY:
      if (up_down == KBD_PRESS)
	stage._dead_key = keysym;

      return;
      break;

    default: //char
      if (up_down == KBD_PRESS)
	stage._dead_key = TXKB_VoidSymbol;

      if(_is_enter_InputObject (stage)){
	if (up_down == KBD_PRESS) {
	  key_obj.type = key_obj.CHAR;
	  key_obj.code = ret;
	  key_obj.scancode = scancode;
	  call_key_hook (stage, txk_up_down, key_obj);
	}
      } else {
	var txk_num_keysym = _convert_CHAR_to_TXK(stage, ret);
	if (_is_TXK(txk_num_keysym)) {
	  call_key_hook (stage, txk_up_down, txk_num_keysym);
	}
      }
      break;
    }
  }
};

USB_Keyboard.prototype.key_hook = function (arguments) {
  var event = 0;
  var up_down = 0;
  var txk_up_down = 0;
  var keysym = 0;
  var modifier = 0;
  var txk_keysym = null;
  var input_char = "";
  var key_obj = {};
  key_obj.CHAR = 0;
  key_obj.CONT = 1;

  event  = arguments[2];
  switch (event) {
  case ebus.kbd.KEYSYM_EV:
    up_down      = arguments[3];
    keysym       = arguments[4];
    modifier     = arguments[5];
    scancode     = arguments[6];
    break;
  case ebus.kbd.STRING_EV:
    input_char = arguments[3];
    break;
  default:
    log(">> default");
    break;
  }

  if (event == ebus.kbd.STRING_EV) {
    key_obj.type = key_obj.CHAR;
    key_obj.code = input_char;
    key_obj.up_down = KEY_PRESS;
    return key_obj;

  } else {
    var ret = ebus.kbd.keysym_to_string(this._dead_key, keysym);
    txk_up_down = _convert_up_down_TXKB_to_TXK (up_down);

    switch (ret) {
    case KBD_CONTROLKEY:
      if (keysym == TXKB_BackSpace) {
	this._dead_key = TXKB_VoidSymbol;
      }
      if (_is_TXKB_KP(keysym)) {
	return {
	  up_down  :txk_up_down,
	  type     :0,
	  code     :_convert_TXKB_to_CHAR (keysym),
	  scancode :scancode,
	  CONT     :1,
	  CHAR     :0
	}
      }
      txk_keysym = _convert_TXKB_to_TXK (null, keysym);
      return {
	up_down  :txk_up_down,
	type     :1,
	code     :txk_keysym,
	scancode :scancode,
	CONT     :1,
	CHAR     :0
      };
      break;

    case KBD_DEADKEY:
      if (up_down == KBD_PRESS)
	this._dead_key = keysym;

      return;
      break;

    default: //char
      if (up_down == KBD_PRESS) {
	this._dead_key = TXKB_VoidSymbol;
      }
      return {
	up_down  :txk_up_down,
	type     :0,
	code     :ret,
	scancode :scancode,
	CONT     :1,
	CHAR     :0
      };
      break;
    }
  }
};

USB_Keyboard.prototype.get_key_or_char = function (param) {
  if (!param || typeof param.key == "undefined") {
    console.log("[WARN] param.key is not specified");
    return null;
  }
  var key = param.key;
  if (key && typeof key == 'object') {
    switch (key.type) {
    case key.CHAR:
      if (param.char_hook) param.char_hook(key.code);
      return key.code;
    case key.CONT:
      if (param.convert_func)
	return param.convert_func(key.code);
      else
	return key.code;
    }
  }
  return param.key;
}

function call_key_hook (stage, up_down, keysym) {
  var consumed = false;
  if (is_scroll_entered(stage)) {
    var scr_obj = get_entered_scroll_obj(stage);
    if (scr_obj.key_hook instanceof Function) {
      consumed = scr_obj.key_hook(up_down, keysym);
      if (consumed)
	return true;
    }
  }
  if (stage.key_hook instanceof Function) {
    consumed = stage.key_hook(up_down, keysym);
    if (!consumed)
      return default_system_key_hook(up_down, keysym);
    return true;
  } else {
    return false;
  }
}

function _is_TXK (keysym) {
  var ret = false;
  switch (keysym) {
  case TXK_LEFT:
  case TXK_RIGHT:
  case TXK_UP:
  case TXK_DOWN:
  case TXK_ENTER:
  case TXK_RETURN:
  case TXK_HOME:
  case COLOR_KEY[0].KEY_CODE:
  case COLOR_KEY[1].KEY_CODE:
  case COLOR_KEY[2].KEY_CODE:
  case COLOR_KEY[3].KEY_CODE:
  case TXK_D0:
  case TXK_D1:
  case TXK_D2:
  case TXK_D3:
  case TXK_D4:
  case TXK_D5:
  case TXK_D6:
  case TXK_D7:
  case TXK_D8:
  case TXK_D9:
    ret = true;
    break;
  }
  return ret;
}

function _is_DIGIT_KEY (keysym) {
  var ret = false;

  switch (keysym) {
  case TXK_D0:
  case TXK_D1:
  case TXK_D2:
  case TXK_D3:
  case TXK_D4:
  case TXK_D5:
  case TXK_D6:
  case TXK_D7:
  case TXK_D8:
  case TXK_D9:
  case TXK_ASTERISK:
  case TXK_SHARP:
    ret = true;
    break;
  }
  return ret;
}

function _is_CROSS_KEY (keysym) {
  var ret = false;

  switch (keysym) {
  case TXK_UP:
  case TXK_DOWN:
  case TXK_RIGHT:
  case TXK_LEFT:
    ret = true;
    break;
  }
  return ret;
}

function _is_TXKB_KP (k) {
  var ret = false;

  switch (k) {
  case TXKB_KP_0:
  case TXKB_KP_1:
  case TXKB_KP_2:
  case TXKB_KP_3:
  case TXKB_KP_4:
  case TXKB_KP_5:
  case TXKB_KP_6:
  case TXKB_KP_7:
  case TXKB_KP_8:
  case TXKB_KP_9:
  case TXKB_KP_Multiply:
  case TXKB_KP_Add:
  case TXKB_KP_Subtract:
  case TXKB_KP_Decimal:
  case TXKB_KP_Divide:
    ret = true;
    break;
  }
  return ret;
}

function _convert_TXKB_to_TXK (stage, keysym) {
  var ret = keysym;

  if (stage) {
    var mobile = _is_enter_InputObject (stage);
  } else {
    var mobile = true;
  }

  switch (keysym) {
  case TXKB_Return: ret = TXK_ENTER; break;
  case TXKB_Left:   ret = TXK_LEFT;  break;
  case TXKB_Up:     ret = TXK_UP;    break;
  case TXKB_Right:  ret = TXK_RIGHT; break;
  case TXKB_Down:   ret = TXK_DOWN;  break;
  case TXKB_F9:     ret = COLOR_KEY[0].KEY_CODE; break;
  case TXKB_F10:    ret = COLOR_KEY[1].KEY_CODE; break;
  case TXKB_F11:    ret = COLOR_KEY[2].KEY_CODE; break;
  case TXKB_F12:    ret = COLOR_KEY[3].KEY_CODE; break;
  case TXKB_HomePage: ret = TXK_HOME; break;
  case TXKB_BackSpace: if(!mobile){ret = TXK_RETURN;} break;
  default: break;
  }
  return ret;
};

function _convert_TXKB_to_CHAR (k) {
  var ret;
  switch (k) {
  case TXKB_KP_0:        ret = "0"; break;
  case TXKB_KP_1:        ret = "1"; break;
  case TXKB_KP_2:        ret = "2"; break;
  case TXKB_KP_3:        ret = "3"; break;
  case TXKB_KP_4:        ret = "4"; break;
  case TXKB_KP_5:        ret = "5"; break;
  case TXKB_KP_6:        ret = "6"; break;
  case TXKB_KP_7:        ret = "7"; break;
  case TXKB_KP_8:        ret = "8"; break;
  case TXKB_KP_9:        ret = "9"; break;
  case TXKB_KP_Multiply: ret = "*"; break;
  case TXKB_KP_Add:      ret = "+"; break;
  case TXKB_KP_Subtract: ret = "-"; break;
  case TXKB_KP_Decimal:  ret = "."; break;
  case TXKB_KP_Divide:   ret = "/"; break;
  default: ret = k; break;
  }
  return ret;
};

function _convert_CHAR_to_TXK (stage, c) {
  switch (c) {
  case "0": return TXK_D0;
  case "1": return TXK_D1;
  case "2": return TXK_D2;
  case "3": return TXK_D3;
  case "4": return TXK_D4;
  case "5": return TXK_D5;
  case "6": return TXK_D6;
  case "7": return TXK_D7;
  case "8": return TXK_D8;
  case "9": return TXK_D9;
  default:  return null;
  }
};

function _convert_up_down_TXKB_to_TXK (up_down) {
  switch (up_down) {
  case KBD_PRESS: return KEY_PRESS; break;
  case KBD_UP:    return KEY_UP;    break;
  case KBD_DOWN:  return KEY_DOWN;  break;
  }
};

function _print_KBD_updown (up_down) {
  switch (up_down) {
  case KBD_PRESS: console.log("KBD_PRESS"); break;
  case KBD_UP:    console.log("KBD_UP");    break;
  case KBD_DOWN:  console.log("KBD_DOWN");  break;
  }
};

function _is_InputObject (obj, tag) {
  if (obj && obj.class_name == tag)
    return true;
  
  return false;
}

function _is_enter_InputObject (stage) {
  if (stage._key_input_objs.length > 0) {
    var len = stage._key_input_objs.length;
    for (var i = 0; i < len; i++) {
      if (stage._key_input_objs[i].get_in_cursor()) {
	return true;
      }
    }
  }

  return false;
}

function _check_all_element (obj, tag) {
  var len = obj.length;
  for (var i=0; i < len; i++) {
    if (_is_InputObject(obj[i], tag)) {
      return obj[i];
    } else if (obj[i] instanceof container
	       || obj[i] instanceof actor
	       || obj[i] instanceof Array) {
      var ret = _search_InputObject(obj[i], tag);
      if (_is_InputObject(ret, tag))
	return ret;
    }
  }
  return null; 
}

function _search_InputObject (obj, tag) {
  if (_is_InputObject(obj, tag)) {
    return obj;
  }

  if (obj instanceof container) {
    return _check_all_element (obj.components, tag);
  } else if (obj instanceof actor) {
    return _check_all_element (obj.bg_image, tag);
  } else if (obj instanceof Array) {
    return _check_all_element (obj, tag);
  } else {
    console.log("[_search_InputObject] Can not search InputObject. Because specify bad object.");
    return null;
  }
};

function _store_InputObj (stage) {
  var ret = null;
  var tmp = null;
  
  if (stage._keyboard_obj instanceof Array) {
    var len = stage._keyboard_obj.length;
    for (var i = 0; i < len; i++) {
      tmp = stage._keyboard_obj.shift();
      ret = _search_InputObject (tmp, "__INPUT_OBJECT__");
      if (ret != null) {
	var exist_flag = false;
	var len_j = stage._key_input_objs.length;
	for (var j = 0; j < len_j; j++) {
	  if (stage._key_input_objs[j] == ret) {
	    exist_flag = true;
	  }
	}
	if (!exist_flag) {
	  stage._key_input_objs.push(ret);
	}
      } else {
	stage._keyboard_obj.push(tmp);
      }
    }
  } else {
    console.log("[_store_InputObj] Error!!!");
  }
}

provide("pkg_usb_keyboard");
