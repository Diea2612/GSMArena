<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';

// Declare reactive references
const data = ref([]);
const loading = ref(true);
const error = ref(null);

// Declare reactive properties for email and password
const email = ref('');
const password = ref('');

// Function to fetch data from an API
const fetchData = async () => {
  try {
    const response = await axios.get('https://api.example.com/data');
    data.value = response.data; // Store the fetched data
  } catch (err) {
    error.value = 'An error occurred while fetching data: ' + err.message;
  } finally {
    loading.value = false;
  }
};

// Use onMounted to trigger the data fetch when the component is mounted
onMounted(() => {
  fetchData();
});

// Handle form submission
const submitForm = async () => {
  try {
    const response = await axios.post('https://www.gsmarena.com/login.php3', {
      sEmail: email.value,
      sPassword: password.value,
      sSource: 'MA=='
    });
    console.log('Login successful:', response.data);
  } catch (err) {
    console.error('Login error:', err.message);
  }
};

</script>



<template>
<div id="uniccmp" data-nosnippet=""></div>



<script type="text/javascript" src="./Compare phones, smartphones, tablets - GSMArena.com_files/misc.js.download"></script>



<header id="header" class="row open slide headroom--not-top slide--up">
<div class="wrapper clearfix">
<div class="top-bar clearfix">
<!-- HAMBURGER MENU -->
<button type="button" role="button" aria-label="Toggle Navigation" class="lines-button minus open">
<span class="lines"></span>
</button>
<!-- /HAMBURGER MENU -->



<!-- LOGO -->
<div id="logo">
<a href="https://www.gsmarena.com/">

<object type="image/svg+xml" data="./Compare phones, smartphones, tablets - GSMArena.com_files/logo.svg"><img src="./Compare phones, smartphones, tablets - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">
    
    <span id="quick-search-button" class="sweezy-custom-cursor-hover" style="null;cursor: url(&quot;data:image/png;base64,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&quot;) 5 8, pointer !important;">
      <input type="submit" value="Go">
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>
    

<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More news results</a></li></ul></div></div><div class="search-buttons"><a class="go" href="https://www.gsmarena.com/compare.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
</div>


<div id="social-connect">
<a href="https://www.gsmarena.com/tipus.php3">
  <i class="head-icon icon-tip-us icomoon-liga"></i><br><span class="icon-count">Tip us</span>
</a>
<span class="bar"></span>

<a href="https://www.youtube.com/channel/UCbLq9tsbo8peV22VxbDAfXA?sub_confirmation=1" class="yt-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-soc-youtube icomoon-liga"></i><br><span class="icon-count">1.7m</span>
</a>

<a href="https://www.instagram.com/gsmarenateam/" target="_blank" rel="noopener">
  <i class="head-icon icon-instagram icomoon-liga"></i><span class="icon-count">126k</span>
</a>

<a href="https://www.gsmarena.com/rss-news-reviews.php3">
  <i class="head-icon icon-soc-rss2 icomoon-liga"></i><br><span class="icon-count">RSS</span>
</a>

<a href="https://www.arenaev.com/" target="_blank" rel="noopener">
<i class="head-icon icon-specs-car icomoon-liga"></i><br><span class="icon-count">EV</span>
</a>

<!-- <a href="{ route('arenaEV') }}" target="_blank" rel="noopener">
<i class="head-icon icon-cart icomoon-liga"></i><br><span class="icon-count">EV</span>
</a> -->

<!-- <a href="/arenaEV.blade.php" target="_blank" rel="noopener">
<i class="head-icon icon-cart icomoon-liga"></i><br><span class="icon-count">EV</span>
</a> -->


<a href="https://merch.gsmarena.com/" target="_blank" rel="noopener">
<i class="head-icon icon-cart icomoon-liga"></i><br><span class="icon-count">Merch</span>
</a>

<!-- <a href="{ route('merch') }}" target="_blank" rel="noopener">
<i class="head-icon icon-cart icomoon-liga"></i><br><span class="icon-count">Merch</span>
</a> -->

<!-- <a href="/merch.blade.php" target="_blank" rel="noopener">
<i class="head-icon icon-cart icomoon-liga"></i><br><span class="icon-count">Merch</span>
</a> -->

<!-- 
<a href="https://www.facebook.com/GSMArenacom-189627474421/" class="fb-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-soc-fb2 icomoon-liga"></i><br><span class="icon-count">891k</span>
</a>
<a href="https://twitter.com/gsmarena_com" class="tw-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-soc-twitter2 icomoon-liga"></i><br><span class="icon-count">166k</span>
</a>
 -->




<span class="bar"></span>


  <a href="https://www.gsmarena.com/compare.php3#" onclick="return false;" class="login-icon" id="login-active">
    <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
  </a>

  <span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MHxwcm9%2BbXoxb3dvLA%3D%3D">  
  <p>Login</p>
  <label for="email"></label>
  <input type="email" id="email" name="sEmail" maxlength="50" value="" required="" autocomplete="false">

  <label for="upass"></label>
  <input type="password" id="upass" name="sPassword" placeholder="Your password" maxlength="20" pattern="\S{6,}" required="" autocomplete="false">

  <input class="button" type="submit" value="Log in" id="nick-submit">
</form>
  <a class="forgot" href="https://www.gsmarena.com/forgot.php3">I forgot my password</a>
  </span>
  <!-- <span class="tooltip" id="login-popup2">
    <form @submit.prevent="submitForm">
      <p>Login</p>

      <label for="email">Email</label>
      <input 
        type="email" 
        id="email" 
        v-model="email" 
        maxlength="50" 
        required 
        autocomplete="off"
      />

      <label for="upass">Password</label>
      <input 
        type="password" 
        id="upass" 
        v-model="password" 
        placeholder="Your password" 
        maxlength="20" 
        pattern="\S{6,}" 
        required 
        autocomplete="off"
      />

      <input class="button" type="submit" value="Log in" id="nick-submit">
    </form>
    <a class="forgot" href="https://www.gsmarena.com/forgot.php3">I forgot my password</a>
  </span> -->
 <a href="https://www.gsmarena.com/register.php3" class="signup-icon no-margin-right"><i class="head-icon icon-user-plus"></i><span class="icon-count">Sign up</span></a>  
              </div>  
           </div>                 
<ul id="menu" class="main-menu-list open">
  <li><a href="https://www.gsmarena.com/">Home</a></li>
  <li><a href="https://www.gsmarena.com/news.php3">News</a></li>
  <li><a href="https://www.gsmarena.com/reviews.php3">Reviews</a></li>
  <li><a href="https://www.gsmarena.com/videos.php3">Videos</a></li>
  <li><a href="https://www.gsmarena.com/news.php3?sTag=Featured">Featured</a></li>
  <li><a href="https://www.gsmarena.com/search.php3">Phone Finder</a></li>
  <li><a href="https://www.gsmarena.com/deals.php3" style="position: relative;">Deals</a></li>
  <li><a href="https://merch.gsmarena.com/" target="_blank" style="position: relative;">Merch<span class="icon-count" style="top: 3px; right: 5px;">New</span></a></li>
  <li><a href="https://www.gsmarena.com/network-bands.php3">Coverage</a></li>
  <li><a href="https://www.gsmarena.com/contact.php3">Contact</a></li>

<!-- Routes <ul id="menu" class="main-menu-list">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('news') }}">News</a></li>
    <li><a href="{{ route('reviews') }}">Reviews</a></li>
    <li><a href="{{ route('videos') }}">Videos</a></li>
    <li><a href="{{ route('featured') }}">Featured</a></li>
    <li><a href="{{ route('phone-finder') }}">Phone Finder</a></li>
    <li><a href="{{ route('deals') }}" style="position: relative;">Deals</a></li>
    <li><a href="{{ route('merch') }}" target="_blank" style="position: relative;">Merch<span class="icon-count" style="top: 3px; right: 5px;">New</span></a></li>
    <li><a href="{{ route('coverage') }}">Coverage</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</ul> -->

<!-- 
<ul id="menu" class="main-menu-list">
    <li><a href="/home.blade.php">Home</a></li>
    <li><a href="/news.blade.php">News</a></li>
    <li><a href="/reviews.blade.php">Reviews</a></li>
    <li><a href="/videos.blade.php">Videos</a></li>
    <li><a href="/featured.blade.php">Featured</a></li>
    <li><a href="/phone-finder.blade.php">Phone Finder</a></li>
    <li><a href="/deals.blade.php" style="position: relative;">Deals</a></li>
    <li><a href="/merch.blade.php" target="_blank" style="position: relative;">Merch<span class="icon-count" style="top: 3px; right: 5px;">New</span></a></li>
    <li><a href="/coverage.blade.php">Coverage</a></li>
    <li><a href="/contact.blade.php">Contact</a></li>
</ul>
 -->
                     
</ul>
  


      <!-- SOCIAL CONNECT -->
    </div>
    

</header> <!--- HEADER END -->


    
<script type="text/javascript" language="javascript">

$gsm.addEventListener(document, "DOMContentLoaded", function() {
    new Autocomplete("sSearch1", ".candidate-search-1", false);
    new Autocomplete("sSearch2", ".candidate-search-2", false);
    new Autocomplete("sSearch3", ".candidate-search-3", false);
});

</script>

<div id="wrapper" class="l-container">
<div id="outer" class="row">


<div id="subHeader" class="col">

<div id="topAdv" class="l-box">
<span class="ad-c-label">ADVERTISEMENT</span> 
<!-- TAGNAME: top728x90 - SmartReact -->
<!-- /8095840/.2_A.35723.3_gsmarena.com_tier1 -->
<div style="height: 90px; overflow: hidden; padding: 0; margin: 0;">
<div id="div-gpt-ad-gsmarenacom35723"></div>
</div>
  </div>   
</div>


<div id="body">

  <div class="page-header clearfix">

  <!-- MAIN BOX -->


<style>
.review-background {
    background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/compare-hlr.jpg');
    background-size: 100%;
  }  
</style>
<div class="review-header">  
<div class="review-hd review-background">
<div class="article-info">
    <div class="article-info-line border-bottom">
        <div class="blur"></div>

</div>
<div class="center-stage article-accent">
    <div class="article-hgroup">
        
        <br>
        <h1 class="article-info-name">Compare specs</h1>
    </div>
</div>
<div class="article-info-line">
    <div class="blur bottom"></div><ul class="article-info-meta">
  <li class="article-info-meta-link "><a href="https://www.gsmarena.com/piccmp.php3?idType=4&amp;idPhone1=13123">Compare photo samples</a></li> 
  <li class="article-info-meta-link "><a href="https://www.gsmarena.com/vidcmp.php3?idType=4&amp;idPhone1=13123">Compare video samples</a></li> 
  <br style="clear:both;">
</ul>
    </div>
</div>
</div>
</div>         




<aside class="sidebar float-left">

<div class="brandmenu-v2 light l-box clearfix">
<p class="pad">
<a href="https://www.gsmarena.com/search.php3" class="pad-single pad-finder">
<i class="head-icon icon-search-right"></i>
<span>Phone finder</span></a>
</p>
<ul>
<li><a href="https://www.gsmarena.com/samsung-phones-9.php">Samsung</a></li><li><a href="https://www.gsmarena.com/apple-phones-48.php">Apple</a></li><li><a href="https://www.gsmarena.com/huawei-phones-58.php">Huawei</a></li><li><a href="https://www.gsmarena.com/nokia-phones-1.php">Nokia</a></li><li><a href="https://www.gsmarena.com/sony-phones-7.php">Sony</a></li><li><a href="https://www.gsmarena.com/lg-phones-20.php">LG</a></li><li><a href="https://www.gsmarena.com/htc-phones-45.php">HTC</a></li><li><a href="https://www.gsmarena.com/motorola-phones-4.php">Motorola</a></li><li><a href="https://www.gsmarena.com/lenovo-phones-73.php">Lenovo</a></li><li><a href="https://www.gsmarena.com/xiaomi-phones-80.php">Xiaomi</a></li><li><a href="https://www.gsmarena.com/google-phones-107.php">Google</a></li><li><a href="https://www.gsmarena.com/honor-phones-121.php">Honor</a></li><li><a href="https://www.gsmarena.com/oppo-phones-82.php">Oppo</a></li><li><a href="https://www.gsmarena.com/realme-phones-118.php">Realme</a></li><li><a href="https://www.gsmarena.com/oneplus-phones-95.php">OnePlus</a></li><li><a href="https://www.gsmarena.com/nothing-phones-128.php">Nothing</a></li><li><a href="https://www.gsmarena.com/vivo-phones-98.php">vivo</a></li><li><a href="https://www.gsmarena.com/meizu-phones-74.php">Meizu</a></li><li><a href="https://www.gsmarena.com/asus-phones-46.php">Asus</a></li><li><a href="https://www.gsmarena.com/alcatel-phones-5.php">Alcatel</a></li><li><a href="https://www.gsmarena.com/zte-phones-62.php">ZTE</a></li><li><a href="https://www.gsmarena.com/microsoft-phones-64.php">Microsoft</a></li><li><a href="https://www.gsmarena.com/umidigi-phones-135.php">Umidigi</a></li><li><a href="https://www.gsmarena.com/energizer-phones-106.php">Energizer</a></li><li><a href="https://www.gsmarena.com/cat-phones-89.php">Cat</a></li><li><a href="https://www.gsmarena.com/sharp-phones-23.php">Sharp</a></li><li><a href="https://www.gsmarena.com/micromax-phones-66.php">Micromax</a></li><li><a href="https://www.gsmarena.com/infinix-phones-119.php">Infinix</a></li><li><a href="https://www.gsmarena.com/ulefone_-phones-124.php">Ulefone</a></li><li><a href="https://www.gsmarena.com/tecno-phones-120.php">Tecno</a></li><li><a href="https://www.gsmarena.com/doogee-phones-129.php">Doogee</a></li><li><a href="https://www.gsmarena.com/blackview-phones-116.php">Blackview</a></li><li><a href="https://www.gsmarena.com/cubot-phones-130.php">Cubot</a></li><li><a href="https://www.gsmarena.com/oukitel-phones-132.php">Oukitel</a></li><li><a href="https://www.gsmarena.com/itel-phones-131.php">Itel</a></li><li><a href="https://www.gsmarena.com/tcl-phones-123.php">TCL</a></li></ul>

<p class="pad">
<a href="https://www.gsmarena.com/makers.php3" class="pad-multiple pad-allbrands">
  <i class="head-icon icon-mobile-phone231"></i>
  <span>All brands</span>
   <!--  <a href="{{ route('brands') }}" class="pad-multiple pad-allbrands">
    <i class="head-icon icon-mobile-phone231"></i>
    <span>All brands</span>
  </a>
    <a href="/brands.blade.php" class="pad-multiple pad-allbrands">
      <i class="head-icon icon-mobile-phone231"></i>
      <span>All brands</span>
    </a> -->
</a>
<a href="https://www.gsmarena.com/rumored.php3" class="pad-multiple pad-rumormill">
  <i class="head-icon icon-rumored"></i>
  <span>Rumor mill</span>
<!--  <a href="{{ route('rumorMill') }}" class="pad-multiple pad-allbrands">
    <i class="head-icon icon-mobile-phone231"></i>
    <span>Rumor mill</span>
  </a>
    <a href="/rumorMill.blade.php" class="pad-multiple pad-allbrands">
      <i class="head-icon icon-mobile-phone231"></i>
      <span>Rumor mill</span>
    </a> -->
</a>
</p>
</div>   
</aside>



</div>  <!-- page header -->







<header class="compare-candidates">



<div class="compare-candidate compare-col">
  <div class="candidate-search candidate-search-1">
      <form class="clearfix" action="https://www.gsmarena.com/compare.php3" method="get" _lpchecked="1">
      <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
          <input type="hidden" name="idPhone1" value="13123">
      <input type="hidden" name="idPhone2" value="0">
      <input type="hidden" name="idPhone3" value="0">
                  <input type="text" id="sSearch1" class="st-input-cmp float-left" name="sSearch1" value="" autocomplete="off" placeholder="Search">
      
      </form>
      
  <div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide autocomplete-compare"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More news results</a></li></ul></div></div></div>

  
  <div class="swap-phones empty"></div>
    

<h3 style="height: 33px;"><a href="https://www.gsmarena.com/apple_iphone_16_pro_max-13123.php"><span data-spec="modelname">Apple iPhone 16 Pro Max</span></a></h3>

<ul class="compare-link-list">
  
<li title="Apple iPhone 16 Pro Max phone specifications"><a href="https://www.gsmarena.com/apple_iphone_16_pro_max-13123.php">Specifications</a></li>
<li title="Apple iPhone 16 Pro Max user reviews and opinions"><a href="https://www.gsmarena.com/apple_iphone_16_pro_max-reviews-13123.php">Read opinions</a></li>
<li><a href="https://www.gsmarena.com/apple_iphone_16_pro_max-pictures-13123.php">Pictures</a></li>



</ul>
<div class="compare-media-wrap float-left clearfix">
<img src="./Compare phones, smartphones, tablets - GSMArena.com_files/apple-iphone-16-pro-max-r.jpg" alt="Apple iPhone 16 Pro Max">  

</div>

















  

  

</div>

<div class="compare-candidate compare-col">
<div class="candidate-search candidate-search-2">
    <form class="clearfix" action="https://www.gsmarena.com/compare.php3" method="get" _lpchecked="1">
    <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
          <input type="hidden" name="idPhone1" value="13123">
      <input type="hidden" name="idPhone2" value="0">
      <input type="hidden" name="idPhone3" value="0">
                  <input type="text" id="sSearch2" class="st-input-cmp float-left" name="sSearch2" value="" autocomplete="off" placeholder="Search">
        
    </form>
      
<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide autocomplete-compare"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More news results</a></li></ul></div></div></div>



</div>




<div class="compare-candidate compare-col">
<div class="candidate-search candidate-search-3">
      <form class="clearfix" action="https://www.gsmarena.com/compare.php3" method="get" _lpchecked="1">
      <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
          <input type="hidden" name="idPhone1" value="13123">
      <input type="hidden" name="idPhone2" value="0">
      <input type="hidden" name="idPhone3" value="0">
            
          <input type="text" id="sSearch3" class="st-input-cmp float-left" name="sSearch3" value="" autocomplete="off" placeholder="Search">
          
      </form>
       
<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide autocomplete-compare"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/compare.php3#">More news results</a></li></ul></div></div></div>

<div class="swap-phones empty"></div>

</div>


</header>

<style>
.diff-toggle-box { border-bottom: none; }
.compare-candidate.compare-col { padding-bottom: 20px; }
</style>

<div class="adv" style="margin: 10px 0 20px 0;">

<span class="ad-c-label">ADVERTISEMENT</span> 
<div style="height: 90px;">
<!-- TAGNAME: mid728x90 SmartReact -->
<!-- /8095840/.2_A.38194.3_gsmarena.com_tier1 -->
<div id="div-gpt-ad-gsmarenacom38194"></div>
</div>
  
</div>

<script language="JavaScript">
<!--
function helpW( strURL )
{
window.open( 'help.php3?term=' + strURL, '_blank', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=420,height=390' );
}
//-->
</script>

<div id="specs-list" class="compare-specs-list">
          
<style type="text/css"> .tr-toggle {  display:none; }  </style>
<table cellspacing="0" class="expandable-table" style="max-height: 25px;">
<tbody><tr class="collapse">
<th rowspan="15" scope="row">Network<a class="expand-toggle" title="Expand/collapse the Network section"></a></th>
<td class="ttl"><a href="https://www.gsmarena.com/compare.php3#">Technology</a></td>
<td class="nfo" data-spec="nettech">GSM / CDMA / HSPA / EVDO / LTE / 5G</td>
<td class="nfo sweezy-custom-cursor-hover" data-spec="nettech" style="null;cursor: url(&quot;data:image/png;base64,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&quot;) 5 8, pointer !important;"></td>  
<td class="nfo" data-spec="nettech"></td>  
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="https://www.gsmarena.com/network-bands.php3">2G bands</a></td>
<td class="nfo" data-spec="net2g">GSM 850 / 900 / 1800 / 1900 - SIM 1 &amp; SIM 2 (dual-SIM)</td>
<td class="nfo" data-spec="net2g"></td>  
<td class="nfo" data-spec="net2g"></td>  

</tr>
<tr class="tr-toggle" data-spec-optional="">
<td class="ttl">&nbsp;</td>
<td class="nfo">CDMA 800 / 1900 </td>
<td class="nfo"></td>  
<td class="nfo"></td>  
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="https://www.gsmarena.com/network-bands.php3">3G bands</a></td>
<td class="nfo" data-spec="net3g">HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 </td>
<td class="nfo" data-spec="net3g"></td>
<td class="nfo" data-spec="net3g"></td>
</tr>
<tr class="tr-toggle" data-spec-optional="">
<td class="ttl">&nbsp;</td>
<td class="nfo">CDMA2000 1xEV-DO </td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="https://www.gsmarena.com/network-bands.php3">4G bands</a></td>
<td class="nfo" data-spec="net4g"> LTE</td>
<td class="nfo" data-spec="net4g"></td>
<td class="nfo" data-spec="net4g"></td>
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="https://www.gsmarena.com/network-bands.php3">5G bands</a></td>
<td class="nfo" data-spec="net5g"> SA/NSA/Sub6 - International</td>
<td class="nfo" data-spec="net5g"></td>
<td class="nfo" data-spec="net5g"></td>
</tr>
<tr class="tr-toggle" data-spec-optional="">
<td class="ttl">&nbsp;</td>
<td class="nfo"> SA/NSA/Sub6/mmWave - USA</td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=3g">Speed</a></td>
<td class="nfo" data-spec="speed">HSPA, LTE, 5G, EV-DO Rev.A 3.1 Mbps</td>
<td class="nfo" data-spec="speed"></td>
<td class="nfo" data-spec="speed"></td>
</tr>
  



</tbody></table>





<table cellspacing="0">
<tbody><tr>
<th rowspan="2" scope="row">Launch</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=phone-life-cycle">Announced</a></td>
<td class="nfo" data-spec="year">Expected announcement 2024, September</td>
<td class="nfo" data-spec="year"></td>
<td class="nfo" data-spec="year"></td>
</tr><tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=phone-life-cycle">Status</a></td>
<td class="nfo" data-spec="status">Rumored. Exp. release 2024, September</td>
<td class="nfo" data-spec="status"></td>
<td class="nfo" data-spec="status"></td>
</tr>
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="7" scope="row">Body</th>
<td class="ttl"><a href="https://www.gsmarena.com/compare.php3#" onclick="helpW(&#39;h_dimens.htm&#39;);">Dimensions</a></td>
<td class="nfo" data-spec="dimensions">163 x 77.6 x 8.3 mm (6.42 x 3.06 x 0.33 in)</td>
<td class="nfo" data-spec="dimensions"></td>
<td class="nfo" data-spec="dimensions"></td>
</tr>

<tr>
<td class="ttl"><a href="https://www.gsmarena.com/compare.php3#" onclick="helpW(&#39;h_weight.htm&#39;);">Weight</a></td>
<td class="nfo" data-spec="weight">225 g (7.94 oz)</td>
<td class="nfo" data-spec="weight"></td>
<td class="nfo" data-spec="weight"></td>
</tr>
  

<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=build">Build</a> </td>
<td class="nfo" data-spec="build">Glass front (Corning-made glass), glass back (Corning-made glass), titanium frame (grade 5)</td>
<td class="nfo" data-spec="build"></td>
<td class="nfo" data-spec="build"></td>
</tr>
  
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=sim">SIM</a></td>
<td class="nfo" data-spec="sim">Nano-SIM and eSIM - International<br> Dual eSIM with multiple numbers - USA<br> Dual SIM (Nano-SIM, dual stand-by) - China</td>
<td class="nfo" data-spec="sim"></td>
<td class="nfo" data-spec="sim"></td>
</tr>
<tr><td class="ttl">&nbsp;</td><td class="nfo" data-spec="bodyother">IP68 dust/water resistant (up to 6m for 30 min)<br>
Apple Pay (Visa, MasterCard, AMEX certified)</td>
<td class="nfo" data-spec="bodyother"></td>
<td class="nfo" data-spec="bodyother"></td>
</tr>
    
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="5" scope="row">Display</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=display-type">Type</a></td>
<td class="nfo" data-spec="displaytype">LTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision</td>
<td class="nfo" data-spec="displaytype"></td>
<td class="nfo" data-spec="displaytype"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/compare.php3#" onclick="helpW(&#39;h_dsize.htm&#39;);">Size</a></td>
<td class="nfo" data-spec="displaysize">6.9 inches, 116.3 cm<sup>2</sup> (~92.0% screen-to-body ratio)</td>
<td class="nfo" data-spec="displaysize"></td>
<td class="nfo" data-spec="displaysize"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=resolution">Resolution</a></td>
<td class="nfo" data-spec="displayresolution">1328 x 2878 pixels, 19.5:9 ratio (~460 ppi density)</td>
<td class="nfo" data-spec="displayresolution"></td>
<td class="nfo" data-spec="displayresolution"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=screen-protection">Protection</a> </td>
<td class="nfo" data-spec="displayprotection">Ceramic Shield glass</td>
<td class="nfo" data-spec="displayprotection"></td>
<td class="nfo" data-spec="displayprotection"></td>
</tr>
  
<tr><td class="ttl">&nbsp;</td><td class="nfo" data-spec="displayother">Always-On display</td>
<td class="nfo" data-spec="displayother"></td>  
<td class="nfo" data-spec="displayother"></td>  
</tr>
    
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="4" scope="row">Platform</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
<td class="nfo" data-spec="os">iOS 18</td>
<td class="nfo" data-spec="os"></td>
<td class="nfo" data-spec="os"></td>
</tr>
<tr><td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
<td class="nfo" data-spec="chipset">Apple A18 Pro (3 nm)</td>
<td class="nfo" data-spec="chipset"></td>
<td class="nfo" data-spec="chipset"></td>
</tr>
<tr><td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
<td class="nfo" data-spec="cpu">Hexa-core</td>
<td class="nfo" data-spec="cpu"></td>
<td class="nfo" data-spec="cpu"></td>
</tr>
<tr><td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
<td class="nfo" data-spec="gpu">Apple GPU</td>
<td class="nfo" data-spec="gpu"></td>
<td class="nfo" data-spec="gpu"></td>
</tr>
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="5" scope="row">Memory</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=memory-card-slot">Card slot</a></td>
<td class="nfo" data-spec="memoryslot">No</td>
<td class="nfo" data-spec="memoryslot"></td>
<td class="nfo" data-spec="memoryslot"></td>
</tr>

  

<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=dynamic-memory">Internal</a></td>
<td class="nfo" data-spec="internalmemory">256GB 8GB RAM, 512GB 8GB RAM, 1TB 8GB RAM</td>
<td class="nfo" data-spec="internalmemory"></td>
<td class="nfo" data-spec="internalmemory"></td>
</tr>
  

<tr><td class="ttl">&nbsp;</td><td class="nfo" data-spec="memoryother">NVMe</td>
<td class="nfo" data-spec="memoryother"></td>
<td class="nfo" data-spec="memoryother"></td>
</tr>
  


</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="3" scope="row" class="small-line-height">Main Camera</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=camera">Modules</a></td>
<td class="nfo" data-spec="cam1modules">48 MP, f/1.8, 24mm (wide), 1/1.28", 1.22µm, dual pixel PDAF, sensor-shift OIS<br>
12 MP, f/2.8, 120mm (periscope telephoto), 1/3.06", 1.12µm, dual pixel PDAF, 3D sensor‑shift OIS, 5x optical zoom<br>
48 MP, (ultrawide), 0.7µm, dual pixel PDAF<br>
TOF 3D LiDAR scanner (depth)</td>
<td class="nfo" data-spec="cam1modules"></td>
<td class="nfo" data-spec="cam1modules"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=camera">Features</a></td>
<td class="nfo" data-spec="cam1features">Dual-LED dual-tone flash, HDR (photo/panorama)</td>
<td class="nfo" data-spec="cam1features"></td>
<td class="nfo" data-spec="cam1features"></td>
</tr>

<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=camera">Video</a></td>
<td class="nfo" data-spec="cam1video">4K@24/25/30/60fps, 1080p@25/30/60/120/240fps, 10-bit HDR, Dolby Vision HDR (up to 60fps), ProRes, 3D (spatial) video, stereo sound rec.</td>
<td class="nfo" data-spec="cam1video"></td>
<td class="nfo" data-spec="cam1video"></td>
</tr>
</tbody></table>

<table cellspacing="0">
<tbody><tr>
<th rowspan="3" scope="row" class="small-line-height">Selfie Camera</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=camera">Modules</a></td>
<td class="nfo" data-spec="cam2modules">12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF, OIS<br>
SL 3D, (depth/biometrics sensor)</td>
<td class="nfo" data-spec="cam2modules"></td>
<td class="nfo" data-spec="cam2modules"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=camera">Features</a></td>
<td class="nfo" data-spec="cam2features">HDR</td>
<td class="nfo" data-spec="cam2features"></td>
<td class="nfo" data-spec="cam2features"></td>
</tr>

<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=camera">Video</a></td>
<td class="nfo" data-spec="cam2video">4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS</td>
<td class="nfo" data-spec="cam2video"></td>
<td class="nfo" data-spec="cam2video"></td>
</tr>
</tbody></table>


<div class="d-flex flex-column justify-center align-center pt-10" style="min-height: 158px; padding-bottom: 24px; background: white; border-top: 5px solid #eee;">
<span class="ad-c-label mb-5 c-gray-600" style="font-size: 11px;">ADVERTISEMENT</span>
<div style="height: 90px; overflow: hidden; padding: 0; margin: 0;">
<pgs-ad data-pg-ad-spot="gsmarenacom46956"></pgs-ad>
</div>
</div>


<table cellspacing="0">
<tbody><tr>
<th rowspan="3" scope="row">Sound</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=loudspeaker">Loudspeaker</a> </td>
<td class="nfo">Yes, with stereo speakers</td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>


<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=audio-jack">3.5mm jack</a> </td>
<td class="nfo">No</td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>
  


  
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="9" scope="row">Comms</th>

<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=wi-fi">WLAN</a></td>
<td class="nfo" data-spec="wlan">Wi-Fi 802.11 a/b/g/n/ac/6e/7, dual-band, hotspot</td>
<td class="nfo" data-spec="wlan"></td>
<td class="nfo" data-spec="wlan"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=bluetooth">Bluetooth</a></td>
<td class="nfo" data-spec="bluetooth">5.4, A2DP, LE</td>
<td class="nfo" data-spec="bluetooth"></td>
<td class="nfo" data-spec="bluetooth"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=gnss">Positioning</a></td>
<td class="nfo" data-spec="gps">GPS (L1+L5), GLONASS, GALILEO, BDS, QZSS, NavIC</td>
<td class="nfo" data-spec="gps"></td>
<td class="nfo" data-spec="gps"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=nfc">NFC</a> </td>
<td class="nfo" data-spec="nfc">Yes</td>
<td class="nfo" data-spec="nfc"></td>
<td class="nfo" data-spec="nfc"></td>
</tr>
  
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=irda">Infrared port</a></td>
<td class="nfo">No</td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=fm-radio">Radio</a></td>
<td class="nfo" data-spec="radio">No</td>
<td class="nfo" data-spec="radio"></td>
<td class="nfo" data-spec="radio"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=usb">USB</a></td>
<td class="nfo" data-spec="usb">USB Type-C 3.2 Gen 2, DisplayPort</td>
<td class="nfo" data-spec="usb"></td>
<td class="nfo" data-spec="usb"></td>
</tr>
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="6" scope="row">Features</th>

<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=sensors">Sensors</a></td>
<td class="nfo" data-spec="sensors">Face ID, accelerometer, gyro, proximity, compass, barometer</td>
<td class="nfo" data-spec="sensors"></td>
<td class="nfo" data-spec="sensors"></td>
</tr>

   

  

<tr><td class="ttl">&nbsp;</td><td class="nfo" data-spec="featuresother">Ultra Wideband 2 (UWB) support<br>
Emergency SOS via satellite (SMS sending/receiving)</td>
<td class="nfo" data-spec="featuresother"></td>
<td class="nfo" data-spec="featuresother"></td>
</tr>
  

</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="5" scope="row">Battery</th>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=rechargeable-battery-types">Type</a></td>
<td class="nfo" data-spec="batdescription1">Li-Ion 4676 mAh, non-removable</td>
<td class="nfo" data-spec="batdescription1"></td>
<td class="nfo" data-spec="batdescription1"></td>
</tr>
<tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=battery-charging">Charging</a></td>
<td class="nfo">Wired, PD2.0, 50% in 30 min (advertised)<br>
15W wireless (MagSafe)<br>
15W wireless (Qi2)<br>
4.5W reverse wired</td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>
</tbody></table>


<table cellspacing="0">
<tbody><tr>
<th rowspan="6" scope="row">Misc</th>
</tr><tr>
<td class="ttl"><a href="https://www.gsmarena.com/glossary.php3?term=build">Colors</a></td>
<td class="nfo" data-spec="colors">Black Titanium, White Titanium, Blue Titanium, Natural Titanium</td>
<td class="nfo" data-spec="colors"></td>
<td class="nfo" data-spec="colors"></td>
</tr>



</tbody></table>






</div>
  

<br class="clear">


<div class="adv">
<span class="ad-c-label">ADVERTISEMENT</span> 
<!-- /8095840/.2_A.34914.10_gsmarena.com_tier1 -->
<div id="div-gpt-ad-bb970x250topgsmarenadesktop-0"></div>
</div>





</div><!-- id body -->
</div><!-- id outer -->




<div id="footer">
 <div class="footer-logo">
     <img src="./Compare phones, smartphones, tablets - GSMArena.com_files/logo-gsmarena-com.png" alt="">
    </div>
    <div id="footmenu">
<p>
<a href="https://www.gsmarena.com/">Home</a>
<a href="https://www.gsmarena.com/news.php3">News</a>
<a href="https://www.gsmarena.com/reviews.php3">Reviews</a>
<a href="https://www.gsmarena.com/compare.php3">Compare</a>
<a href="https://www.gsmarena.com/network-bands.php3">Coverage</a>
<a href="https://www.gsmarena.com/glossary.php3">Glossary</a>
<a href="https://www.gsmarena.com/faq.php3">FAQ</a>

<!-- <a href="{{ route('home') }}">Home</a>
<a href="{{ route('news') }}">News</a>
<a href="{{ route('reviews') }}">Reviews</a>
<a href="{{ route('compare') }}">Compare</a>
<a href="{{ route('coverage') }}">Coverage</a>
<a href="{{ route('glossary') }}">Glossary</a>
<a href="{{ route('FAQ') }}">FAQ</a> -->

<!-- <a href="/home.blade.php">Home</a>
<a href="/news.blade.php">News</a>
<a href="/reviews.blade.php">Reviews</a>
<a href="/compare.blade.php">Compare</a>
<a href="/coverage.blade.php">Coverage</a>
<a href="/glossary.blade.php">Glossary</a>
<a href="/FAQ.blade.php">FAQ</a> -->



<a href="https://www.gsmarena.com/rss-news-reviews.php3" class="rss-icon">RSS feed</a>
<a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCbLq9tsbo8peV22VxbDAfXA?sub_confirmation=1" class="yt-icon">Youtube</a>
<a target="_blank" rel="noopener" href="https://www.facebook.com/GSMArenacom-189627474421/" class="fb-icon">Facebook</a>
<a target="_blank" rel="noopener" href="https://twitter.com/gsmarena_com" class="tw-icon">Twitter</a>
<a target="_blank" rel="noopener" href="https://www.instagram.com/gsmarenateam/" class="ig-icon">Instagram</a>

</p>

<p>
© 2000-2024 <a href="https://www.gsmarena.com/team.php3">GSMArena.com</a> 
<a id="switch-version" href="https://www.gsmarena.com/account.php3#">Mobile version</a>
<a target="_blank" rel="noopener" href="https://play.google.com/store/apps/details?id=com.gsmarena.android">Android app</a>
<a href="https://www.gsmarena.com/tools.php3">Tools</a>

<!-- <a href="{{ route('tools') }}">Tools</a>
<a href="/tools.blade.php">Tools</a>
 -->


<a href="https://www.gsmarena.com/contact.php3">Contact us</a>

<!-- <a href="{{ route('contact') }}">Contact us</a>
<a href="/contact.blade.php">Contact us</a>
 -->


<a href="https://merch.gsmarena.com/" target="_blank">Merch store</a>

<!-- <a href="{{ route('merch') }}" target="_blank">Merch store</a>
<a href="/merch.blade.php" target="_blank">Merch store</a>
 -->

<a href="https://www.gsmarena.com/privacy-policy.php3">Privacy</a> 

<!-- <a href="{{ route('privacy') }}" target="_blank">Privacy</a>
<a href="/privacy.blade.php" target="_blank">Privacy</a>
 -->

<a href="https://www.gsmarena.com/terms.php3">Terms of use</a>

<!-- <a href="{{ route('terms') }}" target="_blank">Terms of use/a>
<a href="/terms.blade.php" target="_blank">Terms of use/a>
 -->
<a id="unic-gdpr" onclick="__tcfapi(&quot;openunic&quot;);return false;" style="display:none;cursor:pointer;">Change Ad Consent</a>
<a id="unic-ccpa" onclick="window.__uspapi(&#39;openunic&#39;)" style="display:none;cursor:pointer;">Do not sell my data</a>

      
</p>      

  </div>
 </div>
 
 
</div>


<script type="text/javascript" src="./Compare phones, smartphones, tablets - GSMArena.com_files/autocomplete.js.download"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function() 
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>














<script type="text/javascript" src="./Compare phones, smartphones, tablets - GSMArena.com_files/specs2.js.download"></script>
<div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Compare specs</span><div class="logo" draggable="false"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/compare.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/compare.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad"></div><div class="thumb-gallery"><a class="go-up" href="https://www.gsmarena.com/compare.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/compare.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><iframe name="__tcfapiLocator" style="display: none;" src="./Compare phones, smartphones, tablets - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Compare phones, smartphones, tablets - GSMArena.com_files/saved_resource(1).html"></iframe><img src="./Compare phones, smartphones, tablets - GSMArena.com_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;">



</template>