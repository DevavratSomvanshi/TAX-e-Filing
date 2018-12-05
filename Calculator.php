<!DOCTYPE html>
<!-- saved from url=(0058)file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator.html -->
<html class="gr__localhost"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link rel="stylesheet" href="./Income Tax Calculator_files/bootstrap.min.css">
	<script type="text/javascript" src="./Income Tax Calculator_files/755798193d"></script><script src="./Income Tax Calculator_files/nr-1071.min.js.download"></script><script type="text/javascript" async="" src="./Income Tax Calculator_files/analytics.js.download"></script><script type="text/javascript" async="" src="file://bat.bing.com/bat.js"></script><script async="" src="file://www.googletagmanager.com/gtm.js?id=GTM-TRB8XL"></script><script type="text/javascript" src="./Income Tax Calculator_files/755798193d(1)"></script><script src="./Income Tax Calculator_files/nr-1071.min.js(1).download"></script><script type="text/javascript" async="" src="./Income Tax Calculator_files/analytics.js(1).download"></script><script type="text/javascript" async="" src="./Income Tax Calculator_files/bat.js.download"></script><script async="" src="./Income Tax Calculator_files/gtm.js.download"></script><script src="./Income Tax Calculator_files/jquery-3.1.0.min.js.download"></script>
    <script src="./Income Tax Calculator_files/bootstrap.min.js.download"></script>
	<link rel="stylesheet" href="./Income Tax Calculator_files/font-awesome.min.css">
	 <link rel="stylesheet" href="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/Footer-with-button-logo.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="./Income Tax Calculator_files/news.css">
	<link rel="stylesheet" href="./Income Tax Calculator_files/bootstrap.min(1).css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <title>Income Tax Calculator - Calculate Income Tax Online for FY 2018-19</title>
    <!-- HTTP 1.1 -->
<meta http-equiv="Cache-Control" content="no-store">
<!-- HTTP 1.0 -->
<meta http-equiv="Pragma" content="no-cache">
<!-- Prevents caching at the Proxy Server -->
<meta http-equiv="Expires" content="0">

<link href="http://localhost/images/favicon.ico" type="image/x-icon" rel="shortcut icon">

<style id="ajax-content">
</style>

<script type="text/javascript">
    var ajaxCallCompleted = false;
    // Javascript Ajax support implementation
    var EXPERIMENT_COOKIE = 'xt';
    var EXPERIMENT_ROOT_COOKIE = 'xt_root';
    function getNewImage() {
        return (window.Image ? new Image() : document.createElement('img'));
    }
    //Gets the browser specific XmlHttpRequest Object
    function getXmlHttpRequestObject() {
        if (window.XMLHttpRequest) {
            return new XMLHttpRequest();  // works with IE7+, Chrome, Firefox, Safari
        } else  {
            return new ActiveXObject("Microsoft.XMLHTTP");  // works with IE6, IE5
        }
    }
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    /**
     * Get the value for a particular cookie value
     */
    function getCookieValue(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return null;
    }

    function getCookieExpireForDate(date) {
        return "; expires=" + date.toUTCString();
    }

    function extractValue(element,key){
        if(element==null || element == undefined)
            return "";
        if(element.getElementsByClassName(key)== null || element.getElementsByClassName(key)== undefined || element.getElementsByClassName(key).length < 1)
            return "";
        else
        return element.getElementsByClassName(key)[0].value ;
    }

    function setCookie(cookieName, cookieVaue, expires, path, secure) {
        var cookie = cookieName + "=" + cookieVaue;

        //the caller should calculate the expires by using getCookieExpireForDate()
        if(expires !=  null) {
            cookie += expires;
        }

        if(path != null) {
            cookie += "; path=" + path;
        }

        if(secure === true) {
            cookie += "; secure";
        }

        document.cookie = cookie;
    }

    var ctx = "/";
    
        var pt = '';
        var pageNameForAjax = 'landingPage';
        var url = pt + "/ajax-content.html?ajax=true&pageNameForAjax=" + pageNameForAjax+"&origin_path="+document.location.pathname;
        var variant = getParameterByName('variant');
        var isSentence = false;
        
        //Fix for Bz 41875
        
            if( (variant!=null && variant.indexOf('slide')==-1) && (window.location.pathname == '/home-loan.html' || window.location.pathname == '/personal-loan.html' || window.location.pathname == '/car-loan.html'))
                isSentence = true;
        

        if(isSentence == true) {
            url = url + "&eligSentenceForm=true";
        }

        if(window.location.search.indexOf('?') != -1) {
            url = url + "&" + window.location.search.split("?")[1];
        }

        setTimeout(function () {
            var request = getXmlHttpRequestObject();
            var absoluteUrl = window.location.protocol+"//"+window.location.host+"/"+url;
            request.open('POST', absoluteUrl);
            request.setRequestHeader('BB_Referer', document.referrer);
            request.onreadystatechange = function (data) {
                if (request.readyState == 4) {
                    if (request.status == 200) {
                        document.getElementById("ajax-content").innerHTML = request.responseText;
                        ajaxCallCompleted = true;
                        
                            firePgHitPixel(request.responseText);  //Fire pghit pixel
                        

                        // Report the same window login case.
                        if (typeof(reportSameWindowLoginResult) === typeof(Function)) {
                            reportSameWindowLoginResult();
                        }
                    } else {
                        addTrackerElement("ajaxCallCompleted", "true"); //Continue with ajax calls even when ajax-content request fails
                        ajaxCallCompleted = true;
                    }
                }
            };
            request.send();
        }, 0);
    
    function addTrackerElement(id, value) {
        var existingElement = document.getElementById(id);
        if(existingElement != null) {
            existingElement.value = value;
        }
        else {
            var trackerElement = document.createElement("INPUT");
            trackerElement.value = value;
            trackerElement.setAttribute("id", id);
            trackerElement.setAttribute("type", "hidden");
            document.body.appendChild(trackerElement);
        }
    }
    function firePgHitPixel(content)
    {
        
            var response = document.createElement('html');
            response.innerHTML = content;
            var channel = extractValue(response,"channelKey");
            var productType =extractValue(response,"productTypeKey");
            var website = extractValue(response,"websiteKey");
            var deviceType =extractValue(response,"deviceTypeKey");
            var returningUser =extractValue(response,"returningUserKey");
            var internalAccess = extractValue(response,"isInternalAccessKey");
            var isMonitoringAgent =extractValue(response,"isMonitoringAgentKey");
            var partnerName =extractValue(response,"partnerFromRequestKey");
            var experimentString =extractValue(response, "experimentString");

            if (channel != '' && productType != '' && website != '' && deviceType != '') {
                var logType = 'VISIT';
                var pagehitTime = new Date().getTime(); //so that image doesnt get cached in browser
                var pagehitreq = ctx + "images/pagehit.gif?channel=" + channel + "&logType=" + logType + "&deviceType=" + deviceType + "&productType=" + productType + "&website=" + website +
                        "&returningUser=" + returningUser + "&internalAccess=" + internalAccess + "&isMonitoringAgent=" + isMonitoringAgent + "&partnerName=" + partnerName + "&t=" + pagehitTime;
                if(experimentString!=null) {
                    pagehitreq = pagehitreq +"&xt="+experimentString;
                }
                getNewImage().src = pagehitreq;
            }
            /*hidden element with id returningUser is getting used at many places. setting this hidden element value so that it will be always in sync with returningUserKey*/
            var returningUserEle = document.getElementById("returningUser");
            if(returningUserEle != null && returningUserEle !=undefined){
                returningUserEle.value = returningUser;
            }
        
    }
    

    function firePixel() {
        setTimeout(function() {
            var request = getXmlHttpRequestObject();
            request.open('GET', url);
            request.setRequestHeader('BB_Referer', document.referrer);
            request.setRequestHeader('Framed_Page', self.location.href);
            request.onreadystatechange = function (data) {
                if (request.readyState == 4 && request.status == 200) {
                    var logType = 'PAGE_FRAMED';
                    var pagehitTime = new Date().getTime(); //so that image doesnt get cached in browser
                    var pagehitreq = ctx + "images/pageframed.gif?&logType=" + logType +
                            "&t=" + pagehitTime + "&BB_Referer=" + document.referrer + "&Framed_page=" + self.location.href;
                    getNewImage().src = pagehitreq;
                }
            }

            request.send();
        }, 1000);
    }
    function showErrorPage() {
        if ( self != top ) {
            firePixel();
            $('body').html($('#errorPage').html());
        }
    }
    function executeAjaxCall() {
        var ajaxCallStatusElement = document.getElementById("ajaxCallCompleted");
        if(ajaxCallStatusElement != null) {
            var completed = document.getElementById("ajaxCallCompleted").value === "true";
            return completed;
        }
        else {
            return false;
        }
    }

    function reportCustomAttributesForNewRelic(key,value) {
        if (typeof newrelic !== "undefined") {
            newrelic.setCustomAttribute(key,value);
        }
    }

    function getXtValue(){
        var xt="";
        if(getCookieValue(EXPERIMENT_COOKIE)!=null) {
            //set the experiment so that session parameters can be set
            xt=getCookieValue(EXPERIMENT_COOKIE);
        }
        else if (getCookieValue(EXPERIMENT_ROOT_COOKIE)!=null) {
            // this is a backup code path that will be used only in case of IE where
            // non-root path cookies are not available via document.cookies.
            xt=getCookieValue(EXPERIMENT_ROOT_COOKIE);
        }
        else {
            xt=getParameterByName(EXPERIMENT_COOKIE);
        }
        return xt;
    }

    window.onload = function() {
        /*This JS is loaded in few pages of WL websites as well, where the ajax content call, web events aren't applicable .
         * Hence invoking this method only when the trackEvents.js is loaded and reporting web events is enabled.
         * */
        if (typeof(isWebEventEnabled) === typeof(Function) && isWebEventEnabled()) {
            copyHiddenVariablesToBody();
        }

        showErrorPage();
        if(getParameterByName('variant') == 'slide') {
            reportCustomAttributesForNewRelic('variant','slide');
        }

        var xt=getXtValue();
        reportCustomAttributesForNewRelic("xt",xt);

    };

</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XQEHUVFQGwAFV1dWBwkH"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><style id="holderjs-style" type="text/css"></style>
    

<meta property="og:title" content="Income Tax Calculator - Calculate Income Tax Online for FY 2018-19">
<meta name="keywords" content="income tax calculator, how to calculate income tax ,tax calculator, income tax, online tax calculator">
<meta name="description" content="Income Tax Calculator: Now it is easy to get instant results on annual tax deductions, tax liabilities with our Online Income Tax Calculator for AY 2019-20, 2018-19 and 2017-18. Simply enter your income, investment details &amp; get the result in no time.">
<link rel="preconnect" href="https://events.bankbazaar.com/" crossorigin="">
<link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin="">
<link rel="preconnect" href="https://www.google-analytics.com/" crossorigin="">
<link rel="dns-prefetch" href="https://www.google.com/">
<link rel="preconnect" href="https://www.gstatic.com/" crossorigin="">
<link rel="dns-prefetch" href="https://lh4.googleusercontent.com/">
<link rel="preconnect" href="https://stats.g.doubleclick.net/" crossorigin="">

<link rel="dns-prefetch" href="https://privacy-policy.truste.com/">

<link rel="dns-prefetch" href="https://www.facebook.com/">

<link rel="dns-prefetch" href="https://fbcdn-profile-a.akamaihd.net/">
<link rel="dns-prefetch" href="https://datacdn.atomex.net/">

<link rel="dns-prefetch" href="https://c.webengage.com/">
<link rel="dns-prefetch" href="https://z.webengage.com/">
<link rel="alternate" href="android-app://com.bankbazaar.app/http/bankbazaar.com/landing/tax/how-calculate-income-tax-on-salary-with-example"><!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/gzip_1938818735/bundles/html5shiv.js" ></script>
<script type="text/javascript" src="/gzip_N522412095/bundles/respond.js" ></script>
<![endif]-->

    <link rel="canonical" href="https://www.bankbazaar.com/tax/how-calculate-income-tax-on-salary-with-example.html">

    <meta property="og:type" content="website">
<!-- Facebook start -->
<meta property="og:description" content="Income Tax Calculator: Now it is easy to get instant results on annual tax deductions, tax liabilities with our Online Income Tax Calculator for AY 2019-20, 2018-19 and 2017-18. Simply enter your income, investment details &amp; get the result in no time.">
<meta property="og:image" content="https://cdn1-bb-image.bankbazaar.com/mp/social-share/bb-social-share-v1.jpg">
<meta property="og:url" content="https://www.bankbazaar.com/tax/how-calculate-income-tax-on-salary-with-example.html">
<!-- Facebook end -->
<link rel="apple-touch-icon" href="http://localhost/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="76x76" href="http://localhost/images/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://localhost/images/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://localhost/images/touch-icon-ipad-retina.png">
<link rel="apple-touch-startup-image" href="http://localhost/images/splash.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="BankBazaar">
<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@BankBazaar">

    <meta name="twitter:title" content="Income Tax Calculator - Calculate Income Tax Online for FY 2018-19">
    <meta name="twitter:description" content="Income Tax Calculator: Now it is easy to get instant results on annual tax deductions, tax liabilities with our Online Income Tax Calculator for AY 2019-20, 2018-19 and 2017-18. Simply enter your income, investment details &amp; get the result in no time.">
    <meta name="twitter:image" content="https://www.bankbazaar.com/images/mp/social-share/bankbazaar-com-og-v1.png">
<link rel="stylesheet" type="text/css" media="screen" href="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lwDefaultDecorator.css">
<link rel="stylesheet" type="text/css" media="screen" href="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/offer-table-widget.css">
<link rel="stylesheet" type="text/css" media="screen" href="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lw-landingPage.css">
<style type="text/css">
        .dontshow {display: none;}.preLoad-Image{height:0; overflow: hidden; font-size: 0; line-height: 0;}
        .mobile .offers-page .zopim{display:none !important;}
.bb-banner{background-image: url(/images/gateway/gateway-banner-credit-score-bg-desktop-lg-v2.png);}

.bb-home-page .bb-product-search, .bb-home-page .welcome-greet{display:none;}
.bb-home-page-mobile.modal-open #webklipper-publisher-widget-container{ display:none;}

@media (max-width:1024px) {
	.bb-banner{background-image: url(/images/gateway/gateway-banner-credit-score-bg-desktop-v1.png);}
	.bb-banner{background-size:cover;background-position:-443px 0;}
}
@media (max-width:1023px) {
	.portrait .bb-banner{background-size:cover;background-position:-443px 0;}
}


.primary-txt .link-cta-btn.link-cta-btn-1,.product-section .primary-txt .link-cta-btn.link-cta-btn-1{border:2px solid #34495E;font-weight:normal;margin:0;}
.link-cta-btn .left-box, .link-cta-btn .right-box{display:table-cell;vertical-align:middle;}
.link-cta-btn .left-box{text-align:right;color:#fff;}
.link-cta-btn .right-box{min-width:160px;}
.link-cta-btn strong{color:#fff;}
.primary-txt .link-cta-btn-1.bg-pickled-blue{background-color:#34495E;}
.primary-txt .txt-buttercup{color:#F1C40F;}
.primary-txt .link-cta-btn.link-cta-btn-1 a{position:relative;overflow:hidden;display:block;}
.link-cta-btn-1{display:table;}
.link-cta-btn-1 .btn-animation-type-1 a:after{content:"";width:45px;height:100px;position:absolute;left:0;top:-10px;transform: rotate(-20deg);
background: -moz-linear-gradient(right, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 1%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
background: -webkit-linear-gradient(right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,0.5) 50%,rgba(255,255,255,0) 100%);
background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,0.5) 50%,rgba(255,255,255,0) 100%); -webkit-animation: btn-slide infinite 2s linear;animation: btn-slide infinite 2s linear;}
@keyframes btn-slide {from{margin-left:-20px;}to{margin-left:250px;}}
@media only screen and (max-width:767px) {
.cta-section.cta-section-1{display:block;width:100%;}
.link-cta-btn .left-box{width:100%;}
.primary-txt .link-cta-btn.link-cta-btn-1 a{margin: 0 0 0 10px;font-size:14px;}
}
@media only screen and (max-width:320px) {
.link-cta-btn .right-box{min-width:148px;}
.primary-txt .link-cta-btn.link-cta-btn-1 a{margin: 0 0 0 6px;padding: 7px 2px;}
.product-section .primary-txt .link-cta-btn.link-cta-btn-1, .primary-txt .link-cta-btn.link-cta-btn-1 {padding: 6px 4px;}
}

</style>
</head>
<body class="ln-pg      " onunload="" data-gr-c-s-loaded="true">

    <div class="screen-block-grey dontshow" id="slide-grey"></div>
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TRB8XL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRB8XL');</script><input id="ajaxCallCompleted" type="hidden" value="true">
<!-- End Google Tag Manager -->

<!-- Google Analytics Social Button Tracking -->
<script type="text/javascript">
    function BB_trackGoogleEventWithLabel(category, action, label, nonInteraction) { //prefixing BB so that fn name do not clash [just in case]
        //_gaq.push(['_trackEvent', category, action, label]);
        if (nonInteraction == "" || nonInteraction == undefined) {
            nonInteraction = false;
        }
        dataLayer.push({
            'event': 'sendEvent',
            'eventCategory': category,
            'eventAction': action,
            'eventLabel': label, // Optional: only include if label needs to be sent
            'nonInteraction' : nonInteraction
        });

    }

    function BB_trackGoogleEvent(category, action) { //prefixing BB so that fn name do not clash [just in case]
        //_gaq.push(['_trackEvent', category, action]);
        dataLayer.push({
            'event': 'sendEvent',
            'eventCategory': category,
            'eventAction': action
        });
    }

    function BB_trackGoogleSocialEvent(network, action, target) {
        dataLayer.push({
            'event': 'sendSocial',
            'socialNetwork': network,
            'socialAction': action,
            'socialTarget': target
        });
    }

    function BB_trackGoogleSocialEventWithPath(network, action, target, path) {
        dataLayer.push({
            'event': 'sendSocial',
            'socialNetwork': network,
            'socialAction': action,
            'socialTarget': target,
            'pagePath': path
        });
    }

    function BB_trackGoogleVirtualPageView(pagePath){
        dataLayer.push({
            'event': 'sendVirtualPage',
            'pagePath': pagePath
        });
    }
</script>

<style>
html,body{
  background: url("img7.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<nav class="navbar navbar-inverse">
<div class="container">
  <form class="navbar-form navbar-right" action="http://localhost/action_page.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/TAX/taxcalc.php#">New</a></li>
      <li><a href="http://localhost/TAX/signup.php" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Sign-Up</a></li>
    <li><a href="http://localhost/TAX/taxcalc.php#">Feedback</a></li>
  </ul>	  
</div>
</nav>
  <!--login attach-->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="text" class="form-control" id="psw" placeholder="Enter password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="" checked="">Remember me</label>
          </div>
            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        <p>Not a member? <a href="http://localhost/TAX/taxcalc.php#">Sign Up</a></p>
        <p>Forgot <a href="http://localhost/TAX/taxcalc.php#">Password?</a></p>
      </div>
    </div>
    
  </div>
</div> 
  <!--login attach end--> 
  
  
           <div class="jumbotron row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <img src="./Income Tax Calculator_files/Logo.png" alt="logo" style="max-width: 150px;max-height: 140px">
              </div>
              <div class="col-md-8">
                  <h1 style="">INCOME TAX e-FILING</h1> 
                 <small><h3>Government of India</h3></small>
              </div> 
            </div>
  
  <!--navbar menu -->
  
  
<nav class="navbar navbar-inverse ">
<div class="container">
  <div class="row">
  <ul class="nav navbar-nav ">
    <li><a href="http://localhost/TAX/index.php">HOME<span class="caret"></span></a></li>
    <li><a href="http://localhost/TAX/taxcalc.php#">TAX Details<span class="caret"></span></a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/TAX/taxcalc.php#">STATUS<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-1</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-2</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-3</a></li>
      </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/TAX/taxcalc.php#">CLIENT PORTAL<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-1</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-2</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-3</a></li>
      </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/TAX/taxcalc.php#">HELP<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-1</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-2</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-3</a></li>
      </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/TAX/taxcalc.php#">ABOUT US<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-1</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-2</a></li>
        <li><a href="http://localhost/TAX/taxcalc.php#">Page 1-3</a></li>
      </ul>
    </li>
  </ul>
 </div>
</div>
</nav>		
  
  <!--Menu nav bar ends--><input type="hidden" name="hiddenLPDNamespace" value="tax/how-calculate-income-tax-on-salary-with-example" id="hiddenLPDNamespace">
<div class="bank-prod-page">
    <div class="container ">
        <div class="col-md-12">
            <div class="tab-content">
                

                <div class="row btm-pad">
                        </div>
                <div id="primary-content-section" class="primary-txt">
                    <div class="row btm-pad">
                        <div class="col-md-12">
							
                            <iframe src="./Income Tax Calculator_files/saved_resource.html" style=" width:inherit; height:1500px;"  frameBorder="0" scrolling="yes" name="taxCacl"   marginheight="0px" marginwidth="0px" allowfullscreen=""  ></iframe>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="container">
      <div class="close">            <button type="button" class="btn" data-dismiss="modal" id="closeExitBlockerModal" aria-hidden="true">               Close            </button>         </div>
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-body">                 

<img class="img-responsive lazy" title="Calculating Income Tax on Salary" alt="Calculating Income Tax on Salary" data-original="/images/india/infographic/how-calculate-income-tax-on-salary-with-example.png" src="./Income Tax Calculator_files/taxcalc.php">
             </div>
         </div>
      </div>
   </div>
</div>






















   
















 













<div class="hungry-table">
         
</div>
























































&lt;









</div>
    </div>
</div>

<div class="">
            </div>

    <div id="landingPageReviews" class="screen-block-z-index">
            </div>
    </div>

    <div class="bottom-menu bottom-menu-large tools-menu">
    <div class="container">
        <div class="row">
            </div>
    </div>
</div>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"35364080","applicationTime":130,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"755798193d","transactionName":"NldTZkBTVxJXWkALXg8dYkZAR00Sd1pAC14PHV1TXFZQD1EURANWBA==","agent":"","errorBeacon":"bam.nr-data.net"}</script><input type="hidden" name="bank" value="allBank" id="bank"><input type="hidden" name="city" value="allCity" id="city"><input type="hidden" name="mode" value="seo" id="mode"><input type="hidden" name="originalRequestURL" value="https%3A%2F%2Fwww.bankbazaar.com%2Flanding-page.html" id="originalRequestURL"><input type="hidden" name="bb-footer" value="true" id="bb-footer"><input type="hidden" name="emailAvailable" value="NO" id="emailAvailable"><input type="hidden" name="contactAvailable" value="NO" id="contactAvailable"><!-- This change controls the email + contact number
-->
<div style="display:none;" id="scrollup">
        <a href="http://localhost/TAX/taxcalc.php#top"><span><i class="sprite-symbols symbols-down-arrow"></i></span></a>
    </div>
<input type="hidden" id="showFbGplusLayover" value="false">
<input type="hidden" id="fBLayover_StartTime" value="0">
<input type="hidden" name="propertyCity" value="" id="propertyCity"><input type="hidden" name="mcIdVal" value="SEOGoogleex0t1" id="mcIdVal"><input type="hidden" name="isMobileReceived" value="false" id="isMobileReceived"><input type="hidden" name="mcId" value="SEOGoogleex0t1" id="mcId"><input type="hidden" name="pTypeId" value="97" id="pTypeId"><script type="text/javascript">

    var sokrati_tracked = 'false';
    var mcId = document.getElementById("mcId").value;
    var pTypeId = document.getElementById("pTypeId").value;

    _sokClient = '124';
    var sokrati = {
        init:function() {
            sokrati.randomGen = 72008010;
            protocol = ("https:" == document.location.protocol) ? "https:" : "http:";
            sokrati.url = protocol + "//tracking.sokrati.com/";
            sokrati.base = "res=" + screen.width + "x" + screen.height + "&lang=" + (navigator.language || navigator.browserLanguage).substr(0, 2);
            sokrati.base += "&client_id=" + _sokClient;
            sokrati.delay = 500;
            if (typeof _sokDelay != 'undefined') sokrati.delay = _sokDelay;
        },_pause:function(x) {
            var delay = (x || 300);
            if (delay < 300)delay = 300;
            var now = new Date();
            var stop = now.getTime() + delay;
            while (now.getTime() < stop) var now = new Date();
        },_beacon:function(control, x, sokParams) {
            if (x) {
                var paramStr = "";
                for (var key in sokParams) {
                    paramStr = paramStr + "&" + escape(key) + "=" + escape(sokParams[key]);
                }
                var img = new Image(1, 1);
                img.src = sokrati.url + control + sokrati.base + x + "&_ur=" + Math.round(Math.random() * sokrati.randomGen) + "&_ref=" + escape(document.referrer) + paramStr;
                img.onload = function() {
                    return;
                }
            }
        }, beacon:function(pg, id) {
            sokrati._beacon("site?", "&product_category=" + pg + "&item_identifier=" + id, {});
        }, beaconParams:function(pg, id, params) {
            sokrati._beacon("site?", "&product_category=" + pg + "&item_identifier=" + id, params);
        }, track:function(pg, id) {
            sokrati._beacon("lead?", "&product_category=" + pg + "&item_identifier=" + id, _sokParams);
            _sokParams = {}
        }, trackParams:function(pg, id, params) {
            sokrati._beacon("lead?", "&product_category=" + pg + "&item_identifier=" + id, params);
        }, trackSale:function(pg, id, sales, quantity) {
            sokrati._beacon("lead?", "&product_category=" + pg + "&item_identifier=" + id + "&sales=" + sales + "&qty=" + quantity, _sokParams);
            _sokParams = {}
        }, trackSaleParams:function(pg, id, sales, quantity, params) {
            sokrati._beacon("lead?", "&product_category=" + pg + "&item_identifier=" + id + "&sales=" + sales + "&qty=" + quantity, params);
        }, click:function(pg, id, url) {
            sokrati._beacon("lead?", "&product_category=" + pg + "&item_identifier=" + id + "&click=" + url, {});
            sokrati._pause(sokrati.delay);
        }, clickSale:function(pg, id, url, sales, quantity) {
            sokrati._beacon("lead?", "&product_category=" + pg + "&item_identifier=" + id + "&click=" + url + "&sales=" + sales + "&qty=" + quantity, {});
            sokrati._pause(sokrati.delay);
        }};
    var _sokParams = {};
    sokrati.init();

    String.prototype.startsWith = function(str) {
        return (this.indexOf(str) === 0);
    };

    var track_sokrati = function(pTypeId, paramList) {

        if (mcId.startsWith('SOKRATI') && sokrati_tracked == 'false') {
            $.get("/pixelLog.html",{step: "Step4", pTypeId : pTypeId, pixelType: "sokrati"});
            var paramStr = "";
            for (var key in paramList) {
                paramStr = paramStr + "&" + escape(key) + "=" + escape(paramList[key]);
            }

            try {
                sokrati.trackParams('link', pTypeId, paramList);
                sokrati_tracked = true;
                $.get("/pixelTracked.html",{adProvider: "sokrati" , product : document.getElementById("productNameSpace").value})
            }
            catch(err) {
                var sokrati_error_pixel = "/images/sokrati_error.gif?item_identifier=" + pTypeId + paramStr + "&t=" + (new Date()).getTime();
                new Image().src = sokrati_error_pixel;
            }

            $.get("/pixelLog.html",{step: "Step5", pTypeId : pTypeId, pixelType: "sokrati"});
            var sokrati_local_pixel = "/images/sokrati.gif?item_identifier=" + pTypeId + paramStr + "&t=" + (new Date()).getTime();
            new Image().src = sokrati_local_pixel;
             $.get("/pixelLog.html",{step: "Step6", pTypeId : pTypeId, pixelType: "sokrati"});
        }
    }

    function callSokrati() {
        // if not already tracked and if mobile is present in session and if  channel is sokrati, fire pixel on page load
        var isMobileReceived = $("#isMobileReceived").val();
        if (isMobileReceived == 'true' && mcId.startsWith("SOKRATI") && sokrati_tracked == 'false') {
            var paramListMobile = {};
            paramListMobile['lead_mode'] = 'eligform';
            paramListMobile['lead_step'] = 'mobile_provided';
            paramListMobile['lead_eligibility'] = 'yes';
            var pixelType = "sokrati";

            $.get("/pixelLog.html",{step: "Step1", pTypeId: pTypeId, pixelType: pixelType});
            $.get("/pixelLog.html",{step: "Step2", pTypeId: pTypeId, pixelType: pixelType});
            $.get("/pixelLog.html",{step: "Step3", pTypeId: pTypeId, pixelType: pixelType});
            track_sokrati(pTypeId, paramListMobile);
            if (!isInternalAccess() && $("#googleretargeting").size() == 0 && $("#lead_product").length > 0) {
                $('<iframe />', {id: "googleretargeting",src: '/common/tracking/' + $("#lead_product").val() + '.jsp',width: "1px", height: "1px" }).appendTo('body');
            }
        }
    }

</script>
<script type="text/javascript">
    function g_track() {
        if ($("#lead_product").length > 0) {
            $('<iframe />', {id: "google_analytics_codes_pixel",src: '/common/tracking/' + $("#lead_product").val() + '.jsp',width: "1px", height: "1px" }).appendTo('body');
        }
    }

    function grt_ri(ele) {
        var $ele = $(ele);
        if ($ele.length > 0 && $.trim($ele.val()).length > 0 && $ele.valid() && !isInternalAccess() && $("#googleretargeting").size() == 0) {
            g_track();
        }
    }

    function grt_nri(ele) {
        var $ele = $(ele);
        if ($ele.length > 0 && $.trim($ele.val()).length > 0 && isValidmobile_nri($ele.val()) && !isInternalAccess() && $("#googleretargeting").size() == 0) {
            g_track();
        }
    }
</script><div id="iframeContainer" class="dontshow"></div>

<script type="text/javascript">
    var isMobileProvided = false;
    // to avoid resending of offer details in case of mobile provided in pop-up
    var isOffersAlreadySent = false;
    var google_custom_params={};

    function callGoogleSmartPixelCode() {
        var param_product = 'Loan';
        var param_mobile = param_product.toString()  + "_Mobile_provided";
        if(isOffersAlreadySent)
        {
            google_custom_params = {};
        }
        if(isMobileProvided){
            google_custom_params[param_mobile] = "YES";
        }
        var ifrm = document.createElement("IFRAME");
        ifrm.setAttribute("id","google_smart_pixel");
        ifrm.setAttribute("src", '/common/tracking/google_smartpixel.jsp');
        ifrm.style.width = 1+"px";
        ifrm.style.height = 1+"px";
        document.getElementById("iframeContainer").appendChild(ifrm);
        /*$('<iframe />', {id:"google_smart_pixel", src:'/common/tracking/google_smartpixel.jsp', width:"1px", height:"1px" }).appendTo('body');*/
    }
</script>

<script type="text/javascript" async="" src="./Income Tax Calculator_files/webengage-min-v-5.0.js.download"></script><script type="text/javascript" async="" src="./Income Tax Calculator_files/webengage-min-v-5.0.js(1).download"></script><script id="_webengage_script_tag" type="text/javascript">
    
    window.addEventListener("load",function() {
        !function (e, t, n) {
            function o(e, t) {
                e[t[t.length - 1]] = function () {
                    r.__queue.push([t.join("."), arguments])
                }
            }
            var i, s, r = e[n], g = " ", l = "init options track onReady".split(g), a = "feedback survey notification".split(g), c = "options render clear abort".split(g), p = "Open Close Submit Complete View Click".split(g), u = "identify login logout setAttribute".split(g);
            if (!r || !r.__v) {
                for (e[n] = r = {__queue: [], __v: "5.0", user: {}}, i = 0; i < l.length; i++)
                    o(r, [l[i]]);
                for (i = 0; i < a.length; i++) {
                    for (r[a[i]] = {}, s = 0; s < c.length; s++)
                        o(r[a[i]], [a[i], c[s]]);
                    for (s = 0; s < p.length; s++)
                        o(r[a[i]], [a[i], "on" + p[s]])
                }
                for (i = 0; i < u.length; i++)
                    o(r.user, ["user", u[i]]);
                var f = t.createElement("script"), d = t.getElementById("_webengage_script_tag");
                f.type = "text/javascript",
                        f.async = !0,
                        f.src = ("https:" == t.location.protocol ? "https://ssl.widgets.webengage.com" : "http://cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-5.0.js",
                        d.parentNode.insertBefore(f, d)
            }
        }(window, document, "webengage");
        webengage.init('~13410604b');
    });
    </script>
<div class="app-remind-wrap" id="pendingAppRemDiv"></div>
<div class="pixel dontshow">
  <div class="dontshow">
    </div>
</div>
<!-- Adding new scripts and styles based on page -->
    <input type="hidden" name="mobileReceivedCheck" value="false" id="mobileReceivedCheck"><input type="hidden" name="mobileProductNameSpace" value="" id="mobileProductNameSpace"><input type="hidden" name="productNameSpace" value="" id="productNameSpace"><input type="hidden" name="productShortName" value="L" id="productShortName"><input type="hidden" name="stage" value="prod" id="stageValue"><input type="hidden" name="jawrDebug" value="false" id="jawrDebug"><input type="hidden" name="mobilePropertyCity" value="" id="mobilePropertyCity"><input type="hidden" name="website" value="MARKETPLACE" id="global_website"><input type="hidden" name="variantOptions" value="mobileRequired,emailOptional" id="variantOptions"><input type="hidden" name="cdnDomain" value="" id="cdnDomain"><input type="hidden" name="isBootstrapPage" value="true" id="isBootstrapPage"><input type="hidden" name="mobileSite" value="false" id="mobileSite"><input type="hidden" name="tabletSite" value="false" id="tabletSite"><input type="hidden" name="internalAccess" value="false" id="internalAccess"><input type="hidden" name="offlineChannel" value="false" id="offlineChannel"><input type="hidden" name="appEmailPresent" value="" id="appEmailPresent"><input type="hidden" name="eligEmailPresent" value="false" id="eligEmailPresent"><input type="hidden" name="pageGroup" value="" id="pageGroup"><input type="hidden" name="sessionMobileNumber" value="" id="session-mobile-number"><input type="hidden" name="pageName" value="landingPage" id="pageName"><input type="hidden" name="variantName" value="newSeo" id="variantName"><input type="hidden" name="BankbazaarInsuranceRedirectLink" value="https://www.bankbazaar.com/forward" id="BankbazaarInsuranceRedirectLink"><input type="hidden" name="BankbazaarInsuranceRedirectUrl" value="https://www.bankbazaarinsurance.com/insurance/.html" id="BankbazaarInsuranceRedirectUrl"><input type="hidden" name="customerSignUp" value="" id="customerSignUp"><input type="hidden" name="isCobrand" value="false" id="isCobrand"><input type="hidden" name="isCRO" value="false" id="isCRO"><input type="hidden" name="isWebEventsEnabled" value="true" id="isWebEventsEnabled"><input type="hidden" name="reportWebEventsToGA" value="TRUE" id="reportWebEventsToGA"><input type="hidden" name="fbAppId" value="473486006089780" id="fbAppId"><input type="hidden" name="browserBackEnabled" value="true" id="browserBackEnabled"><input type="hidden" name="isBrowserBackNewFlow" value="true" id="isBrowserBackNewFlow"><input type="hidden" name="insuranceGatewayLinkOnBack" value="https://www.bankbazaar.com" id="insuranceGatewayLinkOnBack"><input type="hidden" name="gatewayLinkOnBack" value="https://www.bankbazaar.com" id="gatewayLinkOnBack"><li class="dontshow">

<input type="hidden" name="" value="" id="referenceEligibilityId">
</li><input type="hidden" name="newFilterEnabled" value="false" id="newFilterEnabled"><!-- common file to be loaded across for jawr loading -->
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/jawr_loader.js.download"></script>
<script type="text/javascript">
    JAWR.loader.getURLs = function (path, ptype) {
        var paths = [];
        var type = ptype;
        if (ptype == null) {
            type = 'js';        //settting JS as default type
        }
        var bundles = [];
        if (type.toString().toLowerCase() == 'css') {
            bundles = this.cssbundles;
        }
        if (type.toString().toLowerCase() == 'js') {
            bundles = this.jsbundles
        }
        var mappingToUse = this.mapping;
        for (var x = 0; x < bundles.length; x++) {
            var bundle = bundles[x];
            if (bundle.belongsToBundle(path) && !this.usedBundles[bundle.name]) {
                this.usedBundles[bundle.name] = true;
                var pathtoRender;
                if (isJawrDebug() && isDevelopmentEnv()) {
                    pathtoRender = bundle.itemPathList;
                    paths = paths.concat(pathtoRender);
                } else {
                    pathtoRender = bundle.alternateProductionURL ? bundle.alternateProductionURL : this.normalizePath(mappingToUse + '/' + bundle.prefix + bundle.name);
                    if (typeof pathtoRender != undefined) {
                        /*Replacing both http and https to use // to use the page's security  protocol*/
                        pathtoRender = pathtoRender.replace(/http:\/\//gi, "//");
                        pathtoRender = pathtoRender.replace(/https:\/\//gi, "//");
                        paths.push(pathtoRender);
                    }
                }
            }
        }
        return paths;
    }

</script><script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lwflatuiscripts.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lwHeaderFooter.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lw-base.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lw-landingPage.js.download"></script>
<!--TODO Check With thangevel remove this -->
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lw-elig-js.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/city-car-dropdown.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/lw-newstaggered-bootstrap.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/offer-table-widget.js.download"></script>
<script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/offer-table-widget-components.js.download"></script>
<script type="text/javascript">
if ((/iphone|ipod|ipad.*os 5/gi).test(navigator.appVersion)) {
    window.onpageshow = function(evt) {
        // If persisted then it is in the page cache, force a reload of the page.
        if (evt.persisted) {
            document.body.style.display = "none";
            location.reload();
        }
    };
}
</script><!--TODO: HACK-->
<!-- js file included for header and footer (Add after header and footer are loaded)  -->

    <noscript>
    <img src="/images/no-javascript.gif" alt="JS is not enabled in browser"/>
</noscript>


<script type="text/javascript">
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload()
        }
    };
</script>

<div class="dontshow">
        reTH65gcmBgCJ7k</div>
<div id="errorPage" class="dontshow">This Page is BLOCKED as it is using Iframes.</div>
    <div class="dontshow">
</div><style type="text/css">
.filter-section .bbicons-sprite-bank,.filter-section .bbicons-sprite-bank-website{background-image: url("/images/sprite/banks-sprite-v34.png"); background-repeat:no-repeat;background-position:0 100px;float:left;height:18px;margin-bottom:1px;width:22px;vertical-align:middle;}
.filter-section .bank-short-ICICI, .filter-section .bank-website-short-ICICI{background-position:-8px -8px;}
.filter-section .bank-short-HDFC, .filter-section .bank-short-HDB-FINANCIAL-SERVICES, .filter-section .bank-website-short-HDFC, .filter-section .bank-website-short-HDB-FINANCIAL-SERVICES{background-position:-45px -8px;}
.filter-section .bank-short-SBI-Cards, .filter-section .bank-website-short-SBI-Cards{background-position:-84px -8px;}
.filter-section .bank-short-HSBC, .filter-section .bank-website-short-HSBC{background-position:-124px -9px;width:27px;}
.filter-section .bank-short-CANARA-Bank, .filter-section .bank-short-Canara-Bank, .filter-section .bank-website-short-CANARA-Bank, .filter-section .bank-website-short-Canara-Bank{background-position:-168px -8px;}
.filter-section .bank-short-Axis, .filter-section .bank-website-short-Axis{background-position:-5px -47px;}
.filter-section .bank-short-KARUR_VYSYA-Bank, .filter-section .bank-website-short-KARUR_VYSYA-Bank{background-position:-45px -49px;}
.filter-section .bank-short-Standard-Chartered-Bank, .filter-section .bank-website-short-Standard-Chartered-Bank {background-position:-85px -47px;}
.filter-section .bank-short-ABN-AMRO-Bank, .filter-section .bank-website-short-ABN-AMRO-Bank{background-position:-131px -47px;}
.filter-section .bank-short-YES-BANK, .filter-section .bank-website-short-YES-BANK{background-position:-172px -45px;}
.filter-section .bank-short-IndusInd-Bank.bbicons-sprite-bank, .filter-section .bank-website-short-IndusInd-Bank {background-position:-4px -84px;height:24px;width:24px;}
.filter-section .bank-short-RBL-BANK, .filter-section .bank-website-short-RBL-BANK{background-position:-45px -86px;}
.filter-section .bank-short-CitiBank, .filter-section .bank-website-short-CitiBank, .filter-section .bank-short-CITI, .filter-section .bank-website-short-CITI{background-position:-126px -86px;}
.filter-section .bank-short-American-Express, .filter-section .bank-website-short-American-Express{background-position:-83px -86px;}
.filter-section .bank-short-Kotak-Mahindra, .filter-section .bank-website-short-Kotak-Mahindra{background-position: -49px -126px;}
.filter-section .bank-short-DCB-Bank, .filter-section .bank-website-short-DCB-Bank {background-position: -10px -126px;}
.filter-section .bank-short-Development-Credit-Bank, .filter-section .bank-website-short-Development-Credit-Bank{background-position:-10px -126px;}
.filter-section .bank-short-Dena-Bank, .filter-section .bank-website-short-Dena-Bank{background-position:-9px -186px;}
.filter-section .bank-short-Andhra-Bank, .filter-section .bank-website-short-Andhra-Bank{background-position:-10px -252px;}
.filter-section .bank-short-State-Bank-of-Patiala, .filter-section .bank-website-short-State-Bank-of-Patiala{background-position:-84px -8px;}
.filter-section .bank-short-SBI, .filter-section .bank-website-short-SBI{background-position: -8px -472px;}
.filter-section .bank-short-HDFC-LTD, .filter-section .bank-website-short-HDFC-LTD{background-position:-84px -328px;}
.filter-section .bank-short-Bank-of-Maharashtra, .filter-section .bank-website-short-Bank-of-Maharashtra{background-position:-85px -155px;}
.filter-section .bank-short-State-Bank-of-Travancore, .filter-section .bank-website-short-State-Bank-of-Travancore{background-position:-126px -328px;}
.filter-section .bank-short-Bank-Of-Baroda, .filter-section .bank-website-short-Bank-Of-Baroda {background-position: -45px -153px; height: 24px;}
.filter-section .bank-short-State-Bank-of-Mysore, .filter-section .bank-website-short-State-Bank-of-Mysore{background-position:-84px -8px;}
.filter-section .bank-short-Bank-of-India, .filter-section .bank-website-short-Bank-of-India{background-position:-126px -155px;}
.filter-section .bank-short-DHFL, .filter-section .bank-website-short-DHFL{background-position:-170px -84px;}
.filter-section .bank-short-State-Bank-of-Hyderabad, .filter-section .bank-website-short-State-Bank-of-Hyderabad{background-position:-84px -8px;}
.filter-section .bank-short-Karur-Vysya-Bank, .filter-section .bank-website-short-Karur-Vysya-Bank{background-position:-45px -49px;}
.filter-section .bank-short-State-Bank-of-Bikaner-and-Jaipur, .filter-section .bank-website-short-State-Bank-of-Bikaner-and-Jaipur{background-position:-84px -8px;}
.filter-section .bank-short-South-Indian-Bank, .filter-section .bank-website-short-South-Indian-Bank{background-position:-45px -214px;}
.filter-section .bank-short-Federal-Bank, .filter-section .bank-website-short-Federal-Bank{background-position:-86px -287px;}
.filter-section .bank-short-UCO-Bank, .filter-section .bank-website-short-UCO-Bank{background-position:-126px -214px;}
.filter-section .bank-short-PNB-Housing-Finance-Limited, .filter-section .bank-website-short-PNB-Housing-Finance-Limited{background-position:-165px -252px;}
.filter-section .bank-short-Dhanalakshmi-Bank, .filter-section .bank-website-short-Dhanalakshmi-Bank{background-position:-8px -328px;}
.filter-section .bank-short-Indian-Overseas-Bank, .filter-section .bank-website-short-Indian-Overseas-Bank{background-position:-126px -186px;}
.filter-section .bank-short-Central-Bank-of-India, .filter-section .bank-website-short-Central-Bank-of-India{background-position:-169px -155px;}
.filter-section .bank-short-IDBI, .filter-section .bank-website-short-IDBI{background-position:-45px -186px;}
.filter-section .bank-short-IndiaBulls, .filter-section .bank-website-short-IndiaBulls{background-position:-9px -290px;}
.filter-section .bank-short-Syndicate-Bank, .filter-section .bank-website-short-Syndicate-Bank{background-position:-86px -249px;}
.filter-section .bank-short-DBS-Bank, .filter-section .bank-website-short-DBS-Bank{background-position:-166px -287px;}
.filter-section .bank-short-Punjab-National-Bank, .filter-section .bank-website-short-Punjab-National-Bank{background-position:-126px -252px;}
.filter-section .bank-short-United-Bank-of-India, .filter-section .bank-website-short-United-Bank-of-India{background-position:-45px -288px;}
.filter-section .bank-short-Karnataka-Bank, .filter-section .bank-website-short-Karnataka-Bank{background-position:-45px -252px;}
.filter-section .bank-short-Vijaya-Bank, .filter-section .bank-website-short-Vijaya-Bank{background-position:-168px -214px;}
.filter-section .bank-short-Oriental-Bank, .filter-section .bank-website-short-Oriental-Bank{background-position:-8px -214px;}
.filter-section .bank-short-Fullerton, .filter-section .bank-website-short-Fullerton{background-position:-85px -127px;}
.filter-section .bank-short-Capital-First, .filter-section .bank-website-short-Capital-First{background-position:-169px -127px;}
.filter-section .bank-short-Tata-Capital, .filter-section .bank-website-short-Tata-Capital{background-position:-126px -127px;}
.filter-section .bank-short-Indian-Bank, .filter-section .bank-website-short-Indian-Bank{ background-position:-86px -186px;}
.filter-section .bank-short-Union-Bank, .filter-section .bank-website-short-Union-Bank{background-position:-169px -186px;}
.filter-section .bank-short-Allahabad-Bank, .filter-section .bank-website-short-Allahabad-Bank{background-position:-8px -156px;}
.filter-section .bank-short-TamilNad-Mercantile-Bank, .filter-section .bank-website-short-TamilNad-Mercantile-Bank{background-position:-85px -212px;}
.filter-section .bank-short-LIC-Housing, .filter-section .bank-website-short-LIC-Housing{background-position:-126px -286px;}
.filter-section .bank-short-Tvs-Credit-Services, .filter-section .bank-website-short-Tvs-Credit-Services{background-position:-44px -329px;}
.filter-section .bank-short-L-and-T-Finance, .filter-section .bank-website-short-L-and-T-Finance{background-position: -9px -368px;}
.filter-section .bank-short-L-and-T-Finance-Limited, .filter-section .bank-website-short-L-and-T-Finance-Limited{background-position:-8px -442px;}
.filter-section .bank-short-Aavas-Financiers-Limited, .filter-section .bank-website-short-Aavas-Financiers-Limited { background-position: -85px -368px; }
.filter-section .bank-short-India-Shelter-Finance-Corporation, .filter-section .bank-website-short-India-Shelter-Finance-Corporation{background-position:-164px -328px;}
.filter-section .bank-short-Au-Small-Finance-Bank, .filter-section .bank-website-short-Au-Small-Finance-Bank { background-position: -45px -368px; }
.filter-section .bank-short-Reliance-Home-Finance-Limited, .filter-section .bank-website-short-Reliance-Home-Finance-Limited { background-position: -128px -369px }
.filter-section .bank-short-Reliance-Commercial-Finance, .filter-section .bank-website-short-Reliance-Commercial-Finance { background-position: -128px -369px }
.filter-section .bank-short-Aditya-Birla-Housing-Finance-Limited, .filter-section .bank-website-short-Aditya-Birla-Housing-Finance-Limited {background-position: -166px -369px;}
.filter-section .bank-short-Aditya-Birla-Finance-Limited, .filter-section .bank-website-short-Aditya-Birla-Finance-Limited {background-position: -166px -369px;}
.filter-section .bank-short-Aspire-Home-Finance-Corporation-Limited, .filter-section .bank-website-short-Aspire-Home-Finance-Corporation-Limited {background-position: -84px -406px; width: 27px;}
.filter-section .bank-short-Gruh-Finance-Limited, .filter-section .bank-website-short-Gruh-Finance-Limited {background-position: -163px -406px;width: 28px;}
.filter-section .bank-short-Mahaveer-Finance-India-Limited, .filter-section .bank-website-short-Mahaveer-Finance-India-Limited {background-position: -126px -404px;}
.filter-section .bank-short-Sundaram-Finance, .filter-section .bank-website-short-Sundaram-Finance, .filter-section .bank-short-sundram-finance, .filter-section .bank-short-Sundaram-BNP-Paribas-Home-Finance-Limited {background-position: -47px -440px;}
.filter-section .bank-short-Corporation-Bank {background-position: -83px -441px;}
.filter-section .bank-short-Jammu-and-Kashmir-Bank, .filter-section .bank-short-Jammu-and-Kashmir-Bank {background-position: -170px -441px}
.filter-section .bank-short-India-Infoline-Finance-Ltd, .filter-section .bank-website-short-India-Infoline-Finance-Ltd {background-position: -43px -472px;}
.filter-section .bank-short-IDFC-Bank, .filter-section .bank-website-short-IDFC-Bank {background-position: -83px -472px; }
.filter-section .bank-short-dmk-jaoli, .filter-section .bank-website-short-dmk-jaoli{background-position: -128px -472px;}
.filter-section .bank-short-qnb, .filter-section .bank-website-short-qnb{background-position: -167px -472px;}
.filter-section .bank-short-fincare, .filter-section .bank-website-short-fincare{background-position: -8px -502px;}
.filter-section .bank-short-nesf, .filter-section .bank-website-short-nesf{background-position: -43px -502px;}
.filter-section .bank-short-CASHe, .filter-section .bank-website-short-CASHe {background-position: -128px -502px;}
.filter-section .bank-short-Early-Salary, .filter-section .bank-website-short-Early-Salary {background-position: -167px -503px;}
.filter-section .bank-short-InCred, .filter-section .bank-website-short-InCred{background-position: -83px -502px;}



</style><style type="text/css">
.bank-logo-landing{background-image:url("/images/common/sprite/sprite-bank-logos-mini-v19.png"); background-position: 0 0; background-repeat: no-repeat; width:60px; height:15px; padding-right:10px; margin-top:5px; display: inline-block;}
.bank-AMERICAN_EXPRESS{background-position:0 -1642px;height:21px;width:72px}
.bank-ALLAHABAD_BANK{background-position:0 -30px}
.bank-ANDHRA_BANK{background-position:0 -55px}
.bank-SBI_CARDS{background-position:-1px -1671px}
.bank-AXIS_BANK{background-position:0 -82px}
.bank-BAJAJ_FIN_SERV{background-position:0 -108px}
.bank-BANK_OF_BARODA{ background-position: 0 100px;}
.bank-BANK_OF_INDIA{background-position:0 -159px}
.bank-BANK_OF_MAHARASHTRA{background-position:0 -189px}
.bank-CANARA_BANK{background-position:0 -214px}
.bank-CATHOLIC_SYRIAN_BANK{background-position:0 -241px}
.bank-CENTRAL_BANK_OF_INDIA{background-position:0 -266px}
.bank-CITIBANK{background-position:0 -295px}
.bank-CITY_UNION_BANK{background-position:0 -320px}
.bank-CORPORATION_BANK{background-position:0 -345px}
.bank-CAPITAL_FIRST {background-position: 0 -1790px;}
.bank-DBS_BANK {background-position: 0 -1819px;}
.bank-DENA_BANK{background-position:0 -375px}
.bank-DEUTSCHE_BANK{background-position:0 -400px}
.bank-DEVELOPMENT_CREDIT_BANK{background-position:0 -425px}
.bank-DHANALAKSHMI_BANK{background-position:0 -451px}
.bank-DHFL{background-position:0 -476px}
.bank-FEDERAL_BANK{background-position:0 -506px}
.bank-FULLERTON{background-position:0 -531px}
.bank-HDFC_BANK{background-position:0 -556px}
.bank-HDFC_LTD{background-position:0 -581px}
.bank-HSBC_BANK{background-position:0 -611px}
.bank-ICICI_BANK{background-position:0 -636px}
.bank-IDBI{background-position:0 -661px}
.bank-INDIAN_OVERSEAS_BANK{background-position:0 -686px}
.bank-INDUSIND_BANK{background-position:0 -714px}
.bank-ING{background-position: 0 -1848px; height: 25px;}
.bank-JAMMU_AND_KASHMIR_BANK{background-position:0 -772px}
.bank-KARNATAKA_BANK{background-position:0 -799px}
.bank-KARUR_VYSYA_BANK{background-position:0 -824px}
.bank-KOTAK_MAHINDRA_BANK{background-position:0 -850px}
.bank-LAKSHMI_VILAS_BANK{background-position:0 -876px}
.bank-LIC_HOUSING,.bank-LIC_HFL{background-position:0 -901px}
.bank-NAINITAL_BANK{background-position:0 -931px}
.bank-ORIENTAL_BANK{background-position:0 -956px}
.bank-PUNJAB_AND_SIND_BANK{background-position:0 -981px}
.bank-PUNJAB_NATIONAL_BANK{background-position:0 -1008px}
.bank-RATNAKAR_BANK{background-position:0 -1030px}
.bank-SBI { background-position: 0 -3012px; }
.bank-SOUTH_INDIAN_BANK{background-position:0 -1083px}
.bank-STANDARD_CHARTERED_BANK{background-position:0 -1113px}
.bank-STATE_BANK_OF_BIKANER_AND_JAIPUR{background-position:0 -1143px}
.bank-STATE_BANK_OF_HYDERABAD{background-position:0 -1169px}
.bank-STATE_BANK_OF_MYSORE{background-position:0 -1196px}
.bank-STATE_BANK_OF_PATIALA{background-position:0 -1225px}
.bank-STATE_BANK_OF_TRAVANCORE{background-position:0 -1251px}
.bank-SYNDICATE_BANK{background-position:0 -1279px}
.bank-TAMILNAD_MERCANTILE_BANK{background-position:0 -1307px}
.bank-TATA_CAPITAL{background-position:0 -1336px}
.bank-UCO_BANK{background-position:0 -1362px}
.bank-UNION_BANK{background-position:0 -1389px}
.bank-UNITED_BANK_OF_INDIA{background-position:0 -1416px}
.bank-VIJAYA_BANK{background-position:0 -1444px}
.bank-YES_BANK{background-position:0 -1472px}
.bank-INDIAN_BANK{background-position:0 -1502px}
.bank-MAGMA{background-position:0 -1527px}
.bank-RELIANCE_COMMERCIAL_FINANCE{background-position:0 -1557px}
.bank-TVSCS_Logo{background-position:0 -1582px}
.bank-PNBHFL{background-position:0 -1612px}
.bank-INDIABULLS{background-position:0 -1700px}
.bank-RBL_bank{background-position:0 -1730px}
.bank-ICICI_BANK_HL{background-position:0 -1760px}
.bank-DBS_BANK {background-position: 0 -1819px;}
.bank-TJSB_BANK_HL, .bank-tjsb{background-position:0 -1885px}
.bank-saraswat {background-position: 0 -1914px;}
.bank-l-and-t-housing {background-position: 0 -1944px;}
.bank-shriram-housing {background-position: 0 -1973px;}
.bank-iifl{background-position: 0 -2003px;}
.bank-credila{background-position: 0 -2032px;}
.bank-avanse{background-position: 0 -2061px;}
.bank-sbi-hl { background-position: 0 -2092px;}
.bank-bharatiya-mahila{background-position: 0 -2124px;}
.bank-REPCO_HOME {background-position: 0 -2154px;}
.bank-hdbfs{background-position: 0 -2184px}
.bank-rbs{background-position: 0 -2213px}
.bank-barclays{background-position: 0 -2241px}
.bank-l-and-t{background-position: 0 -2263px;}
.bank-ISFC{background-position: 0 -2291px;}
.bank-RAAS{background-position: 0 -2317px}
.bank-Au-Financiers{background-position: 0 -2342px;}
.bank-AU_HOUSING_FINANCE {background-position: 0 -2367px;}
.bank-AU-FINANCE {background-position: 0 -2393px;}
.bank-ABHFL {background-position: 0 -2417px;}
.bank-TATACAP {background-position: 0 -2497px}
.bank-aspire {background-position: 0 -2443px}
.bank-gruh {background-position: 0 -2469px}
.bank-mahaveer {background-position: 0 -2525px}
.bank-Reliance_Capital_HL{background-position: 0 -2552px;}
.bank-reliance-commercial-finance{background-position: 0 -2579px}
.bank-ADITYA_BIRLA_HOUSING_FINANCE {background-position: 2px -2417px; }
.bank-aditya-birla-finance{background-position: 0 -2607px;}
.bank-SVC-CO-OPERATIVE_BANK{background-position: 0 -2625px;}
.bank-mahindra-finance {background-position: 0 -2855px;}
.bank-shriram-city-union-finance {background-position: 0 -2873px;}
.bank-BANDHAN_BANK {background-position: 0 -2831px;}
.bank-ABHYUDAYA_BANK{background-position: 0 -3034px;}
</style><style type="text/css">
.bank-logo-insurance{background-image: url("/images/sprite/sprite-insurance-v26.png"); background-position:0 0;background-repeat:no-repeat;width:60px;height:15px;padding-right:10px;margin-top:5px}
.lifeinsurance-APOLLO_MUNICH{ background-position: 0 -30px;}
.lifeinsurance-AVIVA{ background-position: 0 -60px;}
.lifeinsurance-BAJAJ_ALLIANZ{ background-position: 0 -90px;}
.lifeinsurance-BHARTI_AXA{ background-position: 0 -120px;}
.lifeinsurance-BIRLA_SUN_LIFE_INSURANCE{ background-position: 0 -150px;}
.lifeinsurance-CANARA_HSBCLIFE_INSURE{ background-position: 0 -180px;}
.lifeinsurance-CHOLAMANDALAM_DBS{ background-position: 0 -210px;}
.lifeinsurance-CIGNA_TTK_HEALTH_INSURANCE{ background-position: 0 -240px;}
.lifeinsurance-DHFL_PRAMERICA_LIFE_INSURANCE{ background-position: 0 -270px;}
.lifeinsurance-EDELWEISS_TOKIO_LIFE_INSURANCE{ background-position: 0 -300px;}
.lifeinsurance-EXIDE{ background-position: 0 -330px;}
.lifeinsurance-FUTURE_GENERALI{ background-position: 0 -360px;}
.lifeinsurance-HDFC_ERGO{ background-position: 0 -390px;}
.lifeinsurance-HDFC_LIFE{ background-position: 0 -420px;}
.lifeinsurance-ICICI_LOMBARD{ background-position: 0 100;}
.lifeinsurance-ICICI_PRUDENTIAL{ background-position: 0 -480px;}
.lifeinsurance-IDBI_FEDERAL{ background-position: 0 -510px;}
.lifeinsurance-IFFCO_TOKIO_GENERAL_INSURANCE{ background-position: 0 -540px;}
.lifeinsurance-INDIAFIRST{ background-position: 0 -570px;}
.lifeinsurance-ING_VYSYA{ background-position: 0 -600px;}
.lifeinsurance-KOTAK_MAHINDRA_OLD_MUTUAL_LIFE_INSURANCE, .lifeinsurance-KOTAK_LIFE_INSURANCE{ background-position: 0 -630px;}
.lifeinsurance-LIBERTY_VIDEOCON_GENERAL_INSURANCE{ background-position: 0 -660px;}
.lifeinsurance-LIFE_INSURANCE_CORPORATION_OF_INDIA{ background-position: 0 -690px;}
.lifeinsurance-L_T_GENERAL_INSURANCE{ background-position: 0 -720px;}
.lifeinsurance-MAGMA_HDI_GENERAL_INSURANCE{ background-position: 0 -750px;}
.lifeinsurance-MAHINDRA_AND_MAHINDRA{ background-position: 0 -780px;}
.lifeinsurance-MAX_BUPA{ background-position: 0 -810px;}
.lifeinsurance-MAX_LIFE_INSURANCE{ background-position: 0 -840px;}
.lifeinsurance-METLIFE{ background-position: 0 -870px;}
.lifeinsurance-NATIONAL_INSURANCE{ background-position: 0 -900px;}
.lifeinsurance-NEW_INDIA_ASSURANCE, .twowheeler-insurance-new-india{ background-position: 0 -930px;}
.lifeinsurance-ORIENTAL{ background-position: 0 -960px;}
.lifeinsurance-PNB_METLIFE_INDIA_INSURANCE{ background-position: 0 -990px;}
.lifeinsurance-RAHEJA_QBE_GENERAL_INSURANCE{ background-position: 0 -1020px;}
.lifeinsurance-RELIANCE_LIFE_INSURANCE{ background-position: 0 -1050px;}
.lifeinsurance-RELIGARE_HEALTH{ background-position: 0 -1080px;}
.lifeinsurance-ROYAL_SUNDARAM{ background-position: 0 -1110px;}
.lifeinsurance-SAHARA_LIFE_INSURANCE{ background-position: 0 -1140px;}
.lifeinsurance-SBI_GENERAL_INSURANCE, .home-insurance-sbi{ background-position: 0 -1170px;}
.lifeinsurance-SBI_LIFE{ background-position: 0 -1200px;}
.lifeinsurance-SHRIRAM_LIFE{ background-position: 0 -1230px;}
.lifeinsurance-STAR_HEALTH_ALLIED_INSURANCE{ background-position: 0 -1260px;}
.lifeinsurance-STAR_UNION_DAI-ICHI_LIFE_INSURANCE{ background-position: 0 -1290px;}
.lifeinsurance-TATA_AIG{ background-position: 0 -1320px;}
.lifeinsurance-UNITED_INDIA_INSURANCE{ background-position: 0 -1350px;}
.lifeinsurance-UNIVERSAL_SOMPO_GENERAL_INSURANCE{ background-position: 0 -1380px;}
.lifeinsurance-CANARA_HSBCLIFE_INSURANCE{background-position: 0 -1436px;}
.lifeinsurance-TATA_AIA_LIFE_INSURANCE{background-position: 0 -1408px;}
.lifeinsurance-AEGON_RELIGARE {background-position: 0 -1469px;}
</style><style type="text/css">
.healthinsurance-ADITYA_BIRLA {background-position: 0 -1738px;height: 25px;}
.healthinsurance-APOLLO_MUNICH { background-position: 0 -30px;}
.healthinsurance-AVIVA { background-position: 0 -60px;}
.healthinsurance-BAJAJ_ALLIANZ { background-position: 0 -1541px;}
.healthinsurance-BHARTI_AXA { background-position:0 -1500px; height: 25px;}
.healthinsurance-BIRLA_SUN_LIFE_INSURANCE { background-position: 0 -150px;}
.healthinsurance-CANARA_HSBCLIFE_INSURE { background-position: 0 -180px;}
.healthinsurance-CHOLAMANDALAM_DBS { background-position: 0 -210px;}
.healthinsurance-CIGNA_TTK_HEALTH_INSURANCE { background-position: 0 -240px;}
.healthinsurance-DHFL_PRAMERICA_LIFE_INSURANCE { background-position: 0 -270px;}
.healthinsurance-EDELWEISS_TOKIO_LIFE_INSURANCE { background-position: 0 -300px;}
.healthinsurance-EXIDE { background-position: 0 -330px;}
.healthinsurance-FUTURE_GENERALI { background-position: 0 -360px;}
.healthinsurance-HDFC_ERGO { background-position: 0 -390px;}
.healthinsurance-HDFC_LIFE { background-position: 0 -420px;}
.healthinsurance-ICICI_LOMBARD { background-position: 0 100px;}
.healthinsurance-ICICI_PRUDENTIAL { background-position: 0 -480px;}
.healthinsurance-IDBI_FEDERAL { background-position: 0 -510px;}
.healthinsurance-IFFCO_TOKIO_GENERAL_INSURANCE { background-position: 0 -540px;}
.healthinsurance-INDIAFIRST { background-position: 0 -570px;}
.healthinsurance-ING_VYSYA { background-position: 0 -600px;}
.healthinsurance-KOTAK_MAHINDRA_OLD_MUTUAL_LIFE_INSURANCE,.lifeinsurance-KOTAK_LIFE_INSURANCE { background-position: 0 -630px;}
.healthinsurance-LIBERTY_VIDEOCON_GENERAL_INSURANCE { background-position: 0 -660px;}
.healthinsurance-LIFE_INSURANCE_CORPORATION_OF_INDIA { background-position: 0 -690px;}
.healthinsurance-L_T_GENERAL_INSURANCE { background-position: 0 -720px;}
.healthinsurance-MAGMA_HDI_GENERAL_INSURANCE { background-position: 0 -750px;}
.healthinsurance-MAHINDRA_AND_MAHINDRA { background-position: 0 -780px;}
.healthinsurance-MAX_BUPA { background-position: 0 -810px;}
.healthinsurance-MAX_LIFE_INSURANCE { background-position: 0 -840px;}
.healthinsurance-METLIFE { background-position: 0 -870px;}
.healthinsurance-NATIONAL_INSURANCE { background-position: 0 -900px;}
.healthinsurance-NEW_INDIA_ASSURANCE { background-position: 0 -930px;}
.healthinsurance-ORIENTAL { background-position: 0 -960px;}
.healthinsurance-PNB_METLIFE_INDIA_INSURANCE { background-position: 0 -990px;}
.healthinsurance-RAHEJA_QBE_GENERAL_INSURANCE { background-position: 0 -1020px;}
.healthinsurance-RELIANCE_LIFE_INSURANCE { background-position: 0 -1571px;height: 20px;}
.healthinsurance-RELIGARE_HEALTH { background-position: 0 -1080px;}
.healthinsurance-ROYAL_SUNDARAM { background-position: 0 -1110px;}
.healthinsurance-SAHARA_LIFE_INSURANCE { background-position: 0 -1140px;}
.healthinsurance-SBI_GENERAL_INSURANCE { background-position: 0 -1170px;}
.healthinsurance-SBI_LIFE { background-position: 0 -1200px;}
.healthinsurance-SHRIRAM_LIFE { background-position: 0 -1230px;}
.healthinsurance-STAR_HEALTH_ALLIED_INSURANCE { background-position: 0 -1260px;}
.healthinsurance-STAR_UNION_DAI-ICHI_LIFE_INSURANCE { background-position: 0 -1290px;}
.healthinsurance-TATA_AIG { background-position: 0 -1320px;}
.healthinsurance-UNITED_INDIA_INSURANCE { background-position: 0 -1350px;}
.healthinsurance-UNIVERSAL_SOMPO_GENERAL_INSURANCE { background-position: 0 -1380px;}
.healthinsurance-CANARA_HSBCLIFE_INSURANCE { background-position: 0 -1436px;}
.healthinsurance-TATA_AIA_LIFE_INSURANCE { background-position: 0 -1408px;}
.healthinsurance-AEGON_RELIGARE { background-position: 0 -1469px; }
</style><style type="text/css">
.ccbank-logo{background:url("/images/sprite/bank-logo-v57.png") transparent no-repeat center top;margin:7px 0 0 4px; display: inline-block;height: 20px; width: 90px;}
.img_bankicon_ing, .img_bankicon_1 {background-position: 0 -387px; width: 80px}
.img_bankicon_hdfc, .img_bankicon_2 {background-position:  0 -2138px; height: 19px;}
.img_bankicon_amex, .img_bankicon_9 {background-position: -23px -815px; height: 32px; }
.img_bankicon_fullerton, .img_bankicon_51 {background-position: 0 -30px; width: 80px;}
.img_bankicon_hdfclimited, .img_bankicon_126 {background-position: 0 -60px; width: 83px; height: 22px;}
.img_bankicon_icici, .img_bankicon_57 {background-position: 0 -89px;}
.modal-body.Home_Loan .img_bankicon_57 {background: url("/images/bank-logos/ICICI_BANK_HL.png") no-repeat scroll 0 0 / 100% auto; height: 30px;}
.img_bankicon_axis, .img_bankicon_12 {background-position: 0 -116px; height: 18px;}
.img_bankicon_reliance, .img_bankicon_83 {background-position: 0 -149px; height: 18px; width:60px;}
.img_bankicon_oriental, .img_bankicon_76 {background-position: 0 -180px; width: 76px;}
.img_bankicon_sbi, .img_bankicon_96 {background-position: 0px -2949px;}
.img_bankicon_bank-of-baroda, .img_bankicon_16 {background-position: 0 -238px;}
.img_bankicon_canara-bank, .img_bankicon_32 {background-position: 0 -268px;}
.img_bankicon_union-bank, .img_bankicon_108 {background-position: 0 -298px; width: 85px;}
.img_bankicon_vijaya-bank, .img_bankicon_112 {background-position: 0 -328px; width: 75px;}
.img_bankicon_lic, .img_bankicon_68 {background-position: 0 -357px; width: 43px;}
.img_bankicon_idbi, .img_bankicon_58 {background-position: 0 -415px; width: 75px;}
.img_bankicon_standard-chartered, .img_bankicon_92 {background-position: 0 -445px; width: 72px; height: 22px}
.img_bankicon_citifinancial, .img_bankicon_116 {background-position: 0 -475px;}
.img_bankicon_punjab-national-bank, .img_bankicon_80 {background-position: 0 -500px;}
.img_bankicon_syndicate-bank, .img_bankicon_104 {background-position: 0 -538px;width:76px;height:18px;}
.img_bankicon_max, .img_bankicon_503 {background-position: 0 -570px;width:32px;height:18px;}
.img_bankicon_magma, .img_bankicon_127 {background-position: 0 -598px;height: 18px;width:88px}
.img_bankicon_credila, .img_bankicon_128 {background-position: 0 -630px;width:66px}
.img_bankicon_citibank, .img_bankicon_39 {background-position: 0 -660px;width:78px}
.img_bankicon_aegon, .img_bankicon_509{ background-position: 0 -725px;height: 16px;}
.img_bankicon_indusind, .img_bankicon_62{height: 18px;background-position: 0 -758px;}
.img_bankicon_bajaj, .img_bankicon_524 {background-position: 0 -788px;}
.img_bankicon_dhfl, .img_bankicon_525 {background-position: 0 -1940px;}
.img_bankicon_tata_capital, .img_bankicon_526 {background-position:0 -1914px;}
.img_bankicon_sbi-cards, .img_bankicon_210{background-position: 0 -1975px;}
.img_bankicon_pnbhfl, .img_bankicon_211{background-position: 0 -2001px;}
.img_bankicon_hsbc, .img_bankicon_56 {background-position: -15px -2199px; height: 32px;}
.img_bankicon_idfc-bank, .img_bankicon_757 { background-position: 0 -2999px; }
.img_bankicon_dmk_jaoli, .img_bankicon_385 {background-position: 0px -3029px;}
.img_bankicon_fincare, .img_bankicon_383 {background-position: 0px -3069px;}
.img_bankicon_nesf, .img_bankicon_386 {background-position: 0px -3105px;}
.img_bankicon_qnb, .img_bankicon_384{background-position: 0px -3142px;} 
.img_bankicon_105{background-position: 0 -1847px;}
.img_bankicon_66{background-position: 0 -962px;}
.img_bankicon_8{background-position: 0 -997px;}
.img_bankicon_18{background-position: 0 -895px;}
.img_bankicon_20{background-position:  0 -1032px;}
.img_bankicon_34{background-position: 0 -1067px;}
.img_bankicon_41{background-position: 0 -1100px;}
.img_bankicon_44{background-position: 0 -1133px;}
.img_bankicon_47{background-position: 0 -1167px;}
.img_bankicon_50{background-position: 0 -1199px;}
.img_bankicon_1002{background-position: 0 -1235px;}
.img_bankicon_60{background-position: 0 -1268px;}
.img_bankicon_61{background-position: 0 -1303px;}
.img_bankicon_65{background-position: 0 -1336px;}
.img_bankicon_5{background-position: 0 -1370px;}
.img_bankicon_91{background-position: 0 -1406px;}
.img_bankicon_93{background-position: 0 -1439px;}
.img_bankicon_94{background-position: 0 -1473px;}
.img_bankicon_100{background-position: 0 -1509px;}
.img_bankicon_101{background-position: 0 -1541px;}
.img_bankicon_103{background-position: 0 -1576px;}
.img_bankicon_115{background-position: 0 -1609px;}
.img_bankicon_104{background-position: 0 -1644px;}
.img_bankicon_107{background-position: 0 -1677px;}
.img_bankicon_58{background-position: 0 -1713px;}
.img_bankicon_76{background-position: 0 -1745px;}
.img_bankicon_16{background-position: 0 -1780px;}
.img_bankicon_82{background-position: 0 -1815px;}
.img_bankicon_10{background-position: 0 -1881px;}
.img_bankicon_112{background-position: 0 -326px;}
.img_bankicon_32{background-position: 0 -268px;}
.img_bankicon_108{background-position: 0 -297px;}
.img_bankicon_59 { background-position: 0 -2036px;}
.img_bankicon_114 { background-position: 0 -2067px; }
.img_bankicon_212 {background-position: 0 -1233px;}
.img_bankicon_214{ background-position: 0 -2101px;}
.img_bankicon_213{ background-position: 0 -2172px;}
.banklogo_23{ background-position:8px -697px;}
.img_bankicon_sbi-hl {background-position: 0 -930px;}
.img_bankicon_568{background-position: 0 -2251px;}
.img_bankicon_710{background-position: 0 -2286px;}
.img_bankicon_573{background-position: 0 -2654px;}
.img_bankicon_713{background-position: 0 -2355px;}
.img_bankicon_715{background-position: 0 -2389px}
.img_bankicon_46{background-position: 0 -2422px;}
.img_bankicon_291 {background-position: 0 -2450px;}
.img_bankicon_aditya-birla-limited { background-position: 0 -2519px;}
.img_bankicon_560 {background-position: 0 -2555px;}
.img_bankicon_718 {background-position: 0 -2590px;}
.img_bankicon_717 {background-position: 0 -2483px;}
.img_bankicon_719 {background-position: 0 -2450px;}
.img_bankicon_kotak-bl {background-position: 0 -1370px;}
.img_bankicon_sundram_finance {background-position: 0 -2718px;}
.img_bankicon_762{background-position: 0 -2745px}
.img_bankicon_jk {background-position: 0 -2779px;}
.img_bankicon_obc {background-position: 0 -1744px;}
.img_bankicon_711 {background-position: 0 -2625px;}
.img_bankicon_45 {background-position: 0 -2837px;}
</style><div class="lazyloadcss" rel="/bundles/new-loan-landing-lazy.css"></div>
    <div class="lazyloadcss" rel="/bundles/landing-lazy-load.css"></div>
    <div id="reactLazyLoadedScriptTag"><script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/react.runtime.d7537f58b9cae556c233.js.download" async="true"></script><script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/react.vendor.e304c387204871c927c4.js.gz.js.download" async="true"></script><script type="text/javascript" src="file:///C:/xampp/htdocs/TAX/Income%20Tax%20Calculator_files/react.slideshow.967263df9d87fb02cdcf.js.gz.js.download" async="true"></script><script type="text/javascript" src="file:///C:/webpack/react.runtime.d7537f58b9cae556c233.js" async="true"></script><script type="text/javascript" src="file:///C:/webpack/react.vendor.e304c387204871c927c4.js.gz.js" async="true"></script><script type="text/javascript" src="file:///C:/webpack/react.slideshow.967263df9d87fb02cdcf.js.gz.js" async="true"></script></div>

    <script type="text/javascript">

        window.addEventListener("load",function() {
            function appendScript(scriptName) {
                var _js = document.createElement('script');
                _js.setAttribute('type', 'text/javascript');
                _js.setAttribute('src', scriptName);
                _js.setAttribute('async', true);
                document.getElementById('reactLazyLoadedScriptTag').appendChild(_js);
                return false;
            }
            appendScript('/webpack/react.runtime.d7537f58b9cae556c233.js'
);
            appendScript('/webpack/react.vendor.e304c387204871c927c4.js.gz.js'
);
            appendScript('/webpack/react.slideshow.967263df9d87fb02cdcf.js.gz.js'
);
        });
    </script>


</div></div></div><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.8528564357730279"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.2885194909962685" width="0" height="0" alt="" src="./Income Tax Calculator_files/0"></div><webengagedata><style type="text/css">#webklipper-publisher-widget-container, #webklipper-publisher-widget-container * {overflow:visible; -webkit-box-sizing: content-box; -moz-box-sizing: content-box;  box-sizing: content-box; margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;}</style><div id="webklipper-publisher-widget-container"><iframe name="webengage-engagement-callback-frame" id="webengage-engagement-callback-frame" frameborder="0" marginheight="0" marginwidth="0" style="position: absolute; background-color: transparent; bottom: 0px; right: 0px; border: none; overflow: hidden; visibility: hidden; display: none;" src="./Income Tax Calculator_files/saved_resource(1).html"></iframe><iframe name="_we_wk_data_store" id="_we_wk_data_store" frameborder="0" marginheight="0" marginwidth="0" src="./Income Tax Calculator_files/storage-frame-1.16.html" style="position: absolute; background-color: transparent; bottom: 0px; right: 0px; border: none; overflow: hidden; visibility: hidden; display: none;"></iframe></div></webengagedata><webengagedata><style type="text/css">#webklipper-publisher-widget-container, #webklipper-publisher-widget-container * {overflow:visible; -webkit-box-sizing: content-box; -moz-box-sizing: content-box;  box-sizing: content-box; margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;}</style><div id="webklipper-publisher-widget-container"><iframe name="webengage-engagement-callback-frame" id="webengage-engagement-callback-frame" frameborder="0" marginheight="0" marginwidth="0" style="position: absolute; background-color: transparent; bottom: 0px; right: 0px; border: none; overflow: hidden; visibility: hidden; display: none;" src="./Income Tax Calculator_files/saved_resource(2).html"></iframe><script type="text/javascript" charset="UTF-8" async="" src="file://s3.amazonaws.com/webengage-files/webengage/~13410604b/v4.js?r=25509175"></script></div></webengagedata>
	<?php include 'Footer.php' ?>
	</body></html>