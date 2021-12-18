<?php

/*
Template Name: template front
Template Post Type: post, page, product
*/

add_action('addStyle', function() {
  wp_register_script( 'slick-min-js', 'https://code.jquery.com/jquery-3.6.0.min.js');
	  wp_enqueue_script( 'slick-min-js' );

      

  wp_register_style( 'main_style',

  get_template_directory_uri().'/assets/crayfish/main.css', '', '0.0000', false);

    wp_enqueue_style('main_style');


wp_register_style( 'media',

  get_template_directory_uri().'/assets/media.css', '', '0.0000', false);

    wp_enqueue_style('media');

    
 wp_register_script( 'script_js',
    get_template_directory_uri().'/assets/main.js', '', '0.0000', false);
      wp_enqueue_script('script_js');

 wp_register_script( 'slick_js',
    get_template_directory_uri().'/assets/slick.main.js', '', '0.0000', false);
      wp_enqueue_script('slick_js');

});




do_action('addStyle');
wp_head(); 
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/media.css"> -->
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="logo-wrapper">
        <img src="./img/logo.svg" alt="">
      </div>
      <div class="header__content">
        <h1 class="main-title">Швидкісна доставка раків <span class="yellow">по всьому Харкову</span></h1>
        <div class="socials">
          <a href="#">
            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	          viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve" fill="none">
              <path class="st0" d="M18.5,1H7.5C3.9,1,1,3.9,1,7.5v11.1C1,22.1,3.9,25,7.5,25h11.1c3.6,0,6.5-2.9,6.5-6.5V7.5C25,3.9,22.1,1,18.5,1
	            L18.5,1z"/>
              <path class="st0" d="M13,18.8c3.2,0,5.8-2.6,5.8-5.8c0-3.2-2.6-5.8-5.8-5.8c-3.2,0-5.8,2.6-5.8,5.8C7.2,16.2,9.8,18.8,13,18.8z"/>
              <path class="st1" d="M20,7.2c0.7,0,1.2-0.6,1.2-1.2c0-0.7-0.6-1.2-1.2-1.2c-0.7,0-1.2,0.6-1.2,1.2C18.8,6.7,19.3,7.2,20,7.2z"/>
            </svg>
          </a>
          <a href="#">
            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	          viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve" fill="none">
              <path class="st0" d="M14.4,25h4.2c3.6,0,6.5-2.9,6.5-6.5V7.5C25,3.9,22.1,1,18.5,1h0H7.5C3.9,1,1,3.9,1,7.5v11.1
	            C1,22.1,3.9,25,7.5,25h3.1"/>
              <path class="st1" d="M14.5,25v-8h3l1-4h-4v-3c0-0.3,0.1-0.5,0.3-0.7C15,9.1,15.2,9,15.5,9h3V5h-3c-1.3,0-2.6,0.5-3.5,1.5
	            C11,7.4,10.5,8.7,10.5,10v3h-3v4h3v8"/>
            </svg>
          </a>
        </div>
        <div class="form-wrapper">
          <form class="form" action="">
            <input type="tel" name="" id="" placeholder="Введіть номер">
            <button class="btn">
              <span>Передзвонити</span>
              <img src="./img/call-back.svg" alt="">
            </button>
          </form>
        </div>
        <div class="header__schedule">
          <div class="header__schedule-days yellow">
            <p>Пн-пт</p>
            <p>Cб-вс</p>
          </div>
          <div class="header__schedule-time">
            <p>9:00-23:00</p>
            <p>9:00-19:00</p>
          </div>
          <div class="header__schedule-number">
            <p><a href="tel:+380666146404" class="yellow">+380666146404</a></p>
            <p><a href="tel:+380666146404" class="yellow">+380666146404</a></p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="products section">
      <div class="container">
        <div class="products__tabs">
          <nav class="products__nav">
            <ul class="products__nav-list">
              <li class="products__item products__item--static btn is-active">
                <div class="img-holder">
                  <svg class="raw active" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 548.3 768.5" enable-background="new 0 0 548.3 768.5" xml:space="preserve">
                    <g>
	                    <path d="M468.9,1.5c4.8,0.9,9.7,1.7,14.5,2.6c0.1,0.4,0.2,0.9,0.3,1.3c-7.8,1.5-15.6,3-23.4,4.7
		                  c-36.9,8-71.9,20.2-102.4,43.4c-18.8,14.3-31.9,32.7-42.1,53.7c-3,6.3-6.2,12.5-9.1,18.8c-3.5,7.5-2.8,7.6,5,9.6
		                  c6.8,1.7,14.4,3.9,19.4,8.4c4.8,4.2,6.7,11.7,9.9,17.7c1.3,2.5,2.1,5.9,4.2,7.4c26.5,19.6,38.9,47.4,45.2,78.5
		                  c6.6,32.5,7.6,65.3,3.2,98.1c-2.7,19.7-6.8,39.2-10.8,58.6c-0.9,4.3-4.4,8.1-6.7,12.1c-3.1-2.9-6.7-5.4-9.3-8.8
	                    c-15.9-21-37.6-32.4-62.9-37.1c-37.5-6.9-72,0-101.9,24.5c-7,5.8-12.4,13.6-18.7,20.3c-1.9,2-4.8,5-6.7,4.6
	                    c-2.1-0.4-4.7-3.9-5.3-6.4c-4.8-20.6-10.9-41-13.1-61.9c-2.5-23.4-2.8-47.3-1.7-70.8c1.4-31.7,8-62.4,27.3-88.7
	                    c6-8.1,14.2-14.6,21.1-22c2.1-2.2,4.5-4.8,5.1-7.6c3.5-16.6,12.5-25.1,29.3-27c8.1-0.9,8.8-1.9,5.3-9.3
	                    c-11.7-25.2-23.7-50.1-46.2-68c-21.3-17-45.2-29.3-71.1-37.4C107,14.2,86.2,9.3,66.6,4c4.2-0.7,10-1.6,15.7-2.5c2,0,4,0,6,0
	                    c11.8,1.1,23.7,1.9,35.5,3.5c36.8,4.9,69.6,18.4,97,44.1c24.2,22.8,39.5,51,49.7,82.3c1.1,3.4,2.7,6.6,4,9.9c0.8,0,1.6,0,2.3,0
	                    c1.7-4.5,3.6-8.9,5.1-13.4c9.1-27.6,22.7-52.7,43.1-73.5c33.5-34.2,75.2-49.2,122.4-51.1c4.7-0.2,9.3-1.2,14-1.8
	                    C463.9,1.5,466.4,1.5,468.9,1.5z"/>
	                    <path d="M277.1,768.5c-3.9-10.9-8.3-21.7-11.5-32.8c-3.9-13.4-5.1-14.7-18-10.4c-18.2,6.1-36.2,12.8-54.2,19.2
		                  c-2.8,1-5.5,2.4-8.4,3c-2.2,0.5-4.7-0.1-7-0.1c0.6-2.3,0.5-5,1.8-6.7c10.7-14.4,21.7-28.6,32.7-42.8c15.7-20.3,31.4-40.7,47.2-61
		                  c9.9-12.7,21.9-12.8,31.7-0.2c25.6,32.9,51.1,65.8,76.5,98.9c2.5,3.3,3.7,7.7,5.5,11.6c-4.4-0.6-9-0.5-13.1-2
		                  c-18.1-6.4-35.9-13.5-54-19.9c-9.6-3.4-12.2-1.5-14.5,8.5c-1.6,7-2.5,14.3-4.9,21.1c-1.8,4.9-5.5,9.1-8.3,13.7
		                  C278.1,768.5,277.6,768.5,277.1,768.5z"/>
	                    <path d="M3.5,189.9c1-38.3,9.3-78.4,30-115.3c3.5-6.2,8.2-11.9,12.8-17.4c1.6-1.9,4.9-2.4,7.4-3.5
		                  c0.8,3,2.5,6,2.3,8.9c-0.4,6.4-1.7,12.8-2.7,19.2c-6,37.9,1.6,73.1,22.8,104.8c18.6,27.8,34.6,56.5,42,89.4
		                  c2.7,12.1,5.3,24.3,7,36.6c2.3,16.1-5.7,24.8-22.3,25.7C68.9,339.9,41.3,323,26,291.6C10.8,260.7,3.7,227.9,3.5,189.9z"/>
	                    <path d="M547.9,192.2C547.3,231,540,266.7,521,299c-16.3,27.7-40.9,41.4-73.6,39.1c-15.7-1.1-23.4-9.6-21.3-25.1
		                  c5.3-39.6,16.3-77.2,39-110.9c9.7-14.4,17.8-30,25-45.8c11.7-25.8,11.2-53.2,6.9-80.7c-0.7-4.7-1.9-9.3-2-14c0-2.6,1.7-5.3,2.6-8
		                  c2.3,1.1,5.2,1.6,6.9,3.3c12.3,12.2,19.2,27.8,25.4,43.6C542,130.4,547.2,161.7,547.9,192.2z"/>
	                    <path d="M363.6,542.9c-18.7-37-48.2-53.9-88.5-53.7c-40.2,0.3-68.9,18.1-86.4,54.3c-15.8-14.8-22-70.3,8.3-107.1
		                  c37-44.9,102.4-50.2,146.5-11.2C383.3,460.3,381.6,518.6,363.6,542.9z"/>
	                    <path d="M196.5,600.3c0.9-32.6,16-56.9,45.2-70.8c29.5-14,58.3-10.7,83.9,10.3c32.4,26.4,38.8,70.9,15.6,104.6
		                  c-4.5,6.6-5.8,6.7-10.8,0.2c-8.3-10.6-16.3-21.4-24.8-31.9c-19.4-24.2-42-24.1-61.5,0.2c-7.6,9.5-15,19.3-22.5,28.9
		                  c-6.2,8-8.5,7.8-13.9-1C200.3,628.7,196.7,615.7,196.5,600.3z"/>
	                    <path d="M124.8,244.1c-2.4-5.9-4.1-10.5-6-14.9c-3.7-8.5-6.4-17.5-11.4-25.1c-5.6-8.5-7-17-6.8-26.8
		                    c0.2-8.6-0.4-17.6-2.9-25.7c-1.9-6.2-6.9-11.8-11.3-17c-4.2-5-4.4-8.1,1.6-10.8c8.8-3.9,18-3.4,25.6,2.2c6,4.5,12.2,10.1,15.5,16.7
		                    c15.7,31.4,15,63.3,0.1,94.9C128.5,239.5,127,241.1,124.8,244.1z"/>
	                    <path d="M426.2,243.8c-7.3-10.4-10.5-21-12.9-31.9c-5.1-23.1-3-45.7,7.4-67c6.9-14.3,17.5-24.4,35-23.1
		                    c2.7,0.2,5.5,0.9,7.8,2.1c5.5,2.9,6.1,6.5,1.3,10.3c-11.2,8.7-14.7,20.7-14.2,33.8c0.7,15.3-1.6,29.2-10,42.6
		                    C434.6,220.3,431.3,231.7,426.2,243.8z"/>
                    </g>
                  </svg>
                </div>
                <p>Рак живий</p>
              </li>
              <li class="products__item products__item--static btn">
                <div class="img-holder">
                  <svg class="boiled active" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 548.3 768.5" enable-background="new 0 0 548.3 768.5" xml:space="preserve">
                    <g>
	                    <path d="M468.9,1.5c4.8,0.9,9.7,1.7,14.5,2.6c0.1,0.4,0.2,0.9,0.3,1.3c-7.8,1.5-15.6,3-23.4,4.7
		                  c-36.9,8-71.9,20.2-102.4,43.4c-18.8,14.3-31.9,32.7-42.1,53.7c-3,6.3-6.2,12.5-9.1,18.8c-3.5,7.5-2.8,7.6,5,9.6
		                  c6.8,1.7,14.4,3.9,19.4,8.4c4.8,4.2,6.7,11.7,9.9,17.7c1.3,2.5,2.1,5.9,4.2,7.4c26.5,19.6,38.9,47.4,45.2,78.5
		                  c6.6,32.5,7.6,65.3,3.2,98.1c-2.7,19.7-6.8,39.2-10.8,58.6c-0.9,4.3-4.4,8.1-6.7,12.1c-3.1-2.9-6.7-5.4-9.3-8.8
	                    c-15.9-21-37.6-32.4-62.9-37.1c-37.5-6.9-72,0-101.9,24.5c-7,5.8-12.4,13.6-18.7,20.3c-1.9,2-4.8,5-6.7,4.6
	                    c-2.1-0.4-4.7-3.9-5.3-6.4c-4.8-20.6-10.9-41-13.1-61.9c-2.5-23.4-2.8-47.3-1.7-70.8c1.4-31.7,8-62.4,27.3-88.7
	                    c6-8.1,14.2-14.6,21.1-22c2.1-2.2,4.5-4.8,5.1-7.6c3.5-16.6,12.5-25.1,29.3-27c8.1-0.9,8.8-1.9,5.3-9.3
	                    c-11.7-25.2-23.7-50.1-46.2-68c-21.3-17-45.2-29.3-71.1-37.4C107,14.2,86.2,9.3,66.6,4c4.2-0.7,10-1.6,15.7-2.5c2,0,4,0,6,0
	                    c11.8,1.1,23.7,1.9,35.5,3.5c36.8,4.9,69.6,18.4,97,44.1c24.2,22.8,39.5,51,49.7,82.3c1.1,3.4,2.7,6.6,4,9.9c0.8,0,1.6,0,2.3,0
	                    c1.7-4.5,3.6-8.9,5.1-13.4c9.1-27.6,22.7-52.7,43.1-73.5c33.5-34.2,75.2-49.2,122.4-51.1c4.7-0.2,9.3-1.2,14-1.8
	                    C463.9,1.5,466.4,1.5,468.9,1.5z"/>
	                    <path d="M277.1,768.5c-3.9-10.9-8.3-21.7-11.5-32.8c-3.9-13.4-5.1-14.7-18-10.4c-18.2,6.1-36.2,12.8-54.2,19.2
		                  c-2.8,1-5.5,2.4-8.4,3c-2.2,0.5-4.7-0.1-7-0.1c0.6-2.3,0.5-5,1.8-6.7c10.7-14.4,21.7-28.6,32.7-42.8c15.7-20.3,31.4-40.7,47.2-61
		                  c9.9-12.7,21.9-12.8,31.7-0.2c25.6,32.9,51.1,65.8,76.5,98.9c2.5,3.3,3.7,7.7,5.5,11.6c-4.4-0.6-9-0.5-13.1-2
		                  c-18.1-6.4-35.9-13.5-54-19.9c-9.6-3.4-12.2-1.5-14.5,8.5c-1.6,7-2.5,14.3-4.9,21.1c-1.8,4.9-5.5,9.1-8.3,13.7
		                  C278.1,768.5,277.6,768.5,277.1,768.5z"/>
	                    <path d="M3.5,189.9c1-38.3,9.3-78.4,30-115.3c3.5-6.2,8.2-11.9,12.8-17.4c1.6-1.9,4.9-2.4,7.4-3.5
		                  c0.8,3,2.5,6,2.3,8.9c-0.4,6.4-1.7,12.8-2.7,19.2c-6,37.9,1.6,73.1,22.8,104.8c18.6,27.8,34.6,56.5,42,89.4
		                  c2.7,12.1,5.3,24.3,7,36.6c2.3,16.1-5.7,24.8-22.3,25.7C68.9,339.9,41.3,323,26,291.6C10.8,260.7,3.7,227.9,3.5,189.9z"/>
	                    <path d="M547.9,192.2C547.3,231,540,266.7,521,299c-16.3,27.7-40.9,41.4-73.6,39.1c-15.7-1.1-23.4-9.6-21.3-25.1
		                  c5.3-39.6,16.3-77.2,39-110.9c9.7-14.4,17.8-30,25-45.8c11.7-25.8,11.2-53.2,6.9-80.7c-0.7-4.7-1.9-9.3-2-14c0-2.6,1.7-5.3,2.6-8
		                  c2.3,1.1,5.2,1.6,6.9,3.3c12.3,12.2,19.2,27.8,25.4,43.6C542,130.4,547.2,161.7,547.9,192.2z"/>
	                    <path d="M363.6,542.9c-18.7-37-48.2-53.9-88.5-53.7c-40.2,0.3-68.9,18.1-86.4,54.3c-15.8-14.8-22-70.3,8.3-107.1
		                  c37-44.9,102.4-50.2,146.5-11.2C383.3,460.3,381.6,518.6,363.6,542.9z"/>
	                    <path d="M196.5,600.3c0.9-32.6,16-56.9,45.2-70.8c29.5-14,58.3-10.7,83.9,10.3c32.4,26.4,38.8,70.9,15.6,104.6
		                  c-4.5,6.6-5.8,6.7-10.8,0.2c-8.3-10.6-16.3-21.4-24.8-31.9c-19.4-24.2-42-24.1-61.5,0.2c-7.6,9.5-15,19.3-22.5,28.9
		                  c-6.2,8-8.5,7.8-13.9-1C200.3,628.7,196.7,615.7,196.5,600.3z"/>
	                    <path d="M124.8,244.1c-2.4-5.9-4.1-10.5-6-14.9c-3.7-8.5-6.4-17.5-11.4-25.1c-5.6-8.5-7-17-6.8-26.8
		                    c0.2-8.6-0.4-17.6-2.9-25.7c-1.9-6.2-6.9-11.8-11.3-17c-4.2-5-4.4-8.1,1.6-10.8c8.8-3.9,18-3.4,25.6,2.2c6,4.5,12.2,10.1,15.5,16.7
		                    c15.7,31.4,15,63.3,0.1,94.9C128.5,239.5,127,241.1,124.8,244.1z"/>
	                    <path d="M426.2,243.8c-7.3-10.4-10.5-21-12.9-31.9c-5.1-23.1-3-45.7,7.4-67c6.9-14.3,17.5-24.4,35-23.1
		                    c2.7,0.2,5.5,0.9,7.8,2.1c5.5,2.9,6.1,6.5,1.3,10.3c-11.2,8.7-14.7,20.7-14.2,33.8c0.7,15.3-1.6,29.2-10,42.6
		                    C434.6,220.3,431.3,231.7,426.2,243.8z"/>
                    </g>
                  </svg>
                </div>
                <p>Рак варений</p>
              </li>
              <li class="products__item products__item--static btn">
                <div class="img-holder">
                  <svg class="boiled active" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 785.7 785.7" enable-background="new 0 0 785.7 785.7" xml:space="preserve">
                    <g>
	                    <path d="M441.9,0c0.8,0.5,1.6,1.2,2.5,1.6c11,4,17.9,13.3,16.9,22.8c-1.2,11.7-10.2,20.1-22.6,21.2
		                    c-2.5,0.2-5.1,0.1-7.7,0.1c-112.8,0-225.6,0.3-338.3-0.2c-19.5-0.1-43.6,14-46.8,40c-3.2,25.4,12.4,47.1,36.8,52.4
		                    c3.4,0.7,7.1,0.6,10.7,0.6c106.4,0,212.8-0.1,319.2,0.1c64.9,0.1,119.4,40.5,137.1,101.2c22,75.5-28.9,158.8-106.7,171
		                    C334,427.8,227.8,383.4,171,282.1c-2.6-4.7-5.4-6.4-10.7-6.4c-29.2,0.2-58.3,0.2-87.5,0.1c-12.2,0-21.1-5.5-24.6-14.8
		                    c-5.7-15.2,5.4-30.3,22.9-30.5c23-0.3,46-0.1,69-0.1c2.8,0,5.5,0,8.2,0c-2.5-15.1-4.6-29.4-7.3-43.6c-0.3-1.4-3.7-2.9-5.8-3
		                    c-13.5-0.3-27.1-0.1-40.7-0.2c-45.8-0.3-81.8-29.1-92.1-73.7c-0.9-3.9-1.7-7.9-2.5-11.9c0-4.1,0-8.2,0-12.3
		                    c0.5-1.7,1.4-3.3,1.6-5.1C7,41.6,33.4,12.4,71.9,3.2c4.7-1.1,9.4-2.1,14-3.2C204.6,0,323.3,0,441.9,0z M347.2,229.8
		                    c-13.4-0.1-23.6,9.5-23.8,22.5c-0.2,13.8,9.5,24.1,22.9,24.2c13.7,0.1,23.8-9.7,23.8-23.3C370.2,239.9,360.4,230,347.2,229.8z"/>
	                    <path d="M205.6,785.7c-19.2-9.4-22.6-18.2-17.5-43.4c5.7-28,18.9-51.5,41.1-69.7c1.2-1,2.8-1.4,5.1-2.5
		                    c-3.9-3.4-6-5.2-8.1-7c-25.4-22.2-38.4-50.4-40.1-83.9c-0.6-12.7,7.5-23.9,20.4-24.3c28-0.9,56.4-4.1,83.5,5.6
		                    c45.5,16.2,72,48.5,78,96.7c7.3,59-34.7,115.6-94.6,126.3c-4.2,0.8-8.5,1.5-12.7,2.2C242.5,785.7,224,785.7,205.6,785.7z"/>
	                    <path d="M785.7,425.1c-1.1,11.7-2,23.3-3.4,34.9c-9,76.7-41.2,139.2-110.3,179c-5.1,3-9.8,3.9-15.9,2.5
		                    c-57.8-13.3-99.9-46.6-127.4-99c-2.8-5.3-1.6-8.1,2.6-12.2c7.4-7.2,14-15.4,20-23.8c2.5-3.4,4-4.5,8.3-3.7
		                    c53,9.5,103.5,2.9,151-23.4c26.4-14.7,48.8-34.4,68.8-56.9c2-2.3,4.1-4.5,6.2-6.7C785.7,418.9,785.7,422,785.7,425.1z"/>
	                    <path d="M528.8,423.7c83.5-58.9,104.5-196.8,15.7-282.9c11,2,20.2,3.1,29,5.5c98.7,26.9,165.5,88.1,198.6,185.3
		                    c1.4,4,1,9.7-0.7,13.6c-28.2,64.2-77,102.2-146.2,112.9c-23.1,3.6-46.3,1.7-69-4.3c-2.5-0.7-5.2-2.2-6.8-4.1
		                    C542.4,441.4,535.9,432.7,528.8,423.7z"/>
	                    <path d="M485.9,562c24,47.2,58.3,83.7,108.2,107.2c-60.1,15.3-119.2,20.2-179.1,21.2c0-14.8,1.1-28.6-0.3-42.2
		                    c-1.4-13.3-5.5-26.2-8.6-40.1C432,593.1,458.7,577.7,485.9,562z"/>
                    </g>
                  </svg>
                </div>
                <p>Креветка</p>
              </li>
              <li class="products__item products__item--static btn">
                <div class="img-holder">
                  <svg class="raw active" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 597.6 577.5" enable-background="new 0 0 597.6 577.5" xml:space="preserve">
                    <g>
	                    <path d="M200,397.1c-6.3-4.3-12.8-8.4-19-12.9c-14-10.3-28.7-19.9-41.6-31.4c-21.9-19.4-36.5-44.3-46.2-71.4
		                    c-7.8-21.7-19.6-40.4-32-59.5c-10.8-16.6-18.8-35-27.6-52.9c-3.4-6.9-1.7-8.6,5.9-7.5c8.4,1.2,16.8,2.4,25.2,3.4
		                    c2,0.2,4.3,0.2,6.1-0.6c1.9-0.9,3.4-2.7,5.1-4.2c-1.5-1.5-2.8-3.5-4.6-4.3c-12-5.8-24.1-11.3-36.1-17
		                    c-11.5-5.4-20.1-13.7-23.2-26.4c-4.1-16.6-9.1-33.1-11.4-50C-3.5,32.7,14.3,11.9,43.7,5.1c32.5-7.5,64.9-6,97.3,0.1
		                    c56,10.7,104.8,35.9,147.9,73.1c9.7,8.3,22,13.9,33.8,19.2c29.1,12.9,50.9,34,68.7,59.5c8.3,11.9,15.4,24.7,23,37
		                    c-0.5,0.5-1,0.9-1.5,1.4c-12-2-24.1-4-37.2-6.1c0.2,2.8-0.1,4.9,0.7,6.5c24.7,48.3,36.9,100.5,46.8,153.2
		                    c3.4,18,11.4,26.8,28.9,31.2c32.6,8.2,64.6,18.4,97,27.6c9,2.6,18.3,4,27.3,6.8c6,1.9,11.9,4.7,17.2,8.1c5.5,3.4,5.4,9.1-0.6,11.9
		                    c-10.3,4.7-21,9.1-31.9,11.8c-19.8,4.8-39.9,8.1-59.8,12.1c-20.9,4.1-35.5,18.8-38.7,40.3c-2.2,14.7-2.9,29.6-4.3,44.4
		                    c-0.8,8.4-1.8,16.8-3.1,25.2c-0.4,2.6-1.8,5-3.4,9.1c-3.2-3.3-6.1-5.3-7.6-8.1c-12.3-23.5-25.5-46.6-36.2-70.8
		                    c-11.5-25.9-20.6-52.9-30.6-79.4c-2.1-5.6-5.3-8.7-11.9-9.5c-52.7-6.6-101.6-24.6-148.5-48.9c-3.3-1.7-6.5-3.5-9.9-4.7
		                    c-2.4-0.9-5-0.8-7.6-1.2c-0.3,2.4-1,4.8-0.7,7.2c0.9,9.3,2.2,18.6,3.3,28c0.2,2,0,4,0,6C201.3,396.3,200.7,396.7,200,397.1z
		                    M100.2,211.2c35.1,3.3,69.2,0.4,98.8-20.7c35.5-25.3,45.2-71.7,41-111c-12.9,32.8-25,64-51.6,86.2
		                    C162.4,187.3,132.3,201.1,100.2,211.2z M132.7,46.5c-11.8-0.2-20.1,7.7-20.3,19.3c-0.2,10.7,7.2,19,17,19.3
		                    c11.9,0.3,21-8.5,20.9-20.4C150.4,55,142.3,46.6,132.7,46.5z"/>
                    </g>
                  </svg>
                </div>
                <p>Сушена риба</p>
              </li>
            </ul>
          </nav>
          <div class="products__item-wrapper">
            <!-- Вкладка 1 -->
            <div class="products__block is-active">
              <div class="products__card-wrapper">
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/raw.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/raw.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/raw.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/raw.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products__slider products__slider--rawCrayfish">
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/raw.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/raw.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/raw.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/raw.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //Вкладка 1 -->
            <!-- Вкладка 2 -->
            <div class="products__block">
              <div class="products__card-wrapper">
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/product.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/product.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/product.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/product.png" alt="">
                  </div>
                  <h3 class="card__title">Раки ніжні в соусі</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products__slider products__slider--boiledCrayfish">
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/product.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/product.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/product.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card last">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/product.png" alt="">
                    </div>
                    <h3 class="card__title">Раки ніжні в соусі</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //Вкладка 2 -->
            <!-- Вкладка 3 -->
            <div class="products__block">
              <div class="products__card-wrapper">
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/shrimp.png" alt="">
                  </div>
                  <h3 class="card__title">Пряна креветка</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/shrimp.png" alt="">
                  </div>
                  <h3 class="card__title">Пряна креветка</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/shrimp.png" alt="">
                  </div>
                  <h3 class="card__title">Пряна креветка</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/shrimp.png" alt="">
                  </div>
                  <h3 class="card__title">Пряна креветка</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products__slider products__slider--shrimp">
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/shrimp.png" alt="">
                    </div>
                    <h3 class="card__title">Пряна креветка</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/shrimp.png" alt="">
                    </div>
                    <h3 class="card__title">Пряна креветка</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/shrimp.png" alt="">
                    </div>
                    <h3 class="card__title">Пряна креветка</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/shrimp.png" alt="">
                    </div>
                    <h3 class="card__title">Пряна креветка</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //Вкладка 3 -->
            <!-- Вкладка 4 -->
            <div class="products__block">
              <div class="products__card-wrapper">
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/fish.png" alt="">
                  </div>
                  <h3 class="card__title">Cушена тарань</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/fish.png" alt="">
                  </div>
                  <h3 class="card__title">Cушена тарань</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/fish.png" alt="">
                  </div>
                  <h3 class="card__title">Cушена тарань</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="img-holder">
                    <img src="./img/fish.png" alt="">
                  </div>
                  <h3 class="card__title">Cушена тарань</h3>
                  <div class="card__content">
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                    <div class="card__item">
                      <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                      <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products__slider products__slider--fish">
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/fish.png" alt="">
                    </div>
                    <h3 class="card__title">Сушена тарань</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/fish.png" alt="">
                    </div>
                    <h3 class="card__title">Сушена тарань</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/fish.png" alt="">
                    </div>
                    <h3 class="card__title">Сушена тарань</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__inner">
                    <div class="img-holder">
                      <img src="./img/fish.png" alt="">
                    </div>
                    <h3 class="card__title">Сушена тарань</h3>
                    <div class="card__content">
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Малі</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Побільше</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Середні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Велетні</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                      <div class="card__item">
                        <div class="card__item-name"><span class="yellow item-name">Гіганти</span><br> 50-150г</div>
                        <div class="card__item-price"><p>360<span class="small">грн</span></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //Вкладка 4 -->
          </div>
        </div>
      </div>
    </section>
    <section class="promo section">
      <div class="promo__banner">
        <img src="./img/banner.png" alt="">
      </div>
    </section>
    <section class="info section">
      <div class="container">
        <div class="info__wrapper">
          <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__contacts">
          <div class="socials">
            <a href="#">
              <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve" fill="none">
                <path class="st0" d="M18.5,1H7.5C3.9,1,1,3.9,1,7.5v11.1C1,22.1,3.9,25,7.5,25h11.1c3.6,0,6.5-2.9,6.5-6.5V7.5C25,3.9,22.1,1,18.5,1
                L18.5,1z"/>
                <path class="st0" d="M13,18.8c3.2,0,5.8-2.6,5.8-5.8c0-3.2-2.6-5.8-5.8-5.8c-3.2,0-5.8,2.6-5.8,5.8C7.2,16.2,9.8,18.8,13,18.8z"/>
                <path class="st1" d="M20,7.2c0.7,0,1.2-0.6,1.2-1.2c0-0.7-0.6-1.2-1.2-1.2c-0.7,0-1.2,0.6-1.2,1.2C18.8,6.7,19.3,7.2,20,7.2z"/>
              </svg>
            </a>
            <a href="#">
              <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve" fill="none">
                <path class="st0" d="M14.4,25h4.2c3.6,0,6.5-2.9,6.5-6.5V7.5C25,3.9,22.1,1,18.5,1h0H7.5C3.9,1,1,3.9,1,7.5v11.1
                C1,22.1,3.9,25,7.5,25h3.1"/>
                <path class="st1" d="M14.5,25v-8h3l1-4h-4v-3c0-0.3,0.1-0.5,0.3-0.7C15,9.1,15.2,9,15.5,9h3V5h-3c-1.3,0-2.6,0.5-3.5,1.5
                C11,7.4,10.5,8.7,10.5,10v3h-3v4h3v8"/>
              </svg>
            </a>
          </div>
          <div class="footer__number">
            <p><a href="tel:+380666146404" class="yellow">+380666146404</a></p>
            <p><a href="tel:+380666146404" class="yellow">+380666146404</a></p>
          </div>
        </div>
        <div class="footer__form">
          <form class="form" action="">
            <input type="tel" name="" id="" placeholder="Введіть номер">
            <button class="btn">
              <span>Передзвонити</span>
              <img src="./img/call-back.svg" alt="">
            </button>
          </form>
        </div>
      </div>
    </div>
  </footer>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./slick.min.js"></script>
  <script src="./main.js"></script> -->
</body>
</html>