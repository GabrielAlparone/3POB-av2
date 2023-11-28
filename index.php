<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>controle de entregas</title>
  </head>
  <body>
    <h1>Controle de Entregas </h1>
    <h2>Incluir Candidatos</h2>
    <form id="form-incluir-candidato">
      <label for"nome-candidato">Nome:</label>
      <input type="text" id="nome-candidato" required><br>
      
      <label for="cpf-candidato">CPF:</label>
      <input type="text" id="cpf-candidato" required><br>

      <label for="identidade-candidato">Identidade:</label>
      <input type="text" id="identidade-candidato" required><br>

      <label for="email-candidato">Email:</label>
      <input type="text" id="email-candidato" required><br>

      <label for="cargo-candidato">Cargo pretendido:</label>
      <input type="text" id="cargo-candidato" required><br>

      <label for="sala-prova-candidato">Sala de Prova:</label>
      <input type="text" id="sala-prova-candidato" required><br>

      <button type="submit">Imcluir Candidato</button>
    </form>

    <h2>Listar Candidatos</h2>
    <button id="bt-listar-candidatos"       onclick="listarCandidatos()">Listar Candidatos</button>
    <div id="lista-candidatos"></div>

    <h2>Incluir Fiscal de Prova</h2>
    <form id="form-incluir-fiscal">
      <label for="nome-fiscal">Nome:</label>
      <input type="text" id="nome-fiscal" required><br>

      <label for="cpf-fiscal">CPF:</label>
      <input type="text" id="cpf-fiscal" required><br>

      <label for="sala-prova-fiscal">Sala de prova:</label> 
      <input tupe="text" id="sala-prova-fiscal" required><br>

  <button type="submit">Incluir Fiscal de Prova</button>
  </form>

<h2>Alterar Sala de Prova de um candidato</h2>
  <form id="form-alterar-sala">
    <label for="cpf-candidato-alterar">CPF do candidato:</label>
    <input type="text" id="cpf-candidato-alterar" required><br>

    <label for="nova-sala">Nova Sala de prova:</label>
    <input type="text" id="nova-sala" required><br>

    <button type="submit">Alterar Sala</button>
  </form>
</body>
</html>
