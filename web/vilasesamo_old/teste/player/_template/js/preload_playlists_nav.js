// ensure the array currently contains no other nav image list by re-initialising it
var imagePreloadArray = new Array();
// set the path to the images
var imagePath = '_template/images/submenu/playlists/playlists_subnav_';
// initialise the array
preloadImage(imagePath+'playlist_r.gif');
preloadImage(imagePath+'playlist_c.gif');
preloadImage(imagePath+'browse_all_r.gif');
preloadImage(imagePath+'browse_all_c.gif');
preloadImage(imagePath+'by_subject_r.gif');
preloadImage(imagePath+'by_subject_c.gif');
preloadImage(imagePath+'by_theme_r.gif');
preloadImage(imagePath+'by_theme_c.gif');
preloadImage(imagePath+'by_character_r.gif');
preloadImage(imagePath+'by_character_c.gif');
// preload the images
MM_preloadImages(imagePreloadArray);
