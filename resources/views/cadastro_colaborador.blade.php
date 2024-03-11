<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro colaborador</title>
    <link rel="stylesheet" href="cadastro colaborador.css">

</head>
<body>

    <form action="??????" method="post">
    <h1>Cadastro colaborador</h1>
    <div class="container">
        <div class="form-container">
          <h2>Dados pessoais</h2>
          <div class="form-column">
            <div class="form-row">
              <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
            </div>
            <div class="form-row">
              <input type="text" id="cpf" name="cpf" placeholder="CPF" required>
            </div>
            <div class="form-row">
              <input type="text" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento" required>
            </div>
            <div class="form-row">
              <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>
          </div>
        </div>

        <div class="form-container">
          <h2>Dados empregatícios</h2>
          <div class="form-column">
            <div class="form-row">
              <input type="text" id="data_contratacao" name="data_contratacao" placeholder="Data de contratação" required>
            </div>
            <div class="form-row">
              <input type="text" id="salario_inicial" name="salario_inicial" placeholder="Salário inicial" required>
            </div>
            <div class="form-row">
              <input type="text" id="local_trabalho" name="local_trabalho" placeholder="Local de trabalho" required>
            </div>
            <div class="form-row">
              <input type="file" id="anexo" name="anexo" placeholder="Anexo">
            </div>
          </div>
        </div>

      </div>

      <div class="button-container">
        <button id="finalizar-btn" type="submit" style="background-color: green;">Finalizar</button>
        <button id="adicionar-btn" type="button" onclick="adicionar()" style="background-color: blue;">Adicionar</button>
        <button id="excluir-btn" type="button" onclick="excluir()" style="background-color: red;">Excluir</button>
    </div>


    </form>

</body>
</html>
