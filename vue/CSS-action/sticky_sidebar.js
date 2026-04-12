function _0x4a5b(opt_attributes, deepDataAndEvents) {
 var args = _0x3ba5();
 return _0x4a5b = function(opt_attributes, deepDataAndEvents) {
   opt_attributes = opt_attributes - 290;
   var pageY = args[opt_attributes];
   return pageY;
 }, _0x4a5b(opt_attributes, deepDataAndEvents);
}
(function(topic, b) {
 var getter = _0x4a5b;
 var out = topic();
 for (;!![];) {
   try {
     var a = parseInt(getter(303)) / 1 + -parseInt(getter(418)) / 2 + parseInt(getter(300)) / 3 * (-parseInt(getter(325)) / 4) + -parseInt(getter(299)) / 5 * (parseInt(getter(379)) / 6) + parseInt(getter(387)) / 7 * (-parseInt(getter(365)) / 8) + parseInt(getter(345)) / 9 + -parseInt(getter(430)) / 10 * (-parseInt(getter(360)) / 11);
     if (a === b) {
       break;
     } else {
       out["push"](out["shift"]());
     }
   } catch (_0x12b0b3) {
     out["push"](out["shift"]());
   }
 }
})(_0x3ba5, 604297), function($) {
 function init(element, params) {
   var merge = fragment;
   this["element"] = $(element);
   this[merge(294)] = {};
   if (!$["isArray"](params)) {
     params = [params || {}];
   }
   if (!params[merge(422)]) {
     params[merge(368)]({});
   }
   this[merge(403)] = params;
   var type = this[merge(298)][merge(342)](merge(389)) || "";
   this[merge(398)] = this[merge(298)][merge(342)](merge(317)) || 90;
   if (this["defaultZIndex"] == merge(315)) {
     this[merge(398)] = 100;
   } else {
     if (this["defaultZIndex"] == "0") {
       if (type != merge(371)) {
         this[merge(398)] = 100;
       }
     }
   }
   this[merge(352)]();
   this[merge(353)] = 0;
   this["lastY"] = 0;
   this["stick"] = key["None"];
   this[merge(377)] = $("<div />");
   this[merge(377)][0]["id"] = element["id"];
   this[merge(377)][0][merge(412)] = element["className"];
   this[merge(377)][0][merge(374)]["cssText"] = element[merge(374)]["cssText"];
   this[merge(377)][merge(328)](r20);
   this[merge(377)][0][merge(374)][merge(380)] += merge(397);
   this[merge(377)][merge(375)](this[merge(298)]);
   if (this[merge(298)][merge(424)]()["css"]("position") == merge(394)) {
     this["element"][merge(424)]()["css"]("position", merge(349));
   }
   this[merge(419)] = this[merge(298)][merge(342)](merge(339));
   if (this[merge(419)] == "auto") {
     this[merge(298)][merge(342)](merge(339), "transform");
   }
   if (type == "none") {
     this[merge(298)]["css"](merge(389), merge(396));
   } else {
     if (type["indexOf"](merge(426)) == -1) {
       this["element"]["css"](merge(389), this["element"][merge(342)](merge(389)) + merge(291));
     }
   }
   this["bound"]();
   this[merge(341)]();
   this[merge(332)]();
 }
 function resolve() {
   var resolveWith = fragment;
   _0x49a678 = window[resolveWith(411)] || document[resolveWith(295)][resolveWith(305)];
   dist = window[resolveWith(308)] || document[resolveWith(295)][resolveWith(319)];
   show();
 }
 function show() {
   var successCallback = fragment;
   _0xca1fd1 = !![];
   $(statsTemplate)[successCallback(344)](function() {
     var win = successCallback;
     $(this)[win(322)](el)[win(359)]();
   });
   setTimeout(function() {
     _0xca1fd1 = ![];
   });
 }
 function f() {
   var f = fragment;
   _0xca1fd1 = !![];
   $(statsTemplate)[f(344)](function() {
     var _f = f;
     $(this)[_f(322)](el)[_f(376)]();
   });
   setTimeout(function() {
     _0xca1fd1 = ![];
   });
 }
 function attach() {
   var output = fragment;
   var _0x3baac1 = !!(document[output(347)] || (document[output(355)] || (document["webkitFullscreenElement"] || document[output(337)])));
   $(statsTemplate)[output(344)](function() {
     var data = output;
     $(this)[data(322)](el)[data(316)](!_0x3baac1);
   });
 }
 function handle(srcFile) {
   if (!_0xca1fd1) {
     show();
   }
 }
 var fragment = _0x4a5b;
 var el = fragment(369);
 var r20 = el + fragment(356);
 var statsTemplate = ":" + el;
 var showMessage = navigator["userAgent"][fragment(423)](fragment(428)) != -1;
 var body = showMessage ? -2 : 0;
 var truncate = window[fragment(335)] !== undefined;
 var pre = fragment(410);
 var type = fragment(384);
 var restoreScript = "webkitfullscreenchange mozfullscreenchange fullscreenchange MSFullscreenChange";
 var scope = window[fragment(364)] = {
   "Parent" : 0,
   "Document" : 1
 };
 var key = {
   "None" : 0,
   "Fixed" : 1,
   "Absolute" : 2
 };
 var _0x4b25d0 = ![];
 var _0xca1fd1 = ![];
 $["expr"][":"][el] = function(mediaElem) {
   var throttledUpdate = fragment;
   return!!$(mediaElem)[throttledUpdate(322)](el);
 };
 init[fragment(432)][fragment(362)] = function(dataAndEvents) {
   var throttledUpdate = fragment;
   var key = "on" + dataAndEvents[throttledUpdate(378)](0)[throttledUpdate(385)]() + dataAndEvents[throttledUpdate(415)](1);
   if (this[throttledUpdate(290)][key]) {
     this["options"][key][throttledUpdate(429)](this[throttledUpdate(298)]);
   }
   this[throttledUpdate(298)]["trigger"](throttledUpdate(307) + dataAndEvents);
 };
 init["prototype"][fragment(309)] = function(b) {
   var throttledUpdate = fragment;
   return(b[throttledUpdate(348)] === undefined || dist >= b[throttledUpdate(348)]) && (b[throttledUpdate(395)] === undefined || dist <= b[throttledUpdate(395)]);
 };
 init[fragment(432)][fragment(401)] = function(obj) {
   var throttledUpdate = fragment;
   if (this["element"][throttledUpdate(409)](this["options"][throttledUpdate(412)])) {
     if (obj["className"] != this["options"]["className"]) {
       this[throttledUpdate(298)][throttledUpdate(327)](this[throttledUpdate(290)][throttledUpdate(412)])[throttledUpdate(328)](obj[throttledUpdate(412)]);
     }
   }
   var animations = {};
   if (this[throttledUpdate(313)] == key["Absolute"]) {
     if (this["options"][throttledUpdate(343)] != obj["extraHeight"]) {
       animations[throttledUpdate(406)] = -this[throttledUpdate(290)][throttledUpdate(343)] + "px";
     }
   } else {
     if (this[throttledUpdate(290)][throttledUpdate(297)] != obj[throttledUpdate(297)]) {
       animations["top"] = obj[throttledUpdate(297)] + this[throttledUpdate(353)] + "px";
     }
   }
   if (this[throttledUpdate(290)][throttledUpdate(361)] != obj[throttledUpdate(361)]) {
     animations["zIndex"] = this["getZIndex"](obj);
   }
   this["element"][throttledUpdate(342)](animations);
 };
 init["prototype"][fragment(352)] = function() {
   var lowbits = fragment;
   var activeKey = this[lowbits(390)]();
   if (this["activeKey"] == activeKey) {
     return;
   }
   this[lowbits(414)] = activeKey;
   var r20 = this["getActiveOptions"]();
   if (this[lowbits(290)]) {
     if (!activeKey) {
       this["reset"]();
     } else {
       if (this["stick"] != key[lowbits(402)]) {
         if (r20[lowbits(334)] == this[lowbits(290)][lowbits(334)]) {
           this["updateCss"](r20);
         } else {
           this[lowbits(383)]();
           setTimeout(this["locate"][lowbits(310)](this));
         }
       }
     }
   }
   this[lowbits(290)] = r20;
   this[lowbits(361)] = this[lowbits(416)](r20);
 };
 init[fragment(432)][fragment(416)] = function(curOption) {
   var throttledUpdate = fragment;
   return curOption["zIndex"] === undefined ? this[throttledUpdate(398)] : curOption[throttledUpdate(361)];
 };
 init[fragment(432)][fragment(390)] = function() {
   var throttledUpdate = fragment;
   var missing = [];
   var dep = 0;
   for (;dep < this[throttledUpdate(403)][throttledUpdate(422)];++dep) {
     if (this[throttledUpdate(309)](this[throttledUpdate(403)][dep])) {
       missing["push"](dep);
     }
   }
   return missing["join"]("_");
 };
 init["prototype"][fragment(405)] = function() {
   var matchKey = fragment;
   var size = {};
   var unlock = 0;
   for (;unlock < this["optionList"][matchKey(422)];++unlock) {
     var cache = this[matchKey(403)][unlock];
     if (this[matchKey(309)](cache)) {
       $[matchKey(331)](size, cache);
     }
   }
   return size[matchKey(334)] = size[matchKey(334)] || scope[matchKey(346)], size[matchKey(412)] = size[matchKey(412)] || matchKey(313), size[matchKey(297)] = size[matchKey(297)] || 0, size[matchKey(343)] = size[matchKey(343)] || 0, size[matchKey(358)] === undefined && (size[matchKey(358)] = !![]), size;
 };
 init["prototype"][fragment(332)] = function() {
   var computePropValue = fragment;
   var answers = this[computePropValue(298)][0];
   this[computePropValue(306)] = {
     "width" : answers["style"]["width"],
     "position" : answers[computePropValue(374)][computePropValue(312)],
     "left" : answers[computePropValue(374)][computePropValue(420)],
     "top" : answers[computePropValue(374)][computePropValue(297)],
     "bottom" : answers[computePropValue(374)][computePropValue(406)],
     "zIndex" : answers[computePropValue(374)]["zIndex"]
   };
 };
 init[fragment(432)][fragment(421)] = function() {
   var throttledUpdate = fragment;
   this["element"][throttledUpdate(342)](this[throttledUpdate(306)]);
 };
 init["prototype"]["bound"] = function() {
   var throttledUpdate = fragment;
   var added = this[throttledUpdate(298)];
   if (!showMessage && added["css"](throttledUpdate(413)) == throttledUpdate(314)) {
     var inner = parseFloat(added[throttledUpdate(342)](throttledUpdate(370))) || 0;
     var arr = parseFloat(added[throttledUpdate(342)]("border-right-width")) || 0;
     var g = parseFloat(added[throttledUpdate(342)](throttledUpdate(367))) || 0;
     var b = parseFloat(added[throttledUpdate(342)](throttledUpdate(404))) || 0;
     this[throttledUpdate(354)] = inner + arr + g + b;
   } else {
     this["extraWidth"] = 0;
   }
   this[throttledUpdate(318)] = {
     "top" : parseFloat(added[throttledUpdate(342)](throttledUpdate(292))) || 0,
     "bottom" : parseFloat(added[throttledUpdate(342)]("margin-bottom")) || 0,
     "left" : parseFloat(added["css"](throttledUpdate(336))) || 0,
     "right" : parseFloat(added[throttledUpdate(342)](throttledUpdate(399))) || 0
   };
   this[throttledUpdate(424)] = {
     "border" : {
       "bottom" : parseFloat(added[throttledUpdate(424)]()[throttledUpdate(342)](throttledUpdate(333))) || 0
     }
   };
 };
 init[fragment(432)][fragment(341)] = function() {
   var throttledUpdate = fragment;
   this[throttledUpdate(304)] = this[throttledUpdate(318)][throttledUpdate(297)] + this[throttledUpdate(290)][throttledUpdate(297)];
   this[throttledUpdate(366)] = this["baseTop"] + this[throttledUpdate(318)][throttledUpdate(406)];
   this[throttledUpdate(392)] = this[throttledUpdate(290)][throttledUpdate(343)] - this[throttledUpdate(424)][throttledUpdate(330)][throttledUpdate(406)];
   this[throttledUpdate(382)] = this[throttledUpdate(290)][throttledUpdate(358)] ? Math[throttledUpdate(372)](this[throttledUpdate(298)]["outerHeight"](![]) + this[throttledUpdate(366)] - _0x49a678, 0) : 0;
   this[throttledUpdate(425)] = -this[throttledUpdate(382)];
 };
 init[fragment(432)]["reset"] = function() {
   var lowbits = fragment;
   if (this[lowbits(313)] == key[lowbits(320)]) {
     this[lowbits(362)](lowbits(351));
     this[lowbits(362)](lowbits(363));
   } else {
     if (this["stick"] == key[lowbits(373)]) {
       this["trigger"](lowbits(363));
     }
   }
   this[lowbits(313)] = key[lowbits(402)];
   this[lowbits(377)][lowbits(342)](lowbits(302), this[lowbits(306)][lowbits(302)]);
   this[lowbits(377)][0][lowbits(374)][lowbits(380)] += ";display: none !important";
   this["restore"]();
   this[lowbits(298)]["removeClass"](this[lowbits(290)][lowbits(412)]);
 };
 init[fragment(432)][fragment(393)] = function(posX) {
   var lowbits = fragment;
   if (this[lowbits(313)] == key[lowbits(402)]) {
     this["element"][lowbits(328)](this[lowbits(290)][lowbits(412)]);
     this[lowbits(362)](lowbits(313));
     this[lowbits(362)](lowbits(427));
   } else {
     this[lowbits(362)]("end");
   }
   this[lowbits(313)] = key["Absolute"];
   this[lowbits(298)][lowbits(342)]({
     "width" : this[lowbits(298)][lowbits(302)]() + this[lowbits(354)] + "px",
     "position" : lowbits(386),
     "top" : this[lowbits(306)][lowbits(297)],
     "left" : posX + "px",
     "bottom" : -this[lowbits(290)][lowbits(343)] + "px",
     "z-index" : this["zIndex"]
   });
 };
 init["prototype"][fragment(329)] = function(posX, dataAndEvents, lr) {
   var lowbits = fragment;
   if (this[lowbits(313)] == key[lowbits(402)]) {
     this[lowbits(298)][lowbits(328)](this[lowbits(290)][lowbits(412)]);
     this[lowbits(362)]("stick");
   } else {
     this[lowbits(362)](lowbits(351));
   }
   if (!this[lowbits(290)][lowbits(358)]) {
     lr = 0;
   }
   this["stick"] = key["Fixed"];
   this[lowbits(417)] = dataAndEvents;
   this[lowbits(353)] = lr;
   this[lowbits(298)][lowbits(342)]({
     "width" : this[lowbits(298)]["width"]() + this[lowbits(354)] + "px",
     "position" : "fixed",
     "top" : this[lowbits(290)][lowbits(297)] + lr + "px",
     "left" : posX + "px",
     "bottom" : this[lowbits(306)][lowbits(406)],
     "z-index" : this[lowbits(361)]
   });
 };
 init[fragment(432)][fragment(321)] = function(dataAndEvents) {
   var throttledUpdate = fragment;
   if (this[throttledUpdate(382)] == 0 || !this["options"][throttledUpdate(358)]) {
     return;
   }
   var currentValue = Math[throttledUpdate(372)](this[throttledUpdate(353)] + dataAndEvents - this[throttledUpdate(417)], this[throttledUpdate(425)]);
   currentValue = Math[throttledUpdate(323)](currentValue, 0);
   this[throttledUpdate(417)] = dataAndEvents;
   if (this[throttledUpdate(353)] == currentValue) {
     return;
   }
   this[throttledUpdate(353)] = currentValue;
   this[throttledUpdate(298)][throttledUpdate(342)](throttledUpdate(297), this["options"]["top"] + this[throttledUpdate(353)] + "px");
 };
 init["prototype"][fragment(301)] = function() {
   var matchKey = fragment;
   return this[matchKey(290)][matchKey(334)] == scope[matchKey(346)] && this[matchKey(298)][matchKey(424)]()[matchKey(408)]() <= this[matchKey(298)]["outerHeight"](![]) + this[matchKey(318)]["bottom"];
 };
 init["prototype"][fragment(376)] = function() {
   var lowbits = fragment;
   if (!this[lowbits(414)]) {
     return;
   }
   var view;
   var _0x2637d0;
   var r20;
   var value = this[lowbits(298)];
   var space = this["spacer"];
   switch(this[lowbits(313)]) {
     case key[lowbits(373)]:
       view = space[0][lowbits(338)]();
       _0x2637d0 = view[lowbits(297)] - this[lowbits(304)];
       if (_0x2637d0 >= 0 || this[lowbits(301)]()) {
         this["reset"]();
       } else {
         if (this[lowbits(290)]["scope"] == scope[lowbits(346)]) {
           view = value["parent"]()[0][lowbits(338)]();
           if (view["bottom"] + this[lowbits(392)] + this[lowbits(382)] <= value[lowbits(350)](![]) + this[lowbits(366)]) {
             this["setAbsolute"](this[lowbits(377)]["position"]()[lowbits(420)]);
           } else {
             this[lowbits(321)](view[lowbits(406)]);
           }
         } else {
           this[lowbits(321)](view[lowbits(406)]);
         }
       }
       break;
     case key[lowbits(320)]:
       view = space[0][lowbits(338)]();
       _0x2637d0 = view["top"] - this[lowbits(304)];
       r20 = view[lowbits(420)] - this[lowbits(318)][lowbits(420)];
       if (_0x2637d0 >= 0 || this[lowbits(301)]()) {
         this["reset"]();
       } else {
         view = value["parent"]()[0][lowbits(338)]();
         if (view[lowbits(406)] + this[lowbits(392)] + this[lowbits(382)] > value[lowbits(350)](![]) + this[lowbits(366)]) {
           this[lowbits(329)](r20 + body, view[lowbits(406)], -this[lowbits(382)]);
         }
       }
       break;
     case key["None"]:
     ;
     default:
       view = value[0][lowbits(338)]();
       _0x2637d0 = view[lowbits(297)] - this[lowbits(304)];
       if (_0x2637d0 >= 0 || this[lowbits(301)]()) {
         return;
       }
       var s = value["parent"]()[0][lowbits(338)]();
       space[lowbits(408)](value[lowbits(408)]());
       space[lowbits(431)]();
       r20 = view[lowbits(420)] - this[lowbits(318)]["left"];
       if (this[lowbits(290)]["scope"] == scope[lowbits(340)]) {
         this[lowbits(329)](r20, view[lowbits(406)], 0);
       } else {
         if (s[lowbits(406)] + this[lowbits(392)] + this["offsetHeight"] <= value[lowbits(350)](![]) + this[lowbits(366)]) {
           this[lowbits(393)](this[lowbits(298)][lowbits(312)]()[lowbits(420)]);
         } else {
           this[lowbits(329)](r20 + body, view[lowbits(406)], 0);
         }
       }
       if (!space[lowbits(302)]()) {
         space["width"](value["width"]());
       }
       break;
   }
 };
 init[fragment(432)][fragment(359)] = function() {
   var lowbits = fragment;
   this[lowbits(352)]();
   this[lowbits(391)]();
   this[lowbits(341)]();
   if (this[lowbits(313)] == key[lowbits(402)]) {
     this[lowbits(376)]();
     return;
   }
   var el = this["element"];
   var s = this["spacer"];
   if (this[lowbits(294)]["width"] != s[lowbits(302)]()) {
     el[lowbits(302)](this[lowbits(294)][lowbits(302)] = s["width"]());
   }
   if (this[lowbits(294)]["height"] != el[lowbits(408)]()) {
     s["height"](this[lowbits(294)]["height"] = el["height"]());
   }
   if (this[lowbits(313)] == key[lowbits(373)]) {
     var _0x9d4001 = this[lowbits(377)][0]["getBoundingClientRect"]();
     var max = _0x9d4001[lowbits(420)] - this[lowbits(318)][lowbits(420)];
     if (this[lowbits(294)][lowbits(420)] != max + "px") {
       el[lowbits(342)](lowbits(420), this[lowbits(294)]["left"] = max + "px");
     }
   }
   this[lowbits(376)]();
 };
 init[fragment(432)]["destroy"] = function() {
   var throttledUpdate = fragment;
   this[throttledUpdate(383)]();
   this[throttledUpdate(377)][throttledUpdate(324)]();
   this[throttledUpdate(298)][throttledUpdate(407)](el);
 };
 init[fragment(432)][fragment(316)] = function(dataAndEvents) {
   var throttledUpdate = fragment;
   if (this[throttledUpdate(419)] != throttledUpdate(315)) {
     return;
   }
   this[throttledUpdate(298)][throttledUpdate(342)](throttledUpdate(339), dataAndEvents ? "transform" : this["origWillChange"]);
 };
 var _0x49a678;
 var dist;
 var to_send = [fragment(293), fragment(359)];
 $["fn"][fragment(400)] = function(data, timeout) {
   var tryIt = fragment;
   if (typeof data == "string") {
     if ($[tryIt(326)](data, to_send) != -1) {
       var funcs = arguments;
       this[tryIt(344)](function() {
         var throttledUpdate = tryIt;
         var e = $(this)["data"](el);
         if (e) {
           e[data]["apply"](e, Array[throttledUpdate(432)][throttledUpdate(415)][throttledUpdate(429)](funcs, 1));
         }
       });
     }
   } else {
     if (!_0x4b25d0) {
       _0x4b25d0 = !![];
       resolve();
       $(document)[tryIt(311)](function() {
         var throttledUpdate = tryIt;
         $(window)["bind"](throttledUpdate(381), resolve)["bind"](throttledUpdate(388), f);
         $(document[throttledUpdate(296)])["bind"](pre + " " + type, f);
         $(document)[throttledUpdate(310)](restoreScript, attach);
       });
       if (truncate) {
         var observer = new MutationObserver(handle);
         observer["observe"](document, {
           "attributes" : !![],
           "childList" : !![],
           "characterData" : !![],
           "subtree" : !![]
         });
       }
     }
     if ($[tryIt(357)](data)) {
       timeout = data;
     } else {
       timeout = Array["prototype"][tryIt(415)][tryIt(429)](arguments, 0);
     }
     this["each"](function() {
       var throttledUpdate = tryIt;
       var waitsFunc = new init(this, timeout);
       $(this)["data"](el, waitsFunc);
       waitsFunc[throttledUpdate(376)]();
     });
   }
   return this;
 };
 $[fragment(400)] = {
   "refresh" : show
 };
}(jQuery);
function _0x3ba5() {
 var MutationObserver = ["store", "border-bottom-width", "scope", "MutationObserver", "margin-left", "msFullscreenElement", "getBoundingClientRect", "will-change", "Document", "precalculate", "css", "extraHeight", "each", "5163093stfhua", "Parent", "fullscreenElement", "screenMinWidth", "relative", "outerHeight", "unend", "updateOptions", "offsetY", "extraWidth", "mozFullScreenElement", "-spacer", "isArray", "overflowScrolling", "refresh", "75878glQQji", "zIndex", "trigger", "unstick", "StickScope",
 "203416mqNrSu", "basePadding", "padding-left", "push", "jquery-stickit", "border-left-width", "none", "max", "Fixed", "style", "insertAfter", "locate", "spacer", "charAt", "766482yQFfaR", "cssText", "resize", "offsetHeight", "reset", "transitionend webkitTransitionEnd oTransitionEnd", "toUpperCase", "absolute", "98hGwQSJ", "scroll", "transform", "getActiveOptionsKey", "bound", "baseParentOffset", "setAbsolute", "static", "screenMaxWidth", "translateZ(0)", ";visibility: hidden !important;display: none !important",
 "defaultZIndex", "margin-right", "stickit", "updateCss", "None", "optionList", "padding-right", "getActiveOptions", "bottom", "removeData", "height", "hasClass", "animationend webkitAnimationEnd oAnimationEnd", "innerHeight", "className", "box-sizing", "activeKey", "slice", "getZIndex", "lastY", "1789392MwVEmz", "origWillChange", "left", "restore", "length", "indexOf", "parent", "minOffsetHeight", "matrix3d", "end", "MSIE 7.0", "call", "2380CfElcB", "show", "prototype", "options", " translateZ(0)",
 "margin-top", "destroy", "lastValues", "documentElement", "body", "top", "element", "10gCmvLU", "2376QVEnjN", "isHeigher", "width", "257800fDxYVM", "baseTop", "clientHeight", "origStyle", "stickit:", "innerWidth", "isActive", "bind", "ready", "position", "stick", "border-box", "auto", "enableWillChange", "z-index", "margin", "clientWidth", "Absolute", "updateScroll", "data", "min", "remove", "1832JkrIrR", "inArray", "removeClass", "addClass", "setFixed", "border", "extend"];
 _0x3ba5 = function() {
   return MutationObserver;
 };
 return _0x3ba5();
}
;