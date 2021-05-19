
<?php   
require "C:/wamp64/www/web/core/menuOps.php";
$db = config::getConnexion();
session_start();
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
$menu=new menuOps();
$liste_menu=$menu->affichermenu($start,$perpage);
$sql_2="select count(menu.id) as nb from menu";
$db = config::getConnexion();
$count=$db->query($sql_2);	
// header("location:listeMaisons.php");
?>

<!doctype html>
<?php
if(isset($_SESSION['unique_id']))
{
include_once "../header_front_s.php";
 }
else
include_once "../header_front.php";

?>

  
  

<nav class="breadcrumb" aria-label="breadcrumbs">
 <div class="container-bg"> 
  
   
  <h1>Recette</h1>
  <a href="../index.php" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  
  <span>Recette</span>

    
  
  
 </div>  
</nav>
    
  <main class=" main-content  ">  
  
  <div class="dt-sc-hr-invisible-large"></div>
  
    
    
    
    
  <div class="wrapper"> 
    <div class="grid-uniform">
      <div class="grid__item">  
        
        <div class="container">
          
          <div class="grid__item collection-template">
  <div class="collection-products position-change">
     <div class="grid__item  wide--one-quarter post-large--one-quarter   left-sidebar ">
  <div class="col-sidebar" data-sidebar>
    <div class="close-sidebar">
      <svg aria-hidden="true" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
    </div>

    <div class="sidebar collection_sidebar mobileToggle "> 
      <div id="shopify-section-sidebar-category" class="shopify-section"> 
<div class="widget widget_product_categories">
  
  
  
</div>







</div>   
      
      <div class="refined-widgets">
        <a href="javascript:void(0)" class="clear-all" style="display:none">
          Clear All
        </a>
      </div>
      <div class="sidebar-block">
        <div id="shopify-section-sidebar-colors" class="shopify-section">  








</div>
        <div id="shopify-section-sidebar-tag-filters" class="shopify-section">   
      





 





</div>
      </div>
      <div id="shopify-section-sidebar-bestsellers" class="shopify-section">
 
 






<script type="text/javascript">
  $(document).ready(function(){
    $(".top-products.sidebar-bestsellers").owlCarousel({ 
      items:1,
      loop:false,      
      nav:true,       
      dots: false,
      navContainer: ".top_products_nav.sidebar-bestsellers",
      navText: ['<a class="prev btn active"><i class="fa fa-angle-left"></i></a>','<a class="next btn"><i class="fa fa-angle-right"></i></a>']
      });
  });

</script></div>  
      <div id="shopify-section-sidebar-banner" class="shopify-section">
 




<script type="text/javascript">
$(document).ready(function(){
     $(".promo-carousel-sidebar-banner").owlCarousel({ 
        loop:false,
       // margin:10,
        nav:false,       
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
 
  });
});
      
</script>
</div>  
    </div>
  </div>
</div>
    <div class="collection_grid_template grid__item  wide--three-quarters post-large--three-quarters ">
    <div id="shopify-section-collection-template" class="shopify-section">

<div class="grid__item">        
  <div class="collection-grid">
    <div class="grid-uniform grid-link__container col-main" data-section-id="collection-template" data-section-type="collection-template">            
        
      
      
  <div class="toolbar">

    
    <div class="sidebar-label">
      <div class="sidebar-button">        
        <div class="tags-filter">
          <button id="showTagsFilter" class="btn tag-fillter"><i class="fas fa-filter"></i></button>
         <!-- <button id="showTagsFilter2" class="btn tag-fillter"><i class="fa fa-sliders"></i></button> -->
        </div>
      </div>
    </div>
     
    
    
    
    <div class="view-mode grid__item wide--one-third post-large--four-tenths large--four-tenths">          
  
    <table class="table" border=1 align = 'center' id="tab_menu">
        
        <tr>

            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Ingredient</th>
            


        </tr>

        <?PHP
            foreach($liste_menu as $menu){
               


        ?>
            <tr>
                <td><?PHP echo $menu['id']; ?></td>
                <td><?PHP echo $menu['nom']; ?></td>
                <td><?PHP echo $menu['prix']; ?></td>
                <td><?PHP echo $menu['ingredient']; ?></td>
             	
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
                echo "<a   href='?page=$i'>$i</a>";
            }
            ?>
      </div>
      
        
    </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>   
          
        </div>  
        
      </div>
    </div> 
  </div>
  
  <div class="dt-sc-hr-invisible-large"></div>
      
  </main>  
    
  


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
      <a style="color:red;" class="icon-fallback-text youtube" target="blank" href="#" onmouseover="this.style.color='';" onmouseout="this.style.color='';" title="YouTube">
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
</body>

<!-- Mirrored from yummi-theme.myshopify.com/collections/all by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 14:09:16 GMT -->
</html>