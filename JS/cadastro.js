function cadastrar() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

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