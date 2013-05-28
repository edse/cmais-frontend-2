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
    
    var url = window.location;
    var urlString = url.toString();
    var urlArray= new Array();
    urlArray= urlString.split("/");
    console.log(urlArray[urlArray.length -1])
    if(urlArray[urlArray.length -1] != "jogo-de-pintar"){
    /*lista icone imprimir*/
      $('.imprimir li.span4:nth-child(4)').css('margin-left', '0');
      $('.imprimir li.span4:nth-child(7)').css('margin-left', '0');
      $('.imprimir li.span4:nth-child(10)').css('margin-left', '0');
      
      /*lista destaque small*/
     $('.destaques-small li').each(function(i){
       el = $(this);
       i++;
       console.log(i)
       if(i%7==0){
         $(el).css('margin-left', '0');
       }
     });
     /*
      $('.destaques-small li:nth-child(7)').css('margin-left', '0');
      $('.destaques-small li:nth-child(13)').css('margin-left', '0');
      $('.destaques-small li:nth-child(19)').css('margin-left', '0');
      $('.destaques-small li:nth-child(25)').css('margin-left', '0');
      $('.destaques-small li:nth-child(31)').css('margin-left', '0');
      $('.destaques-small li:nth-child(37)').css('margin-left', '0');
      $('.destaques-small li:nth-child(43)').css('margin-left', '0');
      */
    }
    
    /* popover joguinhos*/
    $('.btn-popover').popover();

    $('.btn-popover').click(function(){	 
   	  $('.btn-popover span').removeClass('ativo').removeClass('true').removeClass('hover');   
      		      	     
      if($('body').find('.popover').hasClass('in')){ 
      	$(this).find("span").addClass('ativo').addClass('true').addClass('hover');
      }else{
      	$(this).find("span").removeClass('ativo').removeClass('true').removeClass('hover');
      }
   		
      $('.btn-popover').not($(this)).popover('hide');
      $(this).popover({
        trigger:'click',
        hide: 9999999999
      });
    });
    
    $('.btn-popover').mouseenter(function(){ 
    	if(!$(this).find("span").hasClass('ativo')){
    		$(this).find('span').addClass('hover');
    	}
    });
    $('.btn-popover').mouseleave(function(){
    	if(!$(this).find("span").hasClass('true')){
    		$(this).find('span').removeClass('hover');
    	}
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

// change href attribute of tag <a> 
function changeUrl(url, target) {
  $(target).attr('href', url);
}

// get queryString parameters from URI
function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.search);
  if(results == null)
    return "";
  else
    return decodeURIComponent(results[1].replace(/\+/g, " "));
}

/* 
 * Cookies Functionalities: Get, Set and Print Cookies
 */
/*
function getCookie(w)
{
  cName = "";
  pCOOKIES = new Array();
  //document.cookie = unescape(document.cookie); 
  pCOOKIES = document.cookie.split('; ');
  for(bb = 0; bb < pCOOKIES.length; bb++)
  {
    NmeVal  = new Array();
    NmeVal  = pCOOKIES[bb].split('=');
    if(NmeVal[0] == w)
    {
      cName = unescape(NmeVal[1]);
    }
  }
  return cName;
}

function printCookies(w)
{
  cStr = "";
  pCOOKIES = new Array();
  pCOOKIES = document.cookie.split('; ');
  for(bb = 0; bb < pCOOKIES.length; bb++)
  {
    NmeVal  = new Array();
    NmeVal  = pCOOKIES[bb].split('=');
    if(NmeVal[0])
    {
      cStr += NmeVal[0] + '=' + unescape(NmeVal[1]) + '; ';
    }
  }
  return cStr;
}

function setCookie (name,value,expires,path,domain,secure) {
  var curCookie = name + "=" + escape (value) +
    ((expires > 0) ? "; expires=" + setExpiration(expires) : "") +
    ((path) ? "; path=" + path : "") +
    ((domain) ? "; domain=" + domain : "") +
    ((secure) ? "; secure" : "");
  document.cookie = curCookie;
}

function setExpiration(cookieLife)
{
  if ('number' === typeof expires) {
    expires = new Date(new Date().getTime() + cookieLife * 24 * 60 * 60 * 1000);
  }
  return expires.toUTCString(); 
}
*/
