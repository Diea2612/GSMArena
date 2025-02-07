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




<script type="text/javascript" src="./Mobile terms glossary - GSMArena.com_files/misc.js.download"></script>



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

<object type="image/svg+xml" data="./Mobile terms glossary - GSMArena.com_files/logo.svg" class="sweezy-custom-cursor-hover" style="null;cursor: url(&quot;data:image/png;base64,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&quot;) 5 8, pointer !important;"><img src="./Mobile terms glossary - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">
    
    <span id="quick-search-button">
      <input type="submit" value="Go">
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>
    

<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/glossary.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/glossary.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/glossary.php3#">More news results</a></li></ul></div></div><div class="search-buttons"><a class="go" href="https://www.gsmarena.com/glossary.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


  <a href="https://www.gsmarena.com/glossary.php3#" onclick="return false;" class="login-icon" id="login-active">
    <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
  </a>

  <span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MHhzcGxsfm1mMW93byw%3D">  
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
    background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/glossary-hlr.jpg');
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
        <h1 class="article-info-name">Mobile terms glossary</h1>
    </div>
</div>
<div class="article-info-line">
    <div class="blur bottom"></div>        <ul class="article-info-meta">
            
        </ul>
    </div>
</div>
</div>
</div>



              


<div class="st-text columns">

<h3>0 - 9</h3><p><a href="https://www.gsmarena.com/glossary.php3?term=2g">2G</a>  <a href="https://www.gsmarena.com/glossary.php3?term=35mm-jack">3.5mm headphone jack</a>  <a href="https://www.gsmarena.com/glossary.php3?term=3g">3G</a> <a href="https://www.gsmarena.com/glossary.php3?term=4g">4G</a> <a href="https://www.gsmarena.com/glossary.php3?term=5g">5G</a> <a href="https://www.gsmarena.com/glossary.php3?term=802-11%3Ch3%3EA%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="a-gps&quot;">A-GPS (Assisted GPS)</a> <a href="https://www.gsmarena.com/glossary.php3?term=a2dp">A2DP (Advanced Audio Distribution Profile)</a> <a href="https://www.gsmarena.com/glossary.php3?term=aac">AAC (Advanced Audio Coding)</a> <a href="https://www.gsmarena.com/glossary.php3?term=accelerometer">Accelerometer</a> <a href="https://www.gsmarena.com/glossary.php3?term=airplane-mode">Airplane mode</a> <a href="https://www.gsmarena.com/glossary.php3?term=alarm-clock">Alarm Clock</a> <a href="https://www.gsmarena.com/glossary.php3?term=alphanumeric">Alphanumeric</a> <a href="https://www.gsmarena.com/glossary.php3?term=amoled-display">AMOLED display (Active-matrix organic light-emitting diode)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=analog">Analog</a> <a href="https://www.gsmarena.com/glossary.php3?term=android">Android</a> <a href="https://www.gsmarena.com/glossary.php3?term=ant">ANT+</a>  <a href="https://www.gsmarena.com/glossary.php3?term=antenna">Antenna</a> <a href="https://www.gsmarena.com/glossary.php3?term=aperture">Aperture</a> <a href="https://www.gsmarena.com/glossary.php3?term=apn">APN (Access Point Name)</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-airplay">Apple AirPlay</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-airplay-2">Apple AirPlay 2</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios">Apple iOS</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios-10">Apple iOS 10</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios-11">Apple iOS 11</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios-12">Apple iOS 12</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios-7">Apple iOS 7</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios-8">Apple iOS 8</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-ios-9">Apple iOS 9</a> <a href="https://www.gsmarena.com/glossary.php3?term=apple-pay">Apple Pay</a> <a href="https://www.gsmarena.com/glossary.php3?term=aptx">aptX</a> <a href="https://www.gsmarena.com/glossary.php3?term=audio-jack">Audio jack</a> <a href="https://www.gsmarena.com/glossary.php3?term=auto-focus">Auto-focus</a> <a href="https://www.gsmarena.com/glossary.php3?term=avrcp">AVRCP (Audio/Video Remote Control </a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=avrcp">B</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=bada-os">Bada OS</a>  <a href="https://www.gsmarena.com/glossary.php3?term=band">Band</a> <a href="https://www.gsmarena.com/glossary.php3?term=bandwidth">Bandwidth</a> <a href="https://www.gsmarena.com/glossary.php3?term=bar">Bar</a> <a href="https://www.gsmarena.com/glossary.php3?term=base-station">Base Station</a> <a href="https://www.gsmarena.com/glossary.php3?term=battery-charging">Battery Charging</a> <a href="https://www.gsmarena.com/glossary.php3?term=beiDou">BeiDou Navigation Satellite System</a> <a href="https://www.gsmarena.com/glossary.php3?term=benchmarking">Benchmarking</a> <a href="https://www.gsmarena.com/glossary.php3?term=biometrics">Biometrics</a> <a href="https://www.gsmarena.com/glossary.php3?term=bit">Bit</a> <a href="https://www.gsmarena.com/glossary.php3?term=bb-os">BlackBerry OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=bb-playbook-os">BlackBerry Playbook OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=bluetooth">Bluetooth</a> <a href="https://www.gsmarena.com/glossary.php3?term=bps">bps (Bits per Second)</a> <a href="https://www.gsmarena.com/glossary.php3?term=brand">Brand</a> <a href="https://www.gsmarena.com/glossary.php3?term=broadband">Broadband</a> <a href="https://www.gsmarena.com/glossary.php3?term=browser">Browser</a> <a href="https://www.gsmarena.com/glossary.php3?term=by%3Ch3%3EC%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="calculator&quot;">Calculator</a>  <a href="https://www.gsmarena.com/glossary.php3?term=calendar">Calendar</a> <a href="https://www.gsmarena.com/glossary.php3?term=call-alerts">Call alerts</a> <a href="https://www.gsmarena.com/glossary.php3?term=calling-plan">Calling Plan</a> <a href="https://www.gsmarena.com/glossary.php3?term=camera">Camera</a> <a href="https://www.gsmarena.com/glossary.php3?term=capacitive-touchscreen">Capacitive Touchscreen</a> <a href="https://www.gsmarena.com/glossary.php3?term=car-kit">Car Kit</a> <a href="https://www.gsmarena.com/glossary.php3?term=carrier">Carrier</a> <a href="https://www.gsmarena.com/glossary.php3?term=cdma">CDMA (Code-Division Multiple Access)</a> <a href="https://www.gsmarena.com/glossary.php3?term=cdma2000">CDMA2000</a> <a href="https://www.gsmarena.com/glossary.php3?term=cell">Cell</a> <a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a> <a href="https://www.gsmarena.com/glossary.php3?term=chtml">cHTML (Compact HyperText Markup Language)</a> <a href="https://www.gsmarena.com/glossary.php3?term=cif">CIF (Common Intermediate Format)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=clamshell">Clamshell</a> <a href="https://www.gsmarena.com/glossary.php3?term=cmos">CMOS (Complementary metal-oxidesemiconductor)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=color-depth">Color depth</a> <a href="https://www.gsmarena.com/glossary.php3?term=concatenated-sms">Concatenated SMS</a> <a href="https://www.gsmarena.com/glossary.php3?term=connected-gps">Connected GPS</a> <a href="https://www.gsmarena.com/glossary.php3?term=build">Construction</a>  <a href="https://www.gsmarena.com/glossary.php3?term=gorilla-glass">Corning Gorilla Glass</a> <a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU (Central Processing Unit)</a> <a href="https://www.gsmarena.com/glossary.php3?term=crosstalk">Crosstalk</a> <a href="https://www.gsmarena.com/glossary.php3?term=cstn">CSTN (Color Super Twisted Nematic)</a> <a href="https://www.gsmarena.com/glossary.php3?term=ctia">CTIA</a> <a href="https://www.gsmarena.com/glossary.php3?term=custom-ringtones">Custom ringtones</a> <a href="https://www.gsmarena.com/glossary.php3?term=cyanogenmod">Cya</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=cyanogenmod">D</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=d-pad">D-Pad  (Direction Pad)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=data-disclaimer">Data Disclaimer</a> <a href="https://www.gsmarena.com/glossary.php3?term=dc-hsdpa">DC-HSDPA (Dual Carrier or Dual Cell High-Speed Downlink Packet Access)</a> <a href="https://www.gsmarena.com/glossary.php3?term=digital-zoom">Digital Zoom</a> <a href="https://www.gsmarena.com/glossary.php3?term=display-type">Display type</a> <a href="https://www.gsmarena.com/glossary.php3?term=dlna">DLNA (Digital Living Network Alliance)</a> <a href="https://www.gsmarena.com/glossary.php3?term=dnse">DNSe (Digital Natural Sound engine)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=downlink">Downlink</a> <a href="https://www.gsmarena.com/glossary.php3?term=drm">DRM (Digital Rights Management)</a> <a href="https://www.gsmarena.com/glossary.php3?term=dual-band">Dual-band</a> <a href="https://www.gsmarena.com/glossary.php3?term=dual-mode">Dual-Mode</a> <a href="https://www.gsmarena.com/glossary.php3?term=dual-sim">Dual-SIM</a> <a href="https://www.gsmarena.com/glossary.php3?term=dvb-h">DVB-H (Digital Video Broadcasting - Handheld)</a> <a href="https://www.gsmarena.com/glossary.php3?term=dynamic-memory">Dynami</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=dynamic-memory">E</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=edge">EDGE (Enhanced Data for Global Evolution)</a> <a href="https://www.gsmarena.com/glossary.php3?term=edr">EDR (Enhanced Data Rate)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=egprs">EGPRS</a> <a href="https://www.gsmarena.com/glossary.php3?term=egsm">EGSM (Extended GSM)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=email-client">Email client</a> <a href="https://www.gsmarena.com/glossary.php3?term=emoji">Emoji</a> <a href="https://www.gsmarena.com/glossary.php3?term=ems">EMS (Enhanced Message Service)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=esim">eSIM</a> <a href="https://www.gsmarena.com/glossary.php3?term=ev-do">EV-DO</a> <a href="https://www.gsmarena.com/glossary.php3?term=ev-dv">EV-DV</a> <a href="https://www.gsmarena.com/glossary.php3?term=exchangeable-covers">Exchangeable covers</a> <a href="https://www.gsmarena.com/glossary.php3?term=external-antenna-jack">External Antenna Jack</a> <a href="https://www.gsmarena.com/glossary.php3?term=external-display">External</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=external-display">F</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=fcc">FCC (Federal Communications Commission)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=feature-phone">Feature Phone</a> <a href="https://www.gsmarena.com/glossary.php3?term=femtocell">Femtocell</a> <a href="https://www.gsmarena.com/glossary.php3?term=firefox-os">Firefox OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=firmware">Firmware</a> <a href="https://www.gsmarena.com/glossary.php3?term=fixed-focus">Fixed-focus</a> <a href="https://www.gsmarena.com/glossary.php3?term=flash-memory">Flash Memory</a> <a href="https://www.gsmarena.com/glossary.php3?term=flight-mode">Flight mode</a> <a href="https://www.gsmarena.com/glossary.php3?term=flip-down-phone">Flip-down phone</a> <a href="https://www.gsmarena.com/glossary.php3?term=fm-radio">FM Radio</a> <a href="https://www.gsmarena.com/glossary.php3?term=fm-transmitter">FM Transmitter</a> <a href="https://www.gsmarena.com/glossary.php3?term=form-factor">Form factor</a> <a href="https://www.gsmarena.com/glossary.php3?term=fota">FOTA (Firmware Over-The-Air)</a> <a href="https://www.gsmarena.com/glossary.php3?term=fps">FPS (Frames Per Second)</a> <a href="https://www.gsmarena.com/glossary.php3?term=fer">Frame Error Rate</a>  <a href="https://www.gsmarena.com/glossary.php3?term=frequency">Frequency</a> <a href="https://www.gsmarena.com/glossary.php3?term=ftp">FTP (File Transfer P</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=ftp">G</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=galileo">Galileo (Global Navigation Satellite System)</a> <a href="https://www.gsmarena.com/glossary.php3?term=gigabyte">GB (Gigabyte)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=gbps">Gbps (Gigabits per second)</a> <a href="https://www.gsmarena.com/glossary.php3?term=geo-tag">Geo-tag</a> <a href="https://www.gsmarena.com/glossary.php3?term=glonass">GLONASS (Global Navigation Satellite System)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=gnss">GNSS Positioning</a> <a href="https://www.gsmarena.com/glossary.php3?term=gprs">GPRS</a> <a href="https://www.gsmarena.com/glossary.php3?term=gps">GPS (Global Positioning System)</a> <a href="https://www.gsmarena.com/glossary.php3?term=gpsone">gpsONE</a> <a href="https://www.gsmarena.com/glossary.php3?term=gpsonextra">gpsOneXTRA Assistance technology</a> <a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU (Graphics Processi</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=gpu">H</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=h263">H.263</a> <a href="https://www.gsmarena.com/glossary.php3?term=h264">H.264</a>  <a href="https://www.gsmarena.com/glossary.php3?term=h265">H.265</a>  <a href="https://www.gsmarena.com/glossary.php3?term=half-qwerty-keyboard">Half-QWERTY keyboard layout</a>  <a href="https://www.gsmarena.com/glossary.php3?term=handwriting-recognition">Handwriting recognition</a> <a href="https://www.gsmarena.com/glossary.php3?term=haptics">Haptics</a> <a href="https://www.gsmarena.com/glossary.php3?term=hevc">HEVC</a> <a href="https://www.gsmarena.com/glossary.php3?term=hot-spot">Hot Spot</a> <a href="https://www.gsmarena.com/glossary.php3?term=hot-swap">Hot Swap</a> <a href="https://www.gsmarena.com/glossary.php3?term=hscsd">HSCSD (High-Speed Circuit Switched Data)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=hsdpa">HSDPA (High-Speed Downlink Packet Access)</a> <a href="https://www.gsmarena.com/glossary.php3?term=hsdpa+">HSDPA+ (High-Speed Downlink Packet Access Plus)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=hsp">HSP (Headset Profile)</a> <a href="https://www.gsmarena.com/glossary.php3?term=hsupa">HSUPA (High-Speed Uplink Packet Access)</a> <a href="https://www.gsmarena.com/glossary.php3?term=html">HTML (Hypertext Markup Language)</a> <a href="https://www.gsmarena.com/glossary.php3?term=hz">Hz</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=hz">I</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=iden">iDEN (Integrated Digital Enhanced Network)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=isp">Image Signal Processor (ISP)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=imap">IMAP (Internet Message Access Protocol)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=imei">IMEI (International Mobile Equipment Identity)</a> <a href="https://www.gsmarena.com/glossary.php3?term=ip">IP (Internet Protocol)</a> <a href="https://www.gsmarena.com/glossary.php3?term=ip-ratings">IP Ratings</a> <a href="https://www.gsmarena.com/glossary.php3?term=irda">IrDA (Infrared Data Asso</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=irda">J</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=ja%3Ch3%3EK%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="kb&quot;">KB (Kilobyte)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=kbps">Kbps (Kilobits per second)</a> <a href="https://www.gsmarena.com/glossary.php3?term=key-guard">Key Guard</a> <a href="https://www.gsmarena.com/glossary.php3?term=key-lock-switch">Key Loc</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=key-lock-switch">L</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=land-line">Land line</a> <a href="https://www.gsmarena.com/glossary.php3?term=lcd">LCD (Liquid Crystal Display)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=led">LED (Light-Emitting Diode)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=li-ion">Li-Ion (Lithium Ion)</a> <a href="https://www.gsmarena.com/glossary.php3?term=li-polymer">Li-Polymer (Lithium Polymer)</a> <a href="https://www.gsmarena.com/glossary.php3?term=limo-os">LiMo OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=linux">Linux</a> <a href="https://www.gsmarena.com/glossary.php3?term=location-based-services">Location-Based Services (LBS)</a> <a href="https://www.gsmarena.com/glossary.php3?term=lock-code">Lock code</a> <a href="https://www.gsmarena.com/glossary.php3?term=long-sms">Long SMS</a> <a href="https://www.gsmarena.com/glossary.php3?term=long-term-evolution">Long Term Evolution (LTE)</a> <a href="https://www.gsmarena.com/glossary.php3?term=loudspeaker">Lou</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=loudspeaker">M</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=macro">Macro</a> <a href="https://www.gsmarena.com/glossary.php3?term=maemo-os">Maemo OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=magnetometer">Magnetometer</a> <a href="https://www.gsmarena.com/glossary.php3?term=mah">mAh</a> <a href="https://www.gsmarena.com/glossary.php3?term=mass-storage-mode">Mass Storage mode</a> <a href="https://www.gsmarena.com/glossary.php3?term=mb">MB (Megabyte)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=mbps">Mbps (Megabit per second)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=meego-os">MeeGo OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=megapixel">Megapixel</a> <a href="https://www.gsmarena.com/glossary.php3?term=memory-card-slot">Memory card slot</a> <a href="https://www.gsmarena.com/glossary.php3?term=memory-effect">Memory effect</a> <a href="https://www.gsmarena.com/glossary.php3?term=messaging">Messaging</a> <a href="https://www.gsmarena.com/glossary.php3?term=mhz">MHz (Megahertz)</a> <a href="https://www.gsmarena.com/glossary.php3?term=micro-usb">Micro USB</a> <a href="https://www.gsmarena.com/glossary.php3?term=microsd">microSD</a> <a href="https://www.gsmarena.com/glossary.php3?term=microsdhc">microSDHC</a> <a href="https://www.gsmarena.com/glossary.php3?term=microsoft-exchange">Microsoft Exchange (Server)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=midi">MIDI (Musical Instrument Digital Interface)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=midp">MIDP (Mobile Information Device Profile)</a> <a href="https://www.gsmarena.com/glossary.php3?term=mil-spec">Mil-Spec (MIL-STD)</a> <a href="https://www.gsmarena.com/glossary.php3?term=mimo">MIMO</a> <a href="https://www.gsmarena.com/glossary.php3?term=mini-usb">Mini-USB</a> <a href="https://www.gsmarena.com/glossary.php3?term=minisd">miniSD</a> <a href="https://www.gsmarena.com/glossary.php3?term=mmc">MMC</a> <a href="https://www.gsmarena.com/glossary.php3?term=mmcmobile">MMCmobile</a> <a href="https://www.gsmarena.com/glossary.php3?term=mms">MMS (Multimedia Messaging Service)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=mobile-games">Mobile games</a> <a href="https://www.gsmarena.com/glossary.php3?term=mhl">Mobile High-Definition Link (MHL)</a> <a href="https://www.gsmarena.com/glossary.php3?term=mobile-instant-messaging">Mobile IM (Instant Messaging)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=mobile-wimax">Mobile WiMAX</a> <a href="https://www.gsmarena.com/glossary.php3?term=mydp">Mobility DisplayPort (MyDP)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=models">Models</a> <a href="https://www.gsmarena.com/glossary.php3?term=modem">Modem</a> <a href="https://www.gsmarena.com/glossary.php3?term=monochrome">Monochrome</a> <a href="https://www.gsmarena.com/glossary.php3?term=mp3">MP3 (MPEG Layer 3)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=mpeg">MPEG (Motion Picture Experts Group)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=mpeg-4-video">MPEG-4 video</a> <a href="https://www.gsmarena.com/glossary.php3?term=multitouch">Multitouch input method</a>  <a href="https://www.gsmarena.com/glossary.php3?term=music-playback-time">Music playback time (battery life)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=music-player">Musi</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=music-player">N</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=nand-memory">NAND Memory</a>  <a href="https://www.gsmarena.com/glossary.php3?term=network-capacity">Network capacity</a> <a href="https://www.gsmarena.com/glossary.php3?term=network-coverage">Network coverage</a> <a href="https://www.gsmarena.com/glossary.php3?term=nfc">NFC (Near Field Communication)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=nicd">NiCd (Nickel Cadmium)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=nimh">NiMH (Nickel Metal Hydride)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=nor-memory">NOR Memory</a> <a href="https://www.gsmarena.com/glossary.php3?term=numeric-keypad">Numeri</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=numeric-keypad">O</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=oem">OEM (Original Equipment Manufacturer)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=oled">OLED (Organic Light-Emitting Diode)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=optical-zoom">Optical Zoom</a> <a href="https://www.gsmarena.com/glossary.php3?term=os">OS (Operating System)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=ota">OTA (Over-The-Air)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=%3Ch3%3EP%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="packet-data&quot;">Packet Data</a>  <a href="https://www.gsmarena.com/glossary.php3?term=pager">Pager</a> <a href="https://www.gsmarena.com/glossary.php3?term=pc-sync">PC Sync</a> <a href="https://www.gsmarena.com/glossary.php3?term=pcs">PCS (Personal Communications Service)</a> <a href="https://www.gsmarena.com/glossary.php3?term=pda">PDA (Personal Digital Assistant)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=percentile-rank">Percentile rank</a> <a href="https://www.gsmarena.com/glossary.php3?term=phone-book-access">Phone Book Access (PBA)</a> <a href="https://www.gsmarena.com/glossary.php3?term=phone-life-cycle">Phone Life Cycle</a> <a href="https://www.gsmarena.com/glossary.php3?term=phone-physical-attributes">Phone Physical Attributes</a> <a href="https://www.gsmarena.com/glossary.php3?term=phonebook">Phonebook</a> <a href="https://www.gsmarena.com/glossary.php3?term=pim">PIM (Personal Information Manager/Management)</a> <a href="https://www.gsmarena.com/glossary.php3?term=pin-code">PIN code (Personal Identification Number)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=pixel">Pixel</a> <a href="https://www.gsmarena.com/glossary.php3?term=pixel-density">Pixel density (Pixels Per Inch)</a> <a href="https://www.gsmarena.com/glossary.php3?term=polyphonic-ringtones">Polyphonic ringtones</a> <a href="https://www.gsmarena.com/glossary.php3?term=pop3">POP3 (Post Office Protocol)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=port">Port</a> <a href="https://www.gsmarena.com/glossary.php3?term=predictive-text-input">Predictive text input</a> <a href="https://www.gsmarena.com/glossary.php3?term=price">Price</a> <a href="https://www.gsmarena.com/glossary.php3?term=ptt">PTT (Push-To-Talk)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=puk-code">PUK Code (PIN UnlocK Code)</a> <a href="https://www.gsmarena.com/glossary.php3?term=pu%3Ch3%3EQ%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="qcif&quot;">QCIF (Quarter Common Intermediate Format)</a> <a href="https://www.gsmarena.com/glossary.php3?term=quad-band">Quad-band</a> <a href="https://www.gsmarena.com/glossary.php3?term=qzss">Quasi-Zenith Satellite System (QZSS)</a> <a href="https://www.gsmarena.com/glossary.php3?term=qvga">QVGA (Quarter Video Graphics Array)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=qwerty-keyboard">QWERTY keyboar</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=qwerty-keyboard">R</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=ram">RAM (Random-Access Memory)</a> <a href="https://www.gsmarena.com/glossary.php3?term=rbds">RBDS (Radio Broadcast Data System)</a> <a href="https://www.gsmarena.com/glossary.php3?term=rds">RDS (Radio Data System)</a> <a href="https://www.gsmarena.com/glossary.php3?term=rechargeable-battery-types">Rechargeable Battery Types</a> <a href="https://www.gsmarena.com/glossary.php3?term=resistive-touchscreen">Resistive touchscreen</a> <a href="https://www.gsmarena.com/glossary.php3?term=resolution">Resolution</a> <a href="https://www.gsmarena.com/glossary.php3?term=ringer-id">Ringer ID</a> <a href="https://www.gsmarena.com/glossary.php3?term=ringing-profiles">Ringing profiles</a> <a href="https://www.gsmarena.com/glossary.php3?term=ringtone">Ringtone</a> <a href="https://www.gsmarena.com/glossary.php3?term=roaming">Roaming</a> <a href="https://www.gsmarena.com/glossary.php3?term=rom">ROM (Read-Only Memory)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=rs-mmc">RS-MMC (Reduced-Size Multi Media Card)</a> <a href="https://www.gsmarena.com/glossary.php3?term=rsa">RSA (Rural Service Area)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=rss">RSS (Rich Site Summary)</a> <a href="https://www.gsmarena.com/glossary.php3?term=ruggedized">Ruggedized </a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=ruggedized">S</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=s60-ui">S60 user interface</a> <a href="https://www.gsmarena.com/glossary.php3?term=sap">SAP (SIM Access Profile)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=sar">SAR (Specific absorption rate)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=screen-protection">Screen protection</a> <a href="https://www.gsmarena.com/glossary.php3?term=sd">SD (Secure Digital)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=secondary-camera">Secondary camera</a> <a href="https://www.gsmarena.com/glossary.php3?term=sensors">Sensors</a> <a href="https://www.gsmarena.com/glossary.php3?term=side-keys">Side Keys</a> <a href="https://www.gsmarena.com/glossary.php3?term=sim">SIM</a> <a href="https://www.gsmarena.com/glossary.php3?term=sim-lock">SIM lock</a> <a href="https://www.gsmarena.com/glossary.php3?term=single-band">Single-Band</a> <a href="https://www.gsmarena.com/glossary.php3?term=skin">Skin</a> <a href="https://www.gsmarena.com/glossary.php3?term=slimport">Slimport</a> <a href="https://www.gsmarena.com/glossary.php3?term=smart-watch">Smart Watch</a> <a href="https://www.gsmarena.com/glossary.php3?term=smartphone">Smartphone</a> <a href="https://www.gsmarena.com/glossary.php3?term=smil">SMIL</a> <a href="https://www.gsmarena.com/glossary.php3?term=sms">SMS (Short Messaging Service)</a> <a href="https://www.gsmarena.com/glossary.php3?term=sns">SNS (Social network service)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=soft-keys">Soft keys</a> <a href="https://www.gsmarena.com/glossary.php3?term=soft-reset">Soft Reset</a> <a href="https://www.gsmarena.com/glossary.php3?term=speed-dial">Speed Dial</a> <a href="https://www.gsmarena.com/glossary.php3?term=stand-by-time">Stand-by time (battery life)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=stereo-speakers">Stereo Speakers</a> <a href="https://www.gsmarena.com/glossary.php3?term=streaming-video">Streaming Video</a> <a href="https://www.gsmarena.com/glossary.php3?term=stylus">Stylus</a> <a href="https://www.gsmarena.com/glossary.php3?term=sub-qcif">Sub-QCIF</a> <a href="https://www.gsmarena.com/glossary.php3?term=svga">SVGA</a> <a href="https://www.gsmarena.com/glossary.php3?term=symbian">Symbian</a> <a href="https://www.gsmarena.com/glossary.php3?term=syncml%3Ch3%3ET%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="talk-time&quot;">Talk time (battery life)</a> <a href="https://www.gsmarena.com/glossary.php3?term=tcp-ip">TCP/IP</a> <a href="https://www.gsmarena.com/glossary.php3?term=td-scdma">TD-SCDMA (Time Division-Synchronous Code Division Multiple Access)</a> <a href="https://www.gsmarena.com/glossary.php3?term=test">TEST</a> <a href="https://www.gsmarena.com/glossary.php3?term=tethering">Tethering</a> <a href="https://www.gsmarena.com/glossary.php3?term=texting">Text messaging (texting)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=tfd">TFD (Thin Film Diode)</a> <a href="https://www.gsmarena.com/glossary.php3?term=tft">TFT (Thin Film Transistor)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=theme">Theme</a> <a href="https://www.gsmarena.com/glossary.php3?term=to-do-list">To-Do list</a> <a href="https://www.gsmarena.com/glossary.php3?term=touchscreen">Touchscreen</a> <a href="https://www.gsmarena.com/glossary.php3?term=trackball">Trackball</a> <a href="https://www.gsmarena.com/glossary.php3?term=transflash">Transflash</a> <a href="https://www.gsmarena.com/glossary.php3?term=transflective">Transflective</a> <a href="https://www.gsmarena.com/glossary.php3?term=tri-band"></a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=tri-band">U</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=ufs">UFS</a>  <a href="https://www.gsmarena.com/glossary.php3?term=ui">UI (User Interface)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=uiq">UIQ</a> <a href="https://www.gsmarena.com/glossary.php3?term=uma">UMA</a> <a href="https://www.gsmarena.com/glossary.php3?term=umts">UMTS</a> <a href="https://www.gsmarena.com/glossary.php3?term=unlocked-phone">Unlocked phone</a> <a href="https://www.gsmarena.com/glossary.php3?term=upload">Upload</a> <a href="https://www.gsmarena.com/glossary.php3?term=upnp">UPnP (Universal Plug and Play)</a> <a href="https://www.gsmarena.com/glossary.php3?term=usb">USB (Universal Serial Bus)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=usb-on-the-go">USB On-The-Go</a> <a href="https://www.gsmarena.com/glossary.php3?term=us%3Ch3%3EV%3C/h3%3E%3Cp%3E%3Ca%20href=" glossary.php3?term="vga&quot;">VGA (Video Graphics Array)</a> <a href="https://www.gsmarena.com/glossary.php3?term=video-call">Video call</a> <a href="https://www.gsmarena.com/glossary.php3?term=video-codec">Video Codec</a> <a href="https://www.gsmarena.com/glossary.php3?term=voice-dialing">Voice dialing</a> <a href="https://www.gsmarena.com/glossary.php3?term=voice-mail">Voice mail</a> <a href="https://www.gsmarena.com/glossary.php3?term=voice-memo">Voice memo</a> <a href="https://www.gsmarena.com/glossary.php3?term=voip">VoIP (Voice over Internet Protocol)</a>  <a href="https://www.gsmarena.com/glossary.php3?term=vpn">VPN (Virtual Private </a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=vpn">W</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=wap">WAP (Wireless Application protocol)</a> <a href="https://www.gsmarena.com/glossary.php3?term=watchos">watchOS</a> <a href="https://www.gsmarena.com/glossary.php3?term=wcdma">WCDMA(Wideband Code Division Multiple Access)</a> <a href="https://www.gsmarena.com/glossary.php3?term=wear-os">Wear OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=wearable-technology">Wearable Technology</a> <a href="https://www.gsmarena.com/glossary.php3?term=web-os">webOS</a>  <a href="https://www.gsmarena.com/glossary.php3?term=wi-fi">Wi-Fi</a> <a href="https://www.gsmarena.com/glossary.php3?term=windows-mobile">Windows Mobile</a> <a href="https://www.gsmarena.com/glossary.php3?term=windows-phone-os">Windows Phone OS</a> <a href="https://www.gsmarena.com/glossary.php3?term=wireless-email">Wireless email</a> <a href="https://www.gsmarena.com/glossary.php3?term=wlan">WLAN</a> <a href="https://www.gsmarena.com/glossary.php3?term=wmv">WMV (Windows Medi</a></p><h3><a href="https://www.gsmarena.com/glossary.php3?term=wmv">X</a></h3><p><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">Xen</a></p><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">
</a></div><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">  


</a></div><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">

</a><aside class="sidebar col left"><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">

</a><div class="brandmenu-v2 light l-box clearfix"><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">
</a><p class="pad"><a href="https://www.gsmarena.com/glossary.php3?term=xenon-flash">
</a><a href="https://www.gsmarena.com/search.php3" class="pad-single pad-finder">
<i class="head-icon icon-search-right"></i>
<span>Phone finder</span></a>
</p>
<ul>
<li><a href="https://www.gsmarena.com/samsung-phones-9.php">Samsung</a></li><li><a href="https://www.gsmarena.com/apple-phones-48.php">Apple</a></li><li><a href="https://www.gsmarena.com/huawei-phones-58.php">Huawei</a></li><li><a href="https://www.gsmarena.com/nokia-phones-1.php">Nokia</a></li><li><a href="https://www.gsmarena.com/sony-phones-7.php">Sony</a></li><li><a href="https://www.gsmarena.com/lg-phones-20.php">LG</a></li><li><a href="https://www.gsmarena.com/htc-phones-45.php">HTC</a></li><li><a href="https://www.gsmarena.com/motorola-phones-4.php">Motorola</a></li><li><a href="https://www.gsmarena.com/lenovo-phones-73.php">Lenovo</a></li><li><a href="https://www.gsmarena.com/xiaomi-phones-80.php">Xiaomi</a></li><li><a href="https://www.gsmarena.com/google-phones-107.php">Google</a></li><li><a href="https://www.gsmarena.com/honor-phones-121.php">Honor</a></li><li><a href="https://www.gsmarena.com/oppo-phones-82.php">Oppo</a></li><li><a href="https://www.gsmarena.com/realme-phones-118.php">Realme</a></li><li><a href="https://www.gsmarena.com/oneplus-phones-95.php">OnePlus</a></li><li><a href="https://www.gsmarena.com/nothing-phones-128.php">Nothing</a></li><li><a href="https://www.gsmarena.com/vivo-phones-98.php">vivo</a></li><li><a href="https://www.gsmarena.com/meizu-phones-74.php">Meizu</a></li><li><a href="https://www.gsmarena.com/asus-phones-46.php">Asus</a></li><li><a href="https://www.gsmarena.com/alcatel-phones-5.php">Alcatel</a></li><li><a href="https://www.gsmarena.com/zte-phones-62.php">ZTE</a></li><li><a href="https://www.gsmarena.com/microsoft-phones-64.php">Microsoft</a></li><li><a href="https://www.gsmarena.com/umidigi-phones-135.php">Umidigi</a></li><li><a href="https://www.gsmarena.com/energizer-phones-106.php">Energizer</a></li><li><a href="https://www.gsmarena.com/cat-phones-89.php">Cat</a></li><li><a href="https://www.gsmarena.com/sharp-phones-23.php">Sharp</a></li><li><a href="https://www.gsmarena.com/micromax-phones-66.php">Micromax</a></li><li><a href="https://www.gsmarena.com/infinix-phones-119.php">Infinix</a></li><li><a href="https://www.gsmarena.com/ulefone_-phones-124.php">Ulefone</a></li><li><a href="https://www.gsmarena.com/tecno-phones-120.php">Tecno</a></li><li><a href="https://www.gsmarena.com/doogee-phones-129.php">Doogee</a></li><li><a href="https://www.gsmarena.com/blackview-phones-116.php">Blackview</a></li><li><a href="https://www.gsmarena.com/cubot-phones-130.php">Cubot</a></li><li><a href="https://www.gsmarena.com/oukitel-phones-132.php">Oukitel</a></li><li><a href="https://www.gsmarena.com/itel-phones-131.php">Itel</a></li><li><a href="https://www.gsmarena.com/tcl-phones-123.php">TCL</a></li></ul>

<<p class="pad">
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



<div class="module reviews-xl-snazzy">
<h4 class="section-heading">Popular reviews</h4>

<a href="https://www.gsmarena.com/google_pixel_9_pro_xl-review-2738.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb xl-thumb-large" src="./Mobile terms glossary - GSMArena.com_files/gsmarena_001.jpg" alt="Google Pixel 9 Pro XL review">
  <div class="module-review-xl-title">
    
    <strong>Google Pixel 9 Pro XL review</strong>
  </div>
</a>
<a href="https://www.gsmarena.com/google_pixel_9-review-2739.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb xl-thumb-large" src="./Mobile terms glossary - GSMArena.com_files/gsmarena_001(1).jpg" alt="Google Pixel 9 review">
  <div class="module-review-xl-title">
    
    <strong>Google Pixel 9 review</strong>
  </div>
</a>
<a href="https://www.gsmarena.com/motorola_edge_50_and_50_neo_handson-review-2741.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb xl-thumb-large" src="./Mobile terms glossary - GSMArena.com_files/gsmarena_000.jpg" alt="Motorola Edge 50 and Edge 50 Neo hands-on review">
  <div class="module-review-xl-title">
    
    <strong>Motorola Edge 50 and Edge 50 Neo hands-on review</strong>
  </div>
</a>

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
     <img src="./Mobile terms glossary - GSMArena.com_files/logo-gsmarena-com.png" alt="">
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


<script type="text/javascript" src="./Mobile terms glossary - GSMArena.com_files/autocomplete.js.download"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function() 
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>














<div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Mobile terms glossary</span><div class="logo" draggable="false" style="display: none;"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image" style="background-size: contain, contain;"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/glossary.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/glossary.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad" style="display: none;"></div><div class="thumb-gallery" style="display: none;"><a class="go-up" href="https://www.gsmarena.com/glossary.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/glossary.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><iframe name="__tcfapiLocator" style="display: none;" src="./Mobile terms glossary - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Mobile terms glossary - GSMArena.com_files/saved_resource(1).html"></iframe><img src="./Mobile terms glossary - GSMArena.com_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;">

</template>