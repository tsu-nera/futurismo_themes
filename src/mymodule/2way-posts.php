<div id="my-post">
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="my-article-box">
      <! -- 記事1つめ --> 
      <div class="my-article1">
        <?php if(!has_post_thumbnail() || !has_thumbnail_silver_ratio()) { ?>
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <img src="<?php bloginfo('template_url');?>/myimages/futurismo-logo.png" alt="Futurismo-Logo" />
          </a>
        <?php } else { ?>            
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php echo the_post_thumbnail(index); ?></a>
        <?php } ?>
        <div id="img-box-mini">
          <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>></a>
            <a href='http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>'><img src='http://b.hatena.ne.jp/entry/image/<?php the_permalink(); ?>' alt='' /></a>
          </h2>
        </div>        
      </div>
      
      <! -- 記事2つめ -->
      <?php  the_post(); ?>      
      
      <div class="my-article2">
        <?php if(!has_post_thumbnail() || !has_thumbnail_silver_ratio()) { ?>
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <img src="<?php bloginfo('template_url');?>/myimages/futurismo-logo.png" alt="Futurismo-Logo" />
          </a>
        <?php } else { ?>            
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php echo the_post_thumbnail(index); ?></a>
        <?php } ?>
        <div id="img-box-mini">
          <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>></a>
            <a href='http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>'><img src='http://b.hatena.ne.jp/entry/image/<?php the_permalink(); ?>' alt='' /></a>
          </h2>
        </div>        
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
