$(function(){
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
});
