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
            <li class="nav-item"> <a href="#" class="nav-link active2"><i class="icone icone-dados-plataforma"></i> Dados da Plataforma </a> </li>
            <li> <a href="ajuda.php" class="nav-link texto-com-icone"><i class="icone icone-ajuda"></i> Ajuda</a> </li>
            <li> <a href="equipe.php" class="nav-link texto-com-icone"><i class="icone icone-equipe"></i> Equipe</a> </li>
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

          <!-- MENU INTERVALO -->
          <p class="titulo texto-com-icone mb-0"><i class="icone icone-intervalo"></i> <strong>Intervalo</strong></p>
          <ul class="nav nav-pills flex-column">
            <li> <a href="#" class="nav-link ">Todo o Período</a> </li>
            <li> <a href="#" class="nav-link">Primeiro Mês</a> </li>
            <li> <a href="#" class="nav-link active">Última Semana</a> </li>
            <li> <a href="#" class="nav-link">Personalizado</a> </li>
          </ul>
          <!-- FIM MENU INTERVALO -->
        </div>
      </div>

      <!-- CONTEUDO DIREITO -->
      <div id="conteudo-direito" class="col-9">

        <!-- PRIMEIRO QUADRO - BOTOES -->
        <div class=" mb-3">
          <div class="row" style="padding: 0;margin: 0 -23px;">
          <div class="col-3">
              <a href="visao-geral.php" class="btn btn-outline-primary btn-sm w-100">Visão Geral</a>
            </div>
            <div class="col-3">
              <a href="#" class="btn btn-primary btn-sm w-100">Questionários</a>
            </div>
            <div class="col-3">
              <a href="foruns.php" class="btn btn-outline-primary btn-sm w-100">Interação nos Fóruns</a>
            </div>
            <div class="col-3">
              <a href="estatisticas.php" class="btn btn-outline-primary btn-sm w-100">Estatísticas</a>
            </div>
          </div>
        </div>

        <!-- SEGUNDO QUADRO -->
        <div class="row com-borda">
                    <div class="row">
            <div class="col-12">
              <h5><strong>Saúde Mental na Escola:</strong></h5>
              <p class="texto-com-icone mb-0"><i class="icone icone-redondo-azul"></i> Dados de "Saúde Mental na Escola</p>
            </div>
          </div>
        </div>
        <!-- FIM PRIMEIRO QUADRO -->

        <!-- TERCEIRO QUADRO -->
        <div class="row com-borda mt-3">
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h5 class="texto-com-icone"><i class="icone icone-livro"></i> <strong>Questionários:</strong></h5>
            </div>
            <div class="col-12">
              <table id="table-questionarios" class="table table-sm">
              <tr>
                    <td class="cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho"></i> Questionário 1 - Lorem Ipsum</p></td>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 2 - Lorem Ipsum</p></td>
                  </tr>
                  <tr>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 3 - Lorem Ipsum</p></td>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 4 - Lorem Ipsum</p></td>
                  </tr>
                  <tr>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 5 - Lorem Ipsum</p></td>
                    <td class="cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho"></i> Questionário 6 - Lorem Ipsum</p></td>
                  </tr>
                  <tr>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 7 - Lorem Ipsum</p></td>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 8 - Lorem Ipsum</p></td>
                  </tr>
                  <tr>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 9 - Lorem Ipsum</p></td>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Questionário 10 - Lorem Ipsum</p></td>
                  </tr>
              </table>
            </div>
          </div>

          <!-- SEGUNDA LINHA - TABELAS E TOTAIS -->
          <div class="row">

          </div>
        </div><!-- FIM TERCEIRO QUADRO -->

        <!-- QUADRO GRAFICO QUESTIONARIO 1 -->
        <div class="row com-borda mt-3 mb-3" >
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h6><strong>Questionário 1 - Lorem Ipsum</strong></h6>
            </div>
            <div class="col-4">
              <table class="table table-sm table-borderless">
                <tr>
                  <td>Questões</td>
                  <td>Dificulty</td>
                  <td>P(x=1|Z=0)</td>
                  <td>Discrimination</td>
                </tr>
                <tr>
                  <td>Q1</td>
                  <td>-0,35</td>
                  <td>0,76</td>
                  <td>-0,05</td>
                </tr>
                <tr>
                  <td>Q2</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>Q3</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>Q4</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>Q5</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
              </table>
            </div>
            <div class="col-8"></div>
          </div>
        </div><!-- FIM GRAFICO QUESTIONARIO 1 -->

        <!-- QUADRO GRAFICO QUESTIONARIO 2 -->
        <div class="row com-borda mt-3 mb-3" >
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h6><strong>Questionário 6 - Lorem Ipsum</strong></h6>
            </div>
            <div class="col-4">
              <table class="table table-sm table-borderless">
                  <tr>
                    <td>Questões</td>
                    <td>Dificulty</td>
                    <td>P(x=1|Z=0)</td>
                    <td>Discrimination</td>
                  </tr>
                  <tr>
                  <td>Q1</td>
                  <td>-0,35</td>
                  <td>0,76</td>
                  <td>-0,05</td>
                </tr>
                <tr>
                  <td>Q2</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>Q3</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>Q4</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>Q5</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                </table>
            </div>
            <div class="col-8"></div>
          </div>
        </div><!-- FIM GRAFICO QUESTIONARIO 2 -->   

      </div>
  </div>
  </div>
</main>
<!-- FIM CONTEUDO -->

<?php include 'footer.php'; ?>