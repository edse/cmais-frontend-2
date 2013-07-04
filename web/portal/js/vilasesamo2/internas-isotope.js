  $(function(){

    var $container = $('#container');
    
    $container.isotope({
      itemSelector : '.element'
    });
    
    //pra não encalavar em mobile
    $(document).ready(function(){
      $container.isotope();
    }); 
    
    var filter_selected
    $('.filtro-personagem a').click(function(){

      filter_selected = "";
      $(this).parent().toggleClass("ativo");
      
      $('.filtro-personagem li.ativo').each(function(i){
        if(i > 0){
          filter_selected += ",";
        }
        filter_selected += $(this).find('a').attr('data-filter');
        
      });

      $container.isotope({ filter:filter_selected });
      return false;
    });
    
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
    
    
  });
  
 