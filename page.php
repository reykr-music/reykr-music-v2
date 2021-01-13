<?php get_header();  ?>

<div class="wrapper">

  <!-- Music section -->
  <h2 id="music"><?php the_field('music_section_header') ?></h2>
  <ul class="music">

    <!-- Album 1 -->
    <li data-aos="flip-left" data-aos-easing="ease-in-out">
      <?php
        $album_1_cover = get_field('album_1_cover');
        if( $album_1_cover ) { ?>
          <img src="<?php echo $album_1_cover['url']; ?>" alt="<?php echo $album_1_cover['alt']; ?>" />
      <?php } ?>

      <?php the_field('album_1_spotify') ?>
    </li>

    <!-- Album 2 -->
    <li data-aos="flip-right" data-aos-easing="ease-in-out">
      <?php
        $album_2_cover = get_field('album_2_cover');
        if( $album_2_cover ) { ?>
          <img src="<?php echo $album_2_cover['url']; ?>" alt="<?php echo $album_2_cover['alt']; ?>" />
      <?php } ?>

      <?php the_field('album_2_spotify') ?>
    </li>

    <!-- Album 3 -->
    <li data-aos="flip-left" data-aos-easing="ease-in-out">
      <?php
        $album_3_cover = get_field('album_3_cover');
        if( $album_3_cover ) { ?>
          <img src="<?php echo $album_3_cover['url']; ?>" alt="<?php echo $album_3_cover['alt']; ?>" />
      <?php } ?>

      <?php the_field('album_3_spotify') ?>
    </li>
  </ul>

  <!-- Bio -->
  <section class="bio" id="bio" data-aos="flip-right" data-aos-easing="ease-in-out">
    <h2><?php the_field('about_section_header') ?></h2>
    <div class="bioPhotoContainer">
      <?php
        $about_image = get_field('about_image');
        if( $about_image ) { ?>
          <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
      <?php } ?>
    </div>
    <p><?php the_field('about_text') ?></p>
  </section>

</div>

<?php get_footer(); ?>