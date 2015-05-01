<?php
//---------------------------------------------------------------------------
//	タイトルに空白が2つあったら、改行コードに置き換える.
//  http://wadajuku.jp/archives/szk/20130927-2
//---------------------------------------------------------------------------
function my_get_title_with_space_replace() {
  $title = get_the_title($ID);
  $title = str_replace("  ", "<br />", $title);
  echo $title;
}

//---------------------------------------------------------------------------
//	画像は白銀比のサムネイルに切りぬき可能か？
//  http://kotori-blog.com/wordpress/eyecatch_info/
//---------------------------------------------------------------------------
function has_thumbnail_silver_ratio() {
  $thumb_id = get_post_thumbnail_id();//サムネイルのIDを取得
  $image_src = wp_get_attachment_image_src($thumb_id, true);//画像のURLを取得
  
  $width = $image_src[1];
  $height = $image_src[2];

  if ($height > $width) {
    return false;
  }
  
  return ($height * 1.414) < $width;
}

?> 
