/* javascript */

var request_header = jQuery.ajax({ 
  dataType: 'html',
  success: function(data) {
    if (data)
      jQuery('body').prepend(data);
  },
  url: '/aloescola/ajax/insert_header.php?randNum='+ new Date().getTime()
});

var request_footer = jQuery.ajax({
  dataType: 'html',
  success: function(data) {
    if (data)
      jQuery('body').append(data);
  },
  url: '/aloescola/ajax/insert_footer.php?randNum='+ new Date().getTime()
});