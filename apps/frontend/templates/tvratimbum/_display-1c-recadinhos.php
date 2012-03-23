            <div id="box-recadinhos">
				<div class="topo">
					<h3>Mural de Recadinhos</h3>
				</div>
				<div class="ico-ponta"></div>
				<div class="wrapperMural" style="display: none;">
					<div class="mural">
						<a class="prev">anterior</a>
						<div class="balaoPar">
							<p class="recado">Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Donec libero felis, solli ci tudin vel mattis ut, fringilla vitae massa. Maecenas id.</p>
							<p class="autor"><span>Maria Clara Nunes</span>, 7 anos<br />Guaratingueta - SP</p>
						</div>
						<div class="balaoImpar">
							<p class="recado">Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Donec libero felis, solli ci tudin vel mattis ut, fringilla vitae massa. Maecenas id.</p>
							<p class="autor"><span>Maria Clara Nunes</span>, 7 anos<br />Guaratingueta - SP</p>
						</div>
						<a class="next">Pr&oacute;xima</a>
					</div>
					<div class="btn-barra">
						<span class="pontaBarra"></span>
						<a href="">Escrever um recadinho</a>
						<span class="caudaBarra"></span>
					</div>
				</div>
				<div class="formulario"> <!-- FORMULARIO -->
					<script type="text/javascript">
						//formulario
						$(document).ready(function(){
							var validator = $("#form-contato").validate({
								invalidHandler: function(e, validator){
									var errors = validator.numberOfInvalids();
									if(errors){
										var message = errors == 1 ? ('Você esqueceu 1 campo. Confira abaixo:') : ('<span>OPS</span> <br> Os campos em <span>vermelho</span> apresentam erro. Preencha corretamente para prosseguir.');
										$("div.error").html(message);
										$("div.error").show();
									}
									else{
										$("div.error").hide();
									}
								},
								rules: {
									nome: {
										required: true,
										minlength: 2
									},
									email:{
										required: true,
										email: true
									}, 
									idade: {
										required: true,
										minlength: 2
									},
									mensagem: {
										required: true
									}
								}
							});
						});
					</script>
					<p class="expl">Preencha os campos e clique no botao abaixo para deixar seu recadinho!</p>
					<hr />
					<div class="error erroCSS"></div>
					<form id="form-contato" class="formaFale" name="sendMail" method="post" action="#">
						<p class="nome"><label>Nome:</label><input type="text" name="nome" id="nome" /></p>
						<p class="email"><label>E-mail:</label><input type="text" name="email" id="email" /></p>
						<p class="cidade"><label>Cidade:</label><input type="text" name="cidade" id="cidade" /></p>
						<p class="estado"><label>Estado:</label><input name="email" type="text" /></p>
						<p class="idade"><label>Idade:</label><input type="text" name="idade" id="idade" /></p>
						<p class="mensagem"><label>Escreva seu recadinho:</label><textarea name="mensagem" onKeyDown="limitText(this,140,'#textCounter');"></textarea></p>
						<input type="submit" value="" id="enviar recadinho" name="enviar recadinho" class="enviarRecadinho">
					</form>
					<hr />
					<a class="cancelar" href=""><< cancelar</a>
					<p class="maxCaracteres">[<span id="textCounter">140</span> restantes]</p>
					<hr />
				</div>
				<div class="sucesso" style="display: none;">
					<div class="instrucao">
						<p class="resposta">Recadinho enviado com sucesso.</p>
						<p>Seu recadinho sera verificado e em breve aparecera aqui no site.</p>
					</div>
					<div class="btn-barra">
						<span class="pontaBarra"></span>
						<a href="">Ler mais recadinhos</a>
						<span class="caudaBarra"></span>
					</div>
				</div>
				<span class="picote"></span>
			</div>