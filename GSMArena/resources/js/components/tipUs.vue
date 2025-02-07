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


<script type="text/javascript" src="./Tip us - GSMArena.com_files/misc.js.download"></script><iframe name="__tcfapiLocator" style="display: none;" src="./Tip us - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Tip us - GSMArena.com_files/saved_resource(1).html"></iframe><img src="./Tip us - GSMArena.com_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;">



<header id="header" class="row open slide slide--reset headroom--top">
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

<object type="image/svg+xml" data="./Tip us - GSMArena.com_files/logo.svg"><img src="./Tip us - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">
    
    <span id="quick-search-button">
      <input type="submit" value="Go">
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>
    

<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/tipus.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/tipus.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/tipus.php3#">More news results</a></li></ul></div></div><div class="search-buttons" style="display: none;"><a class="go" href="https://www.gsmarena.com/tipus.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


	<a href="https://www.gsmarena.com/tipus.php3#" onclick="return false;" class="login-icon" id="login-active">
	  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
	</a>

	<span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MGt2b2psMW93byw%3D">  
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
</ul>
  


      <!-- SOCIAL CONNECT -->
    </div>
    

</header> <!--- HEADER END -->


		

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

<div class="main main-review l-box col float-right">  


<style>
.review-background {
    background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/tip-us.jpg');
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
        <h1 class="article-info-name">Tip us</h1>
    </div>
</div>
<div class="article-info-line">
    <div class="blur bottom"></div>        <ul class="article-info-meta">
        </ul>
    </div>
</div>
</div>
</div>


	<div id="review-body" class="normal-text">
	<h3>So you've got a hot story to share?</h3>


	<p>We're always on the lookout for good stories, no matter if it's some leaked product info, a new invention, a nice piece of mobile software, a software update for your favorite phone or stuff, regarding the market availability and pricing of any mobile phone. We're also happy to accept any multimedia material you may have - a good place for sharing images is <a href="http://imgur.com/" target="_blank">imgur.com</a> and for videos - there's always <a href="http://www.youtube.com/" target="_blank">YouTube</a>, you know.</p>

	<br class="clear">
	</div>


	<div id="user-submit" class="box s3">
	<h2><span>Tip us form</span></h2>
	<form method="post" action="https://www.gsmarena.com/tipus.php3" name="frmOpin" id="frmOpin">
	<input type="Hidden" name="sLocation" value="ea1f34fb5a8b3204e365ce8a7e54dc8f">


	<fieldset id="udata-f">
	<label for="usubject" class="custom-cursor-default-hover">Subject</label>
	<input type="text" id="usubject" name="sSubject" maxlength="30">
	</fieldset>

	<fieldset id="ucomment-f">
	<label for="ucomment" class="custom-cursor-default-hover">Share</label>
	<textarea cols="45" rows="8" id="ucomment" name="sBody"></textarea>
	</fieldset>						

	<fieldset id="udata-f">
	<label for="ucaptcha">Simple CAPTCHA. Write "forty-two" as a number.</label>
	<input type="text" id="ucaptcha" name="sCaptcha" maxlength="30">
	</fieldset>


	<input class="submit right button" type="submit" value="Submit" onclick="this.disabled=true;frmOpin.submit();">
	<br class="clear">

	</form>
	</div>						





	</div>

<aside class="sidebar col left">

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
</a>
<a href="https://www.gsmarena.com/rumored.php3" class="pad-multiple pad-rumormill">
  <i class="head-icon icon-rumored"></i>
  <span>Rumor mill</span>
</a>
</p>
</div>
<div class="adv banner-mpu">
<span class="ad-label">ADVERTISEMENT</span>	
<!-- /8095840/.2_A.34909.4_gsmarena.com_tier1 -->
<div id="div-gpt-ad-300x250atfgsmarenadesktop-0" style="height:250px; width:300px;"></div>
	</div>


<div class="module module-phones module-latest">
<h4 class="section-heading">Latest devices</h4>
<div style="overflow:hidden;overflow-y:auto;max-height: 390px;"><a href="https://www.gsmarena.com/samsung_galaxy_a16_5g-13346.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/samsung-galaxy-a15-5g-new.jpg"><br>Samsung Galaxy A16 5G</a><a href="https://www.gsmarena.com/samsung_galaxy_f05-13345.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/samsung-galaxy-f05.jpg"><br>Samsung Galaxy F05</a><a href="https://www.gsmarena.com/samsung_galaxy_s25_ultra-13322.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/samsung-galaxy-s24-ultra-5g-sm-s928-stylus.jpg"><br>Samsung Galaxy S25 Ultra</a><a href="https://www.gsmarena.com/honor_200_smart-13281.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/honor-play-60-plus.jpg"><br>Honor 200 Smart</a><a href="https://www.gsmarena.com/vivo_v40e-13339.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/vivo-iqoo-z9s-5g.jpg"><br>vivo V40e</a><a href="https://www.gsmarena.com/lava_blaze_3_5g-13340.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/lava-blaze3-5g.jpg"><br>Lava Blaze 3 5G</a><a href="https://www.gsmarena.com/itel_a80-13343.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/itel-a80.jpg"><br>itel A80</a><a href="https://www.gsmarena.com/meizu_note_21_pro-13341.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/meizu-note-21-pro.jpg"><br>Meizu Note 21 Pro</a><a href="https://www.gsmarena.com/meizu_note_21-13342.php" class="module-phones-link"><img src="./Tip us - GSMArena.com_files/meizu-note-21.jpg"><br>Meizu Note 21</a></div>		
</div>
</aside>

</div><!-- id body -->
</div><!-- id outer -->




<div id="footer">
 <div class="footer-logo">
     <img src="./Tip us - GSMArena.com_files/logo-gsmarena-com.png" alt="">
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

<a href="https://www.gsmarena.com/rss-news-reviews.php3" class="rss-icon">RSS feed</a>
<a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCbLq9tsbo8peV22VxbDAfXA?sub_confirmation=1" class="yt-icon">Youtube</a>
<a target="_blank" rel="noopener" href="https://www.facebook.com/GSMArenacom-189627474421/" class="fb-icon">Facebook</a>
<a target="_blank" rel="noopener" href="https://twitter.com/gsmarena_com" class="tw-icon">Twitter</a>
<a target="_blank" rel="noopener" href="https://www.instagram.com/gsmarenateam/" class="ig-icon">Instagram</a>

</p>

<p>
© 2000-2024 <a href="https://www.gsmarena.com/team.php3">GSMArena.com</a> 
<a id="switch-version" href="https://www.gsmarena.com/tipus.php3#">Mobile version</a>
<a target="_blank" rel="noopener" href="https://play.google.com/store/apps/details?id=com.gsmarena.android">Android app</a>
<a href="https://www.gsmarena.com/tools.php3">Tools</a>
<a href="https://www.gsmarena.com/contact.php3">Contact us</a>
<a href="https://merch.gsmarena.com/" target="_blank">Merch store</a>
<a href="https://www.gsmarena.com/privacy-policy.php3">Privacy</a> 
<a href="https://www.gsmarena.com/terms.php3">Terms of use</a>

<a id="unic-gdpr" onclick="__tcfapi(&quot;openunic&quot;);return false;" style="display:none;cursor:pointer;">Change Ad Consent</a>
<a id="unic-ccpa" onclick="window.__uspapi(&#39;openunic&#39;)" style="display:none;cursor:pointer;">Do not sell my data</a>

			
</p>			

  </div>
 </div>
 
 
</div>


<script type="text/javascript" src="./Tip us - GSMArena.com_files/autocomplete.js.download"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function() 
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>














<div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Tip us</span><div class="logo" draggable="false" style="display: none;"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image" style="background-size: contain, contain;"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/tipus.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/tipus.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad" style="display: none;"></div><div class="thumb-gallery" style="display: none;"><a class="go-up" href="https://www.gsmarena.com/tipus.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/tipus.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div>

</template>