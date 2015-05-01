
<!--  http://nelog.jp/social-share-links -->
<!-- http://weboook.blog22.fc2.com/blog-entry-399.html -->
<div id='social_menu'>
  <ul>
    <li>
      <a href="http://b.hatena.ne.jp/entry/<?php the_permalink () ?>" target="_blank">
        <img src="<?php bloginfo ('template_url');?>/myimages/hatebu_button.png" alt="Hatena" />
      </a>
    </li>
    <li>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink () ?>&t=<?php the_title () ?>"  target="_blank">
        <img src="<?php bloginfo ('template_url');?>/myimages/facebook_button.png" alt="FaceBook" />
      </a>
    </li>
    <li>
      <a href="http://twitter.com/share?text=<?php the_title () ?>&url=<?php the_permalink () ?>" target="_blank">
        <img src="<?php bloginfo ('template_url');?>/myimages/tweet_button.png" alt="Twitter" />
      </a>
    </li>
    <li>
      <a href="https://getpocket.com/edit?url=<?php the_permalink () ?>" target="_blank">
        <img src="<?php bloginfo ('template_url');?>/myimages/pocket_button.png" alt="Pocket" />
      </a>
    </li>
  </ul>
</div>

<p style="clear:both"></p> 

<style type="text/css">
 #social_menu li {
   list-style:none;
   float: left;
 }
</style>
