<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASTEC | Assessoria, Suporte e Tecnologia</title>
    <meta name="description" content="This is a basic starter template for MMPilot which includes Bootstrap Framework."/>
    <link href="styles/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,600,700" rel="stylesheet">
    

  


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <link rel="stylesheet" href="assets/css/linearicons-web-font.css" />
 

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  </head>
  <body id="top">


    <!-- ==================== Mensagem de email enviado com sucesso ====================== -->
       <?php 
          session_start();


          if ($_SESSION['sent'] == "success") {
            include 'modal.php';
          }elseif ($_SESSION['sent'] == "fail") {
            include 'modal.php';
          }

       ?>







    <header class="tf-header">
      <nav class="navbar py-5 navbar-dark">
        <div class="container">
          <h1><a class="navbar-brand" href="#"></a></h1>
          <div id="navbar">
            <ul class="nav pull-right">
              <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#work">Sistemas</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <!-- <div class="row">
          <div class="col-md-7 col-sm-12">
            <h2>Startup Landing Page<br/>for your Product &<br/> Services</h2>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-6 col-sm-12" id="textp">
            <p class="mt-4">Somos uma empresa especializada no desenvolvimento de sistemas, fornecendo suporte à gestão e à inovação de processos, atendendo e suprindo as necessidades dos nossos clientes.</p>
           <!--  <p class="mt-5"><strong class="text-uppercase">Try for Free</strong><span> - Just leave your e-mail below and we will get in touch</span></p> -->
          </div> 
        </div>
        <!-- <div class="row no-gutters">
          <div class="col-md-4 col-sm-12 tf-hh-col">
            <input class="mt-1 form-control" type="email" aria-describedby="emailHelp" placeholder="*Your Email Address">
          </div>
          <div class="col-md-3 col-sm-12">
            <p class="tf-header-heading-btn a btn btn-primary btn-block mt-1" href="#">Request Free Trial</p>
          </div>
        </div> -->
      </div> -->
    </header>
    <div class="page-content">
      <div>
<div class="tf-work-section">
  <div class="container" id="work">
    <h2 class="h3">Nossos Sistemas</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/2-start-simple.jpg" alt="2-start-simple"/>
          <div class="card-body">
            <p class="text-muted">O ASTEC - SisFrotas, com seus módulos aliados a um sistema de busca avançada, informatiza a gestão de frota de sua empresa, proporcionando eficiência e agilidade, possibilitando o real controle de sua frota.</p><!-- <a class="text-dark card-link" href="#">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/3-start-simple.jpg" alt="3-start-simple"/>
          <div class="card-body">
            <p class="text-muted">Sistemas Futuros.</p><!-- <a class="text-dark card-link" href="#">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/4-start-simple.jpg" alt="4-start-simple"/>
          <div class="card-body">
            <p class="text-muted">Sistemas Futuros.</p><!-- <a class="text-dark card-link" href="#">Learn More</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tf-quotes-section">
  <div class="container" id="valores">
    <h2 class="h3">Valores | Missão | Visão</h2>
  </div>
  <div class="carousel slide mt-5" id="tf-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="active" data-target="#tf-carousel" data-slide-to="0"></li>
      <li data-target="#tf-carousel" data-slide-to="1"></li>
      <li data-target="#tf-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('images/5-start-simple-slider.jpg');">
        <div class="carousel-caption">
          <p class="slider-text-2">Valores</p>
          <p class="slider-text-2">"Integridade, Valorização Pessoal, Transparência, Comprometimento, <br/>Inovação e Responsabilidade Social."</p>
          
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('images/6-start-simple-slider.jpg');">
        <div class="carousel-caption">
          <p class="slider-text-2">Missão</p>
           <p class="slider-text-2">"Oferecer soluções utilizando a Tecnologia da Informação com agilidade, comprometimento e responsabilidade, agregando valor e inovação ao negócio de nossos clientes, respeitando a sociedade e o meio ambiente."</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('images/7-start-simple-slider.jpg');">
        <div class="carousel-caption">
          <p class="slider-text-2">Visão</p>
          <p class="slider-text-2">"Se tornar uma grande e rentável empresa do setor de software, e referência nos nichos de atuação de seus produtos."</p>
        </div>
      </div>
    </div><a class="carousel-control-prev" href="#tf-carousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#tf-carousel" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
  </div>
</div>
<div class="tf-contact-section"> 
  <div class="container" id="contact">
    <h2 class="h4">Solicite uma visita!</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <form method="post" action="sendMail.php">
          <h3 class="h5">Contato</h3>
          <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 tf-contact-col">
              <input required class="bg-light form-control" name="nome" type="text" placeholder="*Nome"/>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pb-2">
              <input required class="bg-light form-control" name="email" type="email" id="inputEmail3" placeholder="*Seu email"/>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-2">
              <input required class="bg-light form-control" name="subject" type="text" id="inputSubject" placeholder="*Assunto"/>
            </div>
          </div>

          

          <div class="row pb-2 no-gutters">
            <div class="col-md-12 col-sm-12">
              <textarea required class="bg-light form-control mb-2 mb-sm-0" name="mensagem" cols="30" rows="5" type="text" id="inlineFormInput" placeholder="*Sua mensagem"></textarea>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
      </div>
      <div class="col-md-8 col-sm-12 float-right text-right">
        <h3 class="h5">Endereço</h3><span>Piquet Carneiro<br/>Ceará - Brasil</span>
        <p></p>
        <h3 class="h5">Telefone</h3>
        <p>+55 (88) 9.9707-5717</p>
        <h3 class="h5">Email</h3>
        <p>astectecnologiaip@gmail.com</p>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="bg-dark py-4 mt-5 tf-footer">
      <div class="container text-light">
        <div class="row">
          <div class="col-md-6 col-sm-12">&copy ASTEC | Assessoria, Suporte e Tecnologia. Todos os Direitos Reservados.</div>
          <div class="col-md-6 col-sm-12 text-right tf-design">Redes Sociais
            <a href="https://www.facebook.com/AstecTecnologia/" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp
            <a href="https://www.instagram.com/astectecnologia/" target="_blank"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>