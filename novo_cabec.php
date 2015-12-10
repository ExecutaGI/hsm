<script>
	function enviarLigamos(){
		if(document.formul.nome_ligamos.value=="" || document.formul.nome_ligamos.value.length == null){
			alert("Você precisa informar seu Nome");
			document.formul.nome_ligamos.focus();
			return false;
		}

		if(document.formul.checa_ligamos.value!="Não escreva nada neste campo"){
			alert("Ops! Alguma coisa deu errado. Por favor atualize a página e tente novamente. Se o erro persistir, fale conosco através dos telefones (11) 4668-7455 e (11) 99667-7454, ou aguarde alguns minutos para tentar novamente. Desculpe-nos o transtorno!");
			return false;
		}

		if(document.formul.ddd1_ligamos.value=="" || document.formul.ddd1_ligamos.value.length == null){
			alert("Você esqueceu de informar seu DDD para que possamos lhe ligar.");
			document.formul.ddd1_ligamos.focus();
			return false;
		}

		if(document.formul.tel1_ligamos.value=="" || document.formul.tel1_ligamos.value.length == null){
			alert("Você esqueceu de informar seu telefone para que possamos lhe ligar.");
			document.formul.tel1_ligamos.focus();
			return false;
		}

		if(document.formul.horario_ligamos.value=="" || document.formul.horario_ligamos.value.length == null){
			alert("Você esqueceu de dizer qual é o melhor horário para ligarmos.");
			document.formul.horario_ligamos.focus();
			return false;
		}

		document.formul.submit();
	}
</script>
<div class="cabecalho">
	<div class="cab_container">
		<h1><a href="./">Hospital Santa Mônica</a></h1>
			<div id="nav-trigger">
			    <span>Menu</span>
			</div>
			<nav id="nav-mobile">
				<ul>
			        <li><a href="quem-somos">Quem Somos</a></li>
					<li><a href="equipe">Equipe</a></li>
					<li><a href="estrutura-hospitalar">Estrutura</a></li>
					<li><a href="projeto-terapeutico">Projeto Terapêutico</a></li>
					<li><a href="psiquiatria">Psiquiatria</a></li>
					<li><a href="geriatria-retaguarda-clinica">Retaguarda Clínica</a></li>
					<li><a href="dependencia-quimica">Dependência Química</a></li>
					<li><a href="convenios">CONVÊNIOS</a></li>
					<li><a href="mensagem-ao-paciente">MENSAGEM AO PACIENTE</a></li>
					<li><a href="duvidas">DÚVIDAS</a></li>
					<li><a href="agendar-consulta">AGENDAMENTOS</a></li>
					<li><a href="contato" style="margin-right:0;">CONTATO</a></li>
			    </ul>
			</nav>
		<p>
			<span>Atendimento<br><b>24hrs</b></span>
			<span>|11| 4668.7455<br>|11| 9 9667.7454</span>
		</p>
		<a href="contato" class="bttop"><img src="img/novo_mail.png"><span>Atendimento<br>por e-mail</span></a>
		<a href="javascript:void(0);" onclick="showDiv('ligamos');" class="bttop"><img src="img/novo_tel.png"><span>Ligamos<br>para você</span></a>
		<a href="como-chegar" style="position:relative;" class="bttop xp"><img src="img/maps_icon.png"><span>São Paulo<br>Itapecerica</span>
			<span style="position:absolute; bottom:6px; left:33px; width:100px; font-size:10px;" >[+]Como Chegar</span></a>
		<div class="clear"></div>
	</div>
	<!--div class="menu_shadow_overlay"></div-->


	<div class="menu">
		<ul id="navbar">
			<li><a href="javascript:void(0);" style="cursor:default;">INSTITUCIONAL</a>
				<ul>
					<li><a href="quem-somos">Quem Somos</a></li>
					<li><a href="equipe">Equipe</a></li>
					<li><a href="estrutura-hospitalar">Estrutura</a></li>
					<li><a href="projeto-terapeutico">Projeto Terapêutico</a></li>
				</ul>
			</li>
		</ul>
		<ul id="navbar">
			<li><a href="javascript:void(0);" style="cursor:default;">ESPECIALIDADES</a>
				<ul>
					<li><a href="psiquiatria">Psiquiatria</a></li>
					<li><a href="geriatria-retaguarda-clinica">Retaguarda Clínica</a></li>
					<li><a href="dependencia-quimica">Dependência Química</a></li>
				</ul>
			</li>
		</ul>
		<!--<a href="institucional" style="margin-left:0;">INSTITUCIONAL</a>-->
		<a href="convenios">CONVÊNIOS</a>
		<a href="mensagem-ao-paciente">MENSAGEM AO PACIENTE</a>
		<a href="duvidas">DÚVIDAS</a>
		<!--<a href="noticias_todas2">NOTÍCIAS</a>-->
		<a href="agendar-consulta">AGENDAMENTOS</a>
		<a href="contato" style="margin-right:0;">CONTATO</a>
		<div class="clear"></div>
	</div>
	<div class="banner" id="slideshow">
		<div>
			<a>
            	<img src="banners/banner_novo3.jpg" style="width: 97% !important;" alt="">
				<!--<img src="banners/banner_novo3.jpg" width="1006" height="334" alt="">
				<!--<span>Tratamento <b>Completo</b><br />para uma <b>vida</b> completa</span>-->
			</a>
		</div>
		<div>
			<a href="http://www.hospitalsantamonica.com.br/viaje-tranquilo">
				<img src="banners/banner_novo1.jpg"  style="width: 97% !important;" alt="">
                <!--<img src="banners/banner_novo1.jpg" width="1006" height="334" alt="">
				<span>Tratamento <b>Completo</b><br />para uma <b>vida</b> completa</span>-->
			</a>
		</div>
		<div>
			<a href="http://www.hospitalsantamonica.com.br/convenios">
				<img src="banners/banner_novo2.jpg"  style="width: 97% !important;" alt="">
                <!--<img src="banners/banner_novo2.jpg" width="1006" height="334" alt="">
				<span>Tratamento <b>Completo</b><br />para uma <b>vida</b> completa</span>-->
			</a>
		</div>
	</div>
	<div class="menu2" style="margin: -3% auto 0 auto;">
		<a href="especialidades" style="background-color:rgba(0, 102, 0, 0.8);">ESPECIALIDADES</a>
		<a href="psiquiatria" style="background-color:rgba(103, 192, 44, 0.8);">PSIQUIATRIA</a>
		<a href="geriatria-retaguarda-clinica" style="background-color:rgba(0, 153, 255, 0.8);line-height:20px;padding:4px 0 6px 0;height:40px;">GERIATRIA<br>RETAGUARDA CLÍNICA</a>
		<a href="dependencia-quimica" style="background-color:rgba(255, 153, 0, 0.8);margin-right:0;">DEPENDÊNCIA QUÍMICA</a>
	</div>
</div>

<script>
	function direciona(x){
		setTimeout("parent.location.href = 'http://www.hospitalsantamonica.com.br/"+x+"';", 0);
	}
</script>
<div class="div_oculta" id="ligamos" style="display:none;z-index:10000;" onkeydown="if(event.keyCode==27){$('.div_oculta').style.display='none';};">
	<div class="div_oculta_interna" id="ligamos_div" style="overflow-y:hidden;overflow-x:hidden;width: 628px;padding:0;">
		<i class="icon-cancel close close_alt" style=""></i>
    	<form name="formul" id="formul" method="post" action="Home" enctype="multipart/form-data" >
        	<input name="ligamos_envia" type="hidden" value="envia" />
			<table style="font-size:13px;" border="0" cellspacing="1" cellpadding="5" id="lig_site_fecha">
				<tr>
					<td colspan="4" align="center" style="padding-top:8px;background-color:#7abc41;color:#ffffff;text-shadow:1px 1px 2px #5b932a;font-size:1.3rem;">Nós ligamos para Você!</td>
				</tr>
				<tr>
					<td align="right" style="padding-top:15px;">Nome Completo</td>
					<td colspan="3" align="left" style="padding-top:15px;"><input onfocus="this.select();" type="text" tabindex="1" autocomplete="off" name="nome_ligamos" id="nome_ligamos" style="height:32px;width:306px;margin:0 5px;" /></td>
				</tr>
				<tr>
					<td width="191" align="right">DDD</td>
					<td width="96"><input onfocus="this.select();" name="ddd1_ligamos" type="text" id="ddd1_ligamos" tabindex="1" autocomplete="off" size="10" style="height:32px;margin:0 0 0 5px;" /></td>
				  	<td width="79" align="right">Telefone 1</td>
					<td width="217"><input onfocus="this.select();" type="text" tabindex="1" autocomplete="off" name="tel1_ligamos" id="tel1_ligamos" style="height:32px;margin:0 5px 0 0;" /></td>
				</tr>
				<tr>
					<td width="191" align="right">DDD</td>
					<td><input onfocus="this.select();" name="ddd2_ligamos" type="text" id="ddd2_ligamos" tabindex="1" autocomplete="off" size="10" style="height:32px;margin:0 0 0 5px;" /></td>
					<td align="right">Telefone 2</td>
					<td><input onfocus="this.select();" type="text" tabindex="1" autocomplete="off" name="tel2_ligamos" id="tel2_ligamos" style="height:32px;margin:0 5px 0 0;" /></td>
				</tr>
                
				<tr>
				  <td align="right">Informe seu convênio</td>
				  <td colspan="3" align="left">
				  <?php 
						$opt_conv = '<option value="">Escolha...</option><option value="">Nenhum</option>';	
						$forn = mysql_query("SELECT * FROM clientes order by nome asc ") or print(mysql_error());
						while($fornB=mysql_fetch_array($forn)){ 
						$id_forn	= $fornB["id"];
						$nome_forn	= $fornB["nome"];
						$opt_conv .= '<option id="a'.$id_forn.'" value="'.$nome_forn.'">'.$nome_forn.'</option>';
						}
                   ?>
                   <select class="entra" name="convenio" id="convenio" style="height:40px;line-height:40px;margin:0 0 0 5px;"><?php echo $opt_conv ?></select></td>
				</tr>
                
				<tr>
					<td align="right">Melhor horário para ligar</td>
					<td colspan="3" align="left"><input onfocus="this.select();" type="text" tabindex="1" autocomplete="off" name="horario_ligamos" id="horario_ligamos" style="height:32px;width:306px;margin:0 5px;" /></td>
				</tr>
				<tr>
					<td height="53" align="center">
						<input type="text" name="checa_ligamos" id="checa_ligamos" class="campos_contato" value="Não escreva nada neste campo" style="width:0;height:0;padding:0;display:none;opacity:0;margin-left:-99999px;" />
					</td>
					<td colspan="3" align="left">
						<a onclick="return enviarLigamos();" style="display:block;margin-bottom:6px;width:115px;">
							<div class="submit_bt busca_bt bt_alt" style="margin:10px 0 0 6px;float:none;font-size:18px;line-height:36px;height:40px;width:120px;">
								<i class="icon-checkmark right" style="margin-left:0;margin-right:0;"></i> Enviar
							</div>
						</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
