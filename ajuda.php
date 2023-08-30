<?php include 'header.php'; ?>

<!-- CONTEUDO -->
<main class="flex-shrink-0">
  <div class="container">
    <div class="row">
      <!-- MENU ESQUERDO -->
      <div class="col-3">
        <div id="menu-esquerdo" class="d-flex flex-column flex-shrink-0 p-3">

          <!-- VAI NO LUGAR DO FORM QUANDO LOGADO -->
          <div class="dropdown mb-3">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://sbcf.fr/wp-content/uploads/2018/03/sbcf-default-avatar.png" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Gabriela Perry</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" style="">
              <li><a class="dropdown-item" href="#">Acessar o Lúmina</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </div>
          <!-- FIM VAI NO LUGAR DO FORM QUANDO LOGADO -->

          <!-- MENU LINKS PADRAO -->
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"> <a href="visao-geral.php" class="nav-link "><i class="icone icone-dados-plataforma"></i> Dados da Plataforma </a> </li>
            <li> <a href="#" class="nav-link texto-com-icone active2"><i class="icone icone-ajuda"></i> Ajuda</a> </li>
            <li> <a href="equipe.php" class="nav-link texto-com-icone "><i class="icone icone-equipe"></i> Equipe</a> </li>
            <li> <a href="termos.php" class="nav-link texto-com-icone"><i class="icone icone-termos"></i> Termos de Uso</a> </li>
            <li> <a href="#" class="nav-link texto-com-icone"><i class="icone icone-politica"></i> Política de Privacidade</a> </li>
          </ul>
          <br>
          <!-- FIM MENU LINKS PADRAO -->

          <!-- MEUS CURSOS -->
          <p class="titulo texto-com-icone mb-0"><i class="icone icone-escolaridade"></i> <strong>Meus Cursos</strong></p>
          <ul class="nav nav-pills flex-column mb-3">
            <li> <a href="#" class="nav-link ">Saúde Mental na Escola</a> </li>
            <li> <a href="#" class="nav-link">Conceitos de Epidemiologia</a> </li>
            <li> <a href="#" class="nav-link active">Políticas de Equidade em Saúde</a> </li>
            <li> <a href="#" class="nav-link">Notificações de Violência</a> </li>
          </ul>
          <!-- FIM MEUS CURSOS -->
        </div>
      </div>

      <!-- CONTEUDO DIREITO -->
      <div id="conteudo-direito" class="col-9">
        <!-- QUADRO TITULO -->
        <div class="row com-borda mb-3">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center mb-0"><strong>Ajuda</strong></h5>
                </div>
          </div>
        </div>
        <!-- FIM QUADRO TITULO -->

        <!-- ACCORDION  -->            
        <div class="accordion" id="accordionAjuda">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                O que é LumiLab?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div><!-- FIM ACCORDION -->

      </div>
  </div>
  </div>
</main>
<!-- FIM CONTEUDO -->

<?php include 'footer.php'; ?>