//botoes menu
$(document).ready(function(){
  

  $(".btn-ano").click(function(){
    $(".btn-ano").removeClass("active");
    $(this).addClass("active");
    var ano = parseInt($(this).attr('name')); 
    $('#linha-do-tempo-assets').carousel(ano);
    $('html, body').animate({
      scrollTop: $("#linha-do-tempo-assets").offset().top
    }, "slow");
  });


  //carrossel linha do tempo
  $('#linha-do-tempo-assets').carousel('pause');
  
  $('#linha-do-tempo-assets').mouseout(function() {
    $('#linha-do-tempo-assets').carousel('pause');
  });
  
  //hover dos botoes menu fpa
  var decoracoes = '.nav li, .seta-hover, .caret, .link';
  var ativos ='.nav li.active, .seta-hover.active, .caret.active, .link.active'
  $('.nav li').hover(function(){
    $(this).find('.seta-hover').show();
    $(this).find('.dropdown-menu').show(); 

  });
  $('.nav li').mouseleave(function(){
    $(this).find('.seta-hover').hide();
    $(this).find('.dropdown-menu').hide();
    $(decoracoes).not(ativos).removeClass('active');
    $(this).find('.seta-hover.active').removeClass('active');
    $('.caret.active').removeClass('active');
    $('.li-dropdown.active').removeClass('active'); 
  });

  $('.nav li').click(function(){
    $(decoracoes).not(ativos).removeClass('active');
    //$(this).addClass('active');
    $(this).find(decoracoes).addClass('active');
   });
   
  //botoes tela linha do tempo
  $('.nav-anos li a').click(function(){
    $('.nav-anos li').not(ativos).removeClass('active');
    $(this).parent().addClass('active');
  });
  
  //trabalheconosco
  $('.vaga-aberta').click(function(){
    $(this).parent().next().next().on('hidden', function () {
      $(this).prev().prev().find('i').removeClass('ico-active');
      $('html, body').animate({
        scrollTop: $('#fundo-topo').offset().top
      }, "fast");
    })
    $(this).find('i').addClass('ico-active');
    $('hr.vaga').toggleClass('hide');
    $('hr.vaga.desc').toggleClass('active');
    $('html, body').animate({
        scrollTop: $('#'+$(this).attr('id')).offset().top
      }, "slow");
  });
  $('.trabalhe-conosco .btn-cat').tooltip({
    placement: "right"
  })
  
  //licitacoes
  $('.licitacoes .btn-cat').tooltip({
    placement: "right"
  })
});
