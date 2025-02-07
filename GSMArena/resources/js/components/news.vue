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



<script type="text/javascript" src="./Mobile phones news - GSMArena.com_files/misc.js.تنزيل"></script> <iframe name="__tcfapiLocator" style="display: none;" src="./Mobile phones news - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Mobile phones news - GSMArena.com_files/saved_resource(1).html"></iframe><img src="./Mobile phones news - GSMArena.com_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;">



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

  <object type="image/svg+xml" data="./Mobile phones news - GSMArena.com_files/logo.svg"><img src="./Mobile phones news - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
  <span>GSMArena.com</span></a>
  </div>



  <div id="nav" role="main">
  <form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
      <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">

      <span id="quick-search-button">
        <input type="submit" value="Go">
        <i class="head-icon icomoon-liga icon-search-left"></i>
      </span>


  <div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/news.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/news.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/news.php3#">More news results</a></li></ul></div></div><div class="search-buttons"><a class="go" href="https://www.gsmarena.com/news.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


  	<a href="https://www.gsmarena.com/news.php3#" onclick="return false;" class="login-icon" id="login-active">
  	  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
  	</a>

  	<span class="tooltip" id="login-popup2">
  <form action="https://www.gsmarena.com/login.php3" method="post">
  <input type="Hidden" name="sSource" value="MHF6aGwxb3dvLA%3D%3D">
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

  <div class="main main-article-list l-box col float-right">


  <style>
  .review-background {
      background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/news-hlr.jpg');
      background-size: 100%;
    }
  </style>
  <div class="review-header">
  <div class="review-hd review-background">
  <div class="article-info">
      <div class="article-info-line border-bottom">
          <div class="blur"></div>
  <span class="left label-text selected">Popular tags</span>
  <ul class="popular-tags drop-down-list">
  	<li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Featured">Featured</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Android">Android</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Samsung">Samsung</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Nokia">Nokia</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Sony">Sony</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Rumors">Rumors</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Apple">Apple</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=LG">LG</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Xiaomi">Xiaomi</a></li>
      <li class="popular-tags-list-item"><a href="https://www.gsmarena.com/news.php3?sTag=Motorola">Motorola</a></li>
  </ul>
  </div>
  <div class="center-stage article-accent">
      <div class="article-hgroup">

          <br>
          <h1 class="article-info-name">News</h1>
      </div>
  </div>
  <div class="article-info-line">
      <div class="blur bottom"></div>
  <div class="search-band">
  	<form method="get" action="https://www.gsmarena.com/news.php3">
  	<label>
  	<strong>Search for</strong>
  	<input class="searchFor" type="text" value="" maxlength="20" size="30" name="sSearch">
  	</label>
  	<label>
  	<input type="submit" class="submit button button-small" style="top:-3px" value="Search">
  	</label>
  	</form>
  </div>
      </div>
  </div>
  </div>
  </div>




  <div id="news" class="clearfix"><div class="floating-title">




  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/motorola_edge_50_5g_leaks_ahead_of_launch-news-63831.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000.jpg" alt="Motorola Edge 50 5G leaks ahead of launch">
    </a>

    </div>
      <a href="https://www.gsmarena.com/motorola_edge_50_5g_leaks_ahead_of_launch-news-63831.php">
      <h3>Motorola Edge 50 5G leaks ahead of launch</h3>
    </a>
    <p>Motorola is gearing up to announce a new Edge 50 series devices in India soon which will boast the title of the world’s slimmest MIL-810 military-grade phone. We now know that the device will be...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>24 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63831.php"><i class="head-icon icon-comments"></i>2</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/vivo_v40_series_coming_to_india_soon_the_v40_pro_has_four_50mp_zeiss_cameras-news-63826.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(1).jpg" alt="vivo V40 series coming to India soon, the V40 Pro has four 50MP Zeiss cameras">
    </a>

    </div>
      <a href="https://www.gsmarena.com/vivo_v40_series_coming_to_india_soon_the_v40_pro_has_four_50mp_zeiss_cameras-news-63826.php">
      <h3>vivo V40 series coming to India soon, the V40 Pro has four 50MP Zeiss cameras</h3>
    </a>
    <p>vivo has officially confirmed that the V40 series is coming to India “soon”. Even better, the company shared details about the four 50MP cameras on the vivo V40 Pro, which is “an upgraded...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>24 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63826.php"><i class="head-icon icon-comments"></i>9</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/samsung_galaxy_z_fold6_flip6_buds3_ring_watch7_and_ultra_are_now_available_globally_-news-63827.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_001.jpg" alt="Samsung Galaxy Z Fold6, Flip6, Buds3, Ring, Watch7 and Ultra are now available globally ">
    </a>

    </div>
      <a href="https://www.gsmarena.com/samsung_galaxy_z_fold6_flip6_buds3_ring_watch7_and_ultra_are_now_available_globally_-news-63827.php">
      <h3>Samsung Galaxy Z Fold6, Flip6, Buds3, Ring, Watch7 and Ultra are now available globally </h3>
    </a>
    <p>Samsung’s new foldables – the Z Fold6 and Z Flip6 are now on open sale globally. The are joined by the Watch7 and Watch Ultra smartwatches as well as the Galaxy Ring and Buds3 earbuds.




  One...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>24 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63827.php"><i class="head-icon icon-comments"></i>3</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/google_pixel_9_pro_xl_gets_compared_to_pixel_8_pro_in_new_handson_video-news-63825.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(2).jpg" alt="Google Pixel 9 Pro XL shown side by side Pixel 8 Pro in new hands-on video">
    </a>

    </div>
      <a href="https://www.gsmarena.com/google_pixel_9_pro_xl_gets_compared_to_pixel_8_pro_in_new_handson_video-news-63825.php">
      <h3>Google Pixel 9 Pro XL shown side by side Pixel 8 Pro in new hands-on video</h3>
    </a>
    <p>Google is launching the Pixel 9 family on August 13, and one new addition to the lineup will be Pixel 9 Pro XL. It is expected to arrive as the natural successor of the Pixel 8 Pro with an XL body...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>24 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63825.php"><i class="head-icon icon-comments"></i>20</a>

    </div>

  </div>


  <div style="margin-bottom: 10px; width: 709px;">


  <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+b+6l-99-c5" data-ad-client="ca-pub-9508420272844734" data-ad-slot="6461876629"></ins>
  <script>
  	(adsbygoogle = window.adsbygoogle||[]).requestNonPersonalizedAds = 1;
      (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/xiaomi_mix_flip_is_coming_to_europe_will_cost_eur_1300-news-63824.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_001(1).jpg" alt="Xiaomi Mix Flip is coming to Europe, will cost EUR 1,300">
    </a>

    </div>
      <a href="https://www.gsmarena.com/xiaomi_mix_flip_is_coming_to_europe_will_cost_eur_1300-news-63824.php">
      <h3>Xiaomi Mix Flip is coming to Europe, will cost EUR 1,300</h3>
    </a>
    <p>Xiaomi introduced its first clamshell last week, the Mix Flip. We attended the event and tried to learn any information regarding an international launch, but company reps were unwilling to discuss...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>24 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63824.php"><i class="head-icon icon-comments"></i>50</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/spotify_confirms_18_deluxe_plan_is_coming-news-63823.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(3).jpg" alt="Spotify confirms $18 Deluxe plan is coming">
    </a>

    </div>
      <a href="https://www.gsmarena.com/spotify_confirms_18_deluxe_plan_is_coming-news-63823.php">
      <h3>Spotify confirms $18 Deluxe plan is coming</h3>
    </a>
    <p>Spotify has been rumored to introduce an even more expensive plan than its Premium one for literally years at this point. This has sometimes been referred to as "supremium", a plan which would...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>24 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63823.php"><i class="head-icon icon-comments"></i>55</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/motorola_teases_worlds_slimmest_military_grade_phone-news-63822.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(4).jpg" alt="Motorola teases " world's="" slimmest="" military="" grade="" phone""="">
    </a>

    </div>
      <a href="https://www.gsmarena.com/motorola_teases_worlds_slimmest_military_grade_phone-news-63822.php">
      <h3>Motorola teases "world's slimmest military grade phone"</h3>
    </a>
    <p>Motorola is teasing a new smartphone that it's going to be launching in India soon. According to the brand, this will be the world's slimmest "military grade phone" - meaning the thinnest handset to...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63822.php"><i class="head-icon icon-comments"></i>46</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/honor_x60i_leaks_in_all_colors-news-63821.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(5).jpg" alt="Honor X60i leaks in all colors">
    </a>

    </div>
      <a href="https://www.gsmarena.com/honor_x60i_leaks_in_all_colors-news-63821.php">
      <h3>Honor X60i leaks in all colors</h3>
    </a>
    <p>Last week the upcoming Honor X60i leaked in one color, courtesy of a listing by China Telecom, which also revealed its specs. Today, prolific Chinese leakster Digital Chat Station has shared an image...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63821.php"><i class="head-icon icon-comments"></i>11</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/samsung_galaxy_tab_s10_and_s10_ultra_production_starts_in_august-news-63816.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(6).jpg" alt="Samsung Galaxy Tab S10+ and S10 Ultra production planned to start in August">
    </a>

    </div>
      <a href="https://www.gsmarena.com/samsung_galaxy_tab_s10_and_s10_ultra_production_starts_in_august-news-63816.php">
      <h3>Samsung Galaxy Tab S10+ and S10 Ultra production planned to start in August</h3>
    </a>
    <p>Samsung's Galaxy Tab S10 series hasn't launched alongside the Galaxy Z Fold6 and Galaxy Z Flip6 at the company's Unpacked event earlier this month, but it is of course still coming this year.

  Last...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63816.php"><i class="head-icon icon-comments"></i>13</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/first_foldable_iphone_to_be_flipstyle_landing_in_2026-news-63820.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(7).jpg" alt="First foldable iPhone to be flip-style, landing in 2026">
    </a>

    </div>
      <a href="https://www.gsmarena.com/first_foldable_iphone_to_be_flipstyle_landing_in_2026-news-63820.php">
      <h3>First foldable iPhone to be flip-style, landing in 2026</h3>
    </a>
    <p>Apple's first foldable iPhone has been in the news for years, and it's still not materialized. That, however, might change in 2026, according to a new report from Asia today.

  It will be a...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63820.php"><i class="head-icon icon-comments"></i>44</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/poco_f6_deadpool___wolverine_edition_leaks_ahead_of_july_26_unveiling-news-63818.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(8).jpg" alt="Poco F6 Deadpool &amp; Wolverine edition leaks ahead of July 26 unveiling">
    </a>

    </div>
      <a href="https://www.gsmarena.com/poco_f6_deadpool___wolverine_edition_leaks_ahead_of_july_26_unveiling-news-63818.php">
      <h3>Poco F6 Deadpool &amp; Wolverine edition leaks ahead of July 26 unveiling</h3>
    </a>
    <p>The Deadpool &amp; Wolverine movie is coming out on July 26, and it looks like Poco has a special (possibly limited edition) treat in store for us to mark that occasion. A special edition Deadpool &amp;...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63818.php"><i class="head-icon icon-comments"></i>27</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/amazon_prime_video_gets_new_ui_that_helps_you_find_whats_included_with_your_prime_subscription-news-63819.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(9).jpg" alt="Amazon Prime Video gets new UI that helps you find what&#39;s included with your Prime subscription">
    </a>

    </div>
      <a href="https://www.gsmarena.com/amazon_prime_video_gets_new_ui_that_helps_you_find_whats_included_with_your_prime_subscription-news-63819.php">
      <h3>Amazon Prime Video gets new UI that helps you find what's included with your Prime subscription</h3>
    </a>
    <p>Amazon Prime Video is a streaming service, but also a hub that allows you to use other streaming services (e.g. Max). This is cool and all, but it can get a little confusing about what you can and...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63819.php"><i class="head-icon icon-comments"></i>6</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/samsung_galaxy_z_flip6_teardown_video_shows_off_the_larger_batteries_and_the_new_vapor_chamber-news-63815.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(10).jpg" alt="First Galaxy Z Flip6 teardown videos show off the larger batteries and the new vapor chamber">
    </a>

    </div>
      <a href="https://www.gsmarena.com/samsung_galaxy_z_flip6_teardown_video_shows_off_the_larger_batteries_and_the_new_vapor_chamber-news-63815.php">
      <h3>First Galaxy Z Flip6 teardown videos show off the larger batteries and the new vapor chamber</h3>
    </a>
    <p>The Samsung Galaxy Z Flip6 brings several key improvements over the Z Flip5. Some are pretty straightforward like using a 50MP sensor in the main camera. Others took some doing. For example, the 2024...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63815.php"><i class="head-icon icon-comments"></i>15</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/hmd_crest_launches_in_india_on_july_25_to_bring_a_new_era_of_portraits-news-63817.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(11).jpg" alt="HMD Crest series launches in India on July 25 to bring " a="" new="" era="" of="" portraits""="">
    </a>

    </div>
      <a href="https://www.gsmarena.com/hmd_crest_launches_in_india_on_july_25_to_bring_a_new_era_of_portraits-news-63817.php">
      <h3>HMD Crest series launches in India on July 25 to bring "a new era of portraits"</h3>
    </a>
    <p>HMD's been very active recently, especially in leaks - the Finnish company is apparently very busy working on a bunch of own-brand smartphones, and on July 25, it will be brining some of them to...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63817.php"><i class="head-icon icon-comments"></i>21</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/samsung_starts_distributing_galaxy_z_flip6_olympic_edition_to_athletes-news-63812.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_001(2).jpg" alt="Samsung starts distributing Galaxy Z Flip6 Olympic Edition to athletes">
    </a>

    </div>
      <a href="https://www.gsmarena.com/samsung_starts_distributing_galaxy_z_flip6_olympic_edition_to_athletes-news-63812.php">
      <h3>Samsung starts distributing Galaxy Z Flip6 Olympic Edition to athletes</h3>
    </a>
    <p>Samsung recently introduced the Galaxy Z Flip6 Olympic Edition at its Unpacked event. This custom smartphone will be gifted to all athletes participating in the Paris 2024 Olympics and...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63812.php"><i class="head-icon icon-comments"></i>24</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/india_aims_to_lower_smartphone_prices_by_15_with_a_new_tax_reduction-news-63814.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_011.jpg" alt="India aims to lower smartphone prices by 15% with a new tax reduction">
    </a>

    </div>
      <a href="https://www.gsmarena.com/india_aims_to_lower_smartphone_prices_by_15_with_a_new_tax_reduction-news-63814.php">
      <h3>India aims to lower smartphone prices by 15% with a new tax reduction</h3>
    </a>
    <p>The Made in India smartphones are about to get 15% cheaper for local customers after a new tax reduction was implemented by the Finance Minister of India.

  The 2024 Union Budget will see the basic...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63814.php"><i class="head-icon icon-comments"></i>30</a>

    </div>

  </div>

  <a name="more"></a>

  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/samsung_offers_a_look_inside_the_galaxy_z_fold6_galaxy_z_flip6_and_the_galaxy_watch_ultra-news-63813.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(12).jpg" alt="Have a look inside the Galaxy Z Fold6, Galaxy Z Flip6 and the Galaxy Watch Ultra">
    </a>

    </div>
      <a href="https://www.gsmarena.com/samsung_offers_a_look_inside_the_galaxy_z_fold6_galaxy_z_flip6_and_the_galaxy_watch_ultra-news-63813.php">
      <h3>Have a look inside the Galaxy Z Fold6, Galaxy Z Flip6 and the Galaxy Watch Ultra</h3>
    </a>
    <p>Have you ever watched a teardown video of a modern smartphone and wondered “what does that thingy do?” Well, the curious are in luck – Samsung has posted exploded views of the Galaxy Z Fold6, Z Flip6...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63813.php"><i class="head-icon icon-comments"></i>2</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/nubia_launches_z60s_pro_z60_ultra_tags_along_with_more_powerful_chipset-news-63811.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_000(13).jpg" alt="nubia launches new Z60S Pro, Z60 Ultra tags along with more powerful chipset">
    </a>

    </div>
      <a href="https://www.gsmarena.com/nubia_launches_z60s_pro_z60_ultra_tags_along_with_more_powerful_chipset-news-63811.php">
      <h3>nubia launches new Z60S Pro, Z60 Ultra tags along with more powerful chipset</h3>
    </a>
    <p>The nubia Z60 Ultra Leading Version and Z60S Pro are the latest devices to launch from the ZTE sub-brand. The Z60 Ultra is getting an overclocked Snapdragon 8 Gen 3 chipset and new colors while the...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63811.php"><i class="head-icon icon-comments"></i>29</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/huawei_mate_70_launch_reportedly_delayed-news-63810.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_00.jpg" alt="Huawei Mate 70 launch reportedly delayed">
    </a>

    </div>
      <a href="https://www.gsmarena.com/huawei_mate_70_launch_reportedly_delayed-news-63810.php">
      <h3>Huawei Mate 70 launch reportedly delayed</h3>
    </a>
    <p>Last year Huawei surprised everyone when it launched its Mate 60 Pro with a 7nm 5G-capable Kirin 9000s chipset, SK Hynix RAM chips and other components that should not have been available to Huawei...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63810.php"><i class="head-icon icon-comments"></i>25</a>

    </div>

  </div>


  <div class="news-item">
    <div class="news-item-media-wrap left">
    <a href="https://www.gsmarena.com/google_is_working_on_a_tv_streamer_settop_box-news-63809.php">
      <img src="./Mobile phones news - GSMArena.com_files/gsmarena_001(3).jpg" alt="Google is working on a TV Streamer set-top box">
    </a>

    </div>
      <a href="https://www.gsmarena.com/google_is_working_on_a_tv_streamer_settop_box-news-63809.php">
      <h3>Google is working on a TV Streamer set-top box</h3>
    </a>
    <p>Google is working on a new Chromecast with Google TV device, and it looks drastically different from what we have seen so far.

  According to 9to5Google, it would be called TV Streamer and would...</p>
     <div class="meta-line">
      <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 July 2024</span>
      <a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63809.php"><i class="head-icon icon-comments"></i>17</a>

    </div>

  </div>



  <div class="review-nav-v2 col with-header-footer-buttons"><a href="https://www.gsmarena.com/news.php3#" class="scroll-to-top">To top</a>

  <div class="nav-pages">
  <a href="https://www.gsmarena.com/news.php3#" class="prevnextbuttondis">◄</a> <strong>1</strong> <a href="https://www.gsmarena.com/news.php3?iPage=2">2</a><a href="https://www.gsmarena.com/news.php3#">…</a><a href="https://www.gsmarena.com/news.php3?iPage=3170">3170</a><a href="https://www.gsmarena.com/news.php3?iPage=2" class="prevnextbutton" title="Next page">►</a></div>



  <a href="https://www.gsmarena.com/news.php3#" class="show-footer">To footer</a></div>





  </div>
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

  <a href="https://www.gsmarena.com/oneplus_nord_4-review-2724.php" class="module-reviews-xl-link">
    <img class="module-reviews-xl-thumb xl-thumb-large" src="./Mobile phones news - GSMArena.com_files/gsmarena_000(14).jpg" alt="OnePlus Nord 4 review">
    <div class="module-review-xl-title">

      <strong>OnePlus Nord 4 review</strong>
    </div>
  </a>
  <a href="https://www.gsmarena.com/nothing_cmf_phone_1-review-2719.php" class="module-reviews-xl-link">
    <img class="module-reviews-xl-thumb xl-thumb-large" src="./Mobile phones news - GSMArena.com_files/gsmarena_001(4).jpg" alt="CMF Phone 1 by Nothing review">
    <div class="module-review-xl-title">

      <strong>CMF Phone 1 by Nothing review</strong>
    </div>
  </a>
  <a href="https://www.gsmarena.com/samsung_galaxy_z_fold6-review-2725.php" class="module-reviews-xl-link">
    <img class="module-reviews-xl-thumb xl-thumb-large" src="./Mobile phones news - GSMArena.com_files/gsmarena_001(5).jpg" alt="Samsung Galaxy Z Fold6 review">
    <div class="module-review-xl-title">

      <strong>Samsung Galaxy Z Fold6 review</strong>
    </div>
  </a>

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
  </tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a55-12824.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">30,536</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">27,550</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_11-9848.php"><nobr>A{{ $deviceName }}</nobr></a></th><td headers="th3c">26,465</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_nord_4-13200.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">26,169</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>X{{ $deviceName }}</nobr></a></th><td headers="th3c">22,487</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a15-12637.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">22,224</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">20,570</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">20,349</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_13-11103.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">18,844</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_k70_ultra-13215.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">18,535</td><td></td></tr></tbody>

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
  </tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">1,135</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_poco_f5-12258.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">735</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/sony_xperia_1_v-12263.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">639</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/google_pixel_8_pro-12545.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">616</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">612</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_12-12725.php"><nobr>{{ $deviceName }}</n\obr></a></th><td headers="th3c">578</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro+-12572.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">560</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">543</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_13_ultra-12236.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">521</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/asus_zenfone_10-12380.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">518</td><td></td></tr></tbody>

  </table>
  </div>

  <link rel="stylesheet" href="./Mobile phones news - GSMArena.com_files/arenaev-content.css">

  <div class="module module-arenaev">
  	<h4 class="section-heading">ELECTRIC VEHICLES</h4>
  	<div class="arenaev-content">
  <a href="https://www.arenaev.com/zeekr_reveals_official_photos_of_the_mix_its_first_electric_mpv-news-3757.php" target="_blank">
  						<span class="image-container"><img class="image" src="./Mobile phones news - GSMArena.com_files/arenaev_001.jpg" alt="Zeekr reveals another set of official photos of the MIX, changes inbound">
  						<span class="watermark"><img src="./Mobile phones news - GSMArena.com_files/arenaevcolor-neg.svg"></span></span><span class="title">Zeekr reveals another set of official photos of the MIX, changes inbound</span>
  					</a><a href="https://www.arenaev.com/teslas_q2_2024_a_paradox_of_growth_and_decline_in_the_ev_market-news-3756.php" target="_blank"><span class="title">Tesla's Q2 2024: a paradox of growth and decline in the EV market</span></a><a href="https://www.arenaev.com/roadlegal_1548_hp_xiaomi_su7_ultra_is_coming_in_2025-news-3755.php" target="_blank"><span class="title">Road-legal 1,548 HP Xiaomi SU7 Ultra is coming in 2025</span></a>	</div>

  </div>
  <div class="adv banner-mpu sticky-mpu">
  <span class="ad-label">ADVERTISEMENT</span>
  <!-- /8095840/.2_A.34911.7_gsmarena.com_tier1 -->
  <div id="div-gpt-ad-300x600btfgsmarenadesktop-0" style="height:600px; width:300px;"></div>
  </div>

  </aside>

  </div><!-- id body -->
  </div><!-- id outer -->

  <script type="text/javascript" src="./Mobile phones news - GSMArena.com_files/infinite-scroll.js.تنزيل"></script>



  <div id="footer">
   <div class="footer-logo">
       <img src="./Mobile phones news - GSMArena.com_files/logo-gsmarena-com.png" alt="">
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


  <script type="text/javascript" src="./Mobile phones news - GSMArena.com_files/autocomplete.js.تنزيل"></script>
  <script type="text/javascript" language="javascript">
  AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
  $gsm.addEventListener(document, "DOMContentLoaded", function()
  {
      new Autocomplete( "topsearch-text", "topsearch", true );
  }
  )
  </script>














  <div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">News</span><div class="logo" draggable="false" style="display: none;"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image" style="background-size: contain, contain;"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/news.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/news.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad" style="display: none;"></div><div class="thumb-gallery" style="display: none;"><a class="go-up" href="https://www.gsmarena.com/news.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/news.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><div id="extension-lfbpl"></div><!----><div id="wp-extension" data-id="dpadflhmiohjfhhaehelneimpllfbpcg"></div>

</template>
