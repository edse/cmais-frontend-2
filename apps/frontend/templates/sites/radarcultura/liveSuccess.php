<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/jquery-1.7.2.min.js"></script>
    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    <script src="/radar2012/js/radarcultura.js"></script>
    
    <!--container-->
    <div class="container">
      <!--FEEDBACK-->
      <div class="btn-feedback">
        <a href="#modal-feedback" class="" data-toggle="modal">Feedback</a>
      </div>  
      <!--/FEEDBACK-->
        <!-- Modal Feedback-->
        <div id="modal-feedback" class="modal playlist hide fade">
            <div class="modal-header">
              <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h2>Indique esta música</h2>
            </div>
            <div class="modal-body playlist">
              <form action="" method="post" id="form-feedback" class="span5">
                <legend>Feedback Radar Cultura</legend>
                <div class="control-group">
                  <label>Nome</label>
                  <input type="text" placeholder="Nome" name="nome" class="input-large required">
                  <span class="help-block"></span>
                </div>  
                <div class="control-group">  
                  <label>E-mail</label>
                  <input type="text"  name="email" placeholder="email@dominio.com.br" class="input-large required">
                  <span class="help-block"></span>
                </div> 
                
                <div class="control-group mensagem">  
                  <label>Mensagem</label>
                  <textarea name="mensagem" class="required" rows="4"></textarea>
                  <span class="help-block"></span>
                </div>  
                
              </div>
                

              
              <div class="modal-footer">
                  <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>
                  <img src="/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
                  <input type="submit" class="btn btn-primary btn-enviar"></a>
                </div>
              </form>               
            </div>
            
            <script type="text/javascript" src="/portal/js/validate/jquery.validate.min.js"></script>
            <script src="/portal/js/messages_ptbr.js" type="text/javascript"></script>
            <script type="text/javascript">
            $(document).ready(function(){
              
              var validator = $('#form-feedback').validate({
                rules:{
                  nome:{
                    required: true,
                    minlength: 2
                  },
                  email:{
                    required: true,
                    email: true
                  },
                  mensagem:{
                    required: true
                  }
                },
                highlight: function(label) {
                  $(label).closest('.control-group').addClass('error');
                },
                success: function(label){
                  label
                    .text('OK!').addClass('valid')
                    .closest('.control-group').addClass('success');
                },
                submitHandler: function(form){
                  $.ajax({
                    type: "POST",
                    dataType: "text",
                    data: $("#form-feedback").serialize(),
                    beforeSend: function(){
                      $('#loader2').show();
                      $('.btn-enviar').hide();
                    },
                    success: function(data){
                      window.location.href="javascript:;";
                      if(data == "1"){

                      }
                      else {

                      }
                    }
                  });         
                },
                
                


              });
            });
                
        </script>

        <!--Modal Feedback-->
              
      <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>

      <!-- logo --->
      <div class=" row pull-right">
        <ul class="span2 direita row pull-right">
          <li class="span2 logo row pull-right">
            <img src="/radar2012/images/Logo-Radar.jpg" alt="Radar Cultura"  style="width:90%;"/>
          </li>
          <li class="span2 row">
            <a href="javascript: window.open('http://172.20.17.129/radar2012/player.html?start=am','controle','width=450,height=150,left=50,top=50,scrollbars=no'); return false;" class="btn btn-inverse btn-mini"><i class="icon-music icon-white"></i> Ouvir a Rádio Cultura Brasil</a>
          </li>
        </ul>  
      </div>
      <!-- logo --->

     <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section' => $section)) ?>
        
     
     <div class="row span5">  
        <div class="page-header">
          <h4>Transmiss&atilde;o ao vivo</h4>
        </div>
        <div class="container">
          <div id="videoPlayer"></div>
        </div>
        <script src="http://www.culturabrasil.com.br//_libs/mediaplayer/swfobject.js" type="text/javascript"></script>

        <script>
        var so = new SWFObject("http://www.culturabrasil.com.br/_libs/mediaplayer/player.swf","cam1","450","338","9");
        so.addParam("allowscriptaccess","always");
        so.addParam("allowfullscreen","true");
        so.addParam("wmode","transparent");
        so.addVariable('volume', "75");
        so.addVariable('controlbar', "over");
        so.addVariable('autostart', "true");
        so.addVariable('streamer', 'rtmp://200.136.27.12/live');
        so.addVariable('file', "galeria");
        so.addVariable('type', 'video');
        so.write("videoPlayer");
        </script>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

        <div class="row container span4 pull-left">
            <div style="float:left; margin:0 5px 0 0; ">
              <div id="fb-root"></div><script src="http://connect.facebook.net/pt_BR/all.js#appId=117801368309710&amp;xfbml=1"></script><fb:like href="http://www.culturabrasil.com.br/sala-de-tv" send="false" layout="button_count" width="200" show_faces="true" font=""></fb:like>
              <g:plusone size="medium" count="true"></g:plusone>
              <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" style="float:right; display:block">Tweet</a>
            </div>
       </div>
        
        <!-- comentario facebook -->
             
                <fb:comments href="http://cmais.com.br" numposts="3" width="450" publish_feed="true"></fb:comments>
                <hr />
              
              <!-- /comentario facebook -->
       </div>
         <div class="row span5 pull-right">
         <div class="page-header">
          <h4>Bate Papo</h4>
         </div> 
         <iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=aa92a56e37/height=680/width=467" scrolling="no" height="680px" width="467px" frameBorder ="0" allowTransparency="true"  ><a href="http://www.coveritlive.com/mobile.php/option=com_mobile/task=viewaltcast/altcast_code=aa92a56e37" >Rádio Cultura Brasil</a></iframe>
       </div>
        
        <div class="container pull-left">
          <div class="banner-radio horizontal">
            <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
        </div>

     </div>