$(document).ready(function() {
   /*
    * 
    * PRINT JPGS
    * 1-a url do jpg a imprimir deve ser colocada no atributo "datasrc" da tag a
    * 2-deve conter class "print"
    * ex: <a href="javascript:;" class="print" datasrc="a_url_do_jpg" title="seu_titulo">
    * 
    */
   $('a[class*="print"]').click(function() {
      //alert($(this).attr('datasrc'));
      if (navigator.appName != 'Microsoft Internet Explorer'){
        newPage = window.open();
        newPage.document.write("<div><img src='"+$(this).attr('datasrc')+"' style='width:95%;'></div>");
        newPage.window.print();
        newPage.window.close();
        return false;
      }
    });
        
    /*tooltip*/
    $('.btn-tooltip').tooltip();

    
    /*lista icone imprimir*/
    $('.imprimir li.span4:nth-child(4)').css('margin-left', '0');
    $('.imprimir li.span4:nth-child(7)').css('margin-left', '0');
    $('.imprimir li.span4:nth-child(10)').css('margin-left', '0');
    
    /*lista destaque small*/
    $('.destaques-small li:nth-child(7)').css('margin-left', '0');
    $('.destaques-small li:nth-child(13)').css('margin-left', '0');
    $('.destaques-small li:nth-child(19)').css('margin-left', '0');
    $('.destaques-small li:nth-child(25)').css('margin-left', '0');
    $('.destaques-small li:nth-child(31)').css('margin-left', '0');
    $('.destaques-small li:nth-child(37)').css('margin-left', '0');
    $('.destaques-small li:nth-child(43)').css('margin-left', '0');
   
    /* popover joguinhos*/
    $('.btn-popover').popover();
    $('.btn-popover').click(function(){	
      $('.btn-popover span').removeClass('ativo');    
      $('.btn-popover').not($(this)).popover('hide');
      $(this).find('span').addClasss('ativo')
      $(this).popover({
        trigger:'click',
        hide: 9999999999
      });
    });
    
    /* lista zoom*/
    $('.zoom li:nth-child(4)').css('margin-left', '0');
    $('.zoom li:nth-child(7)').css('margin-left', '0');
    
    /*lista modal*/
    $('.modal li:nth-child(7)').css('margin-left', '0');
    $('.modal li:nth-child(13)').css('margin-left', '0');
    
    /* lista produtos*/
    $('.lista-produtos li:nth-child(4)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(7)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(10)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(13)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(16)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(19)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(22)').css('margin-left', '0');
    
    /* destaque especial */
    $('.destaque-especial li:nth-child(5)').css('margin-left', '0');
    $('.destaque-especial li:nth-child(9)').css('margin-left', '0');
    $('.destaque-especial li:nth-child(13)').css('margin-left', '0');
    $('.destaque-especial li:nth-child(17)').css('margin-left', '0');
    $('.destaque-especial li:nth-child(21)').css('margin-left', '0');
    $('.destaque-especial li:nth-child(25)').css('margin-left', '0');
    $('.destaque-especial li:nth-child(29)').css('margin-left', '0');
    
    /* destaque2*/ 
    $('.destaque2 li:nth-child(7)').css('margin-left', '0');
    $('.destaque2 li:nth-child(13)').css('margin-left', '0');
    $('.destaque2 li:nth-child(19)').css('margin-left', '0');
    $('.destaque2 li:nth-child(25)').css('margin-left', '0');
    $('.destaque2 li:nth-child(31)').css('margin-left', '0');
    $('.destaque2 li:nth-child(37)').css('margin-left', '0');
    $('.destaque2 li:nth-child(43)').css('margin-left', '0');
    
    /* convidados*/ 
    $('#convidados li:nth-child(4)').css('margin-left', '0');
    $('#convidados li:nth-child(7)').css('margin-left', '0');
    $('#convidados li:nth-child(10)').css('margin-left', '0');
    $('#convidados li:nth-child(13)').css('margin-left', '0');
    $('#convidados li:nth-child(16)').css('margin-left', '0');
    $('#convidados li:nth-child(19)').css('margin-left', '0');
    $('#convidados li:nth-child(22)').css('margin-left', '0');
    
       
});
//impressao no ie com close ativado
if (navigator.appName == 'Microsoft Internet Explorer'){
  function printDiv(divId) {
    window.frames["print_frame"].document.body.innerHTML=document.getElementById(divId).innerHTML;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
  }
}