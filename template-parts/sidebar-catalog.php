<?php
$args = array(
  
  'hide_empty' => 0,
  'show_count' => 0,
  'taxonomy' => 'asgproductcat',
  'title_li' => '',
  'exclude_tree' => '10, 6, 26, 7, 9',
);
?>
<div class="sidebar-catalog">
  <ul class="ul-clean">
    <?php 
      wp_list_categories($args);
    ?>
  </ul>
</div>