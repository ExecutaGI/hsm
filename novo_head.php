<?php 
require_once "funcoes.php"; ?>
<meta charset="UTF-8">
<meta name="robots" content="All">
<meta property="og:type" content="website">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<link rel="canonical" href="http://www.hospitalsantamonica.com.br<?php echo $_SERVER["REQUEST_URI"]; ?>">
<link rel="stylesheet" href="geral.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2E3F57VUlAQ3sZlFsNitaQftV03KHsCV';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->


<script type="text/javascript">

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33169409-1', 'auto');
  ga('send', 'pageview');


</script>


<?php

	require_once "funcoes.php";



	function get_fb_likes($url){

		$query = "select share_count,like_count from link_stat where url='{$url}'";

		$call = "https://api.facebook.com/method/fql.query?query=".rawurlencode($query)."&format=json";



		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $call);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$output = curl_exec($ch);

		curl_close($ch);



		return json_decode($output);

	}



	$pagina_atual = $_SERVER['SCRIPT_NAME'];

?>