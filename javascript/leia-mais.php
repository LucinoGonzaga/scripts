<html>
<head>
	<title>Expandir e Retrair texto/ botão 'leia mais' com javascript</title>
	<style type="text/css">
		#mais {
			display: none;
		}
	</style>
	<script type="text/javascript">
		function leiaMais() {
			var pontos = document.getElementById("pontos");
			var maisTexto = document.getElementById("mais");
			var btnLeiaMais = document.getElementById("btnLeiaMais");

			if (pontos.style.display === "none") {
				pontos.style.display = "inline";
				maisTexto.style.display = "none";
				btnLeiaMais.innerHTML = "Leia mais";
			} else {
				pontos.style.display = "none";
				maisTexto.style.display = "inline";
				btnLeiaMais.innerHTML = "Leia Menos";
			}
		}
	</script>
</head>
<body>
	<div id="content">
		<p>Pulvinar elementum aliquam tempus donec convallis pellentesque aliquam nullam,
			aenean tempor cubilia integer cubilia congue nam dolor, leo potenti semper morbi arcu vehicula leo.
			iaculis ac etiam nec neque vivamus auctor sodales scelerisque quisque
			<span id="pontos">...</span>
		</p>
		<span id="mais">
			<p> Lorem ipsum sagittis aliquam dictumst potenti platea turpis morbi libero inceptos,
				vel molestie praesent inceptos enim himenaeos maecenas quisque mattis maecenas,
				posuere dui ultricies phasellus est aptent rutrum tincidunt nisi. turpis imperdiet nisi ut turpis proin ante faucibus fames,
				nisi elementum conubia class at sollicitudin sem, libero euismod fermentum rutrum lectus convallis maecenas.
				scelerisque sodales non ad vitae consectetur morbi urna ipsum, nulla tortor hendrerit suspendisse quis convallis velit rhoncus,
				quam euismod adipiscing ultricies conubia torquent orci. nostra sed justo iaculis leo platea metus proin volutpat,
				proin iaculis sollicitudin lectus nunc viverra commodo, leo vitae quis justo pharetra vehicula id. </p>

			<p>Nunc massa tellus, fringilla ut tincidunt consequat, ultricies eget nunc. </p>
		</span>
		<button onclick="leiaMais()" id="btnLeiaMais"> Leia Mais</button>
	</div>
</body>
</html>