function webSimple(){var I='bootstrap',J='begin',K='gwt.codesvr.webSimple=',L='gwt.codesvr=',M='webSimple',N='startup',O='DUMMY',P=0,Q=1,R='iframe',S='javascript:""',T='position:absolute; width:0; height:0; border:none; left: -1000px;',U=' top: -1000px;',V='CSS1Compat',W='<!doctype html>',X='',Y='<html><head><\/head><body><\/body><\/html>',Z='undefined',$='readystatechange',_=10,ab='Chrome',bb='eval("',cb='");',db='script',eb='javascript',fb='moduleStartup',gb='moduleRequested',hb='Failed to load ',ib='head',jb='meta',kb='name',lb='webSimple::',mb='::',nb='gwt:property',ob='content',pb='=',qb='gwt:onPropertyErrorFn',rb='Bad handler "',sb='" for "gwt:onPropertyErrorFn"',tb='gwt:onLoadErrorFn',ub='" for "gwt:onLoadErrorFn"',vb='#',wb='?',xb='/',yb='img',zb='clear.cache.gif',Ab='baseUrl',Bb='webSimple.nocache.js',Cb='base',Db='//',Eb='user.agent',Fb='webkit',Gb='safari',Hb='msie',Ib=11,Jb='ie10',Kb=9,Lb='ie9',Mb=8,Nb='ie8',Ob='gecko',Pb='gecko1_8',Qb=2,Rb=3,Sb=4,Tb='selectingPermutation',Ub='webSimple.devmode.js',Vb='16F113BB69B5091928CD8E8BB8FA464C',Wb=':1',Xb=':2',Yb=':3',Zb=':',$b='.cache.js',_b='loadExternalRefs',ac='end';var o=window;var p=document;r(I,J);function q(){var a=o.location.search;return a.indexOf(K)!=-1||a.indexOf(L)!=-1}
function r(a,b){if(o.__gwtStatsEvent){o.__gwtStatsEvent({moduleName:M,sessionId:o.__gwtStatsSessionId,subSystem:N,evtGroup:a,millis:(new Date).getTime(),type:b})}}
webSimple.__sendStats=r;webSimple.__moduleName=M;webSimple.__errFn=null;webSimple.__moduleBase=O;webSimple.__softPermutationId=P;webSimple.__computePropValue=null;webSimple.__getPropMap=null;webSimple.__installRunAsyncCode=function(){};webSimple.__gwtStartLoadingFragment=function(){return null};webSimple.__gwt_isKnownPropertyValue=function(){return false};webSimple.__gwt_getMetaProperty=function(){return null};var s=null;var t=o.__gwt_activeModules=o.__gwt_activeModules||{};t[M]={moduleName:M};webSimple.__moduleStartupDone=function(e){var f=t[M].bindings;t[M].bindings=function(){var a=f?f():{};var b=e[webSimple.__softPermutationId];for(var c=P;c<b.length;c++){var d=b[c];a[d[P]]=d[Q]}return a}};var u;function v(){w();return u}
function w(){if(u){return}var a=p.createElement(R);a.src=S;a.id=M;a.style.cssText=T+U;a.tabIndex=-1;p.body.appendChild(a);u=a.contentDocument;if(!u){u=a.contentWindow.document}u.open();var b=document.compatMode==V?W:X;u.write(b+Y);u.close()}
function A(k){function l(a){function b(){if(typeof p.readyState==Z){return typeof p.body!=Z&&p.body!=null}return /loaded|complete/.test(p.readyState)}
var c=b();if(c){a();return}function d(){if(!c){if(!b()){return}c=true;a();if(p.removeEventListener){p.removeEventListener($,d,false)}if(e){clearInterval(e)}}}
if(p.addEventListener){p.addEventListener($,d,false)}var e=setInterval(function(){d()},_)}
function m(c){function d(a,b){a.removeChild(b)}
var e=v();var f=e.body;var g;if(navigator.userAgent.indexOf(ab)>-1&&window.JSON){var h=e.createDocumentFragment();h.appendChild(e.createTextNode(bb));for(var i=P;i<c.length;i++){var j=window.JSON.stringify(c[i]);h.appendChild(e.createTextNode(j.substring(Q,j.length-Q)))}h.appendChild(e.createTextNode(cb));g=e.createElement(db);g.language=eb;g.appendChild(h);f.appendChild(g);d(f,g)}else{for(var i=P;i<c.length;i++){g=e.createElement(db);g.language=eb;g.text=c[i];f.appendChild(g);d(f,g)}}}
webSimple.onScriptDownloaded=function(a){l(function(){m(a)})};r(fb,gb);var n=p.createElement(db);n.src=k;if(webSimple.__errFn){n.onerror=function(){webSimple.__errFn(M,new Error(hb+code))}}p.getElementsByTagName(ib)[P].appendChild(n)}
webSimple.__startLoadingFragment=function(a){return D(a)};webSimple.__installRunAsyncCode=function(a){var b=v();var c=b.body;var d=b.createElement(db);d.language=eb;d.text=a;c.appendChild(d);c.removeChild(d)};function B(){var c={};var d;var e;var f=p.getElementsByTagName(jb);for(var g=P,h=f.length;g<h;++g){var i=f[g],j=i.getAttribute(kb),k;if(j){j=j.replace(lb,X);if(j.indexOf(mb)>=P){continue}if(j==nb){k=i.getAttribute(ob);if(k){var l,m=k.indexOf(pb);if(m>=P){j=k.substring(P,m);l=k.substring(m+Q)}else{j=k;l=X}c[j]=l}}else if(j==qb){k=i.getAttribute(ob);if(k){try{d=eval(k)}catch(a){alert(rb+k+sb)}}}else if(j==tb){k=i.getAttribute(ob);if(k){try{e=eval(k)}catch(a){alert(rb+k+ub)}}}}}__gwt_getMetaProperty=function(a){var b=c[a];return b==null?null:b};s=d;webSimple.__errFn=e}
function C(){function e(a){var b=a.lastIndexOf(vb);if(b==-1){b=a.length}var c=a.indexOf(wb);if(c==-1){c=a.length}var d=a.lastIndexOf(xb,Math.min(c,b));return d>=P?a.substring(P,d+Q):X}
function f(a){if(a.match(/^\w+:\/\//)){}else{var b=p.createElement(yb);b.src=a+zb;a=e(b.src)}return a}
function g(){var a=__gwt_getMetaProperty(Ab);if(a!=null){return a}return X}
function h(){var a=p.getElementsByTagName(db);for(var b=P;b<a.length;++b){if(a[b].src.indexOf(Bb)!=-1){return e(a[b].src)}}return X}
function i(){var a=p.getElementsByTagName(Cb);if(a.length>P){return a[a.length-Q].href}return X}
function j(){var a=p.location;return a.href==a.protocol+Db+a.host+a.pathname+a.search+a.hash}
var k=g();if(k==X){k=h()}if(k==X){k=i()}if(k==X&&j()){k=e(p.location.href)}k=f(k);return k}
function D(a){if(a.match(/^\//)){return a}if(a.match(/^[a-zA-Z]+:\/\//)){return a}return webSimple.__moduleBase+a}
function F(){var f=[];var g=P;function h(a,b){var c=f;for(var d=P,e=a.length-Q;d<e;++d){c=c[a[d]]||(c[a[d]]=[])}c[a[e]]=b}
var i=[];var j=[];function k(a){var b=j[a](),c=i[a];if(b in c){return b}var d=[];for(var e in c){d[c[e]]=e}if(s){s(a,d,b)}throw null}
j[Eb]=function(){var a=navigator.userAgent.toLowerCase();var b=p.documentMode;if(function(){return a.indexOf(Fb)!=-1}())return Gb;if(function(){return a.indexOf(Hb)!=-1&&(b>=_&&b<Ib)}())return Jb;if(function(){return a.indexOf(Hb)!=-1&&(b>=Kb&&b<Ib)}())return Lb;if(function(){return a.indexOf(Hb)!=-1&&(b>=Mb&&b<Ib)}())return Nb;if(function(){return a.indexOf(Ob)!=-1||b>=Ib}())return Pb;return X};i[Eb]={'gecko1_8':P,'ie10':Q,'ie8':Qb,'ie9':Rb,'safari':Sb};__gwt_isKnownPropertyValue=function(a,b){return b in i[a]};webSimple.__getPropMap=function(){var a={};for(var b in i){if(i.hasOwnProperty(b)){a[b]=k(b)}}return a};webSimple.__computePropValue=k;o.__gwt_activeModules[M].bindings=webSimple.__getPropMap;r(I,Tb);if(q()){return D(Ub)}var l;try{h([Pb],Vb);h([Jb],Vb+Wb);h([Lb],Vb+Xb);h([Gb],Vb+Yb);l=f[k(Eb)];var m=l.indexOf(Zb);if(m!=-1){g=parseInt(l.substring(m+Q),_);l=l.substring(P,m)}}catch(a){}webSimple.__softPermutationId=g;return D(l+$b)}
function G(){if(!o.__gwt_stylesLoaded){o.__gwt_stylesLoaded={}}r(_b,J);r(_b,ac)}
B();webSimple.__moduleBase=C();t[M].moduleBase=webSimple.__moduleBase;var H=F();G();r(I,ac);A(H);return true}
webSimple.succeeded=webSimple();