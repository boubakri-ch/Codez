<?php
include ("../core/panierOps.php");

 session_start();

 if(!isset($_SESSION['unique_id'])){
     
         

          header("location:account/page_login.php");
         
         
   }
    
   

   if(isset($_SESSION['fname'])&& isset( $_SESSION['lname']) && isset($_SESSION['unique_id']))
  
   {
       $nom=$_SESSION['fname'];
       $prenom=$_SESSION['lname'];
       $unique_id=$_SESSION['unique_id'];
   }
 
 
   $adresse=555;

$panier= new panierOps();
$liste=$panier->afficher_produit_panier($_SESSION['unique_id']);
$somme=$panier->somme($_SESSION['unique_id']);
 ?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from yummi-theme.myshopify.com/cart by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 14:14:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <!-- Basic page needs ================================================== -->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  
  <link rel="shortcut icon" href="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/favicon31d7.png?v=13011873669817478531" type="image/png" />
  
  <!-- Title and description ================================================== -->
  <title>
    Your Shopping Cart &ndash; Yummi-theme
  </title>
  
  <!-- Social meta ================================================== -->
  

  <meta property="og:type" content="website">
  <meta property="og:title" content="Your Shopping Cart">
  <meta property="og:url" content="cart.html">
  
  <meta property="og:image" content="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/logo6378.png?v=16169813535851071673">
  <meta property="og:image:secure_url" content="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/logo6378.png?v=16169813535851071673">
  


<meta property="og:site_name" content="Yummi-theme">



<meta name="twitter:card" content="summary">





<?php include_once "header_panier.php";?>


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
  window.loading_url = "../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/loading9491.gif?v=9255329245202621775";     
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
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 26759790615,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "cart"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
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
<script id="__st">var __st={"a":26759790615,"offset":-14400,"reqid":"782f3368-50f8-45bd-884c-e6311e053937","pageurl":"yummi-theme.myshopify.com\/cart","u":"1bad0bedc50f"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'INR';
var meta = {"page":{},"page_view_event_id":"24c0dab5287bd6fc39369f23fb8b256db1f27930f9fe858969690ad983ddf068","cart_event_id":"989e33b79289475be841169ff9eeb529857d0c8eead6fbdba81db00c314c2ee9"};
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
      scriptFallback.src = '../cdn.shopify.com/s/trekkie.storefront.9eb212b15c3b6eb17e411acdf9adea4f6c40523e.min.js';
      first.parentNode.insertBefore(scriptFallback, first);
    };
    script.async = true;
    script.src = '../cdn.shopify.com/s/trekkie.storefront.9eb212b15c3b6eb17e411acdf9adea4f6c40523e.min.js';
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
        window.BOOMR.application = "storefront-renderer";
        window.BOOMR.themeName = "Timzee";
        window.BOOMR.themeVersion = "1.0";
        window.BOOMR.shopId = 26759790615;
        window.BOOMR.themeId = 80957079575;
        window.BOOMR.url =
          "../cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
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
          "24c0dab5287bd6fc39369f23fb8b256db1f27930f9fe858969690ad983ddf068"
        );
      

    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
    var token = match? match[1]: undefined;
    if (!hasLoggedConversion(token)) {
      setCookieIfConversion(token);
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "../cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-619dded2976e732c6d885de654a8af094bc28e3148dfe9ab8b320781402596b6.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script>!function(e){e.addEventListener("DOMContentLoaded",function(){var t=['form[action^="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]'].join(",");null!==e.querySelector(t)&&(window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"},(t=e.createElement("script")).setAttribute("src","../cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.1/index.js"),e.body.appendChild(t))})}(document);</script>
<script integrity="sha256-2KbxRG1nAJxSTtTmhkiAC6kILrdVSO4o4QUDMcvnuig=" data-source-attribution="shopify.loadfeatures" defer="defer" src="../cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-d8a6f1446d67009c524ed4e68648800ba9082eb75548ee28e1050331cbe7ba28.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="../cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<link rel="stylesheet" media="screen" href="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/compiled_assets/styles18a4.css?5154">
<script id="sections-script" data-sections="header-model-3" defer="defer" src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/compiled_assets/scripts18a4.js?5154"></script>

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

<body id="your-shopping-cart" class="template-cart  others ">
  <div id="shopify-section-top-countdown-bar" class="shopify-section index-section"><div data-section-id="top-countdown-bar" data-section-type="top-countdown-bar" class="top-countdown-bar"> 
  
</div>

</div>  
   
   	



<div class="wrapper-header">
  
<div id="SearchDrawer" class="search_type3 ajaxsearch search-bar drawer drawer--top search-bar-type-3">
  <div class="search-bar__table search-box">

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
        
       
         
          
        <li class="header_currency mobile-currency">
          <ul class="tbl-list">
            <li class="currency dropdown-parent uppercase currency-block">
 
	

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
 

   
              <div class="menubar-section order-header">
                <div class="desktop-megamenu">     
                  <div id="shopify-section-adv-navigation" class="shopify-section">
<div class="wrapper-navigation" data-sticky-pc>
    
    
    <div class="main-menu jas-mb-style">
        
            <div class="row">
                <div class="col-12">
                    <div class="mb-area">
                     
                      
                      
                  
  


 








 
                      
                      
                 
                      
                        <nav class="nav-bar" role="navigation">
                            
 
 
 
  
   
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

 
        </a>
      </div>
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

  
  

<nav class="breadcrumb" aria-label="breadcrumbs">
 <div class="container-bg"> 
  
  
  <h1>Your Shopping Cart</h1>
  <a href="index.html" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  <span>Your Shopping Cart</span>
  

  
 </div>  
</nav>
    
  <main class=" main-content  ">  
  
  <div class="dt-sc-hr-invisible-large"></div>
  
    
    
    
    
  <div class="wrapper"> 
    <div class="grid-uniform">
      <div class="grid__item">  
        
        <div class="container">
          
          

 
    <!-- Cart Items -->
    <div class="container cart">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
       
         <tr>
         <?php
         if($liste->rowCount()==0)
         {
           echo "<span style=color:red;>panier vide !!!</span>";
         }
         else

			    	foreach($liste as $panier){

          ?>
          <td>
       
            <div class="cart-info">
            
              <div>
                <p> Nom :<?php echo $panier['nom']?></p>
        
                <span>Price: <?php echo $panier['prix_unit']?>TND</span>
                <br />
                <a href="supp_panier.php?id=<?php echo $panier['code_panier']?> ">remove</a>
             </div>
          </td>
          
          <td>
           <a href="dec_q_p.php?id=<?php echo $panier['code_panier']?>" style=" text-align: center;display:center;width: 20px;height: 20px;border: 1px solid red; margin-top:-35px;">-
         </a>
          <input type="number" id="quantity" name="quantity" value="<?php echo $panier['quantite']?>" min="1"style="align:center;width: 100px;height: 30px; margin-left: auto;margin-right: auto;margin-top:-30px;" >
          <a href="inc_q_p.php?id=<?php echo $panier['code_panier']?>" style=" text-align: center;display:center;width: 20px;height: 20px;border: 1px solid red; margin-top:-35px;">
            +
           </a>
          </td>

 
          <td> <span> <?php echo $panier['prix']  ?> TND </span></td>
 
        </tr>
        <?php } ?>

      </table>
     
        <table>
        <?php 
        foreach($somme as $s)
        { ?>
        
          <tr>
            <td>Total: <?php echo $s['somme'] ?></td>
          </tr>
     <?php } ?>
       

        <a href="ajouter_commande.php?id=<?php echo $_SESSION['unique_id']?>" class="checkout btn">Confirmer votre panier</a>
        <a href="vider_panier.php?id=<?php echo $_SESSION['unique_id'] ?>" class="checkout btn">Vider panier</a>

      </div>
    </div>



<script>
  /*jQuery(".button").on("click", function() {
 
    var oldValue = jQuery("#quantity").val(),
        newVal = 1;

    if (jQuery(this).text() == "+") {
      newVal = parseInt(oldValue) + 1;
    } else if (oldValue > 1) {
      newVal = parseInt(oldValue) - 1;
    }

    jQuery(".product-single #quantity").val(newVal);
    updatePricing();
    
  });
  $('.qtyplus1').on('click', function(e){
    e.preventDefault();
    var currentVal = parseInt($(this).parent().find('input[name="updates[]"]').val());
    if (!isNaN(currentVal)) {
      $(this).parent().find('input[name="updates[]"]').val(currentVal + 1);
    } else {
      $(this).parent().find('input[name="updates[]"]').val(1);
    }
  });

  $(".qtyminus1").on('click', function(e) {

    e.preventDefault();
    var currentVal = parseInt($(this).parent().find('input[name="updates[]"]').val());
    if (!isNaN(currentVal) && currentVal > 1) {
      $(this).parent().find('input[name="updates[]"]').val(currentVal - 1);
    } else {
      $(this).parent().find('input[name="updates[]"]').val(1);
    }
  });
    //update price when changing quantity
     
  //update price when changing quantity
  function updatePricing() {
   var oldValue = parseInt(jQuery('.product-single  #quantity').val());
     var unitPriceTextMatch =     parseInt(jQuery('.product-single  #ProductPrice').val());

    alert (unitPriceTextMatch);
   }


  
  jQuery('.product-single #quantity').on('change', updatePricing);
  
  
  */
</script>
          
        </div>  
        
      </div>
    </div> 
  </div>
  
  <div class="dt-sc-hr-invisible-large"></div>
      
  </main>  
    
  


<div id="shopify-section-footer-model-9" class="shopify-section"><div data-section-id="footer-model-9"  data-section-type="Footer-model-9" class="footer-model-9">
  <footer class="site-footer" style="background-color:rgba(0,0,0,0); background-image:url('../cdn.shopify.com/s/files/1/0267/5979/0615/files/footerb856.jpg?v=1589447554');background-repeat:no-repeat;background-size:cover;background-position:center;">      
    <div class="container">
      <div class="grid-uniform">         

         
          

          

          

        

         
          
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">   
          
          <h4 style="color:#ffffff;">Help</h4>
          
          <ul class="site-footer__links">
            
            <li><a style="color:#ffffff;"  href="search.html">Search</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/contact-us.html">Help</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/about.html">Information</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/about.html">Privacy Policy</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/shipping-details.html">Shipping Details</a></li>
            
          </ul>          
        </div>
         
          
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">          
          
          <h4 style="color:#ffffff;"> Support</h4>
          
          <ul class="site-footer__links">
            
            <li><a style="color:#ffffff;"  href="pages/contact-us.html">Contact Us</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/about.html">About Us</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/contact-us.html">Careers</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/shipping-details.html">Refund & Return</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/shipping-details.html">Deliveries</a></li>
            
          </ul>         
        </div>
        

          
        <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--one-half">          
          
          <h4 style="color:#ffffff;">Information</h4>
          
          <ul class="site-footer__links">
            
            <li><a style="color:#ffffff;"  href="search.html">Search Terms</a></li>
            
            <li><a style="color:#ffffff;"  href="search.html">Advanced Search</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/faqs.html">Help & Faq's</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/contact-us.html">Store Location</a></li>
            
            <li><a style="color:#ffffff;"  href="pages/shipping-details.html">Order & Return </a></li>
            
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
                <li><a href="#" target="_blank"><img src="../cdn.shopify.com/s/files/1/0267/5979/0615/files/store-3_smalle056.png?v=1589449607" alt="Download our app" /></a></li>
                <li><a href="#" target="_blank"><img src="../cdn.shopify.com/s/files/1/0267/5979/0615/files/store-2_small0407.png?v=1589449622" alt="Download our app" /></a></li>
                <li><a href="#" target="_blank"><img src="../cdn.shopify.com/s/files/1/0267/5979/0615/files/store-1_smalle84b.png?v=1589449632" alt="Download our app" /></a></li>
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
    background-image:url(../cdn.shopify.com/s/files/1/0267/5979/0615/files/divider_1_1920X0397.png?v=1589525274) ;
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
  
<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/inview-donut-easing91ee.js?v=11410926627178193725" type="text/javascript"></script>
<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/theme1dfc.js?v=1538060098320426863" type="text/javascript"></script>
<script src="../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
<script src="../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" type="text/javascript"></script>    
<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/history-to-light18d8.js?v=17945962704583084051" type="text/javascript"></script>
<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/footer7644.js?v=15592521103013119153" type="text/javascript"></script>
<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/shop13af.js?v=1254560344816304699" type="text/javascript"></script>  


<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/wow6fc4.js?v=8607965041847799793"></script>

<script type="text/javascript">
  $('.quick-view .close-window').on('click', function() {  			
    $('.quick-view').switchClass("open-in","open-out");
  });
</script>





<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/ajax-search-scriptb2a6.js?v=4970769524936498000"></script>




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
      <img class="ajax-product-image" alt="modal window" src="index.html" />
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
      <div class="success-message added-to-cart"><a href="cart.html" class="btn"><i class="fas fa-shopping-cart"></i>View Cart</a> </div>  
      <!--  <div class="success-message added-to-wishlist"> <a href="/pages/wishlist" class="btn"><i class="fa fa-heart"></i>View Wishlist</a></div>                -->
    </div>
    <a href="javascript:void(0)" class="close-modal"><i class="far fa-times-circle"></i></a>
  </div>    
</div>

  <script>
  window.show_auto_currency = false;
</script>

	
<script src="../cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="../cdn.shopify.com/s/files/1/0267/5979/0615/t/3/assets/jquery.currencies.mind3d7.js?v=9316595392847367790" type="text/javascript"></script>
		
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
          <button class="btn btn-checkout" onclick="window.location='cart.html'">
            Proceed to Checkout
          </button>
          <a class="btn btn-view-cart" href="cart.html">
            View Cart
          </a>      
        </div>
        


      </div>
    </div>
  
  <div class="wrap-overlay"></div>
</body>

<!-- Mirrored from yummi-theme.myshopify.com/cart by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 14:14:02 GMT -->
</html>