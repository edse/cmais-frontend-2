(function(exports) {

  // TODO(smus): Come up with a better solution for this. This is bad because
  // it might conflict with a touch ID. However, giving negative IDs is also
  // bad because of code that makes assumptions about touch identifiers being
  // positive integers.
  var MOUSE_ID = 31337;

  function Pointer(x, y, type, identifier) {
    this.x = x;
    this.y = y;
    this.type = type;
    this.identifier = identifier;
  }

  var PointerTypes = {
    TOUCH: 'touch',
    MOUSE: 'mouse'
  };

  function setMouse(mouseEvent) {
    mouseEvent.target.mouseEvent = mouseEvent;
  }

  function unsetMouse(mouseEvent) {
    mouseEvent.target.mouseEvent = null;
  }

  function setTouch(touchEvent) {
    touchEvent.target.touchList = touchEvent.targetTouches;
  }

  /**
   * Returns an array of all pointers currently on the screen.
   */
  function getPointerList() {
    // Note: "this" is the element.
    var pointers = [];
    if (this.touchList) {
      //console.log('t')
      for (var i = 0; i < this.touchList.length; i++) {
        var touch = this.touchList[i];
        var pointer = new Pointer(touch.pageX, touch.pageY,
                                  PointerTypes.TOUCH, touch.identifier);
        pointers.push(pointer);
      }
    }
    if (this.mouseEvent) {
      //console.log('m: '+this.mouseEvent.pageX, this.mouseEvent.pageY)
      pointers.push(new Pointer(this.mouseEvent.pageX, this.mouseEvent.pageY,
                                  PointerTypes.MOUSE, MOUSE_ID));
    }
    return pointers;
  }

  function createCustomEvent(eventName, target, payload) {
    
    var event = document.createEvent('Event');
    event.initEvent(eventName, true, true);
    for (var k in payload) {
      event[k] = payload[k];
    }
    target.dispatchEvent(event);
  }

  /*************** Mouse event handlers *****************/

  function mouseDownHandler(event) {
    event.preventDefault();
    setMouse(event);
    var payload = {
      pointerType: 'mouse',
      getPointerList: getPointerList.bind(this),
      originalEvent: event
    };
    createCustomEvent('pointerdown', event.target, payload);
  }

  function mouseMoveHandler(event) {
    event.preventDefault();
    //if (event.target.mouseEvent) {
      setMouse(event);
    //}
    var payload = {
      pointerType: 'mouse',
      getPointerList: getPointerList.bind(this),
      originalEvent: event
    };
    createCustomEvent('pointermove', event.target, payload);
  }

  function mouseUpHandler(event) {
    event.preventDefault();
    unsetMouse(event);
    var payload = {
      pointerType: 'mouse',
      getPointerList: getPointerList.bind(this),
      originalEvent: event
    };
    createCustomEvent('pointerup', event.target, payload);
  }

  /*************** Touch event handlers *****************/

  function touchStartHandler(event) {
    //console.log('touchstart');
    event.preventDefault();
    setTouch(event);
    var payload = {
      pointerType: 'touch',
      getPointerList: getPointerList.bind(this),
      originalEvent: event
    };
    createCustomEvent('pointerdown', event.target, payload);
  }

  function touchMoveHandler(event) {
    event.preventDefault();
    setTouch(event);
    var payload = {
      pointerType: 'touch',
      getPointerList: getPointerList.bind(this),
      originalEvent: event
    };
    createCustomEvent('pointermove', event.target, payload);
  }

  function touchEndHandler(event) {
    event.preventDefault();
    setTouch(event);
    var payload = {
      pointerType: 'touch',
      getPointerList: getPointerList.bind(this),
      originalEvent: event
    };
    createCustomEvent('pointerup', event.target, payload);
  }

  function mouseOutHandler(event) {
    event.preventDefault();
    unsetMouse(event);
  }

  /*************** MSIE Pointer event handlers *****************/

  function pointerDownHandler(event) {
    log('pointerdown');
  }

  function pointerMoveHandler(event) {
    log('pointermove');
  }

  function pointerUpHandler(event) {
    log('pointerup');
  }

  /**
   * Causes the passed in element to broadcast pointer events instead
   * of mouse/touch/etc events.
   */
  function emitPointers(el) {
    if (!el.isPointerEmitter) {
      // Latch on to all relevant events for this element.
      if (isTouch()) {
        el.addEventListener('touchstart', touchStartHandler);
        el.addEventListener('touchmove', touchMoveHandler);
        el.addEventListener('touchend', touchEndHandler);
      } else if (isPointer()) {
        el.addEventListener('MSPointerDown', pointerDownHandler);
        el.addEventListener('MSPointerMove', pointerMoveHandler);
        el.addEventListener('MSPointerUp', pointerUpHandler);
      } else {
        el.addEventListener('mousedown', mouseDownHandler);
        el.addEventListener('mousemove', mouseMoveHandler);
        el.addEventListener('mouseup', mouseUpHandler);
        // Necessary for the edge case that the mouse is down and you drag out of
        // the area.
        el.addEventListener('mouseout', mouseOutHandler);
      }

      el.isPointerEmitter = true;
    }
  }

  /**
   * @return {Boolean} Returns true iff this user agent supports touch events.
   */
  function isTouch() {
    return Modernizr.touch;
  }

  /**
   * @return {Boolean} Returns true iff this user agent supports MSIE pointer
   * events.
   */
  function isPointer() {
    return false;
    // TODO(smus): Implement support for pointer events.
    // return window.navigator.msPointerEnabled;
  }

  /**
   * Option 1: Require emitPointers call on all pointer event emitters.
   */
  //exports.pointer = {
  //  emitPointers: emitPointers,
  //};

  /**
   * Option 2: Replace addEventListener with a custom version.
   */
  function augmentAddEventListener(baseElementClass, customEventListener) {
    var oldAddEventListener = baseElementClass.prototype.addEventListener;
    baseElementClass.prototype.addEventListener = function(type, listener, useCapture) {
      customEventListener.call(this, type, listener, useCapture);
      oldAddEventListener.call(this, type, listener, useCapture);
    };
  }

  function synthesizePointerEvents(type, listener, useCapture) {
    if (type.indexOf('pointer') === 0) {
      emitPointers(this);
    }
  }

  // Note: Firefox doesn't work like other browsers... overriding HTMLElement
  // doesn't actually affect anything. Special case for Firefox:
  if (navigator.userAgent.match(/Firefox/)) {
    // TODO: fix this for the general case.
    augmentAddEventListener(HTMLDivElement, synthesizePointerEvents);
    augmentAddEventListener(HTMLCanvasElement, synthesizePointerEvents);
  } else {
    augmentAddEventListener(HTMLElement, synthesizePointerEvents);
  }

  exports._createCustomEvent = createCustomEvent;
  exports._augmentAddEventListener = augmentAddEventListener;
  exports.PointerTypes = PointerTypes;

})(window);

(function(exports) {

  function synthesizeGestureEvents(type, listener, useCapture) {
    if (type.indexOf('gesture') === 0) {
      var handler = Gesture._gestureHandlers[type];
      if (handler) {
        handler(this);
      } else {
        console.error('Warning: no handler found for {{evt}}.'
                      .replace('{{evt}}', type));
      }
    }
  }

  // Note: Firefox doesn't work like other browsers... overriding HTMLElement
  // doesn't actually affect anything. Special case for Firefox:
  if (navigator.userAgent.match(/Firefox/)) {
    // TODO: fix this for the general case.
    window._augmentAddEventListener(HTMLDivElement, synthesizeGestureEvents);
    window._augmentAddEventListener(HTMLCanvasElement, synthesizeGestureEvents);
  } else {
    window._augmentAddEventListener(HTMLElement, synthesizeGestureEvents);
  }

  exports.Gesture = exports.Gesture || {};
  exports.Gesture._gestureHandlers = exports.Gesture._gestureHandlers || {};

})(window);

/**
 * Gesture recognizer for the `doubletap` gesture.
 *
 * Taps happen when an element is pressed and then released.
 */
(function(exports) {
  var DOUBLETAP_TIME = 300;

  function pointerDown(e) {
    var now = new Date();
    if (now - this.lastDownTime < DOUBLETAP_TIME) {
      this.lastDownTime = 0;
      var payload = {
      };
      window._createCustomEvent('gesturedoubletap', e.target, payload);
    }
    this.lastDownTime = now;
  }

  /**
   * Make the specified element create gesturetap events.
   */
  function emitDoubleTaps(el) {
    el.addEventListener('pointerdown', pointerDown);
  }

  exports.Gesture._gestureHandlers.gesturedoubletap = emitDoubleTaps;

})(window);

/**
 * Gesture recognizer for the `longpress` gesture.
 *
 * Longpress happens when pointer is pressed and doesn't get released
 * for a while (without movement).
 */
(function(exports) {
  var LONGPRESS_TIME = 600;

  function pointerDown(e) {
    // Start a timer.
    this.longPressTimer = setTimeout(function() {
      payload = {};
      window._createCustomEvent('gesturelongpress', e.target, payload);
    }, LONGPRESS_TIME);
  }

  function pointerMove(e) {
    // TODO(smus): allow for small movement and still emit a longpress.
    clearTimeout(this.longPressTimer);
  }

  function pointerUp(e) {
    clearTimeout(this.longPressTimer);
  }

  /**
   * Make the specified element create gesturetap events.
   */
  function emitLongPresses(el) {
    el.addEventListener('pointerdown', pointerDown);
    el.addEventListener('pointermove', pointerMove);
    el.addEventListener('pointerup', pointerUp);
  }

  exports.Gesture._gestureHandlers.gesturelongpress = emitLongPresses;

})(window);

/**
 * Gesture recognizer for the `scale` gesture.
 *
 * Scale happens when two fingers are placed on the screen, and then
 * they move so the the distance between them is greater or less than a
 * certain threshold.
 */
(function(exports) {

  var SCALE_THRESHOLD = 0.2;

  function PointerPair(p1, p2) {
    this.p1 = p1;
    this.p2 = p2;
  }

  /**
   * Calculate the distance between the two pointers.
   */
  PointerPair.prototype.span = function() {
    var dx = this.p1.x - this.p2.x;
    var dy = this.p1.y - this.p2.y;
    return Math.sqrt(dx*dx + dy*dy);
  };

  /**
   * Given a reference pair, calculate the scale multiplier difference.
   */
  PointerPair.prototype.scaleSince = function(referencePair) {
    return this.span() / referencePair.span();
  };

  function pointerDown(e) {
    var pointerList = e.getPointerList();
    // If there are exactly two pointers down,
    if (pointerList.length == 2) {
      // Record the initial pointer pair.
      e.target.scaleReferencePair = new PointerPair(pointerList[0],
                                                    pointerList[1]);
    }
  }

  function pointerMove(e) {
    var pointerList = e.getPointerList();
    // If there are two pointers down, compare to the initial pointer pair.
    if (pointerList.length == 2 && e.target.scaleReferencePair) {
      var pair = new PointerPair(pointerList[0], pointerList[1]);
      // Compute the scaling value according to the difference.
      var scale = pair.scaleSince(e.target.scaleReferencePair);
      // If the movement is drastic enough:
      if (Math.abs(1 - scale) > SCALE_THRESHOLD) {
        // Create the scale event as a result.
        var payload = {
          scale: scale
        };
        window._createCustomEvent('gesturescale', e.target, payload);
      }
    }
  }

  function pointerUp(e) {
    e.target.scaleReferencePair = null;
  }

  /**
   * Make the specified element create gesturetap events.
   */
  function emitScale(el) {
    el.addEventListener('pointerdown', pointerDown);
    el.addEventListener('pointermove', pointerMove);
    el.addEventListener('pointerup', pointerUp);
  }

  exports.Gesture._gestureHandlers.gesturescale = emitScale;

})(window);


////////////////////////////////////////////////////////////////////////////////////////////////

/*yepnope1.5.3|WTFPL*/
(function(a,b,c){function d(a){return o.call(a)=="[object Function]"}function e(a){return typeof a=="string"}function f(){}function g(a){return!a||a=="loaded"||a=="complete"||a=="uninitialized"}function h(){var a=p.shift();q=1,a?a.t?m(function(){(a.t=="c"?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){a!="img"&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l={},o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};y[c]===1&&(r=1,y[c]=[],l=b.createElement(a)),a=="object"?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),a!="img"&&(r||y[c]===2?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i(b=="c"?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),p.length==1&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&o.call(a.opera)=="[object Opera]",l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return o.call(a)=="[object Array]"},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,i){var j=b(a),l=j.autoCallback;j.url.split(".").pop().split("?").shift(),j.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]||h),j.instead?j.instead(a,e,f,g,i):(y[j.url]?j.noexec=!0:y[j.url]=1,f.load(j.url,j.forceCSS||!j.forceJS&&"css"==j.url.split(".").pop().split("?").shift()?"c":c,j.noexec,j.attrs,j.timeout),(d(e)||d(l))&&f.load(function(){k(),e&&e(j.origUrl,i,g),l&&l(j.origUrl,i,g),y[j.url]=2})))}function i(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var j,l,m=this.yepnope.loader;if(e(a))g(a,0,m,0);else if(w(a))for(j=0;j<a.length;j++)l=a[j],e(l)?g(l,0,m,0):w(l)?B(l):Object(l)===l&&i(l,m);else Object(a)===a&&i(a,m)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,b.readyState==null&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}})(this,document);
Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0));};
// Mozilla Audio Data API
// https://wiki.mozilla.org/Audio_Data_API
// by Addy Osmani
Modernizr.addTest('audiodata', !!(window.Audio));
// Web Audio API
// https://dvcs.w3.org/hg/audio/raw-file/tip/webaudio/specification.html
// By Addy Osmani
Modernizr.addTest('webaudio', !!(window.webkitAudioContext || window.AudioContext));
Modernizr.addTest('fullscreen',function(){
     for(var i = 0; i < Modernizr._domPrefixes.length; i++) {
        if( document[Modernizr._domPrefixes[i].toLowerCase() + 'CancelFullScreen'])
            return true;
     }
     return !!document['cancelFullScreen'] || false;
});

// http://developer.apple.com/library/safari/documentation/AudioVideo/Conceptual/Using_HTML5_Audio_Video/ControllingMediaWithJavaScript/ControllingMediaWithJavaScript.html#//apple_ref/doc/uid/TP40009523-CH3-SW20
// https://developer.mozilla.org/en/API/Fullscreen

// requestAnimationFrame
// Offload animation repainting to browser for optimized performance. 
// http://dvcs.w3.org/hg/webperf/raw-file/tip/specs/RequestAnimationFrame/Overview.html
// By Addy Osmani

Modernizr.addTest('raf', !!Modernizr.prefixed('requestAnimationFrame', window));