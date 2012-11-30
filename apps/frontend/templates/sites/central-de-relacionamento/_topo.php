      <div id="topo-central">
        <div class="row-fluid">
          <a href="http://fpa.com.br/central-de-relacionamento" class="pull-left logo-central" title="Fundação Padre Anchieta - Central de Relacionamento">
            <img src="/portal/images/capaPrograma/central-de-relacionamento/logo-centralderelacionamento.png" border="0" />
          </a>
        </div>
        <?php
          if(isset($asset))
            include_partial_from_folder('sites/central-de-relacionamento','global/sections-menu', array('siteSections' => $siteSections, 'section' => $section, 'asset' => $asset));
          else
            include_partial_from_folder('sites/central-de-relacionamento','global/sections-menu', array('siteSections' => $siteSections, 'section' => $section));
        ?>  
       </div>  
      <!-- /TOPO CENTRAL RELACIONAMENTO--> 