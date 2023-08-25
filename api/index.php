<?php include 'header.php'; ?>

<!-- CONTEUDO -->
<main class="flex-shrink-0">
  <div class="container">
    <div class="row">
      <!-- MENU ESQUERDO -->
      <div class="col-3">
        <div id="menu-esquerdo" class="d-flex flex-column flex-shrink-0 p-3">
          <p class="text-center">É professor do Lúmina?</p>

          <!-- LOGIN -->
          <form id="form-login-esquerdo" method="get" action="/api/logado.php">
            <input type="email" placeholder="E-mail" class="">
            <input type="password" placeholder="Senha" class="">

            <div class="mb-2 mt-2 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Lembrar meus dados</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-1">Entrar</button>
          </form>
          <p id="esqueci-senha" class="w-100 text-center"><a href="#">Esqueci a senha</a></p>
          <!-- LOGIN -->

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

          <!-- MENU INTERVALO -->
          <p class="titulo texto-com-icone"><i class="icone icone-intervalo"></i> <strong>Intervalo</strong></p>
          <ul class="nav nav-pills flex-column mb-auto">
            <li> <a href="#" class="nav-link active">Todo o Período</a> </li>
            <li> <a href="#" class="nav-link">Primeiro Mês</a> </li>
            <li> <a href="#" class="nav-link">Última Semana</a> </li>
            <li> <a href="#" class="nav-link">Personalizado</a> </li>
          </ul>
          <!-- FIM MENU INTERVALO -->
        </div>
      </div>

      <!-- CONTEUDO DIREITO -->
      <div id="conteudo-direito" class="col-9">
        
        <!-- PRIMEIRO QUADRO -->
        <div class="row com-borda">
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h3><strong>Novos Usuários:</strong> <span class="numero-indicador">58</span></h3>
              <p>Esta Semana:</p>
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
                  <td>Brancos</td>
                  <td>55%</td>
                </tr>
                <tr>
                  <td>Pretos ou pardos</td>
                  <td>15%</td>
                </tr>
                <tr>
                  <td>Indígenas</td>
                  <td>10%</td>
                </tr>
                <tr>
                  <td>Outros</td>
                  <td>10%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-escolaridade"></i> <strong>Escolaridade</strong></p>
              <table>
                <tr>
                  <td>Básico</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Superior</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>Pós Graduação</td>
                  <td>5%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-faixa-etaria"></i> <strong>Faixa Etária</strong></p>
              <table>
                <tr>
                  <td>Menos de 20 anos</td>
                  <td>55%</td>
                </tr>
                <tr>
                  <td>Entre 21 e 30 anos</td>
                  <td>15%</td>
                </tr>
                <tr>
                  <td>Mais de 30 anos</td>
                  <td>30%</td>
                </tr>
              </table>
            </div>
          </div>
        </div><!-- FIM PRIMEIRO QUADRO -->

        <!-- SEGUNDO QUADRO -->
        <div class="row com-borda mt-3">
          <!-- PRIMEIRA LINHA - SUMÁRIO -->
          <div class="row">
            <div class="col-12">
              <h3><strong>Certificados Emitidos:</strong> <span class="numero-indicador">142</span></h3>
              <p>Esta Semana:</p>
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
                  <td>Brancos</td>
                  <td>55%</td>
                </tr>
                <tr>
                  <td>Pretos ou pardos</td>
                  <td>15%</td>
                </tr>
                <tr>
                  <td>Indígenas</td>
                  <td>10%</td>
                </tr>
                <tr>
                  <td>Outros</td>
                  <td>10%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-escolaridade"></i> <strong>Escolaridade</strong></p>
              <table>
                <tr>
                  <td>Básico</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Superior</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>Pós Graduação</td>
                  <td>5%</td>
                </tr>
              </table>
            </div>
            <div class="col-3">
              <p class="texto-com-icone"><i class="icone icone-faixa-etaria"></i> <strong>Faixa Etária</strong></p>
              <table>
                <tr>
                  <td>Menos de 20 anos</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>Entre 21 e 30 anos</td>
                  <td>20%</td>
                </tr>
                <tr>
                  <td>Mais de 30 anos</td>
                  <td>35%</td>
                </tr>
              </table>
            </div>
          </div>
        </div><!-- FIM SEGUNDO QUADRO -->

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

      </div>
  </div>
  </div>
</main>
<!-- FIM CONTEUDO -->

<?php include 'footer.php'; ?>