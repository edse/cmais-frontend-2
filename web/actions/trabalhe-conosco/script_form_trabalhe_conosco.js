$(document).ready(function() {
  $("#row2").hide();
  $("#row3").hide();
  $("#row4").hide();
  $("#row5").hide();
  $("#acoes_historico").hide();
  $("#acoes_curso").hide();

  function Seleciona_Historicos(cod_curriculo){
  	var cont = 1;
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/seleciona_historicos.php?cod_curriculo="+cod_curriculo,
      error: function(retorno){
        //console.log("Erro ao selecionar históricos");
      }, 
      success: function(json) {
      		if(json.data != null){
						$.each(json.data, function(index, dados){
	          	////console.log(dados.historicos);
	            var codigo 				= dados.historicos.ql_codigo;
	            var dataadmissao 	= dados.historicos.ql_dtadmis;
	            var datademissao 	= dados.historicos.ql_dtdemis;
	            var experiencia 	= dados.historicos.ql_experiencia;
	            var empresa 			= dados.historicos.ql_empresa;
	            var funcaoinicial = dados.historicos.ql_funcini;
	            var funcaofinal 	= dados.historicos.ql_funcao;
	
	            var conteudo = '<div class="accordion-group"><div class="accordion-heading">';
	            conteudo = conteudo+'<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'+cont+'"><font color=red>';
	            conteudo = conteudo + empresa + ' </font></a>  </div><div id="collapse'+cont+'" class="accordion-body collapse">';
	            conteudo = conteudo+'<div class="accordion-inner" style="overflow: hidden;"><p>Função Inicial: '+funcaoinicial+'</p><p>Função Final:'+funcaofinal+'</p>';
	            conteudo = conteudo+'<p>Experiencia:'+experiencia+'</p><p>Data de Admissão:'+dataadmissao+'</p><p>Data de Demissão:'+datademissao+'</p>';
	            conteudo = conteudo+'<a class="seleciona-historico" href="#'+cont+'" >Editar</a>';
	            conteudo = conteudo+'<input type="hidden" value="'+codigo+'" id="ql_codigo'+cont+'"></div></div></div>';
	            $('#accordion2').append(conteudo); 
	            cont++;
	         });
        	}
        }
      });
    };

	function Seleciona_Cursos (cod_curriculo) {
		var cont = 1;
		$.ajax({
			type: "GET",
			dataType: "jsonp",
			url: "http://app.cmais.com.br/actions/trabalhe-conosco/seleciona_cursos.php?qg_curric="+cod_curriculo,
			error: function(retorno){
			  //console.log("Erro ao selecionar cursos");
			}, 
			success: function(json) {
				if(json.data != null){
					$.each(json.data, function(index, dados){
			      var qm_codigo 	= dados.cursos.qm_codigo;
			      var qm_entidad 	= dados.cursos.qm_entidad;
			      var qm_data 		= dados.cursos.qm_data;
			      var qm_dscout 	= dados.cursos.qm_dscout;
			      var qm_escolar 	= dados.cursos.qm_escolar;
			      var qm_curso 		= dados.cursos.qm_curso;
			      var qm_tcurso 	= dados.cursos.qm_tcurso;
			
			      var conteudo = '<div class="accordion-group"><div class="accordion-heading">';
			      conteudo = conteudo+'<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_cursos" href="#collapse-curso'+cont+'">';
			      conteudo = conteudo+'<font color=red>'+qm_entidad+'</font></a>  </div> <div id="collapse-curso'+cont+'" class="accordion-body collapse">';
			      conteudo = conteudo+'<div class="accordion-inner" style="overflow: hidden;"><p>Data de Formação: '+qm_data+'</p>';
			      conteudo = conteudo+'<a class="seleciona-curso" href="#'+cont+'" >Editar</a>';
			      conteudo = conteudo+'<input type="hidden" value="'+qm_codigo+'" id="qm_codigo'+cont+'"></div></div></div>';
			      $('#accordion_cursos').append(conteudo);
			      cont++;
			     });
				}
			}
		});
	};
    
  function Valida_Usuario_FPA(){
    var cpf = $("#fpa_cpf").val();
    var data = $("#fpa_data").val();
		var cod_vaga = $('#cod_vaga').val();
		
    $.ajax({
	    type: "GET",
	    dataType: "jsonp",
	    data: $("#form1").serialize(),
	    url: "http://app.cmais.com.br/actions/trabalhe-conosco/action.php?service=valida_usuario",
	    error: function(retorno){
	        ////console.log("Erro na validação do usuário!");
	        alert("Erro na validação do usuário!");
	    }, 
	    success: function(json) {
	      //LIBERA A TELA DE CADASTRO
		    $("#fpa_cpf_cadastro").val(cpf);
		    $("#fpa_data_nascimento").val(data);     
	      if(json.data == 999){
					alert("Novo Cadastro");
	      }else{
	      	$.each(json.data.curriculo, function(index, dados) {
	          if($("#"+index).attr("type") == "text"){
	            $("#"+index).val(dados);
	          }
				 	  $("#form2 select").each(function(){
							var str = this.id;
							var id = str.replace("DropDown_","");
							if(id == index){
									$('#'+this.id+' option[value="'+dados+'"]').attr('selected', 'selected');
							}			
				    });
	
	      	});
	      	
	        if(json.data.curriculo.qg_trabate != "01/01/1900" && json.data.curriculo.qg_trabde != "01/01/1900"){
	          $("#qg_trabate").val(json.data.curriculo.qg_trabate);
	          $("#qg_trabde").val(json.data.curriculo.qg_trabde);
	        }else{
	        	$("#qg_trabate").val('');
	        	$("#qg_trabde").val('');
	        }        	
					$("#qg_curric").val(json.data.curriculo.qg_curric);
	      	$("#qg_memo2").val(json.data.curriculo.qg_memo2);
				
				
					//CADASTRA O CURRICULO NA VAGA
					var qg_curric = $("#qg_curric").val();
	  	
					$.ajax({
		        type: "GET",
		     	  dataType: "jsonp",
		        url: "http://app.cmais.com.br/actions/trabalhe-conosco/insere_vaga.php?cod_vaga="+cod_vaga+"&qg_curric="+qg_curric,
		        error: function(retorno){
		          //alert("Erro Json");
		        }, 
		        success: function(json)	{
		        	if(json.data == "fim"){
		        		alert("Vaga finalizada ou não está disponível para cadastro. Retorne e selecione outra vaga!");
		        		self.location = "http://cmais.com.br/fpa/trabalhe-conosco";
		        	}
		        	if(json.data == "cadastrado"){
		        		 $("#info_vaga").html('<p style="color: red">Você já se cadastrou para esta vaga! </p>');
		        	}
		       	}
		   		});
				}
				
	      $("#row1").hide(); 
	      $("#row2").show(); 
	      
	    }
	  });
		//return false;
	};
   
  function Cadastra_Curriculo(){
      var cpf         =  $("#fpa_cpf_cadastro").val();
      var data        =  $("#fpa_data_nascimento").val();
      var qg_curric   =  $("#qg_curric").val();
	 	  var qg_defic   =  '1';
	 	  var valores = ("cpf="+cpf+"&data="+data+"&qg_defic="+qg_defic+"&qg_curric="+qg_curric);
	 	  
	 	  $("#form2 select").each(function() {
				var str = this.id;
				var id = str.replace("DropDown_","");
				valores += ("&"+id+"="+$(this).val());
	    }); 
    
	    //SE NÃO TIVER CÓDIGO DO CURRICULO CADASTRA UM NOVO   
	    if($("#qg_curric").val() == ""){
				$.ajax({
			        type: "GET",
			        dataType: "jsonp",
			        data: $("#form2").serialize(),
			        url: "http://app.cmais.com.br//actions/trabalhe-conosco/cadastra_curriculo.php?"+valores,
			        error: function(retorno){
			          //console.log("Erro para obter os dados do currículo. Clique no botão VOLTAR e tente novamente!");
			        }, 
			        success: function(json) {
		            if(json.data != 0){
		            	//console.log(json.data);
		            	$("#qg_curric").val(json.data);
		              $("#row2").hide(); //ESCONDE A TELA DE CADASTRO
	      					$("#row3").show(); //MOSTRA A TELA DE CADASTRO SEGUINTES
		            }else{
		            	//console.log(json.data);
		            	//console.log("Erro");
		     				}   
			     	}
		     });
	    }else{
	      $.ajax({
	        type: "GET",
	        dataType: "jsonp",
	        data: $("#form2").serialize(),        
	        url: "http://app.cmais.com.br/actions/trabalhe-conosco/altera_curriculo.php?"+valores,
	        error: function(retorno){
	          //console.log("Erro ao Alterar Curriculo: Tente novamente mais tarde!");
	        },
	        success: function(json) {
	        		if(json.data == true){
	        			//console.log("Dados do curriculo alterado com sucesso");	
	        		}else{
	        			//console.log("Erro na alteração");
	        		}
	            
		     	}
		    });
			}
      
      var cod_curriculo = $("#qg_curric").val();
      $("#accordion2").empty();

			Seleciona_Historicos(cod_curriculo);
	    $("#row2").hide(); //ESCONDE A TELA DE CADASTRO
	    $("#row3").show(); //MOSTRA A TELA DE CADASTRO SEGUINTE
	    $(window).scrollTop(300);
  };
  
  
  $(".seleciona-historico").live('click',function(){
    var codigo   =  $(this).attr('href');
    codigo = codigo.replace('#',''); 
    var codigo =  $("#ql_codigo"+codigo).val();
    var cod_curriculo   =  $("#qg_curric").val();
      
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/seleciona_historico.php?codigo="+codigo,
      error: function(retorno){
        //console.log("Erro na seleção do histórico");
      }, 
      success: function(json) {
        $.each(json.data.historico, function(index, dados) {
        	$("#"+index).val(dados);
        });
         
        $("#acoes_historico").show();
        $("#accordion2").hide();
        $("#adicionar_historico").hide();
        $("#continue_inscricao").hide();         
     		$(window).scrollTop(300);    
    	}
   	});
   });
   
  $("#cancela_alteracao_historico").live('click',function(){
    $("#acoes_historico").hide();
    $("#accordion2").show();
    $("#adicionar_historico").show();
    $("#continue_inscricao").show();
    $("#form3")[0].reset();
  });
  
  $("#deleta_historico").live('click',function(){
	  if(confirm("Deseja apagar este histórico profissional do seu currículo?")){
      codigo = $("#ql_codigo").val();
      $.ajax({
        type: "GET",
        dataType: "jsonp",
        url: "http://app.cmais.com.br/actions/trabalhe-conosco/deleta_historico.php?codigo="+codigo,
        error: function(retorno){
          //console.log("Erro ao excluir histórico"); 
        }, 
        success: function(json) {
         if(json.data == true){
            $("#acoes_historico").hide();
            $("#accordion2").empty(); //LIMPA O CAMPO
            $("#accordion2").show();
            $("#adicionar_historico").show();
            $("#continue_inscricao").show();
            
						 $("#form3")[0].reset();
          
            //RECARREGA OS HISTÓRICOS NOVAMENTE
            var cod_curriculo = $("#qg_curric").val();
						Seleciona_Historicos(cod_curriculo);
            
            alert("Histórico excluído com sucesso");
          }
        }
      });
    }
  });
   
  
  //$("#adicionar_historico").live('click',function(){
  function 	Adiciona_Historico(){
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      data: $("#form3").serialize(),
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/insere_historico.php?qg_curric="+$("#qg_curric").val(),
      error: function(retorno){
        alert("Erro ao adicionar o histórico!");
      }, 
      success: function(json) {
         if(json.data == true){
        		//console.log("cadastrou");
            // SE CADASTRAR COM SUCESSO CARREGA TUDO NOVAMENTE
            $("#acoes_historico").hide();
            $("#accordion2").empty(); //LIMPA O CAMPO
            $("#accordion2").show();
            $("#adicionar_historico").show();

					  $("#form3")[0].reset();
                
            var cod_curriculo = $("#qg_curric").val();
						Seleciona_Historicos(cod_curriculo);
            
            alert("Histórico cadastrado com sucesso");
            $("#continue_inscricao").show();
         }else{
         	//console.log("erro no cadastro");
         }
       }
    });
  };
  
  
  function 	Altera_Historico(){
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      data: $("#form3").serialize(),
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/altera_historico.php",
      error: function(retorno){
        alert("Erro na alteração do Histórico");
      }, 
      success: function(json) {
        if(json.data == true){
          //console.log("alterou...");
          $("#acoes_historico").hide();
          $("#accordion2").empty();
          $("#accordion2").show();
          $("#adicionar_historico").show();
          
 					$("#form3")[0].reset();
          
          var cod_curriculo = $("#qg_curric").val();
					Seleciona_Historicos(cod_curriculo);
					                  
          alert("Histórico alterado com sucesso");
          $("#continue_inscricao").show();
            
        }else{
           alert('Erro no Serviço: Alteração de Históricos');
        }
     }
		});

  }; 
  
  $(".seleciona-curso").live('click',function(){
    var codigo   =  $(this).attr('href');
    codigo = codigo.replace('#',''); 
    var codigo =  $("#qm_codigo"+codigo).val();
    var cod_curriculo   =  $("#qg_curric").val();
      
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/seleciona_curso.php?codigo="+codigo+"&"+cod_curriculo,
      error: function(retorno){
        //console.log("Erro na seleção do curso");
      }, 
      success: function(json) {
        $.each(json.data.curso, function(index, dados) {
        	$("#"+index).val(dados);
        });
         
				var tipo_curso = json.data.curso.qm_tcurso;
		 	  $('#DropDown_qm_tcurso option[value="'+tipo_curso+'"]').attr('selected', 'selected');         
         
        Carrega_Cursos(); 

				var instrucao = json.data.curso.qm_escolar;
		 	  $('#DropDown_qm_escolar option[value="'+instrucao+'"]').attr('selected', 'selected');

				$('#DropDown_qm_curso').attr('disabled', 'disabled');

		 	  setTimeout(function(){
		 	  	var curso = json.data.curso.qm_curso;
		 	  	$('#DropDown_qm_curso option[value="'+curso+'"]').attr('selected', 'selected');
		 	  	$('#DropDown_qm_curso').removeAttr('disabled');	
		 	  }, 3000);
		 	  
		 	  
		 	  
        $("#acoes_curso").show();
        $("#accordion_cursos").hide();
        $("#adicionar_curso").hide();
        $("#concluir_inscricao").hide();       
     		$(window).scrollTop(300);    
    	}
   	});
   });
   
  $("#cancela_alteracao_curso").live('click',function(){
      $("#acoes_curso").hide();
      $("#accordion_cursos").show();
      $("#adicionar_curso").show();
      $("#concluir_inscricao").show();
      $("#form4")[0].reset();
  });
  
  $("#deleta_curso").live('click',function(){
    if(confirm("Deseja apagar este curso do seu currículo?")){
      codigo = $("#qm_codigo").val();
      $.ajax({
        type: "GET",
        dataType: "jsonp",
        url: "http://app.cmais.com.br/actions/trabalhe-conosco/deleta_curso.php?codigo="+codigo,
        error: function(retorno){
          //console.log("Erro ao excluir curso"); 
        }, 
        success: function(json) {
           if(json.data == true){
              $("#acoes_curso").hide();
              $("#accordion_cursos").empty(); //LIMPA O CAMPO
              $("#accordion_cursos").show();
              $("#adicionar_historico").show();
              $("#concluir_inscricao").show();
              
							 $("#form4")[0].reset();
            
              //RECARREGA OS HISTÓRICOS NOVAMENTE
              var cod_curriculo = $("#qg_curric").val();
							Seleciona_Cursos(cod_curriculo);
              
              alert("Curso excluído com sucesso");
            }
          }
        });
      }
  });
   
  function Adiciona_Curso(){
  		var valores = "";
	 	  
	 	  $("#form4 select").each(function() {
				var str = this.id;
				var id = str.replace("DropDown_","");
				valores += ("&"+id+"="+$(this).val());
	    });
	    
      $.ajax({
        type: "GET",
        dataType: "jsonp",
        data: $("#form4").serialize(),
        url: "http://app.cmais.com.br/actions/trabalhe-conosco/insere_curso.php?qg_curric="+$("#qg_curric").val()+valores,
        error: function(retorno){
          alert("Erro Curso");
        }, 
        success: function(json) {
           if(json.data == true){
          		//console.log("cadastrou");
              // SE CADASTRAR COM SUCESSO CARREGA TUDO NOVAMENTE
              $("#acoes_curso").hide();
              $("#accordion_cursos").empty(); //LIMPA O CAMPO
              $("#accordion_cursos").show();
              $("#adicionar_curso").show();

						  $("#form4")[0].reset();
                  
              var cod_curriculo = $("#qg_curric").val();
							Seleciona_Cursos(cod_curriculo);
              alert("Curso cadastrado com sucesso");
              
              $("#concluir_inscricao").show();
           }else{
           	//console.log("erro no cadastro");
           }
         }
      });
  };
  
  function Altera_Curso(){
			var valores = "";
	 	  $("#form4 select").each(function() {
				var str = this.id;
				var id = str.replace("DropDown_","");
				valores += ("&"+id+"="+$(this).val());
	    });
	      	
  	
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        data: $("#form4").serialize(),
        url: "http://app.cmais.com.br/actions/trabalhe-conosco/altera_curso.php?qg_curric="+$("#qg_curric").val()+valores,
        error: function(retorno){
          alert("Erro na alteração do curso!");
        }, 
        success: function(json) {
          if(json.data == true){
            //console.log("alterou curso");
            $("#acoes_curso").hide();
            $("#accordion_cursos").empty();
            $("#accordion_cursos").show();
            $("#adicionar_curso").show();
            
	 					$("#form4")[0].reset();
            
            var cod_curriculo = $("#qg_curric").val();
						Seleciona_Cursos(cod_curriculo);
						                  
            alert("Curso alterado com sucesso");
            $("#concluir_inscricao").show();
              
          }else{
              alert("Erro na alteração do curso!");
          }
       }
		});
  }; 
  
  /************* SEGUIR PARA PASSO 4 *************/
  $("#continuar_inscricao").click(function(){
  	var cod_curriculo = $("#qg_curric").val();
  	$("#accordion_cursos").empty();
  	Seleciona_Cursos(cod_curriculo);
    $("#row3").hide();
    $("#row4").show();
    $(window).scrollTop(300);
  });

  /************* CARREGA O NOME DO DEPARTAMENTO *************/
	$('select#DropDown_qg_cargo').change(function (){
	 $('#DropDown_qg_are').empty();
	 if($(this).val() == "0"){
	 	$('#DropDown_qg_are').append('<option value="999">-</option>');
	 }else{
	 	 var departamento = $('option:selected', this).attr('data-departamento');
		 $('#DropDown_qg_are').append('<option value="999">'+departamento+'</option>');
	 }
	});

	function Carrega_Cursos(){
	 var tipo = $("#DropDown_qm_tcurso").val();
	 $('#DropDown_qm_curso').empty();
	 if(tipo != 0){
			$.ajax({
	      type: "GET",
	   	  dataType: "jsonp",
	      url: "http://app.cmais.com.br/actions/trabalhe-conosco/cursos.php?tipo="+tipo,
	      error: function(retorno){
	        alert("Erro Json");
	      }, 
	      success: function(json) {
					$('#DropDown_qm_curso').append('<option selected="selected" value="0">Selecione</option>');
					              	
					$(json.data).each(function(index, dados){
	           conteudo = '<option value="' + dados.cursos.qt_curso + '">' + dados.cursos.qt_descric + '</option>';           
	      		 $('#DropDown_qm_curso').append(conteudo);
		      });
	     	}
	 		});
	 	}		
	};

  /************* CARREGA OS CURSOS *************/
	$('select#DropDown_qm_tcurso').change(function(){
		Carrega_Cursos();
	});
	
  /************* CANCELAR CADASTRO - DADOS PESSOAIS, HISTORICO, CURSOS *************/  
  $("#cancelar_dados_pessoais").click(function(){
    $("#row1").show();  
    $("#row2").hide();
  }); 
     
  $("#cancelar_historico").click(function(){  
    $("#row2").show();  
    $("#row3").hide();
  });
  
  $("#cancelar_cursos").click(function(){  
    $("#row3").show();  
    $("#row4").hide();
  }); 

  /************* CONCLUIR A INSCRIÇÃO *************/  
  $("#concluir_inscricao").click(function(){  
		//CADASTRA O CURRICULO ATUALIZADO NA VAGA
		var cod_vaga = $("#cod_vaga").val();
		var qg_curric = $("#qg_curric").val();
		
		$.ajax({
      type: "GET",
   	  dataType: "jsonp",
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/insere_vaga.php?cod_vaga="+cod_vaga+"&qg_curric="+qg_curric,
      error: function(retorno){
        //alert("Erro Json");
      }, 
      success: function(json)	{
      	if(json.data == "cadastrado" || json.data == "sucesso"){
      		 alert("Cadastro realizado com sucesso para a vaga");
      	}
     	}
 		});
  	 
    $("#row4").hide();
    $("#row5").show();
    $(window).scrollTop(300);
  });

	//VALIDAÇÃO DOS FORMULÁRIOS
	//ADICIONA METO DOS DE DATA E CPF
	$.validator.addMethod( "DateBr", function(value, element) { return value.match(/^(0?[1-9]|[12][0-9]|3[0-2])[.,/ -](0?[1-9]|1[0-2])[.,/ -](19|20)?\d{2}$/); }, "Digite a data no formato dd/mm/aaaa.");
	$.validator.addMethod("DateBr2", function(value, element) { if(value == "") return true; else if(value.length < 10) return false;else return value.match(/^(0?[1-9]|[12][0-9]|3[0-2])[.,/ -](0?[1-9]|1[0-2])[.,/ -](19|20)?\d{2}$/);},"Data em branco");
	$.validator.addMethod( "CPF", function(value, element) { 
	  value = value.replace('.','');
	  value = value.replace('.','');
	  cpf = value.replace('-','');
	  while(cpf.length < 11) cpf = "0"+ cpf;
	  var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
	    var a = [];
	    var b = new Number;
	    var c = 11;
	    for (i=0; i<11; i++){
	        a[i] = cpf.charAt(i);
	        if (i < 9) b += (a[i] * --c);
	    }
	    if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
	    b = 0;
	    c = 11;
	    for (y=0; y<10; y++) b += (a[y] * c--);
	    if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
	    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
	    return true;
	}, "Informe um CPF válido."); 
	
	$('#form1').validate({
    rules: {
      fpa_cpf: {
        required: true,
        minlength: 11,
        number: true,
        CPF: true
      },
      fpa_data: {
        required: true,
        minlength: 10,
        DateBr : true
      }
    },
    messages:{
      fpa_cpf:"Digite um CPF válido!",
      fpa_data:"Digite uma Data válida!"
    },
    
    highlight: function(label) {
      $(label).closest('.control-group').addClass('error');
      $(label).closest('.control-group').removeClass('success');
    },
    success: function(label) {
    	$(label).closest('.control-group').removeClass('error');
      $(label).closest('.control-group').addClass('success');
      label.addClass('valid').closest('.control-group').addClass('success');
    },
    
    submitHandler: function(form){
    	//VALIDA USUARIO
			Valida_Usuario_FPA();
    }
  });

	$('#form2').validate({
    rules: {
      qg_nome: {
        required: true,
        minlength: 3
      },
      qg_enderec: {
        required: true,
        minlength: 3
      },
      qg_bairro: {
        required: true,
        minlength: 3
      },
      qg_municip: {
        required: true,
        minlength: 3
      },
      DropDown_qg_estado: {
        required: true
      },
      qg_cep: {
        required: true,
        minlength: 9
      },
      email: {
        required: true,
        email: true
      },
      DropDown_qg_sexo: {
        required: true
      },
      DropDown_qg_naciona: {
        required: true
      },
      DropDown_qg_natural: {
        required: true
      }, 
      DropDown_qg_rgorg: {
        required: true
      },
      qg_mae: {
        required: true,
        minlength: 3
      },
      DropDown_qg_estciv: {
        required: true
      }, 
      qg_numcp: {
        required: true
      },
      qg_sercp: {
        required: true
      }, 
      DropDown_qg_ufcp:{
      	required: true
      },
      qg_memo2: {
        required: true,
        minlength: 50,
      },
      qg_trabde: {
        DateBr2: true //Valida somente se estiver preenchido
      }, 
      qg_trabat: {
      	DateBr2: true //Valida somente se estiver preenchido
      }
    },
    messages:{
      qg_trabde:"Digite uma Data válida!",
      qg_trabat:"Digite uma Data válida!"      
    },
    
    highlight: function(label) {
      $(label).closest('.control-group').addClass('error');
      $(label).closest('.control-group').removeClass('success');
    },
    success: function(label) {
    	$(label).closest('.control-group').removeClass('error');
      $(label).closest('.control-group').addClass('success');
      label.addClass('valid').closest('.control-group').addClass('success');
    },
    
    submitHandler: function(form){
			Cadastra_Curriculo();
    }
  });
	
	$('#form3').validate({
    rules: {
      ql_dtadmis: {
        DateBr: true,
        minlength: 10
      },
      ql_dtdemis: {
        DateBr: true,
        minlength: 10
      },
      ql_empresa: {
        required: true,
        minlength: 5
      },
      ql_funcini: {
        required: true,
        minlength: 5
      },
      ql_funcao: {
        required: true,
        minlength: 5
      },
      ql_experiencia: {
        required: true,
        minlength: 10
      }
    },
    messages:{
      ql_dtadmis:"Digite uma Data válida!",
      ql_dtdemis:"Digite uma Data válida!"      
    },
    
    highlight: function(label) {
      $(label).closest('.control-group').addClass('error');
      $(label).closest('.control-group').removeClass('success');
    },
    success: function(label) {
    	$(label).closest('.control-group').removeClass('error');
      $(label).closest('.control-group').addClass('success');
    },
    
    submitHandler: function(form){
    	if($("#adicionar_historico").is(':visible')){
    	 	Adiciona_Historico();	
    	}else{
    		Altera_Historico();
    	}
			
    }
  });
	
	$('#form4').validate({
    rules: {
      DropDown_qm_tcurso: {
        required: true,
        minlength: 1
      },
      DropDown_qm_curso: {
        required: true,
        minlength: 1
      },
      DropDown_qm_escolar: {
        required: true,
        minlength: 1
      },
      qm_entidad: {
        required: true,
        minlength: 5
      },
      qm_data: {
         DateBr: true,
        minlength: 10
      }
    },
    messages:{
      ql_dtadmis:"Digite uma Data válida!",
      ql_dtdemis:"Digite uma Data válida!"      
    },
    
    highlight: function(label) {
      $(label).closest('.control-group').addClass('error');
      $(label).closest('.control-group').removeClass('success');
    },
    success: function(label) {
    	$(label).closest('.control-group').removeClass('error');
      $(label).closest('.control-group').addClass('success');
    },
    
    submitHandler: function(form){
    	if($("#adicionar_curso").is(':visible')){
    	 	Adiciona_Curso();	
    	}else{
    		Altera_Curso();
    	}
			
    }
  });

});
