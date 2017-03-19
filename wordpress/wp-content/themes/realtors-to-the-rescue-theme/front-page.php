<?php
/**
 * Custom Home Page
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main homepage" role="main">
      <section class="slider" style="background-color: green;height: 100vh">
        <p>Slider Goes Here</p>
      </section>

    <section class="about">
      <h1><?php the_field('about'); ?></h1>
      <h3><?php the_field('about_subtitle'); ?></h3>
      <div class="row">
        <div class="left-column">
          <p><?php the_field('about_copy'); ?></p>
        </div>
        <div class="right-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/dog-cat.png" alt="dog cat image" />
        </div>
      </div>
    </section>

    <section class="campaigns">
      <h1><?php the_field('campaigns'); ?></h1>
      <h3><?php the_field('campaings_subtitle'); ?></h3>
      <div>
        <p>Featured campaigns here</p>
      </div>
    </section>

    <section class="help">
      <h1><?php the_field('help'); ?></h1>
      <h3><?php the_field('help_subtitle'); ?></h3>
      <div class="row">
        <div class="three-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/donation_icon_green.png" alt="donate icon" />
        </div>
        <div class="three-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/member_icon_green.png" alt="member icon" />
        </div>
        <div class="three-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/sponsor_icon_green.png" alt="sponsor icon" />
        </div>
      </div>
      <div class="row">
        <div class="three-column box">
          <p><strong><?php the_field('box_1_title'); ?></strong></p>
          <p><?php the_field('box_1_copy'); ?></p>
          <p><a href="/donate">SEE MORE</a></p>
        </div>
        <div class="three-column box">
          <p><strong><?php the_field('box_2_title'); ?></strong></p>
          <p><?php the_field('box_2_copy'); ?></p>
          <p><a href="/volunteer">SEE MORE</a></p>
        </div>
        <div class="three-column box">
          <p><strong><?php the_field('box_3_title'); ?></strong></p>
          <p><?php the_field('box_3_copy'); ?></p>
          <p><a href="/sponsors">SEE MORE</a></p>
        </div>
      </div>
    </section>

    <section class="members">
      <h1><?php the_field('members'); ?></h1>
      <p><?php the_field('members_copy'); ?></p>
      <p><a href="/join"><button>Join Us</button></a></p>
    </section>

    <section class="events">
      <h1><?php the_field('events'); ?></h1>
      <h3><?php the_field('events_subtitle'); ?></h3>
      <div class="row">
        <div class="three-column">
          <p>Card 1</p>
        </div>
        <div class="three-column">
          <p>Card 2</p>
        </div>
        <div class="three-column">
          <p>Card 3</p>
        </div>
      </div>
    </section>

    <section class="stats">
      <div class="row">
        <div class="four-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/icon_dollar.png" alt="dollar icon" />
          <h5><?php the_field('stat_1'); ?></h5>
          <p><?php the_field('stat_1_detail'); ?></p>
        </div>
        <div class="four-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/icon_suitcase.png" alt="suitcase icon" />
          <h5><?php the_field('stat_2'); ?></h5>
          <p><?php the_field('stat_2_detail'); ?></p>
        </div>
        <div class="four-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/icon_smile.png" alt="smile icon" />
          <h5><?php the_field('stat_3'); ?></h5>
          <p><?php the_field('stat_3_detail'); ?></p>
        </div>
        <div class="four-column">
          <img src="wp-content/themes/realtors-to-the-rescue-theme/img/icon_heart.png" alt="heart icon" />
          <h5><?php the_field('stat_4'); ?></h5>
          <p><?php the_field('stat_4_detail'); ?></p>
        </div>
      </div>
    </section>

    <section class="sponsors">
      <h1><?php the_field('sponsors'); ?></h1>
      <h3><?php the_field('sponsors_subtitle'); ?></h3>
    </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
