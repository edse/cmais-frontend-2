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
      crossDomain: true,
      url: "/actions/trabalhe-conosco/seleciona_historicos.php?cod_curriculo="+cod_curriculo,
      error: function(retorno){
        console.log("Erro ao selecionar históricos");
      }, 
      success: function(json) {
					$.each(json.data, function(index, dados){
          	//console.log(dados.historicos);
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
            conteudo = conteudo+'<div class="accordion-inner"><p>Função Inicial: '+funcaoinicial+'</p><p>Função Final:'+funcaofinal+'</p>';
            conteudo = conteudo+'<p>Experiencia:'+experiencia+'</p><p>Data de Admissão:'+dataadmissao+'</p><p>Data de Demissão:'+datademissao+'</p>';
            conteudo = conteudo+'<a class="seleciona-historico" href="#'+cont+'" >Editar</a>';
            conteudo = conteudo+'<input type="hidden" value="'+codigo+'" id="ql_codigo'+cont+'"></div></div></div>';
            $('#accordion2').append(conteudo); 
            cont++;
         });
        }
      });
    };

	function Seleciona_Cursos (cod_curriculo) {
		var cont = 1;
		$.ajax({
			type: "GET",
			dataType: "jsonp",
			crossDomain: true,
			url: "/actions/trabalhe-conosco/seleciona_cursos.php?qg_curric="+cod_curriculo,
			error: function(retorno){
			  console.log("Erro ao selecionar cursos");
			}, 
			success: function(json) {
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
			      conteudo = conteudo+'<div class="accordion-inner"><p>Data de Formação: '+qm_data+'</p>';
			      conteudo = conteudo+'<a class="seleciona-curso" href="#'+cont+'" >Editar</a>';
			      conteudo = conteudo+'<input type="hidden" value="'+qm_codigo+'" id="qm_codigo'+cont+'"></div></div></div>';
			      $('#accordion_cursos').append(conteudo);
			       
			      cont++;
			        
			        
			     });
			}
		});
	};
    
  /************* VALIDA USUÁRIO *************/
  $("#passo-valida-usuario").click(function(){
    var cpf = $("#fpa_cpf").val();
    var data = $("#fpa_data").val();
	
    $.ajax({
	    type: "GET",
	    dataType: "jsonp",
	    crossDomain: true,
	    data: $("#form1").serialize(),
	    url: "http://172.20.16.219/actions/trabalhe-conosco/action.php?service=valida_usuario",
	    error: function(retorno){
	        //console.log("Erro na validação do usuário!");
	        alert("Erro na validação do usuário!");
	    }, 
	    success: function(json) {
	      //LIBERA A TELA DE CADASTRO
		    $("#fpa_cpf_cadastro").val(cpf);
		    $("#fpa_data_nascimento").val(data);     
	      if(json.data == 999){
					console.log("Mostra a tela de cadastro vazia");
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
	      	
	        if(json.data.curriculo.qg_trabat != "01/01/1900" && json.data.curriculo.qg_trabde != "01/01/1900"){
	          $("#qg_trabat").val(json.data.curriculo.qg_trabat);
	          $("#qg_trabde").val(json.data.curriculo.qg_trabde);
	        }else{
	        	$("#qg_trabat").val('');
	        	$("#qg_trabde").val('');
	        }        	
					$("#qg_curric").val(json.data.curriculo.qg_curric);
	      	$("#qg_memo2").val(json.data.curriculo.qg_memo2);
				}
					
	      $("#row1").hide(); 
	      $("#row2").show(); 
	    	
	    	//CARREGA AS VAGAS
				$.ajax({
	        type: "GET",
	     	  dataType: "jsonp",
	     	  crossDomain: true,
	        url: "http://172.20.16.219/actions/trabalhe-conosco/consulta_vagas.php",
	        error: function(retorno){
	          alert("Erro Json");
	        }, 
	        success: function(json) {
						$('#DropDown_qg_cargo').empty();
						$('#DropDown_qg_cargo').append('<option value="0"> Selecione</option>');              	
						$(json.data).each(function(index, dados){
	             conteudo = '<option value="' + dados.vaga.codigo + '" data-departamento="' + dados.vaga.departamento + '">' + dados.vaga.descricao + '</option>';           
	        		 $('#DropDown_qg_cargo').append(conteudo);
			       });
	       	}
	   		}); 
	    }
	  });
		return false;
	});
   
  //CADASTRA O CURRICULO
  $("#cadastra-curriculo").click(function(){
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
			        url: "/actions/trabalhe-conosco/cadastra_curriculo.php?"+valores,
			        error: function(retorno){
			          console.log("Erro para obter os dados do currículo. Clique no botão VOLTAR e tente novamente!");
			        }, 
			        success: function(json) {
		            if(json.data != 0){
		            	console.log(json.data);
		            	$("#qg_curric").val(json.data);
		              $("#row2").hide(); //ESCONDE A TELA DE CADASTRO
	      					$("#row3").show(); //MOSTRA A TELA DE CADASTRO SEGUINTES
		            }else{
		            	console.log(json.data);
		            	console.log("Erro");
		     				}   
			     	}
		     });
	    }else{
	      $.ajax({
	        type: "GET",
	        dataType: "jsonp",
	        data: $("#form2").serialize(),        
	        url: "http://172.20.16.219/actions/trabalhe-conosco/altera_curriculo.php?"+valores,
	        error: function(retorno){
	          console.log("Erro ao Alterar Curriculo: Tente novamente mais tarde!");
	        },
	        success: function(json) {
	        		if(json.data == true){
	        			console.log("Dados do curriculo alterado com sucesso");	
	        		}else{
	        			console.log("Erro na alteração");
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
    
  });
  
  
  $(".seleciona-historico").live('click',function(){
    var codigo   =  $(this).attr('href');
    codigo = codigo.replace('#',''); 
    var codigo =  $("#ql_codigo"+codigo).val();
    var cod_curriculo   =  $("#qg_curric").val();
      
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      url: "/actions/trabalhe-conosco/seleciona_historico.php?codigo="+codigo,
      error: function(retorno){
        console.log("Erro na seleção do histórico");
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
        url: "/actions/trabalhe-conosco/deleta_historico.php?codigo="+codigo,
        error: function(retorno){
          console.log("Erro ao excluir histórico"); 
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
   
  
  $("#adicionar_historico").live('click',function(){
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      data: $("#form3").serialize(),
      url: "/actions/trabalhe-conosco/insere_historico.php?qg_curric="+$("#qg_curric").val(),
      error: function(retorno){
        alert("Erro xml");
      }, 
      success: function(json) {
         if(json.data == true){
        		console.log("cadastrou");
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
         	console.log("erro no cadastro");
         }
       }
    });
  });
  
  
  $("#altera_historico").live('click',function(){
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      data: $("#form3").serialize(),
      url: "/actions/trabalhe-conosco/altera_historico.php",
      error: function(retorno){
        alert("Erro xml");
      }, 
      success: function(json) {
        if(json.data == true){
          console.log("alterou...");
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

  }); 
  
  
  $(".seleciona-curso").live('click',function(){
    var codigo   =  $(this).attr('href');
    codigo = codigo.replace('#',''); 
    var codigo =  $("#qm_codigo"+codigo).val();
    var cod_curriculo   =  $("#qg_curric").val();
      
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      url: "/actions/trabalhe-conosco/seleciona_curso.php?codigo="+codigo+"&"+cod_curriculo,
      error: function(retorno){
        console.log("Erro na seleção do curso");
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
        url: "/actions/trabalhe-conosco/deleta_curso.php?codigo="+codigo,
        error: function(retorno){
          console.log("Erro ao excluir curso"); 
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
   
  
  $("#adicionar_curso").live('click',function(){
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
        url: "/actions/trabalhe-conosco/insere_curso.php?qg_curric="+$("#qg_curric").val()+valores,
        error: function(retorno){
          alert("Erro Curso");
        }, 
        success: function(json) {
           if(json.data == true){
          		console.log("cadastrou");
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
           	console.log("erro no cadastro");
           }
         }
      });
  });
  
  
  $("#altera_curso").live('click',function(){
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
        url: "/actions/trabalhe-conosco/altera_curso.php?qg_curric="+$("#qg_curric").val()+valores,
        error: function(retorno){
          alert("Erro xml");
        }, 
        success: function(json) {
          if(json.data == true){
            console.log("alterou curso");
            $("#acoes_curso").hide();
            $("#accordion_cursos").empty();
            $("#accordion_cursos").show();
            $("#adicionar_curso").show();
            
	 					$("#form4")[0].reset();
            
            var cod_curriculo = $("#qg_curric").val();
						Seleciona_Cursos(cod_curriculo);
						                  
            //alert("Curso alterado com sucesso");
            $("#concluir_inscricao").show();
              
          }else{
             alert('Erro no Serviço: Alteração de Cursos');
          }
       }
		});
  }); 
  
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
	      url: "http://172.20.16.219/actions/trabalhe-conosco/cursos.php?tipo="+tipo,
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
  	// checar se tem vagas disponíveis, se sim, checar se alguma foi selecionada, 
  	// se nenhuma vaga for selecionada, informar ao usuário (dando a opção de voltar e salvar) 
  	// limpar forms 
    $("#row4").hide();
    $("#row5").show();
  });

});
