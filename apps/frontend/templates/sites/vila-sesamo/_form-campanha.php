  <?php if($campaign): ?>
  <section class="form row-fluid">
    <div class="span8">
    <h2><?php echo $campaign->getTitle(); ?></h2>
    <p><?php echo $campaign->getDescription(); ?></p>
    <form class="form-horizontal" action="/actions/vilasesamo/campanhas/brincar-e-um-direito-da-crianca.php" method="post">
      <div class="control-group span8">
        <label class="control-label sprite-ico-nome" for="nome"></label>
        <div class="controls">
          <input type="text" id="nome" placeholder="Nome" value="Nome">
        </div>
      </div>
      
      <div class="control-group idade span2">
        <label class="control-label sprite-ico-idade" for="idade"></label>
        <div class="controls">
          <input type="text" id="idade" placeholder="Idade" value="Idade">
        </div>
      </div>
      
      <div class="control-group span8">
        <label class="control-label sprite-ico-cidade" for="cidade"></label>
        <div class="controls">
          <input type="text" id="cidade" placeholder="Cidade" value="Cidade">
        </div>
      </div>
      <div class="control-group estado span2">
        <div class="controls">
          <select id="estado">
            <option selected="selected" value="">UF</option>
            <option value="Acre">AC</option>
            <option value="Alagoas">AL</option>
            <option value="Amazonas">AM</option>
            <option value="Amapá">AP</option>
            <option value="Bahia">BA</option>
            <option value="Ceará">CE</option>
            <option value="Distrito Federal">DF</option>
            <option value="Espirito Santo">ES</option>
            <option value="Goiás">GO</option>
            <option value="Maranhão">MA</option>
            <option value="Minas Gerais">MG</option>
            <option value="Mato Grosso do Sul">MS</option>
            <option value="Mato Grosso">MT</option>
            <option value="Pará">PA</option>
            <option value="Paraíba">PB</option>
            <option value="Pernambuco">PE</option>
            <option value="Piauí">PI</option>
            <option value="Paraná">PR</option>
            <option value="Rio de Janeiro">RJ</option>
            <option value="Rio Grande do Norte">RN</option>
            <option value="Rondônia">RO</option>
            <option value="Roraima">RR</option>
            <option value="Rio Grande do Sul">RS</option>
            <option value="Santa Catarina">SC</option>
            <option value="Sergipe">SE</option>
            <option value="São Paulo">SP</option>
            <option value="Tocantins">TO</option>
          </select>
        </div>
      </div>
      <div class="control-group span8">
        <label class="control-label sprite-ico-email" for="email"></label>
        <div class="controls">
          <input type="text" id="email" placeholder="Email" value="Email">
        </div>
      </div>
       <div class="control-group span2 idade anexo">
        <label class="control-label sprite-ico-anexo" for="anexo"></label>
        <div class="controls">
          <!--input id="datafile" type="file" name="datafile" size="1"-->
          <a href="#" title="Anexar">Anexar</a>
        </div>
      </div>
      <div class="control-group span12 msg">
        <label class="control-label sprite-ico-mensagem" for="mensagem"></label>
        <div class="controls">
          <textarea id="mensagem" placeholder="Mensagem" value="Mensagem"></textarea>
        </div>
      </div>
      <div class="control-group span11">
        <label class="radio">
          <input type="radio" name="concordo" id="concordo" value="concodco" checked>
          Declaro que li e estou de acordo com os <a href="#">Termos e Condições</a>.
        </label>
        <button type="submit" class="btn">enviar minha brincadeira</button>
      </div>
    </form>
    </div>
    <div class="span4">
      <?php
        $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($campaign->getId(), "destaque-principal");
        if($block) $displays["destaque-promocional"] = $block->retriveDisplays();
      ?>
      <?php if(isset($displays["destaque-promocional"])): ?>
        <?php if(count($displays["destaque-promocional"]) > 0): ?>
          <?php if($displays["destaque-promocional"][0]->Asset->AssetType->getSlug() == "video"): ?>
      <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
          <?php elseif($displays["destaque-promocional"][0]->Asset->AssetType->getSlug() == "image"): ?>
      <img src="<?php echo $displays["destaque-promocional"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-promocional"][0]->getTitle() ?>" />           
          <?php else: ?>
      <?php echo $displays["destaque-promocional"][0]->getDescription(); ?>            
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>