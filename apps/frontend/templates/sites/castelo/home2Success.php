<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>

<!--CASTELO--> 
<div id="castelo" >
    
 
    <!-- CAPA SITE -->
    <div id="capa-site"> 
      
      <!--FANCYBOX-->
      <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js" ></script>
      <link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
      <!--/FANCYBOX-->     

      <!-- BARRA SITE -->
      <div id="barra-site">
        
        
        <div class="topo-programa">
          
          <h2>
            <a href="http://cmais.com.br/castelo" style="text-decoration: none;">
          
                <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/img-logo-castelo.png" class="logo" alt="Castelo Ra Tim Bum" />
              
            </a>
          </h2>
          

          <?php include_partial_from_folder('sites/castelo','global/like', array('uri' => $uri)) ?>
          
          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('sites/castelo','global/menu', array('siteSections' => $siteSections, 'section' => $section)) ?>

        </div>
        <!-- /box-topo -->
        
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
            <script>
              var questions = new Array("A senha de hoje:</br></br><span class='senha2'>Quantos anos tem o nino?</span>",
                                        "A senha de hoje:</br></br><span class='senha2'>Quem é o melhor amigo do Godofredo?</span>",
                                        "A senha de hoje:</br></br><span class='senha2'>O que o Dr. Abobrinha quer construir no lugar do Castelo?</span>",
                                        "A senha de hoje:</br></br><span class='senha2'>Qual é o nome do irmão do Perônio?</span>", 
                                        "A senha de hoje:</br></br><span class='senha2'>Como faz pra chamar a caipora?</span>",
                                        "A senha de hoje:</br></br><span class='senha2'>Quem toma conta da biblioteca do Castelo?</span>",
                                        "A senha de hoje:</br></br><span class='senha2'>Que comida gostosa o Bongô sempre trazia pro pessoal?</span>");
              var answers = new Array("300",
                                      "Mau",
                                      "Prédio",
                                      "Tíbio",
                                      "Assobio",
                                      "Gato",
                                      "Pizza");
              var caracters = new Array("3","3","6","5","7","4","5");
              var number = new Array("1","2","3","4","5","6","7");
              
              var k = Math.floor(Math.random() * questions.length);
              var currentQuestion  = questions[k];
              var currentAnswer    = answers[k].toLowerCase();
              var numbercaracters  = caracters[k];
              var numbersK         = number[k];
              
              $(function(){
                $('#questao').html(currentQuestion);
                $('#formsenha').append('<input type="text" class="resposta" name="resposta" id="resposta"  maxlength="'+numbercaracters+'" /><div class="sublinhado a'+numbersK+'"></div>');
                
                $('#resposta').keyup(function(){
                  answered = $('#resposta').val().toLowerCase()
                  if (answered == currentAnswer) {
                    $('.balao, .gif-porteiro').hide();
                    $('.gif-abre').fadeIn(2000, function(){
                      $('.gif-abre').fadeOut('slow',function(){
                        window.location.href = "http://cmais.com.br/castelo/hall";
                      });
                    });
                    
                  }
                  
                });
                
                
              });
            </script>
            
            <!--PORTEIRO-->
            <div class="balao" style="display: none;">
              <div class="senha"></div>
               
              <div class="pergunta" style="display: none;">
                
                <p class="questao" id="questao">
                  
                </p>
                <form id="formsenha" action="">
                    
                </form>
                
              </div>
            </div>

            
            <div class="porteiro"></div>
            <div class="gif-porteiro"></div>
            <div class="gif-abre" style="display: none;"></div>
            <a href="javascript:" class="botao-porteiro-over" style="display:none"></a>
            <a href="javascript:" class="porteiro-over" style="display:none"></a>
            <!--/PORTEIRO-->
            
            <!--PERGUNTA-->
            <script type="text/javascript">
              $(document).ready(function(){
                $('.porteiro').hover(function(){
                  $('.porteiro-over').fadeIn('fast');
                });
                $('.porteiro-over').mouseleave(function(){
                  $(this).fadeOut('fast');
                });
                
                $('.porteiro-over').click(function(){
                 $('.botao-porteiro-over').show();
                 $('.balao').fadeIn('fast');
                 $('.balao, .botao-porteiro-over').delay(30000).fadeOut('fast'); 
                });
                
                $('.senha').click(function(){
                 $(this).hide();
                 $('.pergunta').fadeIn('fast'); 
                });
                
              });
            </script>
            <!--/PERGUNTA-->
            
            <?php if(isset($displays["dr-abobrinha"])): ?>
              <?php if(count($displays["dr-abobrinha"]) > 0): ?>
            <!--DR.ABROBINHA-->
            <div class="botao-dr-abobrinha"></div>
            <div class="gif-dr-abobrinha"></div>
            <!--a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" title="<?php echo $displays["dr-abobrinha"][0]->getTitle()?>" class="botao-dr-abobrinha-over" name="over-dr-abobrinha" style="display:none"></a-->  
            <a href="<?php echo "/" . $site->getSlug() . '/' . $displays["dr-abobrinha"][0]->Asset->getSlug() ?>" title="<?php echo $displays["dr-abobrinha"][0]->getTitle()?>" class="botao-dr-abobrinha-over" name="over-dr-abobrinha" style="display:none"></a>  
            <!--/DR.ABROBINHA-->
              <?php endif; ?>
            <?php endif; ?>  
            
            
            
            <!-- MENU NAVEGAÇÃO-->
             <?php include_partial_from_folder('sites/castelo','global/casteloMenuInternas', array('site'=>$site, 'section'=>$section)) ?> 
            <!--/MENU NAVEGAÇÃO-->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->

