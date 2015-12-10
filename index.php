<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="msvalidate.01" content="4DD8223611E5249742A034A7B2D7B836" />
		<?php require_once "novo_head.php"; ?>
		<title>Hospital Santa Mônica - Tratamento profissional, cuidado familiar</title>
		<meta name="title" content="Hospital Santa Mônica - Tratamento profissional, cuidado familiar" />
		<meta name="description" content="Referência em Psiquiatria Hospitalar. Internação Psiquiátrica, Ala Geriátrica, Tratamento da Dependência Química. Atendimento 24 horas." />
		<meta name="keywords" content="psiquiatria, psiquiatra, internação psiquiátrica, dependência química, transtornos mentais, Alzheimer, geriatria, clinica drogados, dependente quimico, clinica, clinicas, dependente, quimico,centro tratamento, dependencia, quimico, droga, químicos, maconha, dependencia, dependencia, cocaina, reabilitacao, drogas, alcool, alcoolismo, maconha, alcool, heroina, alcoolatras, centro, drogados, internação involuntária, crack, centro , quimico, clinia quimico, involuntário, alcool, clínica , quimico, clínicas químicos,ajuda internação alcoolismo, reabilitação, químicos, quimico, centro alcool, crack, quimico, quimicos ependentes, casa do alcool, desintoxicação, centro , itapecerica, centro, sp, recuperaçao, quimicos sao paulo, dependencia quimica" />
		<meta name="dcterms.description" content="Referência em Psiquiatria Hospitalar. Internação Psiquiátrica, Ala Geriátrica, Tratamento da Dependência Química. Atendimento 24 horas.">
		<meta property="og:title" content="Hospital Santa Mônica - Tratamento profissional, cuidado familiar">
		<meta property="og:description" content="Referência em Psiquiatria Hospitalar. Internação Psiquiátrica, Ala Geriátrica, Tratamento da Dependência Química. Atendimento 24 horas.">
		<meta property="twitter:title" content="Hospital Santa Mônica - Tratamento profissional, cuidado familiar">
		<meta property="twitter:description" content="Referência em Psiquiatria Hospitalar. Internação Psiquiátrica, Ala Geriátrica, Tratamento da Dependência Química. Atendimento 24 horas.">
		<link rel="Shortcut Icon" href="/favico.ico" />
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		
    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    
    
		<?php 
			/*	
				$rsnots = mysql_query("SELECT * FROM noticias");
				while($rrf = mysql_fetch_array($rsnots)){
					$novaAmiga = str_replace("_", "-", $rrf["url_amiga"]);
					//echo "UPDATE noticias SET url_amiga = '".$novaAmiga."' WHERE id = '".$rrf["id"]."'";
					mysql_query("UPDATE noticias SET url_amiga = '".$novaAmiga."' WHERE id = '".$rrf["id"]."'");
				}
			*/

				$container_width = 0;

				$contt = mysql_query("SELECT * FROM clientes ORDER BY nome ASC") or print(mysql_error());
				while($conttB=mysql_fetch_array($contt)){
					$img_b_cli		=$conttB["img_b"];
					$nome_cli		=$conttB["nome"];
					$img_cli		=$conttB["img"];
					$id_cli			=$conttB["id"];

					$nome_css_cli = url_amiga(strtolower($nome_cli));

// 					$convenios_css .= '#'.html_entity_decode($nome_css_cli).'{background-image:url(http://www.hospitalsantamonica.com.br/fotos/'.$img_b_cli.'.jpg);}
// #'.html_entity_decode($nome_css_cli).':hover{background-image:url(http://www.hospitalsantamonica.com.br/fotos/'.$img_cli.'.jpg);}
// ';
					$convenios_css .= '#'.html_entity_decode($nome_css_cli).'{background-image:url(http://www.hospitalsantamonica.com.br/fotos/'.$img_cli.'.jpg);}
#'.html_entity_decode($nome_css_cli).':hover{opacity:0.82;}
';

					//$convenios_img_preload .= '<img src="http://www.hospitalsantamonica.com.br/fotos/'.$img_cli.'.jpg" width="0" height="0" alt="" class="img_load" />';
					//$convenios_boxes .= '<div class="convenio" onclick="direciona(\'contato?convenio='.$nome_cli.'\');" id="'.$nome_css_cli.'"></div>';
					$convenios_boxes .= '
					<div class="item">
					<a onclick="direciona(\'contato?convenio='.$nome_cli.'\');" id="'.$nome_css_cli.'" style="cursor:pointer;">
							<img src="http://www.hospitalsantamonica.com.br/fotos/'.$img_cli.'.jpg" width="0" height="0" alt=""/>
					</a></div>';
					$container_width = $container_width+192;
				}

			?>
		<style type="text/css">
			<?php echo $convenios_css; ?>
		</style>
	</head>
	<body>
		<?php
			echo $convenios_img_preload;

			function url_amiga($str, $enc = "UTF-8"){
				$str = str_replace(" ","_", $str);
				$str = str_replace(",","", $str);
				$str = str_replace(".","", $str);
				$str = str_replace("?","", $str);
				$str = str_replace(";","", $str);
				$str = str_replace("!","", $str);
				$str = str_replace("/","", $str);
				$str = str_replace("(","_", $str);
				$str = str_replace(")","_", $str);
				$str = str_replace(":","", $str);
				$str = str_replace("=","_", $str);
				$str = str_replace("'","",$str);
				$str = str_replace('"',"",$str);
				$str = str_replace("&","_",$str);	
				$acentos = array(
					'A' => '/&Agrave;|&Aacute;|&Acirc;|&Atilde;|&Auml;|&Aring;/',
					'a' => '/&agrave;|&aacute;|&acirc;|&atilde;|&auml;|&aring;/',
					'C' => '/&Ccedil;/',
					'c' => '/&ccedil;/',
					'E' => '/&Egrave;|&Eacute;|&Ecirc;|&Euml;/',
					'e' => '/&egrave;|&eacute;|&ecirc;|&euml;/',
					'I' => '/&Igrave;|&Iacute;|&Icirc;|&Iuml;/',
					'i' => '/&igrave;|&iacute;|&icirc;|&iuml;/',
					'N' => '/&Ntilde;/',
					'n' => '/&ntilde;/',
					'O' => '/&Ograve;|&Oacute;|&Ocirc;|&Otilde;|&Ouml;/',
					'o' => '/&ograve;|&oacute;|&ocirc;|&otilde;|&ouml;/',
					'U' => '/&Ugrave;|&Uacute;|&Ucirc;|&Uuml;/',
					'u' => '/&ugrave;|&uacute;|&ucirc;|&uuml;/',
					'Y' => '/&Yacute;/',
					'y' => '/&yacute;|&yuml;/',
					'a.' => '/&ordf;/',
					'o.' => '/&ordm;/'
				);

				$str = strtolower($str);

				return preg_replace($acentos, array_keys($acentos), htmlentities($str,ENT_NOQUOTES, $enc));
			}
		?>
		<div id="all">
			<?php require_once "novo_cabec.php"; ?>
			<div class="clear"></div>
			<div>
				<div class="diferenciais">
					<div class="container">
						<h2>DIFERENCIAIS</h2>
						<div class="tracos">Ofereça o melhor para quem você ama</div>
						<div class="clear"></div>
						<a href="quem-somos">
							<img src="img/novo_img1.jpg" class="full">
							<h3>AMBIENTE</h3>
							<ul>
								<li>Extensa área verde com 80 mil m²</li>
								<li>15 minutos do Morumbi</li>
								<li>Humanização e Acolhimento</li>
							</ul>
						</a>
						<a href="equipe">
							<img src="img/novo_img2.jpg" class="full">
							<h3>MÉDICOS 24HRS</h3>
							<ul>
								<li>3 unidades de Internação</li>
								<li>170 leitos</li>
								<li>Ambulatório</li>
								<li>Farmácia Completa</li>
							</ul>
						</a>
						<a href="estrutura-hospitalar">
							<img src="img/novo_img3.jpg" class="full">
							<h3>HOSPITAL DIA</h3>
							<ul>
								<li>Médico Clínico</li>
								<li>Terapeutas em Dependência Química</li>
								<li>Enfermeiros</li>
								<li>Técnicos e Auxiliares de Enfermagem</li>
							</ul>
						</a>
						<a href="projeto-terapeutico" style="margin-right:0;">
							<img src="img/novo_img4.jpg" class="full">
							<h3>ATIVIDADES</h3>
							<ul>
								<li>Academia</li>
								<li>Piscina</li>
								<li>Futebol</li>
								<li>Oficinas</li>
							</ul>
						</a>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="pagina index_pg">
				<a class="todos_os_diferenciais" href="especialidades"><img src="img/plus.png" width="11" height="11">conheça todos os nossos diferenciais</a>
				<div class="resgate_infos">
					<div class="box" style="float:none; margin-left:auto; margin-right:auto;">
						<img src="img/ambulancia.png" class="full">
						<h2>RESGATE 24H</h2>
						<p>Serviços de Resgate 24h sob consulta</p>
						<a href="especialidades">SAIBA MAIS</a>
					</div>
					<!--div class="box">
						<img src="img/mais_info.png" class="full">
						<h2>HORÁRIO DE VISITAS</h2>
						<p>
							Segunda a sexta-feira - 15h às 17h<br>
							Sábado - 13h às 17h<br>
							(2 pessoas de cada vez)<br><br>
							Consulte nosso manual para pacientes, familiares e visitantes.<br>
						</p>
						<a href="http://www.hospitalsantamonica.com.br/arquivos/Manual_Paciente.pdf">PACIENTES E VISITANTES</a>
					</div-->
					<div class="clear"></div>
				</div>
				<div class="tarja_cinza"></div>
				<div class="convenios">
					<h2>CONVÊNIOS</h2>
					<div class="setas">
						<i style="background-image:url(img/seta_esquerda.png);" id="convenios_seta_esquerda"></i><i style="background-image:url(img/seta_divisor.png);"></i><i style="background-image:url(img/seta_direita.png);" id="convenios_seta_direita"></i>
					</div>
					<a class="todos_os_planos" href="convenios"><img src="img/mais_planos.png" width="10" height="10">consulte todos os planos</a>
					<?php /* ?>
					<div class="convenios_overflow">
						<div class="convenios_container" id="convenios_container" style="left:0;width:<?php echo $container_width; ?>px;">
							<?php echo $convenios_boxes; ?>
							<div class="clear"></div>
						</div>
					</div> */?>
					<style type="text/css">
					#owl-demo .item{
					  margin: 3px !important;
					}
					#owl-demo .item img{
					  display: block !important;
					  width: 100% !important;
					  height: auto !important;
					}
					</style>
					<div id="owl-demo" style="padding:30px 0;">
  						<?php echo $convenios_boxes; ?>
					</div>
				</div>
				<div class="depoimentos" id="depoimentos">
					<div class="container">
						<h2>DEPOIMENTOS</h2>
						<span>"Agradeço todos os dias à Deus pela a recuperação do meu filho J. W. Jr. e em segundo lugar toda equipe do hospital que Deus abençoe todos conheci o carinho e dedicação de cada um..."</span>
						<!--span>- Nome ou Apelido, X anos.</span-->
						<a href="contato?assunto=Depoimentos">Deixe sua mensagem!</a>
					</div>
				</div>
				<div class="noticias" id="noticias">
					<h2>ÚLTIMAS NOTÍCIAS</h2>
					<a class="ver_todas" href="noticias"><img src="img/mais_planos.png" width="10" height="10">ver todas</a>
<?php

	if($ligamos_envia=='envia'){
		if($checa_ligamos=='Não escreva nada neste campo'){
					// -------- DigitallHub
						$apiURL = "https://www.digitallhub.com.br/api/v2/Leads/";
						$conversionGoal =  "Ligamos para Você";

						$name = $_POST['nome'];
						$email = $_POST['email'];
						$message = $_POST['mensagem'];
						$hubUtmz = $_POST['hubUtmz'];
						$phone = $_POST['tels'];

						$data["ClientKey"] = '5d124db94520251c394e94b42a6e3e0c';
						$data["teamKey"] = '3bf8aed906a83286e47d88326f82d4c0';
						$data["conversionGoal"] = $conversionGoal;

						$data["name"] = $name;
						$data["email"] = $email;
						$data["phone"] = $phone;
						$data["message"] = $message;
						$data["hubUtmz"] = $hubUtmz;

						$data = json_encode($data);

						$curl = curl_init();
						curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($curl, CURLOPT_URL, $apiURL);
						curl_setopt($curl, CURLOPT_HEADER, false);
						curl_setopt($curl, CURLOPT_POST, true);
						curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
						$result = json_decode(curl_exec($curl), true);
						curl_close($curl);
					// -------- DigitallHub

			$mail_remetente = "contato@hospitalsantamonica.com.br";

			$explodiu = explode("(((", $destino);
			$destino = $explodiu[0];
			$destino_txt = $explodiu[1];
			$datahora = date("d/m/y - H:i"); // 02/10/15 - 14:36
			$mail_assunto = "Solicitação de Contato";
			$sql= mysql_query ("INSERT INTO ligamos	(	id,	 nome,				ddd1,				tel1,				ddd2,				tel2,				horario,			 datahora, 		convenio	) VALUES
													(	'',	'$nome_ligamos',	'$ddd1_ligamos',	'$tel1_ligamos',	'$ddd2_ligamos',	'$tel2_ligamos',	'$horario_ligamos',	'$datahora',	'$convenio'	)") or print(mysql_error());

			$assunto = 'Solicitação de Contato do Site';
			$mail_headers = implode("\n", array("From: $mail_remetente", "Cco: alexandrebellizia@hospitalsantamonica.com.br", "Subject: $mail_assunto", "Return-Path: $mail_remetente", "Reply-To: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=utf-8;"));

			$destino = 'jetrojr@hotmail.com';

			mail($destino, $assunto, '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contato do Site</title>
		<style type="text/css">
			body{font:100%/0.7 Arial, Helvetica, sans-serif;color:#000000;margin:15px;margin-top:10px;padding:10px;line-height:20px;}
		</style>
	</head>
	<body>
		<font color="#000099" size="2">
			<strong>
				Solicitação de Contato do Site<br /><br />
			</strong>
		</font>
		<font size="2">
			Nome: '.$nome_ligamos.'
		</font>
		<br />
		<font size="2">
			Convênio: '.$convenio.'
		</font>
		<br />
		<font size="2">
			Telefone 1: ('.$ddd1_ligamos.') '.$tel1_ligamos.'
		</font>
		<br />
		<font size="2">
			Telefone 2: ('.$ddd2_ligamos.') '.$tel2_ligamos.'
		</font>
		<br />
		<font size="2">
			Melhor horário para ligar: '.$horario_ligamos.'
		</font>
		<br />
		<font size="1">
			Solicitação efetuada em: '.$datahora.'
		</font>
	</body>
</html>', $mail_headers);

			$contt = mysql_query("SELECT * FROM ligamos ORDER BY id DESC LIMIT 1") or print(mysql_error());
			while($conttB=mysql_fetch_array($contt)){
				$id_mensagem		=$conttB["id"];
			}

			echo "<script language='javaScript'>setTimeout(direciona('msg_enviada4?id_mensagem=".$id_mensagem."'), 4500);</script>";
			exit;
		}
	}

						$contt = mysql_query("SELECT * FROM noticias WHERE seg = 1 ORDER BY id DESC LIMIT 1") or print(mysql_error());
						while($conttB=mysql_fetch_array($contt)){
							$id_cli			=$conttB["id"];
							$titulo_not		=$conttB["titulo"];
							$url_not		='noticia/'.$conttB["url_amiga"];
							$imagem_not		=$conttB["imagem"];
							$data_not		=$conttB["data_noticia"];

							$data_not = explode('/', $data_not);
							$dia_not = $data_not[0];
							$mes_not = $data_not[1];
							$ano_not = explode('20', $data_not[2]);
					?>
					<div class="noticia psiquiatria">
						<a class="categoria psiquiatria" href="noticias/psiquiatria">PSIQUIATRIA<img src="img/plus_ve.png" width="11" height="11"></a>
						<div class="img" style="background-image:url(fotos/<?php echo $imagem_not; ?>)"></div>
						<span class="data">
							<b><?php echo $dia_not; ?></b><?php echo $mes_not.'|'.$ano_not[1]; ?>
						</span>
						<p>
							<?php echo mb_strimwidth($titulo_not, 0, 50); ?>
							<a class="psiquiatria" href="<?php echo $url_not; ?>">[+]</a>
						</p>
					</div>
			<?php
				}

				$contt = mysql_query("SELECT * FROM noticias WHERE seg = 3 ORDER BY id DESC LIMIT 1") or print(mysql_error());
				while($conttB=mysql_fetch_array($contt)){
					$id_cli			=$conttB["id"];
					$titulo_not		=$conttB["titulo"];
					$url_not		='noticia/'.$conttB["url_amiga"];
					$imagem_not		=$conttB["imagem"];
					$data_not		=$conttB["data_noticia"];

					$data_not = explode('/', $data_not);
					$dia_not = $data_not[0];
					$mes_not = $data_not[1];
					$ano_not = explode('20', $data_not[2]);
			?>
					<div class="noticia geriatria">
						<a class="categoria geriatria" href="noticias/geriatria">GERIATRIA<img src="img/plus_a.png" width="11" height="11"></a>
						<div class="img" style="background-image:url(fotos/<?php echo $imagem_not; ?>)"></div>
						<span class="data">
							<b><?php echo $dia_not; ?></b><?php echo $mes_not.'|'.$ano_not[1]; ?>
						</span>
						<p>
							<?php echo mb_strimwidth($titulo_not, 0, 40); ?>
							<a class="geriatria-retaguarda-clinica" href="<?php echo $url_not; ?>">[+]</a>
						</p>
					</div>
			<?php
				}

				$contt = mysql_query("SELECT * FROM noticias WHERE seg = 2 ORDER BY id DESC LIMIT 1") or print(mysql_error());
				while($conttB=mysql_fetch_array($contt)){
					$id_cli			=$conttB["id"];
					$titulo_not		=$conttB["titulo"];
					$url_not		='noticia/'.$conttB["url_amiga"];
					$imagem_not		=$conttB["imagem"];
					$data_not		=$conttB["data_noticia"];

					$data_not = explode('/', $data_not);
					$dia_not = $data_not[0];
					$mes_not = $data_not[1];
					$ano_not = explode('20', $data_not[2]);
			?>
					<div class="noticia dependencia">
						<a class="categoria dependencia" href="noticias/dependencia">DEPENDÊNCIA<img src="img/plus.png" width="11" height="11"></a>
						<div class="img" style="background-image:url(fotos/<?php echo $imagem_not; ?>)"></div>
						<span class="data">
							<b><?php echo $dia_not; ?></b><?php echo $mes_not.'|'.$ano_not[1]; ?>
						</span>
						<p>
							<?php echo mb_strimwidth($titulo_not, 0, 50); ?>
							<a class="dependencia-quimica" href="<?php echo $url_not; ?>">[+]</a>
						</p>
					</div>
			<?php
				}

				$contt = mysql_query("SELECT * FROM noticias WHERE seg = 4 ORDER BY id DESC LIMIT 1") or print(mysql_error());
				while($conttB=mysql_fetch_array($contt)){
					$id_cli			=$conttB["id"];
					$titulo_not		=$conttB["titulo"];
					$url_not		='noticia/'.$conttB["url_amiga"];
					$imagem_not		=$conttB["imagem"];
					$data_not		=$conttB["data_noticia"];

					$data_not = explode('/', $data_not);
					$dia_not = $data_not[0];
					$mes_not = $data_not[1];
					$ano_not = explode('20', $data_not[2]);
			?>
					<div class="noticia insitucional" style="margin-right:0;">
						<a class="categoria insitucional" href="noticias/institucional">INSTITUCIONAL<img src="img/plus_vc.png" width="11" height="11"></a>
						<div class="img" style="background-image:url(fotos/<?php echo $imagem_not; ?>)"></div>
						<span class="data">
							<b><?php echo $dia_not; ?></b><?php echo $mes_not.'|'.$ano_not[1]; ?>
						</span>
						<p>
							<?php echo mb_strimwidth($titulo_not, 0, 50); ?>
							<a class="insitucional" href="<?php echo $url_not; ?>">[+]</a>
						</p>
					</div>
			<?php
				}
			?>
					<div class="clear"></div>
				</div>
				<a href="https://www.facebook.com/SantaMonicaHospital" target="_blank" class="acompanhe_no_face">
					<img src="img/fb_like.png" width="21" height="19">
					Acompanhe no Facebook!
				</a>
			</div>
			<?php require_once "novo_rodape.php"; ?>
		</div>
<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="slick/slick.js"></script>
<script src="owl-carousel/owl.carousel.min.js"></script>
<script>

 var owl = $("#owl-demo");
  $("#owl-demo").owlCarousel({
 
      items : 8, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,5], // betweem 900px and 601px
      itemsTablet: [600,3], //2 items between 600 and 0
      itemsMobile : [400,3] // itemsMobile disabled - inherit from itemsTablet 
 
  });
  $("#convenios_seta_direita").bind('click',function(){
    owl.trigger('owl.next');
  })
  $("#convenios_seta_esquerda").bind('click',function(){
    owl.trigger('owl.prev');
  })

		$('#slideshow').slick({
			arrows: false,
			infinite: true,
			speed: 350,
			cssEase: 'cubic-bezier(1,.03,.44,.94)',
			autoplay: true,
			autoplaySpeed: 4500
		});

		sfHover = function(){
			var sfEls = document.getElementById("navbar").getElementsByTagName("li");
			for (var i=0; i<sfEls.length; i++){
				sfEls[i].onmouseover=function(){
					this.className+=" hover";
				}

				sfEls[i].onmouseout=function(){
					this.className=this.className.replace(new RegExp(" hover\\b"), "");
				}
			}
		}

		if(window.attachEvent){
			window.attachEvent("onload", sfHover);
		}
	</script>
		<script>
			var noticiasHeight = $('.depoimentos').height();
			var width = parseInt(<?php echo $container_width; ?>);

			$(document).ready(function(){
				$('.noticias').css('margin-top', [noticiasHeight+126]+'px');
			});
/*
			$('#convenios_seta_esquerda').click(function(e){
				$('#convenios_seta_direita').css('opacity', '1').css('cursor', 'pointer');
				var atualLeft = parseInt($('#convenios_container').css("left"));

				if(status==1){
					e.preventDefault();
				}else{
					status = 1;

					if(atualLeft+960>=0){
						$('#convenios_container').css('left', '0px');
						$('#convenios_seta_esquerda').css('opacity', '0.25').css('cursor', 'default');
					}else{
						$('#convenios_container').css('left', [atualLeft+960]+'px');
					}

					setTimeout(function(){status = 0;}, 250);
				}
			});

			$('#convenios_seta_direita').click(function(e){
				$('#convenios_seta_esquerda').css('opacity', '1').css('cursor', 'pointer');
				var maxLeft = (width-960)*-1;
				var atualLeft = parseInt($('#convenios_container').css("left"));

				if(status==1){
					e.preventDefault();
				}else{
					status = 1;

					if(atualLeft-960<=maxLeft){
						$('#convenios_container').css('left', maxLeft+'px');
						$('#convenios_seta_direita').css('opacity', '0.25').css('cursor', 'default');
					}else{
						$('#convenios_container').css('left', [atualLeft-960]+'px');
					}

					setTimeout(function(){status = 0;}, 250);
				}
			});*/
		</script>
	</body>
</html>