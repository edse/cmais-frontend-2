
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>comic builder teste</title>
  <meta name="description" content="Make your own comics online with Chogger. Our comic strip creator lets you draw cartoons, add captions to photos, and share your comics - for free!">
  <meta name="keywords" content="create, comic, comic creator, comic maker, comic strip, webcomic, cartoon, draw, comic books, graphic novels, education, classroom, teaching, schools">

  <meta name="csrf-param" content="authenticity_token"/>
  <meta name="csrf-token" content="oeVeTda0QuXeuws+LYz4PVNr5b5zBvXvh5NsBBo3MKE="/>
  

 

  <link href="css/button.css?<?php echo time(); ?>" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/style.css?<?php echo time(); ?>" media="screen" rel="stylesheet" type="text/css" />
  <script src="http://cmais.com.br/portal/js/jquery-1.4.4.min.js?<?php echo time(); ?>" type="text/javascript"></script>
  <script src="http://cmais.com.br/portal/js/rails.js?<?php echo time(); ?>" type="text/javascript"></script>
  <script src="http://cmais.com.br/portal/js/modernizr.min.js?<?php echo time(); ?>" type="text/javascript"></script>
  <!--script src="/javascripts/modernizr-1.6.min.js?<?php echo time(); ?>" type="text/javascript"></script-->
  <script src="/javascripts/application.js?<?php echo time(); ?>" type="text/javascript"></script>

  <!--[if !IE 7]>
                <style type="text/css">
                        #creator-container {display:table;height:100%}
                </style>
        <![endif]-->

  <style type="text/css">
    /* Change the default so we can make the comic creator use 100% of the available area. */
    body {
      background:#e3e3e3 url('/images/newsprint_tile.jpg');
    }
    #creator-container {
      width:100%;
      height:100%;
      /*background:url(/images/blue_tile.jpg);*/
      background:#e3e3e3 url('/images/newsprint_tile.jpg');
    }
    #creator-header {
      clear:both;
      width:100%;
      min-width:765px;
      /*height:100px;*/
      height:60px;
      background:url('/images/creator-header-bg.png') repeat-x;
    }
    #creator-header #left {
      float:left;
      width:22%;
      /*height:100px;*/
      height:60px;
      min-width:200px;
      max-width:200px;
    }
    #creator-header #left #logo-div {
      clear:both;
      text-align:center;
      height:45px;
      padding-top:5px;
    }
    #creator-header #left #creator-tabs {
      display:none;
      clear:both;
      width:100%;
      height:40px;
      margin-top:10px;
    }
    #creator-header #left #creator-tabs div {
      float:left;
      width:49px;
      height:38px;
      background-color:gray;
      border-top:1px solid #444;
      border-right:1px solid #444;
      border-bottom:1px solid #444;
    }
    #creator-header #right {
      float:right;
      width:70%;
      /*height:100px;*/
      height:60px;
      min-width:500px;
    }
    #creator-header #right #initial-div-top {
      clear:both;
      height:45px;
      text-align:right;
      padding:5px 10px 0 0;
    }
    #creator-header #right #initial-div-top #user-status {
      display:none;
      float:left;
      font-size:20px;
      color:#ddd;
    }
    #creator-header #right a {
      font-weight:bold;
      font-size:22px;
      color:#222;
    }
    #creator-header #right #initial-div-top #initial-buttons {
      float:right;
    }
    #creator-header #right #initial-div-bottom {
      display:none;
      clear:both;
      height:34px;
      margin-top:16px;
      text-align:center;
    }
    #creator-header #right #initial-div-bottom #help-div {
      float:right;
      padding-right:10px;
    }
    #creator-header #right .hiddenDiv {
      display:none;
    }
    #creator-header #right #sign-in-div table td {
      vertical-align:middle
    }
    #creator-header #right #sign-in-div table input, #creator-header #right #sign-up-div table input {
      margin-right:20px;
    }
    #creator-header #right .right-top {
      float:right;
      margin-top:5px;
    }
    #creator-header #right .right-top td {
      vertical-align:top;
    }
    #creator-header #right .right-top label {
      font-weight:bold;
      font-size:20px;
    }
    #creator-header #right .right-top input.text {
      width:230px;
      margin-right:5px;
      font:normal 12px Arial;
    }
    #creator-header #right .right-top #comic-title-input {
      margin-bottom:6px;
      padding:3px;
    }
    #creator-header #right .right-top textarea {
      width:200px;
      height:70px;
      padding:3px;
      margin-right:10px;
      font:normal 12px Arial;
    }
    #creator-header #right .right-top #comic-title-counter {
      float:right;
      position:relative;
      margin-top:5px;
      width:30px;
    }
    #creator-header #right .right-bottom {
      clear:both;
      padding:10px 10px 0 0;
      text-align:right;
    }
    #creator-header #right .right-bottom #mark-private {
      position:relative;
      top:-10px;
    }
  </style>

  <script src="/javascripts/jquery.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/rails.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/swfobject.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/application.js?1299443147" type="text/javascript"></script>
  <script src="/javascripts/jquery.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/rails.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/extMouseWheel.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/application.js?1299443147" type="text/javascript"></script>

  <script type="text/javascript">
    var flashvars = {

    };
    var params = {
      allowScriptAccess: "sameDomain",
      wmode: "window",
      menu: "false"
    };
    var attributes = {
      id: "creator",
      name: "creator"
    };

    swfobject.embedSWF("/swf/creator.swf", "replace_swf", "100%", "100%", "10.0.0", "/swf/expressInstall.swf", flashvars, params, attributes);

    var changedHover = false;
    $(function(){
      bindResize();
      $("#comic-title-input").val("");      
      $("#comic-title-hover-text").focus(function() {
        changedHover = true;
      });
      $("#sign-in").click(function() {
        signIn();
      });
      $("#sign-up").click(function() {
        signUp();
      });
      $("#sign-in-submit").click(function() {
        signInSubmit();
      });
      $("#sign-up-submit").click(function() {
        signUpSubmit();
      });
      $("#help").click(function() {
        help();
      });
      $("#redo").click(function() {
        redo();
      });
      $("#undo").click(function() {
        undo();
      });
      $("#save-progress").click(function() {
        saveProgress();
        setTimeout(function() {
          resetSaveProgress();
        },20000); // delay 20 seconds
      });
      $("#finish-comic-button").click(function() {
        resetSaveProgress();
        hideTop(true);
        $("#creator-header").animate({
          height: 150
        }, 500, function() {
          $("#meta-data-div").show();
          $("#comic-title-input").focus();
        });
      });
      $("#publish-comic").click(function() {
        publishComic();
      });
      $("#save-for-later").click(function() {
        saveForLater();
      });
      $(".cancel-button").click(function() {
        $(this).closest(".hiddenDiv").hide();
        $("#creator-header #left #creator-tabs").animate({
          "margin-top":"10px"
        }, 500);
        $("#creator-header").animate({
          //height: 100
          height: 60
        }, 500, function() {
          $("#initial-div").show();
          $("#creator-header").css("background","url('/images/creator-header-bg.png') repeat-x");
        });
      });
    });
    
    function hideTop(moveTabs) {
      $("#initial-div").hide();
      $("#creator-header").css("background","url('/images/blue_tile.jpg')");
      if (moveTabs) {
        $("#creator-header #left #creator-tabs").animate({
          "margin-top":"60px"
        }, 500);
      }
    }
    
    function signUp() {
      hideTop(true);
      $("#creator-header").animate({
        height: 150
      }, 500, function() {
        $("#sign-up-div").show();
        $("#sign-up-username").focus();
      });
    }
    
    function signIn() {
      hideTop(false);
      $("#sign-in-div").show();
      $("#sign-in-username").focus();
    }
    
    function signInSubmit() {
      alert("Sign In");
    }
    
    function signUpSubmit() {
      alert("Sign Up");
    }
    
    function help() {
      alert("Help");
    }
    
    function undo() {
      alert("Undo");
    }
    
    function redo() {
      alert("Redo");
    }
    
    function saveProgress() {
      var $progress = $('#save-progress');
      $('#save-progress .label').css('color','#888');
      $('#save-progress .label').html('Saved');
      $progress.css('cursor','default');
      $progress.css('outline-style','none');
      $progress.unbind('mouseenter').unbind('mouseleave') 
    }
    
    function resetSaveProgress() {
      $('#save-progress .label').html('Save Progress');
      $('#save-progress .label').css('color','#fff');
      $('#save-progress').css('cursor','pointer');
    }
    
    var submitted = false;
    function publishComic() {
      if ($("#comic-title-input").val() !== "") {
        if (submitted !== true) {
          submitted = true;
          $("#publish-comic").css("cursor","default");
          $("#publish-comic .label").html("Generating...");
          $("#publish-comic .label").css("color","#666666");
          $("#publish-comic:hover .label").css("color","#666666");
        
          var $form = $('#publish_form');

          var metadata = document.createElement("input");
          metadata.setAttribute('name', 'comic[metadata]');
          metadata.setAttribute('value', getComicMetadata());
          metadata.setAttribute('type', 'hidden');
          $form.append(metadata);

          $.ajax({
            url: $form.attr('action'),
            type: "POST",
            data: $form.serialize(),
            dataType: 'json',
            success: function(data) {
              if(window.opener) {
                window.opener.location.href = '/' + data.comic.guid;
                window.close();
              }
              else {
                window.location = '/' + data.comic.guid;
              }
            },
            error: function() {
              alert("We're sorry, but an error has occurred while saving your comic.");
            }
          });
        }
      }
      else {
        $("#comic-title-input").focus();
        $("#comic-title-input").prev("label").css("color","#ff0000");
        $("#comic-title-input").prev("label").css("font-weight","bold");
      }
    }
    
    var titleMax = 30;
    function countCharacters() {
      if (changedHover == false) {
        $("#comic-title-hover-text").val($("#comic-title-input").val());
      }
      var len = $('#comic-title-input').val().length;
      var remaining = titleMax - len;
      var $counter = $('#comic-title-counter');
      $counter.html(remaining);
      if (remaining >= 10) {
        $counter.css('color','#000');
      }
      else if (remaining > 0) {
        $counter.css('color','#ffa500');
      }
      else if (remaining <= 0) {
        $counter.css('color','#d42d00');
      }
      else {
        $counter.html('');
      }
    }

    function bindResize() {
      var $creator = $('#creator_swf');
      var $creatorContainer = $('#creator-container');
      var $header = $('#creator-header');
      $(window).resize(function () {
        $creator.height($creatorContainer.height() - $header.height());// - $header.height());
      });
      $(window).resize();
    }
    /*
    */

    // This function gets called from the comic creator swf onCreationComplete
    function creator_initHandler(capabilities) {

      // pull the images out of the hidden list
      var images = [];
      $('#images li').each(function() {
        images.push($(this).text());
      });
      if(images.length > 0)
        document.getElementById('creator').addImages(images);
    }
    
    function getComicMetadata() {
      var json = document.getElementById('creator').getComicMetadata();
      //alert(json);
      return json
    }
    
    //preload images
    (function($) {
      var cache = [];
      // Arguments are image paths relative to the current page.
      $.preLoadImages = function() {
      var args_len = arguments.length;
      for (var i = args_len; i--;) {
        var cacheImage = document.createElement('img');
        cacheImage.src = arguments[i];
        cache.push(cacheImage);
      }
      }
    })(jQuery)
    jQuery.preLoadImages("/images/blue_tile.jpg");

  </script>
</head>

<body>
  <div id="creator-container">
    <header id="creator-header">
      <div id="left">
        <div id="logo-div">
          <img alt="Chogger-logo-100" id="logo" src="/images/logo/chogger-logo-100.png?1299443147" title="Chogger" />
        </div>
        <div id="creator-tabs">
          <div>
            <a href="">1</a>
          </div>
          <div>
            <a href="">2</a>
          </div>
          <div>
            <a href="">3</a>
          </div>
          <div>
            <a href="">4</a>
          </div>
        </div>
      </div>
      <div id="right">
        <div id="initial-div">
          <div id="initial-div-top">
            <div id="user-status">
              You're not signed in.<br /><a href="#" id="sign-in">Sign In</a> or <a href="#" id="sign-up">Sign Up</a> to save this comic.
            </div>
            <div id="initial-buttons">
              <!--
              <a href="#" class="textured gray dark" id="save-progress" style="width:150px; padding:2px; font-size:11px"><span class="bg"></span><span class="label">Save Progress</span></a>
              -->
              <a href="#" class="textured green dark" id="finish-comic-button" style="width:150px; padding:2px; font-size:11px"><span class="bg"></span><span class="label">Finish</span></a>
            </div>
          </div>
          <div id="initial-div-bottom">
            <a href="#" class="textured white" id="undo" style="width:80px; padding:2px; font-size:10px"><span class="bg"></span><span class="label">Undo</span></a>
            <a href="#" class="textured white" id="redo" style="width:80px; padding:2px; font-size:10px"><span class="bg"></span><span class="label">Redo</span></a>
            <div id="help-div">
              <a href="#" class="textured gray dark" id="help" style="width:50px; padding:2px; font-size:8px"><span class="bg"></span><span class="label">Help</span></a>
            </div>
          </div>
        </div>
        <div id="meta-data-div" class="hiddenDiv">
          <div class="right-top">
            <form accept-charset="UTF-8" action="/comics" class="new_comic" enctype="multipart/form-data" id="publish_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="oeVeTda0QuXeuws+LYz4PVNr5b5zBvXvh5NsBBo3MKE=" /></div>
  
  <table>
    <tr>
      <td>
        <label for="comic_title">Comic Title:</label><br />
          <input class="text" id="comic-title-input" name="comic[title]" onKeyUp="countCharacters();" size="30" type="text" />
        <div id="comic-title-counter">&nbsp;</div>
        <br />
        <label for="comic_hover_text">Hover Text:</label><br />
          <input class="text" id="comic-title-hover-text" name="comic[hover_text]" size="30" type="text" />
      </td>
      <td>
        <label for="comic_description">Description:</label><br />
        <textarea cols="40" id="comic_description" name="comic[description]" rows="20"></textarea>
      </td>
      <td>
        <label for="comic_tag_list">Tags:</label><br />
        <textarea cols="40" id="comic_tag_list" name="comic[tag_list]" rows="20"></textarea>
      </td>
    </tr>
  </table>
  <!--
  <p>
    <label for="comic_metadata">Metadata</label><br />
    <textarea cols="40" id="comic_metadata" name="comic[metadata]" rows="20"></textarea>
  </p>
  <p>
    <label for="comic_published">Published</label><br/>
    <input name="comic[published]" type="hidden" value="0" /><input checked="checked" id="comic_published" name="comic[published]" type="checkbox" value="1" />
  </p>
  <p>
    <select id="comic_series_id" name="comic[series_id]"><option value="">Select a Series</option>
</select>
    <a href="/series/new">or create a new series</a>
  </p>
    <p><input id="comic_submit" name="commit" type="submit" value="Create Comic" /></p>
  -->
</form>
          </div>
          <div class="right-bottom">
            <!--
            <input name="mark-private" id="mark-private" type="checkbox">
            <label for="mark-private" style="color:#000; font-size:20px"> Mark as Private</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            -->
            <a href="#" class="cancel-button" style="color:#000; font-size:20px">Cancel</a>
            <!--
            <a href="#" class="textured gray dark" id="save-for-later" style="width:150px; padding:2px; font-size:11px"><span class="bg"></span><span class="label">Save for Later</span></a>
            -->
            <a href="#" class="textured light_violet dark" id="publish-comic" style="width:150px; padding:2px; font-size:13px"><span class="bg"></span><span class="label">Publish Comic</span></a>
          </div>
        </div>
        <div id="sign-in-div" class="hiddenDiv">
          <div class="right-top" style="float:left">
            <table>
              <tr>
                <td>
                  <label for="sign-in-username">Username:</label><br />
                  <input name="sign-in-username" type="text" id="sign-in-username" />
                </td>
                <td>
                  <label for="sign-in-password">Password:</label><br />
                  <input name="sign-in-password" type="password" id="sign-in-password" />
                </td>
                <td>
                  <a href="#" class="textured blue dark" id="sign-in-submit" style="width:150px; padding:2px; font-size:13px"><span class="bg"></span><span class="label">Sign In</span></a>
                  <a href="#" class="cancel-button" style="color:#000; font-size:20px">Cancel</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div id="sign-up-div" class="hiddenDiv">
          <div class="right-top" style="float:left">
            <table>
              <tr>
                <td>
                  <label for="sign-up-username">Username:</label><br />
                  <input name="sign-up-username" type="text" id="sign-up-username" />
                  <br /><br />
                  <label for="sign-up-password">Password:</label><br />
                  <input name="sign-up-password" type="password" id="sign-up-password" />
                </td>
                
                <td>
                  <label for="sign-up-email">Email:</label><br />
                  <input name="sign-up-email" type="text" id="sign-up-email" />
                  <br /><br />
                  <label for="sign-up-password2">Password again:</label><br />
                  <input name="sign-up-password2" type="password" id="sign-up-password2" />
                </td>
                
                <td>
                  <br />
                  <input type="checkbox" name="agree-to-terms" id="agree-to-terms" /><label for="agree-to-terms">I agree to <a href="">Terms &amp; Conditions</a></label>
                  
                  <br /><br />
                  <div style="margin-top:14px;">
                    <a href="#"><img src="/images/authbuttons/facebook_32.png"></a>&nbsp;&nbsp;<a href="#"><img src="/images/authbuttons/twitter_32.png"></a>
                    <a href="#" class="textured blue dark" id="sign-up-submit" style="width:150px; padding:2px; font-size:13px"><span class="bg"></span><span class="label">Sign Up</span></a>
                    <a href="#" class="cancel-button" style="color:#000; font-size:20px">Cancel</a>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </header> 
    <div>
      <div id="creator_swf">
        <div id="replace_swf">
          <p>You don't have Flash... we're so sorry.  We don't support platforms without Flash quite yet.</p>
        </div>
      </div>
                        <!--<div id="creator_swf">Sorry! Please excuse us while we upgrade our system.</div>-->


      <ul id="images" style="display:none;visibility:hidden;">
      </ul>
    </div>
  </div> <!-- end of #creator-container -->

  <!-- Additional javascript at the bottom for fast page loading -->
  <!--[if lt IE 7 ]>
  <script src="/js/libs/dd_belatedpng.js"></script>
  <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->


<!-- yui profiler and profileviewer - remove for production -->
<script src="/javascripts/profiling/yahoo-profiling.min.js?1299443147" type="text/javascript"></script>
<script src="/javascripts/profiling/config.js?1299443147" type="text/javascript"></script>
<!-- end profiling code -->

</body>
</html>
