  $(function(){
     
    var $container = $('#container');
    
    $container.isotope({
      itemSelector : '.element',
      layoutMode:'fitRows'
    }); 

    var filter_selected;
    var cont = 0
    //seleciona todos no filtro
    $('#filtrar-tudo').click(function(){
      selectAll()
    }); 
    
    $('#filtrar-tudo').keypress(function( event ) {
      if ( event.which == 13 ) {
       selectAll()
       //$('#filtro-descricao').html('Todos os Links relacionado a todos os personagens estão ativos, em instantes você será levado para o primeiro item da lista.');
       setFocus();
      } 
    });
    
    //filtro personagens para atividades, jogos e videos
    $('.filtro-personagem a').not('.inner.personagem a').click(function(){
      var $i=0;
      var $j=0
      var $select = '';
      var filter_selected = "";
      
      $(this).parent().parent().toggleClass("ativo");

      $('.filtro-personagem li.ativo').each(function(i){
        $('a').removeClass('first');
        $('li').removeClass('first').removeClass('count');
        $('.firstDescription').remove();

        filter_selected += $(this).find('a').attr('data-filter') + ",";
        $select += $(this).find('a').attr('data-filter') + ', ';
        
        $(this).find('img').css('top','33px!important');
        
        $i++;
  
      });
      
      $container.isotope({ filter:filter_selected });
      
      $('#container.isotope .element').each(function(i){
        if($(this).hasClass('isotope-hidden')){
          $(this).find('a').attr('tabindex','-1');
        }else{
         $j++;
          
          if($j==1)
            $(this).addClass('first');
          
          if($(this).hasClass('isotope-item'))
            $(this).addClass('count');
          
          $(this).find('a').attr('tabindex','0');
        }
      });
      
      if($i > 0){
        $('.first').before('<span class="firstDescription" aria-label="Você selecionou filtrar os links pelos personagens:' + $select +'com '+ $j +' itens visíveis no total, você está no primeiro item da lista." tabIndex="0" ></span>');
      }else{
        $('.first').before('<span class="firstDescription" aria-label="Todos os Links relacionado a todos os personagens estão ativos, você está no primeiro item da lista." tabIndex="0"></span>');
      }
      
      setFocus();
        
       
      
      return false;
    });
    
    
    //filtro artigos por categoria
    $('.dropdown-menu.cuidadores li a').click(function(){ 
      var $i=0;
      var $j=0
      var $select_cat = $(this).attr('data-filter');
      filter_selected = $select_cat;
      
      $container.isotope({ filter:filter_selected });
      
      return false;
    });
  
    //bx pais e educadores
    //Acessibilidade abrir fechar div Box-Pais
    $('.pais').keypress(function( event ) {
      if ( event.which == 13 ) {
        $('.pais-warning').remove();
        $('.pais .content').stop().slideToggle('slow');
        $(".pais .icone-cuidadores-abrir").toggleClass("inativo");
        $(".pais .icone-cuidadores-fechar").toggleClass("ativo");
        $(".pais .fechar-toogle").addClass("ativo");
        $('.linha').show();
        $('.redes').fadeIn();
        $('.pais .content').before('<span class="pais-warning" aria-label="você abriu o box Pais e Educadores com compartilhamento de redes sociais mais 3 destaques em dicas e artigos e um seletor em lista de categorias" tabindex="0"></span>')
        
        setTimeout(function(){
          $('.pais-warning').focus();
        },500);
        e.preventDefault();
      } 
    });
      
    $('.pais').keypress(function( event ) {
      if ( event.which == 13 ) {
        $('.pais .content').stop().slideToggle('fast');
        $(".pais .icone-cuidadores-abrir").toggleClass("inativo");
        $('.linha, .pais .redes').hide();
        $(".pais .fechar-toogle").removeClass("ativo");
      }
        
    });
    
    function goTop(){
      $('html, body').animate({
        scrollTop:parseInt($('.divisa').offset().top-126)
      }, "slow");
    }
    
    function selectAll(){
      var personagens = 8;
      var $select="";
      $('a').removeClass('first');
      $('li').removeClass('first').removeClass('count');
      $('.firstDescription').remove();
      
      var $k = 0;
      $('#container li.isotope-item').not('li.isotope-hidden').each(function(i){
        if($k == 0){
          $(this).addClass('first count');
        }else{
          $(this).addClass('count');
        }
        $k = $k+1
        //console.log($k);
      });
      
      if(cont != personagens){
        
        var filter_selected = "";
        $("#filtrar-tudo").html("Desmarcar todos").attr('aria-label','botão para descelecionar todos os personagens filtros');
        $('.filtro-personagem li').addClass('ativo');
        $('.filtro-personagem li a').find('img').animate({top:-25, easing:"swing"},'fast');
        
        $('.filtro-personagem li.ativo').each(function(i){
          filter_selected += $(this).find('a').attr('data-filter') + ",";
          $select += $(this).find('a').attr('data-filter') + ', ';
        });
        goTop();
        $container.isotope({ filter:filter_selected });
        
        $('.first').before('<span class="firstDescription" aria-label="Todos os links relacionados a todos os personagens estão ativos, você está no primeiro item da lista." tabIndex="0"></span>');
        cont=personagens;
        $('.firstDescription').focus(); 
      }else if(cont==personagens){
        cont=0;
        filter_selected = "";
        $("#filtrar-tudo").html("Marcar todos");
        $('.filtro-personagem li').removeClass('ativo');
        $('.filtro-personagem li a').find('img').animate({top:0, easing:"swing"},'fast');
        
        $container.isotope({ filter:filter_selected });
        $('.first').before('<span class="firstDescription" aria-label="Todos os links estão ativos, você está no primeiro item da lista." tabIndex="0"></span>');
        $('.firstDescription').focus(); 
      }
      
      setTimeout(function(){
        //alert("fui");
        $('#container').find('li.first a').focus();
        $('.firstDescription').remove();
      },5000);
    
    }
    
    function setFocus(){
      var first=0;
      
      $('#container.isotope .element').each(function(i){
        $(this).find('a').removeClass('first');
        if($(this).hasClass('isotope-hidden')){
          $(this).find('a').attr('tabindex','-1').attr("aria-hidden", "true");
        }else if($(this).hasClass('isotope-item') && first==0){
          $(this).find('a').attr('tabindex','0').attr("aria-hidden", "false").addClass('first');
          first++;
        }else{  
          $(this).find('a').attr('tabindex','0').attr("aria-hidden", "false");
        }
        setTimeout(function(){
        //alert("fui");
          $('#container').find('li.first a').focus();
          $('.firstDescription').remove();
        },5000);
      });
      

      $('.firstDescription').focus(); 

      
    }
    /*lista destaque small
     $('.todos-itens li').each(function(i){
       el = $(this);
       if(i%3==0){
         $(el).css('margin-left', '0px');
         //$(el).css('clear', 'both');
         //i = 0;
       }else{
         $(el).css('margin-left', '15px');
         i++;
       }
     });*/
    
  });
  
 