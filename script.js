window.addEventListener('DOMContentLoaded', function(){

  var formIncluirCandidato = document.getElementById('incluir.php');
  if (formIncluirCandidato) {
    formIncluirCandidato.addEventListener('submit', function(event){
      event.preventDefault();
    incluirCandidato();
    
  });
}

var btnListarCandidatos = document.getElementById('btnListarCandidatos');
if (btnListarCandidatos) {
  btnListarCandidatos.addEventListener('click', function(){
    listarCandidatos();
  });
}

var formIncluirFiscal = document.getElementById('incluirfiscal.php');
if (formIncluirFiscal) {
  formIncluirFiscal.addEventListener('submit', function(event){
    event.preventDefault();
    incluirFiscal();
  });
}

var formAlterarSala = document.getElementById('alterarSala.php');
  if (formAlterarSala) {
    formAlterarSala.addEventListener('submit', function(event){
      event.preventDefault();
      alterarSala();
    
  });
  }
});

function incluirCandidato() {
  var nome = document.getElementById('nome-candidato').value;
  var cpf = document.getElementById('cpf-candidato').value;
  var identidade = document.getElementById('identidade-candidato').value;
  var email = document.getElementById('email-candidato').value;
  var cargo = document.getElementById('cargo-candidato').value;
  var sala-prova = document.getElementById('sala-prova-candidato').value;

  if (nome == '' || cpf == '' || identidade == '' || email == '' || cargo == '' || sala-prova == '') {
    alert('Por favor, preencha todos os campos.');
    return;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'incluir_candidato.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          alert(xhr.responseText);
          formInlcuirCandidato.reset();
        } else {
          alert ('Erro ao incluir o candidato.');
        }
      }
    };

    xhr.send(JSON.stringify(candidato));
  }

  function listarCandidatos() {
 var listarCandidatos = document.getElementById('lista-candidatos');
    listarCandidatos.innerHTML = '';

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'listar_candidatos.php', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200) {
          var candidatos = JSON.parse(xhr.responseText);

          for (var i = 0; i < candidatos.length; i++) {
            var candidato = candidatos[i];
            var item = document.createElement('p');
            item.textContent = 'nome: ' + candidato.nome + ', cpf: ' + candidato.cpf + ', Sala: ' + candidato.salaProva;
  listarCandidatos.appendChid(item);
          }
                  } else {
          alert('Erro ao listar os candidatos.');
        }
      }
    };
    xhr.send();
  }

  function incluirFiscal() {
    var nome = document.getElementById('nome-fiscal').value;
    var cpf = document.getElementById('cpf-fiscal').value;
    var salaProva = document.getElementById('sala-prova-fiscal').value;

    if (nome == '' || cpf == '' || salaProva == '') {
      alert('Por favor, preencha todos os campos.');
      return;
      
  }

    var fiscal ={
      nome: nome,
      cpf: cpf,
      salaProva: salaProva
    };

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'incluir_fiscal.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200) {
          alert(xhr.responseText);
          formIncluirFiscal.reset();
        } else {
          alert('Erro ao incluir o fiscal.');
        }
      }
    };
    xhr.send(JSON.stringify(fiscal));
  }

  function alterarSalaProva() {
    var cpf =document.get.ElementById('cpf-candidato-alterar').value;
    var novaSala = document.get.ElementById('nova-sala').value;

    if (cpf == '' || novaSala == '') {
      alert('Por favor, preencha todos os campos.');
      return;
  }
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'alterar_sala_prova.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
      if (xhr.status === 200) {
        alert(xhr.responseText);
        formAlterarSalaProva.reset();
      } else {
        alert('Erro ao alterar a sala de prova do candidato.');
      }
    }
  };
  xhr.send(JSON.stringify(alteracao));
}
        
