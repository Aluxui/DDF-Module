<h2>
  <?php echo $title; ?>
</h2>
<?php

  foreach($news as $news_item):
    echo 
      '<h3>'.$news_item['title'].'</h3>'.
      '<div class="main">'.$news_item['text'].'</div>'.
      '<p><a href="'.site_url('news/'.$news_item['slug']).'">View Article</a></p>'
      ;
  endforeach;

?>