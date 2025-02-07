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



    <iframe name="__tcfapiLocator" style="display: none;" src="./Daily deals_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Daily deals_files/saved_resource(1).html"></iframe>   <!-- <script type="text/javascript" src="./Daily deals_files/misc.js.تنزيل"></script> -->



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

      <object type="image/svg+xml" data="./Daily deals_files/logo.svg"><img src="./Daily deals_files/logo-fallback.gif" alt="GSMArena.com"></object>
      <span>GSMArena.com</span></a>
      </div>



      <div id="nav" role="main">
      <form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
          <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">

          <span id="quick-search-button">
            <input type="submit" value="Go">
            <i class="head-icon icomoon-liga icon-search-left"></i>
          </span>


      <div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/deals.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/deals.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/deals.php3#">More news results</a></li></ul></div></div><div class="search-buttons"><a class="go" href="https://www.gsmarena.com/deals.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


      	<a href="https://www.gsmarena.com/deals.php3#" onclick="return false;" class="login-icon" id="login-active">
      	  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
      	</a>

      	<span class="tooltip" id="login-popup2">
      <form action="https://www.gsmarena.com/login.php3" method="post">
      <input type="Hidden" name="sSource" value="MHt6fnNsMW93byw%3D">
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
          background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/deals-hd-1.jpg');
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
              <h1 class="article-info-name">Daily deals</h1>
          </div>
      </div>
      <div class="article-info-line">
          <div class="blur bottom"></div>
          </div>
      </div>
      </div>
      </div>



      <div>

      <form action="https://www.gsmarena.com/deals.php3" method="post" class="geocontrols">
          <label style="display: none;">Markets:</label>
          <select multiple="" data-none-selected="All" style="display: none;">

      <option value="1">United States</option> <option value="2">United Kingdom</option> <option value="5">Europe</option> <option value="4">International</option> <option value="6">Canada</option>
          </select><div class="dropdown"><label class="label" for="sGeos-opentoggle">Markets:<span class="selectedlabels">All</span></label><input type="checkbox" class="opentoggle" id="sGeos-opentoggle"><div class="options"><label><input type="checkbox" value="1"><span>United States</span></label><label><input type="checkbox" value="2"><span>United Kingdom</span></label><label><input type="checkbox" value="5"><span>Europe</span></label><label><input type="checkbox" value="4"><span>International</span></label><label><input type="checkbox" value="6"><span>Canada</span></label></div><input type="hidden" name="sGeos" value=""></div>
          <input type="submit" value="Show" class="button">
      </form>



          <div class="st-text"><p>We constantly monitor phone prices and these are some of the best discounts we've spotted. The listed discounts are estimated based on the average price in the last 30 days (or less for new listings). We can't guarantee prices or availability - please check with the seller for more details. We may earn a commission from the links below.</p></div>
      <hr>

      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0CFYQW4RW?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/317MQsxAHVL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Samsung Galaxy Tab S9 FE</h3>
                      <a class="button" href="https://www.gsmarena.com/samsung_galaxy_tab_s9_fe-12517.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0CFYQW4RW?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Samsung Galaxy Tab S9 FE Lavender 6GB RAM 128GB Storage Android Tablet, 10.9" 90 Hz Screen, IP68 Rating, 45W Fast Charging battery (CAD version and Warranty)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0CFYQW4RW?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 6GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0CFYQW4RW?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0CFYQW4RW?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 399.98</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0CFYQW4RW?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">20.9</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 546.83</b>
                      <span>Min</span>
                      <b>C$ 437.47</b>
                      <span>Max</span>
                      <b>C$ 599.99</b>
                      <span>30 Day Avg</span>
                      <b>C$ 525.67</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-10-21,56500;2023-10-22,59603;2023-10-27,59601;2023-10-28,59600;2023-10-31,58873;2023-11-02,58947;2023-11-03,59101;2023-11-06,58947;2023-11-09,58948;2023-11-10,59102;2023-11-11,59103;2023-11-12,59026;2023-11-13,58949;2023-11-16,59103;2023-11-18,59999;2023-11-19,59026;2023-11-19,59999;2023-11-24,59998;2023-12-13,49998;2023-12-17,49999;2023-12-25,59900;2023-12-29,49998;2024-01-04,49999;2024-01-05,59900;2024-01-06,59999;2024-01-18,59998;2024-01-30,59900;2024-02-04,50918;2024-02-05,59900;2024-02-08,59998;2024-02-19,59999;2024-02-19,59998;2024-02-28,47998;2024-03-02,47999;2024-03-03,47998;2024-04-01,47999;2024-04-01,47998;2024-04-02,47999;2024-04-02,47998;2024-04-05,59998;2024-04-06,47998;2024-04-09,59999;2024-04-12,54999;2024-04-22,59999;2024-05-01,44999;2024-05-17,59999;2024-05-27,59900;2024-05-31,59998;2024-06-05,44998;2024-07-05,44999;2024-07-06,59999;2024-07-07,59998;2024-07-13,59999;2024-07-14,59998;2024-07-16,59999;2024-07-17,59900;2024-07-18,43747;2024-07-19,54683;2024-07-24,39998;" currency="" symbol="C$" average="52567">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0CFYT4LJM?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31HMGuRI9cL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Samsung Galaxy Tab S9 FE</h3>
                      <a class="button" href="https://www.gsmarena.com/samsung_galaxy_tab_s9_fe-12517.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0CFYT4LJM?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Samsung Galaxy Tab S9 FE Silver 6GB RAM 128GB Storage Android Tablet, 10.9" 90 Hz Screen, IP68 Rating, 45W Fast Charging battery</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0CFYT4LJM?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 6GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0CFYT4LJM?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0CFYT4LJM?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 399.98</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0CFYT4LJM?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 437.98</b>
                      <span>Min</span>
                      <b>C$ 422.99</b>
                      <span>Max</span>
                      <b>C$ 599.99</b>
                      <span>30 Day Avg</span>
                      <b>C$ 460.14</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-10-21,56500;2023-10-23,59603;2023-10-27,59600;2023-10-30,58950;2023-11-03,59101;2023-11-13,58949;2023-11-17,59103;2023-11-18,59026;2023-11-20,58949;2023-11-23,59102;2023-11-24,59103;2023-11-26,59024;2023-11-27,58947;2023-11-28,59999;2023-12-13,49999;2023-12-27,56500;2023-12-28,49999;2023-12-29,56500;2023-12-31,49999;2024-01-03,56500;2024-01-04,59999;2024-01-20,59998;2024-01-28,59023;2024-01-28,58946;2024-01-31,58868;2024-02-01,59998;2024-02-28,47998;2024-04-05,59998;2024-04-06,47998;2024-04-17,54998;2024-04-22,59998;2024-05-01,44999;2024-05-03,44998;2024-05-17,59998;2024-06-05,44998;2024-07-05,44798;2024-07-09,44398;2024-07-13,44099;2024-07-14,59998;2024-07-17,42599;2024-07-17,42299;2024-07-18,43299;2024-07-19,43747;2024-07-19,43798;2024-07-24,39998;" currency="" symbol="C$" average="46014">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0CFYSSLXH?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31ZW4f9nkdL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Samsung Galaxy Tab S9 FE</h3>
                      <a class="button" href="https://www.gsmarena.com/samsung_galaxy_tab_s9_fe-12517.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0CFYSSLXH?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Samsung Galaxy Tab S9 FE Mint 6GB RAM 128GB Storage Android Tablet, 10.9" 90 Hz Screen, IP68 Rating, 45W Fast Charging battery (CAD version and Warranty)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0CFYSSLXH?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 6GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0CFYSSLXH?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0CFYSSLXH?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 399.99</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0CFYSSLXH?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">16.2</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 599.99</b>
                      <span>Min</span>
                      <b>C$ 441.98</b>
                      <span>Max</span>
                      <b>C$ 599.99</b>
                      <span>30 Day Avg</span>
                      <b>C$ 497.21</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-10-21,56500;2023-10-22,59603;2023-10-27,56500;2023-10-29,59600;2023-11-04,59999;2023-11-05,59024;2023-11-06,58947;2023-11-09,58948;2023-11-12,58949;2023-11-17,59103;2023-11-18,59026;2023-11-19,59998;2023-11-21,59026;2023-11-22,59997;2023-11-23,59026;2023-11-24,59996;2023-11-25,59026;2023-12-13,49998;2023-12-26,49999;2023-12-28,49998;2023-12-30,49999;2024-01-01,49998;2024-01-09,59999;2024-02-03,59026;2024-02-28,47998;2024-03-01,47999;2024-03-02,47998;2024-04-05,59026;2024-04-06,47998;2024-04-16,54999;2024-04-17,54998;2024-04-22,54999;2024-04-22,59998;2024-05-01,44999;2024-05-03,44998;2024-05-17,59998;2024-06-05,44998;2024-06-26,44797;2024-07-05,44398;2024-07-09,44198;2024-07-11,59999;2024-07-12,44198;2024-07-15,59999;2024-07-17,59900;2024-07-18,59999;2024-07-24,39999;" currency="" symbol="C$" average="49721">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D2D9DVKS?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/411yaER2ibL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Xiaomi Poco M6 4G</h3>
                      <a class="button" href="https://www.gsmarena.com/xiaomi_poco_m6_4g-13131.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D2D9DVKS?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">POCO M6 Smartphone, 6+128GB Handy ohne Vertrag, 90Hz 6,79'' FHD+Display, 108MP Kamera, 5030mAh, 33W FastCharge, Dual-SIM, Silver</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D2D9DVKS?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 6GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D2D9DVKS?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D2D9DVKS?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 139.90</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D2D9DVKS?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">14.5</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 169.90</b>
                      <span>Min</span>
                      <b>€ 149.90</b>
                      <span>Max</span>
                      <b>€ 169.90</b>
                      <span>30 Day Avg</span>
                      <b>€ 164.56</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-06-18,16990;2024-07-01,14990;2024-07-08,16990;2024-07-16,14990;2024-07-17,16990;2024-07-24,13990;" currency="" symbol="€" average="16456">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D2DC1Y3N?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/411yaER2ibL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Xiaomi Poco M6 4G</h3>
                      <a class="button" href="https://www.gsmarena.com/xiaomi_poco_m6_4g-13131.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D2DC1Y3N?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">POCO M6 Smartphone, 8+256GB Handy ohne Vertrag, 90Hz 6,79'' FHD+Display, 108MP Kamera, 5030mAh, 33W FastCharge, Dual-SIM, Silver</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D2DC1Y3N?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D2DC1Y3N?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D2DC1Y3N?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 159.90</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D2DC1Y3N?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">13.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 189.90</b>
                      <span>Min</span>
                      <b>€ 169.90</b>
                      <span>Max</span>
                      <b>€ 189.90</b>
                      <span>30 Day Avg</span>
                      <b>€ 184.56</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-06-18,18990;2024-07-01,16990;2024-07-08,18990;2024-07-16,16990;2024-07-17,18990;2024-07-24,15990;" currency="" symbol="€" average="18456">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D2D9Q628?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41N7HMQGaKL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Xiaomi Poco M6 4G</h3>
                      <a class="button" href="https://www.gsmarena.com/xiaomi_poco_m6_4g-13131.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D2D9Q628?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">POCO M6 Smartphone, 8+256GB Handy ohne Vertrag, 90Hz 6,79'' FHD+Display, 108MP Kamera, 5030mAh, 33W FastCharge, Dual-SIM, Black</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D2D9Q628?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D2D9Q628?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D2D9Q628?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 159.90</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D2D9Q628?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">13.3</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 189.90</b>
                      <span>Min</span>
                      <b>€ 169.90</b>
                      <span>Max</span>
                      <b>€ 189.90</b>
                      <span>30 Day Avg</span>
                      <b>€ 185.23</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-06-18,18990;2024-07-01,16990;2024-07-08,18990;2024-07-24,15990;" currency="" symbol="€" average="18523">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CZ49268G?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41noZRuBgtL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Moto G04s</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_moto_g04s-12921.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CZ49268G?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Mobility Moto g04s Smartphone (6,6"-HD+-Display, 50-MP-Kamera, 4/64 GB, 5000 mAh, Android 14) Concord Black, inkl. Schutzcover + Handyhalterung [Exklusiv bei Amazon]</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CZ49268G?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">64GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CZ49268G?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CZ49268G?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 97.46</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CZ49268G?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.6</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 104.99</b>
                      <span>Min</span>
                      <b>€ 104.99</b>
                      <span>Max</span>
                      <b>€ 119.00</b>
                      <span>30 Day Avg</span>
                      <b>€ 110.13</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-04-15,11900;2024-05-14,10900;2024-05-27,11900;2024-06-12,10900;2024-07-14,11900;2024-07-19,10499;2024-07-23,9746;" currency="" symbol="€" average="11013">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B07ZQSKGLZ?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41w7V-f5hGL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Apple iPhone 11 Pro Max</h3>
                      <a class="button" href="https://www.gsmarena.com/apple_iphone_11_pro_max-9846.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B07ZQSKGLZ?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Apple iPhone 11 Pro Max, 512GB, Midnight Green - Unlocked (Renewed)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B07ZQSKGLZ?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">512GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B07ZQSKGLZ?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B07ZQSKGLZ?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 539.92</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B07ZQSKGLZ?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">27.3</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 611.90</b>
                      <span>Min</span>
                      <b>C$ 551.90</b>
                      <span>Max</span>
                      <b>C$ 949.00</b>
                      <span>30 Day Avg</span>
                      <b>C$ 799.11</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-09-25,77999;2023-09-27,79442;2023-09-28,79424;2023-09-28,78840;2023-09-29,79424;2023-10-01,94900;2023-10-20,83500;2023-10-21,94900;2023-10-23,80989;2023-10-24,80402;2023-10-25,80989;2023-10-26,81576;2023-10-26,80989;2023-10-27,81576;2023-11-02,80989;2023-11-03,80402;2023-11-06,80483;2023-11-07,81070;2023-11-08,81191;2023-11-09,77999;2023-11-17,81194;2023-11-18,82550;2023-11-18,84500;2023-11-19,82550;2023-11-21,81958;2023-11-22,82550;2023-11-23,81958;2023-11-24,76100;2023-11-27,81958;2023-11-28,76100;2023-11-28,81367;2023-11-30,81958;2023-12-01,81367;2023-12-02,87639;2023-12-02,80775;2023-12-03,81367;2023-12-06,89990;2023-12-06,81367;2023-12-09,88282;2023-12-09,81367;2023-12-12,81958;2023-12-13,82277;2023-12-14,81498;2023-12-15,80901;2023-12-21,76598;2023-12-22,68915;2023-12-26,89990;2023-12-29,79990;2024-01-03,65990;2024-01-05,94900;2024-01-12,85999;2024-01-15,94900;2024-01-16,74999;2024-01-22,76599;2024-01-28,73999;2024-01-30,72999;2024-02-22,69999;2024-04-03,67999;2024-04-13,66829;2024-04-14,63815;2024-04-14,61871;2024-04-15,67999;2024-04-16,61871;2024-04-17,67999;2024-04-24,66829;2024-04-24,58771;2024-04-25,67999;2024-05-08,65990;2024-05-13,62990;2024-05-13,58790;2024-05-14,58190;2024-05-15,55190;2024-05-16,94900;2024-07-08,55190;2024-07-08,65190;2024-07-22,61190;2024-07-23,53992;" currency="" symbol="C$" average="79911">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0B6LYWTPG?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31fK6WVwL8L._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Samsung Galaxy Z Fold4</h3>
                      <a class="button" href="https://www.gsmarena.com/samsung_galaxy_z_fold4-11737.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0B6LYWTPG?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Samsung Galaxy Z Fold4 5G 256GB Grey Green (CAD Version &amp; Warranty) - AI Enabled, 6.7" 120Hz AMOLED, Snapdragon 8+Gen1, 12MP+12MP Rear Camera, 4MP+10MP Selfie Camera, Fast Charging, powershare</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0B6LYWTPG?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 12GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0B6LYWTPG?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0B6LYWTPG?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 960.16</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0B6LYWTPG?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.1</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 1,066.84</b>
                      <span>Min</span>
                      <b>C$ 1,049.99</b>
                      <span>Max</span>
                      <b>C$ 2,270.29</b>
                      <span>30 Day Avg</span>
                      <b>C$ 1,189.89</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2022-08-10,226999;2022-10-25,202999;2022-11-04,226999;2022-11-10,190999;2022-11-16,226999;2022-11-17,199999;2022-11-21,190999;2022-12-02,226999;2022-12-08,227029;2022-12-09,226999;2022-12-10,223500;2022-12-10,226308;2022-12-13,196995;2023-01-06,226310;2023-01-07,223500;2023-01-11,206999;2023-01-13,207029;2023-01-14,206999;2023-01-25,207029;2023-01-25,206999;2023-01-27,207029;2023-01-27,226310;2023-01-28,223500;2023-02-01,206999;2023-02-17,226310;2023-02-18,223500;2023-03-08,208999;2023-03-09,209029;2023-03-10,208999;2023-04-07,226110;2023-04-18,226098;2023-04-19,225420;2023-04-20,224760;2023-04-21,223132;2023-04-22,221316;2023-04-23,220113;2023-04-24,219523;2023-04-25,219345;2023-04-26,219161;2023-04-27,215393;2023-04-29,213730;2023-04-30,211964;2023-05-01,210110;2023-05-02,226110;2023-05-02,205416;2023-05-03,201393;2023-05-04,192104;2023-05-05,187398;2023-05-06,185662;2023-05-07,185248;2023-05-08,214110;2023-05-11,211500;2023-05-13,214999;2023-05-16,211500;2023-05-26,204999;2023-05-30,192999;2023-06-12,164999;2023-06-14,204999;2023-06-16,211500;2023-06-26,218500;2023-07-05,208995;2023-07-26,226995;2023-08-04,218500;2023-08-20,159900;2023-08-24,149900;2023-08-31,149879;2023-09-01,149803;2023-09-01,149735;2023-09-02,149672;2023-09-19,218500;2023-09-28,219500;2023-09-30,218500;2023-10-02,215500;2023-10-04,214500;2023-10-06,215900;2023-10-10,196997;2023-10-21,161997;2023-10-25,204297;2023-10-30,164999;2023-11-01,147799;2023-11-03,144799;2023-11-04,204297;2023-12-08,129997;2023-12-13,204297;2023-12-15,159997;2023-12-22,159980;2024-01-05,226999;2024-01-09,219900;2024-01-10,226999;2024-01-12,213500;2024-01-12,211900;2024-01-13,213500;2024-01-16,211900;2024-01-17,208900;2024-01-18,213500;2024-01-20,205500;2024-01-21,213500;2024-01-25,211500;2024-01-30,218500;2024-02-05,199997;2024-03-03,218500;2024-03-05,199997;2024-03-08,218500;2024-03-09,220500;2024-03-11,226999;2024-03-12,220500;2024-03-13,218500;2024-03-20,214500;2024-03-26,220867;2024-03-27,214500;2024-04-01,213500;2024-04-01,211900;2024-04-03,213500;2024-04-03,215500;2024-04-04,226999;2024-04-04,110000;2024-04-06,218500;2024-04-10,110000;2024-04-11,199350;2024-04-13,179415;2024-04-15,161474;2024-04-16,104999;2024-04-17,161474;2024-04-17,150151;2024-04-24,144999;2024-04-29,135136;2024-05-01,122928;2024-05-02,121999;2024-05-03,110635;2024-05-08,116999;2024-05-11,107049;2024-05-11,116999;2024-05-14,106380;2024-05-17,106826;2024-05-21,116999;2024-05-22,171244;2024-05-29,154120;2024-06-01,141707;2024-06-03,152176;2024-06-17,150167;2024-06-20,135150;2024-06-22,124629;2024-07-04,112540;2024-07-08,118538;2024-07-19,106684;2024-07-22,96016;" currency="" symbol="C$" average="118989">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CYQCSZNW?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41S2bt-1yfL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Edge 50 Fusion</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_edge_50_fusion-12871.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CYQCSZNW?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Mobility Edge50 Fusion Smartphone (6,7"-FHD+-pOLED-Display, 50-MP-Kamera, 8/256 GB, 5000 mAh) Forest Blue, inkl. Schutzcover + Handyhalterung [Exklusiv bei Amazon</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CYQCSZNW?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CYQCSZNW?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CYQCSZNW?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 324.99</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CYQCSZNW?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">6.9</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 349.00</b>
                      <span>Min</span>
                      <b>€ 349.00</b>
                      <span>Max</span>
                      <b>€ 349.00</b>
                      <span>30 Day Avg</span>
                      <b>€ 349.00</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-06-05,34900;2024-07-19,32499;" currency="" symbol="€" average="34900">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CZ4BRNPJ?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41v7TQt2dEL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Moto G04s</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_moto_g04s-12921.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CZ4BRNPJ?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Mobility Moto g04s Smartphone (6,6"-HD+-Display, 50-MP-Kamera, 4/64 GB, 5000 mAh, Android 14) Sea Green, inkl. Schutzcover + Handyhalterung [Exklusiv bei Amazon]</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CZ4BRNPJ?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">64GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CZ4BRNPJ?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CZ4BRNPJ?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 104.99</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CZ4BRNPJ?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">4.8</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 119.00</b>
                      <span>Min</span>
                      <b>€ 109.00</b>
                      <span>Max</span>
                      <b>€ 119.00</b>
                      <span>30 Day Avg</span>
                      <b>€ 110.66</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-04-15,11900;2024-05-14,10900;2024-05-27,11900;2024-06-12,10900;2024-07-14,11900;2024-07-19,10499;" currency="" symbol="€" average="11066">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CZ7FNTM2?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41fQmE5baBL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Moto G04s</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_moto_g04s-12921.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CZ7FNTM2?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Mobility Moto g04s Smartphone (6,6"-HD+-Display, 50-MP-Kamera, 4/64 GB, 5000 mAh, Android 14) Satin Blue, inkl. Schutzcover + Handyhalterung [Exklusiv bei Amazon]</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CZ7FNTM2?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">64GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CZ7FNTM2?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CZ7FNTM2?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 104.99</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CZ7FNTM2?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">4.8</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 119.00</b>
                      <span>Min</span>
                      <b>€ 109.00</b>
                      <span>Max</span>
                      <b>€ 119.00</b>
                      <span>30 Day Avg</span>
                      <b>€ 110.66</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-04-15,11900;2024-05-14,10900;2024-05-27,11900;2024-06-12,10900;2024-07-14,11900;2024-07-19,10499;" currency="" symbol="€" average="11066">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D26S475S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41zKYc97MLL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>HMD Pulse</h3>
                      <a class="button" href="https://www.gsmarena.com/hmd_pulse-12939.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D26S475S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">HMD Smartphone Pulse (64 GB Speicher, 5000mAh Akku, 6.56” HD+ HID Display, 13 MP Kamera, Android 14, 4G, IP52 zertifiziert, Quick Fix Design) Meteor Black</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D26S475S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">64GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D26S475S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D26S475S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 125.00</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D26S475S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">9.8</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 134.99</b>
                      <span>Min</span>
                      <b>€ 134.99</b>
                      <span>Max</span>
                      <b>€ 139.99</b>
                      <span>30 Day Avg</span>
                      <b>€ 138.65</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-05-23,13997;2024-06-01,13999;2024-07-06,13499;2024-07-07,13999;2024-07-11,13499;2024-07-12,13999;2024-07-13,13499;2024-07-19,12500;" currency="" symbol="€" average="13865">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0C9TVG6KD?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31EiJ2CSgvL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Asus Zenfone 10</h3>
                      <a class="button" href="https://www.gsmarena.com/asus_zenfone_10-12380.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0C9TVG6KD?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Asus Zenfone 10 Smartphone (5,9" AMOLED Display, 50MP Dual-Kamera, 4300 mAh Akku, Android 13.0, Snapdragon 8 Gen 2, IP68, 8GB RAM, 256 GB Speicher) Comet White</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0C9TVG6KD?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0C9TVG6KD?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0C9TVG6KD?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 629.00</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0C9TVG6KD?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">4.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 669.17</b>
                      <span>Min</span>
                      <b>€ 649.99</b>
                      <span>Max</span>
                      <b>€ 873.00</b>
                      <span>30 Day Avg</span>
                      <b>€ 664.27</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-07-11,84900;2023-07-18,79900;2023-07-20,84900;2023-07-21,79900;2023-07-23,84900;2023-07-23,79900;2023-08-01,84899;2023-08-09,84900;2023-09-11,82115;2023-09-23,84900;2023-10-13,82115;2023-10-14,84900;2023-10-26,82115;2023-11-17,74999;2023-11-28,82115;2023-12-06,74999;2024-01-03,84899;2024-01-05,84900;2024-01-06,84898;2024-01-11,84895;2024-01-12,84894;2024-01-17,71100;2024-01-23,84880;2024-01-24,79897;2024-01-24,84730;2024-01-24,84900;2024-01-25,84850;2024-01-25,84830;2024-01-25,84475;2024-01-26,84425;2024-01-26,83198;2024-01-27,84890;2024-01-28,83243;2024-01-28,84890;2024-01-29,83243;2024-01-29,84895;2024-01-29,84770;2024-01-30,82094;2024-01-30,81944;2024-01-30,81912;2024-01-31,82025;2024-01-31,87300;2024-02-01,82110;2024-02-01,87300;2024-02-02,79922;2024-02-03,79533;2024-02-03,79527;2024-02-03,79521;2024-02-04,79491;2024-02-04,79467;2024-02-05,74999;2024-03-04,76260;2024-03-05,76473;2024-03-05,77040;2024-03-05,77376;2024-03-06,77523;2024-03-06,77966;2024-03-06,78168;2024-03-07,78372;2024-03-07,78360;2024-03-07,78348;2024-03-08,78342;2024-03-08,78324;2024-03-09,78312;2024-03-09,78328;2024-03-10,78303;2024-03-10,78243;2024-03-11,78305;2024-03-11,78293;2024-03-11,78281;2024-03-12,78275;2024-03-12,78263;2024-03-13,78258;2024-03-13,78251;2024-03-14,78245;2024-03-14,78233;2024-03-15,78221;2024-03-15,78210;2024-03-16,78388;2024-03-16,78377;2024-03-16,78370;2024-03-17,78364;2024-03-17,78358;2024-03-17,78340;2024-03-18,78334;2024-03-18,78328;2024-03-18,78322;2024-03-19,78317;2024-03-19,78538;2024-03-20,74999;2024-03-26,82500;2024-03-26,74999;2024-04-01,76260;2024-04-01,76540;2024-04-02,77304;2024-04-02,77305;2024-04-02,77801;2024-04-03,78014;2024-04-03,77803;2024-04-08,71900;2024-04-26,68999;2024-05-01,68900;2024-05-04,68999;2024-06-02,68900;2024-06-15,70582;2024-06-16,68900;2024-06-28,64999;2024-07-16,66917;2024-07-18,62900;" currency="" symbol="€" average="66427">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0D2JB6HP5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31V8okkgYcL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Edge (2024)</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_edge_(2024)-13111.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0D2JB6HP5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Edge | 2024 | Unlocked | Made for US 8/256GB | 50MP Camera | Midnight Blue</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0D2JB6HP5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0D2JB6HP5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0D2JB6HP5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 449.99</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0D2JB6HP5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 499.99</b>
                      <span>Min</span>
                      <b>$ 499.99</b>
                      <span>Max</span>
                      <b>$ 499.99</b>
                      <span>1 Day Avg</span>
                      <b>$ 499.99</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-07-17,49999;2024-07-18,44999;" currency="" symbol="$" average="49999">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0CT6BQV81?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41CAmgSzyWL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Moto G Power (2024)</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_moto_g_power_(2024)-12867.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0CT6BQV81?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Moto G Power 5G | 2024 | Unlocked | Made for US 8/128GB | 50MP Camera | Midnight Blue</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0CT6BQV81?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0CT6BQV81?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0CT6BQV81?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 249.99</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0CT6BQV81?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">13.8</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 299.99</b>
                      <span>Min</span>
                      <b>$ 279.37</b>
                      <span>Max</span>
                      <b>$ 299.99</b>
                      <span>30 Day Avg</span>
                      <b>$ 291.32</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-04-26,29999;2024-04-28,27940;2024-04-29,29999;2024-04-29,28999;2024-04-30,29799;2024-04-30,27937;2024-05-01,28999;2024-05-05,27966;2024-05-06,28999;2024-05-06,29799;2024-05-11,27955;2024-05-11,29799;2024-05-14,28999;2024-05-16,29699;2024-05-18,27942;2024-05-19,29699;2024-05-20,29599;2024-05-21,29799;2024-05-23,29999;2024-05-24,27999;2024-07-01,29999;2024-07-18,24999;" currency="" symbol="$" average="29132">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0C2XF43BD?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31dmdXfat7L._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Razr 40 Ultra</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_razr_40_ultra-12169.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0C2XF43BD?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola razr+ | 2023 | Unlocked | Made for US 8/256 | 32 MPCamera |Black, 73.95x170.83x6.99mm</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0C2XF43BD?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0C2XF43BD?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0C2XF43BD?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 599.99</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0C2XF43BD?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">6.1</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 999.99</b>
                      <span>Min</span>
                      <b>$ 649.99</b>
                      <span>Max</span>
                      <b>$ 1,199.99</b>
                      <span>30 Day Avg</span>
                      <b>$ 673.32</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-11-18,69999;2024-01-08,90695;2024-01-10,99999;2024-01-15,69999;2024-01-22,99999;2024-01-29,69999;2024-02-04,69799;2024-02-10,69999;2024-02-26,99999;2024-02-27,69999;2024-03-26,99999;2024-03-28,119999;2024-03-28,99999;2024-03-29,119499;2024-03-29,99999;2024-03-29,119499;2024-03-30,98999;2024-03-31,99999;2024-04-01,69999;2024-04-08,69799;2024-04-10,69999;2024-04-15,99999;2024-04-16,119999;2024-04-17,99999;2024-04-20,69799;2024-04-20,99999;2024-04-21,119999;2024-04-22,99999;2024-04-22,69999;2024-04-28,69799;2024-04-30,69999;2024-05-08,69799;2024-05-09,69999;2024-05-13,69799;2024-05-13,99999;2024-05-20,69999;2024-06-10,64999;2024-07-16,99999;2024-07-18,59999;" currency="" symbol="$" average="67332">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0C2X87QW4?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41rouCgWPBL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Razr 40 Ultra</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_razr_40_ultra-12169.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0C2X87QW4?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola razr+ | 2023 | Unlocked | Made for US 8/256 | 32 MPCamera |Blue, 73.95x170.83x6.99mm</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0C2X87QW4?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0C2X87QW4?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0C2X87QW4?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 599.99</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0C2X87QW4?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">6.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 999.99</b>
                      <span>Min</span>
                      <b>$ 649.99</b>
                      <span>Max</span>
                      <b>$ 1,229.99</b>
                      <span>30 Day Avg</span>
                      <b>$ 673.32</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-01-08,90064;2024-01-10,99999;2024-01-15,69999;2024-01-22,99999;2024-01-29,69999;2024-02-26,99999;2024-02-27,69999;2024-03-26,99999;2024-03-31,122999;2024-04-01,69999;2024-04-15,99999;2024-04-22,69999;2024-05-13,99999;2024-05-20,69999;2024-06-10,64999;2024-07-16,99999;2024-07-18,59999;" currency="" symbol="$" average="67332">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0C9RX9F94?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31FoWfUsdML._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Edge (2023)</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_edge_(2023)-12620.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0C9RX9F94?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Edge | 2023 | Unlocked | Made for US 8/256GB | 50MP Camera | Eclipse Black</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0C9RX9F94?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0C9RX9F94?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0C9RX9F94?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 299.99</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0C9RX9F94?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">16.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 569.99</b>
                      <span>Min</span>
                      <b>$ 344.99</b>
                      <span>Max</span>
                      <b>$ 599.99</b>
                      <span>30 Day Avg</span>
                      <b>$ 396.15</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-10-12,49999;2023-10-31,59999;2023-11-06,34999;2024-01-08,42199;2024-01-09,48999;2024-01-12,49999;2024-01-13,59999;2024-01-15,34999;2024-01-22,59999;2024-01-24,56999;2024-01-26,59999;2024-01-29,34999;2024-02-19,54999;2024-02-26,34999;2024-05-13,59999;2024-05-18,34999;2024-06-03,59999;2024-06-09,51999;2024-06-10,34999;2024-06-11,51999;2024-06-12,34999;2024-06-29,34499;2024-06-30,34999;2024-07-11,51999;2024-07-14,56999;2024-07-18,29999;" currency="" symbol="$" average="39615">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D2L42BX9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41iRq8zfbrL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Realme GT 6T</h3>
                      <a class="button" href="https://www.gsmarena.com/realme_gt_6t-13010.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D2L42BX9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">realme GT 6T 5G Smartphone 8+256 GB, Snapdragon 7+ Gen 3 Flagship Chipset, 120Hz 6000nit Hyper Display, 120W SUPERVOOC Charge, 5500mAh Massive Battery, Sony 50MP OIS Camera, Razor Green(no adapter)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D2L42BX9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D2L42BX9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D2L42BX9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 399.99</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D2L42BX9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">15.2</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 464.75</b>
                      <span>Min</span>
                      <b>€ 464.75</b>
                      <span>Max</span>
                      <b>€ 497.01</b>
                      <span>4 Day Avg</span>
                      <b>€ 475.39</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-07-14,49348;2024-07-15,49701;2024-07-15,47460;2024-07-16,47395;2024-07-16,47155;2024-07-16,46875;2024-07-17,46815;2024-07-17,46475;2024-07-18,39999;" currency="" symbol="€" average="47539">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D2L33VQ8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41LEZe3YlsL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Realme GT 6T</h3>
                      <a class="button" href="https://www.gsmarena.com/realme_gt_6t-13010.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D2L33VQ8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">realme GT 6T 5G Smartphone 8+256 GB, Snapdragon 7+ Gen 3 Flagship Chipset, 120Hz 6000nit Hyper Display, 120W SUPERVOOC Charge, 5500mAh Massive Battery, Sony 50MP OIS Camera, Fluid Silver(no adapter)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D2L33VQ8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D2L33VQ8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D2L33VQ8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 399.99</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D2L33VQ8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">14.8</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 465.13</b>
                      <span>Min</span>
                      <b>€ 465.13</b>
                      <span>Max</span>
                      <b>€ 477.37</b>
                      <span>4 Day Avg</span>
                      <b>€ 470.67</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-07-14,47732;2024-07-15,47737;2024-07-15,47352;2024-07-16,47092;2024-07-16,46932;2024-07-16,46672;2024-07-17,46513;2024-07-18,39999;" currency="" symbol="€" average="47067">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B07KVVN37P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31C9CuXPfsL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Motorola Edge 30</h3>
                      <a class="button" href="https://www.gsmarena.com/motorola_edge_30-11500.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B07KVVN37P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Motorola Smartphone Edge 30 6,5" 6,55" 128GB 8GB RAM Octa-Core Qualcomm Snapdragon 778G Plus Grau</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B07KVVN37P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B07KVVN37P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B07KVVN37P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 232.69</a>
                      <a class="discount" href="https://www.amazon.de/dp/B07KVVN37P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">2.2</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 260.10</b>
                      <span>Min</span>
                      <b>€ 241.54</b>
                      <span>Max</span>
                      <b>€ 615.90</b>
                      <span>30 Day Avg</span>
                      <b>€ 246.27</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-12-18,29929;2023-12-18,61590;2023-12-20,29929;2023-12-23,61590;2024-01-31,37285;2024-02-01,37321;2024-02-02,37561;2024-02-03,37524;2024-02-03,37000;2024-02-04,36260;2024-02-08,35525;2024-02-08,35532;2024-02-09,35000;2024-02-09,34300;2024-02-13,25335;2024-02-20,24729;2024-05-08,24234;2024-05-30,24729;2024-05-31,24154;2024-06-01,24729;2024-06-01,24234;2024-06-20,24729;2024-06-21,24234;2024-06-22,24729;2024-06-23,24234;2024-06-25,24729;2024-06-25,24234;2024-06-26,24729;2024-06-27,24234;2024-07-09,24719;2024-07-09,25213;2024-07-10,25717;2024-07-11,25469;2024-07-11,25793;2024-07-11,25503;2024-07-12,25000;2024-07-12,25500;2024-07-13,26010;2024-07-16,23269;" currency="" symbol="€" average="24627">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.co.uk/dp/B0C5Y53G65?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41rsvvIMrlL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Honor 90 Lite</h3>
                      <a class="button" href="https://www.gsmarena.com/honor_90_lite-12377.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.co.uk/dp/B0C5Y53G65?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Honor 90 LITE 8G/256G MIDNIGHT BLACK</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.co.uk/dp/B0C5Y53G65?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.co.uk/dp/B0C5Y53G65?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-uk1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.co.uk/dp/B0C5Y53G65?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">£ 159.99</a>
                      <a class="discount" href="https://www.amazon.co.uk/dp/B0C5Y53G65?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">3.1</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>£ 169.00</b>
                      <span>Min</span>
                      <b>£ 164.97</b>
                      <span>Max</span>
                      <b>£ 266.72</b>
                      <span>30 Day Avg</span>
                      <b>£ 168.19</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-07-06,24999;2023-07-18,21999;2023-07-25,26672;2023-07-25,21999;2023-07-27,26672;2023-07-27,21999;2023-07-28,26019;2023-07-28,26050;2023-07-29,21999;2023-08-01,26039;2023-08-01,26009;2023-08-02,26119;2023-08-04,21999;2023-08-05,21900;2023-08-16,19999;2023-08-18,19900;2023-08-21,26672;2023-08-23,19900;2023-08-26,26672;2023-08-26,19900;2023-09-14,18400;2023-09-20,19900;2023-09-20,19999;2023-09-22,18400;2023-09-25,25283;2023-09-26,25552;2023-09-26,19999;2023-09-30,18400;2023-10-02,19999;2023-10-06,19900;2023-10-09,19999;2023-10-11,19900;2023-11-15,19400;2023-11-24,17999;2023-11-24,17900;2023-11-28,17850;2023-11-30,19900;2023-12-08,17900;2023-12-15,17999;2023-12-22,17900;2024-01-19,17850;2024-01-20,17900;2024-02-13,19900;2024-02-15,19800;2024-02-16,19699;2024-02-17,18900;2024-02-20,18898;2024-02-20,18896;2024-02-25,18799;2024-02-25,18896;2024-03-20,18999;2024-03-21,17899;2024-03-27,18171;2024-04-03,19099;2024-04-03,19149;2024-04-08,18500;2024-04-09,18900;2024-04-11,18000;2024-04-12,18961;2024-04-12,18061;2024-04-13,18900;2024-04-13,18061;2024-04-14,18333;2024-04-14,18900;2024-04-15,17900;2024-04-25,16900;2024-04-25,17900;2024-05-07,18400;2024-05-11,16497;2024-05-12,18400;2024-05-16,17900;2024-05-18,17800;2024-05-23,17861;2024-05-28,17500;2024-06-07,17496;2024-06-07,17489;2024-06-07,17482;2024-06-08,17477;2024-06-08,17472;2024-06-08,17500;2024-06-12,16999;2024-06-18,16997;2024-06-22,16900;2024-07-01,16600;2024-07-09,16900;2024-07-12,16600;2024-07-14,16900;2024-07-16,15999;" currency="" symbol="£" average="16819">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B08PMYLKVF?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41VqOPD0q8L._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Apple iPhone 12 Pro</h3>
                      <a class="button" href="https://www.gsmarena.com/apple_iphone_12_pro-10508.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B08PMYLKVF?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Apple iPhone 12 Pro, 128GB, Pacific Blue - Unlocked (Renewed)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B08PMYLKVF?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 6GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B08PMYLKVF?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B08PMYLKVF?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 471.00</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B08PMYLKVF?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">21.2</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 549.99</b>
                      <span>Min</span>
                      <b>C$ 489.00</b>
                      <span>Max</span>
                      <b>C$ 799.00</b>
                      <span>30 Day Avg</span>
                      <b>C$ 640.08</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-09-25,79900;2023-09-27,67598;2023-09-28,79900;2023-09-28,67598;2023-09-30,67599;2023-10-01,67598;2023-10-01,79900;2023-10-03,72999;2023-10-03,69999;2023-10-05,72000;2023-10-06,67598;2023-10-07,72000;2023-10-08,68999;2023-10-11,67598;2023-10-11,72000;2023-10-15,67597;2023-10-16,72000;2023-10-17,68999;2023-10-17,67597;2023-10-18,70599;2023-10-19,68999;2023-10-20,72000;2023-10-21,68999;2023-10-23,67599;2023-10-23,67598;2023-10-24,67599;2023-10-24,65999;2023-10-31,67598;2023-11-01,66499;2023-11-02,67598;2023-11-03,65099;2023-11-05,64545;2023-11-06,67000;2023-11-07,64545;2023-11-07,67598;2023-11-08,67999;2023-11-09,67799;2023-11-10,67999;2023-11-11,67799;2023-11-11,64999;2023-11-13,72999;2023-11-14,72176;2023-11-15,72175;2023-11-16,67999;2023-11-17,69599;2023-11-17,65999;2023-11-20,64999;2023-11-22,65905;2023-11-24,65903;2023-11-28,65802;2023-11-28,63999;2023-11-29,65000;2023-11-30,63999;2023-11-30,65599;2023-11-30,63999;2023-12-02,65889;2023-12-04,65760;2023-12-04,64599;2023-12-04,62999;2023-12-05,65000;2023-12-06,64599;2023-12-06,65000;2023-12-17,64944;2023-12-18,64656;2023-12-19,63999;2023-12-19,64855;2023-12-22,64656;2023-12-22,64807;2023-12-24,64658;2023-12-25,60999;2023-12-26,62599;2023-12-27,64944;2023-12-28,64943;2024-01-03,58999;2024-01-08,57000;2024-01-08,64944;2024-01-09,63895;2024-01-10,59999;2024-01-11,57000;2024-01-11,59999;2024-01-14,57000;2024-01-14,62900;2024-01-16,61900;2024-01-17,62900;2024-01-28,58942;2024-01-28,59405;2024-01-28,58170;2024-01-29,60485;2024-01-30,59299;2024-02-01,57000;2024-02-03,55000;2024-02-04,62900;2024-02-05,55000;2024-02-06,56900;2024-02-06,57000;2024-02-07,56999;2024-02-09,56998;2024-02-12,56609;2024-02-13,56221;2024-02-14,55063;2024-02-14,58900;2024-02-15,57705;2024-02-23,55999;2024-02-24,55500;2024-02-26,55999;2024-02-27,55500;2024-02-28,54999;2024-03-04,53399;2024-03-10,54000;2024-03-11,53399;2024-03-13,53950;2024-03-13,54000;2024-03-13,53950;2024-03-15,54900;2024-03-16,53950;2024-03-18,51500;2024-03-20,52999;2024-03-21,52900;2024-03-26,53300;2024-03-27,52999;2024-03-29,50900;2024-04-03,53999;2024-04-03,54900;2024-04-04,53999;2024-04-05,52900;2024-04-05,54900;2024-04-06,53400;2024-04-06,50900;2024-04-08,53400;2024-04-08,54900;2024-04-09,57574;2024-04-10,56989;2024-04-11,56479;2024-04-13,54999;2024-04-13,52899;2024-04-14,52900;2024-04-21,56999;2024-04-21,52900;2024-04-22,52899;2024-04-23,52898;2024-04-23,52000;2024-04-27,52899;2024-04-28,52000;2024-04-28,52899;2024-05-01,52898;2024-05-02,52895;2024-05-03,52894;2024-05-04,51999;2024-05-05,52000;2024-05-06,51999;2024-05-08,50999;2024-05-10,50897;2024-05-11,50000;2024-05-13,49999;2024-05-14,50000;2024-05-14,49999;2024-05-17,51999;2024-05-18,49999;2024-05-20,51799;2024-05-27,51700;2024-05-28,51760;2024-05-28,51774;2024-05-28,51799;2024-05-31,51774;2024-06-01,49999;2024-06-01,51799;2024-06-03,49999;2024-06-03,49253;2024-06-04,48912;2024-06-04,48900;2024-06-04,51799;2024-06-05,54799;2024-06-05,49691;2024-06-06,51400;2024-06-06,54799;2024-06-07,49768;2024-06-07,49999;2024-06-09,49973;2024-06-10,54799;2024-06-10,79900;2024-06-12,57530;2024-06-12,79900;2024-06-14,56757;2024-06-14,54706;2024-06-15,54799;2024-06-15,54706;2024-06-17,79900;2024-06-17,54706;2024-06-18,54798;2024-06-18,49998;2024-06-18,49936;2024-06-19,49999;2024-06-21,51400;2024-06-21,58650;2024-06-22,79900;2024-06-23,60385;2024-06-24,52999;2024-06-24,51400;2024-06-24,52999;2024-06-25,79900;2024-07-05,60499;2024-07-06,52999;2024-07-08,60499;2024-07-09,56999;2024-07-09,54999;2024-07-10,52999;2024-07-11,54999;2024-07-12,54998;2024-07-12,54999;2024-07-16,47100;" currency="" symbol="C$" average="64008">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.co.uk/dp/B0C5Y2QG82?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41kdB-H2EzL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Honor 90 Lite</h3>
                      <a class="button" href="https://www.gsmarena.com/honor_90_lite-12377.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.co.uk/dp/B0C5Y2QG82?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">HONOR 90 Lite Smartphone 5G with 100MP Triple Camera, 8+256GB, 6,7” 90Hz Display, 4500mAh, Dual SIM, Android 13, Titanium Silver</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.co.uk/dp/B0C5Y2QG82?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.co.uk/dp/B0C5Y2QG82?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-uk1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.co.uk/dp/B0C5Y2QG82?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">£ 159.99</a>
                      <a class="discount" href="https://www.amazon.co.uk/dp/B0C5Y2QG82?tag=gsmcom-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">3.2</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>£ 169.99</b>
                      <span>Min</span>
                      <b>£ 169.99</b>
                      <span>Max</span>
                      <b>£ 313.32</b>
                      <span>30 Day Avg</span>
                      <b>£ 169.99</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-08-02,31332;2023-08-02,21999;2023-08-12,21900;2023-08-16,19999;2023-08-20,26672;2023-08-21,19900;2023-09-20,19999;2023-09-25,19899;2023-09-26,19999;2023-10-01,18400;2023-10-02,19999;2023-10-05,19900;2023-10-07,19999;2023-10-09,19900;2023-10-10,19999;2023-10-12,19900;2023-10-29,19999;2023-11-24,17999;2023-12-02,19999;2023-12-07,19799;2023-12-08,19999;2023-12-08,17999;2024-02-13,19999;2024-02-28,19900;2024-02-29,19937;2024-03-20,19997;2024-03-21,18849;2024-03-22,18599;2024-03-25,18549;2024-03-27,18863;2024-03-28,18799;2024-03-29,18855;2024-04-03,19175;2024-04-13,19182;2024-04-17,17999;2024-06-07,17997;2024-06-12,16999;2024-07-16,15999;" currency="" symbol="£" average="16999">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0CYQCQTN5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41TMc6EzPzL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Google Pixel 8a</h3>
                      <a class="button" href="https://www.gsmarena.com/google_pixel_8a-12937.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0CYQCQTN5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Google Pixel 8a - Unlocked Android Phone with Google AI, Advanced Pixel Camera and 24-Hour Battery - Aloe - 128 GB</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0CYQCQTN5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0CYQCQTN5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0CYQCQTN5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 449.00</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0CYQCQTN5?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 499.00</b>
                      <span>Min</span>
                      <b>$ 499.00</b>
                      <span>Max</span>
                      <b>$ 499.00</b>
                      <span>30 Day Avg</span>
                      <b>$ 499.00</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-05-08,49900;2024-07-15,44900;" currency="" symbol="$" average="49900">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0CYQ916ZY?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/418I-4R49hL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Google Pixel 8a</h3>
                      <a class="button" href="https://www.gsmarena.com/google_pixel_8a-12937.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0CYQ916ZY?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Google Pixel 8a - Unlocked Android Phone with Google AI, Advanced Pixel Camera and 24-Hour Battery - Obsidian - 128 GB</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0CYQ916ZY?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0CYQ916ZY?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0CYQ916ZY?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 449.00</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0CYQ916ZY?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">9.9</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 499.00</b>
                      <span>Min</span>
                      <b>$ 495.00</b>
                      <span>Max</span>
                      <b>$ 499.00</b>
                      <span>30 Day Avg</span>
                      <b>$ 498.60</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-05-08,49900;2024-07-09,49500;2024-07-11,49679;2024-07-11,49500;2024-07-11,49900;2024-07-12,49500;2024-07-13,49900;2024-07-15,44900;" currency="" symbol="$" average="49860">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0CYQFJSRF?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41tirMx7s0L._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Google Pixel 8a</h3>
                      <a class="button" href="https://www.gsmarena.com/google_pixel_8a-12937.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0CYQFJSRF?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Google Pixel 8a - Unlocked Android Phone with Google AI, Advanced Pixel Camera and 24-Hour Battery - Bay - 128 GB</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0CYQFJSRF?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0CYQFJSRF?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0CYQFJSRF?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 449.00</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0CYQFJSRF?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 499.00</b>
                      <span>Min</span>
                      <b>$ 499.00</b>
                      <span>Max</span>
                      <b>$ 499.00</b>
                      <span>30 Day Avg</span>
                      <b>$ 499.00</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-05-08,49900;2024-07-15,44900;" currency="" symbol="$" average="49900">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B07WFPLTX8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41yFMDvA45L._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>vivo Y76 5G</h3>
                      <a class="button" href="https://www.gsmarena.com/vivo_y76_5g-11231.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B07WFPLTX8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">VIVO Y76 5G Smartphone 16,58 cm Blau 128 GB</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B07WFPLTX8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B07WFPLTX8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B07WFPLTX8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 319.82</a>
                      <a class="discount" href="https://www.amazon.de/dp/B07WFPLTX8?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">24.3</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 355.35</b>
                      <span>Min</span>
                      <b>€ 355.35</b>
                      <span>Max</span>
                      <b>€ 464.50</b>
                      <span>30 Day Avg</span>
                      <b>€ 432.48</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-05-07,46450;2024-05-22,45142;2024-06-04,44693;2024-06-06,44464;2024-06-18,44662;2024-06-20,44666;2024-06-22,44663;2024-06-24,43754;2024-06-27,43870;2024-07-10,39483;2024-07-12,35535;2024-07-14,31982;" currency="" symbol="€" average="43248">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0CGTNPFZD?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/4129Yj6Gv9L._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Google Pixel 8</h3>
                      <a class="button" href="https://www.gsmarena.com/google_pixel_8-12546.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0CGTNPFZD?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Google Pixel 8-128GB - Rose</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0CGTNPFZD?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0CGTNPFZD?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0CGTNPFZD?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 649.00</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0CGTNPFZD?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">11.8</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 949.99</b>
                      <span>Min</span>
                      <b>C$ 699.00</b>
                      <span>Max</span>
                      <b>C$ 1,559.00</b>
                      <span>30 Day Avg</span>
                      <b>C$ 832.63</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-10-10,155900;2023-10-11,154900;2023-10-12,155500;2023-10-17,89405;2023-10-19,93276;2023-10-25,94900;2023-11-16,74900;2023-12-02,94900;2023-12-14,74900;2024-01-09,76224;2024-01-10,88574;2024-01-12,88648;2024-01-15,88772;2024-01-16,88814;2024-01-19,88853;2024-01-21,89057;2024-01-23,89177;2024-01-24,76224;2024-02-02,94900;2024-03-19,74996;2024-03-28,94900;2024-04-20,69900;2024-05-03,94900;2024-06-14,69900;2024-06-28,94900;2024-07-03,94999;2024-07-12,64900;" currency="" symbol="C$" average="83263">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0CYQDJS5L?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31Sr5ahLSlL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Google Pixel 8a</h3>
                      <a class="button" href="https://www.gsmarena.com/google_pixel_8a-12937.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0CYQDJS5L?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Google Pixel 8a - 128 GB -Unlocked Android Smartphone with Advanced Pixel Camera, 24-Hour Battery, and Powerful Security - Porcelain</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0CYQDJS5L?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0CYQDJS5L?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0CYQDJS5L?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 599.00</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0CYQDJS5L?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">11.9</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 679.99</b>
                      <span>Min</span>
                      <b>C$ 679.99</b>
                      <span>Max</span>
                      <b>C$ 679.99</b>
                      <span>30 Day Avg</span>
                      <b>C$ 679.99</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-06-11,67999;2024-07-12,59900;" currency="" symbol="C$" average="67999">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0CQ9SZ6CP?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41rEwyB0LgL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>OnePlus 12R</h3>
                      <a class="button" href="https://www.gsmarena.com/oneplus_12r-12727.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0CQ9SZ6CP?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">OnePlus 12R, 8GB RAM+128GB, Dual-SIM, US Factory Unlocked Android Smartphone, 5500 mAh Battery, 50MP Camera, 80W Fast Charging, 2024, Iron Gray</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0CQ9SZ6CP?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0CQ9SZ6CP?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0CQ9SZ6CP?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 399.99</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0CQ9SZ6CP?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">12.4</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 499.99</b>
                      <span>Min</span>
                      <b>$ 449.99</b>
                      <span>Max</span>
                      <b>$ 647.00</b>
                      <span>30 Day Avg</span>
                      <b>$ 479.99</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-02-10,49999;2024-04-15,64700;2024-04-16,49999;2024-04-17,64600;2024-04-18,49999;2024-04-23,64600;2024-04-24,49999;2024-04-24,64500;2024-04-26,49999;2024-04-29,64400;2024-04-30,49999;2024-05-09,59850;2024-05-09,59529;2024-05-10,59330;2024-05-10,59690;2024-05-11,49999;2024-05-12,59673;2024-05-13,64200;2024-05-17,49999;2024-05-17,64200;2024-05-20,64100;2024-05-25,64000;2024-05-26,63900;2024-05-27,63800;2024-05-28,63700;2024-05-29,63600;2024-05-29,49999;2024-05-30,63500;2024-05-31,63400;2024-06-02,63300;2024-06-03,44999;2024-06-24,49999;2024-07-03,63999;2024-07-03,49999;2024-07-12,39999;" currency="" symbol="$" average="47999">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0D78YHS6S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41zsA+f1PUL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>vivo V40</h3>
                      <a class="button" href="https://www.gsmarena.com/vivo_v40-13121.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0D78YHS6S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">vivo V40 5G Smartphone, 12 GB RAM + 512 GB ROM, 17,9 cm (6,78 Zoll) AMOLED-Display, 120 Hz, 50-MP-Kamera mit ZEISS-Optiken, BlueVolt XL-Akku von 5500 mAh, Flashcharge 80 W, Silber</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0D78YHS6S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">512GB 12GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0D78YHS6S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0D78YHS6S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 677.94</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0D78YHS6S?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">6.7</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 726.29</b>
                      <span>Min</span>
                      <b>€ 726.29</b>
                      <span>Max</span>
                      <b>€ 726.29</b>
                      <span>9 Day Avg</span>
                      <b>€ 726.29</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-07-03,72629;2024-07-12,67794;" currency="" symbol="€" average="72629">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.com/dp/B0BBHFRLJB?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/31a01xQN4WL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Sony Xperia 5 IV</h3>
                      <a class="button" href="https://www.gsmarena.com/sony_xperia_5_iv-11838.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.com/dp/B0BBHFRLJB?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Sony Xperia 5 IV 128GB Factory Unlocked Smartphone [U.S. Official w/Warranty], Black</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.com/dp/B0BBHFRLJB?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.com/dp/B0BBHFRLJB?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-com1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.com/dp/B0BBHFRLJB?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">$ 698.00</a>
                      <a class="discount" href="https://www.amazon.com/dp/B0BBHFRLJB?tag=gsmarena093-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">10.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>$ 798.00</b>
                      <span>Min</span>
                      <b>$ 798.00</b>
                      <span>Max</span>
                      <b>$ 998.00</b>
                      <span>30 Day Avg</span>
                      <b>$ 798.00</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2022-12-19,79800;2023-01-07,99800;2023-01-23,79800;2023-02-27,79999;2023-02-27,99800;2024-03-20,84820;2024-03-22,99800;2024-04-01,79800;2024-07-08,69800;" currency="" symbol="$" average="79800">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CGJJZD1P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41FnAYqacyL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Xiaomi Redmi 12 5G</h3>
                      <a class="button" href="https://www.gsmarena.com/xiaomi_redmi_12_5g-12446.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CGJJZD1P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Xiaomi Redmi 12 5G 4GB RAM 128GB Midnight Black</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CGJJZD1P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CGJJZD1P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CGJJZD1P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 119.99</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CGJJZD1P?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">19.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 152.51</b>
                      <span>Min</span>
                      <b>€ 137.35</b>
                      <span>Max</span>
                      <b>€ 169.00</b>
                      <span>30 Day Avg</span>
                      <b>€ 152.15</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-03-01,16900;2024-03-04,15012;2024-03-05,16900;2024-03-07,15012;2024-03-09,16211;2024-03-19,15900;2024-03-20,15799;2024-03-22,15699;2024-03-22,15628;2024-03-23,15400;2024-03-23,15196;2024-03-24,15169;2024-03-25,15229;2024-03-29,15520;2024-03-29,15304;2024-03-29,15199;2024-03-30,15250;2024-03-30,15199;2024-03-31,15678;2024-04-01,15420;2024-04-01,15678;2024-04-04,15499;2024-04-07,15700;2024-04-08,15499;2024-04-08,15498;2024-04-09,15430;2024-04-10,15498;2024-04-10,15430;2024-04-11,15499;2024-04-11,15430;2024-04-12,15176;2024-04-13,15420;2024-04-13,15390;2024-04-14,15358;2024-04-14,15477;2024-04-14,15443;2024-04-15,15498;2024-04-15,15478;2024-04-17,15316;2024-04-17,15310;2024-04-17,14608;2024-04-19,15473;2024-04-20,15210;2024-04-20,15478;2024-04-20,15430;2024-04-21,15478;2024-04-22,15198;2024-04-23,14788;2024-04-23,14789;2024-04-23,14713;2024-04-24,14609;2024-04-24,14608;2024-04-25,14612;2024-04-26,15478;2024-04-28,15700;2024-04-29,15478;2024-05-03,16290;2024-05-07,15802;2024-05-08,15243;2024-05-08,14890;2024-05-09,14886;2024-05-09,14464;2024-05-09,15153;2024-05-10,16290;2024-05-13,14698;2024-05-14,16009;2024-05-14,16008;2024-05-15,15713;2024-05-16,15714;2024-05-16,15713;2024-05-17,15699;2024-05-18,15700;2024-05-18,15699;2024-05-23,15700;2024-05-23,15699;2024-05-25,15700;2024-05-25,16171;2024-05-27,16170;2024-05-28,16171;2024-05-28,14919;2024-06-02,16238;2024-06-04,15793;2024-06-04,16238;2024-06-06,15794;2024-06-06,16238;2024-06-07,15718;2024-06-08,16238;2024-06-10,13849;2024-06-11,13813;2024-06-11,14046;2024-06-12,14373;2024-06-12,15192;2024-06-12,13735;2024-06-13,13816;2024-06-13,13867;2024-06-14,13901;2024-06-14,13952;2024-06-15,13986;2024-06-15,14035;2024-06-15,14083;2024-06-16,14113;2024-06-16,14141;2024-06-17,14205;2024-06-17,14247;2024-06-18,14291;2024-06-18,14060;2024-06-18,15971;2024-06-21,14432;2024-06-21,15971;2024-06-22,14432;2024-06-25,16000;2024-06-27,14986;2024-06-27,14586;2024-06-27,14184;2024-06-28,16000;2024-07-03,15251;2024-07-05,11999;" currency="" symbol="€" average="15215">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CLNMRDR9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41v1BKOcQvL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Oppo A38</h3>
                      <a class="button" href="https://www.gsmarena.com/oppo_a38-12541.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CLNMRDR9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">OPPO A38 16,7 cm (6.56") Double SIM Android 13 4G USB Type-C 4 Go 128 Go 5000 mAh Or</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CLNMRDR9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">128GB 4GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CLNMRDR9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CLNMRDR9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 128.37</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CLNMRDR9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">5.4</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 139.00</b>
                      <span>Min</span>
                      <b>€ 135.00</b>
                      <span>Max</span>
                      <b>€ 180.81</b>
                      <span>30 Day Avg</span>
                      <b>€ 138.06</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-02-05,17410;2024-02-06,18081;2024-02-07,14900;2024-02-15,13900;2024-02-25,14900;2024-03-21,14366;2024-03-23,14344;2024-03-31,14400;2024-04-02,14900;2024-04-08,13500;2024-06-11,13900;2024-07-04,12837;" currency="" symbol="€" average="13806">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.ca/dp/B0CFYS9VJL?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/317MQsxAHVL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Samsung Galaxy Tab S9 FE</h3>
                      <a class="button" href="https://www.gsmarena.com/samsung_galaxy_tab_s9_fe-12517.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.ca/dp/B0CFYS9VJL?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Samsung Galaxy Tab S9 FE Lavender 8GB RAM 256GB Storage Android Tablet, 10.9" 90 Hz Screen, IP68 Rating, 45W Fast Charging battery (CAD version and Warranty)</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.ca/dp/B0CFYS9VJL?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.ca/dp/B0CFYS9VJL?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-ca1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.ca/dp/B0CFYS9VJL?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">C$ 499.98</a>
                      <a class="discount" href="https://www.amazon.ca/dp/B0CFYS9VJL?tag=gsmarena0f3-20&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">28.6</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>C$ 699.98</b>
                      <span>Min</span>
                      <b>C$ 533.00</b>
                      <span>Max</span>
                      <b>C$ 699.99</b>
                      <span>30 Day Avg</span>
                      <b>C$ 699.98</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2023-10-20,68011;2023-10-21,64900;2023-10-26,69999;2023-11-01,69998;2023-11-04,69999;2023-11-18,69998;2023-12-01,63700;2023-12-02,60600;2023-12-03,69998;2023-12-05,60598;2023-12-06,69997;2023-12-08,60598;2023-12-09,69996;2023-12-13,59998;2023-12-20,57200;2023-12-21,55900;2023-12-21,54600;2023-12-22,53300;2023-12-22,59998;2024-01-03,59999;2024-01-04,59998;2024-01-04,59999;2024-01-05,57000;2024-01-06,55800;2024-01-06,69900;2024-01-08,69996;2024-01-09,69998;2024-01-10,69999;2024-02-28,57999;2024-02-29,57998;2024-03-03,57999;2024-03-04,57998;2024-04-05,69998;2024-04-12,59999;2024-04-13,59998;2024-04-17,59999;2024-04-18,59998;2024-05-01,54999;2024-05-03,54998;2024-05-17,58798;2024-05-17,69998;2024-06-04,69999;2024-06-04,69998;2024-06-27,49998;" currency="" symbol="C$" average="69998">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CTMTXNF9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41xe8+k2dEL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Xiaomi Watch 2</h3>
                      <a class="button" href="https://www.gsmarena.com/xiaomi_watch_2-12828.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CTMTXNF9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Xiaomi Watch 2 Smartwatch, 1,43" AMOLED Display mit Always-On-Funktion, Schlaf-, Puls- und Sport-Tracking, Wear OS by Google, Silber</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CTMTXNF9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">32GB 2GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CTMTXNF9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CTMTXNF9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 139.00</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CTMTXNF9?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">9.7</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 149.99</b>
                      <span>Min</span>
                      <b>€ 149.00</b>
                      <span>Max</span>
                      <b>€ 206.06</b>
                      <span>30 Day Avg</span>
                      <b>€ 158.99</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-02-26,20606;2024-02-28,16999;2024-03-01,20606;2024-03-02,16999;2024-03-02,16900;2024-03-08,20606;2024-03-12,19999;2024-03-20,17999;2024-03-26,19999;2024-04-03,18999;2024-04-09,19299;2024-04-10,19999;2024-04-10,19299;2024-04-14,18999;2024-04-15,19299;2024-04-16,19499;2024-04-17,19299;2024-04-18,19499;2024-04-19,18999;2024-04-22,18925;2024-05-04,17500;2024-05-07,14900;2024-05-20,17500;2024-05-25,16499;2024-06-05,16805;2024-06-05,15999;2024-06-13,15499;2024-06-21,14999;2024-06-25,13900;" currency="" symbol="€" average="15899">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CTMXNBLH?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41Sl7uHHnqL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>Xiaomi Watch 2</h3>
                      <a class="button" href="https://www.gsmarena.com/xiaomi_watch_2-12828.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CTMXNBLH?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">Xiaomi Watch 2 Smartwatch, 1,43" AMOLED Display mit Always-On-Funktion, Schlaf-, Puls- und Sport-Tracking, Wear OS by Google, Schwarz</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CTMXNBLH?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">32GB 2GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CTMXNBLH?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CTMXNBLH?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 139.00</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CTMXNBLH?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">9.0</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 149.99</b>
                      <span>Min</span>
                      <b>€ 149.00</b>
                      <span>Max</span>
                      <b>€ 217.02</b>
                      <span>30 Day Avg</span>
                      <b>€ 158.55</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-02-26,19999;2024-02-27,16999;2024-02-27,21702;2024-03-01,16999;2024-03-02,16900;2024-03-08,21702;2024-03-12,19999;2024-03-19,19997;2024-03-20,17999;2024-03-26,19997;2024-04-03,19299;2024-04-03,18999;2024-04-09,19299;2024-04-10,19997;2024-04-10,19299;2024-04-11,18999;2024-04-11,19299;2024-04-14,18999;2024-04-15,19299;2024-04-16,18999;2024-04-16,19499;2024-04-17,18999;2024-04-24,19299;2024-04-24,19916;2024-04-24,18999;2024-04-25,19997;2024-04-25,18041;2024-04-26,18999;2024-05-04,17500;2024-05-07,14900;2024-05-20,17500;2024-05-22,14999;2024-05-23,17500;2024-05-25,16499;2024-06-07,16597;2024-06-07,16593;2024-06-08,16588;2024-06-08,16000;2024-06-09,16091;2024-06-09,16090;2024-06-09,16087;2024-06-10,15799;2024-06-13,14999;2024-06-16,15000;2024-06-17,14997;2024-06-17,15053;2024-06-18,15048;2024-06-18,15043;2024-06-18,15067;2024-06-19,15063;2024-06-19,14999;2024-06-24,13900;" currency="" symbol="€" average="15855">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>
      <div class="pricecut">
          <div class="row">
              <a class="image" href="https://www.amazon.de/dp/B0CW363ZFV?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">
                  <img src="./Daily deals_files/41JjKT8SwNL._SL500_.jpg" alt="" class="crop">
              </a>
              <div class="phone">
                  <div>
                      <h3>vivo V29</h3>
                      <a class="button" href="https://www.gsmarena.com/vivo_v29-12461.php">Specs</a>
                  </div>

                  <p><a href="https://www.amazon.de/dp/B0CW363ZFV?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">VIVO V29 5G-Smartphone, 120 Hz AMOLED 17,9 cm (6,78 Zoll) 3D-Display, 8 GB + 256 GB Android-Handy, 50 MP OIS Anti-Shake Kamera, 80 W Flashcharge-Telefon, Schwarz</a></p>

                  <div class="deal">
                      <a class="memory" href="https://www.amazon.de/dp/B0CW363ZFV?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">256GB 8GB RAM</a>
                      <a class="store" href="https://www.amazon.de/dp/B0CW363ZFV?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener"><img src="./Daily deals_files/amazon-de1.png" alt=""></a>
                      <a class="price" href="https://www.amazon.de/dp/B0CW363ZFV?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">€ 508.74</a>
                      <a class="discount" href="https://www.amazon.de/dp/B0CW363ZFV?tag=gsmarena0ca-21&amp;linkCode=osi&amp;th=1&amp;psc=1" target="_blank" rel="noopener">13.4</a>
                  </div>
              </div>
          </div>


          <div class="history">
              <div class="row">
                  <div class="chart"></div>
                  <div class="stats">
                      <span>Previous</span>
                      <b>€ 569.17</b>
                      <span>Min</span>
                      <b>€ 532.91</b>
                      <span>Max</span>
                      <b>€ 605.44</b>
                      <span>30 Day Avg</span>
                      <b>€ 589.72</b>
                  </div>
              </div>

          </div>



          <a href="https://www.gsmarena.com/deals.php3#" class="cutprice" history="2024-04-29,60544;2024-06-12,56917;2024-06-12,53291;2024-06-17,60544;2024-06-17,53291;2024-06-17,56917;2024-06-20,50874;" currency="" symbol="€" average="58972">

              <span>Price history</span>
              <i class="head-icon icon-chevron-down"></i>
          </a>
      </div>
      <hr>



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

      <a href="https://www.gsmarena.com/nothing_cmf_phone_1-review-2719.php" class="module-reviews-xl-link">
        <img class="module-reviews-xl-thumb xl-thumb-large" src="./Daily deals_files/gsmarena_001.jpg" alt="CMF Phone 1 by Nothing review">
        <div class="module-review-xl-title">

          <strong>CMF Phone 1 by Nothing review</strong>
        </div>
      </a>
      <a href="https://www.gsmarena.com/oneplus_nord_4-review-2724.php" class="module-reviews-xl-link">
        <img class="module-reviews-xl-thumb xl-thumb-large" src="./Daily deals_files/gsmarena_000.jpg" alt="OnePlus Nord 4 review">
        <div class="module-review-xl-title">

          <strong>OnePlus Nord 4 review</strong>
        </div>
      </a>
      <a href="https://www.gsmarena.com/samsung_galaxy_z_fold6-review-2725.php" class="module-reviews-xl-link">
        <img class="module-reviews-xl-thumb xl-thumb-large" src="./Daily deals_files/gsmarena_001(1).jpg" alt="Samsung Galaxy Z Fold6 review">
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
      </tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a55-12824.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">30,765</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">27,754</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_11-9848.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">26,465</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_nord_4-13200.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">26,278</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">22,665</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_a15-12637.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">22,408</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">20,731</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13-12776.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">20,503</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_13-11103.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">18,844</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_k70_ultra-13215.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">18,644</td><td></td></tr></tbody>

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
      </tr><tr><td headers="th3a">1.</td><th headers="th3b"><a href="https://www.gsmarena.com/samsung_galaxy_s24_ultra-12771.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">1,135</td><td></td></tr><tr><td headers="th3a">2.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_poco_f5-12258.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">735</td><td></td></tr><tr><td headers="th3a">3.</td><th headers="th3b"><a href="https://www.gsmarena.com/sony_xperia_1_v-12263.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">639</td><td></td></tr><tr><td headers="th3a">4.</td><th headers="th3b"><a href="https://www.gsmarena.com/google_pixel_8_pro-12545.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">616</td><td></td></tr><tr><td headers="th3a">5.</td><th headers="th3b"><a href="https://www.gsmarena.com/apple_iphone_15_pro_max-12548.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">612</td><td></td></tr><tr><td headers="th3a">6.</td><th headers="th3b"><a href="https://www.gsmarena.com/oneplus_12-12725.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">577</td><td></td></tr><tr><td headers="th3a">7.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro+-12572.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">560</td><td></td></tr><tr><td headers="th3a">8.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_redmi_note_13_pro-12581.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">543</td><td></td></tr><tr><td headers="th3a">9.</td><th headers="th3b"><a href="https://www.gsmarena.com/xiaomi_13_ultra-12236.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">521</td><td></td></tr><tr><td headers="th3a">10.</td><th headers="th3b"><a href="https://www.gsmarena.com/asus_zenfone_10-12380.php"><nobr>{{ $deviceName }}</nobr></a></th><td headers="th3c">518</td><td></td></tr></tbody>

      </table>
      </div>
      <span class="ad-label">ADVERTISEMENT</span>
      <!-- /8095840/.2_A.34911.7_gsmarena.com_tier1 -->
      <div id="div-gpt-ad-300x600btfgsmarenadesktop-0" style="height:600px; width:300px;"></div>

      </aside>

      </div><!-- id body -->
      </div><!-- id outer -->




      <div id="footer">
       <div class="footer-logo">
           <img src="./Daily deals_files/logo-gsmarena-com.png" alt="">
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


      <!-- <script type="text/javascript" src="./Daily deals_files/autocomplete.js.تنزيل"></script>
      <img src="./Daily deals_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;"><script type="text/javascript" language="javascript">
      AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
      $gsm.addEventListener(document, "DOMContentLoaded", function()
      {
          new Autocomplete( "topsearch-text", "topsearch", true );
      }
      )
      </script> -->














      <div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Daily deals</span><div class="logo" draggable="false"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/deals.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/deals.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad"></div><div class="thumb-gallery"><a class="go-up" href="https://www.gsmarena.com/deals.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/deals.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><div id="extension-lfbpl"></div><!----><div id="wp-extension" data-id="dpadflhmiohjfhhaehelneimpllfbpcg"></div>

</template>
