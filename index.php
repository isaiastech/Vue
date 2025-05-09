<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="./vue/vue.js"></script>
    <title>Vue JS</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>
<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Aprendento Vue-Js</span>
				</a>
				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="generic.html">Ipsum veroeros</a></li>
				<li><a href="generic.html">Tempus etiam</a></li>
				<li><a href="generic.html">Consequat dolor</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>

				</header>
				<section class="tiles">
					<article class="style1">
						<span class="image">
							<img src="images/pic01.jpg" alt="" />
						</span>
						<a href="views/instanciandoElemento.php">
							<h2>Instanciando Elemento</h2>
							<div class="content">
								<p>Instanciando Elemento.</p>
							</div>
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<img src="images/pic02.jpg" alt="" />
						</span>
						<a href="views/metodos.php">
							<h2>Métodos</h2>
							<div class="content">
								<p>Métodos</p>
							</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<img src="images/pic03.jpg" alt="" />
						</span>
						<a href="views/diretiva-vbind.php">
							<h2>Diretiva V-bind</h2>
							<div class="content">
								<p>Diretiva V-bind</p>
							</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<img src="images/pic04.jpg" alt="" />
						</span>
						<a href="views/diretivaV-On.php">
							<h2>Diretiva V-ON</h2>
							<div class="content">
								<p>Diretiva V-ON</p>
							</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="images/pic05.jpg" alt="" />
						</span>
						<a href="views/utilizandoDataBinding.php">
							<h2>Data Bind</h2>
							<div class="content">
								<p>Data Bind .</p>
							</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="images/pic06.jpg" alt="" />
						</span>
						<a href="views/handsOn.php">
							<h2>Hands ON</h2>
							<div class="content">
								<p>Hands ON.</p>
							</div>
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<img src="images/pic07.jpg" alt="" />
						</span>
						<a href="views/modificadores.php">
							<h2>Modificadores</h2>
							<div class="content">
								<p>Modificadores.</p>
							</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<img src="images/pic08.jpg" alt="" />
						</span>
						<a href="views/recuperandoAtributos.php">
							<h2>Recuperando Atributos</h2>
							<div class="content">
								<p>Recuperando Atributos </p>
							</div>
						</a>
					</article>
					<article class="style1">
						<span class="image">
							<img src="images/pic09.jpg" alt="" />
						</span>
						<a href="views/diretivaV-if.php">
							<h2>diretivaV-if</h2>
							<div class="content">
								<p>A diretiva v-if no Vue.js é usada para renderizar elementos condicionalmente. Quando a expressão associada a v-if é false, 
									o elemento não é apenas ocultado, mas completamente removido do DOM. 
									Se a expressão for true, o Vue adiciona o elemento ao DOM.
								</p>
							</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="images/pic10.jpg" alt="" />
						</span>
						<a href="views/diretivaV-show.php">
							<h2>diretivaV-show</h2>
							<div class="content">
								<p>A diretiva v-show no Vue.js é usada para mostrar ou ocultar um elemento com base em uma expressão booleana. 
									Diferente do v-if, que adiciona ou remove o elemento do DOM, o v-show 
									apenas altera o estilo display do elemento..</p>
							</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="images/pic11.jpg" alt="" />
						</span>
						<a href="views/injetandoHtml.php">
							<h2>Diretiva V-Html</h2>
							<div class="content">
								<p>Injetando elementos HTML</p>
							</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<img src="images/pic12.jpg" alt="" />
						</span>
						<a href="views/diretivaVOnce.php
">
							<h2>Diretiva-v once</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
				</section>
			</div>
		</div>

		<footer class="footer mt-auto py-3  text-center">
			<div class="container">
			  <span class="text-muted text-center"><?php echo "isaiasTech&copy;". date('Y')?></span>
			</div>
		  </footer>
		
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>