// Place your application-specific JavaScript functions and classes here
// This file is automatically included by javascript_include_tag :defaults

function add_fields(link, association, content, many) {  
    var new_id = new Date().getTime();  
    var regexp = new RegExp("new_" + association, "g");  
    $(link).parent().before(content.replace(regexp, new_id));
    if (many == "one") { $(link).remove(); }
}

function add_form(link, content, many) {
  $(link).parent().before(content);
  $(link).remove();
}

$(document).ready(function() {
  $("#fuzz").css("height", $(document).height()+182);
  $(".share-content").click(function() {
    $("body").delegate("a.sharePopupClose", "click",function() {
      $("#sharePopup").remove();
      $("#fuzz").fadeOut();
    });
    $("#fuzz").fadeIn();
  });
  $(".chogr-textbox").live("click", function() {
    $(this).focus();
    $(this).select();
  });
  $("#fuzz").live("click", function() {
    $("#sharePopup").remove();
    $("#fuzz").fadeOut();
  });
});