<?PHP
   require "C:/wamp64/www/web/core/reclamationOps.php";
   $perpage=3;
   if(isset($_GET['page']))
   {
       $page=$_GET['page'];
   }else
   {
       $page=1;
   }

   if($page>1)
   {
       $start=($page*$perpage) - $perpage;
   }else
   {
       $start=0;
   }
	$reclamation=new reclamationOps();
	$liste_recalmation=$reclamation->afficher_reclamation($start,$perpage);

    $sql_1="select count(reclamation.code_rec) as nb from reclamation";
    $db = config::getConnexion();
    $count=$db->query($sql_1);

?>


<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from yummi-theme.myshopify.com/account/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 14:12:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <!-- Basic page needs ================================================== -->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  
  <link rel="shortcut icon" href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/favicon31d7.png?v=13011873669817478531" type="image/png" />
  
  <!-- Title and description ================================================== -->
  <title>
    Create Account &ndash; Yummi-theme
  </title>
  
  <!-- Social meta ================================================== -->
  

  <meta property="og:type" content="website">
  <meta property="og:title" content="Create Account">
  <meta property="og:url" content="register.html">
  
  <meta property="og:image" content="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/logo6378.png?v=16169813535851071673">
  <meta property="og:image:secure_url" content="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/logo6378.png?v=16169813535851071673">
  


<meta property="og:site_name" content="Yummi-theme">



<meta name="twitter:card" content="summary">





  <!-- Helpers ================================================== -->
  <link rel="canonical" href="register.html">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#c00a27">
  <!-- CSS ================================================== -->
<link href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/frame.scss9c6b.css?v=12444154316491582994" rel="stylesheet" type="text/css" media="all" /> 
<link href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/home-sections.scss18a4.html?5154" rel="stylesheet" type="text/css" media="all" /> 
<link href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/style0c78.css?v=4788322210267124202" rel="stylesheet" type="text/css" media="all" />  
<link href="http://cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/slick.scss?v=10122632354879939270" rel="stylesheet" type="text/css" media="all" />
<link href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/prettyPhotode1c.css?v=12757784511525754184" rel="stylesheet" type="text/css" media="all" />  
<link href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/animatea14e.css?v=17046942425478865338" rel="stylesheet" type="text/css" media="all" />
<link href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/font-all.minc83d.css?v=14597452402338798491" rel="stylesheet" type="text/css" media="all" />  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">
  
  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nunito:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">
  

  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">
  
  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nunito:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">
    
  <script src="../../code.jquery.com/jquery-3.2.1.min.js"></script>  
<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script> 
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/header6070.js?v=10373096426439681222" type="text/javascript"></script>

<script src="../../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" type="text/javascript"></script>
<link rel="stylesheet" href="style_client.css">




<script>
  window.preloader_enable = false;
  window.use_sticky = true;
  window.ajax_cart = true;
  window.money_format = "Rs. {{amount}}";
  window.shop_currency = "INR";    
 // window.money_format = "Rs. {{amount}}";
  window.shop_currency = "INR";
  window.show_multiple_currencies = true;
  window.enable_sidebar_multiple_choice = true;
  window.loading_url = "../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/loading9491.gif?v=9255329245202621775";     
  window.dropdowncart_type = "click";
  window.file_url = "http://cdn.shopify.com/s/files/1/0267/5979/0615/files/?5154";
  window.asset_url = "";
  window.items="Items";
  window.many_in_stock="Many In Stock";
  window.out_of_stock=" Out of stock";
  window.in_stock=" In Stock";
  window.unavailable="Unavailable";
  window.product_name="Product Name";
  window.product_image="Product Image";
  window.product_desc="Product Description";
  window.available_stock="Available In stock";
  window.unavailable_stock="Unavailable In stock";
  window.compare_note="Product Added over 8 product !. Do you want to compare 8 added product ?";
  window.added_to_cmp="Added to compare";
  window.add_to_cmp="Add to compare";
  window.select_options="Select options";
  window.add_to_cart="Add to Cart";
  window.confirm_box="Yes,I want view it!";
  window.cancelButtonText="Continue";
  window.remove="Remove";
  window.use_color_swatch = true;
  window.color_swatch_style = "variant_grouped";
  window.newsletter_popup = true;  
  window.infinity_scroll_feature = false;
  window.no_more_product = "No more product";
  var  compare_list = [];   
</script>  




  
  <!-- Header hook for plugins ================================================== -->
  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/26759790615/digital_wallets/dialog">
<link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
<script id="shopify-features" type="application/json">{"accessToken":"b2160b7f2e2861de86a771db06b2e483","betas":["rich-media-storefront-analytics"],"domain":"yummi-theme.myshopify.com","predictiveSearch":true,"shopId":26759790615,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 26759790615,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "customers/register"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "yummi-theme.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"INR","rate":"1.0"};
Shopify.country = "IN";
Shopify.theme = {"name":"yummi","id":80957079575,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=yummi-theme.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":26759790615,"offset":-14400,"reqid":"4c013d7d-9baf-4081-991e-c7978f453d45","pageurl":"yummi-theme.myshopify.com\/account\/register","u":"d4e28dd98764"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'INR';
var meta = {"page":{},"page_view_event_id":"e458baf9cf35c52e2928c4f07a4b7ea9375c30c4d6435c49d83f7f5a3983ff05","cart_event_id":"c32ea6f9bd6dbdbf391f4bc899016181cb66322dd31d238223e5c125a1b7a9f9"};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var hasLoggedConversion = function(token) {
    if (token) {
      return document.cookie.indexOf('loggedConversion=' + token) !== -1;
    }
    return false;
  }

  var setCookieIfConversion = function(token) {
    if (token) {
      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var first = document.getElementsByTagName('script')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      var scriptFallback = document.createElement('script');
      scriptFallback.type = 'text/javascript';
      scriptFallback.onerror = function(error) {
              var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });
    
          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful
    
        } // XHR beacon   
    
        var xhr = new XMLHttpRequest();
    
        try {
          xhr.open('POST.html', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }
    
        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 26759790615,
      theme_id: 80957079575,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.9eb212b15c3b6eb17e411acdf9adea4f6c40523e.min.js"});

      };
      scriptFallback.async = true;
      scriptFallback.src = '../../cdn.shopify.com/s/trekkie.storefront.9eb212b15c3b6eb17e411acdf9adea4f6c40523e.min.js';
      first.parentNode.insertBefore(scriptFallback, first);
    };
    script.async = true;
    script.src = '../../cdn.shopify.com/s/trekkie.storefront.9eb212b15c3b6eb17e411acdf9adea4f6c40523e.min.js';
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":26759790615,"isMerchantRequest":null,"themeId":80957079575,"themeCityHash":"5190903206649075701","contentLanguage":"en","currency":"INR"},"isServerSideCookieWritingEnabled":true,"isPixelGateEnabled":true},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;
      (function () {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.application = "core";
        window.BOOMR.shopId = 26759790615;
        window.BOOMR.themeId = 80957079575;
        window.BOOMR.themeName = "Timzee";
        window.BOOMR.themeVersion = "1.0";
        window.BOOMR.url =
          "../../cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
        var where = document.currentScript || document.getElementsByTagName("script")[0];
        var parentNode = where.parentNode;
        var promoted = false;
        var LOADER_TIMEOUT = 3000;
        function promote() {
          if (promoted) {
            return;
          }
          var script = document.createElement("script");
          script.id = "boomr-scr-as";
          script.src = window.BOOMR.url;
          script.async = true;
          parentNode.appendChild(script);
          promoted = true;
        }
        function iframeLoader(wasFallback) {
          promoted = true;
          var dom, bootstrap, iframe, iframeStyle;
          var doc = document;
          var win = window;
          window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
          bootstrap = function(parent, scriptId) {
            var script = doc.createElement("script");
            script.id = scriptId || "boomr-if-as";
            script.src = window.BOOMR.url;
            BOOMR_lstart = new Date().getTime();
            parent = parent || doc.body;
            parent.appendChild(script);
          };
          if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
            window.BOOMR.snippetMethod = "s";
            bootstrap(parentNode, "boomr-async");
            return;
          }
          iframe = document.createElement("IFRAME");
          iframe.src = "about:blank";
          iframe.title = "";
          iframe.role = "presentation";
          iframe.loading = "eager";
          iframeStyle = (iframe.frameElement || iframe).style;
          iframeStyle.width = 0;
          iframeStyle.height = 0;
          iframeStyle.border = 0;
          iframeStyle.display = "none";
          parentNode.appendChild(iframe);
          try {
            win = iframe.contentWindow;
            doc = win.document.open();
          } catch (e) {
            dom = document.domain;
            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
            win = iframe.contentWindow;
            doc = win.document.open();
          }
          if (dom) {
            doc._boomrl = function() {
              this.domain = dom;
              bootstrap();
            };
            doc.write("<body onload='document._boomrl();'>");
          } else {
            win._boomrl = function() {
              bootstrap();
            };
            if (win.addEventListener) {
              win.addEventListener("load", win._boomrl, false);
            } else if (win.attachEvent) {
              win.attachEvent("onload", win._boomrl);
            }
          }
          doc.close();
        }
        var link = document.createElement("link");
        if (link.relList &&
          typeof link.relList.supports === "function" &&
          link.relList.supports("preload") &&
          ("as" in link)) {
          window.BOOMR.snippetMethod = "p";
          link.href = window.BOOMR.url;
          link.rel = "preload";
          link.as = "script";
          link.addEventListener("load", promote);
          link.addEventListener("error", function() {
            iframeLoader(true);
          });
          setTimeout(function() {
            if (!promoted) {
              iframeLoader(true);
            }
          }, LOADER_TIMEOUT);
          BOOMR_lstart = new Date().getTime();
          parentNode.appendChild(link);
        } else {
          iframeLoader(false);
        }
        function boomerangSaveLoadTime(e) {
          window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
        }
        if (window.addEventListener) {
          window.addEventListener("load", boomerangSaveLoadTime, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", boomerangSaveLoadTime);
        }
        if (document.addEventListener) {
          document.addEventListener("onBoomerangLoaded", function(e) {
            e.detail.BOOMR.init({
              producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
              ResourceTiming: {
                enabled: true,
                trackedResourceTypes: ["script", "img", "css"]
              },
            });
            e.detail.BOOMR.t_end = new Date().getTime();
          });
        } else if (document.attachEvent) {
          document.attachEvent("onpropertychange", function(e) {
            if (!e) e=event;
            if (e.propertyName === "onBoomerangLoaded") {
              e.detail.BOOMR.init({
                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                ResourceTiming: {
                  enabled: true,
                  trackedResourceTypes: ["script", "img", "css"]
                },
              });
              e.detail.BOOMR.t_end = new Date().getTime();
            }
          });
        }
      })();
    

    
        window.ShopifyAnalytics.lib.page(
          null,
          {},
          "e458baf9cf35c52e2928c4f07a4b7ea9375c30c4d6435c49d83f7f5a3983ff05"
        );
      

    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
    var token = match? match[1]: undefined;
    if (!hasLoggedConversion(token)) {
      setCookieIfConversion(token);
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "../../cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-619dded2976e732c6d885de654a8af094bc28e3148dfe9ab8b320781402596b6.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script>!function(e){e.addEventListener("DOMContentLoaded",function(){var t=['form[action^="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]'].join(",");null!==e.querySelector(t)&&(window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"},(t=e.createElement("script")).setAttribute("src","../../cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.1/index.js"),e.body.appendChild(t))})}(document);</script>
<script integrity="sha256-2KbxRG1nAJxSTtTmhkiAC6kILrdVSO4o4QUDMcvnuig=" crossorigin="anonymous" data-source-attribution="shopify.loadfeatures" defer="defer" src="../../cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-d8a6f1446d67009c524ed4e68648800ba9082eb75548ee28e1050331cbe7ba28.js"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="../../cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<link rel="stylesheet" media="screen" href="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/compiled_assets/styles18a4.css?5154">
<script id="sections-script" data-sections="header-model-3" defer="defer" src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/compiled_assets/scripts18a4.js?5154"></script>

<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>  
  <script type="text/javascript">
    delete History
  </script>
 <script>
jQuery(function() {
  jQuery('.swatch :radio').change(function() {
    var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
    var optionValue = jQuery(this).val();
    jQuery(this)
      .closest('form')
      .find('.single-option-selector')
      .eq(optionIndex)
      .val(optionValue)
      .trigger('change');
  });
});
</script>

<script>

    Shopify.productOptionsMap = {};
    Shopify.quickViewOptionsMap = {};

    Shopify.updateOptionsInSelector = function(selectorIndex, wrapperSlt) {
        Shopify.optionsMap = wrapperSlt === '.product' ? Shopify.productOptionsMap : Shopify.quickViewOptionsMap;

        switch (selectorIndex) {
            case 0:
                var key = 'root';
                var selector = $(wrapperSlt + ' .single-option-selector:eq(0)');
                break;
            case 1:
                var key = $(wrapperSlt + ' .single-option-selector:eq(0)').val();
                var selector = $(wrapperSlt + ' .single-option-selector:eq(1)');
                break;
            case 2:
                var key = $(wrapperSlt + ' .single-option-selector:eq(0)').val();
                key += ' / ' + $(wrapperSlt + ' .single-option-selector:eq(1)').val();
                var selector = $(wrapperSlt + ' .single-option-selector:eq(2)');
        }

        var initialValue = selector.val();

        selector.empty();

        var availableOptions = Shopify.optionsMap[key];

        if (availableOptions && availableOptions.length) {
            for (var i = 0; i < availableOptions.length; i++) {
                var option = availableOptions[i];

                var newOption = $('<option></option>').val(option).html(option);

                selector.append(newOption);
            }

            $(wrapperSlt + ' .swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
                if ($.inArray($(this).attr('data-value'), availableOptions) !== -1) {
                    $(this).removeClass('soldout').find(':radio').removeAttr('disabled', 'disabled').removeAttr('checked');
                }
                else {
                    $(this).addClass('soldout').find(':radio').removeAttr('checked').attr('disabled', 'disabled');
                }
            });

            if ($.inArray(initialValue, availableOptions) !== -1) {
                selector.val(initialValue);
            }

            selector.trigger('change');
        };
    };

    Shopify.linkOptionSelectors = function(product, wrapperSlt) {
        // Building our mapping object.
        Shopify.optionsMap = wrapperSlt === '.product' ? Shopify.productOptionsMap : Shopify.quickViewOptionsMap;

        for (var i = 0; i < product.variants.length; i++) {
            var variant = product.variants[i];

            if (variant.available) {
                // Gathering values for the 1st drop-down.
                Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];

                Shopify.optionsMap['root'].push(variant.option1);
                Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);

                // Gathering values for the 2nd drop-down.
                if (product.options.length > 1) {
                var key = variant.option1;
                    Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                    Shopify.optionsMap[key].push(variant.option2);
                    Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                }

                // Gathering values for the 3rd drop-down.
                if (product.options.length === 3) {
                    var key = variant.option1 + ' / ' + variant.option2;
                    Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                    Shopify.optionsMap[key].push(variant.option3);
                    Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                }
            }
        };

        // Update options right away.
        Shopify.updateOptionsInSelector(0, wrapperSlt);

        if (product.options.length > 1) Shopify.updateOptionsInSelector(1, wrapperSlt);
        if (product.options.length === 3) Shopify.updateOptionsInSelector(2, wrapperSlt);

        // When there is an update in the first dropdown.
        $(wrapperSlt + " .single-option-selector:eq(0)").change(function() {
            Shopify.updateOptionsInSelector(1, wrapperSlt);
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2, wrapperSlt);
            return true;
        });

        // When there is an update in the second dropdown.
        $(wrapperSlt + " .single-option-selector:eq(1)").change(function() {
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2, wrapperSlt);
            return true;
        });
    };
</script>

</head>

<body id="create-account" class="template-customers-register  others ">
  <div id="shopify-section-top-countdown-bar" class="shopify-section index-section"><div data-section-id="top-countdown-bar" data-section-type="top-countdown-bar" class="top-countdown-bar"> 
  
</div>

</div>  
   
   	



<div class="wrapper-header">
  
<div id="SearchDrawer" class="search_type3 ajaxsearch search-bar drawer drawer--top search-bar-type-3">
  <div class="search-bar__table search-box">
    <form action="https://yummi-theme.myshopify.com/search" method="get" class="search-bar__table-cell search-bar__form" role="search">
      <input type="hidden" name="type" value="product">  
      <div class="search-bar__table">
        <div class="search-bar__table-cell search-bar__icon-cell">
          <button type="submit" class="search-bar__icon-button search-bar__submit">
<svg class="icon icon-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"><path d="M57.7,55.6L44.8,40.7c2.9-3.8,4.7-8.6,4.7-13.8c0-12.5-10.2-22.6-22.6-22.6C14.4,4.3,4.2,14.4,4.2,26.9s10.2,22.6,22.6,22.6  c5.5,0,10.5-2,14.5-5.2l12.6,14.6c0.5,0.6,1.2,0.9,1.9,0.9c0.6,0,1.2-0.2,1.6-0.6C58.5,58.2,58.6,56.7,57.7,55.6z M9.2,26.9  c0-9.7,7.9-17.6,17.6-17.6c9.7,0,17.6,7.9,17.6,17.6s-7.9,17.6-17.6,17.6C17.2,44.5,9.2,36.6,9.2,26.9z"/></svg>          </button>
        </div>
        <div class="search-bar__table-cell">
          <input type="hidden" name="type" value="product">  
          <input type="search" id="SearchInput" name="q" value="" placeholder="Search" aria-label="Search" class="search-bar__input">
        </div>
      </div>
    </form>
  </div>
  <div class="search-bar__table-cell text-right">
    <button type="button" class="search-bar__icon-button search-bar__close js-drawer-close">
      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 16.8 16.8"><path fill="#444" d="M16.8 1.5L15.4.1 8.4 7l-7-7L0 1.4l7 7-7 7 1.4 1.4 7-7 7 7 1.4-1.4-7-7z"></path></svg>
    </button>
  </div>

</div>
  </div>


  
  <div class="shifter-page is-moved-by-drawer" id="PageContainer"> 
    



<div class="quick-view"></div>   


<div class="wrapper-header wrapper-container">	
  <div class="header-type-3">  
    <div id="shopify-section-top-bar-type-3" class="shopify-section">    
<div class="wrapper">
  <div class="top_bar top-bar-type-3">  
    <div class="container-bg">    

    <div class="top_bar_menu">      
      <ul class="menu_bar_right grid__item wide--one-sixth">        
        
        <li>
          <ul class="top_bar_right">
            
            <li><i class='fa fa-phone' aria-hidden='true'></i> <span>Call Us (00) 000 111 222</span></li>
            
            
            <li><i class='fa fa-envelope' aria-hidden='true'></i> Mail <a href="mailto:info@example.com"> info@example.com</a></li>
            
          </ul>
        </li>
         
          
        <li class="header_currency mobile-currency">
          <ul class="tbl-list">
            <li class="currency dropdown-parent uppercase currency-block">
                 
<div class="lang-currency-groups">

	
<div class="currency-block">
  <label class="label-text">
    Currency
  </label>

  <div class="btn-group currency-dropdown">
    <label class="dropdown-toggle dropdown-label" data-currency-label>
      <span class="img-icon">
        <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-1ad35.png?v=4119523831752903510" alt="USD" />
      </span>
      <span class="text">
        USD
      </span>      
    </label>

    <div class="dropdown-menu currency-menu" id="currencies">
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="USD">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-1ad35.png?v=4119523831752903510" alt="" />
        </span>
        <span class="text">
          USD
        </span>       
      </a>
        
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="EUR">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-2b66c.png?v=5653372019488774628" alt="" />
        </span>
        <span class="text">
          EUR
        </span>       
      </a>
        
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="GBP">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-33373.png?v=2634433010385958246" alt="" />
        </span>
        <span class="text">
          GBP
        </span>       
      </a>
        
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="AUD">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-410aa.png?v=11143122763959087045" alt="" />
        </span>
        <span class="text">
          AUD
        </span>       
      </a>
        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
    </div>
  </div>       
</div>
	

</div>

            </li>
          </ul>
        </li> 
        
      </ul>     
    </div>
  </div>
</div>
</div>
 

<style>
  
  /* Top block */
    .header-type-3 .top_bar  , .header-type-3 .top_bar::after{ background: #ffffff; }
    .header-type-3 .top_bar li, .header-type-3 .top_bar span { color:#000000;}   
    .header-type-3 .top_bar a { color:#000000;}    
    .header-type-3 .top_bar a:hover, .header-type-3 .top_bar a:hover span { color:#fc4c4b;}    
    .header-type-3 .header-bar__module.cart .baskettop a.icon-cart-arrow #cartCount { background: ;color:;}
    .header-type-3 .header-bar__module.cart .baskettop a.icon-cart-arrow:hover #cartCount { background: ;color:;}
    .header-type-3 .top_bar .top_bar_right li span,.header-type-3 .tbl-list>li.currency>.dropdown-toggle { border-right:1px solid #e4e4e4; }
    .header-type-3 .top_bar ul li:last-child,.header-type-3 .top_bar .top_bar_right li:last-child span { border-right:none; }


 /* Currency block */

    .header-type-3 .lang-currency-groups .dropdown-label,.header-type-3 .lang-currency-groups .dropdown-toggle:after {color:#000000;}   
  .header-type-3 .lang-currency-groups .dropdown-label:hover , .header-type-3 .lang-currency-groups .dropdown-toggle:hover::after{color:#fc4c4b;}  
  .header-type-3 .header_currency ul li.currency:hover:after {border-top-color:#fc4c4b;}
  .header-type-3 .header_currency ul li.currency:after {border-top-color:#000000;}


</style>

<script>
  var appendPrependMenuMobile = function() {
    var headerPanelTop = $('.wrapper-container .top_bar_right'),
        headerPc = $('.wrapper-container .top_bar_menu'),
        wrapperNav = $('.wrapper-navigation'),
        areaMb = wrapperNav.find('.mb-area .menu_bar_right');

    if (window.innerWidth < 1200) {
      headerPanelTop.appendTo(areaMb);
    } else {
      headerPc.prepend(headerPanelTop);
    };
  };

  $(document).ready(function() {
    appendPrependMenuMobile();
  });

  var winWidth = $(window).innerWidth();

  $(window).on('resize', function () {
    var resizeTimerId;

    clearTimeout(resizeTimerId);

    resizeTimerId = setTimeout(function() {
      var curWinWidth = $(window).innerWidth();

      if ((curWinWidth < 1200 && winWidth >= 1200) || (curWinWidth >= 1200 && winWidth < 1200)) {
        appendPrependMenuMobile();
      };
      winWidth = curWinWidth;
    }, 0);
  })

 
</script>




<script>
if ($(window).width() < 1200) {
   $(".mobile-currency").remove();
  
  
  }
</script>                   
                            

</div>   
    <header class="site-header header-default">
      <div class="header-sticky">
        <div id="header-landing" class="sticky-animate">
          <div class="container-bg">
            <div class="grid--full site-header__menubar"> 
              
  <div class="h1 site-header__logo order-header  post-large--hide large--hide medium-down--hide" itemscope itemtype="http://schema.org/Organization">
    
    
    <a href="../index.php" itemprop="url">
      <img class="normal-logo" src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/logo6378.png?v=16169813535851071673" alt="Yummi-theme" itemprop="logo">
    </a>
    
    
  </div>

   
              <div class="menubar-section order-header">
                <div class="desktop-megamenu">     
                  <div id="shopify-section-adv-navigation" class="shopify-section">
<div class="wrapper-navigation" data-sticky-pc>
    
    
    <div class="main-menu jas-mb-style">
        
            <div class="row">
                <div class="col-12">
                    <div class="mb-area">
                     
                      
                      
                  
  





<div class="nav-search wide--hide">
  <div class="header-search">
    <div class="header-search__form">      

      <form action="https://yummi-theme.myshopify.com/search" method="get" class="search-bar" role="search">
        <input type="hidden" name="type" value="product">

        <input type="search" name="q"                     
               placeholder="Search" 
               class="input-group-field header-search__input" aria-label="Search Site" autocomplete="off">

        <button type="submit" class="btn icon-search">
          <svg data-icon="search" viewBox="0 0 512 512" width="100%" height="100%">
    <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path>
</svg>
        </button>
      </form>       
    </div>
  </div>
</div>








 
                      
                      
                 
                      
                        <nav class="nav-bar" role="navigation">
                            

<ul class="site-nav checking">   
    

    
    

    


    

    

    

    <li class="menu-lv-1 item">
        <a class=""  href="../index.php">
            Home

            
          

            

            

            
        </a>

        

      
      
    </li>  
    

    
    

    


    

    

    

    <li class="menu-lv-1 item dropdown mega-menu">
        <a class="menu__moblie "  href="../collections/indian.html">
            Indian

            
            <span class="icon-dropdown" data-toggle-menu-mb>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            
          

            

            

            
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
            <div class="menu-mb-title">
                <span class="icon-dropdown">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                Indian
            </div>

        

            

            
            <div class="site-nav-dropdown style_2">
                <div class="container">
                     
<div class="row">
  
  
  <div class="col-12 col-xl-7">
    <div class="row" data-masonry='{ "itemSelector": "[data-gridItem]", "columnWidth": ".grid-sizer" }'>
      <div class="grid-sizer"></div>

      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/indian.html" class="current">
          North Indian

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            North Indian
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Chicken Popcorn
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Cobb Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                English Breakfast
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Galouti Kebab
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/garlic-prime-rib.html" >
                Garlic Prime Rib
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Beef Steaks
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/indian.html" class="current">
          South Indian

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            South Indian
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/thai-tom-yum-soup.html" >
                Tom Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Beef Steaks
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/buldak.html" >
                Buldak
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamed-chipped-beef.html" >
                Creamed Beef
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Vegetable Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/buldak.html" >
                Buldak
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/indian.html" class="current">
          Eastern Indian 

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Eastern Indian 
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Chicken Wings
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/fried-egg-sausage.html" >
                Fried Egg 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/grilled-fish-with-chips.html" >
                Grilled Fish 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/mexican-black-bean-salad.html" >
                Bean salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/risotto.html" >
                Risotto
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Cobb Salad
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/indian.html" class="current">
          Western Indian

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Western Indian
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/salisbury-steak.html" >
                Salisbury Steak
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/scrambled-eggs.html" >
                Scrambled Eggs
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/spaghetti-aglio.html" >
                Spaghetti Aglio
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/grilled-fish-with-chips.html" >
                Grilled Fish & Chips
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Galouti Kebab
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                English Breakfast
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/indian.html" class="current">
          Herbal Food

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Herbal Food
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Cobb Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Creamy Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/greek-salad.html" >
                Greek Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/green-chicken-salad.html" >
                Chicken Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/thai-tom-yum-soup.html" >
                Red Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Galouti Kebab
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/indian.html" class="current">
          Traditional Food

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Traditional Food
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Steaks & Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Chicken Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamed-chipped-beef.html" >
                Chipped Beef
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Chicken Wings
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/penne-alla-vodka.html" >
                Alla Vodka
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/greek-salad.html" >
                Greek Salad
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
    </div>
  </div>

  
  <div class="col-12 col-xl-5">
    <div class="mega-banner">
      
      <div class="mega-col col-left">
        
        <a class="animate-scale" href="#" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/mega-menu-2-2_8023497b-5e3b-4967-93ee-cb9c8fcd3328_270x0614.jpg?v=1591791616" alt="" />
        </a>
        

        
        <a class="animate-scale" href="#" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/mega-menu-2-1_e82b8266-a555-426b-9b78-59d10dc54976_270x9928.jpg?v=1591791628" alt="" />
        </a>
        
      </div>
      

      
      <div class="mega-col col-right">
        <a class="animate-scale" href="#" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/1_4_270x7beb.jpg?v=1591792563" alt="" />
        </a>
      </div>
      
    </div>
  </div>
  


  
       
      </div>

    
                </div>
            </div>

                      
         
        </div>
        

      
      
    </li>  
    

    
    

    


    

    

    

    <li class="menu-lv-1 item dropdown mega-menu">
        <a class="menu__moblie "  href="../collections/italian.html">
            Italian

            
            <span class="icon-dropdown" data-toggle-menu-mb>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            
          

            

            

            
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
            <div class="menu-mb-title">
                <span class="icon-dropdown">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                Italian
            </div>

        

            

            
            <div class="site-nav-dropdown style_1">
                <div class="container">
                     
<div class="row">
  
  
  <div class="col-12 col-xl-7">
    <div class="row" data-masonry='{ "itemSelector": "[data-gridItem]", "columnWidth": ".grid-sizer" }'>
      <div class="grid-sizer"></div>

      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/buldak.html" class="current">
          Carne Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Carne Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                English Breakfast
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/scrambled-eggs.html" >
                Scrambled Eggs
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/fried-egg-sausage.html" >
                Fried Egg & Sausage
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Crispy Chicken Wings
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Beef Steaks
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/buldak.html" >
                Buldak
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Chicken Popcorn
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Cobb Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Grilled Chicken
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamed-chipped-beef.html" >
                Cheese Pasta
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/chicken-popcorn.html" class="current">
          Pesce Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Pesce Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Cobb Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Creamy Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/garlic-prime-rib.html" >
                Garlic Prime Rib
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/grilled-fish-with-chips.html" >
                Grilled Fish 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/thai-tom-yum-soup.html" >
                Tom Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                English Breakfast
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Galouti Kebab
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/garlic-prime-rib.html" >
                Garlic Prime 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/spaghetti-aglio.html" >
                 Aglio Spaghetti
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/greek-salad.html" >
                Rice & Salad
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-4">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/chicken-popcorn.html" class="current">
          Verdura Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Verdura Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/salisbury-steak.html" >
                Salisbury Steak
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/risotto.html" >
                Risotto
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/penne-alla-vodka.html" >
                Penne Alla Vodka
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/green-chicken-salad.html" >
                Green Chicken Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/green-chicken-salad.html" >
                Green Chicken 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/grilled-fish-with-chips.html" >
                Fish with Chips
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/mexican-black-bean-salad.html" >
                Mexican  Bean 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Carbonara
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/greek-salad.html" >
                Chicken Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/penne-alla-vodka.html" >
                Alla Vodka
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
    </div>
  </div>

  
  <div class="col-12 col-xl-5">
    <div class="mega-banner">
      
      <div class="mega-col col-left">
        
        <h3 class="title">
          Featured Products
        </h3>
        

        
        







<div class="grid-item product-item " id="product-4439049469975">
  <a href="../products/beef-steaks.html" class="product-grid-image">
    <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/products/shop-2_largeaec4.jpg?v=1589797183" alt="Beef Steaks">
  </a>
    
  
  
  <div class="details">
    <a class="product-title" href="../products/beef-steaks.html">      
      Beef Steaks      
    </a>
    <span class="shopify-product-reviews-badge" data-id="4439049469975"></span>
    <div class="price-box">
      
        <p class="regular-product">
          <span>Rs. 286.00</span>
        </p>
        
    </div>
    
  </div>
</div>
        
      </div>
      

      
      <div class="mega-col col-right">
        <a class="animate-scale" href="../collections/all.html" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/mega-menu-4_a9137f22-1e2f-49a1-a86b-e4e71e9696a4_270xa77e.jpg?v=1591791598" alt="" />
        </a>
      </div>
      
    </div>
  </div>
  


  
       
      </div>

    
                </div>
            </div>

                      
         
        </div>
        

      
      
    </li>  
    

    
    

    


    

    

    

    <li class="menu-lv-1 item dropdown mega-menu">
        <a class="menu__moblie "  href="../collections/thai.html">
            Thai

            
            <span class="icon-dropdown" data-toggle-menu-mb>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            
          

            

            

            
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
            <div class="menu-mb-title">
                <span class="icon-dropdown">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                Thai
            </div>

        

            

            
            <div class="site-nav-dropdown style_4">
                <div class="container">
                     
<div class="row">
  
  
  <div class="col-12 col-xl-80">
    <div class="row" data-masonry='{ "itemSelector": "[data-gridItem]", "columnWidth": ".grid-sizer" }'>
      <div class="grid-sizer"></div>

      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/creamy-vegetable-salad.html" class="current">
          Steamed Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Steamed Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Garganelli
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/buldak.html" >
                Malloreddus
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Paccheri
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Creamed Breef
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Agnolotti
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/penne-alla-vodka.html" >
                Penne Alla Vodka
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/greek-salad.html" >
                Garden Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                Steamed Egg
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/creamy-vegetable-salad.html" class="current">
          Spicy Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Spicy Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Chicken Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamed-chipped-beef.html" >
                Creamy Vegetable 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                Galouti Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Greek Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Steak Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/garlic-prime-rib.html" >
                Garlic Soup
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/risotto.html" >
                Risotto
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/risotto.html" >
                Yum Soup
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/galouti-kebab.html" class="current">
          Curry Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Curry Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/spaghetti-aglio.html" >
                Grill Kebab Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Mixed Fried Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                Chicken Fried Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Galouti Kebab Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                Greek Salad Rice
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/grilled-fish-with-chips.html" >
                Veg Rice Bowl
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/mexican-black-bean-salad.html" >
                Black bean Curry
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Steak Curry
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../collections/fujian-cuisines.html" class="current">
          Pasta Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Pasta Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Cheese Pasta
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/buldak.html" >
                Baked Pasta
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/spaghetti-aglio.html" >
                Spaghetti 
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Lasagna
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamed-chipped-beef.html" >
                Carbonara
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                 Gnocchi
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/greek-salad.html" >
                Baked Pasta
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/galouti-kebab.html" >
                Wheat Pasta 
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
    </div>
  </div>

  
  <div class="col-12 col5">
    <div class="mega-banner">
      
      <div class="mega-col col-right">
        <a class="animate-scale" href="../collections/all.html" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/2_7e09f186-a094-4b19-8cfd-28b82a4e7b10_250x3619.jpg?v=1591177879" alt="" />
        </a>
      </div>
      
    </div>
  </div>
  


  
       
      </div>

    
                </div>
            </div>

                      
         
        </div>
        

      
      
    </li>  
    

    
    

    


    

    

    

    <li class="menu-lv-1 item dropdown mega-menu">
        <a class="menu__moblie "  href="../collections/chinese.html">
            Chinese

            
            <span class="icon-dropdown" data-toggle-menu-mb>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            
          

            

            

            
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
            <div class="menu-mb-title">
                <span class="icon-dropdown">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                Chinese
            </div>

        

            

            
            <div class="site-nav-dropdown style_3">
                <div class="container">
                     
<div class="row">
  
  
  
  <div class="menu-lv-2 col-12 col5 inner dropdown">
    <!-- Menu level 2 -->
    <a class="menu__moblie" href="../collections/shandong-cuisine.html" class="current">
      Shandong Cuisine

      
      <span class="icon-dropdown" data-toggle-menu-mb>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </span>
      
    </a>
    <a class="menu__moblie" href="../collections/shandong-cuisine.html" class="current">
      

      
      <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/collections/shop-20_210x0542.jpg?v=1591010420" alt="Shandong Cuisine">
      
    </a>
    
    <div class="sub-menu-mobile menu-mb-translate">
      <div class="menu-mb-title">
        <span class="icon-dropdown">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </span>
        Shandong Cuisine
      </div>



      <ul class="dropdown">
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/buldak.html" >
            Yum Soup
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/cobb-salad.html" >
            Bread & Egg
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/fried-egg-sausage.html" >
            Scrambled Eggs
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/fried-egg-sausage.html" >
            Salisbury Steak
          </a>
        </li>
        
      </ul>
    </div>
    
  </div>
  
  <div class="menu-lv-2 col-12 col5 inner dropdown">
    <!-- Menu level 2 -->
    <a class="menu__moblie" href="../collections/sichuan-cuisine.html" class="current">
      Sichuan Cuisine

      
      <span class="icon-dropdown" data-toggle-menu-mb>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </span>
      
    </a>
    <a class="menu__moblie" href="../collections/sichuan-cuisine.html" class="current">
      

      
      <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/collections/shop-8_210x264d.jpg?v=1591010463" alt="Sichuan Cuisine">
      
    </a>
    
    <div class="sub-menu-mobile menu-mb-translate">
      <div class="menu-mb-title">
        <span class="icon-dropdown">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </span>
        Sichuan Cuisine
      </div>



      <ul class="dropdown">
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/creamy-vegetable-salad.html" >
            Chicken Pop
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/cobb-salad.html" >
            Olive Salad
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/crispy-chicken-wings.html" >
            Spicey Chicken Wings
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/creamed-chipped-beef.html" >
            Galouti Kebab
          </a>
        </li>
        
      </ul>
    </div>
    
  </div>
  
  <div class="menu-lv-2 col-12 col5 inner dropdown">
    <!-- Menu level 2 -->
    <a class="menu__moblie" href="../collections/hunan-cuisines.html" class="current">
      Hunan cuisines

      
      <span class="icon-dropdown" data-toggle-menu-mb>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </span>
      
    </a>
    <a class="menu__moblie" href="../collections/hunan-cuisines.html" class="current">
      

      
      <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/collections/shop-11_210xe3bf.jpg?v=1591010501" alt="Hunan cuisines">
      
    </a>
    
    <div class="sub-menu-mobile menu-mb-translate">
      <div class="menu-mb-title">
        <span class="icon-dropdown">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </span>
        Hunan cuisines
      </div>



      <ul class="dropdown">
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/garlic-prime-rib.html" >
            Garlic Rib
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/english-breakfast.html" >
            Fruit Breakfast
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/english-breakfast.html" >
            Green Chicken
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/creamy-vegetable-salad.html" >
            Creamy Fish
          </a>
        </li>
        
      </ul>
    </div>
    
  </div>
  
  <div class="menu-lv-2 col-12 col5 inner dropdown">
    <!-- Menu level 2 -->
    <a class="menu__moblie" href="../collections/fujian-cuisines.html" class="current">
      Fujian cuisines

      
      <span class="icon-dropdown" data-toggle-menu-mb>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </span>
      
    </a>
    <a class="menu__moblie" href="../collections/fujian-cuisines.html" class="current">
      

      
      <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/collections/shop-22_210xc4eb.jpg?v=1591010784" alt="Fujian cuisines">
      
    </a>
    
    <div class="sub-menu-mobile menu-mb-translate">
      <div class="menu-mb-title">
        <span class="icon-dropdown">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </span>
        Fujian cuisines
      </div>



      <ul class="dropdown">
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/grilled-fish-with-chips.html" >
            Fried Sausage
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/green-chicken-salad.html" >
            Bean salad
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/fried-egg-sausage.html" >
            Penne Vodka
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/greek-salad.html" >
            Mixed Risotto
          </a>
        </li>
        
      </ul>
    </div>
    
  </div>
  
  <div class="menu-lv-2 col-12 col5 inner dropdown">
    <!-- Menu level 2 -->
    <a class="menu__moblie" href="../collections/chinese.html" class="current">
      Anhui Cuisine

      
      <span class="icon-dropdown" data-toggle-menu-mb>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </span>
      
    </a>
    <a class="menu__moblie" href="../collections/chinese.html" class="current">
      

      
      <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/collections/shop-16_210xba8f.jpg?v=1591010084" alt="Anhui Cuisine">
      
    </a>
    
    <div class="sub-menu-mobile menu-mb-translate">
      <div class="menu-mb-title">
        <span class="icon-dropdown">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </span>
        Anhui Cuisine
      </div>



      <ul class="dropdown">
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/buldak.html" >
            Buldak
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/english-breakfast.html" >
            English Breakfast
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/galouti-kebab.html" >
            Galouti Kebab
          </a>
        </li>
        
        <!-- Menu level 3 -->
        <li class="menu-lv-3 inner">
          <a href="../products/greek-salad.html" >
            Greek Salad
          </a>
        </li>
        
      </ul>
    </div>
    
  </div>
  


  
       
      </div>

    
                </div>
            </div>

                      
         
        </div>
        

      
      
    </li>  
    

    
    

    


    

    

    

    <li class="menu-lv-1 item dropdown mega-menu">
        <a class="menu__moblie "  href="../collections/menus.html">
            Shop

            
            <span class="icon-dropdown" data-toggle-menu-mb>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            
          

            

            

            
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
            <div class="menu-mb-title">
                <span class="icon-dropdown">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                Shop
            </div>

        

            

            
            <div class="site-nav-dropdown style_5">
                <div class="container">
                    
  

  
    <div class="row" data-masonry='{ "itemSelector": "[data-gridItem]", "columnWidth": ".grid-sizer" }'>
      <div class="grid-sizer"></div>

      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/penne-alla-vodka.html" class="current">
          Chicken Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Chicken Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/chicken-popcorn.html" >
                Chicken Popcorn
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Crispy Chicken Wings
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Green Chicken Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Rigatoni Alla Carbonara
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/crispy-chicken-wings.html" class="current">
          Beef Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Beef Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/beef-steaks.html" >
                Beef Steaks
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Cobb Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Chipped Beef
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/garlic-prime-rib.html" >
                Garlic Prime Rib
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/scrambled-eggs.html" class="current">
          Vegetables Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Vegetables Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                English Breakfast
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                Creamy Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/cobb-salad.html" >
                Greek Salad
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/spaghetti-aglio.html" >
                Mexican salad
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
      <div data-gridItem class="menu-lv-2 inner dropdown col-12 col-xl-3">
        <!-- Menu level 2 -->
        <a class="menu__moblie" href="../products/thai-tom-yum-soup.html" class="current">
          Egg Dishes

          
          <span class="icon-dropdown" data-toggle-menu-mb>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
          <div class="menu-mb-title">
            <span class="icon-dropdown">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            Egg Dishes
          </div>

          <ul class="dropdown">
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/creamy-vegetable-salad.html" >
                Fried Egg
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                Scrambled Eggs
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/english-breakfast.html" >
                Carbanaro
              </a>
            </li>
            
            <!-- Menu level 3 -->
            <li class="menu-lv-3 inner">
              <a href="../products/crispy-chicken-wings.html" >
                English Breakfast
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
      
    </div>
  
<div class="row">
  
  <div class="col-12 col-xl-6">
    <div class="mega-banner">
      <div class="mega-col">
        
        <a class="animate-scale" href="#" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/2_750xcbe2.png?v=1591791667" alt="" />
        </a>
        
      </div>
    </div>
  </div>
   
  
  <div class="col-12 col-xl-6">
    <div class="mega-banner">
      <div class="mega-col">
        
        <a class="animate-scale" href="#" title="">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/1_750xf233.png?v=1591791680" alt="" />
        </a>
        
      </div>
    </div>
  </div>
                
</div>

  
      
                </div>
            </div>

                      
         
        </div>
        

      
      
    </li>  
    

    
    

    


    

    

    

    <li class="menu-lv-1 item dropdown no-mega-menu">
        <a class="menu__moblie "  href="../pages/about.html">
            Pages

            
            <span class="icon-dropdown" data-toggle-menu-mb>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            
          

            

            

            
        </a>

        
        <div class="sub-menu-mobile menu-mb-translate">
            <div class="menu-mb-title">
                <span class="icon-dropdown">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                Pages
            </div>

        

            

            

            
            <ul class="site-nav-dropdown">
    
    <li class="menu-lv-2">
        <a  href="../pages/about.html">
            About Us
            
            
        </a>
        
        
    </li>
    
    <li class="menu-lv-2">
        <a  href="../blogs/news.html">
            Blog
            
            
        </a>
        
        
    </li>
    
    <li class="menu-lv-2">
        <a  href="../pages/faqs.html">
            FAQ
            
            
        </a>
        
        
    </li>
    
    <li class="menu-lv-2">
        <a  href="../pages/contact-us.html">
            Contact us
            
            
        </a>
        
        
    </li>
    
</ul>
            

                      
         
        </div>
        

      
      
    </li>  
    
</ul>

                        </nav>                
                    </div>
                </div>
            </div>
           
    </div>
</div>



<div class="right-header header-items" data-append-header-pc>
                   
  
  <div class="appentMb wide--hide" data-append-header-mb>
    <ul class="menu_bar_right">

             
            <li class="wishlist">            
              <a  href="../pages/wishlist.html" title="Wishlist"><span class="wide--hide">Wishlist</span><i class="fas fa-heart post-large--hide large--hide medium-down--hide"></i></a>            
            </li>
           



             
            <li class="customer_account"> 
              <div class="header-account_links">
                <ul> 
                  
                  <li>
                    <a href="login.html" title="Log in" data-value="value 1"><i class="fa fa-user post-large--hide large--hide medium-down--hide"></i><span class="wide--hide">Log in</span></a>
                  </li>

                    

                </ul>   

              </div>

            </li>
             
      
          </ul>
    
  
  

                <div class="header_currency">
                  <ul class="tbl-list">
                    <li class="currency dropdown-parent uppercase currency-block">                       
                         
<div class="lang-currency-groups">

	
<div class="currency-block">
  <label class="label-text">
    Currency
  </label>

  <div class="btn-group currency-dropdown">
    <label class="dropdown-toggle dropdown-label" data-currency-label>
      <span class="img-icon">
        <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-1ad35.png?v=4119523831752903510" alt="USD" />
      </span>
      <span class="text">
        USD
      </span>      
    </label>

    <div class="dropdown-menu currency-menu" id="currencies">
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="USD">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-1ad35.png?v=4119523831752903510" alt="" />
        </span>
        <span class="text">
          USD
        </span>       
      </a>
        
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="EUR">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-2b66c.png?v=5653372019488774628" alt="" />
        </span>
        <span class="text">
          EUR
        </span>       
      </a>
        
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="GBP">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-33373.png?v=2634433010385958246" alt="" />
        </span>
        <span class="text">
          GBP
        </span>       
      </a>
        
      
      
      
      

      
      <a class="dropdown-item" href="#" data-currency="AUD">
        <span class="img-icon">
          <img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/i-currency-410aa.png?v=11143122763959087045" alt="" />
        </span>
        <span class="text">
          AUD
        </span>       
      </a>
        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
      
      
      

        
      
    </div>
  </div>       
</div>
	

</div>
                   
                    </li>
                  </ul>
                </div> 
                
    
    
    
  </div>
  
   
</div> 
<style>
    
    
    
    /*  Menu Lv 1  */
    
    
    /*  Menu Lv 2  */
    
    
    /*  Menu Lv 3  */
    
    
    /*  Label - Navigation  */
    
    
    
    
    
    

    

    .nav-vertical .header-logo img {
        max-height: ;
    }

    @media (min-width:967px) {
        
        
       
        
        .wrapper-navigation .main-menu {
            text-align: left;
        }
        
       

       
        .navigation-vertical-menu .mb-area .nav-bar {
            max-height: -moz-calc(100vh - 78px - 115px - 77px - 77px - 100px);
            max-height: -webkit-calc(100vh - 78px - 115px - 77px - 77px - 100px);
            max-height: -ms-calc(100vh - 78px - 115px - 77px - 77px - 100px);
            max-height: calc(100vh - 78px - 115px - 77px - 77px - 100px);
            max-height: calc(100vh - 45px -  - 115px - 77px - 77px - 100px);        
        }

        .site-nav .no-mega-menu >.sub-menu-mobile {
            background-color: rgba(255, 255, 255, 0);            
        }

        
     
        
        
        
        /*  Menu Lv 2  */
        
        
        .site-nav .icon_sale:before {
            border-top-color: #ef6454;
        }

        .site-nav .icon_new:before {
            border-top-color: #06bfe2;
        }

        .site-nav .icon_hot:before {
            border-top-color: #ffbb49;
        }

        .site-nav .menu-lv-1 > a,
        .site-nav .menu-mb-title {
            font-size: 18px;    
        }
        
        .site-nav .menu-lv-2 > a,
        .site-nav .mega-menu .mega-banner .title,
        .site-nav .mega-menu .product-item .btn {
            font-size: 14px;    
        }
        
        .site-nav .menu-lv-3 > a {
            font-size: 14px;    
        }
    }
  
    .site-nav .icon_sale {
        background-color: #ef6454;
        color: #ffffff;
    }
        
    .site-nav .icon_new {
        background-color: #06bfe2;
        color: #ffffff;
    }
        
    .site-nav .icon_hot {
        background-color: #ffbb49;
        color: #ffffff;
    }
   
    @media (max-width:1199px) {
        .site-nav .icon_sale:before {
            border-right-color: #ef6454;
        }

        .site-nav .icon_new:before {
            border-right-color: #06bfe2;
        }

        .site-nav .icon_hot:before {
            border-right-color: #ffbb49;
        }
    }
</style>

<style>
@media (min-width:1200px) {
    
    .header-lang-style2 .is-sticky .main-menu,
    .wrapper_header_default .is-sticky .main-menu {
        width: -moz-calc(100% - 112px);
        width: -webkit-calc(100% - 112px);
        width: -ms-calc(100% - 112px);
        width: calc(100% - 112px);
        margin-left: 112px;
    }
    
}
</style>


</div>      
                </div> 
              </div>
              <div id="shopify-section-header-model-3" class="shopify-section">
<a href="#" class="icon-nav close-menu-mb" title="Menu Mobile Icon" data-menu-mb-toogle>
  <span class="icon-line"></span>
</a>    
<div class="grid__item menubar_inner header-bottom" data-sticky-mb>
  <div class="wrapper-header-bt">

    <div class="header-mb">          
  <div class="header-mb-left header-mb-items">
    <div class="hamburger-icon svg-mb">
      <a href="#" class="icon-nav" title="Menu Mobile Icon" data-menu-mb-toogle>
        <span class="icon-line"></span>
      </a>
    </div>


  </div>

  <div class="header-mb-middle header-mb-items">
    <div class="header-logo">
      
        <div class="h1 site-header__logo" itemscope itemtype="http://schema.org/Organization">
          
          
          <a  href="../index.html" style="max-width: px;">
            <img class="normal-logo" src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/logo6378.png?v=16169813535851071673" alt="Yummi-theme" itemprop="logo">
          </a>
          
          
        </div>
      
    </div>
</div>

    <div class="header-mb-right header-mb-items">

      <div class="cart-icon svg-mb">
        <a href="#" title="Cart Icon" data-cart-toggle>       
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 30 30">
  <g>
    <g>
      <path d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path>
    </g>
  </g>
</svg>


          <span class="cartCount" data-cart-count>
            0
          </span>
        </a>
      </div>
    </div>          
  
</div>
    <div class="header-pc">
      <ul class="menu-icon">   
        
        <li>
          <a href="../pages/wishlist.html" title="Wishlist"> <i class="fas fa-heart" aria-hidden="true"></i></a>
        </li>
        
        
        <li class="header-bar__module cart header_cart">
          <!-- Mini Cart Start -->
<div class="baskettop">
  


    <a href="#" class="icon-cart-arrow cart-icon" data-cart-toggle>
      
      
      
      <i class="fas fa-shopping-bag"></i>
      <div class="detail">
        <div id="cartCount" data-cart-count> 
          0
        </div>
      </div>
      
      
      


      

             
            
    </a> 
    
    
</div>


 
        </li> 
         
        
        <li class="menu_bar_right">

          <div class="slidedown_section">
            <a  id="Togglemodal" class="icon-cart-arrow"><i class="fas fa-user" aria-hidden="true"></i></a>
            <div id="slidedown-modal">
              <div class="header-panel-top">
                <div class="customer_account">                          
                  <ul>
                    
                    
                  <li>
                      <a href="login.php" title="Log in"> <i class="fa fa-sign-in-alt icons" aria-hidden="true"></i> Log in</a>
                    </li>
                    <li>
                      <a href="logout.php" title="Create account">  <i class="fas fa-user" aria-hidden="true"></i> LOG_OUT </a>
                    </li>  
                      
                     

                  </ul>
                </div>    

              </div>
            </div>
          </div>


        </li>
          

         
        
        
        <li class="search-categories-section seeks post-large--hide large--hide medium-down--hide">
          <div class="header-search">
            <a href="../search.html" class="site-header__link site-header__search js-drawer-open-top">
              <svg class="icon icon-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"><path d="M57.7,55.6L44.8,40.7c2.9-3.8,4.7-8.6,4.7-13.8c0-12.5-10.2-22.6-22.6-22.6C14.4,4.3,4.2,14.4,4.2,26.9s10.2,22.6,22.6,22.6  c5.5,0,10.5-2,14.5-5.2l12.6,14.6c0.5,0.6,1.2,0.9,1.9,0.9c0.6,0,1.2-0.2,1.6-0.6C58.5,58.2,58.6,56.7,57.7,55.6z M9.2,26.9  c0-9.7,7.9-17.6,17.6-17.6c9.7,0,17.6,7.9,17.6,17.6s-7.9,17.6-17.6,17.6C17.2,44.5,9.2,36.6,9.2,26.9z"/></svg>
            </a>
          </div>
        </li>
        

        

        

         

      </ul>

    </div>
  </div>
</div>

<style> 
  @media only screen and (min-width:1200px) { 
    /* Top block */
    .header-type-3 .top_bar { background: ; }
    .header-type-3 .top_bar li { color:;}   
    .header-type-3 .top_bar a { color:;}    
    .header-type-3 .top_bar a:hover, .header-type-3 .top_bar a:hover span { color:;}    
    .header-type-3 .header-bar__module.cart .baskettop a.icon-cart-arrow #cartCount { background: #fc4c4b;color:#ffffff;}
    .header-type-3 .header-bar__module.cart .baskettop a.icon-cart-arrow:hover #cartCount { background: #000000;color:#ffffff;}


    /* Logo block */
    .header-type-3 .site-header__logo a { color:#000000;}
    .header-type-3 .site-header__logo a:hover { color:#fc4c4b;}    

    /* Menu  block */
    .header-type-3 .site-header,.mobile-nav-section ,.header-type-3 .sticky-animate,.banner-slideshow:before{background: rgba(0,0,0,0);}
    .header-type-3 .nav-bar ul li {color: ;}
    .header-type-3 .nav-bar ul li a,.mobile-nav-section .mobile-nav-trigger {color:#151413;}  
    .header-type-3 .nav-bar ul li a:hover,.header-type-3 .nav-bar .site-nav > li > a.current:hover {color:#fc4c4b;} 


    .header-type-3 .nav-bar .site-nav >  li > a.current {color:#fc4c4b;} 

    .header-type-3 .header-search svg {fill:#000000;} 
    .header-type-3 .header-search svg:hover {fill:#fc4c4b;} 




    .header-type-3 .site-nav-dropdown,#MobileNav,.mobile-nav__sublist { background: #ffffff;}
    .header-type-3 .site-nav-dropdown .inner > a {color: #151413;}    
    .header-type-3 .site-nav-dropdown .inner > a:hover {color: #fc4c4b;}    
    .header-type-3 .site-nav-dropdown .inner .dropdown a,.header-type-3 .desktop-megamenu .site-nav .site-nav-dropdown li a,.header-type-3 .site-nav .widget-featured-product .product-title,.header-type-3 .site-nav .widget-featured-product .widget-title h3,#MobileNav a,.mobile-nav__sublist a,.site-nav .widget-featured-nav .owl-prev a,.site-nav .widget-featured-nav .owl-next a  {color: #151413;}
    .header-type-3 .site-nav-dropdown .inner .dropdown a:hover,.header-type-3 .desktop-megamenu .site-nav .site-nav-dropdown li a:hover,.header-type-3 .site-nav-dropdown .inner .dropdown a.current,.header-type-3 .nav-bar .site-nav .site-nav-dropdown li a.current,.header-type-3 .site-nav .widget-featured-product .product-title:hover,#MobileNav a.current,.mobile-nav__sublist a.current,.site-nav .widget-featured-nav .owl-prev a:hover,.site-nav .widget-featured-nav .owl-next a:hover {color: #fc4c4b;}    

    /* Dropdown block */
    .header-type-3 #Togglemodal i {color: #000000;}
    .header-type-3 #Togglemodal i:hover {color: #fc4c4b;}
    .header-type-3 #slidedown-modal {background: #ffffff;}
    .header-type-3 #slidedown-modal ul li a {color:#000000;} 
    .header-type-3 #slidedown-modal ul li a:hover {color:#fc4c4b;} 




    /* Search block */     
    .header-type-3 .search-bar input[type="search"] {color:#000000;} 
    .header-type-3 .header-search span  {color:#000000;} 
    .header-type-3 .header-search span:hover {color:#fc4c4b;} 



    .header-type-3 .search-bar__form, .header-type-3 #SearchDrawer,.header-type-3 .search-bar  {  background:#ffffff;} 
    
    .header-type-3 .search-bar input[type="search"]::-webkit-input-placeholder  { /* Chrome/Opera/Safari */
      color:#000000;
    }
    .header-type-3 .search-bar input[type="search"]::-moz-placeholder { /* Firefox 19+ */
      color:#000000;
    }
    .header-type-3 .search-bar input[type="search"]:-ms-input-placeholder { /* IE 10+ */
      color:#000000;
    }
    .header-type-3 .search-bar input[type="search"]:-moz-placeholder { /* Firefox 18- */
      color:#000000;
    }
    /* Cart Summary block */
    .header-type-3 a.icon-cart-arrow i  {color: #000000;}
    .header-type-3 a.icon-cart-arrow:hover i {color: #fc4c4b;}
    .header-type-3 #slidedown-cart .actions, .header-type-3  #slidedown-cart  {background: ;}
    .header-type-3 .header-bar__module p {color: ;}
    .header-type-3 .header-bar__module a, .header-type-3 .menu-icon li a{color:#000000;}  
    .header-type-3 .header-bar__module a:hover, .header-type-3 .menu-icon li a:hover{color:#fc4c4b;} 
    .header-type-3 .header-bar__module .btn {color:;background: ;} 
    .header-type-3 .header-bar__module .btn:hover {color:;background: ;} 
    .header-type-3  #slidedown-cart .total .price, .header-type-3 #minicart_total,.header-type-3 #slidedown-cart ul li .cart-collateral {color:;} 
  }
</style> 









</div>

            </div>
          </div>
        </div>
      </div>
      
    </header>
  </div>
</div>

<td>
        <a class="Excel" href="excel.php">EXCEL</a>
        <a class="Pdf" href="pdf.php">PDF</a>
        </td>
        <div class="content">
        <form enctype="multipart/form-data">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
</nav>
		<hr>
		<table  border=1 align = 'center' id=tab_rec >
			<tr>

                <th>Code Reclamation</th>
				<th>Description</th>
				

			</tr>

			<?PHP
				foreach($liste_recalmation as $reclamation){ 
			?>
				<tr>
                    <td><?PHP echo $reclamation['code_rec']; ?></td>
					<td><?PHP echo $reclamation['descrip']; ?></td>
					<td>
					<a href="supprimer_rec.php?id=<?PHP echo $reclamation['code_rec'];?>">Supprimer</a>
                    <a class="modidfier" href="modifier_rec.php?id_modif=<?PHP echo $reclamation['code_rec'];?>">Modifier</a>
					</td>	
				</tr>  
			<?PHP
				} 
			?>
		</table>
        <?php
            foreach($count  as $c) {
              
           
            $halman=ceil(($c['nb']/$perpage)+1); 
           
            }
            for($i=1;$i<$halman;$i++)
            {
                echo "<a class=pagination  href='?page=$i'>$i</a>";
            }
            ?>
        </form>
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'recherche.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_rec").html(response);
}
});
});
});
    </script>
        </div><!-- .content -->
  


<div id="shopify-section-footer-model-9" class="shopify-section"><div data-section-id="footer-model-9"  data-section-type="Footer-model-9" class="footer-model-9">
  <footer class="site-footer" style="background-color:rgba(0,0,0,0); background-image:url('../../cdn.shopify.com/s/files/1/0267/5979/0615/files/footerb856.jpg?v=1589447554');background-repeat:no-repeat;background-size:cover;background-position:center;">      
    <div class="container">
      <div class="grid-uniform">         

         
          

          

          

        

         
          
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">   
          
          <h4 style="color:#ffffff;">Help</h4>
          
          <ul class="site-footer__links">
            
            <li><a style="color:#ffffff;"  href="../search.html">Search</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/contact-us.html">Help</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/about.html">Information</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/about.html">Privacy Policy</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/shipping-details.html">Shipping Details</a></li>
            
          </ul>          
        </div>
         
          
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">          
          
          <h4 style="color:#ffffff;"> Support</h4>
          
          <ul class="site-footer__links">
            
            <li><a style="color:#ffffff;"  href="../pages/contact-us.html">Contact Us</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/about.html">About Us</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/contact-us.html">Careers</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/shipping-details.html">Refund & Return</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/shipping-details.html">Deliveries</a></li>
            
          </ul>         
        </div>
        

          
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">          
          
          <h4 style="color:#ffffff;">Information</h4>
          
          <ul class="site-footer__links">
            
            <li><a style="color:#ffffff;"  href="../search.html">Search Terms</a></li>
            
            <li><a style="color:#ffffff;"  href="../search.html">Advanced Search</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/faqs.html">Help & Faq's</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/contact-us.html">Store Location</a></li>
            
            <li><a style="color:#ffffff;"  href="../pages/shipping-details.html">Order & Return </a></li>
            
          </ul>         
        </div>
        

        
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">     
                  
          <h4 style="color:#ffffff;">Contact us</h4> 
                  
                  
          <div class="address">
            
            <p style="color:#ffffff;"><i class="fa fa-home"></i>   No: 58 A, East Madison Street,
Baltimore, MD, USA 4508</p>
                      
            
            <p style="color:#ffffff;"> <i class="fa fa-phone"></i>+1800 12345678</p>
            
          </div>
          
          
          <ul class="link">
          
            <li> <i style= "color:#ffffff;" class="fas fa-globe-asia"></i>  <a class="domain" style="color:#ffffff;" href="mailto:sample@yummi.com">www.yummi.com</a></li>
          
          
          
            <li> <i style="color:#ffffff;" class="fa fa-envelope"></i>  <a class="mail" style="color:#ffffff;" href="mailto:support@example.com">support@example.com</a></li>
               
          </ul> 
        </div>
          
      </div>      
    </div>
    
      
    <div class="grid__item">
      <div class="social_icons_bg" style="float:left;width:100%;background:rgba(0,0,0,0)">
          
        <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-half">
          <div class="footer_social_links">
            
            <h4 style="color:#ffffff;">Connect with us</h4>
            
            <ul class="inline-list social-icons social-links-type-1">
  
    <li>
      <a style="color:;" class="icon-fallback-text twitt hexagon" target="blank" href="https://twitter.com/shopify" onmouseover="this.style.color='';" onmouseout="this.style.color='';" title="Twitter">
        <span class="fab fa-twitter" aria-hidden="true"></span>       
      </a>
    </li>
  
  
    <li>
      <a style="color:;" class="icon-fallback-text fb hexagon" target="blank" href="https://www.facebook.com/shopify" onmouseover="this.style.color='';" onmouseout="this.style.color='';" title="Facebook">
        <span class="fab fa-facebook" aria-hidden="true"></span>
      </a>
    </li>
  
  
  
  
    <li>
      <a style="color:;" class="icon-fallback-text ins" target="blank" href="https://www.instagram.com/" onmouseover="this.style.color='';" onmouseout="this.style.color='';" title="Instagram">
        <span class="fab fa-instagram" aria-hidden="true"></span>
      </a>
    </li>
  
  
  
    <li>
      <a style="color:;" class="icon-fallback-text youtube" target="blank" href="#" onmouseover="this.style.color='';" onmouseout="this.style.color='';" title="YouTube">
        <span class="fab fa-youtube" aria-hidden="true"></span>
      </a>
    </li>
  
  
  
  
  
</ul>

          </div>
        </div>
        

        
        <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-half">
          <div class="app_store">    
            <div class="footer-icons">  
                      
              <h4 style="color:#ffffff">Download our app</h4> 
                         
              <ul class="inline-list">
                <li><a href="#" target="_blank"><img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/store-3_smalle056.png?v=1589449607" alt="Download our app" /></a></li>
                <li><a href="#" target="_blank"><img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/store-2_small0407.png?v=1589449622" alt="Download our app" /></a></li>
                <li><a href="#" target="_blank"><img src="../../cdn.shopify.com/s/files/1/0267/5979/0615/files/store-1_smalle84b.png?v=1589449632" alt="Download our app" /></a></li>
              </ul>
            </div>         
          </div>
        </div>
        
      </div>  
    </div>
    
  </footer> 

  <div class="grid__item"> 
    <div style="background:#000000;" class="grid__item copyright-section ">
      <div class="container">
        
        <p style="color:#ffffff;"  class="copyright">Copyright @ 2020 Yummi. <a target="_blank" rel="nofollow" href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></p>
               
              
        <div class="payment_section">                 
          <div class="footer-icons">        
            <ul class="inline-list payment-icons">             
            </ul>                    
          </div>           
        </div>
         
      </div>    
    </div>
  </div>
</div>

<style>

  .footer-model-9 .social_icons_bg ul li a {color:#ffffff ; }
  .footer-model-9 .social_icons_bg ul li a:hover { color:#ffc800; }
  .footer-model-9 .site-footer__links li a:hover, .footer-model-9 .mail-address:hover, .footer-model-9 .link a:hover { color:#ffc800 !important; }
  .footer-model-9 .footer-bottom .footer-bottom__menu ul li a:hover { color: !important; }
  .footer-model-9 .copyright a { color:#ffffff; }
  .footer-model-9 .copyright a:hover { color:#ffc800; }  
  .footer-model-9 h5 {color:#ffffff; }
  .footer-model-9 .site-footer .grid-uniform {border-bottom:1px solid #646464;}

  .footer-model-9 .site-footer:before{
    content: '';
    position: absolute;
    background-image:url(../../cdn.shopify.com/s/files/1/0267/5979/0615/files/divider_1_1920X0397.png?v=1589525274) ;
    background-repeat:no-repeat;  
    left: 0;
    width: 1920px;
    height: 160px;
    top: -120px;
    bottom: auto;
  }

  

</style>

</div>

  </div>
  
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/inview-donut-easing91ee.js?v=11410926627178193725" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/theme1dfc.js?v=1538060098320426863" type="text/javascript"></script>
<script src="../../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
<script src="../../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" type="text/javascript"></script>    
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/history-to-light18d8.js?v=17945962704583084051" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/footer7644.js?v=15592521103013119153" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/shop13af.js?v=1254560344816304699" type="text/javascript"></script>  


<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/wow6fc4.js?v=8607965041847799793"></script>

<script type="text/javascript">
  $('.quick-view .close-window').on('click', function() {  			
    $('.quick-view').switchClass("open-in","open-out");
  });
</script>





<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/ajax-search-scriptb2a6.js?v=4970769524936498000"></script>




<script> 
    

    var appendPrependMenuMobile = function() {
        var appendMb = $('[data-append-header-mb]'),
            headerPc = $('[data-append-header-pc]'),
            navSearch = headerPc.find('.nav-search'),
            areaMb = $('.wrapper-navigation .mb-area');

        if (window.innerWidth < 1200) {
            appendMb.appendTo(areaMb);
        } else {
            appendMb.insertAfter(navSearch);
        };
    };

    $(document).ready(function() {
        appendPrependMenuMobile();
    });

    var winWidth = $(window).innerWidth();

    $(window).on('resize', function () {
        var resizeTimerId;

        clearTimeout(resizeTimerId);

        resizeTimerId = setTimeout(function() {
            var curWinWidth = $(window).innerWidth();

            if ((curWinWidth < 1200 && winWidth >= 1200) || (curWinWidth >= 1200 && winWidth < 1200)) {
                appendPrependMenuMobile();
            };
            winWidth = curWinWidth;
        }, 0);
    });

    
</script>

  
  <!-- Begin quick-view-template -->
<div class="clearfix" id="quickview-template" style="display:none">
  <div class="overlay"></div>
  <div class="content clearfix">
    <div class="product-img images">
      <div class="quickview-featured-image product-photo-container"></div>
      <div class="more-view-wrapper">
        <ul class="product-photo-thumbs quickview-more-views-owlslider ">
        </ul>
      
      </div>
    </div>
    <div class="product-shop summary">
      <div class="product-item product-detail-section">
        <h4 class="product-title"><a>&nbsp;</a></h4>
        
        <p class="item-text product-description"></p>
        
        <div class="prices product_price">
          <label>Price :</label>
          <div class="price" id="QProductPrice"></div>
          <div class="compare-price" id="QComparePrice"></div>
        </div>
        
        <div class="product-infor">
          <p class="product-inventory"><label>Availability :</label><span></span></p>    
        </div>
        
        <div class="details clearfix">
          <form action="https://yummi-theme.myshopify.com/cart/add" method="post" class="variants">
            <select name='id' style="display:none"></select>
            <div class="qty-section quantity-box">
              <label>Quantity :</label>
              <div class="dec button qtyminus">-</div>
              <input type="number" name="quantity" id="Qty" value="1" class="quantity">
              <div class="inc button qtyplus">+</div>
            </div>
            
            
            <div class="total-price">
              <label>Subtotal :</label><span class="h5"></span>
            </div>
                        
            <div class="actions">
                <button type="button" class="add-to-cart-btn btn">
                  Add to Cart
                </button>
              </div>
          </form>
        </div>     
      </div>
    </div>  
 <a href="javascript:void(0)" class="close-window"></a> 
  </div>
 
</div>
<!-- End of quick-view-template -->
<script type="text/javascript">  
  Shopify.doNotTriggerClickOnThumb = false; 
                                       
  var selectCallbackQuickview = function(variant, selector) {
      var productItem = jQuery('.quick-view .product-item');
          addToCart = productItem.find('.add-to-cart-btn'),
          productPrice = productItem.find('.price'),
          comparePrice = productItem.find('.compare-price'),
          totalPrice = productItem.find('.total-price span'),
          inventory = productItem.find('.product-inventory');
      if (variant) {
        if (variant.available) {          
          // We have a valid product variant, so enable the submit button
          addToCart.removeClass('disabled').removeAttr('disabled').text('Add to Cart');         
    
        } else {
          // Variant is sold out, disable the submit button
          addToCart.val('Sold Out').addClass('disabled').attr('disabled', 'disabled');         
        }
    
        // Regardless of stock, update the product price
        productPrice.html(Shopify.formatMoney(variant.price, "Rs. {{amount}}"));
    
        // Also update and show the product's compare price if necessary
        if ( variant.compare_at_price > variant.price ) {
          comparePrice
            .html(Shopify.formatMoney(variant.compare_at_price, "Rs. {{amount}}"))
            .show();
          productPrice.addClass('on-sale');
        } else {
          comparePrice.hide();
          productPrice.removeClass('on-sale');
        }
    
       
    
     //update variant inventory
     
     var inventoryInfo = productItem.find('.product-inventory span');
          if (variant.available) {
            if (variant.inventory_management !=null ) {
              inventoryInfo.text(window.in_stock );
              inventoryInfo.addClass('items-count');
              inventoryInfo.removeClass('many-in-stock');
              inventoryInfo.removeClass('out-of-stock');
              inventoryInfo.removeClass('unavailable');
            } else {
              inventoryInfo.text(window.many_in_stock);
              inventoryInfo.addClass('many-in-stock')
              inventoryInfo.removeClass('items-count');
              inventoryInfo.removeClass('out-of-stock');
              inventoryInfo.removeClass('unavailable');
            }
          } else {
            inventoryInfo.addClass('out-of-stock')
            inventoryInfo.text(window.out_of_stock);
            inventoryInfo.removeClass('items-count');
            inventoryInfo.removeClass('many-in-stock');
            inventoryInfo.removeClass('unavailable');
          }
     
    
    
    /*recaculate total price*/
        //try pattern one before pattern 2
        var regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;
        var unitPriceTextMatch = jQuery('.quick-view .price').text().match(regex);

        if (!unitPriceTextMatch) {
          regex = /([0-9]+[.|,][0-9]+)/g;
          unitPriceTextMatch = jQuery('.quick-view .price').text().match(regex);     
        }

        if (unitPriceTextMatch) {
          var unitPriceText = unitPriceTextMatch[0];     
          var unitPrice = unitPriceText.replace(/[.|,]/g,'');
          var quantity = parseInt(jQuery('.quick-view input[name=quantity]').val());
          var totalPrice = unitPrice * quantity;

          var totalPriceText = Shopify.formatMoney(totalPrice, window.money_format);
          regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;     
          if (!totalPriceText.match(regex)) {
            regex = /([0-9]+[.|,][0-9]+)/g;
          } 
          totalPriceText = totalPriceText.match(regex)[0];

          var regInput = new RegExp(unitPriceText, "g"); 
          var totalPriceHtml = jQuery('.quick-view .price').html().replace(regInput ,totalPriceText);
          jQuery('.quick-view .total-price span').html(totalPriceHtml);             
        }
    /*end of price calculation*/
    
    
            
		Currency.convertAll(window.shop_currency, $('#currencies .active').attr('data-currency'), 'span.money', 'money_format');
        
                            
        /*begin variant image*/
     /*begin variant image*/
        if (variant && variant.featured_image) {
            var originalImage = jQuery(".quick-view .quickview-featured-image img");
            var newImage = variant.featured_image;
            var element = originalImage[0];
            Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
              newImageSizedSrc = newImageSizedSrc.replace(/\?(.*)/,"");
              jQuery('.quick-view .more-view-wrapper img').each(function() {
                var grandSize = jQuery(this).attr('src');
                grandSize = grandSize.replace('medium','grande');
               
                if (grandSize == newImageSizedSrc) {
                  jQuery(this).parent().trigger('click');              
                  return false;
                }
              });
            });        
        }
        /*end of variant image*/   
        /*end of variant image*/ 
      } else {
        // The variant doesn't exist. Just a safegaurd for errors, but disable the submit button anyway
        addToCart.text('Unavailable').addClass('disabled').attr('disabled', 'disabled');
       
           
          var inventoryInfo = productItem.find('.product-inventory span');
          inventoryInfo.addClass("unavailable");
          inventoryInfo.removeClass("many-in-stock");
          inventoryInfo.removeClass("items-count");
          inventoryInfo.removeClass("out-of-stock");
          inventoryInfo.text(window.unavailable);
          
      }   
  };  
  
  </script>

  <div class="loading-modal modal">Loading</div> 


<div class="newsletter-success-modal">
  <div class="modal-overlay"></div>
  <div class="ajax-modal-content">
    <a class="close close-window btn" title="Close">
       <i class="fa fa-times"></i>
    </a>
      <i class="fa fa-check" aria-hidden="true"></i>
      <span>Thank you for signing up!</span>
    </div>
  </div>     



<div class="ajax-lookbook-modal">
  <div class="overlay"></div>
  <div class="ajax-modal-content">
    <a href="javascript:void(0)" data-close-lookbook-modal class="close close-modal btn">
      <i class="fa fa-times"></i>
    </a>
    <div class="lookbook-content"></div>
  </div>  
</div>


<div class="ajax-error-modal modal">
  <div class="modal-inner">
    <div class="ajax-error-title">Error</div>
    <div class="ajax-error-message"></div>
  </div>
</div>
<div class="ajax-success-modal modal">
  <div class="overlay"></div>
  <div class="content"> 


    <div class="ajax-left">    
      <p class="added-to-cart info">Product successfully added to your shopping cart</p>
      <p class="added-to-wishlist info">translation missing: en.products.wishlist.added_to_wishlist</p>
      <img class="ajax-product-image" alt="modal window" src="../index.html" />
      <div class="ajax-cart-desc">
        <h3 class="ajax-product-title"></h3>
        <span class="ajax_price"></span>
        <p>Qty:&nbsp;<span class="ajax_qty"></span></p>
      </div>
    </div>
    <div class="ajax-right"> 

      <p>There are <span class="ajax_cartCount"></span>&nbsp;item(s) in your cart</p>
      <span class="ajax_cartTotal"></span>
      <button class="btn continue-shopping" onclick="javascript:void(0)">Continue shopping</button>
      <div class="success-message added-to-cart"><a href="../cart.html" class="btn"><i class="fas fa-shopping-cart"></i>View Cart</a> </div>  
      <!--  <div class="success-message added-to-wishlist"> <a href="/pages/wishlist" class="btn"><i class="fa fa-heart"></i>View Wishlist</a></div>                -->
    </div>
    <a href="javascript:void(0)" class="close-modal"><i class="far fa-times-circle"></i></a>
  </div>    
</div>

  <script>
  window.show_auto_currency = false;
</script>

	
<script src="../../cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/jquery.currencies.mind3d7.js?v=9316595392847367790" type="text/javascript"></script>
		
<script>      
    // Pick your format here:  
    // Can be 'money_format' or 'money_with_currency_format'
    Currency.format = 'money_format';

    var shopCurrency = 'INR';
if(shopCurrency != 'INR'){
	window.location = window.location.href + '?currency='+shopCurrency;
}
    /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
    Currency.moneyFormats[shopCurrency].money_with_currency_format = "Rs. {{amount}}";
    Currency.moneyFormats[shopCurrency].money_format = "Rs. {{amount}}";

    var cookieCurrency = Currency.cookie.read();

    // Fix for customer account pages 
    $('span.money span.money').each(function() {
        $(this).parent('span.money').removeClass('money');
    });

    // Add precalculated shop currency to data attribute 
    $('span.money').each(function() {
        $(this).attr('data-currency-INR', jQuery(this).html());
    });

        // Select all your currencies buttons.
    var currencySwitcher = $('#currencies'),
        currencyItem = currencySwitcher.find('[data-currency]');

    // When the page loads.
    if (cookieCurrency == null || cookieCurrency == shopCurrency) {
        Currency.currentCurrency = shopCurrency;
    }
    else {
      	var flag = 0;
        currencyItem.each(function(){
          if(cookieCurrency == $(this).data('currency')){
            flag = 1;
          }
        });
        if(flag == 0 ){
          cookieCurrency = shopCurrency;
        }
        Currency.currentCurrency = cookieCurrency;
        currencySwitcher.find('.active').removeClass('active').parent().find('[data-currency=' + Currency.currentCurrency + ']').addClass('active');
        Currency.convertAll(shopCurrency, cookieCurrency);	
    };
        
    currencyItem.on('click', function(e) {
        e.preventDefault();
        
        if($(this).hasClass('active')) return false;
        
        currencyItem.removeClass('active');
        
        $(this).addClass('active');
        
        var label = $('#currencies').prev('[data-currency-label]');
        
        if(label.length && label.is(':visible')) {
        var item = $(this).html();
        
        label.html(item);
        
        currencySwitcher.slideUp(300);
        };
        
        var cur = $(this).attr('data-currency');
        
        cur != Currency.currentCurrency && Currency.convertAll(Currency.currentCurrency, cur);
    });

    $('body').on('refreshCurrency', function() {
        Currency.convertAll(shopCurrency, jQuery("#currencies .active").attr('data-currency'));
    });      
</script>
  
<div class="newsletterwrapper" data-newsletter id="email-modal" style="display:none">
  <div class="modal-overlay"> </div>
    <div class="window-content">
      <div class="window-box">
        <div class="window-box-bg">
          
          <div class="newsletter-title">
            <p class="title">Huge Discount</p>
          </div>
          
          <h3 class="offer-text">Join our Newsletter</h3> 
          <p class="message">Get upto <span>20%</span> Off on your order.</p>
          
          <div id="mailchimp-email-subscibe">
            <div id="mc_embed_signup">
              
<form method="post" action="https://yummi-theme.myshopify.com/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />

  <input type="email" placeholder="Enter your email id" value="" placeholder="Email address" name="contact[email]" class="mail" aria-label="Email address" required="required">
  <input type="hidden" name="contact[tags]" value="newsletter">
  <input type="submit" class="btn"  value="Submit"  id="subscribe" >



</form>  

            </div>   
            <label for="dismiss">
              <span></span>
            </label>
          </div>
          
        </div>  
        <a class="close-window" title="Close">
          <svg aria-hidden="true" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
        </a>
      </div>
    </div>
 
</div>
     
  <div class="loading-modal compare_modal">Loading</div>
<div class="ajax-success-compare-modal compare_modal" id="moda-compare" tabindex="-1" role="dialog" style="display:none">
  <div class="overlay"> </div>
    <div class="modal-dialog modal-lg">
      <div class="modal-content content" id="compare-modal">
        <div class="modal-header">

          <h4 class="modal-title">Compare Products</h4>
        </div>
        <div class="modal-body">
          <div class="table-wrapper">
            <table class="table table-hover">
              <thead>
                <tr class="th-compare">
                  <th></th>
                </tr>
              </thead>
              <tbody id="table-compare">

              </tbody>

            </table>
           </div>
        </div>
        <div class="modal-footer">
           <a href="javascript:void(0)" class="close-modal"><i class="far fa-times-circle"></i></a>
        </div>         
      </div>
    </div>
  </div>


  
  <div id="shopify-section-someone-purchased" class="shopify-section">

<style>
@media (min-width: 1200px) {
    .product-notification{
        
        right: 15px;
        
    }
} 
</style>








<style>
    @media (max-width: 767px) {
        .product-notification {
            display:none;
        }
    }
</style>
</div>
  
  <div id="shopify-section-GDPR-modal" class="shopify-section">
<div id="accept-cookies" class="cookieMessage"> 
  <div class="block-cookies">
    <div class="des">
      <p>The cookie settings on this website are set to 'allow all cookies' to give you the very best experience. Please click Accept Cookies to continue to use the site.

      
      <a target="_blank" href="https://policies.google.com/" class="notification-cookies privacy-link">
        privacy policy
      </a>
      
      </p>  
    </div>

    
    <div class="group-action-links">     
      <a href="#" class="notification-cookies accept_cookies_link btn" data-accept-cookie>
        accept
        <span class="icon">✔</span>
      </a>      
    </div>
    
  </div>   
</div>

<style>

  #accept-cookies .block-cookies {
    color:#ffffff;
  }

  #accept-cookies .privacy-link {
    color:#ffffff;
  }
  #accept-cookies .privacy-link:hover {

    color:#fec803;
  }

  #accept-cookies{
    background: #c00a27;
  }
  
  #accept-cookies .btn { background:#000000; color:#ffffff; }
  #accept-cookies .btn:hover { background:#fec803; color:#3a3a3a; }
    
  @media (min-width: 1200px) {
    #accept-cookies{
      

      left:0;width: 100%;
      max-width: 100%;
      
    }

    #accept-cookies .group-action-links {   text-align:right;   }

  } 

</style>

<script>
  $(document).ready(function() {
    var gdprCookie = $('#accept-cookies');

    gdprCookie.show();

    if ($.cookie('cookieMessage') == 'closed') {
      gdprCookie.remove();
    }

    gdprCookie.find('[data-accept-cookie]').on('click', function(e) {
      e.preventDefault();
      gdprCookie.remove();
      $.cookie('cookieMessage', 'closed', {expires: 1, path:'/'});
    });
  })
</script>



</div>
  
  
  
  <div id="slidedown-cart"> 
      <div class="cart-title">
        <a href="javascript:void(0)" title="Close" class="close-cart close">
          <svg aria-hidden="true" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
          <span>
            Close
          </span>
        </a>

        <h5>
          Shopping cart :
        </h5>
      </div>

      <div class="no-items">
        <p class="cart_empty">
          No Items in cart
        </p>
        <div class="text-continue">
          <a class="btn btn-continue"  href="#">
            Continue shopping
          </a>
        </div>
      </div>


      <div class="has-items">
        <ul class="mini-products-list">  
          
        </ul>

        <div class="summary">                
          <div class="total">
            <span class="label">
              <span>
                Total:
              </span>
            </span>
            <span class="price">
              Rs. 0.00
            </span> 
          </div>
        </div>

        
        <div class="actions">
          <button class="btn btn-checkout" onclick="window.location='../cart.html'">
            Proceed to Checkout
          </button>
          <a class="btn btn-view-cart" href="../cart.html">
            View Cart
          </a>      
        </div>
        


      </div>
    </div>
  
  <div class="wrap-overlay"></div>
  <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>

<!-- Mirrored from yummi-theme.myshopify.com/account/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 14:12:57 GMT -->
</html>