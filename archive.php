<?php get_header(); ?>
<section class="wrap">
  <h1><?php single_cat_title(); ?></h1>
  <div class="grid-cards">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article class="card">
        <a href="<?php the_permalink(); ?>">
          <?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 18); ?></p>
        </a>
      </article>
    <?php endwhile; endif; ?>
  </div>
  <?php the_posts_pagination(); ?>
</section>
<?php get_footer(); ?>

