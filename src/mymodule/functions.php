
function ($class-type) {
  <div class=$class-type>
    <!-- もしサムネイルがなければスキップ -->
    <?php if (!has_post_thumbnail ()) { ?>
    <a href="<?php the_permalink () ?>" title="<?php the_title_attribute (); ?>">
      <img src="http://hmi-me.ciao.jp/futurismo_dev/wp-content/uploads/2015/04/2015-04-30-145319_366x251_scrot.png">
    </a>
    
    <!-- もし白銀比に切り抜けなければスキップ -->      
    <?php } elseif (!has_thumbnail_silver_ratio ()) { ?>
    <a href="<?php the_permalink () ?>" title="<?php the_title_attribute (); ?>">
      <img src="http://hmi-me.ciao.jp/futurismo_dev/wp-content/uploads/2015/04/2015-04-30-145319_366x251_scrot.png">
    </a>
    <?php } else { ?> 
    <a href="<?php the_permalink () ?>" title="<?php the_title_attribute (); ?>"><?php echo the_post_thumbnail (index); ?></a>
    <?php } ?>
    <div id="img-box-mini"><h2><?php the_title (); ?></h2></div>
  </div>
}
#+end?_src

** 単体記事

#+begin_src php :tangle yes
<?php
//---------------------------------------------------------------------------
//	タイトルに空白が 2 つあったら, 改行コードに置き換える.
//  http://wadajuku.jp/archives/szk/20130927-2
//---------------------------------------------------------------------------
function my_get_title_with_space_replace () {
  $title = get_the_title ($ID);
  $title = str_replace ("  ", "<br />", $title);
  echo $title;
}

//---------------------------------------------------------------------------
//	画像は白銀比のサムネイルに切りぬき可能か?
//  http://kotori-blog.com/wordpress/eyecatch_info/
//---------------------------------------------------------------------------
function has_thumbnail_silver_ratio () {
  $thumb_id = get_post_thumbnail_id ();// サムネイルの ID を取得
  $image_src = wp_get_attachment_image_src ($thumb_id, true);// 画像の URL を取得
  
  $width = $image_src[1];
  $height = $image_src[2];

  if ($height > $width) {
    return false;
  }
  
  return ($height * 1.414) < $width;
}

?> 
