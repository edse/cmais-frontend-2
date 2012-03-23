
  var request_header = jQuery.ajax({
    dataType: 'html',
    success: function(data) {
      if (data)
        jQuery('body #drwho').before(data);
    },
    url: '/doctorwho/quintoano/ajax/insert_header.php'
  });
  
  var request_footer = jQuery.ajax({
    dataType: 'html',
    success: function(data) {
      if (data)
        jQuery('#footer').after(data);
    },
    url: '/doctorwho/quintoano/ajax/insert_footer.php'
  });