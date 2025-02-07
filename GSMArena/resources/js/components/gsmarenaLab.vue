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



<script type="text/javascript" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/misc.js.download"></script>



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

<object type="image/svg+xml" data="./GSMArena feature labs_ The tests - GSMArena.com tests_files/logo.svg"><img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">
    
    <span id="quick-search-button">
      <input type="submit" value="Go">
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>
    

<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#">More news results</a></li></ul></div></div><div class="search-buttons"><a class="go" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


  <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#" onclick="return false;" class="login-icon" id="login-active">
    <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
  </a>

  <span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MHhscn5tenF%2BQHN%2BfUBremxrbDJteml2emgyKCouMW93bw%3D%3D">  
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

<div class="main main-review l-box col float-right">  
<div class="review-header">  
  <div class="review-hd overflow darken">
    <div class="article-info">

<div class="article-info-line border-bottom">
<div class="blur"></div>




<script>
  var sURLSocialE = "https%3A%2F%2Fwww.gsmarena.com%2Fgsmarena_lab_tests-review-751.php";
</script>


<ul class="social-share sharrre close">
<li class="help help-social">
  <a class="box btnFb" title="Facebook" id="facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.gsmarena.com%2Fgsmarena_lab_tests-review-751.php" target="_blank" rel="noopener" onclick="window.open(&#39;http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.gsmarena.com%2Fgsmarena_lab_tests-review-751.php&#39;,&#39;fbookshare&#39;,&#39;width=500,height=400,left=&#39;+(screen.availWidth/2-225)+&#39;,top=&#39;+(screen.availHeight/2-150)+&#39;&#39;);return false;">
    
    <div class="share">
      <i class="head-icon icon-soc-fb2"></i>
    </div>
  </a>
</li>
<li>
  <a class="box btnTw" title="Twitter" id="twitter" href="https://twitter.com/intent/tweet?text=GSMArena+feature+labs%3A+The+tests&amp;url=https%3A%2F%2Fwww.gsmarena.com%2Fgsmarena_lab_tests-review-751.php" target="_blank" rel="noopener" onclick="window.open(&#39;https://twitter.com/intent/tweet?text=GSMArena+feature+labs%3A+The+tests&amp;url=https%3A%2F%2Fwww.gsmarena.com%2Fgsmarena_lab_tests-review-751.php&#39;,&#39;twitshare&#39;,&#39;width=500,height=400,left=&#39;+(screen.availWidth/2-225)+&#39;,top=&#39;+(screen.availHeight/2-150)+&#39;&#39;);return false;">
    <div class="share">
      <i class="head-icon icon-soc-twitter2"></i></div>
  </a>
</li>
<li>
    <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#"><div class="share share-button"><i class="head-icon icon-share"></i></div></a>
</li>
</ul>  

 <div class="meta-line meta-author ">
    <span class="reviewer">GSMArena team</span>,
    <span class="dtreviewed">26 April 2012</span>
    
</div>
</div>




        
<div class="center-stage article-accent">
<div class="article-hgroup">

    <h3 class="article-info-subtitle">The tests</h3><br>
    <h1 class="article-info-name">GSMArena feature labs: The tests</h1>
</div>

<img class="center-stage-background" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/thumb_.jpg">
</div>


<div class="article-info-line">
<div class="blur bottom"></div>
<ul class="article-info-meta">



<li class="article-info-meta-link meta-link-opinions"><a href="https://www.gsmarena.com/reviewcomm-751.php"><i class="head-icon icon-comment-count"></i>Comments (160)</a></li> 
<br style="clear:both;">
</ul>
</div>
</div>


</div>      
</div>



<div class="review-nav col row">
<div class="review-pages col col-4-5">
<div class="page-selected row no-push">
  <a title="1. Introduction"><strong>1. Introduction</strong></a>
</div>
<ol class="page-options col row no-push">

<li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#"><strong>1. Introduction</strong></a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php">2. Display tests: contrast and sunlight legibility</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p3.php">3. Speakerphone loudness (DISCONTINUED)</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p4.php">4. Audio output quality (DISCONTINUED)</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p5.php">5. Camera and video compare (UPDATED)</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p6.php">6. Battery life</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p7.php">7. Speaker test</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php">&nbsp;</a></li> <li><a href="https://www.gsmarena.com/reviewcomm-751.php">Review comments (160)</a></li>                 

</ol>
</div>
<div class="col col-1-5 pages-next-prev float-right">
<a class="disabled pages-prev" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#" title="Previous page"></a><a class="pages-next" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php" title="Next page"></a></div>
</div>
<div class="article-tags clearfix">
<p class="float-right">   
 <a href="https://www.gsmarena.com/reviews.php3?sTag=Misc"><b>Misc</b></a></p>
</div>
<div id="review-body" class="review-body clearfix">



  

<h3>Introduction</h3>

<p>The GSMArena Labs are tests designed to give an objective account of how a device performs in real-world scenarios. In short, it's about what you can expect from a gadget you're planning to buy. Our tests are constantly being developed and refined to keep up with the latest emerging technology. We aim to give you real results, avoiding convoluted technical jargon, so you can easily compare all tested devices.</p>

<p><img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/gsmarena_0001.jpg" alt=""></p>

<p>We are offering a detailed look into the specifics behind out testing process, including what we test, why we test it, and how we go about the whole thing. While it provides enough technical information should you require it, we've tried to cover each subject in a way so as not to confuse the inexperienced reader, and the following pages a great place to get introduced to any of these topics.</p>

<p>In brief, here is an overview of our various testing routines. Clicking on any of the tests below will take you to its respective page, where more detailed information can be found.</p>
  
<style type="text/css">

  #lab-list li {

    width: 100%;

    display: block;

    clear:both;

    overflow: hidden;

    margin: 10px 0;
 
                border: 1px solid #D6CDD0;

  }

        #lab-list li:hover {

                border: 1px solid #B23F33;

        }



  #lab-list li a {

    display: block;

    position: relative;

  }

        #lab-list li a:hover {

                color:#4B3C23;

        }

  #lab-list li img {

    float: left;

    width: 100px;

    top: 2px;

    position: relative;

  }

  #lab-list li h3, #lab-list li p {



    /* for borders */

    float: left;

    width: 430px;

    margin: 0;

                padding: 0;
  }

  #lab-list li h3 {
                
                color: #B23F33;

                font: normal 18px 'Oswald', Arial, sans-serif;

                padding-top: 3px;

  }

  #lab-list li p {

                padding-bottom: 3px;

  }

</style>



<ul id="lab-list">

  <li>

    <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php">

      <img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/dis.jpg" alt="">

      <h3>Display</h3>

      <p>Our Display test should help you get an idea of the luminosity generated by each tested display and the ratio between the brightest white and darkest black it can show. </p>

    </a>

  </li>



  <li>

    <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p7.php">

      <img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/loud.jpg" alt="">

      <h3>Speaker test</h3>

      <p>Our speaker loudness test was reimagined from the ground up in 2020. It allows you to listen to recordings of how the phone speakers sound, compare their loudness and frequency response.</p>

    </a>

  </li>



<li>

    <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p5.php">

      <img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/com.jpg" alt="">

      <h3>Photo/Video Compare</h3>

      <p>Our photo and video compare tools are designed to measure the performance of cameraphones. Both video and still images are taken under identical, controlled conditions in our studio, so you can easily see how different phones and tablets stack up.</p>

    </a>

  </li>



  <li>

    <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p6.php">

      <img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/bat.jpg" alt="">

      <h3>Battery life</h3>

      <p>Our final test measures the battery of a given device while performing the various tasks you would typically put it through. We measure talk time, browsing and video playback, then provide a general endurance rating based upon all three activities.</p>

    </a>

  </li>

</ul>

</div>

<div class="article-pages col">
  <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php"><strong class="next-page">Next Page »</strong>
  <span>2. Display tests: contrast and sunlight legibility</span></a>
  <a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php" class="faux-link"></a>
</div>

<div class="review-nav col row">
<div class="review-pages col col-4-5">
<div class="page-selected row no-push">
  <a title="1. Introduction"><strong>1. Introduction</strong></a>
</div>
<ol class="page-options col row no-push">

<li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#"><strong>1. Introduction</strong></a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php">2. Display tests: contrast and sunlight legibility</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p3.php">3. Speakerphone loudness (DISCONTINUED)</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p4.php">4. Audio output quality (DISCONTINUED)</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p5.php">5. Camera and video compare (UPDATED)</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p6.php">6. Battery life</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p7.php">7. Speaker test</a></li><li><a href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php">&nbsp;</a></li> <li><a href="https://www.gsmarena.com/reviewcomm-751.php">Review comments (160)</a></li>                 

</ol>
</div>
<div class="col col-1-5 pages-next-prev float-right">
<a class="disabled pages-prev" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#" title="Previous page"></a><a class="pages-next" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php" title="Next page"></a></div>
</div>
<br class="clear">

<div class="breadcrumbs">
    <a class="crumb" href="https://www.gsmarena.com/reviews.php3">Reviews</a>
    <i class="head-icon arrow"></i>
<span class="crumb">GSMArena feature labs</span>      
</div>

<div class="article-info-line article-info-line-standalone page-specs light pushT10">

<ul class="article-info-meta">



<li class="article-info-meta-link meta-link-opinions"><a href="https://www.gsmarena.com/reviewcomm-751.php"><i class="head-icon icon-comments"></i>Comments (160)</a></li> 
<br style="clear:both;">
</ul>
</div>


          
<div id="user-comments" class="box s3 nobg">
<h2><a href="https://www.gsmarena.com/reviewcomm-751.php">GSMArena feature labs: The tests - Reader comments</a></h2> 
 
<div class="user-thread">
<div class="uavatar"><span class="avatar-box" style="background-color: #549fc8">?</span></div>

<ul class="uinfo2"><li class="uname2">Anonymous</li>
<li class="ulocation">
<i class="head-icon icon-location"></i>
<span title="Encoded anonymized location">I@H</span></li>
<li class="upost"><time class="" data-time="2014-06-14 07:31">27 Jul 2024</time></li>

</ul>

<p class="uopin">@2023-10-07 18:24 from NMv</p>

<ul class="uinfo">
<li class="ureply">
<span title="Reply to this post">
<a href="https://www.gsmarena.com/postreviewcomment.php3?idReview=751&amp;idComment=397063">Reply</a></span>
</li>



</ul>


</div>
 
<div class="user-thread">
<div class="uavatar"><span class="avatar-box" style="background-color: #71a273">B</span></div>

<ul class="uinfo2"><li class="uname2">Broozur</li>
<li class="ulocation">
<i class="head-icon icon-location"></i>
<span title="Encoded anonymized location">sHw</span></li>
<li class="upost"><time class="" data-time="2014-06-14 07:31">18 May 2024</time></li>

</ul>

<p class="uopin">bring back color accuracy and headphone output testing! we have gaming phones to test output, crosstalk, &amp; distortion!</p>

<ul class="uinfo">
<li class="ureply">
<span title="Reply to this post">
<a href="https://www.gsmarena.com/postreviewcomment.php3?idReview=751&amp;idComment=392705">Reply</a></span>
</li>



</ul>


</div>
 
<div class="user-thread">
<div class="uavatar"><span class="avatar-box" style="background-color: #806cb1">?</span></div>

<ul class="uinfo2"><li class="uname2">Anonymous</li>
<li class="ulocation">
<i class="head-icon icon-location"></i>
<span title="Encoded anonymized location">vGM</span></li>
<li class="upost"><time class="" data-time="2014-06-14 07:31">20 Dec 2023</time></li>

</ul>

<p class="uopin">Is the colour accuracy test no longer a thing? 
 
The recent reviews sometimes have not been including the exact deltaE (average or maximum) values, and instead just mention whether a display is considered "good enough" in terms of colour...</p>

<ul class="uinfo">
<li class="ureply">
<span title="Reply to this post">
<a href="https://www.gsmarena.com/postreviewcomment.php3?idReview=751&amp;idComment=383156">Reply</a></span>
</li>



</ul>


</div>
 

<div class="sub-footer">
<div class="button-links">
<ul>
            
<li><a class="button" href="https://www.gsmarena.com/reviewcomm-751.php">Read all comments</a></li>

<li><a class="button" href="https://www.gsmarena.com/postreviewcomment.php3?idReview=751">Post your comment</a></li>
</ul>

</div>
<div id="opinions-total">Total reader comments: <b>160</b></div>
<br class="clear">
             
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
<div class="adv banner-mpu" adonis-marker="" data-pan-sizes="[[300,250]]">
<span class="ad-label">ADVERTISEMENT</span> 
<!-- /8095840/.2_A.34909.4_gsmarena.com_tier1 -->
<div id="div-gpt-ad-300x250atfgsmarenadesktop-0" style="height:250px; width:300px;"></div>
  </div>









<div class="adv"><span class="ad-label">ADVERTISEMENT</span>
<!-- /8095840/.2_A.35282.4_gsmarena.com_tier1 -->
<!-- 300x250mid-left-mpu -->
<div id="div-gpt-ad-300x250mid-left-mpugsmarenadesktop-0" style="height:250px; width:300px;"></div>
</div>

<div class="module reviews-xl-snazzy">
<h4 class="section-heading">Popular reviews</h4>

<a href="https://www.gsmarena.com/google_pixel_9_pro_xl-review-2738.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb xl-thumb-large" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/gsmarena_001.jpg" alt="Google Pixel 9 Pro XL review">
  <div class="module-review-xl-title">
    
    <strong>Google Pixel 9 Pro XL review</strong>
  </div>
</a>
<a href="https://www.gsmarena.com/google_pixel_9-review-2739.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb xl-thumb-large" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/gsmarena_001(1).jpg" alt="Google Pixel 9 review">
  <div class="module-review-xl-title">
    
    <strong>Google Pixel 9 review</strong>
  </div>
</a>
<a href="https://www.gsmarena.com/motorola_edge_50_and_50_neo_handson-review-2741.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb xl-thumb-large" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/gsmarena_000.jpg" alt="Motorola Edge 50 and Edge 50 Neo hands-on review">
  <div class="module-review-xl-title">
    
    <strong>Motorola Edge 50 and Edge 50 Neo hands-on review</strong>
  </div>
</a>

</div>

<link rel="stylesheet" href="./GSMArena feature labs_ The tests - GSMArena.com tests_files/arenaev-content.css">

<div class="module module-arenaev">
  <h4 class="section-heading">ELECTRIC VEHICLES</h4>
  <div class="arenaev-content">
<a href="https://www.arenaev.com/2025_byd_han_debuts_with_upgrades_and_price_cuts-news-3904.php" target="_blank">
            <span class="image-container"><img class="image" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/arenaev_001.jpg" alt="2025 BYD Han debuts with upgrades and price cuts">
            <span class="watermark"><img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/arenaevcolor-neg.svg"></span></span><span class="title">2025 BYD Han debuts with upgrades and price cuts</span>
          </a><a href="https://www.arenaev.com/toyota_inches_closer_to_solidstate_battery_production-news-3903.php" target="_blank"><span class="title">Toyota inches closer to solid-state battery production</span></a><a href="https://www.arenaev.com/skoda_unveils_sketches_of_the_elroq-news-3902.php" target="_blank"><span class="title">Skoda unveils sketches of the Elroq</span></a> </div>

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
     <img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/logo-gsmarena-com.png" alt="">
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


<script type="text/javascript" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/autocomplete.js.download"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function() 
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>















<div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">GSMArena feature labs: The tests</span><div class="logo" draggable="false"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#prev"></a><a class="go-right" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad"></div><div class="thumb-gallery"><a class="go-up" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/gsmarena_lab_tests-review-751.php#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><iframe name="__tcfapiLocator" style="display: none;" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/saved_resource(1).html"></iframe><img src="./GSMArena feature labs_ The tests - GSMArena.com tests_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;">

</template>