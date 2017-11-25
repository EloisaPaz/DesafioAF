<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Autoridade Fitness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><img src="img/icon.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">SOBRE</a></li>
        <li><a href="#services">SERVIÇOS</a></li>
        <li><a href="#portfolio">VÍDEOS</a></li>
        <li><a href="#pricing">ASSINE</a></li>
        <li><a href="#contact">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Autoridade Fitness</h1>
  <p>Perca peso de uma forma diferente. Não é dieta. É estratégia.</p>
</div>

<!-- Container (Sobre) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Sobre a estrategia autoridade fitness</h2>
      <h4>Dividimos a Estrategia AF em 5 fases:</h4>
      <p>- Etapa de iniciação: Onde você vai conhecer os 10 mandamentos da Estratégia AF e entender como dar o pontapé inicial da sua jornada em direção ao emagrecimento.<br>
        - Ponto de Partida: Momento de foco total para perder muito peso!<br>
        - Atingindo Seu Objetivo: Hora do "choque metabólico"!<br>
        - Modo Manutenção: Prepare-se para uma vida e um corpo saudáveis a longo prazo<br>
        - Felizes para: Xô Efeito Sanfona e bem-vindo a sua nova vida!</p>
    </div>
    <div class="row slideanim">
    <div class="col-sm-4">
      <iframe style="padding-right: 25px;" width="440" height="335" src="https://www.youtube.com/embed/AdlfNujAS6A" frameborder="0" gesture="media" allowfullscreen></iframe>
    </div>
  </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <iframe style="padding-right: 35px;" width="440" height="335" src="https://www.youtube.com/embed/YbQUsoKZJcA" frameborder="0" gesture="media" allowfullscreen></iframe>
    </div>
    <div class="col-sm-8">
      <h4>Você já tentou de todas as formas perder peso, certo? Dietas, dietas e mais dietas.<br>
          Lamentamos informar que nada disso funciona. Mas calma. Nem tudo está perdido. E a gente explica porquê.</h4>
      <p>Dietas muito restritivas diminuem a velocidade do seu metabolismo para economizar energia, diminuindo a queima de gordura.<br>
        Quando você termina essa dieta e volta a comer normalmente, seu organismo começa a acumular energia extra em forma de gordura, para aguentar o próximo período restritivo.<br>
        Com a Estratégia AF você não vai simplesmente comer menos, vai comer melhor. É tudo pensado para promover uma mudança na maneira como você se alimenta, muito mais que uma mudança de peso de curto prazo.</p>
    </div>
  </div>
</div>

<!-- Container (Serviços) -->
<div id="services" class="container-fluid text-center">
  <h2>O que nós oferecemos</h2>
  <h4>Além de aulas e vídeos exclusivos que vão te ajudar a entender o que está acontecendo no seu corpo enquanto você está trilhando a sua jornada AF, você ainda vai receber uma série de dicas práticas, por exemplo:</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <img src="img/suco.png">
      <h4>ALIMENTAÇÃO<br>
      Como se comportar no supermercado se você quer perder peso?</h4>
    </div>
    <div class="col-sm-6">
      <img src="img/comida.png">
      <h4>SOCIAL<br>
      E em situações sociais, como em restaurantes?</h4>
    </div>
    <div class="col-sm-6">
      <img src="img/peso.png">
      <h4>MOTIVAÇÃO<br>
      Como manter a motivação e não abandonar o caminho no meio?</h4>
    </div>
    <div class="col-sm-6">
      <img src="img/lista.png">
      <h4>ACOMPANHAMENTO<br>
      Como agir quando eu der uma escorregada? E como fazer para não escorregar mais?</h4>
    </div>
  </div>
  <br>
</div>

<!-- Container (Portfolio) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Confira nossos vídeos</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicações -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <iframe width="754" height="380" src="https://www.youtube.com/embed/JlbOiix5tEo" frameborder="0" gesture="media" allowfullscreen></iframe>
      </div>
      <div class="item">
        <iframe width="754" height="380" src="https://www.youtube.com/embed/O_9Sg0jCllk" frameborder="0" gesture="media" allowfullscreen></iframe>
      </div>
      <div class="item">
        <iframe width="754" height="380" src="https://www.youtube.com/embed/qq-wd35pEGg" frameborder="0" gesture="media" allowfullscreen></iframe>
      </div>
    </div>

    <!-- controles -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
  <h4>Para mais conteúdo como esse acesse nosso canal no <a href="https://www.youtube.com/channel/UC5oR1vo1LGgd-OEang8Aqtg/featured" target="_blank">Youtube</a>.</h4>
</div>

<!-- Container (Assine) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Assine</h2>
    <h4>Comece agora!</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pacote</h1>
        </div>
        <div class="panel-body text-justify">
          <ul>
          <li>Acesso total ao Espaço Autoridade Fitness</li>
          <li>Treinos do Xtreme 21 para queimar gordura com o professor Sergio Bertoluci</li>
          <li>Aulas do Prána Yoga com o professor Carlo Guaragna </li>
          <li> Treinos do Xtreme WKT para ganho de massa muscular com o professor Sergio Bertoluci </li>
          <li>Profissionais de saúde ao seu total dispor</li>
          <ul>
        </div>
        <div class="panel-footer">
          <h3>R$39,90</h3>
          <h4>Por mês</h4>
          <button class="btn btn-lg">Assine</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contato) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p><span class="glyphicon glyphicon-map-marker"></span> Porto Alegre, RS</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contato@autoridadefitness.com</p>
    </div>

    <?php
      if(isset($_SESSION['msg'])){
     ?>
      <h4>Sua mensagem foi enviada, agradecemos o seu contato!</h4>
      <?php
    }else {
       ?>
    <form method="post" id="contato" action="../controle/contatocontrole.php">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="txtnome" name="txtnome" placeholder="Nome" type="text" pattern="[a-zA-ZáÁéÉíÍóÓúÚçÇãõÃÕ]{2,20}" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="txtemail" name="txtemail" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="txtmensagem" name="txtmensagem" placeholder="Mensagem" rows="5" pattern="[a-zA-ZáÁéÉíÍóÓúÚçÇãõÃÕ]{2,500}"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" id="btnenviar" value="Enviar">Enviar</button>
        </div>
      </div>
    </div>
  </form>
    <?php
      }
     ?>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
