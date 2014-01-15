// ensure the array currently contains no other nav image list by re-initialising it
var imagePreloadArray = new Array();
// set the path to the images
var imagePath = '_template/images/submenu/on_air/on_air-subnav-';
// initialise the array
preloadImage(imagePath+'home_r.gif');
preloadImage(imagePath+'home_c.gif');
preloadImage(imagePath+'episode-guide_r.gif');
preloadImage(imagePath+'episode-guide_c.gif');
preloadImage(imagePath+'celebrity-guests_r.gif');
preloadImage(imagePath+'celebrity-guests_c.gif');
preloadImage(imagePath+'cast_r.gif');
preloadImage(imagePath+'cast_c.gif');
preloadImage(imagePath+'characters_r.gif');
preloadImage(imagePath+'characters_c.gif');
preloadImage(imagePath+'history_r.gif');
preloadImage(imagePath+'history_c.gif');
// preload the images
MM_preloadImages(imagePreloadArray);
