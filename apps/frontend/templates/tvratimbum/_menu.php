        <?php
          $programs = Doctrine_Query::create()
            ->select('p.*')
            ->from('Program p, ChannelProgram cp')
            ->where('p.id = cp.program_id')
            ->andWhere('cp.channel_id = ?', 2)
            ->orderBy('p.title')
            ->execute();
        ?>
        <script type="text/javascript">
        $(document).ready(function(){
  
          $('.carrossel img, .carrossel span').hide().delay(1000).fadeIn();
          
          
          
          /*
          var date = new Date(),
          hour = date.getHours(),
          background,
          background2,
          cor
          switch(true){
            case (hour > 0 && hour <= 6): //madrugada
              background = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/topo_madrugada.jpg';
              background2 = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/rodape_madrugada.jpg';
              cor = '#91daea';
              break;
            case (hour > 6 && hour <= 12): //manh�
              background = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/topo_manha.jpg';
              background2 = 'http://172.20.1.79/testes/TVratimbum/image/rodape_manha.jpg';
              cor = '#c6ecf4';
              break;
            case (hour > 12 && hour <= 18): //tarde
              background = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/topo_tarde.jpg';
              background2 = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/rodape_tarde.jpg';
              cor = '#86d7e8';
              break;
            case (hour > 18 || hour == 0): //noite
              background = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/topo_noite.jpg';
              background2 = 'http://tvratimbum.cmais.com.br/portal/tvratimbum/image/rodape_noite.jpg';
              cor = '#4d47b4';
              break;
            default:
              break;
          }
          $('#bodyWrapper').css({
            'background': 'url('+ background +') center top no-repeat'
          });
          $('.rodape').css({
            'background': 'url('+ background2 +') center bottom no-repeat'
          });
          $('#bodyWrapper').css({
            'background-color': cor
          });
          */
         
          
          
        });
        </script>
        <div id="menu-topo">
          <div class="menu-programas">
            <div class="carrossel">
              <ul>
              <?php foreach($programs as $p): ?>
                <li>
                  <div class="boxPersonagens-tip">
                    <a href="<?php echo $p->retriveUrl()?>">
                      <img style="display:none"src="http://midia.cmais.com.br/programs/<?php echo $p->getImageThumb() ?>" alt="<?php echo $p->getTitle() ?>" title="<?php echo $p->getTitle() ?>" />
                      <span style="display:none"><?php echo $p->getTitle()?></span>
                    </a>
                  </div>
                </li>
              <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <span class="alcaA"></span>
          <span class="alcaB"></span>
          <div class="menu-secoes">
            <ul>
              <li><a class="mt-programas <?php if($site->getType() == 'Programa TVRTB' || $section->getSlug() == 'programas'): ?>sel-programas<?php endif; ?>" href="/programas" title="Programas">Programas</a></li>
              <li><a class="mt-jogos <?php if($section->getSlug() == 'jogos'): ?>sel-jogos<?php endif; ?>" href="/jogos" title="Jogos">Jogos</a></li>
              <li><a class="mt-videos <?php if($section->getSlug() == 'videos'): ?>sel-videos<?php endif; ?>" href="/videos" title="Vídeos">V&iacute;deos</a></li>
              <li><a class="mt-imagens <?php if($section->getSlug() == 'imagens'): ?>sel-imagens<?php endif; ?>" href="/imagens" title="Imagens">Imagens</a></li>
              <li><a class="mt-atividades <?php if($section->getSlug() == 'atividades'): ?>sel-atividades<?php endif; ?>" href="/atividades" title="Atividades">Atividades</a></li>
              <li><a class="mt-baixar <?php if($section->getSlug() == 'baixar'): ?>sel-baixar<?php endif; ?>" href="/baixar" title="Baixar">Baixar</a></li>
              <li><a class="mt-radio <?php if($section->getSlug() == 'radio'): ?>sel-radio<?php endif; ?>" href="/radio" title="Radio">R&aacute;dio</a></li>
              <li><a class="mt-agenda <?php if($section->getSlug() == 'voce-sabia'): ?>sel-agenda<?php endif; ?>" href="/voce-sabia" title="Você sabia?">Você Sabia</a></li>
              <li><a class="mt-especial <?php if($section->getSlug() == 'especial'): ?>sel-especial<?php endif; ?>" href="/especial" title="Especial">Especial</a></li>
            </ul>
          </div>
        </div>
        <!--img class="destaqueTopo" src="/portal/tvratimbum/image/banner-novidade.png" alt="Em Março tem novidade!" /-->
