<article class="post-home" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <h2 class="post-home__title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <div class="post-home__content"><?php the_excerpt(); ?></div>
</article>
