<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todosSites.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" /> 

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>


      <!-- BARRA SITE -->
      <div id="barra-site">
        
        <div class="topo-programa">
          
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="/portal/univesptv/images/logo-univesptv.png" /></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
          </div>
          <!-- /horario -->
          <?php endif; ?>

        </div>
        
        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../<?php echo $section->Site->getSlug() ?>" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>

          <h3 class="tit-pagina"><a href="#" class="<?php echo $section->getSlug() ?>"><?php echo $section->getTitle() ?></a></h3>
          
          <?php if($section->getDescription() != ""): ?>
          <h2 style="text-align: left; margin-bottom:15px;clear: both;"><?php echo $section->getDescription() ?></h2>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>
        
      </div>
      <!-- /BARRA SITE -->
      
      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- busca site
            <div class="busca-sites grid3">
                <p>Destacar apenas:</p>
                <form id="destacar-site">
                    <input type="checkbox" id="sites" name="destacar" /><label for="sites">sites de programas</label>
                    <input type="checkbox" id="blogs" name="destacar" /><label for="blogs">blogs</label>
                    <input type="checkbox" id="especiais" name="destacar" /><label for="especiais">especiais</label>
                </form>
            </div> -->
            <!-- /busca site -->

            <!-- todos sites -->
            <div class="todos-sites grid3">
              
              <!-- C1 -->
              <div class="grid1">
                <div class="box-letra grid1">
                  <p class="letra">A</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\a%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">D</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\d%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">G</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\g%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">J</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\j%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">L</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\l%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">O</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\o%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">R</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\r%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">U</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\u%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">X</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\x%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>

              </div>
              
              <!-- C2 -->
              <div class="grid1 central">
                <div class="box-letra grid1">
                  <p class="letra">B</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\b%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">E</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\e%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">H</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\h%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">K</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\k%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">M</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\k%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">P</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\p%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">S</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\s%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">V</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\v%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">Y</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\y%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>

              </div>

              <!-- C3 -->
              <div class="grid1">
                <div class="box-letra grid1">
                  <p class="letra">C</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\c%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">F</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\f%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">I</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\i%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <!--div class="box-letra grid1">
                  <p class="letra">K</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p')
                      ->where('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\k%')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div-->
                <div class="box-letra grid1">
                  <p class="letra">N</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\n%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">Q</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\q%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">T</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\t%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">W</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\w%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>
                <div class="box-letra grid1">
                  <p class="letra">Z</p>
                  <?php
                    $programs = Doctrine_Query::create()
                      ->select('p.*')
                      ->from('Program p, ChannelProgram cp')
                      ->where('p.id = cp.program_id')
                      ->andWhere('cp.channel_id = ?', 3)
                      ->andWhere('p.is_active = ?', 1)
                      ->andWhere('p.title like ?', '\z%')
                      ->orderBy('p.title')
                      ->execute();
                  ?>
                  <?php if(count($programs)>0): ?>
                  <ul>
                    <?php foreach($programs as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <ul><li>Nenhum programa</li></ul>
                  <?php endif; ?>
                </div>

              </div>

            </div>
            <!-- /todos sites --> 

          </div>
          <!-- /CAPA -->
          
          <!-- publicidade -->
          <div class="box-publicidade pub-grd grid3">
            <!-- univesptv-728x90 -->
			<script type='text/javascript'>
			GA_googleFillSlot("univesptv-728x90");
			</script>
          </div>
          <!-- /publicidade -->
          
          <!-- APOIO -->
          <ul id="apoio" class="grid3">
              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
              <li><a href="http://www.fapesp.br" class="fapesp"><img src="/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
              <li><a href="http://www.unicamp.br" class="unicamp"><img src="/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
              <li><a href="http://www.unesp.br" class="unesp"><img src="/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
              <li><a href="http://www.usp.br" class="usp"><img src="/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
          </ul>
          <!-- APOIO -->
        
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
