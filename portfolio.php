<?php
require_once dirname(__FILE__)."/admin/funcoes.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Izanderson Florencio - @izanf</title>
    <meta name="description" content="Web developer, programmer, photographer, engineering student and entrepreneur."/>
    <meta name="author" content="Izanderson Florencio"/>
    <meta name="copyright" content="izanf.com © 2016 Todos os Direitos Reservados"/>
    <meta name="application-name" content="izanf.com"/>
    <link rel="icon" type="image/png" href="imgs/favicon.png" sizes="32x32">

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
  <header class="pagesHeader">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/home"><img src="imgs/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Inicio</a></li>
            <li class="active"><a href="/portfolio">Portfólio</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="slider pagesHead" data-stellar-background-ratio="0.7">
      <div class="container">
        <h1>Portfólio</h1>
        <h4>Conheça alguns dos principais trabalhos já realizados.</h4>
      </div>
    </section>
  </header>
  <main class="pagesMain">
    <div class="container-fluid animated fadeIn">
      <div class="row">
        <nav class="navbar-portfolio">
          <ul>
            <li><a onClick="filtro(0);">Tudo</a></li>
            <li><a onClick="filtro(1);">Layout</a></li>
            <li><a onClick="filtro(2);">Front-end</a></li>
            <li><a onClick="filtro(3);">Back-end</a></li>
          </ul>
        </nav>
        <?php
        $portfolio = new PortfolioDAO();
        $portfolio = $portfolio->selecionar("id, titulo, subtitulo, tecnologias, link, imagem", $portfolio->tabela, '');
        foreach($portfolio as $result) {
          echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hoverzoom 1">';
          echo "<img src=\"".$result['imagem']."\">";
          echo "<div class=\"retina\">";
          echo "<h1>".$result['titulo']."</h1>";
          echo "<h2>".$result['subtitulo']."</h2>";
          echo "<h3>".$result['tecnologias']."</h3>";
          echo "<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Visualizar\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>";
          echo "<a href=\"".$result['link']."\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Acessar\"><i class=\"fa fa-laptop\" aria-hidden=\"true\"></i></a>";
          echo "</div>";
          echo "</div>";
          }
        ?>
      </div>
    </div>
  </main>
  <footer>
    <div class="container-fluid footer-top">
      <div class="container">
        <div class="col-md-4 footer-contato">
          <img src="imgs/logo-footer.png">
          <address>
            Av. Comunidade em Ação, 321<br>
            Natal-RN/Brasil, 59131-515<br>
            <abbr title="Phone">Cel:</abbr> (84) 99197-0112
          </address>
          <address>
            <strong>Izanderson G. H. Florencio</strong><br>
            <a href="mailto:izandersonf@gmail.com">izandersonf@gmail.com</a>
          </address>
        </div>
        <hr></hr>
        <div class="col-md-4 footer-blog">
          <h4>Últimas do blog</h4>
          <ul>
            <a href="#"><li>Noticia</li></a>
            <a href="#"><li>Noticia</li></a>
            <a href="#"><li>Noticia</li></a>
            <a href="#"><li>Noticia</li></a>
            <a href="#"><li>Noticia</li></a>
            <a href="#"><li>Noticia</li></a>
            <a href="#"><li>Noticia</li></a>
          </ul>
        </div>
        <hr></hr>
        <div class="col-md-4 footer-sitemap">
          <h4>Menu rápido</h4>
          <ul>
            <a href="/home"><li>Inicio</li></a>
            <a href="/portfolio"><li>Portfólio</li></a>
            <a href="/blog"><li>Blog</li></a>
            <a href="/contato"><li>Contato</li></a>
          </ul>
        </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer-bottom">
      <div class="container">
        <div class="col-md-8 col-xs-8 col-md-offset-2">
          <p>izanf.com &reg Todos os direitos reservados &copy Copyright 2016</p>
        </div>
        <div class="col-md-2 col-xs-4">
          <a href="https://www.linkedin.com/in/izanderson-florencio-a54b10104" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Linkedin"></i></a>
          <a href="https://www.github.com/izanf" target="_blank"><i class="fa fa-github-square" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Github"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/typed.min.js"></script>
  <script src="js/stellar.min.js"></script>
  <script src="js/pace.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
