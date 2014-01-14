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
       $('#filtro-descricao').html('Todos os Links relacionado a todos os personagens estão ativos');
       setTimeout(function() {
        $('#container a:first').focus(); 
       }, 3000);
       
       
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
          $(this).find('a').attr('tabindex','0');
        }
      });
      

      if($i > 0){
        $('#filtro-descricao').html('<span>Você selecionou filtrar os links pelos personagens:' + $select +'com '+ $j +' itens no total, em instantes você seá levado para o primeiro item da lista.</span>');
      }else{
        $('#filtro-descricao').html('Todos os Links relacionado a todos os personagens estão ativos, em instantes você seá levado para o primeiro item da lista.');
      }
      
      setTimeout(function() {
        $('#container a:first').focus(); 
      }, 7000);
        
       
      
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
    
    function goTop(){
      $('html, body').animate({
        scrollTop:parseInt($('.divisa').offset().top-126)
      }, "slow");
    }
    
    function selectAll(){
      var personagens = 8;
      
      if(cont != personagens){
        
        var filter_selected = "";
        
        $('.filtro-personagem li').addClass('ativo');
        $('.filtro-personagem li a').find('img').animate({top:-25, easing:"swing"},'fast');
        
        $('.filtro-personagem li.ativo').each(function(i){
          filter_selected += $(this).find('a').attr('data-filter') + ",";
          //$select += $(this).find('a').attr('data-filter') + ', ';
        });
        goTop();
        $container.isotope({ filter:filter_selected });
        cont=personagens;
      }else if(cont==personagens){
        cont=0;
        filter_selected = "";
        
        $('.filtro-personagem li').removeClass('ativo');
        $('.filtro-personagem li a').find('img').animate({top:0, easing:"swing"},'fast');
        $container.isotope({ filter:filter_selected });
      }
      
      $('#container.isotope .element').each(function(i){
        if($(this).hasClass('isotope-hidden')){
          $(this).find('a').attr('tabindex','-1');
        }else{
          $(this).find('a').attr('tabindex','0');
        }
      });
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
  
 