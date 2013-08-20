<?php
  if (!isset($site)) {
    $site = Doctrine::getTable('Site')->findOneById(1149);
  }
  $siteUrl = $site->retriveUrl();
?>
<div class="row-fluid rodape" >
    <h3>2013 &copy; tv cultura - fundação padre anchieta</h3>
    <div class="span2"> <a href="<?php echo $siteUrl ?>" class="bold" title="Cocoricó">Cocoricó</a>
      <ul>
        <li><a href="<?php echo $siteUrl ?>/personagens" title="Personagens">Personagens</a></li>
        <li><a href="<?php echo $siteUrl ?>/personagens" title="Autógrafos">Autógrafos</a></li>
        <li><a href="<?php echo $siteUrl ?>/clipes-musicais" title="Receitinhas">Clipes</a></li>
        <li><a href="<?php echo $siteUrl ?>/series" title="Receitinhas">Séries Especiais</a></li>
        <li><a href="<?php echo $siteUrl ?>/radio" title="Rádio Cocoricó">Rádio Cocoricó</a></li>
      </ul>
    </div>
    <div class="span2 tvcoco"> <a href="<?php echo $siteUrl ?>/tvcocorico" class="bold" title="TV Cocoricó">tv cocoricó</a>
      <ul>
        <li><a href="<?php echo $siteUrl ?>/tvcocorico/episodios" title="Episódios">Episódios</a></li>
        <li><a href="<?php echo $siteUrl ?>/tvcocorico/convidados" title="Convidado do dia">Convidado do dia</a></li>
        <li><a href="<?php echo $siteUrl ?>/paiol/receitinhas" title="Cozinha da Amiga da Zazá">Cozinha da Amiga da Zazá</a></li>
        <li><a href="<?php echo $siteUrl ?>/tour-virtual" title="Tour Virtual">Tour Virtual</a></li>
        <li><a href="<?php echo $siteUrl ?>/erros-de-gravacao" title="Erros de gravação">Erros de gravação</a></li>
        <li><a href="<?php echo $siteUrl ?>/instagram" title="Instagram">Instagram @TVCocoricó</a></li>
      </ul>
    </div>
    <div class="span2">
      <a href="#myModal" onclick="javascript:changeUrl('<?php echo $siteUrl ?>/emfamilia', '#myModal a.adulto');" class="bold" data-toggle="modal" title="Em família">em família</a>
      <ul>
        <li><a href="#myModal" onclick="javascript:changeUrl('<?php echo $siteUrl ?>/natv', '#myModal a.adulto');" data-toggle="modal"  title="Na TV">Na TV</a></li>
        <li><a href="#myModal" onclick="javascript:changeUrl('<?php echo $siteUrl ?>/naslojas', '#myModal a.adulto');" data-toggle="modal" title="Nas lojas">Nas lojas</a></li>
        <!--li><a href="#myModal" onclick="javascript:changeUrl('http://cocoricoshow.com.br/', '#myModal a.adulto');" data-toggle="modal" title="No Teatro" target="_blank">No Teatro</a></li-->
        <li><a href="#myModal" onclick="javascript:changeUrl('<?php echo $siteUrl ?>/nocinema', '#myModal a.adulto');" data-toggle="modal" title="Nos Cinemas">No Cinema</a></li>
        <li><a href="#myModal" onclick="javascript:changeUrl('<?php echo $siteUrl ?>/naweb', '#myModal a.adulto');" data-toggle="modal" title="Na Web">Na Web</a></li>
        <li><a href="#myModal" onclick="javascript:changeUrl('<?php echo $siteUrl ?>/agenda', '#myModal a.adulto');" data-toggle="modal" title="Agenda">Agenda</a></li>
        <!--li><a href="#myModal" onclick="javascript:changeUrl('http://www2.tvcultura.com.br/faleconosco/', '#myModal a.adulto');" data-toggle="modal" title="Fale Conosco">Fale Conosco</a></li-->
      </ul>
    </div>
    
    <div class="span2 joguinhos"> <a href="<?php echo $siteUrl ?>/paiol" class="bold" title="Jogos e Brincadeiras">Jogos e Atividades</a>
      <ul>
        <li><a href="<?php echo $siteUrl ?>/joguinhos" title="Joguinhos">Joguinhos</a></li>
        <li><a href="<?php echo $siteUrl ?>/paiol" title="Atividades">Atividades</a></li>
        <li><a href="<?php echo $siteUrl ?>/receitinhas" title="Receitinhas">Receitinhas</a></li>
        <li><a href="<?php echo $siteUrl ?>/imprima-e-brinque" title="Receitinhas">Imprima e Brinque</a></li>
        <li><a href="<?php echo $siteUrl ?>/para-colorir" title="Receitinhas">Para Colorir</a></li>
        <li><a href="<?php echo $siteUrl ?>/papel-de-parede" title="Receitinhas">Papel de Parede</a></li>
        </ul></div>
    <div class="span3 sites"> <p class="bold">Sites Relacionados</p>
      <ul>
        <li><a href="http://cmais.com.br/quintaldacultura" class="quintal" title="Quintal da Cultura">Quintal da Cultura</a></li>
        <li><a href="http://tvratimbum.cmais.com.br/" class="tvrtb" title="TV Rá Tim Bum!">TV Rá Tim Bum!</a></li>
        <li class="last"><a href="http://tvcultura.cmais.com.br/" class="cultura" title="TV Cultura">TV Cultura</a></li>
        <li><a href="http://tvcultura.cmais.com.br/castelo" class="castelo" title="Castelo Rá Tim Bum">Castelo Rá Tim Bum</a></li>
        <li><a href="http://tvratimbum.cmais.com.br/vilasesamo/" class="vila" title="Vila Sésamo">Vila Sésamo</a></li>
      </ul></div>
  </div>
  
