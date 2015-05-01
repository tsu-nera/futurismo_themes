<div id="my-post">
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="my-article-box">
      <! -- 記事1 --> 
      <div class="my-article1">
        <?php if(!has_post_thumbnail()) { ?>
          <p><img src="http://hmi-me.ciao.jp/futurismo_dev/wp-content/uploads/2015/04/2015-04-30-145319_366x251_scrot.png"></p>                      
        <?php } elseif (!has_thumbnail_silver_ratio()) { ?>
            <p><img src="http://hmi-me.ciao.jp/futurismo_dev/wp-content/uploads/2015/04/2015-04-30-145319_366x251_scrot.png"></p>                        
        <?php } else { ?>            
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php echo the_post_thumbnail(index); ?></a>
        <?php } ?>
        <div id="img-box-mini"><h2><?php the_title(); ?></h2></div>
      </div>
      <! -- 記事2 -->
      <?php  the_post(); ?>      
      
      <div class="my-article2">
        <?php if(!has_post_thumbnail()) { ?>
          <p><img src="http://hmi-me.ciao.jp/futurismo_dev/wp-content/uploads/2015/04/2015-04-30-145319_366x251_scrot.png"></p>
        <?php } elseif (!has_thumbnail_silver_ratio()) { ?>
            <p><img src="http://hmi-me.ciao.jp/futurismo_dev/wp-content/uploads/2015/04/2015-04-30-145319_366x251_scrot.png"></p>            
        <?php } else { ?>            
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php echo the_post_thumbnail(index); ?></a>
        <?php } ?>
        <div id="img-box-mini"><h2><?php the_title(); ?></h2></div>
      </div>
      <! -- 記事 おわり--> 
    </div>              
  <?php endwhile;
  pager_keni();
  ?>
  
</div>  


<style type="text/css">

 #my-post .my-article-box{
   overflow: hidden;
   margin-right: -20px;
   margin-bottom: 40px;  
 }

 #my-post .my-article1,
 #my-post .my-article2 {
   position: relative;
   
   float: left;
   width: 540px;
   margin-right: 20px;
 }

 #img-box-mini {
   position: absolute;
   bottom: 20px;
   left: 0px;
   width:100%;
   /*   color: #fff !important; */
   /*   background-color: #000 !important; */
 }

 #img-box-text {
   text-align: center;
   width: 100%;
   /*   font-size: 24px !important; */
 }
</style>
