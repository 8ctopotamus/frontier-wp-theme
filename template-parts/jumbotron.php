<?php
  $backgroundImageUrl = get_the_post_thumbnail_url(null, 'full');
  $backgroundImageStyle = '';
    
  if ($backgroundImageUrl) {
    $backgroundImageStyle = 'style="background-image: url(' . $backgroundImageUrl . ');"';
  }
?>

<div class="jumbotron text-center parallax page-header" <?php echo $backgroundImageStyle; ?>>
  <div class="container">
    <header class="entry-header">
      <?php
        if (is_home() && !is_front_page()): 
          echo '<h1 class="entry-title display-2">Frontier News</h1>';
        else:
          the_title( '<h1 class="entry-title display-2">', '</h1>' ); 
        endif;  
      ?>
    </header><!-- .entry-header -->
  </div>
</div>