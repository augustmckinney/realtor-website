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
          <p>Image File or Video goes Here</p>
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

    <section class="members">
      <h1><?php the_field('members'); ?></h1>
      <h3><?php the_field('members_subtitle'); ?></h3>
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
        <div class="three-column">
          <p>Stat 1</p>
        </div>
        <div class="three-column">
          <p>Stat 2</p>
        </div>
        <div class="three-column">
          <p>Stat 3</p>
        </div>
        <div class="three-column">
          <p>Stat 4</p>
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
