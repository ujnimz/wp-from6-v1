<!-- HEADER START -->
<?php $header = get_fields( 'option' );
$footer = get_field('social_links', 'option');
$current_lang = 'en';
if ( IS_PLL_ENABLE ) :
  $current_lang = pll_current_language();
endif;
$header_logo_key  = 'header_logo_' . $current_lang; ?>
<header class="header" id="header">
  <div class="top-header">
    <a href="<?php echo home_url(); ?>" class="header-logo">
      <img src="<?php echo $header[$header_logo_key]['url']; ?>" class="header-logo-image" alt="From6">
    </a>

    <!-- <div class="search-box bree100">
      <input type="text" placeholder=" "/><span></span>
    </div> -->
  </div>
    

    <nav id="bt-menu" class="bt-menu">
      <a href="#" id="bt-menu-trigger" class="bt-menu-trigger <?php if ( is_front_page() ) : echo 'white-trigger'; endif; ?>"><span>&nbsp;</span></a>
      <?php
        $main_menu_font = 'menu-upper '.$header['main_menu_font'].' nav-'.$header['main_menu_font_color'].' nav-'.$header['main_menu_font_hover_color'];
        wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul', 'menu_class' => $main_menu_font ) );
      ?>
      <ul id="menu-bottom-menu" class="menu-bottom <?php print $header['header_contact_font'] ?>">
        <li><a class="fsix-icon-email <?php print $header['header_contact_icons_color'].' '.$header['header_contact_icons_hover_color'].' '.$header['header_contact_font_color'].' '.$header['header_contact_font_hover_color']; ?>" href="mailto:info@from6.com"><span><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-email"></use></svg></span> <?php print $header['email_address'] ?> </a></li>
        <li><a class="fsix-icon-telephone <?php print $header['header_contact_icons_color'].' '.$header['header_contact_icons_hover_color'].' '.$header['header_contact_font_color'].' '.$header['header_contact_font_hover_color']; ?>" href="tel:<?php print trim(preg_replace('/[^0-9]/', '', $header['telephone_number'])) ?>"><span><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-mobile"></use></svg></span> <?php print $header['telephone_number'] ?> </a></li>
        <li>
          <ul>
            <li><a class="social-media fsix-icon-instagram <?php print $header['header_social_icons_color'].' '.$header['header_social_icons_hover_color']; ?>" href="<?php print $footer['instagram_link'] ?>"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-instagram"></use></svg></a></li>
            <li><a class="social-media fsix-icon-facebook <?php print $header['header_social_icons_color'].' '.$header['header_social_icons_hover_color']; ?>" href="<?php print $footer['facebook_link'] ?>"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-facebook"></use></svg></a></li>
            <li><a class="social-media fsix-icon-linkedin <?php print $header['header_social_icons_color'].' '.$header['header_social_icons_hover_color']; ?>" href="<?php print $footer['linkedin_link'] ?>"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-linkedin"></use></svg></a></li>
            <li><a class="social-media fsix-icon-twitter <?php print $header['header_social_icons_color'].' '.$header['header_social_icons_hover_color']; ?>" href="<?php print $footer['twitter_link'] ?>"><svg width="50" height="50" role="presentation" aria-hidden="true"><use xlink:href="#icon-twitter"></use></svg></a></li>
          </ul>
        </li>
      </ul>
    </nav>
  
</header>
<!-- HEADER END -->

<!-- HERO START -->
<?php
    if ( has_post_thumbnail() ) : 
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
      <div class="hero_image_wrapper">
        <div class="hero_image"><img class="resposive_image" src="<?php echo $featured_img_url; ?>" alt="Hero" /></div>
      </div>
    <?php endif; ?>
  <!-- HERO END -->
