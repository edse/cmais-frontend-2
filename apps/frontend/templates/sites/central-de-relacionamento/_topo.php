      <div id="topo-central">
        <div class="row-fluid" style="position: relative;">
          <a href="http://fpa.com.br/central-de-relacionamento" class="pull-left logo-central" title="Fundação Padre Anchieta - Central de Relacionamento">
            <img src="/portal/images/capaPrograma/central-de-relacionamento/logo-centralderelacionamento.png" border="0" />
          </a>
          <!--DESCRIÇÃO-->
          <div class="desc-site">
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>
          </div>
          <!--/DESCRIÇÃO-->
        </div>
        <?php
          if(isset($asset))
            include_partial_from_folder('sites/central-de-relacionamento','global/sections-menu', array('siteSections' => $siteSections, 'section' => $section, 'asset' => $asset));
          else
            include_partial_from_folder('sites/central-de-relacionamento','global/sections-menu', array('siteSections' => $siteSections, 'section' => $section));
        ?>  
      </div>  
      <!-- /TOPO CENTRAL RELACIONAMENTO--> 
