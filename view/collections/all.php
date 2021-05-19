
<?php   

    require "C:/wamp64/www/web/core/produitOps.php";
session_start();

    $produit=new produitOps();
    if(isset($_GET['sort_by']))
    {
      if($_GET['sort_by']=="A-Z")
      {
    $liste_produit=$produit->afficher_produit_nom();	
      }  
      else
      if($_GET['sort_by']=="Z-A")
      {
    $liste_produit=$produit->afficher_produit_nom_desc();	
      } 
      else
      if($_GET['sort_by']=="prix_asc")
      {
    $liste_produit=$produit->afficher_produit_prix_asc();	
      } 
      else
      if($_GET['sort_by']=="prix_desc")
      {
    $liste_produit=$produit->afficher_produit_prix_desc();	
      } 

  }
  else
  {
    $liste_produit=$produit->afficher_produit();	

  }
       // header("location:listeMaisons.php");

       $sql="select * from categorie";
       $db = config::getConnexion();
       $liste_cat=$db->query($sql);
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

<div class="right-header header-items" data-append-header-pc>
                   
  
  <div class="appentMb wide--hide" data-append-header-mb>
    <ul class="menu_bar_right">

             
            <li class="wishlist">            
              <a  href="../pages/wishlist.html" title="Wishlist"><span class="wide--hide">Wishlist</span><i class="fas fa-heart post-large--hide large--hide medium-down--hide"></i></a>            
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
        max-height
    };

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
  
<a  href="../cart.php" title="Wishlist"><span class="wide--hide">cart</span><i class="fas fa-shopping-bag"></i></a>            


    
    
    
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
                      <a href="../logout.php" title="Log in"> <i class="fa fa-sign-in-alt icons" aria-hidden="true"></i> Log out</a>
                    </li>
                    <li>
                      <a href="../account/register.php" title="Create account">  <i class="fas fa-user" aria-hidden="true"></i> Create account</a>
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

  
  

<nav class="breadcrumb" aria-label="breadcrumbs">
 <div class="container-bg"> 
  
   
  <h1>Products</h1>
  <a href="../index.html" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  
  <span>Products</span>

    
  
  
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
  
  <h4>
    Category
  </h4>  
  
  
  <ul class="product-categories dt-sc-toggle-frame-set">
    
                 
    
  <?PHP
			    	foreach($liste_cat as $cat){
 $sql="SELECT `code_produits`, `nom` FROM `produit` WHERE code_categorie=".$cat['code_categorie'];
              $db = config::getConnexion();
              $liste_p=$db->query($sql);
			    ?>     
    
    <li class="cat-item cat-item-39 cat-parent first">
      <i></i>

      <a class="" href="prod_cat.php?libelle=<?php echo $cat['libelle'] ; ?>"><?php echo $cat['libelle'] ; ?></a> <span class="dt-sc-toggle"></span>

              
      <ul class="children dt-sc-toggle-content ">
        
         <?php 
         foreach($liste_p as $p)
         {
           ?>
        <li class="second">
          <i></i>             
          <a class="" href="../products/detail.php?id=<?PHP echo $p['code_produits'];?>">    <?php echo $p['nom'] ?></a>
          
          
          

        </li>
        <?php } ?>
      </ul>
      
    </li>
    <?php } ?>
    
    
  </ul>
  
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
    <div class="filters-toolbar__view-as toolbar-col" data-view-as>
      <label>
        View:
      </label>

      <div class="view-mode">
        <span class="icon-mode icon-mode-list" data-col="1"></span>
        <span class="icon-mode icon-mode-grid grid-2" data-col="2"></span>
        <span class="icon-mode icon-mode-grid grid-3 active" data-col="3"></span>
        <span class="icon-mode icon-mode-grid grid-4" data-col="4"></span>
        <span class="icon-mode icon-mode-grid grid-5" data-col="5"></span>
      </div> 
    </div>
    </div>    
    
    
    
    
    <div class="grid__item wide--five-tenths post-large--six-tenths large--six-tenths right">
       
    
    <div class="filters-toolbar__limited-view toolbar-col" data-limited-view>
      <label>
        Show:
      </label>

      <div class="limited-view">
        <div class="label-tab" data-toggle="dropdown" aria-expanded="false">
            <span name="paginateBy" class="label-text">
            
                12
            
            </span>

            <span class="icon-dropdown">
                <i class="fa fa-chevron-down"></i>
            </span>
        </div>

        <ul class="dropdown-menu">
          <li >
            <span data-value="8"> 
              8
            </span>
          </li>
          <li class="active">
            <span data-value="12"> 
              12
            </span>
          </li>
          <li >
            <span data-value="16">
              16
            </span>
          </li>
          <li >
            <span data-value="20">
              20
            </span>
          </li>
          <li >
            <span data-value="24">
              24
            </span>
          </li>
          <li >
            <span data-value="30">
              30
            </span>
          </li>
          <li >
            <span data-value="50">
              50
            </span>
          </li>
        </ul>
      </div>
    </div>
    
      
      
      <div class="filter-sortby toolbar-col">
        <label for="sort-by">Sort by:</label> 
        <input type="text" id="sort-by">
        <div class="sorting-section">
          <button class="btn dropdown-toggle" data-toggle="dropdown">            
            <span>Featured</span>
          </button>

          <ul class="dropdown-menu" role="menu">
            <li><a href="prix_asc">Price, low to high</a></li>
            <li><a href="prix_desc">Price, high to low</a></li>
            <li><a href="A-Z"> A-Z</a></li>
            <li><a href="Z-A">Z-A</a></li>
           
          </ul>
        </div>
      </div>
      
      
    </div>

  </div>



          
      <div class="product-collection products-grid-view products-grid grid-uniform">
                            
          
          






 
      <?PHP
      //product code
			    	foreach($liste_produit as $product){
              
			    ?>
<div class="grid__item item-row wide--one-third post-large--one-third large--one-third medium--one-half small--one-half " id="product-4439049469975" >
<div class="products product-hover-11">
    <div class="product-container">  
      
    <a href="../products/detail.php?id=<?PHP echo $product['code_produits'];?>" class="grid-link">            
        
        
        
         

        <div class="ImageOverlayCa"></div>
        
        
        <a href="../products/detail.php?id=<?PHP echo $product['code_produits'];?>" class="grid-link">  
          <img  <?PHP echo 'src="data:image/;base64,'.base64_encode($product['image_produit']).'"height="480px" width="4800px"';?> class="featured-image" alt="Beef Steaks">
        </a>
        
    
        
      </a>
    
      <div class="product_right_tag  ">
          
        
      </div>
    
      <div class="ImageWrapper">
        <div class="link_icon">
          
          
    
    <ul class="sizes-list">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </ul>
    
                    
        </div>
    
        <div class="product-button"> 
                 
          <a title="Quick View" href="javascript:void(0)" id="beef-steaks" class="quick-view-text">                      
            <i class="far fa-eye"></i> 
          </a>       
          
    
          
             
                    
          
          <form  action="https://yummi-theme.myshopify.com/cart/add" method="post" class="gom variants clearfix" id="cart-form-4439049469975">                                    
            <input type="hidden" name="id" value="31491711729687" />  
            <a class="add-cart-btn" title="Add to Cart">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </form>  
              
          
           
    
                 
          <div class="add-to-wishlist">     
    <div class="show">
    <div class="default-wishbutton-beef-steaks loading"><a title="Add to wishlist" class="add-in-wishlist-js" href="beef-steaks.html"><i class="fas fa-heart"></i><span class="tooltip-label">Add to wishlist</span></a></div>
    <div class="loadding-wishbutton-beef-steaks loading" style="display: none; pointer-events: none"><a class="add_to_wishlist" href="beef-steaks.html"><i class="fas fa-spinner"></i></a></div>
    <div class="added-wishbutton-beef-steaks loading" style="display: none;"><a title="View Wishlist" class="added-wishlist add_to_wishlist" href="../pages/wishlist.html"><i class="fas fa-heart"></i><span class="tooltip-label">View Wishlist</span></a></div>
    </div>
    </div>
         
           
        </div>
      </div>
    </div>
    
    <div class="product-detail">
       <span class="shopify-product-reviews-badge" data-id="4439049469975"></span> 
      <a href="../products/detail.php?id=<?PHP echo $product['code_produits'];?>" class="grid-link__title"> <?php echo $product['nom'] ?></a>       
      <div class="grid-link__meta">
        
    
    
    <div class="product_price">          
    <div class="grid-link__org_price" id="ProductPrice">
    <?php echo $product['prix']?>TND
    </div>
    </div>
    
    
    
     
      </div>      
      
      
    </div>
    </div>
    </div>
          
          
    
      



    <?PHP
				}
			?>




      
                  
        </div>
      </div>
     
      <div class="text-center padding">
        

<div class="infinite-scrolling">
  <a href="all4658.html?page=2" title="Show more" class="btn">Show more</a>   
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
  
  
  
   
  
 </body>

<!-- Mirrored from yummi-theme.myshopify.com/collections/all by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 14:09:16 GMT -->
</html>