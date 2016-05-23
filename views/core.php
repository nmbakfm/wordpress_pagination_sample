<?php

if($paged > 1){
  if($settings['first']) include 'first.php';
  include 'prev.php';
}

for ($target_page=1; $target_page <= $total; ++$target_page){
  if ($total <= $item_num || abs($paged-$target_page) < $range+1 ){
    if($paged == $target_page){
      include 'active.php';
    } else {
      include 'page.php';
    }
  }
}

if ($paged < $total){
  include 'next.php';
  if($settings['last']) include 'last.php';
}

?>
