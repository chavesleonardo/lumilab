<?php include 'header.php'; ?>

<!-- CONTEUDO -->
<main class="flex-shrink-0">
  <div class="container">
    <div class="row">
      <!-- MENU ESQUERDO -->
      <div class="col-3">
        <div id="menu-esquerdo" class="d-flex flex-column flex-shrink-0 p-3">

          <!-- VAI NO LUGAR DO FORM QUANDO LOGADO -->
          <div class="mb-3">
            <img src="https://sbcf.fr/wp-content/uploads/2018/03/sbcf-default-avatar.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Gabriela Perry</strong>
          </div>
          <!-- FIM VAI NO LUGAR DO FORM QUANDO LOGADO -->

          <!-- MENU LINKS PADRAO -->
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"> <a href="#" class="nav-link active2"><i class="icone icone-dados-plataforma"></i> Dados da Plataforma </a> </li>
            <li> <a href="#" class="nav-link texto-com-icone"><i class="icone icone-ajuda"></i> Ajuda</a> </li>
            <li> <a href="#" class="nav-link texto-com-icone"><i class="icone icone-equipe"></i> Equipe</a> </li>
            <li> <a href="#" class="nav-link texto-com-icone"><i class="icone icone-termos"></i> Termos de Uso</a> </li>
            <li> <a href="#" class="nav-link texto-com-icone"><i class="icone icone-politica"></i> Política de Privacidade</a> </li>
          </ul>
          <br>
          <!-- FIM MENU LINKS PADRAO -->

          <!-- MEUS CURSOS -->
          <p class="titulo texto-com-icone mb-0"><i class="icone icone-intervalo"></i> <strong>Meus Cursos</strong></p>
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
              <a href="#" class="btn btn-primary btn-sm w-100">Visão Geral</a>
            </div>
            <div class="col-3">
              <a href="questionarios.php" class="btn btn-outline-primary btn-sm w-100">Questionários</a>
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
          
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h5><strong>Saúde Mental na Escola:</strong></h5>
              <p class="texto-com-icone"><i class="icone icone-redondo-azul"></i> Dados de "Saúde Mental na Escola</p>
              <p class="texto-com-icone mb-0"><i class="icone icone-redondo-verde"></i> Dados de Lúmina: <span class="filtro-selecionado">De 2019-05-05 a 2023-01-01</span></p>
            </div>
          </div>

        </div><!-- FIM PRIMEIRO QUADRO -->

        <!-- TERCEIRO QUADRO -->
        <div class="row com-borda mt-3">
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h5><strong>Inscritos:</strong></h5>
            </div>
          </div>

          <!-- SEGUNDA LINHA - TABELAS E TOTAIS -->
          <div class="row">
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-genero"></i> <strong>Gênero</strong></p>
              <table>
                <tr>
                  <td>Feminino</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Masculino</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>Outros</td>
                  <td>5%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-racial"></i> <strong>Identificação Racial</strong></p>
              <table>
                <tr>
                  <td>Feminino</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Masculino</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>Outros</td>
                  <td>5%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-escolaridade"></i> <strong>Escolaridade</strong></p>
              <table>
                <tr>
                  <td>Feminino</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Masculino</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>Outros</td>
                  <td>5%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-faixa-etaria"></i> <strong>Faixa Etária</strong></p>
              <table>
                <tr>
                  <td>Feminino</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Masculino</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>Outros</td>
                  <td>5%</td>
                </tr>
              </table>
            </div>
          </div>
        </div><!-- FIM TERCEIRO QUADRO -->

        <!-- UMA LINHA COM 2 QUADROS -->
        <div class="row mt-3 mb-3 contem-duas-colunas">
          
            <!-- TERCEIRO QUADRO -->
            <div class="col-6 com-borda">
              <h6><strong>Inscrições</strong></h6>
              <div id="chart-1" style="width: 100%; height: 350px;"></div>
            </div>
            <!-- QUARTO QUADRO -->
            <div class="col-6 com-borda">
              <h6><strong>Certificados</strong></h6>
              <div id="chart-2" style="width: 100%; height: 350px;"></div>
            </div>
        </div>

        <!-- OUTRA LINHA COM 2 QUADROS -->
        <div class="row mt-3 mb-3 contem-duas-colunas">
          
            <!-- TERCEIRO QUADRO -->
            <div class="col-6 com-borda">
              <h6><strong>Dias Ativos no Curso</strong></h6>
              <div id="bar1" style="width: 100%; height: 350px;"></div>
            </div>
            <!-- QUARTO QUADRO -->
            <div class="col-6 com-borda">
              <h6><strong>Dias para obter o certificado</strong></h6>
              <div id="bar2" style="width: 100%; height: 350px;"></div>
            </div>
        </div>

        <!-- ULTIMO QUADRO BARRAS LATERAIS -->
        <div class="row com-borda mt-3 mb-3" >
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
            <h6><strong>Atividades Concluídas</strong></h6>
              <div id="bar3" style="width: 100%; height: 350px;"></div>
            </div>
          </div>

        </div><!-- FIM ULTIMO QUADRO -->   

      </div>
  </div>
  </div>
</main>
<!-- FIM CONTEUDO -->

<?php include 'footer.php'; ?>