<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container quem-somos">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span6">
      <!--texto-->
     <h1><?php echo $section->getTitle();?></h1>
     <?php echo html_entity_decode($displays['destaque-principal'][0]->Asset->AssetContent->render()) ?>
     <!--/texto-->
     <!--descricao vagas-->
     <div class="accordion" id="accordion2">
      <!--tipo da vaga-->
      <div class="accordion-group">
        <?php foreach($section->subsections() as $k=>$s):?> 
        <div class="accordion-heading">
          <a class="accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#emprego<?php echo $k?>">
            <?php echo $s->getTitle(); ?>
          </a>
          <hr class="tipo"/>
          <!--vagas relacionadas-->
            <div id="emprego<?php echo $k?>" class="accordion-body collapse <?php  if($k==1){echo "in";}else{echo "on";};  ?>">
              <div class="accordion" id="vagas-relacionadas">
              <!--emprego aberto-->
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a id="teste1" class="accordion-toggle vaga-aberta" data-toggle="collapse" data-parent="#vagas-relacionadas" href="#vaga<?php echo $k?>">
                    <i class="ico-trabalho"></i> Assistente de Arte I <span class="badge vaga">1 vaga</span>
                  </a>
                </div>
                <hr class="vaga"/>
                <div id="vaga<?php echo $k?>" class="accordion-body collapse vagas-exi">
                  <div class="accordion-inner">
                    <!--descriçao vaga-->
                    <ul>
                      <li class="tit-desc">Principais Atribuições</li>
                      <ul>
                        <li>Coordenar equipe de diagramadores (internos e externos) e organizar o fluxo de trabalho entre eles para que se cumpra o cronograma;</li>
                        <li>Trabalhar a colocação dos textos nas  páginas, seguindo um projeto gráfico previamente aprovado;</li>
                        <li>Elaborar projetos gráficos;</li>
                        <li>Analisar a melhor maneira de posicionar as fotografias / ilustrações nas páginas;</li>
                        <li>Inserir as correções realizadas pelos revisores nos textos;</li>
                        <li>Prezar pela qualidade das ilustrações e imagens e todos os livros;</li>
                        <li>Manter contato com ilustradores, designers e fotógrafos para adequar o trabalho ao nível de qualidade e identidade esperada;</li>
                        <li>Manter contato com a gráfica no que diz respeito a envio e fechamento de arquivos;</li>
                        <li>Desenvolver layouts para conteúdo digital.</li>
                      </ul>  
                      <li class="tit-desc">Requisitos</li>
                        <ul>
                          <li>Experiência nas atividades descritas acima;</li>
                          <li>Conhecimento em Photoshop , InDesign e iMac;</li>
                          <li>Conhecimento de ferramentas de design de conteúdo digital como Adobe Digital ● Publishing Suíte, In Design avançado para publicação em tablets, ou similares.</li>
                        </ul>
                      <li class="tit-desc">Idioma</li>
                        <ul>
                          <li>Inglês nível básico.</li>
                        </ul>
                      <li class="tit-desc">Formação</li>
                        <ul>
                          <li>Superior completo em Design, Produção Editorial, Editoração ou Áreas correlatas.</li>
                        </ul>                   
                      <li class="tit-desc">Carga Horária</li>
                        <ul>
                          <li>44 horas semanais</li>
                        </ul>
                      <li class="tit-desc">Regime de Trabalho</li>
                        <ul>
                          <li>CLT</li>
                        </ul>
                      <li class="tit-desc">Local de Trabalho</li>
                        <ul>
                          <li>São Paulo</li>
                        </ul>
                      <li class="tit-desc">Inscrições</li>
                        <p>
                          Cadastre seu currículo até o dia <strong>29/07/2012</strong>. No campo Departamento opte por <strong>Projetos Educacionais</strong> e no campo Cargo opte por <strong>Assistente de Arte I</strong>.
                          Caso o cadastro não seja efetuado conforme indicado acima, seu currículo não será considerado para o processo seletivo.
                        </p>
                      <li class="tit-desc">Processo Seletivo</li>
                        <p>
                          A seleção será feita de acordo com as seguintes etapas, em datas a serem agendadas e comunicadas previamente aos candidatos pela área de RH:
                          </p>
                          <ul>
                            <li>Triagem dos currículos cadastrados;</li>
                            <li>Realização de provas de conteúdo geral e específico, testes Psicológicos;</li>
                            <li>Realização de entrevistas técnicas e/ou comportamentais.</li>
                          </ul>
  
                        <p>A realização das provas e entrevistas ocorrerá na sede da Fundação Padre Anchieta, Rua Cenno Sbrighi, 378 – Água Branca.</p>
                        <p>Fica eleito o foro da Comarca da Capital para dirimir toda e qualquer questão inerente ao presente Processo Seletivo. Confira na íntegra o Regulamento Interno de Processo Seletivo da Fundação Padre Anchieta, no site <a href="#">www.tvcultura.com.br/trabalheconosco</a></p>
                        <br>
                        <p>São Paulo, 20 de julho de 2012.</p>
                        <p>Fundação Padre Anchieta</p>
                      
                    </ul>
                    <a href="/fpa/realizar-cadastro?vaga=vagaEscolhida&quant=1" class="btn btn-primary large-button pull-right realizar" title="Realizar Inscrição">Realizar Inscrição</a>
                    <!--/descriçao vaga-->
                    <hr class="vaga desc"/>  
                  </div>
                </div>
              </div>
              <!--/emprego aberto-->  
              </div>
            </div>
            <!--/vagas relacionadas-->
        </div>
        <?php endforeach; ?>
      </div>
      <!--/tipo da vaga-->
     </div>
     <!--/descricao vagas-->
     <?php
     /*
     <!--descricao vagas-->
     <div class="accordion" id="accordion2">
        <!--tipo da vaga-->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#emprego1">
              Processo Seletivo
            </a>
            <hr class="tipo"/>
          </div>
          
            <!--vagas relacionadas-->
            <div id="emprego1" class="accordion-body collapse in">
              <div class="accordion" id="vagas-relacionadas">
              <!--emprego aberto-->
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a id="teste1" class="accordion-toggle vaga-aberta" data-toggle="collapse" data-parent="#vagas-relacionadas" href="#vaga1">
                    <i class="ico-trabalho"></i> Assistente de Arte I <span class="badge vaga">1 vaga</span>
                  </a>
                </div>
                <hr class="vaga"/>
                <div id="vaga1" class="accordion-body collapse vagas-exi">
                  <div class="accordion-inner">
                    <!--descriçao vaga-->
                    <ul>
                      <li class="tit-desc">Principais Atribuições</li>
                      <ul>
                        <li>Coordenar equipe de diagramadores (internos e externos) e organizar o fluxo de trabalho entre eles para que se cumpra o cronograma;</li>
                        <li>Trabalhar a colocação dos textos nas  páginas, seguindo um projeto gráfico previamente aprovado;</li>
                        <li>Elaborar projetos gráficos;</li>
                        <li>Analisar a melhor maneira de posicionar as fotografias / ilustrações nas páginas;</li>
                        <li>Inserir as correções realizadas pelos revisores nos textos;</li>
                        <li>Prezar pela qualidade das ilustrações e imagens e todos os livros;</li>
                        <li>Manter contato com ilustradores, designers e fotógrafos para adequar o trabalho ao nível de qualidade e identidade esperada;</li>
                        <li>Manter contato com a gráfica no que diz respeito a envio e fechamento de arquivos;</li>
                        <li>Desenvolver layouts para conteúdo digital.</li>
                      </ul>  
                      <li class="tit-desc">Requisitos</li>
                        <ul>
                          <li>Experiência nas atividades descritas acima;</li>
                          <li>Conhecimento em Photoshop , InDesign e iMac;</li>
                          <li>Conhecimento de ferramentas de design de conteúdo digital como Adobe Digital ● Publishing Suíte, In Design avançado para publicação em tablets, ou similares.</li>
                        </ul>
                      <li class="tit-desc">Idioma</li>
                        <ul>
                          <li>Inglês nível básico.</li>
                        </ul>
                      <li class="tit-desc">Formação</li>
                        <ul>
                          <li>Superior completo em Design, Produção Editorial, Editoração ou Áreas correlatas.</li>
                        </ul>                   
                      <li class="tit-desc">Carga Horária</li>
                        <ul>
                          <li>44 horas semanais</li>
                        </ul>
                      <li class="tit-desc">Regime de Trabalho</li>
                        <ul>
                          <li>CLT</li>
                        </ul>
                      <li class="tit-desc">Local de Trabalho</li>
                        <ul>
                          <li>São Paulo</li>
                        </ul>
                      <li class="tit-desc">Inscrições</li>
                        <p>
                          Cadastre seu currículo até o dia <strong>29/07/2012</strong>. No campo Departamento opte por <strong>Projetos Educacionais</strong> e no campo Cargo opte por <strong>Assistente de Arte I</strong>.
                          Caso o cadastro não seja efetuado conforme indicado acima, seu currículo não será considerado para o processo seletivo.
                        </p>
                      <li class="tit-desc">Processo Seletivo</li>
                        <p>
                          A seleção será feita de acordo com as seguintes etapas, em datas a serem agendadas e comunicadas previamente aos candidatos pela área de RH:
                          </p>
                          <ul>
                            <li>Triagem dos currículos cadastrados;</li>
                            <li>Realização de provas de conteúdo geral e específico, testes Psicológicos;</li>
                            <li>Realização de entrevistas técnicas e/ou comportamentais.</li>
                          </ul>
  
                        <p>A realização das provas e entrevistas ocorrerá na sede da Fundação Padre Anchieta, Rua Cenno Sbrighi, 378 – Água Branca.</p>
                        <p>Fica eleito o foro da Comarca da Capital para dirimir toda e qualquer questão inerente ao presente Processo Seletivo. Confira na íntegra o Regulamento Interno de Processo Seletivo da Fundação Padre Anchieta, no site <a href="#">www.tvcultura.com.br/trabalheconosco</a></p>
                        <br>
                        <p>São Paulo, 20 de julho de 2012.</p>
                        <p>Fundação Padre Anchieta</p>
                      
                    </ul>
                    <a href="/fpa/realizar-cadastro?vaga=vagaEscolhida&quant=1" class="btn btn-primary large-button pull-right realizar" title="Realizar Inscrição">Realizar Inscrição</a>
                    <!--/descriçao vaga-->
                    <hr class="vaga desc"/>  
                  </div>
                </div>
              </div>
              <!--/emprego aberto-->
              <!--emprego aberto-->
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a id="teste2" class="accordion-toggle vaga-aberta" data-toggle="collapse" data-parent="#vagas-relacionadas" href="#vaga2">
                    <i class="ico-trabalho"></i> Assistente de Arte I <span class="badge vaga">1 vaga</span>
                  </a>
                </div>
                <hr class="vaga"/>
                <div id="vaga2" class="accordion-body collapse vagas-exi">
                  <div class="accordion-inner">
                    <!--descriçao vaga-->
                    teste
                    <!--/descriçao vaga-->
                    <hr class="vaga desc"/>  
                  </div>
                </div>
              </div>
              <!--/emprego aberto-->
            </div>
          </div>
          <!--vagas relacionadas-->
        </div>
        <!--tipo da vaga-->
        <!--tipo da vaga-->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#emprego2">
              PROgrama aprendiz
            </a>
            <hr class="tipo"/>
          </div>
          <!--vagas relacionadas-->
          <div id="emprego2" class="accordion-body collapse on">
            teste
          </div>
          <!--/vagas relacionadas-->  
       </div>
       <!--/tipo da vaga-->
       <!--tipo da vaga-->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#emprego3">
              Programa de estágio
            </a>
            <hr class="tipo"/>
          </div>
          <!--vagas relacionadas-->
          <div id="emprego3" class="accordion-body collapse on">
            teste
          </div>
          <!--/vagas relacionadas-->  
       </div>
       <!--/tipo da vaga-->
       <!--tipo da vaga-->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#emprego4">
              Vagas para deficientes
            </a>
            <hr class="tipo"/>
          </div>
          <!--vagas relacionadas-->
          <div id="emprego4" class="accordion-body collapse on">
            teste
          </div>
          <!--/vagas relacionadas-->  
       </div>
       <!--/tipo da vaga-->
      </div>
      <!--/descricao vagas-->
    -->
      * 
      */
      ?>
    </div>
    <!-- /ESQUERDA-->
    <!--DIREITA-->
    <div class="col-direita span5">
      <!--CONFIRA-->  
      <a href="/fpa/resultados" class="trabalhe btn btn-primary" title="Confira aqui nossas vagas e prazos.">
        <p>Processos seletivos anteriores</p>
        <p>Confira os Resultados</p>
      </a>
      <!--/CONFIRA-->
      <!--CONFIRA-->  
      <a href="http://www2.tvcultura.com.br/selecao/vagas/FPAREPRSE001.pdf" class="trabalhe btn btn-primary" target="_blank" title="Confira aqui nossas vagas e prazos.">
        <p>Regulamento Interno de Processo Seletivo</p>
        <p>Leia antes da Inscrição</p>
      </a>
      <!--/CONFIRA-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->
