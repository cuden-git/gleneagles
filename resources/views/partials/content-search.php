<article class="search-results__item">
  <header>
    <h2 class="search-results__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="search-results__excerpt">
    <?php the_excerpt(); ?>
  </div>
</article>

<template id="search-result-template" style="display:none">
  <article class="search-results__item">
    <header>
      <h2 class="search-results__item-title"><a class="search-results__item-link" href=""></a></h2>
    </header>
    <div class="search-results__excerpt">
    </div>
  </article>
</template>