<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/landing.css?ver=21231231222229" type="text/css" media="all">
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="<?php bloginfo('charset'); ?>">

</head>

<body <?php body_class(); ?>>
  <div class="landing-page">
    <?php $header_logo = get_field('header_logo'); ?>
    <?php $header_phone = get_field('header_phone'); ?>
    <?php $header_location = get_field('header_location'); ?>
    <?php $header_mail = get_field('header_mail'); ?>
    <header class="landing-header">
      <div class="landing-header__container landing-container">
        <?php if ($header_logo) : ?>
          <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" class="landing-header__logo" />
        <?php endif; ?>
        <div class="landing-header__contacts">
          <a href="<?php echo $header_phone['url']; ?>" class="landing-header__item landing-header__item_phone">
            <svg>
              <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#phone"></use>
            </svg>
            <span><?php echo $header_phone['title']; ?></span>
          </a>
          <div class="landing-header__item landing-header__item_location">
            <svg>
              <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#location"></use>
            </svg>
            <span><?php echo $header_location; ?></span>
          </div>
          <a href="<?php echo $header_mail['url']; ?>" class="landing-header__item landing-header__item_mail">
            <svg>
              <use href="<?php echo get_stylesheet_directory_uri(); ?>/sprite/sprite.svg#mail"></use>
            </svg>
            <span><?php echo $header_mail['title']; ?></span>
          </a>
        </div>
      </div>
    </header>