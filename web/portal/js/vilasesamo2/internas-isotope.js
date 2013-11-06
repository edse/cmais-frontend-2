  $(function(){
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
     
    var $container = $('#container');
    
    $container.isotope({
      itemSelector : '.element'
    }); 
    
    var filter_selected
    $('.filtro-personagem a').click(function(){
      var $i=0;
      var $j=0
      var $select = '';
      filter_selected = "";
      
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
      //console.log($select);
      //console.log($j);
      if($i > 0){
        $('#filtro-descricao').html('<span>Você selecionou filtrar os links pelos personagens:' + $select +'com '+ $j +' itens</span>');
      }else{
        $('#filtro-descricao').html('Todos os links dos personagens estão ativos');
      }
      
      return false;
    });
    
    $('.inner a').mouseenter(function(){
     if($(this).parent().hasClass('jogos')){ 
      $(this).find('img').animate({top:-33, easing:"swing"},'fast');
     }else{
      $(this).find('img').animate({top:-25, easing:"swing"},'fast');  
     }
    });
    $('.inner a').mouseleave(function(){
      if(!$(this).parent().parent().hasClass('ativo')){
        $(this).find('img').stop();
        $(this).find('img').animate({top:0, easing:"swing"},'fast'); 
      } 
    });
    $('.inner a[class|="btn"]').click(function(){
      gotop();  
    });
    
    function goTop(){
      $('html, body').animate({
        scrollTop:$('.divisa').offset().top
      }, "slow");
    }
    /*
    $container.infinitescroll({
      navSelector  : '#page_nav',    // selector for the paged navigation 
      nextSelector : '#page_nav a',  // selector for the NEXT link (to page 2)
      itemSelector : '.element',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No more pages to load.',
          img: 'http://i.imgur.com/qkKy8.gif' 
        }
      },
      // call Isotope as a callback
      function( newElements ) {
        $container.isotope('appended',$(newElements)).isotope({ filter:".element"}).isotope({ filter:filter_selected });
      }
    );
    */
    
    
  });
  
 