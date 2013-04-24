  <!-- menu em familia -->
  <div class="row-fluid menu topo-familia">
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav span12">
          <li class="familia"><a  href="<?php echo $site->retriveUrl() ?>/emfamilia" title="Em família">Em família</a>
            <ul class="nav" id="menu-familia">
              <li><a<?php if($s == 'natv') echo ' class="active"'?> href="<?php echo $site->retriveUrl() ?>/emfamilia/natv" title="Na Tv">na tv</a><span class="divider">|</span></li>
              <li><a<?php if($s == 'naslojas') echo ' class="active"'?> href="<?php echo $site->retriveUrl() ?>/emfamilia/naslojas" title="Nas Lojas">nas lojas</a><span class="divider">|</span></li>
              <!--<li><a<?php if($s == 'noteatro') echo ' class="active"'?> href="http://cocoricoshow.com.br/" target="_blank" title="No Teatro">no teatro</a><span class="divider">|</span></li>-->
              <li><a<?php if($s == 'nocinema') echo ' class="active"'?> href="<?php echo $site->retriveUrl() ?>/emfamilia/nocinema" title="No Cinema">no cinema</a><span class="divider">|</span></li>
              <li><a<?php if($s == 'naweb') echo ' class="active"'?> href="<?php echo $site->retriveUrl() ?>/emfamilia/naweb" title="Na Web">na web</a><span class="divider">|</span></li>
              <li><a<?php if($s == 'agenda') echo ' class="active"'?> href="<?php echo $site->retriveUrl() ?>/emfamilia/agenda" title="Agenda">agenda</a></li>
            </ul>
          </li>
          <li class="joguinhos"><a class="icon btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="Joguinhos" href="<?php echo $site->retriveUrl() ?>/joguinhos" title="Joguinhos"></a></li>
          <li class="brincadeiras"><a class="icon btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="Atividades"  href="<?php echo $site->retriveUrl() ?>/paiol" title="Paiol"></a></li>
          <li class="tvcoco"><a class="icon btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="TV Cocoricó"  href="<?php echo $site->retriveUrl() ?>/tvcocorico" title="TV Cocoricó"></a></li>
          <!--li class="diario"><a class="icon btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="Diário do Júlio"  href="<?php echo $site->retriveUrl() ?>/diario-do-julio" title="Diário do Júlio"></a></li-->
          <li class="personagens"><a href="<?php echo $site->retriveUrl() ?>/personagens" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="ver todos"></a></li>
        </ul>
      </div>
      
    </div>
  </div>
  <!-- /menu em familia -->
  <script>
  $('.btn-tooltip').tooltip({ 
    pacement: 'bottom'
  });
  </script>