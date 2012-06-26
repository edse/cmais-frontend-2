// ensure the array currently contains no other nav image list by re-initialising it
var imagePreloadArray = new Array();
// set the path to the images
var imagePath = '_template/images/submenu/games/games_subnav_';
// initialise the array
preloadImage(imagePath+'home_r.gif');
preloadImage(imagePath+'home_c.gif');
preloadImage(imagePath+'browse_all_r.gif');
preloadImage(imagePath+'browse_all_c.gif');
preloadImage(imagePath+'by_subject_r.gif');
preloadImage(imagePath+'by_subject_c.gif');
preloadImage(imagePath+'by_theme_r.gif');
preloadImage(imagePath+'by_theme_c.gif');
preloadImage(imagePath+'by_character_r.gif');
preloadImage(imagePath+'by_character_c.gif');
preloadImage(imagePath+'art_r.gif');
preloadImage(imagePath+'art_c.gif');
// preload the images
MM_preloadImages(imagePreloadArray);
