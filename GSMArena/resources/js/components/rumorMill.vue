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



<script type="text/javascript" src="./Rumored phones - GSMArena.com_files/misc.js.download"></script><iframe name="__tcfapiLocator" style="display: none;" src="./Rumored phones - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Rumored phones - GSMArena.com_files/saved_resource(1).html"></iframe>



<header id="header" class="row slide headroom--top slide--reset">
<div class="wrapper clearfix">
<div class="top-bar clearfix">
<!-- HAMBURGER MENU -->
<button type="button" role="button" aria-label="Toggle Navigation" class="lines-button minus focused">
<span class="lines"></span>
</button>
<!-- /HAMBURGER MENU -->



<!-- LOGO -->
<div id="logo">
<a href="https://www.gsmarena.com/">

<object type="image/svg+xml" data="./Rumored phones - GSMArena.com_files/logo.svg"><img src="./Rumored phones - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">

    <span id="quick-search-button">
      <input type="submit" value="Go">
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>


<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/rumored.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/rumored.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/rumored.php3#">More news results</a></li></ul></div></div><div class="search-buttons" style="display: none;"><a class="go" href="https://www.gsmarena.com/rumored.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


	<a href="https://www.gsmarena.com/rumored.php3#" onclick="return false;" class="login-icon" id="login-active">
	  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
	</a>

	<span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MG1qcnBtensxb3dvLA%3D%3D">
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
<ul id="menu" class="main-menu-list">
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


<div id="body" class="clearfix">

<div class="main main-review l-box col float-right">


<style>
.review-background {
    background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/rumored-hl.jpg');
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
        <h1 class="article-info-name">Rumor mill</h1>
    </div>
</div>
<div class="article-info-line">
    <div class="blur bottom"></div>        <ul class="article-info-meta">
        </ul>
    </div>
</div>
</div>
</div>



<div id="review-body" class="section-body">
<div class="makers">
<ul>



<li><a href="https://www.gsmarena.com/apple_iphone_16_pro_max-13123.php"><img src="./Rumored phones - GSMArena.com_files/apple-iphone-16-pro-max-r.jpg" title=""><strong><span>Apple iPhone 16 Pro Max</span></strong></a></li><li><a href="https://www.gsmarena.com/google_pixel_9_pro-13218.php"><img src="./Rumored phones - GSMArena.com_files/google-pixel-9-pro-1.jpg" title=""><strong><span>Google Pixel 9 Pro</span></strong></a></li><li><a href="https://www.gsmarena.com/google_pixel_9_pro_xl-13217.php"><img src="./Rumored phones - GSMArena.com_files/google-pixel-9-pro-xl-11.jpg" title=""><strong><span>Google Pixel 9 Pro XL</span></strong></a></li><li><a href="https://www.gsmarena.com/google_pixel_9-13219.php"><img src="./Rumored phones - GSMArena.com_files/google-pixel-9-11.jpg" title=""><strong><span>Google Pixel 9</span></strong></a></li><li><a href="https://www.gsmarena.com/oppo_a3x-13233.php"><img src="./Rumored phones - GSMArena.com_files/oppo-a3x-.jpg" title=""><strong><span>Oppo A3x</span></strong></a></li><li><a href="https://www.gsmarena.com/motorola_edge_50_neo-13224.php"><img src="./Rumored phones - GSMArena.com_files/motorola-edge-50-neo-11.jpg" title=""><strong><span>Motorola Edge 50 Neo</span></strong></a></li><li><a href="https://www.gsmarena.com/google_pixel_9_pro_fold-13220.php"><img src="./Rumored phones - GSMArena.com_files/google-pixel-9-pro-fold-11.jpg" title=""><strong><span>Google Pixel 9 Pro Fold</span></strong></a></li><li><a href="https://www.gsmarena.com/honor_x60i-13208.php"><img src="./Rumored phones - GSMArena.com_files/honor-x60i.jpg" title=""><strong><span>Honor X60i</span></strong></a></li><li><a href="https://www.gsmarena.com/oppo_f27_pro-13101.php"><img src="./Rumored phones - GSMArena.com_files/oppo-a3-pro.jpg" title=""><strong><span>Oppo F27 Pro</span></strong></a></li><li><a href="https://www.gsmarena.com/hmd_ridge_pro-13158.php"><img src="./Rumored phones - GSMArena.com_files/hmd-ridge-pro-r1.jpg" title=""><strong><span>HMD Ridge Pro</span></strong></a></li><li><a href="https://www.gsmarena.com/hmd_atlas-13134.php"><img src="./Rumored phones - GSMArena.com_files/hmd-atlas-r.jpg" title=""><strong><span>HMD Atlas</span></strong></a></li><li><a href="https://www.gsmarena.com/oppo_pad_3-13085.php"><img src="./Rumored phones - GSMArena.com_files/oppo-pad2-.jpg" title=""><strong><span>Oppo Pad 3</span></strong></a></li>


</ul>
<br class="clear">
</div>

</div>

<br class="clearfix">



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
<div class="adv banner-mpu">
<span class="ad-label">ADVERTISEMENT</span>
<!-- /8095840/.2_A.34909.4_gsmarena.com_tier1 -->
<div id="div-gpt-ad-300x250atfgsmarenadesktop-0" style="height:250px; width:300px;"></div>
	</div>











<div class="module module-rankings s3">
<h4 class="section-heading">Top 10 by daily interest</h4>
<table class="module-fit green" cellspacing="0">
<colgroup>
  <col class="numb">
  <col class="phon">
  <col class="hits">
  <col class="dummy">
</colgroup>
<thead>
  <tr>
	<th scope="col" id="th3a" abbr="">&nbsp;</th>
	<th scope="col" id="th3b" abbr="">Device</th>
	<th scope="col" id="th3c" abbr="">Daily hits</th>
	<th scope="col">&nbsp;</th>
  </tr>
</thead>
<tbody>
<tr>
</tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a55-12824.php"><nobr>Samsung Galaxy A55</nobr></a></th><td headers="th3c">30,701</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_11-9848.php"><nobr>Apple iPhone 11</nobr></a></th><td headers="th3c">27,057</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>Samsung Galaxy S24 Ultra</nobr></a></th><td headers="th3c">25,123</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>Xiaomi Redmi Note 13 Pro</nobr></a></th><td headers="th3c">23,770</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_13-11103.php"><nobr>Apple iPhone 13</nobr></a></th><td headers="th3c">23,377</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a15-12637.php"><nobr>Samsung Galaxy A15</nobr></a></th><td headers="th3c">21,976</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php"><nobr>Xiaomi Redmi Note 13</nobr></a></th><td headers="th3c">20,760</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>Apple iPhone 15 Pro Max</nobr></a></th><td headers="th3c">19,033</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_16_pro_max-13123.php"><nobr>Apple iPhone 16 Pro Max</nobr></a></th><td headers="th3c">18,464</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/motorola_edge_50-13231.php"><nobr>Motorola Edge 50</nobr></a></th><td headers="th3c">17,959</td><td></td></tr></tbody>

</table>
</div>

<div class="module module-rankings s3">
<h4 class="section-heading">Top 10 by fans</h4>
<table class="module-fit blue" cellspacing="0">
<colgroup>
  <col class="numb">
  <col class="phon">
  <col class="hits">
  <col class="dummy">
</colgroup>
<thead>
  <tr>
	<th scope="col" id="th3a" abbr="">&nbsp;</th>
	<th scope="col" id="th3b" abbr="">Device</th>
	<th scope="col" id="th3c" abbr="">Favorites</th>
	<th scope="col">&nbsp;</th>
  </tr>
</thead>
<tbody>
<tr>
</tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>Samsung Galaxy S24 Ultra</nobr></a></th><td headers="th3c">1,152</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_poco_f5-12258.php"><nobr>Xiaomi Poco F5</nobr></a></th><td headers="th3c">737</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/sony_xperia_1_v-12263.php"><nobr>Sony Xperia 1 V</nobr></a></th><td headers="th3c">643</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/google_pixel_8_pro-12545.php"><nobr>Google Pixel 8 Pro</nobr></a></th><td headers="th3c">624</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>Apple iPhone 15 Pro Max</nobr></a></th><td headers="th3c">615</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_12-12725.php"><nobr>OnePlus 12</nobr></a></th><td headers="th3c">587</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro+-12572.php"><nobr>Xiaomi Redmi Note 13 Pro+</nobr></a></th><td headers="th3c">572</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>Xiaomi Redmi Note 13 Pro</nobr></a></th><td headers="th3c">557</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/asus_zenfone_10-12380.php"><nobr>Asus Zenfone 10</nobr></a></th><td headers="th3c">523</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_13_ultra-12236.php"><nobr>Xiaomi 13 Ultra</nobr></a></th><td headers="th3c">520</td><td></td></tr></tbody>

</table>
</div>
<div class="adv banner-mpu">
<span class="ad-label">ADVERTISEMENT</span>
<!-- /8095840/.2_A.34911.7_gsmarena.com_tier1 -->
<div id="div-gpt-ad-300x600btfgsmarenadesktop-0" style="height:600px; width:300px;"></div>
</div>

</aside>

</div><!-- id body -->
</div><!-- id outer -->




<div id="footer">
 <div class="footer-logo">
     <img src="./Rumored phones - GSMArena.com_files/logo-gsmarena-com.png" alt="">
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


<script type="text/javascript" src="./Rumored phones - GSMArena.com_files/autocomplete.js.download"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function()
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>














<div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Rumor mill</span><div class="logo" draggable="false"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/rumored.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/rumored.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad"></div><div class="thumb-gallery"><a class="go-up" href="https://www.gsmarena.com/rumored.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/rumored.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><img src="./Rumored phones - GSMArena.com_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;"><div id="extension-lfbpl"></div>

</template>
