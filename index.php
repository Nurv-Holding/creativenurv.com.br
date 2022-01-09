<!doctype html>
<html lang="pt-br">
<?php include 'head.php' ?>
<body>



  <header>

    <section>
      <section class="container mt-2">
       <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="https://i.imgur.com/2xvFKdA.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-left"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav">

           <li class="nav-item active">
            <a class="nav-link" href="index.php">Página Principal <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#sobre">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="marketing.php#marketing">Marketing Digital</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="business.php#business">Business Intelligence</a>
          </li>

        </ul>
      </div>
    </nav> 
  </section>


  <section class="container mt-10">
      <div class="row">
        <div class="col-md-7 mt-5">
          <p> Marketing Digital e Tecnologia</p>
          <h1 class="title">Creative Nurv</h1>
          <h2 class="sub-title-right col-md-8">Vamos fazer sua <br>
          empresa decolar</h2>
          <a href="index.php#contato"><button type="button" class="btn btn-yellow mt-5">Saiba mais</button></a>
        </div>
      </div>
    </section>

</section>

</header><!-- /header -->


<section id="sobre">
  <section class="container mt-5">
    <div class="row">
      <div class="col-md-6 mt-15">
        <h2 class="sub-title">Sobre nós</h2>
        <p>Somos uma agência de marketing digital especializada em
          branding, Inteligência artificial e franquias. 
        Tudo para seu negócio crescer</p>
        <a href="marketing.php#marketing"><button type="button" class="btn btn-yellow">Saiba mais</button></a>
      </div>
      <div class="col-md-6 mt-5">
        <img src="https://i.imgur.com/DcTkhdE.png"  class="img-a" width="500">
      </div>
    </div>
  </section>
</section>



<section>
  <section class="container">
    <div class="row">
      <div class="col-md-7 mt-10">
        <h2 class="sub-title">O que fazemos</h2>
      </div>
    </div>
    <div class="row">

      <div class="col-md-4 mt-5">
       <div class="card card-bs">
        <div class="card-body">
          <div>
            <center> <img src="src/img/coding.svg" width="120s"> </center>
          </div>
          <br>
          <h5 class="card-title text-center">Desenvolvimento Web</h5>
          <p class="card-text text-center mt-4">Criamos projetos de websites com fácil navegação e funcionalidade. Trabalhamos sempre para superar as expectativas de cada site entregue ao cliente.</p>
          <br>
          <center><a href="business.php#business"><button type="button" class="btn btn-yellow">Saiba mais</button></a></center>
        </div>
      </div>  
    </div>


    <div class="col-md-4 mt-5">
     <div class="card card-bs">
      <div class="card-body">
        <div>
          <center> <img src="src/img/marketing.svg" width="80"> </center>
        </div>
        <br>
        <h5 class="card-title text-center">Posicionamento nas 
        Redes Sociais</h5>
        <p class="card-text text-center mt-4">Te posicionamos nas redes sociais proporcionando uma melhor identidade visual, visando a experiência do usuário.</p>
        <br>
        <center><a href="marketing.php#marketing"><button type="button" class="btn btn-yellow">Saiba mais</button></a></center>
      </div>
    </div>  
  </div>
  <div class="col-md-4 mt-5">
   <div class="card card-bs">
    <div class="card-body">
      <div>
        <center> <img src="src/img/marketing.svg" width="80"> </center>
      </div>
      <br>
      <h5 class="card-title text-center">
      Tráfego Pago</h5>
      <p class="card-text text-center mt-4">Elaboração de estratégia de campanha assertiva e específica, bem como material de divulgação para plataforma de tráfego pago.</p>
      <br>
      <center><a href="marketing.php#marketing"><button type="button" class="btn btn-yellow">Saiba mais</button></a></center>
      <br>
    </div>
  </div>  
</div>


</div>
</section>



</section>

<section>
  <section class="container mt-5" id="contato">
    <div class="row">
      <div class="col-md-6 mt-15">
        <h2 class="sub-title">Entre em contato conosco</h2>
        <form class="mt-5" action="enviaemail.php" method="POST" >

          <div class="form-group">
            <input type="text" class="form_01"  placeholder="Nome" name="nome" required>
            <label class="form-label" for="nome"></label> 
          </div>

          <div class="form-group">
            <input type="text" class="form_01"  placeholder="Empresa" name="empresa" required>
            <label class="form-label" for="empresa"></label> 
          </div>

          <div class="form-group">
            <input type="text" class="form_01"  placeholder="DDD + Telefone" name="tel" id="inputFone"  required>
            <label class="form-label" for="tel"></label> 
          </div>

          <div class="form-group">
            <input type="email" class="form_01"  placeholder="Email" name="email" required>
            <label class="form-label" for="email"></label> 
          </div>

          <div class="form-group">
            <input type="text" class="form_01"  placeholder="Deescreva seu setor" name="setor" required>
            <label class="form-label" for="setor"></label> 
          </div>

          <div class="form-group">
            <textarea id="exampleFormControlTextarea1" rows="3" name="textarea" class="form_01" placeholder="Deescreva o motivo do contato"required></textarea>
            <label class="form-label" for="testarea"></label> 
          </div>

          <button class="btn btn-yellow" name="submit" type="submit" value="Enviar">Entrar em contato</button>

        </form>
      </div>
      <div class="col-md-6">
        <img src="src/img/contact.svg" class="img-a" style="margin-top:60%;" alt="img" width="500">
      </div>
    </div>
  </section>
</section>


<?php include 'footer.php'; ?>
</body>
</html>