<?php // Template name: Landing page 
?>

<?php get_header('landing'); ?>

<main>
  <?php $hero_bg = get_field('hero_bg'); ?>
  <?php $hero_content = get_field('hero_content'); ?>
  <?php $hero_form_title = get_field('hero_form_title'); ?>
  <?php $hero_form_body = get_field('hero_form_body'); ?>
  <section id="hero" class="landing-hero" style="background-image: url(&quot;<?php echo $hero_bg; ?>&quot;)">
    <div class="landing-hero__container landing-container">
      <?php if ($hero_content) : ?>
        <div class="landing-hero__content">
          <?php echo $hero_content; ?>
        </div>
      <?php endif; ?>
      <div class="landing-hero__form">
        <?php if ($hero_form_title) : ?>
          <h2 class="landing-hero__form-title"><?php echo $hero_form_title; ?></h2>
        <?php endif; ?>
        <?php if ($hero_form_body) : ?>
          <div class="landing-hero__form-body">
            <?php echo $hero_form_body; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php $stats = get_field('stats'); ?>
  <div class="landing-stat">
    <div class="landing-stat__container">
      <?php foreach ($stats as $item) : ?>
        <div class="landing-stat__item">
          <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" class="landing-stat__item-image" />
          <span class="landing-stat__item-desc"><?php echo $item['desc']; ?></span>
          <span class="landing-stat__item-term"><?php echo $item['term']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php $cta_image = get_field('cta_image'); ?>
  <?php $cta_content = get_field('cta_content'); ?>
  <section class="landing-cta">
    <div class="landing-cta__container landing-container">
      <?php if ($cta_image) : ?>
        <div class="landing-cta__image">
          <img src="<?php echo $cta_image['url']; ?>" alt="<?php echo $cta_image['alt']; ?>" />
        </div>
      <?php endif; ?>
      <?php if ($cta_content) : ?>
        <div class="landing-cta__content">
          <?php echo $cta_content; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php $services_header = get_field('services_header'); ?>
  <?php $services_list = get_field('services_list'); ?>
  <?php $services_link = get_field('services_link'); ?>
  <section class="landing-services">
    <div class="landing-services__container landing-container">
      <?php if ($services_header) : ?>
        <div class="landing-services__header">
          <?php echo $services_header; ?>
        </div>
      <?php endif; ?>
      <div class="landing-services__list">
        <?php foreach ($services_list as $item) : ?>
          <div class="landing-services__item">
            <img
              loading="lazy"
              src="<?php echo $item['image']['url']; ?>"
              alt="<?php echo $item['image']['alt']; ?>"
              class="landing-services__item-image" />
            <h3 class="landing-services__item-title"><?php echo $item['title']; ?></h3>
          </div>
        <?php endforeach; ?>
      </div>
      <?php if ($services_link) : ?>
        <a href="<?php echo $services_link['url']; ?>" class="landing-services__link landing-button"><?php echo $services_link['title']; ?></a>
      <?php endif; ?>
    </div>
  </section>

  <?php $expertise_title = get_field('expertise_title'); ?>
  <?php $expertise_items = get_field('expertise_items'); ?>
  <section class="landing-expertise">
    <div class="landing-expertise__container landing-container">
      <?php if ($expertise_title) : ?>
        <h2 class="landing-expertise__title"><?php echo $expertise_title; ?></h2>
      <?php endif; ?>
      <div class="landing-expertise__row">
        <?php foreach ($expertise_items as $image) : ?>
          <div class="landing-expertise__item">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php $rows_title = get_field('rows_title'); ?>
  <?php $rows_list = get_field('rows_list'); ?>
  <?php $rows_bg = get_field('rows_bg'); ?>
  <section class="landing-rows">
    <div class="landing-rows__container landing-container">
      <?php if ($rows_title) : ?>
        <h2 class="landing-rows__title"><?php echo $rows_title; ?></h2>
      <?php endif; ?>
      <div class="landing-rows__list" style="background-image: url(&quot;<?php echo $rows_bg; ?>&quot;)">
        <?php foreach ($rows_list as $item) : ?>
          <div class="landing-rows__item">
            <div class="landing-rows__item-content">
              <?php echo $item['content']; ?>
            </div>
            <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" loading="lazy" class="landing-rows__item-image" />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php $reviews = get_field('reviews'); ?>
  <section class="landing-rewiews">
    <div class="landing-rewiews__container landing-container">
        <h2 class="landing-rewiews__title">Reviews</h2>
      <div class="landing-rewiews__slider swiper" id="reviews-slider">
        <div class="landing-rewiews__slider-wrapper swiper-wrapper">
          <?php foreach ($reviews as $item) : ?>
            <div class="landing-rewiews__slide swiper-slide">
              <div class="landing-rewiews__slide-header">
                <svg
                  class="landing-rewiews__slide-avatar"
                  width="50"
                  height="50"
                  viewBox="0 0 50 50"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="50" height="50" rx="25" fill="white" />
                  <path
                    d="M39.1892 47.9729V45.6358C39.1892 42.3636 39.1892 40.7276 38.5422 39.4778C37.9731 38.3784 37.0649 37.4846 35.9479 36.9244C34.6781 36.2876 33.0158 36.2876 29.6911 36.2876H20.9846C17.6599 36.2876 15.9976 36.2876 14.7278 36.9244C13.6108 37.4846 12.7027 38.3784 12.1335 39.4778C11.4865 40.7276 11.4865 42.3636 11.4865 45.6358V47.9729M32.2635 21.6811C32.2635 25.4457 29.1628 28.4975 25.3379 28.4975C21.5129 28.4975 18.4122 25.4457 18.4122 21.6811C18.4122 17.9165 21.5129 14.8647 25.3379 14.8647C29.1628 14.8647 32.2635 17.9165 32.2635 21.6811Z"
                    stroke="#263B5E"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
                <div class="landing-rewiews__slide-info">
                  <svg
                    class="landing-rewiews__slide-rating"
                    width="112"
                    height="16"
                    viewBox="0 0 112 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.61566 1.67518C7.99094 0.964306 9.00906 0.964308 9.38434 1.67518L10.769 4.29808C10.9191 4.58245 11.1968 4.77729 11.5153 4.82166L14.4896 5.23605C15.3259 5.35257 15.6502 6.38909 15.0296 6.96156L12.9613 8.86922C12.7102 9.10081 12.5947 9.44456 12.6549 9.78079L13.1472 12.5259C13.2919 13.3328 12.4574 13.9615 11.7217 13.5998L8.94118 12.2329C8.66296 12.0961 8.33704 12.0961 8.05882 12.2329L5.27829 13.5998C4.54256 13.9615 3.70812 13.3328 3.85282 12.5259L4.34505 9.78079C4.40534 9.44456 4.28983 9.10081 4.03874 8.86922L1.97045 6.96156C1.34976 6.38909 1.67414 5.35257 2.51044 5.23605L5.48467 4.82166C5.80317 4.77729 6.08089 4.58245 6.23102 4.29808L7.61566 1.67518Z"
                      fill="#3D57F4" />
                    <path
                      d="M24.6157 1.67518C24.9909 0.964306 26.0091 0.964308 26.3843 1.67518L27.769 4.29808C27.9191 4.58245 28.1968 4.77729 28.5153 4.82166L31.4896 5.23605C32.3259 5.35257 32.6502 6.38909 32.0296 6.96156L29.9613 8.86922C29.7102 9.10081 29.5947 9.44456 29.6549 9.78079L30.1472 12.5259C30.2919 13.3328 29.4574 13.9615 28.7217 13.5998L25.9412 12.2329C25.663 12.0961 25.337 12.0961 25.0588 12.2329L22.2783 13.5998C21.5426 13.9615 20.7081 13.3328 20.8528 12.5259L21.3451 9.78079C21.4053 9.44456 21.2898 9.10081 21.0387 8.86922L18.9704 6.96156C18.3498 6.38909 18.6741 5.35257 19.5104 5.23605L22.4847 4.82166C22.8032 4.77729 23.0809 4.58245 23.231 4.29808L24.6157 1.67518Z"
                      fill="#3D57F4" />
                    <path
                      d="M41.1044 1.80245C41.4721 1.06239 42.5279 1.06239 42.8956 1.80245L44.1281 4.28322C44.2737 4.57628 44.5535 4.77956 44.8772 4.82748L47.6175 5.23313C48.4349 5.35414 48.7612 6.35818 48.171 6.93657L46.1925 8.87542C45.9588 9.10447 45.8519 9.43338 45.9064 9.75606L46.3673 12.4875C46.5049 13.3024 45.6508 13.9229 44.9183 13.5403L42.463 12.2578C42.1729 12.1063 41.8271 12.1063 41.537 12.2578L39.0817 13.5403C38.3492 13.9229 37.4951 13.3024 37.6327 12.4875L38.0936 9.75606C38.1481 9.43338 38.0412 9.10447 37.8075 8.87542L35.829 6.93657C35.2388 6.35818 35.5651 5.35414 36.3825 5.23313L39.1228 4.82748C39.4465 4.77956 39.7263 4.57628 39.8719 4.28322L41.1044 1.80245Z"
                      fill="#3D57F4" />
                    <path
                      d="M57.6157 1.67518C57.9909 0.964306 59.0091 0.964308 59.3843 1.67518L60.769 4.29808C60.9191 4.58245 61.1968 4.77729 61.5153 4.82166L64.4896 5.23605C65.3259 5.35257 65.6502 6.38909 65.0296 6.96156L62.9613 8.86922C62.7102 9.10081 62.5947 9.44456 62.6549 9.78079L63.1472 12.5259C63.2919 13.3328 62.4574 13.9615 61.7217 13.5998L58.9412 12.2329C58.663 12.0961 58.337 12.0961 58.0588 12.2329L55.2783 13.5998C54.5426 13.9615 53.7081 13.3328 53.8528 12.5259L54.3451 9.78079C54.4053 9.44456 54.2898 9.10081 54.0387 8.86922L51.9704 6.96156C51.3498 6.38909 51.6741 5.35257 52.5104 5.23605L55.4847 4.82166C55.8032 4.77729 56.0809 4.58245 56.231 4.29808L57.6157 1.67518Z"
                      fill="#3D57F4" />
                    <path
                      d="M74.6157 1.67518C74.9909 0.964306 76.0091 0.964308 76.3843 1.67518L77.769 4.29808C77.9191 4.58245 78.1968 4.77729 78.5153 4.82166L81.4896 5.23605C82.3259 5.35257 82.6502 6.38909 82.0296 6.96156L79.9613 8.86922C79.7102 9.10081 79.5947 9.44456 79.6549 9.78079L80.1472 12.5259C80.2919 13.3328 79.4574 13.9615 78.7217 13.5998L75.9412 12.2329C75.663 12.0961 75.337 12.0961 75.0588 12.2329L72.2783 13.5998C71.5426 13.9615 70.7081 13.3328 70.8528 12.5259L71.3451 9.78079C71.4053 9.44456 71.2898 9.10081 71.0387 8.86922L68.9704 6.96156C68.3498 6.38909 68.6741 5.35257 69.5104 5.23605L72.4847 4.82166C72.8032 4.77729 73.0809 4.58245 73.231 4.29808L74.6157 1.67518Z"
                      fill="#3D57F4" />
                  </svg>
                  <h3 class="landing-rewiews__slide-name"><?php echo $item['name']; ?></h3>
                </div>
              </div>
              <p class="landing-rewiews__slide-text">
                <?php echo $item['text']; ?>
              </p>
              <p class="landing-rewiews__slide-date"><?php echo $item['date']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="landing-rewiews__pagination"></div>
    </div>
  </section>

  <?php $bottom_content = get_field('bottom_content'); ?>
  <?php $bottom_image = get_field('bottom_image'); ?>
  <?php $bottom_link = get_field('bottom_link'); ?>
  <?php $bottom_phone = get_field('bottom_phone'); ?>
  <?php $bottom_location = get_field('bottom_location'); ?>
  <?php $bottom_mail = get_field('bottom_mail'); ?>
  <section class="landing-bottom">
    <div
      class="landing-bottom__container landing-container"
      style="
              background-image: url(&quot;<?php echo $bottom_image; ?>&quot;);
            ">
      <div class="landing-bottom__content">
        <?php if ($bottom_content) : ?>
          <div class="landing-bottom__content-info">
            <?php echo $bottom_content; ?>
          </div>
        <?php endif; ?>

        <div class="landing-bottom__content-contacts">
          <a href="<?php echo $bottom_phone['url']; ?>" class="landing-bottom__content-contact">
            <svg>
              <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#phone"></use>
            </svg>
            <span><?php echo $bottom_phone['title']; ?></span>
          </a>
          <div class="landing-bottom__content-contact">
            <svg>
              <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#location"></use>
            </svg>
            <span><?php echo $bottom_location; ?></span>
          </div>
          <a href="<?php echo $bottom_mail['url']; ?>" class="landing-bottom__content-contact">
            <svg>
              <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#mail"></use>
            </svg>
            <span><?php echo $bottom_mail['title']; ?></span>
          </a>
        </div>
        <?php if ($bottom_link) : ?>
          <a href="<?php echo $bottom_link['url']; ?>" class="landing-button"><?php echo $bottom_link['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer('landing'); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landing.js?ver=21231231222229"></script>