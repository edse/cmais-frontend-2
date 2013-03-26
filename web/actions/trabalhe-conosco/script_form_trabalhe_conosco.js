$(document).ready(function() {
  $("#row2").hide();
  $("#row3").hide();
  $("#row4").hide();
  $("#row5").hide();

  $("#acoes_historico").hide();
  $("#acoes_curso").hide();     
  
  /************* VALIDA USUÁRIO *************/
  $("#passo-valida-usuario").click(function(){
    //var cpf = $("#fpa_cpf").val(); 
    //var data = $("#fpa_data").val();

    /************* LOADING DO AJAX *************/
    //var loading = $('<img id="loading" alt="Carregando" title="Carregando" src="http://www.rendezvousdufutur.com/img/loading.gif" />').prependTo('#row1').hide()
    //http://storage.ansys.com/staticfiles/ansys/img/interface/loading.gif
    //loading.ajaxStart(function(){  $(this).show();});
    //loading.ajaxStop(function(){$(this).hide();});
    /************* LOADING DO AJAX *************/
    /*
    $.ajax({
    type: "GET",
    url: "/actions/trabalhe-conosco/action.php?cpf="+cpf+"&data="+data+"&service=valida_usuario",
    error: function(retorno){
        //alert("Erro na validação do usuário!");
    }, 
    success: function(xml) {
      if(xml == "Usuário Não Registrado"){
        //TELA DE CADASTRO É LIBERADA
        $("#fpa_cpf_cadastro").val(cpf);
        $("#fpa_data_nascimento").val(data);
        $("#row1").hide();
        $("#row2").show();
      }else{
        $(xml).find('curriculo').each(function() {
          /* OTIMIZADO 
          $('input').each(function(index){
            //alert($(this).attr('id'))
            //$("#"+$(this).attr('id')).val($(this).find($(xml).attr('id')).text());
            //$("#"+$(index).attr('id')).val($(xml).find($(this).attr('id')).text());
          });
          
          $("#qg_curric").val($(this).find('qg_curric').text());
          $("#fpa_cpf_cadastro").val(cpf);
          $("#fpa_data_nascimento").val(data);
          
       /************* DADOS PESSOAIS ************
          //PREENCHIMENTO DE COMBOS
          $("#DropDown_qg_grupo option[value='"+$(this).find('qg_grupo').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_sexo option[value='"+$(this).find('qg_sexo').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_estado option[value='"+$(this).find('qg_estado').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_naciona option[value='"+$(this).find('qg_naciona').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_natural option[value='"+$(this).find('qg_natural').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_rgorg option[value='"+$(this).find('qg_rgorg').text()+"']").attr('selected', 'selected');

          $("#DropDown_qg_estciv option[value='"+$(this).find('qg_estciv').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_ufcp option[value='"+$(this).find('qg_ufcp').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_are option[value='"+$(this).find('qg_are').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_tempar option[value='"+$(this).find('qg_tempar').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_trabal option[value='"+$(this).find('qg_trabal').text()+"']").attr('selected', 'selected');
          $("#DropDown_qg_motsai option[value='"+$(this).find('qg_motsai').text()+"']").attr('selected', 'selected');    
          
          //CARREGA OS DEPARTAMENTOS
          var departamento = $(this).find('qg_are').text();
          $.ajax({
              type: "GET",
              url: "/actions/trabalhe-conosco/cargos.php?departamento="+departamento,
              error: function(retorno){
                alert("Erro xml");
              }, 
              success: function(xml) {
              
              $(xml).find('cargos').each(function() {
                  var codigo = $(this).find('codigo').text();
                  var cargo = $(this).find('cargo').text();
                 
                  conteudo = "<option value="+codigo+">"+cargo+"</option>";
                 
                  $('#DropDown_qg_cargo').append(conteudo); 
                  

                });
              }
           });
                                                                   
          $("#qg_defic").val($(this).find('qg_defic').text());
          $("#qg_nome").val($(this).find('qg_nome').text());
          $("#qg_enderec").val($(this).find('qg_enderec').text());
          $("#qg_complem").val($(this).find('qg_complem').text());
          $("#qg_bairro").val($(this).find('qg_bairro').text());
          $("#qg_municip").val($(this).find('qg_municip').text());          
          $("#qg_cep").val($(this).find('qg_cep').text());
          $("#qg_fonece").val($(this).find('qg_fonece').text());
          $("#qg_fonere").val($(this).find('qg_fonere').text());
          $("#qg_foneco").val($(this).find('qg_foneco').text());
          $("#qg_mail").val($(this).find('qg_mail').text());
          $("#qg_anocheg").val($(this).find('qg_anocheg').text());
          $("#qg_rg").val($(this).find('qg_rg').text());
          $("#qg_pai").val($(this).find('qg_pai').text());
          $("#qg_mae").val($(this).find('qg_mae').text());
          $("#qg_numcp").val($(this).find('qg_numcp').text());              
          $("#qg_sercp").val($(this).find('qg_sercp').text());
          $("#qg_pis").val($(this).find('qg_pis').text());
          $("#qg_habilit").val($(this).find('qg_habilit').text());
          $("#qg_cathab").val($(this).find('qg_cathab').text());
          $("#qg_reserv").val($(this).find('qg_reserv').text());
          $("#qg_tituloe").val($(this).find('qg_tituloe').text());
          $("#qg_zonasec").val($(this).find('qg_zonasec').text());
          $("#qg_pretsal").val($(this).find('qg_pretsal').text());
          $("#qg_ultsal").val($(this).find('qg_ultsal').text());
          $("#qg_memo2").val($(this).find('qg_memo2').text());

          //FORMATA DATAS
          var qg_trabde = $(this).find('qg_trabde').text();
          var datearray = qg_trabde.substr(0,10);
          datearray = datearray.split("-");
          qg_trabde = datearray[2] + '/' + datearray[1] + '/' + datearray[0];
          
          var qg_trabat = $(this).find('qg_trabate').text();
          var datearray = qg_trabat.substr(0,10);
          datearray = datearray.split("-");
          qg_trabat = datearray[2] + '/' + datearray[1] + '/' + datearray[0];


          if(qg_trabat != "01/01/1900" && qg_trabde != "01/01/1900" ){
            $("#qg_trabat").val(qg_trabat);
            $("#qg_trabde").val(qg_trabde);
          }
           
          $("#row1").hide(); 
          $("#row2").show(); 
          
          });

       }
     }
    });
    */
   });

  $("#cadastra-curriculo").click(function(){
    

    
    
      var cpf         =  $("#fpa_cpf_cadastro").val();
      var data        =  $("#fpa_data_nascimento").val();
      var qg_curric   =  $("#qg_curric").val();

      var qg_defic    =  $("#qg_defic").val();
      var qg_nome     =  $("#qg_nome").val();
      var qg_enderec  =  $("#qg_enderec").val();
      var qg_complem  =  $("#qg_complem").val();
      var qg_bairro   =  $("#qg_bairro").val();
      var qg_municip  =  $("#qg_municip").val();
      var qg_estado   =  $("#DropDown_qg_estado").val();
      var qg_cep      =  $("#qg_cep").val();
      var qg_fonece   =  $("#qg_fonece").val();
      var qg_fonere   =  $("#qg_fonere").val();
      var qg_foneco   =  $("#qg_foneco").val();
      var qg_mail     =  $("#qg_mail").val();
      var qg_anocheg  =  $("#qg_anocheg").val();
      var qg_cargo    =  $("#DropDown_qg_cargo").val();
 
      var qg_sexo     =  $("#DropDown_qg_sexo").val();
      var qg_natural  =  $("#DropDown_qg_natural").val();
      var qg_naciona  =  $("#DropDown_qg_naciona").val();
      var qg_rg       =  $("#qg_rg").val();
      var qg_rgorg    =  $("#DropDown_qg_rgorg").val();
      var qg_pai      =  $("#qg_pai").val();
      var qg_mae      =  $("#qg_mae").val();
      var qg_estciv   =  $("#DropDown_qg_estciv").val();
      var qg_numcp    =  $("#qg_numcp").val();
      var qg_sercp    =  $("#qg_sercp").val();
      var qg_ufcp     =  $("#DropDown_qg_ufcp").val();
      var qg_pis      =  $("#qg_pis").val();
      var qg_habilit  =  $("#qg_habilit").val();
      var qg_cathab   =  $("#qg_cathab").val();
      
      var qg_reserv   =  $("#qg_reserv").val();
      var qg_tituloe  =  $("#qg_tituloe").val();
      var qg_zonasec  =  $("#qg_zonasec").val();
      var qg_are      =  $("#DropDown_qg_are").val();   
      var qg_cargo    =  $("#qg_cargo").val();
      var qg_pretsal  =  $("#qg_pretsal").val();
      var qg_ultsal   =  $("#qg_ultsal").val();
      var qg_memo2    =  $("#qg_memo2").val();
      var qg_tempar   =  $("#DropDown_qg_tempar").val();
      var qg_trabal   =  $("#DropDown_qg_trabal").val();
      var qg_motsai   =  $("#DropDown_qg_motsai").val();
      var qg_grupo    =  $("#DropDown_qg_grupo").val();
      var qg_trabat   =  $("#qg_trabat").val();
      var qg_trabde   =  $("#qg_trabde").val();
      
      var valores = ("cpf="+cpf+"&data="+data+"&qg_curric="+qg_curric+"&qg_defic="+qg_defic+"&qg_nome="+qg_nome+"&qg_enderec="+qg_enderec+"&qg_complem="+qg_complem);
      var valores = valores+("&qg_bairro="+qg_bairro+"&qg_municip="+qg_municip+"&qg_estado="+qg_estado+"&qg_cep="+qg_cep+"&qg_fonece="+qg_fonece+"&qg_fonere="+qg_fonere);
      var valores = valores+("&qg_mail="+qg_mail+"&qg_sexo="+qg_sexo+"&qg_natural="+qg_natural+"&qg_naciona="+qg_naciona+"&qg_rg="+qg_rg+"&qg_rgorg="+qg_rgorg+"&qg_pai="+qg_pai);
      var valores = valores+("&qg_mae="+qg_mae+"&qg_estciv="+qg_estciv+"&qg_numcp="+qg_numcp+"&qg_sercp="+qg_sercp+"&qg_ufcp="+qg_ufcp+"&qg_pis="+qg_pis+"&qg_habilit="+qg_habilit);      
      var valores = valores+("&qg_cathab="+qg_cathab+"&qg_reserv="+qg_reserv+"&qg_tituloe="+qg_tituloe+"&qg_zonasec="+qg_zonasec+"&qg_are="+qg_are+"&qg_pretsal="+qg_pretsal);
      var valores = valores+("&qg_ultsal="+qg_ultsal+"&qg_memo2="+qg_memo2+"&qg_tempar="+qg_tempar+"&qg_trabal="+qg_trabal+"&qg_motsai="+qg_motsai+"&qg_grupo="+qg_grupo);
      var valores = valores+("&qg_trabat="+qg_trabat+"&qg_trabde="+qg_trabde+"&qg_foneco="+qg_foneco+"&qg_anocheg="+qg_anocheg+"&qg_cargo="+qg_cargo);
    
    //SE NÃO TIVER CÓDIGO DO CURRICULO CADASTRA UM NOVO   
    
    if($("#qg_curric").val() == ""){
       //alert("campo oculto sem id");
      //CADASTRAR O CURRICULO
      //GRAVAR OS DADOS DO CURRÍCULO
      //FAZ CONSULTA PELO CPF E DATA E ARMAZENA O CÓDIGO DO CURRÍCULO NO CAMPO HIDDEN qg_curric
      
          $.ajax({
            type: "GET",
            url: "/actions/trabalhe-conosco/cadastra_curriculo.php?"+valores,
            error: function(retorno){
              alert("Erro xml");
            }, 
            success: function(xml) {
                alert(xml);
                //alert("Curriculo não cadastrado");
               
             }
          });
     
          
          $("#row2").hide(); //ESCONDE A TELA DE CADASTRO
          $("#row3").show(); //MOSTRA A TELA DE CADASTRO SEGUINTES
      
    }else{
      
      $.ajax({
        type: "GET",
        url: "/actions/trabalhe-conosco/altera_curriculo.php?"+valores,
        error: function(retorno){
          alert("Erro xml");
        }, 
        success: function(xml) {
            //alert(xml);
            if(xml != 1){
              //alert("Erro na alteração dos dados do currículo");  
            }else{
              //alert("Curriculo alterado com sucesso" +xml);
            }
         }
      });

      //CARREGA OS HISTÓRICOS PROFISSIONAIS E LISTA NA TABELA
      var cod_curriculo = $("#qg_curric").val();
      var cont = 1;
      
      $("#accordion2").empty();
      
      $.ajax({
        type: "GET",
        url: "/actions/trabalhe-conosco/seleciona_historicos.php?cod_curriculo="+cod_curriculo,
        error: function(retorno){
          alert("Erro xml");
        }, 
        success: function(xml) {
        
          $(xml).find('historicos').each(function() {
                //APEND TO DIV TABELA DE CURSOS
                var codigo = $(this).find('ql_codigo').text();
                
                //FORMATA DATA
                var dataadmissao = $(this).find('ql_dtadmis').text();
                var datearray = dataadmissao.substr(0,10);
                datearray = datearray.split("-");
                dataadmissao = datearray[2] + '/' + datearray[1] + '/' + datearray[0];
                
                var datademissao = $(this).find('ql_dtdemis').text();
                var datearray = datademissao.substr(0,10);
                datearray = datearray.split("-");
                datademissao = datearray[2] + '/' + datearray[1] + '/' + datearray[0];
                
                var experiencia = $(this).find('ql_experiencia').text();
                var empresa = $(this).find('ql_empresa').text();
                var funcaoinicial = $(this).find('ql_funcini').text();
                var funcaofinal = $(this).find('ql_funcao').text();

                                                                
                var conteudo = '<div class="accordion-group"><div class="accordion-heading">';
               
                conteudo = conteudo+'<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'+cont+'"><font color=red>';
                conteudo = conteudo + empresa + ' </font></a>  </div><div id="collapse'+cont+'" class="accordion-body collapse">';
                conteudo = conteudo+'<div class="accordion-inner"><p>Função Inicial: '+funcaoinicial+'</p><p>Função Final:'+funcaofinal+'</p>';
                conteudo = conteudo+'<p>Experiencia:'+experiencia+'</p><p>Data de Admissão:'+dataadmissao+'</p><p>Data de Demissão:'+datademissao+'</p>';
                conteudo = conteudo+'<a class="seleciona-historico" type="submit" href="#'+cont+'" >Editar</a>';
                conteudo = conteudo+'<input type="hidden" value="'+codigo+'" id="ql_codigo'+cont+'"></div></div></div>';
               
                $('#accordion2').append(conteudo); 
                
                //alert($(this).find('ql_empresa').text());
                cont++;
             });
            }
          });
      
      $("#row2").hide(); //ESCONDE A TELA DE CADASTRO
      $("#row3").show(); //MOSTRA A TELA DE CADASTRO SEGUINTES
      $(window).scrollTop(300);
    }
  });
  
  
  $(".seleciona-historico").live('click',function(){
    
    var codigo   =  $(this).attr('href');
    codigo = codigo.replace('#',''); 
    var codigo =  $("#ql_codigo"+codigo).val();
    var cod_curriculo   =  $("#qg_curric").val();
      
    $.ajax({
      type: "GET",
      url: "/actions/trabalhe-conosco/seleciona_historico.php?codigo="+codigo,
      error: function(retorno){
        alert("Erro xml");
      }, 
      success: function(xml) {
      
        $(xml).find('historico').each(function() {
          //APEND TO DIV TABELA DE CURSOS
          $("#ql_codigo").val($(this).find('ql_codigo').text());

          var dataadmissao = $(this).find('ql_dtadmis').text();
          var datearray = dataadmissao.substr(0,10);
          datearray = datearray.split("-");
          dataadmissao = datearray[2] + '/' + datearray[1] + '/' + datearray[0];
          
          var datademissao = $(this).find('ql_dtdemis').text();
          var datearray = datademissao.substr(0,10);
          datearray = datearray.split("-");
          datademissao = datearray[2] + '/' + datearray[1] + '/' + datearray[0];
          
          $("#ql_dtadmis").val(dataadmissao);
          $("#ql_dtdemis").val(datademissao);
          
          
          $("#ql_experiencia").val($(this).find('ql_experiencia').text());
          $("#ql_empresa").val($(this).find('ql_empresa').text());
          $("#ql_funcini").val($(this).find('ql_funcini').text());
          $("#ql_funcao").val($(this).find('ql_funcao').text());

          //alert($("#ql_experiencia").val($(this).find('ql_experiencia').text()));
          
          $("#acoes_historico").show();
          $("#accordion2").hide();
          $("#adicionar_historico").hide();
          $("#continue_inscricao").hide();
          
         });
       }
     });
      
        
   });
   
  $("#cancela_alteracao_historico").live('click',function(){
      
      $("#acoes_historico").hide();
      $("#accordion2").show();
      $("#adicionar_historico").show();
      $("#continue_inscricao").show();
      $("#ql_codigo").val('');
      $("#ql_dtadmis").val('');
      $("#ql_dtdemis").val('');
      $("#ql_experiencia").val('');
      $("#ql_empresa").val('');
      $("#ql_funcini").val('');
      $("#ql_funcao").val('');
     
  });
  
  
  
  $("#deleta_historico").live('click',function(){
     
      if(confirm("Deseja apagar este histórico profissional do seu currículo?")){
        
          codigo = $("#ql_codigo").val();
          $.ajax({
            type: "GET",
            url: "/actions/trabalhe-conosco/deleta_historico.php?codigo="+codigo,
            error: function(retorno){
              alert("Erro xml");
            }, 
            success: function(xml) {
               if(xml == 1){
                       
                  $("#acoes_historico").hide();
                  $("#accordion2").empty(); //LIMPA O CAMPO
                  $("#accordion2").show();
                  $("#adicionar_historico").show();
                  
                  $("#ql_codigo").val('');
                  $("#ql_dtadmis").val('');
                  $("#ql_dtdemis").val('');
                  $("#ql_experiencia").val('');
                  $("#ql_empresa").val('');
                  $("#ql_funcini").val('');
                  $("#ql_funcao").val('');
                
                  
                  //RECARREGA OS HISTÓRICOS NOVAMENTE
                  
                  var cod_curriculo = $("#qg_curric").val();
                  var cont = 1;
                  
                  $.ajax({
                  type: "GET",
                  url: "/actions/trabalhe-conosco/seleciona_historicos.php?cod_curriculo="+cod_curriculo,
                  error: function(retorno){
                    alert("Erro xml");
                  }, 
                  success: function(lista) {
                    
                    $(lista).find('historicos').each(function() {
                          //APEND TO DIV TABELA DE CURSOS
                          var codigo = $(this).find('ql_codigo').text();
                          var dataadmissao = $(this).find('ql_dtadmis').text();
                          var datademissao = $(this).find('ql_dtdemis').text();
                          var experiencia = $(this).find('ql_experiencia').text();
                          var empresa = $(this).find('ql_empresa').text();
                          var funcaoinicial = $(this).find('ql_funcini').text();
                          var funcaofinal = $(this).find('ql_funcao').text();
          
                                                                          
                          var conteudo = '<div class="accordion-group"><div class="accordion-heading">';
                         
                          conteudo = conteudo+'<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'+cont+'"><font color=red>';
                          conteudo = conteudo + empresa + ' </font></a>  </div><div id="collapse'+cont+'" class="accordion-body collapse">';
                          conteudo = conteudo+'<div class="accordion-inner"><p>Função Inicial: '+funcaoinicial+'</p><p>Função Final:'+funcaofinal+'</p>';
                          conteudo = conteudo+'<p>Experiencia:'+experiencia+'</p><p>Data de Admissão:'+dataadmissao+'</p><p>Data de Demissão:'+datademissao+'</p>';
                          conteudo = conteudo+'<a class="seleciona-historico" type="submit" href="#'+cont+'" >Editar</a>';
                          conteudo = conteudo+'<input type="hidden" value="'+codigo+'" id="ql_codigo'+cont+'"></div></div></div>';
                         
                          $('#accordion2').append(conteudo); 
                          
                          //alert($(this).find('ql_empresa').text());
                          cont++;
                          
                       });
                       alert("Histórico excluído com sucesso");
                      }
                    });
                  

                  
                }
              }
            });
        }
  });
  
  
  
  $("#adicionar_historico").live('click',function(){
    cod_curriculo = $("#qg_curric").val();
    data_admissao = $("#ql_dtadmis").val();
    data_demissao = $("#ql_dtdemis").val();
    experiencia = $("#ql_experiencia").val();
    empresa = $("#ql_empresa").val();
    funcao = $("#ql_funcini").val();
    funcao_inicial = $("#ql_funcao").val(); 
    
    var valores = "cod_curriculo="+cod_curriculo+"&data_admissao="+data_admissao+"&data_demissao="+data_demissao+"&experiencia="+experiencia+"&empresa="+empresa+"&funcao="+funcao+"&funcao_inicial="+funcao_inicial;

      $.ajax({
        type: "GET",
        url: "/actions/trabalhe-conosco/insere_historico.php?"+valores,
        error: function(retorno){
          alert("Erro xml");
        }, 
        success: function(xml) {
          if(xml == 1){
              // SE CADASTRAR COM SUCESSO CARREGA TUDO NOVAMENTE
                  $("#acoes_historico").hide();
                  $("#accordion2").empty(); //LIMPA O CAMPO
                  $("#accordion2").show();
                  $("#adicionar_historico").show();
                  
                  $("#ql_codigo").val('');
                  $("#ql_dtadmis").val('');
                  $("#ql_dtdemis").val('');
                  $("#ql_experiencia").val('');
                  $("#ql_empresa").val('');
                  $("#ql_funcini").val('');
                  $("#ql_funcao").val('');
                
                  
                  var cod_curriculo = $("#qg_curric").val();
                  var cont = 1;
                  
                  $.ajax({
                  type: "GET",
                  url: "/actions/trabalhe-conosco/seleciona_historicos.php?cod_curriculo="+cod_curriculo,
                  error: function(retorno){
                    alert("Erro xml");
                  }, 
                  success: function(lista) {
                    
                    $(lista).find('historicos').each(function() {
                          //APEND TO DIV TABELA DE CURSOS
                        var codigo = $(this).find('ql_codigo').text();
                        var dataadmissao = $(this).find('ql_dtadmis').text();
                        var datademissao = $(this).find('ql_dtdemis').text();
                        var experiencia = $(this).find('ql_experiencia').text();
                        var empresa = $(this).find('ql_empresa').text();
                        var funcaoinicial = $(this).find('ql_funcini').text();
                        var funcaofinal = $(this).find('ql_funcao').text();
        
                                                                        
                        var conteudo = '<div class="accordion-group"><div class="accordion-heading">';
                       
                        conteudo = conteudo+'<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'+cont+'"><font color=red>';
                        conteudo = conteudo + empresa + ' </font></a>  </div><div id="collapse'+cont+'" class="accordion-body collapse">';
                        conteudo = conteudo+'<div class="accordion-inner"><p>Função Inicial: '+funcaoinicial+'</p><p>Função Final:'+funcaofinal+'</p>';
                        conteudo = conteudo+'<p>Experiencia:'+experiencia+'</p><p>Data de Admissão:'+dataadmissao+'</p><p>Data de Demissão:'+datademissao+'</p>';
                        conteudo = conteudo+'<a class="seleciona-historico" type="submit" href="#'+cont+'" >Editar</a>';
                        conteudo = conteudo+'<input type="hidden" value="'+codigo+'" id="ql_codigo'+cont+'"></div></div></div>';
                       
                        $('#accordion2').append(conteudo); 
                        
                        //alert($(this).find('ql_empresa').text());
                        cont++;
                          
                      });
                        alert("Histórico cadastrado com sucesso");
                        $("#continue_inscricao").show();
                      }
                    });
              
            }
         }
      });
     

  });
  
  
  $("#altera_historico").live('click',function(){
    codigo = $("#ql_codigo").val();
    data_admissao = $("#ql_dtadmis").val();
    data_demissao = $("#ql_dtdemis").val();
    experiencia = $("#ql_experiencia").val();
    empresa = $("#ql_empresa").val();
    funcao = $("#ql_funcini").val();
    funcao_inicial = $("#ql_funcao").val(); 
    
    var valores = "codigo="+codigo+"&data_admissao="+data_admissao+"&data_demissao="+data_demissao+"&experiencia="+experiencia+"&empresa="+empresa+"&funcao="+funcao+"&funcao_inicial="+funcao_inicial;
    //alert(valores);
      $.ajax({
        type: "GET",
        url: "/actions/trabalhe-conosco/altera_historico.php?"+valores,
        error: function(retorno){
          alert("Erro xml");
        }, 
        success: function(xml) {
          if(xml == 1){
            //alert("alterou...");
              // SE CADASTRAR COM SUCESSO CARREGA TUDO NOVAMENTE
                  $("#acoes_historico").hide();
                  $("#accordion2").empty();
                  $("#accordion2").show();
                  $("#adicionar_historico").show();
                  
                  $("#ql_codigo").val('');
                  $("#ql_dtadmis").val('');
                  $("#ql_dtdemis").val('');
                  $("#ql_experiencia").val('');
                  $("#ql_empresa").val('');
                  $("#ql_funcini").val('');
                  $("#ql_funcao").val('');
                
                  
                  var cod_curriculo = $("#qg_curric").val();
                  var cont = 1;
                  
                  $.ajax({
                  type: "GET",
                  url: "/actions/trabalhe-conosco/seleciona_historicos.php?cod_curriculo="+cod_curriculo,
                  error: function(retorno){
                    alert("Erro xml");
                  }, 
                  success: function(lista) {
                    
                    $(lista).find('historicos').each(function() {
                          //APEND TO DIV TABELA DE CURSOS
                        var codigo = $(this).find('ql_codigo').text();
                        var dataadmissao = $(this).find('ql_dtadmis').text();
                        var datademissao = $(this).find('ql_dtdemis').text();
                        var experiencia = $(this).find('ql_experiencia').text();
                        var empresa = $(this).find('ql_empresa').text();
                        var funcaoinicial = $(this).find('ql_funcini').text();
                        var funcaofinal = $(this).find('ql_funcao').text();
        
                                                                        
                        var conteudo = '<div class="accordion-group"><div class="accordion-heading">';
                       
                        conteudo = conteudo+'<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'+cont+'"><font color=red>';
                        conteudo = conteudo + empresa + ' </font></a>  </div><div id="collapse'+cont+'" class="accordion-body collapse">';
                        conteudo = conteudo+'<div class="accordion-inner"><p>Função Inicial: '+funcaoinicial+'</p><p>Função Final:'+funcaofinal+'</p>';
                        conteudo = conteudo+'<p>Experiencia:'+experiencia+'</p><p>Data de Admissão:'+dataadmissao+'</p><p>Data de Demissão:'+datademissao+'</p>';
                        conteudo = conteudo+'<a class="seleciona-historico" type="submit" href="#'+cont+'" >Editar</a>';
                        conteudo = conteudo+'<input type="hidden" value="'+codigo+'" id="ql_codigo'+cont+'"></div></div></div>';
                       
                        $('#accordion2').append(conteudo); 

                        cont++;
                          
                      });
                        alert("Histórico cadastrado com sucesso");
                        $("#continue_inscricao").show();
                      }
                    });
              
            }else{
               alert('Erro no Serviço: Alteração de Históricos')
              
            }
         }
      });
     

  }); 
  
  
  /************* SEGUIR PARA PASSO 4 *************/
  $("#continuar_inscricao").click(function(){  
    $("#row3").hide();
    $("#row4").show();
    $(window).scrollTop(300);
  });


  /************* CARREGA CARGOS DO DEPARTAMENTO *************/
  $("#DropDown_qg_are").change(function(){  
    //LIMPA CARGOS
    $('#DropDown_qg_cargo').empty();
    $('#DropDown_qg_cargo').append('<option value="0"> Selecione</option>'); 
    var valor = $('#DropDown_qg_are').val();

    $.ajax({
        type: "GET",
        url: "/actions/trabalhe-conosco/cargos.php?departamento="+valor,
        error: function(retorno){
          alert("Erro xml");
        }, 
        success: function(xml) {
          $(xml).find('cargos').each(function() {
            var codigo = $(this).find('codigo').text();
            var cargo = $(this).find('cargo').text();
            conteudo = "<option value="+codigo+">"+cargo+"</option>";           
            $('#DropDown_qg_cargo').append(conteudo);
          });
        }
     });
  }); 

  
  /************* CONCLUIR A INSCRIÇÃO *************/  
  $("#concluir_inscricao").click(function(){  
    $("#row4").hide();
    $("#row5").show();
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
   
  

});
