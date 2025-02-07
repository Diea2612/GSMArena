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
<script type="text/javascript" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/misc.js.تنزيل"></script><iframe name="__tcfapiLocator" style="display: none;" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/saved_resource(1).html"></iframe>



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

<object type="image/svg+xml" data="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/logo.svg"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
  <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">

  <span id="quick-search-button">
    <input type="submit" value="Go">
    <i class="head-icon icomoon-liga icon-search-left"></i>
  </span>


<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/#">More news results</a></li></ul></div></div><div class="search-buttons" style="display: none;"><a class="go" href="https://www.gsmarena.com/#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


<a href="https://www.gsmarena.com/#" onclick="return false;" class="login-icon" id="login-active">
  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
</a>

<span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MA%3D%3D">
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


<div id="body">

<div class="main float-right has-trending">

<div class="review-column-index" id="review-sample" style="position:relative;">
<div class="review-column-list">
<article class="review-column-list-item review-column-list-item-main ">
<a href="https://www.gsmarena.com/vivo_x_fold3_pro-review-2729.php" class="block-link">
<header>
  <!--  need some changes -->

  <h3>vivo X Fold3 Pro review</h3>
</header>
<img class="review-list-item-image" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_001.jpg" alt="vivo X Fold3 Pro review">
</a>
<footer class="meta-line has-border">
<time class="meta-item-time float-left">
<i class="head-icon icon-clock2"></i>12 hours ago</time>
<a class="meta-item-comments float-right" href="https://www.gsmarena.com/reviewcomm-2729.php"><i class="head-icon icon-comments"></i>16</a>
</footer>

</article>

<div class="review-column-list-item review-column-list-item-secondary">
<article>

  <a href="https://www.gsmarena.com/samsung_galaxy_z_flip6-review-2727.php" class="block-link">
  <header>

    <h3>Samsung Galaxy Z Flip6 review</h3>
  </header>
  <img class="review-list-item-image" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_001(1).jpg" alt="Samsung Galaxy Z Flip6 review">
  </a>
  <footer class="meta-line has-border clearfix">
  <a class="meta-item-comments float-right" href="https://www.gsmarena.com/reviewcomm-2727.php"><i class="head-icon icon-comments"></i>50</a>
  </footer>
</article>
<article>

  <a href="https://www.gsmarena.com/xiaomi_mix_flip_mix_fold_4_hands_on-review-2728.php" class="block-link">
  <header>

    <h3>Xiaomi Mix Flip and Mix Fold 4 hands-on review</h3>
  </header>
  <img class="review-list-item-image" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_004.jpg" alt="Xiaomi Mix Flip and Mix Fold 4 hands-on review">
  </a>
  <footer class="meta-line">
  <a class="meta-item-comments float-right" href="https://www.gsmarena.com/reviewcomm-2728.php"><i class="head-icon icon-comments"></i>35</a>
  </footer>
</article>
<!-- MORE REVIEWS TOGGLE -->

<div class="more-reviews-list-container">

<h4>More reviews
<a href="https://www.gsmarena.com/reviews.php3" class="right">View all</a>
</h4>

<!-- Maybe need some changes -->
<ul class="more-reviews-list">

    <li><a href="https://www.gsmarena.com/zte_nubia_red_magic_9s_pro-review-2726.php" class="block-link">nubia Red Magic 9S Pro review</a></li>

    <li><a href="https://www.gsmarena.com/samsung_galaxy_z_fold6-review-2725.php" class="block-link">Samsung Galaxy Z Fold6 review</a></li>

    <li><a href="https://www.gsmarena.com/oneplus_nord_4-review-2724.php" class="block-link">OnePlus Nord 4 review</a></li>

    <li><a href="https://www.gsmarena.com/moto_g_stylus_5g_2024-review-2723.php" class="block-link">Moto G Stylus 5G (2024) review</a></li>

    <li><a href="https://www.gsmarena.com/samsung_galaxy_zfold6_zflip6_hands_on-review-2722.php" class="block-link">Samsung Galaxy Z Fold6 and Z Flip6 hands-on review</a></li>

    <li><a href="https://www.gsmarena.com/nothing_cmf_phone_1-review-2719.php" class="block-link">CMF Phone 1 by Nothing review</a></li>
</ul>
</div>

<a href="https://www.gsmarena.com/#" class="more-reviews-list-toggle block-link">▲</a>


</div>

</div>


</div>







<div class="feat">
<section class="feat-container flex-container">

    <div class="flex-column flex-size-2">
    <article class="feat-item flex-item"><div class="meta-line"><span class="meta-item-time"><i class="head-icon icon-clock2"></i>21 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63811.php"><i class="head-icon icon-comments"></i>21</a></div><header class="feat-item-header"><h3 class="feat-item-title">nubia launches new Z60S Pro, Z60 Ultra tags along with more powerful chipset</h3></header><span class="feat-item-image" style="background-image:url(&#39;https://fdn.gsmarena.com/imgroot/news/24/07/nubia-z60-ultra-leading-version-z60s-pro-ofic/-728x314/gsmarena_000.jpg&#39;);"></span><a href="https://www.gsmarena.com/nubia_launches_z60s_pro_z60_ultra_tags_along_with_more_powerful_chipset-news-63811.php" class="feat-item-link link-faux"></a></article>		</div>
  <div class="flex-column">
    <article class="feat-item flex-item"><div class="meta-line"><span class="meta-item-time"><i class="head-icon icon-clock2"></i>22 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63805.php"><i class="head-icon icon-comments"></i>36</a></div><header class="feat-item-header"><h3 class="feat-item-title">Samsung Galaxy Z Fold Slim's cover screen to have the same aspect ratio as the Galaxy S24 Ultra</h3></header><span class="feat-item-image" style="background-image:url(&#39;https://fdn.gsmarena.com/imgroot/news/24/07/samsung-galaxy-z-fold-slim-rumor/-344x215/gsmarena_000.jpg&#39;);"></span><a href="https://www.gsmarena.com/samsung_galaxy_z_fold_slims_cover_screen_to_have_the_same_aspect_ratio_as_the_galaxy_s24_ultra-news-63805.php" class="feat-item-link link-faux"></a></article>			<article class="feat-item flex-item"><div class="meta-line"><span class="meta-item-time"><i class="head-icon icon-clock2"></i>22 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63806.php"><i class="head-icon icon-comments"></i>37</a></div><header class="feat-item-header"><h3 class="feat-item-title">New Google Pixel 9 and Pixel 9 Pro XL renders leak</h3></header><span class="feat-item-image" style="background-image:url(&#39;https://fdn.gsmarena.com/imgroot/news/24/07/google-pixel-9-pixel-9-pro-xl-new-leaked-renders/-344x215/gsmarena_000.jpg&#39;);"></span><a href="https://www.gsmarena.com/new_google_pixel_9_and_pixel_9_pro_xl_renders_leak-news-63806.php" class="feat-item-link link-faux"></a></article>		</div>

</section>


</div>
<a class="buyers-guide-notification" href="https://www.gsmarena.com/smartphone_buyers_guide-review-2036.php">
<h3>THE PHONE CHEATSHEET</h3>
<span>The very best smartphones - tried and tested by us</span>
<i class="notification"></i>
</a>


<div class="news-column-index">






<div class="floating-title">


  <!--  need some changes -->
<div class="news-item">
<a href="https://www.gsmarena.com/xiaomi_mix_flip_is_coming_to_europe_will_cost_eur_1300-news-63824.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_001(2).jpg" alt="Xiaomi Mix Flip is coming to Europe, will cost EUR 1,300">
  </div>
  <h3>Xiaomi Mix Flip is coming to Europe, will cost EUR 1,300</h3>
  <p>The information comes from a regional sales representative.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>2 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63824.php"><i class="head-icon icon-comments"></i>17</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/spotify_confirms_18_deluxe_plan_is_coming-news-63823.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000.jpg" alt="Spotify confirms $18 Deluxe plan is coming">
  </div>
  <h3>Spotify confirms $18 Deluxe plan is coming</h3>
  <p>There's no release timeline, however.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>4 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63823.php"><i class="head-icon icon-comments"></i>25</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/motorola_teases_worlds_slimmest_military_grade_phone-news-63822.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(1).jpg" alt="Motorola teases " world's="" slimmest="" military="" grade="" phone""="">
  </div>
  <h3>Motorola teases "world's slimmest military grade phone"</h3>
  <p>It's launching soon in India.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>7 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63822.php"><i class="head-icon icon-comments"></i>25</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/honor_x60i_leaks_in_all_colors-news-63821.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(2).jpg" alt="Honor X60i leaks in all colors">
  </div>
  <h3>Honor X60i leaks in all colors</h3>
  <p>It's most likely getting official this week.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>10 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63821.php"><i class="head-icon icon-comments"></i>7</a>
</div>
</div>

<div class="news-item arenaev-content">
<a href="https://www.arenaev.com/roadlegal_1548_hp_xiaomi_su7_ultra_is_coming_in_2025-news-3755.php" target="_blank">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/arenaev_001.jpg" alt="roadlegal_1548_hp_xiaomi_su7_ultra_is_coming_in_2025-news-3755.php">
  </div>
  <h3>Road-legal 1,548 HP Xiaomi SU7 Ultra is coming in 2025</h3>
  <p>Xiaomi's SU7 Ultra is set to launch in 2025. It promises to deliver an exhilarating driving experience with its powerful triple motor configuration and impressive acceleration.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>10 hours ago</span>
  <a class="meta-item-comments" href="https://www.arenaev.com/newscomm-3755.php" target="_blank"><i class="head-icon icon-comments"></i>2</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/samsung_galaxy_tab_s10_and_s10_ultra_production_starts_in_august-news-63816.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(3).jpg" alt="Samsung Galaxy Tab S10+ and S10 Ultra production planned to start in August">
  </div>
  <h3>Samsung Galaxy Tab S10+ and S10 Ultra production planned to start in August</h3>
  <p>That would make them launch around October, as previously rumored.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>13 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63816.php"><i class="head-icon icon-comments"></i>9</a>
</div>
</div>

<div style="margin-left: -10px; margin-top: 30px; height: 145px;">
<span class="ad-c-label">ADVERTISEMENT</span>
<!-- TAGNAME: 728x90 - In Feed - Top -->
<!-- /8095840/.2_A.38135.3_gsmarena.com_tier1 -->
<div id="div-gpt-ad-gsmarenacom38135"></div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/first_foldable_iphone_to_be_flipstyle_landing_in_2026-news-63820.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(4).jpg" alt="First foldable iPhone to be flip-style, landing in 2026">
  </div>
  <h3>First foldable iPhone to be flip-style, landing in 2026</h3>
  <p>This could be Apple's first foldable device.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>14 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63820.php"><i class="head-icon icon-comments"></i>44</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/poco_f6_deadpool___wolverine_edition_leaks_ahead_of_july_26_unveiling-news-63818.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(5).jpg" alt="Poco F6 Deadpool &amp; Wolverine edition leaks ahead of July 26 unveiling">
  </div>
  <h3>Poco F6 Deadpool &amp; Wolverine edition leaks ahead of July 26 unveiling</h3>
  <p>That coincides with the movie's release.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>15 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63818.php"><i class="head-icon icon-comments"></i>24</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/amazon_prime_video_gets_new_ui_that_helps_you_find_whats_included_with_your_prime_subscription-news-63819.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(6).jpg" alt="Amazon Prime Video gets new UI that helps you find what&#39;s included with your Prime subscription">
  </div>
  <h3>Amazon Prime Video gets new UI that helps you find what's included with your Prime subscription</h3>
  <p>Previously, content from other streaming services was mixed in and it wasn't obvious that you can't watch it without an extra payment.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>16 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63819.php"><i class="head-icon icon-comments"></i>6</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/samsung_galaxy_z_flip6_teardown_video_shows_off_the_larger_batteries_and_the_new_vapor_chamber-news-63815.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(7).jpg" alt="First Galaxy Z Flip6 teardown videos show off the larger batteries and the new vapor chamber">
  </div>
  <h3>First Galaxy Z Flip6 teardown videos show off the larger batteries and the new vapor chamber</h3>
  <p>Despite all these changes - and the addition of particle protection to the water resistance - the new model is easier to repair than the old one.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>17 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63815.php"><i class="head-icon icon-comments"></i>9</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/hmd_crest_launches_in_india_on_july_25_to_bring_a_new_era_of_portraits-news-63817.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(8).jpg" alt="HMD Crest series launches in India on July 25 to bring " a="" new="" era="" of="" portraits""="">
  </div>
  <h3>HMD Crest series launches in India on July 25 to bring "a new era of portraits"</h3>
  <p>This will be a line of smartphones, not just one device.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>18 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63817.php"><i class="head-icon icon-comments"></i>16</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/samsung_starts_distributing_galaxy_z_flip6_olympic_edition_to_athletes-news-63812.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_001(3).jpg" alt="Samsung starts distributing Galaxy Z Flip6 Olympic Edition to athletes">
  </div>
  <h3>Samsung starts distributing Galaxy Z Flip6 Olympic Edition to athletes</h3>
  <p>Nearly 17,000 units will be gifted to athletes in Paris in 2024.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>19 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63812.php"><i class="head-icon icon-comments"></i>22</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/india_aims_to_lower_smartphone_prices_by_15_with_a_new_tax_reduction-news-63814.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_011.jpg" alt="India aims to lower smartphone prices by 15% with a new tax reduction">
  </div>
  <h3>India aims to lower smartphone prices by 15% with a new tax reduction</h3>
  <p>The reduction only applies to parts and not completely built units (CBUs).</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>20 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63814.php"><i class="head-icon icon-comments"></i>26</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/samsung_offers_a_look_inside_the_galaxy_z_fold6_galaxy_z_flip6_and_the_galaxy_watch_ultra-news-63813.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(9).jpg" alt="Have a look inside the Galaxy Z Fold6, Galaxy Z Flip6 and the Galaxy Watch Ultra">
  </div>
  <h3>Have a look inside the Galaxy Z Fold6, Galaxy Z Flip6 and the Galaxy Watch Ultra</h3>
  <p>The company has published images and details of the various components of each device with brief explanations of what they do and how they were improved.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>20 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63813.php"><i class="head-icon icon-comments"></i>2</a>
</div>
</div>

<div class="post">
<article class="feat-item flex-item">
  <div class="meta-line">
    <span class="meta-item-time"><i class="head-icon icon-clock2"></i>21 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63811.php"><i class="head-icon icon-comments"></i>21</a>		</div>
  <header class="feat-item-header">
    <h3 class="feat-item-title">nubia launches new Z60S Pro, Z60 Ultra tags along with more powerful chipset</h3><br>
  </header>
  <span class="feat-item-image" style="background-image:url(&#39;https://fdn.gsmarena.com/imgroot/news/24/07/nubia-z60-ultra-leading-version-z60s-pro-ofic/-728x314/gsmarena_000.jpg&#39;);"></span>
  <a href="https://www.gsmarena.com/nubia_launches_z60s_pro_z60_ultra_tags_along_with_more_powerful_chipset-news-63811.php" class="feat-item-link link-faux"></a>
</article></div>

<div class="news-item">
<a href="https://www.gsmarena.com/huawei_mate_70_launch_reportedly_delayed-news-63810.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_00.jpg" alt="Huawei Mate 70 launch reportedly delayed">
  </div>
  <h3>Huawei Mate 70 launch reportedly delayed</h3>
  <p>Huawei is looking to push its Mate 70 launch into mid-to-late Q4 this year.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 hours ago</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63810.php"><i class="head-icon icon-comments"></i>25</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/google_is_working_on_a_tv_streamer_settop_box-news-63809.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_001(4).jpg" alt="Google is working on a TV Streamer set-top box">
  </div>
  <h3>Google is working on a TV Streamer set-top box</h3>
  <p>It should replace the Chromecast dongle.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63809.php"><i class="head-icon icon-comments"></i>16</a>
</div>
</div>


<div style="margin-bottom: 10px;">


<ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fr-1q+80-2x-fz" data-ad-client="ca-pub-9508420272844734" data-ad-slot="8228585564"></ins>
<script>
   (adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>

<div class="news-item">
<a href="https://www.gsmarena.com/vivo_v40_pro_chipset_revealed_on_geekbench-news-63808.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_001(5).jpg" alt="vivo V40 Pro chipset revealed on Geekbench">
  </div>
  <h3>vivo V40 Pro chipset revealed on Geekbench</h3>
  <p>The phone will come with the Dimensity 9200+ platform by Mediatek.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>23 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63808.php"><i class="head-icon icon-comments"></i>18</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/samsung_galaxy_z_fold_slims_cover_screen_to_have_the_same_aspect_ratio_as_the_galaxy_s24_ultra-news-63805.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(10).jpg" alt="Samsung Galaxy Z Fold Slim&#39;s cover screen to have the same aspect ratio as the Galaxy S24 Ultra">
  </div>
  <h3>Samsung Galaxy Z Fold Slim's cover screen to have the same aspect ratio as the Galaxy S24 Ultra</h3>
  <p>The next Samsung foldable will be even more expensive, but also thinner and lighter than the Fold6.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>22 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63805.php"><i class="head-icon icon-comments"></i>36</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/new_google_pixel_9_and_pixel_9_pro_xl_renders_leak-news-63806.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(11).jpg" alt="New Google Pixel 9 and Pixel 9 Pro XL renders leak">
  </div>
  <h3>New Google Pixel 9 and Pixel 9 Pro XL renders leak</h3>
  <p>The entire Pixel 9 lineup is becoming official on August 13.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>22 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63806.php"><i class="head-icon icon-comments"></i>37</a>
</div>
</div>

<div class="news-item">
<a href="https://www.gsmarena.com/samsung_is_working_on_ai_phones_which_could_be_radically_different_from_current_phones-news-63807.php">
  <div class="news-item-media-wrap left">
    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/gsmarena_000(12).jpg" alt="Samsung is working on AI phones, which could be " radically="" different"="" from="" current="" phones"="">
  </div>
  <h3>Samsung is working on AI phones, which could be "radically different" from current phones</h3>
  <p>Samsung MX lead TM Roh said that most of the R&amp;D resources spend on mobile development are going towards AI phones.</p>
</a>
<div class="meta-line">
  <span class="meta-item-time"><i class="head-icon icon-clock2"></i>22 Jul 2024</span><a class="meta-item-comments" href="https://www.gsmarena.com/newscomm-63807.php"><i class="head-icon icon-comments"></i>53</a>
</div>
</div>



<div class="review-nav-v2 simple with-header-footer-buttons"><a href="https://www.gsmarena.com/#" class="scroll-to-top">To top</a><a href="https://www.gsmarena.com/#" class="show-footer">To footer</a></div>


</div>

<br class="clear">

<div class="more-articles"><a class="red-button" href="https://www.gsmarena.com/news.php3">More articles »</a></div></div>




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
<div class="adv banner-mpu" adonis-marker="" data-pan-sizes="[[300,250]]">
<span class="ad-label">ADVERTISEMENT</span>
<!-- /8095840/.2_A.34909.4_gsmarena.com_tier1 -->
<div id="div-gpt-ad-300x250atfgsmarenadesktop-0" style="height:250px; width:300px;"></div>
</div>


<div class="module module-phones module-latest">
<h4 class="section-heading">Latest devices</h4>
<div style="overflow:hidden;overflow-y:auto;max-height: 390px;">
  <a href="https://www.gsmarena.com/zte_nubia_z60s_pro-13226.php" class="module-phones-link">
    <!-- <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/zte-nubia-z60s-pro.jpg"> // facing problem in changing to make it taking the pictures from the database -->

    <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/zte-nubia-z60s-pro.jpg"><br>{{ $deviceName }} </a><a href="https://www.gsmarena.com/zte_nubia_z60_ultra_leading-13198.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/zte-nubia-z60-ultra-leading-version.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/motorola_edge_50_neo-13224.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/motorola-edge-50-neo-11.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/xiaomi_redmi_pad_se_4g-13225.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/xiaomi-redmi-pad-se-4g-1.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/google_pixel_9-13219.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/google-pixel-9-11.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/google_pixel_9_pro_xl-13217.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/google-pixel-9-pro-xl-11.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/xiaomi_redmi_k70_ultra-13215.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/xiaomi-redmi-k70-ultra-.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/xiaomi_mix_flip-13221.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/xiaomi-mix-flip.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/xiaomi_mix_fold_4-13222.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/xiaomi-mix-fold4.jpg"><br>{{ $deviceName }}</a></div>
</div>

<div class="module module-phones module-latest">
<h4 class="section-heading">In stores now</h4>
<div style="overflow:hidden;overflow-y:auto;max-height: 390px;"><a href="https://www.gsmarena.com/vivo_iqoo_z9_lite-13194.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/vivo-iqoo-z9-lite.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/hmd_skyline-13153.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/hmd-skyline.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/motorola_razr+_2024-13213.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/motorola-razr-plus-2024.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/motorola_razr_2024-13214.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/motorola-razr-50.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/zte_nubia_red_magic_9s_pro-13191.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/zte-nubia-red-magic-9s-pro.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/nothing_cmf_phone_1-13122.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/nothing-cmf-phone-1-ofic.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/xiaomi_redmi_13_5g-13157.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/xiaomi-redmi-13-5g.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/vivo_v40-13121.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/vivo-v40.jpg"><br>{{ $deviceName }}</a><a href="https://www.gsmarena.com/oneplus_nord_ce4_lite-13166.php" class="module-phones-link"><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/oneplus-nord-ce4-lite-intl.jpg"><br>{{ $deviceName }}</a></div>
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
</tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a55-12824.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c"><!-- Daily hits --></td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">26,365</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_11-9848.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">25,683</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_nord_4-13200.php"><nobr>OnePlus Nord 4</nobr></a></th><td headers="th3c">25,622</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">21,543</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a15-12637.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">21,243</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">19,661</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">19,497</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_13-11103.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">18,057</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_k70_ultra-13215.php"><nobr>{{ $deviceName }}/nobr></a></th><td headers="th3c">17,975</td><td></td></tr></tbody>

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
</tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>S{{ $deviceName }}</nobr></a></th><td headers="th3c">1,135</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_poco_f5-12258.php"><nobr>X{{ $deviceName }}</nobr></a></th><td headers="th3c">735</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/sony_xperia_1_v-12263.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">639</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/google_pixel_8_pro-12545.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">615</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">612</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_12-12725.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">578</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro+-12572.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">560</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">543</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_13_ultra-12236.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">521</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/asus_zenfone_10-12380.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">518</td><td></td></tr></tbody>

</table>
</div>


<style>
.module-fit.purple {
  width: 100%;
  table-layout: fixed;
}
.module-fit.purple td {
  text-align: left;
}

.module-rankings .purple tbody tr:nth-child(odd) {
  background-color: #fff2ee;
}
</style>





<div class="module module-rankings s3">
<h4 class="section-heading">Popular comparisons</h4>
<table class="module-fit purple" cellspacing="0">
<tbody>
<tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12024&amp;idPhone2=12771"><!-- POPULAR COMPARISONS --></a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12705&amp;idPhone2=12824">Samsung Galaxy A35 vs. Galaxy A55</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12548&amp;idPhone2=12771">Apple iPhone 15 Pro Max vs. Galaxy S24 Ultra</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12572&amp;idPhone2=12581">Xiaomi Redmi Note 13 Pro+ vs. Redmi Note 13 Pro</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12070&amp;idPhone2=12824">Samsung Galaxy A54 vs. Galaxy A55</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12082&amp;idPhone2=12773">Samsung Galaxy S23 vs. Galaxy S24</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12520&amp;idPhone2=12824">Samsung Galaxy S23 FE vs. Galaxy A55</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12082&amp;idPhone2=12520">Samsung Galaxy S23 vs. Galaxy S23 FE</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=11103&amp;idPhone2=11861">Apple iPhone 13 vs. Apple iPhone 14</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=11251&amp;idPhone2=12024">Samsung Galaxy S22 Ultra 5G vs. Galaxy S23 Ultra</a></th></tr><tr><th><a href="https://www.gsmarena.com/compare.php3?idPhone1=12717&amp;idPhone2=12723">Xiaomi Poco X6 Pro vs. Xiaomi Poco X6</a></th></tr></tbody>

</table>
</div>



<div class="module module-news-l">
<h4 class="section-heading"><a href="https://www.arenaev.com/" target="_blank">Electric vehicles</a></h4>
<ul>
<li><a href="https://www.arenaev.com/teslas_q2_2024_a_paradox_of_growth_and_decline_in_the_ev_market-news-3756.php" target="_blank">
            <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/arenaev_001(1).jpg" alt="Tesla&#39;s Q2 2024: a paradox of growth and decline in the EV market">
            <span><!-- Electric vehicles --></span>
            </a></li><li><a href="https://www.arenaev.com/roadlegal_1548_hp_xiaomi_su7_ultra_is_coming_in_2025-news-3755.php" target="_blank">
            <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/arenaev_001.jpg" alt="Road-legal 1,548 HP Xiaomi SU7 Ultra is coming in 2025">
            <span>Road-legal 1,548 HP Xiaomi SU7 Ultra is coming in 2025</span>
            </a></li><li><a href="https://www.arenaev.com/tesla_cybertruck_gets_ready_for_canada_and_mysteriously_appears_in_europe-news-3754.php" target="_blank">
            <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/arenaev_001(2).jpg" alt="Tesla Cybertruck gets ready for Canada and mysteriously appears in Europe">
            <span>Tesla Cybertruck gets ready for Canada and mysteriously appears in Europe</span>
            </a></li><li><a href="https://www.arenaev.com/different_types_of_electric_motors_used_in_evs-news-214.php" target="_blank">
            <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/arenaev_000.jpg" alt="Different types of electric motors used in EVs">
            <span>Different types of electric motors used in EVs</span>
            </a></li></ul>
</div>
<div class="adv banner-mpu sticky-mpu">
<span class="ad-label">ADVERTISEMENT</span>
<!-- /8095840/.2_A.34911.7_gsmarena.com_tier1 -->
<div id="div-gpt-ad-300x600btfgsmarenadesktop-0" style="height:600px; width:300px;"></div>
</div>

</aside>

</div><!-- id body -->
</div><!-- id outer -->




<div id="footer">
<div class="footer-logo">
   <img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/logo-gsmarena-com.png" alt="">
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


<script type="text/javascript" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/autocomplete.js.تنزيل"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function()
{
  new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>














<script type="text/javascript" src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/infinite-scroll.js.تنزيل"></script>

<div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false"></span><div class="logo" draggable="false" style="display: none;"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image" style="background-size: contain, contain;"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/#prev"></a><a class="go-right" href="https://www.gsmarena.com/#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad" style="display: none;"></div><div class="thumb-gallery" style="display: none;"><a class="go-up" href="https://www.gsmarena.com/#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><img src="./GSMArena.com - mobile phone reviews, news, specifications and more..._files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;"><div id="extension-lfbpl"></div>

</template>
