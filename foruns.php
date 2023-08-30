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
              <a href="questionarios.php" class="btn btn-outline-primary btn-sm w-100">Questionários</a>
            </div>
            <div class="col-3">
              <a href="#" class="btn btn-primary btn-sm w-100">Interação nos Fóruns</a>
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
              <p class="texto-com-icone mb-3"><i class="icone icone-redondo-azul"></i> Dados de "Saúde Mental na Escola</p>
              <p class="texto-com-icone mb-0"><i class="icone icone-redondo-verde"></i> Dados de Lúmina: <span class="filtro-selecionado">De 2019-05-05 a 2023-01-01</span> <span class="filtro-selecionado">Esta Semana</span></p>
            </div>
          </div>
        </div>
        <!-- FIM PRIMEIRO QUADRO -->

        <!-- TERCEIRO QUADRO -->
        <div class="row com-borda mt-3">
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h5 class="texto-com-icone"><i class="icone icone-livro"></i> <strong>Fóruns:</strong></h5>
            </div>
            <div class="col-12">
              <table id="table-questionarios" class="table table-sm">
                <tr>
                    <td class="cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho"></i> Fórum 1 - Lorem Ipsum</p></td>
                    <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Fórum 2 - Lorem Ipsum</p></td>
                </tr>
                <tr>
                   <td class="desativado cursor-pointer"><p class="texto-com-icone"><i class="icone icone-olho-riscado"></i> Fórum 3 - Lorem Ipsum</p></td>
                   <td></td>
                </tr>
              </table>
            </div>
          </div>

          <!-- SEGUNDA LINHA - TABELAS E TOTAIS -->
          <div class="row">

          </div>
        </div><!-- FIM TERCEIRO QUADRO -->

        <!-- QUADRO FÓRUM -->
        <div class="row com-borda mt-3 mb-3" >
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h6><strong>Questionário 6 - Lorem Ipsum</strong></h6>
            </div>
            <div class="col-8"></div>
            <div class="col-4">
              <table class="table table-sm table-borderless">
                  <tr>
                    <td>Fórum</td>
                    <td>Qtd Posts (n)</td>
                    <td>Média</td>
                    <td>Dev Pad</td>
                  </tr>
                  <tr>
                  <td>Lúmina</td>
                  <td>18 (média)</td>
                  <td>2,5</td>
                  <td>0,5</td>
                </tr>
                <tr>
                  <td>F1</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>F2</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                <tr>
                  <td>F3</td>
                  <td>-0,17</td>
                  <td>0,46</td>
                  <td>-1,16</td>
                </tr>
                </table>
            </div>
          </div>
        </div><!-- FIM FÓRUM -->   

      </div>
  </div>
  </div>
</main>
<!-- FIM CONTEUDO -->

<?php include 'footer.php'; ?>