  $(function(){
    /*lista destaque small*/
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
     });
     
    var $container = $('#container');
    
    $container.isotope({
      itemSelector : '.element',
      masonry : {
          columnWidth : 300
        }
    }); 
    
    var filter_selected
    $('.filtro-personagem a').click(function(){

      filter_selected = "";
      $(this).parent().parent().toggleClass("ativo");
      
      $('.filtro-personagem li.ativo').each(function(i){
        if(i > 0){
          filter_selected += ",";
        }
        filter_selected += $(this).find('a').attr('data-filter');
      });

      $container.isotope({ filter:filter_selected });
      
      if($(this).parent().parent().hasClass('ativo')){
        console.log("tenho")
        $(this).find('img').css('top','33px!important');
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
  
 