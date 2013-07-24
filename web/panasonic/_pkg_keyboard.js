//
// Copyright (C) 2008 Panasonic Corporation. All Rights Reserved.
//

if(typeof ebus == "undefined")
  ebus = {}; // global
if(typeof ebus.kbd == "undefined")
  ebus.kbd = {supported: false};
if(typeof ebus.smartphone == "undefined")
  ebus.smartphone = {supported: false};

var is_us_market = (ureg.read("market") == "US");

var kbText = {
  "en-US" : {
    "CHANGE_INPUT_STYLE" : "Change Input Style",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "",
    "DELETE_GUIDE" : "",
    "CLEAR_GUIDE" : "",
    "GUIDE_font_size" : 32,
  },
  "es-US" : {
    "CHANGE_INPUT_STYLE" : "Estilo de la entrada",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "",
    "DELETE_GUIDE" : "",
    "CLEAR_GUIDE" : "",
    "GUIDE_font_size" : 32,
  },
  "fr-CA" : {
    "CHANGE_INPUT_STYLE" : "Style de l'netrée",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Supp",
    "SPACE_GUIDE" : "",
    "DELETE_GUIDE" : "",
    "CLEAR_GUIDE" : "",
    "GUIDE_font_size" : 32,
  },
  "en-GB" : {
    "CHANGE_INPUT_STYLE" : "Change Input Style",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Insert Space",
    "DELETE_GUIDE" : "Delete",
    "CLEAR_GUIDE" : "Delete All",
    "GUIDE_font_size" : 32,
  },
  "hu-HU" : {
    "CHANGE_INPUT_STYLE" : "Beviteli mód kiválasztása",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Helyköz beill.",
    "DELETE_GUIDE" : "Törlés",
    "CLEAR_GUIDE" : "Mindet törli",
    "GUIDE_font_size" : 32,
  },
  "hr-HR" : {
    "CHANGE_INPUT_STYLE" : "Promijenite stil unosa",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Umetni razmak",
    "DELETE_GUIDE" : "Poništiti",
    "CLEAR_GUIDE" : "Izbriši sve",
    "GUIDE_font_size" : 32,
  },
  "cs-CZ" : {
    "CHANGE_INPUT_STYLE" : "Změnit způsob zadávání",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Vložit mezeru",
    "DELETE_GUIDE" : "Vymazat",
    "CLEAR_GUIDE" : "Vymazat vše",
    "GUIDE_font_size" : 32,
  },
  "ru-RU" : {
    "CHANGE_INPUT_STYLE" : "Изменить режим ввода",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Введите пробел",
    "DELETE_GUIDE" : "Удалить",
    "CLEAR_GUIDE" : "Удалить все",
    "GUIDE_font_size" : 32,
  },
  "bg-BG" : {
    "CHANGE_INPUT_STYLE" : "Промяна стила на въвеждане",
    "CHANGE_INPUT_STYLE_font_size" : 24,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Интервал",
    "DELETE_GUIDE" : "Изтриване",
    "CLEAR_GUIDE" : "Изтрий всички",
    "GUIDE_font_size" : 32,
  },
  "ro-RO" : {
    "CHANGE_INPUT_STYLE" : "Schimbare stil de introducere",
    "CHANGE_INPUT_STYLE_font_size" : 25,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Inserare spaţiu",
    "DELETE_GUIDE" : "Ştergere",
    "CLEAR_GUIDE" : "Ştergere toate",
    "GUIDE_font_size" : 32,
  },
  "sk-SK" : {
    "CHANGE_INPUT_STYLE" : "Zmeňte vstupné kritériá",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Vložte medzeru",
    "DELETE_GUIDE" : "Vymazať",
    "CLEAR_GUIDE" : "Zmazať všetko",
    "GUIDE_font_size" : 32,
  },
  "sl-SI" : {
    "CHANGE_INPUT_STYLE" : "Zamenjaj način vnosa",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Vstav. presled.",
    "DELETE_GUIDE" : "Izbriši",
    "CLEAR_GUIDE" : "Izbriši vse",
    "GUIDE_font_size" : 32,
  },
  "pl-PL" : {
    "CHANGE_INPUT_STYLE" : "Zmień styl wprowadzania",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Wprowadź spację",
    "DELETE_GUIDE" : "Skasuj",
    "CLEAR_GUIDE" : "Kasuj wszystkie",
    "GUIDE_font_size" : 32,
  },
  "sr-YU" : {
    "CHANGE_INPUT_STYLE" : "Promena stila unosa",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Unos razmaknice",
    "DELETE_GUIDE" : "Brisati ",
    "CLEAR_GUIDE" : "Izbriši sve",
    "GUIDE_font_size" : 32,
  },
  "de-DE" : {
    "CHANGE_INPUT_STYLE" : "Eingabe-Modus ändern",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Leerzeichen",
    "DELETE_GUIDE" : "Löschen",
    "CLEAR_GUIDE" : "Alles löschen",
    "GUIDE_font_size" : 32,
  },
  "es-ES" : {
    "CHANGE_INPUT_STYLE" : "Cambiar el tipo de entrada",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Añadir espacio",
    "DELETE_GUIDE" : "Borrar",
    "CLEAR_GUIDE" : "Borrar todos",
    "GUIDE_font_size" : 32,
  },
  "nl-NL" : {
    "CHANGE_INPUT_STYLE" : "Invoerstijl wijzigen",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Spatie",
    "DELETE_GUIDE" : "Wissen",
    "CLEAR_GUIDE" : "Alles wissen",
    "GUIDE_font_size" : 32,
  },
  "no-NO" : {
    "CHANGE_INPUT_STYLE" : "Endre inntastingsformat",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Sett inn mellomrom",
    "DELETE_GUIDE" : "Slett",
    "CLEAR_GUIDE" : "Slette alle",
    "GUIDE_font_size" : 28,
  },
  "fi-FI" : {
    "CHANGE_INPUT_STYLE" : "Vaihda näppäimistö",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Lisää välilyönti",
    "DELETE_GUIDE" : "Poista",
    "CLEAR_GUIDE" : "Poista kaikki",
    "GUIDE_font_size" : 32,
  },
  "fr-FR" : {
    "CHANGE_INPUT_STYLE" : "Changer le mode de saisie",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Espace",
    "DELETE_GUIDE" : "Supprimer",
    "CLEAR_GUIDE" : "Supprimer tout",
    "GUIDE_font_size" : 32,
  },
  "da-DK" : {
    "CHANGE_INPUT_STYLE" : "Skift Input-måde",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Indsæt mellemrum",
    "DELETE_GUIDE" : "Slet",
    "CLEAR_GUIDE" : "Slet alle",
    "GUIDE_font_size" : 30,
  },
  "tr-TR" : {
    "CHANGE_INPUT_STYLE" : "Giriş Şeklini Değiştir",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Boşluk Gir",
    "DELETE_GUIDE" : "Sil",
    "CLEAR_GUIDE" : "Hepsini sil",
    "GUIDE_font_size" : 32,
  },
  "it-IT" : {
    "CHANGE_INPUT_STYLE" : "Cambia modalità inserimento",
    "CHANGE_INPUT_STYLE_font_size" : 25,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Inserire spazio",
    "DELETE_GUIDE" : "Cancella",
    "CLEAR_GUIDE" : "Cancella tutto",
    "GUIDE_font_size" : 32,
  },
  "sv-SE" : {
    "CHANGE_INPUT_STYLE" : "Ändra inmatningssätt",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Infoga mellanslag",
    "DELETE_GUIDE" : "Ta bort",
    "CLEAR_GUIDE" : "Ta bort alla",
    "GUIDE_font_size" : 32,
  },
  "pt-PT" : {
    "CHANGE_INPUT_STYLE" : "Mudar estilo da entrada",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Inserir Espaço",
    "DELETE_GUIDE" : "Apagar",
    "CLEAR_GUIDE" : "Apagar tudo",
    "GUIDE_font_size" : 32,
  },
  "el-GR" : {
    "CHANGE_INPUT_STYLE" : "Αλλαγή στυλ πληκτρολόγησης",
    "CHANGE_INPUT_STYLE_font_size" : 24,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Εισαγωγή κενού",
    "DELETE_GUIDE" : "Διαγραφή",
    "CLEAR_GUIDE" : "Διαγραφή όλων",
    "GUIDE_font_size" : 32,
  },
  "et-EE" : {
    "CHANGE_INPUT_STYLE" : "Vaheta sisendi rezhiimi",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Sisesta tühik",
    "DELETE_GUIDE" : "Kustutus",
    "CLEAR_GUIDE" : "Kustutada kõik",
    "GUIDE_font_size" : 32,
  },
  "lv-LV" : {
    "CHANGE_INPUT_STYLE" : "Mainīt ievades stilu",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Ievietošanas vieta",
    "DELETE_GUIDE" : "Dzēst",
    "CLEAR_GUIDE" : "Dzēst visu",
    "GUIDE_font_size" : 32,
  },
  "lt-LT" : {
    "CHANGE_INPUT_STYLE" : "Pakeiskite įvedinio stilių",
    "CHANGE_INPUT_STYLE_font_size" : 28,
    "DELETE" : "Del",
    "SPACE_GUIDE" : "Įterpti tarpą",
    "DELETE_GUIDE" : "Naikinti",
    "CLEAR_GUIDE" : "Naikinti viską",
    "GUIDE_font_size" : 32,
  },
}
kbText[ "en-IE" ] = kbText[ "en-GB" ];
kbText[ "en-BR" ] = kbText[ "en-GB" ];
kbText[ "es-BR" ] = kbText[ "es-US" ];
kbText[ "pt-BR" ] = kbText[ "pt-PT" ];

kbText.getText = function(lang, str) {
  if (kbText[lang] && kbText[lang][str])
    return kbText[lang][str];

  switch (lang.substr(0,2)) {
  case "de":
    lang = "de-DE";
    break;
  case "es":
    lang = is_us_market ? "es-US" : "es-ES";
    break;
  case "nl":
    lang = "nl-NL";
    break;
  case "fi":
    lang = "fi-FI";
    break;
  case "fr":
    lang = is_us_market ? "fr-CA" : "fr-FR";
    break;
  case "it":
    lang = "it-IT";
    break;
  case "pt":
    lang = "pt-PT";
    break;
  default:
    lang = is_us_market ? "en-US" : "en-IE";
    break;
  }
  return kbText[lang][str];
};


var extend = function(destination, source) {
  for (var property in source)
    destination[property] = source[property];
};

var LangList = {};

if (is_us_market) {
  extend(LangList, {
          "en-US" : "English",
          "es-US" : "Español",
          "fr-CA" : "Français",
        });
} else {
  extend(LangList, {
          "en-IE" : "English",
          "es-ES" : "Español",
          "fr-FR" : "Français",
        });
}
extend(LangList, {
        "hu-HU" : "Magyar",
        "hr-HR" : "Hrvatski",
        "cs-CZ" : "Česky",
        "ru-RU" : "Русский",
        "bg-BG" : "Български",
        "ro-RO" : "Română",
        "sk-SK" : "Slovenčina",
        "sl-SI" : "Slovenščina",
        "pl-PL" : "Polski",
        "sr-YU" : "Srpski",
        "de-DE" : "Deutsch",
        "nl-NL" : "Nederlands",
        "no-NO" : "Norsk",
        "fi-FI" : "Suomi",
        "da-DK" : "Dansk",
        "tr-TR" : "Türkçe",
        "it-IT" : "Italiano",
        "sv-SE" : "Svenska",
        "pt-PT" : "Português",
        "el-GR" : "Ελληνικά",
        "et-EE" : "Eesti",
        "lv-LV" : "Latvian",
        "lt-LT" : "Lietuvių",
       });
var langlist_get_label = function(lang) {
  if (LangList[ lang ])
    return LangList[ lang ];

  switch (lang.substr(0,2)) {
  case "de":
    return LangList[ "de-DE" ];
  case "es":
    return (is_us_market ? LangList[ "es-US" ] : LangList[ "es-ES" ]);
  case "nl":
    return LangList[ "nl-NL" ];
  case "fi":
    return LangList[ "fi-FI" ];
  case "fr":
    return (is_us_market ? LangList[ "fr-CA" ] : LangList[ "fr-FR" ]);
  case "it":
    return LangList[ "it-IT" ];
  case "pt":
    return LangList[ "pt-PT" ];
  default:
    return (is_us_market ? LangList[ "en-US" ] : LangList[ "en-IE" ]);
  }
}

// type : "software" or "mobileinput", default : "mobileinput"

var create = function(type) {
  var cont = new container({});
  var keyboard_cont = new container({});
  var mobile_input_obj = new container({});
  var keyboard_change_obj = null;
  var language = null;
  var mode = null;
  var guide_translate = null;
  var hook_func = null;
  var usb_kbd = null;

  cont.components.push(keyboard_cont);
  cont.components.push(mobile_input_obj);

  send_init_event_to_sphone();

  cont.sphone_input_mode = null;
  cont.sphone_kbd_type = null;

  var create_keyboard_cont = function() {
    if (keyboard_cont.keyboard) return;

    var obj = keyboard_cont;
    obj.keyboard = new Keyboard();
    obj.components = [obj.keyboard];

    obj.translate = [0, 160, 0];
    obj.keyboard.set_keyboard(0);

    obj.enter_focus = function () {
      common_key.set_cursor(obj, obj.keyboard);
      send_enter_event_to_sphone(cont.sphone_input_mode, cont.sphone_kbd_type);
    }
    obj.leave_focus = function () {
      common_key.set_cursor(obj, null);
      send_leave_event_to_sphone();
    }
    obj.key_hook = function(up_down, key) {
      return this.cursor.keyhook(up_down, key);
    };
  }

  var create_mobile_input_obj = function() {
    if (mobile_input_obj.mobile_input) return;

    var obj = mobile_input_obj;
    obj.mobile_input = new MobileInput({});
    obj.components = [obj.mobile_input];

    obj.enter_focus = function (obj) {
      common_key.set_cursor(obj, obj.mobile_input);
      send_enter_event_to_sphone(cont.sphone_input_mode, cont.sphone_kbd_type);
    }
    obj.leave_focus = function (obj) {
      common_key.set_cursor(obj, null);
      send_leave_event_to_sphone();
    }
    obj.enable = function (obj) {
      obj.visible_p = true;
    }
    obj.disable = function (obj) {
      obj.visible_p = false;
    }
    obj.key_hook = function(up_down, key) {
      return this.cursor.keyhook(up_down, key);
    }
  }

  var get_current_obj = function() {
    if (mobile_input_obj.mobile_input && mobile_input_obj.visible_p)
      return mobile_input_obj.mobile_input;
    return keyboard_cont.keyboard;
  }

  // public functions start
  cont.set_mobile_input_func = function(func) {
    mobile_input_obj.mobile_input.setHook(func);
  };
  cont.set_keyboard_func = function(func) {
    keyboard_cont.setHook(func);
  }
  cont.set_hook_func = function(func) {
    hook_func = func;
    get_current_obj().setHook(func);
  };
  cont.getText = function() {
    var obj = get_current_obj();
    return obj.getText();
  }
  cont.setText = function(str) {
    var obj = get_current_obj();
    return obj.setText(str);
  }
  cont.hide_keyboard_change_obj = function() {
    keyboard_change_obj.visible_p = false;
  }
  cont.set_lang = function(lang) {
    language = get_software_kbd_support_lang(lang);
    keyboard_change_obj.set_lang(lang);
    language_switch_cont.set_lang(lang);
    var obj = get_current_obj();
    obj.set_lang(lang);
    set_keyboard_lang(lang);
  };
  cont.set_mode = function(m) {
    // mode : "NORMAL" or "PASSWD", default : "NORMAL"
    mode = m;
    var obj = get_current_obj();
    obj.setMode(m);
  }
  cont.set_guide_translate = function(translate) {
    guide_translate = [0, 0, 0];
    guide_translate[0] = translate[0];
    guide_translate[1] = translate[1];
    guide_translate[2] = translate[2];
    var obj = get_current_obj();
    obj.set_guide_translate(translate);
  }
  cont.set_translate = function(translate) {
    this.translate[0] = translate[0];
    this.translate[1] = translate[1];
    this.translate[2] = translate[2];
  }
  cont.reset_cursor = function() {
    cont.last_cursor = null;
  }
  cont.reset_lang = function() {
    if (get_keyboard_lang())
      cont.set_lang(get_keyboard_lang());
    else
      cont.set_lang(ureg.read("language").toString());
  }
  cont.reset_type = function() {
    var last_kb_type = get_keyboard_type();
    if (last_kb_type == null || last_kb_type == "mobileinput") {
      create_mobile_input_obj();
      keyboard_cont.visible_p = false;
      mobile_input_obj.visible_p = true;
      cont.set_guide_translate(guide_translate);
    } else {
      create_keyboard_cont();
      mobile_input_obj.visible_p = false;
      keyboard_cont.visible_p = true;
      cont.set_guide_translate(guide_translate);
    }
  }
  cont.keyhook = function(up_down, key) {
    return cont.key_hook(up_down, key);
  }
  cont.key_hook = function(up_down, key) {
    if (typeof this.cursor.key_hook == "function" && this.cursor.key_hook(up_down, key))
      return true;

    if (up_down != KEY_PRESS)
      return false;

    switch (key) {
    case TXK_UP:
      if (this.cursor != keyboard_change_obj && this.cursor != language_switch_cont) {
	common_key.set_cursor(cont, keyboard_change_obj);
	play_click_sound(0);
	return true;
      }
    }
    return false;
  }
  cont.usb_key_hook = function (stage, device, event) {
    if (!usb_kbd) {
      require("pkg_usb_keyboard");
      usb_kbd = new pkg_usb_keyboard.USB_Keyboard();
    }

    var kbd = get_current_obj();

    var ret = usb_kbd.key_hook(arguments);
    var up_down = ret.up_down;

    var convert_func = function (code) {
      switch (code) {
      case TXKB_BackSpace:
	return TXK_RETURN;
      default:
	return code;
      }
    }

    var key = usb_kbd.get_key_or_char({
      key         : ret,
      convert_func: convert_func
    });

    if (typeof key == "string") {
      if (kbd.get_in_cursor()) {
	kbd.keyhook(up_down, ret);
      }
      return;
    } else {
      switch (ret.code) {
      case TXKB_Delete:
      case TXKB_BackSpace:
	if (kbd.get_in_cursor()) {
	  kbd.keyhook(up_down, ret);
	  return;
	}
	break;
      }
    }

    pkg_usb_keyboard.call_key_hook(stage, up_down, key);
  }
  cont.free = function() {
    if (keyboard_cont.keyboard)
      keyboard_cont.keyboard.free();
    if (mobile_input_obj.mobile_input)
      mobile_input_obj.mobile_input.MobileInput.free();
    keyboard_change_obj.free();
    language_switch_cont.free();
  };
  cont.revive = function() {
    if (keyboard_cont.keyboard)
      keyboard_cont.keyboard.revive();
    if (mobile_input_obj.mobile_input)
      mobile_input_obj.mobile_input.MobileInput.revive();
    //keyboard_change_obj.revive();
    //language_switch_cont.revive();
    this.reset_lang();
  };
  // public functions end

  cont.enter_focus = function() {
    if (cont.last_cursor) {
      common_key.set_cursor(cont, cont.last_cursor);
      cont.last_cursor = null;
      return;
    }
    var obj = (function() {
		 if (mobile_input_obj.mobile_input && mobile_input_obj.visible_p)
		   return mobile_input_obj;
		 return keyboard_cont;
	       })();
    common_key.set_cursor(cont, obj);
  }
  cont.leave_focus = function() {
    common_key.set_cursor(cont, null);
  }

  cont.get_softwarekbd_obj = function () {
    return keyboard_cont;
  };
  
  cont.get_mobileinput_obj = function () {
    return mobile_input_obj;
  };

  cont.undisplay_language_switch = function () {
    language_switch_cont.visible_p = false;
  }

  cont.set_sphone_state = function (state) {
    cont.sphone_input_mode = state.input_mode;
    cont.sphone_kbd_type = state.kbd_type;
  }

  var soft_cont = new container({});
  cont.get_softwarekbd_container = function () {
    return soft_cont;
  };

  cont.set_softwarekbd_translate = function () {
    return;
  };

  cont.disable_move_kbd = function () {
    return;
  };

  cont.enable_move_kbd = function () {
    return;
  };

  cont.change_input_char_set = function () {
    return;
  };
  
  // ******************
  // Keyboad Change
  // ******************
  var create_keyboard_change_obj = function() {
    if (keyboard_change_obj) return;

    keyboard_change_obj = new container({});
    cont.components.push(keyboard_change_obj);

    keyboard_change_obj.change_cursor = new actor (
      {
	"base_col_width": 4,
	"base_col" : [[144, 144, 144, 255], [98, 98, 98, 255]],
	"cursor_width": 4,
	"translate": [97, 356, 0],
	"bg_image": [
	  keyboard_change_obj.base_image = new gbox (
	    { "width" : 350, "height": 40, "color" : [57, 56, 56, 255], }),
	  keyboard_change_obj.change_text = new gtext (
	    { "width" : 350, "height": 40, "align":CENTER,
	      "text" : kbText.getText(ureg.read("language"), "CHANGE_INPUT_STYLE"),
	      "font_size" : kbText.getText(ureg.read("language"), "CHANGE_INPUT_STYLE_font_size"),
	    }),
	],
      });
    keyboard_change_obj.components.push(keyboard_change_obj.change_cursor);

    keyboard_change_obj.set_lang = function(lang) {
      this.change_text.font_size = kbText.getText(lang, "CHANGE_INPUT_STYLE_font_size");
      setf_text(this.change_text, kbText.getText(lang, "CHANGE_INPUT_STYLE"));
    }

    keyboard_change_obj.enter_focus = function (obj) {
      common_key.set_cursor(obj, obj.change_cursor);

      if(!mobile_input_obj.mobile_input){
	create_mobile_input_obj();
	mobile_input_obj.visible_p = false;
      } else if(!keyboard_cont.keyboard){
	create_keyboard_cont();
	keyboard_cont.visible_p = false;
      }
      force_redraw();
    };

    keyboard_change_obj.leave_focus = function (obj) {
      common_key.set_cursor(obj, null);
      force_redraw();
    };

    keyboard_change_obj.enable = function (obj) {
      obj.visible_p = true;
    };

    keyboard_change_obj.disable = function (obj) {
      obj.visible_p = false;
    };

    keyboard_change_obj.free = function() {
      setf_text(this.change_text, "");
    };
    keyboard_change_obj.revive = function() {
      setf_text(this.change_text, kbText.getText(language, "CHANGE_INPUT_STYLE"));
    };

    keyboard_change_obj.action = function (obj) {
      if(keyboard_cont.visible_p == true){
	keyboard_cont.visible_p = false;
	if (language) mobile_input_obj.mobile_input.set_lang(language);
	if (mode) mobile_input_obj.mobile_input.setMode(mode);
	if (guide_translate) mobile_input_obj.mobile_input.set_guide_translate(guide_translate);
	if (hook_func) mobile_input_obj.mobile_input.setHook(hook_func);
	obj.copy_mobile_from_soft(obj);
	mobile_input_obj.visible_p = true;
	common_key.set_cursor (cont, mobile_input_obj);
	set_keyboard_type("mobileinput");
      }else{
	mobile_input_obj.visible_p = false;
	if (language) keyboard_cont.keyboard.set_lang(language);
	if (mode) keyboard_cont.keyboard.setMode(mode);
	if (guide_translate) keyboard_cont.keyboard.set_guide_translate(guide_translate);
	if (hook_func) keyboard_cont.keyboard.setHook(hook_func);
	obj.copy_soft_from_mobile(obj);
	keyboard_cont.visible_p = true;
	common_key.set_cursor (cont, keyboard_cont);
	set_keyboard_type("software");
      }
      force_redraw();
    };

    keyboard_change_obj.copy_soft_from_mobile = function (obj) {
      var Mobile_input_obj = mobile_input_obj.mobile_input.MobileInput;
      var KeyBoad_obj = keyboard_cont.keyboard;

      KeyBoad_obj.setText(Mobile_input_obj.InputArea.getText());
    };

    keyboard_change_obj.copy_mobile_from_soft = function (obj) {
      var Mobile_input_obj = mobile_input_obj.mobile_input.MobileInput;
      var KeyBoad_obj = keyboard_cont.keyboard;

      Mobile_input_obj.InputArea.set_text(KeyBoad_obj.getText());
    };

    keyboard_change_obj.key_hook = function(up_down, key) {
      if (up_down != KEY_PRESS)
	return false;

      var this_obj = this;

      switch (key) {
      case TXK_ENTER:
	this_obj.action(this_obj);
	play_click_sound(0);
	return true;
      case TXK_UP:
	cont.last_cursor = cont.cursor;
	return false;
      case TXK_DOWN:
	cont.last_cursor = null;
	if(keyboard_cont.visible_p == true)
	  common_key.set_cursor (cont, keyboard_cont);
	else
	  common_key.set_cursor (cont, mobile_input_obj);
	play_click_sound(0);
	return true;
      case TXK_LEFT:
	if (language_switch_cont.visible_p) {
	  play_click_sound(0);
	  common_key.set_cursor (cont, language_switch_cont);
	  return true;
	}
	break;
      }
      return false;
    }
  }

  // ****************************************************************************
  // * Language Switch
  // ****************************************************************************

  function LangItem(index, tra, lang, lang_lbl) {
    this.index = index;
    this.translate = tra;
    this.components = [
      this.act = new actor(
	{
	  base_col : [[144, 144, 144, 255], [144, 144, 144, 255]],
	  cursor_width : 4,
	  bg_image : [
            new gbox({ width : 200, height : 40, color : [100,100,100,255] }),
            this.label =
	      new gtext({ width : 200, color : [0,0,0,255], text : lang_lbl, align : CENTER, }),
	  ],
	}),
    ];
    this.lang = lang;
    this.lang_lbl = lang_lbl;
  }
  LangItem.prototype = new container({});
  LangItem.prototype.enter_focus = function() {
    common_key.set_cursor(this, this.act);
  };
  LangItem.prototype.leave_focus = function() {
    common_key.set_cursor(this, null);
  };
  LangItem.prototype.set_label = function(label) {
    setf_text(this.label, label);
  };
  LangItem.prototype.free = function() {
    setf_text(this.label, "");
  };
  LangItem.prototype.key_hook = function(up_down, key) {
    switch(key) {
    case TXK_UP:
      if (this.index == 0 || this.index == language_switch_cont.row+1) {
	common_key.set_cursor(language_switch_cont, language_switch_cont.btn);
	return true;
      } else if (language_item_cont.components[ this.index-1 ]) {
	common_key.set_cursor(language_switch_cont, language_item_cont.components[ this.index-1 ]);
	force_redraw();
	return true;
      }
      break;
    case TXK_DOWN:
      if (  (this.index+1) % (language_switch_cont.row+1) == 0) {
	return true;
      }

      if (language_item_cont.components[ this.index+1 ]) {
	common_key.set_cursor(language_switch_cont, language_item_cont.components[ this.index+1 ]);
	return true;
      }
      break;
    case TXK_LEFT:
      if (language_item_cont.components[ this.index-language_switch_cont.row-1 ]) {
	common_key.set_cursor(language_switch_cont,
                              language_item_cont.components[ this.index-language_switch_cont.row-1 ]);
	return true;
      }
      break;
    case TXK_RIGHT:
      if (language_item_cont.components[ this.index+language_switch_cont.row+1 ]) {
	common_key.set_cursor(language_switch_cont,
                              language_item_cont.components[ this.index+language_switch_cont.row+1 ]);
	return true;
      }
      break;
    case TXK_RETURN:
    case TXK_HOME:
      common_key.set_cursor(language_switch_cont, language_switch_cont.btn);
      language_item_cont.visible_p = false;
      language_switch_cont.selected.visible_p = false;
      force_redraw();
      return true;
    case TXK_ENTER:
      //console.log("lang = " + this.lang);
      cont.set_lang(this.lang);
      set_keyboard_lang(this.lang);
      common_key.set_cursor(language_switch_cont, language_switch_cont.btn);
      language_item_cont.visible_p = false;
      language_switch_cont.selected.visible_p = false;
      force_redraw();
      return true;
    default:
      return false;
    }
  };

  var language_switch_cont = new container({});
  var language_item_cont = new container({ translate : [-143, 308, 0], visible_p : false, });

  language_switch_cont.row = 12;
  language_switch_cont.create = function() {
    if (language_switch_cont.components.length != 0)
      return;

    cont.components.push(language_switch_cont);
    language_switch_cont.components = [
      language_switch_cont.btn = new actor(
	{
	  "base_col_width": 4,
	  "base_col" : [[144, 144, 144, 255], [98, 98, 98, 255]],
	  "cursor_width": 4,
	  "translate": [-165, 356, 0],
	  "bg_image": [
            new gbox({ "width" : 150, height : 40, "color" : [57, 56, 56, 255], }),
            language_switch_cont.label =
              new gtext({ "width" : 150, "align":CENTER, font_size : 28,
			  "text" : langlist_get_label(ureg.read("language")), }),
	    language_switch_cont.selected =
              new gbox({ "width" : 150, height : 40, "color" : [0, 0, 0, 100], visible_p : false, }),
	  ],
	}),
      language_item_cont,
    ];

    var c = 0;
    var y = 0;
    for (var i in LangList) {
      language_item_cont.components.push(
	new LangItem(c, [(c > this.row) ? 206 : 0,-46*y,0], i, ""));
      c++;
      y = (c == this.row+1) ? 0 : y+1;
    }

    language_switch_cont.btn.action = function() {
      language_item_cont.visible_p = !language_item_cont.visible_p;
      language_switch_cont.selected.visible_p = !language_switch_cont.selected.visible_p;
      force_redraw();
    };
    language_item_cont.free = function() {
      for (var i = 0; i < language_item_cont.components.length; i++) {
	language_item_cont.components[i].free();
      }
    };
    language_item_cont.set_labels = function() {
      for (var i = 0; i < language_item_cont.components.length; i++) {
	language_item_cont.components[i].set_label(
	  LangList[language_item_cont.components[i].lang]);
      }
    };
  }
  language_switch_cont.free = function() {
    setf_text(this.label, "");
    language_item_cont.free();
  }
  language_switch_cont.revive = function() {
    setf_text(this.label, langlist_get_label(ureg.read("language")));
  };
  language_switch_cont.set_lang_lbl = function(lang_lbl) {
    setf_text(this.label, lang_lbl);
  }
  language_switch_cont.set_lang = function(lang) {
    language_switch_cont.lang = lang;
    language_switch_cont.set_lang_lbl(langlist_get_label(lang));
  }
  language_switch_cont.enter_focus = function() {
    common_key.set_cursor(language_switch_cont, language_switch_cont.btn);
    language_item_cont.set_labels();
    force_redraw();
  }
  language_switch_cont.leave_focus = function() {
    common_key.set_cursor(language_switch_cont, null);
    language_item_cont.visible_p = false;
    language_switch_cont.selected.visible_p = false;
    language_item_cont.free();
    force_redraw();
  }
  language_switch_cont.key_hook = function(up_down, key) {
    if (up_down != KEY_PRESS)
      return true;

    if (this.cursor == language_switch_cont.btn) {
      switch(key) {
      case TXK_UP:
	cont.last_cursor = keyboard_change_obj;
	return false;
      case TXK_DOWN:
	if (language_item_cont.visible_p) {
	  common_key.set_cursor(language_switch_cont, language_item_cont.components[0]);
	  force_redraw();
	  play_click_sound(0);
	  return true;
	}

	var obj = (function() {
		     if (mobile_input_obj.mobile_input && mobile_input_obj.visible_p)
		       return mobile_input_obj;
		     return keyboard_cont;
		   })();
	cont.last_cursor = null;
	common_key.set_cursor (cont, obj);
	play_click_sound(0);
	return true;
      case TXK_ENTER:
	this.cursor.action();
	play_click_sound(0);
	return true;
      case TXK_RETURN:
      case TXK_LEFT:
	if (language_item_cont.visible_p) {
	  language_item_cont.visible_p = false;
	  language_switch_cont.selected.visible_p = false;
	  force_redraw();
	  play_click_sound(0);
	  return true;
	} else {
	  return false;
	}
      case TXK_RIGHT:
	common_key.set_cursor(cont, keyboard_change_obj);
	play_click_sound(0);
	return true;
      default:
	return false;
      }
    } else {
      if (this.cursor.key_hook(up_down, key)) {
	force_redraw();
	play_click_sound(0);
	return true;
      }
      return false;
    }
  };

  //cont.components.push(keyboard_cont);
  //cont.components.push(mobile_input_obj);

  if (!type)
    type = (get_keyboard_type()) ? get_keyboard_type() : "mobileinput";

  switch(type) {
  case "software":
    create_keyboard_cont();
    break;
  case "mobileinput":
    create_mobile_input_obj();
    break;
  }

  create_keyboard_change_obj();
  language_switch_cont.create();

  try {
    if (typeof nvram!="undefined") {
      if (nvram[0].read("keyboard_lang")){
	cont.set_lang(nvram[0].read("keyboard_lang"));
      }
    } else if (typeof flash_mem!="undefined") {
      if (flash_mem.read("keyboard_lang")){
	cont.set_lang(flash_mem.read("keyboard_lang"));
      }
    } else {
      console.log("[ERROR] nvram and flash_mem are not defined.");
    }
  } catch (e) {
    console.log("[ERROR] <" + e.name + "> " + e.message);
  }

  return cont;
}



// keyboard_type memory
function set_keyboard_type (keyboard) {
  try {
    if (typeof nvram!="undefined") {
      nvram[0].write("keyboard_type", keyboard);
    } else if (typeof flash_mem!="undefined") {
      flash_mem.write("keyboard_type", keyboard);
    } else {
      console.log("[ERROR] nvram and flash_mem are not defined.");
      return false;
    }
  } catch (e) {
    return false;
  }
  return true;
}
function get_keyboard_type () {
  var ret = null;
  try {
    if (typeof nvram!="undefined") {
      ret = nvram[0].read("keyboard_type");
    } else if (typeof flash_mem!="undefined") {
      ret = flash_mem.read("keyboard_type");
    } else {
      console.log("[ERROR] nvram and flash_mem are not defined.");
    }
  } catch (e) {
    ret = null;
  }
  return ret;
}

function set_keyboard_lang (lang) {
  try {
    if (typeof nvram!="undefined") {
      nvram[0].write("keyboard_lang", lang);
    } else if (typeof flash_mem!="undefined") {
      flash_mem.write("keyboard_lang", lang);
    } else {
      console.log("[ERROR] nvram and flash_mem are not defined.");
      return false;
    }
  } catch (e) {
    return false;
  }
  return true;
}
function get_keyboard_lang () {
  var ret = null;
  try {
    if (typeof nvram!="undefined") {
      ret = nvram[0].read("keyboard_lang");
    } else if (typeof flash_mem!="undefined") {
      ret = flash_mem.read("keyboard_lang");
    } else {
      console.log("[ERROR] nvram and flash_mem are not defined.");
    }
  } catch (e) {
    ret = null;
  }
  return ret;
}



////////////////////////////////////////////////////////////////////////////////
// Onscreen Keyboard
////////////////////////////////////////////////////////////////////////////////

var key_item = {
  "en-US":[ // ENGLISH same as en-IE and en-GB
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:."},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:."},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space",},
    {"func":"del", "ctrl":"delete",},
    {"func":"clr", "ctrl":"clear",},
  ],
  "es-US":[ // SPANISH same as es-ES
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "n":["ñ"], "a":["á"], "e":["é"], "i":["í"],
       "o":["ó"], "u":["ú","ü"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "N":["Ñ"], "A":["Á"], "E":["É"], "I":["Í"],
       "O":["Ó"], "U":["Ú","Ü"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "fr-CA":[ // FRENCH same as fr-FR
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["à","â","æ"], "e":["é","è","ê","ë"], "u":["ù","û","ü"],
       "i":["î","ï"], "o":["ô","œ"], "c":["ç"] }},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["À","Â","Æ"], "E":["É","È","Ê","Ë"], "U":["Ù","Û","Ü"],
       "I":["Î","Ï"], "O":["Ô","Œ"], "C":["Ç"] }},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"esp", "ctrl":"space"},
    {"func":"supp", "ctrl":"delete"},
    {"func":"eff", "ctrl":"clear"},
  ],
  "hu-HU":[ // HUNGARIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["á"], "e":["é"], "i":["í"], 
       "o":["ó","ö","ő"], "u":["ú","ü","ű"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Á"], "E":["É"], "I":["Í"], 
       "O":["Ó","Ö","Ő"], "U":["Ú","Ü","Ű"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "hr-HR":[ // CROATIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "c":["ć","č"], "d":["đ"], "s":["š"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "C":["Ć","Č"], "D":["Đ"], "S":["Š"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "cs-CZ":[ // CZECH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["á"], "c":["č"], "d":["ď"], "e":["é","ě"],
       "i":["ì"], "n":["ň"], "o":["ó"], "r":["ř"],
       "s":["š"], "t":["ť"], "u":["ú","ů"], "y":["ý"],
       "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Á"], "C":["Č"], "D":["Ď"], "E":["É","Ě"],
       "I":["Í"], "N":["Ň"], "O":["Ó"], "R":["Ř"],
       "S":["Š"], "T":["Ť"], "U":["Ú","Ů"], "Y":["Ý"],
       "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "ru-RU":[ // RUSSIAN
    {"func":"абв", "key":"абвгдежзиклмнопрстуфхцчшъыьэюя",
     "token":{
       "и":["й"], "ш":["щ"]}},
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:."},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "bg-BG":[ // BULGARIAN
    {"func":"абв", "key":"абвгдежзиклмнопрстуфхцчшъыьэюя",
     "token":{
       "и":["й"], "ш":["щ"]}},
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:."},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "ro-RO":[ // ROMANIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["â","ă"], "i":["î"], "s":["ș"], "t":["ț"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Â","Ă"], "I":["Î"], "S":["Ș"], "T":["Ț"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "sk-SK":[ // SLOVAK
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["á","ä"], "c":["č"], "d":["ď"], "e":["é"],
       "i":["í"], "l":["ĺ","ľ"], "n":["ň"], "o":["ó","ô"],
       "r":["ŕ"], "s":["š"], "t":["ť"], "u":["ú"], 
       "y":["ý"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Á","Ä"], "C":["Č"], "D":["Ď"], "E":["É"],
       "I":["Í"], "L":["Ĺ","Ľ"], "N":["Ň"], "O":["Ó","Ô"],
       "R":["Ŕ"], "S":["Š"], "T":["Ť"], "U":["Ú"], 
       "Y":["Ý"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "sl-SI":[ // SLOVENIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ä"], "c":["č","ć"], "d":["đ"], "o":["ö"],
       "s":["š"], "u":["ü"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ä"], "C":["Č","Ć"], "D":["Đ"], "O":["Ö"],
       "S":["Š"], "U":["Ü"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "pl-PL":[ // POLISH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ą"], "c":["ć"], "e":["ę"], "l":["ł"],
       "n":["ń"], "o":["ó"], "s":["ś"], "z":["ź","ż"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ą"], "C":["Ć"], "E":["Ę"], "L":["Ł"],
       "N":["Ń"], "O":["Ó"], "S":["Ś"], "Z":["Ź","Ż"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "sr-YU":[ // SERBIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "c":["ć","č"], "d":["đ"], "s":["š"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "C":["Ć","Č"], "D":["Đ"], "S":["Š"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "de-DE":[ // GERMAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ä","à"], "e":["é"], "o":["ö"], "u":["ü"], "s":["ß"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ä","À"], "E":["É"], "O":["Ö"], "U":["Ü"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space",},
    {"func":"del", "ctrl":"delete",},
    {"func":"clr", "ctrl":"clear",},
  ],
  "es-ES":[ // SPANISH same as es-ES
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "n":["ñ"], "a":["á"], "e":["é"], "i":["í"],
       "o":["ó"], "u":["ú","ü"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "N":["Ñ"], "A":["Á"], "E":["É"], "I":["Í"],
       "O":["Ó"], "U":["Ú","Ü"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "nl-NL":[ // DUTCH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token": {
       "a":["á", "â", "ä"], "e":["è", "é", "ê", "ë"], "i":["í", "ï", "ĳ"], 
       "o":["ó", "ô", "ö"], "u":["ú", "û", "ü"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token": {
       "A":["Á", "Â", "Ä"], "E":["È", "É", "Ê", "Ë"], "I":["Í", "Ï", "Ĳ"],
       "O":["Ó", "Ô", "Ö"], "U":["Ú", "Û", "Ü"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "no-NO":[ // NORWEGIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["æ", "å", "à"], "e":["é", "ê"], "o":["ø", "ó", "ò", "ô"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Æ", "Å", "À"], "E":["É", "Ê"], "O":["Ø", "Ó", "Ò", "Ô"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "fi-FI":[ // FINNISH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ä", "å"], "o":["ö"], "s":["š"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ä", "Å"], "O":["Ö"], "S":["Š"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "fr-FR":[ // FRENCH same as fr-FR
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["à","â","æ"], "e":["é","è","ê","ë"], "u":["ù","û","ü"],
       "i":["î","ï"], "o":["ô","œ"], "c":["ç"] }},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["À","Â","Æ"], "E":["É","È","Ê","Ë"], "U":["Ù","Û","Ü"],
       "I":["Î","Ï"], "O":["Ô","Œ"], "C":["Ç"] }},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "da-DK":[ // DANISH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["å","æ","á"], "e":["é"], "i":["í"],
       "o":["ø","ó"], "u":["ú"], "y":["ý"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Å","Æ","Á"], "E":["É"], "I":["Í"],
       "O":["Ø","Ó"], "U":["Ú"], "Y":["Ý"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "tr-TR":[ // TURKISH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["â"], "c":["ç"], "g":["ğ"], "i":["î","ı"],
       "o":["ö"], "s":["ş"], "u":["ü","û"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Â"], "C":["Ç"], "G":["Ğ"], "I":["Î","İ"],
       "O":["Ö"], "S":["Ş"], "U":["Ü","Û"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "it-IT":[ // ITALIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["à","á"], "e":["è","é"], "i":["ì","í","î","ï"],
       "o":["ò","ó"], "u":["ù","ú"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["À","Á"], "E":["È","É"], "I":["Ì","Í","Î","Ï"],
       "O":["Ò","Ó"], "U":["Ù","Ú"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "sv-SE":[ // SWEDISH
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ä","å","á","à"], "e":["é","ë"], 
       "o":["ö"], "u":["ü"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ä","Å","Á","À"], "E":["É","Ë"],
       "O":["Ö"], "U":["Ü"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "pt-PT":[ // PORTUGUESE
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["à","á","â","ã"], "c":["ç"], "e":["é","ê","è"],
       "i":["í"], "o":["ó","ô","õ","ò"], "u":["ú","ü"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["À","Á","Â","Ã"], "C":["Ç"], "E":["É","Ê","È"],
       "I":["Í"],"O":["Ó","Ô","Õ","Ò"], "U":["Ú","Ü"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "el-GR":[ // GREEK
    {"func":"αβγ", "key":"αβγδεζηθικλμνξοπρστυφχψω/@:.  ",},
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:."},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "et-EE":[ // ESTONIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ä"], "o":["õ","ö"], "s":["š"], 
       "u":["ü"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ä"], "O":["Õ","Ö"], "S":["Š"], 
       "U":["Ü"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "lv-LV":[ // LATVIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ā"], "c":["č"], "e":["ē"], "g":["ģ"],
       "i":["ī"], "k":["ķ"], "l":["ļ"], "n":["ņ"],
       "o":["ō"], "r":["ŗ"], "s":["š"], "u":["ū"], 
       "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ā"], "C":["Č"], "E":["Ē"], "G":["Ģ"],
       "I":["Ī"], "K":["Ķ"], "L":["Ļ"], "N":["Ņ"],
       "O":["Ō"], "R":["Ŗ"], "S":["Š"], "U":["Ū"], 
       "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ],
  "lt-LT":[ // LITHUANIAN
    {"func":"abc", "key":"abcdefghijklmnopqrstuvwxyz/@:.",
     "token":{
       "a":["ą"], "c":["č"], "e":["ę","ė"], "i":["į"],
       "s":["š"], "u":["ų","ū"], "z":["ž"]}},
    {"func":"ABC", "key":"ABCDEFGHIJKLMNOPQRSTUVWXYZ/@:.",
     "token":{
       "A":["Ą"], "C":["Č"], "E":["Ę","Ė"], "I":["Į"],
       "S":["Š"], "U":["Ų","Ū"], "Z":["Ž"]}},
    {"func":"123#!$", "key":"1234567890-?;,_!#$%&'()=~|{}[]"},
    {"func":"spc", "ctrl":"space"},
    {"func":"del", "ctrl":"delete"},
    {"func":"clr", "ctrl":"clear"},
  ]
};

key_item[ "en-GB" ] = key_item[ "en-US" ];
key_item[ "en-IE" ] = key_item[ "en-US" ];
key_item[ "en-BR" ] = key_item[ "en-GB" ];
key_item[ "es-BR" ] = key_item[ "es-US" ];
key_item[ "pt-BR" ] = key_item[ "pt-PT" ];

var get_software_kbd_support_lang = function(lang) {
  if (key_item[ lang ]) {
    return lang;
  }

  switch (lang.substr(0,2)) {
  case "de":
    return "de-DE";
  case "es":
    return (is_us_market ? "es-US" : "es-ES");
  case "nl":
    return "nl-NL";
  case "fi":
    return "fi-FI";
  case "fr":
    return (is_us_market ? "fr-CA" : "fr-FR");
  case "it":
    return "it-IT";
  case "pt":
    return "pt-PT";
  default:
    return (is_us_market ? "en-US" : "en-IE");
  }
};

function Keyboard ( force_language, hide_selectbox, guide_translate ){
  
  var object = new actor({"bg_image":[]}); 
  var inputarray = new Array();
  var inputarray_len = 0;
  var inputtext = "";
  var UserHookFunc = function(){return;};
  var language = "en-US";
  var displaymode = "NORMAL";
  var cursor_position  = 0;
  var cursor_ahead = 0;

  language = get_software_kbd_support_lang(ureg.read("language"));

  // force set language
  if (force_language != null)
    language = force_language;

  //// onload 
  var onload = function(){  
    var i=0, j=0;
    var item = null;
    var hide = false;
    if ( force_language && force_language.substr(0,2) == "en" ) {
      hide = true;
    } else {
      hide = hide_selectbox ? true : false;
    }

    // create key button
    for (i=0; i<6; i++){
      for (j=0; j<6; j++ ){
	
	if ( j == 0 ){
	  item = make_keyboard_func2(
	    [-201,-52 * i + 34 + 52 * hide ,0] );
	}else{
	  item = make_keyboard_key2(
	    [(j+1)*80-244, i * -52 + 34 + 52 * hide, 0]);
	}
	item.num = i*6+j;
	object.bg_image.push( item );
      }
    }        

    // Add arrow key.
    item = make_keyboard_key3(
      [-201+105*1-25,-278+52*hide,0]);
    object.bg_image.push( item );
    item = make_keyboard_key3(
      [-201+105*2-25,-278+52*hide,0]);
    object.bg_image.push( item );
    item = make_keyboard_key3(
      [-201+105*3-25,-278+52*hide,0]);
    object.bg_image.push( item );
    item = make_keyboard_key3(
      [-201+105*4-25,-278+52*hide,0]);
    object.bg_image.push( item );
    

    // create object
    object.textbox = make_textbox();
    object.cursor_col = [[0,0,0,0],[0,0,0,0]];
    object.base_col = [[0,0,0,0],[0,0,0,0]];
    object.cursor_obj = make_cursor();
    object.selected_obj = make_selected_cursor();
    object.cursor = object.bg_image[1];
    object.bg_image.push( object.textbox );

    if (hide != true) {
       object.selectbox = make_selectbox();
       object.bg_image.push( object.selectbox );
    }

    object.bg_image.push(object.selected_obj);
    object.bg_image.push(object.cursor_obj);

    object.guide = new container({ translate : [0, -380, 0], visible_p : false, });
    object.guide.components = [
      object.bg = new actor(
	{
	  base_col:[[100,100,100,255],[100,100,100,255]],
	  base_col_width:5,
	  bg_image:[
	    new gbox({ width:380,height:140, translate:[-20,-35,0], color:[0,0,0,255] }),
	  ]
	}),
      object.bg_inner = new actor(
	{
	  base_col:[[100,100,100,255],[100,100,100,255]],
	  base_col_width:2,
	  bg_image:[
	    new gbox({ width:371,height:131, translate:[-20,-35,0], color:[0,0,0,0] }),
	  ]
	}),
      object.guide.space_func  = new gtext(
	{ width:80, height:40, translate:[-140,0,0],
	  font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"), }),
      object.guide.delete_func = new gtext(
	{ width:80, height:40, translate:[-140,-35,0],
	  font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"), }),
      object.guide.clear_func  = new gtext(
	{ width:80, height:40, translate:[-140,-70,0],
	  font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"), }),
      object.guide.space  = new gtext(
	{ width:270, height:40, translate:[10,0,0],
	  font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"), }),
      object.guide.delete = new gtext(
	{ width:270, height:40, translate:[10,-35,0],
	  font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"), }),
      object.guide.clear  = new gtext(
	{ width:270, height:40, translate:[10,-70,0],
	  font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"), }),
    ];
    if (guide_translate) {
      object.guide.translate[0] = guide_translate[0];
      object.guide.translate[1] = guide_translate[1];
      object.guide.translate[2] = guide_translate[2];
    }
    object.bg_image.push(object.guide);

    /*
    append_timer( object.textbox, 800,
		  function(obj,count){
		    inputtext = inputarray.join("");
		    if (count%2)
		      setf_text( obj.text_obj, inputtext +"_");
		    else
		      setf_text( obj.text_obj, inputtext);
		  });
    */

    object.enter_focus = function(obj){
      this.cursor = this.bg_image[1]; //  set force default position //[a]
      this.cursor_obj.translate[0] = this.cursor.translate[0];
      this.cursor_obj.translate[1] = this.cursor.translate[1];
      this.cursor_obj.box0_obj.width = this.cursor.bg_image[0].width;
      this.cursor_obj.box1_obj.width = this.cursor.bg_image[0].width - 8;
      setf_text(this.cursor_obj.text_obj, this.cursor.text_obj.text);      
      this.cursor_obj.visible_p = true;
      if (!is_us_market)
	this.guide.visible_p = true;
    }
    object.leave_focus = function(obj){
      this.cursor_obj.visible_p = false;
      this.guide.visible_p = false;
    }
    
    return object;
  }
  
  
  
  //// public method
  object.set_keyboard = function ( mode_number ){

    // btn.key           : null or charactor.
    // btn.ctrl:         : null or special word
    // btn.token         : null or Array()
    // btn.text_obj      : text_obj 
    // btn.text_color    : text color.
    // btn.bg_color      : bg_color
    // btn.key_move      : [up,down,left,right]    
    var btn = null;
    var i = 0, j = 0;
    var num = 0;
    for (i=0; i<6; i++){
      for (j=0; j<6; j++ ){
	
	btn = object.bg_image[i*6+j];
	
	if ( j == 0 ){
	  if( key_item[language][i].ctrl ){
	    btn.bg_image[0].color = [39,39,39,255];
	    setf_text(object.guide[key_item[language][i].ctrl + "_func"],
		      key_item[language][i]["func"]);
	    setf_text(object.guide[key_item[language][i].ctrl],
		      ":  " + kbText.getText(language, key_item[language][i].ctrl.toUpperCase() + "_GUIDE"));
	    setf_text( btn.text_obj, key_item[language][i]["func"] );
	    btn.ctrl = key_item[language][i].ctrl;
	    btn.key  = null;
	  }else{
	    if ( num != mode_number) {
	      btn.bg_image[0].color = [56,56,56,255];
	      btn.bg_image[1].color = [255,255,255,60];
	    }else{
	      btn.bg_image[0].color = [56,56,56,255];
	      btn.bg_image[1].color = [255,255,255,255];
	    }
	    setf_text( btn.text_obj, key_item[language][i]["func"] );
	    btn.ctrl = num++;
	  }
	}else{	  
	  btn.key  = key_item[language][mode_number]["key"][i*5+j-1];
	  setf_text( btn.text_obj, btn.key );
	  if( !key_item[language][mode_number]["token"] || hide_selectbox )
	    btn.token = null;
	  else
	    btn.token = key_item[language][mode_number]["token"][btn.key];
	}
	
	btn.key_move = [null,null,null,null];
	if (i!=0)
	  btn.key_move[0] = object.bg_image[(i-1)*6+j];
	if (i!=5)
	  btn.key_move[1] = object.bg_image[(i+1)*6+j];
	if (j!=0)
	  btn.key_move[2] = object.bg_image[i*6+(j-1)];
	if (j!=5)
	  btn.key_move[3] = object.bg_image[i*6+(j+1)];
      }
    }

    // new line
    btn = object.bg_image[39]; 
    setf_text (btn.text_obj, ">>");
    btn.ctrl = "END";
    btn.key  = null;    
    btn.token = null;
    btn.key_move = [object.bg_image[34],null,object.bg_image[39-1],null];

    btn = object.bg_image[38];
    setf_text (btn.text_obj, ">");
    btn.ctrl = "RIGHT";
    btn.key  = null;    
    btn.token = null;
    btn.key_move = [object.bg_image[33],null,object.bg_image[38-1],object.bg_image[38+1]];

    btn = object.bg_image[37];
    setf_text (btn.text_obj, "<");
    btn.ctrl = "LEFT";
    btn.key  = null;    
    btn.token = null;
    btn.key_move = [object.bg_image[32],null,object.bg_image[37-1],object.bg_image[37+1]];

    btn = object.bg_image[36];
    setf_text (btn.text_obj, "<<");
    btn.ctrl = "HOME";
    btn.key  = null;    
    btn.token = null;
    btn.key_move = [object.bg_image[31],null,null,object.bg_image[36+1]];

    // set old key way 
    object.bg_image[30].key_move[1] = object.bg_image[36];
    object.bg_image[31].key_move[1] = object.bg_image[36];
    object.bg_image[32].key_move[1] = object.bg_image[37];
    object.bg_image[33].key_move[1] = object.bg_image[38];
    object.bg_image[34].key_move[1] = object.bg_image[39];
    object.bg_image[35].key_move[1] = object.bg_image[39];


    return true;
  }

  object.free = function() {
    var btn = null;
    for (var i=0; i<6; i++){
      for (var j=0; j<6; j++ ){

	btn = object.bg_image[i*6+j];

	if ( j == 0 ){
	  if( key_item[language][i].ctrl ){
	    setf_text(object.guide[key_item[language][i].ctrl + "_func"], "");
	    setf_text(object.guide[key_item[language][i].ctrl], "");
	    setf_text( btn.text_obj, "" );
	  }else{
	    setf_text( btn.text_obj, "" );
	  }
	} else {
	  setf_text( btn.text_obj, "" );
	}
      }
    }
    btn = object.bg_image[39];
    setf_text (btn.text_obj, "");
    btn = object.bg_image[38];
    setf_text (btn.text_obj, "");
    btn = object.bg_image[37];
    setf_text (btn.text_obj, "");
    btn = object.bg_image[36];
    setf_text (btn.text_obj, "");
  };
  object.revive = function() {
    object.set_keyboard(0);
  };

  object.init = function (num){
    if (!num) 
      num = 1;
    inputarray = [];
    inputarray_len = inputarray.length;
    inputtext = "";
    displaymode = "NORMAL";
    cursor_ahead = 0;
    cursor_position = 0;
    setf_text2();
    object.cursor = object.bg_image[num];
    object.cursor_obj.translate[0] = object.cursor.translate[0];
    object.cursor_obj.translate[1] = object.cursor.translate[1];
    object.cursor_obj.translate[2] = object.cursor.translate[2];
    force_redraw();
    return true;
  }

  object.getText = function (){
    inputtext = inputarray.join("");
    var text = "";
    for(var i=0;i<inputarray_len;i++){
      if (inputarray[i]=="  ")
	text+=" ";
      else if (typeof inputarray[i] != "undefined")
	text+=inputarray[i];
    }
    //console.log("[1] keyboard.getText() = \"" + text + "\"");
    return text;
  }

  object.setText = function (arg){   
    if (typeof arg == "undefined") return;
    inputarray = arg.split("");
    inputarray_len = inputarray.length;
    for (var i = 0; i < inputarray_len; i++) {
      if (inputarray[i] == " ")
	inputarray[i] = "  ";
    }
    inputtext = inputarray.join("");
    cursor_ahead = 0;
    cursor_position = 0;
    //this.textbox.text_obj.align = RIGHT;
    setf_text2();
    object.setCursorToEnd();
    force_redraw();
    return inputtext;
  }

  object.setCursorToEnd = function (){
    cursor_position = inputarray_len;
    while(cursor_ahead<9999) {
      var textbox = object.textbox;
      var left_array  = inputarray.slice(cursor_ahead, cursor_position);
      var left_string = left_array.join("");
      var left_width = get_text_width (textbox.left_obj, left_string);
      if (left_width > textbox.left_obj.width
	  - textbox.left_obj.margin[2] - textbox.left_obj.margin[3] -16) {
	cursor_ahead += 5;
      } else {
	break;
      }
    }
    setf_text2();
  }

  object.setHook = function(func){
    UserHookFunc = func;
    return func;
  }


  object.setMode = function (arg){
        
    if ( arg == "NORMAL" ) {
      displaymode = "NORMAL";
    } else if ( arg == "PASSWD" ) {
      displaymode = "PASSWD";
    }
    
    setf_text2();
    return displaymode;
  }

  object.set_lang = function(lang) {
    language = get_software_kbd_support_lang(lang);
    object.set_keyboard(0);
  }

  object.set_guide_translate = function(tra) {
    object.guide.translate[0] = tra[0];
    object.guide.translate[1] = tra[1] - 170;
    object.guide.translate[2] = tra[2];
  }

  object.keyhook = keyhook1;

  object.class_name = "__INPUT_OBJECT__";

  object.get_in_cursor = function () {
    return this.cursor_obj.visible_p;
  }
  
  function usbkbd_backspace () {
    if (cursor_position > 0) {
      cursor_position--;
      inputarray.splice (cursor_position, 1);
      return true;
    }
    return false;
  }
  
  function usbkbd_delete () {
    if (cursor_position < inputarray_len) {
      inputarray.splice (cursor_position, 1);
      inputarray_len = inputarray.length;
      return true;
    }
    return false;
  }

  function insert_text (chara) {
    var c_len = chara.length;

    for (var n = 0; n < c_len; n++) {
      if (inputarray.length > cursor_position) {
	inputarray.splice (cursor_position, 0, chara[n]);
	cursor_position++;
      } else {
	inputarray.push(chara[n]);
	cursor_position++;
      }
      inputarray_len = inputarray.length;
    }
  }
  
  if (ebus.kbd.supported) {
    function usb_keyboard_action (key) {
      if( ebus.kbd.supported && ((typeof key)=="object") ) {
	if (key.type == key.CHAR) {
	  insert_text(key.code);
	  return true;
	} else if (key.type == key.CONT) {
	  switch (key.code) {
	  case TXKB_Delete:
	    usbkbd_delete();
	    break;
	  case TXKB_BackSpace:
	    usbkbd_backspace();
	    break;
	  }
	  return true;
	}
      }
      return false;
    }
  }
  
  
  
  function keyhook1 (up_down, key){
    if (up_down != KEY_PRESS)
      return false;

    var ret = false;

    switch (key) {
    case TXK_UP:
      if (this.cursor.key_move[0]){
	this.cursor = this.cursor.key_move[0];
	ret = true;
      }
      break;
    case TXK_DOWN:
      if (this.cursor.key_move[1]){
	this.cursor = this.cursor.key_move[1];
	ret = true;
      }
    break;
    case TXK_LEFT:
      if (this.cursor.key_move[2]){
      this.cursor = this.cursor.key_move[2];
	ret = true;
      }
      break;
    case TXK_RIGHT:
      if (this.cursor.key_move[3]){
	this.cursor = this.cursor.key_move[3];
	ret = true;
      }
      break;
    case TXK_ENTER:
      if ( this.cursor.key!=null && this.cursor.key!= undefined){

	
	if (!this.cursor.token){
	  insert_text(this.cursor.text_obj.text);
	  UserHookFunc(this)	 
	  ret = true;
	} else {
	  
	  
	  var list = this.selectbox.btn;
	  var token = this.cursor.token;
	  setf_text(list[0].text_obj, this.cursor.key);
	  list[0].bg_obj.color[3] = 255;
	  for (var i=0;i<5;i++){
	    if (i<token.length){
	      setf_text(list[1+i].text_obj, token[i]);
	      list[1+i].bg_obj.color[3] = 255;
	    } else {
	      setf_text(list[1+i].text_obj, "");
	      list[1+i].bg_obj.color[3] = 155;
	    }
	  }
	  
	  this.selected_obj.focus_obj = list[0];
	  this.selected_num = 0;
	  
	  setf_text( this.selected_obj.text_obj,
		     this.selected_obj.focus_obj.text_obj.text);
	  
	  this.selected_obj.translate[0] = list[0].translate[0];
	  this.selected_obj.translate[1] = list[0].translate[1];
//	  this.selected_obj.translate[2] = list[0].translate[2];
	  this.selected_obj.visible_p = true;
	  this.cursor_obj.box0_obj.color = [144,144,144,255];
	  this.cursor_obj.box1_obj.color = [137,137,137,255];
	  object.keyhook = keyhook2; 
	ret = true;	  
	}
      } else {
	
	switch (this.cursor.ctrl){
	case "space":
//	  inputarray.push(" ");
	  if (inputarray_len > cursor_position) {
	    inputarray.splice (cursor_position, 0, "  "); 
	    cursor_position++;
	  } else {
	    inputarray.push("  ");
	    cursor_position++;
	  }
	  inputarray_len = inputarray.length;
	  ret = true;
	  break;
	case "delete":
//	  inputarray.pop();
	  if (inputarray_len > cursor_position) {
	    inputarray.splice (cursor_position, 1); 
	  } else {
	    inputarray.pop();
	    cursor_position--;
	    if (cursor_position < 0)
	      cursor_position = 0;
	  }
	  inputarray_len = inputarray.length;
	  UserHookFunc(this)
	  ret = true;
	  break;
	case "clear":
	  inputarray = [];
	  cursor_position = 0;
	  UserHookFunc(this)
	  ret = true;
	  break;
	case "RIGHT":
	  cursor_position++;
	  if (cursor_position > inputarray_len)
	    cursor_position = inputarray_len;
	  ret = true;
	  break;
	case "LEFT":
	  cursor_position--;
	  if (cursor_position < 0)
	    cursor_position = 0;
	  ret = true;
	  break;
	case "HOME":
	  cursor_position = 0;
	  ret = true;
	  break;
	case "END":
	  cursor_position = inputarray_len;
	  while(cursor_ahead<9999) {
	    var textbox = object.textbox;
	    var left_array  = inputarray.slice(cursor_ahead, cursor_position);
	    var left_string = left_array.join("");
	    var left_width = get_text_width (textbox.left_obj, left_string);
	    if (left_width > textbox.left_obj.width
		- textbox.left_obj.margin[2] - textbox.left_obj.margin[3] -16) {
	      cursor_ahead += 5;
	    } else {
	      break;
	    }
	  }
    
	  
	  ret = true;
	  break;
	default:
	  this.set_keyboard (this.cursor.ctrl);
	  ret = true;
	  break;
	}
	
      }
    
      inputtext = inputarray.join("");
      setf_text2();
      break;
      
    default:
      break;
    }


    if (ebus.kbd.supported) {
      var usb_ret = usb_keyboard_action (key);
      if (usb_ret) {
	UserHookFunc(this);
	inputtext = inputarray.join("");
	setf_text2();
	ret = true;
      }
    }
    

    if ( ret == true ){
      //  play_click_sound (0);
      object.cursor_obj.translate[0] = object.cursor.translate[0];
      object.cursor_obj.translate[1] = object.cursor.translate[1];
      //object.cursor_obj.translate[2] = object.cursor.translate[2];
      object.cursor_obj.box0_obj.width = object.cursor.bg_image[0].width;
      object.cursor_obj.box1_obj.width = object.cursor.bg_image[0].width - 8;		       

      object.cursor_obj.text_obj.font_size = object.cursor.text_obj.font_size;

      setf_text(
	object.cursor_obj.text_obj,
	object.cursor.text_obj.text );
//      force_redraw();
    }
    
    return ret;
  }


  function keyhook2 (up_down, key){
    if (up_down != KEY_PRESS)
      return false;
    
    var ret = false;
    switch (key) {
    case TXK_UP:
      ret = true;
      break;
    case TXK_DOWN:
      this.selected_obj.visible_p = false;
      this.cursor_obj.box0_obj.color = [46,181,243,255];
      this.cursor_obj.box1_obj.color = [46,158,226,255];
      for (var i=0;i<1+5;i++){
	setf_text(this.selectbox.btn[i].text_obj, "");
	this.selectbox.btn[i].bg_obj.color[3] = 155;
      }
      force_redraw();
      object.keyhook = keyhook1;
      ret = true;    
      break;
    case TXK_LEFT:
      if (this.selected_num>0) {
	this.selected_num--;
	this.selected_obj.translate[0] =
	  this.selectbox.btn[this.selected_num].translate[0];
	this.selected_obj.translate[1] = 
	  this.selectbox.btn[this.selected_num].translate[1];
//	this.selected_obj.translate[2] = 
//	  this.selectbox.btn[this.selected_num].translate[2];
	setf_text(this.selected_obj.text_obj, this.selectbox.btn[this.selected_num].text_obj.text);
      }
      ret = true;
      break;
    case TXK_RIGHT:
	if (this.selected_num < this.cursor.token.length) {
	  this.selected_num++;
	  this.selected_obj.translate[0] = 
	    this.selectbox.btn[this.selected_num].translate[0];
	  this.selected_obj.translate[1] = 
	    this.selectbox.btn[this.selected_num].translate[1];
//	  this.selected_obj.translate[2] = 
//	    this.selectbox.btn[this.selected_num].translate[2];
	  setf_text(this.selected_obj.text_obj, this.selectbox.btn[this.selected_num].text_obj.text);
	}
      ret = true;
      break;
    case TXK_ENTER:
      this.selected_obj.visible_p = false;
      this.cursor_obj.box0_obj.color = [46,181,243,255];
      this.cursor_obj.box1_obj.color = [46,158,226,255];
//      inputarray.push(this.selected_obj.text_obj.text)
//      cursor_position++;

      if (inputarray.length > cursor_position) {
	inputarray.splice (cursor_position, 0, this.selected_obj.text_obj.text); 
      } else {
	inputarray.push(this.selected_obj.text_obj.text);
	cursor_position++;
      }
      inputarray_len = inputarray.length;

      for (var i=0;i<1+5;i++){
	setf_text(this.selectbox.btn[i].text_obj, "");
	this.selectbox.btn[i].bg_obj.color[3] = 155;
      }
      object.keyhook = keyhook1;     
      ret = true;
      inputtext = inputarray.join("");
      setf_text2();
      UserHookFunc(this)
      ret = true;
      break;

    default:
      break;
    }
    
    if (ebus.kbd.supported) {
      var usb_ret = usb_keyboard_action (key);
      if (usb_ret) {
	UserHookFunc(this);
	inputtext = inputarray.join("");
	setf_text2();
	ret = true;
      }
    }

    return ret;
  }
  

  function setf_text2 (){

    var textbox = object.textbox;
    var left_string = "";
    var left_width = 0;

    var left_array  = inputarray.slice(cursor_ahead, cursor_position);
    var right_array  = inputarray.slice(cursor_position);
    var right_string = "";
    var text = "";


    // get left string
    left_string = "";
    switch (displaymode) {
    case "NORMAL":
      left_string = left_array.join("");
      break;
    case "PASSWD":
      var len = left_array.length;
      left_string = "";
      for (var i=0;i<len;i++) {
	left_string += "*";
      }
      break;
    default:
      left_string = left_array.join("");
      break;
    }

    // get width (left string)
    left_width = get_text_width (textbox.left_obj, left_string);

    // get right string
    right_string = "";
    switch (displaymode) {
    case "NORMAL":
      right_string = right_array.join("");
      break;
    case "PASSWD":
      var len = right_array.length;
      right_string = "";
      for (var i=0;i<len;i++) {
	right_string += "*";
      }
      break;
    default:
      right_string = right_array.join("");
      break;
    }

    // check right edge
    if (left_width > textbox.left_obj.width
	- textbox.left_obj.margin[2] - textbox.left_obj.margin[3] -16) {
      cursor_ahead += 5;
    }
    
    // min position
    if (cursor_position < cursor_ahead)
      cursor_ahead = cursor_position;
    
    // rewrite textbox & cursor position
//    if (left_string.slice(-2) == "  " || right_string.slice(0,2) == "  "){
//      text = left_string + " " + right_string;
//    } else {
      text = left_string + "  " + right_string;
//    }    
    setf_text(textbox.left_obj, text);
    textbox.cursor_obj.translate[0] = left_width - (544/2)+16;
      
  }

  // return initial object.
  return onload();
}


var make_cursor = function (  ){ 
  var item = null;

  item = new actor({
    "translate":[0,0,0],
    "cursor_col_width": 0,
    "cursor_col": [[0,0,0,0],[0,0,0,0]],
    "base_col_width": 0,
    "base_col": [[0,0,0,0],[0,0,0,0]],
    "visible_p": false,
    "bg_image": [
      new gbox({
	"height": 48,
	"width" : 76,
	"color": [46,181,243,255]}),
      new gbox({
	"translate": [0,-10,0],
	"height": 24,
	"width" : 70,
	"color": [48,158,226,255]}),
      new gtext({
	"height": 48,
	"width" : 150,
	"align": CENTER,
	"font_name": "F015T-bold",
	"color" : [0, 0, 0, 0xff]}),
    ]});

  item.box0_obj = item.bg_image[0];
  item.box1_obj = item.bg_image[1];
  item.text_obj = item.bg_image[2];

  return item;
}

var make_selected_cursor = function (  ){ 
  var item = make_cursor();
  return item;
}


var make_textbox = function (  ){ 
  var item =  new actor({
    "translate": [0,142,0],
    "cursor_col_width": 0,
    "cursor_col": [[0,0,0,0],[0,0,0,0]],
    "base_col_width": 0,
    "base_col": [[0,0,0,255],[0,0,0,255]],
    "bg_image": [
      new gbox({
	"height": 48,
	"width" : 544}),
      new gtext({ // left side 1
	"height": 48,
	"width" : 544,
	"align": LEFT,
	"margin":[ 0,0,8,24],
	"color" : [0, 0, 0, 0xff]}),
      new gbox({
	"translate": [-544/2+12+4,-2,0],
	"height": 40,
	"width": 8,
	"color" : [1,23,46,255]}),
      ]});

  item.left_obj = item.bg_image[1];
  item.cursor_obj = item.bg_image[2];
  
  return item;
}

var make_selectbox = function (  ){ 
  
  var list = new Array();
  var item = new Object();;
  var cont = null;
  var ret = null;
  

  var i = 0;
  list = new container({
    "components":[
      new gbox({ "translate":[0,86,0],
		 "width":  548,
		 "height": 55,
		 "color":  [0x53,0x53,0x53,255]}),
      new gbox({ "translate": [0,84,0],
		 "width":  540,
		 "height": 50,
		 "color":  [11,26,42,255]}),
      new gimage({
	"translate":[244,84,0],
	"src": "common/arrow_right_invisible.png",
	"width":12}),
      new gimage({
	"translate":[-244-10,84,0],
	"src": "common/arrow_right_invisible.png",
	"rotation":[180,0,0,1],
	"width":12}),

      new container({"components":[]})]});    
  
  for (i=0;i<6;i++){
    item = new container({"components":[]});
    item.translate = [i*80-280+76,84,0];
    item.components = [
      new gbox({
	"width":76,
	"height":44,
	"color":[52,52,52,155]}),
      new gtext({
	"width":76,
	"height":44,
	"align":CENTER}),	  
    ];
    item.text_obj = item.components[1];
    item.bg_obj = item.components[0];
    list.components[4].components.push( item );
  }
  list.btn = list.components[4].components;

  return list;
}




var make_keyboard_key2 = function ( position ){
  var item = new actor({
    "translate": position,
    "cursor_width": 4,
    "base_col_width": 0,
    "bg_image": [
      new gbox({
	"height": 48,
	"width" : 76,
	"color" : [0x53, 0x53, 0x53, 0xff],}),
      new gtext({ 
	"height" : 48,
	"width" : 76,
	"font_size" : 32,
	"align" : CENTER}),
    ]});

  item.text_obj = item.bg_image[1];
  item.text_color = item.bg_image[1].color;
  item.bg_color   = item.bg_image[0].color;

  return item;    
}

var make_keyboard_key3 = function ( position ){
  var item = new actor({
    "translate": position,
    "cursor_width": 4,
    "base_col_width": 6,
    "base_col": [[19,19,19,255],[19,19,19,255]],
    "bg_image": [
      new gbox({
	"height": 48-6,
	"width" : 76+20,
	"color" : [52,52,52, 0xff],}),
      new gtext({ 
	"height" : 48-6,
	"width" : 76,
	"font_size" : 32,
	"font_name": "F015T-bold",
	"align" : CENTER}),
    ]});

  item.text_obj = item.bg_image[1];
  item.text_color = item.bg_image[1].color;
  item.bg_color   = item.bg_image[0].color;

  return item;    
}



var make_keyboard_func2 = function( position ){
  var item = new actor({
    "translate": position,
    "cursor_width": 4,
    "base_col_width": 0,
    "bg_image": [
      new gbox({
	"height": 48,
	"width" : 147}),
      new gtext({ 
	"height" : 48,
	"width" : 147,
	"font_size" : 32,
	"font_name": "F015T-bold",
	"align" : CENTER}),
    ]});

  item.text_obj = item.bg_image[1];
  item.text_color = item.bg_image[1].color;
  item.bg_color   = item.bg_image[0].color;

  return item;
}



////////////////////////////////////////////////////////////////////////////////
// Mobile Input
////////////////////////////////////////////////////////////////////////////////

var CAPITAL_ITEM = null;
var CAPITAL_ITEM_LIST = {
  "en-US" : [
    ["-",",",";","'","\"","?","!","(",")","&","\\","0"],
    ["@",".","/",":","~","_","1"],
    ["A","B","C","2"],
    ["D","E","F","3"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6"],
    ["P","Q","R","S","7"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9"],
    ["*","#","$","%","=","|","{","}","[","]"],
  ],
  "es-US" : [
    ["-",",",";","'","\"","?","!","(",")","&","\\","0"],
    ["@",".","/",":","~","_","1"],
    ["A","B","C","Á","2"],
    ["D","E","F","É","3"],
    ["G","H","I","Í","4"],
    ["J","K","L","5"],
    ["M","N","O","Ñ","Ó","6"],
    ["P","Q","R","S","7"],
    ["T","U","V","Ú","Ü","8"],
    ["W","X","Y","Z","9"],
    ["*","#","$","%","=","|","{","}","[","]"],
  ],
  "fr-CA" : [
    ["-",",",";","'","\"","?","!","(",")","&","\\","0"],
    ["@",".","/",":","~","_","1"],
    ["A","B","C","À","Â","Æ","Ç","2"],
    ["D","E","F","É","È","Ê","Ë","3"],
    ["G","H","I","Î","Ï","4"],
    ["J","K","L","5"],
    ["M","N","O","Ô","Œ","6"],
    ["P","Q","R","S","7"],
    ["T","U","V","Ù","Û","Ü","8"],
    ["W","X","Y","Z","9"],
    ["*","#","$","%","=","|","{","}","[","]"],
  ],
  "en-GB" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2"],
    ["D","E","F","3"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6"],
    ["P","Q","R","S","7"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9"],
  ],
  "hu-HU" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Á"],
    ["D","E","F","3","É"],
    ["G","H","I","4","Í"],
    ["J","K","L","5"],
    ["M","N","O","6","Ó","Ö","Ő"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ú","Ü","Ű"],
    ["W","X","Y","Z","9"],
  ],
  "hr-HR" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ć","Č"],
    ["D","E","F","3","Đ"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6"],
    ["P","Q","R","S","7","Š"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9","Ž"],
  ],
  "cs-CZ" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Á","Č"],
    ["D","E","F","3","Ď","É","Ě"],
    ["G","H","I","4","Í"],
    ["J","K","L","5"],
    ["M","N","O","6","Ň","Ó"],
    ["P","Q","R","S","7","Ř","Š"],
    ["T","U","V","8","Ť","Ú","Ů"],
    ["W","X","Y","Z","9","Ý","Ž"],
  ],
  "ru-RU" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","А","Б","В","Г"],
    ["D","E","F","3","Д","Е","Ж","З"],
    ["G","H","I","4","И","Й","К","Л"],
    ["J","K","L","5","М","Н","О","П"],
    ["M","N","O","6","Р","С","Т","У"],
    ["P","Q","R","S","7","Ф","Х","Ц","Ч"],
    ["T","U","V","8","Ш","Щ","Ъ","Ы"],
    ["W","X","Y","Z","9","Ь","Э","Ю","Я"],
  ],
  "bg-BG" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","А","Б","В","Г"],
    ["D","E","F","3","Д","Е","Ж","З"],
    ["G","H","I","4","И","Й","К","Л"],
    ["J","K","L","5","М","Н","О","П"],
    ["M","N","O","6","Р","С","Т","У"],
    ["P","Q","R","S","7","Ф","Х","Ц","Ч"],
    ["T","U","V","8","Ш","Щ","Ъ","Ы"],
    ["W","X","Y","Z","9","Ь","Э","Ю","Я"],
  ],
  "ro-RO" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Â","Ă"],
    ["D","E","F","3"],
    ["G","H","I","4","Î"],
    ["J","K","L","5"],
    ["M","N","O","6"],
    ["P","Q","R","S","7","Ș"],
    ["T","U","V","8","Ț"],
    ["W","X","Y","Z","9"],
  ],
  "sk-SK" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Á","Ä","Č"],
    ["D","E","F","3","Ď","É"],
    ["G","H","I","4","Í"],
    ["J","K","L","5","Ĺ","Ľ"],
    ["M","N","O","6","Ň","Ó","Ô"],
    ["P","Q","R","S","7","Ŕ","Š"],
    ["T","U","V","8","Ť","Ú"],
    ["W","X","Y","Z","9","Ý","Ž"],
  ],
  "sl-SI" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ä","Č","Ć"],
    ["D","E","F","3","Đ"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6","Ö"],
    ["P","Q","R","S","7","Š"],
    ["T","U","V","8","Ü"],
    ["W","X","Y","Z","9","Ž"],
  ],
  "pl-PL" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ą","Ć"],
    ["D","E","F","3","Ę"],
    ["G","H","I","4"],
    ["J","K","L","5","Ł"],
    ["M","N","O","6","Ń","Ó"],
    ["P","Q","R","S","7","Ś"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9","Ź","Ż"],
  ],
  "sr-YU" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ć","Č"],
    ["D","E","F","3","Đ"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6"],
    ["P","Q","R","S","7","Š"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9","Ž"],
  ],
  "de-DE" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ä","À"],
    ["D","E","F","3","É"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6","Ö"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ü"],
    ["W","X","Y","Z","9"],
  ],
  "es-ES" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Á"],
    ["D","E","F","3","É"],
    ["G","H","I","4","Í"],
    ["J","K","L","5"],
    ["M","N","O","6","Ñ","Ó"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ú","Ü"],
    ["W","X","Y","Z","9"],
  ],
  "nl-NL" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Á","Â","Ä"],
    ["D","E","F","3","È","É","Ê","Ë"],
    ["G","H","I","4","Í","Ï","Ĳ"],
    ["J","K","L","5"],
    ["M","N","O","6","Ó","Ô","Ö"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ú","Û","Ü"],
    ["W","X","Y","Z","9"],
  ],
  "no-NO" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Æ","Å","À"],
    ["D","E","F","3","É","Ê"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6","Ø","Ó","Ò","Ô"],
    ["P","Q","R","S","7"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9"],
  ],
  "fi-FI" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ä","Å"],
    ["D","E","F","3"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6","Ö"],
    ["P","Q","R","S","7","Š"],
    ["T","U","V","8"],
    ["W","X","Y","Z","9","Ž"],
  ],
  "fr-FR" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","À","Â","Æ","Ç"],
    ["D","E","F","3","É","È","Ê","Ë"],
    ["G","H","I","4","Î","Ï"],
    ["J","K","L","5"],
    ["M","N","O","6","Ô","Œ"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ù","Û","Ü"],
    ["W","X","Y","Z","9"],
  ],
  "da-DK" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Å","Æ","Á"],
    ["D","E","F","3","É"],
    ["G","H","I","4","Í"],
    ["J","K","L","5"],
    ["M","N","O","6","Ø","Ó"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ú"],
    ["W","X","Y","Z","9","Ý"],
  ],
  "tr-TR" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Â","Ç"],
    ["D","E","F","3"],
    ["G","H","I","4","Ğ","Î","İ"],
    ["J","K","L","5"],
    ["M","N","O","6","Ö"],
    ["P","Q","R","S","7","Ş"],
    ["T","U","V","8","Ü","Û"],
    ["W","X","Y","Z","9"],
  ],
  "it-IT" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","À","Á","È","É"],
    ["D","E","F","3"],
    ["G","H","I","4","Ì","Í","Î","Ï"],
    ["J","K","L","5"],
    ["M","N","O","6","Ò","Ó"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ù","Ú"],
    ["W","X","Y","Z","9"],
  ],
  "sv-SE" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ä","Å","Á","À"],
    ["D","E","F","3","É","Ë"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6","Ö"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ü"],
    ["W","X","Y","Z","9"],
  ],
  "pt-PT" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","À","Á","Â","Ã","Ç"],
    ["D","E","F","3","É","Ê","È"],
    ["G","H","I","4","Í"],
    ["J","K","L","5"],
    ["M","N","O","6","Ó","Ô","Õ","Ò"],
    ["P","Q","R","S","7"],
    ["T","U","V","8","Ú","Ü"],
    ["W","X","Y","Z","9"],
  ],
  "el-GR" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Α","Β","Γ"],
    ["D","E","F","3","Δ","Ε","Ζ"],
    ["G","H","I","4","Η","Θ","Ι"],
    ["J","K","L","5","Κ","Λ","Μ"],
    ["M","N","O","6","Ν","Ξ","Ο"],
    ["P","Q","R","S","7","Π","Ρ","Σ"],
    ["T","U","V","8","Τ","Υ","Φ"],
    ["W","X","Y","Z","9","Χ","Ψ","Ω"],
  ],
  "et-EE" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ä"],
    ["D","E","F","3"],
    ["G","H","I","4"],
    ["J","K","L","5"],
    ["M","N","O","6","Õ","Ö"],
    ["P","Q","R","S","7","Š"],
    ["T","U","V","8","Ü"],
    ["W","X","Y","Z","9","Ž"],
  ],
  "lv-LV" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ā","Č"],
    ["D","E","F","3","Ē"],
    ["G","H","I","4","Ģ","Ī"],
    ["J","K","L","5","Ķ","Ļ"],
    ["M","N","O","6","Ņ","Ō"],
    ["P","Q","R","S","7","Ŗ","Š"],
    ["T","U","V","8","Ū"],
    ["W","X","Y","Z","9","Ž"],
  ],
  "lt-LT" : [
    ["  ","0"],
    [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]"],
    ["A","B","C","2","Ą","Č"],
    ["D","E","F","3","Ę","Ė"],
    ["G","H","I","4","Į"],
    ["J","K","L","5"],
    ["M","N","O","6"],
    ["P","Q","R","S","7","Š"],
    ["T","U","V","8","Ų","Ū"],
    ["W","X","Y","Z","9","Ž"],
  ],
};
CAPITAL_ITEM_LIST[ "en-IE" ] = CAPITAL_ITEM_LIST[ "en-GB" ];
CAPITAL_ITEM_LIST[ "en-BR" ] = CAPITAL_ITEM_LIST[ "en-GB" ];
CAPITAL_ITEM_LIST[ "es-BR" ] = CAPITAL_ITEM_LIST[ "es-US" ];
CAPITAL_ITEM_LIST[ "pt-BR" ] = CAPITAL_ITEM_LIST[ "pt-PT" ];

var set_capital_item = function(lang) {
  if (CAPITAL_ITEM_LIST[ lang ]) {
    CAPITAL_ITEM = CAPITAL_ITEM_LIST[ lang ];
    return;
  }

  switch (lang.substr(0,2)) {
  case "de":
    lang = "de-DE";
    break;
  case "es":
    lang = is_us_market ? "es-US" : "es-ES";
    break;
  case "nl":
    lang = "nl-NL";
    break;
  case "fi":
    lang = "fi-FI";
    break;
  case "fr":
    lang = is_us_market ? "fr-CA" : "fr-FR";
    break;
  case "it":
    lang = "it-IT";
    break;
  case "pt":
    lang = "pt-PT";
    break;
  default:
    lang = is_us_market ? "en-US" : "en-IE";
    break;
  }
  CAPITAL_ITEM = CAPITAL_ITEM_LIST[ lang ];
};
set_capital_item(ureg.read("language"));

const D0_ARRAY = ["-",",",";","'","\"","?","!","(",")","&","\\"];
const D1_ARRAY = ["@",".","/",":","~","_","+","<",">","^","`"];
const D10_ARRAY = ["*","#","$","%","=","|","{","}","[","]"];
const D1_EU_ARRAY = [".","?","!",",","1",";",":","-","_","'","\"","(",")","@","/","~","=","#","$","%","&","|","{","}","[","]","<",">","*","\\","+","^","`"];

var SMALL_ITEM = null;
var SMALL_ITEM_LIST = {
  "en-US" : [
    D0_ARRAY.concat(["0"]),
    D1_ARRAY.concat(["1"]),
    ["a","b","c","2"],
    ["d","e","f","3"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6"],
    ["p","q","r","s","7"],
    ["t","u","v","8"],
    ["w","x","y","z","9"],
    D10_ARRAY,
  ],
  "es-US" : [
    D0_ARRAY.concat(["0"]),
    D1_ARRAY.concat(["1"]),
    ["a","b","c","á","2"],
    ["d","e","f","é","3"],
    ["g","h","i","í","4"],
    ["j","k","l","5"],
    ["m","n","o","ñ","ó","6"],
    ["p","q","r","s","7"],
    ["t","u","v","ú","ü","8"],
    ["w","x","y","z","9"],
    D10_ARRAY,
  ],
  "fr-CA" : [
    D0_ARRAY.concat(["0"]),
    D1_ARRAY.concat(["1"]),
    ["a","b","c","à","â","æ","ç","2"],
    ["d","e","f","é","è","ê","ë","3"],
    ["g","h","i","î","ï","4"],
    ["j","k","l","5"],
    ["m","n","o","ô","œ","6"],
    ["p","q","r","s","7"],
    ["t","u","v","ù","û","ü","8"],
    ["w","x","y","z","9"],
    D10_ARRAY,
  ],
  "en-GB" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2"],
    ["d","e","f","3"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6"],
    ["p","q","r","s","7"],
    ["t","u","v","8"],
    ["w","x","y","z","9"],
  ],
  "hu-HU" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","á"],
    ["d","e","f","3","é"],
    ["g","h","i","4","í"],
    ["j","k","l","5"],
    ["m","n","o","6","ó","ö","ő"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ú","ü","ű"],
    ["w","x","y","z","9"],
  ],
  "hr-HR" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ć","č"],
    ["d","e","f","3","đ"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6"],
    ["p","q","r","s","7","š"],
    ["t","u","v","8"],
    ["w","x","y","z","9","ž"],
  ],
  "cs-CZ" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","á","č"],
    ["d","e","f","3","ď","é","ě"],
    ["g","h","i","4","ì"],
    ["j","k","l","5"],
    ["m","n","o","6","ň","ó"],
    ["p","q","r","s","7","ř","š"],
    ["t","u","v","8","ť","ú","ů"],
    ["w","x","y","z","9","ý","ž"],
  ],
  "ru-RU" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","а","б","в","г"],
    ["d","e","f","3","д","е","ж","з"],
    ["g","h","i","4","и","й","к","л"],
    ["j","k","l","5","м","н","о","п"],
    ["m","n","o","6","р","с","т","у"],
    ["p","q","r","s","7","ф","х","ц","ч"],
    ["t","u","v","8","ш","щ","ъ","ы"],
    ["w","x","y","z","9","ь","э","ю","я"],
  ],
  "bg-BG" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","а","б","в","г"],
    ["d","e","f","3","д","е","ж","з"],
    ["g","h","i","4","и","й","к","л"],
    ["j","k","l","5","м","н","о","п"],
    ["m","n","o","6","р","с","т","у"],
    ["p","q","r","s","7","ф","х","ц","ч"],
    ["t","u","v","8","ш","щ","ъ","ы"],
    ["w","x","y","z","9","ь","э","ю","я"],
  ],
  "ro-RO" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","â","ă"],
    ["d","e","f","3"],
    ["g","h","i","4","î"],
    ["j","k","l","5"],
    ["m","n","o","6"],
    ["p","q","r","s","7","ș"],
    ["t","u","v","8","ț"],
    ["w","x","y","z","9"],
  ],
  "sk-SK" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","á","ä","č"],
    ["d","e","f","3","ď","é"],
    ["g","h","i","4","í"],
    ["j","k","l","5","ĺ","ľ"],
    ["m","n","o","6","ň","ó","ô"],
    ["p","q","r","s","7","ŕ","š"],
    ["t","u","v","8","ť","ú"],
    ["w","x","y","z","9","ý","ž"],
  ],
  "sl-SI" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ä","č","ć"],
    ["d","e","f","3","đ"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6","ö"],
    ["p","q","r","s","7","š"],
    ["t","u","v","8","ü"],
    ["w","x","y","z","9","ž"],
  ],
  "pl-PL" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ą","ć"],
    ["d","e","f","3","ę"],
    ["g","h","i","4"],
    ["j","k","l","5","ł"],
    ["m","n","o","6","ń","ó"],
    ["p","q","r","s","7","ś"],
    ["t","u","v","8"],
    ["w","x","y","z","9","ź","ż"],
  ],
  "sr-YU" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ć","č"],
    ["d","e","f","3","đ"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6"],
    ["p","q","r","s","7","š"],
    ["t","u","v","8"],
    ["w","x","y","z","9","ž"],
  ],
  "de-DE" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ä","à"],
    ["d","e","f","3","é"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6","ö"],
    ["p","q","r","s","7","ß"],
    ["t","u","v","8","ü"],
    ["w","x","y","z","9"],
  ],
  "es-ES" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","á"],
    ["d","e","f","3","é"],
    ["g","h","i","4","í"],
    ["j","k","l","5"],
    ["m","n","o","6","ñ","ó"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ú","ü"],
    ["w","x","y","z","9"],
  ],
  "nl-NL" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","á","â","ä"],
    ["d","e","f","3","è","é","ê","ë"],
    ["g","h","i","4","í","ï","ĳ"],
    ["j","k","l","5"],
    ["m","n","o","6","ó","ô","ö"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ú","û","ü"],
    ["w","x","y","z","9"],
  ],
  "no-NO" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","æ","å","à"],
    ["d","e","f","3","é", "ê"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6","ø","ó","ò","ô"],
    ["p","q","r","s","7"],
    ["t","u","v","8"],
    ["w","x","y","z","9"],
  ],
  "fi-FI" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ä","å"],
    ["d","e","f","3"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6","ö"],
    ["p","q","r","s","7","š"],
    ["t","u","v","8"],
    ["w","x","y","z","9","ž"],
  ],
  "fr-FR" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","à","â","æ","ç"],
    ["d","e","f","3","é","è","ê","ë"],
    ["g","h","i","4","î","ï"],
    ["j","k","l","5"],
    ["m","n","o","6","ô","œ"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ù","û","ü"],
    ["w","x","y","z","9"],
  ],
  "da-DK" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","å","æ","á"],
    ["d","e","f","3","é"],
    ["g","h","i","4","í"],
    ["j","k","l","5"],
    ["m","n","o","6","ø","ó"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ú"],
    ["w","x","y","z","9","ý"],
  ],
  "tr-TR" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","â","ç"],
    ["d","e","f","3"],
    ["g","h","i","4","ğ","î","ı"],
    ["j","k","l","5"],
    ["m","n","o","6","ö"],
    ["p","q","r","s","7","ş"],
    ["t","u","v","8","ü","û"],
    ["w","x","y","z","9"],
  ],
  "it-IT" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","à","á"],
    ["d","e","f","3","è","é"],
    ["g","h","i","4","ì","í","î","ï"],
    ["j","k","l","5"],
    ["m","n","o","6","ò","ó"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ù","ú"],
    ["w","x","y","z","9"],
  ],
  "sv-SE" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ä","å","á","à"],
    ["d","e","f","3","é","ë"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6","ö"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ü"],
    ["w","x","y","z","9"],
  ],
  "pt-PT" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","à","á","â","ã","ç"],
    ["d","e","f","3","é","ê","è"],
    ["g","h","i","4","í"],
    ["j","k","l","5"],
    ["m","n","o","6","ó","ô","õ","ò"],
    ["p","q","r","s","7"],
    ["t","u","v","8","ú","ü"],
    ["w","x","y","z","9"],
  ],
  "el-GR" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","α","β","γ"],
    ["d","e","f","3","δ","ε","ζ"],
    ["g","h","i","4","η","θ","ι"],
    ["j","k","l","5","κ","λ","μ"],
    ["m","n","o","6","ν","ξ","ο"],
    ["p","q","r","s","7","π","ρ","σ"],
    ["t","u","v","8","τ","υ","φ"],
    ["w","x","y","z","9","χ","ψ","ω"],
  ],
  "et-EE" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ä"],
    ["d","e","f","3"],
    ["g","h","i","4"],
    ["j","k","l","5"],
    ["m","n","o","6","õ","ö"],
    ["p","q","r","s","7","š"],
    ["t","u","v","8","ü"],
    ["w","x","y","z","9","ž"],
  ],
  "lv-LV" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ā","č"],
    ["d","e","f","3","ē"],
    ["g","h","i","4","ģ","ī"],
    ["j","k","l","5","ķ","ļ"],
    ["m","n","o","6","ņ","ō"],
    ["p","q","r","s","7","ŗ","š"],
    ["t","u","v","8","ū"],
    ["w","x","y","z","9","ž"],
  ],
  "lt-LT" : [
    ["  ","0"],
    D1_EU_ARRAY,
    ["a","b","c","2","ą","č"],
    ["d","e","f","3","ę","ė"],
    ["g","h","i","4","į"],
    ["j","k","l","5"],
    ["m","n","o","6"],
    ["p","q","r","s","7","š"],
    ["t","u","v","8","ų","ū"],
    ["w","x","y","z","9","ž"],
  ],
};
SMALL_ITEM_LIST[ "en-IE" ] = SMALL_ITEM_LIST[ "en-GB" ];
SMALL_ITEM_LIST[ "en-BR" ] = SMALL_ITEM_LIST[ "en-GB" ];
SMALL_ITEM_LIST[ "es-BR" ] = SMALL_ITEM_LIST[ "es-US" ];
SMALL_ITEM_LIST[ "pt-BR" ] = SMALL_ITEM_LIST[ "pt-PT" ];


var set_small_item = function(lang) {
  if (SMALL_ITEM_LIST[ lang ]) {
    SMALL_ITEM = SMALL_ITEM_LIST[ lang ];
    return;
  }

  switch (lang.substr(0,2)) {
  case "de":
    lang = "de-DE";
    break;
  case "es":
    lang = is_us_market ? "es-US" : "es-ES";
    break;
  case "nl":
    lang = "nl-NL";
    break;
  case "fi":
    lang = "fi-FI";
    break;
  case "fr":
    lang = is_us_market ? "fr-CA" : "fr-FR";
    break;
  case "it":
    lang = "it-IT";
    break;
  case "pt":
    lang = "pt-PT";
    break;
  default:
    lang = is_us_market ? "en-US" : "en-IE";
    break;
  }
  SMALL_ITEM = SMALL_ITEM_LIST[ lang ];
};
set_small_item(ureg.read("language"));

const DISPLAY_ITEM = is_us_market ?
[
  ["0","- ,","0","- ,"],
  ["1","@.","1","@."],
  ["2","ABC","2","abc"],
  ["3","DEF","3","def"],
  ["4","GHI","4","ghi"],
  ["5","JKL","5","jkl"],
  ["6","MNO","6","mno"],
  ["7","PQRS","7","pqrs"],
  ["8","TUV","8","tuv"],
  ["9","WXYZ","9","wxyz"],
  ["LAST","*$%","*","*$%"],
  [" -","]","#","]"],
] :
[
  ["0","]","0","]"],
  ["1",".?!,","1",".?!,"],
  ["2","ABC","2","abc"],
  ["3","DEF","3","def"],
  ["4","GHI","4","ghi"],
  ["5","JKL","5","jkl"],
  ["6","MNO","6","mno"],
  ["7","PQRS","7","pqrs"],
  ["8","TUV","8","tuv"],
  ["9","WXYZ","9","wxyz"],
  ["","","",""],
  ["","","",""],
];

////////////////////////////////////////////////////////////////////////////////////////////////////
// number button
function DrawNum(init,arraynum,bg_font,this_stage,chara_font) {
  this.base = container;
  this.base (init);
  this.arraynum = arraynum;

  var this_obj = this;
  
  this_obj.btn_actor = new actor ({
    "base_col_width": 0,
    "bg_image": [
      this.base_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"src": "common/teleinput_base.png",
      }),
      this.enter_cursor_image = new gpolygon({
	"translate":[-159/2, 81/2, 0],
	"visible_p":false,
	"color":[197,197,197,255],
	"vertex":[0,-2,0,
		  0,-77,0,
		  2,0,0,
		  2,-79,0,
		  155,0,0,
		  155,-79,0,
		  157,-2,0,
		  157,-77,0,],
      }),
      this.enter_frame_image = new gimage({
	"src": "common/teleinput_cover.png",
	"visible_p":false,
      }),
      this.bg_num_image = new gtext({
	"translate":[0,4,0],
	"text": DISPLAY_ITEM[arraynum][0],
	"width": 100,
	"font_size": bg_font,
	"color":[32,32,32,255],
	"align":CENTER
      }),
      this.character_image = new gtext({
	"translate":[0,4,0],
	"text": DISPLAY_ITEM[arraynum][3],
	"width": 152,
	"font_size": chara_font,
	"align":CENTER,
	"rotation" : [0.0, 0.0, 0.0, 1.0],
      }),
      this.number_image = new gtext({
	"translate":[0,4,0],
	"text": DISPLAY_ITEM[arraynum][2],
	"width": 100,
	"font_size": 80,
	"align":CENTER,
	"visible_p":false,
      }),
      this.bl_character_image = new gtext({
	"translate":[0,4,0],
	"text": DISPLAY_ITEM[arraynum][3],
	"width": 152,
	"font_size": chara_font,
	"color":[0,0,0,255],
	"align":CENTER,
	"rotation" : [0.0, 0.0, 0.0, 1.0],
	"visible_p" : false,
      }),
      this.bl_number_image = new gtext({
	"translate":[0,4,0],
	"text": DISPLAY_ITEM[arraynum][2],
	"width": 100,
	"font_size": 80,
	"color":[0,0,0,255],
	"align":CENTER,
	"visible_p":false,
      }),
    ],
  });

  this.btn_name = DISPLAY_ITEM[arraynum][0];
  this.components.push(this_obj.btn_actor);
  this.count = 0;
  this.array_num = arraynum;
  this.instance = this_stage;
  if(this.array_num == 10 || this.array_num == 11){
    setf_text(this.bg_num_image,"");
  }
}

DrawNum.prototype = new container({});

DrawNum.prototype.free = function() {
  this.base_image.src = "";
  this.enter_frame_image.src = "";
  setf_text(this.bg_num_image, "");
  setf_text(this.character_image, "");
  setf_text(this.number_image, "");
  setf_text(this.bl_character_image, "");
  setf_text(this.bl_number_image, "");
};
DrawNum.prototype.revive = function() {
  this.base_image.src = "common/teleinput_base.png";
  this.enter_frame_image.src = "common/teleinput_cover.png";
  if (this.array_num != 10 && this.array_num != 11) {
    setf_text(this.bg_num_image, DISPLAY_ITEM[this.arraynum][0]);
  }
  setf_text(this.character_image, DISPLAY_ITEM[this.arraynum][3]);
  setf_text(this.number_image, DISPLAY_ITEM[this.arraynum][2]);
  setf_text(this.bl_character_image, DISPLAY_ITEM[this.arraynum][3]);
  setf_text(this.bl_number_image, DISPLAY_ITEM[this.arraynum][2]);
};

DrawNum.prototype.enter_object = function(){
  var this_obj = this;
  var hide_time = 1500;

  this_obj.enter_cursor_image.visible_p = true;
  this_obj.enter_frame_image.visible_p = true;
  this_obj.enter_cursor_image.color[3] = 255;

  if(this_obj.character_image.visible_p ==  true){
    this_obj.character_image.visible_p =  false;
    this_obj.bl_character_image.visible_p = true;
  }else if(this_obj.number_image.visible_p ==  true){
    this_obj.number_image.visible_p =  false;
    this_obj.bl_number_image.visible_p =  true;
  }

  delete_timer(this_obj.enter_cursor_image);

  if(this_obj.instance.Btn_ColorKey2.number_image.visible_p == true ||
     this_obj.btn_name == " -"){
    append_timer(this_obj.enter_cursor_image, 50,
		 function(obj, count){
		   if(count > 7){
		     this_obj.force_end_enter();
		   }
		   force_redraw();
		 });
  } else {

    this_obj.bg_num_image.visible_p = false;
    append_timer(this_obj.enter_cursor_image, 50,
		 function(obj, count){
		   if(count > hide_time/50){
		     this_obj.force_end_enter();
		   }else{
		     this_obj.enter_cursor_image.color[3] -= Math.floor(255/(hide_time/50));
		   }
		   force_redraw();
		 });
  }
}

DrawNum.prototype.force_end_enter = function(){
  var this_obj = this;

  if(this_obj.enter_cursor_image.visible_p == true) {
    this_obj.count = 0;

    this_obj.enter_cursor_image.visible_p = false;
    this_obj.enter_frame_image.visible_p = false;

    if(this_obj.bl_character_image.visible_p ==  true){
      this_obj.bl_character_image.visible_p = false;
      this_obj.character_image.visible_p = true;
      this_obj.bg_num_image.visible_p = true;
      this_obj.instance.InputArea.stop_timer();
    }else if(this_obj.bl_number_image.visible_p ==  true){
      this_obj.bl_number_image.visible_p =  false;
      this_obj.number_image.visible_p =  true;
    }
    delete_timer(this_obj.enter_cursor_image);
  }
}

DrawNum.prototype.character_input = function(){
  var this_obj = this;
  if(this_obj.instance.Btn_ColorKey2.number_image.visible_p == true){
    this_obj.number_mode_input(this_obj.instance.InputArea);
  }else if(this_obj.instance.Btn_ColorKey2.small_image.visible_p == true){
    this_obj.small_mode_input(this_obj.instance.InputArea);
  }else{
    this_obj.capital_mode_input(this_obj.instance.InputArea);
  }
}

DrawNum.prototype.number_mode_input = function(input_obj){
  var this_obj = this;

  switch (this_obj.btn_name) {
  case "LAST":
    this_obj.instance.InputArea.insert_text("*");
    break;
  case " -":
    this_obj.instance.InputArea.insert_text("#");
    break;
  default:
    this_obj.instance.InputArea.insert_text(this_obj.btn_name);
    break;
  }
  this_obj.instance.InputArea.UserHookFunc();
}

DrawNum.prototype.capital_mode_input = function(input_obj){
  var this_obj = this;
  switch (this_obj.btn_name) {
  case " -":
    this_obj.instance.InputArea.insert_text("  ");
    break;
  default:
    if(this_obj.count == 0){
      this_obj.instance.InputArea.timer_flag = true;
      this_obj.instance.InputArea.insert_text(CAPITAL_ITEM[this_obj.array_num][this_obj.count]);
    }else{
      if(CAPITAL_ITEM[this_obj.array_num][this_obj.count] == null)
	this_obj.count = 0;
      this_obj.instance.InputArea.timer_flag = true;
      this_obj.instance.InputArea.overwrite_text(CAPITAL_ITEM[this_obj.array_num][this_obj.count]);
    }
    this_obj.instance.InputArea.input_timer(this_obj,CAPITAL_ITEM[this_obj.array_num][this_obj.count]);
    this_obj.count++;
    break;
  }
}

DrawNum.prototype.small_mode_input = function(input_obj){
  var this_obj = this;
  switch (this_obj.btn_name) {
  case " -":
    this_obj.instance.InputArea.insert_text("  ");
    break;
  default:
    if(this_obj.count == 0){
      this_obj.instance.InputArea.timer_flag = true;
      this_obj.instance.InputArea.insert_text(SMALL_ITEM[this_obj.array_num][this_obj.count]);
    }else{
      if(SMALL_ITEM[this_obj.array_num][this_obj.count] == null)
	this_obj.count = 0;
      this_obj.instance.InputArea.timer_flag = true;
      this_obj.instance.InputArea.overwrite_text(SMALL_ITEM[this_obj.array_num][this_obj.count]);
    }
    this_obj.instance.InputArea.input_timer(this_obj,SMALL_ITEM[this_obj.array_num][this_obj.count]);
    this_obj.count++;
    break;
  }
}

DrawNum.prototype.display_small = function(){
  var this_obj = this;
  if(!(this_obj.array_num == 10 || this_obj.array_num == 11)){
    this_obj.bg_num_image.visible_p = true;
    setf_text(this_obj.character_image,DISPLAY_ITEM[this_obj.array_num][3]);
    setf_text(this_obj.bl_character_image,DISPLAY_ITEM[this_obj.array_num][3]);
  }
  this_obj.character_image.visible_p = true;
  this_obj.number_image.visible_p = false;
}

DrawNum.prototype.display_capital= function(){
  var this_obj = this;
  if(!(this_obj.array_num == 10 || this_obj.array_num == 11)){
    setf_text(this_obj.character_image,DISPLAY_ITEM[this_obj.array_num][1]);
    setf_text(this_obj.bl_character_image,DISPLAY_ITEM[this_obj.array_num][1]);
  }
}

DrawNum.prototype.display_number = function(){
  var this_obj = this;
  this_obj.bg_num_image.visible_p = false;
  this_obj.number_image.visible_p = true;
  this_obj.character_image.visible_p = false;
}

///////////////////////////////////////////////////////////////////////////////////////////////////
// color button
function DrawCol(init,mode_text,col,this_stage,font,width) {
  this.base = container;
  this.base (init);
  this.mode_text = mode_text;

  this.btn_actor = new actor ({
    "base_col_width": 0,
    "bg_image": [
      this.base_image = new gbox({
	"width": width,
	"height": 49,
	"color": [56, 56, 56, 255],
      }),
      this.frame_cursor_image = new gbox({
	"width": width,
	"height": 49,
	"color": [218, 218, 218, 255],
	"visible_p" : false,
      }),
      this.up_cursor_image = new gbox({
	"width": width - 6,
	"height": 44,
	"color": [197, 197, 197, 255],
	"visible_p" : false,
      }),
      this.down_cursor_image = new gbox({
	"width": width - 6,
	"height": 22,
	"color": [176, 176, 176, 255],
	"translate" : [0.0, -12.25, 0.0],
	"visible_p" : false,
      }),
       this.color_image = new gbox({
	 "width": 10,
	 "height": 38,
	 "color": COLOR_KEY[col].COLOR,
	 "translate" : [-(width/2 - 5 - 10), 0.0, 0.0],
      }),
      this.mode_image = new gtext({
	"text": mode_text,
	"width": 200,
	"font_size": font,
	"align":CENTER
      }),
      this.small_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"translate":[10,0,0],
	"src":"common/abc-1.png"
      }),
      this.capital_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"translate":[10,-2,0],
	"visible_p" : false,
	"src":"common/ABC.png"
      }),
      this.number_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"translate":[10,0,0],
	"visible_p" : false,
	"src":"common/123.png"
      }),
      this.bl_small_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"translate":[10,0,0],
	"visible_p" : false,
	"src":"common/bl_abc.png"
      }),
      this.bl_capital_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"translate":[10,-2,0],
	"visible_p" : false,
	"src":"common/bl_ABC-1.png"
      }),
      this.bl_number_image = new gimage({
	"draw_type": CIRCUMSCRIBED,
	"translate":[10,0,0],
	"visible_p" : false,
	"src":"common/bl_123.png"
      }),
      this.bl_mode_image = new gtext({
	"text": mode_text,
	"width": 200,
	"color" : [0,0,0,255],
	"font_size": font,
	"visible_p" : false,
	"align":CENTER
      }),
    ], 
  });

  this.components.push(this.btn_actor);
  this.btn_symbol = mode_text;
  this.instance = this_stage;
  switch(this.btn_symbol){
  case "<":
  case ">":
    this.arrow_off_image = new container({
      "components":[
	this.arrow_stick = new gbox({
	  "translate" : [4,0,0],
	  "width" : 15*2,
	  "height" : 4*2,
	}),
      ],
    });

    this.arrow_on_image = new container({
      "visible_p": false,
      "components":[
	this.bl_arrow_stick = new gbox({
	  "color":[ 0, 0, 0, 255],
	  "translate" : [ 4, 0, 0],
	  "width" : 15*2,
	  "height" : 4*2,
	}),
      ],
    });

    if( this.btn_symbol == "<" ){
      this.arrow_triangle = new gpolygon({
	"translate" : [-3*2,0,0],
	"vertex":[-7/2*2, 0, 0,
                  5/2*2, -12/2*2, 0,
                  5/2*2, 12/2*2, 0,],
      });
      this.bl_arrow_triangle = new gpolygon({
	"color" :[0, 0, 0, 255],
	"translate" : [-3*2,0,0],
	"vertex":[-7/2*2, 0, 0,
                  5/2*2, -12/2*2, 0,
                  5/2*2, 12/2*2, 0,],
      });
      this.arrow_stick.translate[0] = 13;
      this.bl_arrow_stick.translate[0] = 13;
    }else{
      this.arrow_triangle = new gpolygon({
	"translate" : [12*2,0,0],
	"vertex":[7/2*2, 0, 0,
                  -5/2*2, 12/2*2, 0,
                  -5/2*2, -12/2*2, 0,],
      });
      this.bl_arrow_triangle = new gpolygon({
	"color" :[0, 0, 0, 255],
	"translate" : [12*2,0,0],
	"vertex":[7/2*2, 0, 0,
                  -5/2*2, 12/2*2, 0,
                  -5/2*2, -12/2*2, 0,],
      });
    }

    this.arrow_off_image.components.push(this.arrow_triangle);
    this.arrow_on_image.components.push(this.bl_arrow_triangle);
    this.components.push(this.arrow_on_image, this.arrow_off_image);

    setf_text(this.mode_image, "");
    setf_text(this.bl_mode_image, "");
    this.small_image.visible_p = false;
    break;
  case "ABC   abc":
    setf_text(this.mode_image,"");
    setf_text(this.bl_mode_image,"");
    break;
  case "Del":
  case "Supp":
    this.small_image.visible_p = false;
    break; 
  }
}

DrawCol.prototype = new container({});
DrawCol.prototype.free = function() {
  setf_text(this.mode_image, "");
  this.small_image.src = "";
  this.capital_image.src = "";
  this.number_image.src = "";
  this.bl_small_image.src = "";
  this.bl_capital_image.src = "";
  this.bl_number_image.src = "";
  setf_text(this.bl_mode_image, "");
};
DrawCol.prototype.revive = function() {
  setf_text(this.mode_image, this.mode_text);
  this.small_image.src = "common/abc-1.png";
  this.capital_image.src = "common/ABC.png";
  this.number_image.src = "common/123.png";
  this.bl_small_image.src = "common/bl_abc.png";
  this.bl_capital_image.src = "common/bl_ABC-1.png";
  this.bl_number_image.src = "common/bl_123.png";
  setf_text(this.bl_mode_image, this.mode_text);

  switch(this.btn_symbol){
  case "<":
  case ">":
    setf_text(this.mode_image, "");
    setf_text(this.bl_mode_image, "");
    break;
  case "ABC   abc":
    setf_text(this.mode_image,"");
    setf_text(this.bl_mode_image,"");
    break;
  }
};

DrawCol.prototype.enter_object = function(up_down){
  var this_obj = this;
  this_obj.frame_cursor_image.visible_p = true;
  this_obj.up_cursor_image.visible_p = true;
  this_obj.down_cursor_image.visible_p = true;

  if (this_obj.btn_symbol == "<" ||
      this_obj.btn_symbol == ">"){
    this_obj.arrow_on_image.visible_p = true;
    this_obj.arrow_off_image.visible_p = false;
  }else  if (this_obj.btn_symbol == "ABC   abc"){
    if(this_obj.small_image.visible_p == true &&
       this_obj.bl_small_image.visible_p == false){
      this_obj.bl_small_image.visible_p = true;
      this_obj.small_image.visible_p = false;
    }else if(this_obj.capital_image.visible_p == true &&
	     this_obj.bl_capital_image.visible_p == false){
      this_obj.bl_capital_image.visible_p = true;
      this_obj.capital_image.visible_p = false;
    }else if(this_obj.number_image.visible_p == true &&
	     this_obj.bl_number_image.visible_p == false){
      this_obj.bl_number_image.visible_p = true;
      this_obj.number_image.visible_p = false;
    }
  }else{
    this_obj.bl_mode_image.visible_p = true;
    this_obj.mode_image.visible_p = false;
    this_obj.instance.InputArea.stop_timer();
  }

  delete_timer(this_obj.down_cursor_image);

  append_timer(this_obj.down_cursor_image, 50,
	       function(obj, count){
		 if(count > 7){
		   this_obj.force_end_enter();
		 }
		 force_redraw();
	       });
}

DrawCol.prototype.force_end_enter = function(){
  var this_obj = this;

  if(this_obj.frame_cursor_image.visible_p == true){
    this_obj.frame_cursor_image.visible_p = false;
    this_obj.up_cursor_image.visible_p = false;
    this_obj.down_cursor_image.visible_p = false;

    if (this_obj.btn_symbol == "<" ||
	this_obj.btn_symbol == ">"){
      this_obj.arrow_off_image.visible_p = true;
      this_obj.arrow_on_image.visible_p = false;
    }else  if (this_obj.btn_symbol == "ABC   abc"){
      if(this_obj.bl_small_image.visible_p == true){
	this_obj.small_image.visible_p = true;
	this_obj.bl_small_image.visible_p = false;
      }else if(this_obj.bl_capital_image.visible_p == true){
	this_obj.capital_image.visible_p = true;
	this_obj.bl_capital_image.visible_p = false;
      }else if(this_obj.bl_number_image.visible_p == true){
	this_obj.number_image.visible_p = true;
	this_obj.bl_number_image.visible_p = false;
      }
    }else{
      this_obj.mode_image.visible_p = true;
      this_obj.bl_mode_image.visible_p = false;
    }
    delete_timer(this_obj.down_cursor_image);
  }
}

DrawCol.prototype.switch_input_mode = function(input_area){
  var this_obj = this;

  if(this_obj.bl_small_image.visible_p == true){
    this_obj.bl_capital_image.visible_p = true;
    this_obj.bl_small_image.visible_p = false;

    for (var i = 0; i < this_obj.instance.Keyboad.components.length; i++) {
      this_obj.instance.Keyboad.components[i].display_capital();
    }

  }else if(this_obj.bl_capital_image.visible_p == true){
    this_obj.bl_number_image.visible_p = true;
    this_obj.bl_capital_image.visible_p = false;

    for (var i = 0; i < this_obj.instance.Keyboad.components.length; i++) {
      this_obj.instance.Keyboad.components[i].display_number();
    }

  }else{
    this_obj.bl_small_image.visible_p = true;
    this_obj.bl_number_image.visible_p = false;

    for (var i = 0; i < this_obj.instance.Keyboad.components.length; i++) {
      this_obj.instance.Keyboad.components[i].display_small();
    }

  }
}

DrawCol.prototype.long_push_left = function(obj){
  var this_obj = obj;
  
  if(this_obj.instance.ColorButton.key_count.length == 8){
    this_obj.instance.ColorButton.key_count = [];
    this_obj.instance.InputArea.move_cursor_home();
  }else if(this_obj.instance.ColorButton.key_count.length > 4){
    this_obj.instance.InputArea.move_cursor_left(3);
  }else{
    this_obj.instance.InputArea.move_cursor_left(1);
  }
}

DrawCol.prototype.long_push_right = function(obj){
  var this_obj = obj;
  
  if(this_obj.instance.ColorButton.key_count.length == 8){
    this_obj.instance.ColorButton.key_count = [];
    this_obj.instance.InputArea.move_cursor_end();
  }else if(this_obj.instance.ColorButton.key_count.length > 4){
    this_obj.instance.InputArea.move_cursor_right(3);
  }else{
    this_obj.instance.InputArea.move_cursor_right(1);
  }
}

///////////////////////////////////////////////////////////////////////////////////////////////////
// input area
function DrawArea(init,this_stage) {
  this.base = container;
  this.base (init);
  
  this.translate[1] = 300;
  this.area_actor = new actor ({
    "base_col_width": 0,
    "cursor_width": 4,
    "in_cursor": false,
    "bg_image": [
      this.area_image = new gbox({
	"width": 544,
	"height": 48,
      }),
    ],
  });
  this.input_text_image = new gtext({
    "text": "",
    "width": 544,
    "height": 48,
    "color":[0, 0, 0, 255],
    "margin":[ 0,0,8,24],
    "align":LEFT
  }),
  this.cursor_image = new gbox({
    "translate": [-544/2+12+4,-2,0],
    "height": 40,
    "width": 8,
    "color" : [1,23,46,255]
  }),

  this.components.push(this.area_actor,this.cursor_image,this.input_text_image);
  this.UserHookFunc = function(){};
  this.inputarray = [];
  this.cursor_ahead = 0;
  this.cursor_position = 0;
  this.timer_flag = false;
  this.instance = this_stage;
}

DrawArea.prototype = new container({});

DrawArea.prototype.delete_text = function (){
  var this_obj = this;
  if(this_obj.cursor_position < this_obj.inputarray.length){
    this_obj.inputarray.splice (this_obj.cursor_position, 1);
  }else{
    this_obj.inputarray.pop();
    this_obj.cursor_position = this_obj.inputarray.length;
  }
  this_obj.update_text();
};

DrawArea.prototype.clear_text = function (){
  var this_obj = this;
  this_obj.inputarray = [];
  setf_text(this_obj.input_text_image, this_obj.inputarray.join(""));
  this_obj.cursor_image.translate[0] = -544/2+12+4;
  this_obj.cursor_position = this_obj.inputarray.length;
  this_obj.cursor_ahead = 0;
};

DrawArea.prototype.insert_text = function (chara){
  var this_obj = this;

  if(this_obj.cursor_position < this_obj.inputarray.length){
    this_obj.inputarray.splice (this_obj.cursor_position, 0, chara);
  }else{
    this_obj.inputarray.push(chara);
  }
  this_obj.cursor_position++;

  this_obj.update_text(true);
};

DrawArea.prototype.insert_sphone_text = function (chara){
  var this_obj = this;

  var c_len = chara.length;

  for (var n = 0; n < c_len; n++) {
    if(this_obj.cursor_position < this_obj.inputarray.length){
      this_obj.inputarray.splice (this_obj.cursor_position, 0, chara[n]);
    }else{
      this_obj.inputarray.push(chara[n]);
    }
    this_obj.cursor_position++;
  }

  this_obj.update_text(true);
};

DrawArea.prototype.overwrite_text = function (chara){
  var this_obj = this;
  if(this_obj.cursor_position < this_obj.inputarray.length){
    this_obj.inputarray.splice (this_obj.cursor_position - 1, 1);
    this_obj.inputarray.splice (this_obj.cursor_position - 1, 0, chara);
  }else{
    this_obj.inputarray.pop();
    this_obj.inputarray.push(chara);
  }
  this_obj.update_text(true);
};

DrawArea.prototype.usb_back_space = function (){
  var this_obj = this;
  if(this_obj.cursor_position > 0){
    this_obj.cursor_position--;
    this_obj.inputarray.splice (this_obj.cursor_position, 1);
    this_obj.update_text();
  }
};

DrawArea.prototype.usb_delete = function (){
  var this_obj = this;
  if(this_obj.cursor_position < this_obj.inputarray.length){
    this_obj.inputarray.splice (this_obj.cursor_position, 1);
    this_obj.update_text();
  }
};

DrawArea.prototype.place_cursor = function(input_array, inputting){
  var this_obj = this;
  var left_width =
    (function() {
       if (this_obj.instance.MobileInput.mode == "PASSWD")
	 return get_text_width (this_obj.input_text_image,
				password_mode_string(input_array, inputting));
       return get_text_width (this_obj.input_text_image, input_array.join(""));
     })();

  this_obj.cursor_image.translate[0] = left_width - (544/2)+16;
};

DrawArea.prototype.input_timer = function(pushed_key,current_chara){
  var this_obj = this;
  var hide_time = 1500;

  var current_chara_length = get_text_width (this_obj.input_text_image, current_chara);
  this_obj.cursor_image.width = current_chara_length;
  this_obj.cursor_image.translate[0] -= current_chara_length/2 + 8;
  this_obj.cursor_image.color[0] = 180;
  this_obj.cursor_image.color[1] = 180;
  this_obj.cursor_image.color[2] = 180;
  this_obj.cursor_image.color[3] = 255;

  delete_timer(this_obj.cursor_image);
  append_timer(this_obj.cursor_image, 50,
	       function(obj, count){
		 if(count > hide_time/50){
		   delete_timer(obj);
		   //this_obj.stop_timer();
		   leave_object(this_obj.instance);
		 }else{
		   this_obj.cursor_image.color[3] -= Math.floor(255/(hide_time/50));
		 }
	       });


};

DrawArea.prototype.stop_timer = function () {
  var this_obj = this;

  this_obj.cursor_image.width = 8;
  this_obj.cursor_image.color = [0, 0, 0, 255];

  this_obj.timer_flag = false;

  this_obj.update_text();
  delete_timer(this_obj.cursor_image);

  this_obj.UserHookFunc();
}

DrawArea.prototype.getText = function () {
  var text = "";

  if (this.timer_flag == true) {
    var array = this.inputarray.slice(0);

    if(this.instance.MobileInput.InputArea.cursor_position
       < this.instance.MobileInput.InputArea.inputarray.length){
      array.splice(this.instance.MobileInput.InputArea.cursor_position - 1, 1);
    }else{
      array.pop();
    }

    for(var i = 0; i < array.length; i++){
      if (array[i]=="  ")
	text+=" ";
      else if (typeof array[i] != "undefined")
	text+=array[i];
    }
    //console.log("[1] mobile_input.getText() = \"" + text + "\" : input_flag = true");
    return text;

  }else{

    for(var i = 0; i < this.inputarray.length; i++){
      if (this.inputarray[i] == "  ")
	text+=" ";
      else if (typeof this.inputarray[i] != "undefined")
      text+= this.inputarray[i];
    }
    //console.log("[2] mobile_input.getText() = \"" + text + "\"");
    return text;
  }
};

DrawArea.prototype.getText_array = function () {
  return this.inputarray;
};

DrawArea.prototype.setHook = function (func) {
  this.UserHookFunc = func;
};

DrawArea.prototype.move_cursor_home = function () {
  var this_obj = this;

  if(this_obj.cursor_ahead > 0){
    this_obj.cursor_ahead = 0;
  }
  if(this_obj.cursor_position > 0){
    this_obj.cursor_position = 0;
    this_obj.update_text();
  }
};

DrawArea.prototype.move_cursor_left = function (interval) {
  var this_obj = this;

  if(this_obj.cursor_position > 0) {
    this_obj.cursor_position -= interval;
    if(this_obj.cursor_position < 0) {
      this_obj.cursor_position = 0;
    }
    this_obj.update_text();
  }
}

DrawArea.prototype.move_cursor_right = function (interval) {
  var this_obj = this;

  if(this_obj.cursor_position < this_obj.inputarray.length){
    this_obj.cursor_position += interval;
    if(this_obj.cursor_position > this_obj.inputarray.length) {
      this_obj.cursor_position = this_obj.inputarray.length;
    }
    this_obj.update_text();
  }
}

DrawArea.prototype.move_cursor_end = function () {
  var this_obj = this;
  
  this_obj.cursor_position = this_obj.inputarray.length;
  
  while(this_obj.cursor_ahead < 9999){
    var left_array  = this_obj.inputarray.slice(this_obj.cursor_ahead, this_obj.cursor_position);
    var left_string = left_array.join("");
    var left_width = get_text_width (this_obj.input_text_image, left_string);
    
    if (left_width > 544 - 48) {
      this_obj.cursor_ahead += 5;
    } else {
      break;
    }
  }
  this_obj.update_text();
}

DrawArea.prototype.set_text = function (text_string) {
  var this_obj = this;

  if(typeof text_string == "string"){
    this_obj.cursor_ahead = 0;
    this_obj.inputarray = text_string.split("");
    for (var i = 0; i < this_obj.inputarray.length; i++) {
      if (this_obj.inputarray[i] == " ")
	this_obj.inputarray[i] = "  ";
    }
    this_obj.cursor_position = this_obj.inputarray.length;
    this_obj.move_cursor_end();
  }
}

DrawArea.prototype.update_text = function (inputting) {
  var this_obj = this;

  var left_array  = this_obj.inputarray.slice(this_obj.cursor_ahead, this_obj.cursor_position);
  var right_array  = this_obj.inputarray.slice(this_obj.cursor_position);
  var left_string = left_array.join("");
  var right_string = right_array.join("");
  var text = "";
  var left_width = 0;

  this_obj.place_cursor(left_array, inputting);

  if (this.instance.MobileInput.mode == "PASSWD") {
    left_string = password_mode_string(left_array, inputting);
    right_string = password_mode_string(right_array);
  }

  if(this_obj.timer_flag == true){
    text = left_string + right_string;
  }else{
    text = left_string + "  " + right_string;
  }
  setf_text(this_obj.input_text_image,text);

  left_width = get_text_width (this_obj.input_text_image, left_string);
  if (left_width > this_obj.input_text_image.width
      - this_obj.input_text_image.margin[2] - this_obj.input_text_image.margin[3] -16) {
    this_obj.cursor_ahead += 5;
  }
  if (this_obj.cursor_position <= (this_obj.cursor_ahead + 1) ){
    if (this_obj.cursor_ahead >= 5) {
      this_obj.cursor_ahead -= 5;
    } else {
      this_obj.cursor_ahead = 0;
    }
  }
}

var password_mode_string = function(array, but_last) {
  if (array.length == 0) return "";

  var str = "";
  var length = but_last ? array.length-1 : array.length;
  for (var i = 0; i < length; i++) {
    str += "*";
  }
  if (but_last)
    str += array[length];
  //console.log("password_mode_string = " + str);
  return str;
}

/////////////////////////////////////////////////////////////////////
// utility function
// create actor
//create MobileInput Object
var createMobileInput = function(object){
  var cntnr = new container ({"translate": [0.0, 0.0, 0.0]});

  cntnr.InputArea = new DrawArea({},object);

  cntnr.Keyboad = new container ({
    "translate": [0.0, 169.0, 0.0],
    "components": [
      cntnr.Btn_D1     = new DrawNum({
	"translate": [-167.0, -88 * 0, 0.0]
      }, 1, 80, cntnr, 42),
      cntnr.Btn_D2       = new DrawNum({
 	"translate": [0.0, -88 * 0, 0.0]
      }, 2,  80, cntnr, 42),
      cntnr.Btn_D3       = new DrawNum({
	"translate": [167.0, -88 * 0, 0.0]
      }, 3,  80, cntnr, 42),
      cntnr.Btn_D4       = new DrawNum({
	"translate": [-167, -88 * 1, 0.0]
      }, 4,  80, cntnr, 42),
      cntnr.Btn_D5       = new DrawNum({
	"translate": [0.0, -88 * 1, 0.0]
      }, 5,  80, cntnr, 42),
      cntnr.Btn_D6       = new DrawNum({
	"translate": [167, -88 * 1, 0.0]
      }, 6,  80, cntnr, 42),
      cntnr.Btn_D7       = new DrawNum({
	"translate": [-167.0, -88 * 2, 0.0]
      }, 7,  80, cntnr, 42),
      cntnr.Btn_D8       = new DrawNum({
	"translate": [0.0, -88 * 2, 0.0]
      }, 8,  80, cntnr, 42),
      cntnr.Btn_D9       = new DrawNum({
	"translate": [167.0, -88 * 2, 0.0]
      }, 9,  80, cntnr, 42),
      cntnr.Btn_Asterisk = new DrawNum({
	"translate": [-167.0, -88 * 3, 0.0]
      }, 10, 45, cntnr, 42),
      cntnr.Btn_D0       = new DrawNum({
	"translate": [0.0, -88 * 3, 0.0]
      }, 0,  80, cntnr, 42),
      cntnr.Btn_Sharp    = new DrawNum({
	"translate": [167.0, -88 * 3, 0.0]
      }, 11, 200, cntnr, 42),
    ]
  });
  
  cntnr.Btn_Sharp.character_image.rotation[0] = -90.0;
  cntnr.Btn_Sharp.character_image.translate[0] = 5.0;
  cntnr.Btn_Sharp.character_image.translate[1] = -10.0;
  cntnr.Btn_Asterisk.number_image.translate[1] = -10.0;
  cntnr.Btn_Sharp.bl_character_image.rotation[0] = -90.0;
  cntnr.Btn_Sharp.bl_character_image.translate[0] = 10.0;
  cntnr.Btn_Sharp.bl_character_image.translate[0] = 5.0;
  cntnr.Btn_Sharp.bl_character_image.translate[1] = -10.0;
  cntnr.Btn_Asterisk.bl_number_image.translate[1] = -10.0;

  if (!is_us_market) {
    cntnr.Btn_Sharp.visible_p = false;
    cntnr.Btn_Asterisk.visible_p = false;
    cntnr.Btn_D0.character_image.rotation[3] = 1;
    cntnr.Btn_D0.character_image.rotation[0] = -90;
    cntnr.Btn_D0.character_image.translate[0] = 5.0;
    cntnr.Btn_D0.character_image.translate[1] = -10.0;
    cntnr.Btn_D0.character_image.rotation[3] = 1;
    cntnr.Btn_D0.bl_character_image.rotation[0] = -90.0;
    cntnr.Btn_D0.bl_character_image.translate[0] = 10.0;
    cntnr.Btn_D0.bl_character_image.translate[0] = 5.0;
    cntnr.Btn_D0.bl_character_image.translate[1] = -10.0;
  }
  
  cntnr.ColorButton = new container ({
    "translate": [0.0, 243.0, 0.0],
    "components": [
      cntnr.Btn_ColorKey0  = new DrawCol({
	"translate": [-217.0, 0.0, 0.0]
      }, "<", 0, cntnr, 32, 112),
      cntnr.Btn_ColorKey1  = new DrawCol({
	"translate": [-99.0, 0.0, 0.0]
      }, ">", 1, cntnr, 32, 112),
      cntnr.Btn_ColorKey2   = new DrawCol({
	"translate": [54.0, 0.0, 0.0]
      }, "ABC   abc" , 2, cntnr, 32,183),
      cntnr.Btn_ColorKey3 = new DrawCol({
	"translate": [213.0, 0.0, 0.0]	
      }, kbText.getText(ureg.read("language"),"DELETE") , 3, cntnr, 32, 123),
    ],
  });

  cntnr.ColorButton.key_count = [];

  cntnr.Guide = new container({ translate : [0, -210, 0], visible_p : false, });
  cntnr.Guide.components = [
    new actor(
      {
	base_col:[[100,100,100,255],[100,100,100,255]],
	base_col_width:5,
	bg_image:[
	  new gbox({ width:380,height:140, translate:[-20,-35,0], color:[0,0,0,255] }),
	  ]
      }),
    new actor(
      {
	base_col:[[100,100,100,255],[100,100,100,255]],
	base_col_width:2,
	bg_image:[
	  new gbox({ width:371,height:131, translate:[-20,-35,0], color:[0,0,0,0] }),
	]
      }),
    cntnr.Guide.delete_func = new gtext(
      {	width:80, height:40, translate:[-140,-35,0],
	font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"),
	text:kbText.getText(ureg.read("language"),"DELETE"), }),
    cntnr.Guide.delete = new gtext(
      { width:250, height:40, translate:[5,-35,0],
	font_size:kbText.getText(ureg.read("language"),"GUIDE_font_size"),
	text:":  " + kbText.getText(ureg.read("language"),"DELETE_GUIDE"), }),
  ];

  cntnr.components = [
    cntnr.Keyboad,
    cntnr.ColorButton,
    cntnr.InputArea,
    cntnr.Guide,
  ];

  cntnr.free = function() {
    var i = 0;
    for (i = 0; i < cntnr.Keyboad.components.length; i++) {
      cntnr.Keyboad.components[i].free();
    }
    for (i = 0; i < cntnr.ColorButton.components.length; i++) {
      cntnr.ColorButton.components[i].free();
    }
    cntnr.InputArea.set_text("");
    setf_text(cntnr.Guide.delete_func, "");
    setf_text(cntnr.Guide.delete, "");
  };
  cntnr.revive = function() {
    var i = 0;
    for (i = 0; i < cntnr.Keyboad.components.length; i++) {
      cntnr.Keyboad.components[i].revive();
    }
    for (i = 0; i < cntnr.ColorButton.components.length; i++) {
      cntnr.ColorButton.components[i].revive();
    }
    setf_text(cntnr.Guide.delete_func, kbText.getText(ureg.read("language"),"DELETE"));
    setf_text(cntnr.Guide.delete, ":  " + kbText.getText(ureg.read("language"),"DELETE_GUIDE"));
  };

  return cntnr;
}

var TenKeyAction = function (this_obj, pushed_key){
  switch (pushed_key){
  case TXK_D1:
    this_obj.MobileInput.Btn_D1.enter_object();
    this_obj.MobileInput.Btn_D1.character_input();
    break;
  case TXK_D2:
    this_obj.MobileInput.Btn_D2.enter_object();
    this_obj.MobileInput.Btn_D2.character_input();
    break;
  case TXK_D3:
    this_obj.MobileInput.Btn_D3.enter_object();
    this_obj.MobileInput.Btn_D3.character_input();
    break;
  case TXK_D4:
    this_obj.MobileInput.Btn_D4.enter_object();
    this_obj.MobileInput.Btn_D4.character_input();
    break;
  case TXK_D5:
    this_obj.MobileInput.Btn_D5.enter_object();
    this_obj.MobileInput.Btn_D5.character_input();
    break;
  case TXK_D6:
    this_obj.MobileInput.Btn_D6.enter_object();
    this_obj.MobileInput.Btn_D6.character_input();
    break;
  case TXK_D7:
    this_obj.MobileInput.Btn_D7.enter_object();
    this_obj.MobileInput.Btn_D7.character_input();
    break;
  case TXK_D8:
    this_obj.MobileInput.Btn_D8.enter_object();
    this_obj.MobileInput.Btn_D8.character_input();
    break;
  case TXK_D9:
    this_obj.MobileInput.Btn_D9.enter_object();
    this_obj.MobileInput.Btn_D9.character_input();
    break;
  case TXK_ASTERISK:
    if (!is_us_market) return;
    this_obj.MobileInput.Btn_Asterisk.enter_object();
    this_obj.MobileInput.Btn_Asterisk.character_input();
    break;
  case TXK_D0:
    this_obj.MobileInput.Btn_D0.enter_object();
    this_obj.MobileInput.Btn_D0.character_input();
    break;
  case TXK_SHARP:
    if (!is_us_market) return;
    this_obj.MobileInput.Btn_Sharp.enter_object();
    this_obj.MobileInput.Btn_Sharp.character_input();
    break;
  }
}

function leave_object (obj, pushed_key){
  if(pushed_key != COLOR_KEY[0].KEY_CODE)
    obj.MobileInput.Btn_ColorKey0.force_end_enter();
  if(pushed_key != COLOR_KEY[1].KEY_CODE)
    obj.MobileInput.Btn_ColorKey1.force_end_enter();
  if(pushed_key != COLOR_KEY[2].KEY_CODE)
    obj.MobileInput.Btn_ColorKey2.force_end_enter();
  if(pushed_key != COLOR_KEY[3].KEY_CODE)
    obj.MobileInput.Btn_ColorKey3.force_end_enter();
  if(pushed_key != TXK_D1)
    obj.MobileInput.Btn_D1.force_end_enter();
  if(pushed_key != TXK_D2)
    obj.MobileInput.Btn_D2.force_end_enter();
  if(pushed_key != TXK_D3)
    obj.MobileInput.Btn_D3.force_end_enter();
  if(pushed_key != TXK_D4)
    obj.MobileInput.Btn_D4.force_end_enter();
  if(pushed_key != TXK_D5)
    obj.MobileInput.Btn_D5.force_end_enter();
  if(pushed_key != TXK_D6)
    obj.MobileInput.Btn_D6.force_end_enter();
  if(pushed_key != TXK_D7)
    obj.MobileInput.Btn_D7.force_end_enter();
  if(pushed_key != TXK_D8)
    obj.MobileInput.Btn_D8.force_end_enter();
  if(pushed_key != TXK_D9)
    obj.MobileInput.Btn_D9.force_end_enter();
  if(pushed_key != TXK_ASTERISK)
    obj.MobileInput.Btn_Asterisk.force_end_enter();
  if(pushed_key != TXK_D0)
    obj.MobileInput.Btn_D0.force_end_enter();
  if(pushed_key != TXK_SHARP)
    obj.MobileInput.Btn_Sharp.force_end_enter();
}

function MobileInput (init) {
  this.base = container;
  this.base (init);

  var this_obj = this; 
  this_obj.MobileInput = createMobileInput(this_obj);

  this.MobileInput.mode = "NORMAL";

  this.components = [
    this_obj.MobileInput,
  ];

  this.class_name = "__INPUT_OBJECT__";
}

MobileInput.prototype = new container({});

MobileInput.prototype.getText = function (){
  return this.MobileInput.InputArea.getText();
}

MobileInput.prototype.setText = function (text){
  return this.MobileInput.InputArea.set_text(text);
}

MobileInput.prototype.setHook = function (func){
  this.MobileInput.InputArea.setHook(func);
}

MobileInput.prototype.enter_focus = function (obj) {
  var this_obj = this;
  this_obj.MobileInput.InputArea.area_actor.in_cursor = true;
  if (!is_us_market)
    this_obj.MobileInput.Guide.visible_p = true;
}

MobileInput.prototype.get_in_cursor = function (obj) {
  return this.MobileInput.InputArea.area_actor.in_cursor;
}

MobileInput.prototype.leave_focus = function (obj) {
  var this_obj = this;
  this_obj.MobileInput.InputArea.area_actor.in_cursor = false;
  this_obj.MobileInput.Guide.visible_p = false;
}

MobileInput.prototype.set_guide_translate = function(tra) {
  var this_obj = this;
  this_obj.MobileInput.Guide.translate[0] = tra[0];
  this_obj.MobileInput.Guide.translate[1] = tra[1];
  this_obj.MobileInput.Guide.translate[2] = tra[2];
}

MobileInput.prototype.set_lang = function(lang) {
  set_capital_item(lang);
  set_small_item(lang);

  SMALL_ITEM[0] = is_us_market ? D0_ARRAY.concat(["0"]) : ["  ","0"];
  SMALL_ITEM[1] = is_us_market ? D1_ARRAY.concat(["1"]) : D1_EU_ARRAY;
  SMALL_ITEM[10] = is_us_market ? D10_ARRAY : [];
  CAPITAL_ITEM[0] = SMALL_ITEM[0]
  CAPITAL_ITEM[1] = SMALL_ITEM[1];
  CAPITAL_ITEM[10] = SMALL_ITEM[10];

  setf_text(this.MobileInput.Btn_ColorKey3.mode_image, kbText.getText(lang, "DELETE"));
  setf_text(this.MobileInput.Btn_ColorKey3.bl_mode_image, kbText.getText(lang, "DELETE"));
  setf_text(this.MobileInput.Guide.delete, ":  " + kbText.getText(lang, "DELETE_GUIDE"));
};

MobileInput.prototype.setMode = function(mode) {
  this.MobileInput.mode = mode;
};

MobileInput.prototype.keyhook = function (up_down, key) {
  var this_obj = this;
  return this_obj.key_hook(up_down, key);
}

MobileInput.prototype.key_hook = function (up_down, key) {
  var this_obj = this;

  this_obj.MobileInput.ColorButton.key_count.push(up_down);

  switch(key){
  case COLOR_KEY[0].KEY_CODE:
  case COLOR_KEY[1].KEY_CODE:
    if(up_down == KEY_UP)
      this_obj.MobileInput.ColorButton.key_count = [];
    break;
  default:
    this_obj.MobileInput.ColorButton.key_count = [];
    break;
  }

  if (up_down != KEY_PRESS) {
    return true;
  }

  switch (key){
  case TXK_ENTER:
    leave_object(this_obj, key);
    return true;
  case TXK_UP:
  case TXK_RETURN:
  case TXK_DOWN:
    leave_object(this_obj, key);
    break;
  case TXK_LEFT:
    leave_object(this_obj, key);
    if (this_obj.MobileInput.InputArea.cursor_position != 0){
      this_obj.MobileInput.InputArea.move_cursor_left(1);
      return true;
    }
    break;
  case TXK_RIGHT:
    if(this_obj.MobileInput.InputArea.timer_flag == true){
      leave_object(this_obj, key);
      return true;
    } else {
      leave_object(this_obj, key);
      if (this_obj.MobileInput.InputArea.cursor_position != this_obj.MobileInput.InputArea.inputarray.length){
	this_obj.MobileInput.InputArea.move_cursor_right(1);
	return true;
      }
    }
    break;
  case COLOR_KEY[0].KEY_CODE:
    leave_object(this_obj, key);
    this_obj.MobileInput.Btn_ColorKey0.enter_object(up_down);
    this_obj.MobileInput.Btn_ColorKey0.long_push_left(this_obj.MobileInput.Btn_ColorKey0);
    return true;
  case COLOR_KEY[1].KEY_CODE:
    if(this_obj.MobileInput.InputArea.timer_flag == true){
      this_obj.MobileInput.Btn_ColorKey1.enter_object(up_down);
    } else {
      this_obj.MobileInput.Btn_ColorKey1.enter_object(up_down);
      this_obj.MobileInput.Btn_ColorKey1.long_push_right(this_obj.MobileInput.Btn_ColorKey1);
    }
    leave_object(this_obj, key);
    return true;
  case COLOR_KEY[2].KEY_CODE:
    leave_object(this_obj, key);
    this_obj.MobileInput.Btn_ColorKey2.enter_object(up_down);
    this_obj.MobileInput.Btn_ColorKey2.switch_input_mode(this_obj.MobileInput.InputArea);
    return true;
  case COLOR_KEY[3].KEY_CODE:
    if(this_obj.MobileInput.InputArea.timer_flag == true){
      this_obj.MobileInput.InputArea.move_cursor_left(1);
    }
    this_obj.MobileInput.InputArea.delete_text();
    leave_object(this_obj, key);
    this_obj.MobileInput.Btn_ColorKey3.enter_object(up_down);
    return true;
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
  case TXK_D0:
  case TXK_SHARP:
    leave_object(this_obj, key);
    TenKeyAction(this_obj, key);
    return true;
  }

  if( ebus.kbd.supported && ((typeof key)=="object") ) {
    if (key.type == key.CHAR) {
      this.MobileInput.InputArea.insert_sphone_text(key.code);
      this.MobileInput.InputArea.update_text(false);
      this.MobileInput.InputArea.UserHookFunc();
    } else if (key.type == key.CONT) {
      switch (key.code) {
      case TXKB_Delete:
	this.MobileInput.InputArea.usb_delete();
	this.MobileInput.InputArea.UserHookFunc();
	break;
      case TXKB_BackSpace:
	this.MobileInput.InputArea.usb_back_space();
	this.MobileInput.InputArea.UserHookFunc();
	break;
      }
    } else {
      return false;
    }
    return true;
  }

  return false;
}


function send_init_event_to_sphone () {
//  console.log(">>> call send_init_event_to_sphone in pkg_keyboard.js");
  if (ebus.smartphone.supported) {
    ebus.smartphone.set_keyboard_type(SPHONE_KEYBOARD_TYPE_NONE);
    ebus.smartphone.set_string_input_mode(SPHONE_STRING_INPUT_NONE);
  }
}

function send_enter_event_to_sphone (input_mode, kbd_type) {
//  console.log(">>> call send_enter_event_to_sphone in pkg_keyboard.js");
  if (ebus.smartphone.supported) {
    ebus.smartphone.set_keyboard_type(SPHONE_KEYBOARD_TYPE_NONE);

    switch (kbd_type) {
    case "DEFAULT":
      ebus.smartphone.set_keyboard_type(SPHONE_KEYBOARD_TYPE_DEFAULT);
      break;
    case "QWERTY":
      ebus.smartphone.set_keyboard_type(SPHONE_KEYBOARD_TYPE_QWERTY);
      break;
    default:
      ebus.smartphone.set_keyboard_type(SPHONE_KEYBOARD_TYPE_DEFAULT);
      break;
    }

    ebus.smartphone.set_string_input_mode(SPHONE_STRING_INPUT_NONE);

    switch (input_mode) {
    case "ONESTR":
      ebus.smartphone.set_string_input_mode(SPHONE_STRING_INPUT_ONESTR);
      break;
    case "STRING":
      ebus.smartphone.set_string_input_mode(SPHONE_STRING_INPUT_STRING);
      break;
    default:
      ebus.smartphone.set_string_input_mode(SPHONE_STRING_INPUT_STRING);
      break;
    }
  }
};

function send_leave_event_to_sphone () {
//  console.log(">>> call send_leave_event_to_sphone in pkg_keyboard.js");
  if (ebus.smartphone.supported) {
    ebus.smartphone.set_keyboard_type(SPHONE_KEYBOARD_TYPE_NONE);
    ebus.smartphone.set_string_input_mode(SPHONE_STRING_INPUT_NONE);
  }
}

provide("pkg_keyboard");

