<?php
/**
 * Custom Home Page
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <section class="slider">
        <h1>Slider Goes Here</h1>
      </section>

    <section class="about">
      <h1><?php the_field('about'); ?></h1>
      <h4><?php the_field('about_subtitle'); ?></h4>
      <div class="left-column">
        <p><?php the_field('about_copy'); ?></p>
      </div>
      <div class="right-column">
        <p>Image File or Video goes Here</p>
      </div>
    </section>

    <section class="campaigns">
      <h1><?php the_field('campaigns'); ?></h1>
      <h4><?php the_field('campaings_subtitle'); ?></h4>
      <div>
        <p>Featured campaigns here</p>
      </div>
    </section>

    <section class="help-us">
      <h1><?php the_field('help'); ?></h1>
      <h4><?php the_field('help_subtitle'); ?></h4>
      <div class="3-column">
        <p>Card 1</p>
      </div>
      <div class="3-column">
        <p>Card 2</p>
      </div>
      <div class="3-column">
        <p>Card 3</p>
      </div>
    </section>

    <section class="member">
      <h1><?php the_field('member'); ?></h1>
      <h4><?php the_field('member_subtitle'); ?></h4>
    </section>

    <section class="events">
      <h1><?php the_field('events'); ?></h1>
      <h4><?php the_field('events_subtitle'); ?></h4>
    </section>

    <section class="stats">
    <p>Stats here</p>
    </section>

    <section class="sponsors">
      <h1><?php the_field('sponsors'); ?></h1>
      <h4><?php the_field('sponsors_subtitle'); ?></h4>
    </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
