<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Classic - GeoGebra</title>
	<link rel="shortcut icon" href="//cdn.geogebra.org/apps/icons/geogebra.ico" type="image/x-icon">
	<link rel="icon" href="//cdn.geogebra.org/apps/icons/geogebra.ico" type="image/x-icon">
	<meta property="og:title" content="Classic - GeoGebra" />
	
<script type="text/javascript">

// for IE9
if (!window.console) window.console = {};
if (!window.console.log) window.console.log = function () { };

var latestVersion="5.0.420.0";
var module = "web3d";
var lookAndFeel = "";
var prerelease = false;
var debug = false;
var startDelay = 0;
var marginTop = 0;
var analyticsVersion = 'V'+latestVersion;
var appOnline=true;
var translation = {};
</script>
<script>prerelease=false;appOnline=true;</script><!--LANGUAGE LINKS-->
<script>
	function e(id){
		return document.getElementById(id);
	}
	function c(className){
		return document.getElementsByClassName(className)[0];
	}
	var finalLang = null;
	
	function setParamFromURL(paramName){
		if(getURLparam(paramName)){
			e("ggw").setAttribute("data-param-"+paramName,getURLparam(paramName));
		}
	}
	function changeMetaTitle(titleBase){
		var title = titleBase.match(/GeoGebra/) ? titleBase : titleBase + " - GeoGebra";
		var tags = document.head.getElementsByTagName("meta");
		for(k in tags){
			if(tags[k].getAttribute && tags[k].getAttribute("property")=="og:title"){
				tags[k].setAttribute("content", title);
			}
		}
		document.title = title;
	}
	function perspective(id, name){		
		if(e("ggw")){			
			e("ggw").className="geogebraweb";

			e("ggw").setAttribute("data-param-appname", window.appID || "classic");
			e("ggw").setAttribute("data-param-marginTop", marginTop);

			if(id){
				if(id=="exam-simple"){
					e("ggw").setAttribute("data-param-enableGraphing","false");
					e("ggw").setAttribute("data-param-enableCAS","false");
					e("ggw").setAttribute("data-param-enable3D","false");
				}
				if(id=="exam-graphing"){
					e("ggw").setAttribute("data-param-enableGraphing","true");
					e("ggw").setAttribute("data-param-enableCAS","false");
					e("ggw").setAttribute("data-param-enable3D","false");
				}
				if(id=="exam-cas"){
					e("ggw").setAttribute("data-param-enableGraphing","true");
					e("ggw").setAttribute("data-param-enableCAS","true");
					e("ggw").setAttribute("data-param-enable3D","false");
				}				
				e("ggw").setAttribute("data-param-perspective",id);
			}
			setParamFromURL("filename");
			setParamFromURL("rounding");
			if(location.pathname.match(/lti/)){
				e("ggw").setAttribute("data-param-showAppsPicker","false");
				e("appsPicker") && e("appsPicker").style.setProperty("display", "none");
				c("GeoGebraHeader") && c("GeoGebraHeader").remove();
				e("ggw").setAttribute("data-param-marginTop",0);
			}
			if(window.ggbRerun){
				ggbRerun();
			}
		}else{
			if(id){
				ggbApplet.setPerspective(id+"");
			}
		}
		var label = e(name);
		if(label){
			parentTable(label).className += " perspectiveHighlighted";
		}
		if(name && window.history && window.history.pushState && name != "picker" && location.host.indexOf("geogebra") >= 0 &&
				location.href.indexOf("?") < 0 && !location.pathname.match(/\/.*\/.+/) && !isLocalhost()){
			var unbundled = name == "graphing" || name == "geometry" || name == "whiteboard" || name == "3d";
			if(name != "classic" && (location.pathname.indexOf("classic") > 0 || !unbundled)){
				name = "classic/" + name;
			}
			history.pushState({}, "GeoGebra", "/"+name);
		}
		return false;
	}
	
	function div(styleName){
		var ret = document.createElement("div");
		ret.className = styleName;
		return ret;
	}

	function getLocalStorage(key){
		try{
			if(location.host && window.localStorage){
				return localStorage.getItem(key);
			}
		} catch(e){
			//local storage not supported
		}
		return false;
	}
	
	function setLocalStorage(key, value){
		try{
			if(location.host && window.localStorage){
				return localStorage.setItem(key, value);
			}
		} catch(e){
			//local storage not supported
		}
	}

	function getCookie(cookieName){
		var docCookie = document.cookie;
		if (docCookie && docCookie != '') {
			var crumbs = docCookie.split('; ');
			for ( var i = 0; i < crumbs.length; ++i) {
				var name, value;
				var eqIdx = crumbs[i].indexOf('=');
				if (eqIdx == -1) {
					//empty
				} else {
					name = crumbs[i].substring(0, eqIdx);
					value = crumbs[i].substring(eqIdx + 1);
					if (name == cookieName) {
						try {
							value = decodeURIComponent(value);
						} catch (e) {
							// ignore error, keep undecoded value
						}
						return value;
					}
				}
			}
		}
		return false;
	}
	function parentTable(ret){
		var parent = ret;
			while(parent = parent.parentElement){
		
			if(parent.tagName == "TABLE"){
				return parent;
			}
		}
		return ret;
	}
	function button(id, perspectiveId, caption){
		var shortId = id.replace("perspective","");
		if(getPerspective()==shortId){
			changeMetaTitle(caption);
		}
		var ret = e(id);
		var parent = parentTable(ret);
		if(id == "tutorials"){
			parent.addEventListener("click",function(){
					window.open("https://www.geogebra.org/tutorial")
					
			});
		} else {
			parent.addEventListener("click",function(){
				if(e("ggw")){
					e("ggw").setAttribute("data-param-showAppsPicker","false");
				}
				changeMetaTitle(ret.innerText);
				perspective(perspectiveId,id.replace("perspective",""));
			});
			parent.getElementsByTagName("TD")[2].addEventListener("click",function(e){
				var evt = e || window.event;
				evt.stopPropagation();
				window.open("https://www.geogebra.org/tutorial/"+shortId);
			});
		}
		ret.innerHTML = caption;
	}
	
	function setPickerLabels(dict){
		button("graphing", 1, dict["Graphing"] || "Graphing");
		button("geometry", 2, dict["Perspective.Geometry"] || "Geometry");
		button("cas", 4, dict["Perspective.CAS"] || "CAS Calculator");
		button("spreadsheet",  3, dict["Perspective.Spreadsheet"] || "Spreadsheet Calc");
		button("perspective3d", 5, dict["GeoGebra3DGrapher.short"] || "3D Calculator");
		button("probability", 6, dict["Perspective.Probability"] || "Probability Calc");

		button("exam","exam", dict["exam_menu_entry"] || "Exam Calculator");
		e("create").innerHTML = dict["CreateYourOwn"] || "GeoGebra Classic";
		if(e("download")){
			e("download").innerHTML = dict["Download"] || "Download";
		}
	}
	function showInLang(lang){
		var props = __GGB__keysVar[lang];
		if(window.appID === "graphing"){
			changeMetaTitle(props.menu["GraphingCalculator"] || "Graphing Calculator");
		}
		if(window.appID === "geometry"){
			changeMetaTitle(props.menu["Geometry"]  || "Geometry");
		}
		if(window.appID === "3D"){
			changeMetaTitle(props.menu["Graphing3D"]  || "3D Graphing Calculator");
		}
		if(!window.appID && !getPerspective()){
			changeMetaTitle(props.menu["math_apps"]  || "GeoGebra Classic");
		}
		document.body.parentNode.style.overflow = "auto";
		if(e("ggbPage")){
			e("ggbPage").style.display = "";
		}
		
		if(finalLang && finalLang != lang){
			console.log("wrong lang");
			return;
		}		
		if(e("ggbPage")){
			setPickerLabels(props.menu);
		}

	}
	
	function showInEnglish(){
			if(!window.__GGB__keysVar && e("ggbPage")){
				setPickerLabels({});
	
				e("ggbPage").style.display="";
			}
			
		}
	var langs = ["af",  "ar",  "ar_MA",  "ar_TN",  "bg",  "bs",  "ca",  "ca_XV",  "cs",  "cy",  "da", 
	"de_AT",  "de",  "el",  "en_AU",  "en_GB",  "en",  "eo",  "es_ES",  "es",  "es_UY",  "et",  "eu", 
	"fa",  "fi",  "fr",  "gl",  "hi",  "hr",  "hu",  "hy",  "in",  "is",  "it",  "iw",
	"ja",  "ji",  "ka",  "kk",  "km",  "kn",  "ko",  "lt",  "lv",  "mk",  "ml",  "mn",  "mr",  "ms", 
	"ne",  "nl_NL",  "nl",  "no",  "no_NB",  "no_NN",  "pl",  "pt",  "pt_PT",  "ro",  "ru",  "si",
	"sk",  "sl",  "sq",  "sr",  "sv",  "ta",  "tg",  "th",  "tl",  "tr",  "ty",  "ug",  "uk", 
	"ur",  "vi",  "xh",  "zh_CN",  "zh",  "zh_TW"];
	
	function validLang(lang){
		lang=lang.replace("-","_");
		if(langs.indexOf(lang) >= 0){
			return lang;
		}
		lang = lang.substring(0,2);
		if(langs.indexOf(lang) >= 0){
			return lang;
		}
		return "en";
	}
	function getURLparam(param){
		var parts = location.href.split("?");
		if(parts.length<2){
			return null;
		}
		params=parts[1].split("&");
		for(var i=0;i<params.length;i++){
			if(params[i].indexOf(param + "=")==0){
				return params[i].substring(param.length + 1);
			}
		}
		return null;
	}
	function switchLang(lang, codebase){
		var storedTranslation = {};
		if(getLocalStorage("translation")){
			try { 
				storedTranslation = JSON.parse(localStorage.translation);
			}
			catch(e){
				console.log(e.message);
			}
		}
		if(storedTranslation[lang] && storedTranslation["version"] == latestVersion){
			window.__GGB__keysVar = {};
			window.__GGB__keysVar[lang] = storedTranslation[lang];
			window.__GGB__keysVar["version"] = storedTranslation["version"];
			showInLang(lang);
		}
		else{
			var l10n = document.createElement("script");
			document.head.appendChild(l10n);
			l10n.onload = function(){
			
			
				showInLang(lang);
				if(window.__GGB__keysVar[lang]){
					var obj = {};
					obj["version"] = latestVersion;
					obj[lang] = window.__GGB__keysVar[lang];
					setLocalStorage("translation", JSON.stringify(obj));
				}
				
			}
			l10n.setAttribute("src", codebase + module+"/js/properties_keys_"+lang+".js");
		}
		
		
	}
function insertScript(codebase){
 window.WebFontConfig = {
            loading: function() {},
            active: function() {},
            inactive: function() {},
fontloading: function(familyName, fvd) {},
fontactive: function(familyName, fvd) {},
            fontinactive: function(familyName, fvd) {},
            custom: {
                families: ["geogebra-serif", "geogebra-sans-serif", "mathsans" ],
                urls: [ codebase+module+"/css/fonts.css" ]
            }
        };

	var app = document.createElement("script");		
	app.setAttribute("src",codebase+module+"/js/webfont.js");
	document.head.appendChild(app);
		
	app = document.createElement("script");
	app.setAttribute("src",codebase+module+"/"+module+".nocache.js");
	window.setTimeout(function(){
		document.head.appendChild(app);
				},startDelay);
	}

	function isLocalhost(){
		return location.protocol.match(/(app|file:)/) || location.host.match(/^([0-9.]*|(autotest|deploy).*geogebra.org|localhost)(:.+)?$/);
	}
	function showStartScreen(codebase){
		var lang = getURLparam("lang") || getCookie("GeoGebraLangUI") || getLocalStorage("GeoGebraLangUI") || navigator.language || "en";
		window.setTimeout(showInEnglish, 1000);
		switchLang(validLang(lang), codebase);
	}
	
	function installWorker(){
			window.GGBT_offlineRequestHandler = (function() {
		    "use strict";
		    function isServiceWorkerSupported() {
		        return 'serviceWorker' in navigator && location.protocol === "https:";
		    }
		    function registerServiceWorker() {
		        //TODO: will be cool for offline working. Not ready for push messages yet, too small browser support, too many quirks
		        if (navigator.serviceWorker.controller) {
		            console.log("service worker already controlling the page");
		        } else {
		            navigator.serviceWorker.register('/sworker.js', {
		                scope: '/'
		            });
		        }
		    }
		    function initServiceWorker() {
		        if (isServiceWorkerSupported()) {
		            registerServiceWorker();
		        } else {
		            console.log("service workers not supported");
		        }
		    }
		    return {
		        initServiceWorker : initServiceWorker,
		    };
		})();
		window.GGBT_offlineRequestHandler.initServiceWorker();
	}
	function setPrerelease(prereleaseParam){
		document.body.className += "prerelease";
		e("ggw").setAttribute("data-param-prerelease",prereleaseParam);
		e("ggw").setAttribute("data-param-showlogging",true);
	}
	
	function setDebug(debugParam){
		e("ggw").setAttribute("data-param-showlogging",debugParam);
	}
	
	function getPerspective(){
		if(getURLparam("perspective")){
			return getURLparam("perspective");			
		}
		var parts = location.pathname.split("/");
		var path = parts.length == 1 || parts[parts.length-1].length? parts[parts.length-1] : parts[parts.length-2] ;
		if(location.hash.length || (path != '/apps' && path != '/apps/' && !path.match(/\.html$/))){
			return location.hash.length ? location.hash.replace('#','') : path;
		}
		return window.appID;
	}

	function mobileStartscreen(codebaseFn){
		var link = false;
		var androidLinks = {"geometry":"https://play.google.com/store/apps/details?id=org.geogebra.android.geometry",
				"graphing":"https://play.google.com/store/apps/details?id=org.geogebra.android",
				"3d":"https://play.google.com/store/apps/details?id=org.geogebra.android.g3d"};
		var iosLinks = {"graphing":"https://itunes.apple.com/us/app/geogebra-graphing-calculator/id1146717204",
				"geometry":"https://itunes.apple.com/us/app/geogebra-geometry-calculator/id1232591335"};
		
		if(/iPhone|iPad|iPod/i
			.test(window.navigator.userAgent)){
			link = iosLinks[window.appID];			
		}
		else {
			link = androidLinks[window.appID];
		}
		if(!link){
			return false;
		}
		var nameText = c("appName").innerText;
		var appName = document.createElement("H1");
		appName.innerText = nameText;
		appName.clasName = "appName";
		c("appName").parentElement.className += " mobile";
		//c("GeoGebraHeader").style.display= "none";
		var tryApp = document.createElement("a");
		tryApp.innerText = translation.tryApp || "Try App";
		var stay = document.createElement("a");
		stay.innerText = translation.stay || "Continue";
		c("startscreen").appendChild(appName);
		c("startscreen").appendChild(tryApp);
		c("startscreen").appendChild(stay);
		stay.addEventListener("click",function(){
			stay.style.opacity = 0;
			tryApp.style.opacity = 0;
			insertScript(codebaseFn());
		});
		
		tryApp.className = "tryApp";
		tryApp.target = "_blank";
		tryApp.rel = "noreferrer noopener";
		tryApp.href = link;
		return true;
	}

	function checkLogin(){
		installWorker();
		var names = {'geometry':2, 'spreadsheet':3, 'cas':4, '3d':5, 'probability':6, 'graphing':1, 'whiteboard':7,'calculator':8};
		var tubeid = getURLparam("id");
		var codebase = "https://cdn.geogebra.org/apps/"+latestVersion+"/";
		var checkId = location.pathname.match(/^\/(o|classic|graphing|geometry|3d|whiteboard)\/([a-zA-Z0-9]+)/);
		if(checkId && !names[checkId[2]]){
			tubeid = checkId[2];
			if(checkId[1] == "o"){
				appID = "auto";
			}
		}
		var wait = false;
		var skipAppsPicker = getURLparam("command") || getURLparam("state") || getURLparam("filename");
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i
				.test(window.navigator.userAgent) && c("appName") && !skipAppsPicker && !location.pathname.match(/lti/)){
			wait = mobileStartscreen(function(){return codebase;});
		}
		
		function resizeStart(){
			if(e("perspectivesBox")){
				if(window.innerHeight < 650 || window.innerWidth < 650){
					e("perspectivesBox").style.display = "none";
				} else {
					e("perspectivesBox").style.top= (Math.max(0,Math.round(window.innerHeight/2 -250))-53)+"px";
				}
			}
		}
		
		resizeStart();
		window.addEventListener && window.addEventListener("resize", resizeStart);
		if(e("ggw")){
			if(lookAndFeel){
				e("ggw").setAttribute("data-param-laf",lookAndFeel);
			}
			if(location.host.indexOf("beta") == 0 || getURLparam("prerelease") || prerelease){
				setPrerelease(prerelease || "true");
				
			}
			if(getURLparam("debug") || debug || isLocalhost()){
				setDebug(debug || true);
				
			}
			if(location.host.indexOf("alpha") == 0){
				setPrerelease("canary");
				e("ggw").setAttribute("data-param-materialsApi",location.protocol+"//"+location.host+"/api/json.php");
				e("ggw").setAttribute("data-param-loginApi","https://"+location.host+"/api/login.php");
				codebase = "https://autotest2.geogebra.org/job/GeoGebra-autotest/lastSuccessfulBuild/artifact/web/war/";
			}
			if(isLocalhost()){
				codebase = "./";
			}
		}
		
		if(tubeid){
			if(e("ggw")){
				e("ggw").setAttribute("data-param-tubeid",tubeid);
				if(window.appID){
					e("ggw").setAttribute("data-param-perspective",names[appID]);
				}
				var previewDiv = document.createElement("div");
				previewDiv.id= "ggbsplash";
				previewDiv.style.zIndex=1000;
				var preview = document.createElement("img");
				preview.style.margin="auto";
				preview.style.position="absolute";
				
				var xhr = new XMLHttpRequest();
				var materialHost = isLocalhost() ? "https://beta.geogebra.org":"";
				xhr.open("GET", materialHost + "/api/material_preview.php?u="+tubeid);
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.response) {
						preview.addEventListener && preview.addEventListener("load",function(){
						preview.style.top=(window.innerHeight/2-preview.height/2)+"px";
						preview.style.left=(window.innerWidth/2-preview.width/2)+"px";
						c("logo") && c("logo").style.setProperty("display", "none");
					});
						preview.src = xhr.response.replace("http:","https:");
					}
				};
				xhr.send();
				
				previewDiv.appendChild(preview);
				document.body.appendChild(previewDiv);
				perspective(false);
				insertScript(codebase);
				return;
			}
		}
		else if(getPerspective()){			
			var pName = getPerspective();
			if( pName.substring(0,6)=="search" || pName.substring(0,4) == "exam"){
				if(e("perspectivesBox")){
					e("perspectivesBox").style.display = "none";
				}
				wait || perspective(pName);
			}
			else{
				perspective(names[pName],pName);
			}
			document.body.className += " "+pName;
			document.body.className += " "+module;
			wait || insertScript(codebase);
			showStartScreen(codebase);
			return;
		}
		else if(skipAppsPicker ){
			perspective(false);
			insertScript(codebase);
			return;
		}
		
		showStartScreen(codebase);
		
		
		wait || insertScript(codebase);
		
		perspective(false, "picker"); //TODO
		
	}
</script>
<script type="text/javascript">
// test to see if the app is running as a chrome webapp
document.isChromeWebapp = function isChromeWebapp() {
	if (typeof chrome === 'object' && 
			typeof chrome.app === 'object' && 
			typeof chrome.app.isInstalled === 'boolean' && 
			chrome.app.isInstalled) {
			return true;
		}
		return false;
	};
</script>



    <!-- Google Analytics (Start) -->
	<script type="text/javascript">
	window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
	if(window.installAnalytics){
		window.installAnalytics('UA-1780044-1');
	} else {
		ga('create','UA-1780044-1','auto');
	}
	
	ga('send', 'pageview');
	
	var gaPrefixes = {"graphing":"Graphing", "geometry":"Geometry"};
	var gaLabel = gaPrefixes[window.appID] || "Classic";
	gaLabel += appOnline ? " Web" : " Offline";	
	ga('send', 'event', 'Startup', analyticsVersion, gaLabel);
	</script> 
	<script async src='https://www.google-analytics.com/analytics.js'></script>
 	<!-- Google Analytics (End) -->
    <script>
	    var GGW_appengine = GGW_appengine || {};
	    GGW_appengine.FILE_IDS = [""];
	    GGW_appengine.CLIENT_ID = "";
	    GGW_appengine.USER_EMAIL = "";
  	</script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <style>
    body {
    touch-action: none;
     -ms-touch-action: none; /* Direct all pointer events to JavaScript code. */
	 -webkit-tap-highlight-color: rgba(255, 255, 255, 0); /* avoid flash on Android http://stackoverflow.com/questions/5210481/*/
    }
    @charset "utf-8";
/* CSS Document */

body {
	color: #666666;
	font-size: 16px;
	font-family: sans-serif;
	margin: 0px;
	padding: 0px;
	position: fixed;
	top:0;
	width:100%;
	height:100%;
}
.application #ggbPage{
 display:none;
}

.startScreen{
    line-height: 120%;
}

.startScreen td{
padding:0;
}
.startScreen table{
border-spacing:0;
}

/** from LESS */
.perspectivesBox{
	width: 250px;
	position: absolute !important;
    right: 0px !important;
    left: auto !important;
    /* float: right; */
    
}
.perspectivesCaption{
	color: #6161FF !important;
}
.perspectivesMainPanel{
	width: 250px;
}
.perspectivesRow{
	float: left;
	padding-top: 7px;
    padding-bottom: 7px;
    text-align: left;
	cursor: pointer;
	display: block;
}
.perspectivesRow img{
	padding-right: 10px;
	padding-left: 5px;
}

.perspectiveHighlighted{
	background-color: #F0F0FF;
}
.perspectivesMargin{
	margin-bottom: 15px;
}
.perspectivesRow:hover{
	background-color: #CCCCFF;
}
.perspectivesHelp{
	position: absolute;
    right: 10px;
	cursor: pointer;
	width: 20px;
    height: 20px;
}

.dialogContent table {
    width: 100%;
}

.upperBorder{
    padding-top: 10px;
    padding-bottom: 0px;
    border-top: 1px solid #DCDCDC;
}
.upperBorder div{
	padding-top: 3px;
}

.DialogBox, .gwt-DialogBox {
    z-index: 501;
    /* box-shadow: 1px 1px 6px 1px #666666; */
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    box-shadow: 0px 0px 2px 1px rgba(102, 102, 102, 0.3);
    padding: 15px;
}

.gwt-DialogBox .Caption {
    cursor: default;
    font-family: geogebra-sans-serif, Arial Unicode MS, Arial, sans-serif;
    font-size: 110%;
    /* padding: 10px; */
    padding-bottom: 5px;
    color: #333333;
    border-bottom: 1px solid #DCDCDC;
    margin-bottom: 15px;
}

.storeIconHolder {
	width: 100%;
}

.storeIconHolder a, .storeIconHolder a:visited {
	display: inline-block;
	vertical-align: middle;
	padding-top: 10px;
	color:#666;
	font-size:16px;
	text-decoration: none;
}

.storeIconHolder .separatorDiv {
	clear: both;
}

.storeIconHolder a img:hover {
	background-color: #FFFFFF;
	opacity: 0.7;
}

.storeIconHolder .separatorDiv {
	clear: both;
	border-top: 1px solid #DCDCDC;
}
.downloadimg{
	position: absolute;
	left: 20px;
	opacity: 0.7;
}
.downloadlink{
	margin-left: 39px;
	vertical-align: middle;
	line-height: 24px;
}

/** TOOLBAR */
.GeoGebraFrame .toolbarPanel .toolBPanel ul{
margin:0;
padding:0;
}
.GeoGebraFrame .toolbarPanel .toolBPanel li.toolbar_item{
margin: 0px 5px 0px 0px;
    text-align: center;
    position: relative;
    width: 40px;
    height: 40px;
    display: block;
    float: left;
    float: left;
    float: left;
    list-style-type: none;
    cursor: pointer;
}

.GeoGebraFrame .toolbarPanel .toolBPanel .toolbar_button {
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #dcdcdc;
    background-color: #ffffff;
    padding: 3px;
    width: 32px;
    height: 32px;
}

.GeoGebraFrame .toolbarPanel {
    background-color: #f8f8f8;
    border-bottom: 1px solid #dcdcdc;
    -webkit-box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    -moz-box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    -webkit-box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    -moz-box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    -webkit-box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    -moz-box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    box-shadow: 0px 0px 2px rgba(204, 204, 204, 0.5);
    padding: 5px;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    z-index: 100;
}

.GeoGebraFrame .toolbarPanel{
 height:53px;
}
.ggbPageContent{
	bottom: 0;
    position: absolute !important;
    right: 0;
    top: 53px;
    left: 0;
}
/** KEYBOARD */

/* ### onScreenKeyboard ### */


/** input */
.startScreen .clearButtonWrapper{
	float:right;
	margin-top:18px;
	margin-right:10px;
	opacity:0.3;
}

.NewRadioButtonTreeItemParent.startScreen .latexEditor>div{
display:inline-block;
}

.NewRadioButtonTreeItemParent.startScreen {
position:absolute;
top:53px;
border-bottom:1px #dcdcdc solid;
width:20%;
}

.rightButtonPanel{
 float:right;
}

.rightButtonPanel.startScreen img{
 margin-top:6px;
 margin-right:11px;
}

.toolbarPanel.startScreen img{
 opacity:0.3;
}
/** Start scren splitter**/
.startScreen.splitter{
position: absolute; 
overflow: hidden; 
left: 20%; 
top: 53px; 
bottom: 0px; 
width: 8px; 
background-color:#f8f8f8; 
border:1px solid #dcdcdc
}

.toolBPanel.cas{
 display:none;
}

/** perspective specific */
.exam-simple .startScreen .toolBPanel, .exam-simple .startScreen.splitter  {
    display: none;
}

.exam-simple  .NewRadioButtonTreeItemParent.startScreen  {
    width: 100%;
}

.cas  .NewRadioButtonTreeItemParent.startScreen, .exam-cas  .NewRadioButtonTreeItemParent.startScreen  {
    width: 50%;
}

.cas .startScreen.splitter, .exam-cas .startScreen.splitter  {
    left: 50%;
}

.geometry .startScreen.splitter,
.geometry .startScreen.gwt-TreeItem   {
    display: none;
}

.whiteboard .startScreen.splitter,
.whiteboard .startScreen.gwt-TreeItem,
.whiteboard #appsPicker {
    display: none;
}
.cas .toolBPanel.cas, .exam-cas .toolBPanel.cas{
 display:block;
}

.cas .startScreen .toolBPanel.graphics, .exam-cas .startScreen .toolBPanel.graphics{
 display:none;
}

.exam-simple .startScreen .rightButtonPanel img:nth-child(1),
.exam-cas .startScreen .rightButtonPanel img:nth-child(1),
.exam-graphing .startScreen .rightButtonPanel img:nth-child(1),
.exam .startScreen .rightButtonPanel img:nth-child(1){
  display: none;
}

.tablet3d .examPerspectiveRow, .tablet .examPerspectiveRow{
  display:none;
}

/** OLD STUFF */


#ggbPage {
  background-color: #ffffff;
}

#ggbsplash {
  text-align:center;
  position:absolute;
  left:0px;
  top:0px;
  width:100%;
}

div.SymbolTablePopup{
  z-index:501;
}
.startScreen .perspectivesHelp{
	background-size:20px 20px;
	background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABE0lEQVR42t1V2w3CMAxkBEZgBEZghI7QERihG+Sjr8+MwAiMwAgdoSOUHLIlExwnBVEJIllNY/l1vji73d+vcRwPXded+773wzBcIdjjDLqPHMNRkCUjfnWgkGUVDGc4oIxr59ye9djjjHQIMsNmjfNioyiZqgSWmeSoOGpInnT4ZzsTLsZcZkJwTBr2icq9lf0DcwUGYD2FrxO4L3G2rFOrICrCsNaC875t2xMHwD5CoMY5fCXhkWyJF8F1owBTQq/DxOUVOn8hgUhUhTkbQEBoMiUZIAcRXyw0OlOlDpHVZNlgq0dmky2aygq15hbRNHXRhO7C9MyMGP/WqCBdE3N/1aj4+rDbZFxv8uBs8mT+zLoDT+fe+64Z+dIAAAAASUVORK5CYII=");
}
.perspImage{
	width:24px;
	height:24px;
}
    </style>
</head>
<body dir="ltr" tabindex="-1" onload="checkLogin()">
	<div id="ggbPage" style="display:none; background-color:#FFFFFF;position:absolute;top:0;bottom:0;left:0;right:0;z-index:1000;">

    <div id="ggbHeader" class="GeoGebraFrame">
        <div class="startScreen toolbarPanel">
            <div class="toolBPanel graphics">
			<ul>
			<li class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX21vdmUiPg0KCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiNGRkZGRkY7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjEzO3N0cm9rZS1taXRlcmxpbWl0OjEwOyIgcG9pbnRzPSIyOTguNzY5LDQyNi4xNjggMzM5Ljg5NSw0MDUuNjA1IA0KCQkyNzEuMzUxLDI2NS4wODggMzU3LjAzMSwyNTYuNTIxIDE2OC41MzMsOTIuMDEzIDE2NS4xMDYsMzUwLjc3IDIyOC41MSwyODUuNjUyIAkiLz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				  <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX3BvaW50Ij4NCgk8Zz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDAwMEZGOyIgY3g9IjE2OC43MDQiIGN5PSIzNTEuNzI1IiByPSI1My4zNzUiLz4NCgkJPHBhdGggZD0iTTE2OC43MDQsMzEwLjU1YzIyLjcwNCwwLDQxLjE3NSwxOC40NzIsNDEuMTc1LDQxLjE3NXMtMTguNDcxLDQxLjE3NS00MS4xNzUsNDEuMTc1cy00MS4xNzUtMTguNDcyLTQxLjE3NS00MS4xNzUNCgkJCVMxNDYsMzEwLjU1LDE2OC43MDQsMzEwLjU1IE0xNjguNzA0LDI5MC43MjVjLTMzLjY4OSwwLTYxLDI3LjMxMi02MSw2MXMyNy4zMTEsNjEsNjEsNjFjMzMuNjg5LDAsNjEtMjcuMzEyLDYxLTYxDQoJCQlTMjAyLjM5MywyOTAuNzI1LDE2OC43MDQsMjkwLjcyNUwxNjguNzA0LDI5MC43MjV6Ii8+DQoJPC9nPg0KCTxnIGlkPSJ0ZXh0Mzc4Ny0xIiB0cmFuc2Zvcm09InNjYWxlKDAuOTkzNjA5MDEsMS4wMDY0MzIxKSI+DQoJCTxwYXRoIGlkPSJwYXRoMzAyMCIgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGQ9Ik00MzAuOTUzLDI1MS4yNTdoLTI0LjkxNGwtMTguMjg2LTQ1LjI1NmgtODIuNzQybC0xOC41MTUsNDUuMjU2aC0yNC4yMjgNCgkJCWw3MS4wODUtMTY4LjkxM2gyNS42TDQzMC45NTMsMjUxLjI1N3ogTTM3Ny45MjUsMTg2LjExNWwtMzIuMjI4LTc3Ljk0M2wtMzEuNTQyLDc3Ljk0M0gzNzcuOTI1eiIvPg0KCTwvZz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2pvaW4iPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjEzOyIgeDE9Ii0xMC4yMjUiIHkxPSI0NDIuNDEyIiB4Mj0iNTIyLjIyNSIgeTI9IjY5LjU4OCIvPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMDAwRkY7IiBjeD0iMzYyIiBjeT0iMTgxLjk2NCIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTM2MiwxNTQuOTY0YzE0Ljg4NywwLDI3LDEyLjExMywyNywyN2MwLDE0Ljg4OC0xMi4xMTMsMjcuMDAxLTI3LDI3LjAwMWMtMTQuODg5LDAtMjctMTIuMTEzLTI3LTI3LjAwMQ0KCQkJQzMzNSwxNjcuMDc3LDM0Ny4xMTEsMTU0Ljk2NCwzNjIsMTU0Ljk2NCBNMzYyLDE0MS45NjRjLTIyLjA5MiwwLTQwLDE3LjkxLTQwLDQwYzAsMjIuMDkxLDE3LjkwOCw0MC4wMDEsNDAsNDAuMDAxDQoJCQlzNDAtMTcuOTEsNDAtNDAuMDAxQzQwMiwxNTkuODc0LDM4NC4wOTIsMTQxLjk2NCwzNjIsMTQxLjk2NEwzNjIsMTQxLjk2NHoiLz4NCgk8L2c+DQoJPGc+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGN4PSIxNTAiIGN5PSIzMzAuMzAxIiByPSIzNSIvPg0KCQk8cGF0aCBkPSJNMTUwLDMwMy4zMDFjMTQuODg4LDAsMjcsMTIuMTEzLDI3LDI3YzAsMTQuODg4LTEyLjExMiwyNy4wMDEtMjcsMjcuMDAxcy0yNy0xMi4xMTMtMjctMjcuMDAxDQoJCQlDMTIzLDMxNS40MTQsMTM1LjExMiwzMDMuMzAxLDE1MCwzMDMuMzAxIE0xNTAsMjkwLjMwMWMtMjIuMDkxLDAtNDAsMTcuOTEtNDAsNDBjMCwyMi4wOTEsMTcuOTA5LDQwLjAwMSw0MCw0MC4wMDENCgkJCWMyMi4wOTIsMCw0MC0xNy45MSw0MC00MC4wMDFDMTkwLDMwOC4yMTEsMTcyLjA5MiwyOTAuMzAxLDE1MCwyOTAuMzAxTDE1MCwyOTAuMzAxeiIvPg0KCTwvZz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX29ydGhvZ29uYWwiPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMxQTAwMDA7c3Ryb2tlLXdpZHRoOjEzOyIgeDE9Ii0xNC43MjkiIHkxPSI0NDMuNjIxIiB4Mj0iNTY0LjgyNiIgeTI9IjI4OC4zMyIvPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiNGRjAwMDA7c3Ryb2tlLXdpZHRoOjEzOyIgeDE9IjM0NC41IiB5MT0iNTM3LjA4MyIgeDI9IjE4OS4yMDgiIHkyPSItNDIuNDczIi8+DQoJPGc+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGN4PSIyNDAuMDQ5IiBjeT0iMTUwLjAzOSIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTI0MC4wNDksMTIzLjAzOWMxNC44ODcsMCwyNywxMi4xMTIsMjcsMjdzLTEyLjExMywyNy0yNywyN2MtMTQuODg4LDAtMjcuMDAxLTEyLjExMi0yNy4wMDEtMjcNCgkJCVMyMjUuMTYyLDEyMy4wMzksMjQwLjA0OSwxMjMuMDM5IE0yNDAuMDQ5LDExMC4wMzljLTIyLjA5MiwwLTQwLjAwMSwxNy45MDktNDAuMDAxLDQwczE3LjkwOSw0MCw0MC4wMDEsNDANCgkJCWMyMi4wOTEsMCw0MC0xNy45MDksNDAtNDBTMjYyLjE0MSwxMTAuMDM5LDI0MC4wNDksMTEwLjAzOUwyNDAuMDQ5LDExMC4wMzl6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX3BvbHlnb24iPg0KCTxwb2x5Z29uIHN0eWxlPSJvcGFjaXR5OjAuMjtmaWxsOiM5OTMzMDA7IiBwb2ludHM9Ijk1LjMxLDQzMS44NSA0MTUuMzI0LDI4MS4wODMgMTM1LjMxMyw4MC4xNSAJIi8+DQoJPHBvbHlnb24gc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6Izk5MzMwMDtzdHJva2Utd2lkdGg6MTM7c3Ryb2tlLW1pdGVybGltaXQ6MTA7IiBwb2ludHM9Ijk1LjMxLDQzMS44NSA0MTUuMzI0LDI4MS4wODMgDQoJCTEzNS4zMTMsODAuMTUgCSIvPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMDAwRkY7IiBjeD0iMTM1LjMxMyIgY3k9IjgwLjE0OSIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTE1Ny40MzIsNjQuNjYzYzguNTM3LDEyLjE5Myw1LjU2MywyOS4wNjQtNi42MzEsMzcuNjA0Yy0xMi4xOTUsOC41MzktMjkuMDY2LDUuNTY0LTM3LjYwNS02LjYzMQ0KCQkJcy01LjU2NC0yOS4wNjQsNi42MzEtMzcuNjA0UzE0OC44OTEsNTIuNDY4LDE1Ny40MzIsNjQuNjYzIE0xNjguMDgsNTcuMjA2Yy0xMi42NzItMTguMDk2LTM3LjYxNS0yMi40OTItNTUuNzA5LTkuODIyDQoJCQljLTE4LjA5NiwxMi42Ny0yMi40OTYsMzcuNjEzLTkuODI0LDU1LjcwOWMxMi42NzIsMTguMDk4LDM3LjYxMywyMi40OTQsNTUuNzA5LDkuODI0DQoJCQlDMTc2LjM1MiwxMDAuMjQ1LDE4MC43NTIsNzUuMzA0LDE2OC4wOCw1Ny4yMDZMMTY4LjA4LDU3LjIwNnoiLz4NCgk8L2c+DQoJPGc+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGN4PSI0MTUuMzI0IiBjeT0iMjgxLjA4MiIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTQzNy40NDIsMjY1LjU5NmM4LjUzNywxMi4xOTMsNS41NjMsMjkuMDY0LTYuNjMxLDM3LjYwNGMtMTIuMTk1LDguNTM5LTI5LjA2Niw1LjU2NC0zNy42MDUtNi42MzENCgkJCXMtNS41NjQtMjkuMDY0LDYuNjMxLTM3LjYwNFM0MjguOTAxLDI1My40LDQzNy40NDIsMjY1LjU5NiBNNDQ4LjA5MSwyNTguMTM5Yy0xMi42NzItMTguMDk2LTM3LjYxNS0yMi40OTItNTUuNzA5LTkuODIyDQoJCQljLTE4LjA5NiwxMi42Ny0yMi40OTYsMzcuNjEzLTkuODI0LDU1LjcwOWMxMi42NzIsMTguMDk4LDM3LjYxMywyMi40OTQsNTUuNzA5LDkuODI0DQoJCQlDNDU2LjM2MiwzMDEuMTc4LDQ2MC43NjMsMjc2LjIzNiw0NDguMDkxLDI1OC4xMzlMNDQ4LjA5MSwyNTguMTM5eiIvPg0KCTwvZz4NCgk8Zz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDAwMEZGOyIgY3g9Ijk1LjMxIiBjeT0iNDMxLjg0OSIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTExNy40MjgsNDE2LjM2MmM4LjUzNywxMi4xOTMsNS41NjMsMjkuMDY0LTYuNjMxLDM3LjYwNGMtMTIuMTk1LDguNTM5LTI5LjA2Niw1LjU2NC0zNy42MDUtNi42MzENCgkJCXMtNS41NjQtMjkuMDY0LDYuNjMxLTM3LjYwNFMxMDguODg3LDQwNC4xNjcsMTE3LjQyOCw0MTYuMzYyIE0xMjguMDc2LDQwOC45MDVjLTEyLjY3Mi0xOC4wOTYtMzcuNjE1LTIyLjQ5Mi01NS43MDktOS44MjINCgkJCWMtMTguMDk2LDEyLjY3LTIyLjQ5NiwzNy42MTMtOS44MjQsNTUuNzA5YzEyLjY3MiwxOC4wOTgsMzcuNjEzLDIyLjQ5NCw1NS43MDksOS44MjQNCgkJCUMxMzYuMzQ4LDQ1MS45NDQsMTQwLjc0OCw0MjcuMDAzLDEyOC4wNzYsNDA4LjkwNUwxMjguMDc2LDQwOC45MDV6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2NpcmNsZTIiPg0KCQ0KCQk8cGF0aCBpZD0icGF0aDI5ODRfMl8iIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjEzOyIgZD0iDQoJCU00NDAuMTEsMjU2YzAsMTAxLjUwMi04Mi40MjksMTgzLjc4NS0xODQuMTEsMTgzLjc4NWMtMTAxLjY4MSwwLTE4NC4xMS04Mi4yODMtMTg0LjExLTE4My43ODVTMTU0LjMxOSw3Mi4yMTUsMjU2LDcyLjIxNQ0KCQlDMzU3LjY4Miw3Mi4yMTUsNDQwLjExLDE1NC40OTgsNDQwLjExLDI1NnoiLz4NCgk8Zz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDAwMEZGOyIgY3g9IjQwNi4zMjgiIGN5PSIxNDkuNDQ3IiByPSIzNSIvPg0KCQk8cGF0aCBkPSJNNDI4LjQ0NiwxMzMuOTYxYzguNTM3LDEyLjE5Myw1LjU2MywyOS4wNjQtNi42MzEsMzcuNjA0Yy0xMi4xOTUsOC41MzktMjkuMDY2LDUuNTY0LTM3LjYwNS02LjYzMQ0KCQkJcy01LjU2NC0yOS4wNjQsNi42MzEtMzcuNjA0UzQxOS45MDUsMTIxLjc2Niw0MjguNDQ2LDEzMy45NjEgTTQzOS4wOTUsMTI2LjUwNGMtMTIuNjcyLTE4LjA5Ni0zNy42MTUtMjIuNDkyLTU1LjcwOS05LjgyMg0KCQkJYy0xOC4wOTYsMTIuNjctMjIuNDk2LDM3LjYxMy05LjgyNCw1NS43MDljMTIuNjcyLDE4LjA5OCwzNy42MTMsMjIuNDk0LDU1LjcwOSw5LjgyNA0KCQkJQzQ0Ny4zNjYsMTY5LjU0Myw0NTEuNzY3LDE0NC42MDIsNDM5LjA5NSwxMjYuNTA0TDQzOS4wOTUsMTI2LjUwNHoiLz4NCgk8L2c+DQoJPGc+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGN4PSIyNTYiIGN5PSIyNTUuOTk5IiByPSIzNSIvPg0KCQk8cGF0aCBkPSJNMjc4LjExOCwyNDAuNTEzYzguNTM3LDEyLjE5Myw1LjU2MywyOS4wNjQtNi42MzEsMzcuNjA0Yy0xMi4xOTUsOC41MzktMjkuMDY2LDUuNTY0LTM3LjYwNS02LjYzMQ0KCQkJcy01LjU2NC0yOS4wNjQsNi42MzEtMzcuNjA0UzI2OS41NzcsMjI4LjMxNywyNzguMTE4LDI0MC41MTMgTTI4OC43NjcsMjMzLjA1NmMtMTIuNjcyLTE4LjA5Ni0zNy42MTUtMjIuNDkyLTU1LjcwOS05LjgyMg0KCQkJYy0xOC4wOTYsMTIuNjctMjIuNDk2LDM3LjYxMy05LjgyNCw1NS43MDljMTIuNjcyLDE4LjA5OCwzNy42MTMsMjIuNDk0LDU1LjcwOSw5LjgyNA0KCQkJQzI5Ny4wMzgsMjc2LjA5NSwzMDEuNDM4LDI1MS4xNTMsMjg4Ljc2NywyMzMuMDU2TDI4OC43NjcsMjMzLjA1NnoiLz4NCgk8L2c+DQo8L2c+DQo8ZyBpZD0iRWJlbmVfMSI+DQo8L2c+DQo8L3N2Zz4NCg==" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2VsbGlwc2UzIj4NCgk8cGF0aCBkPSJNMjA4LjQzOSw0NjMuODU1Yy00OS4wOTEsMC05Mi4xMS0xOC43NzEtMTIxLjEzMy01Mi44NTRjLTMwLjkzMS0zNi4zMjQtNDMuMTMyLTg2LjI3LTM0LjM1Ni0xNDAuNjM2DQoJCWM4Ljg4My01NS4wMjgsMzguMTY5LTEwOC4zNTUsODIuNDYzLTE1MC4xNThjNDQuMzM1LTQxLjg0Miw5OC40ODktNjcuMjE0LDE1Mi40ODYtNzEuNDQzYzUuMjQ5LTAuNDExLDEwLjUxOS0wLjYyLDE1LjY2NS0wLjYyDQoJCWM0OS4wOSwwLDkyLjEwOCwxOC43NywxMjEuMTMxLDUyLjg1M2MzMC45MzIsMzYuMzI0LDQzLjEzMiw4Ni4yNywzNC4zNTYsMTQwLjYzN2MtOC44ODMsNTUuMDI4LTM4LjE2OSwxMDguMzU1LTgyLjQ2MywxNTAuMTU4DQoJCWMtNDQuMzM1LDQxLjg0Mi05OC40ODksNjcuMjE0LTE1Mi40ODcsNzEuNDQzQzIxOC44NTQsNDYzLjY0NywyMTMuNTg0LDQ2My44NTUsMjA4LjQzOSw0NjMuODU1eiBNMzAzLjU2Myw2MS4xNDUNCgkJYy00LjgwOSwwLTkuNzM3LDAuMTk1LTE0LjY0OSwwLjU4QzE4My4yOTksNjkuOTk3LDgzLjIwMywxNjQuNTIyLDY1Ljc4MywyNzIuNDM4Yy04LjE1OSw1MC41NDMsMyw5Ni43NTksMzEuNDIsMTMwLjEzNQ0KCQljMjYuNTEzLDMxLjEzNiw2Ni4wMTcsNDguMjgzLDExMS4yMzYsNDguMjgzYzQuODA4LDAsOS43MzYtMC4xOTUsMTQuNjQ3LTAuNThjMTA1LjYxNS04LjI3MSwyMDUuNzEtMTAyLjc5NywyMjMuMTMtMjEwLjcxMg0KCQljOC4xNTktNTAuNTQ0LTIuOTk5LTk2Ljc2MS0zMS40Mi0xMzAuMTM3QzM4OC4yODUsNzguMjkyLDM0OC43ODEsNjEuMTQ1LDMwMy41NjMsNjEuMTQ1eiIvPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMDAwRkY7IiBjeD0iMTA5Ljc3MyIgY3k9IjE1OC4wODgiIHI9IjM1Ii8+DQoJCTxwYXRoIGQ9Ik0xMzEuODkyLDE0Mi42MDJjOC41MzcsMTIuMTkzLDUuNTYzLDI5LjA2NC02LjYzMSwzNy42MDRjLTEyLjE5NSw4LjUzOS0yOS4wNjYsNS41NjQtMzcuNjA1LTYuNjMxDQoJCQlzLTUuNTY0LTI5LjA2NCw2LjYzMS0zNy42MDRTMTIzLjM1MSwxMzAuNDA2LDEzMS44OTIsMTQyLjYwMiBNMTQyLjU0LDEzNS4xNDVjLTEyLjY3Mi0xOC4wOTYtMzcuNjE1LTIyLjQ5Mi01NS43MDktOS44MjINCgkJCWMtMTguMDk2LDEyLjY3LTIyLjQ5NiwzNy42MTMtOS44MjQsNTUuNzA5YzEyLjY3MiwxOC4wOTcsMzcuNjEzLDIyLjQ5NCw1NS43MDksOS44MjQNCgkJCUMxNTAuODEyLDE3OC4xODQsMTU1LjIxMiwxNTMuMjQyLDE0Mi41NCwxMzUuMTQ1TDE0Mi41NCwxMzUuMTQ1eiIvPg0KCTwvZz4NCgk8Zz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDAwMEZGOyIgY3g9IjE2Ny43NzciIGN5PSIzNTEuNDE4IiByPSIzNSIvPg0KCQk8cGF0aCBkPSJNMTg5Ljg5NiwzMzUuOTMyYzguNTM3LDEyLjE5Myw1LjU2MywyOS4wNjQtNi42MzEsMzcuNjA0Yy0xMi4xOTUsOC41MzktMjkuMDY2LDUuNTY0LTM3LjYwNS02LjYzMQ0KCQkJcy01LjU2NC0yOS4wNjQsNi42MzEtMzcuNjA0UzE4MS4zNTQsMzIzLjczNiwxODkuODk2LDMzNS45MzIgTTIwMC41NDQsMzI4LjQ3NWMtMTIuNjcyLTE4LjA5Ni0zNy42MTUtMjIuNDkyLTU1LjcwOS05LjgyMg0KCQkJYy0xOC4wOTYsMTIuNjctMjIuNDk2LDM3LjYxMy05LjgyNCw1NS43MDljMTIuNjcyLDE4LjA5OCwzNy42MTMsMjIuNDk0LDU1LjcwOSw5LjgyNA0KCQkJQzIwOC44MTUsMzcxLjUxNCwyMTMuMjE2LDM0Ni41NzIsMjAwLjU0NCwzMjguNDc1TDIwMC41NDQsMzI4LjQ3NXoiLz4NCgk8L2c+DQoJPGc+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGN4PSIzNDguMDU3IiBjeT0iMTU4LjA4NyIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTM3MC4xNzUsMTQyLjYwMWM4LjUzNywxMi4xOTMsNS41NjMsMjkuMDY0LTYuNjMxLDM3LjYwNGMtMTIuMTk1LDguNTM5LTI5LjA2Niw1LjU2NC0zNy42MDUtNi42MzENCgkJCXMtNS41NjQtMjkuMDY0LDYuNjMxLTM3LjYwNFMzNjEuNjM0LDEzMC40MDYsMzcwLjE3NSwxNDIuNjAxIE0zODAuODIzLDEzNS4xNDRjLTEyLjY3Mi0xOC4wOTYtMzcuNjE1LTIyLjQ5Mi01NS43MDktOS44MjINCgkJCWMtMTguMDk2LDEyLjY3LTIyLjQ5NiwzNy42MTMtOS44MjQsNTUuNzA5YzEyLjY3MiwxOC4wOTgsMzcuNjEzLDIyLjQ5NCw1NS43MDksOS44MjQNCgkJCUMzODkuMDk1LDE3OC4xODMsMzkzLjQ5NSwxNTMuMjQyLDM4MC44MjMsMTM1LjE0NEwzODAuODIzLDEzNS4xNDR6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2FuZ2xlIj4NCgk8cGF0aCBzdHlsZT0ib3BhY2l0eTowLjI7ZmlsbDojRkYwMDAwOyIgZD0iTTEwOC40MTUsMzM1LjUxMmwxNTkuNTE0LDQ0LjUxN2MwLDAsMzUuMTc5LTg4LjExMy00OC4xMjUtMTYzLjgyMUwxMDguNDE1LDMzNS41MTJ6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6I0ZGMDAwMDtzdHJva2Utd2lkdGg6MTM7c3Ryb2tlLW1pdGVybGltaXQ6MTA7IiBkPSJNMTA4LjQxNSwzMzUuNTEybDE1OS41MTQsNDQuNTE3DQoJCWMwLDAsMzUuMTc5LTg4LjExMy00OC4xMjUtMTYzLjgyMUwxMDguNDE1LDMzNS41MTJ6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGMDAwMDsiIGQ9Ik0zNTAuNywyOTkuNTQ3Yy03LjcxMSwwLjAwMS0xNC45NC0zLjQzMy0xOS41NzMtOS43M2wtMC4wNjQtMC4wOQ0KCQljLTEyLjMyNi0xNy41NTUtOC43Ny00MC45NTcsMS41OTQtNTIuNTcxYzcuNjk4LTguNjI4LDE4LjQzMS0xMC40NDMsMjguNzA2LTQuODQ5bDAuMjQ0LDAuMTQxDQoJCWM0LjgwMSwyLjk3NSw4LjM3Niw2LjYyOSwxMS4xNjUsMTAuNjk4YzEuODE3LTcuMjQ5LDMuNjI1LTEwLjI3Myw1LjA4My0xMi43MTNjMC43OS0xLjMyMSwxLjE4Ni0xLjk4NCwxLjQ2My0zLjI0N2w5Ljc2OCwyLjE0Mw0KCQljLTAuNjI1LDIuODUyLTEuNjUyLDQuNTcxLTIuNjQ2LDYuMjMzYy0xLjY0MSwyLjc0Ni00LjA5Miw2Ljg0OS02LjQwOCwyMy4xNGMwLjkxNCwyLjc2MiwxLjczLDUuNTU5LDIuNTQzLDguMzM2DQoJCWMyLjQ5Niw4LjU0NCw0Ljg1NSwxNi42MTMsOS43NTEsMjIuODY1bC03Ljg3Myw2LjE2NmMtMy40MjctNC4zNzYtNS43OTMtOS4yNjUtNy42ODEtMTQuMzIzDQoJCWMtMy43LDguMzM1LTEwLjAwMywxMy41NDYtMTYuMzE1LDE1Ljk2NUMzNTcuMjI0LDI5OC45NDgsMzUzLjkyLDI5OS41NDcsMzUwLjcsMjk5LjU0N3ogTTMzOS4yMTMsMjgzLjkzNA0KCQljMy44NzQsNS4yMjEsMTAuOTY1LDcuMDA1LDE3LjY2NSw0LjQzOGM5LjQ5MS0zLjYzNywxNC4zNDItMTQuMTM1LDEyLjk3Ny0yOC4wODFsLTAuMDU3LTAuNTc4bDAuMDAxLTAuMDAzDQoJCWMtMi43MzUtNy42MjUtNi4zOS0xNC4zMy0xMy4zMzktMTguNjg2Yy03Ljc0NS00LjE1LTEzLjE1OC0wLjc4LTE2LjM0MywyLjc4OUMzMzIuMjcsMjUyLjYwOCwzMzAuMDQxLDI3MC44MTcsMzM5LjIxMywyODMuOTM0eiIvPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMxQTE3MUI7c3Ryb2tlLXdpZHRoOjEzOyIgeDE9IjEwOC40MTUiIHkxPSIzMzUuNTEzIiB4Mj0iMzMzLjc5NiIgeTI9Ijk0LjExNCIvPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMxQTE3MUI7c3Ryb2tlLXdpZHRoOjEzOyIgeDE9IjEwOC40MTUiIHkxPSIzMzUuNTEzIiB4Mj0iNDAzLjU4NCIgeTI9IjQxNy44ODYiLz4NCgk8Zz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDAwMEZGOyIgY3g9IjMzMy43OTYiIGN5PSI5NC4xMTMiIHI9IjM1Ii8+DQoJCTxwYXRoIGQ9Ik0zNTUuOTE0LDc4LjYyN2M4LjUzNywxMi4xOTMsNS41NjMsMjkuMDY0LTYuNjMxLDM3LjYwNGMtMTIuMTk1LDguNTM5LTI5LjA2Niw1LjU2NC0zNy42MDUtNi42MzENCgkJCXMtNS41NjQtMjkuMDY0LDYuNjMxLTM3LjYwNFMzNDcuMzczLDY2LjQzMiwzNTUuOTE0LDc4LjYyNyBNMzY2LjU2Myw3MS4xN2MtMTIuNjcyLTE4LjA5Ni0zNy42MTUtMjIuNDkyLTU1LjcwOS05LjgyMg0KCQkJYy0xOC4wOTYsMTIuNjctMjIuNDk2LDM3LjYxMy05LjgyNCw1NS43MDljMTIuNjcyLDE4LjA5OCwzNy42MTMsMjIuNDk1LDU1LjcwOSw5LjgyNA0KCQkJQzM3NC44MzQsMTE0LjIwOSwzNzkuMjM0LDg5LjI2OCwzNjYuNTYzLDcxLjE3TDM2Ni41NjMsNzEuMTd6Ii8+DQoJPC9nPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMDAwRkY7IiBjeD0iMTA4LjQxNSIgY3k9IjMzNS41MTIiIHI9IjM1Ii8+DQoJCTxwYXRoIGQ9Ik0xMzAuNTMzLDMyMC4wMjVjOC41MzcsMTIuMTkzLDUuNTYzLDI5LjA2NC02LjYzMSwzNy42MDRjLTEyLjE5NSw4LjUzOS0yOS4wNjYsNS41NjQtMzcuNjA1LTYuNjMxDQoJCQlzLTUuNTY0LTI5LjA2NCw2LjYzMS0zNy42MDRTMTIxLjk5MiwzMDcuODMsMTMwLjUzMywzMjAuMDI1IE0xNDEuMTgyLDMxMi41NjhjLTEyLjY3Mi0xOC4wOTYtMzcuNjE1LTIyLjQ5Mi01NS43MDktOS44MjINCgkJCWMtMTguMDk2LDEyLjY3LTIyLjQ5NiwzNy42MTMtOS44MjQsNTUuNzA5YzEyLjY3MiwxOC4wOTgsMzcuNjEzLDIyLjQ5NCw1NS43MDksOS44MjQNCgkJCUMxNDkuNDUzLDM1NS42MDcsMTUzLjg1NCwzMzAuNjY2LDE0MS4xODIsMzEyLjU2OEwxNDEuMTgyLDMxMi41Njh6Ii8+DQoJPC9nPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMDAwRkY7IiBjeD0iNDAzLjU4NCIgY3k9IjQxNy44ODUiIHI9IjM1Ii8+DQoJCTxwYXRoIGQ9Ik00MjUuNzAyLDQwMi4zOThjOC41MzcsMTIuMTkzLDUuNTYzLDI5LjA2NC02LjYzMSwzNy42MDRjLTEyLjE5NSw4LjUzOS0yOS4wNjYsNS41NjQtMzcuNjA1LTYuNjMxDQoJCQlzLTUuNTY0LTI5LjA2NCw2LjYzMS0zNy42MDRTNDE3LjE2MSwzOTAuMjAzLDQyNS43MDIsNDAyLjM5OCBNNDM2LjM1MSwzOTQuOTQxYy0xMi42NzItMTguMDk2LTM3LjYxNS0yMi40OTItNTUuNzA5LTkuODIyDQoJCQljLTE4LjA5NiwxMi42Ny0yMi40OTYsMzcuNjEzLTkuODI0LDU1LjcwOWMxMi42NzIsMTguMDk4LDM3LjYxMywyMi40OTQsNTUuNzA5LDkuODI0DQoJCQlDNDQ0LjYyMiw0MzcuOTgsNDQ5LjAyMiw0MTMuMDM5LDQzNi4zNTEsMzk0Ljk0MUw0MzYuMzUxLDM5NC45NDF6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> 
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX21pcnJvcmF0bGluZSI+DQoJPGc+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwMDBGRjsiIGN4PSIxMTUuODUyIiBjeT0iMzczLjUyMSIgcj0iMzUiLz4NCgkJPHBhdGggZD0iTTExNS44NTIsMzQ2LjUyMWMxNC44ODgsMCwyNywxMi4xMTIsMjcsMjdzLTEyLjExMiwyNy4wMDEtMjcsMjcuMDAxcy0yNy0xMi4xMTMtMjctMjcuMDAxDQoJCQlTMTAwLjk2NCwzNDYuNTIxLDExNS44NTIsMzQ2LjUyMSBNMTE1Ljg1MiwzMzMuNTIxYy0yMi4wOTIsMC00MCwxNy45MDktNDAsNDBzMTcuOTA4LDQwLjAwMSw0MCw0MC4wMDFzNDAtMTcuOTEsNDAtNDAuMDAxDQoJCQlTMTM3Ljk0NCwzMzMuNTIxLDExNS44NTIsMzMzLjUyMUwxMTUuODUyLDMzMy41MjF6Ii8+DQoJPC9nPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiNGRjAwMDA7IiBjeD0iMzkwLjIxNyIgY3k9IjE0My4yODgiIHI9IjM1Ii8+DQoJCTxwYXRoIGQ9Ik0zOTAuMjE3LDExNi4yODhjMTQuODg4LDAsMjcsMTIuMTEyLDI3LDI3YzAsMTQuODg4LTEyLjExMiwyNy4wMDEtMjcsMjcuMDAxcy0yNy0xMi4xMTMtMjctMjcuMDAxDQoJCQlDMzYzLjIxNywxMjguNCwzNzUuMzI5LDExNi4yODgsMzkwLjIxNywxMTYuMjg4IE0zOTAuMjE3LDEwMy4yODhjLTIyLjA5MiwwLTQwLDE3LjkwOS00MCw0MGMwLDIyLjA5MSwxNy45MDgsNDAuMDAxLDQwLDQwLjAwMQ0KCQkJczQwLTE3LjkxLDQwLTQwLjAwMUM0MzAuMjE3LDEyMS4xOTcsNDEyLjMwOSwxMDMuMjg4LDM5MC4yMTcsMTAzLjI4OEwzOTAuMjE3LDEwMy4yODh6Ii8+DQoJPC9nPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjEzOyIgeDE9IjM1LjAyNSIgeTE9Ii03Ljk4MyIgeDI9IjQ3Ni45NzUiIHkyPSI1MTkuOTgzIi8+DQo8L2c+DQo8ZyBpZD0iRWJlbmVfMSI+DQo8L2c+DQo8L3N2Zz4NCg==" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX3NsaWRlciI+DQoJPHBhdGggc3R5bGU9ImRpc3BsYXk6bm9uZTtvcGFjaXR5OjAuNDtmaWxsOiMxQTE3MUI7IiBkPSJNNDg2LDM0MC41NjNjMCw4LjI4NC03LjYxMSwxNS0xNywxNUg0M2MtOS4zODksMC0xNy02LjcxNi0xNy0xNWwwLDANCgkJYzAtOC4yODQsNy42MTEtMTUsMTctMTVoNDI2QzQ3OC4zODksMzI1LjU2Myw0ODYsMzMyLjI3OCw0ODYsMzQwLjU2M0w0ODYsMzQwLjU2M3oiLz4NCgk8cGF0aCBzdHlsZT0iZGlzcGxheTpub25lO29wYWNpdHk6MC40O2ZpbGw6IzFBMTcxQjsiIGQ9Ik00ODYsMzUwLjU2M2MwLDEzLjgwNy0xMS4xOTMsMjUtMjUsMjVINTFjLTEzLjgwNywwLTI1LTExLjE5My0yNS0yNWwwLDANCgkJYzAtMTMuODA3LDExLjE5My0yNSwyNS0yNWg0MTBDNDc0LjgwNywzMjUuNTYzLDQ4NiwzMzYuNzU2LDQ4NiwzNTAuNTYzTDQ4NiwzNTAuNTYzeiIvPg0KCTxsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjEzO3N0cm9rZS1taXRlcmxpbWl0OjEwOyIgeDE9IjU2IiB5MT0iMzUwLjU2MyIgeDI9IjQ1NiIgeTI9IjM1MC41NjMiLz4NCgk8Y2lyY2xlIHN0eWxlPSJvcGFjaXR5OjAuNTtmaWxsOiMxQTE3MUI7IiBjeD0iMjU2IiBjeT0iMzUwLjU2MyIgcj0iNDAiLz4NCgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMxQTE3MUI7IiBjeD0iMjU2IiBjeT0iMzUwLjU2MyIgcj0iMjciLz4NCgk8Zz4NCgkJPHBhdGggZD0iTTE2MC42MjQsMjM0LjEyM2gtMTUuMjczYy0xLjIxOS02LjQxNy0xLjg4My0xMC41NjgtMS45OTItMTIuNDUxYy0yLjg3OSwzLjQzMi01LjIwNCw2LjAwNS02Ljk3Myw3LjcyDQoJCQljLTEuNzcxLDEuNzE3LTQuMzE2LDMuMjk0LTcuNjM3LDQuNzMxcy03LjA4NCwyLjE1OC0xMS4yODksMi4xNThjLTguMDgsMC0xNS41MjItMi4xODQtMjIuMzI5LTYuNTU4DQoJCQljLTYuODA3LTQuMzcxLTEwLjIxLTEwLjM3Ni0xMC4yMS0xOC4wMTNjMC00Ljk4LDAuOTY4LTkuMzUyLDIuOTA1LTEzLjExNWMxLjkzNS0zLjc2MSw0LjQyNS02Ljc3OCw3LjQ3MS05LjA0OA0KCQkJYzMuMDQzLTIuMjY3LDYuNjY3LTQuMTIyLDEwLjg3NC01LjU2MmM0LjIwNS0xLjQzNyw4LjMwMS0yLjQwNywxMi4yODUtMi45MDVzOC4xODktMC43NDcsMTIuNjE3LTAuNzQ3DQoJCQljMS4zMjgsMCwzLjI2MywwLjA1Nyw1LjgxMSwwLjE2NmMyLjU0NSwwLjExMSw0LjQ4MiwwLjE2Niw1LjgxMSwwLjE2NmMxLjQzNy02LjUyOSwwLjYwNy0xMS44OTYtMi40OS0xNi4xMDQNCgkJCWMtMy4xLTQuMjA1LTguMzU4LTYuMzA5LTE1Ljc3MS02LjMwOWMtNS4yMDQsMC05LjY4NiwxLjEwNy0xMy40NDcsMy4zMmMtMy43NjQsMi4yMTUtNS42NDUsNS43MDItNS42NDUsMTAuNDU5SDg5LjU2OQ0KCQkJYzAtMTYuNzEsMTEuMzk4LTI1LjA2OCwzNC4xOTktMjUuMDY4YzE4LjAzOSwwLDI4Ljk0MSw0LjgxNCwzMi43MDUsMTQuNDQzYzEuMzI4LDMuMSwxLjk5MiwxMi4wNjQsMS45OTIsMjYuODk1djE0Ljc3NQ0KCQkJQzE1OC40NjYsMjE5LjU3MSwxNTkuMTg1LDIyOS45MTgsMTYwLjYyNCwyMzQuMTIzeiBNMTQyLjUyOCwxOTIuMjg3Yy01LjY0NS0wLjMzMi04LjU3OC0wLjQ5OC04Ljc5OS0wLjQ5OA0KCQkJYy0zLjIxMSwwLTYuNDc1LDAuMjQ5LTkuNzk1LDAuNzQ3cy02Ljg2NCwxLjMyOC0xMC42MjUsMi40OWMtMy43NjQsMS4xNjItNi44MDcsMy4wMTctOS4xMzEsNS41NjINCgkJCWMtMi4zMjQsMi41NDctMy40ODYsNS41OS0zLjQ4Niw5LjEzMWMwLDQuNjQ4LDEuNjYsOC4zNTgsNC45OCwxMS4xMjNjMy4zMiwyLjc2OCw3LjMwNSw0LjE1LDExLjk1Myw0LjE1DQoJCQljOS43MzgsMCwxNi4zMjQtMi44NDgsMTkuNzU2LTguNTVDMTQwLjgxMSwyMTAuNzQzLDE0Mi41MjgsMjAyLjY5MSwxNDIuNTI4LDE5Mi4yODd6Ii8+DQoJCTxwYXRoIGQ9Ik0zMDYuMzg2LDE3Mi44NjNIMjA0LjQ1MnYtMTAuNDU5aDEwMS45MzRWMTcyLjg2M3ogTTMwNi4zODYsMjAzLjkwOEgyMDQuNDUydi0xMC42MjVoMTAxLjkzNFYyMDMuOTA4eiIvPg0KCQk8cGF0aCBkPSJNNDI0LjkyMSwyMzQuMTIzaC03NC4wNDN2LTE1Ljc3MWMxNC4zODctMTYuMDQ2LDI1LjgxNS0yOC44MDQsMzQuMjgyLTM4LjI2N3MxNC4zODctMTYuNzY4LDE3Ljc2NC0yMS45MTQNCgkJCWMzLjM3NS01LjE0Niw1LjA2My05LjY1NSw1LjA2My0xMy41M2MwLTcuNDE0LTEuNDM5LTEyLjg2Ni00LjMxNi0xNi4zNTNjLTIuODc5LTMuNDg2LTcuNjkzLTUuMjI5LTE0LjQ0My01LjIyOQ0KCQkJYy01Ljk3NywwLTEwLjQ1OSwxLjcxNy0xMy40NDcsNS4xNDZjLTIuOTg4LDMuNDMyLTQuOTI2LDguOTEtNS44MTEsMTYuNDM2aC0xNy4yNjZjMS43Ny0yMy43OTUsMTMuOTQ1LTM1LjY5MywzNi41MjMtMzUuNjkzDQoJCQljMTEuMTc4LDAsMTkuOTIyLDMuNDAzLDI2LjIzLDEwLjIxczkuNDYzLDE0LjUyNiw5LjQ2MywyMy4xNTljMCwyLjY1Ni0wLjIyMyw1LjA5Mi0wLjY2NCw3LjMwNQ0KCQkJYy0wLjQ0MywyLjIxNS0xLjE2Miw0LjU2NS0yLjE1OCw3LjA1NnMtMi4zNTMsNS4wNjMtNC4wNjcsNy43MmMtMS43MTcsMi42NTYtMy44NzUsNS42NzMtNi40NzUsOS4wNDgNCgkJCWMtMi42MDIsMy4zNzctNS42NzMsNy4wNTYtOS4yMTQsMTEuMDRjLTMuNTQzLDMuOTg0LTcuNjY1LDguNjMzLTEyLjM2OCwxMy45NDVjLTQuNzA1LDUuMzEzLTEwLjA0NCwxMS4xOC0xNi4wMjEsMTcuNTk4DQoJCQljLTEuODgzLDIuMTA0LTMuMzIsMy43MDktNC4zMTYsNC44MTRoNTUuMjgzVjIzNC4xMjN6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX3RyYW5zbGF0ZXZpZXciPg0KCTxnPg0KCQk8cG9seWdvbiBwb2ludHM9IjE5NC43ODQsMTYxLjY3NiAyNjEsODYgMzI3LjIxNiwxNjEuNjc2IAkJIi8+DQoJCTxwb2x5Z29uIHBvaW50cz0iMTYxLjY3NiwzMjcuMjE2IDg2LDI2MSAxNjEuNjc2LDE5NC43ODQgCQkiLz4NCgkJPHBvbHlnb24gcG9pbnRzPSIzNjAuMzI0LDE5NC43ODQgNDM2LDI2MSAzNjAuMzI0LDMyNy4yMTYgCQkiLz4NCgkJPHBvbHlnb24gcG9pbnRzPSIzMjcuMjE2LDM2MC4zMjQgMjYxLDQzNiAxOTQuNzg0LDM2MC4zMjQgCQkiLz4NCgkJPGxpbmUgc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6IzAwMDAwMDtzdHJva2Utd2lkdGg6MTM7IiB4MT0iMjYxIiB5MT0iMTM1LjY2MiIgeDI9IjI2MSIgeTI9IjM4OC4yMjkiLz4NCgkJPGxpbmUgc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6IzAwMDAwMDtzdHJva2Utd2lkdGg6MTM7IiB4MT0iMzkxLjA2NyIgeTE9IjI2MSIgeDI9IjEyOS4wNDEiIHkyPSIyNjEiLz4NCgk8L2c+DQo8L2c+DQo8ZyBpZD0iRWJlbmVfMSI+DQo8L2c+DQo8L3N2Zz4NCg==" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 </ul>
            </div>
			<div class="toolBPanel cas">
			<ul>
			<li class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2V2YWx1YXRlIj4NCgk8Zz4NCgkJPHBhdGggZD0iTTM3NS45MjIsMjMxLjc4MUgxMzYuMDc4di0yNC42MDloMjM5Ljg0NFYyMzEuNzgxeiBNMzc1LjkyMiwzMDQuODI4SDEzNi4wNzh2LTI1aDIzOS44NDRWMzA0LjgyOHoiLz4NCgk8L2c+DQo8L2c+DQo8ZyBpZD0iRWJlbmVfMSI+DQo8L2c+DQo8L3N2Zz4NCg==" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				  <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX251bWVyaWMiPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzc1LjkyMiwyMjAuMDYzYy0xOC40OTQsMTcuNDUtNDEuMjc4LDI2LjE3Mi02OC4zNTksMjYuMTcyYy0xMi43NjMsMC0zMS4xODktNC4yMjktNTUuMjczLTEyLjY5NQ0KCQkJYy0yNC4wOTEtOC40NTktNDMuMDM2LTEyLjU2MS01Ni44MzYtMTIuMzA1Yy0xMS43MTksMC4yNjMtMjEuOTQyLDIuODAyLTMwLjY2NCw3LjYxN2MtOC43MjgsNC44MjItMTguMjk4LDEyLjQzOS0yOC43MTEsMjIuODUyDQoJCQl2LTI3LjczNGMxOC43NS0xOC43NSw0Mi4xODgtMjcuNzM0LDcwLjMxMy0yNi45NTNjMTEuOTc1LDAuMjYzLDI5LjQ5Miw0LjQ5Miw1Mi41MzksMTIuNjk1czQwLjk0OCwxMi4zMDUsNTMuNzExLDEyLjMwNQ0KCQkJYzEyLjIzNywwLDIzLjA0Ny0yLjQ3MiwzMi40MjItNy40MjJjOS4zNzUtNC45NDQsMTkuNjU5LTEyLjM2NiwzMC44NTktMjIuMjY2VjIyMC4wNjN6IE0zNzUuOTIyLDI4OC4wMzENCgkJCWMtMTguNDk0LDE3LjQ1LTQxLjI3OCwyNi4xNzItNjguMzU5LDI2LjE3MmMtMTIuNzYzLDAtMzEuMTg5LTQuMjI5LTU1LjI3My0xMi42OTVjLTI0LjA5MS04LjQ1OS00My4wMzYtMTIuNTYxLTU2LjgzNi0xMi4zMDUNCgkJCWMtMTEuNzE5LDAuMjYzLTIxLjk0MiwyLjgwMi0zMC42NjQsNy42MTdjLTguNzI4LDQuODIyLTE4LjI5OCwxMi40MzktMjguNzExLDIyLjg1MnYtMjcuNzM0DQoJCQljMTguNzUtMTguNzUsNDIuMTg4LTI3LjczNCw3MC4zMTMtMjYuOTUzYzExLjk3NSwwLjI2MywyOS40OTIsNC40OTIsNTIuNTM5LDEyLjY5NXM0MC45NDgsMTIuMzA1LDUzLjcxMSwxMi4zMDUNCgkJCWMxMi4yMzcsMCwyMy4wNDctMi40NzIsMzIuNDIyLTcuNDIyYzkuMzc1LTQuOTQzLDE5LjY1OS0xMi4zNjUsMzAuODU5LTIyLjI2NlYyODguMDMxeiIvPg0KCTwvZz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2tlZXBpbnB1dCI+DQoJPHBvbHlnb24gc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgcG9pbnRzPSIzOTAuMzUyLDE3My44OCAzNzQuNTc0LDE1OC4xIDIxMS44MTksMzIyLjMxNiAxMzcuNDMzLDI0OC4zODcgDQoJCTEyMS42NDgsMjY0LjE3IDIxMS45MzgsMzUzLjkgMjI3LjcyLDMzOC4xMjMgMjI3LjY0NSwzMzguMDUgCSIvPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2ZhY3RvciI+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yMjAuNzQ1LDIwNi44MDZIMjAyLjE5Vjg2LjQ5NGMtNy40MjIsNS4yMDktMTcuODQxLDEwLjc0Mi0zMS4yNSwxNi42MDJWODYuNDk0YzUuNzI4LTMuNTE2LDExLjA5OS03LjM1NCwxNi4xMTMtMTEuNTIzDQoJCQljNS4wMTEtNC4xNjYsOC41Ni03LjMyNCwxMC42NDUtOS40NzNjMi4wODEtMi4xNDgsMy4xMjUtMy4xNTUsMy4xMjUtMy4wMjdoMTkuOTIyVjIwNi44MDZ6Ii8+DQoJCTxwYXRoIGQ9Ik0zNTcuODU0LDE1OS4zNDVjMC4xMjgsMTMuMDIyLTQuMzk1LDI0LjYwOS0xMy41NzQsMzQuNzY2cy0xOS4wNDMsMTUuMjM0LTI5LjU5LDE1LjIzNA0KCQkJYy0xNC44NDQsMC0yNi40NjUtMy4zMi0zNC44NjMtOS45NjFzLTEyLjU5OC0xNS44ODQtMTIuNTk4LTI3LjczNGgyMS4wOTRjMCw3LjE2MywyLjIxMywxMi41NjcsNi42NDEsMTYuMjExDQoJCQljNC40MjUsMy42NDcsMTAuMjg0LDUuNDY5LDE3LjU3OCw1LjQ2OWM2LjY0MSwwLDEyLjUtMi45NiwxNy41NzgtOC44ODdjNS4wNzgtNS45MjMsNy42MTctMTQuMTYsNy42MTctMjQuNzA3DQoJCQljMC0yMi43ODQtNy44OC0zNC4xOC0yMy42MzMtMzQuMThjLTExLjU5MSwwLTIwLjQ0Myw2Ljk2Ny0yNi41NjMsMjAuODk4aC0xNy45NjlsMi41MzktODMuOTg0aDc2LjU2M3YxNi42MDJoLTU3LjAzMQ0KCQkJbC0yLjM0NCw0NS4zMTNjMC43ODEtMC42NSwyLjI3Ni0yLjExNSw0LjQ5Mi00LjM5NWMyLjIxMy0yLjI3Niw0LjAwNC0zLjkwNiw1LjM3MS00Ljg4M3MzLjc0MS0xLjk1Myw3LjEyOS0yLjkzDQoJCQljMy4zODUtMC45NzcsNy40MjItMS40NjUsMTIuMTA5LTEuNDY1YzEyLjIzNywwLDIxLjg0Miw0LjcyMSwyOC44MDksMTQuMTZDMzU0LjE3NCwxMzQuMzE1LDM1Ny43MjQsMTQ1LjgwNSwzNTcuODU0LDE1OS4zNDV6Ii8+DQoJCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjAwMDA7IiBkPSJNMTU3LjU2MSw0MDguMTM1YzAsMTEuODUtNC40NjIsMjEuNzEzLTEzLjM3OSwyOS41OWMtOC45Miw3Ljg4LTIwLjIxNSwxMS44MTYtMzMuODg3LDExLjgxNg0KCQkJYy0xNS4xMDYsMC0yNi41NjMtNC4wMzQtMzQuMzc1LTEyLjEwOWMtNy44MTMtOC4wNzItMTEuNzE5LTE3LjY0My0xMS43MTktMjguNzExaDIxLjI4OQ0KCQkJYzEuNTYzLDE2LjkyOCwxMC4wMjUsMjUuMzkxLDI1LjM5MSwyNS4zOTFjNi43NjksMCwxMi45MjEtMi40NDEsMTguNDU3LTcuMzI0YzUuNTMzLTQuODgzLDguMzAxLTEwLjUxNCw4LjMwMS0xNi44OTUNCgkJCWMwLTIwLjU3Mi0xMy40NzctMzAuNjY0LTQwLjQzLTMwLjI3M3YtMTYuMDE2YzEyLjUsMCwyMS45NzMtMi4xNDgsMjguNDE4LTYuNDQ1czkuNjY4LTExLjI2MSw5LjY2OC0yMC44OTgNCgkJCWMwLTcuNTUtMi42MzctMTIuOTg4LTcuOTEtMTYuMzA5cy0xMC45NzEtNC45OC0xNy4wOS00Ljk4Yy0xMi4zNzIsMC0xOS45ODksOC4zMzQtMjIuODUyLDI1SDY3LjEzMQ0KCQkJYzEuNjktMTMuMDE5LDYuMTgzLTIzLjAxNCwxMy40NzctMjkuOThjNy4yOTEtNi45NjQsMTcuMDU2LTEwLjQ0OSwyOS4yOTctMTAuNDQ5YzEzLjQwOSwwLDI0LjMxNiwzLjYxMywzMi43MTUsMTAuODQNCgkJCXMxMi41OTgsMTYuMzA5LDEyLjU5OCwyNy4yNDZjMCw0LjU2LTAuOTQ2LDguNzg5LTIuODMyLDEyLjY5NWMtMS44ODksMy45MDYtNC4xOTksNy4wMDEtNi45MzQsOS4yNzcNCgkJCWMtMi43MzQsMi4yNzktNS42LDQuNDkyLTguNTk0LDYuNjQxYy0yLjk5NywyLjE0OC01LjUzNiwzLjc0NC03LjYxNyw0Ljc4NWMwLjkwOSwwLjUyMSwyLjg2MiwxLjU2Myw1Ljg1OSwzLjEyNQ0KCQkJYzIuOTk0LDEuNTYzLDUuNTMzLDMuMDk1LDcuNjE3LDQuNTljMi4wODEsMS40OTgsNC4zOTUsMy41NDksNi45MzQsNi4xNTJjMi41MzksMi42MDYsNC40OTIsNS44NTksNS44NTksOS43NjYNCgkJCVMxNTcuNTYxLDQwMy4wNTcsMTU3LjU2MSw0MDguMTM1eiIvPg0KCQk8cGF0aCBkPSJNMjcyLjk5MSwzNjIuNTI5YzQuNDI1LDQuNDkyLDYuNjQxLDkuOTMxLDYuNjQxLDE2LjMwOWMwLDYuMzgxLTIuMjE2LDExLjgxNi02LjY0MSwxNi4zMDkNCgkJCWMtNC40MjgsNC40OTItOS44MzMsNi43MzgtMTYuMjExLDYuNzM4Yy02LjM4MSwwLTExLjgxNi0yLjI0Ni0xNi4zMDktNi43MzhzLTYuNzM4LTkuOTI4LTYuNzM4LTE2LjMwOQ0KCQkJYzAtNi41MSwyLjIxMi0xMS45NzksNi42NDEtMTYuNDA2YzQuNDI1LTQuNDI1LDkuODk0LTYuNjQxLDE2LjQwNi02LjY0MUMyNjMuMTU4LDM1NS43OTEsMjY4LjU2MywzNTguMDM3LDI3Mi45OTEsMzYyLjUyOXoiLz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6I0ZGMDAwMDsiIGQ9Ik00NDcuNzk2LDM5OS4zNDZjMC4xMjgsMTMuMDIxLTQuMzk1LDI0LjYwOS0xMy41NzQsMzQuNzY2cy0xOS4wNDMsMTUuMjM0LTI5LjU5LDE1LjIzNA0KCQkJYy0xNC44NDQsMC0yNi40NjUtMy4zMi0zNC44NjMtOS45NjFzLTEyLjU5OC0xNS44ODUtMTIuNTk4LTI3LjczNGgyMS4wOTRjMCw3LjE2MiwyLjIxMywxMi41NjcsNi42NDEsMTYuMjExDQoJCQljNC40MjUsMy42NDYsMTAuMjg0LDUuNDY5LDE3LjU3OCw1LjQ2OWM2LjY0MSwwLDEyLjUtMi45NiwxNy41NzgtOC44ODdjNS4wNzgtNS45MjQsNy42MTctMTQuMTYsNy42MTctMjQuNzA3DQoJCQljMC0yMi43ODQtNy44OC0zNC4xOC0yMy42MzMtMzQuMThjLTExLjU5MSwwLTIwLjQ0Myw2Ljk2Ny0yNi41NjMsMjAuODk4aC0xNy45NjlsMi41MzktODMuOTg0aDc2LjU2M3YxNi42MDJoLTU3LjAzMQ0KCQkJbC0yLjM0NCw0NS4zMTNjMC43ODEtMC42NSwyLjI3Ni0yLjExNSw0LjQ5Mi00LjM5NWMyLjIxMy0yLjI3Niw0LjAwNC0zLjkwNiw1LjM3MS00Ljg4M3MzLjc0MS0xLjk1Myw3LjEyOS0yLjkzDQoJCQljMy4zODUtMC45NzcsNy40MjItMS40NjUsMTIuMTA5LTEuNDY1YzEyLjIzNywwLDIxLjg0Miw0LjcyMSwyOC44MDksMTQuMTZDNDQ0LjExNSwzNzQuMzE1LDQ0Ny42NjUsMzg1LjgwNSw0NDcuNzk2LDM5OS4zNDZ6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2V4cGFuZCI+DQoJPGc+DQoJCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjAwMDA7IiBkPSJNNzUuNjc4LDM4Ni4yMjVINTYuNjM1QzMzLjk3NiwzNDUuMjA5LDIyLjY1LDMwMS44NSwyMi42NSwyNTYuMTQ2DQoJCQljMC00NS44OTYsMTEuMzI1LTg5LjM1NSwzMy45ODQtMTMwLjM3MWgxOS4wNDNjLTE2LjQwNiw0Ni4wOTctMjQuNjA5LDg5LjU1Mi0yNC42MDksMTMwLjM3MQ0KCQkJQzUxLjA2OCwyOTUuOTksNTkuMjcxLDMzOS4zNSw3NS42NzgsMzg2LjIyNXoiLz4NCgkJPHBhdGggZD0iTTE4My40OSwzODYuMjI1aC0xOS4wNDNjLTIyLjY1OS00MS4wMTYtMzMuOTg0LTg0LjM3NS0zMy45ODQtMTMwLjA3OGMwLTQ1Ljg5NiwxMS4zMjUtODkuMzU1LDMzLjk4NC0xMzAuMzcxaDE5LjA0Mw0KCQkJYy0xNi40MDYsNDYuMDk3LTI0LjYwOSw4OS41NTItMjQuNjA5LDEzMC4zNzFDMTU4Ljg4MSwyOTUuOTksMTY3LjA4NCwzMzkuMzUsMTgzLjQ5LDM4Ni4yMjV6Ii8+DQoJCTxwYXRoIGQ9Ik0zODEuNTM3LDI1Ni4xNDZjMCw0NS41MTEtMTEuMjMzLDg4Ljg3LTMzLjY5MSwxMzAuMDc4SDMyOC41MWMxNi40MDYtNDYuODc1LDI0LjYwOS05MC4yMzQsMjQuNjA5LTEzMC4wNzgNCgkJCWMwLTQwLjgxOS04LjIwMy04NC4yNzQtMjQuNjA5LTEzMC4zNzFoMTkuMzM2QzM3MC4zMDQsMTY2Ljk4OCwzODEuNTM3LDIxMC40NDMsMzgxLjUzNywyNTYuMTQ2eiIvPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojRkYwMDAwOyIgZD0iTTQ4OS4zNSwyNTYuMTQ2YzAsNDUuNTExLTExLjIzMyw4OC44Ny0zMy42OTEsMTMwLjA3OGgtMTkuMzM2DQoJCQljMTYuNDA2LTQ2Ljg3NSwyNC42MDktOTAuMjM0LDI0LjYwOS0xMzAuMDc4YzAtNDAuODE5LTguMjAzLTg0LjI3NC0yNC42MDktMTMwLjM3MWgxOS4zMzYNCgkJCUM0NzguMTE2LDE2Ni45ODgsNDg5LjM1LDIxMC40NDMsNDg5LjM1LDI1Ni4xNDZ6Ii8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX3N1YnN0aXR1dGUiPg0KCTxnPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojMDAwMEZGOyIgZD0iTTEzOS4wNjMsNjkuOTIybC00Ny4wNywxMjQuNDE0SDcwLjExN2w1MC45NzctMTI4LjMySDUwVjUwaDg5LjA2M1Y2OS45MjJ6Ii8+DQoJPC9nPg0KCTxyZWN0IHg9IjI5My43OTIiIHk9IjI5MiIgc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6I0ZGMDAwMDtzdHJva2Utd2lkdGg6MTM7c3Ryb2tlLW1pdGVybGltaXQ6MTA7IiB3aWR0aD0iMTcwIiBoZWlnaHQ9IjE3MCIvPg0KCTxnPg0KCQk8bGluZSBzdHlsZT0iZmlsbDpub25lO3N0cm9rZTojMDAwMDAwO3N0cm9rZS13aWR0aDoxMzsiIHgxPSIxNjQuNDkyIiB5MT0iMTQ5LjYyMiIgeDI9IjI4NC42NDciIHkyPSIyODUuNjEiLz4NCgkJPHBvbHlnb24gcG9pbnRzPSIyNjUuMTMxLDIwMS45ODcgMzQzLjc5MiwzNTIuNTUgMjAzLjUzMiwyNTYuNzE4IAkJIi8+DQoJPC9nPg0KPC9nPg0KPGcgaWQ9IkViZW5lXzEiPg0KPC9nPg0KPC9zdmc+DQo=" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX3NvbHZlIj4NCgk8Zz4NCgkJPHBhdGggZD0iTTIwOS4yNzEsMzMxaC0zNC4yNzdsLTQzLjk0NS01OS4xOEw4OC41NjgsMzMxSDU2LjkyOGw1OS43NjYtNzcuNjM3TDYxLjYxNSwxODFoMzQuMjc3bDM5LjU1MSw1My42MTNMMTczLjgyMiwxODFoMzEuMzQ4DQoJCQlsLTU1LjY2NCw3Mi4zNjNMMjA5LjI3MSwzMzF6Ii8+DQoJCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjAwMDA7IiBkPSJNNDU1LjA3MiwyMjIuODk1SDI3NS4xODl2LTE4LjQ1N2gxNzkuODgzVjIyMi44OTV6IE00NTUuMDcyLDI3Ny42OEgyNzUuMTg5di0xOC43NWgxNzkuODgzVjI3Ny42OA0KCQkJeiIvPg0KCTwvZz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li> 
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX25zb2x2ZSI+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yMDkuMjcxLDMzMWgtMzQuMjc3bC00My45NDUtNTkuMThMODguNTY4LDMzMUg1Ni45MjhsNTkuNzY2LTc3LjYzN0w2MS42MTUsMTgxaDM0LjI3N2wzOS41NTEsNTMuNjEzTDE3My44MjIsMTgxaDMxLjM0OA0KCQkJbC01NS42NjQsNzIuMzYzTDIwOS4yNzEsMzMxeiIvPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojRkYwMDAwOyIgZD0iTTQ1NS4wNzIsMjEzLjgxM2MtMTMuODcsMTMuMDg3LTMwLjk1OSwxOS42MjktNTEuMjcsMTkuNjI5Yy05LjU3MiwwLTIzLjM5Mi0zLjE3Mi00MS40NTUtOS41MjENCgkJCWMtMTguMDY4LTYuMzQ1LTMyLjI3Ny05LjQyMS00Mi42MjctOS4yMjljLTguNzg5LDAuMTk3LTE2LjQ1NywyLjEwMS0yMi45OTgsNS43MTNjLTYuNTQ2LDMuNjE2LTEzLjcyNCw5LjMyOS0yMS41MzMsMTcuMTM5DQoJCQl2LTIwLjgwMWMxNC4wNjMtMTQuMDYzLDMxLjY0MS0yMC44MDEsNTIuNzM0LTIwLjIxNWM4Ljk4MSwwLjE5NywyMi4xMTksMy4zNjksMzkuNDA0LDkuNTIxczMwLjcxMSw5LjIyOSw0MC4yODMsOS4yMjkNCgkJCWM5LjE3OCwwLDE3LjI4NS0xLjg1NCwyNC4zMTYtNS41NjZjNy4wMzEtMy43MDgsMTQuNzQ0LTkuMjc0LDIzLjE0NS0xNi42OTlWMjEzLjgxM3ogTTQ1NS4wNzIsMjY0Ljc4OQ0KCQkJYy0xMy44NywxMy4wODgtMzAuOTU5LDE5LjYyOS01MS4yNywxOS42MjljLTkuNTcyLDAtMjMuMzkyLTMuMTcyLTQxLjQ1NS05LjUyMWMtMTguMDY4LTYuMzQ1LTMyLjI3Ny05LjQyMS00Mi42MjctOS4yMjkNCgkJCWMtOC43ODksMC4xOTctMTYuNDU3LDIuMTAyLTIyLjk5OCw1LjcxM2MtNi41NDYsMy42MTYtMTMuNzI0LDkuMzI5LTIxLjUzMywxNy4xMzl2LTIwLjgwMQ0KCQkJYzE0LjA2My0xNC4wNjMsMzEuNjQxLTIwLjgwMSw1Mi43MzQtMjAuMjE1YzguOTgxLDAuMTk3LDIyLjExOSwzLjM2OSwzOS40MDQsOS41MjFzMzAuNzExLDkuMjI5LDQwLjI4Myw5LjIyOQ0KCQkJYzkuMTc4LDAsMTcuMjg1LTEuODU0LDI0LjMxNi01LjU2NmM3LjAzMS0zLjcwOCwxNC43NDQtOS4yNzQsMjMuMTQ1LTE2LjY5OVYyNjQuNzg5eiIvPg0KCTwvZz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2Rlcml2YXRpdmUiPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjk2Ljg5OCwxNDMuMTE1Yy01LjczMS0zLjEyNS0xMi4yNDQtNC42ODgtMTkuNTMxLTQuNjg4Yy0xMS40NjMtMC41MTktMTkuNzI3LDEuODkyLTI0LjgwNSw3LjIyNw0KCQkJYy01LjA3OCw1LjM0MS03LjYxNywxNC41MjEtNy42MTcsMjcuNTM5djI5LjI5N2g0OC4wNDd2MjYuMTcyaC00OC4wNDd2MTczLjgyOGgtMzUuOTM4VjIyOC42NjJoLTQwLjIzNFYyMDIuNDloNDAuMjM0di0zMC4wNzgNCgkJCWMwLTI0LjIxOSw1LjA3OC00MC44MiwxNS4yMzQtNDkuODA1czI1LjY0Ny0xMy4zNDIsNDYuNDg0LTEzLjA4NmM5LjM3NSwwLDE4LjA5NywxLjQzNSwyNi4xNzIsNC4yOTdWMTQzLjExNXoiLz4NCgkJPHBhdGggZD0iTTM4My4yMjcsMTEzLjgxOGwtMjMuODI4LDEwMGgtNDguMDQ3bDQ0LjE0MS0xMDBIMzgzLjIyN3oiLz4NCgk8L2c+DQo8L2c+DQo8ZyBpZD0iRWJlbmVfMSI+DQo8L2c+DQo8L3N2Zz4NCg==" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4Ig0KCSBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9Im1vZGVfeDVGX2ludGVncmFsIj4NCgk8Zz4NCgkJPHBhdGggZD0iTTMzOC4wMzEsODguNDIyYzAsNS45OTQtMS44MjUsMTEuMDA1LTUuNDY5LDE1LjAzOWMtMy42NSw0LjA0MS04LjQ2Niw2LjA1NS0xNC40NTMsNi4wNTUNCgkJCWMtNC40MzIsMC05Ljc2Ni0yLjUzOS0xNi4wMTYtNy42MTdzLTExLjcxOS03LjYxNy0xNi40MDYtNy42MTdzLTcuNDIyLDMuNTE2LTguMjAzLDEwLjU0N2wtMS4xNzIsNTcuNDIyDQoJCQljLTMuNjUsMTEwLjQxOS02LjEyMiwxNzEuMjI5LTcuNDIyLDE4Mi40MjJjLTIuODY5LDMyLjgxMy05LjMxNCw1Ny42NzgtMTkuMzM2LDc0LjYwOQ0KCQkJYy0xMC4wMjgsMTYuOTI1LTI1Ljg0OSwyNS4zOTEtNDcuNDYxLDI1LjM5MWMtMTguNzUsMC0yOC4xMjUtNi43NzUtMjguMTI1LTIwLjMxM2MwLTYuNTEzLDEuODg2LTExLjg1NCw1LjY2NC0xNi4wMTYNCgkJCWMzLjc3Mi00LjE2OSw4Ljc4OS02LjEyMiwxNS4wMzktNS44NTljMy4xMjUsMCw4LjUyNiwyLjUzOSwxNi4yMTEsNy42MTdjNy42NzgsNS4wNzgsMTIuOTUyLDcuNjE3LDE1LjgyLDcuNjE3DQoJCQljNC40MjUsMCw3LjAzMS0zLjUxNiw3LjgxMy0xMC41NDdsMy4xMjUtNjAuMTU2YzQuNjg4LTExNC4zMTksNy41NS0xNzYuODE5LDguNTk0LTE4Ny41YzEuMy0xMS43MTksMi42NjctMjEuNjEyLDQuMTAyLTI5LjY4OA0KCQkJYzEuNDI4LTguMDY5LDMuNjQ0LTE2LjMzOSw2LjY0MS0yNC44MDVjMi45OS04LjQ1OSw2LjcwMS0xNS4yMzQsMTEuMTMzLTIwLjMxM2M0LjQyNS01LjA3OCwxMC4yMTctOS4yNDEsMTcuMzgzLTEyLjUNCgkJCWM3LjE1OS0zLjI1MywxNS41NTgtNC44ODMsMjUuMTk1LTQuODgzYzguNTk0LDAsMTUuMjk1LDEuODkyLDIwLjExNyw1LjY2NEMzMzUuNjIsNzYuNzcxLDMzOC4wMzEsODEuOTE2LDMzOC4wMzEsODguNDIyeiIvPg0KCTwvZz4NCjwvZz4NCjxnIGlkPSJFYmVuZV8xIj4NCjwvZz4NCjwvc3ZnPg0K" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				  <li  class="toolbar_item">
                 <div class="toolbar_button" style="border-width: 1px;">
				 <img src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik02IDE5YzAgMS4xLjkgMiAyIDJoOGMxLjEgMCAyLS45IDItMlY3SDZ2MTJ6TTE5IDRoLTMuNWwtMS0xaC01bC0xIDFINXYyaDE0VjR6Ii8+CiAgICA8cGF0aCBkPSJNMCAwaDI0djI0SDB6IiBmaWxsPSJub25lIi8+Cjwvc3ZnPg==" class="gwt-Image toolbar_icon" draggable="false" style="width: 32px;">
				 </div>
				 </li>
				 </ul>
            </div>
            <div class="rightButtonPanel startScreen">
            
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABQElEQVR42tVX7Q2EIAx1hBvhRrgRHMER+OPHGG7ACDfCjXAjOIIjMIJnL5A0DaK0FSMJCQn6eG1fS6mquwxjzGMYhhomrIsc2rbtq+/7d9d1bp0LmTPsrYSep1jrD14OTqvmFQBaAScE7jyZJoQA1hGCk5hE5PBPChTcD9+okSBWjcz/LFtw2PLc/7EnWMJEVjiOG304+F4IqQZEFEI4c8QX2DeCumECTq77ahS/mksA44Cm7kPg8hB4Ec6XiZAWE04ei9OQAHwY7v+KCpEPgw0gOaFQKcVbl1HKGtjDlks1tEXiDwoKD9cxrFP9ghYJm9OQRAg58RXthWlDitKWDPZwiBJemVQ6JqhuexVuo3/UI3Egk1KhOp8EFXBxErEsipE4/RGzR0Jy66qQKCLIBImxKjUiJModTrulYo/anPEDuqonFd/0xkEAAAAASUVORK5CYII=" class="gwt-Image" draggable="false" style="width: 32px;">
            
            
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAWklEQVR42mNgGAWjAApSU1MTgHg/nXAChgPS0tIagPg/nXDD4HNARkaGA9QRNMcgu0YT/SgYfACYMhVAqZNOWGG0IBp8DhgFo2AUDHh7YLQgGvBW8SgYBQMFAAeXmC1ie28NAAAAAElFTkSuQmCC" class="gwt-Image" draggable="false" style="width: 32px;">
            </div>            
        </div>
    </div>
    
    <div class="ggbPageContent GeoGebraFrame startScreen" id="appsPicker">
	<div class="gwt-DialogBox DialogBox GeoGebraFrame perspectivesBox" id="perspectivesBox" style="right: 0px; top: 101px; position: absolute; overflow: visible;">
    	<div class=""><table  class=""><tbody>
		<tr class="dialogTop"><td class="dialogTopLeft"><div class="dialogTopLeftInner"></div></td><td class="dialogTopCenter"><div class="dialogTopCenterInner">
		<div class="Caption perspectivesCaption" id="create">GeoGebra Math Apps</div></div></td><td class="dialogTopRight"><div class="dialogTopRightInner"></div></td></tr>
		<tr class="dialogMiddle"><td class="dialogMiddleLeft"><div class="dialogMiddleLeftInner"></div></td><td class="dialogMiddleCenter"><div class="dialogMiddleCenterInner dialogContent"><div class="perspectivesMainPanel">

		<table  class="perspectivesRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PGRlZnM+PHBhdGggZD0iTTQ4NSA0NDAuMjRjMCAyNC43Mi0yMC4wNCA0NC43Ni00NC43NiA0NC43Nkg3MS43NkM0Ny4wNCA0ODUgMjcgNDY0Ljk2IDI3IDQ0MC4yNFY3MS43NkMyNyA0Ny4wNCA0Ny4wNCAyNyA3MS43NiAyN2gzNjguNDhDNDY0Ljk2IDI3IDQ4NSA0Ny4wNCA0ODUgNzEuNzZ2MzY4LjQ4eiIgaWQ9IkoiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJLIj48dXNlIGhlaWdodD0iNTEyIiB3aWR0aD0iNTEyIiB4bGluazpocmVmPSIjSiIgb3ZlcmZsb3c9InZpc2libGUiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNLKSI+PHBhdGggZD0iTTQ0IDQ4MC4wOTRDODUuNzggMjAyLjE3IDE1MC43Ni0zNi43NjYgMjU1Ljc5MyAyNTYuMDcgMzYxLjY5IDU1MS4zMiA0MjMuMzI1IDMwOS45NyA0NjggMzEuOTA4IiBmaWxsPSJub25lIiBzdHJva2U9IiM2NjYiIHN0cm9rZS13aWR0aD0iMzAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIvPjxjaXJjbGUgcj0iNjMuMDQ3IiBjeT0iMTIxLjk1NCIgY3g9IjE2My45NTMiIGZpbGw9IiM5OWYiLz48cGF0aCBkPSJNMTYzLjk1MyA1OC45MDZjLTM0LjgxNyAwLTYzLjA0NyAyOC4yMzMtNjMuMDQ3IDYzLjA0NyAwIDM0LjgyMyAyOC4yMyA2My4wNDcgNjMuMDQ3IDYzLjA0N0MxOTguNzcgMTg1IDIyNyAxNTYuNzc3IDIyNyAxMjEuOTUzYzAtMzQuODE0LTI4LjIzLTYzLjA0Ny02My4wNDctNjMuMDQ3em0wIDEwNy4xOGMtMjQuMzc0IDAtNDQuMTMzLTE5Ljc2LTQ0LjEzMy00NC4xMzMgMC0yNC4zNzQgMTkuNzYtNDQuMTMzIDQ0LjEzMy00NC4xMzMgMjQuMzc0IDAgNDQuMTMzIDE5Ljc2IDQ0LjEzMyA0NC4xMzMgMCAyNC4zNzQtMTkuNzYgNDQuMTMzLTQ0LjEzMyA0NC4xMzN6IiBmaWxsPSIjMzMzIi8+PGc+PGNpcmNsZSByPSI2My4wNDciIGN5PSIzOTEuMDQ4IiBjeD0iMzQ2LjA0NyIgZmlsbD0iIzk5ZiIvPjxwYXRoIGQ9Ik0zNDYuMDQ3IDMyOEMzMTEuMjMgMzI4IDI4MyAzNTYuMjMzIDI4MyAzOTEuMDQ3YzAgMzQuODIzIDI4LjIzIDYzLjA0NyA2My4wNDcgNjMuMDQ3IDM0LjgxNyAwIDYzLjA0Ny0yOC4yMjMgNjMuMDQ3LTYzLjA0NyAwLTM0LjgxNC0yOC4yMy02My4wNDctNjMuMDQ3LTYzLjA0N3ptMCAxMDcuMThjLTI0LjM3NCAwLTQ0LjEzMy0xOS43Ni00NC4xMzMtNDQuMTM0czE5Ljc2LTQ0LjEzMyA0NC4xMzMtNDQuMTMzYzI0LjM3NCAwIDQ0LjEzMyAxOS43NiA0NC4xMzMgNDQuMTMzIDAgMjQuMzc0LTE5Ljc2IDQ0LjEzMy00NC4xMzMgNDQuMTMzeiIgZmlsbD0iIzMzMyIvPjwvZz48L2c+PC9zdmc+" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="graphing">Graphing Calculator</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>


		<table  class="perspectivesRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGNpcmNsZSBjeD0iMTc1IiBjeT0iMzM2IiByPSIxMjMiIGZpbGw9IiM5OWYiLz48cGF0aCBmaWxsPSIjNjY2IiBkPSJNMTE5LjY2NyAzNDMuMzg4TDMwMi4zMzMgMjcgNDg1IDM0My4zODgiLz48cGF0aCBmaWxsPSIjOTlmIiBkPSJNMTY5LjExNyAzMTQuODM4TDMwMi4zMzMgODQuMSA0MzUuNTUgMzE0Ljg0Ii8+PHBhdGggZmlsbD0iIzYxNjFmZiIgZD0iTTE0OC45NDQgMzI3bDczLjM5LTEyNC40OTRDMjc5Ljc2NCAyMjkuNDkgMzExLjI4IDI2OS43MiAzMDkuNDM2IDMyN0gxNDguOTQ0eiIvPjxwYXRoIGZpbGw9IiM2NjYiIGQ9Ik0xNzUgNDg2Yy04Mi44NDMgMC0xNTAtNjcuMTU3LTE1MC0xNTBzNjcuMTU3LTE1MCAxNTAtMTUwIDE1MCA2Ny4xNTcgMTUwIDE1MC02Ny4xNTcgMTUwLTE1MCAxNTB6bTEyMy0xNTBjMC02Ny45My01NS4wNy0xMjMtMTIzLTEyM1M1MiAyNjguMDcgNTIgMzM2czU1LjA3IDEyMyAxMjMgMTIzIDEyMy01NS4wNyAxMjMtMTIzeiIvPjxwYXRoIGZpbGw9IiMzMzMiIGQ9Ik0zMjQuODIgMzQzLjM4OEgxMTkuNjY4bDg4LjcxNS0xNTMuNjZhMTQ4Ljc0NSAxNDguNzQ1IDAgMCAxIDI3LjY0NyA5LjIwOGM0Ni4yNjMgMjAuNjMgODAuMTYgNjMuOTk3IDg3LjQ5IDExNS45YTE1MS41MDYgMTUxLjUwNiAwIDAgMSAxLjMgMjguNTUyek0yMjIuNDQgMjIyLjQ4bC01My4zMjMgOTIuMzU4aDEyNy4wN2MtNy4yNTQtNDEuODI1LTM1LjYzLTc2LjQwNi03My43NDItOTIuMzU0Ii8+PC9zdmc+" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="geometry">Geometry</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>

		<table  class="perspectivesRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIj48cGF0aCBkPSJNLjk3MiAxNS4zMjhsNy44OC0xMi45NjJMNi43NDYgMTguMzgiIGZpbGw9IiMzMzMiLz48cGF0aCBkPSJNNi43NDYgMTguMzhMOC44NTIgMi4zNjZsOS45NyAxMy42OCIgZmlsbD0iIzY2NiIvPjxwYXRoIGQ9Ik0yLjI2NyAxNC45OTJMNy4zMyA2LjY1NSA2LjAxIDE2LjkzMyIgZmlsbD0iIzYxNjFmZiIvPjxwYXRoIGQ9Ik03LjgxMiAxNy4yNUw5LjQzNiA0Ljc0bDcuNzY2IDEwLjY5NiIgZmlsbD0iIzk5ZiIvPjwvc3ZnPg==" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="perspective3d">3D Graphics</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>

		<table  class="perspectivesRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PGRlZnM+PHBhdGggZD0iTTQ4NSA0NDAuMjRjMCAyNC43Mi0yMC4wNCA0NC43Ni00NC43NiA0NC43Nkg3MS43NkM0Ny4wNCA0ODUgMjcgNDY0Ljk2IDI3IDQ0MC4yNFY3MS43NkMyNyA0Ny4wNCA0Ny4wNCAyNyA3MS43NiAyN2gzNjguNDhDNDY0Ljk2IDI3IDQ4NSA0Ny4wNCA0ODUgNzEuNzZ2MzY4LjQ4eiIgaWQ9IkgiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJJIj48dXNlIGhlaWdodD0iNTEyIiB3aWR0aD0iNTEyIiB4bGluazpocmVmPSIjSCIgb3ZlcmZsb3c9InZpc2libGUiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNJKSI+PHBhdGggZmlsbD0iIzk5ZiIgZD0iTTAgMGgxNTB2NTEySDB6Ii8+PHBhdGggZD0iTTM2MC40ODggMzQ3LjA4OGgtNTYuMDU1bC0zOS4zMDctNjIuNTUtMzYuNTcyIDYyLjU1aC01Mi42MzdsNjIuNTUtOTMuNjUyLTU2LjM5Ny04MS4zNDhoNTUuNzEzbDM0LjUyIDUxLjYxIDI5LjczNy01MS42MWg1Mi4yOTVsLTU1LjAzIDgxLjM0OCA2MS4xODMgOTMuNjUyek01MTIgMjM5Ljk0N0gzNzYuMTc0VjIxOS4zOEg1MTJ2MjAuNTY3ek01MTIgMzAxSDM3Ni4xNzR2LTIwLjg5NUg1MTJWMzAxeiIgZmlsbD0iIzY2NiIvPjwvZz48L3N2Zz4=" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="cas">CAS</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>

		<table  class="perspectivesRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMjAgMjAiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik00ODUgNDQwLjI0YzAgMjQuNzItMjAuMDQgNDQuNzYtNDQuNzYgNDQuNzZINzEuNzZDNDcuMDQgNDg1IDI3IDQ2NC45NiAyNyA0NDAuMjRWNzEuNzZDMjcgNDcuMDQgNDcuMDQgMjcgNzEuNzYgMjdoMzY4LjQ4QzQ2NC45NiAyNyA0ODUgNDcuMDQgNDg1IDcxLjc2djM2OC40OHoiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJiIj48dXNlIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI2EiLz48L2NsaXBQYXRoPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0uMDE2IC4xNDgpIHNjYWxlKC4wMzkwNikiIGNsaXAtcGF0aD0idXJsKCNiKSIgZmlsbD0iIzk5ZiI+PHBhdGggZD0iTTI2IDI2aDQ2MHYxMzBIMjZ6Ii8+PHBhdGggZD0iTTI2IDI2aDEzMHY0NjBIMjZ6Ii8+PC9nPjxwYXRoIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0uMDE2IC4xNDgpIHNjYWxlKC4wMzkwNikiIGNsaXAtcGF0aD0idXJsKCNiKSIgZD0iTTE1Ny41MDQgMTkuMzMzaDI0djE4Ni4zMzNoLTI0eiIgZmlsbD0iI2ZmZiIvPjxwYXRoIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0uMDE2IC4xNDgpIHNjYWxlKC4wMzkwNikiIGNsaXAtcGF0aD0idXJsKCNiKSIgZD0iTTIwIDE1NS41MDRoMTM5Ljc2NnYyNEgyMHptMCAxNTYuMzI4aDE0MC43NjZ2MjRIMjB6TTMxMC45MzQgMjFoMjR2MTM5Ljc2NWgtMjR6IiBmaWxsPSIjZmZmIi8+PHBhdGggdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLS4wMTYgLjE0OCkgc2NhbGUoLjAzOTA2KSIgY2xpcC1wYXRoPSJ1cmwoI2IpIiBkPSJNMTU2IDMxMS44MzJoMzMwdjI0SDE1NnoiIGZpbGw9IiM2NjYiLz48cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtLjAxNiAuMTQ4KSBzY2FsZSguMDM5MDYpIiBjbGlwLXBhdGg9InVybCgjYikiIGQ9Ik0zMTAuOTM0IDE1Ni4yNTJoMjRWNDg2aC0yNHoiIGZpbGw9IiM2NjYiLz48cGF0aCBkPSJNMTEuMjkyIDUuNTMyaC0uNTA2bC0uMzcyLS45MmgtMS42OGwtLjM3Ni45MmgtLjQ5M2wxLjQ0NC0zLjQzaC41MnpNMTAuMjE1IDQuMjFMOS41NiAyLjYyNCA4LjkyIDQuMjFoMS4yOTV6TTQuMTMgMTEuNjFoLS40NFY4Ljc0NmMtLjE3OC4xMjQtLjQyNi4yNTYtLjc0NS4zOTV2LS4zOTRjLjEzNC0uMDgyLjI2My0uMTc0LjM4NC0uMjc1LjExOC0uMDk4LjIwMy0uMTczLjI1Mi0uMjI0LjA1LS4wNS4wNzUtLjA3NS4wNzUtLjA3MmguNDc0djMuNDM3em0uNDQ1IDYuMDYySDIuNXYtLjQ0Yy40MDQtLjQ1LjcyNC0uODEuOTYtMS4wNzQuMjM4LS4yNjUuNDA0LS40Ny41LS42MTQuMDk0LS4xNDQuMTQtLjI3LjE0LS4zOCAwLS4yMDctLjA0LS4zNi0uMTItLjQ1Ny0uMDgtLjEtLjIxNi0uMTQ4LS40MDUtLjE0OC0uMTY3IDAtLjI5My4wNDgtLjM3Ny4xNDQtLjA4My4wOTctLjEzOC4yNS0uMTYzLjQ2aC0uNDgzYy4wNS0uNjY2LjM5LTEgMS4wMjMtMSAuMzEzIDAgLjU1OC4wOTYuNzM1LjI4Ny4xNzcuMTkuMjY1LjQwNy4yNjUuNjUgMCAuMDczLS4wMDYuMTQyLS4wMTguMjAzLS4wMTMuMDYzLS4wMzMuMTI4LS4wNi4xOTgtLjAzLjA3LS4wNjcuMTQyLS4xMTUuMjE2LS4wNDguMDc1LS4xMDguMTYtLjE4LjI1NC0uMDc0LjA5NS0uOTE3IDEuMDUzLTEuMDE2IDEuMTY0LS4xLjExMiAxLjU0My0uMDUgMS40MTIuMDk4IiBmaWxsPSIjMzMzIi8+PC9zdmc+" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="spreadsheet">Spreadsheet</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>

		<table  class="perspectivesRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PGRlZnM+PHBhdGggZD0iTTQ4NSA0NDAuMjRjMCAyNC43Mi0yMC4wNCA0NC43Ni00NC43NiA0NC43Nkg3MS43NkM0Ny4wNCA0ODUgMjcgNDY0Ljk2IDI3IDQ0MC4yNFY3MS43NkMyNyA0Ny4wNCA0Ny4wNCAyNyA3MS43NiAyN2gzNjguNDhDNDY0Ljk2IDI3IDQ4NSA0Ny4wNCA0ODUgNzEuNzZ2MzY4LjQ4eiIgaWQ9Im0iLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJuIj48dXNlIGhlaWdodD0iNTEyIiB3aWR0aD0iNTEyIiB4bGluazpocmVmPSIjbSIgb3ZlcmZsb3c9InZpc2libGUiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNuKSI+PHBhdGggZD0iTTE1NS41NjQgNDQ2LjUxaDIwMC44NzNWMTgwLjUyNEMzMTAuODQ3IDEwOC4xMDcgMjgxLjMwMiA3My4yNCAyNTYgNzMuMjRjLTI1LjMwMiAwLTU0Ljg0NyAzNC44NjctMTAwLjQzNiAxMDcuMjgzVjQ0Ni41MXoiIGZpbGw9IiM5OWYiLz48cGF0aCBkPSJNNjA5IDQyMi45NjhzLTEzMC45NyAyMS40MDUtMjA3LjA2LTE0Ny43QzMyNS44NSAxMDYuMTYgMjg3LjE4NCA2NS40ODcgMjU2IDY1LjQ4N2MtMzEuMTgzIDAtNjkuODUgNDAuNjcyLTE0NS45NCAyMDkuNzc4Uy05NyA0MjIuOTY4LTk3IDQyMi45NjgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzY2NiIgc3Ryb2tlLXdpZHRoPSIyNiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIi8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMzMzIiBzdHJva2Utd2lkdGg9IjI2IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0tOTcgNDQ2LjUxaDcwNiIvPjwvZz48L3N2Zz4=" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="probability">Probability</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>


		<table class="perspectivesRow examPerspectiveRow"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIj48ZyBmaWxsPSIjOTlmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yNTYgMjYyLjQzMkwyNjcuMjkzIDI1NmMyMS4wNC02IDYwLjA0LTM4LjMzNCA4NC43MzYtODMuMUgxNTkuOTdjMTguNjk3IDM5LjQzMyA2OS4zNjMgODEuMSA4NC43MzUgODMuMUwyNTYgMjYyLjQzMnpNMjU2IDM1Mi42NjdsMTMwLjMzMyA3My4xMDd2MzYuNTU0SDEyNS42Njd2LTM2LjU1NCIvPjwvZz48cGF0aCBkPSJNMjE0LjAzNCAyNTZDMTU3LjU4MiAyMjkuNjU0IDEwNiAxNTQuMzIgMTA2IDMwaDMwMGMwIDEyNC4zMjMtNTEuNTgzIDE5OS42NTYtMTA4LjAzNiAyMjZDMzU0LjQxNyAyODIuMzQ0IDQwNiAzNTcuNjc3IDQwNiA0ODJIMTA2YzAtMTI0LjMyMiA1MS41OC0xOTkuNjU2IDEwOC4wMzQtMjI2ek0xMzAuNSA0NTkuNDZoMjUxYzAtMTExLjkyNC02Ni45NzQtMTc5Ljc0NC0xMTQuMjA3LTIwMy40NkMzMTQuNTI2IDIzMi4yODQgMzgxLjUgMTY0LjQ2NCAzODEuNSA1Mi41NGgtMjUxYzAgMTExLjkyMiA2Ni45NzMgMTc5Ljc0MiAxMTQuMjA1IDIwMy40NkMxOTcuNDczIDI3OS43MTcgMTMwLjUgMzQ3LjUzOCAxMzAuNSA0NTkuNDZ6IiBmaWxsPSIjNTU1Ii8+PC9zdmc+" class="perspImage"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="exam">Exam</div></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Image perspectivesHelp"></div></td></tr></tbody></table>


		<table  class="perspectivesRow upperBorder"><tbody><tr><td align="left" style="vertical-align: top;">
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABE0lEQVR42t1V2w3CMAxkBEZgBEZghI7QERihG+Sjr8+MwAiMwAgdoSOUHLIlExwnBVEJIllNY/l1vji73d+vcRwPXded+773wzBcIdjjDLqPHMNRkCUjfnWgkGUVDGc4oIxr59ye9djjjHQIMsNmjfNioyiZqgSWmeSoOGpInnT4ZzsTLsZcZkJwTBr2icq9lf0DcwUGYD2FrxO4L3G2rFOrICrCsNaC875t2xMHwD5CoMY5fCXhkWyJF8F1owBTQq/DxOUVOn8hgUhUhTkbQEBoMiUZIAcRXyw0OlOlDpHVZNlgq0dmky2aygq15hbRNHXRhO7C9MyMGP/WqCBdE3N/1aj4+rDbZFxv8uBs8mT+zLoDT+fe+64Z+dIAAAAASUVORK5CYII=" class="gwt-Image"></td><td align="left" style="vertical-align: top;">
		<div class="gwt-Label" id="tutorials">Tutorials</div></td></tr></tbody></table>

		</div></div></td><td class="dialogMiddleRight"><div class="dialogMiddleRightInner"></div></td></tr><tr class="dialogBottom"><td class="dialogBottomLeft"><div class="dialogBottomLeftInner"></div></td><td class="dialogBottomCenter"><div class="dialogBottomCenterInner"></div></td><td class="dialogBottomRight"><div class="dialogBottomRightInner"></div></td></tr></tbody></table></div>
    </div>
	</div>
	
<script type="text/javascript">
    //TODO add this to html
    if(module == "web3d" && lookAndFeel === ""){
        document.getElementsByClassName("upperBorder")[0].outerHTML = '<div class="storeIconHolder"><div class="separatorDiv"></div>'+
        '<a class="gwt-Anchor" target="_blank" href="https://play.google.com/store/apps/details?id=org.geogebra.android">'+
        		'<div class="downloadimg"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/><path d="M0 0h24v24H0z" fill="none"/>'+
'</svg></div><span id="download" class="downloadlink">Download</span></a>'+
        '</div>';
    }
    
</script>
 


<div class="startScreen splitter">
<div class="gwt-SplitLayoutPanel-HDragger" style="width: 8px; position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px;">
</div></div>

<div class="gwt-TreeItem NewRadioButtonTreeItemParent startScreen" role="treeitem" >
<div class="latexEditor" style="min-height: 59px;">

<div class="clearButtonWrapper"><div tabindex="0" class="gwt-PushButton ggb-btnClearAVInput gwt-PushButton-up" role="button" aria-pressed="false">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVR42mNgGAWDDkydOjUBiM/39/cLEKsHpBakB6SXGAtACv8TawmS4WA9DKRqwGcJKWpJ1ki24cQYQLHh+AyimuG4LKGq4Tgsoa7hNLeApkFE00imaTKlaUajeVFB88KO5sX1KKA7AADr2TfUFtDYqwAAAABJRU5ErkJggg==" width="24" height="24" class="gwt-Image"></div></div></div></div>

</div>
    <article id="ggw"
    data-param-useBrowserForJS="false"
    data-param-app="true" data-param-showAppsPicker="true" ></article>
</body>
</html>
