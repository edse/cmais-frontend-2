// ensure the array currently contains no other nav image list by re-initialising it
var imagePreloadArray = new Array();
// set the path to the images
var imagePath = '_template/images/submenu/parents/parents-subnav-';
// initialise the array
preloadImage(imagePath+'parents_r.gif');
preloadImage(imagePath+'parents_c.gif');
preloadImage(imagePath+'topics_r.gif');
preloadImage(imagePath+'topics_c.gif');
preloadImage(imagePath+'newsletters_r.gif');
preloadImage(imagePath+'newsletters_c.gif');
preloadImage(imagePath+'howto_r.gif');
preloadImage(imagePath+'howto_c.gif');
// preload the images
MM_preloadImages(imagePreloadArray);
