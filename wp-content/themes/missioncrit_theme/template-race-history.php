<?php

/* Template Name: Race History

*/
get_header();  ?>

<div class="main">
  <div class="container">
    <p class='pageContent'>
      <?php
        if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

      <?php endwhile; ?>
    </p>
    <?php
      if(have_rows('race_years')):

      while (have_rows('race_years')) : the_row();
        $racePoster = get_sub_field('race_poster');
        $raceTitle = get_sub_field('race_year_title');
        $link = get_sub_field('race_page_link');
      ?>
      <div class="individualRaces">
        <div class="racePoster">
          <img src='<?php echo $racePoster['url']; ?>'>
          <div class="raceTitleLink">
          <a href='<?php echo $link; ?>'><?php echo $raceTitle; ?></a>
          </div>

        </div>

      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php
get_footer();

?>
