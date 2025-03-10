<?php $footer_logo = get_field('footer_logo'); ?>
<?php $footer_phone = get_field('footer_phone'); ?>
<?php $footer_location = get_field('footer_location'); ?>
<?php $footer_mail = get_field('footer_mail'); ?>
<?php $socials = get_field('socials'); ?>

<footer class="landing-footer">
  <div class="landing-footer__container landing-container">
    <?php if ($footer_logo) : ?>
      <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" class="landing-footer__logo" />
    <?php endif; ?>
    <div class="landing-footer__contacts">
      <a href="<?php echo $footer_phone['url']; ?>" class="landing-footer__contact">
        <svg>
          <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#phone"></use>
        </svg>
        <span><?php echo $footer_phone['title']; ?></span>
      </a>
      <div class="landing-footer__contact">
        <svg>
          <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#location"></use>
        </svg>
        <span><?php echo $footer_location; ?></span>
      </div>
      <a href="<?php echo $footer_mail['url']; ?>" class="landing-footer__contact">
        <svg>
          <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#mail"></use>
        </svg>
        <span><?php echo $footer_mail['title']; ?></span>
      </a>
    </div>
    <div class="landing-footer__socials">
      <?php foreach ($socials as $item) : ?>
        <a target="_blank" href="<?php echo $item['link']['url']; ?>" title="<?php echo $item['link']['title']; ?>">
          <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" />
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</footer>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landing.js?ver=21231231222229"></script>
<?php wp_footer(); ?>
</body>

</html>