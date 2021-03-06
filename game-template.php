<?php
/**
 Template Name: Boardgame Template
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Board Game Demo Page</title>
    <meta charset="UTF-8">
    <base href="<?php echo get_stylesheet_directory_uri(); ?>/">
</head>
<body>
<noscript>This page requires JavaScript to be enabled.</noscript>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/papaparse/papaparse.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bg_parser.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/peri_styles.css">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div id="CSV_LINK"><?php the_content();?></div>
<?php endwhile; endif; ?>


<div class="hero-title">
    <div class="left-flap"></div>
    <h1>Periodic Table of Board Games</h1>
    <div class="right-flap"></div>
</div>

<div class="container">
<div class="row">
<div id="s1" class="col-xs-1">a</div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div id="s84" class="col-xs-1">f</div>
</div>
<div class="row">
<div id="s2" class="col-xs-1">a</div>
<div id="s8" class="col-xs-1">b</div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div id="s54" class="col-xs-1">f</div>
<div id="s60" class="col-xs-1">f</div>
<div id="s66" class="col-xs-1">f</div>
<div id="s72" class="col-xs-1">f</div>
<div id="s78" class="col-xs-1">f</div>
<div id="s85" class="col-xs-1">f</div>
</div>
<div class="row">
<div id="s3" class="col-xs-1">a</div>
<div id="s9" class="col-xs-1">f</div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div class="col-xs-1 off"></div>
<div id="s55" class="col-xs-1">f</div>
<div id="s61" class="col-xs-1">f</div>
<div id="s67" class="col-xs-1">f</div>
<div id="s73" class="col-xs-1">f</div>
<div id="s79" class="col-xs-1">f</div>
<div id="s86" class="col-xs-1">f</div>
</div>
<div class="row">
<div id="s4" class="col-xs-1">a</div>
<div id="s10" class="col-xs-1">a</div>
<div id="s14" class="col-xs-1">a</div>
<div id="s18" class="col-xs-1">a</div>
<div id="s22" class="col-xs-1">a</div>
<div id="s26" class="col-xs-1">a</div>
<div id="s30" class="col-xs-1">a</div>
<div id="s34" class="col-xs-1">a</div>
<div id="s38" class="col-xs-1">a</div>
<div id="s42" class="col-xs-1">a</div>
<div id="s46" class="col-xs-1">a</div>
<div id="s50" class="col-xs-1">s</div>
<div id="s56" class="col-xs-1">s</div>
<div id="s62" class="col-xs-1">s</div>
<div id="s68" class="col-xs-1">s</div>
<div id="s74" class="col-xs-1">s</div>
<div id="s80" class="col-xs-1">s</div>
<div id="s87" class="col-xs-1">f</div>
</div>
<div class="row">
<div id="s5" class="col-xs-1">a</div>
<div id="s11" class="col-xs-1">a</div>
<div id="s15" class="col-xs-1">a</div>
<div id="s19" class="col-xs-1">a</div>
<div id="s23" class="col-xs-1">a</div>
<div id="s27" class="col-xs-1">a</div>
<div id="s31" class="col-xs-1">a</div>
<div id="s35" class="col-xs-1">a</div>
<div id="s39" class="col-xs-1">a</div>
<div id="s43" class="col-xs-1">a</div>
<div id="s47" class="col-xs-1">a</div>
<div id="s51" class="col-xs-1">s</div>
<div id="s57" class="col-xs-1">s</div>
<div id="s63" class="col-xs-1">s</div>
<div id="s69" class="col-xs-1">s</div>
<div id="s75" class="col-xs-1">s</div>
<div id="s81" class="col-xs-1">s</div>
<div id="s88" class="col-xs-1">f</div>
</div>
<div class="row">
<div id="s6" class="col-xs-1">a</div>
<div id="s12" class="col-xs-1">a</div>
<div id="s16" class="col-xs-1">a</div>
<div id="s20" class="col-xs-1">a</div>
<div id="s24" class="col-xs-1">a</div>
<div id="s28" class="col-xs-1">a</div>
<div id="s32" class="col-xs-1">a</div>
<div id="s36" class="col-xs-1">a</div>
<div id="s40" class="col-xs-1">a</div>
<div id="s44" class="col-xs-1">a</div>
<div id="s48" class="col-xs-1">a</div>
<div id="s52" class="col-xs-1">s</div>
<div id="s58" class="col-xs-1">s</div>
<div id="s64" class="col-xs-1">s</div>
<div id="s70" class="col-xs-1">s</div>
<div id="s76" class="col-xs-1">s</div>
<div id="s82" class="col-xs-1">s</div>
<div id="s89" class="col-xs-1">f</div>
</div>
<div class="row">
<div id="s7" class="col-xs-1">a</div>
<div id="s13" class="col-xs-1">a</div>
<div id="s17" class="col-xs-1">a</div>
<div id="s21" class="col-xs-1">a</div>
<div id="s25" class="col-xs-1">a</div>
<div id="s29" class="col-xs-1">a</div>
<div id="s33" class="col-xs-1">a</div>
<div id="s37" class="col-xs-1">a</div>
<div id="s41" class="col-xs-1">a</div>
<div id="s45" class="col-xs-1">a</div>
<div id="s49" class="col-xs-1">a</div>
<div id="s53" class="col-xs-1">s</div>
<div id="s59" class="col-xs-1">s</div>
<div id="s65" class="col-xs-1">s</div>
<div id="s71" class="col-xs-1">s</div>
<div id="s77" class="col-xs-1">s</div>
<div id="s83" class="col-xs-1">s</div>
<div id="s90" class="col-xs-1">f</div>
</div>



<div id="cat_container">
    <!-- <header>Categories:</header> -->
    <div id="cat_list">
        [loading]
    </div>
</div>

</div>

<div class="tut-info">
Click Any Tile<br>to View Games    
</div>









<div class="bg_popup_container">
    <!-- Popup Card -->
    <div id="card" class="bg_popup">
        <div id="close">✕</div>
        <h1 id="title">[Title]</h1>
        <div class="icon racing">
            <div id="category_name" class="caption">[Category Name]</div>
            <div class="svg_container">
                <svg id="icon_abstract" viewBox="0 0 45.64 54.48"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M42,34.16a3.63,3.63,0,0,0-2.57,1.07c-3.16-2.23-8.07-5.64-11.6-8,3.62-2.43,8.75-6,11.89-8.27a3.67,3.67,0,1,0-1.39-2.87,2.88,2.88,0,0,0,.1.78c-3.37,1.52-8.62,4-12.48,5.84C25.4,14.85,24.1.91,23.9,0H21.81c-.2.91-1.5,14.81-2,22.7-3.9-1.89-9.19-4.35-12.52-5.86a3.55,3.55,0,0,0,.08-.73,3.68,3.68,0,1,0-3.67,3.67A3.56,3.56,0,0,0,6,18.92c3.15,2.25,8.32,5.89,12,8.33-3.55,2.36-8.52,5.81-11.67,8a3.73,3.73,0,0,0-2.63-1.12,3.67,3.67,0,1,0,3.67,3.67s0,0,0-.06c3.29-1.52,8.54-4,12.43-5.91.49,7.91,1.69,21.71,1.89,22.62h2.4c.18-.92,1.4-14.75,1.87-22.65,3.86,1.89,9.06,4.34,12.38,5.87,0,0,0,.09,0,.13A3.67,3.67,0,1,0,42,34.16"/></g></g></svg>
                <svg id="icon_adventure" viewBox="0 0 52.68 48.78"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M0,45.44l11.67,3.34V3.35L0,0ZM6.14,13.36l1.77.93a17.66,17.66,0,0,0-1.73,5.35l-2-.26A20,20,0,0,1,6.14,13.36ZM1.19,22.23l1.43-1.39,1.74,1.79,1.51-1.27L7.16,22.9l-1.4,1.17,1.13,1.17L5.46,26.63,4.22,25.36,2.46,26.83,1.18,25.3l1.65-1.38Z"/><path class="cls-1" d="M13.67,48.78l11.67-3.34V0L13.67,3.35Zm9.79-9.62-1.64,1.15A10.36,10.36,0,0,1,21.07,39a12.6,12.6,0,0,1-1.32-5.69,14.28,14.28,0,0,1,.15-2.06c.1-.64.2-1.39.3-2.22l2,.23c-.1.86-.21,1.63-.31,2.29a11.68,11.68,0,0,0-.13,1.76,10.66,10.66,0,0,0,1.1,4.78A8.24,8.24,0,0,0,23.46,39.16ZM16.3,8.48c3.36.92,5.41,4.16,6.08,9.66l-2,.24c-.56-4.61-2.11-7.29-4.62-8Z"/><path class="cls-1" d="M27.34,45.44,39,48.78V3.35L27.34,0ZM37.44,7.82l.14,2c-.51,0-2.06.15-2.06,4.56A32.88,32.88,0,0,0,35.77,18l0,.06v.24h-1l-.89.44-.08-.16,0-.17a33.9,33.9,0,0,1-.29-4C33.52,10.22,34.84,8,37.44,7.82ZM35.08,29.16l2,.05a14.14,14.14,0,0,1-4.46,10.5l-1.38-1.46A12,12,0,0,0,35.08,29.16Z"/><path class="cls-1" d="M52.64,35.51l0,.08V0L41,3.35V48.78l11.67-3.34V37.59a6.63,6.63,0,0,1-1.62.21,5.1,5.1,0,0,1-4.25-2.08l1.61-1.19C49.94,36.58,52.53,35.55,52.64,35.51Zm-5.17-11-2-.28c.17-1.23.41-2.56.7-3.95a13.55,13.55,0,0,0,.31-2.8,7.93,7.93,0,0,0-.7-3.43l1.81-.86a10,10,0,0,1,.89,4.29,16.06,16.06,0,0,1-.35,3.21C47.86,22,47.64,23.32,47.47,24.51Z"/></g></g></svg>
                <svg id="icon_battle" viewBox="0 0 59.4 59.17"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="16.09 41.16 9.7 34.67 8 36.4 23.1 51.75 24.8 50.02 18.41 43.52 16.09 41.16"/><polygon class="cls-1" points="50.02 34.17 43.63 40.66 41.31 43.02 34.91 49.52 36.61 51.25 51.72 35.9 50.02 34.17"/><path class="cls-1" d="M3.36,51.93a6.15,6.15,0,0,1,2.4,1.44,6,6,0,0,1,1.45,2.38l8.51-8.43L11.86,43.5Z"/><path class="cls-1" d="M2.39,54.37a2.84,2.84,0,0,0-.5.06,2.3,2.3,0,0,0-1.19.65.93.93,0,0,0-.13.15A2.39,2.39,0,0,0,3.93,58.6l.16-.13a2.42,2.42,0,0,0,0-3.39A2.39,2.39,0,0,0,2.39,54.37Z"/><path class="cls-1" d="M42.94,37.47h0l-8-8-.17-.17L56.86,7.21,58.36.5,51.63,2,29.54,24.07,7,1.47.22,0,1.71,6.71,24.31,29.3,15.64,38l5.23,5.23s3.67-3.69,8.66-8.68l8.18,8.18Z"/><path class="cls-1" d="M47.66,43.25l-3.65,4L52.07,56a6.31,6.31,0,0,1,1.38-2.47A5.64,5.64,0,0,1,55.72,52Z"/><path class="cls-1" d="M58.84,55.23c-.05,0-.08-.11-.13-.15a2.37,2.37,0,0,0-1.2-.65,2.73,2.73,0,0,0-.5-.06,2.4,2.4,0,0,0-2.34,2.91,2.44,2.44,0,0,0,.64,1.19l.16.13a2.39,2.39,0,0,0,3.37-3.37Z"/></g></g></svg>
                <svg id="icon_building" viewBox="0 0 74.47 42.33"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="12.14" width="22.78" height="12.11"/><rect class="cls-1" x="37.92" width="22.78" height="12.11"/><polyline class="cls-1" points="12.14 30.22 12.14 42.33 34.92 42.33 34.92 30.22"/><polyline class="cls-1" points="37.92 30.22 37.92 42.33 60.7 42.33 60.7 30.22"/><polygon class="cls-1" points="25.92 15.11 25.92 27.22 34.92 27.22 37.92 27.22 48.7 27.22 48.7 15.11 25.92 15.11"/><rect class="cls-1" y="15.11" width="22.78" height="12.11"/><rect class="cls-1" x="51.7" y="15.11" width="22.78" height="12.11"/></g></g></svg>
                <svg id="icon_card" viewBox="0 0 35.95 50.15"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M32.19,0H3.76A3.77,3.77,0,0,0,0,3.76V46.39a3.77,3.77,0,0,0,3.76,3.76H32.19A3.77,3.77,0,0,0,36,46.39V3.76A3.77,3.77,0,0,0,32.19,0ZM23.78,31.79c-3.44.68-5.58-3.59-5.58-3.59s-.75,8.7,7.75,9.23H10c8.5-.53,7.75-9.23,7.75-9.23s-2.14,4.27-5.58,3.59c-5.66-1.1-3.24-6.72-3.24-6.72.19-1.83,8.35-6.85,9-12.18a1.22,1.22,0,0,0,0-.17H18c0,.06,0,.12,0,.17.7,5.33,8.85,10.35,9.05,12.18C27,25.07,29.43,30.69,23.78,31.79Z"/></g></g></svg>
                <svg id="icon_cooperative" viewBox="0 0 66.49 58.58"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M16.05,16.73,8.33,20A26.66,26.66,0,0,1,58.7,21l2.48-.81a29.27,29.27,0,0,0-55.35-1l-3.43-8-2.4,1,5.11,12,12-5.11Z"/><path class="cls-1" d="M61.91,34.21,49.73,38.8l.92,2.44,7.76-2.92a26.67,26.67,0,0,1-50.52-1l-2.49.79A29.28,29.28,0,0,0,60.93,39l3.12,8.27,2.44-.92Z"/></g></g></svg>
                <svg id="icon_deduction" viewBox="0 0 52.27 52.9"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M51.58,48.92,37.91,35.24a21.64,21.64,0,1,0-3.38,3.23L48.28,52.22a2.33,2.33,0,0,0,3.3-3.3ZM3,21.47A18.47,18.47,0,1,1,35.78,33.12a18.75,18.75,0,0,1-3.39,3.21A18.43,18.43,0,0,1,3,21.47Z"/></g></g></svg>
                <svg id="icon_dexterity" viewBox="0 0 41.41 66.58"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M39.47,25.44l-5.81-6.63a8.35,8.35,0,0,1-1.8-3.45l-.4-1.62a7.37,7.37,0,0,0-2.74-4.12l-4-3L22.68,0,19.12,5.09a14.13,14.13,0,0,0-13.23,5.6C-4.43,23.81,15.05,48.34,1.81,55c0,0,31.05,2,31.05-.51a18,18,0,0,0-.26-2.54,40.11,40.11,0,0,0-2.8-9.67C28.28,39.18,21.66,34.6,19.12,31a6.32,6.32,0,0,1,0-7.12S29.8,29,31.33,32.06s6.62,0,9.16-2.54S39.47,25.44,39.47,25.44Z"/><path class="cls-1" d="M0,57.68v7.63a115.31,115.31,0,0,0,34.1,0V57.68A114,114,0,0,1,0,57.68Z"/></g></g></svg>
                <svg id="icon_dice" viewBox="0 0 52.63 57.24"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M50.44,12.62c1-.65,1.21-1.1,1.21-1.18,0-.28-.76-.9-1.44-1.2C50,10.13,32.05,1.45,29.15.38A6,6,0,0,0,27.09,0a5.86,5.86,0,0,0-2,.45C22.25,1.64,3.44,11,3.25,11.07c-.69.33-1.4,1-1.41,1.25,0,.09.2.53,1.24,1.15C7.61,16.14,26,25.92,26.16,26l.06,0a2,2,0,0,0,.71.07h.13a2,2,0,0,0,.68-.08l.09-.09v0C28,25.89,46,15.46,50.44,12.62Zm-23.88,2.1c-2,0-3.56-.92-3.56-2.06s1.59-2.06,3.56-2.06,3.55.92,3.55,2.06S28.52,14.72,26.56,14.72Z"/><path class="cls-1" d="M23.31,29.07C17.53,26.3,6.37,19.86,0,16.32L1.64,39.77c0,.91.37,3.53,1.91,4.64C5.87,46.08,21.26,56,23,57.07a3.83,3.83,0,0,0,1.8.1s.12-.18.12-.61c0-3.07-.12-16.45-.3-24.24C24.58,30.1,24.38,29.57,23.31,29.07ZM4.4,27.65c-1.46-.21-2.75-2-2.95-3.46-.31-2.28.76-3.59,2.65-2.9a5.07,5.07,0,0,1,2.43,2.93C7.32,27,6.23,27.91,4.4,27.65Zm8,13.2c-1.45-.21-2.75-2-2.95-3.46-.3-2.28.76-3.59,2.65-2.9a5.08,5.08,0,0,1,2.44,2.93C15.34,40.24,14.24,41.11,12.41,40.85ZM20.61,54c-1.46-.21-2.76-2-2.95-3.46-.31-2.28.75-3.59,2.64-2.9a5.1,5.1,0,0,1,2.44,2.94C23.53,53.34,22.43,54.22,20.61,54Z"/><path class="cls-1" d="M52.62,15.25C46.36,19,35.89,26,30.19,28.94c-1.05.54-1.39,1.16-1.38,3.38.11,17.34.4,22.69.43,24.26a1,1,0,0,0,.14.6A3.46,3.46,0,0,0,31.06,57c1.71-1.14,17.35-10.88,19.63-12.62,1.5-1.15,1.79-3.78,1.77-4.69M37.41,49c-.2,1.48-1.5,3.25-2.95,3.46-1.83.27-2.93-.61-2.14-3.42a5.1,5.1,0,0,1,2.44-2.94C36.65,45.39,37.71,46.7,37.41,49Zm0-9c-.2,1.48-1.5,3.25-2.95,3.46-1.83.26-2.93-.61-2.14-3.43a5.08,5.08,0,0,1,2.44-2.93C36.65,36.42,37.71,37.73,37.41,40Zm0-9c-.2,1.49-1.5,3.26-2.95,3.47-1.83.26-2.93-.62-2.14-3.43a5,5,0,0,1,2.44-2.93C36.65,27.44,37.71,28.76,37.41,31ZM50.86,41c-.2,1.49-1.5,3.26-3,3.47-1.83.26-2.93-.62-2.14-3.43a5,5,0,0,1,2.44-2.93C50.1,37.41,51.16,38.72,50.86,41Zm0-9c-.2,1.48-1.5,3.25-3,3.46-1.83.27-2.93-.61-2.14-3.42a5.07,5.07,0,0,1,2.44-2.94C50.1,28.44,51.16,29.75,50.86,32Zm0-9c-.2,1.48-1.5,3.25-3,3.46-1.83.26-2.93-.61-2.14-3.43a5.08,5.08,0,0,1,2.44-2.93C50.1,19.46,51.16,20.78,50.86,23.06Z"/></g></g></svg>
                <svg id="icon_economic" viewBox="0 0 62.02 52.27"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M43.06,8.23A25.12,25.12,0,0,1,25.6,47,22.13,22.13,0,1,0,43.06,8.23Z"/><path class="cls-1" d="M44.27,22.14A22,22,0,0,0,39.17,8c-.41-.5-.84-1-1.29-1.43s-1-.92-1.46-1.35A22.13,22.13,0,1,0,19,44c.64.09,1.3.16,2,.2.4,0,.81,0,1.22,0l.71,0A22.14,22.14,0,0,0,44.27,22.14ZM27.58,29.82a7.66,7.66,0,0,1-4.37,1.87v3.92H20.43V31.72a13,13,0,0,1-3.79-1,11.92,11.92,0,0,1-3.21-2.05L15,25.44a11.53,11.53,0,0,0,3.33,2.15,8.74,8.74,0,0,0,3.45.79,4.4,4.4,0,0,0,2.47-.6,2,2,0,0,0,.35-3,4,4,0,0,0-1.39-.88,23.74,23.74,0,0,0-2.3-.76A27.14,27.14,0,0,1,17.66,22a5.62,5.62,0,0,1-2.16-1.7,4.64,4.64,0,0,1-.9-3,4.94,4.94,0,0,1,1.57-3.73,7.47,7.47,0,0,1,4.26-1.85V8.06l2.78,0v3.64a13.87,13.87,0,0,1,3.11.7A13,13,0,0,1,29,13.69L27.53,17a14.38,14.38,0,0,0-3.1-1.43,9.26,9.26,0,0,0-2.79-.5,3.86,3.86,0,0,0-2.13.5,1.59,1.59,0,0,0-.79,1.4,1.86,1.86,0,0,0,.55,1.36,4.08,4.08,0,0,0,1.37.9A22.92,22.92,0,0,0,22.9,20a23.19,23.19,0,0,1,3.27,1.18,5.85,5.85,0,0,1,2.17,1.73,4.79,4.79,0,0,1,.9,3A5.1,5.1,0,0,1,27.58,29.82Z"/></g></g></svg>
                <svg id="icon_party" viewBox="0 0 30.63 45.2"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="10.21 10.1 6.71 13.97 11.78 13.02 14.75 6.81 17.94 13.04 22.87 13.97 19.36 10.1 23.94 7.68 18.81 6.97 20.76 2.17 16.38 4.93 14.79 0 13.2 4.93 8.81 2.17 10.77 6.97 5.64 7.68 10.21 10.1"/><path class="cls-1" d="M14.83,10.11,0,44.19l6.84.63a92.77,92.77,0,0,0,16.33,0l7.45-.66Z"/></g></g></svg>
                <svg id="icon_racing" viewBox="0 0 72.22 76.58"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M13.41,11.05C8.27,13.56,7.15,17.78,2,20.29l4.4,9c5.14-2.5,6.26-6.72,11.41-9.23C16.06,16.47,15.18,14.66,13.41,11.05Z"/><path class="cls-1" d="M34.3,20c-5.14,2.5-11.34-2.43-16.48.08l4.4,9c5.14-2.51,11.34,2.43,16.48-.08Z"/><path class="cls-1" d="M22.22,29.1c-5.15,2.51-6.27,6.73-11.41,9.24l4.4,9c5.14-2.51,6.26-6.73,11.41-9.23Z"/><path class="cls-1" d="M26.62,38.13l4.4,9c5.14-2.51,11.34,2.43,16.48-.08l-4.4-9C38,40.55,31.76,35.62,26.62,38.13Z"/><path class="cls-1" d="M39.85,0C34.71,2.51,35,8.46,29.9,11l4.4,9c5.14-2.51,4.81-8.47,10-11Z"/><path class="cls-1" d="M59,7.94C53.88,10.45,49.39,6.52,44.25,9l4.4,9c5.14-2.51,9.63,1.42,14.77-1.08Z"/><path class="cls-1" d="M48.65,18.05c-5.14,2.51-4.81,8.46-9.95,11l4.4,9c5.14-2.5,4.81-8.46,9.95-11Z"/><path class="cls-1" d="M53.05,27.07l4.4,9c5.14-2.51,9.63,1.42,14.77-1.09l-4.4-9C62.68,28.5,58.19,24.56,53.05,27.07Z"/><path class="cls-1" d="M27.36,76.14.08,19.64a.78.78,0,0,1,.36-1h0a.78.78,0,0,1,1,.37l27.28,56.5a.78.78,0,0,1-.36,1h0A.78.78,0,0,1,27.36,76.14Z"/></g></g></svg>
                <svg id="icon_tile" viewBox="0 0 59 64.28"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="9.04" y="8.47" width="40.92" height="40.92" transform="translate(-11.82 29.33) rotate(-45)"/><polygon class="cls-1" points="0 36.28 28 64.28 28 60.73 0 32.73 0 36.28"/><polygon class="cls-1" points="31 60.73 31 63.95 59 35.95 59 32.73 31 60.73"/></g></g></svg>
                <svg id="icon_word" viewBox="0 0 67.11 40.58"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.14,37a6.81,6.81,0,0,1-1.46-1.3,6.64,6.64,0,0,1-1-1.75L21.62,0H19.4Q16.61,7.22,13,16.44T6.49,33.07a10.33,10.33,0,0,1-1.2,2.26A7.12,7.12,0,0,1,3.58,36.9a6,6,0,0,1-1.78.7,11.51,11.51,0,0,1-1.8.32v2H14.81v-2a13.74,13.74,0,0,1-3.93-.72c-1.17-.41-1.75-1-1.75-1.72a7.32,7.32,0,0,1,.14-1.22,18.74,18.74,0,0,1,.5-1.94c.26-.81.55-1.7.87-2.66s.75-2.09,1.27-3.38h13.8L29,35.09a2.84,2.84,0,0,1,.17.64,5.13,5.13,0,0,1,.05.61c0,.41-.47.75-1.42,1a17.44,17.44,0,0,1-3.59.55v2H40.53v-2a8.19,8.19,0,0,1-1.72-.29A6.32,6.32,0,0,1,37.14,37ZM12.87,23.81,18.74,8.55l6,15.26Z"/><path class="cls-1" d="M65.27,37.59A2.82,2.82,0,0,1,64,37.31a2.94,2.94,0,0,1-1.15-1.08,3.38,3.38,0,0,1-.37-1.72c0-2.42,0-4.65.08-6.69s.08-4.39.08-7a11.86,11.86,0,0,0-.73-4.53,6.43,6.43,0,0,0-2.15-2.79,7.42,7.42,0,0,0-3.15-1.37,22.89,22.89,0,0,0-4.06-.32,11.81,11.81,0,0,0-3.46.54,12.46,12.46,0,0,0-3,1.32,8.87,8.87,0,0,0-2.35,2.08,3.89,3.89,0,0,0-.25,4.64,2.27,2.27,0,0,0,2,1,3.44,3.44,0,0,0,2.43-.8,2.38,2.38,0,0,0,.87-1.77,8.79,8.79,0,0,0-.26-2,7.45,7.45,0,0,1-.27-1.63,4.31,4.31,0,0,1,1.54-.91,6.57,6.57,0,0,1,2.37-.43,4.67,4.67,0,0,1,2.87.77,5.51,5.51,0,0,1,1.57,1.78,5.83,5.83,0,0,1,.65,1.95,11.67,11.67,0,0,1,.15,1.38v2.75a38.36,38.36,0,0,1-5.14,2q-3.81,1.27-5.06,1.75a14.78,14.78,0,0,0-2.13,1,6.59,6.59,0,0,0-1.83,1.48,6.51,6.51,0,0,0-1.33,2.25,8.26,8.26,0,0,0-.45,2.82,6.51,6.51,0,0,0,2,4.94,7.07,7.07,0,0,0,5.06,1.88,10.9,10.9,0,0,0,5-1,13.72,13.72,0,0,0,3.87-3.05h.16a4.66,4.66,0,0,0,1.65,3,5.41,5.41,0,0,0,3.45,1,7.63,7.63,0,0,0,2.23-.29c.66-.19,1.42-.45,2.29-.76V37.62C66.48,37.62,65.87,37.61,65.27,37.59Zm-8-3.25a10,10,0,0,1-2.52,2.26,6.3,6.3,0,0,1-3.47,1,4.4,4.4,0,0,1-3.06-1.08A4.35,4.35,0,0,1,47,33.09,5.65,5.65,0,0,1,47.82,30,7.4,7.4,0,0,1,50,27.78a16.45,16.45,0,0,1,3.3-1.66c1.18-.45,2.55-.9,4.13-1.37Z"/></g></g></svg>
            </div>
        </div>
        <div class="content">
            <div class="main">
                <div id="featured_image">
                    <img src="assets/img/placeholder.png">
                </div>
                <div class="description_container">
                    <div id="description">
                        [Description]
                    </div>
                    <div id="affiliate">[Rev]</div>
                </div>
            </div>
            <div class="details">
                <header><div class="left"><div class="time">Time</div> <div class="player">Players</div> <div class="ages">Ages</div></div> <!-- <div class="right">Full Review</div> --></header>
                <div id="data_fields">
                    <div id="play_time">[00]<span>minutes</span></div><div id="players">[0-0]</div><div id="ages">[00+]</div>
                    <a target="_blank" href="#" id="amazon">
                        <div class="az-heading">Buy on Amazon</div>
                        <div id="az_stars">[Loading Rating]</div>
                        <div id="az_regPrice">[Loading Price]</div>
                        <div id="az_nowPrice">[Loading Price]</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>