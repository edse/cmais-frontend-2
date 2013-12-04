<!-- <?php
$assetQuemSomos = html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent());
?>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container quem-somos">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span7">
      <!--texto quemsomos-->
      <h1><?php echo $section->getTitle(); ?></h1>
      <?php echo $assetQuemSomos;?>
      
      <a href="http://www2.tvcultura.com.br/fpa/institucional/estatuto-fpa.pdf" class="btn btn-primary" title="Conheça o Estatuto da FPA" target="_blank">
        <i class="icon-align-left icon-white"></i>
        CONHEÇA O ESTATUTO DA FPA
      </a> 
      <div class="help-block"><span>Para fazer a leitura do material anexado é necessário possuir o programa Acrobat Reader.</span></div>
      <a href="http://get.adobe.com/br/reader/" class="acrobat" target="_blank" title="Faça download e Instale o Adobe Acrobat Reader">Faça download e Instale o Adobe Acrobat Reader</a>
      <!--/texto quemsomos-->
      
    </div>
    <!-- /ESQUERDA-->
    
    <!--DIREITA-->
    <div class="col-direita span4">
      
      <!--CENTRAL DE RELACIONAMENTO-->  
      <a href="/fpa/trabalhe-conosco" class="inscricao btn btn-primary" title="Confira aqui nossas vagas e prazos.">
        <p>FALE CONOSCO</p>
        <hr>
        <p>Central de Relacionamento</p>
        <p>Entre em contato conosco.</p>
      </a>
      <!--/CENTRAL DE RELACIONAMENTO-->
      
      <!--CONFIRA VAGAS-->  
      <a href="/fpa/trabalhe-conosco" class="inscricao btn btn-primary" title="Confira aqui nossas vagas e prazos.">
        <p>INSCREVA-SE</p>
        <hr>
        <p>Participe do Processo Seletivo</p>
        <p>Confira aqui nossas vagas e prazos.</p>
      </a>
      <!--/CONFIRA VAGAS-->
      
      <!--CONHEÇA O SIC-->  
      <a href="http://fpa.com.br/sic/" class="conheca btn btn-sic" title="Conheça o SiC">
        
        <p>Conheça o SiC</p>
        <p>O Serviço de Informações ao Cidadão da Fundação Padre Anchieta</p>
        <i class="icone-sic"></i>
        <!--div class="row"></div-->
      </a>
      <!--/CONHEÇA O SIC-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->