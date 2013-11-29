  $(function(){
     
    var $container = $('#container');
    
    $container.isotope({
      itemSelector : '.element',
      layoutMode:'fitRows'
    }); 

    var filter_selected;
    
    //seleciona todos no filtro
    $('#filtrar-tudo').click(function(){
      var personagens = 8;
      var cont = 0
      if(cont < personagens){
        $('.filtro-personagem li.ativo').each(function(){
          cont++
        });
        console.log(cont);
        
        var filter_selected = "";
        
        $('.filtro-personagem li').addClass('ativo');
        $('.filtro-personagem li a').find('img').animate({top:-25, easing:"swing"},'fast');
        
        $('.filtro-personagem li.ativo').each(function(i){
          filter_selected += $(this).find('a').attr('data-filter') + ",";
          //$select += $(this).find('a').attr('data-filter') + ', ';
          
          $(this).find('img').css('top','33px!important');
        });
        goTop();
        $container.isotope({ filter:filter_selected });
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
        if(!$(this).hasClass('isotope-hidden')){
          $j++;
        }
      });

      if($i > 0){
        $('#filtro-descricao').html('<span>Você selecionou filtrar os links pelos personagens:' + $select +'com '+ $j +' itens</span>');
      }else{
        $('#filtro-descricao').html('Todos os links dos personagens estão ativos');
      }
      
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
  
 