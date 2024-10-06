<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sushi-itto
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class("bg-dark"); ?>>
	<header id="masthead" class="absolute w-full z-50">
    <div class="max-w-screen-lg lg:w-11/12 mx-auto px-8">
      <div class="flex items-center justify-between h-12 lg:h-20 bg-blue rounded-b-2xl lg:rounded-b-3xl px-6 w-full">
        <nav class="flex items-center space-x-4">
          <a href="mailto:contacto@peatec.mx" class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24" class="block w-6 h-6"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#ffffff" d="M20 4a2 2 0 0 1 1.995 1.85L22 6v12a2 2 0 0 1-1.85 1.995L20 20H4a2 2 0 0 1-1.995-1.85L2 18V6a2 2 0 0 1 1.85-1.995L4 4zm0 3.414l-6.94 6.94a1.5 1.5 0 0 1-2.12 0L4 7.414V18h16zM18.586 6H5.414L12 12.586z"/></g></svg>
            <span class="hidden md:block">contacto@peatec.mx</span>
          </a>
          <a href="tel:+525576510896" class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24" class="block w-6 h-6"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="#ffffff" d="M5 5a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3zm3-1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm1.5 2a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1m1 11.5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0"/></g></svg>
            <span class="hidden md:block">(55) 7651 0896</span>
          </a>
        </nav>
        <nav class="flex items-center space-x-3">
          <span>Síguenos</span>
          <a href="https://www.facebook.com/" target="_blank">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 10.0251C20 4.49123 15.52 0 10 0C4.48 0 0 4.49123 0 10.0251C0 14.8772 3.44 18.9173 8 19.8496V13.0326H6V10.0251H8V7.5188C8 5.58396 9.57 4.01003 11.5 4.01003H14V7.01754H12C11.45 7.01754 11 7.46867 11 8.02005V10.0251H14V13.0326H11V20C16.05 19.4987 20 15.2281 20 10.0251Z" fill="white"/>
            </svg>
          </a>
          <a href="">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.34 5.22656H7.65999C6.32666 5.22656 5.23999 6.31323 5.23999 7.64656V12.3266C5.23999 13.6599 6.32666 14.7466 7.65999 14.7466H12.34C13.6733 14.7466 14.76 13.6599 14.76 12.3266V7.64656C14.76 6.31323 13.6733 5.22656 12.34 5.22656ZM10.0467 12.8732C8.45332 12.8732 7.15999 11.5799 7.15999 9.98656C7.15999 8.39323 8.45332 7.0999 10.0467 7.0999C11.64 7.0999 12.9333 8.39323 12.9333 9.98656C12.9333 11.5799 11.64 12.8732 10.0467 12.8732ZM13.1 7.59323C12.72 7.59323 12.4133 7.28656 12.4133 6.90656C12.4133 6.52656 12.72 6.2199 13.1 6.2199C13.48 6.2199 13.7867 6.52656 13.7867 6.90656C13.7867 7.28656 13.48 7.59323 13.1 7.59323Z" fill="white"/>
              <path d="M10.0467 8.1333C9.02668 8.1333 8.20001 8.95997 8.20001 9.97997C8.20001 11 9.02668 11.8266 10.0467 11.8266C11.0667 11.8266 11.8933 11 11.8933 9.97997C11.8933 8.95997 11.0667 8.1333 10.0467 8.1333Z" fill="white"/>
              <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM15.86 12.3267C15.86 14.2667 14.28 15.8467 12.34 15.8467H7.66C5.72 15.8467 4.14 14.2667 4.14 12.3267V7.64667C4.14 5.70667 5.72 4.12667 7.66 4.12667H12.34C14.28 4.12667 15.86 5.70667 15.86 7.64667V12.3267Z" fill="white"/>
            </svg>
          </a>
        </nav>
      </div>
    </div>
    <div class="max-w-screen-lg md:w-11/12 mx-auto">
      <div class="flex items-center justify-between">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?= $custom_logo_url[0]; ?>" /></a>
        <button id="toggle-navigation" aria-controls="site-navigation" aria-expanded="false">
          <span class="close">
            <?php for ($item = 0; $item <= 1; $item++) { ?><span></span><?php } ?>
          </span>
          <span class="menu">
            <?php for($item = 0; $item <= 2; $item++) { ?><span></span><?php } ?>
          </span>
        </button>
        <nav class="fixed bg-black inset-0 flex flex-col justify-between md:w-[480px] md:left-auto pt-32 pb-16 pl-9 md:pl-20 z-10 transition translate-x-full">
          <?php
          $classname = "main-menu before:absolute before:block before:content-[''] before:w-50 before:h-full before:rounded-l-full before:bg-[#EE3550]";
          wp_nav_menu(
            array(
              'theme_location' => 'main-menu',
              'menu_id' => 'main-menu',
              'menu_class' => $classname,
              'container' => false
            )
          );
          ?>
        </nav>
      </div>
    </div>

	</header>
  <main class="w-screen">