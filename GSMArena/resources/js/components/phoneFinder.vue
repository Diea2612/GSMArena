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



      <script type="text/javascript" src="./Phone Finder - search for a phone by feature - GSMArena.com_files/misc.js.تنزيل"></script>



      <header id="header" class="row open slide headroom--top">
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

      <object type="image/svg+xml" data="./Phone Finder - search for a phone by feature - GSMArena.com_files/logo.svg"><img src="./Phone Finder - search for a phone by feature - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
      <span>GSMArena.com</span></a>
      </div>



      <div id="nav" role="main">
      <form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
          <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">

          <span id="quick-search-button">
            <input type="submit" value="Go">
            <i class="head-icon icomoon-liga icon-search-left"></i>
          </span>


      <div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/search.php3?#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/search.php3?#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/search.php3?#">More news results</a></li></ul></div></div><div class="search-buttons"><a class="go" href="https://www.gsmarena.com/search.php3?#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


      <a href="https://www.facebook.com/GSMArenacom-189627474421/" class="fb-icon" target="_blank" rel="noopener">
      	<i class="head-icon icon-soc-fb2 icomoon-liga"></i><br><span class="icon-count">891k</span>
      </a>
      <a href="https://twitter.com/gsmarena_com" class="tw-icon" target="_blank" rel="noopener">
        <i class="head-icon icon-soc-twitter2 icomoon-liga"></i><br><span class="icon-count">166k</span>
      </a>





      <span class="bar"></span>


      	<a href="https://www.gsmarena.com/search.php3?#" onclick="return false;" class="login-icon" id="login-active">
      	  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
      	</a>

      	<span class="tooltip" id="login-popup2">
      <form action="https://www.gsmarena.com/login.php3" method="post">
      <input type="Hidden" name="sSource" value="MGx6fm18dzFvd28s">
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



       <script src="./Phone Finder - search for a phone by feature - GSMArena.com_files/bootstrap-select.js.تنزيل"></script>
      <iframe name="__uspapiLocator" style="display: none;" src="./Phone Finder - search for a phone by feature - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__tcfapiLocator" style="display: none;" src="./Phone Finder - search for a phone by feature - GSMArena.com_files/saved_resource(1).html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Phone Finder - search for a phone by feature - GSMArena.com_files/saved_resource(2).html"></iframe><script type="text/javascript" src="./Phone Finder - search for a phone by feature - GSMArena.com_files/bootstrap.min.js.تنزيل"></script>
      <script src="./Phone Finder - search for a phone by feature - GSMArena.com_files/jquery.nouislider.min.js.تنزيل"></script>


      <script type="text/javascript">

      	var osVersionNames = {
      		1: [],
      		2: [["Android 14", "2950"],["Android 13", "2940"],["Android 12", "2930"],["Android 11", "2920"],["Android 10", "2910"],["Android 9.0 Pie", "2900"],["Android 8.1 Oreo", "2810"],["Android 8.0 Oreo", "2800"],["Android 7.1 Nougat", "2710"], ["Android 7.0 Nougat", "2700"], ["Android 6.0 Marshmallow", "2600"], ["Android 5.1 Lollipop", "2510"], ["Android 5.0 Lollipop", "2500"], ["Android 4.4 KitKat", "2440"],["Android 4.1-4.3 Jelly Bean", "2410"],["Android 4.0 Ice Cream Sandwich", "2400"],["Android 3.x Honeycomb", "2300"],["Android 2.3 Gingerbread", "2230"], ["Android 2.2 Froyo", "2220"],["Android 2.0-2.1 Eclair", "2200"],["Android 1.6 Donut", "2160"]],
      		3: [["iOS 16", "3970"], ["iOS 15", "3960"], ["iOS 14", "3950"], ["iOS 13", "3940"], ["iOS 12", "3930"], ["iOS 11", "3920"], ["iOS 10", "3910"],["iOS 9", "3900"],["iOS 8", "3800"],["iOS 7", "3700"],["iOS 6", "3600"], ["iOS 5", "3500"],["iOS 4", "3400"]],
      		4: [["Windows 10", "4900"],["Windows Phone 8.1", "4810"],["Windows Phone 8.0", "4800"],["Windows Phone 7.8", "4780"],["Windows Phone 7.5 Refresh/Tango", "4760"],["Windows Phone 7.5 Mango", "4750"],["Windows Phone 7.0", "4700"]],
      		5: [["Nokia Belle", "5400"], ["Symbian Anna", "5300"],["Symbian^3", "5200"],["Symbian S60 5th ed", "5100"]],
      		6: [["BlackBerry OS 10", "6100"],["BlackBerry OS 9", "6090"],["BlackBerry OS 8", "6080"],["BlackBerry OS 7", "6070"]],
      		7: [["Bada v2.x", "7200"],["Bada v1.x", "7100"]],
      		9: [["Firefox OS 2.1", "9210"],["Firefox OS 2.0", "9200"],["Firefox OS 1.4", "9140"],["Firefox OS 1.3", "9130"],["Firefox OS 1.1", "9110"],["Firefox OS 1.0", "9100"]],
      		10: [["KaiOS 2.5", "10250"],["KaiOS 3.1", "10310"]]
      	};

      </script>

      <script src="./Phone Finder - search for a phone by feature - GSMArena.com_files/phonefinder.js.تنزيل"></script> -->

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


      <div id="body" class="main-column-full">

      	<div class="page-header clearfix">

      	<!-- MAIN BOX -->



      <style>
      .review-background {
          background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/phonefinder-hlr.jpg');
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
              <h1 class="article-info-name">Phone finder</h1>
          </div>
      </div>
      <div class="article-info-line">
          <div class="blur bottom"></div>

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
<!--  <a href="{{ route('rumorMil') }}" class="pad-multiple pad-allbrands">
    <i class="head-icon icon-mobile-phone231"></i>
    <span>Rumor mill</span>
  </a>
    <a href="/rumorMil.blade.php" class="pad-multiple pad-allbrands">
      <i class="head-icon icon-mobile-phone231"></i>
      <span>Rumor mill</span>
    </a> -->
      </a>
      </p>
      </div>
      </aside>



      </div>  <!-- page header -->




      <form action="https://www.gsmarena.com/results.php3" method="get" class="phonefinder row tabs-phone-highlight">


      <div class="row search-button-position">
      <span class="pf-border show-button">
      <input type="submit" value="Show" class="pf-button">
      <br><span class="pf-results" id="pf-results">11961 results</span>
      </span>
      </div>

      <ul class="article-info-meta tabs" id="tabs">
      <li class="article-info-meta-link tab-tablet"><a href="https://www.gsmarena.com/search.php3?mode=tablet">Tablets</a></li>
      <li class="article-info-meta-link tab-phone tab-current"><a href="https://www.gsmarena.com/search.php3?#1">Phones</a></li>
      <br style="clear:both;">
      </ul>





      	  <!-- GENERAL -->
      	  <div class="row">
      		<h3 class="phonefinder-title">General</h3>
      		<div class="row">
      		  <div class="l-col l-col-1-2 mr10">
      			<label for="" style="display: none;">Brand:</label>
      			<select name="sMakers" id="sMakers" multiple="" class="phonefinder-select" data-live-search="true" title="" style="display: none;">
      			<option value="59">Acer</option><option value="5">alcatel</option><option value="88">Allview</option><option value="76">Amazon</option><option value="28">Amoi</option><option value="48">Apple</option><option value="90">Archos</option><option value="46">Asus</option><option value="57">AT&amp;T</option><option value="15">Benefon</option><option value="31">BenQ</option><option value="42">BenQ-Siemens</option><option value="34">Bird</option><option value="36">BlackBerry</option><option value="116">Blackview</option><option value="67">BLU</option><option value="10">Bosch</option><option value="108">BQ</option><option value="77">Casio</option><option value="89">Cat</option><option value="75">Celkon</option><option value="24">Chea</option><option value="105">Coolpad</option><option value="130">Cubot</option><option value="61">Dell</option><option value="129">Doogee</option><option value="104">EE</option><option value="93">Emporia</option><option value="106">Energizer</option><option value="2">Ericsson</option><option value="40">Eten</option><option value="127">Fairphone</option><option value="50">Fujitsu Siemens</option><option value="65">Garmin-Asus</option><option value="47">Gigabyte</option><option value="92">Gionee</option><option value="107">Google</option><option value="33">Haier</option><option value="133">HMD</option><option value="121">Honor</option><option value="41">HP</option><option value="45">HTC</option><option value="58">Huawei</option><option value="35">i-mate</option><option value="52">i-mobile</option><option value="69">Icemobile</option><option value="119">Infinix</option><option value="29">Innostream</option><option value="60">iNQ</option><option value="102">Intex</option><option value="131">itel</option><option value="84">Jolla</option><option value="83">Karbonn</option><option value="17">Kyocera</option><option value="94">Lava</option><option value="109">LeEco</option><option value="73">Lenovo</option><option value="20">LG</option><option value="14">Maxon</option><option value="87">Maxwest</option><option value="74">Meizu</option><option value="66">Micromax</option><option value="64">Microsoft</option><option value="25">Mitac</option><option value="8">Mitsubishi</option><option value="63">Modu</option><option value="4">Motorola</option><option value="56">MWg</option><option value="12">NEC</option><option value="22">Neonode</option><option value="79">NIU</option><option value="1">Nokia</option><option value="128">Nothing</option><option value="97">Nvidia</option><option value="30">O2</option><option value="95">OnePlus</option><option value="82">Oppo</option><option value="71">Orange</option><option value="134">Oscal</option><option value="132">Oukitel</option><option value="27">Palm</option><option value="6">Panasonic</option><option value="32">Pantech</option><option value="81">Parla</option><option value="11">Philips</option><option value="72">Plum</option><option value="101">Posh</option><option value="86">Prestigio</option><option value="103">QMobile</option><option value="38">Qtek</option><option value="117">Razer</option><option value="118">Realme</option><option value="13">Sagem</option><option value="9">Samsung</option><option value="18">Sendo</option><option value="26">Sewon</option><option value="23">Sharp</option><option value="3">Siemens</option><option value="54">Sonim</option><option value="7">Sony</option><option value="19">Sony Ericsson</option><option value="68">Spice</option><option value="55">T-Mobile</option><option value="123">TCL</option><option value="120">Tecno</option><option value="21">Tel.Me.</option><option value="16">Telit</option><option value="49">Thuraya</option><option value="44">Toshiba</option><option value="124">Ulefone</option><option value="135">Umidigi</option><option value="91">Unnecto</option><option value="39">Vertu</option><option value="70">verykool</option><option value="98">vivo</option><option value="37">VK Mobile</option><option value="53">Vodafone</option><option value="96">Wiko</option><option value="51">WND</option><option value="43">XCute</option><option value="80">Xiaomi</option><option value="85">XOLO</option><option value="78">Yezz</option><option value="99">Yota</option><option value="100">YU</option><option value="62">ZTE</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="sMakers" title=""><span class="label">Brand:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Acer&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Acer</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;alcatel&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">alcatel</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Allview&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Allview</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Amazon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Amazon</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Amoi&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Amoi</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Apple&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Apple</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Archos&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Archos</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Asus&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Asus</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;AT&amp;T&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">AT&amp;T</span></a></li><li data-original-index="9"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Benefon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Benefon</span></a></li><li data-original-index="10"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;BenQ&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">BenQ</span></a></li><li data-original-index="11"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;BenQ-Siemens&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">BenQ-Siemens</span></a></li><li data-original-index="12"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bird&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bird</span></a></li><li data-original-index="13"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;BlackBerry&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">BlackBerry</span></a></li><li data-original-index="14"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Blackview&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Blackview</span></a></li><li data-original-index="15"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;BLU&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">BLU</span></a></li><li data-original-index="16"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bosch&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bosch</span></a></li><li data-original-index="17"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;BQ&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">BQ</span></a></li><li data-original-index="18"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Casio&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Casio</span></a></li><li data-original-index="19"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Cat&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Cat</span></a></li><li data-original-index="20"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Celkon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Celkon</span></a></li><li data-original-index="21"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Chea&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Chea</span></a></li><li data-original-index="22"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Coolpad&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Coolpad</span></a></li><li data-original-index="23"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Cubot&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Cubot</span></a></li><li data-original-index="24"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dell&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dell</span></a></li><li data-original-index="25"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Doogee&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Doogee</span></a></li><li data-original-index="26"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;EE&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">EE</span></a></li><li data-original-index="27"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Emporia&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Emporia</span></a></li><li data-original-index="28"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Energizer&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Energizer</span></a></li><li data-original-index="29"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Ericsson&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Ericsson</span></a></li><li data-original-index="30"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Eten&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Eten</span></a></li><li data-original-index="31"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Fairphone&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Fairphone</span></a></li><li data-original-index="32"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Fujitsu Siemens&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Fujitsu Siemens</span></a></li><li data-original-index="33"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Garmin-Asus&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Garmin-Asus</span></a></li><li data-original-index="34"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Gigabyte&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Gigabyte</span></a></li><li data-original-index="35"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Gionee&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Gionee</span></a></li><li data-original-index="36"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Google&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Google</span></a></li><li data-original-index="37"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Haier&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Haier</span></a></li><li data-original-index="38"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HMD&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HMD</span></a></li><li data-original-index="39"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Honor&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Honor</span></a></li><li data-original-index="40"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HP&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HP</span></a></li><li data-original-index="41"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HTC&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HTC</span></a></li><li data-original-index="42"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Huawei&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Huawei</span></a></li><li data-original-index="43"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;i-mate&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">i-mate</span></a></li><li data-original-index="44"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;i-mobile&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">i-mobile</span></a></li><li data-original-index="45"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Icemobile&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Icemobile</span></a></li><li data-original-index="46"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Infinix&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Infinix</span></a></li><li data-original-index="47"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Innostream&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Innostream</span></a></li><li data-original-index="48"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;iNQ&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">iNQ</span></a></li><li data-original-index="49"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Intex&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Intex</span></a></li><li data-original-index="50"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;itel&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">itel</span></a></li><li data-original-index="51"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Jolla&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Jolla</span></a></li><li data-original-index="52"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Karbonn&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Karbonn</span></a></li><li data-original-index="53"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kyocera&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kyocera</span></a></li><li data-original-index="54"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Lava&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Lava</span></a></li><li data-original-index="55"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LeEco&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LeEco</span></a></li><li data-original-index="56"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Lenovo&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Lenovo</span></a></li><li data-original-index="57"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LG&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LG</span></a></li><li data-original-index="58"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Maxon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Maxon</span></a></li><li data-original-index="59"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Maxwest&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Maxwest</span></a></li><li data-original-index="60"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Meizu&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Meizu</span></a></li><li data-original-index="61"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Micromax&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Micromax</span></a></li><li data-original-index="62"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Microsoft&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Microsoft</span></a></li><li data-original-index="63"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Mitac&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Mitac</span></a></li><li data-original-index="64"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Mitsubishi&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Mitsubishi</span></a></li><li data-original-index="65"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Modu&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Modu</span></a></li><li data-original-index="66"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Motorola&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Motorola</span></a></li><li data-original-index="67"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;MWg&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">MWg</span></a></li><li data-original-index="68"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;NEC&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">NEC</span></a></li><li data-original-index="69"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Neonode&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Neonode</span></a></li><li data-original-index="70"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;NIU&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">NIU</span></a></li><li data-original-index="71"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Nokia&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Nokia</span></a></li><li data-original-index="72"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Nothing&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Nothing</span></a></li><li data-original-index="73"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Nvidia&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Nvidia</span></a></li><li data-original-index="74"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;O2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">O2</span></a></li><li data-original-index="75"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;OnePlus&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">OnePlus</span></a></li><li data-original-index="76"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Oppo&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Oppo</span></a></li><li data-original-index="77"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Orange&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Orange</span></a></li><li data-original-index="78"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Oscal&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Oscal</span></a></li><li data-original-index="79"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Oukitel&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Oukitel</span></a></li><li data-original-index="80"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Palm&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Palm</span></a></li><li data-original-index="81"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Panasonic&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Panasonic</span></a></li><li data-original-index="82"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Pantech&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Pantech</span></a></li><li data-original-index="83"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Parla&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Parla</span></a></li><li data-original-index="84"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Philips&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Philips</span></a></li><li data-original-index="85"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Plum&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Plum</span></a></li><li data-original-index="86"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Posh&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Posh</span></a></li><li data-original-index="87"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Prestigio&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Prestigio</span></a></li><li data-original-index="88"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;QMobile&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">QMobile</span></a></li><li data-original-index="89"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Qtek&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Qtek</span></a></li><li data-original-index="90"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Razer&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Razer</span></a></li><li data-original-index="91"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Realme&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Realme</span></a></li><li data-original-index="92"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sagem&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sagem</span></a></li><li data-original-index="93"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Samsung&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Samsung</span></a></li><li data-original-index="94"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sendo&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sendo</span></a></li><li data-original-index="95"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sewon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sewon</span></a></li><li data-original-index="96"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sharp&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sharp</span></a></li><li data-original-index="97"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Siemens&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Siemens</span></a></li><li data-original-index="98"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sonim&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sonim</span></a></li><li data-original-index="99"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sony&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sony</span></a></li><li data-original-index="100"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sony Ericsson&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Sony Ericsson</span></a></li><li data-original-index="101"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Spice&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Spice</span></a></li><li data-original-index="102"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;T-Mobile&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">T-Mobile</span></a></li><li data-original-index="103"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;TCL&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">TCL</span></a></li><li data-original-index="104"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Tecno&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Tecno</span></a></li><li data-original-index="105"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Tel.Me.&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Tel.Me.</span></a></li><li data-original-index="106"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Telit&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Telit</span></a></li><li data-original-index="107"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Thuraya&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Thuraya</span></a></li><li data-original-index="108"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Toshiba&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Toshiba</span></a></li><li data-original-index="109"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Ulefone&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Ulefone</span></a></li><li data-original-index="110"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Umidigi&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Umidigi</span></a></li><li data-original-index="111"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Unnecto&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Unnecto</span></a></li><li data-original-index="112"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Vertu&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Vertu</span></a></li><li data-original-index="113"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;verykool&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">verykool</span></a></li><li data-original-index="114"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;vivo&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">vivo</span></a></li><li data-original-index="115"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;VK Mobile&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">VK Mobile</span></a></li><li data-original-index="116"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Vodafone&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Vodafone</span></a></li><li data-original-index="117"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Wiko&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Wiko</span></a></li><li data-original-index="118"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;WND&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">WND</span></a></li><li data-original-index="119"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;XCute&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">XCute</span></a></li><li data-original-index="120"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Xiaomi&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Xiaomi</span></a></li><li data-original-index="121"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;XOLO&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">XOLO</span></a></li><li data-original-index="122"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Yezz&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Yezz</span></a></li><li data-original-index="123"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Yota&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Yota</span></a></li><li data-original-index="124"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;YU&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">YU</span></a></li><li data-original-index="125"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;ZTE&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">ZTE</span></a></li></ul></div></div>
      		  </div>
      		  <div class="l-col l-col-1-2 framed p10">
      			<span class="label float-left">Year:</span>
      			<div class="phonefinder-slider phonefinder-slider-year l-col-3-4 noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-year-min" name="nYearMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-year-max" name="nYearMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			<script type="text/javascript">

      				makeSlider(".phonefinder-slider-year", "#skipval-year-min", "#skipval-year-max", 2000, 2024, 1, "");

      			</script>

      		  </div>
      		</div>
      		<div class="row">
      		  <div class="l-col l-col-1-2 mr10">
      			<label for="" style="display: none;">Availability:</label>
      			<select name="sAvailabilities" multiple="" class="phonefinder-select" title="" style="display: none;">
      <option value="1">Available</option><option value="2">Coming soon</option><option value="3">Discontinued</option><option value="5">Rumored</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Availability:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Available&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Available</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Coming soon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Coming soon</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Discontinued&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Discontinued</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Rumored&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Rumored</span></a></li></ul></div></div>
      		  </div>
      		  <div class="l-col l-col-1-2 framed p10">
      			<span class="label float-left">Price:</span>
      			<div class="phonefinder-slider phonefinder-slider-price l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-price-min" name="nPriceMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-price-max" name="nPriceMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>


      			<script type="text/javascript">
      				makeSlider(".phonefinder-slider-price", "#skipval-price-min", "#skipval-price-max", [
      					["\u20ac50/$68", "50"],
      					["\u20ac100/$100", "100"],
      					["\u20ac150/$150", "150"],
      					["\u20ac200/$200", "200"],
      					["\u20ac250/$250", "250"],
      					["\u20ac300/$300", "300"],
      					["\u20ac350/$350", "350"],
      					["\u20ac400/$400", "400"],
      					["\u20ac450/$450", "450"],
      					["\u20ac500/$500", "500"],
      					["\u20ac600/$600", "600"],
      					["\u20ac700/$700", "700"],
      					["\u20ac800/$800", "800"],
      					["\u20ac900/$900", "900"],
      					["\u20ac1000/$1000", "1000"],
      					["\u20ac1200/$1200", "1200"]
      				]);
      			</script>

      		  </div>
      		</div>


      	   <!-- NETWORK -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Network</h3>
      		<div class="l-col l-col-1-4 mr10">
      		  <label for="" style="display: none;">2G:</label>
      		  <select name="s2Gs" id="s2Gs" multiple="" class="phonefinder-select" title=" " data-separator=" &amp; " style="display: none;">
      			<option name="GSM850" value="GSM850" title="GSM 850">GSM 850</option>
      			<option name="GSM900" value="GSM900" title="GSM 850">GSM 900</option>
      			<option name="GSM1800" value="GSM1800" title="GSM 850">GSM 1800</option>
      			<option name="GSM1900" value="GSM1900" title="GSM 850">GSM 1900</option>

      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="s2Gs" title=""><span class="label">2G:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;GSM 850&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">GSM 850</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;GSM 900&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">GSM 900</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;GSM 1800&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">GSM 1800</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;GSM 1900&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">GSM 1900</span></a></li></ul></div></div>
      		</div>

      		<div class="l-col l-col-1-4 mr10">
      		  <label for="" style="display: none;">3G:</label>
      		  <select name="s3G5s" id="s3G5s" class="phonefinder-select" multiple="" title=" " data-separator=" &amp; " style="display: none;">
      			<option name="HSDPA850" value="HSDPA850" title="HSDPA 850">HSPA 850</option>
      			<option name="HSDPA900" value="HSDPA900" title="HSDPA 900">HSPA 900</option>
      			<option name="HSDPA1700" value="HSDPA1700" title="HSDPA 1700">HSPA 1700</option>
      			<option name="HSDPA1900" value="HSDPA1900" title="HSDPA 1900">HSPA 1900</option>
      			<option name="HSDPA2100" value="HSDPA2100" title="HSDPA 2100">HSPA 2100</option>
      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="s3G5s" title=""><span class="label">3G:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HSPA 850&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HSPA 850</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HSPA 900&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HSPA 900</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HSPA 1700&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HSPA 1700</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HSPA 1900&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HSPA 1900</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;HSPA 2100&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">HSPA 2100</span></a></li></ul></div></div>
      		</div>

      		<div class="l-col l-col-1-4 mr10">
      		  <label for="" style="display: none;">4G:</label>
      		  <select name="s4Gs" id="s4Gs" class="phonefinder-select" multiple="" title=" " data-separator=" &amp; " style="display: none;">
      		  	<option name="Any4G" value="0" title="Any 4G" data-any="">Any 4G</option>

      <option name="LTEband1" value="1" title="LTE band 1(2100)">LTE band 1(2100)</option><option name="LTEband2" value="2" title="LTE band 2(1900)">LTE band 2(1900)</option><option name="LTEband3" value="3" title="LTE band 3(1800)">LTE band 3(1800)</option><option name="LTEband4" value="4" title="LTE band 4(1700/2100)">LTE band 4(1700/2100)</option><option name="LTEband5" value="5" title="LTE band 5(850)">LTE band 5(850)</option><option name="LTEband6" value="6" title="LTE band 6(900)">LTE band 6(900)</option><option name="LTEband7" value="7" title="LTE band 7(2600)">LTE band 7(2600)</option><option name="LTEband8" value="8" title="LTE band 8(900)">LTE band 8(900)</option><option name="LTEband9" value="9" title="LTE band 9(1800)">LTE band 9(1800)</option><option name="LTEband10" value="10" title="LTE band 10(1700/2100)">LTE band 10(1700/2100)</option><option name="LTEband11" value="11" title="LTE band 11(1500)">LTE band 11(1500)</option><option name="LTEband12" value="12" title="LTE band 12(700)">LTE band 12(700)</option><option name="LTEband13" value="13" title="LTE band 13(700)">LTE band 13(700)</option><option name="LTEband14" value="14" title="LTE band 14(700)">LTE band 14(700)</option><option name="LTEband17" value="17" title="LTE band 17(700)">LTE band 17(700)</option><option name="LTEband18" value="18" title="LTE band 18(800)">LTE band 18(800)</option><option name="LTEband19" value="19" title="LTE band 19(800)">LTE band 19(800)</option><option name="LTEband20" value="20" title="LTE band 20(800)">LTE band 20(800)</option><option name="LTEband21" value="21" title="LTE band 21(1500)">LTE band 21(1500)</option><option name="LTEband22" value="22" title="LTE band 22(3500)">LTE band 22(3500)</option><option name="LTEband23" value="23" title="LTE band 23(2000)">LTE band 23(2000)</option><option name="LTEband24" value="24" title="LTE band 24(1600)">LTE band 24(1600)</option><option name="LTEband25" value="25" title="LTE band 25(1900)">LTE band 25(1900)</option><option name="LTEband26" value="26" title="LTE band 26(850)">LTE band 26(850)</option><option name="LTEband27" value="27" title="LTE band 27(800)">LTE band 27(800)</option><option name="LTEband28" value="28" title="LTE band 28(700)">LTE band 28(700)</option><option name="LTEband29" value="29" title="LTE band 29(700)">LTE band 29(700)</option><option name="LTEband30" value="30" title="LTE band 30(2300)">LTE band 30(2300)</option><option name="LTEband31" value="31" title="LTE band 31(450)">LTE band 31(450)</option><option name="LTEband32" value="32" title="LTE band 32(1500)">LTE band 32(1500)</option><option name="LTEband33" value="33" title="LTE band 33(1900)">LTE band 33(1900)</option><option name="LTEband34" value="34" title="LTE band 34(2000)">LTE band 34(2000)</option><option name="LTEband35" value="35" title="LTE band 35(L gap)">LTE band 35(L gap)</option><option name="LTEband36" value="36" title="LTE band 36(U gap)">LTE band 36(U gap)</option><option name="LTEband37" value="37" title="LTE band 37(C gap)">LTE band 37(C gap)</option><option name="LTEband38" value="38" title="LTE band 38(2600)">LTE band 38(2600)</option><option name="LTEband39" value="39" title="LTE band 39(1900)">LTE band 39(1900)</option><option name="LTEband40" value="40" title="LTE band 40(2300)">LTE band 40(2300)</option><option name="LTEband41" value="41" title="LTE band 41(2500)">LTE band 41(2500)</option><option name="LTEband42" value="42" title="LTE band 42(3500)">LTE band 42(3500)</option><option name="LTEband43" value="43" title="LTE band 43(3700)">LTE band 43(3700)</option><option name="LTEband44" value="44" title="LTE band 44(700)">LTE band 44(700)</option><option name="LTEband46" value="46" title="LTE band 46(5200)">LTE band 46(5200)</option><option name="LTEband66" value="66" title="LTE band 66(1700/2100)">LTE band 66(1700/2100)</option><option name="LTEband71" value="71" title="LTE band 71(600)">LTE band 71(600)</option>



      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="s4Gs" title=""><span class="label">4G:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any 4G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any 4G</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 1(2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 1(2100)</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 2(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 2(1900)</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 3(1800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 3(1800)</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 4(1700/2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 4(1700/2100)</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 5(850)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 5(850)</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 6(900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 6(900)</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 7(2600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 7(2600)</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 8(900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 8(900)</span></a></li><li data-original-index="9"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 9(1800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 9(1800)</span></a></li><li data-original-index="10"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 10(1700/2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 10(1700/2100)</span></a></li><li data-original-index="11"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 11(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 11(1500)</span></a></li><li data-original-index="12"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 12(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 12(700)</span></a></li><li data-original-index="13"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 13(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 13(700)</span></a></li><li data-original-index="14"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 14(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 14(700)</span></a></li><li data-original-index="15"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 17(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 17(700)</span></a></li><li data-original-index="16"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 18(800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 18(800)</span></a></li><li data-original-index="17"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 19(800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 19(800)</span></a></li><li data-original-index="18"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 20(800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 20(800)</span></a></li><li data-original-index="19"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 21(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 21(1500)</span></a></li><li data-original-index="20"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 22(3500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 22(3500)</span></a></li><li data-original-index="21"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 23(2000)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 23(2000)</span></a></li><li data-original-index="22"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 24(1600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 24(1600)</span></a></li><li data-original-index="23"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 25(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 25(1900)</span></a></li><li data-original-index="24"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 26(850)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 26(850)</span></a></li><li data-original-index="25"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 27(800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 27(800)</span></a></li><li data-original-index="26"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 28(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 28(700)</span></a></li><li data-original-index="27"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 29(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 29(700)</span></a></li><li data-original-index="28"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 30(2300)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 30(2300)</span></a></li><li data-original-index="29"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 31(450)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 31(450)</span></a></li><li data-original-index="30"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 32(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 32(1500)</span></a></li><li data-original-index="31"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 33(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 33(1900)</span></a></li><li data-original-index="32"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 34(2000)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 34(2000)</span></a></li><li data-original-index="33"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 35(L gap)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 35(L gap)</span></a></li><li data-original-index="34"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 36(U gap)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 36(U gap)</span></a></li><li data-original-index="35"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 37(C gap)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 37(C gap)</span></a></li><li data-original-index="36"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 38(2600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 38(2600)</span></a></li><li data-original-index="37"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 39(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 39(1900)</span></a></li><li data-original-index="38"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 40(2300)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 40(2300)</span></a></li><li data-original-index="39"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 41(2500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 41(2500)</span></a></li><li data-original-index="40"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 42(3500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 42(3500)</span></a></li><li data-original-index="41"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 43(3700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 43(3700)</span></a></li><li data-original-index="42"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 44(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 44(700)</span></a></li><li data-original-index="43"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 46(5200)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 46(5200)</span></a></li><li data-original-index="44"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 66(1700/2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 66(1700/2100)</span></a></li><li data-original-index="45"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LTE band 71(600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LTE band 71(600)</span></a></li></ul></div></div>
      		</div>

      		<div class="l-col l-col-1-4 mr0">
      		  <label for="" style="display: none;">5G:</label>
      		  <select name="s5Gs" id="s5Gs" class="phonefinder-select" multiple="" title=" " data-separator=" &amp; " style="display: none;">
      		  	<option name="Any5G" value="0" title="Any 5G" data-any="">Any 5G</option>
      <option name="FiveGband1" value="1" title="5G band 1(2100)">5G band 1(2100)</option><option name="FiveGband2" value="2" title="5G band 2(1900)">5G band 2(1900)</option><option name="FiveGband3" value="3" title="5G band 3(1800)">5G band 3(1800)</option><option name="FiveGband5" value="5" title="5G band 5(850)">5G band 5(850)</option><option name="FiveGband7" value="7" title="5G band 7(2600)">5G band 7(2600)</option><option name="FiveGband8" value="8" title="5G band 8(900)">5G band 8(900)</option><option name="FiveGband12" value="12" title="5G band 12(700)">5G band 12(700)</option><option name="FiveGband14" value="14" title="5G band 14(700)">5G band 14(700)</option><option name="FiveGband18" value="18" title="5G band 18(850)">5G band 18(850)</option><option name="FiveGband20" value="20" title="5G band 20(800)">5G band 20(800)</option><option name="FiveGband25" value="25" title="5G band 25(1900)">5G band 25(1900)</option><option name="FiveGband28" value="28" title="5G band 28(700)">5G band 28(700)</option><option name="FiveGband29" value="29" title="5G band 29(700)">5G band 29(700)</option><option name="FiveGband30" value="30" title="5G band 30(2300)">5G band 30(2300)</option><option name="FiveGband34" value="34" title="5G band 34(2100)">5G band 34(2100)</option><option name="FiveGband38" value="38" title="5G band 38(2600)">5G band 38(2600)</option><option name="FiveGband39" value="39" title="5G band 39(1900)">5G band 39(1900)</option><option name="FiveGband40" value="40" title="5G band 40(2300)">5G band 40(2300)</option><option name="FiveGband41" value="41" title="5G band 41(2500)">5G band 41(2500)</option><option name="FiveGband48" value="48" title="5G band 48(3500)">5G band 48(3500)</option><option name="FiveGband50" value="50" title="5G band 50(1500)">5G band 50(1500)</option><option name="FiveGband51" value="51" title="5G band 51(1500)">5G band 51(1500)</option><option name="FiveGband65" value="65" title="5G band 65(2100)">5G band 65(2100)</option><option name="FiveGband66" value="66" title="5G band 66(1700/2100)">5G band 66(1700/2100)</option><option name="FiveGband70" value="70" title="5G band 70(2000)">5G band 70(2000)</option><option name="FiveGband71" value="71" title="5G band 71(600)">5G band 71(600)</option><option name="FiveGband74" value="74" title="5G band 74(1500)">5G band 74(1500)</option><option name="FiveGband75" value="75" title="5G band 75(1500)">5G band 75(1500)</option><option name="FiveGband76" value="76" title="5G band 76(1500)">5G band 76(1500)</option><option name="FiveGband77" value="77" title="5G band 77(3700)">5G band 77(3700)</option><option name="FiveGband78" value="78" title="5G band 78(3500)">5G band 78(3500)</option><option name="FiveGband79" value="79" title="5G band 79(4700)">5G band 79(4700)</option><option name="FiveGband80" value="80" title="5G band 80(1800)">5G band 80(1800)</option><option name="FiveGband81" value="81" title="5G band 81(900)">5G band 81(900)</option><option name="FiveGband82" value="82" title="5G band 82(800)">5G band 82(800)</option><option name="FiveGband83" value="83" title="5G band 83(700)">5G band 83(700)</option><option name="FiveGband84" value="84" title="5G band 84(2100)">5G band 84(2100)</option><option name="FiveGband86" value="86" title="5G band 86(1700)">5G band 86(1700)</option><option name="FiveGband89" value="89" title="5G band 89(850)">5G band 89(850)</option><option name="FiveGband90" value="90" title="5G band 90(2500)">5G band 90(2500)</option><option name="FiveGband91" value="91" title="5G band 91(800/1500)">5G band 91(800/1500)</option><option name="FiveGband92" value="92" title="5G band 92(800/1500)">5G band 92(800/1500)</option><option name="FiveGband93" value="93" title="5G band 93(900/1500)">5G band 93(900/1500)</option><option name="FiveGband94" value="94" title="5G band 94(900/1500)">5G band 94(900/1500)</option><option name="FiveGband95" value="95" title="5G band 95(2100)">5G band 95(2100)</option><option name="FiveGband257" value="257" title="5G band 257(28GHz)">5G band 257(28GHz)</option><option name="FiveGband258" value="258" title="5G band 258(26GHz)">5G band 258(26GHz)</option><option name="FiveGband260" value="260" title="5G band 260(39GHz)">5G band 260(39GHz)</option><option name="FiveGband261" value="261" title="5G band 261(28GHz)">5G band 261(28GHz)</option>



      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="s5Gs" title=""><span class="label">5G:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any 5G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any 5G</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 1(2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 1(2100)</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 2(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 2(1900)</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 3(1800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 3(1800)</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 5(850)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 5(850)</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 7(2600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 7(2600)</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 8(900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 8(900)</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 12(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 12(700)</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 14(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 14(700)</span></a></li><li data-original-index="9"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 18(850)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 18(850)</span></a></li><li data-original-index="10"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 20(800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 20(800)</span></a></li><li data-original-index="11"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 25(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 25(1900)</span></a></li><li data-original-index="12"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 28(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 28(700)</span></a></li><li data-original-index="13"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 29(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 29(700)</span></a></li><li data-original-index="14"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 30(2300)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 30(2300)</span></a></li><li data-original-index="15"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 34(2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 34(2100)</span></a></li><li data-original-index="16"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 38(2600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 38(2600)</span></a></li><li data-original-index="17"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 39(1900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 39(1900)</span></a></li><li data-original-index="18"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 40(2300)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 40(2300)</span></a></li><li data-original-index="19"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 41(2500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 41(2500)</span></a></li><li data-original-index="20"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 48(3500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 48(3500)</span></a></li><li data-original-index="21"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 50(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 50(1500)</span></a></li><li data-original-index="22"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 51(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 51(1500)</span></a></li><li data-original-index="23"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 65(2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 65(2100)</span></a></li><li data-original-index="24"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 66(1700/2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 66(1700/2100)</span></a></li><li data-original-index="25"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 70(2000)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 70(2000)</span></a></li><li data-original-index="26"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 71(600)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 71(600)</span></a></li><li data-original-index="27"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 74(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 74(1500)</span></a></li><li data-original-index="28"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 75(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 75(1500)</span></a></li><li data-original-index="29"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 76(1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 76(1500)</span></a></li><li data-original-index="30"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 77(3700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 77(3700)</span></a></li><li data-original-index="31"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 78(3500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 78(3500)</span></a></li><li data-original-index="32"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 79(4700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 79(4700)</span></a></li><li data-original-index="33"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 80(1800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 80(1800)</span></a></li><li data-original-index="34"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 81(900)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 81(900)</span></a></li><li data-original-index="35"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 82(800)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 82(800)</span></a></li><li data-original-index="36"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 83(700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 83(700)</span></a></li><li data-original-index="37"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 84(2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 84(2100)</span></a></li><li data-original-index="38"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 86(1700)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 86(1700)</span></a></li><li data-original-index="39"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 89(850)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 89(850)</span></a></li><li data-original-index="40"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 90(2500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 90(2500)</span></a></li><li data-original-index="41"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 91(800/1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 91(800/1500)</span></a></li><li data-original-index="42"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 92(800/1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 92(800/1500)</span></a></li><li data-original-index="43"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 93(900/1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 93(900/1500)</span></a></li><li data-original-index="44"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 94(900/1500)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 94(900/1500)</span></a></li><li data-original-index="45"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 95(2100)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 95(2100)</span></a></li><li data-original-index="46"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 257(28GHz)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 257(28GHz)</span></a></li><li data-original-index="47"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 258(26GHz)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 258(26GHz)</span></a></li><li data-original-index="48"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 260(39GHz)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 260(39GHz)</span></a></li><li data-original-index="49"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5G band 261(28GHz)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">5G band 261(28GHz)</span></a></li></ul></div></div>
      		</div>
      	  </div>

      	  <!-- SIM -->
      	  <div class="row">
      		<h3 class="phonefinder-title">SIM</h3>
      		<div class="l-col l-col-1-2 mr10">
      		  <label for="" style="display: none;">Size:</label>
      		  <select name="sSIMTypes" class="phonefinder-select" multiple="" title=" " style="display: none;">
      			<option value="1">Mini-SIM (regular size)</option>
      			<option value="2">Micro-SIM</option>
      			<option value="3">Nano-SIM</option>
      			<option value="4">eSIM</option>
      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Size:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Mini-SIM (regular size)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Mini-SIM (regular size)</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Micro-SIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Micro-SIM</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Nano-SIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Nano-SIM</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;eSIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">eSIM</span></a></li></ul></div></div>
      		</div>

      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">Multiple:</label>
      		  <select name="sNumberSIMs" class="phonefinder-select" multiple="" title=" " style="display: none;">
      			<option value="1">Dual SIM</option>
      			<option value="2">Triple SIM</option>
      			<option value="3">Quad SIM</option>
      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Multiple:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dual SIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dual SIM</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Triple SIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Triple SIM</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Quad SIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Quad SIM</span></a></li></ul></div></div>
      		</div>
      	  </div>

      	  <!-- BODY -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Body</h3>

      		<div class="l-col l-col-1-2 mr10">
      		  <label for="" style="display: none;">Form factor:</label>
      		   <select name="sFormFactors" class="phonefinder-select" multiple="" title="" style="display: none;">
      		<option value="1">Bar</option><option value="2">Flip up</option><option value="3">Flip down</option><option value="4">Slide</option><option value="6">Swivel</option><option value="8">Watch</option><option value="10">Other</option><option value="11">Foldable</option>
      		   </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Form factor:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bar&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bar</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Flip up&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Flip up</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Flip down&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Flip down</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Slide&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Slide</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Swivel&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Swivel</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Watch&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Watch</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Other&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Other</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Foldable&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Foldable</span></a></li></ul></div></div>
      		</div>
      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">Keyboard:</label>
      		  <select name="idQwerty" class="phonefinder-select" title="" style="display: none;">

      			<option value="0"></option>
      			<option value="1">With QWERTY</option>
      			<option value="2">Without QWERTY</option>
      		  </select><div class="btn-group bootstrap-select phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Keyboard:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;With QWERTY&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">With QWERTY</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Without QWERTY&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Without QWERTY</span></a></li></ul></div></div>
      		</div>





      		<!-- height, width, thickness, weight -->
      		<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">Height:</span>
      			<div class="phonefinder-slider phonefinder-slider-height l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">

      			  <span class="slider-value left" id="skipval-height-min" name="nHeightMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-height-max" name="nHeightMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			<script type="text/javascript">
      				makeSlider(".phonefinder-slider-height", "#skipval-height-min", "#skipval-height-max", 90, 180, 5, "mm");


      			</script>

      			</div>
      		</div>

      		<div class="l-col l-col-1-2">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">Width:</span>
      			<div class="phonefinder-slider phonefinder-slider-width l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-width-min" name="nWidthMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-width-max" name="nWidthMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			<script type="text/javascript">

      				makeSlider(".phonefinder-slider-width", "#skipval-width-min", "#skipval-width-max", 40, 80, 1, "mm");

      			</script>
      			</div>
      		</div>

      		<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">Thickness:</span>
      			<div class="phonefinder-slider phonefinder-slider-thickness l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-thickness-min" name="nThicknessMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-thickness-max" name="nThicknessMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			<script type="text/javascript">
      				makeSlider(".phonefinder-slider-thickness", "#skipval-thickness-min", "#skipval-thickness-max", 5, 20, 1, "mm");
      			</script>

      		  </div>
      		</div>

      		<div class="l-col l-col-1-2">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">Weight:</span>
      			<div class="phonefinder-slider phonefinder-slider-weight l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-weight-min" name="nWeightMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-weight-max" name="nWeightMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			<script type="text/javascript">

      				makeSlider(".phonefinder-slider-weight", "#skipval-weight-min", "#skipval-weight-max", 60, 230, 5, "g");


      			</script>
      			</div>
      		</div>

      		<div class="l-col l-col-1-2 mr10">
      			<label style="display: none;">IP certificate:</label>
      			<select name="sIPCerts" class="phonefinder-select" multiple="" title="" style="display: none;">
      			  <option value="1">IP5x</option>
      			  <option value="2">IP6x</option>
      			  <option value="3">IPx5</option>
      			  <option value="4">IPx6</option>
      			  <option value="5">IPx7</option>
      			  <option value="6">IPx8</option>
      			  <option value="7">MIL-STD-810D</option>
      			  <option value="8">MIL-STD-810F</option>
      			  <option value="9">MIL-STD-810G</option>
      			  <option value="10">MIL-STD-810H</option>

      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">IP certificate:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IP5x&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IP5x</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IP6x&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IP6x</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IPx5&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IPx5</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IPx6&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IPx6</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IPx7&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IPx7</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IPx8&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IPx8</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;MIL-STD-810D&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">MIL-STD-810D</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;MIL-STD-810F&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">MIL-STD-810F</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;MIL-STD-810G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">MIL-STD-810G</span></a></li><li data-original-index="9"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;MIL-STD-810H&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">MIL-STD-810H</span></a></li></ul></div></div>
      		</div>
      		<div class="l-col l-col-1-2 free-text-input color">
      			<span class="label float-left">Color:</span>
      			<input type="text" name="sColor" value="" class="l-col-full framed p10 pf-input">
      		</div>

      		<div class="l-col l-col-1-2 mr10">
      			<label style="display: none;">Back material:</label>
      			<select name="sBodyBacks" class="phonefinder-select" multiple="" title="" style="display: none;">
      			  <option value="1">Plastic</option>
      			  <option value="2">Aluminum</option>
      			  <option value="3">Glass</option>
      			  <option value="5">Ceramic</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Back material:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Plastic&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Plastic</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Aluminum&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Aluminum</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Glass&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Glass</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Ceramic&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Ceramic</span></a></li></ul></div></div>
      		</div>
      		<div class="l-col l-col-1-2">
      			<label style="display: none;">Frame material:</label>
      			<select name="sBodyFrames" class="phonefinder-select" multiple="" title="" style="display: none;">
      			  <option value="1">Plastic</option>
      			  <option value="2">Aluminum</option>
      			  <option value="3">Stainless steel</option>
      			  <option value="5">Ceramic</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Frame material:</span><span class="filter-option pull-left"></span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Plastic&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Plastic</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Aluminum&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Aluminum</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Stainless steel&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Stainless steel</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Ceramic&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Ceramic</span></a></li></ul></div></div>
      		</div>

      	  </div>

      	  <!-- PLATFORM -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Platform</h3>
      		<div class="l-col l-col-1-2 mr10">
      		  <label for="" style="display: none;">OS:</label>
      		  <select name="sOSes" class="phonefinder-select" multiple="" title=" " style="display: none;">

      			<option value="1">Feature phones </option>
      			<option value="2">Android</option>
      			<option value="3">iOS</option>
      			<option value="10">KaiOS</option>
      			<option value="4">Windows Phone</option>
      			<option value="5">Symbian</option>
      			<option value="6">RIM</option>
      			<option value="7">Bada</option>
      			<option value="9">Firefox</option>

      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">OS:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Feature phones &lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Feature phones </span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Android&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Android</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;iOS&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">iOS</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;KaiOS&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">KaiOS</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Windows Phone&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Windows Phone</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Symbian&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Symbian</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;RIM&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">RIM</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bada&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bada</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Firefox&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Firefox</span></a></li></ul></div></div>
      		</div>
      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">OS Version:</label>
      		  <select name="sOSversions" multiple="" class="phonefinder-select" title="Select an OS first" style="display: none;"><option> </option></select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Select an OS first"><span class="label">OS Version:</span><span class="filter-option pull-left">Select an OS first</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt; &lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text"> </span></a></li></ul></div></div>
      		</div>
      		<div class="clearfix" style="clear:left;"></div>

      		<div class="l-col l-col-1-2 mr10">
      		  <label for="" style="display: none;">Chipset:</label>
      		  <select data-any-group="" name="sChipset" class="phonefinder-select" multiple="" data-live-search="true" title=" " style="display: none;">
      <option value="0" data-for-group="1">Any Snapdragon</option>
      <option value="0" data-for-group="2">Any Exynos</option>
      <option value="0" data-for-group="3">Any Dimensity</option>
      <option value="0" data-for-group="4">Any Helio</option>
      <option value="0" data-for-group="5">Any Kirin</option>
      <option value="125" data-group="1">Snapdragon 8 Gen 3</option><option value="143" data-group="1">Snapdragon 8s Gen 3</option><option value="116" data-group="1">Snapdragon 8 Gen 2</option><option value="115" data-group="1">Snapdragon 8+ Gen 1</option><option value="104" data-group="1">Snapdragon 8 Gen 1</option><option value="144" data-group="1">Snapdragon 7+ Gen 3</option><option value="140" data-group="1">Snapdragon 7 Gen 3</option><option value="124" data-group="1">Snapdragon 7s Gen 2</option><option value="123" data-group="1">Snapdragon 7+ Gen 2</option><option value="114" data-group="1">Snapdragon 7 Gen 1</option><option value="141" data-group="1">Snapdragon 6 Gen 1</option><option value="145" data-group="1">Snapdragon 6s Gen 3</option><option value="142" data-group="1">Snapdragon 4 Gen 2</option><option value="122" data-group="1">Snapdragon 4 Gen 1</option><option value="92" data-group="1">Snapdragon 888+</option><option value="77" data-group="1">Snapdragon 888</option><option value="79" data-group="1">Snapdragon 870</option><option value="57" data-group="1">Snapdragon 865+</option><option value="42" data-group="1">Snapdragon 865</option><option value="80" data-group="1">Snapdragon 860</option><option value="41" data-group="1">Snapdragon 855+</option><option value="31" data-group="1">Snapdragon 855</option><option value="27" data-group="1">Snapdragon 845</option><option value="1" data-group="1">Snapdragon 835</option><option value="2" data-group="1">Snapdragon 821</option><option value="3" data-group="1">Snapdragon 820</option><option value="120" data-group="1">Snapdragon 782</option><option value="81" data-group="1">Snapdragon 780</option><option value="91" data-group="1">Snapdragon 778G</option><option value="62" data-group="1">Snapdragon 768</option><option value="43" data-group="1">Snapdragon 765G</option><option value="82" data-group="1">Snapdragon 750</option><option value="83" data-group="1">Snapdragon 732</option><option value="46" data-group="1">Snapdragon 730G</option><option value="36" data-group="1">Snapdragon 730</option><option value="58" data-group="1">Snapdragon 720</option><option value="48" data-group="1">Snapdragon 712</option><option value="29" data-group="1">Snapdragon 710</option><option value="105" data-group="1">Snapdragon 695</option><option value="78" data-group="1">Snapdragon 690</option><option value="127" data-group="1">Snapdragon 685</option><option value="106" data-group="1">Snapdragon 680</option><option value="35" data-group="1">Snapdragon 675</option><option value="33" data-group="1">Snapdragon 670</option><option value="44" data-group="1">Snapdragon 665</option><option value="90" data-group="1">Snapdragon 662</option><option value="4" data-group="1">Snapdragon 660</option><option value="5" data-group="1">Snapdragon 652</option><option value="45" data-group="1">Snapdragon 650</option><option value="28" data-group="1">Snapdragon 636</option><option value="59" data-group="1">Snapdragon 632</option><option value="6" data-group="1">Snapdragon 630</option><option value="7" data-group="1">Snapdragon 625</option><option value="89" data-group="1">Snapdragon 480</option><option value="61" data-group="1">Snapdragon 460</option><option value="8" data-group="1">Snapdragon 450</option><option value="34" data-group="1">Snapdragon 439</option><option value="9" data-group="1">Snapdragon 435</option><option value="10" data-group="1">Snapdragon 430</option><option value="60" data-group="1">Snapdragon 429</option><option value="11" data-group="1">Snapdragon 425</option><option value="88" data-group="1">Snapdragon 215</option><option value="118" data-group="2">Exynos 2200</option><option value="84" data-group="2">Exynos 2100</option><option value="109" data-group="2">Exynos 1280</option><option value="102" data-group="2">Exynos 1080</option><option value="73" data-group="2">Exynos 990</option><option value="74" data-group="2">Exynos 980</option><option value="75" data-group="2">Exynos 880</option><option value="85" data-group="2">Exynos 850</option><option value="37" data-group="2">Exynos 9825</option><option value="38" data-group="2">Exynos 9820</option><option value="32" data-group="2">Exynos 9810</option><option value="47" data-group="2">Exynos 9611</option><option value="39" data-group="2">Exynos 9610</option><option value="12" data-group="2">Exynos 8895</option><option value="13" data-group="2">Exynos 8890</option><option value="49" data-group="2">Exynos 7904</option><option value="40" data-group="2">Exynos 7884</option><option value="14" data-group="2">Exynos 7870</option><option value="15" data-group="2">Exynos 7580</option><option value="16" data-group="2">Exynos 7420</option><option value="126" data-group="3">Dimensity 9300</option><option value="117" data-group="3">Dimensity 9200</option><option value="108" data-group="3">Dimensity 9000</option><option value="128" data-group="3">Dimensity 8300</option><option value="147" data-group="3">Dimensity 8250</option><option value="129" data-group="3">Dimensity 8200</option><option value="112" data-group="3">Dimensity 8100</option><option value="130" data-group="3">Dimensity 8050</option><option value="131" data-group="3">Dimensity 8020</option><option value="110" data-group="3">Dimensity 8000</option><option value="148" data-group="3">Dimensity 7300</option><option value="132" data-group="3">Dimensity 7200</option><option value="137" data-group="3">Dimensity 7050</option><option value="133" data-group="3">Dimensity 7030</option><option value="138" data-group="3">Dimensity 7020</option><option value="146" data-group="3">Dimensity 6300</option><option value="134" data-group="3">Dimensity 6100</option><option value="135" data-group="3">Dimensity 6080</option><option value="139" data-group="3">Dimensity 6020</option><option value="113" data-group="3">Dimensity 1300</option><option value="98" data-group="3">Dimensity 1200</option><option value="99" data-group="3">Dimensity 1100</option><option value="121" data-group="3">Dimensity 1080</option><option value="69" data-group="3">Dimensity 1000</option><option value="111" data-group="3">Dimensity 920</option><option value="100" data-group="3">Dimensity 900</option><option value="70" data-group="3">Dimensity 820</option><option value="107" data-group="3">Dimensity 810</option><option value="71" data-group="3">Dimensity 800</option><option value="72" data-group="3">Dimensity 720</option><option value="101" data-group="3">Dimensity 700</option><option value="119" data-group="4">Helio G99</option><option value="97" data-group="4">Helio G96</option><option value="96" data-group="4">Helio G95</option><option value="149" data-group="4">Helio G91</option><option value="54" data-group="4">Helio G90T</option><option value="95" data-group="4">Helio G88</option><option value="68" data-group="4">Helio G85</option><option value="94" data-group="4">Helio G80</option><option value="67" data-group="4">Helio G70</option><option value="93" data-group="4">Helio G35</option><option value="76" data-group="4">Helio P90</option><option value="51" data-group="4">Helio P70</option><option value="52" data-group="4">Helio P65</option><option value="53" data-group="4">Helio P60</option><option value="66" data-group="4">Helio P35</option><option value="20" data-group="4">Helio P25</option><option value="21" data-group="4">Helio P23</option><option value="65" data-group="4">Helio P22</option><option value="22" data-group="4">Helio P20</option><option value="23" data-group="4">Helio P10</option><option value="64" data-group="4">Helio A22</option><option value="17" data-group="4">Helio X25</option><option value="18" data-group="4">Helio X20</option><option value="19" data-group="4">Helio X10</option><option value="103" data-group="5">Kirin 9000e</option><option value="86" data-group="5">Kirin 9000</option><option value="50" data-group="5">Kirin 990</option><option value="87" data-group="5">Kirin 985</option><option value="30" data-group="5">Kirin 980</option><option value="24" data-group="5">Kirin 970</option><option value="25" data-group="5">Kirin 960</option><option value="55" data-group="5">Kirin 810</option><option value="56" data-group="5">Kirin 820 5G</option><option value="63" data-group="5">Kirin 710</option><option value="26" data-group="5">Kirin 659</option>

      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Chipset:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any Snapdragon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any Snapdragon</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any Exynos&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any Exynos</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any Dimensity&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any Dimensity</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any Helio&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any Helio</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any Kirin&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any Kirin</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 8 Gen 3&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 8 Gen 3</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 8s Gen 3&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 8s Gen 3</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 8 Gen 2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 8 Gen 2</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 8+ Gen 1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 8+ Gen 1</span></a></li><li data-original-index="9"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 8 Gen 1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 8 Gen 1</span></a></li><li data-original-index="10"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 7+ Gen 3&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 7+ Gen 3</span></a></li><li data-original-index="11"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 7 Gen 3&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 7 Gen 3</span></a></li><li data-original-index="12"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 7s Gen 2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 7s Gen 2</span></a></li><li data-original-index="13"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 7+ Gen 2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 7+ Gen 2</span></a></li><li data-original-index="14"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 7 Gen 1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 7 Gen 1</span></a></li><li data-original-index="15"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 6 Gen 1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 6 Gen 1</span></a></li><li data-original-index="16"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 6s Gen 3&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 6s Gen 3</span></a></li><li data-original-index="17"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 4 Gen 2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 4 Gen 2</span></a></li><li data-original-index="18"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 4 Gen 1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 4 Gen 1</span></a></li><li data-original-index="19"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 888+&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 888+</span></a></li><li data-original-index="20"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 888&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 888</span></a></li><li data-original-index="21"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 870&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 870</span></a></li><li data-original-index="22"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 865+&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 865+</span></a></li><li data-original-index="23"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 865&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 865</span></a></li><li data-original-index="24"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 860&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 860</span></a></li><li data-original-index="25"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 855+&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 855+</span></a></li><li data-original-index="26"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 855&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 855</span></a></li><li data-original-index="27"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 845&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 845</span></a></li><li data-original-index="28"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 835&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 835</span></a></li><li data-original-index="29"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 821&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 821</span></a></li><li data-original-index="30"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 820&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 820</span></a></li><li data-original-index="31"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 782&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 782</span></a></li><li data-original-index="32"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 780&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 780</span></a></li><li data-original-index="33"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 778G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 778G</span></a></li><li data-original-index="34"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 768&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 768</span></a></li><li data-original-index="35"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 765G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 765G</span></a></li><li data-original-index="36"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 750&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 750</span></a></li><li data-original-index="37"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 732&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 732</span></a></li><li data-original-index="38"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 730G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 730G</span></a></li><li data-original-index="39"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 730&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 730</span></a></li><li data-original-index="40"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 720&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 720</span></a></li><li data-original-index="41"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 712&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 712</span></a></li><li data-original-index="42"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 710&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 710</span></a></li><li data-original-index="43"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 695&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 695</span></a></li><li data-original-index="44"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 690&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 690</span></a></li><li data-original-index="45"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 685&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 685</span></a></li><li data-original-index="46"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 680&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 680</span></a></li><li data-original-index="47"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 675&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 675</span></a></li><li data-original-index="48"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 670&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 670</span></a></li><li data-original-index="49"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 665&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 665</span></a></li><li data-original-index="50"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 662&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 662</span></a></li><li data-original-index="51"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 660&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 660</span></a></li><li data-original-index="52"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 652&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 652</span></a></li><li data-original-index="53"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 650&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 650</span></a></li><li data-original-index="54"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 636&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 636</span></a></li><li data-original-index="55"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 632&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 632</span></a></li><li data-original-index="56"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 630&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 630</span></a></li><li data-original-index="57"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 625&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 625</span></a></li><li data-original-index="58"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 480&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 480</span></a></li><li data-original-index="59"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 460&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 460</span></a></li><li data-original-index="60"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 450&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 450</span></a></li><li data-original-index="61"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 439&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 439</span></a></li><li data-original-index="62"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 435&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 435</span></a></li><li data-original-index="63"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 430&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 430</span></a></li><li data-original-index="64"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 429&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 429</span></a></li><li data-original-index="65"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 425&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 425</span></a></li><li data-original-index="66"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Snapdragon 215&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Snapdragon 215</span></a></li><li data-original-index="67"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 2200&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 2200</span></a></li><li data-original-index="68"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 2100&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 2100</span></a></li><li data-original-index="69"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 1280&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 1280</span></a></li><li data-original-index="70"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 1080&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 1080</span></a></li><li data-original-index="71"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 990&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 990</span></a></li><li data-original-index="72"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 980&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 980</span></a></li><li data-original-index="73"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 880&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 880</span></a></li><li data-original-index="74"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 850&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 850</span></a></li><li data-original-index="75"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 9825&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 9825</span></a></li><li data-original-index="76"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 9820&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 9820</span></a></li><li data-original-index="77"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 9810&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 9810</span></a></li><li data-original-index="78"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 9611&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 9611</span></a></li><li data-original-index="79"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 9610&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 9610</span></a></li><li data-original-index="80"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 8895&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 8895</span></a></li><li data-original-index="81"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 8890&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 8890</span></a></li><li data-original-index="82"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 7904&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 7904</span></a></li><li data-original-index="83"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 7884&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 7884</span></a></li><li data-original-index="84"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 7870&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 7870</span></a></li><li data-original-index="85"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 7580&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 7580</span></a></li><li data-original-index="86"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Exynos 7420&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Exynos 7420</span></a></li><li data-original-index="87"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 9300&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 9300</span></a></li><li data-original-index="88"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 9200&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 9200</span></a></li><li data-original-index="89"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 9000&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 9000</span></a></li><li data-original-index="90"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8300&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8300</span></a></li><li data-original-index="91"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8250&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8250</span></a></li><li data-original-index="92"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8200&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8200</span></a></li><li data-original-index="93"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8100&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8100</span></a></li><li data-original-index="94"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8050&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8050</span></a></li><li data-original-index="95"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8020&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8020</span></a></li><li data-original-index="96"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 8000&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 8000</span></a></li><li data-original-index="97"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 7300&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 7300</span></a></li><li data-original-index="98"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 7200&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 7200</span></a></li><li data-original-index="99"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 7050&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 7050</span></a></li><li data-original-index="100"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 7030&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 7030</span></a></li><li data-original-index="101"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 7020&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 7020</span></a></li><li data-original-index="102"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 6300&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 6300</span></a></li><li data-original-index="103"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 6100&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 6100</span></a></li><li data-original-index="104"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 6080&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 6080</span></a></li><li data-original-index="105"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 6020&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 6020</span></a></li><li data-original-index="106"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 1300&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 1300</span></a></li><li data-original-index="107"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 1200&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 1200</span></a></li><li data-original-index="108"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 1100&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 1100</span></a></li><li data-original-index="109"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 1080&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 1080</span></a></li><li data-original-index="110"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 1000&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 1000</span></a></li><li data-original-index="111"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 920&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 920</span></a></li><li data-original-index="112"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 900&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 900</span></a></li><li data-original-index="113"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 820&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 820</span></a></li><li data-original-index="114"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 810&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 810</span></a></li><li data-original-index="115"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 800&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 800</span></a></li><li data-original-index="116"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 720&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 720</span></a></li><li data-original-index="117"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dimensity 700&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dimensity 700</span></a></li><li data-original-index="118"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G99&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G99</span></a></li><li data-original-index="119"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G96&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G96</span></a></li><li data-original-index="120"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G95&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G95</span></a></li><li data-original-index="121"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G91&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G91</span></a></li><li data-original-index="122"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G90T&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G90T</span></a></li><li data-original-index="123"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G88&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G88</span></a></li><li data-original-index="124"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G85&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G85</span></a></li><li data-original-index="125"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G80&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G80</span></a></li><li data-original-index="126"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G70&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G70</span></a></li><li data-original-index="127"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio G35&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio G35</span></a></li><li data-original-index="128"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P90&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P90</span></a></li><li data-original-index="129"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P70&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P70</span></a></li><li data-original-index="130"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P65&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P65</span></a></li><li data-original-index="131"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P60&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P60</span></a></li><li data-original-index="132"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P35&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P35</span></a></li><li data-original-index="133"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P25&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P25</span></a></li><li data-original-index="134"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P23&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P23</span></a></li><li data-original-index="135"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P22&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P22</span></a></li><li data-original-index="136"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P20&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P20</span></a></li><li data-original-index="137"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio P10&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio P10</span></a></li><li data-original-index="138"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio A22&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio A22</span></a></li><li data-original-index="139"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio X25&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio X25</span></a></li><li data-original-index="140"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio X20&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio X20</span></a></li><li data-original-index="141"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Helio X10&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Helio X10</span></a></li><li data-original-index="142"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 9000e&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 9000e</span></a></li><li data-original-index="143"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 9000&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 9000</span></a></li><li data-original-index="144"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 990&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 990</span></a></li><li data-original-index="145"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 985&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 985</span></a></li><li data-original-index="146"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 980&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 980</span></a></li><li data-original-index="147"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 970&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 970</span></a></li><li data-original-index="148"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 960&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 960</span></a></li><li data-original-index="149"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 810&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 810</span></a></li><li data-original-index="150"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 820 5G&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 820 5G</span></a></li><li data-original-index="151"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 710&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 710</span></a></li><li data-original-index="152"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Kirin 659&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Kirin 659</span></a></li></ul></div></div>
      		</div>

      		<div class="l-col l-col-1-2">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">CPU Cores:</span>
      			<div class="phonefinder-slider phonefinder-slider-cores l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-cores-min" name="nCPUCoresMin" value="false">Min</span>
      			  <span class="slider-value right" id="skipval-cores-max" name="nCPUCoresMax" value="false">Max</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>


      			<script type="text/javascript">
      				makeSlider(".phonefinder-slider-cores", "#skipval-cores-min", "#skipval-cores-max", [
      					["1", "1"],
      					["2", "2"],
      					["4", "4"],
      					["6", "6"],
      					["8", "8"]
      				]);
      			</script>
      		  </div>
      		</div>
      		<div class="clearfix" style="clear:left;"></div>

      	  </div>

      	  <!-- MEMORY -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Memory</h3>
      		<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">RAM:</span>
      			<div class="phonefinder-slider phonefinder-slider-ram l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-ram-min" name="nRamMin" value="false">Any</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>


      			<script type="text/javascript">

      				makeSlider(".phonefinder-slider-ram", "#skipval-ram-min", false, [
      					["2GB", "2000"], ["3GB", "3000"], ["4GB", "4000"], ["6GB", "6000"], ["8GB", "8000"], ["10GB", "10000"], ["12GB", "12000"], ["16GB", "16000"]
      				]);

      			</script>
      		  </div>
      		</div>
      		<div class="l-col l-col-1-2">
      		  <div class="framed clearfix p10">
      			<span class="label float-left">Storage:</span>
      			<div class="phonefinder-slider phonefinder-slider-internal l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			  <span class="slider-value left" id="skipval-internal-min" name="nIntMemMin" value="false">Any</span>
      			<div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>
      			<script type="text/javascript">
      				makeSlider(".phonefinder-slider-internal", "#skipval-internal-min", false, [
      					["64MB", "64"],
      					["128MB", "128"],
      					["256MB", "256"],
      					["512MB", "512"],
      					["1GB", "1000"],
      					["2GB", "2000"],
      					["4GB", "4000"],
      					["8GB", "8000"],
      					["16GB", "16000"],
      					["32GB", "32000"],
      					["64GB", "64000"],
      					["128GB", "128000"],
      					["256GB", "256000"],
      					["512GB", "512000"],
      					["1TB", "1024000"]
      				]);


      			</script>
      		  </div>
      		</div>
      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">Card slot:</label>
      		  <select name="idCardslot" class="phonefinder-select" title=" " style="display: none;">
      			<option value="0"></option>
      			<option value="1">Yes (any type)</option>
      			<option value="2">Yes (dedicated)</option>
      			<option value="3">No</option>
      		  </select><div class="btn-group bootstrap-select phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Card slot:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Yes (any type)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Yes (any type)</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Yes (dedicated)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Yes (dedicated)</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;No&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">No</span></a></li></ul></div></div>
      		</div>
      	  </div>


      	  <!-- DISPLAY -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Display</h3>
      		<div class="framed clearfix p10 l-col-full">
      		  <span class="label float-left">Resolution:</span>
      		  <div class="phonefinder-slider phonefinder-slider-display l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      			<span class="slider-value left" id="skipval-display-min" name="nDisplayResMin" value="false">Min</span>
      			<span class="slider-value right" id="skipval-display-max" name="nDisplayResMax" value="false">Max</span>
      		  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      		  <script type="text/javascript">

      			makeSlider(".phonefinder-slider-display", "#skipval-display-min", "#skipval-display-max", [
      			 ["QVGA (240x320)", "76800"],
      			 ["WQVGA (240x400)", "96000"],
      			 ["HVGA (320x480)", "153600"],
      			 ["WVGA (480x800)", "384000"],
      			 ["qHD (540x960)", "518400"],
      			 ["HD (720x1280)", "921600"],
      			 ["FHD (1080x1920)", "2073600"],
      			 ["QHD (1440x2560)", "3686400"],
      			 ["4K (1644x3840)", "6312960"]
      			]);

      		  </script>

      		</div>

      <div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Size:</span>
      			  <div class="phonefinder-slider phonefinder-slider-size l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-size-min" name="fDisplayInchesMin" value="false">Min</span>
      				<span class="slider-value right" id="skipval-size-max" name="fDisplayInchesMax" value="false">Max</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			  <script type="text/javascript">

      				makeSlider(".phonefinder-slider-size", "#skipval-size-min", "#skipval-size-max", 3, 7.2, 0.1, '"');

      			  </script>
      			</div>
      		</div>
      		<div class="l-col l-col-1-2">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Density:</span>
      			  <div class="phonefinder-slider phonefinder-slider-density l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-density-min" name="nDisplayDensityMin" value="false">Min</span>
      				<span class="slider-value right" id="skipval-density-max" name="nDisplayDensityMax" value="false">Max</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			  <script type="text/javascript">

      				makeSlider(".phonefinder-slider-density", "#skipval-density-min", "#skipval-density-max", 100, 550, 10, "ppi");



      			  </script>
      			</div>
      		</div>


      		<div class="l-col l-col-1-2 mr10">
      		  <label for="" style="display: none;">Technology:</label>
      		  <select name="sDisplayTechs" class="phonefinder-select" multiple="" title=" " style="display: none;">
      			<option value="1">IPS</option>
      			<option value="2">OLED</option>
      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Technology:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;IPS&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">IPS</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;OLED&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">OLED</span></a></li></ul></div></div>
      		</div>

      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">Notch:</label>
      		  <select name="idDisplayNotch" class="phonefinder-select" title=" " style="display: none;">
      			<option value="0"></option>
      			<option value="1">No</option>
      			<option value="2">Yes</option>
      			<option value="3">Punch hole</option>
      		  </select><div class="btn-group bootstrap-select phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Notch:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;No&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">No</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Yes&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Yes</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Punch hole&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Punch hole</span></a></li></ul></div></div>
      		</div>


      	<div class="l-col l-col-1-2 mr10">
      	    <div class="framed clearfix p10">
      	        <span class="label float-left">Refresh rate:</span>
      	        <div class="phonefinder-slider phonefinder-slider-refresh-rate l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      	            <span class="slider-value left" id="skipval-refresh-rate-min" name="nDisplayFramesMin" value="false">Any</span>
      	        <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

      	        <script type="text/javascript">
      	            makeSlider(".phonefinder-slider-refresh-rate", "#skipval-refresh-rate-min", false, [
      	                ["90Hz", "90"],
      	                ["120Hz", "120"],
      	                ["144Hz", "144"],
      	                ["165Hz", "165"]
      	            ]);
      	        </script>
      	    </div>
      	</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="hdr-cb" class="p10 label label-normal">HDR</label>
      		  <input type="checkbox" name="chkHDR" class="float-right move-top" id="hdr-cb" value="selected">
      		</div>

      	  </div>

      	  <!-- MAIN CAMERA -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Main camera</h3>
      		<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Resolution:</span>
      			  <div class="phonefinder-slider phonefinder-slider-primary l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-primary-min" name="nCamPrimMin" value="false">Any</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

      			<script type="text/javascript">


      				makeSlider(".phonefinder-slider-primary", "#skipval-primary-min", false, [
      					["No", "-1"],
      					["1MP", "1"],
      					["5MP", "5"],
      					["10MP", "10"],
      					["12MP", "12"],
      					["16MP", "16"],
      					["20MP", "20"],
      					["30MP", "30"],
      					["40MP", "40"],
      					["48MP", "48"],
      					["60MP", "60"],
      					["64MP", "64"],
      					["108MP", "108"]
      				]);


      			  </script>
      			</div>
      		</div>

      		<div class="l-col l-col-1-4 mr10">
      		  <label for="" style="display: none;">Cameras:</label>
      		  <select name="sNumberCameras" id="sNumberCameras" class="phonefinder-select" multiple="" title=" " data-separator=" &amp; " style="display: none;">
      			<option name="One" value="1" title="One">One</option>
      			<option name="Two" value="2" title="Two">Two</option>
      			<option name="Three" value="3" title="Three">Three</option>
      			<option name="Four" value="4" title="Four">Four or more</option>
      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="sNumberCameras" title=""><span class="label">Cameras:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;One&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">One</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Two&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Two</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Three&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Three</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Four or more&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Four or more</span></a></li></ul></div></div>
      		</div>

      		<div class="framed l-col l-col-1-4 mr0">
      		  <label for="cameraois-cb" class="p10 label label-normal">OIS</label>
      		  <input type="checkbox" name="chkCameraOIS" class="float-right move-top" id="cameraois-cb" value="selected">
      		</div>

      <div class="l-col l-col-1-2 mr10">

      		<div class="framed clearfix p10">
      			  <span class="label float-left">F-number</span>
      			  <div class="phonefinder-slider phonefinder-slider-cameraf l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-cameraf-min" name="fCameraFMin" value="false">Min</span>
      				<span class="slider-value right" id="skipval-cameraf-max" name="fCameraFMax" value="false">Max</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
      		  <script type="text/javascript">
      			makeSlider(".phonefinder-slider-cameraf", "#skipval-cameraf-min", "#skipval-cameraf-max", 1.5, 2.8, 0.1, '');
      		  </script>
      		</div>
      </div>

      		<div class="framed l-col l-col-1-4 mr10">
      		  <label for="cameratele-cb" class="p10 label label-normal">Telephoto</label>
      		  <input type="checkbox" name="chkCameraTele" class="float-right move-top" id="cameratele-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4 mr0">
      		  <label for="cameraultrawide-cb" class="p10 label label-normal">Ultrawide</label>
      		  <input type="checkbox" name="chkCameraUltrawide" class="float-right move-top" id="cameraultrawide-cb" value="selected">
      		</div>

      		<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Video:</span>
      			  <div class="phonefinder-slider phonefinder-slider-video l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-video-min" name="nVideoMin" value="false">Any</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>
      			<script type="text/javascript">
      				makeSlider(".phonefinder-slider-video", "#skipval-video-min", false, [
      					["QVGA", "240"],
      					["VGA", "480"],
      					["720p", "720"],
      					["1080p", "1080"],
      					["4K", "2160"],
      					["8K", "4320"]
      				]);
      			</script>
      			</div>
      		</div>

      		<div class="l-col l-col-1-2">
      			<label style="display: none;">Flash:</label>
      			<select name="sCameraFlashes" multiple="" class="phonefinder-select" title=" " style="display: none;">
      			  <option value="1">LED</option>
      			  <option value="2">Dual-LED</option>
      			  <option value="3">Xenon</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Flash:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;LED&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">LED</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Dual-LED&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Dual-LED</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Xenon&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Xenon</span></a></li></ul></div></div>
      		</div>


      	  </div>



      	  <!-- SELFIE CAMERA -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Selfie camera</h3>

      		<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Resolution:</span>
      			  <div class="phonefinder-slider phonefinder-slider-secondary l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-secondary-min" name="nCamSecMin" value="false">Any</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

      			 <script type="text/javascript">
      				makeSlider(".phonefinder-slider-secondary", "#skipval-secondary-min", false, [
      					["No", "-1"],
      					["1MP", "1"],
      					["5MP", "5"],
      					["8MP", "8"],
      					["12MP", "12"],
      					["16MP", "16"],
      					["24MP", "24"],
      					["32MP", "32"],
      					["48MP", "48"]
      				]);

      			  </script>
      			</div>
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="dualcamera2-cb" class="p10 label label-normal">Dual camera</label>
      		  <input type="checkbox" name="chkDualCamera2" class="float-right move-top" id="dualcamera2-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4 mr0">
      		  <label for="cameraois2-cb" class="p10 label label-normal">OIS</label>
      		  <input type="checkbox" name="chkCameraOIS2" class="float-right move-top" id="cameraois2-cb" value="selected">
      		</div>
      	  </div>

      	  <div class="row">

      	  	<div class="framed l-col l-col-1-4">
      		  <label for="frontflash-cb" class="p10 label label-normal">Front flash</label>
      		  <input type="checkbox" name="chkFrontflash" class="float-right move-top" id="frontflash-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="frontpopup-cb" class="p10 label label-normal">Pop-up camera</label>
      		  <input type="checkbox" name="chkFrontPopup" class="float-right move-top" id="frontpopup-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="frontud-cb" class="p10 label label-normal">Under display camera</label>
      		  <input type="checkbox" name="chkUDCamera" class="float-right move-top" id="frontud-cb" value="selected">
      		</div>
      	  </div>

      	  <!-- AUDIO -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Audio</h3>
      		<div class="framed l-col l-col-1-4">
      		  <label for="35mm-cb" class="p10 label label-normal">3.5mm jack</label>
      		  <input type="checkbox" name="chk35mm" class="float-right move-top" id="35mm-cb" value="selected">
      		</div>
      		<div class="framed l-col l-col-1-4">
      		  <label for="stereo-cb" class="p10 label label-normal">Dual speakers</label>
      		  <input type="checkbox" name="chkStereoSpk" class="float-right move-top" id="stereo-cb" value="selected">
      		</div>
      	  </div>

      	   <!-- SENSORS -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Sensors</h3>
      		<div class="framed l-col l-col-1-4">
      		  <label for="accelerometer-cb" class="p10 label label-normal">Accelerometer</label>
      		  <input type="checkbox" name="chkAccelerometer" class="float-right move-top" id="accelerometer-cb" value="selected">
      		</div>

      		 <div class="framed l-col l-col-1-4">
      		  <label for="gyro-cb" class="p10 label label-normal">Gyro</label>
      		  <input type="checkbox" name="chkGyro" class="float-right move-top" id="gyro-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="compass-cb" class=" p10 label label-normal">Compass</label>
      		  <input type="checkbox" name="chkCompass" class="float-right move-top" id="compass-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="proximity-cb" class=" p10 label label-normal">Proximity</label>
      		  <input type="checkbox" name="chkProximity" class="float-right move-top" id="proximity-cb" value="selected">
      		</div>
      	  </div>


      	  <div class="row">
      		<div class="framed l-col l-col-1-4">
      		  <label for="barometer-cb" class="p10 label label-normal">Barometer</label>
      		  <input type="checkbox" name="chkBarometer" class="float-right move-top" id="barometer-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="heartrate-cb" class=" p10 label label-normal">Heart rate</label>
      		  <input type="checkbox" name="chkHeartrate" class="float-right move-top" id="heartrate-cb" value="selected">
      		</div>



      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">Fingerprint:</label>
      		  <select name="sFingerprints" class="phonefinder-select" multiple="" title=" " style="display: none;">
      			<option value="1" data-any="">Yes (any type)</option>
      			<option value="2">Front-mounted</option>
      			<option value="3">Rear-mounted</option>
      			<option value="4">Side-mounted</option>
      			<option value="5">Under display</option>
      		  </select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Fingerprint:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Yes (any type)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Yes (any type)</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Front-mounted&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Front-mounted</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Rear-mounted&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Rear-mounted</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Side-mounted&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Side-mounted</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Under display&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Under display</span></a></li></ul></div></div>
      		</div>
      	  </div>


      	   <!-- CONNECT -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Connectivity</h3>
      		<div class="l-col l-col-1-2 mr10">
      			<label style="display: none;">WLAN (Wi-Fi):</label>
      			<select name="sWLANs" class="phonefinder-select" multiple="" title=" " style="display: none;">
      			  <option value="2">Wi-Fi 4 (802.11n)</option>
      			  <option value="3">Wi-Fi 5 (802.11ac)</option>
      			  <option value="7">Wi-Fi 6 (802.11ax)</option>
      			  <option value="8">Wi-Fi 7 (802.11be)</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">WLAN (Wi-Fi):</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Wi-Fi 4 (802.11n)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Wi-Fi 4 (802.11n)</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Wi-Fi 5 (802.11ac)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Wi-Fi 5 (802.11ac)</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Wi-Fi 6 (802.11ax)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Wi-Fi 6 (802.11ax)</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Wi-Fi 7 (802.11be)&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Wi-Fi 7 (802.11be)</span></a></li></ul></div></div>
      		</div>
      		<div class="l-col l-col-1-2">
      			<label style="display: none;">Bluetooth:</label>
      			<select name="sBluetooths" multiple="" class="phonefinder-select" title=" " style="display: none;">
      			  <option value="1">Any Bluetooth</option>
      			  <option value="5">Bluetooth 4.0</option>
      			  <option value="6">Bluetooth 4.1</option>
      			  <option value="7">Bluetooth 4.2</option>
      			  <option value="8">Bluetooth 5.0</option>
      			  <option value="9">Bluetooth 5.1</option>
      			  <option value="10">Bluetooth 5.2</option>
      			  <option value="11">Bluetooth 5.3</option>
      			  <option value="12">Bluetooth 5.4</option>
      			</select><div class="btn-group bootstrap-select show-tick phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Bluetooth:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any Bluetooth&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any Bluetooth</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 4.0&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 4.0</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 4.1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 4.1</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 4.2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 4.2</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 5.0&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 5.0</span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 5.1&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 5.1</span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 5.2&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 5.2</span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 5.3&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 5.3</span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Bluetooth 5.4&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Bluetooth 5.4</span></a></li></ul></div></div>
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="gps-cb" class="label label-normal">GPS</label>
      		  <input type="checkbox" name="chkGPS" class="p10 float-right move-top" id="gps-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="nfc-cb" class="p10 label label-normal">NFC</label>
      		  <input type="checkbox" name="chkNFC" class="float-right move-top" id="nfc-cb" value="selected">
      		</div>

      		 <div class="framed l-col l-col-1-4">
      		  <label for="infrared-cb" class="p10 label label-normal">Infrared</label>
      		  <input type="checkbox" name="chkInfrared" class="float-right move-top" id="infrared-cb" value="selected">
      		</div>

      		<div class="framed l-col l-col-1-4">
      		  <label for="fmradio-cb" class="p10 label label-normal">FM Radio</label>
      		  <input type="checkbox" name="chkFMradio" class="float-right move-top" id="fmradio-cb" value="selected">
      		</div>
      	  </div>
      	  <div class="row">
      		<div class="l-col l-col-1-2">
      		<label for="" style="display: none;">USB:</label>
      		<select name="nUSBType" class="phonefinder-select" title=" " style="display: none;">
      		<option value="0"></option>
      		<option value="1">Any USB-C</option>
      		<option value="2">USB-C 3.0 and higher</option>
      		</select><div class="btn-group bootstrap-select phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">USB:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Any USB-C&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Any USB-C</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;USB-C 3.0 and higher&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">USB-C 3.0 and higher</span></a></li></ul></div></div>
      		</div>
      	  </div>

      	  <!-- BATTERY -->
      	  <div class="row">
      		<h3 class="phonefinder-title">Battery</h3>
      <div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Capacity:</span>
      			  <div class="phonefinder-slider phonefinder-slider-capacity l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-capacity-min" name="nBatCapacityMin" value="false">Min</span>
      				<span class="slider-value right" id="skipval-capacity-max" name="nBatCapacityMax" value="false">Max</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>


      			<script type="text/javascript">

      				makeSlider(".phonefinder-slider-capacity", "#skipval-capacity-min", "#skipval-capacity-max", 3000, 7000, 200, "mAh");

      			</script>
      			</div>
      		  </div>


      		<div class="l-col l-col-1-2">
      		  <label for="" style="display: none;">Removable:</label>
      		  <select name="idBatRemovable" class="phonefinder-select" title=" " style="display: none;">
      			<option value="0"></option>
      			<option value="1">Removable</option>
      			<option value="2">Non-removable</option>
      		  </select><div class="btn-group bootstrap-select phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title=""><span class="label">Removable:</span><span class="filter-option pull-left">&nbsp;</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Removable&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Removable</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Non-removable&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Non-removable</span></a></li></ul></div></div>
      		</div>


      		</div>

      <div class="row">
      	<div class="l-col l-col-1-2 mr10">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Wired Charging:</span>
      			  <div class="phonefinder-slider phonefinder-slider-charging l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background">
      				<span class="slider-value left" id="skipval-charging-min" name="nChargingMin" value="false">Min</span>
      				<span class="slider-value right" id="skipval-charging-max" name="nChargingMax" value="false">Max</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			 <script type="text/javascript">
      				makeSlider(".phonefinder-slider-charging", "#skipval-charging-min", "#skipval-charging-max", [
      					["10W", "10"],
      					["15W", "15"],
      					["20W", "20"],
      					["25W", "25"],
      					["30W", "30"],
      					["40W", "40"],
      					["50W", "50"],
      					["60W", "60"],
      					["80W", "80"],
      					["100W", "100"]
      				]);

      			  </script>
      			</div>
      	</div>



      	<div class="l-col l-col-1-2">
      		  <div class="framed clearfix p10">
      			  <span class="label float-left">Wireless Charging:</span>
      			  <div class="phonefinder-slider phonefinder-slider-wcharging l-col-3-4 center-box noUi-target noUi-ltr noUi-horizontal noUi-background" style="width: 52%;">
      				<span class="slider-value left" id="skipval-wcharging-min" name="nChargingWMin" value="false">Min</span>
      				<span class="slider-value right" id="skipval-wcharging-max" name="nChargingWMax" value="false">Max</span>
      			  <div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

      			 <script type="text/javascript">
      				makeSlider(".phonefinder-slider-wcharging", "#skipval-wcharging-min", "#skipval-wcharging-max", [
      					["5W", "1"],
      					["10W", "10"],
      					["15W", "15"],
      					["20W", "20"],
      					["25W", "25"],
      					["30W", "30"],
      					["40W", "40"],
      					["50W", "50"],
      					["65W", "65"]
      				]);

      			  </script>
      			</div>
      	</div>


      </div>





      	  </div>

      	  <div class="row">
      	  <h3 class="phonefinder-title">Misc</h3>
      		<div class="l-col l-col-1-2 mr10 free-text-input">
      		<span class="label float-left">Free text:</span>
      		<input type="text" name="sFreeText" value="" class="l-col-full framed p10 pf-input">
      		</div>

      		<div class="l-col l-col-1-2">
      		<label for="" style="display: none;">Order:</label>
      		<select name="nOrder" class="phonefinder-select" title=" " style="display: none;">
      		<option value="0">Popularity</option>
      		<option value="1">Price</option>
      		<option value="2">Weight</option>
      		<option value="3">Camera resolution</option>
      		<option value="4">Battery capacity</option>
      		</select><div class="btn-group bootstrap-select phonefinder-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Popularity"><span class="label">Order:</span><span class="filter-option pull-left">Popularity</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Popularity&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Popularity</span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Price&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Price</span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Weight&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Weight</span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Camera resolution&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Camera resolution</span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Battery capacity&lt;/span&gt;" data-tokens="null"><i class="glyphicon glyphicon-ok check-mark"></i><span class="text">Battery capacity</span></a></li></ul></div></div>
      		</div>
      	  </div>
      	  <div class="row">
      		<div class="framed l-col l-col-1-4">
      		  <label for="reviewed-cb" class="p10 label label-normal">Reviewed only</label>
      		  <input type="checkbox" name="chkReview" class="float-right move-top" id="reviewed-cb" value="selected">
      		</div>
      	  </div>

      	  <div class="row">
      		<span class="pf-border">
      		  <input type="submit" value="Show" class="pf-button">
      		  <br><span class="pf-results" id="pf-results">11961 results</span>
      		</span>
      	  </div>
      	  </form>




      <p>&nbsp;</p>
      <p class="note">
      *Price based on the lowest online SIM-free price, excluding taxes, subsidies and shipment. Only phones with known prices will appear in the results.
      </p>
      <p class="note">
      *In Free text field you can search for other features, not mentioned above. For example - "120Hz", "macro", "periscope", "reverse wireless", "Gorilla Glass 5", "GALILEO", "aptX" and so on. In some cases it can be very useful, but the results are less reliable. </p>


      <a class="arenaev-notification" href="https://www.arenaev.com/search.php3" target="_blank">
          <h3>NEED SIMILAR SEARCH FOR ELECTRIC VEHICLES? WE HAVE IT.</h3>
      </a>
      <p>&nbsp;</p>
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
           <img src="./Phone Finder - search for a phone by feature - GSMArena.com_files/logo-gsmarena-com.png" alt="">
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


      <script type="text/javascript" src="./Phone Finder - search for a phone by feature - GSMArena.com_files/autocomplete.js.تنزيل"></script>
      <script type="text/javascript" language="javascript">
      AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
      $gsm.addEventListener(document, "DOMContentLoaded", function()
      {
          new Autocomplete( "topsearch-text", "topsearch", true );
      }
      )
      </script>















      <div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Phone finder</span><div class="logo" draggable="false"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/search.php3?#prev"></a><a class="go-right" href="https://www.gsmarena.com/search.php3?#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad"></div><div class="thumb-gallery"><a class="go-up" href="https://www.gsmarena.com/search.php3?#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/search.php3?#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><div id="extension-lfbpl"></div><!----><div id="wp-extension" data-id="dpadflhmiohjfhhaehelneimpllfbpcg"></div>

</template>
