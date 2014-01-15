/**
 * Scripts Novo portal
 */

var cultura = new Object();

cultura = {

  /*
   * Pega os elementos com a classe "abas" e adiciona a funï¿½ï¿½o.
   * Funcionamento:
   *    Cada elemento de "abas" estï¿½ relacionado com um dos elementos "filho" dentro de "abas-conteudo" 
   * 
   */
  "changeAbas" : function(){
    var sel = id = atual = t = "";
    //Pega todos os elementos com a classe "abas" e adiciona o evento "click" em seus filhos "a"
    $('#destaque .abas-menu, #menu-portal .abas-menu').find('a').click(function(){
      clearTimeout(window.tCarrossel);
      ativaCarrossel();
      //Guarda em uma variï¿½vel o bloco onde a funï¿½ï¿½o estï¿½ sendo executada. Para que mais de um mï¿½dulo possa usar esta funï¿½ï¿½o em uma mesma pï¿½gina
      moduloAtual = $(this).parent().parent().parent().parent();
      //Pega o "href" do elemento <a> clicado. Nele contï¿½m o "id" do bloco que irï¿½ abrir no ".abas-conteudo li" 
      idFilho = $(this).attr('href');
      //Esconde todos os blocos do ".abas-conteudo"
      $(moduloAtual).find('.abas-conteudo .filho:visible').fadeOut("slow",
        function(){
          $('.abas-conteudo '+idFilho+'').fadeIn("slow");
        });
      //Remove a class "ativo" de todos os elementos ".abas li"
      $(moduloAtual).find('.abas-menu li').removeClass('ativo');
      //Ativa apenas a aba clicada
      $(this).parent().addClass('ativo');
      $('.capa-video').css('display','block');
      //return false;
    })

    // Funï¿½ï¿½o setInterval que ativa o carrosel
    function ativaCarrossel(){
      if ($('#destaque ul.abas-menu.pag-bola > li, #menu-portal ul.abas-menu.pag-bola > li').length > 1) {
        window.tCarrossel = setInterval(function(){
          // Pega o item ativo
          atual = $('#destaque').find('.ativo');
          // Verifica se ï¿½ o ï¿½ltimo item para mudar para o primeiro e recomeï¿½ar o ciclo
          if ($(atual).is(":last-child")){
            proximo = $("#destaque").find('.abas-menu li:first, abas-conteudo li:first');
          }else{
            proximo = $(atual).next();
          }
          // Simula o click do mï¿½todo "changeAbas"
          $(proximo).find('a').click();
        // Intervalo 8000 milisegundos (8 segundos)
        },8000);
      } else {
        $('.uma-coluna .conteudo li').css('height','auto');
        $('#destaque ul.abas-menu.pag-bola, #menu-portal ul.abas-menu.pag-bola, .carrossel-videos .capa-video').css('display','none');
      }
    }
    
    // Limpa o setInterval
    function desativaCarrossel(){
      clearTimeout(window.tCarrossel);  
    }
    ativaCarrossel();
  },
  
  "changeAbasRodape" : function(){
    var sel = id = atual = t = "";
    $('#menu-rodape .abas-menu').find('a').click(function(){
      moduloAtual = $(this).parent().parent().parent().parent();
      idFilho = $(this).attr('href');
      $(moduloAtual).find('#menu-rodape .abas-conteudo .filho:visible').fadeOut("slow",
        function(){
          $('#menu-rodape .abas-conteudo '+idFilho+'').fadeIn("slow");
        }
      );
      $(moduloAtual).find('#menu-rodape .abas-menu li').removeClass('ativo');
      $(this).parent().addClass('ativo');
      return false;
    })
  },

  "changeAbasInternas" : function(){
    $('.abre-menu').click(function() {
      $('.toggle-menu').slideUp(400);
      
      if ($(this).next().css('display') == 'block')
        $(this).next().slideUp(400);
      else
        $(this).next().slideDown(400);
      
      return false;
    });
  },

  "navegacaoSetas" : function(){
    var atual = proximo = "";
    
    //Pega todos os elementos com a classe "nav-menu" e adiciona o evento "click" em seus filhos "a"
    $('.nav-menu').find('a.proximo').click(function(){
      
      //Guarda em uma variï¿½vel o bloco onde a funï¿½ï¿½o estï¿½ sendo executada. Para que mais de um mï¿½dulo possa usar esta funï¿½ï¿½o em uma mesma pï¿½gina
      moduloAtual = $(this).parent().parent().parent();
      atual = $(moduloAtual).find('.nav-conteudo li.ativo');

       if ($(atual).is(":last-child")){
        proximo = $(moduloAtual).find('.nav-conteudo li.filho:first');
      }else{
        proximo = $(atual).next();
      }
      
      $(atual).hide().removeClass('ativo');
      $(proximo).fadeIn("fast").addClass('ativo');
      
      return false;
    })
    $('.nav-menu').find('a.anterior').click(function(){
      
      //Guarda em uma variï¿½vel o bloco onde a funï¿½ï¿½o estï¿½ sendo executada. Para que mais de um mï¿½dulo possa usar esta funï¿½ï¿½o em uma mesma pï¿½gina
      moduloAtual = $(this).parent().parent().parent();
      atual = $(moduloAtual).find('.nav-conteudo li.ativo');

       if ($(atual).is(":first-child")){
        proximo = $(moduloAtual).find('.nav-conteudo li.filho:last');
      }else{
        proximo = $(atual).prev();
      }
      
      $(atual).hide().removeClass('ativo');
      $(proximo).fadeIn("fast").addClass('ativo');
      
      return false;
    })
  },
  
  "menuTopo" : function(){
    $("ul#menu-portal").find("a.filho").click(function(){
      
      // Remove todas as abas abertas
      $("ul#menu-portal").find(".menu-aberto").slideUp("fast");
      // Remove todas as classes "ativo" nos elementos <li>
      $("ul#menu-portal").find("li").removeClass('ativo');
      
      // Verifica se o mï¿½dulo clicado estï¿½ aberto
      if(!$(this).next().is(":visible")){
        // Abre o mï¿½dulo clicado
        $(this).next().slideDown("fast");
        $(this).next().css("z-index","2000");
        // Adiciona classe "ativo" no <li> clicado
        if(!$(this).hasClass('m_radio_am')){
          $(this).parent().addClass('ativo');
          if (!$(this).parent().is(':nth-child(4)'))
          {
            $(this).next().find('.abas-conteudo .filho').css('display','none');
            $(this).next().find('.abas-menu li:nth-child(2)').addClass('ativo');
            $(this).next().find('.abas-conteudo li:first').addClass('ativo').css('display','block');
          }
        }
      }
      
      // Esconde todos os mï¿½dulos quando o mouse desce para o restante da pï¿½gina
      $("#capa-site").hover(function(){
        $("ul#menu-portal").find('.menu-aberto').slideUp("fast");
        $("ul#menu-portal").find("li").removeClass('ativo');
      })

      return false;
      
    })
    
    //$("ul#menu-portal").find("a.filho").unbind('mouseleave');
  },
  
  "menuFloat" : function(){
    /*
    $(window).scroll(function() {
      //console.log('diff '+ parseInt($(document.body).height() - $(window).scrollTop()))
      //console.log('scroll-t: '+$(window).scrollTop())
      var criticalPos = $(document.body).height() * 0.8325 - $('#rodape-portal').height();
      if ($(window).scrollTop() > criticalPos)
      {
        //alert($(window).scrollTop());
        $('#menuFloat').fadeOut('fast');
        //$('#menuFloat').css('bottom', $(document.body).height() - $(window).scrollTop())
        //$('#menuFloat').css({'position':'absolute','bottom':0});
      }
      else
      {
        $('#menuFloat').fadeIn('slow');
      }
    });
    */
    //185
    if ($('#menuFloat').length > 0) {
    $('.box-lateral').css({'display':'block','position':'fixed','float':'left','width':'34px','height':'275px','top':$('#miolo').offset().top});     
    $(window).scroll(function() {
      //clearTimeout(t);  
      //t = setTimeout(function() {
        $('.box-lateral').css({'display':'block','position':'fixed','float':'left','width':'34px','height':'275px','top':$('#miolo').offset().top});     
        if($('.box-lateral').offset().top > (parseInt($('#capa-site').height()-$('.box-lateral').height()) + number1))
        {
          $('.box-lateral').css({'position':'absolute','top':parseInt($('#capa-site').height()-$('.box-lateral').height()-number2)});
        }
        else
        { 
          $('.box-lateral').css({'position':'fixed','top':$('#miolo').offset().top});
        }
        /*
        $('#panel').animate({
          //opacity: 0.25,
          marginTop: $(window).scrollTop(),
          //height: 'toggle'
        }, 1000, function() {
          // Animation complete.
        });
        */
      //},40);
    });
    }
  },  
    
  "toggleGrids" : function(){
    $(document).ready(function() {
      // toggles the slickbox on clicking the noted link  
      $('.btn-toggle').click(function() {
        if ($(this).parent().is('.escura'))                     
        {
          $(this).parent().removeClass('escura');
          $(this).parent().next().slideUp(400);
        }
        else
        {
          $('.grade.toggle').slideUp();
          $('.barra-grade').removeClass('escura');
          $(this).parent().addClass('escura');
          $(this).parent().next().slideDown(400);
        }
        return false;
      });
    });
  }
}

var number1 = 50;
var number2 = 185;

$(function(){ //onready
  cultura.changeAbas();
  cultura.changeAbasRodape();
  cultura.changeAbasInternas();
  cultura.navegacaoSetas();
  cultura.menuTopo();
  cultura.menuFloat();
  cultura.toggleGrids();
});

$(function(){ //onready
  var m_tv_tvcultura = "";
  var m_tv_univesptv = "";
  var m_tv_multicultura = "";
  var m_tv_tvrtb = "";
  var m_radio_am = "";
  var m_radio_fm = "";
  var m_ar_tvcultura = "";
  var m_ar_univesptv = "";
  var m_ar_multicultura = "";
  var m_ar_tvrtb = "";
  $('.m_tv_tvcultura').click(function(){
    if(m_tv_tvcultura == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=tvcultura",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_tv_tvcultura = data.data;
          $('#tvcultura').html(m_tv_tvcultura);
          $('#tvcultura').show();
        }
      });
    }
    $('#tvcultura').html(m_tv_tvcultura);
    $('#tvcultura').show();
  });
  $('.m_tv_univesptv').click(function(){
    if(m_tv_univesptv == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=univesptv",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_tv_univesptv = data.data;
          $('#univesptv').html(m_tv_univesptv);
          $('#univesptv').show();
        }
      });
    }
    $('#univesptv').html(m_tv_univesptv);
    $('#univesptv').show();
  });
  $('.m_tv_multicultura').click(function(){
    if(m_tv_multicultura == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=multicultura",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_tv_multicultura = data.data;
          $('#multicultura').html(m_tv_multicultura);
          $('#multicultura').show();
        }
      });
    }
    $('#multicultura').html(m_tv_multicultura);
    $('#multicultura').show();
  });
  $('.m_tv_tvrtb').click(function(){
    if(m_tv_tvrtb == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=tvrtb",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_tv_tvrtb = data.data;
          $('#tvrtb').html(m_tv_tvrtb);
          $('#tvrtb').show();
        }
      });
    }
    $('#tvrtb').html(m_tv_tvcultura);
    $('#tvrtb').show();
  });
  /*
  $('.m_radio_am').click(function(){
    if(m_radio_am == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=radioam",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_radio_am = data.data;
          $('#radio-cb').html(m_radio_am);
          $('#radio-cb').show();
        }
      });
    }
    $('#radio-cb').html(m_radio_am);
    $('#radio-cb').show();
  });
  $('.m_radio_fm').click(function(){
    if(m_radio_fm == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=radiofm",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_radio_fm = data.data;
          $('#radio-fm').html(m_radio_fm);
          $('#radio-fm').show();
        }
      });
    }
    $('#radio-fm').html(m_radio_fm);
    $('#radio-fm').show();
  });
  */
  $('.m_ar_tvcultura').click(function(){
    if(m_ar_tvcultura == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=no-ar-tvcultura",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_ar_tvcultura = data.data;
          $('#ar-tvcultura').html(m_ar_tvcultura);
          $('#ar-tvcultura').show();
        }
      });
    }
    $('#ar-tvcultura').html(m_ar_tvcultura);
    $('#ar-tvcultura').show();
  });
  $('.m_ar_univesptv').click(function(){
    if(m_ar_univesptv == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=no-ar-univesptv",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_ar_univesptv = data.data;
          $('#ar-univesptv').html(m_ar_univesptv);
          $('#ar-univesptv').show();
        }
      });
    }
    $('#ar-univesptv').html(m_ar_univesptv);
    $('#ar-univesptv').show();
  });
  $('.m_ar_multicultura').click(function(){
    if(m_ar_multicultura == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=no-ar-multicultura",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_ar_multicultura = data.data;
          $('#ar-multicultura').html(m_ar_multicultura);
          $('#ar-multicultura').show();
        }
      });
    }
    $('#ar-multicultura').html(m_ar_multicultura);
    $('#ar-multicultura').show();
  });
  $('.m_ar_tvrtb').click(function(){
    if(m_ar_tvrtb == ""){
      $.ajax({
        type : "GET",
        dataType : "jsonp",
        data: "content=no-ar-tvrtb",
        url: "http://app.cmais.com.br/index.php/ajax/menuTv",
        success: function(data){
          m_ar_tvrtb = data.data;
          $('#ar-tvrtb').html(m_ar_tvrtb);
          $('#ar-tvrtb').show();
        }
      });
    }
    $('#ar-tvrtb').html(m_ar_tvrtb);
    $('#ar-tvrtb').show();
  });

});

$.fn.clearForm = function() {
  return this.each(function() {
  	var type = this.type, tag = this.tagName.toLowerCase();
  	if (tag == 'form')
  	  return $(':input',this).clearForm();
  	if (type == 'text' || type == 'password' || tag == 'textarea')
  	  this.value = '';
  	else if (type == 'checkbox' || type == 'radio')
  	  this.checked = false;
  	else if (tag == 'select')
  	  this.selectedIndex = -1;
  });
};

/* 
 * Cookies Functionalities: Get, Set and Print Cookies
 */
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

