<div id="header-navi">
  <ul>
    <li><a href="http://futurismo.biz/">ホーム</a></li>
    <li><a href="http://hmi-me.ciao.jp/futurismo_dev/sample-page">ハッカー未来派宣言</a></li>
    <li><a href="http://hmi-me.ciao.jp/futurismo_dev/sitemaps">過去記事一覧</a></li>
  </ul>
</div>

<style type="text/css">
 /*
    グローバルナビ
    http://www.keni-customize.net/keni-header-globalnavi-1280/
  */

 #header-navi{
   float: right;
   border: 1px solid #FFF;
   border-radius:5px;
   -webkit-border-radius:5px;
   -moz-border-radius:5px;
   margin-top: 40px;
 }

 #header-navi:after{
   clear: both;
 }

 #header-navi ul{
   overflow: hidden;
   list-style: none;
 }

 #header-navi ul li{
   float: left;
   border-right: 1px solid #FFF;
 }

 #header-navi ul li:last-child{
   border-right: none;
 }

 #header-navi ul li a{
   position: relative;
   display: block;
   height: 4.0em;
   line-height: 4.0em;
   padding: 0 2.0em;
   border-right:1px solid #FFF;
   text-decoration: none;
   color: #FFF;
   transition: color .3s ease 0;
   -webkit-transition: color .3s ease 0;
   -moz-transition: color .3s ease 0;
   -ms-transition: color .3s ease 0;
   -o-transition: color .3s ease 0;
   z-index:0
 }

 #header-navi ul li a:hover{
   color: #333333;
   text-decoration: none;
 }

 #header-navi ul li:last-child a{
   border-right: none;
 }

 #header-navi ul li a::before{
   position: absolute;
   content: "";
   width: 100%;
   height: 0;
   top: 0;
   left: 0;
   background-color: #FFF;
   transition: height 0.3s ease 0s;
   -webkit-transition: height 0.3s ease 0s;
   -moz-transition: height 0.3s ease 0s;
   -ms-transition: height 0.3s ease 0s;
   -o-transition: height 0.3s ease 0s;
   z-index: -1
 }

 #header-navi ul li a:hover::before{
   height: 100%
 }

</style>       
