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



<script type="text/javascript" src="./Privacy Policy - GSMArena.com_files/misc.js.download"></script>



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

<object type="image/svg+xml" data="./Privacy Policy - GSMArena.com_files/logo.svg"><img src="./Privacy Policy - GSMArena.com_files/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a>
</div>



<div id="nav" role="main">
<form action="https://www.gsmarena.com/res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off">
    
    <span id="quick-search-button">
      <input type="submit" value="Go">
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>
    

<div class="autocomplete autocomplete-search autocomplete-small autocomplete-hide"><div class="reviews-results float-left"><span class="autocomplete-desc">Reviews</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/privacy-policy.php3#">More review results</a></li></ul></div><div class="phone-results"><span class="autocomplete-desc">Last visited</span><ul class="autocomplete-last-searched"><li class="permanent" style="display: none;"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/privacy-policy.php3#">More device results</a></li></ul></div><div class="news-results float-left"><span class="autocomplete-desc">News</span><ul><li class="permanent"><a class="more-news-link more-news-link-small" href="https://www.gsmarena.com/privacy-policy.php3#">More news results</a></li></ul></div></div><div class="search-buttons" style="display: none;"><a class="go" href="https://www.gsmarena.com/privacy-policy.php3#">Go</a><a class="advanced" href="https://www.gsmarena.com/search.php3">Advanced</a></div></form>
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


  <a href="https://www.gsmarena.com/privacy-policy.php3#" onclick="return false;" class="login-icon" id="login-active">
    <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
  </a>

  <span class="tooltip" id="login-popup2">
<form action="https://www.gsmarena.com/login.php3" method="post">
<input type="Hidden" name="sSource" value="MG9tdml%2BfGYyb3BzdnxmMW93byw%3D">  
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


  <!-- 
  Routes 
  <ul id="menu" class="main-menu-list">
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

<div class="main main-review main-faq l-box col float-right">  


<style>
.review-background {
    background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/privacy-policy.jpg');
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
        <h1 class="article-info-name">Privacy Policy</h1>
    </div>
</div>
<div class="article-info-line">
    <div class="blur bottom"></div>        <ul class="article-info-meta">
        </ul>
    </div>
</div>
</div>
</div>


<div id="review-body" class="review-body clearfix">


<div>

<h3>GSMArena Privacy Policy and Cookie Statement</h3>

<p><b>Last Updated:</b> April 24, 2024</p>

<p>We updated our privacy policy to include additional information required under applicable data protection regulations - including the European Union's General Data Protection Regulation (GDPR) - including the following:</p>

<ul class="article-blurb">
<li>Why we process personal data</li>
<li>Legal grounds for processing personal data</li>
<li>European Union user rights under the GDPR and how to exercise them
</li>
</ul>


<hr>


<h3>Privacy Policy</h3>

<p>Your privacy is of the utmost importance to us here at GSMArena. We collect and retain the minimum personal data needed so we can deliver the best possible experience to you.</p>

<p>Submission of personal information is not required to browse GSMArena.com. Furthermore, we discourage disclosure of any of your personal addresses, emails or phone numbers when interacting with our readers in the comments and opinion sections of GSMArena.com.</p>

<p>The purpose of our Privacy Policy is to detail what personal data we obtain, how we obtain it and why. Also, it describes your rights and the options we provide for you to access, update or otherwise take control of your personal data that we retain and process.</p>

<p>To jump to a specific section of this Privacy Policy, please click on a link below:</p>

<p style="border:1px; border-style:solid; border-color:green; padding: 1em;"><b>Jump to</b><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#cat">Categories of Personal Data processed by GSMArena</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#auto">Automatically collected information</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#cookies">Cookies and similar technologies</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#third">Third parties</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#public">Public Information</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#children">Children</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#datasec">Data Security</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#retention">Retention of Personal Data</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#access">Accessing and modifying your personal information</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#transfer">Transfers of Personal Data</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#rights">Your Rights</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#updates">Updates to our Privacy Policy</a><br>
<a href="https://www.gsmarena.com/privacy-policy.php3#cookiestatement">Cookie Statement</a><br>


</p><h3 id="cat">Categories of Personal Data processed by GSMArena</h3>

<p>Purposes and legal grounds</p>

<p><b>Personal Data that is processed when you create a GSMArena account:</b></p>

<p>To create an account with GSMArena, you provide your <i>email address</i>, <i>nickname</i>, and a chosen <i>password</i>.</p>

<p><b>(1)</b> GSMArena processes your <i>email address</i> and your chosen <i>password</i> when you sign in to your GSMArena account. The legal ground for GSMArena to process and retain your <i>email address</i> and <i>password</i> is to ensure the security of your GSMArena account.</p>

<p>We do not send promotional emails. However, we may send you service-related emails to the account provided. If you no longer wish to receive these emails, you may opt out of them by deleting your GSMArena account.</p>

<p><b>(2)</b> GSMArena processes your <i>nickname</i> when you post comments and opinions. The legal ground for GSMArena to process and retain your <i>nickname</i> is to provide you the facility to engage with other GSMArena users. Your <i>nickname</i> will be removed from ALL your previous posts when you delete your GSMArena account, rendering them anonymous. Your comments, including your <i>nickname</i>, may still be searchable in search engines due to the nature of caching and may be visible for a period following exercising your right to erasure.</p>

<p><b>Personal Data that is processed when you modify your GSMArena account:</b></p>

<p><b>(1)</b> GSMArena processes your optionally provided <i>Gravatar email address</i> when you post comments and opinions. The legal ground for GSMArena to process and retain your <i>Gravatar email address</i> is to provide you the facility to personalize your posts when engaging with other GSMArena users. Your avatar will be removed from ALL your previous posts when you delete your GSMArena account, rendering them anonymous.</p>

<p><b>Additional Personal Data that is processed when you post Comments or Opinions:</b></p>

<p><b>(1)</b> GSMArena processes your <i>IP address</i> when you post comments and opinions. The legal ground for GSMArena to process and retain your <i>IP address</i> is to provide moderated comments and opinions forums devoid of abusive or "spam"-like behavior.</p>

<p><b>Personal Data that is processed when you communicate with our support representatives:</b></p>

<p><b>(1</b>) GSMArena processes your <i>email address</i> when interacting with our support representatives. The legal ground for GSMArena to process and retain your <i>email address</i> is to provide a seamless and high-quality support experience.</p>


<hr>


<h3 id="auto">Automatically collected information</h3>

<p>When you visit GSMArena.com, we may automatically record certain information from the User's or Visitor's device by using various types of technology, including cookies, "clear gifs" or "web beacons". This "automatically collected" information may include IP address or other device address or ID, web browser and/or device type, the web pages or sites visited just before or just after visiting GSMArena.com, the pages or other content the User or Visitor views or interacts with on GSMArena.com, and the dates and times of the visit, access, or use of GSMArena.com.</p>

<p>We use this information to improve your experience with GSMArena.com. Furthermore, we use this information to promote safety and security by monitoring suspicious activity or violations of our terms and policies. Such processing is based on our legitimate interest in helping ensure the safety of our services.</p>

<p>If you would like to learn more about what options you have about limiting the gathering of information by third-party ad networks, you can consult the website of the <a href="http://optout.networkadvertising.org/?c=1#!/" target="_blank" rel="noopener noreferrer">Network Advertising Initiative</a>.</p>


<hr>



<h3 id="cookies">Cookies and similar technologies</h3>

<p>In compliance with the European Union legislation, we inform you that our website GSMArena.com uses cookies and similar technologies to store some information about your preferences how the website looks and operates. We never store any personal data in our cookies.</p>

<p>You can remove or reject cookies using your browser or device's settings. If you do this, however, you may have to manually adjust some preferences every time you visit GSMArena.com, and some services and features may not work.</p>

<p>Please read our <a href="https://www.gsmarena.com/privacy-policy.php3#cookiestatement">Cookie Statement</a> to learn more about how we use cookies and the options you have.</p>

<hr>

<h3 id="third">Third parties</h3>

<p><b>(1)</b> Google: Google Analytics helps us analyze how visitors use GSMArena.com. It counts the number of visitors and tells us things about their overall behavior - such as the typical length of stay on the site or the average number of pages a user views. Information collected via Google Analytics is aggregated anonymously and contains no personal data. To learn more about <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener noreferrer">Google Analytics Privacy</a> and how to opt-out of having your data used by Google Analytics <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">click here</a>.</p>

<p><b>(2)</b> Azerion: GSMArena.com has authorized Azerion as its advertising partner to carry out the processing of Personal Data via pixel and similar technologies for the following purposes:</p>
<ul>
<li>Determining the interest segments of end users based on the pages they’ve accessed on GSMArena.com and sharing them with advertisers selected by GSMArena.</li>
<li>Providing reports and insights on the audiences who visit GSMArena.com.</li>
</ul>

<p>Processing of Personal Data by Azerion includes any operation such as collection, recording, organization, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination, or otherwise making available of the data. 
The types of Personal Data collected by Azerion include online identifiers such as IP addresses, user agents, HTTP header data, and interest segments about end users who access pages and information on GSMArena.com.</p>

<p>Azerion is authorized to engage third parties (such as Amazon Web Services) for carrying out the processing of Personal Data for the purposes listed above.</p>


<p><b>(3)</b> Third-party websites, products &amp; services: GSMArena.com may contain links to or the ability for you to access third-party websites, products and services. We are not responsible for the privacy practices undertaken by those third parties, nor are we responsible for the information or content their products and services contain. This Privacy Policy applies solely to information collected by GSMArena.com. We recommend that you read the privacy policies of any third parties before using their websites, products or services.</p>

<hr>



<h3 id="public">Public Information</h3>

<p><b>(1)</b> Posts made within the Comments &amp; Opinions sections are public including your GSMArena nickname and your avatar. When another GSMArena user selects your nickname within Comments and Opinions, they can also view your Favorite phones and your recent posts. Your nickname and avatar will be removed from ALL your previous posts when you delete your GSMArena account rendering them anonymous. Additionally, your list of Favorite phones will also be deleted.</p>


<hr>




<h3 id="children">Children</h3>

<p>Submission of personal information is not required to browse GSMArena.com anonymously.</p>

<p>To create an account with GSMArena, individuals must be 16 years of age or older. If we discover that we have collected the personal data from a child under the age of 16, we will take steps to delete the information as soon as possible. If you know of or have reason to believe anyone under the age of 16 has provided us with any personal data, please contact us.</p>

<hr>

<h3 id="datasec">Data Security</h3>

<p>GSMArena.com stores all website data within the European Union. Furthermore, all personal information and backups are encrypted.</p>

<p>GSMArena.com follows accepted industry standards to protect the information submitted to us, both during transmission and once we receive it. GSMArena.com maintains appropriate administrative, technical and physical safeguards to protect Personal Data against accidental or unlawful destruction, accidental loss, unauthorized alteration, unauthorized disclosure or access, misuse, and any other unlawful form of processing of the Personal Data in our possession. This includes, for example, firewalls, password protection and other access and authentication controls. We use SSL technology to encrypt data during transmission through public internet, and we also employ application-layer security features to further anonymize Personal Data.</p>

<p>However, no method of transmission over the Internet, or method of electronic storage, is 100% secure. GSMArena.com cannot ensure or warrant the security of any information you transmit to us or store on the Service, and you do so at your own risk. GSMArena.com also cannot guarantee that such information may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards. If you believe your Personal Data has been compromised, please contact us immediately.</p>

<p>If GSMArena.com learns of a security systems breach, we will inform you and the authorities of the occurrence of the breach in accordance with applicable laws.</p>

<hr>

<h3 id="retention">Retention of Personal Data</h3>

<p>During the creation of a GSMArena account, your email address, nickname, and password will only be retained if you respond within 1 hour to the confirmation email sent to the email address provided during registration. If no response is received after 1 hour, your email address, nickname, and password will be permanently deleted from our systems.</p>

<p>We will retain your personal data for as long as we consider your GSMArena account to be active. Also, see below under "Your Rights" for a description of your right of erasure.</p>

<p>In the case of our web server logs, any personal information will be deleted after 24 hours.</p>

<hr>

<h3 id="access">Accessing and Modifying Your Personal Information</h3>

<p>If you've created an account with GSMArena, you can access and modify your personal information and preferences by visiting your user account. </p>

<hr>



<h3 id="transfer">Transfers of Personal Data</h3>

<p>We do not sell our users' private personal data.</p>

<p>We only share information about you in the limited circumstances detailed below with appropriate safeguards on your privacy:</p>

<p><b>(1)</b> As required by law: We may have to disclose information about you in response to a court order or other governmental requests.</p>

<p><b>(2)</b> Business transfers: In connection with any merger, sale of company assets, or acquisition of all or a portion of our business by another company, or in the unlikely event that GSMArena goes out of business or enters bankruptcy. If any of these events are realized, this Privacy Policy continues to apply to your personal data, the party receiving your personal data may continue to use your personal data but only consistent with this Privacy Policy.</p>


<hr>



<h3 id="rights">Your Rights</h3>

<p>If you reside in the European Union, under the General Data Protection Regulation, you have the right to:</p>

<ul class="article-blurb">
<li>Access, correct or delete your personal information that we have collected.
</li><li>Receive your personal information in a structured and standard machine readable format.
</li><li>Object to, and restrict, the further processing of your personal information.
</li><li>Lodge a complaint with a supervisory authority.
</li></ul>


<p>To gain access to, correct, restrict, suspend processing or erasure of your personal data, or to delete your GSMArena user account, visit your user account.</p>

<p>If you reside in the European Union and you wish to exercise your right to the restriction of processing or your right to object to processing, contact Arena Kom OOD, by email at <a href="mailto:support@gsmarena.com">support@gsmarena.com</a>.</p>



<hr>



<h3 id="updates">Updates to our Privacy Policy</h3>

<p>Our Privacy Policy will be updated as we add new features to GSMArena.com and as new technologies are introduced. Also, revisions to the law will also warrant changes to our Privacy Policy.</p>

<p>When significant changes are undertaken, or if we are required by law, we will provide notice of the changes on GSMArena.com.</p>

<p>The date that our Privacy Policy was updated can be found at the top of this page.</p>


<hr>



<h3 id="cookiestatement">Cookie Statement</h3>

<p><b>Last Updated:</b> May 24, 2018</p>

<p>In compliance with the European Union legislation, we inform you that our website GSMArena.com will store some information about your preferences inside a tiny text file called a 'cookie'.</p>

<p>A cookie is a small piece of data, which a website asks your browser to store on your computer or mobile device. The cookie allows the website to "remember" your actions or preferences over time.</p>

<p>You can delete all cookies that are already on your computer, and you can set most browsers to prevent them from being saved. If you do this, however, you may have to manually adjust some preferences every time you visit a site, and some services and functionality may not work.</p>

<p>GSMArena.com uses cookies to:</p>

<ul class="article-blurb">
<li>Identify you as a returning user and count your visits in our traffic statistics analysis.</li>
<li>Remember your display preferences.</li>
<li>Remember the last 5 phones/devices that you searched for in our search field.</li>
<li>Provide additional usability features, including the state of the GSMArena sub-menu and whether you've already given your consent to use cookies.</li>
</ul>

<p>Enabling cookies from GSMarena.com is not strictly necessary for the website to work, but it will provide you with a better browsing experience.</p>

<p>The cookie-related information is not used to identify you personally, and the content is fully under our control. These cookies are not used for any purpose other than those described here.</p>

<h3>Third Party Cookies</h3>

<p>There may also be other types of cookies created after you've visited our website.</p>

<p>We use Google Analytics, a popular web analytics service provided by Google, Inc. Google Analytics uses cookies to help us analyze how users use the site. It counts the number of visitors and tells us things about their behavior overall - such as the typical length of stay on the site or the average number of pages a user views.</p>

<p>The information generated by the cookie about your use of our website (including your IP address) will be transmitted to and stored by Google on servers in the United States. Google will use this information for the purpose of evaluating your use of our website, compiling reports on website activity and providing other services relating to website activity and internet usage.</p>

<p>Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google's behalf. Google undertakes not to associate your IP address with any other data held by Google.</p>

<h3>Third Party Ad Servers</h3>

<p>We may have third-party advertising companies serving ads to you when you visit our website. These companies may store information about your visits to our website and to other websites to provide you with relevant advertisements about goods and services.</p>

<p>These companies may employ cookies and other identifiers to measure advertising effectiveness. The information is generally not personally identifiable unless, for example, you provide personally identifiable information to them through an ad or an e-mail message.</p>

<p>If you would like to learn more about what options you have about limiting the gathering of information by third-party ad networks, you can consult the website of the <a href="http://optout.networkadvertising.org/?c=1#!/" target="_blank" rel="noopener noreferrer">Network Advertising Initiative</a>.</p>

<p>You can opt out of participating in interest-based advertising networks but opting out does not mean you will no longer receive online advertising. It just means that the companies from which you opted out will no longer customize ads based on your interests and web usage patterns using cookie-based technology.</p>

<p>Please review the privacy policy of our advertising partners:<br>
<a href="https://www.pubgalaxy.com/privacy-policy/" target="_blank" rel="noopener noreferrer">PubGalaxy (Titan Gate AD)</a></p>

<h3>Controlling and opting out of cookies</h3>

<p>Your browser or device may offer settings that allow you to choose whether browser cookies are set and to delete them.  For more information about these controls and to exercise your cookie preferences, visit your browser or device's help material.  If you choose to reject cookies, as noted above, you may not be able to use certain features of our websites and services.</p>

<p>A third-party website called <a href="https://www.aboutcookies.org/" target="_blank" rel="noopener noreferrer">aboutcookies.org</a> has been set up to help you with instructions how you can do that on various browsers.</p>

<h3>Do Not Track</h3>

<p>Some browsers include the ability to transmit "Do Not Track" signals.  We do not process or respond to "Do Not Track" signals.  Instead, we adhere to the standards described in our Privacy Statement and this Cookie Statement.</p>


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



</aside>

</div><!-- id body -->
</div><!-- id outer -->




<div id="footer">
 <div class="footer-logo">
     <img src="./Privacy Policy - GSMArena.com_files/logo-gsmarena-com.png" alt="">
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


<script type="text/javascript" src="./Privacy Policy - GSMArena.com_files/autocomplete.js.download"></script>
<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function() 
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>














<iframe name="__tcfapiLocator" style="display: none;" src="./Privacy Policy - GSMArena.com_files/saved_resource.html"></iframe><iframe name="__uspapiLocator" style="display: none;" src="./Privacy Policy - GSMArena.com_files/saved_resource(1).html"></iframe><div class="image-gallery" style="display: none;" draggable="false"><div class="top-row" draggable="false"><div class="header" draggable="false"><span class="title" draggable="false">Privacy Policy</span><div class="logo" draggable="false"></div><div class="ad-top" id="crt-1097675" draggable="false"></div></div><div class="buttons"><div class="gbutton zoom" title="Zoom in"></div><a class="gbutton new-tab" title="Open image in new tab" target="_blank"></a><input type="checkbox" id="gallery-share-checkbox"><label class="gbutton share" title="Share image" for="gallery-share-checkbox"><span class="share-panel"><a class="facebook" title="Share on Facebook"><i class="head-icon icon-soc-fb2"></i></a><a class="twitter" title="Share on Twitter"><i class="head-icon icon-soc-twitter2"></i></a></span></label><div class="gbutton close" title="Close gallery"></div></div></div><div class="bottom-row"><div class="left-column"><div class="image-container"><div class="second image"></div><div class="image"><div class="map" style="display: none;"><div class="view"></div></div></div><div class="next-prev"><a class="go-left" href="https://www.gsmarena.com/privacy-policy.php3#prev"></a><a class="go-right" href="https://www.gsmarena.com/privacy-policy.php3#next"></a></div></div></div><div class="right-column"><div class="image-details"><span class="image-text"></span><span class="image-count"></span></div><div class="ad"></div><div class="thumb-gallery"><a class="go-up" href="https://www.gsmarena.com/privacy-policy.php3#up">▲</a><div class="thumbs"></div><a class="go-down" href="https://www.gsmarena.com/privacy-policy.php3#down">▼</a></div></div></div><div class="multipic" draggable="false"><div class="left" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="right" draggable="false"><img class="preview"><img draggable="false"><span class="label"></span></div><div class="lock" draggable="false" title="Unlock to align images separately"></div></div></div><img src="./Privacy Policy - GSMArena.com_files/favicon.ico" style="display: none !important; width: 1px !important; height: 1px !important;">


</template>