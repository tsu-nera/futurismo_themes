
<!-- header menu --> 
<div class='sticky_sns'>
  <div id='sticky_footer'>
    <ul id='social_icons'>
      <li><a href="http://futurismo.biz/"><img src="<?php bloginfo ('template_url'); ?>/myimages/home.png" alt="Home" /></a></li>
      <li><a href="https://twitter.com/tsu_nera"><img src="<?php bloginfo ('template_url'); ?>/myimages/twitter.png" alt="Twitter" /></a></li>
      <li><a href="https://github.com/tsu-nera"><img src="<?php bloginfo ('template_url'); ?>/myimages/github.png" alt="gtihub" /></a></li>
      <li><a href="http://futurismo.biz/feed"><img src="<?php bloginfo ('template_url'); ?>/myimages/feed.png" alt="RSS" /></a></li>
    </ul>

    <!-- Google serch -->
    <div class='google_search'>
      <form action="http://www.google.co.jp/cse" id="cse-search-box">
        <input type="hidden" name="cx" value="partner-pub-8186728334774578:7098896614" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="text" class="focus" name="q" size="40"/>
        <!-- <input type="submit" name="sa" value="検索" /> -->
      </form>
      <!-- <script type="text/javascript" src="http://www.google.co.jp/coop/cse/brand?form=cse-search-box&amp;lang=ja"></script> -->
    </div>
    <!-- Google Search End -->
  </div>
</div>
<!-- header menu end --> 

<style type="text/css">
 .sticky_sns {
   border: 1px solid rgba (0, 0, 0, 0.3);
   background: url (./images/common/bg-dot.png) #333;
   top: 0;
   height: 40px;
   position: fixed;
   width: 100%;
   z-index: 310;
 }

 #sticky_footer {
   background: url (./images/common/bg-dot.png) #333;
   top: 0;
   height: 35px;
   margin: 0 auto;
   padding: 0 10px;
   width: 1100px;
   z-index: 900;
 }

 /* Social Icons */
 #sticky_footer #social_icons {
   float: left; /* social icons positions */
   margin-top: 5px;
   padding: 0;
   width: auto;
   overflow:hidden;
 }

 #sticky_footer #social_icons li {
   margin-right:5px; /* 12px is the space between each one of them */
   margin-top: 1px; /* 12px is the space between each one of them */
   float: left;
   list-style:none;
   _margin-right:0px; /* this is for IE6 only */
   z-index: 999;
 }

 #sticky_footer #social_icons img {
   width: 30px;
   height: 30px;
   background: #fff;
   z-index: 999;
 }

 /*  Google Custom Search Settings */
 .google_search {
   float: left;
   margin: 5px auto;
   overflow: hidden;
   width: 140px;
 }

 #cse-search-box div {
   padding: 0 !important;
 }

 #cse-search-box input[type="text"] {
   font-size: 14px;
   height: 30px;

   padding: 0 !important;
   width: 130px;
   
   border-radius: 5px 5px 5px 5px;
   -moz-border-radius: 5px 5px 5px 5px;
   -webkit-border-radius: 5px 5px 5px 5px;
   box-shadow: 0 0 5px #dddddd;
   -moz-box-shadow: 0 0 5px #dddddd;
   -webkit-box-shadow: 0 0 5px #dddddd;
 }

 #cse-search-box input[type="submit"] {
   background: url ("<?php bloginfo ('template_url'); ?>/images/icon/search.png") no-repeat scroll 50% 50% #f9f9f9;
   border: 0 none;
   margin: 0 0 -10px -27px;
   overflow: hidden;
   text-indent: -9999px;
   -webkit-appearance: none;
   width: 30px;
   height: 30px;
   z-index: 999;
   margin-top: 5px;
 }
</style>   
