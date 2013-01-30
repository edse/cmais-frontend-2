<?php
/*
    <div class="navbar-inner">
        <ul class="nav">
          <li class="personagens"><a href="<?php echo $site->retriveUrl() ?>/personagens" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="ver todos"></a></li>
          <li class="joguinhos"><a class="icon" href="<?php echo $site->retriveUrl() ?>/joguinhos" title="Joguinhos"></a><a href="<?php echo $site->retriveUrl() ?>/joguinhos" title="Joguinhos">Joguinhos</a><span></span></li>
          <li class="brincadeiras"><a class="icon"  href="<?php echo $site->retriveUrl() ?>/brincadeiras" title="Brincadeiras"></a><a href="<?php echo $site->retriveUrl() ?>/brincadeiras" title="Brincadeiras">Brincadeiras</a><span></span></li>
          <li class="tvcoco"><a class="icon"  href="<?php echo $site->retriveUrl() ?>/tv-cocorico" title="TV Cocoricó"></a><a href="<?php echo $site->retriveUrl() ?>/tvcocorico" title="TV Cocoricó">TV Cocoricó</a><span></span></li>
          <!--li class="diario"><a class="icon"  href="<?php echo $site->retriveUrl() ?>/diario-do-julio" title="Diário do Júlio"></a><a href="<?php echo $site->retriveUrl() ?>/diario-do-julio" title="Diário do Júlio">Diário do Júlio</a><span></span></li-->
          <li class="familia"><a  href="<?php echo $site->retriveUrl() ?>/em-familia" title="Em família">Em família</a></li>
        </ul>
     </div>
 */
?> 
      <div class="navbar-inner">
        <ul class="nav">
          <?php if(isset($section)): ?>
            <?php if($section->getSlug() == 'personagens'): ?>
          <li class="personagens"><a href="javascript:history.back()" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="voltar"></a></li>
            <?php else: ?>
          <li class="personagens"><a href="<?php echo $site->retriveUrl() ?>/personagens" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="ver todos"></a></li>
            <?php endif; ?>
          <?php endif; ?>
          <li class="joguinhos"><a class="icon" href="<?php echo $site->retriveUrl() ?>/joguinhos" title="Joguinhos"></a><a href="<?php echo $site->retriveUrl() ?>/joguinhos" title="Joguinhos">Joguinhos</a><span></span></li>
          <li class="tvcoco"><a class="icon"  href="<?php echo $site->retriveUrl() ?>/tvcocorico" title="TV Cocoricó"></a><a href="<?php echo $site->retriveUrl() ?>/tvcocorico" title="TV Cocoricó">TV Cocoricó</a><span></span></li>
          <li class="brincadeiras"><a class="icon"  href="<?php echo $site->retriveUrl() ?>/paiol" title="Paiol"></a><a href="<?php echo $site->retriveUrl() ?>/paiol" title="Paio">Paiol</a><span></span></li>
          <!--li class="diario"><a class="icon"  href="<?php echo $site->retriveUrl() ?>/diario-do-julio" title="Diário do Júlio"></a><a href="<?php echo $site->retriveUrl() ?>/diario-do-julio" title="Diário do Júlio">Diário do Júlio</a><span></span></li-->
          <li class="familia"><a href="#myModal" data-toggle="modal" title="Em família">Em família</a></li>
        </ul>
      </div>
<!-- Modal -->
<div id="myModal" class="modal hide fade alerta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <h3 id="myModalLabel">Atenção!</h3>
    <p>A partir de agora, você está saindo da área exclusiva para crianças do site do Cocoricó e entrando numa parte direcionada para adultos. 
    Então, preferimos que você fique brincando por aqui ou chame o papai ou a mamãe para te acompanhar, combinado?</p>
    <a class="crianca span3" type="button" class="close" data-dismiss="modal" aria-hidden="true" ><i class="ico-familia"></i>Sou criança, <span>quero continuar brincando!</span></a>
    <a class="adulto span3" href="<?php echo $site->retriveUrl() ?>/emfamilia" title="Sou adulto, quero acessar Em Família!" ><i class="ico-familia"></i>Sou adulto, <span>quero acessar Em Família!</span></a>
  </div>
 
</div>
<!-- /Modal -->