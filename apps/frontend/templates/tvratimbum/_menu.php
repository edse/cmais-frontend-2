        <?php
          $programs = Doctrine_Query::create()
            ->select('p.*')
            ->from('Program p, ChannelProgram cp')
            ->where('p.id = cp.program_id')
            ->andWhere('cp.channel_id = ?', 2)
            ->andWhere('p.is_active = ?', 1)
            ->orderBy('p.title')
            ->execute();
        ?>
        <script type="text/javascript">
        $(document).ready(function(){
  
          $('.carrossel img, .carrossel span').hide().delay(2000).fadeIn('fast');
        
        });
        </script>
        <div id="menu-topo">
          <div class="menu-programas">
            <div class="carrossel">
              <ul>
              <?php foreach($programs as $p): ?>
                <?php if($p->Site->id > 0): ?>
                <li>
                  <div class="boxPersonagens-tip">
                    <a href="<?php echo $p->retriveUrl()?>">
                      <img style="display:none"src="http://midia.cmais.com.br/programs/<?php echo $p->getImageThumb() ?>" alt="<?php echo $p->getTitle() ?>" title="<?php echo $p->getTitle() ?>" />
                      <span style="display:none"><?php echo $p->getTitle()?></span>
                    </a>
                  </div>
                </li>
                <?php endif; ?>
              <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <span class="alcaA"></span>
          <span class="alcaB"></span>
          <div class="menu-secoes">
            <ul>
              <li><a class="mt-programas <?php if($site->getType() == 'Programa TVRTB' || $section->getSlug() == 'programas'): ?>sel-programas<?php endif; ?>" href="/programas" title="Programa&ccedil;&atilde;o">Programa&ccedil;&atilde;o</a></li>
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
        
        <img class="destaqueTopo" src="/portal/tvratimbum/image/quarteto.png" alt="TV Rá Tim Bum! Quarteto />
        