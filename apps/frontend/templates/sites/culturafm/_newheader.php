<!--header principal-->
  <div id="main-header" role="main" role="banner" >
    
    <!--logo-->
    <h1>
      <a href="http://culturafm.cmais.com.br" title="">
        <img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
      </a>
    </h1>
    <!--/logo-->
    
    <!-- network -->
    <?php if(isset($program) && $program->id > 0): ?>
    <?php include_partial_from_folder('sites/culturafm','global/social-network', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
    <?php endif;?>
    <!-- network -->
    
    <!--box ouça as rádios -->
    <div id="listen">
      <h1>Ouça as rádios</h1>
      <a href="javascript: window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" title="Rádio Cultura Brasil" class="link-radio cbrasil">Cultura brasil</a>
      <a href="javascript: window.open('http://culturafm.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" title="Rádio Cultura FM" class="link-radio cfm">Cultura FM</a>
    </div>  
    <!--/box ouça as rádios -->
    
    <?php if(isset($siteSections)): ?>
    <!-- main-nav -->    
    <nav role="navigation" id="main-nav">
      <?php include_partial_from_folder('sites/culturafm','global/menuNovo', array('siteSections' => $siteSections))?>
    </nav>
    <!-- /main-nav -->
    <?php endif;?>
    
  </div>
  <!--/header principal-->
  <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  $('.c-radio .chapeu').remove();
  $('.c-radio').find('.titulos').remove();
  $('#search_field').focus(function(){
    $(this).val('');
  });
  $('#search_field').focusout(function(){
    if($(this).val() == ''){
      $(this).val('BUSCA');   
    }
  });
  
  //$('.c-radio').append('<div class="seta2" style="top: 14px;left: 10px;"></div>')
  var validator = $('#form-email').validate({
        
      submitHandler: function(form){
        //form.submit();
        $.ajax({
          type: "POST",
          dataType: "text",
          //url: "http://app.cmais.com.br/actions/culturafm/newsletter.php",
          url: "/actions/culturafm/newsletter.php",
          data: $("#form-email").serialize(),
          beforeSend: function(){
            $('#send_news, #news, #lbl_news').hide();
            $('#ajax-loader').show();
          },
          success: function(data){
            //window.location.href="#";
            if(data == "0"){
              $('#ajax-loader, #news').hide();
              $('#msgAcerto').show();
            }
            else {
              $('#ajax-loader, #news').hide();
              $('#msgErro').show();
            }
          }
        });         
      },
      rules:{
        email_newsletter:{
          required:true,
          email: true
        }
      },
      success: function(label){
        label.addClass("checked");
        $("label.error.checked").css("display","none");
        label.html("&nbsp;");
      }
    });
});
</script>
