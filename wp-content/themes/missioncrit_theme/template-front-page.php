<?php

/* Template Name: Home

*/
get_header();  ?>

<div class="main">
  <div class="container">

    <!-- Hero -->
    <div class='hero' id="#home">
      <h1>REGISTRATION OPENS 3/5</h1>
      *social media links*
      <button>red button</button>
    </div>

    <!-- About  -->
    <div class='about' id="about-nav">
      <div class='aboutText'>
        <h3>about</h3>
        <p class='aboutContent'>
          <?php
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>

          <?php endwhile; ?>
        </p>
        <a href='#'>VIEW RACE HISTORY ></a>
      </div>
    </div>

    <!-- Instagram Content -->
    <div class='instagram'>
      <?php echo do_shortcode('[instagram-feed carouselrows=1]'); ?>
    </div>
    <div class='instagramLink'>
      <a href='https://www.instagram.com/missioncrit/'>FOLLOW ON INSTAGRAM ></a>
    </div>

    <!-- Race Results -->
    <div class='raceResults' id="race-nav">
      <h1>2017 Race Results</h1>
      <div class='raceTables'>

      <div class='resultsWomen'>
        <h3>Women</h3>
        <?php if(have_rows('women')):
          while (have_rows('women')) : the_row();
            $rank = get_sub_field('rank');
            $name = get_sub_field('name');
            $team = get_sub_field('team');
            $country = get_sub_field('country');

          ?>
          <table>
            <tr>
              <td>
                <?php echo $rank; ?>
              </td>
              <td>
                <?php echo $name; ?>
              </td>
              <td>
                <?php echo $team; ?>
              </td>
              <td>
                <?php echo $country; ?>
              </td>
            </tr>
          </table>
        <?php endwhile; ?>
        <?php endif; ?>
        <button>View Full Women's Race Results</button>
      </div>

      <div class='resultsMen'>
        <h3>Men</h3>
        <?php if(have_rows('men')):
          while (have_rows('men')) : the_row();
            $rank = get_sub_field('rank');
            $name = get_sub_field('name');
            $team = get_sub_field('team');
            $country = get_sub_field('country');

          ?>

          <table>
            <tr>
              <td>
                <?php echo $rank; ?>
              </td>
              <td>
                <?php echo $name; ?>
              </td>
              <td>
                <?php echo $team; ?>
              </td>
              <td>
                <?php echo $country; ?>
              </td>
            </tr>
          </table>
        <?php endwhile; ?>
        <?php endif; ?>
        <button>View Full Men's Race Results</button>
      </div>
    </div>
    </div>

    <!-- Sponsers -->
    <div class='sponsors' id="partners-nav">
      <h1>SPONSORS</h1>
      <?php if(get_field('sponsor')): ?>

        	<ul>

        	<?php while(has_sub_field('sponsor')):
            $image = get_sub_field('image')
            ?>
            <img src='<?php echo $image['url']; ?>'>

        	<?php endwhile; ?>

        	</ul>

        <?php endif; ?>
    </div>

    <!-- Contact -->
    <div class='contact' id="contact-nav">
      <h1>CONTACT</h1>
      <div class='contactContent'>
        <!-- <?php echo do_shortcode('[contact-form-7 id="122" title="Contact form 1"]'); ?> -->

        <form action="https://formspree.io/info@missioncrit.com" method="POST">
          <input type="text" name="name" placeholder="Name">
          <input type="email" name="_replyto" placeholder="Email">
          <textarea name='message' placeholder='Message'></textarea>
          <input type="submit" value="Send">
        </form>
      <div class='sponserVolunteer'>

      <div class='sponsorsContact'>
        <h3> SPONSOR</h3>
        <p>Wanna help blow up our shit? Email us at</p>
        <a href='mailTo'>sponsors@missioncrit.com</a>
      </div>
      <div class='volunteerContact'>
        <h3>VOLUNTEER</h3>
        <p>
          Want to show your appreciation by donating labor or advice? Let us know how you can help or email us directly at <a href="mailTo">volunteer@missioncrit.com</a>
        </p>
      </div>
    </div>
    </div>
      <div class='mainlingList'>
        <p>
          Sign up for the mailing list to get updates about the race/rad bike stuff/etc.
        </p>
        <form action="https://formspree.io/info@missioncrit.com" method="POST">
          <input type="email" name="_replyto" placeholder='Email'>
          <input type="submit" value="Send">
</form>

        <!-- <?php echo do_shortcode('[contact-form-7 id="123" title="Mailing List"]'); ?> -->
      </div>
    </div>
    <div class="content">
    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php
get_footer();

?>
