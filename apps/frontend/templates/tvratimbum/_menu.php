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
        <!--destaque imagem -->
        <a href="http://tvratimbum.cmais.com.br/especial/mes-das-criancas-e-na-tv-ra-tim-bum-1" title="Mês das crianças e na TV Rá Tim Bum!" class="btn-destaque-topo">
          <img class="destaqueTopo" src="http://cmais.com.br/portal/tvratimbum/image/topo-9anos.png" alt="A TV que cresce com você!" />
        </a>
        <!--/destaque imagem -->
        <!-- destaque antigo ul>
        <div id="destaque-ferias">
          
          <ul>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/jogodasbolhas.png" border="0" usemap="#bolha"/>
              <map name="bolha" id="bolha">
                <area shape="circle" coords="136,136,121" href="http://tvratimbum.cmais.com.br/jogos/jogo-das-bolhas" target="_self" />
              </map>
            </li>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/estilingue_destaques-bolhas.png" border="0" usemap="#mascote"/>
              <map name="mascote" id="mascote">
                <area shape="circle" coords="136,136,121" href="http://tvratimbum.cmais.com.br/jogos/game-do-estilingue" target="_self" />
              </map>
            </li>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/realidadeaumentada.png" border="0" usemap="#realidade"/>
              <map name="realidade" id="realidade">
                <area shape="circle" coords="137,137,122" href="http://tvratimbum.cmais.com.br/portal/tvratimbum/realidadeaumentada/" target="_self" />
              </map>
            </li>
          </ul>
          
          <!-- destaque antigo ul>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/btn-missaominuto.png" usemap="#missao"/>
              <map name="missao" id="missao">
                <area title="Missão Minuto Rá Tim Bum" alt="Missão Minuto Rá Tim Bum" shape="circle" coords="109,110,99" href="/missao-minuto" />
              </map>
            </li>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/btn-seupedido.png" usemap="#speuo"/>
              <map name="speuo" id="speuo">
                <area title="Seu pedido é uma ordem" alt="Seu pedido é uma ordem" shape="circle" coords="109,110,99" href="/seu-pedido-e-uma-ordem" />
              </map>
            </li>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/btn-ideiasmirabolantes.png" usemap="#ideia"/>
              <map name="ideia" id="ideia">
                <area title="Ideias mirabolantes para melhorar o mundo" alt="Ideias mirabolantes para melhorar o mundo" shape="circle" coords="109,110,99" href="/ideias-mirabolantes" />
              </map>
            </li>
            <li>
              <img src="http://cmais.com.br/portal/tvratimbum/image/btn-sessaopiada.png" usemap="#piada"/>
              <map name="piada" id="piada">
                <area title="Sessão Piada Rá Tim Bum" alt="Sessão Piada Rá Tim Bum" shape="circle" coords="109,110,99" href="/piadas" />
              </map>
            </li>
          </ul>
        -->  
        </div>
        
