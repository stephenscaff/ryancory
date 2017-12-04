<?php
/**
 * JS Template for Photos
 *
 * The section for Related Posts.
 *
 * @author    Stephen Scaff
 * @package   jumpoff/content/posts-related
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<template id ="photo-template">
  <article class="photo">
    <a class="photo__link">
        <figure class="photo__figure">
          <span class="photo__scaler">
            <img class="photo__img"/>
          </span>
        </figure>
      <header class="photo__header">
        <h3 class="photo__title"></h3>
        <i class="photo__icon icon-chev-right"></i>
      </header>
    </a>
  </article>
</template>
