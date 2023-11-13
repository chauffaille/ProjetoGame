function validarEmail(email) {
    // Expressão regular para validar o formato do e-mail
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validarSenha(senha, senha2) {
    return senha === senha2;
}

function cadastrar() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var senha2 = document.getElementById('senha2').value;

    // Validar o campo de e-mail
    if (!validarEmail(email)) {
        alert("E-mail inválido!");
        return;
    }

        // Validar as senhas
        if (!validarSenha(senha, senha2)) {
            alert("As senhas são diferentes");
            return;
        }

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/cadastrar.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status == 200) {
            alert(xhr.responseText);
            // Adicionar redirecionamento para outra página após o cadastro, se desejado.
        }
    };

    var data = 'nome=' + nome + '&email=' + email + '&senha=' + senha;
    xhr.send(data);
}