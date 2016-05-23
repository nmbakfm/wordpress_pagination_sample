<?php
//Pagenation
function pagination($opt = []){
  //表示するページ数
  $settings = array_merge(['first' => true, 'last' => true, 'range' => 2, 'total' => null], $opt);
  $range = $settings['range'];
  $item_num = ($range * 2)+1;

  //現在のページ
  global $paged;

  //デフォルトのページ
  if(empty($paged)) $paged = 1;

  // 全ページ数が指定されていない場合の処理
  $total = $settings['total'];
  if(is_null($total)){
    global $wp_query;

    //全ページ数
    $total = $wp_query->max_num_pages;

    //全ページ数が空の場合は、1ページのみ
    if(!$total){
      $total = 1;
    }
  }

  //全ページ数が1でない場合、ページネーションを表示する
  if($total != 1){
    include('views/pagination/pagination.php');
  }
}
