<div class="rodape">

	<h6 class="linha0">"Carinho e respeito pelo paciente são tão importantes quanto um medicamento de última geração" - Dr. Romolo Bellizia</h6>

	<div class="container">

		<div class="endereco">

			Estrada Santa Mônica (antiga Estrada Campestre), 864<br>

			São Paulo - SP - 06863-210<br>

			Fones: (11) 4668-7455 | 99667-7454

		</div>

		<div class="redes">

			<a class="facebook" target="_blank" href="http://www.facebook.com/SantaMonicaHospital"></a>

			<a class="twitter" target="_blank" href="http://www.twitter.com/H_SantaMonica"></a>

			<a class="gplus" target="_blank" href="http://plus.google.com/101766494730494115856"></a>

		</div>

		<div class="infos">

			<a href="como-chegar">Como Chegar</a> | <a href="trabalhe-conosco">Trabalhe Conosco</a>

			<form name="cadastre_se" id="cadastre_se" method="post" action="Home" enctype="multipart/form-data">

				<input type="email" placeholder="Cadastre-se" value="Cadastre-se" onclick="this.select();">

				<a href="javascript:void(0);" onclick="$('#cadastre_se').submit();"></a>

				<input type="submit">

			</form>

		</div>

		<a href="javascript:void(0);" onclick="showDiv('login');" id="adm_bt" ></a>

	</div>

</div>



<div class="div_oculta" id="login" style="display:none;">

	<div class="div_oculta_interna" id="login_div" style="padding:23px 16px 16px 16px;">

		<i class="icon-cancel close"></i>

		<form action="valid.php" id="login-form" method="post" enctype="multipart/form-data" style="padding-top:6px;">

			Usuário<br /><input tabindex="1" type="text" autocomplete="off" name="usua" style="height:32px;width:186px;margin:5px 0;" /><br /><br />

			Senha<br /><input tabindex="2" type="password" autocomplete="off" name="senh" style="height:32px;width:186px;margin:5px 0;" /><br /><br />

			<input type="submit" class="submit_bt_alt" style="width:100%;height:40px;cursor:pointer;" tabindex="3" value="Entrar" id="login-submit"/>

		</form>

	</div>

</div>
<script async src="js/geral.js"></script>